<?php
require_once __DIR__ . '/../../config/bootstrap.php';
require_once __DIR__ . '/../../config/url-config.php';

$page_title = "Projectos de Software | Meldo Leonardo Maúnze - Engenheiro Informático";

get_part('head');
get_part('header');
?>
<main class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div>
                <h1 class="text-4xl font-bold mb-4">Projectos de <span class="text-brand-blue">Software</span></h1>
                <p class="text-gray-600 dark:text-gray-400">Soluções desenvolvidas com foco em eficiência e impacto.</p>
            </div>
            
            <div class="flex bg-gray-100 dark:bg-gray-800 p-1 rounded-lg">
                <a href="<?= url('pages/projectos') ?>" class="px-6 py-2 rounded-md text-sm font-bold transition-all text-gray-500 hover:text-gray-700">Todos</a>
                <a href="<?= url('pages/projectos/software') ?>" class="px-6 py-2 rounded-md text-sm font-bold transition-all bg-white dark:bg-gray-700 shadow-sm text-brand-blue">Software</a>
                <a href="<?= url('pages/projectos/ict') ?>" class="px-6 py-2 rounded-md text-sm font-bold transition-all text-gray-500 hover:text-gray-700">ICT & Redes</a>
            </div>
        </div>

        <!-- Category Filter -->
        <div class="flex flex-wrap gap-3 mb-8">
            <button onclick="filterCategory('all')" class="category-filter active px-6 py-2 rounded-lg font-bold text-sm transition-all">
                Todos
            </button>
            <button onclick="filterCategory('websites')" class="category-filter px-6 py-2 rounded-lg font-bold text-sm transition-all">
                Websites
            </button>
            <button onclick="filterCategory('sistemas')" class="category-filter px-6 py-2 rounded-lg font-bold text-sm transition-all">
                Sistemas de Gestão
            </button>
            <button onclick="filterCategory('mobile')" class="category-filter px-6 py-2 rounded-lg font-bold text-sm transition-all">
                Apps Mobile
            </button>
        </div>

        <!-- Loading Spinner -->
        <div id="loading" class="hidden text-center py-12">
            <div class="inline-block animate-spin rounded-full h-12 w-12 border-4 border-brand-blue border-t-transparent"></div>
            <p class="mt-4 text-gray-600 dark:text-gray-400">A carregar projectos...</p>
        </div>

        <!-- Projects Grid -->
        <div id="projects-grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Cards serão carregados via AJAX -->
        </div>

        <!-- Pagination -->
        <div id="pagination" class="flex justify-center items-center gap-2 mt-12">
            <!-- Paginação será gerada via AJAX -->
        </div>
    </div>
</main>

<!-- Modal de Detalhes -->
<div id="project-modal" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center p-6">
    <div class="bg-white dark:bg-gray-800 rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto shadow-2xl">
        <div class="sticky top-0 bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 p-6 flex justify-between items-start">
            <div>
                <h2 id="modal-title" class="text-3xl font-bold mb-2"></h2>
                <div id="modal-tags" class="flex gap-2"></div>
            </div>
            <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>
        </div>
        
        <div class="p-6">
            <div id="modal-icon" class="h-48 rounded-xl mb-6 flex items-center justify-center"></div>
            
            <div class="space-y-6">
                <div>
                    <h3 class="font-bold text-lg mb-2">Descrição</h3>
                    <p id="modal-description" class="text-gray-600 dark:text-gray-400"></p>
                </div>
                
                <div>
                    <h3 class="font-bold text-lg mb-2">Tecnologias</h3>
                    <div id="modal-technologies" class="flex flex-wrap gap-2"></div>
                </div>
                
                <div>
                    <h3 class="font-bold text-lg mb-2">Características</h3>
                    <ul id="modal-features" class="list-disc list-inside space-y-1 text-gray-600 dark:text-gray-400"></ul>
                </div>
                
                <div id="modal-link-container" class="pt-4">
                    <!-- Link será inserido aqui -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let currentPage = 1;
let currentCategory = 'all';
const projectsPerPage = 6;

// Base de dados de projectos
const allProjects = [
    // ===== WEBSITES =====
    {
        id: 101,
        title: "Mefema Systems",
        category: "websites",
        subcategory: "corporate",
        shortDescription: "Website corporativo da Mefema Systems, empresa especializada em soluções de gestão empresarial.",
        fullDescription: "Website institucional da Mefema Systems que apresenta o portfólio de produtos e serviços da empresa. Plataforma moderna com design responsivo e optimizada para SEO.",
        tags: ["Next.js", "Corporate"],
        technologies: ["Next.js", "Tailwind CSS", "TypeScript", "Vercel"],
        icon: "building-2",
        iconColor: "brand-blue",
        link: "https://mefemasys.co.mz",
        status: "live",
        features: [
            "Design moderno e responsivo",
            "Apresentação de produtos e serviços",
            "Formulário de contacto integrado",
            "Optimização SEO",
            "Performance optimizada"
        ]
    },
    {
        id: 102,
        title: "Conversu",
        category: "websites",
        subcategory: "platform",
        shortDescription: "Plataforma de comunicação e colaboração empresarial com ferramentas integradas.",
        fullDescription: "Plataforma completa de comunicação empresarial que integra chat, videoconferência e ferramentas de colaboração. Desenvolvida para melhorar a comunicação interna das organizações.",
        tags: ["Vue.js", "WebRTC"],
        technologies: ["Vue.js", "Node.js", "WebRTC", "Socket.io", "PostgreSQL"],
        icon: "message-circle",
        iconColor: "emerald-500",
        link: "https://conversu.co.mz",
        status: "live",
        features: [
            "Chat em tempo real",
            "Videoconferência integrada",
            "Partilha de ficheiros",
            "Gestão de equipas",
            "Notificações push"
        ]
    },
    {
        id: 103,
        title: "Engenharia Lean",
        category: "websites",
        subcategory: "corporate",
        shortDescription: "Portal de consultoria em metodologias Lean aplicadas à engenharia e gestão.",
        fullDescription: "Website especializado em consultoria Lean para empresas que desejam optimizar processos e reduzir desperdícios. Inclui recursos educativos e estudos de caso.",
        tags: ["Next.js", "Educational"],
        technologies: ["Next.js", "MDX", "Tailwind CSS", "Vercel"],
        icon: "trending-up",
        iconColor: "blue-500",
        link: "https://engenharialean.com",
        status: "live",
        features: [
            "Blog técnico sobre Lean",
            "Estudos de caso detalhados",
            "Recursos educativos",
            "Formulário de consultoria",
            "Design profissional"
        ]
    },
    {
        id: 104,
        title: "Cesário Machava",
        category: "websites",
        subcategory: "portfolio",
        shortDescription: "Portfólio pessoal e blog de engenharia e tecnologia.",
        fullDescription: "Website pessoal que apresenta projectos, artigos técnicos e experiência profissional na área de engenharia de software.",
        tags: ["Next.js", "Portfolio"],
        technologies: ["Next.js", "Tailwind CSS", "MDX"],
        icon: "user",
        iconColor: "purple-500",
        link: "https://cesariomachava.conversu.co.mz",
        status: "live",
        features: [
            "Portfólio de projectos",
            "Blog técnico",
            "Curriculum vitae online",
            "Formulário de contacto",
            "Design minimalista"
        ]
    },
    {
        id: 105,
        title: "Easy Consulting",
        category: "websites",
        subcategory: "corporate",
        shortDescription: "Website de consultoria empresarial focada em transformação digital.",
        fullDescription: "Plataforma web da Easy Consulting que oferece serviços de consultoria em tecnologia e transformação digital para empresas moçambicanas.",
        tags: ["Laravel", "Corporate"],
        technologies: ["Laravel", "Vue.js", "MySQL", "Bootstrap"],
        icon: "briefcase",
        iconColor: "orange-500",
        link: "https://easyconsulting.co.mz",
        status: "live",
        features: [
            "Apresentação de serviços",
            "Blog corporativo",
            "Formulário de orçamento",
            "Área de clientes",
            "Gestão de conteúdos"
        ]
    },
    {
        id: 106,
        title: "Portfolio Pessoal",
        category: "websites",
        subcategory: "portfolio",
        shortDescription: "Website pessoal com portfólio, blog e informações de contacto.",
        fullDescription: "Meu website pessoal onde apresento projectos, partilho artigos sobre tecnologia e disponibilizo informações de contacto profissional.",
        tags: ["PHP", "Portfolio"],
        technologies: ["PHP", "JavaScript", "Tailwind CSS", "MySQL"],
        icon: "user-circle",
        iconColor: "indigo-500",
        link: "https://mmaunze.com",
        status: "live",
        features: [
            "Portfólio interactivo",
            "Blog técnico",
            "Curriculum detalhado",
            "Área de contacto",
            "Design personalizado"
        ]
    },

    // ===== SISTEMAS DE GESTÃO =====
    {
        id: 201,
        title: "ESIRA V2",
        category: "sistemas",
        subcategory: "academic",
        shortDescription: "Sistema integrado de gestão académica para a Universidade Lúrio, gerindo mais de 500 utilizadores.",
        fullDescription: "Sistema completo de gestão académica desenvolvido para a Universidade Lúrio. Gere processos de matrícula, notas, horários, docentes e muito mais. Utilizado por mais de 500 utilizadores incluindo estudantes, professores e staff administrativo.",
        tags: ["Spring Boot", "Next.js"],
        technologies: ["Spring Boot", "Next.js", "PostgreSQL", "Docker", "Redis"],
        icon: "graduation-cap",
        iconColor: "brand-blue",
        link: "https://esira.unilurio.ac.mz",
        status: "live",
        features: [
            "Gestão completa de estudantes e docentes",
            "Sistema de notas e avaliações",
            "Geração automática de horários",
            "Dashboard analítico em tempo real",
            "Sistema de notificações push"
        ]
    },
    {
        id: 202,
        title: "Xicola",
        category: "sistemas",
        subcategory: "school",
        shortDescription: "Plataforma de gestão escolar end-to-end focada na simplificação de processos administrativos.",
        fullDescription: "Plataforma completa de gestão escolar que digitaliza todos os processos administrativos. Desde matrículas até certificação, passando por gestão de mensalidades e comunicação com encarregados de educação.",
        tags: ["Vue.js", "PostgreSQL"],
        technologies: ["Vue.js", "Node.js", "PostgreSQL", "Redis", "Socket.io"],
        icon: "school",
        iconColor: "emerald-500",
        status: "internal",
        features: [
            "Gestão de matrículas e inscrições",
            "Portal de encarregados de educação",
            "Sistema de mensalidades e pagamentos",
            "Boletins e relatórios automatizados",
            "Comunicação escola-família em tempo real"
        ]
    },
    {
        id: 203,
        title: "Sistema de Biblioteca Digital",
        category: "sistemas",
        subcategory: "library",
        shortDescription: "Plataforma completa para gestão de bibliotecas com catalogação e empréstimos digitais.",
        fullDescription: "Sistema robusto de gestão de biblioteca que permite catalogação automática, pesquisa avançada, gestão de empréstimos e reservas. Inclui painel de estatísticas e integração com sistemas académicos.",
        tags: ["Laravel", "Vue.js"],
        technologies: ["Laravel", "Vue.js", "MySQL", "Elasticsearch", "MinIO"],
        icon: "book-open",
        iconColor: "blue-500",
        status: "live",
        features: [
            "Catalogação automática de recursos",
            "Pesquisa avançada com filtros",
            "Sistema de reservas e empréstimos",
            "Painel de estatísticas e relatórios",
            "Integração com sistemas académicos"
        ]
    },
    {
        id: 204,
        title: "Sistema de Gestão Hospitalar",
        category: "sistemas",
        subcategory: "health",
        shortDescription: "Plataforma integrada para gestão de processos hospitalares e atendimento.",
        fullDescription: "Sistema robusto de gestão hospitalar que integra marcação de consultas, gestão de pacientes, histórico médico, farmácia e facturação. Desenvolvido para melhorar a eficiência no atendimento.",
        tags: ["Spring Boot", "React"],
        technologies: ["Spring Boot", "React", "Oracle DB", "Keycloak", "Apache Kafka"],
        icon: "heart-pulse",
        iconColor: "red-500",
        status: "live",
        features: [
            "Gestão completa de pacientes",
            "Sistema de marcação de consultas",
            "Histórico médico electrónico",
            "Gestão de farmácia e stock",
            "Facturação e seguros"
        ]
    },
    {
        id: 205,
        title: "Sistema de Gestão de Farmácia",
        category: "sistemas",
        subcategory: "pharmacy",
        shortDescription: "Solução completa para gestão de farmácias com controlo de stock e vendas.",
        fullDescription: "Sistema especializado para gestão de farmácias que controla stock de medicamentos, vendas, receitas médicas e facturação. Inclui alertas de validade e gestão de fornecedores.",
        tags: ["Laravel", "Vue.js"],
        technologies: ["Laravel", "Vue.js", "MySQL", "Redis"],
        icon: "pill",
        iconColor: "green-500",
        link: "https://demo-adefarmomz.mefemasys.co.mz",
        status: "demo",
        features: [
            "Controlo de stock em tempo real",
            "Gestão de receitas médicas",
            "Alertas de validade de medicamentos",
            "Sistema de vendas e facturação",
            "Gestão de fornecedores"
        ]
    },
    {
        id: 206,
        title: "Sistema de Gestão Empresarial",
        category: "sistemas",
        subcategory: "erp",
        shortDescription: "ERP completo para gestão de todos os processos empresariais.",
        fullDescription: "Sistema ERP robusto que integra gestão financeira, recursos humanos, vendas, compras, stock e produção. Solução modular adaptável a diferentes tipos de negócio.",
        tags: ["Spring Boot", "Angular"],
        technologies: ["Spring Boot", "Angular", "PostgreSQL", "Keycloak", "Jasper Reports"],
        icon: "building",
        iconColor: "purple-500",
        status: "live",
        features: [
            "Gestão financeira completa",
            "Módulo de recursos humanos",
            "Controlo de stock integrado",
            "Gestão de vendas e compras",
            "Relatórios personalizáveis"
        ]
    },
    {
        id: 207,
        title: "Sistema de Gestão Logística",
        category: "sistemas",
        subcategory: "logistics",
        shortDescription: "Plataforma para gestão de frotas, rotas e entregas.",
        fullDescription: "Sistema completo de gestão logística com rastreamento GPS, optimização de rotas, gestão de frotas e controlo de entregas. Inclui app móvel para motoristas.",
        tags: ["Node.js", "React"],
        technologies: ["Node.js", "React", "MongoDB", "Google Maps API", "Socket.io"],
        icon: "truck",
        iconColor: "orange-500",
        status: "live",
        features: [
            "Rastreamento GPS em tempo real",
            "Optimização automática de rotas",
            "Gestão de frotas e manutenções",
            "Controlo de entregas",
            "App móvel para motoristas"
        ]
    },
    {
        id: 208,
        title: "Sistema de Gestão de Vendas",
        category: "sistemas",
        subcategory: "sales",
        shortDescription: "Solução POS e gestão comercial com análise de vendas.",
        fullDescription: "Sistema completo de ponto de venda (POS) e gestão comercial. Inclui controlo de stock, facturação, gestão de clientes e análise de vendas com dashboards interactivos.",
        tags: ["Vue.js", "Laravel"],
        technologies: ["Vue.js", "Laravel", "MySQL", "Chart.js"],
        icon: "shopping-cart",
        iconColor: "green-500",
        status: "live",
        features: [
            "Ponto de venda (POS) rápido",
            "Gestão de stock integrada",
            "Facturação automática",
            "CRM de clientes",
            "Análise de vendas e KPIs"
        ]
    },
    {
        id: 209,
        title: "Sistema de Gestão de Clientes (CRM)",
        category: "sistemas",
        subcategory: "crm",
        shortDescription: "Plataforma CRM para gestão de relacionamento com clientes.",
        fullDescription: "Sistema CRM completo para gestão de leads, oportunidades, vendas e relacionamento com clientes. Inclui automação de marketing e análise de funil de vendas.",
        tags: ["React", "Node.js"],
        technologies: ["React", "Node.js", "PostgreSQL", "Redis", "SendGrid"],
        icon: "users",
        iconColor: "indigo-500",
        status: "live",
        features: [
            "Gestão de leads e oportunidades",
            "Funil de vendas visual",
            "Automação de marketing",
            "Histórico de interacções",
            "Análise e relatórios"
        ]
    },
    {
        id: 210,
        title: "Sistema de Gestão Hoteleira",
        category: "sistemas",
        subcategory: "hotel",
        shortDescription: "Solução completa para gestão de hotéis e reservas.",
        fullDescription: "Sistema integrado de gestão hoteleira que controla reservas, check-in/check-out, housekeeping, restaurante e facturação. Inclui portal de reservas online.",
        tags: ["Laravel", "Vue.js"],
        technologies: ["Laravel", "Vue.js", "MySQL", "Stripe"],
        icon: "hotel",
        iconColor: "pink-500",
        link: "https://demo-hotel-mefema.mefemasys.co.mz",
        status: "demo",
        features: [
            "Sistema de reservas online",
            "Gestão de quartos e ocupação",
            "Check-in/check-out digital",
            "Gestão de housekeeping",
            "Facturação integrada"
        ]
    },
    {
        id: 211,
        title: "Sistema de Gestão de Clínica",
        category: "sistemas",
        subcategory: "clinic",
        shortDescription: "Plataforma para gestão de clínicas e consultórios médicos.",
        fullDescription: "Sistema especializado para clínicas e consultórios que gere agendamentos, prontuários electrónicos, facturação e stock de medicamentos. Interface intuitiva para profissionais de saúde.",
        tags: ["Spring Boot", "Angular"],
        technologies: ["Spring Boot", "Angular", "PostgreSQL", "DICOM"],
        icon: "stethoscope",
        iconColor: "blue-500",
        link: "https://demo-clinica.mefemasys.co.mz",
        status: "demo",
        features: [
            "Agendamento de consultas",
            "Prontuário electrónico",
            "Gestão de exames",
            "Facturação e convénios",
            "Controlo de medicamentos"
        ]
    },
    {
        id: 212,
        title: "Sistema de Gestão de Catering",
        category: "sistemas",
        subcategory: "catering",
        shortDescription: "Solução para gestão de empresas de catering e eventos.",
        fullDescription: "Sistema completo para empresas de catering que gere encomendas, menu, stock de ingredientes, equipas e facturação. Inclui planeamento de eventos.",
        tags: ["Next.js", "Node.js"],
        technologies: ["Next.js", "Node.js", "MongoDB", "Cloudinary"],
        icon: "utensils",
        iconColor: "yellow-500",
        link: "https://demo-catering.mefemasys.co.mz",
        status: "demo",
        features: [
            "Gestão de encomendas",
            "Planeamento de menus",
            "Controlo de stock",
            "Gestão de equipas",
            "Facturação de eventos"
        ]
    },
    {
        id: 213,
        title: "Sistema de Gestão de Construções",
        category: "sistemas",
        subcategory: "construction",
        shortDescription: "Plataforma para gestão de projectos de construção civil.",
        fullDescription: "Sistema robusto para empresas de construção que gere projectos, orçamentos, cronogramas, equipas, materiais e facturação. Inclui controlo de custos e análise financeira.",
        tags: ["Laravel", "React"],
        technologies: ["Laravel", "React", "MySQL", "Chart.js"],
        icon: "hard-hat",
        iconColor: "orange-600",
        link: "https://demo-construcoes.mefemasys.co.mz",
        status: "demo",
        features: [
            "Gestão de projectos",
            "Controlo de orçamentos",
            "Cronogramas e Gantt",
            "Gestão de materiais",
            "Análise de custos"
        ]
    },
    {
        id: 214,
        title: "Sistema de Gestão Escolar",
        category: "sistemas",
        subcategory: "school",
        shortDescription: "Solução completa para gestão de instituições de ensino.",
        fullDescription: "Sistema integrado para escolas que gere alunos, professores, turmas, notas, frequências, mensalidades e comunicação. Inclui portais para pais e alunos.",
        tags: ["Vue.js", "Laravel"],
        technologies: ["Vue.js", "Laravel", "MySQL", "Pusher"],
        icon: "school",
        iconColor: "green-600",
        link: "https://demo-escolar.mefemasys.co.mz",
        status: "demo",
        features: [
            "Gestão de matrículas",
            "Controlo de notas e frequências",
            "Portal de encarregados",
            "Gestão de mensalidades",
            "Comunicação integrada"
        ]
    },
    {
        id: 215,
        title: "Sistema de Gestão Agropecuária",
        category: "sistemas",
        subcategory: "agriculture",
        shortDescription: "Plataforma para gestão de propriedades rurais e produção.",
        fullDescription: "Sistema especializado para gestão agropecuária que controla produção, stock, vendas, equipamentos e recursos humanos. Inclui análise de produtividade.",
        tags: ["Spring Boot", "Vue.js"],
        technologies: ["Spring Boot", "Vue.js", "PostgreSQL", "JasperReports"],
        icon: "tractor",
        iconColor: "green-700",
        link: "https://demo-agropecuaria.mefemasys.co.mz",
        status: "demo",
        features: [
            "Controlo de produção",
            "Gestão de stock",
            "Controlo de equipamentos",
            "Gestão de recursos humanos",
            "Análise de produtividade"
        ]
    },
    {
        id: 216,
        title: "Sistema de Desenvolvimento Comunitário",
        category: "sistemas",
        subcategory: "ngo",
        shortDescription: "Plataforma para gestão de projectos de ONGs e desenvolvimento.",
        fullDescription: "Sistema para organizações de desenvolvimento comunitário que gere projectos, beneficiários, doadores, actividades e relatórios de impacto. Inclui gestão financeira.",
        tags: ["Laravel", "Alpine.js"],
        technologies: ["Laravel", "Alpine.js", "MySQL", "Livewire"],
        icon: "heart-handshake",
        iconColor: "rose-500",
        link: "https://org-dev-comunitario.mefemasys.co.mz",
        status: "demo",
        features: [
            "Gestão de projectos",
            "Controlo de beneficiários",
            "Gestão de doadores",
            "Relatórios de impacto",
            "Controlo financeiro"
        ]
    },
    {
        id: 217,
        title: "Sistema de Secretaria",
        category: "sistemas",
        subcategory: "administrative",
        shortDescription: "Solução para gestão de documentos e processos administrativos.",
        fullDescription: "Sistema de gestão de secretaria que controla documentos, correspondência, agendas, reuniões e processos administrativos. Inclui workflow de aprovações.",
        tags: ["Vue.js", "Laravel"],
        technologies: ["Vue.js", "Laravel", "MySQL", "ElasticSearch"],
        icon: "file-text",
        iconColor: "blue-600",
        status: "live",
        features: [
            "Gestão documental",
            "Controlo de correspondência",
            "Agenda e reuniões",
            "Workflow de aprovações",
            "Arquivo digital"
        ]
    },

    // ===== APPS MOBILE =====
    {
        id: 301,
        title: "PreFaculdade",
        category: "mobile",
        subcategory: "education",
        shortDescription: "Aplicação móvel que utiliza IA para fornecer orientação vocacional personalizada a estudantes.",
        fullDescription: "App móvel inovador que usa inteligência artificial para ajudar estudantes a descobrir a carreira ideal. Através de testes de personalidade, análise de habilidades e preferências, sugere cursos e universidades alinhadas com o perfil do estudante.",
        tags: ["Android", "AI/LLM"],
        technologies: ["Kotlin", "TensorFlow", "OpenAI API", "Firebase", "Jetpack Compose"],
        icon: "brain-circuit",
        iconColor: "purple-500",
        status: "development",
        features: [
            "Análise de perfil vocacional com IA",
            "Recomendações personalizadas de cursos",
            "Base de dados de universidades moçambicanas",
            "Testes de aptidão e personalidade",
            "Chat com IA para esclarecimento de dúvidas"
        ]
    },
    {
        id: 302,
        title: "App de Gestão de Frotas",
        category: "mobile",
        subcategory: "logistics",
        shortDescription: "Aplicação móvel para rastreamento e gestão de frotas de veículos.",
        fullDescription: "Solução móvel completa para gestão de frotas que permite rastreamento GPS em tempo real, gestão de combustível, manutenções e relatórios detalhados de utilização.",
        tags: ["Flutter", "Firebase"],
        technologies: ["Flutter", "Firebase", "Google Maps API", "Node.js", "MongoDB"],
        icon: "truck",
        iconColor: "orange-500",
        status: "live",
        features: [
            "Rastreamento GPS em tempo real",
            "Gestão de combustível e despesas",
            "Alertas de manutenção preventiva",
            "Relatórios de utilização e KPIs",
            "Gestão de motoristas e viagens"
        ]
    },
    {
        id: 303,
        title: "App de Delivery",
        category: "mobile",
        subcategory: "delivery",
        shortDescription: "Aplicação para gestão de entregas com rastreamento em tempo real.",
        fullDescription: "App completo para serviços de delivery que conecta clientes, restaurantes e entregadores. Inclui rastreamento em tempo real, pagamentos integrados e sistema de avaliações.",
        tags: ["React Native", "Firebase"],
        technologies: ["React Native", "Firebase", "Google Maps API", "Stripe", "Push Notifications"],
        icon: "bike",
        iconColor: "green-500",
        status: "development",
        features: [
            "Rastreamento de entregas em tempo real",
            "Pagamentos integrados",
            "Sistema de avaliações",
            "Notificações push",
            "Gestão multi-restaurantes"
        ]
    },
    {
        id: 304,
        title: "App de Saúde",
        category: "mobile",
        subcategory: "health",
        shortDescription: "Aplicação móvel para agendamento de consultas e gestão de saúde pessoal.",
        fullDescription: "App que facilita o agendamento de consultas médicas, armazena histórico de saúde, lembretes de medicação e permite telemedicina. Conecta pacientes e profissionais de saúde.",
        tags: ["Flutter", "WebRTC"],
        technologies: ["Flutter", "WebRTC", "Firebase", "Node.js", "PostgreSQL"],
        icon: "heart",
        iconColor: "red-500",
        status: "development",
        features: [
            "Agendamento de consultas",
            "Histórico médico digital",
            "Lembretes de medicação",
            "Telemedicina integrada",
            "Partilha segura de dados"
        ]
    },
    {
        id: 305,
        title: "App de E-learning",
        category: "mobile",
        subcategory: "education",
        shortDescription: "Plataforma móvel de aprendizagem com cursos e conteúdos educativos.",
        fullDescription: "Aplicação de e-learning que oferece cursos, vídeo-aulas, exercícios e certificações. Inclui gamificação e acompanhamento de progresso.",
        tags: ["React Native", "Video"],
        technologies: ["React Native", "Node.js", "MongoDB", "AWS S3", "Socket.io"],
        icon: "graduation-cap",
        iconColor: "blue-500",
        status: "live",
        features: [
            "Biblioteca de cursos",
            "Vídeo-aulas offline",
            "Exercícios interactivos",
            "Gamificação e badges",
            "Certificados digitais"
        ]
    },
    {
        id: 306,
        title: "App de Finanças Pessoais",
        category: "mobile",
        subcategory: "finance",
        shortDescription: "Aplicação para gestão de finanças pessoais e controlo de gastos.",
        fullDescription: "App completo para gestão financeira pessoal que regista receitas e despesas, gere orçamentos, cria relatórios e oferece insights sobre hábitos de consumo.",
        tags: ["Flutter", "SQLite"],
        technologies: ["Flutter", "SQLite", "Charts", "Firebase"],
        icon: "wallet",
        iconColor: "green-600",
        status: "live",
        features: [
            "Registo de receitas e despesas",
            "Gestão de orçamentos",
            "Gráficos e relatórios",
            "Categorização automática",
            "Alertas de gastos"
        ]
    }
];

async function fetchProjects(page = 1, category = 'all') {
    document.getElementById('loading').classList.remove('hidden');
    document.getElementById('projects-grid').classList.add('opacity-50');
    
    await new Promise(resolve => setTimeout(resolve, 300));
    
    const filteredProjects = category === 'all' 
        ? allProjects 
        : allProjects.filter(p => p.category === category);
    
    const totalPages = Math.ceil(filteredProjects.length / projectsPerPage);
    const startIndex = (page - 1) * projectsPerPage;
    const endIndex = startIndex + projectsPerPage;
    const paginatedProjects = filteredProjects.slice(startIndex, endIndex);
    
    document.getElementById('loading').classList.add('hidden');
    document.getElementById('projects-grid').classList.remove('opacity-50');
    
    return {
        projects: paginatedProjects,
        currentPage: page,
        totalPages: totalPages,
        total: filteredProjects.length
    };
}

function filterCategory(category) {
    currentCategory = category;
    currentPage = 1;
    
    // Actualizar botões de filtro
    document.querySelectorAll('.category-filter').forEach(btn => {
        btn.classList.remove('active', 'bg-brand-blue', 'text-white', 'shadow-lg');
        btn.classList.add('bg-gray-100', 'dark:bg-gray-700', 'text-gray-600', 'dark:text-gray-400');
    });
    
    event.target.classList.add('active', 'bg-brand-blue', 'text-white', 'shadow-lg');
    event.target.classList.remove('bg-gray-100', 'dark:bg-gray-700', 'text-gray-600', 'dark:text-gray-400');
    
    loadPage(1, category);
}

function getStatusBadge(status) {
    const badges = {
        'live': '<span class="text-brand-blue font-bold text-sm">Ao Vivo</span>',
        'internal': '<span class="text-gray-400 font-bold text-sm flex items-center gap-2 italic">Projecto Interno</span>',
        'development': '<span class="text-gray-400 font-bold text-sm flex items-center gap-2 italic">Em Desenvolvimento</span>',
        'demo': '<span class="text-purple-500 font-bold text-sm">Demo Disponível</span>'
    };
    return badges[status] || '';
}

function renderProjects(data) {
    const grid = document.getElementById('projects-grid');
    grid.innerHTML = '';
    
    if (data.projects.length === 0) {
        grid.innerHTML = '<div class="col-span-full text-center py-12 text-gray-500">Nenhum projecto encontrado nesta categoria.</div>';
        return;
    }
    
    data.projects.forEach(project => {
        const card = document.createElement('div');
        card.className = 'bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-[0_1px_3px_rgba(0,0,0,0.08)] hover:shadow-[0_8px_30px_rgba(0,0,0,0.12)] transition-all duration-300 border-[0.5px] border-gray-200/50 dark:border-gray-700/50';
        
        const tagsHtml = project.tags.map(tag => {
            const colors = {
                'Spring Boot': 'bg-blue-100 dark:bg-blue-900/30 text-blue-600',
                'Next.js': 'bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600',
                'Vue.js': 'bg-blue-100 dark:bg-blue-900/30 text-blue-600',
                'PostgreSQL': 'bg-purple-100 dark:bg-purple-900/30 text-purple-600',
                'Android': 'bg-orange-100 dark:bg-orange-900/30 text-orange-600',
                'AI/LLM': 'bg-purple-100 dark:bg-purple-900/30 text-purple-600',
                'Laravel': 'bg-red-100 dark:bg-red-900/30 text-red-600',
                'Stripe': 'bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600',
                'Flutter': 'bg-blue-100 dark:bg-blue-900/30 text-blue-600',
                'Firebase': 'bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600',
                'React': 'bg-cyan-100 dark:bg-cyan-900/30 text-cyan-600',
                'AI': 'bg-purple-100 dark:bg-purple-900/30 text-purple-600',
                'Corporate': 'bg-gray-100 dark:bg-gray-700 text-gray-600',
                'Portfolio': 'bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600',
                'Educational': 'bg-green-100 dark:bg-green-900/30 text-green-600',
                'WebRTC': 'bg-pink-100 dark:bg-pink-900/30 text-pink-600',
                'Node.js': 'bg-green-100 dark:bg-green-900/30 text-green-600',
                'React Native': 'bg-cyan-100 dark:bg-cyan-900/30 text-cyan-600',
                'PHP': 'bg-purple-100 dark:bg-purple-900/30 text-purple-600',
                'Angular': 'bg-red-100 dark:bg-red-900/30 text-red-600',
                'SQLite': 'bg-blue-100 dark:bg-blue-900/30 text-blue-600',
                'Video': 'bg-red-100 dark:bg-red-900/30 text-red-600',
                'Alpine.js': 'bg-teal-100 dark:bg-teal-900/30 text-teal-600'
            };
            return `<span class="px-2 py-1 ${colors[tag] || 'bg-gray-100 dark:bg-gray-700 text-gray-600'} text-[10px] font-bold uppercase rounded">${tag}</span>`;
        }).join('');
        
        card.innerHTML = `
            <div class="h-48 bg-${project.iconColor}/10 flex items-center justify-center">
                <i data-lucide="${project.icon}" class="w-16 h-16 text-${project.iconColor} opacity-50"></i>
            </div>
            <div class="p-6">
                <div class="flex gap-2 mb-4 flex-wrap">
                    ${tagsHtml}
                </div>
                <h3 class="text-xl font-bold mb-2">${project.title}</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">${project.shortDescription}</p>
                <div class="flex gap-3">
                    <button onclick="openModal(${project.id})" class="text-brand-blue font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">
                        Ver Detalhes <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </button>
                    ${project.link ? `<a href="${project.link}" target="_blank" class="text-gray-400 hover:text-brand-blue font-bold text-sm flex items-center gap-2 transition-colors"><i data-lucide="external-link" class="w-4 h-4"></i></a>` : ''}
                </div>
            </div>
        `;
        
        grid.appendChild(card);
    });
    
    lucide.createIcons();
    renderPagination(data);
}

function renderPagination(data) {
    const pagination = document.getElementById('pagination');
    pagination.innerHTML = '';
    
    if (data.totalPages <= 1) return;
    
    const prevBtn = document.createElement('button');
    prevBtn.className = `px-4 py-2 rounded-lg font-bold text-sm transition-all ${data.currentPage === 1 ? 'bg-gray-100 dark:bg-gray-800 text-gray-400 cursor-not-allowed' : 'bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-brand-blue hover:text-white shadow-sm'}`;
    prevBtn.innerHTML = '<i data-lucide="chevron-left" class="w-4 h-4"></i>';
    prevBtn.disabled = data.currentPage === 1;
    prevBtn.onclick = () => data.currentPage > 1 && loadPage(data.currentPage - 1, currentCategory);
    pagination.appendChild(prevBtn);
    
    for (let i = 1; i <= data.totalPages; i++) {
        if (i === 1 || i === data.totalPages || (i >= data.currentPage - 1 && i <= data.currentPage + 1)) {
            const pageBtn = document.createElement('button');
            pageBtn.className = `px-4 py-2 rounded-lg font-bold text-sm transition-all ${i === data.currentPage ? 'bg-brand-blue text-white shadow-lg' : 'bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-brand-blue hover:text-white shadow-sm'}`;
            pageBtn.textContent = i;
            pageBtn.onclick = () => loadPage(i, currentCategory);
            pagination.appendChild(pageBtn);
        } else if (i === data.currentPage - 2 || i === data.currentPage + 2) {
            const dots = document.createElement('span');
            dots.className = 'px-2 text-gray-400';
            dots.textContent = '...';
            pagination.appendChild(dots);
        }
    }
    
    const nextBtn = document.createElement('button');
    nextBtn.className = `px-4 py-2 rounded-lg font-bold text-sm transition-all ${data.currentPage === data.totalPages ? 'bg-gray-100 dark:bg-gray-800 text-gray-400 cursor-not-allowed' : 'bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-brand-blue hover:text-white shadow-sm'}`;
    nextBtn.innerHTML = '<i data-lucide="chevron-right" class="w-4 h-4"></i>';
    nextBtn.disabled = data.currentPage === data.totalPages;
    nextBtn.onclick = () => data.currentPage < data.totalPages && loadPage(data.currentPage + 1, currentCategory);
    pagination.appendChild(nextBtn);
    
    lucide.createIcons();
}

async function loadPage(page, category = currentCategory) {
    currentPage = page;
    window.scrollTo({ top: 0, behavior: 'smooth' });
    const data = await fetchProjects(page, category);
    renderProjects(data);
}

async function openModal(projectId) {
    const project = allProjects.find(p => p.id === projectId);
    
    if (!project) return;
    
    document.getElementById('modal-title').textContent = project.title;
    document.getElementById('modal-description').textContent = project.fullDescription;
    
    const tagsHtml = project.tags.map(tag => {
        const colors = {
            'Spring Boot': 'bg-blue-100 dark:bg-blue-900/30 text-blue-600',
            'Next.js': 'bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600',
            'Vue.js': 'bg-blue-100 dark:bg-blue-900/30 text-blue-600',
            'PostgreSQL': 'bg-purple-100 dark:bg-purple-900/30 text-purple-600',
            'Android': 'bg-orange-100 dark:bg-orange-900/30 text-orange-600',
            'AI/LLM': 'bg-purple-100 dark:bg-purple-900/30 text-purple-600',
            'Laravel': 'bg-red-100 dark:bg-red-900/30 text-red-600',
            'Stripe': 'bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600',
            'Flutter': 'bg-blue-100 dark:bg-blue-900/30 text-blue-600',
            'Firebase': 'bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600',
            'React': 'bg-cyan-100 dark:bg-cyan-900/30 text-cyan-600',
            'AI': 'bg-purple-100 dark:bg-purple-900/30 text-purple-600',
            'Corporate': 'bg-gray-100 dark:bg-gray-700 text-gray-600',
            'Portfolio': 'bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600',
            'Educational': 'bg-green-100 dark:bg-green-900/30 text-green-600',
            'WebRTC': 'bg-pink-100 dark:bg-pink-900/30 text-pink-600',
            'Node.js': 'bg-green-100 dark:bg-green-900/30 text-green-600',
            'React Native': 'bg-cyan-100 dark:bg-cyan-900/30 text-cyan-600',
            'PHP': 'bg-purple-100 dark:bg-purple-900/30 text-purple-600',
            'Angular': 'bg-red-100 dark:bg-red-900/30 text-red-600',
            'SQLite': 'bg-blue-100 dark:bg-blue-900/30 text-blue-600',
            'Video': 'bg-red-100 dark:bg-red-900/30 text-red-600',
            'Alpine.js': 'bg-teal-100 dark:bg-teal-900/30 text-teal-600'
        };
        return `<span class="px-3 py-1 ${colors[tag] || 'bg-gray-100 dark:bg-gray-700 text-gray-600'} text-xs font-bold uppercase rounded-full">${tag}</span>`;
    }).join('');
    document.getElementById('modal-tags').innerHTML = tagsHtml;
    
    document.getElementById('modal-icon').innerHTML = `<i data-lucide="${project.icon}" class="w-24 h-24 text-${project.iconColor}"></i>`;
    document.getElementById('modal-icon').className = `h-48 rounded-xl mb-6 flex items-center justify-center bg-${project.iconColor}/10`;
    
    const techHtml = project.technologies.map(tech => 
        `<span class="px-3 py-1.5 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-sm rounded-lg">${tech}</span>`
    ).join('');
    document.getElementById('modal-technologies').innerHTML = techHtml;
    
    const featuresHtml = project.features.map(feature => 
        `<li>${feature}</li>`
    ).join('');
    document.getElementById('modal-features').innerHTML = featuresHtml;
    
    const linkContainer = document.getElementById('modal-link-container');
    if (project.link) {
        linkContainer.innerHTML = `
            <a href="${project.link}" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-brand-blue text-white font-bold rounded-lg hover:bg-blue-600 transition-colors">
                Visitar Projecto <i data-lucide="external-link" class="w-5 h-5"></i>
            </a>
        `;
    } else {
        linkContainer.innerHTML = getStatusBadge(project.status);
    }
    
    document.getElementById('project-modal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
    
    lucide.createIcons();
}

function closeModal() {
    document.getElementById('project-modal').classList.add('hidden');
    document.body.style.overflow = '';
}

document.getElementById('project-modal').addEventListener('click', (e) => {
    if (e.target.id === 'project-modal') {
        closeModal();
    }
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closeModal();
    }
});

// Inicializar com botão "Todos" activo
document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.category-filter.active').classList.add('bg-brand-blue', 'text-white', 'shadow-lg');
    loadPage(1, 'all');
});
</script>

<style>
.category-filter {
    @apply bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400;
}

.category-filter.active {
    @apply bg-brand-blue text-white shadow-lg;
}

.category-filter:hover:not(.active) {
    @apply bg-gray-200 dark:bg-gray-600;
}
</style>

<?php get_part('footer'); ?>
