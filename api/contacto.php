<?php
/**
 * API: Processa formulário de contacto
 * POST /api/contacto.php
 */

require_once __DIR__ . '/../config/bootstrap.php';

header('Content-Type: application/json');

// Verifica método
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método não permitido']);
    exit;
}

// Sanitização e validação
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_SPECIAL_CHARS);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);

$erros = [];

if (empty($nome) || strlen($nome) < 2) {
    $erros[] = 'Nome é obrigatório (mínimo 2 caracteres)';
}

if (empty($email)) {
    $erros[] = 'Email válido é obrigatório';
}

if (empty($assunto)) {
    $erros[] = 'Assunto é obrigatório';
}

if (empty($mensagem) || strlen($mensagem) < 10) {
    $erros[] = 'Mensagem é obrigatória (mínimo 10 caracteres)';
}

if (!empty($erros)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Erro de validação',
        'errors' => $erros
    ]);
    exit;
}

// Honeypot anti-spam
$honeypot = $_POST['website'] ?? '';
if (!empty($honeypot)) {
    // Fingimos que enviou com sucesso para enganar bots
    echo json_encode([
        'success' => true,
        'message' => 'Mensagem enviada com sucesso!'
    ]);
    exit;
}

// Rate limiting simples (IP)
$ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$cacheDir = ROOT_PATH . '/cache';
$cacheFile = $cacheDir . '/rate_limit_' . md5($ip) . '.txt';

if (!is_dir($cacheDir)) {
    mkdir($cacheDir, 0755, true);
}

if (file_exists($cacheFile)) {
    $lastSubmit = (int)file_get_contents($cacheFile);
    if (time() - $lastSubmit < 60) { // 1 minuto de intervalo
        http_response_code(429);
        echo json_encode([
            'success' => false,
            'message' => 'Aguarde um minuto antes de enviar outra mensagem'
        ]);
        exit;
    }
}

try {
    // Template do email
    $htmlBody = "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #2563eb; color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0; }
            .content { background: #f9fafb; padding: 30px; border: 1px solid #e5e7eb; }
            .field { margin-bottom: 20px; }
            .label { font-weight: bold; color: #4b5563; margin-bottom: 5px; }
            .value { padding: 12px; background: white; border-left: 3px solid #2563eb; border-radius: 4px; }
            .footer { text-align: center; padding: 20px; color: #6b7280; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2 style='margin:0'>Nova Mensagem de Contacto</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <div class='label'>Nome:</div>
                    <div class='value'>" . htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Email:</div>
                    <div class='value'>" . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Assunto:</div>
                    <div class='value'>" . htmlspecialchars($assunto, ENT_QUOTES, 'UTF-8') . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Mensagem:</div>
                    <div class='value'>" . nl2br(htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8')) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>IP:</div>
                    <div class='value'>" . htmlspecialchars($ip, ENT_QUOTES, 'UTF-8') . "</div>
                </div>
            </div>
            <div class='footer'>
                <p>Mensagem recebida via mmaunze.com</p>
                <p>Data: " . date('d/m/Y H:i:s') . "</p>
            </div>
        </div>
    </body>
    </html>
    ";

    // Envia email
    // Usamos CONTACT_RECEIVER do .env ou o próprio remetente como padrão
    $receiver = env('CONTACT_RECEIVER', env('SMTP_FROM_EMAIL'));
    
    $enviado = Mailer::create()
        ->to($receiver)
        ->replyTo($email, $nome)
        ->subject("Contacto: {$assunto}")
        ->body($htmlBody)
        ->send();

    if ($enviado) {
        // Grava timestamp para rate limit
        file_put_contents($cacheFile, time());
        
        // Grava na BD
        try {
            Database::query(
                "INSERT INTO contactos (nome, email, assunto, mensagem, ip_address, data_envio) 
                 VALUES (?, ?, ?, ?, ?, NOW())",
                [$nome, $email, $assunto, $mensagem, $ip]
            );
        } catch (Exception $dbError) {
            // Apenas logamos o erro da BD para não impedir o sucesso do email
            error_log("Erro ao gravar contacto na BD: " . $dbError->getMessage());
        }

        echo json_encode([
            'success' => true,
            'message' => 'Mensagem enviada com sucesso! Entrarei em contacto em breve.'
        ]);
    } else {
        throw new Exception('O serviço de email falhou ao processar o envio.');
    }

} catch (Exception $e) {
    error_log('Erro no formulário de contacto: ' . $e->getMessage());
    
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Erro ao enviar mensagem. Tente novamente mais tarde.'
    ]);
}
