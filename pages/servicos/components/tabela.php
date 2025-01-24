<?php
require_once '../../backend/config/ConexaoMySQL.php';

// Criar conexão
$conn = new ConexaoMySQL();

$conn->conectar();

// Função para buscar todos os artigos
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

// Fechar conexão
$conn->fecharConexao();
?>

<section class="section-py pricing-plans-comparison">
    <div class="container">
        <div class="col-12 text-center mb-6">
            <h4 class="mb-2">Confira Esta Tabela de Precos para Servicos de Rede</h4>
            <p>Cada preco se destina a um equipamento , existe um desconto para mais equipamentos</p>
        </div>
        <div class="table-responsive border rounded-4">
            <table class="table table-striped text-center mb-0">
                <thead>
                    <tr>
                        <th scope="col">
                            <p class="mb-0">Servico</p>
                        </th>
                        <th scope="col">
                            <p class="mb-1">Singuar</p>

                        </th>
                        <th scope="col">
                            <div
                                class="d-flex d-flex justify-content-center align-items-center">
                                <p class="mb-0 me-1">Empresa Publica</p>

                            </div>

                        </th>
                        <th scope="col">
                            <p class="mb-1">Empresa Privada</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($servicos as $servico) : ?>
                        <tr>
                            <td class="text-heading"><?= $servico['descricao'] ?></td>
                            <td>
                                <?= $servico['preco_singular'] ?>
                            </td>
                            <td>
                                <?= $servico['preco_empresa_pubica'] ?>
                            </td>
                            <td>
                                <?= $servico['preco_empresa_privada'] ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>