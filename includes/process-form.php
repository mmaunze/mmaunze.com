<?php
// ============================================
// PROCESSAR FORMULÁRIO DE CONTACTO
// ============================================

header('Content-Type: application/json');

// Validar método de requisição
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método não permitido']);
    exit;
}

// Obter dados do formulário
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Validação básica
$errors = [];

if (empty($name)) {
    $errors[] = 'Nome é obrigatório';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email válido é obrigatório';
}

if (empty($message)) {
    $errors[] = 'Mensagem é obrigatória';
}

// Se há erros, retornar
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => implode(', ', $errors)]);
    exit;
}

// Sanitizar dados
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Preparar email
$recipient = 'meldo@mmaunze.com';
$subject_email = 'Nova Mensagem de Contacto: ' . $subject;
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$body = "
<html>
<head>
    <title>Nova Mensagem de Contacto</title>
</head>
<body>
    <h2>Nova Mensagem de Contacto</h2>
    <p><strong>Nome:</strong> {$name}</p>
    <p><strong>Email:</strong> {$email}</p>
    <p><strong>Telefone:</strong> {$phone}</p>
    <p><strong>Assunto:</strong> {$subject}</p>
    <p><strong>Mensagem:</strong></p>
    <p>{$message}</p>
</body>
</html>
";

// Enviar email
if (mail($recipient, $subject_email, $body, $headers)) {
    // Enviar confirmação ao utilizador
    $confirmation_subject = 'Confirmação de Recebimento - Meldo Maúnze';
    $confirmation_body = "
    <html>
    <head>
        <title>Confirmação de Recebimento</title>
    </head>
    <body>
        <h2>Obrigado por Contactar!</h2>
        <p>Olá {$name},</p>
        <p>Recebemos sua mensagem e entraremos em contacto em breve.</p>
        <p>Atenciosamente,<br>Meldo Maúnze</p>
    </body>
    </html>
    ";
    
    $confirmation_headers = "From: meldo@mmaunze.com\r\n";
    $confirmation_headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    mail($email, $confirmation_subject, $confirmation_body, $confirmation_headers);
    
    http_response_code(200);
    echo json_encode(['success' => true, 'message' => 'Mensagem enviada com sucesso!']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Erro ao enviar mensagem. Tente novamente.']);
}

?>
