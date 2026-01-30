<?php
require_once __DIR__ . '/../../config/bootstrap.php';

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
                <a href="pages/projectos" class="px-6 py-2 rounded-md text-sm font-bold transition-all text-gray-500 hover:text-gray-700">Todos</a>
                <a href="pages/projectos/software" class="px-6 py-2 rounded-md text-sm font-bold transition-all bg-white dark:bg-gray-700 shadow-sm text-brand-blue">Software</a>
                <a href="pages/projectos/ict" class="px-6 py-2 rounded-md text-sm font-bold transition-all text-gray-500 hover:text-gray-700">ICT & Redes</a>
            </div>
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
const projectsPerPage = 6;

// Simular API de projectos
async function fetchProjects(page = 1) {
    // Mostrar loading
    document.getElementById('loading').classList.remove('hidden');
    document.getElementById('projects-grid').classList.add('opacity-50');
    
    // Simular delay de API
    await new Promise(resolve => setTimeout(resolve, 500));
    
    const allProjects = [
        {
            id: 1,
            title: "ESIRA V2",
            category: "software",
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
            id: 2,
            title: "Xicola",
            category: "software",
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
            id: 3,
            title: "PreFaculdade",
            category: "software",
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
            id: 4,
            title: "Sistema de Biblioteca Digital",
            category: "software",
            shortDescription: "Plataforma web para gestão e acesso a recursos bibliográficos digitais.",
            fullDescription: "Sistema completo de gestão de biblioteca digital que permite catalogação, pesquisa avançada e acesso controlado a recursos bibliográficos. Inclui sistema de reservas e estatísticas de utilização.",
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
            id: 5,
            title: "Portal de E-commerce",
            category: "software",
            shortDescription: "Plataforma de comércio electrónico com gestão completa de produtos e pagamentos.",
            fullDescription: "Solução completa de e-commerce desenvolvida para negócios locais. Inclui catálogo de produtos, carrinho de compras, integração com gateways de pagamento e painel administrativo completo.",
            tags: ["Next.js", "Stripe"],
            technologies: ["Next.js", "Prisma", "PostgreSQL", "Stripe", "Cloudinary"],
            icon: "shopping-cart",
            iconColor: "green-500",
            status: "live",
            features: [
                "Catálogo de produtos com filtros avançados",
                "Carrinho de compras persistente",
                "Integração com M-Pesa e cartões",
                "Gestão de stock em tempo real",
                "Dashboard de vendas e analytics"
            ]
        },
        {
            id: 6,
            title: "Sistema de Gestão Hospitalar",
            category: "software",
            shortDescription: "Plataforma integrada para gestão de processos hospitalares e atendimento.",
            fullDescription: "Sistema robusto de gestão hospitalar que integra marcação de consultas, gestão de pacientes, histórico médico, farmácia e faturação. Desenvolvido para melhorar a eficiência no atendimento.",
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
                "Faturação e seguros"
            ]
        },
        {
            id: 7,
            title: "App de Gestão de Frotas",
            category: "software",
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
            id: 8,
            title: "Portal de Recrutamento",
            category: "software",
            shortDescription: "Plataforma de gestão de processos de recrutamento e selecção.",
            fullDescription: "Sistema completo de gestão de recrutamento que permite publicação de vagas, recepção de candidaturas, triagem automática com IA e gestão de todo o processo selectivo.",
            tags: ["Vue.js", "AI"],
            technologies: ["Vue.js", "Django", "PostgreSQL", "Celery", "OpenAI API"],
            icon: "users",
            iconColor: "indigo-500",
            status: "development",
            features: [
                "Publicação multi-canal de vagas",
                "Triagem automática de CVs com IA",
                "Portal para candidatos",
                "Gestão de entrevistas e testes",
                "Analytics de processo selectivo"
            ]
        },
        {
            id: 9,
            title: "Sistema de Gestão de Eventos",
            category: "software",
            shortDescription: "Plataforma para gestão completa de eventos e venda de bilhetes.",
            fullDescription: "Solução integrada para organização de eventos que inclui criação de eventos, venda de bilhetes online, check-in digital e análise pós-evento.",
            tags: ["Next.js", "Stripe"],
            technologies: ["Next.js", "TypeScript", "Prisma", "Stripe", "QR Code"],
            icon: "calendar",
            iconColor: "pink-500",
            status: "live",
            features: [
                "Criação e gestão de eventos",
                "Venda de bilhetes online",
                "Check-in com QR Code",
                "Gestão de participantes",
                "Relatórios e analytics"
            ]
        }
    ];
    
    const softwareProjects = allProjects.filter(p => p.category === 'software');
    const totalPages = Math.ceil(softwareProjects.length / projectsPerPage);
    const startIndex = (page - 1) * projectsPerPage;
    const endIndex = startIndex + projectsPerPage;
    const paginatedProjects = softwareProjects.slice(startIndex, endIndex);
    
    // Esconder loading
    document.getElementById('loading').classList.add('hidden');
    document.getElementById('projects-grid').classList.remove('opacity-50');
    
    return {
        projects: paginatedProjects,
        currentPage: page,
        totalPages: totalPages,
        total: softwareProjects.length
    };
}

function getStatusBadge(status) {
    const badges = {
        'live': '<span class="text-brand-blue font-bold text-sm">Ao Vivo</span>',
        'internal': '<span class="text-gray-400 font-bold text-sm flex items-center gap-2 italic">Projeto Interno</span>',
        'development': '<span class="text-gray-400 font-bold text-sm flex items-center gap-2 italic">Em Desenvolvimento</span>'
    };
    return badges[status] || '';
}

function renderProjects(data) {
    const grid = document.getElementById('projects-grid');
    grid.innerHTML = '';
    
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
                'AI': 'bg-purple-100 dark:bg-purple-900/30 text-purple-600'
            };
            return `<span class="px-2 py-1 ${colors[tag] || 'bg-gray-100 dark:bg-gray-700 text-gray-600'} text-[10px] font-bold uppercase rounded">${tag}</span>`;
        }).join('');
        
        card.innerHTML = `
            <div class="h-48 bg-${project.iconColor}/10 flex items-center justify-center">
                <i data-lucide="${project.icon}" class="w-16 h-16 text-${project.iconColor} opacity-50"></i>
            </div>
            <div class="p-6">
                <div class="flex gap-2 mb-4">
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
    
    // Re-inicializar ícones lucide
    lucide.createIcons();
    
    renderPagination(data);
}

function renderPagination(data) {
    const pagination = document.getElementById('pagination');
    pagination.innerHTML = '';
    
    if (data.totalPages <= 1) return;
    
    // Botão anterior
    const prevBtn = document.createElement('button');
    prevBtn.className = `px-4 py-2 rounded-lg font-bold text-sm transition-all ${data.currentPage === 1 ? 'bg-gray-100 dark:bg-gray-800 text-gray-400 cursor-not-allowed' : 'bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-brand-blue hover:text-white shadow-sm'}`;
    prevBtn.innerHTML = '<i data-lucide="chevron-left" class="w-4 h-4"></i>';
    prevBtn.disabled = data.currentPage === 1;
    prevBtn.onclick = () => data.currentPage > 1 && loadPage(data.currentPage - 1);
    pagination.appendChild(prevBtn);
    
    // Números de página
    for (let i = 1; i <= data.totalPages; i++) {
        if (i === 1 || i === data.totalPages || (i >= data.currentPage - 1 && i <= data.currentPage + 1)) {
            const pageBtn = document.createElement('button');
            pageBtn.className = `px-4 py-2 rounded-lg font-bold text-sm transition-all ${i === data.currentPage ? 'bg-brand-blue text-white shadow-lg' : 'bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-brand-blue hover:text-white shadow-sm'}`;
            pageBtn.textContent = i;
            pageBtn.onclick = () => loadPage(i);
            pagination.appendChild(pageBtn);
        } else if (i === data.currentPage - 2 || i === data.currentPage + 2) {
            const dots = document.createElement('span');
            dots.className = 'px-2 text-gray-400';
            dots.textContent = '...';
            pagination.appendChild(dots);
        }
    }
    
    // Botão próximo
    const nextBtn = document.createElement('button');
    nextBtn.className = `px-4 py-2 rounded-lg font-bold text-sm transition-all ${data.currentPage === data.totalPages ? 'bg-gray-100 dark:bg-gray-800 text-gray-400 cursor-not-allowed' : 'bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-brand-blue hover:text-white shadow-sm'}`;
    nextBtn.innerHTML = '<i data-lucide="chevron-right" class="w-4 h-4"></i>';
    nextBtn.disabled = data.currentPage === data.totalPages;
    nextBtn.onclick = () => data.currentPage < data.totalPages && loadPage(data.currentPage + 1);
    pagination.appendChild(nextBtn);
    
    lucide.createIcons();
}

async function loadPage(page) {
    currentPage = page;
    window.scrollTo({ top: 0, behavior: 'smooth' });
    const data = await fetchProjects(page);
    renderProjects(data);
}

async function openModal(projectId) {
    const data = await fetchProjects(currentPage);
    const allProjects = await fetchProjects(1);
    
    // Buscar em todas as páginas
    let project = null;
    for (let i = 1; i <= Math.ceil(9 / projectsPerPage); i++) {
        const pageData = await fetchProjects(i);
        project = pageData.projects.find(p => p.id === projectId);
        if (project) break;
    }
    
    if (!project) return;
    
    document.getElementById('modal-title').textContent = project.title;
    document.getElementById('modal-description').textContent = project.fullDescription;
    
    // Tags
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
            'AI': 'bg-purple-100 dark:bg-purple-900/30 text-purple-600'
        };
        return `<span class="px-3 py-1 ${colors[tag] || 'bg-gray-100 dark:bg-gray-700 text-gray-600'} text-xs font-bold uppercase rounded-full">${tag}</span>`;
    }).join('');
    document.getElementById('modal-tags').innerHTML = tagsHtml;
    
    // Icon
    document.getElementById('modal-icon').innerHTML = `<i data-lucide="${project.icon}" class="w-24 h-24 text-${project.iconColor}"></i>`;
    document.getElementById('modal-icon').className = `h-48 rounded-xl mb-6 flex items-center justify-center bg-${project.iconColor}/10`;
    
    // Technologies
    const techHtml = project.technologies.map(tech => 
        `<span class="px-3 py-1.5 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-sm rounded-lg">${tech}</span>`
    ).join('');
    document.getElementById('modal-technologies').innerHTML = techHtml;
    
    // Features
    const featuresHtml = project.features.map(feature => 
        `<li>${feature}</li>`
    ).join('');
    document.getElementById('modal-features').innerHTML = featuresHtml;
    
    // Link
    const linkContainer = document.getElementById('modal-link-container');
    if (project.link) {
        linkContainer.innerHTML = `
            <a href="${project.link}" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-brand-blue text-white font-bold rounded-lg hover:bg-blue-600 transition-colors">
                Visitar Projeto <i data-lucide="external-link" class="w-5 h-5"></i>
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

// Fechar modal ao clicar fora
document.getElementById('project-modal').addEventListener('click', (e) => {
    if (e.target.id === 'project-modal') {
        closeModal();
    }
});

// Fechar modal com ESC
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closeModal();
    }
});

// Carregar primeira página ao iniciar
loadPage(1);
</script>

<?php get_part('footer'); ?>
