# Guia de Deploy - Meldo Maúnze Website

## 📋 Pré-requisitos

- Servidor web com suporte a PHP 7.4+
- Acesso SSH ou FTP
- Domínio configurado (opcional)
- Certificado SSL (recomendado)

## 🚀 Opções de Deploy

### Opção 1: Shared Hosting (Recomendado para Iniciantes)

**Provedores Populares:**
- Bluehost
- HostGator
- GoDaddy
- Namecheap
- Hostinger

**Passos:**
1. Faça upload dos arquivos via FTP/SFTP
2. Configure o domínio no painel de controle
3. Ative o SSL (geralmente automático)
4. Acesse seu website

### Opção 2: VPS (Virtual Private Server)

**Provedores Populares:**
- DigitalOcean
- Linode
- Vultr
- AWS Lightsail

**Passos:**
1. Crie uma instância VPS
2. Instale Apache/Nginx e PHP
3. Clone ou copie os arquivos
4. Configure o domínio
5. Configure SSL com Let's Encrypt

```bash
# Exemplo com DigitalOcean/Ubuntu

# 1. Conectar via SSH
ssh root@seu_ip

# 2. Atualizar sistema
apt update && apt upgrade -y

# 3. Instalar Apache e PHP
apt install -y apache2 php php-mysql php-curl php-gd php-json

# 4. Ativar mod_rewrite
a2enmod rewrite
systemctl restart apache2

# 5. Clonar repositório (se usar Git)
cd /var/www/html
git clone seu_repositorio mmaunze

# 6. Definir permissões
chown -R www-data:www-data /var/www/html/mmaunze
chmod -R 755 /var/www/html/mmaunze

# 7. Instalar Certbot para SSL
apt install -y certbot python3-certbot-apache
certbot --apache -d seu-dominio.com

# 8. Reiniciar Apache
systemctl restart apache2
```

### Opção 3: Cloud Hosting

**AWS:**
Usar AWS Elastic Beanstalk ou EC2. Documentação: https://docs.aws.amazon.com/

**Google Cloud:**
Usar Google App Engine ou Compute Engine. Documentação: https://cloud.google.com/docs

**Azure:**
Usar Azure App Service. Documentação: https://docs.microsoft.com/azure/

## 🔧 Configuração Pós-Deploy

### 1. Configurar Variáveis de Ambiente

```bash
# Copiar arquivo de configuração
cp config.example.php config.php

# Editar com suas informações
nano config.php
```

### 2. Configurar Email

Para o formulário de contacto funcionar:

```php
// Em config.php
define('FORM_RECIPIENT_EMAIL', 'seu-email@exemplo.com');
define('FORM_SENDER_EMAIL', 'noreply@seu-dominio.com');
```

### 3. Configurar Permissões

```bash
# Permissões recomendadas
chmod 644 index.php
chmod 644 pages/*.php
chmod 644 includes/*.php
chmod 644 css/style.css
chmod 644 js/app.js
chmod 755 includes/
```

### 4. Ativar HTTPS

**Com Let's Encrypt (Recomendado):**
```bash
certbot --apache -d seu-dominio.com
```

**Com cPanel:**
1. Aceda ao AutoSSL
2. Clique em "Issue"
3. Aguarde a emissão

## 📊 Monitoramento

### Verificar Logs

```bash
# Apache error log
tail -f /var/log/apache2/error.log

# Apache access log
tail -f /var/log/apache2/access.log

# PHP error log
tail -f /var/log/php-errors.log
```

### Monitorar Performance

- Usar Google PageSpeed Insights
- Usar GTmetrix
- Usar Pingdom
- Usar New Relic

## 🔒 Segurança Pós-Deploy

### 1. Firewall

```bash
# UFW (Ubuntu)
ufw allow 22/tcp
ufw allow 80/tcp
ufw allow 443/tcp
ufw enable
```

### 2. Backup Automático

```bash
# Script de backup
#!/bin/bash
BACKUP_DIR="/backups"
DATE=$(date +%Y%m%d_%H%M%S)
tar -czf $BACKUP_DIR/mmaunze_$DATE.tar.gz /var/www/html/mmaunze
```

### 3. Atualizações de Segurança

```bash
# Atualizar regularmente
apt update && apt upgrade -y
```

## 📈 Otimizações Finais

### 1. Compressão Gzip
Já configurada em `.htaccess`

### 2. Cache
Já configurada em `.htaccess`

### 3. CDN (Opcional)
- Cloudflare
- Akamai
- AWS CloudFront

### 4. Analytics
Adicione Google Analytics em `includes/header.php`:

```html
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_ID');
</script>
```

## 🆘 Troubleshooting

### Erro 404
- Verificar se `.htaccess` está ativado
- Verificar se mod_rewrite está ativado
- Verificar permissões dos arquivos

### Erro 500
- Verificar logs de erro do Apache/PHP
- Verificar sintaxe do PHP
- Verificar permissões de diretório

### Email não funciona
- Verificar se mail() está ativado no PHP
- Configurar SMTP se necessário
- Verificar logs de email

### Performance lenta
- Ativar cache
- Ativar compressão Gzip
- Otimizar imagens
- Usar CDN

## 📞 Suporte

Para dúvidas sobre deploy:
- Email: meldo@mmaunze.com
- Documentação: https://mmaunze.com

---

**Sucesso no Deploy! 🚀**
