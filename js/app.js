// ============================================
// MELDO MAÚNZE - WEBSITE PESSOAL
// Vue.js 3 via CDN - Interatividade
// ============================================

// Inicializar Vue.js quando o DOM estiver pronto
document.addEventListener('DOMContentLoaded', function() {
  // Menu responsivo
  const menuToggle = document.querySelector('.menu-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (menuToggle) {
    menuToggle.addEventListener('click', function() {
      navLinks.classList.toggle('active');
    });
  }

  // Fechar menu ao clicar em um link
  const navItems = document.querySelectorAll('.nav-links a');
  navItems.forEach(item => {
    item.addEventListener('click', function() {
      navLinks.classList.remove('active');
    });
  });

  // Marcar link ativo na navegação
  const currentPage = window.location.pathname.split('/').pop() || 'index.php';
  navItems.forEach(item => {
    const href = item.getAttribute('href');
    if (href === currentPage || (currentPage === '' && href === 'index.php')) {
      item.classList.add('active');
    }
  });

  // Animações ao scroll
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
  };

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-fade-in');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Observar elementos com classe 'card'
  document.querySelectorAll('.card').forEach(card => {
    observer.observe(card);
  });

  // Smooth scroll para âncoras
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  // Validação de formulário
  const contactForm = document.querySelector('form');
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const name = document.querySelector('input[name="name"]');
      const email = document.querySelector('input[name="email"]');
      const message = document.querySelector('textarea[name="message"]');

      // Validação simples
      if (!name.value.trim()) {
        alert('Por favor, preencha o seu nome');
        return;
      }

      if (!email.value.trim() || !isValidEmail(email.value)) {
        alert('Por favor, preencha um email válido');
        return;
      }

      if (!message.value.trim()) {
        alert('Por favor, escreva uma mensagem');
        return;
      }

      // Se chegou aqui, o formulário é válido
      alert('Mensagem enviada com sucesso! Obrigado por contactar.');
      contactForm.reset();
    });
  }

  // Função auxiliar para validar email
  function isValidEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }

  // Efeito de hover em cards
  document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('mouseenter', function() {
      this.style.transform = 'translateY(-4px)';
    });

    card.addEventListener('mouseleave', function() {
      this.style.transform = 'translateY(0)';
    });
  });

  // Contador de estatísticas com animação
  const stats = document.querySelectorAll('[data-stat]');
  if (stats.length > 0) {
    const statsObserver = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const stat = entry.target;
          const target = parseInt(stat.getAttribute('data-stat'));
          animateCounter(stat, target);
          statsObserver.unobserve(stat);
        }
      });
    }, { threshold: 0.5 });

    stats.forEach(stat => statsObserver.observe(stat));
  }

  // Função para animar contador
  function animateCounter(element, target) {
    let current = 0;
    const increment = target / 50;
    const interval = setInterval(() => {
      current += increment;
      if (current >= target) {
        element.textContent = target + '+';
        clearInterval(interval);
      } else {
        element.textContent = Math.floor(current) + '+';
      }
    }, 30);
  }
});

// Função para navegar entre páginas (se necessário)
function navigateTo(page) {
  window.location.href = page + '.php';
}

// Função para enviar formulário via AJAX (opcional)
function submitForm(formId) {
  const form = document.getElementById(formId);
  if (!form) return;

  const formData = new FormData(form);
  
  fetch('includes/process-form.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      alert('Mensagem enviada com sucesso!');
      form.reset();
    } else {
      alert('Erro ao enviar mensagem: ' + data.message);
    }
  })
  .catch(error => {
    console.error('Erro:', error);
    alert('Erro ao enviar mensagem');
  });
}
