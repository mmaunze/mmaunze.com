<?php
/**
 * Configuração de Email (PHPMailer)
 * Usa credenciais SMTP do .env
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Mailer
{
    private PHPMailer $mail;
    private static array $config = [];

    /**
     * Inicializa configuração de email
     */
    private static function initConfig(): void
    {
        if (empty(self::$config)) {
            self::$config = [
                'host' => env('SMTP_HOST', 'smtp.hostinger.com'),
                'port' => env('SMTP_PORT', 465),
                'secure' => env('SMTP_SECURE', 'ssl'),
                'user' => env('SMTP_USER'),
                'pass' => env('SMTP_PASS'),
                'from_email' => env('SMTP_FROM_EMAIL'),
                'from_name' => env('SMTP_FROM_NAME', 'Meldo Maúnze'),
            ];
        }
    }

    /**
     * Construtor - inicializa PHPMailer
     */
    public function __construct()
    {
        self::initConfig();
        
        $this->mail = new PHPMailer(true);

        try {
            // Configuração SMTP
            $this->mail->isSMTP();
            $this->mail->Host = self::$config['host'];
            $this->mail->SMTPAuth = true;
            $this->mail->Username = self::$config['user'];
            $this->mail->Password = self::$config['pass'];
            $this->mail->SMTPSecure = self::$config['secure'];
            $this->mail->Port = self::$config['port'];
            $this->mail->CharSet = 'UTF-8';

            // Debug apenas em desenvolvimento
            if (defined('APP_DEBUG') && APP_DEBUG) {
                $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;
            }

            // Remetente padrão
            $this->mail->setFrom(
                self::$config['from_email'],
                self::$config['from_name']
            );

        } catch (Exception $e) {
            if (defined('APP_DEBUG') && APP_DEBUG) {
                throw new RuntimeException(
                    'Erro ao configurar email: ' . $e->getMessage()
                );
            } else {
                error_log('Mail Config Error: ' . $e->getMessage());
                throw new RuntimeException('Erro ao configurar email.');
            }
        }
    }

    /**
     * Define destinatário
     */
    public function to(string $email, string $name = ''): self
    {
        try {
            $this->mail->addAddress($email, $name);
        } catch (Exception $e) {
            error_log("Erro ao adicionar destinatário: {$e->getMessage()}");
        }
        return $this;
    }

    /**
     * Define assunto
     */
    public function subject(string $subject): self
    {
        $this->mail->Subject = $subject;
        return $this;
    }

    /**
     * Define corpo HTML
     */
    public function body(string $html, string $altText = ''): self
    {
        $this->mail->isHTML(true);
        $this->mail->Body = $html;
        $this->mail->AltBody = $altText ?: strip_tags($html);
        return $this;
    }

    /**
     * Define reply-to
     */
    public function replyTo(string $email, string $name = ''): self
    {
        try {
            $this->mail->addReplyTo($email, $name);
        } catch (Exception $e) {
            error_log("Erro ao adicionar reply-to: {$e->getMessage()}");
        }
        return $this;
    }

    /**
     * Adiciona anexo
     */
    public function attach(string $path, string $name = ''): self
    {
        try {
            $this->mail->addAttachment($path, $name);
        } catch (Exception $e) {
            error_log("Erro ao adicionar anexo: {$e->getMessage()}");
        }
        return $this;
    }

    /**
     * Envia o email
     */
    public function send(): bool
    {
        try {
            return $this->mail->send();
        } catch (Exception $e) {
            if (defined('APP_DEBUG') && APP_DEBUG) {
                throw new RuntimeException(
                    'Erro ao enviar email: ' . $this->mail->ErrorInfo
                );
            } else {
                error_log('Mail Send Error: ' . $this->mail->ErrorInfo);
                return false;
            }
        }
    }

    /**
     * Retorna erro
     */
    public function getError(): string
    {
        return $this->mail->ErrorInfo;
    }

    /**
     * Cria instância estática
     */
    public static function create(): self
    {
        return new self();
    }
}
