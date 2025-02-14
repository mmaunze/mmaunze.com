<!doctype html>

<html lang="PT" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
  data-assets-path="../../../assets/" data-template="front-pages" data-style="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title> Xicola - Sistema de Gestão Escolar Completo | Meldo Maúnze - Aquele gajo da Informática</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../../../assets/img/favicon/favicon.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="../../../assets/vendor/fonts/remixicon/remixicon.css" />

  <!-- Menu waves for no-customizer fix -->
  <link rel="stylesheet" href="../../../assets/vendor/libs/node-waves/node-waves.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../../../assets/css/demo.css" />
  <link rel="stylesheet" href="../../../assets/vendor/css/pages/front-page.css" />

  <link rel="stylesheet" href="../../../assets/vendor/libs/nouislider/nouislider.css" />
  <link rel="stylesheet" href="../../../assets/vendor/libs/swiper/swiper.css" />
  <link rel="stylesheet" href="../../../assets/vendor/css/pages/front-page-landing.css" />
  <script src="../../../assets/vendor/js/helpers.js"></script>
  <script src="../../../assets/vendor/js/template-customizer.js"></script>
  <script src="../../../assets/js/front-config.js"></script>
</head>

<body>
  <script src="../../../assets/vendor/js/dropdown-hover.js"></script>
  <script src="../../../assets/vendor/js/mega-dropdown.js"></script>

  <!-- Navbar: Start -->
  <nav class="layout-navbar container shadow-none py-0">
    <div class="navbar navbar-expand-lg landing-navbar border-top-0 px-4 px-md-8">

      <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-6">

        <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="tf-icons ri-menu-fill ri-24px align-middle"></i>
        </button>

        <a href="/" class="app-brand-link">

          <span class="app-brand-text demo menu-text fw-semibold ms-2 ps-1">Meldo Maúnze</span>
        </a>
      </div>
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
          <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="tf-icons ri-close-fill"></i>
          </button>
          <ul class="navbar-nav me-auto p-4 p-lg-0">
            <li class="nav-item">
              <a class="nav-link fw-medium" aria-current="page" href="/">Página Inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" href="pages/sobre">Sobre Mim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" href="pages/projectos">Projectos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" href="pages/servicos">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium text-nowrap" href="pages/bog">Blog/Ideias</a>
            </li>

            <li class="nav-item">
              <a class="nav-link fw-medium" href="pages/contacto">Contacto</a>
            </li>
          </ul>
        </div>
        <div class="landing-menu-overlay d-lg-none"></div>
        <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
          <a class="nav-link btn btn-text-secondary square-pill btn-icon dropdown-toggle hide-arrow me-sm-4"
            href="javascript:void(0);" data-bs-toggle="dropdown">
            <i class="ri-22px text-heading"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                <span class="align-middle"><i class="ri-computer-line ri-22px me-3"></i>Sistema</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                <span class="align-middle"><i class="ri-sun-line ri-22px me-3"></i>Claro</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                <span class="align-middle"><i class="ri-moon-clear-line ri-22px me-3"></i>Escuro</span>
              </a>
            </li>

          </ul>
        </li>

        <li>
          <a href="https://www.mmaunze.com/assets/Meldo%20Leonardo%20Maúnze%20-%20%20CV.pdf" class="btn btn-primary px-2 px-sm-4 px-lg-2 px-xl-4"
            target="_blank"><span class="tf-icons ri-download-2-line me-md-1"></span><span class="d-none d-md-block">Meu
              CV</span></a>
        </li>

      </ul>

    </div>
  </nav>


  <div data-bs-spy="scroll" class="scrollspy-example">
    <section class="section-py first-section-pt">
      <?php include '../components/cover.php' ?>
      <div class="container">

        <div class="row gy-6 gy-lg-0">
          <!-- Breadcrumb -->
          <div class="col-lg-12 mb-3">


            <div class="container mt-4">

              <h3 class="card-title text-center text-primary mb-4">Sistema de Gestão Escolar -Xicola</h3>
              <p class="card-text">
                Este projeto é composto por uma API desenvolvida em <strong>Spring Boot</strong> e um frontend em <strong>Vue.js</strong> para o Sistema de Gestão Escolar, projetado para gerenciar todos os aspectos da administração escolar de forma eficiente. A API serve como o backend robusto que gerencia usuários, matrícula de alunos, turmas, currículos, finanças, biblioteca e mais, enquanto o frontend proporciona uma interface amigável para os usuários finais.
              </p>

            </div>
            <hr class="my-6" />

            <div class="container mt-4">
              <h3 class="mt-4 text-secondary">Tecnologias Utilizadas</h3>
              <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <strong>Spring Boot -> </strong>
                      <span class="badge bg-primary square-pill">Framework principal para a API</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <strong>JPA/Hibernate -> </strong>
                      <span class="badge bg-secondary square-pill">Gerenciamento de base de dados</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <strong>Spring Security -> </strong>
                      <span class="badge bg-success square-pill">Autenticação e autorização</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <strong>JWT -> </strong>
                      <span class="badge bg-danger square-pill">Gerenciamento de tokens de segurança</span>
                    </li>
                  </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <strong>PostgreSQL -> </strong>
                      <span class="badge bg-info square-pill">Base de dados relacional</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <strong>Maven -> </strong>
                      <span class="badge bg-warning square-pill">Gerenciamento de dependências</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <strong>Swagger -> </strong>
                      <span class="badge bg-light text-dark square-pill">Documentação da API</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <strong>Vue.js -> </strong>
                      <span class="badge bg-dark text-light square-pill">Framework principal para o frontend</span>
                    </li>
                  </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <strong>Vue Router -> </strong>
                      <span class="badge bg-primary square-pill">Gerenciamento de rotas no frontend</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <strong>Vuex -> </strong>
                      <span class="badge bg-secondary square-pill">Gerenciamento de estado</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <strong>Axios -> </strong>
                      <span class="badge bg-info square-pill">Requisições HTTP entre frontend e backend</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <strong>Vuetify -> </strong>
                      <span class="badge bg-success square-pill">Framework de componentes para UI</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="container mt-4">
              <h3 class="mt-4 text-secondary">Funcionalidades</h3>
              <!-- Funcionalidades Listadas -->
              <div class="row">
                <!-- Gestão de Usuários -->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Gestão de Usuários</h5>
                      <p class="card-text text-justify">Cadastro, autenticação e gerenciamento de permissões para administradores, professores, alunos e responsáveis.</p>
                      <div class="text-center">
                        <img src="../../../assets/img/portfolio/xicola/loading.png" alt="Gestão de Usuários" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="setImage('../../../assets/img/portfolio/xicola/loading.png')">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Gestão Acadêmica -->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Gestão Acadêmica</h5>
                      <p class="card-text text-justify">Gestão de matrículas, transferências, turmas e eventos acadêmicos.</p>
                      <div class="text-center">
                        <img src="../../../assets/img/portfolio/xicola/loading.png" alt="Gestão Acadêmica" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="setImage('../../../assets/img/portfolio/xicola/loading.png')">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Gestão Financeira -->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Gestão Financeira</h5>
                      <p class="card-text text-justify">Controle de mensalidades, pagamentos e emissão de boletos.</p>
                      <div class="text-center">
                        <img src="../../../assets/img/portfolio/xicola/alunos.png" alt="Gestão Financeira" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="setImage('../../../assets/img/portfolio/xicola/loading.png')">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Biblioteca -->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Biblioteca</h5>
                      <p class="card-text text-justify">Cadastro e gestão de livros, empréstimos, devoluções e multas por atraso.</p>
                      <div class="text-center">
                        <img src="../../../assets/img/portfolio/xicola/loading.png" alt="Biblioteca" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="setImage('../../../assets/img/portfolio/xicola/loading.png')">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Infraestrutura e Manutenção -->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Infraestrutura e Manutenção</h5>
                      <p class="card-text text-justify">Gestão de patrimônio escolar, solicitações de manutenção e controle de inventário de materiais.</p>
                      <div class="text-center">
                        <img src="../../../assets/img/portfolio/xicola/loading.png" alt="Infraestrutura e Manutenção" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="setImage('../../../assets/img/portfolio/xicola/loading.png')">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Comunicação -->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="card mb-4">
                    <div class="card-body">
                      <h5 class="card-title">Comunicação</h5>
                      <p class="card-text text-justify">Envio de mensagens internas, notificações automáticas e manuais para eventos, notas e faltas.</p>
                      <div class="text-center">
                        <img src="../../../assets/img/portfolio/xicola/loading.png" alt="Comunicação" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="setImage('../../../assets/img/portfolio/xicola/loading.png')">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Outras funcionalidades podem ser adicionadas aqui seguindo o mesmo padrão -->

              </div>
              <!-- Modal para Exibição de Imagem em Tela Cheia -->
              <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="imageModalLabel">Imagem em Tela Cheia</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <img id="modalImage" src="" alt="Imagem" class="img-fluid w-100">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <hr class="my-6" />

          <div class="container mt-4">
            <h5 class="text-center text-primary">Screenshots</h5>
            <div id="screenshotCarousel" class="carousel slide shadow-lg rounded" data-bs-ride="carousel">

              <!-- Indicadores -->
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#screenshotCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#screenshotCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#screenshotCarousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#screenshotCarousel" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#screenshotCarousel" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#screenshotCarousel" data-bs-slide-to="5"></button>
                <button type="button" data-bs-target="#screenshotCarousel" data-bs-slide-to="6"></button>
                <button type="button" data-bs-target="#screenshotCarousel" data-bs-slide-to="7"></button>
              </div>

              <!-- Slides -->
              <div class="carousel-inner rounded">
                <div class="carousel-item active">
                  <img src="../../../assets/img/portfolio/xicola/loading.png" class="d-block w-100 img-fluid rounded" alt="Screenshot 1" onclick="openLightbox(this.src)">
                </div>
                <div class="carousel-item">
                  <img src="../../../assets/img/portfolio/xicola/alunos.png" class="d-block w-100 img-fluid rounded" alt="Screenshot 2" onclick="openLightbox(this.src)">
                </div>
                <div class="carousel-item">
                  <img src="../../../assets/img/portfolio/xicola/detalhes_aluno.png" class="d-block w-100 img-fluid rounded" alt="Screenshot 3" onclick="openLightbox(this.src)">
                </div>
                <div class="carousel-item">
                  <img src="../../../assets/img/portfolio/xicola/formularios_academicos.png" class="d-block w-100 img-fluid rounded" alt="Screenshot 4" onclick="openLightbox(this.src)">
                </div>
                <div class="carousel-item">
                  <img src="../../../assets/img/portfolio/xicola/formularios_pagamento.png" class="d-block w-100 img-fluid rounded" alt="Screenshot 5" onclick="openLightbox(this.src)">
                </div>
                <div class="carousel-item">
                  <img src="../../../assets/img/portfolio/xicola/pagamentos.png" class="d-block w-100 img-fluid rounded" alt="Screenshot 6" onclick="openLightbox(this.src)">
                </div>
                <div class="carousel-item">
                  <img src="../../../assets/img/portfolio/xicola/portal_aluno.png" class="d-block w-100 img-fluid rounded" alt="Screenshot 7" onclick="openLightbox(this.src)">
                </div>
                <div class="carousel-item">
                  <img src="../../../assets/img/portfolio/xicola/turmas.png" class="d-block w-100 img-fluid rounded" alt="Screenshot 8" onclick="openLightbox(this.src)">
                </div>
              </div>

              <!-- Controles do Carrossel -->
              <button class="carousel-control-prev" type="button" data-bs-target="#screenshotCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#screenshotCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
              </button>
            </div>
          </div>

          <!-- Modal Lightbox -->
          <div id="lightboxModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Visualização</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                  <img id="lightboxImage" src="" class="img-fluid rounded">
                </div>
              </div>
            </div>
          </div>

          <!-- Script para abrir o Lightbox -->
          <script>
            function openLightbox(src) {
              document.getElementById("lightboxImage").src = src;
              new bootstrap.Modal(document.getElementById("lightboxModal")).show();
            }
          </script>



        </div>

      </div>


    </section>


  </div>
  <?php include '../../../pages/layout/footer.php' ?>
  <script src="../../../assets/vendor/libs/popper/popper.js"></script>
  <script src="../../../assets/vendor/js/bootstrap.js"></script>
  <script src="../../../assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="../../../assets/vendor/libs/nouislider/nouislider.js"></script>
  <script src="../../../assets/vendor/libs/swiper/swiper.js"></script>
  <script src="../../../assets/js/front-main.js"></script>
  <script src="../../../assets/js/front-page-landing.js"></script>
</body>

</html>