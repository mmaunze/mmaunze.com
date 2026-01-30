<?php
require_once __DIR__ . '/../config/bootstrap.php';

$page_title = "Habilidades | Meldo Leonardo Maúnze - Engenheiro Informático";

get_part('head');
get_part('header');

$skill_categories = [
    [
        'title' => 'Linguagens & Core',
        'icon' => 'code-2',
        'skills' => ['Java', 'TypeScript', 'Python', 'C', 'PHP', 'JavaScript', 'HTML/CSS']
    ],
    [
        'title' => 'Bancos de Dados',
        'icon' => 'database',
        'skills' => ['MySQL', 'PostgreSQL', 'SQL Server', 'MongoDB', 'MariaDB', 'Oracle']
    ],
    [
        'title' => 'Frameworks & Libs',
        'icon' => 'layers',
        'skills' => ['Spring Boot', 'Next.js', 'React', 'Vue', 'Node.js', 'Django', 'Laravel']
    ],
    [
        'title' => 'DevOps & Tools',
        'icon' => 'terminal',
        'skills' => ['Git/GitHub', 'Docker', 'Jenkins', 'Linux', 'Maven', 'OpenAPI/Swagger']
    ],
    [
        'title' => 'ICT & Networking',
        'icon' => 'network',
        'skills' => ['Windows Server', 'Active Directory', 'Cabling', 'CCTV', 'Biometria', 'Helpdesk L1/L2']
    ],
    [
        'title' => 'Soft Skills',
        'icon' => 'users',
        'skills' => ['Liderança Técnica', 'Comunicação', 'Pensamento Crítico', 'Proatividade', 'Ética Profissional']
    ]
];
?>
<main class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-16">
            <h1 class="text-4xl font-bold mb-4">Minhas <span class="text-brand-blue">Habilidades</span></h1>
            <p class="text-gray-600 dark:text-gray-400">Um conjunto diversificado de competências técnicas e interpessoais.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach($skill_categories as $cat): ?>
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm card-hover">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center text-brand-blue">
                        <i data-lucide="<?= $cat['icon'] ?>" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold"><?= $cat['title'] ?></h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <?php foreach($cat['skills'] as $skill): ?>
                    <span class="px-3 py-1 bg-gray-50 dark:bg-gray-900 border border-gray-100 dark:border-gray-700 rounded-lg text-sm font-medium text-gray-600 dark:text-gray-400"><?= $skill ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="mt-20">
            <h2 class="text-2xl font-bold mb-12 text-center">Nível de Proficiência</h2>
            <div class="grid md:grid-cols-2 gap-12 max-w-4xl mx-auto">
                <div class="space-y-6">
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-bold">Backend Development (Java/Spring)</span>
                            <span class="text-brand-blue font-bold">95%</span>
                        </div>
                        <div class="w-full bg-gray-100 dark:bg-gray-800 h-3 rounded-full overflow-hidden">
                            <div class="bg-brand-blue h-full" style="width: 95%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-bold">Frontend Development (React/Next)</span>
                            <span class="text-brand-blue font-bold">85%</span>
                        </div>
                        <div class="w-full bg-gray-100 dark:bg-gray-800 h-3 rounded-full overflow-hidden">
                            <div class="bg-brand-blue h-full" style="width: 85%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-bold">ICT Infrastructure & Networking</span>
                            <span class="text-brand-blue font-bold">90%</span>
                        </div>
                        <div class="w-full bg-gray-100 dark:bg-gray-800 h-3 rounded-full overflow-hidden">
                            <div class="bg-brand-blue h-full" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-bold">Database Management</span>
                            <span class="text-brand-blue font-bold">90%</span>
                        </div>
                        <div class="w-full bg-gray-100 dark:bg-gray-800 h-3 rounded-full overflow-hidden">
                            <div class="bg-brand-blue h-full" style="width: 90%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-bold">DevOps & CI/CD</span>
                            <span class="text-brand-blue font-bold">80%</span>
                        </div>
                        <div class="w-full bg-gray-100 dark:bg-gray-800 h-3 rounded-full overflow-hidden">
                            <div class="bg-brand-blue h-full" style="width: 80%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-bold">Project Management</span>
                            <span class="text-brand-blue font-bold">85%</span>
                        </div>
                        <div class="w-full bg-gray-100 dark:bg-gray-800 h-3 rounded-full overflow-hidden">
                            <div class="bg-brand-blue h-full" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_part('footer'); ?>
