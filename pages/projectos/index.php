<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
  data-assets-path="../../assets/" data-template="front-pages" data-style="light">

<head>
  <?php include '../layout/header.php' ?>

  <title>Projectos | Meldo Maunze - Engenheiro Informático</title>

</head>

<body>
  


  <?php include '../layout/navbar.php'  ?>

  <div data-bs-spy="scroll" class="scrollspy-example">

    <?php include 'components/cover.php' ?>
    <?php include 'components/destaque.php' ?>
    <?php include 'components/lista.php' ?>
    <?php include 'components/extra.php' ?>
    <?php include 'components/cta.php' ?>

  </div>

  <?php include '../layout/footer.php'  ?>
  <?php include '../layout/footer_assets.php' ?>
</body>

</html>