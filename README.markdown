# Meldo Maúnze - Website Pessoal
Um website pessoal **moderno, leve e performático** desenvolvido com **HTML5**, **CSS3**, **PHP** e **JavaScript vanilla** (sem frameworks pesados).

[![Website mmaunze.com](https://img.shields.io/badge/Live%20Site-mmaunze.com-blue)](https://mmaunze.com)
[![License: Personal Use](https://img.shields.io/badge/License-Personal%20Use%20Only-success)](LICENSE)

## 🎯 Principais Características (2026 Edition)
- ✅ **Totalmente Responsivo** — Mobile-first com breakpoints otimizados
- ✅ **Performance extrema** — Core Web Vitals friendly (LCP < 2.5s, CLS ~0)
- ✅ **Zero dependências externas** — 100% HTML/CSS/PHP/JS puro
- ✅ **Paleta moderna e acessível** — Inspirada em interfaces clean + toques vibrantes
- ✅ **Navegação fluida** — Menu hamburger + animações CSS suaves
- ✅ **SEO otimizado** — Semântica HTML5, meta tags, Open Graph, schema básico
- ✅ **Segurança reforçada** — Headers modernos + CSP + HSTS
- ✅ **Dark Mode automático** — Respeita `prefers-color-scheme` do sistema
- ✅ **Micro-interações leves** — Hover states, smooth scroll, focus visível

## 📁 Estrutura do Projeto
```
mmaunze.com/
├── index.php               # Homepage (hero + destaques)
├── pages/
│   ├── about.php           # Sobre mim / bio
│   ├── projects.php        # Portfólio / projectos
│   ├── services.php        # Serviços oferecidos
│   ├── blog.php            # Artigos / ideias (estático ou futuro dinâmico)
│   └── contact.php         # Formulário de contacto
├── includes/
│   ├── header.php          # Cabeçalho reutilizável
│   └── footer.php          # Rodapé com social links + copyright
├── css/
│   └── style.css           # Estilos globais + :root variables + dark mode
├── js/
│   └── app.js              # JS vanilla (menu mobile, smooth scroll, form validation)
├── images/                 # Imagens otimizadas (WebP + fallback)
├── fonts/                  # Fontes locais (se aplicável)
├── .htaccess               # Regras Apache (rewrite, segurança, cache, compressão)
└── README.md               # Este arquivo
```

## 🚀 Instalação Rápida (2026)
### Requisitos mínimos
- PHP ≥ 8.1 (recomendado 8.2+)
- Servidor web (Apache/Nginx/LiteSpeed)
- Navegador moderno (Chrome 120+, Firefox 115+, Safari 17+)

### Passos
1. Copie os arquivos para o servidor
   ```bash
   # Exemplo em ambiente Linux
   cp -r mmaunze.com /var/www/html/
   ```

2. Configure o domínio/virtual host
   - **Apache**: DocumentRoot `/var/www/html/mmaunze.com`
   - **Nginx**:
     ```nginx
     root /var/www/html/mmaunze.com;
     index index.php;
     ```

3. Ative rewrite (se usar URLs limpas)
   ```bash
   sudo a2enmod rewrite
   sudo systemctl restart apache2
   ```

4. Acesse: `https://mmaunze.com` (use HTTPS sempre!)

## 🎨 Paleta de Cores Atualizada (2026)
Melhor contraste + suporte dark mode

| Cor              | Light Mode   | Dark Mode    | Uso principal                  |
|------------------|--------------|--------------|--------------------------------|
| Primary          | `#4F46E5`    | `#6366F1`    | Botões, links, acentos         |
| Secondary        | `#EC4899`    | `#F472B6`    | Destaques secundários          |
| Success          | `#10B981`    | `#34D399`    | Mensagens de sucesso           |
| Background       | `#F8FAFC`    | `#0F172A`    | Fundo principal                |
| Surface          | `#FFFFFF`    | `#1E293B`    | Cards, seções                  |
| Text Primary     | `#0F172A`    | `#F1F5F9`    | Texto principal                |
| Text Secondary   | `#475569`    | `#94A3B8`    | Texto secundário / legendas    |

No CSS:
```css
:root {
  --primary: #4F46E5;
  --secondary: #EC4899;
  --bg: #F8FAFC;
  --surface: #FFFFFF;
  --text: #0F172A;
}

@media (prefers-color-scheme: dark) {
  :root {
    --primary: #6366F1;
    --secondary: #F472B6;
    --bg: #0F172A;
    --surface: #1E293B;
    --text: #F1F5F9;
  }
}
```

## 🔐 Segurança (boas práticas 2026)
Headers recomendados no `.htaccess` ou no servidor:
```
Header always set X-Content-Type-Options "nosniff"
Header always set X-Frame-Options "SAMEORIGIN"
Header always set X-XSS-Protection "1; mode=block"
Header always set Referrer-Policy "strict-origin-when-cross-origin"
Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains"
Header set Content-Security-Policy "default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; img-src 'self' data:; font-src 'self';"
```

## ⚡ Performance (foco 2026)
- Imagens em **WebP** + `loading="lazy"` + `decoding="async"`
- CSS/JS crítico inline (acima da dobra)
- Compressão Brotli/Gzip
- Cache agressivo via `.htaccess`
- Evitar render-blocking resources

## 📝 Próximos Passos Sugeridos (realistas para 2026)
- [ ] Implementar envio real de email (PHPMailer ou mail() seguro)
- [ ] Adicionar **dark mode toggle** manual (além do system)
- [ ] Blog com Markdown → HTML estático ou mini banco SQLite
- [ ] Micro-interações melhores (ex: scroll reveal com IntersectionObserver)
- [ ] Analytics leve (Plausible ou Umami self-hosted)
- [ ] PWA básico (manifest + service worker simples)
- [ ] Acessibilidade extra (ARIA labels, keyboard navigation full)
- [ ] Testar Lighthouse → pontuação > 95/100

## 📞 Contacto & Suporte
- Email: meldo@mmaunze.com
- Telefone: +258 84 312 3456
- Website: https://mmaunze.com
- GitHub: https://github.com/mmaunze/mmaunze.com

## 📄 Licença
**Licença Gratuita para fins pessoais** — ideal para portfólio pessoal sem fins comerciais.  
Todos os direitos reservados © 2026 Meldo Maúnze.

---
**Desenvolvido com ❤️ por Meldo Maúnze**  
Maputo, Moçambique — 2026
