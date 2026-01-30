<?php
// includes/header.php
require_once __DIR__ . '/../config/url-config.php';
?>

<header class="fixed w-full z-50 glass-nav">
    <div class="max-w-7xl mx-auto px-4 h-20 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-brand-blue rounded-md flex items-center justify-center text-white font-bold">
                MM
            </div>
            <span class="font-bold text-lg">Meldo <span class="text-brand-blue">Maúnze</span></span>
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex items-center gap-8 text-sm font-semibold">
            <a href="<?= url('/') ?>" class="hover:text-brand-blue">Home</a>
                 
            <!-- Dropdown Projectos -->
            <div class="relative group">
                <button class="flex items-center gap-1 hover:text-brand-blue">
                    Sobre <i data-lucide="chevron-down" class="w-4 h-4"></i>
                </button>
                <div class="absolute top-full left-0 w-56 pt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl border border-gray-100 dark:border-gray-700 p-2">
                        <a href="<?= url('pages/sobre') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Quem sou</a>
                        <a href="<?= url('pages/habilidades') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Habilidades</a>
                        <a href="<?= url('pages/experiencia') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Experiência</a>
                    </div>
                </div>
            </div>


            <!-- Dropdown Projectos -->
            <div class="relative group">
                <button class="flex items-center gap-1 hover:text-brand-blue">
                    Projectos <i data-lucide="chevron-down" class="w-4 h-4"></i>
                </button>
                <div class="absolute top-full left-0 w-56 pt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl border border-gray-100 dark:border-gray-700 p-2">
                        <a href="<?= url('pages/projectos') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Todos os Projectos</a>
                        <a href="<?= url('pages/projectos/software') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">Software</a>
                        <a href="<?= url('pages/projectos/ict') ?>" class="block px-4 py-2 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md">ICT & Redes</a>
                    </div>
                </div>
            </div>

            <a href="<?= url('pages/publicacoes') ?>" class="hover:text-brand-blue">Publicações</a>
            <a href="<?= url('pages/contacto') ?>" class="hover:text-brand-blue">Contacto</a>

            <button id="dark-toggle" class="p-2 rounded-full bg-gray-100 dark:bg-gray-800">
                <i data-lucide="moon" class="w-4 h-4"></i>
            </button>
        </nav>

        <!-- Mobile Toggle -->
        <button id="open-menu" class="md:hidden">
            <i data-lucide="menu" class="w-7 h-7"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <aside id="mobile-menu"
        class="fixed inset-y-0 right-0 w-72 text-center bg-white dark:bg-gray-900
               transform translate-x-full transition-transform duration-300
               flex flex-col p-6 z-[60] shadow-lg">

        <div class="flex justify-between items-center mb-8">
            <span class="text-lg font-bold">Menu</span>
            <button id="close-menu">
                <i data-lucide="x" class="w-7 h-7"></i>
            </button>
        </div>

        <nav class="flex flex-col gap-4 text-lg bg-white dark:bg-gray-900 font-semibold">
            <a href="<?= url('') ?>">Home</a>
            <a href="<?= url('pages/sobre') ?>">Sobre</a>
            <a href="<?= url('pages/experiencia') ?>">Experiência</a>
            <a href="<?= url('pages/projectos') ?>">Projectos</a>
            <a href="<?= url('pages/publicacoes') ?>">Publicações</a>
            <a href="<?= url('pages/habilidades') ?>">Habilidades</a>
            <a href="<?= url('pages/contacto') ?>">Contacto</a>
            
            <div class="mt-4 pt-4 border-t border-gray-100 dark:border-gray-800">
                <button id="dark-toggle-mobile" class="flex items-center gap-2 w-full p-2 rounded-lg bg-gray-100 dark:bg-gray-800">
                    <i data-lucide="moon" class="w-5 h-5"></i>
                    <span>Modo Escuro</span>
                </button>
            </div>
        </nav>
    </aside>
</header>
