<?php
require_once __DIR__ . '/../config/bootstrap.php';
get_part('head');
get_part('header');

$posts = [
    [
        'title' => 'Introdução à IA em Projetos de Software',
        'date' => '20 Jan 2026',
        'category' => 'Inteligência Artificial',
        'excerpt' => 'Como integrar modelos de linguagem de grande escala (LLMs) em aplicações do mundo real para melhorar a experiência do utilizador.',
        'icon' => 'brain'
    ],
    [
        'title' => 'Melhores Práticas em DevOps com Docker',
        'date' => '15 Jan 2026',
        'category' => 'DevOps',
        'excerpt' => 'Um guia sobre como containerizar as suas aplicações Spring Boot e configurar pipelines CI/CD eficientes.',
        'icon' => 'container'
    ],
    [
        'title' => 'Segurança em Redes Empresariais',
        'date' => '10 Jan 2026',
        'category' => 'ICT & Redes',
        'excerpt' => 'Protegendo infraestruturas críticas: do Active Directory à implementação de firewalls robustas.',
        'icon' => 'shield-check'
    ]
];
?>
<main class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-16">
            <h1 class="text-4xl font-bold mb-4">Publicações & <span class="text-brand-blue">Blog</span></h1>
            <p class="text-gray-600 dark:text-gray-400">Partilhando conhecimento sobre tecnologia, engenharia e inovação.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach($posts as $post): ?>
            <article class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 overflow-hidden shadow-sm card-hover flex flex-col">
                <div class="p-8 bg-gray-50 dark:bg-gray-900/50 flex items-center justify-center border-b border-gray-100 dark:border-gray-700">
                    <i data-lucide="<?= $post['icon'] ?>" class="w-12 h-12 text-brand-blue opacity-50"></i>
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[10px] font-bold uppercase tracking-wider text-brand-blue bg-brand-blue/10 px-2 py-1 rounded"><?= $post['category'] ?></span>
                        <time class="text-xs text-gray-400"><?= $post['date'] ?></time>
                    </div>
                    <h3 class="text-xl font-bold mb-3"><?= $post['title'] ?></h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-6 flex-grow"><?= $post['excerpt'] ?></p>
                    <a href="#" class="text-brand-blue font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">Ler Artigo <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

        <div class="mt-20 bg-brand-blue/5 rounded-3xl p-12 text-center border border-brand-blue/10">
            <h2 class="text-2xl font-bold mb-4">Quer receber novidades técnicas?</h2>
            <p class="text-gray-600 dark:text-gray-400 mb-8 max-w-xl mx-auto">Subscreva para receber notificações sobre novos artigos e insights sobre engenharia de software e ICT.</p>
            <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" placeholder="seu-email@exemplo.com" class="flex-grow px-6 py-3 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 focus:outline-none focus:border-brand-blue transition-colors">
                <button type="button" class="bg-brand-blue text-white px-8 py-3 rounded-xl font-bold hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/20">Subscrever</button>
            </form>
        </div>
    </div>
</main>
<?php get_part('footer'); ?>
