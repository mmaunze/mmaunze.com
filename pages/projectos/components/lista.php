<?php
$servername = "localhost";
$username = "u555788673_dba_mmaunze";
$password = "Maunze@mmaunze.com@Meld0";
$dbname = "u555788673_db_mmaunzecom";


// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Função para buscar todos os websites
function buscarWebsites($conn)
{
    $sql = "SELECT projecto.*, tipo_projecto.descricao AS tipo_projecto 
            FROM projecto 
            INNER JOIN tipo_projecto ON projecto.tipo_projecto = tipo_projecto.id
            where projecto.tipo_projecto = (SELECT id FROM tipo_projecto WHERE descricao = 'website')";

    $result = $conn->query($sql);
    $websites = $result->fetch_all(MYSQLI_ASSOC);

    // Formatar a data para português
    foreach ($websites as &$website) {
        $website['inicio'] = date('d/M/Y', strtotime($website['inicio']));
    }

    return $websites;
}

function buscarSistemas($conn)
{
    $sql = "SELECT projecto.*, tipo_projecto.descricao AS tipo_projecto 
            FROM projecto 
            INNER JOIN tipo_projecto ON projecto.tipo_projecto = tipo_projecto.id
            where projecto.tipo_projecto = (SELECT id FROM tipo_projecto WHERE descricao = 'sistema')";

    $result = $conn->query($sql);
    $sistemas = $result->fetch_all(MYSQLI_ASSOC);

    // Formatar a data para português
    foreach ($sistemas as &$sistema) {
        $sistema['inicio'] = date('d/M/Y', strtotime($sistema['inicio']));
    }

    return $sistemas;
}

function buscarCategorias($conn)
{
    $sql = "SELECT tp.*, COUNT(tp.id) AS total_projectos 
            FROM tipo_projecto tp 
            LEFT JOIN projecto p ON p.tipo_projecto = tp.id
            GROUP BY tp.id";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Buscar dados
$websites = buscarWebsites($conn);
$sistemas = buscarSistemas($conn);
$total_projectos = buscarCategorias($conn);

// Fechar conexão
$conn->close();
?>


<section class="section-py bg-body">
    <div class="container">
        <h4 class="text-center mb-6">Portfolio</h4>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row g-6">
                    <div class="col-md-6 col-ms-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm flex-shrink-0 me-2">
                                        <span class="avatar-initial bg-label-info rounded-3"><i class="tf-icons ri-globe-line ri-20px"></i></span>
                                    </div>
                                    <h5 class="mb-0 ms-1">Websites</h5>
                                </div>
                                <ul class="list-unstyled my-6">
                                    <?php foreach ($websites as $website) : ?>
                                        <li class="mb-2">
                                            <a
                                                href="help-center-article.html"
                                                class="text-heading d-flex justify-content-between align-items-center">
                                                <span class="text-truncate me-1"><?= $website['titulo'] ?> </span>
                                                <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <p class="mb-0 fw-medium mt-6">
                                    <a href="help-center-article.html" class="d-flex text-info align-items-center">
                                        <span class="me-3">Ver todos websites</span>
                                        <i class="tf-icons ri-arrow-right-line scaleX-n1-rtl"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-ms-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm flex-shrink-0 me-2">
                                        <span class="avatar-initial bg-label-info rounded-3"><i class="tf-icons ri-question-line ri-20px"></i></span>
                                    </div>
                                    <h5 class="mb-0 ms-1">Sistemas</h5>
                                </div>
                                <ul class="list-unstyled my-6">
                                    <?php foreach ($sistemas as $sistema) : ?>
                                        <li class="mb-2">
                                            <a
                                                href="sistemas/xicola"
                                                class="text-heading d-flex justify-content-between align-items-center">
                                                <span class="text-truncate me-1"><?= $sistema['titulo'] ?> </span>
                                                <i class="tf-icons ri-arrow-right-s-line ri-20px scaleX-n1-rtl text-muted"></i>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <p class="mb-0 fw-medium mt-6">
                                    <a href="help-center-article.html" class="d-flex text-info align-items-center">
                                        <span class="me-3">Ver todos Sistemas</span>
                                        <i class="tf-icons ri-arrow-right-line scaleX-n1-rtl"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>