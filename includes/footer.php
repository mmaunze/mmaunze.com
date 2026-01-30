<?php
// includes/footer.php
?>

<footer class="bg-gray-50 dark:bg-gray-900 border-t border-gray-100 dark:border-gray-800 pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <!-- Brand -->
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-brand-blue rounded-md flex items-center justify-center text-white font-bold">
                        MM
                    </div>
                    <span class="font-bold text-lg">Meldo <span class="text-brand-blue">Maúnze</span></span>
                </div>
                <p class="text-gray-600 dark:text-gray-400 mb-6 max-w-md">
                    Engenheiro de Software e Especialista em ICT com mais de 5 anos de experiência transformando desafios complexos em soluções digitais eficientes.
                </p>
                <div class="flex gap-4">
                    <a href="https://linkedin.com/in/mmaunze" target="_blank" class="w-10 h-10 rounded-full bg-white dark:bg-gray-800 flex items-center justify-center shadow-sm hover:text-brand-blue transition-colors">
                        <i data-lucide="linkedin" class="w-5 h-5"></i>
                    </a>
                    <a href="https://github.com/mmaunze" target="_blank" class="w-10 h-10 rounded-full bg-white dark:bg-gray-800 flex items-center justify-center shadow-sm hover:text-brand-blue transition-colors">
                        <i data-lucide="github" class="w-5 h-5"></i>
                    </a>
                    <a href="mailto:meldo@mmaunze.com" class="w-10 h-10 rounded-full bg-white dark:bg-gray-800 flex items-center justify-center shadow-sm hover:text-brand-blue transition-colors">
                        <i data-lucide="mail" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-bold mb-6">Navegação</h4>
                <ul class="space-y-4 text-gray-600 dark:text-gray-400">
                    <li><a href="<?= url('') ?>" class="hover:text-brand-blue">Home</a></li>
                    <li><a href="<?= url('pages/sobre') ?>" class="hover:text-brand-blue">Sobre Mim</a></li>
                    <li><a href="<?= url('pages/experiencia') ?>" class="hover:text-brand-blue">Experiência</a></li>
                    <li><a href="<?= url('pages/projectos') ?>" class="hover:text-brand-blue">Projectos</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="font-bold mb-6">Contato</h4>
                <ul class="space-y-4 text-gray-600 dark:text-gray-400">
                    <li class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-brand-blue shrink-0"></i>
                        <span>Ponta do Ouro, Maputo, Moçambique</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="phone" class="w-5 h-5 text-brand-blue shrink-0"></i>
                        <span>+258 842135644</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="mail" class="w-5 h-5 text-brand-blue shrink-0"></i>
                        <span>meldo@mmaunze.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-gray-100 dark:border-gray-800 text-center text-sm text-gray-500">
            <p>&copy; <?= date('Y') ?> Meldo Leonardo Maúnze. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<?php require_once INCLUDES_PATH . '/scripts.php'; ?>
</body>
</html>
