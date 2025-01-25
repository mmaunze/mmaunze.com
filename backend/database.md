
### 1. **Tabela estado**
Esta tabela armazena os diferentes estados das entidades (como "Disponível", "Ativo", "Suspenso", etc.)

```sql
CREATE TABLE estado (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(50) NOT NULL UNIQUE, -- Ex.: "Disponível", "Ativo", "Suspenso"
    descricao TEXT
);
```

### 2. **Tabela usuario**
Armazena os dados dos usuários, com a relação ao estado da conta do usuário.

```sql
CREATE TABLE usuario (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE,
    telefone VARCHAR(15),
    tipo_usuario VARCHAR(50) NOT NULL CHECK (tipo_usuario IN ('Estudante', 'Professor', 'Bibliotecario')),
    id_estado INT NOT NULL DEFAULT 1 REFERENCES estado(id), -- Estado inicial: "Ativo"
    data_cadastro DATE DEFAULT CURRENT_DATE
);
```

### 3. **Tabela classe**
Armazena as informações sobre as classes (como "1ª" e "2ª").

```sql
CREATE TABLE classe (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(20) NOT NULL UNIQUE, -- Ex.: "1ª", "2ª"
    descricao TEXT
);
```

### 4. **Tabela estudante**
Armazena informações específicas dos estudantes, com a referência à classe a que pertencem.

```sql
CREATE TABLE estudante (
    id_usuario INT PRIMARY KEY REFERENCES usuario(id),
    id_classe INT NOT NULL REFERENCES classe(id),
    matricula VARCHAR(20) UNIQUE NOT NULL
);
```

### 5. **Tabela professor**
Armazena dados específicos dos professores.

```sql
CREATE TABLE professor (
    id_usuario INT PRIMARY KEY REFERENCES usuario(id),
    departamento VARCHAR(100),
    siape VARCHAR(20) UNIQUE
);
```

### 6. **Tabela bibliotecario**
Armazena dados específicos dos bibliotecários.

```sql
CREATE TABLE bibliotecario (
    id_usuario INT PRIMARY KEY REFERENCES usuario(id),
    turno_trabalho VARCHAR(50)
);
```

### 7. **Tabela categoria**
Armazena as categorias dos livros (como "Ficção", "História", etc.).

```sql
CREATE TABLE categoria (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(50) NOT NULL UNIQUE
);
```

### 8. **Tabela editora**
Armazena informações sobre as editoras.

```sql
CREATE TABLE editora (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL UNIQUE
);
```

### 9. **Tabela autor**
Armazena os autores dos livros.

```sql
CREATE TABLE autor (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL UNIQUE
);
```

### 10. **Tabela livro**
Armazena as informações dos livros, com referências à categoria, editora e estado do livro.

```sql
CREATE TABLE livro (
    id SERIAL PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    id_categoria INT NOT NULL REFERENCES categoria(id),
    id_editora INT NOT NULL REFERENCES editora(id),
    ano_publicacao INT,
    isbn VARCHAR(20) UNIQUE,
    id_estado INT NOT NULL DEFAULT 1 REFERENCES estado(id), -- Estado inicial: "Disponível"
    quantidade_total INT NOT NULL CHECK (quantidade_total >= 0)
);
```

### 11. **Tabela livro_autor**
Relaciona livros e autores.

```sql
CREATE TABLE livro_autor (
    id SERIAL PRIMARY KEY,
    id_livro INT NOT NULL REFERENCES livro(id),
    id_autor INT NOT NULL REFERENCES autor(id),
    UNIQUE (id_livro, id_autor)
);
```

### 12. **Tabela emprestimo**
Armazena as informações de empréstimos realizados, com a referência ao bibliotecário responsável pelo empréstimo.

```sql
CREATE TABLE emprestimo (
    id SERIAL PRIMARY KEY,
    id_usuario INT NOT NULL REFERENCES usuario(id),
    id_livro INT NOT NULL REFERENCES livro(id),
    id_bibliotecario_emprestimo INT NOT NULL REFERENCES bibliotecario(id_usuario),
    data_emprestimo DATE DEFAULT CURRENT_DATE,
    data_prevista_devolucao DATE NOT NULL,
    devolvido BOOLEAN DEFAULT FALSE
);
```

### 13. **Tabela devolucao**
Armazena as informações de devolução dos livros.

```sql
CREATE TABLE devolucao (
    id SERIAL PRIMARY KEY,
    id_emprestimo INT NOT NULL UNIQUE REFERENCES emprestimo(id),
    id_bibliotecario_devolucao INT NOT NULL REFERENCES bibliotecario(id_usuario),
    data_devolucao DATE DEFAULT CURRENT_DATE
);
```

### 14. **Tabela historico_movimentacao**
Registra o histórico de movimentações de livros, como empréstimos e devoluções.

```sql
CREATE TABLE historico_movimentacao (
    id SERIAL PRIMARY KEY,
    id_livro INT NOT NULL REFERENCES livro(id),
    id_usuario INT NOT NULL REFERENCES usuario(id),
    tipo_movimentacao VARCHAR(20) NOT NULL CHECK (tipo_movimentacao IN ('Emprestimo', 'Devolucao')),
    data_movimentacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

Essas tabelas oferecem um modelo estruturado para gerenciar os dados da biblioteca escolar, considerando não apenas os livros, mas também as interações dos usuários, empréstimos e devoluções, além de um sistema de estados para monitorar as condições das entidades (usuários e livros).