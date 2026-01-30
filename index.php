<?php
require_once __DIR__ . '/config/bootstrap.php';

get_part('head');
get_part('header');
?>
    <main class="pt-20">
        
        <!-- Hero Section -->
        <section id="inicio" class="py-20 md:py-32 hero-gradient text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
            <div class="max-w-7xl mx-auto px-6 relative">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8 text-center md:text-left">
                        <span class="inline-block px-4 py-1 bg-white/20 rounded-md text-sm font-semibold tracking-wide backdrop-blur-sm uppercase">Engenheiro de Software | ICT | DevOps</span>
                        <h1 class="text-5xl md:text-7xl font-extrabold leading-tight">
                            Meldo Leonardo <span class="text-emerald-300">Maúnze</span>
                        </h1>
                        <p class="text-lg md:text-xl text-emerald-50 opacity-90 max-w-xl">
                            Agilidade de um departamento com a tranquilidade de um profissional. Especialista em transformar ideias em sistemas robustos e infraestruturas escaláveis.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                            <a href="<?= url('pages/projetos.php') ?>" class="bg-white text-brand-blue px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-all flex items-center justify-center gap-2 shadow-lg">
                                Ver Projetos <i data-lucide="arrow-right" class="w-5 h-5"></i>
                            </a>
                            <a href="<?= url('pages/contacto.php') ?>" class="border-2 border-white/30 hover:bg-white/10 px-8 py-4 rounded-lg font-bold text-lg transition-all text-center backdrop-blur-sm">
                                Entrar em Contato
                            </a>
                        </div>
                    </div>
                    <div class="hidden md:flex justify-center relative">
                        <div class="relative w-80 h-80">
                            <div class="absolute inset-0 bg-emerald-400/20 rounded-full animate-pulse"></div>
                            <div class="absolute inset-4 bg-white/10 rounded-full backdrop-blur-md border border-white/20 flex items-center justify-center">
                                <i data-lucide="code-2" class="w-32 h-32 text-white opacity-80"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-12 bg-white dark:bg-gray-950 border-b border-gray-100 dark:border-gray-800">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-4xl font-extrabold text-brand-blue mb-2">5+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wider">Anos de Experiência</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-extrabold text-brand-dark mb-2">50+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wider">Projetos Concluídos</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-extrabold text-brand-blue mb-2">4321+</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wider">Horas de Código</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-extrabold text-brand-dark mb-2">100%</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wider">Comprometimento</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brief About Section -->
        <section class="py-24 bg-gray-50 dark:bg-gray-900/50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">Especialista em Engenharia de <span class="text-brand-blue">Sistemas</span></h2>
                        <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-8">
                            Com formação em Engenharia Informática pela Universidade Lúrio, foco minha atuação na criação de soluções full-stack, gestão de infraestruturas críticas e consultoria ICT. Minha abordagem combina rigor técnico com agilidade para entregar resultados que impulsionam negócios.
                        </p>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-600">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="font-medium">Software Engineering</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-600">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="font-medium">ICT & Redes</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-600">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="font-medium">DevOps & Cloud</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-600">
                                    <i data-lucide="check" class="w-5 h-5"></i>
                                </div>
                                <span class="font-medium">Database Admin</span>
                            </div>
                        </div>
                        <a href="<?= url('pages/sobre.php') ?>" class="text-brand-blue font-bold flex items-center gap-2 hover:gap-4 transition-all">
                            Saiba mais sobre minha trajetória <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 card-hover">
                            <i data-lucide="layers" class="w-10 h-10 text-brand-blue mb-4"></i>
                            <h3 class="font-bold mb-2">Fullstack</h3>
                            <p class="text-sm text-gray-500">Desenvolvimento de ponta a ponta.</p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 mt-8 card-hover">
                            <i data-lucide="shield-check" class="w-10 h-10 text-brand-dark mb-4"></i>
                            <h3 class="font-bold mb-2">Segurança</h3>
                            <p class="text-sm text-gray-500">Proteção de dados e infraestrutura.</p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 card-hover">
                            <i data-lucide="cpu" class="w-10 h-10 text-brand-blue mb-4"></i>
                            <h3 class="font-bold mb-2">IA & Dados</h3>
                            <p class="text-sm text-gray-500">Sistemas inteligentes e análise.</p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 mt-8 card-hover">
                            <i data-lucide="network" class="w-10 h-10 text-brand-dark mb-4"></i>
                            <h3 class="font-bold mb-2">Networking</h3>
                            <p class="text-sm text-gray-500">Redes empresariais e suporte.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-brand-blue text-white">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-5xl font-bold mb-8">Pronto para elevar o nível do seu projeto tecnológico?</h2>
                <p class="text-xl opacity-90 mb-10 max-w-2xl mx-auto">
                    Seja para desenvolvimento de software, consultoria em TI ou gestão de infraestrutura, estou aqui para ajudar.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?= url('pages/contacto.php') ?>" class="bg-white text-brand-blue px-10 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-all">
                        Solicitar Consultoria
                    </a>
                    <a href="https://linkedin.com/in/mmaunze" target="_blank" class="bg-brand-blue border-2 border-white/30 px-10 py-4 rounded-lg font-bold text-lg hover:bg-white/10 transition-all">
                        Ver LinkedIn
                    </a>
                </div>
            </div>
        </section>

    </main>
<?php
get_part('footer'); ?>
