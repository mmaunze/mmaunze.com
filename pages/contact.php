<?php
$page_title = 'Contacto';
include '../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero" style="padding: var(--spacing-xl) 0;">
  <div class="container">
    <h1>Contacto</h1>
    <p>Vamos conversar sobre seu próximo projeto</p>
  </div>
</section>

<!-- Conteúdo Principal -->
<section style="background-color: white;">
  <div class="container">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-xl); align-items: start;">
      <!-- Informações de Contacto -->
      <div>
        <h2>Informações de Contacto</h2>
        <p>Tem alguma dúvida, preocupação ou quer apenas bater um papo? Estou aqui para ajudar!</p>
        
        <div style="margin-top: var(--spacing-lg);">
          <div style="margin-bottom: var(--spacing-lg);">
            <h5 style="color: #5591F5; margin-bottom: var(--spacing-sm);">📧 Email</h5>
            <p><a href="mailto:meldo@mmaunze.com">meldo@mmaunze.com</a></p>
          </div>
          
          <div style="margin-bottom: var(--spacing-lg);">
            <h5 style="color: #FF7A3D; margin-bottom: var(--spacing-sm);">📱 Telefone</h5>
            <p><a href="tel:+258843123456">+258 84 3123456</a></p>
          </div>
          
          <div style="margin-bottom: var(--spacing-lg);">
            <h5 style="color: #10B981; margin-bottom: var(--spacing-sm);">📍 Localização</h5>
            <p>Maputo, Moçambique</p>
          </div>
          
          <div style="margin-bottom: var(--spacing-lg);">
            <h5 style="color: #8B5CF6; margin-bottom: var(--spacing-sm);">⏰ Horário de Atendimento</h5>
            <p>Segunda a Sexta: 09:00 - 18:00<br>Sábado: 10:00 - 14:00<br>Domingo: Fechado</p>
          </div>
        </div>
        
        <div style="margin-top: var(--spacing-lg);">
          <h5 style="margin-bottom: var(--spacing-md);">Redes Sociais</h5>
          <div style="display: flex; gap: var(--spacing-md);">
            <a href="https://github.com/mmaunze" target="_blank" style="width: 40px; height: 40px; background: #1F2937; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">👨‍💻</a>
            <a href="https://linkedin.com/in/mmaunze" target="_blank" style="width: 40px; height: 40px; background: #0A66C2; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">in</a>
            <a href="https://twitter.com/mmaunze" target="_blank" style="width: 40px; height: 40px; background: #1DA1F2; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">𝕏</a>
            <a href="https://instagram.com/mmaunze" target="_blank" style="width: 40px; height: 40px; background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">📷</a>
          </div>
        </div>
      </div>
      
      <!-- Formulário de Contacto -->
      <div>
        <h2>Envie sua Mensagem</h2>
        <p>Preencha o formulário abaixo e entrarei em contacto em breve.</p>
        
        <form style="margin-top: var(--spacing-lg);">
          <div class="form-group">
            <label for="name">Seu Nome *</label>
            <input 
              type="text" 
              id="name" 
              name="name" 
              placeholder="João Silva"
              required
            >
          </div>
          
          <div class="form-group">
            <label for="email">Email *</label>
            <input 
              type="email" 
              id="email" 
              name="email" 
              placeholder="joao@exemplo.com"
              required
            >
          </div>
          
          <div class="form-group">
            <label for="phone">Telefone</label>
            <input 
              type="tel" 
              id="phone" 
              name="phone" 
              placeholder="+258 84 3123456"
            >
          </div>
          
          <div class="form-group">
            <label for="subject">Assunto *</label>
            <select id="subject" name="subject" required>
              <option value="">Selecione um assunto</option>
              <option value="website">Desenvolvimento de Website</option>
              <option value="app">Desenvolvimento de Aplicação</option>
              <option value="consulting">Consultoria</option>
              <option value="maintenance">Manutenção e Suporte</option>
              <option value="other">Outro</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="message">Mensagem *</label>
            <textarea 
              id="message" 
              name="message" 
              placeholder="Escreva aqui sua mensagem..."
              required
            ></textarea>
          </div>
          
          <div class="form-group" style="display: flex; align-items: center; gap: var(--spacing-sm);">
            <input 
              type="checkbox" 
              id="privacy" 
              name="privacy"
              required
              style="width: auto; cursor: pointer;"
            >
            <label for="privacy" style="margin: 0; font-weight: normal;">Concordo com a política de privacidade</label>
          </div>
          
          <button type="submit" class="btn btn-primary" style="width: 100%; padding: var(--spacing-md);">
            Enviar Mensagem
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Mapa (Opcional) -->
<section style="background-color: #F7F7F9;">
  <div class="container">
    <h2 style="text-align: center; margin-bottom: var(--spacing-lg);">Localização</h2>
    <div style="width: 100%; height: 400px; background: linear-gradient(135deg, #5591F5 0%, #FF7A3D 100%); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem;">
      Mapa será integrado aqui (Google Maps)
    </div>
  </div>
</section>

<!-- FAQ de Contacto -->
<section style="background-color: white;">
  <div class="container" style="max-width: 700px;">
    <h2 style="text-align: center; margin-bottom: var(--spacing-lg);">Perguntas Frequentes</h2>
    
    <div class="card" style="margin-bottom: var(--spacing-md);">
      <h5>Qual é o tempo de resposta?</h5>
      <p>Respondo a todos os emails dentro de 24 horas úteis. Para assuntos urgentes, pode ligar diretamente.</p>
    </div>
    
    <div class="card" style="margin-bottom: var(--spacing-md);">
      <h5>Posso agendar uma reunião?</h5>
      <p>Sim! Após receber seu email, podemos agendar uma chamada ou reunião presencial para discutir seu projeto em detalhes.</p>
    </div>
    
    <div class="card" style="margin-bottom: var(--spacing-md);">
      <h5>Qual é a melhor forma de contacto?</h5>
      <p>Email é a melhor forma para assuntos não urgentes. Para questões urgentes, ligue diretamente. Também estou disponível em redes sociais.</p>
    </div>
    
    <div class="card">
      <h5>Vocês trabalham com clientes internacionais?</h5>
      <p>Sim! Trabalho com clientes de diferentes países e fusos horários. A comunicação é feita via email, videochamada ou telefone.</p>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
