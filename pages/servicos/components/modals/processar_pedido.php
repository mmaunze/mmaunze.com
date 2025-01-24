<?php
// Conexão com o banco de dados
$servername = "localhost"; // Host do banco de dados
$username = "u555788673_dba_mmaunze"; // Usuário do banco de dados
$password = "Maunze@mmaunze.com@Meld0"; // Senha do banco de dados
$dbname = "u555788673_db_mmaunzecom"; // Nome do banco de dados




// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificando se o formulário foi enviado via AJAX
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebendo os dados enviados
    $nome_cliente = $conn->real_escape_string($_POST['nome_cliente']);
    $email_cliente = $conn->real_escape_string($_POST['email_cliente']);
    $telefone_cliente = $conn->real_escape_string($_POST['telefone_cliente']);
    $nome_website = $conn->real_escape_string($_POST['nome_website']);
    $tipo_website = $conn->real_escape_string($_POST['tipo_website']);
    $dominio = $conn->real_escape_string($_POST['dominio']);
    $cms = $conn->real_escape_string($_POST['cms']);
    $email_custom = $conn->real_escape_string($_POST['email_custom']);
    $funcionalidades = $conn->real_escape_string($_POST['funcionalidades']);
    $descricao = $conn->real_escape_string($_POST['descricao']);
    $prazo = $conn->real_escape_string($_POST['prazo']);
    $layout = $conn->real_escape_string($_POST['layout']);
    $cores = $conn->real_escape_string($_POST['cores']);

    // Inserir dados no banco de dados
    $sql = "INSERT INTO pedidos (nome_cliente, email_cliente, telefone_cliente, nome_website, tipo_website, dominio, cms, email_custom, funcionalidades, descricao, prazo, layout, cores) 
            VALUES ('$nome_cliente', '$email_cliente', '$telefone_cliente', '$nome_website', '$tipo_website', '$dominio', '$cms', '$email_custom', '$funcionalidades', '$descricao', '$prazo', '$layout', '$cores')";

    if ($conn->query($sql) === TRUE) {
        // Retornar uma resposta de sucesso
        echo json_encode(["status" => "success", "message" => "Pedido submetido com sucesso!"]);
    } else {
        // Retornar uma resposta de erro
        echo json_encode(["status" => "error", "message" => "Erro ao submeter o pedido: " . $conn->error]);
    }

    // Fechar a conexão
    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "Método de requisição inválido."]);
}
