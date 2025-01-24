<?php
// Configuração da conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = 'Pa$$w0rd';
$dbname = "conversu";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Função para buscar todos os artigos
function buscarTodosArtigos($conn) {
    $sql = "SELECT artigo.*, utilizador.nome AS autor_nome 
            FROM artigo 
            INNER JOIN utilizador ON artigo.autor = utilizador.id";
    $result = $conn->query($sql);
    $artigos = $result->fetch_all(MYSQLI_ASSOC);

    // Formatar a data para português
    foreach ($artigos as &$artigo) {
        $artigo['data_publicacao'] = date('d/M/Y', strtotime($artigo['data_publicacao']));
    }

    return $artigos;
}

// Função para buscar todas as categorias
function buscarCategorias($conn) {
    $sql = "SELECT c.*, COUNT(a.id) AS total_artigos 
            FROM categoria c 
            LEFT JOIN artigo a ON c.id_categoria = a.id_categoria
            GROUP BY c.id_categoria";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}


// Buscar dados
$artigos = buscarTodosArtigos($conn);
$categorias = buscarCategorias($conn);

// Fechar conexão
$conn->close();
?>
