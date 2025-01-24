<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
      data-assets-path="../../assets/" data-template="front-pages" data-style="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Portfolio | Meldo Maúnze - Aquele gajo da Informática</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

  <link rel="stylesheet" href="../../assets/vendor/fonts/remixicon/remixicon.css" />

  <!-- Menu waves for no-customizer fix -->
  <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../../assets/css/demo.css" />
  <link rel="stylesheet" href="../../assets/vendor/css/pages/front-page.css" />
  <!-- Vendors CSS -->

  <link rel="stylesheet" href="../../assets/vendor/libs/nouislider/nouislider.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css" />

  <!-- Page CSS -->

  <link rel="stylesheet" href="../../assets/vendor/css/pages/front-page-landing.css" />

  <!-- Helpers -->
  <script src="../../assets/vendor/js/helpers.js"></script>

  <script src="../../assets/vendor/js/template-customizer.js"></script>

  <script src="../../assets/js/front-config.js"></script>
</head>

<body>
<script src="../../assets/vendor/js/dropdown-hover.js"></script>
<script src="../../assets/vendor/js/mega-dropdown.js"></script>

<!-- Navbar: Start -->
<?php include '../layout/navbar.php'  ?>
<!-- Navbar: End -->

<!-- Sections:Start -->

<div data-bs-spy="scroll" class="scrollspy-example">
  <!-- Hero: Start -->
  <section id="landingHero" class="section-py landing-hero position-relative">
    <img src="../../assets/img/front-pages/backgrounds/hero-bg-light.png" alt="hero background"
         class="position-absolute top-0 start-0 w-100 h-100 z-n1" data-speed="1"
         data-app-light-img="front-pages/backgrounds/hero-bg-light.png"
         data-app-dark-img="front-pages/backgrounds/hero-bg-dark.png" />
    <div class="container">
      <div class="hero-text-box text-center">
        <h3 class="text-info hero-title  fs-4">Tenha a tranquilidade de um departamento de TI completo, com a
          agilidade e foco de um único profissional.</h3>
        <h2 class="h6 mb-8">
          Possuo uma vasta qualificação em múltiplas áreas da computação<br /> desde redes até Inteligência
          Artificial.
        </h2>
        <a href="sobre" class="btn btn-lg btn-info">Saiba Mais</a>
      </div>
      <div class="position-relative hero-animation-img">
        <a href="servicos">
          <!-- Our great team: Start -->
          <section id="landingTeam" class="section-py landing-team">
            <div class="container bg-icon-right position-relative">
              <img src="../../assets/img/front-pages/icons/bg-right-icon-light.png" alt="section icon"
                   class="position-absolute top-0 end-0" data-speed="1"
                   data-app-light-img="front-pages/icons/bg-right-icon-light.png"
                   data-app-dark-img="front-pages/icons/bg-right-icon-dark.png" />

              <div class="row gy-lg-5 gy-12 mt-2">
                <div class="col-lg-3 col-sm-6">
                  <div class="card card-hover-border-info mt-4 mt-lg-0 shadow-none">
                    <div class="bg-label-info position-relative team-image-box">
                      <img src="../../assets/img/front-pages/landing-page/team-member-1.png"
                           class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                           alt="human image" />
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title mb-1">Desenvolvedor Web</h5>
                      <p class="card-text mb-3">Crio websites inovadores e funcionais usando tecnologias modernas.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="card card-hover-border-danger mt-4 mt-lg-0 shadow-none">
                    <div class="bg-label-danger position-relative team-image-box">
                      <img src="../../assets/img/front-pages/landing-page/team-member-2.png"
                           class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                           alt="Desenvolvedor Web" />
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title mb-1">Engenheiro de Software</h5>
                      <p class="card-text mb-3">Planejo, analiso e desenvolvo sistemas web, mobile e desktop
                        completos.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="card card-hover-border-success mt-4 mt-lg-0 shadow-none">
                    <div class="bg-label-success position-relative team-image-box">
                      <img src="../../assets/img/front-pages/landing-page/team-member-3.png"
                           class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                           alt="Engenheiro de Software" />
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title mb-1">Administrador de Redes</h5>
                      <p class="card-text mb-3">Planejo, implemento e mantenho infraestruturas de rede eficazes.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="card card-hover-border-info mt-4 mt-lg-0 shadow-none">
                    <div class="bg-label-info position-relative team-image-box">
                      <img src="../../assets/img/front-pages/landing-page/team-member-4.png"
                           class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                           alt="Administrador de Redes" />
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title mb-1">Consultor em ICT</h5>
                      <p class="card-text mb-3">Ofereço soluções estratégicas em design de interface e tecnologia.</p>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </section>
          <!-- Our great team: End -->
        </a>
      </div>
    </div>
  </section>
  <!-- Hero: End -->

  <!-- Useful features: Start -->
  <section id="landingFeatures" class="section-py landing-features">
    <div class="container">
      <h6 class="text-center d-flex justify-content-center align-items-center mb-6">
        <img src="../../assets/img/front-pages/icons/section-tilte-icon.png" alt="section title icon" class="me-3" />
        <span class="text-uppercase">Principais Áreas</span>
      </h6>
      <h5 class="text-center mb-2">
        <span class="display-5 fs-4 fw-bold">Tudo o que você precisa</span> para transformar ideias em soluções
      </h5>
      <p class="text-center fw-medium mb-4 mb-md-12">
        Ofereço expertise em áreas fundamentais da tecnologia para atender às suas necessidades.
      </p>
      <div class="features-icon-wrapper row gx-0 gy-12 gx-sm-6 mt-n4 mt-sm-0">
        <!-- Desenvolvimento -->
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="features-icon mb-4">
            <img src="../../assets/img/front-pages/icons/laptop-charging.png" alt="desenvolvimento" />
          </div>
          <h5 class="mb-2">Desenvolvimento</h5>
          <p class="features-icon-description">
            Criação de aplicações modernas, personalizadas e otimizadas para sua empresa.
          </p>
        </div>
        <!-- Inteligência Artificial -->
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="features-icon mb-4">
            <img src="../../assets/img/front-pages/icons/laptop-charging.png" alt="inteligência artificial" />
          </div>
          <h5 class="mb-2">Inteligência Artificial</h5>
          <p class="features-icon-description">
            Soluções inteligentes que utilizam aprendizado de máquina e automação.
          </p>
        </div>
        <!-- Redes -->
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="features-icon mb-4">
            <img src="../../assets/img/front-pages/icons/laptop-charging.png" alt="redes" />
          </div>
          <h5 class="mb-2">Redes</h5>
          <p class="features-icon-description">
            Infraestrutura robusta e segura para conectar sua organização de forma eficiente.
          </p>
        </div>
        <!-- Segurança -->
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="features-icon mb-4">
            <img src="../../assets/img/front-pages/icons/laptop-charging.png" alt="segurança" />
          </div>
          <h5 class="mb-2">Segurança</h5>
          <p class="features-icon-description">
            Proteção avançada contra ameaças digitais para garantir a integridade dos seus dados.
          </p>
        </div>
        <!-- Análise de Dados -->
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="features-icon mb-4">
            <img src="../../assets/img/front-pages/icons/laptop-charging.png" alt="análise de dados" />
          </div>
          <h5 class="mb-2">Análise de Dados</h5>
          <p class="features-icon-description">
            Insights poderosos para decisões estratégicas baseadas em dados.
          </p>
        </div>
        <!-- Consultoria -->
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="features-icon mb-4">
            <img src="../../assets/img/front-pages/icons/laptop-charging.png" alt="consultoria" />
          </div>
          <h5 class="mb-2">Consultoria</h5>
          <p class="features-icon-description">
            Orientação estratégica para maximizar o impacto da tecnologia no seu negócio.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Useful features: End -->

  <!-- Real customers reviews: Start -->
  <section id="landingReviews" class="section-py bg-body landing-reviews">
    <div class="container">
      <h6 class="text-center d-flex justify-content-center align-items-center mb-6">
        <img src="../../assets/img/front-pages/icons/section-tilte-icon.png" alt="section title icon" class="me-3" />
        <span class="text-uppercase">Tecnlogias, conhecimentos e experiência</span>
      </h6>

      <p class="text-center fw-medium mb-4 mb-md-12">Tenho dominio de Varias Tecnologias Modernas.</p>
    </div>
    <div class="swiper-reviews-carousel overflow-hidden mb-12 pt-4">
      <div class="swiper" id="swiper-reviews">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card h-100">
              <div class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                <div class="mb-4">
                  <img src="../../assets/ico/java.ico" alt="client logo" class="client-logo img-fluid" />
                </div>
                <h6>
                  JAVA
                </h6>


              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card h-100">
              <div class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                <div class="mb-4">
                  <img src="../../assets/ico/py.ico" alt="client logo" class="client-logo img-fluid" />
                </div>
                <h6>PY</h6>


              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card h-100">
              <div class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                <div class="mb-4">
                  <img src="../../assets/ico/js.ico" alt="client logo" class="client-logo img-fluid" />
                </div>
                <h6>
                  JS
                </h6>


              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card h-100">
              <div class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                <div class="mb-4">
                  <img src="../../assets/ico/php.ico" alt="client logo" class="client-logo" />
                </div>
                <h6>
                  PHP
                </h6>


              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card h-100">
              <div class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                <div class="mb-4">
                  <img src="../../assets/ico/androidstudio.ico" alt="client logo" class="client-logo img-fluid" />
                </div>
                <h6>
                  Android Studio
                </h6>


              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card h-100">
              <div class="card-body text-body d-flex flex-column justify-content-between text-center p-8 h-100">
                <div class="mb-4">
                  <img src="../../assets/ico/flutter.ico" alt="client logo" class="client-logo img-fluid" />
                </div>
                <h6>
                  Flutter
                </h6>


              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card h-100">
              <div class="card-body text-body d-flex flex-column justify-content-between text-center p-8 h-100">
                <div class="mb-4">
                  <img src="../../assets/ico/react.ico" alt="client logo" class="client-logo img-fluid" />
                </div>
                <h6>Next</h6>


              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card h-100">
              <div class="card-body text-body d-flex flex-column justify-content-between text-center p-8 h-100">
                <div class="mb-4">
                  <img src="../../assets/ico/vue.ico" alt="client logo" class="client-logo img-fluid" />
                </div>
                <h6>
                  Vue
                </h6>


              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card h-100">
              <div class="card-body text-body d-flex flex-column justify-content-between text-center p-8 h-100">
                <div class="mb-4">
                  <img src="../../assets/ico/springboot.ico" alt="client logo" class="client-logo img-fluid" />
                </div>
                <h6>
                  Spring
                </h6>


              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card h-100">
              <div class="card-body text-body d-flex flex-column justify-content-between text-center p-8 h-100">
                <div class="mb-4">
                  <img src="../../assets/ico/laravel.ico" alt="client logo" class="client-logo img-fluid" />
                </div>
                <h6>
                  Laravel
                </h6>


              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card h-100">
              <div class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                <div class="mb-4">
                  <img src="../../assets/ico/postgresql.ico" alt="client logo" class="client-logo img-fluid" />
                </div>
                <h6>
                  POSTGRESQL
                </h6>


              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card h-100">
              <div class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                <div class="mb-4">
                  <img src="../../assets/ico/mysql.ico" alt="client logo" class="client-logo img-fluid" />
                </div>
                <h6>MySQL</h6>


              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card h-100">
              <div class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                <div class="mb-4">
                  <img src="../../assets/ico/git.ico" alt="client logo" class="client-logo img-fluid" />
                </div>
                <h6>
                  Git
                </h6>


              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card h-100">
              <div class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                <div class="mb-4">
                  <img src="../../assets/ico/mongodb.ico" alt="client logo" class="client-logo img-fluid" />
                </div>
                <h6>
                  MOngo DB
                </h6>


              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card h-100">
              <div class="card-body text-body d-flex flex-column justify-content-between text-center p-8">
                <div class="mb-4">
                  <img src="../../assets/ico/cisco.ico" alt="client logo" class="client-logo img-fluid" />
                </div>
                <h6>
                  Cisco
                </h6>


              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <div class="container">

    </div>
  </section>
  <!-- Real customers reviews: End -->

  <!-- Fun facts: Start -->
  <section id="landingFunFacts" class="section-py landing-fun-facts py-12 my-4">
    <div class="container">
      <div class="row gx-0 gy-6 gx-sm-6">
        <div class="col-md-3 col-sm-6 text-center">
            <span class="badge rounded-pill bg-label-hover-info fun-facts-icon mb-6 p-5"><i
                    class="tf-icons ri-layout-line ri-42px"></i></span>
          <h2 class="fw-bold mb-0 fun-facts-text">17+</h2>
          <h6 class="mb-0 text-body">Servicos Feitos</h6>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
            <span class="badge rounded-pill bg-label-hover-success fun-facts-icon mb-6 p-5"><i
                    class="tf-icons ri-time-line ri-42px"></i></span>
          <h2 class="fw-bold mb-0 fun-facts-text">4321+</h2>
          <h6 class="mb-0 text-body">Horas de Trabaho</h6>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
            <span class="badge rounded-pill bg-label-hover-warning fun-facts-icon mb-6 p-5"><i
                    class="tf-icons ri-user-smile-line ri-42px"></i></span>
          <h2 class="fw-bold mb-0 fun-facts-text">11+</h2>
          <h6 class="mb-0 text-body">Clientes</h6>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
            <span class="badge rounded-pill bg-label-hover-info fun-facts-icon mb-6 p-5"><i
                    class="tf-icons ri-award-line ri-42px"></i></span>
          <h2 class="fw-bold mb-0 fun-facts-text">23+</h2>
          <h6 class="mb-0 text-body">Projectos em curso</h6>
        </div>
      </div>
    </div>
  </section>
  <!-- Fun facts: End -->

  <!-- FAQ: Início -->
  <section id="landingFAQ" class="section-py bg-body landing-faq">
    <div class="container bg-icon-right">
      <img src="../../assets/img/front-pages/icons/bg-right-icon-light.png" alt="ícone da seção"
           class="position-absolute top-0 end-0" data-speed="1"
           data-app-light-img="front-pages/icons/bg-right-icon-light.png"
           data-app-dark-img="front-pages/icons/bg-right-icon-dark.png" />
      <h6 class="text-center d-flex justify-content-center align-items-center mb-6">
        <img src="../../assets/img/front-pages/icons/section-tilte-icon.png" alt="ícone do título da seção" class="me-3" />
        <span class="text-uppercase">Perguntas frequentes</span>
      </h6>
      <h5 class="text-center mb-2">Perguntas frequentes<span class="display-5 fs-4 fw-bold"> respondidas</span></h5>
      <p class="text-center fw-medium mb-4 mb-md-12 pb-4">
        Navegue por essas perguntas frequentes para encontrar respostas às dúvidas mais comuns sobre nossos serviços.
      </p>
      <div class="row gy-5">
        <div class="col-lg-5">
          <div class="text-center">
            <img src="../../assets/img/front-pages/landing-page/sitting-girl-with-laptop.png"
                 alt="garota sentada com laptop" class="faq-image scaleX-n1-rtl" />
          </div>
        </div>
        <div class="col-lg-7">
          <div class="accordion" id="accordionFront">
            <!-- Pergunta 1 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="head-One">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                  Qual o custo para desenvolver um website?
                </button>
              </h2>
              <div id="accordionOne" class="accordion-collapse collapse" data-bs-parent="#accordionFront"
                   aria-labelledby="accordionOne">
                <div class="accordion-body">
                  Os serviços de desenvolvimento de websites começam a partir de 35.000 MT. O custo pode variar
                  dependendo da complexidade e das funcionalidades do projeto.
                </div>
              </div>
            </div>

            <!-- Pergunta 2 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="head-Two">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                  Qual o preço para o desenvolvimento de sistemas personalizados?
                </button>
              </h2>
              <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="accordionTwo"
                   data-bs-parent="#accordionFront">
                <div class="accordion-body">
                  O custo para o desenvolvimento de sistemas personalizados começa em 100.000 MT, variando conforme o
                  escopo, as funcionalidades e a complexidade do projeto.
                </div>
              </div>
            </div>

            <!-- Pergunta 3 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="head-Three">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                  O que está incluído no serviço de consultoria?
                </button>
              </h2>
              <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="accordionThree"
                   data-bs-parent="#accordionFront">
                <div class="accordion-body">
                  Nossos serviços de consultoria, com preços a partir de 10.000 MT, incluem análise detalhada,
                  planejamento estratégico do projeto, recomendações técnicas e suporte na implementação.
                </div>
              </div>
            </div>

            <!-- Pergunta 4 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="head-Four">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#accordionFour" aria-expanded="false" aria-controls="accordionFour">
                  Você oferece manutenção após a conclusão do projeto?
                </button>
              </h2>
              <div id="accordionFour" class="accordion-collapse collapse" aria-labelledby="accordionFour"
                   data-bs-parent="#accordionFront">
                <div class="accordion-body">
                  Sim, serviços de manutenção contínuos para garantir o bom funcionamento do seu website ou sistema. A
                  manutenção está disponível mediante assinatura mensal.
                </div>
              </div>
            </div>

            <!-- Pergunta 5 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="head-Five">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#accordionFive" aria-expanded="false" aria-controls="accordionFive">
                  Quanto tempo leva para concluir um website ou sistema?
                </button>
              </h2>
              <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="accordionFive"
                   data-bs-parent="#accordionFront">
                <div class="accordion-body">
                  O tempo de conclusão depende da complexidade do projeto. Em média, o desenvolvimento de websites
                  leva entre 2 a 3 semanas, enquanto sistemas personalizados podem levar vários meses.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FAQ: Fim -->


  <!-- CTA: Start -->
  <section id="landingCTA" class="section-py landing-cta p-lg-0 pb-0 position-relative">
    <img src="../../assets/img/front-pages/backgrounds/cta-bg.png"
         class="position-absolute bottom-0 end-0 scaleX-n1-rtl h-100 w-100 z-n1" alt="cta image" />
    <div class="container">
      <div class="row align-items-center gy-5 gy-lg-0">
        <div class="col-lg-6 text-center text-lg-start">
          <h3 class="display-5 text-info fw-bold mb-1 h3">Ainda nao esta convencido ?</h3>
          <p class="fw-medium mb-6 mb-md-8">Confira uma lista de trabahos e projectos que vao mudar sua opiniao</p>
          <a href="projectos" class="btn btn-info">Apreciar Trabalhos Antigos<i
                  class="ri-arrow-right-line ri-16px ms-2 scaleX-n1-rtl"></i></a>
        </div>
        <div class="col-lg-6 pt-lg-12">
          <img src="../../assets/img/front-pages/landing-page/cta-dashboard.png" alt="cta dashboard" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>
  <!-- CTA: End -->

  <!-- Contact Us: Start -->
  <section id="landingContact" class="section-py bg-body landing-contact">
    <div class="container bg-icon-left position-relative">
      <img src="../../assets/img/front-pages/icons/bg-left-icon-light.png" alt="section icon"
           class="position-absolute top-0 start-0" data-speed="1"
           data-app-light-img="front-pages/icons/bg-left-icon-light.png"
           data-app-dark-img="front-pages/icons/bg-left-icon-dark.png" />
      <h6 class="text-center d-flex justify-content-center align-items-center mb-6">
        <img src="../../assets/img/front-pages/icons/section-tilte-icon.png" alt="section title icon" class="me-3" />
        <span class="text-uppercase">Fale comigo</span>
      </h6>
      <h5 class="text-center mb-2"><span class="display-5 fs-4 fw-bold">Envie </span> uma mensagem</h5>
      <p class="text-center fw-medium mb-4 mb-md-12 pb-3">Alguma preocupacao urgente ou duvida ?</p>
      <div class="row gy-6">
        <div class="col-lg-5">
          <div class="card h-100">
            <div class="bg-info rounded-4 text-white card-body p-8">
              <p class="fw-medium mb-1_5 tagline">Entre em Contacto comigo</p>
              <h4 class="text-white mb-5 title">Nao hesite em mandar mensagem expondo sua preocupacao.</h4>
              <img src="../../assets/img/front-pages/landing-page/let’s-contact.png
              " alt="let’s contact" class="w-100 mb-5" />
              <p class="mb-0 description">
                Procurando por mais personalização, mais recursos e mais alguma coisa?
                Não se preocupe, oferecemos a você chegou ao lugar certo.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="card">
            <div class="card-body">
              <h5 class="mb-6">Enviar uma mensagem</h5>
              <form>
                <div class="row g-5">
                  <div class="col-md-6">
                    <div class="form-floating form-floating-outline">
                      <input type="text" class="form-control" id="basic-default-fullname" placeholder="Meldo Maúnze" />
                      <label for="basic-default-fullname">Nome Completo</label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-floating form-floating-outline">
                      <input type="email" class="form-control" id="basic-default-email"
                             placeholder="contacto@mmaunze.com" />
                      <label for="basic-default-email">Email</label>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-floating form-floating-outline">
                        <textarea class="form-control h-px-250" placeholder="Message" aria-label="Message"
                                  id="basic-default-message"></textarea>
                      <label for="basic-default-message">Mensagem</label>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-info mt-5">Enviar Mensagem</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Us: End -->
</div>


  <?php include '../layout/footer.php' ?>
  <?php include '../layout/footer_assets.php' ?>
</body>

</html>