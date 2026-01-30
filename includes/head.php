<?php
// includes/head.php
require_once __DIR__ . '/../config/url-config.php';

// Define um título padrão caso nenhuma página tenha definido $page_title
$page_title = $page_title ?? 'Meldo Leonardo Maúnze | Engenheiro Informático';
?>

<!DOCTYPE html>
<html lang="pt-PT" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="Portfólio de Meldo Leonardo Maúnze - Engenheiro de Software & ICT. Explore meus projetos, habilidades e experiência na área de tecnologia.">
    <meta name="author" content="Meldo Leonardo Maúnze">    
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            light: '#1B8B6F',
                            dark: '#10B981',
                            blue: '#1E40AF',
                            'blue-light': '#3B82F6',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Estilos Personalizados -->
    <link rel="stylesheet" href="<?= url('css/styles.css') ?>">

    <style>
        body { 
            font-family: 'Inter', sans-serif; 
        }

        /* Glass Navigation */
        .glass-nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid #E5E7EB;
        }
        
        .dark .glass-nav {
            background: rgba(15, 23, 42, 0.95);
            border-bottom: 1px solid #334155;
        }

        /* Mobile Menu */
        #mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }

        #mobile-menu.active {
            transform: translateX(0);
        }
        
        /* Hero Gradient */
        .hero-gradient {
            background: linear-gradient(135deg, #1E40AF 0%, #10B981 100%);
        }

        /* Card Hover */
        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        /* Dropdown visibility */
        .group:hover > div {
            opacity: 1;
            pointer-events: auto;
        }

        .group > div {
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.2s ease-in-out;
        }
    </style>
</head>
<body class="bg-white dark:bg-gray-950 text-gray-900 dark:text-gray-100">
