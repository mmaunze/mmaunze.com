<?php
/**
 * Configuração da Base de Dados
 * Usa credenciais do .env
 */

class Database
{
    private static ?PDO $instance = null;
    private static array $config = [];

    /**
     * Inicializa configuração da BD
     */
    private static function initConfig(): void
    {
        if (empty(self::$config)) {
            self::$config = [
                'host' => env('DB_HOST', 'localhost'),
                'port' => env('DB_PORT', '3306'),
                'name' => env('DB_NAME'),
                'user' => env('DB_USER'),
                'pass' => env('DB_PASS'),
                'charset' => env('DB_CHARSET', 'utf8mb4'),
            ];
        }
    }

    /**
     * Retorna instância PDO (Singleton)
     */
    public static function getConnection(): PDO
    {
        if (self::$instance === null) {
            self::initConfig();
            
            $dsn = sprintf(
                'mysql:host=%s;port=%s;dbname=%s;charset=%s',
                self::$config['host'],
                self::$config['port'],
                self::$config['name'],
                self::$config['charset']
            );

            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
            ];

            try {
                self::$instance = new PDO(
                    $dsn,
                    self::$config['user'],
                    self::$config['pass'],
                    $options
                );
            } catch (PDOException $e) {
                if (defined('APP_DEBUG') && APP_DEBUG) {
                    throw new RuntimeException(
                        'Erro de conexão à base de dados: ' . $e->getMessage()
                    );
                } else {
                    error_log('DB Connection Error: ' . $e->getMessage());
                    throw new RuntimeException('Erro de conexão à base de dados.');
                }
            }
        }

        return self::$instance;
    }

    /**
     * Executa query preparada
     */
    public static function query(string $sql, array $params = []): PDOStatement
    {
        $conn = self::getConnection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    /**
     * Fecha conexão
     */
    public static function closeConnection(): void
    {
        self::$instance = null;
    }
}
