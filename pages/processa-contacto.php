<?php
/**
 * Processa envio do formulário de contacto
 * Usa a classe Mailer do mail-config.php
 */

require_once __DIR__ . '/../config/bootstrap.php';

header('Content-Type: application/json');

// Verifica se é POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método não permitido']);
    exit;
}

// Validação básica
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

$erros = [];

if (empty($nome)) {
    $erros[] = 'Nome é obrigatório';
}

if (empty($email)) {
    $erros[] = 'Email válido é obrigatório';
}

if (empty($assunto)) {
    $erros[] = 'Assunto é obrigatório';
}

if (empty($mensagem)) {
    $erros[] = 'Mensagem é obrigatória';
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

// Protecção básica contra spam (honeypot)
$honeypot = filter_input(INPUT_POST, 'website', FILTER_SANITIZE_STRING);
if (!empty($honeypot)) {
    // Fingir sucesso mas não enviar
    echo json_encode([
        'success' => true,
        'message' => 'Mensagem enviada com sucesso!'
    ]);
    exit;
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
            .header { background: #2563eb; color: white; padding: 20px; text-align: center; }
            .content { background: #f9fafb; padding: 30px; border: 1px solid #e5e7eb; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #4b5563; }
            .value { margin-top: 5px; padding: 10px; background: white; border-left: 3px solid #2563eb; }
            .footer { text-align: center; padding: 20px; color: #6b7280; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Nova Mensagem de Contacto</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <div class='label'>Nome:</div>
                    <div class='value'>" . htmlspecialchars($nome) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Email:</div>
                    <div class='value'>" . htmlspecialchars($email) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Assunto:</div>
                    <div class='value'>" . htmlspecialchars($assunto) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Mensagem:</div>
                    <div class='value'>" . nl2br(htmlspecialchars($mensagem)) . "</div>
                </div>
            </div>
            <div class='footer'>
                <p>Mensagem recebida através do formulário de contacto em mmaunze.com</p>
                <p>Data: " . date('d/m/Y H:i:s') . "</p>
            </div>
        </div>
    </body>
    </html>
    ";

    // Envia email
    $enviado = Mailer::create()
        ->to(env('SMTP_FROM_EMAIL')) // Envia para ti mesmo
        ->replyTo($email, $nome) // Reply-to do remetente
        ->subject("Contacto: {$assunto}")
        ->body($htmlBody)
        ->send();

    if ($enviado) {
        // Opcionalmente, gravar na base de dados
        try {
            Database::query(
                "INSERT INTO contactos (nome, email, assunto, mensagem, data_envio) 
                 VALUES (?, ?, ?, ?, NOW())",
                [$nome, $email, $assunto, $mensagem]
            );
        } catch (Exception $e) {
            error_log("Erro ao gravar contacto na BD: " . $e->getMessage());
            // Não falhar o processo se a BD falhar
        }

        echo json_encode([
            'success' => true,
            'message' => 'Mensagem enviada com sucesso! Entrarei em contacto em breve.'
        ]);
    } else {
        throw new Exception('Falha ao enviar email');
    }

} catch (Exception $e) {
    error_log('Erro no formulário de contacto: ' . $e->getMessage());
    
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Erro ao enviar mensagem. Tente novamente mais tarde ou contacte directamente por email.'
    ]);
}
