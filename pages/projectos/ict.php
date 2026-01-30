<?php
require_once __DIR__ . '/../../config/bootstrap.php';
require_once __DIR__ . '/../../config/url-config.php';

$page_title = "Projectos ICT & Redes | Meldo Leonardo Maúnze - Engenheiro Informático";

get_part('head');
get_part('header');
?>
<main class="pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div>
                <h1 class="text-4xl font-bold mb-4">Projectos de <span class="text-brand-blue">ICT & Redes</span></h1>
                <p class="text-gray-600 dark:text-gray-400">Infraestruturas e soluções de networking implementadas.</p>
            </div>
            
            <div class="flex bg-gray-100 dark:bg-gray-800 p-1 rounded-lg">
                <a href="<?= url('pages/projectos') ?>" class="px-6 py-2 rounded-md text-sm font-bold transition-all text-gray-500 hover:text-gray-700">Todos</a>
                <a href="<?= url('pages/projectos/software') ?>" class="px-6 py-2 rounded-md text-sm font-bold transition-all text-gray-500 hover:text-gray-700">Software</a>
                <a href="<?= url('pages/projectos/ict') ?>" class="px-6 py-2 rounded-md text-sm font-bold transition-all bg-white dark:bg-gray-700 shadow-sm text-brand-blue">ICT & Redes</a>
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
                
                <div id="modal-metrics" class="grid grid-cols-2 gap-4">
                    <!-- Métricas serão inseridas aqui -->
                </div>
                
                <div id="modal-status" class="pt-4">
                    <!-- Status será inserido aqui -->
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
            title: "Infraestrutura Provida",
            category: "ict",
            shortDescription: "Reestruturação completa da rede, implementação de AD e sistemas de backup para centro médico.",
            fullDescription: "Projeto completo de reestruturação da infraestrutura tecnológica do centro médico Provida. Incluiu redesign da topologia de rede, implementação de Active Directory, sistema de backup automatizado e políticas de segurança.",
            tags: ["Networking", "Security"],
            technologies: ["Windows Server", "Active Directory", "Veeam Backup", "Cisco", "pfSense"],
            icon: "network",
            iconColor: "gray-500",
            status: "completed",
            metrics: {
                "Dispositivos Geridos": "50+",
                "Uptime": "99.8%",
                "Usuários AD": "120",
                "Capacidade Backup": "5TB"
            },
            features: [
                "Reestruturação completa da topologia de rede",
                "Implementação de Active Directory com GPOs",
                "Sistema de backup automatizado e redundante",
                "Segmentação de rede por VLANs",
                "Firewall e políticas de segurança avançadas",
                "Monitorização em tempo real"
            ]
        },
        {
            id: 2,
            title: "Rede Campus Universitário",
            category: "ict",
            shortDescription: "Implementação de rede estruturada para campus universitário com 3 edifícios.",
            fullDescription: "Desenho e implementação de rede estruturada para campus universitário. Inclui cabeamento estruturado, switches gerenciáveis, access points Wi-Fi 6 e sistema de gestão centralizada.",
            tags: ["Networking", "Wi-Fi"],
            technologies: ["Cisco Catalyst", "UniFi", "Cat6A", "Fiber Optic", "RADIUS"],
            icon: "building-2",
            iconColor: "blue-500",
            status: "completed",
            metrics: {
                "Pontos de Rede": "200+",
                "Access Points": "45",
                "Utilizadores Simultâneos": "800+",
                "Backbone": "10Gbps"
            },
            features: [
                "Cabeamento estruturado Cat6A",
                "Backbone em fibra óptica 10Gbps",
                "45 access points Wi-Fi 6",
                "Sistema de autenticação RADIUS",
                "VLANs por departamento",
                "QoS para aplicações críticas"
            ]
        },
        {
            id: 3,
            title: "Data Center SMB",
            category: "ict",
            shortDescription: "Implementação de data center para pequena/média empresa com virtualização.",
            fullDescription: "Desenho e implementação de data center modular para PME. Inclui servidores virtualizados, storage redundante, sistema de climatização e monitorização.",
            tags: ["Data Center", "Virtualization"],
            technologies: ["VMware ESXi", "SAN Storage", "UPS", "IPMI", "Zabbix"],
            icon: "server",
            iconColor: "purple-500",
            status: "completed",
            metrics: {
                "VMs Hospedadas": "35",
                "Capacidade Storage": "20TB",
                "Redundância": "N+1",
                "Uptime Anual": "99.95%"
            },
            features: [
                "Cluster VMware com 3 hosts",
                "Storage SAN com replicação",
                "Sistema UPS redundante",
                "Climatização com controlo inteligente",
                "Monitorização 24/7 com Zabbix",
                "Disaster recovery automático"
            ]
        },
        {
            id: 4,
            title: "SD-WAN Multi-Site",
            category: "ict",
            shortDescription: "Implementação de SD-WAN conectando 5 escritórios com failover automático.",
            fullDescription: "Solução SD-WAN para empresa com múltiplos escritórios. Optimização automática de tráfego, failover entre links e gestão centralizada.",
            tags: ["SD-WAN", "Cloud"],
            technologies: ["FortiGate", "MPLS", "4G LTE", "IPSec VPN", "FortiManager"],
            icon: "globe",
            iconColor: "green-500",
            status: "completed",
            metrics: {
                "Sites Conectados": "5",
                "Links por Site": "3",
                "Largura Banda Total": "500Mbps",
                "Latência Média": "<15ms"
            },
            features: [
                "Balanceamento automático de carga",
                "Failover entre MPLS e Internet",
                "QoS baseado em aplicações",
                "Túneis VPN encriptados",
                "Gestão centralizada de políticas",
                "Relatórios de performance"
            ]
        },
        {
            id: 5,
            title: "Sistema de CCTV IP",
            category: "ict",
            shortDescription: "Implementação de sistema de videovigilância IP com analytics e armazenamento.",
            fullDescription: "Sistema completo de CCTV com câmeras IP, NVR redundante, analytics de vídeo e acesso remoto seguro.",
            tags: ["Security", "Surveillance"],
            technologies: ["Hikvision", "NVR", "PoE", "AI Analytics", "H.265"],
            icon: "camera",
            iconColor: "red-500",
            status: "completed",
            metrics: {
                "Câmeras Instaladas": "60",
                "Resolução": "4K",
                "Armazenamento": "30 dias",
                "Analytics": "AI-powered"
            },
            features: [
                "60 câmeras IP 4K",
                "Detecção inteligente de intrusão",
                "Reconhecimento facial",
                "Armazenamento redundante 30 dias",
                "Acesso remoto via app móvel",
                "Alertas em tempo real"
            ]
        },
        {
            id: 6,
            title: "Migração para Cloud",
            category: "ict",
            shortDescription: "Migração de infraestrutura on-premise para AWS com estratégia híbrida.",
            fullDescription: "Projeto de migração gradual de infraestrutura para cloud. Implementação de modelo híbrido com conectividade VPN, DR em cloud e optimização de custos.",
            tags: ["Cloud", "AWS"],
            technologies: ["AWS", "Direct Connect", "CloudFormation", "Lambda", "RDS"],
            icon: "cloud",
            iconColor: "orange-500",
            status: "completed",
            metrics: {
                "Workloads Migrados": "25",
                "Redução de Custos": "35%",
                "Disponibilidade": "99.99%",
                "Recovery Time": "<1h"
            },
            features: [
                "Migração de 25 workloads",
                "VPC com conectividade híbrida",
                "Auto-scaling para cargas variáveis",
                "Backup e DR em múltiplas regiões",
                "Monitorização com CloudWatch",
                "Optimização contínua de custos"
            ]
        },
        {
            id: 7,
            title: "VoIP Enterprise",
            category: "ict",
            shortDescription: "Implementação de sistema de telefonia VoIP para 200 utilizadores.",
            fullDescription: "Sistema completo de telefonia IP com PBX virtualizado, integração com CRM e call center. Inclui telefones IP, softphones e aplicação móvel.",
            tags: ["VoIP", "Communication"],
            technologies: ["Asterisk", "FreePBX", "SIP", "Yealink", "WebRTC"],
            icon: "phone",
            iconColor: "teal-500",
            status: "completed",
            metrics: {
                "Extensões": "200",
                "Chamadas/dia": "1500+",
                "Disponibilidade": "99.9%",
                "Gravações": "90 dias"
            },
            features: [
                "PBX virtualizado redundante",
                "200 telefones IP Yealink",
                "Softphone para desktop e mobile",
                "Gravação automática de chamadas",
                "IVR e filas de atendimento",
                "Integração com CRM"
            ]
        },
        {
            id: 8,
            title: "Segurança Perimetral",
            category: "ict",
            shortDescription: "Implementação de solução completa de segurança de rede e endpoint.",
            fullDescription: "Projeto de segurança abrangente incluindo firewall next-gen, IPS/IDS, proteção de endpoint e SIEM para correlação de eventos.",
            tags: ["Security", "Firewall"],
            technologies: ["FortiGate", "Sophos", "Snort", "Splunk", "EDR"],
            icon: "shield",
            iconColor: "indigo-500",
            status: "completed",
            metrics: {
                "Dispositivos Protegidos": "300+",
                "Ameaças Bloqueadas/mês": "5000+",
                "Tempo de Resposta": "<5min",
                "Compliance": "ISO 27001"
            },
            features: [
                "Firewall next-generation com SSL inspection",
                "IPS/IDS com assinaturas atualizadas",
                "EDR em todos os endpoints",
                "SIEM para correlação de eventos",
                "Políticas de DLP",
                "Testes de penetração trimestrais"
            ]
        },
        {
            id: 9,
            title: "Wi-Fi Público Seguro",
            category: "ict",
            shortDescription: "Implementação de rede Wi-Fi pública com captive portal e autenticação.",
            fullDescription: "Rede Wi-Fi de grande escala para espaço público com captive portal, autenticação por SMS/redes sociais e analytics de utilizadores.",
            tags: ["Wi-Fi", "Public Access"],
            technologies: ["UniFi", "pfSense", "Captive Portal", "RADIUS", "Splynx"],
            icon: "wifi",
            iconColor: "cyan-500",
            status: "completed",
            metrics: {
                "Access Points": "80",
                "Utilizadores/dia": "2000+",
                "Área de Cobertura": "15000m²",
                "Bandwidth Agregada": "1Gbps"
            },
            features: [
                "80 access points de alta densidade",
                "Captive portal personalizado",
                "Autenticação via SMS ou redes sociais",
                "Bandwidth management por utilizador",
                "Analytics de utilização",
                "Gestão centralizada UniFi"
            ]
        }
    ];
    
    const ictProjects = allProjects.filter(p => p.category === 'ict');
    const totalPages = Math.ceil(ictProjects.length / projectsPerPage);
    const startIndex = (page - 1) * projectsPerPage;
    const endIndex = startIndex + projectsPerPage;
    const paginatedProjects = ictProjects.slice(startIndex, endIndex);
    
    // Esconder loading
    document.getElementById('loading').classList.add('hidden');
    document.getElementById('projects-grid').classList.remove('opacity-50');
    
    return {
        projects: paginatedProjects,
        currentPage: page,
        totalPages: totalPages,
        total: ictProjects.length
    };
}

function getStatusBadge(status) {
    const badges = {
        'completed': '<span class="inline-flex items-center gap-2 px-4 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 font-bold text-sm rounded-lg"><i data-lucide="check-circle" class="w-4 h-4"></i> Concluído</span>',
        'active': '<span class="inline-flex items-center gap-2 px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 font-bold text-sm rounded-lg"><i data-lucide="activity" class="w-4 h-4"></i> Ativo</span>',
        'maintenance': '<span class="inline-flex items-center gap-2 px-4 py-2 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-400 font-bold text-sm rounded-lg"><i data-lucide="wrench" class="w-4 h-4"></i> Manutenção</span>'
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
                'Networking': 'bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300',
                'Security': 'bg-blue-100 dark:bg-blue-900/30 text-blue-600',
                'Wi-Fi': 'bg-cyan-100 dark:bg-cyan-900/30 text-cyan-600',
                'Data Center': 'bg-purple-100 dark:bg-purple-900/30 text-purple-600',
                'Virtualization': 'bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600',
                'SD-WAN': 'bg-green-100 dark:bg-green-900/30 text-green-600',
                'Cloud': 'bg-orange-100 dark:bg-orange-900/30 text-orange-600',
                'AWS': 'bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600',
                'VoIP': 'bg-teal-100 dark:bg-teal-900/30 text-teal-600',
                'Communication': 'bg-blue-100 dark:bg-blue-900/30 text-blue-600',
                'Firewall': 'bg-red-100 dark:bg-red-900/30 text-red-600',
                'Surveillance': 'bg-pink-100 dark:bg-pink-900/30 text-pink-600',
                'Public Access': 'bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600'
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
                <button onclick="openModal(${project.id})" class="text-brand-blue font-bold text-sm flex items-center gap-2 hover:gap-3 transition-all">
                    Ver Detalhes <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </button>
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
            'Networking': 'bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300',
            'Security': 'bg-blue-100 dark:bg-blue-900/30 text-blue-600',
            'Wi-Fi': 'bg-cyan-100 dark:bg-cyan-900/30 text-cyan-600',
            'Data Center': 'bg-purple-100 dark:bg-purple-900/30 text-purple-600',
            'Virtualization': 'bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600',
            'SD-WAN': 'bg-green-100 dark:bg-green-900/30 text-green-600',
            'Cloud': 'bg-orange-100 dark:bg-orange-900/30 text-orange-600',
            'AWS': 'bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600',
            'VoIP': 'bg-teal-100 dark:bg-teal-900/30 text-teal-600',
            'Communication': 'bg-blue-100 dark:bg-blue-900/30 text-blue-600',
            'Firewall': 'bg-red-100 dark:bg-red-900/30 text-red-600',
            'Surveillance': 'bg-pink-100 dark:bg-pink-900/30 text-pink-600',
            'Public Access': 'bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600'
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
    
    // Metrics
    const metricsHtml = Object.entries(project.metrics).map(([key, value]) => `
        <div class="bg-gray-50 dark:bg-gray-700/50 rounded-lg p-4 text-center">
            <div class="text-2xl font-bold text-brand-blue mb-1">${value}</div>
            <div class="text-xs text-gray-600 dark:text-gray-400 font-medium">${key}</div>
        </div>
    `).join('');
    document.getElementById('modal-metrics').innerHTML = metricsHtml;
    
    // Status
    document.getElementById('modal-status').innerHTML = getStatusBadge(project.status);
    
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
