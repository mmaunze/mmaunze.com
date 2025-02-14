<!DOCTYPE html>

<html
  lang="PT"
  class="light-style layout-navbar-fixed layout-wide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../../assets/"
  data-template="front-pages"
  data-style="light">

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>
  
  </title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link
    rel="icon"
    type="image/x-icon"
    href="../../../assets/img/favicon/favicon.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
    rel="stylesheet" />

  <link
    rel="stylesheet"
    href="../../../assets/vendor/fonts/remixicon/remixicon.css" />

  <!-- Menu waves for no-customizer fix -->
  <link
    rel="stylesheet"
    href="../../../assets/vendor/libs/node-waves/node-waves.css" />

  <!-- Core CSS -->
  <link
    rel="stylesheet"
    href="../../../assets/vendor/css/rtl/core.css"
    class="template-customizer-core-css" />
  <link
    rel="stylesheet"
    href="../../../assets/vendor/css/rtl/theme-default.css"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../../../assets/css/demo.css" />
  <link
    rel="stylesheet"
    href="../../../assets/vendor/css/pages/front-page.css" />
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
      class="navbar navbar-expand-lg landing-navbar border-top-0 px-4 px-md-8">
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
          aria-label="Toggle navigation">
          <i class="tf-icons ri-menu-fill ri-24px align-middle"></i>
        </button>
        <!-- Mobile menu toggle: End-->
        <a href="/" class="app-brand-link">
          <span class="app-brand-text demo menu-text fw-semibold ms-2 ps-1">Meldo Maúnze</span>
        </a>
      </div>
      <!-- Menu logo wrapper: End -->

      <!-- Toolbar: Start -->
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- Menu wrapper: Start -->
        <div
          class="collapse navbar-collapse landing-nav-menu"
          id="navbarSupportedContent">
          <button
            class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="tf-icons ri-close-fill"></i>
          </button>
          <ul class="navbar-nav me-auto p-4 p-lg-0">
            <li class="nav-item">
              <a class="nav-link fw-medium" aria-current="page" href="/">Página Inicial</a>
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
              <a class="nav-link fw-medium text-nowrap" href="../../bog">Blog/Ideias</a>
            </li>

            <li class="nav-item">
              <a class="nav-link fw-medium" href="../../contacto" target="_blank">Contacto</a>
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
            data-bs-toggle="dropdown">
            <i class="ri-22px text-heading"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
            <li>
              <a
                class="dropdown-item"
                href="javascript:void(0);"
                data-theme="light">
                <span class="align-middle"><i class="ri-sun-line ri-22px me-3"></i>Claro</span>
              </a>
            </li>
            <li>
              <a
                class="dropdown-item"
                href="javascript:void(0);"
                data-theme="dark">
                <span class="align-middle"><i class="ri-moon-clear-line ri-22px me-3"></i>Escuro</span>
              </a>
            </li>
            <li>
              <a
                class="dropdown-item"
                href="javascript:void(0);"
                data-theme="system">
                <span class="align-middle"><i class="ri-computer-line ri-22px me-3"></i>Sistema</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- / Style Switcher-->

        <!-- navbar button: Start -->
        <li>
          <a
            href="https://www.mmaunze.com/assets/Meldo%20Leonardo%20Maúnze%20-%20%20CV.pdf"
            class="btn btn-primary px-2 px-sm-4 px-lg-2 px-xl-4"
            target="_blank"><span class="tf-icons ri-download-2-line me-md-1"></span><span class="d-none d-md-block">Meu CV</span></a>
        </li>
        <!-- navbar button: End -->
      </ul>
      <!-- Toolbar: End -->
    </div>
  </nav>
  <!-- Navbar: End -->

  <!-- Sections:Start -->

 

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