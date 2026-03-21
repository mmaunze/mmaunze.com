<?php 
require_once __DIR__ . '/../config/bootstrap.php';

$page_title = "Experiência | Meldo Leonardo Maúnze - Engenheiro Informático";

get_part('head');
get_part('header');
?>

<main class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Header Section -->
        <div class="mb-16">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h1 class="text-5xl font-bold mb-4">
                        Experiência <span class="text-brand-blue">Profissional</span>
                    </h1>
                    <p class="text-lg text-gray-600 dark:text-gray-400">
                        Uma trajetória focada em excelência técnica e inovação.
                    </p>
                </div>
                
                <!-- CV Download Section -->
                <div class="flex flex-col gap-3">
                    <button onclick="downloadCV('generico')" 
                            class="px-6 py-3 bg-brand-blue text-white rounded-lg font-medium hover:bg-brand-blue/90 transition-all shadow-md hover:shadow-lg flex items-center gap-2 justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        CV Genérico
                    </button>
                    <button onclick="downloadCV('ict')" 
                            class="px-6 py-3 bg-gray-700 text-white rounded-lg font-medium hover:bg-gray-600 transition-all shadow-md hover:shadow-lg flex items-center gap-2 justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                        CV ICT
                    </button>
                    <button onclick="downloadCV('dev')" 
                            class="px-6 py-3 bg-purple-600 text-white rounded-lg font-medium hover:bg-purple-700 transition-all shadow-md hover:shadow-lg flex items-center gap-2 justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                        CV Developer
                    </button>
                </div>
            </div>
        </div>

        <!-- Timeline -->
        <div class="space-y-8 relative">
            <!-- Vertical line -->
            <div class="hidden md:block absolute left-0 top-0 bottom-0 w-0.5 bg-gradient-to-b from-brand-blue via-purple-500 to-transparent ml-4"></div>

            <!-- DotCom - Backend Java Developer (NOVO) -->
            <div class="relative pl-0 md:pl-12">
                <div class="hidden md:block absolute left-0 top-6 w-8 h-8 bg-brand-blue rounded-full border-4 border-white dark:border-gray-900 shadow-lg ring-4 ring-brand-blue/20"></div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border-2 border-brand-blue/40 dark:border-brand-blue/30 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 relative overflow-hidden">
                    <!-- "Novo" badge -->
                    <div class="absolute top-4 right-4">
                        <span class="px-3 py-1 bg-brand-blue text-white text-xs font-bold rounded-full uppercase tracking-wider shadow"></span>
                    </div>
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between mb-6 gap-4">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-2">Backend Java Developer</h3>
                            <p class="text-brand-blue font-semibold text-lg">DotCom</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Moçambique · Full-time</p>
                        </div>
                        <span class="px-5 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 rounded-full text-sm font-bold whitespace-nowrap self-start">
                            Mar 2026 - Presente
                        </span>
                    </div>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-3 text-sm leading-relaxed">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Desenvolvimento de sistemas backend robustos e escaláveis com <strong>Java</strong> e <strong>Spring Boot</strong>.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Desenho e implementação de <strong>REST APIs</strong> para integração com sistemas e clientes externos.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Colaboração em equipa no desenvolvimento de soluções digitais orientadas ao mercado moçambicano.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- MEFEMA Systems - Solutions Architect & Technical Lead -->
            <div class="relative pl-0 md:pl-12">
                <div class="hidden md:block absolute left-0 top-6 w-8 h-8 bg-brand-blue rounded-full border-4 border-white dark:border-gray-900 shadow-lg"></div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between mb-6 gap-4">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-2">Solutions Architect & Technical Lead</h3>
                            <p class="text-brand-blue font-semibold text-lg">MEFEMA Systems</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Maputo Province, Mozambique · Remoto</p>
                        </div>
                        <span class="px-5 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 rounded-full text-sm font-bold whitespace-nowrap self-start">
                            Set 2025 - Presente
                        </span>
                    </div>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-3 text-sm leading-relaxed">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Lidero a definição da arquitectura técnica e stack tecnológico da empresa, seleccionando e implementando soluções modernas (React/Next.js, Node.js/Python, cloud AWS/Azure/GCP, integrações M-Pesa e APIs financeiras).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Desenvolvo e arquitecto aplicações web e mobile personalizadas, sistemas ERP simplificados e plataformas de e-commerce para PMEs moçambicanas.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Gerencio o ciclo completo de projectos de transformação digital: análise de requisitos, desenho de soluções, desenvolvimento, integração de sistemas legados, QA, deploy e manutenção em cloud.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Supervisiono uma equipa técnica multidisciplinar (>15 profissionais), garantindo qualidade, prazos e alinhamento com objectivos de negócio.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Responsável pela inovação contínua: adopção de novas tecnologias, modernização de software e formação interna/externa em ferramentas de produtividade e cibersegurança.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Website: <a href="https://mefemasys.co.mz" target="_blank" rel="noopener noreferrer" class="text-brand-blue hover:underline font-medium">mefemasys.co.mz</a></span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Centro Médico Pro Vida -->
            <div class="relative pl-0 md:pl-12">
                <div class="hidden md:block absolute left-0 top-6 w-8 h-8 bg-purple-500 rounded-full border-4 border-white dark:border-gray-900 shadow-lg"></div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between mb-6 gap-4">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-2">Especialista em TI</h3>
                            <p class="text-brand-blue font-semibold text-lg">Centro Médico Pro Vida</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Pemba, Cabo Delgado, Moçambique · Híbrido</p>
                        </div>
                        <span class="px-5 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm font-bold whitespace-nowrap self-start">
                            Jul 2025 - Nov 2025 · 5 meses
                        </span>
                    </div>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-3 text-sm leading-relaxed">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Diagnóstico e manutenção de redes, assegurando conectividade contínua em toda a infraestrutura organizacional.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Configuração e gestão de impressoras em rede para optimização de fluxos operacionais.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Suporte técnico remoto e presencial, resolvendo incidentes de hardware e software com eficiência.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Manutenção e configuração de sistemas operativos Windows com actualizações regulares e integridade do sistema.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Validação de dados em Excel para verificação de relatórios, garantindo consistência e precisão da informação.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- FECN/Unilúrio - Fullstack Developer -->
            <div class="relative pl-0 md:pl-12">
                <div class="hidden md:block absolute left-0 top-6 w-8 h-8 bg-brand-blue rounded-full border-4 border-white dark:border-gray-900 shadow-lg"></div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between mb-6 gap-4">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-2">Desenvolvedor Fullstack</h3>
                            <p class="text-brand-blue font-semibold text-lg">FECN, Unilúrio, Pemba</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Sistema Interno de Gestão Académica e Pedagógica (ESIRA V2)</p>
                        </div>
                        <span class="px-5 py-2 bg-brand-blue/10 text-brand-blue rounded-full text-sm font-bold whitespace-nowrap self-start">
                            Abr 2024 - Ago 2025 · 1 ano 5 meses
                        </span>
                    </div>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-3 text-sm leading-relaxed">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Desenvolvi e mantive um sistema integrado de gestão, atendendo a mais de 500 utentes, com foco em processos académicos e administrativos.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Projectei e implementei uma REST API robusta com <strong>Java</strong> e <strong>Spring Boot</strong>, expondo mais de 800 endpoints documentados com <strong>OpenAPI (Swagger)</strong>.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Utilizei <strong>PostgreSQL</strong> como base de dados principal, realizando optimizações de esquema e consultas para garantir alta escalabilidade e desempenho.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Implementei um sistema de segurança robusto utilizando <strong>Spring Security</strong> com autenticação JWT e OAuth2, e controle de acesso baseado em papéis (RBAC) com 12 diferentes níveis de acesso.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Configurei um pipeline de CI/CD utilizando <strong>Docker</strong> para containerização e automação de builds e deployments.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Garanti a integração fluida com o <em>front end</em> desenvolvido em <strong>Next.js</strong>, demonstrando versatilidade em ambiente full-stack.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Sistema disponível em <a href="https://esira.unilurio.ac.mz" target="_blank" rel="noopener noreferrer" class="text-brand-blue hover:underline font-medium">esira.unilurio.ac.mz</a></span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- LifeStyle - Analista Software e Programador -->
            <div class="relative pl-0 md:pl-12">
                <div class="hidden md:block absolute left-0 top-6 w-8 h-8 bg-cyan-500 rounded-full border-4 border-white dark:border-gray-900 shadow-lg"></div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between mb-6 gap-4">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-2">Analista Software e Programador</h3>
                            <p class="text-brand-blue font-semibold text-lg">LifeStyle · Estágio</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Pemba, Cabo Delgado, Moçambique · Presencial</p>
                        </div>
                        <span class="px-5 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm font-bold whitespace-nowrap self-start">
                            Set 2024 - Out 2024 · 2 meses
                        </span>
                    </div>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-3 text-sm leading-relaxed">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Análise de processos empresariais e identificação de melhorias tecnológicas.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Criação de diagramas UML e fluxos de trabalho para sistemas empresariais.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Desenho de arquitectura técnica de sistemas, incluindo organização de bases de dados.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-cyan-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Estimativa de custos e planeamento de projectos com metodologias RUP e Ágeis.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- CONVERSU - ICT Manager -->
            <div class="relative pl-0 md:pl-12">
                <div class="hidden md:block absolute left-0 top-6 w-8 h-8 bg-indigo-500 rounded-full border-4 border-white dark:border-gray-900 shadow-lg"></div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between mb-6 gap-4">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-2">ICT Manager</h3>
                            <p class="text-brand-blue font-semibold text-lg">CONVERSU - Construções Verdes e Sustentáveis</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Nacala, Nampula, Moçambique · Híbrido</p>
                        </div>
                        <span class="px-5 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm font-bold whitespace-nowrap self-start">
                            Abr 2024 - Mai 2025 · 1 ano 2 meses
                        </span>
                    </div>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-3 text-sm leading-relaxed">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-indigo-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Gestão completa da infraestrutura TI, incluindo servidores Windows, Office 365 e VPN.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-indigo-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Desenvolvimento e manutenção de bases de dados corporativas.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-indigo-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Implementação de soluções de cabeamento estruturado e configuração de redes.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-indigo-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Suporte técnico especializado e gestão de equipamentos.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- CONVERSU - Web Developer -->
            <div class="relative pl-0 md:pl-12">
                <div class="hidden md:block absolute left-0 top-6 w-8 h-8 bg-blue-500 rounded-full border-4 border-white dark:border-gray-900 shadow-lg"></div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between mb-6 gap-4">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-2">Web Developer</h3>
                            <p class="text-brand-blue font-semibold text-lg">CONVERSU - Construções Verdes e Sustentáveis</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Nacala, Nampula, Moçambique · Remoto</p>
                        </div>
                        <span class="px-5 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm font-bold whitespace-nowrap self-start">
                            Abr 2024 - Jun 2024 · 3 meses
                        </span>
                    </div>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-3 text-sm leading-relaxed">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Projectei e desenvolvi o website corporativo completo utilizando PHP, HTML, CSS, JavaScript, jQuery e AJAX.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Projectei e implementei a arquitectura da base de dados utilizando MySQL.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Desenvolvi dashboard administrativo para gestão autónoma do blog por utilizadores não técnicos.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Configurei domínio e alojamento na Hostinger, gerindo o ciclo completo de deployment.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Website disponível em <a href="https://conversu.co.mz" target="_blank" rel="noopener noreferrer" class="text-brand-blue hover:underline font-medium">conversu.co.mz</a></span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Network & Computers - Técnico de Informática -->
            <div class="relative pl-0 md:pl-12">
                <div class="hidden md:block absolute left-0 top-6 w-8 h-8 bg-teal-500 rounded-full border-4 border-white dark:border-gray-900 shadow-lg"></div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between mb-6 gap-4">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-2">Técnico de Informática e Helpdesk</h3>
                            <p class="text-brand-blue font-semibold text-lg">Network & Computers · Freelance</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Pemba, Cabo Delgado, Moçambique · Híbrido</p>
                        </div>
                        <span class="px-5 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm font-bold whitespace-nowrap self-start">
                            Abr 2023 - Set 2024 · 1 ano 6 meses
                        </span>
                    </div>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-3 text-sm leading-relaxed">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-teal-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Montagem e configuração de computadores, impressoras e dispositivos de rede com suporte a hardware end-to-end.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-teal-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Diagnóstico e resolução de falhas técnicas em equipamentos de rede, minimizando o tempo de inactividade.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-teal-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Configuração de redes locais LAN/WAN e WLAN, garantindo conectividade e implementação de medidas de segurança.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-teal-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Suporte técnico a utilizadores finais com elaboração de documentação técnica e manutenção preventiva e correctiva.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Projecto Pessoal - Sistema de Gestão de Solicitações -->
            <div class="relative pl-0 md:pl-12">
                <div class="hidden md:block absolute left-0 top-6 w-8 h-8 bg-emerald-500 rounded-full border-4 border-white dark:border-gray-900 shadow-lg"></div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between mb-6 gap-4">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-2">Software Developer — Sistema de Gestão de Solicitações</h3>
                            <p class="text-brand-blue font-semibold text-lg">Projecto Pessoal · Self-employed</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Remoto</p>
                        </div>
                        <span class="px-5 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm font-bold whitespace-nowrap self-start">
                            Dez 2023 - Mar 2024 · 4 meses
                        </span>
                    </div>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-3 text-sm leading-relaxed">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Análise completa de requisitos e engenharia de software com metodologia SCRUM para um sistema de apoio a secretárias.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Backend com <strong>Spring Boot</strong> e REST APIs; base de dados <strong>MySQL</strong>; frontend com <strong>Vue.js</strong> em arquitectura component-based.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Testes unitários e de integração com <strong>JUnit</strong> e gestão de versões com Git.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-emerald-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Deploy completo em ambiente de produção. Código disponível em <a href="https://github.com/mmaunze/sirequerimentos" target="_blank" rel="noopener noreferrer" class="text-brand-blue hover:underline font-medium">github.com/mmaunze/sirequerimentos</a></span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- @BComputers -->
            <div class="relative pl-0 md:pl-12">
                <div class="hidden md:block absolute left-0 top-6 w-8 h-8 bg-lime-500 rounded-full border-4 border-white dark:border-gray-900 shadow-lg"></div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between mb-6 gap-4">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-2">Information Technology Officer</h3>
                            <p class="text-brand-blue font-semibold text-lg">@BComputers · Freelance</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Nampula, Moçambique · Remoto</p>
                        </div>
                        <span class="px-5 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm font-bold whitespace-nowrap self-start">
                            Mai 2023 - Jan 2024 · 9 meses
                        </span>
                    </div>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-3 text-sm leading-relaxed">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-lime-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Instalação, configuração e manutenção de sistemas operativos Windows e Linux em ambiente de rede.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-lime-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Suporte técnico a utilizadores para incidentes de hardware e software, com assistência remota e presencial.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-lime-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Gestão de contas de utilizador, permissões e controlos de acesso, aplicando protocolos de segurança adequados.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-lime-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Implementação de soluções de backup e recuperação de dados para salvaguarda de informação crítica.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Kirimizi Hotel -->
            <div class="relative pl-0 md:pl-12">
                <div class="hidden md:block absolute left-0 top-6 w-8 h-8 bg-yellow-500 rounded-full border-4 border-white dark:border-gray-900 shadow-lg"></div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between mb-6 gap-4">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-2">ICT Intern</h3>
                            <p class="text-brand-blue font-semibold text-lg">Kirimizi Hotel & Restaurante · Estágio</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Pemba, Cabo Delgado, Moçambique · Presencial</p>
                        </div>
                        <span class="px-5 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm font-bold whitespace-nowrap self-start">
                            Nov 2022 - Mai 2023 · 7 meses
                        </span>
                    </div>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-3 text-sm leading-relaxed">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Montagem e configuração de sistemas CCTV, incluindo posicionamento de câmaras e configuração de DVR/NVR.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Instalação, configuração e manutenção de sistemas operativos e impressoras para suporte a operações hoteleiras.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Planeamento, instalação e reparação de cabeamento estruturado CAT5e e CAT6 certificado com testes de desempenho.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Monitorização de desempenho de rede, análise de tráfego e diagnóstico proactivo de falhas.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Universidade Lúrio -->
            <div class="relative pl-0 md:pl-12">
                <div class="hidden md:block absolute left-0 top-6 w-8 h-8 bg-orange-500 rounded-full border-4 border-white dark:border-gray-900 shadow-lg"></div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-100 dark:border-gray-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex flex-col lg:flex-row lg:items-start justify-between mb-6 gap-4">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-2">Software Engineer — Sistema de Gestão de Biblioteca</h3>
                            <p class="text-brand-blue font-semibold text-lg">Universidade Lúrio · Aprendizagem</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Pemba, Cabo Delgado, Moçambique · Presencial</p>
                        </div>
                        <span class="px-5 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full text-sm font-bold whitespace-nowrap self-start">
                            Jun 2021 - Set 2022 · 1 ano 4 meses
                        </span>
                    </div>
                    <ul class="text-gray-600 dark:text-gray-400 space-y-3 text-sm leading-relaxed">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Análise de requisitos, estudo do negócio, estimativa de custos e planeamento de projecto com metodologia RUP.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Desenho e implementação do esquema de base de dados com <strong>PostgreSQL</strong> para gestão de biblioteca.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Frontend com <strong>Vue.js</strong> e backend com <strong>Java Spring Boot</strong>, com REST APIs e funcionalidades de catalogação, empréstimos e relatórios.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-orange-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Testes de sistema, validação de requisitos, deployment e documentação completa para manutenção futura. Código em <a href="https://github.com/mmaunze/api.esib.com" target="_blank" rel="noopener noreferrer" class="text-brand-blue hover:underline font-medium">github.com/mmaunze/api.esib.com</a></span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Formação Voluntária -->
        <div class="mt-20 mb-16">
            <h2 class="text-3xl font-bold mb-8">Formação <span class="text-brand-blue">Voluntária</span></h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-gradient-to-br from-pink-50 to-purple-50 dark:from-gray-800 dark:to-gray-800 p-6 rounded-xl border border-pink-100 dark:border-gray-700 shadow-md">
                    <h3 class="text-xl font-bold mb-2">Formador Voluntário</h3>
                    <p class="text-brand-blue font-semibold">African Girls Can Code Initiative</p>
                    <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Mai 2025 · 1 mês · Pemba, Cabo Delgado</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-3">Formação em HTML5, Design de Sistemas e Desenvolvimento Web para jovens raparigas em Cabo Delgado, contribuindo para a inclusão digital feminina no sector tecnológico.</p>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-gray-800 dark:to-gray-800 p-6 rounded-xl border border-blue-100 dark:border-gray-700 shadow-md">
                    <h3 class="text-xl font-bold mb-2">Formador Voluntário</h3>
                    <p class="text-brand-blue font-semibold">Code Like a Girl</p>
                    <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Ago 2024 · 1 mês · Miézi, Cabo Delgado</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-3">Ensino de HTML5, CSS, JavaScript e fundamentos de UX/UI a jovens mulheres, num ambiente de aprendizagem inclusivo e prático.</p>
                </div>
            </div>
        </div>

        <!-- Outras Experiências Breves -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold mb-8">Outras <span class="text-brand-blue">Experiências</span></h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-100 dark:border-gray-700 shadow-md hover:shadow-lg transition-all">
                    <h3 class="text-lg font-bold mb-2">Técnico de TI</h3>
                    <p class="text-brand-blue font-semibold text-sm">SERNIC</p>
                    <p class="text-gray-500 dark:text-gray-400 text-xs mt-1">Ago 2024 · 1 mês · Freelance</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-3">Instalação e configuração de SO, redes, impressoras; segurança (antivírus, controlo de acessos); helpdesk e formação de utilizadores.</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-100 dark:border-gray-700 shadow-md hover:shadow-lg transition-all">
                    <h3 class="text-lg font-bold mb-2">Técnico de ICT</h3>
                    <p class="text-brand-blue font-semibold text-sm">SPAR VIP Moçambique</p>
                    <p class="text-gray-500 dark:text-gray-400 text-xs mt-1">Jun 2024 · 1 mês · Pemba · Freelance</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-3">Diagnóstico e manutenção de rede; configuração de routers, switches e APs; gestão de DHCP/DNS; segurança de rede e VPN.</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl border border-gray-100 dark:border-gray-700 shadow-md hover:shadow-lg transition-all">
                    <h3 class="text-lg font-bold mb-2">IT Consultant</h3>
                    <p class="text-brand-blue font-semibold text-sm">Adicional Moçambique</p>
                    <p class="text-gray-500 dark:text-gray-400 text-xs mt-1">Jun 2024 · 1 mês · Pemba · Freelance</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-3">Configuração de rede e equipamentos; instalação de sistemas biométricos integrados na infraestrutura de rede existente.</p>
                </div>
            </div>
        </div>

    </div>
</main>

<script>
/**
 * Script para calcular automaticamente a duração da experiência profissional.
 * Regra: Início no dia 1 do primeiro mês, fim no dia 28 do último mês.
 */
function updateExperienceDurations() {
    const monthMap = {
        'Jan': 0, 'Fev': 1, 'Mar': 2, 'Abr': 3, 'Mai': 4, 'Jun': 5,
        'Jul': 6, 'Ago': 7, 'Set': 8, 'Out': 9, 'Nov': 10, 'Dez': 11
    };

    const experienceElements = document.querySelectorAll('span.whitespace-nowrap');
    
    experienceElements.forEach(el => {
        const text = el.textContent.trim();
        const match = text.match(/([A-Z][a-z]{2}\s\d{4})\s-\s(Presente|[A-Z][a-z]{2}\s\d{4})/);
        
        if (match) {
            const startStr = match[1];
            const endStr = match[2];
            
            const startParts = startStr.split(' ');
            const startDate = new Date(parseInt(startParts[1]), monthMap[startParts[0]], 1);
            
            let endDate;
            if (endStr === 'Presente') {
                endDate = new Date();
            } else {
                const endParts = endStr.split(' ');
                endDate = new Date(parseInt(endParts[1]), monthMap[endParts[0]], 28);
            }
            
            let months = (endDate.getFullYear() - startDate.getFullYear()) * 12;
            months += endDate.getMonth() - startDate.getMonth();
            
            if (endDate.getDate() >= 27) {
                months += 1;
            }
            
            if (months < 1) months = 1;

            const years = Math.floor(months / 12);
            const remainingMonths = months % 12;
            
            let durationText = '';
            if (years > 0) {
                durationText += years + (years === 1 ? ' ano' : ' anos');
            }
            if (remainingMonths > 0) {
                if (durationText !== '') durationText += ' ';
                durationText += remainingMonths + (remainingMonths === 1 ? ' mês' : ' meses');
            }
            
            if (durationText === '') durationText = '1 mês';
            
            el.innerHTML = `${startStr} - ${endStr} · ${durationText}`;
        }
    });
}

document.addEventListener('DOMContentLoaded', updateExperienceDurations);

function downloadCV(type) {
    const cvFiles = {
        'generico': '/documents/cv/CV_Meldo_Maunze.pdf',
        'ict': '/documents/cv/CV_Meldo_Maunze_ICT.pdf',
        'dev': '/documents/cv/CV_Meldo_Maunze_Developer.pdf'
    };
    
    const cvNames = {
        'generico': 'CV Genérico - Meldo Maúnze',
        'ict': 'CV ICT - Meldo Maúnze',
        'dev': 'CV Developer - Meldo Maúnze'
    };
    
    const link = document.createElement('a');
    link.href = cvFiles[type];
    link.download = cvNames[type] + '.pdf';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    
    const button = event.target.closest('button');
    const originalText = button.innerHTML;
    button.innerHTML = '<svg class="w-5 h-5 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg> A transferir...';
    
    setTimeout(() => {
        button.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Transferido!';
        setTimeout(() => {
            button.innerHTML = originalText;
        }, 2000);
    }, 1000);
}
</script>

<?php get_part('footer'); ?>
