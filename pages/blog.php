<?php
$page_title = 'Blog/Ideias';
include '../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero" style="padding: var(--spacing-xl) 0;">
  <div class="container">
    <h1>Blog & Ideias</h1>
    <p>Pensamentos, artigos e insights sobre tecnologia e desenvolvimento</p>
  </div>
</section>

<!-- Posts do Blog -->
<section style="background-color: white;">
  <div class="container">
    <h2>Artigos Recentes</h2>
    <p class="section-subtitle">Leia os meus últimos artigos sobre tecnologia, desenvolvimento e inovação.</p>
    
    <div class="grid grid-2">
      <article class="card">
        <div style="background: linear-gradient(135deg, #5591F5 0%, #4A7FE5 100%); height: 200px; border-radius: var(--radius-lg); margin-bottom: var(--spacing-md);"></div>
        <h4>O Futuro do Desenvolvimento Web em 2026</h4>
        <p style="color: #FF7A3D; font-size: 0.875rem; margin-bottom: var(--spacing-sm);">15 de Janeiro de 2026</p>
        <p>Explorar as tendências emergentes no desenvolvimento web, incluindo Web Components, AI-assisted development e novas frameworks.</p>
        <div style="margin-top: var(--spacing-md);">
          <span class="badge badge-primary">Web Development</span>
          <span class="badge badge-primary">Tendências</span>
        </div>
        <a href="#" style="display: inline-block; margin-top: var(--spacing-md); color: #5591F5; font-weight: 600;">Ler Mais →</a>
      </article>
      
      <article class="card">
        <div style="background: linear-gradient(135deg, #FF7A3D 0%, #FF6B1A 100%); height: 200px; border-radius: var(--radius-lg); margin-bottom: var(--spacing-md);"></div>
        <h4>Machine Learning para Iniciantes</h4>
        <p style="color: #FF7A3D; font-size: 0.875rem; margin-bottom: var(--spacing-sm);">10 de Janeiro de 2026</p>
        <p>Um guia prático para começar com machine learning, desde conceitos básicos até implementação de primeiro modelo.</p>
        <div style="margin-top: var(--spacing-md);">
          <span class="badge badge-secondary">Machine Learning</span>
          <span class="badge badge-secondary">Tutorial</span>
        </div>
        <a href="#" style="display: inline-block; margin-top: var(--spacing-md); color: #5591F5; font-weight: 600;">Ler Mais →</a>
      </article>
      
      <article class="card">
        <div style="background: linear-gradient(135deg, #10B981 0%, #059669 100%); height: 200px; border-radius: var(--radius-lg); margin-bottom: var(--spacing-md);"></div>
        <h4>Segurança em Aplicações Web</h4>
        <p style="color: #FF7A3D; font-size: 0.875rem; margin-bottom: var(--spacing-sm);">5 de Janeiro de 2026</p>
        <p>Boas práticas essenciais para proteger suas aplicações web contra ataques comuns e vulnerabilidades de segurança.</p>
        <div style="margin-top: var(--spacing-md);">
          <span class="badge badge-primary">Segurança</span>
          <span class="badge badge-primary">Boas Práticas</span>
        </div>
        <a href="#" style="display: inline-block; margin-top: var(--spacing-md); color: #5591F5; font-weight: 600;">Ler Mais →</a>
      </article>
      
      <article class="card">
        <div style="background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%); height: 200px; border-radius: var(--radius-lg); margin-bottom: var(--spacing-md);"></div>
        <h4>DevOps: Automatizando Seu Workflow</h4>
        <p style="color: #FF7A3D; font-size: 0.875rem; margin-bottom: var(--spacing-sm);">1 de Janeiro de 2026</p>
        <p>Como implementar práticas de DevOps para automatizar deployment, testes e monitoramento de suas aplicações.</p>
        <div style="margin-top: var(--spacing-md);">
          <span class="badge badge-secondary">DevOps</span>
          <span class="badge badge-secondary">Automação</span>
        </div>
        <a href="#" style="display: inline-block; margin-top: var(--spacing-md); color: #5591F5; font-weight: 600;">Ler Mais →</a>
      </article>
      
      <article class="card">
        <div style="background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%); height: 200px; border-radius: var(--radius-lg); margin-bottom: var(--spacing-md);"></div>
        <h4>React vs Vue.js: Qual Escolher?</h4>
        <p style="color: #FF7A3D; font-size: 0.875rem; margin-bottom: var(--spacing-sm);">28 de Dezembro de 2025</p>
        <p>Comparação detalhada entre React e Vue.js, analisando casos de uso, comunidade, performance e curva de aprendizado.</p>
        <div style="margin-top: var(--spacing-md);">
          <span class="badge badge-primary">Frontend</span>
          <span class="badge badge-primary">Frameworks</span>
        </div>
        <a href="#" style="display: inline-block; margin-top: var(--spacing-md); color: #5591F5; font-weight: 600;">Ler Mais →</a>
      </article>
      
      <article class="card">
        <div style="background: linear-gradient(135deg, #5591F5 0%, #4A7FE5 100%); height: 200px; border-radius: var(--radius-lg); margin-bottom: var(--spacing-md);"></div>
        <h4>Otimização de Performance em Aplicações</h4>
        <p style="color: #FF7A3D; font-size: 0.875rem; margin-bottom: var(--spacing-sm);">20 de Dezembro de 2025</p>
        <p>Técnicas práticas para otimizar performance, reduzir tempo de carregamento e melhorar experiência do utilizador.</p>
        <div style="margin-top: var(--spacing-md);">
          <span class="badge badge-secondary">Performance</span>
          <span class="badge badge-secondary">Otimização</span>
        </div>
        <a href="#" style="display: inline-block; margin-top: var(--spacing-md); color: #5591F5; font-weight: 600;">Ler Mais →</a>
      </article>
    </div>
  </div>
</section>

<!-- Newsletter -->
<section style="background: linear-gradient(135deg, #5591F5 0%, #FF7A3D 100%); color: white;">
  <div class="container" style="max-width: 600px; text-align: center;">
    <h2 style="color: white;">Subscreva a Newsletter</h2>
    <p style="color: rgba(255, 255, 255, 0.9); margin-bottom: var(--spacing-lg);">Receba os últimos artigos e insights diretamente no seu email.</p>
    
    <form style="display: flex; gap: var(--spacing-sm);">
      <input 
        type="email" 
        placeholder="Seu email" 
        style="flex: 1; padding: var(--spacing-sm); border: none; border-radius: var(--radius-md);"
        required
      >
      <button 
        type="submit" 
        class="btn" 
        style="background-color: white; color: #5591F5; font-weight: 600; border: none;"
      >
        Subscrever
      </button>
    </form>
  </div>
</section>

<!-- Categorias -->
<section style="background-color: white;">
  <div class="container">
    <h2>Categorias</h2>
    <p class="section-subtitle">Explore artigos por categoria de interesse.</p>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: var(--spacing-md);">
      <div class="card" style="text-align: center; cursor: pointer; transition: all 0.3s ease;">
        <h5 style="color: #5591F5; margin-bottom: var(--spacing-sm);">Web Development</h5>
        <p style="color: var(--text-gray); font-size: 0.875rem;">12 artigos</p>
      </div>
      
      <div class="card" style="text-align: center; cursor: pointer; transition: all 0.3s ease;">
        <h5 style="color: #FF7A3D; margin-bottom: var(--spacing-sm);">Machine Learning</h5>
        <p style="color: var(--text-gray); font-size: 0.875rem;">8 artigos</p>
      </div>
      
      <div class="card" style="text-align: center; cursor: pointer; transition: all 0.3s ease;">
        <h5 style="color: #10B981; margin-bottom: var(--spacing-sm);">DevOps</h5>
        <p style="color: var(--text-gray); font-size: 0.875rem;">6 artigos</p>
      </div>
      
      <div class="card" style="text-align: center; cursor: pointer; transition: all 0.3s ease;">
        <h5 style="color: #8B5CF6; margin-bottom: var(--spacing-sm);">Segurança</h5>
        <p style="color: var(--text-gray); font-size: 0.875rem;">5 artigos</p>
      </div>
      
      <div class="card" style="text-align: center; cursor: pointer; transition: all 0.3s ease;">
        <h5 style="color: #F59E0B; margin-bottom: var(--spacing-sm);">Tutoriais</h5>
        <p style="color: var(--text-gray); font-size: 0.875rem;">15 artigos</p>
      </div>
      
      <div class="card" style="text-align: center; cursor: pointer; transition: all 0.3s ease;">
        <h5 style="color: #5591F5; margin-bottom: var(--spacing-sm);">Tendências</h5>
        <p style="color: var(--text-gray); font-size: 0.875rem;">7 artigos</p>
      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
