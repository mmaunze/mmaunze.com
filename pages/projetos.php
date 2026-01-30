<?php
require_once __DIR__ . '/../config/bootstrap.php';
get_part('head');
get_part('header');

$category = $_GET['cat'] ?? 'all';
?>
<main class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div>
                <h1 class="text-4xl font-bold mb-4">Meus <span class="text-brand-blue">Projetos</span></h1>
                <p class="text-gray-600 dark:text-gray-400">Soluções desenvolvidas com foco em eficiência e impacto.</p>
            </div>
            
            <div class="flex bg-gray-100 dark:bg-gray-800 p-1 rounded-lg">
                <a href="?cat=all" class="px-6 py-2 rounded-md text-sm font-bold transition-all <?= $category === 'all' ? 'bg-white dark:bg-gray-700 shadow-sm text-brand-blue' : 'text-gray-500 hover:text-gray-700' ?>">Todos</a>
                <a href="?cat=software" class="px-6 py-2 rounded-md text-sm font-bold transition-all <?= $category === 'software' ? 'bg-white dark:bg-gray-700 shadow-sm text-brand-blue' : 'text-gray-500 hover:text-gray-700' ?>">Software</a>
                <a href="?cat=ict" class="px-6 py-2 rounded-md text-sm font-bold transition-all <?= $category === 'ict' ? 'bg-white dark:bg-gray-700 shadow-sm text-brand-blue' : 'text-gray-500 hover:text-gray-700' ?>">ICT & Redes</a>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- ESIRA V2 -->
            <?php if($category === 'all' || $category === 'software'): ?>
            <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 overflow-hidden shadow-sm card-hover">
                <div class="h-48 bg-brand-blue/10 flex items-center justify-center">
                    <i data-lucide="graduation-cap" class="w-16 h-16 text-brand-blue opacity-50"></i>
                </div>
                <div class="p-6">
                    <div class="flex gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-600 text-[10px] font-bold uppercase rounded">Spring Boot</span>
                        <span class="px-2 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 text-[10px] font-bold uppercase rounded">Next.js</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">ESIRA V2</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">Sistema integrado de gestão académica para a Universidade Lúrio, gerindo mais de 500 utilizadores.</p>
                    <a href="https://esira.unilurio.ac.mz" target="_blank" class="text-brand-blue font-bold text-sm flex items-center gap-2">Ver Projeto <i data-lucide="external-link" class="w-4 h-4"></i></a>
                </div>
            </div>
            <?php endif; ?>

            <!-- Xicola -->
            <?php if($category === 'all' || $category === 'software'): ?>
            <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 overflow-hidden shadow-sm card-hover">
                <div class="h-48 bg-emerald-500/10 flex items-center justify-center">
                    <i data-lucide="school" class="w-16 h-16 text-emerald-500 opacity-50"></i>
                </div>
                <div class="p-6">
                    <div class="flex gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-600 text-[10px] font-bold uppercase rounded">Vue.js</span>
                        <span class="px-2 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 text-[10px] font-bold uppercase rounded">PostgreSQL</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Xicola</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">Plataforma de gestão escolar end-to-end focada na simplificação de processos administrativos.</p>
                    <span class="text-gray-400 font-bold text-sm flex items-center gap-2 italic">Projeto Interno</span>
                </div>
            </div>
            <?php endif; ?>

            <!-- PreFaculdade -->
            <?php if($category === 'all' || $category === 'software'): ?>
            <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 overflow-hidden shadow-sm card-hover">
                <div class="h-48 bg-purple-500/10 flex items-center justify-center">
                    <i data-lucide="brain-circuit" class="w-16 h-16 text-purple-500 opacity-50"></i>
                </div>
                <div class="p-6">
                    <div class="flex gap-2 mb-4">
                        <span class="px-2 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-600 text-[10px] font-bold uppercase rounded">Android</span>
                        <span class="px-2 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 text-[10px] font-bold uppercase rounded">AI/LLM</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">PreFaculdade</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">Aplicação móvel que utiliza IA para fornecer orientação vocacional personalizada a estudantes.</p>
                    <span class="text-gray-400 font-bold text-sm flex items-center gap-2 italic">Em Desenvolvimento</span>
                </div>
            </div>
            <?php endif; ?>

            <!-- Infraestrutura ICT Provida -->
            <?php if($category === 'all' || $category === 'ict'): ?>
            <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 overflow-hidden shadow-sm card-hover">
                <div class="h-48 bg-gray-500/10 flex items-center justify-center">
                    <i data-lucide="network" class="w-16 h-16 text-gray-500 opacity-50"></i>
                </div>
                <div class="p-6">
                    <div class="flex gap-2 mb-4">
                        <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 text-[10px] font-bold uppercase rounded">Networking</span>
                        <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-600 text-[10px] font-bold uppercase rounded">Security</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Infraestrutura Provida</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">Reestruturação completa da rede, implementação de AD e sistemas de backup para centro médico.</p>
                    <span class="text-brand-blue font-bold text-sm">Concluído</span>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_part('footer'); ?>
