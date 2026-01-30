<?php
require_once __DIR__ . '/../config/bootstrap.php';
get_part('head');
get_part('header');
?>
<main class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-16">
            <h1 class="text-4xl font-bold mb-4">Experiência <span class="text-brand-blue">Profissional</span></h1>
            <p class="text-gray-600 dark:text-gray-400">Uma trajetória focada em excelência técnica e inovação.</p>
        </div>
        <div class="space-y-12 relative">
            <!-- Experiências -->
            <div class="grid gap-8">
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm card-hover">
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-4 gap-2">
                        <div>
                            <h3 class="text-xl font-bold">Fullstack Developer</h3>
                            <p class="text-brand-blue font-medium">FECN/Unilúrio, Pemba</p>
                        </div>
                        <span class="px-4 py-1 bg-brand-blue/10 text-brand-blue rounded-full text-sm font-bold self-start md:self-center">Abr 2024 – Ago 2025</span>
                    </div>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-2 list-disc pl-5 text-sm">
                        <li>Desenvolvimento do ESIRA V2 (Gestão Académica para 500+ usuários).</li>
                        <li>Criação de REST API com 800+ endpoints usando Java e Spring Boot.</li>
                        <li>Otimização de base de dados PostgreSQL e implementação de segurança com JWT/OAuth2.</li>
                        <li>Configuração de pipelines CI/CD com Docker e Jenkins.</li>
                    </ul>
                </div>

                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm card-hover">
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-4 gap-2">
                        <div>
                            <h3 class="text-xl font-bold">System Administrator / IT Manager</h3>
                            <p class="text-brand-blue font-medium">Provida Medical Center, Pemba</p>
                        </div>
                        <span class="px-4 py-1 bg-brand-blue/10 text-brand-blue rounded-full text-sm font-bold self-start md:self-center">Jun 2025 – Nov 2025</span>
                    </div>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-2 list-disc pl-5 text-sm">
                        <li>Gestão de Windows Server, Active Directory e Group Policy.</li>
                        <li>Suporte a sistemas críticos (Primavera e Amtronix) e gestão de backups (Dell EMC).</li>
                        <li>Manutenção de infraestrutura de rede, CCTV e controle de acesso biométrico.</li>
                    </ul>
                </div>

                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm card-hover">
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-4 gap-2">
                        <div>
                            <h3 class="text-xl font-bold">Backend Developer</h3>
                            <p class="text-brand-blue font-medium">Conversu, Nacala</p>
                        </div>
                        <span class="px-4 py-1 bg-brand-blue/10 text-brand-blue rounded-full text-sm font-bold self-start md:self-center">Maio 2023 – Abr 2024</span>
                    </div>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-2 list-disc pl-5 text-sm">
                        <li>Desenvolvimento de Sistema de Gestão de Colaboradores (Java Swing, MVC).</li>
                        <li>Migração de sistemas legados para arquitetura web com APIs REST.</li>
                    </ul>
                </div>

                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm card-hover">
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-4 gap-2">
                        <div>
                            <h3 class="text-xl font-bold">Freelance ICT & Software Consultant</h3>
                            <p class="text-brand-blue font-medium">Diversos Clientes (ShopRite, Kulima, etc.)</p>
                        </div>
                        <span class="px-4 py-1 bg-brand-blue/10 text-brand-blue rounded-full text-sm font-bold self-start md:self-center">2022 – Presente</span>
                    </div>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-2 list-disc pl-5 text-sm">
                        <li>Consultoria em redes, CCTV e suporte técnico especializado.</li>
                        <li>Desenvolvimento de sistemas: Xicola (Vue.js), ESIB (Java EE), PreFaculdade (Android/IA).</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_part('footer'); ?>
