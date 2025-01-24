<?php

function loadEnv($filePath)
{
    if (!file_exists($filePath)) {
        throw new Exception("Arquivo .env não encontrado: $filePath");
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Ignorar comentários
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Separar chave e valor
        list($key, $value) = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value);

        // Remover aspas do valor, se houver
        $value = trim($value, '"\'');

        // Definir variável de ambiente
        putenv("$key=$value");
    }
}

class ConexaoMysql
{
    private $host;
    private $usuario;
    private $senha;
    private $db;
    private $conexao;

    public function __construct()
    {
        // Carregar variáveis do .env
        $this->host = getenv('DB_HOST');
        $this->usuario = getenv('DB_USER');
        $this->senha = getenv('DB_PASS');
        $this->db = getenv('DB_NAME');

        // Verificar se todas as variáveis foram carregadas
        if (!$this->host || !$this->usuario || !$this->db) {
            throw new Exception("Variáveis de ambiente para conexão não foram configuradas corretamente.");
        }
    }

    public function conectar()
    {
        try {
            $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->db);
            if ($this->conexao->connect_error) {
                throw new Exception("Falha na conexão: " . $this->conexao->connect_error);
            }
        } catch (Exception $e) {
            $this->logError($e->getMessage());
            die("Ocorreu um problema na conexão com a base de dados. Tente novamente mais tarde.");
        }
        return $this->conexao;
    }

    public function fecharConexao()
    {
        $this->conexao->close();
    }

    public function prepare($sql)
    {
        return $this->conexao->prepare($sql);
    }

    public function query($sql)
    {
        return $this->conexao->query($sql);
    }

    private function logError($message)
    {
        error_log($message, 3, 'logfile.log');
    }
}

// Exemplo de uso
try {
    // Carregar o arquivo .env
    loadEnv('../../.env');

    // Instanciar a classe de conexão
    $conexao = new ConexaoMysql();

    // Conectar ao banco
    $db = $conexao->conectar();
   
} catch (Exception $e) {
    die($e->getMessage());
}
