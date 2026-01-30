# Meldo Maúnze - Website Pessoal

Um website pessoal moderno, responsivo e leve desenvolvido com **HTML5**, **CSS3**, **PHP** e **JavaScript vanilla**.

## 🎯 Características

- ✅ **Design Responsivo**: Funciona perfeitamente em desktop, tablet e mobile
- ✅ **Performance Otimizada**: Carregamento rápido e eficiente
- ✅ **Sem Dependências Externas**: HTML/CSS/PHP/JS puro
- ✅ **Paleta de Cores Moderna**: Inspirada em Mefemasys e Claude AI
- ✅ **Navegação Intuitiva**: Menu responsivo com animações suaves
- ✅ **SEO Amigável**: Meta tags e estrutura semântica
- ✅ **Segurança**: Headers de segurança e proteção contra ataques comuns

## 📁 Estrutura do Projeto

```
mmaunze_simple/
├── index.php              # Página inicial
├── pages/
│   ├── about.php         # Sobre Mim
│   ├── projects.php      # Projectos
│   ├── services.php      # Serviços
│   ├── blog.php          # Blog/Ideias
│   └── contact.php       # Contacto
├── includes/
│   ├── header.php        # Header reutilizável
│   └── footer.php        # Footer reutilizável
├── css/
│   └── style.css         # Estilos globais
├── js/
│   └── app.js            # JavaScript interativo
├── images/               # Imagens do website
├── .htaccess             # Configuração Apache
└── README.md             # Este arquivo
```

## 🚀 Instalação

### Requisitos
- PHP 7.4+
- Servidor web (Apache, Nginx, etc.)
- Navegador moderno

### Passos

1. **Clone ou copie os arquivos para seu servidor web**
   ```bash
   cp -r mmaunze_simple /var/www/html/
   ```

2. **Configure o servidor web para apontar para o diretório**
   - Apache: Configure o VirtualHost para apontar para `/var/www/html/mmaunze_simple`
   - Nginx: Configure o server block apropriadamente

3. **Ative mod_rewrite no Apache** (se necessário)
   ```bash
   sudo a2enmod rewrite
   sudo systemctl restart apache2
   ```

4. **Acesse o website**
   ```
   http://seu-dominio.com
   ```

## 🎨 Paleta de Cores

| Cor | Código | Uso |
|-----|--------|-----|
| Azul Principal | `#5591F5` | Botões, links, acentos |
| Laranja | `#FF7A3D` | Acentos secundários |
| Verde | `#10B981` | Sucesso, destaque |
| Cinza Claro | `#F7F7F9` | Fundo |
| Cinza Escuro | `#1F2937` | Texto principal |

## 📱 Responsividade

O website é totalmente responsivo com breakpoints em:
- **Mobile**: até 768px
- **Tablet**: 768px a 1024px
- **Desktop**: acima de 1024px

## 🔧 Personalização

### Modificar Cores
Edite as variáveis CSS em `css/style.css`:
```css
:root {
  --primary: #5591F5;
  --secondary: #FF7A3D;
  /* ... outras cores ... */
}
```

### Adicionar Conteúdo
1. Edite o arquivo PHP correspondente (ex: `pages/about.php`)
2. Mantenha a estrutura HTML existente
3. Salve e recarregue o navegador

### Adicionar Novas Páginas
1. Crie um novo arquivo PHP em `pages/`
2. Inclua o header e footer:
   ```php
   <?php
   $page_title = 'Título da Página';
   include '../includes/header.php';
   ?>
   
   <!-- Seu conteúdo aqui -->
   
   <?php include '../includes/footer.php'; ?>
   ```

## 🔐 Segurança

O website inclui várias medidas de segurança:
- **Headers de Segurança**: X-Frame-Options, X-Content-Type-Options, etc.
- **HTTPS**: Redirecionamento automático para HTTPS
- **Proteção contra Clickjacking**: X-Frame-Options SAMEORIGIN
- **Content Security Policy**: Restrição de recursos carregados

## ⚡ Performance

Otimizações implementadas:
- **Minificação**: CSS e JavaScript otimizados
- **Cache**: Headers de cache configurados
- **Compressão Gzip**: Ativada no `.htaccess`
- **Lazy Loading**: Imagens carregadas sob demanda
- **Animações CSS**: Transições suaves e eficientes

## 📊 SEO

O website é otimizado para SEO:
- Meta tags descritivas
- Estrutura semântica HTML5
- URLs limpas e descritivas
- Mobile-friendly
- Sitemap (pode ser adicionado)

## 🌐 Hospedagem

O website pode ser hospedado em qualquer servidor com suporte a PHP:
- Shared Hosting
- VPS
- Cloud (AWS, Azure, Google Cloud, etc.)
- Servidores dedicados

## 📝 Formulário de Contacto

O formulário de contacto inclui validação básica no cliente. Para funcionalidade completa, crie um arquivo `includes/process-form.php`:

```php
<?php
// Processar formulário
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Validar e enviar email
// ...

echo json_encode(['success' => true, 'message' => 'Mensagem enviada!']);
?>
```

## 🎯 Próximos Passos

- [ ] Integrar formulário de contacto com envio de email
- [ ] Adicionar blog dinâmico com base de dados
- [ ] Implementar sistema de comentários
- [ ] Adicionar analytics (Google Analytics, etc.)
- [ ] Otimizar imagens
- [ ] Adicionar PWA (Progressive Web App)

## 📞 Suporte

Para dúvidas ou sugestões, entre em contacto:
- Email: meldo@mmaunze.com
- Telefone: +258 84 3123456
- Website: https://mmaunze.com

## 📄 Licença

Este projeto é de uso pessoal. Todos os direitos reservados © 2026 Meldo Maúnze.

---

**Desenvolvido com ❤️ por Meldo Maúnze**
