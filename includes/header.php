<?php
// Determinar a página atual para marcar o link ativo
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Meldo Maúnze - Desenvolvedor, Consultor e Especialista em Tecnologia">
  <meta name="keywords" content="desenvolvimento, web, sistemas, consultoria, tecnologia">
  <title><?php echo isset($page_title) ? $page_title . ' | Meldo Maúnze' : 'Meldo Maúnze - Aquele gajo da Informática'; ?></title>
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- CSS -->
  <link rel="stylesheet" href="/css/style.css">
  
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
</head>
<body>
  <!-- Header e Navegação -->
  <header>
    <div class="container">
      <nav>
        <div class="logo">Meldo Maúnze</div>
        
        <ul class="nav-links">
          <li><a href="/index.php" <?php echo ($current_page === 'index.php' || $current_page === '') ? 'class="active"' : ''; ?>>Página Inicial</a></li>
          <li><a href="/pages/about.php" <?php echo ($current_page === 'about.php') ? 'class="active"' : ''; ?>>Sobre Mim</a></li>
          <li><a href="/pages/projects.php" <?php echo ($current_page === 'projects.php') ? 'class="active"' : ''; ?>>Projectos</a></li>
          <li><a href="/pages/services.php" <?php echo ($current_page === 'services.php') ? 'class="active"' : ''; ?>>Serviços</a></li>
          <li><a href="/pages/blog.php" <?php echo ($current_page === 'blog.php') ? 'class="active"' : ''; ?>>Blog/Ideias</a></li>
          <li><a href="/pages/contact.php" <?php echo ($current_page === 'contact.php') ? 'class="active"' : ''; ?>>Contacto</a></li>
        </ul>
        
        <button class="menu-toggle">☰</button>
      </nav>
    </div>
  </header>
</body>
</html>
