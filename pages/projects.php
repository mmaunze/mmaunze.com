<?php
$page_title = 'Projectos';
include '../includes/header.php';
?>

  <style>
    :root {
      --primary: #5591F5;
      --primary-dark: #4A7FE5;
      --secondary: #FF7A3D;
      --success: #10B981;
      --bg-light: #F7F7F9;
      --bg-white: #FFFFFF;
      --text-dark: #1F2937;
      --text-gray: #6B7280;
      --border-color: #E5E7EB;
      --spacing-xs: 0.5rem;
      --spacing-sm: 1rem;
      --spacing-md: 1.5rem;
      --spacing-lg: 2rem;
      --spacing-xl: 3rem;
      --spacing-2xl: 4rem;
      --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
      --radius-md: 0.5rem;
      --radius-lg: 0.75rem;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      color: var(--text-dark);
      background-color: var(--bg-light);
      line-height: 1.6;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 var(--spacing-md);
    }

    /* Hero */
    .hero {
      background-color: var(--bg-white);
      padding: var(--spacing-2xl) 0;
      text-align: center;
    }

    .hero h6 {
      color: var(--primary);
      text-transform: uppercase;
      letter-spacing: 0.05em;
      font-size: 0.875rem;
      margin-bottom: var(--spacing-sm);
    }

    .hero h1 {
      font-size: 2.5rem;
      margin-bottom: var(--spacing-sm);
      color: var(--text-dark);
    }

    .hero p {
      color: var(--text-gray);
      font-size: 1.125rem;
      max-width: 600px;
      margin: 0 auto;
    }

    /* Filtros */
    .filters-section {
      background-color: var(--bg-light);
      padding: var(--spacing-lg) 0;
      border-bottom: 2px solid var(--border-color);
    }

    .filters {
      display: flex;
      gap: var(--spacing-md);
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
    }

    .filter-btn {
      padding: var(--spacing-sm) var(--spacing-lg);
      background-color: var(--bg-white);
      color: var(--text-gray);
      border: 2px solid var(--border-color);
      border-radius: var(--radius-md);
      cursor: pointer;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .filter-btn:hover {
      border-color: var(--primary);
      color: var(--primary);
    }

    .filter-btn.active {
      background-color: var(--primary);
      color: white;
      border-color: var(--primary);
    }

    /* Grid de Projectos */
    .projects-section {
      background-color: var(--bg-white);
      padding: var(--spacing-2xl) 0;
    }

    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
      gap: var(--spacing-lg);
      margin-top: var(--spacing-xl);
    }

    .project-card {
      background-color: var(--bg-white);
      border: 2px solid var(--border-color);
      border-radius: var(--radius-lg);
      padding: var(--spacing-lg);
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .project-card:hover {
      border-color: var(--primary);
      box-shadow: var(--shadow-lg);
      transform: translateY(-4px);
    }

    .project-card h4 {
      color: var(--text-dark);
      margin-bottom: var(--spacing-sm);
      font-size: 1.25rem;
    }

    .project-card p {
      color: var(--text-gray);
      margin-bottom: var(--spacing-md);
      line-height: 1.6;
    }

    .project-meta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: var(--spacing-md);
      padding-bottom: var(--spacing-sm);
      border-bottom: 1px solid var(--border-color);
    }

    .project-category {
      font-size: 0.875rem;
      font-weight: 600;
      color: var(--primary);
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    .project-date {
      font-size: 0.875rem;
      color: var(--text-gray);
    }

    .badges {
      display: flex;
      flex-wrap: wrap;
      gap: var(--spacing-xs);
    }

    .badge {
      display: inline-block;
      padding: var(--spacing-xs) var(--spacing-sm);
      background-color: var(--bg-light);
      color: var(--text-dark);
      border-radius: var(--radius-md);
      font-size: 0.75rem;
      font-weight: 600;
    }

    /* Paginação */
    .pagination {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: var(--spacing-sm);
      margin-top: var(--spacing-xl);
    }

    .page-btn {
      padding: var(--spacing-sm) var(--spacing-md);
      background-color: var(--bg-white);
      color: var(--text-gray);
      border: 2px solid var(--border-color);
      border-radius: var(--radius-md);
      cursor: pointer;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .page-btn:hover:not(:disabled) {
      border-color: var(--primary);
      color: var(--primary);
    }

    .page-btn.active {
      background-color: var(--primary);
      color: white;
      border-color: var(--primary);
    }

    .page-btn:disabled {
      opacity: 0.5;
      cursor: not-allowed;
    }

    /* Loading e Empty States */
    .loading, .empty-state {
      text-align: center;
      padding: var(--spacing-2xl) 0;
    }

    .loading {
      color: var(--primary);
      font-size: 1.125rem;
    }

    .empty-state h3 {
      color: var(--text-dark);
      margin-bottom: var(--spacing-sm);
    }

    .empty-state p {
      color: var(--text-gray);
    }

    /* Stats */
    .stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: var(--spacing-md);
      margin-bottom: var(--spacing-xl);
      text-align: center;
    }

    .stat-card {
      padding: var(--spacing-lg);
      background-color: var(--bg-light);
      border-radius: var(--radius-md);
    }

    .stat-number {
      font-size: 2rem;
      font-weight: 700;
      color: var(--primary);
      margin-bottom: var(--spacing-xs);
    }

    .stat-label {
      color: var(--text-gray);
      font-size: 0.875rem;
      font-weight: 600;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2rem;
      }
      
      .projects-grid {
        grid-template-columns: 1fr;
      }

      .filters {
        flex-direction: column;
        width: 100%;
      }

      .filter-btn {
        width: 100%;
      }
    }
  </style>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h6>PORTFOLIO</h6>
      <h1>Meus Projectos</h1>
      <p>Uma seleção dos trabalhos que tenho orgulho em compartilhar</p>
    </div>
  </section>

  <!-- Filtros -->
  <section class="filters-section">
    <div class="container">
      <div class="filters" id="filters">
        <button class="filter-btn active" data-filter="all">Todos</button>
        <button class="filter-btn" data-filter="web">Web</button>
        <button class="filter-btn" data-filter="mobile">Mobile</button>
        <button class="filter-btn" data-filter="ai">IA & Data</button>
        <button class="filter-btn" data-filter="infra">Infraestrutura</button>
      </div>
    </div>
  </section>

  <!-- Projectos -->
  <section class="projects-section">
    <div class="container">
      <div class="stats">
        <div class="stat-card">
          <div class="stat-number" id="totalProjects">0</div>
          <div class="stat-label">Total de Projectos</div>
        </div>
        <div class="stat-card">
          <div class="stat-number" id="filteredProjects">0</div>
          <div class="stat-label">Projectos Filtrados</div>
        </div>
        <div class="stat-card">
          <div class="stat-number" id="currentPage">1</div>
          <div class="stat-label">Página Actual</div>
        </div>
      </div>

      <div id="projectsContainer">
        <div class="loading">Carregando projectos...</div>
      </div>

      <div class="pagination" id="pagination"></div>
    </div>
  </section>

  <script>
    // Dados simulados (JSON que simula resposta de API)
    const projectsData = [
      {
        id: 1,
        title: "Sistema de Gestão Empresarial",
        description: "Desenvolvido um ERP completo para uma empresa de distribuição, integrando módulos de vendas, compras, inventário e financeiro.",
        category: "web",
        date: "2024-01",
        technologies: ["PHP", "MySQL", "JavaScript", "Bootstrap"]
      },
      {
        id: 2,
        title: "Plataforma de E-commerce",
        description: "Criação de uma loja online moderna com sistema de pagamento integrado, gestão de produtos e análise de vendas em tempo real.",
        category: "web",
        date: "2023-11",
        technologies: ["React", "Node.js", "Stripe", "MongoDB"]
      },
      {
        id: 3,
        title: "Aplicação Mobile de Delivery",
        description: "Desenvolvimento de aplicação mobile para plataforma de delivery com rastreamento em tempo real e integração com mapas.",
        category: "mobile",
        date: "2023-09",
        technologies: ["React Native", "Firebase", "Google Maps"]
      },
      {
        id: 4,
        title: "Dashboard de Análise de Dados",
        description: "Criação de dashboard interativo para análise de grandes volumes de dados com visualizações dinâmicas e relatórios customizados.",
        category: "ai",
        date: "2023-07",
        technologies: ["Vue.js", "D3.js", "Python", "PostgreSQL"]
      },
      {
        id: 5,
        title: "Infraestrutura em Nuvem",
        description: "Implementação de infraestrutura escalável em AWS com Docker, Kubernetes e CI/CD para uma startup de tecnologia.",
        category: "infra",
        date: "2023-05",
        technologies: ["AWS", "Docker", "Kubernetes", "Terraform"]
      },
      {
        id: 6,
        title: "Sistema de IA para Chatbot",
        description: "Desenvolvimento de chatbot inteligente com NLP para atendimento ao cliente, reduzindo tempo de resposta em 80%.",
        category: "ai",
        date: "2023-03",
        technologies: ["Python", "NLP", "Machine Learning", "Flask"]
      },
      {
        id: 7,
        title: "App de Gestão Financeira",
        description: "Aplicativo mobile para controle de finanças pessoais com sincronização em nuvem e relatórios inteligentes.",
        category: "mobile",
        date: "2023-01",
        technologies: ["Flutter", "Firebase", "Dart"]
      },
      {
        id: 8,
        title: "Portal de Notícias",
        description: "Plataforma de notícias com CMS personalizado, sistema de comentários e integração com redes sociais.",
        category: "web",
        date: "2022-11",
        technologies: ["WordPress", "PHP", "MySQL", "JavaScript"]
      },
      {
        id: 9,
        title: "Sistema de Reconhecimento Facial",
        description: "Implementação de sistema de reconhecimento facial para controle de acesso em edifícios corporativos.",
        category: "ai",
        date: "2022-09",
        technologies: ["Python", "OpenCV", "TensorFlow", "Redis"]
      },
      {
        id: 10,
        title: "Plataforma de Ensino Online",
        description: "Sistema completo de e-learning com videoconferência, quizzes interativos e acompanhamento de progresso.",
        category: "web",
        date: "2022-07",
        technologies: ["React", "Node.js", "WebRTC", "MongoDB"]
      },
      {
        id: 11,
        title: "App de Rede Social",
        description: "Desenvolvimento de rede social focada em comunidades profissionais com feed inteligente e networking.",
        category: "mobile",
        date: "2022-05",
        technologies: ["React Native", "GraphQL", "PostgreSQL"]
      },
      {
        id: 12,
        title: "Sistema de Monitoramento",
        description: "Implementação de sistema de monitoramento de infraestrutura com alertas em tempo real e dashboards customizados.",
        category: "infra",
        date: "2022-03",
        technologies: ["Prometheus", "Grafana", "Docker", "Kubernetes"]
      }
    ];

    // Estado da aplicação
    let currentFilter = 'all';
    let currentPage = 1;
    const itemsPerPage = 6;

    // Inicialização
    document.addEventListener('DOMContentLoaded', () => {
      setupFilters();
      renderProjects();
      updateStats();
    });

    // Configurar filtros
    function setupFilters() {
      const filterButtons = document.querySelectorAll('.filter-btn');
      
      filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
          // Remover active de todos
          filterButtons.forEach(b => b.classList.remove('active'));
          // Adicionar active no clicado
          btn.classList.add('active');
          
          // Atualizar filtro e resetar página
          currentFilter = btn.dataset.filter;
          currentPage = 1;
          
          // Re-renderizar
          renderProjects();
          updateStats();
        });
      });
    }

    // Filtrar projectos
    function getFilteredProjects() {
      if (currentFilter === 'all') {
        return projectsData;
      }
      return projectsData.filter(p => p.category === currentFilter);
    }

    // Paginar projectos
    function getPaginatedProjects() {
      const filtered = getFilteredProjects();
      const start = (currentPage - 1) * itemsPerPage;
      const end = start + itemsPerPage;
      return filtered.slice(start, end);
    }

    // Renderizar projectos
    function renderProjects() {
      const container = document.getElementById('projectsContainer');
      const projects = getPaginatedProjects();
      
      // Simular loading
      container.innerHTML = '<div class="loading">Carregando projectos...</div>';
      
      setTimeout(() => {
        if (projects.length === 0) {
          container.innerHTML = `
            <div class="empty-state">
              <h3>Nenhum projecto encontrado</h3>
              <p>Tente seleccionar outro filtro</p>
            </div>
          `;
        } else {
          const grid = document.createElement('div');
          grid.className = 'projects-grid';
          
          projects.forEach(project => {
            const card = createProjectCard(project);
            grid.appendChild(card);
          });
          
          container.innerHTML = '';
          container.appendChild(grid);
        }
        
        renderPagination();
      }, 300);
    }

    // Criar card de projecto
    function createProjectCard(project) {
      const card = document.createElement('div');
      card.className = 'project-card';
      
      const categoryLabels = {
        web: 'Web',
        mobile: 'Mobile',
        ai: 'IA & Data',
        infra: 'Infraestrutura'
      };
      
      card.innerHTML = `
        <div class="project-meta">
          <span class="project-category">${categoryLabels[project.category]}</span>
          <span class="project-date">${formatDate(project.date)}</span>
        </div>
        <h4>${project.title}</h4>
        <p>${project.description}</p>
        <div class="badges">
          ${project.technologies.map(tech => `<span class="badge">${tech}</span>`).join('')}
        </div>
      `;
      
      return card;
    }

    // Formatar data
    function formatDate(dateStr) {
      const [year, month] = dateStr.split('-');
      const months = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
      return `${months[parseInt(month) - 1]} ${year}`;
    }

    // Renderizar paginação
    function renderPagination() {
      const pagination = document.getElementById('pagination');
      const filtered = getFilteredProjects();
      const totalPages = Math.ceil(filtered.length / itemsPerPage);
      
      if (totalPages <= 1) {
        pagination.innerHTML = '';
        return;
      }
      
      let html = `
        <button class="page-btn" onclick="changePage(${currentPage - 1})" ${currentPage === 1 ? 'disabled' : ''}>
          ← Anterior
        </button>
      `;
      
      for (let i = 1; i <= totalPages; i++) {
        html += `
          <button class="page-btn ${i === currentPage ? 'active' : ''}" onclick="changePage(${i})">
            ${i}
          </button>
        `;
      }
      
      html += `
        <button class="page-btn" onclick="changePage(${currentPage + 1})" ${currentPage === totalPages ? 'disabled' : ''}>
          Próxima →
        </button>
      `;
      
      pagination.innerHTML = html;
    }

    // Mudar página
    function changePage(page) {
      const filtered = getFilteredProjects();
      const totalPages = Math.ceil(filtered.length / itemsPerPage);
      
      if (page < 1 || page > totalPages) return;
      
      currentPage = page;
      renderProjects();
      updateStats();
      
      // Scroll suave para o topo
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Atualizar estatísticas
    function updateStats() {
      document.getElementById('totalProjects').textContent = projectsData.length;
      document.getElementById('filteredProjects').textContent = getFilteredProjects().length;
      document.getElementById('currentPage').textContent = currentPage;
    }
  </script>

<!-- CTA -->
<section style="background-color: white; text-align: center;">
  <div class="container">
    <h2>Tem um Projecto em Mente?</h2>
    <p class="section-subtitle">Estou sempre aberto a novos desafios e oportunidades de colaboração.</p>
    <a href="/pages/contact" class="btn btn-primary">Vamos Conversar</a>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
