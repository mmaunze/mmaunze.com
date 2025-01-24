<?php
// Definindo parâmetros de conexão
$servername = "localhost";  // Ou o endereço do servidor de banco de dados
$username = "u555788673_dba_mmaunze";  // Seu nome de usuário do banco de dados
$password = "Maunze@mmaunze.com@Meld0";    // Sua senha do banco de dados
$dbname = "u555788673_db_mmaunzecom";  // Nome do banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Função para buscar todos os serviços
function buscarServicos($conn)
{
    $sql = "SELECT servico.*, tipo_servico.descricao AS tipo_servico 
            FROM servico 
            INNER JOIN tipo_servico ON servico.tipo_servico = tipo_servico.id";

    $result = $conn->query($sql);
    $servicos = $result->fetch_all(MYSQLI_ASSOC);

    return $servicos;
}

$servicos = buscarServicos($conn);

// Fechar a conexão
$conn->close();
?>

<section class="section-py pricing-plans-comparison">
    <div class="container">
        <div class="col-12 text-center mb-6">
            <h4 class="mb-2">Confira Esta Tabela de Preços para Serviços de Rede</h4>
            <p>Cada preço se destina a um equipamento, existe um desconto para mais equipamentos.</p>
        </div>
        <div class="table-responsive border rounded-4">
            <table class="table table-striped text-center mb-0">
                <thead>
                    <tr>
                        <th scope="col"><p class="mb-0">Serviço</p></th>
                        <th scope="col"><p class="mb-1">Singular</p></th>
                        <th scope="col">
                            <div class="d-flex justify-content-center align-items-center">
                                <p class="mb-0 me-1">Empresa Pública</p>
                            </div>
                        </th>
                        <th scope="col"><p class="mb-1">Empresa Privada</p></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($servicos as $servico) : ?>
                        <tr>
                            <td class="text-heading"><?= $servico['descricao'] ?></td>
                            <td><?= $servico['preco_singular'] ?></td>
                            <td><?= $servico['preco_empresa_pubica'] ?></td>
                            <td><?= $servico['preco_empresa_privada'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
