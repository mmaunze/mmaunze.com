<?php
require_once __DIR__ . '/../config/bootstrap.php';

get_part('head');
get_part('header');
?>
<main class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-12 items-start">
            <!-- Sidebar Info -->
            <div class="md:col-span-1 space-y-8">
                <div class="bg-gray-50 dark:bg-gray-900 p-8 rounded-2xl border border-gray-100 dark:border-gray-800">
                    <div class="w-32 h-32 bg-brand-blue rounded-2xl mx-auto mb-6 flex items-center justify-center text-white">
                        <i data-lucide="user" class="w-16 h-16"></i>
                    </div>
                    <h1 class="text-2xl font-bold text-center mb-2">Meldo L. Maúnze</h1>
                    <p class="text-brand-blue font-medium text-center mb-6">Software & ICT Engineer</p>
                    
                    <div class="space-y-4 border-t border-gray-200 dark:border-gray-700 pt-6">
                        <div class="flex items-center gap-3 text-sm">
                            <i data-lucide="map-pin" class="w-5 h-5 text-gray-400"></i>
                            <span>Maputo, Moçambique</span>
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i data-lucide="mail" class="w-5 h-5 text-gray-400"></i>
                            <span>meldo@mmaunze.com</span>
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <i data-lucide="graduation-cap" class="w-5 h-5 text-gray-400"></i>
                            <span>Lic. Eng. Informática</span>
                        </div>
                    </div>
                </div>

                <div class="bg-brand-blue/5 p-8 rounded-2xl border border-brand-blue/10">
                    <h3 class="font-bold mb-4 flex items-center gap-2">
                        <i data-lucide="languages" class="w-5 h-5 text-brand-blue"></i> Idiomas
                    </h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span>Português</span>
                                <span class="text-brand-blue">Nativo</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-gray-700 h-2 rounded-full overflow-hidden">
                                <div class="bg-brand-blue h-full" style="width: 100%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span>Inglês</span>
                                <span class="text-brand-blue">Avançado</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-gray-700 h-2 rounded-full overflow-hidden">
                                <div class="bg-brand-blue h-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span>Changana/Tsonga</span>
                                <span class="text-brand-blue">Nativo</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-gray-700 h-2 rounded-full overflow-hidden">
                                <div class="bg-brand-blue h-full" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="md:col-span-2 space-y-12">
                <section>
                    <h2 class="text-3xl font-bold mb-6 flex items-center gap-3">
                        <i data-lucide="user-check" class="w-8 h-8 text-brand-blue"></i> Perfil Profissional
                    </h2>
                    <div class="prose dark:prose-invert max-w-none text-gray-600 dark:text-gray-400 leading-relaxed space-y-4">
                        <p>
                            Sou um Engenheiro de Software apaixonado por resolver problemas complexos através da tecnologia. Com mais de 5 anos de experiência prática, desenvolvi uma base sólida em desenvolvimento full-stack, com foco especial em ecossistemas Java (Spring Boot) e infraestruturas de rede empresariais.
                        </p>
                        <p>
                            Minha trajetória é marcada pela versatilidade: atuei desde o desenvolvimento de APIs REST escaláveis e sistemas de gestão acadêmica até a administração de servidores Windows e infraestruturas críticas de rede em ambientes hospitalares e hoteleiros.
                        </p>
                        <blockquote class="border-l-4 border-brand-blue pl-4 italic my-6">
                            "Minha missão é entregar a agilidade de um departamento inteiro com a tranquilidade e o foco de um profissional dedicado."
                        </blockquote>
                    </div>
                </section>

                <section>
                    <h2 class="text-3xl font-bold mb-6 flex items-center gap-3">
                        <i data-lucide="graduation-cap" class="w-8 h-8 text-brand-blue"></i> Educação
                    </h2>
                    <div class="space-y-6">
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-bold text-lg">Licenciatura em Engenharia Informática</h3>
                                <span class="px-3 py-1 bg-brand-blue/10 text-brand-blue rounded-full text-xs font-bold">2020 - 2025</span>
                            </div>
                            <p class="text-brand-blue font-medium mb-4">Universidade Lúrio, Pemba, Moçambique</p>
                            <p class="text-sm text-gray-500 mb-4">Formação abrangente focada em engenharia de software, redes e sistemas inteligentes.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 rounded text-xs">Redes & Segurança</span>
                                <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 rounded text-xs">Engenharia de Software</span>
                                <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 rounded text-xs">IA</span>
                                <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 rounded text-xs">Gestão de Projetos</span>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <h2 class="text-3xl font-bold mb-6 flex items-center gap-3">
                        <i data-lucide="award" class="w-8 h-8 text-brand-blue"></i> Filosofia de Trabalho
                    </h2>
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="p-6 bg-gray-50 dark:bg-gray-900 rounded-xl">
                            <h4 class="font-bold mb-2">Qualidade Técnica</h4>
                            <p class="text-sm text-gray-500">Compromisso com código limpo, modular e infraestruturas seguras e resilientes.</p>
                        </div>
                        <div class="p-6 bg-gray-50 dark:bg-gray-900 rounded-xl">
                            <h4 class="font-bold mb-2">Aprendizado Contínuo</h4>
                            <p class="text-sm text-gray-500">Sempre atualizado com as últimas tendências em DevOps, IA e desenvolvimento web.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
<?php get_part('footer'); ?>
