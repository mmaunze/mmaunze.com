<!DOCTYPE html>

<html
  lang="PT"
  class="light-style layout-navbar-fixed layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../../assets/"
  data-template="front-pages"
  data-style="light"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>
  Xicola - Sistema de Gestão Escolar Completo | Meldo Maúnze - Aquele gajo da Informática
    </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link
      rel="icon"
      type="image/x-icon"
      href="../../../assets/img/favicon/favicon.png"
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="../../../assets/vendor/fonts/remixicon/remixicon.css"
    />

    <!-- Menu waves for no-customizer fix -->
    <link
      rel="stylesheet"
      href="../../../assets/vendor/libs/node-waves/node-waves.css"
    />

    <!-- Core CSS -->
    <link
      rel="stylesheet"
      href="../../../assets/vendor/css/rtl/core.css"
      class="template-customizer-core-css"
    />
    <link
      rel="stylesheet"
      href="../../../assets/vendor/css/rtl/theme-default.css"
      class="template-customizer-theme-css"
    />
    <link rel="stylesheet" href="../../../assets/css/demo.css" />
    <link
      rel="stylesheet"
      href="../../../assets/vendor/css/pages/front-page.css"
    />
    <!-- Vendors CSS -->

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../../assets/vendor/js/template-customizer.js"></script>
  
    <script src="../../../assets/js/front-config.js"></script>
  </head>

  <body>
    <script src="../../../assets/vendor/js/dropdown-hover.js"></script>
    <script src="../../../assets/vendor/js/mega-dropdown.js"></script>

    <!-- Navbar: Start -->
    <nav class="layout-navbar container shadow-none py-0">
      <div
        class="navbar navbar-expand-lg landing-navbar border-top-0 px-4 px-md-8"
      >
        <!-- Menu logo wrapper: Start -->
        <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-6">
          <!-- Mobile menu toggle: Start-->
          <button
            class="navbar-toggler border-0 px-0 me-2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="tf-icons ri-menu-fill ri-24px align-middle"></i>
          </button>
          <!-- Mobile menu toggle: End-->
          <a href="/" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-semibold ms-2 ps-1"
              >Meldo Maúnze</span
            >
          </a>
        </div>
        <!-- Menu logo wrapper: End -->

        <!-- Toolbar: Start -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
          <!-- Menu wrapper: Start -->
          <div
            class="collapse navbar-collapse landing-nav-menu"
            id="navbarSupportedContent"
          >
            <button
              class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="tf-icons ri-close-fill"></i>
            </button>
            <ul class="navbar-nav me-auto p-4 p-lg-0">
              <li class="nav-item">
                <a class="nav-link fw-medium" aria-current="page" href="/"
                  >Página Inicial</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="../../sobre">Sobre Mim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="../../projectos">Projectos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="../../servicos">Serviços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium text-nowrap" href="../../bog"
                  >Blog/Ideias</a
                >
              </li>

              <li class="nav-item">
                <a class="nav-link fw-medium" href="../../contacto" target="_blank"
                  >Contacto</a
                >
              </li>
            </ul>
          </div>
          <div class="landing-menu-overlay d-lg-none"></div>
          <!-- Menu wrapper: End -->
          <!-- Style Switcher -->
          <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
            <a
              class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow me-sm-4"
              href="javascript:void(0);"
              data-bs-toggle="dropdown"
            >
              <i class="ri-22px text-heading"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
              <li>
                <a
                  class="dropdown-item"
                  href="javascript:void(0);"
                  data-theme="light"
                >
                  <span class="align-middle"
                    ><i class="ri-sun-line ri-22px me-3"></i>Claro</span
                  >
                </a>
              </li>
              <li>
                <a
                  class="dropdown-item"
                  href="javascript:void(0);"
                  data-theme="dark"
                >
                  <span class="align-middle"
                    ><i class="ri-moon-clear-line ri-22px me-3"></i>Escuro</span
                  >
                </a>
              </li>
              <li>
                <a
                  class="dropdown-item"
                  href="javascript:void(0);"
                  data-theme="system"
                >
                  <span class="align-middle"
                    ><i class="ri-computer-line ri-22px me-3"></i>Sistema</span
                  >
                </a>
              </li>
            </ul>
          </li>
          <!-- / Style Switcher-->

          <!-- navbar button: Start -->
          <li>
            <a
              href="https://www.mmaunze.com/assets/Meldo%20Leonardo%20Maúnze%20-%20%20CV.pdf"
              class="btn btn-info px-2 px-sm-4 px-lg-2 px-xl-4"
              target="_blank"
              ><span class="tf-icons ri-download-2-line me-md-1"></span
              ><span class="d-none d-md-block">Meu CV</span></a
            >
          </li>
          <!-- navbar button: End -->
        </ul>
        <!-- Toolbar: End -->
      </div>
    </nav>
    <!-- Navbar: End -->

    <!-- Sections:Start -->

    <section class="section-py first-section-pt">
  <div class="container">
    <div class="row gy-6 gy-lg-0">
      <!-- Breadcrumb -->
      <div class="col-lg-12 mb-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-2 row-gap-1">
            <li class="breadcrumb-item">
              <a href="javascript:void(0);">Sistema de Gestão Escolar</a>
            </li>
            <li class="breadcrumb-item active">Descrição do Sistema</li>
          </ol>
        </nav>
        <h4 class="mb-4">Visão Geral do Sistema</h4>
        <p>O Sistema de Gestão Escolar foi desenvolvido para facilitar o gerenciamento de atividades escolares, integrando funcionalidades de gestão acadêmica, financeira, de comunicação e muito mais.</p>
        <hr class="my-6" />
      </div>

      <!-- Sidebar de navegação -->
      <div class="col-lg-4">
        <div class="bg-lighter py-2 px-5 rounded-3">
          <h5 class="mb-0">Seções do Sistema</h5>
        </div>
        <ul class="list-unstyled mt-4 mb-0">
          <li class="mb-4">
            <a href="#funcionalidades" class="text-heading" data-bs-toggle="collapse">
              <i class="tf-icons ri-arrow-right-s-line ri-20px text-muted"></i> Funcionalidades
            </a>
          </li>
          <li class="mb-4">
            <a href="#tecnologias" class="text-heading" data-bs-toggle="collapse">
              <i class="tf-icons ri-arrow-right-s-line ri-20px text-muted"></i> Tecnologias Utilizadas
            </a>
          </li>
        </ul>
      </div>

      <!-- Descrição do sistema -->
      <div class="col-lg-8">
        <!-- Funcionalidades -->
        <div class="collapse" id="funcionalidades">
          <h5>Funcionalidades</h5>
          <ul>
            <li><strong>Gestão de Usuários:</strong> Autenticação e gerenciamento de perfis.</li>
            <li><strong>Gestão Acadêmica:</strong> Matrículas, transferências, turmas, cursos e calendário.</li>
            <li><strong>Gestão de Notas e Frequência:</strong> Lançamento e consulta de notas, controle de frequência.</li>
            <li><strong>Gestão de Disciplinas e Currículo:</strong> Cadastro e organização das disciplinas e currículos.</li>
            <li><strong>Comunicação:</strong> Mensagens internas e notificações via e-mail e SMS.</li>
            <li><strong>Gestão Financeira:</strong> Controle de mensalidades, pagamentos e relatórios financeiros.</li>
            <li><strong>Biblioteca:</strong> Empréstimos, devoluções e consulta ao acervo bibliográfico.</li>
            <li><strong>Infraestrutura e Manutenção:</strong> Controle de patrimônio e pedidos de manutenção.</li>
          </ul>
        </div>

        <!-- Tecnologias -->
        <div class="collapse" id="tecnologias">
          <h5>Tecnologias Utilizadas</h5>
          <ul>
            <li><strong>Vue.js:</strong> Framework para o desenvolvimento do frontend.</li>
            <li><strong>Vue Router:</strong> Para gerenciamento de rotas.</li>
            <li><strong>Vuex:</strong> Para gerenciamento de estado.</li>
            <li><strong>Axios:</strong> Para requisições HTTP.</li>
            <li><strong>Vuetify:</strong> Para componentes de interface.</li>
          </ul>
        </div>

        <!-- Screenshots -->

<section class="section-py first-section-pt">
  <div class="container">
    <h5>Screenshots</h5>
    <div id="screenshotCarousel" class="carousel slide" data-bs-ride="carousel">
      <!-- Controles -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#screenshotCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#screenshotCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#screenshotCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#screenshotCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#screenshotCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#screenshotCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#screenshotCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#screenshotCarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
      </div>

      <!-- Slides -->
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <a href="../../../assets/img/portfolio/xicola/loading.png" data-bs-toggle="lightbox" data-bs-target="#screenshot1">
            <img src="../../../assets/img/portfolio/xicola/loading.png" alt="Screenshot 1" class="d-block w-100">
          </a>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
          <a href="../../../assets/img/portfolio/xicola/alunos.png" data-bs-toggle="lightbox" data-bs-target="#screenshot2">
            <img src="../../../assets/img/portfolio/xicola/alunos.png" alt="Screenshot 2" class="d-block w-100">
          </a>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
          <a href="../../../assets/img/portfolio/xicola/detalhes_aluno.png" data-bs-toggle="lightbox" data-bs-target="#screenshot3">
            <img src="../../../assets/img/portfolio/xicola/detalhes_aluno.png" alt="Screenshot 3" class="d-block w-100">
          </a>
        </div>
        <!-- Slide 4 -->
        <div class="carousel-item">
          <a href="../../../assets/img/portfolio/xicola/formularios_academicos.png" data-bs-toggle="lightbox" data-bs-target="#screenshot4">
            <img src="../../../assets/img/portfolio/xicola/formularios_academicos.png" alt="Screenshot 4" class="d-block w-100">
          </a>
        </div>
        <!-- Slide 5 -->
        <div class="carousel-item">
          <a href="../../../assets/img/portfolio/xicola/formularios_pagamento.png" data-bs-toggle="lightbox" data-bs-target="#screenshot5">
            <img src="../../../assets/img/portfolio/xicola/formularios_pagamento.png" alt="Screenshot 5" class="d-block w-100">
          </a>
        </div>
        <!-- Slide 6 -->
        <div class="carousel-item">
          <a href="../../../assets/img/portfolio/xicola/pagamentos.png" data-bs-toggle="lightbox" data-bs-target="#screenshot6">
            <img src="../../../assets/img/portfolio/xicola/pagamentos.png" alt="Screenshot 6" class="d-block w-100">
          </a>
        </div>
        <!-- Slide 7 -->
        <div class="carousel-item">
          <a href="../../../assets/img/portfolio/xicola/portal_aluno.png" data-bs-toggle="lightbox" data-bs-target="#screenshot7">
            <img src="../../../assets/img/portfolio/xicola/portal_aluno.png" alt="Screenshot 7" class="d-block w-100">
          </a>
        </div>
        <!-- Slide 8 -->
        <div class="carousel-item">
          <a href="../../../assets/img/portfolio/xicola/turmas.png" data-bs-toggle="lightbox" data-bs-target="#screenshot8">
            <img src="../../../assets/img/portfolio/xicola/turmas.png" alt="Screenshot 8" class="d-block w-100">
          </a>
        </div>
      </div>

      <!-- Controles do Carrossel -->
      <button class="carousel-control-prev" type="button" data-bs-target="#screenshotCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#screenshotCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>



      </div>
    </div>
  </div>
</section>

<!-- Bootstrap JS (necessário para o colapso funcionar) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    <!-- / Sections:End -->

    <!-- Footer: Start -->
    <footer class="landing-footer">
      <div class="footer-top position-relative overflow-hidden">
        <img src="../../../assets/img/front-pages/backgrounds/footer-bg.png" alt="footer bg" class="footer-bg banner-bg-img" />
  
  
      </div>
      <div class="footer-bottom py-5">
        <div class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
          <div class="mb-2 mb-md-0">
            <a href="https://linkedin.com/in/mmaunze" class="footer-link me-4" target="_blank"><i
                class="ri-linkedin-fill"></i></a>
            <a href="https://github.com/mmaunze" class="footer-link me-4" target="_blank"><i
                class="ri-github-fill"></i></a>
            <a href="https://www.facebook.com/mmaunze" class="footer-link me-4" target="_blank"><i
                class="ri-facebook-circle-fill"></i></a>
            <a href="https://twitter.com/mlmaunze" class="footer-link me-4" target="_blank"><i
                class="ri-twitter-fill"></i></a>
            <a href="https://www.instagram.com/m.maunze" class="footer-link" target="_blank"><i
                class="ri-instagram-line"></i></a>
  
  
          </div>
          <div>
            <span class="footer-text">©
              <script>
                document.write(new Date().getFullYear());
              </script>
  
            </span>
            <a href="https://mmaunze.com" target="_blank" class="footer-link fw-medium footer-theme-link">Meldo Maúnze</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer: End -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../../assets/vendor/libs/node-waves/node-waves.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../../../assets/js/front-main.js"></script>

    <!-- Page JS -->
  </body>
</html>
