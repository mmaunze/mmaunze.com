

CREATE TABLE `categoria` (
  `id` int NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_publicacao`
--

CREATE TABLE `categoria_publicacao` (
  `categoria` int NOT NULL,
  `publicacao` bigint NOT NULL
) ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `id` int NOT NULL,
  `descricao` varchar(255) NOT NULL
) ;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id`, `descricao`) VALUES(1, 'Concluido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projecto`
--

CREATE TABLE `projecto` (
  `id` int NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `tipo_projecto` int DEFAULT NULL,
  `inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fim` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int NOT NULL,
  `slug` text NOT NULL
) ;

--
-- Extraindo dados da tabela `projecto`
--

INSERT INTO `projecto` (`id`, `titulo`, `cliente`, `descricao`, `tipo_projecto`, `inicio`, `fim`, `estado`, `slug`) VALUES(1, 'conversu - website', ' $artigo[\'data_publicacao\'] = date(\'d/M/Y\', strtotime($artigo[\'inicio\']));', ' $artigo[\'data_publicacao\'] = date(\'d/M/Y\', strtotime($artigo[\'inicio\'])); $artigo[\'data_publicacao\'] = date(\'d/M/Y\', strtotime($artigo[\'inicio\'])); $artigo[\'data_publicacao\'] = date(\'d/M/Y\', strtotime($artigo[\'inicio\'])); $artigo[\'data_publicacao\'] = date(\'d/M/Y\', strtotime($artigo[\'inicio\']));', 1, '2025-01-23 20:43:23', '2025-01-30 20:42:49', 1, 'conversu');
INSERT INTO `projecto` (`id`, `titulo`, `cliente`, `descricao`, `tipo_projecto`, `inicio`, `fim`, `estado`, `slug`) VALUES(2, 'Xicola- Sistema de Gestao Escolar', 'Varios', 'Xicola- Sistema de Gestao Escolar', 2, '2023-01-25 06:54:44', '2025-01-31 06:54:44', 1, 'xicola');
INSERT INTO `projecto` (`id`, `titulo`, `cliente`, `descricao`, `tipo_projecto`, `inicio`, `fim`, `estado`, `slug`) VALUES(3, 'Faculidade - Sistema de Gestao Universitaria ', 'Varios', 'Faculidade - Sistema de Gestao Universitaria Faculidade - Sistema de Gestao Universitaria ', 2, '2024-05-31 06:58:04', '2025-02-28 06:58:04', 1, 'faculidade');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacao`
--

CREATE TABLE `publicacao` (
  `id` bigint NOT NULL,
  `imagem` varchar(255)  DEFAULT NULL,
  `titulo` text NOT NULL,
  `resumo` text NOT NULL,
  `conteudo` text NOT NULL,
  `autor` bigint NOT NULL,
  `permanent_link` varchar(255)  NOT NULL,
  `data_publicacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Extraindo dados da tabela `publicacao`
--

INSERT INTO `publicacao` (`id`, `imagem`, `titulo`, `resumo`, `conteudo`, `autor`, `permanent_link`, `data_publicacao`) VALUES(20200401053, 'http://localhost/mmaunze.com/pages/blog/', 'http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/', 'http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/', 'http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/http://localhost/mmaunze.com/pages/blog/', 20200401053, 'http://localhost/mmaunze.com/pages/blog/', '2025-01-23 20:30:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id` int NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco_singular` float NOT NULL,
  `preco_empresa_pubica` float NOT NULL,
  `preco_empresa_privada` float NOT NULL,
  `tipo_servico` int NOT NULL
) ;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id`, `descricao`, `preco_singular`, `preco_empresa_pubica`, `preco_empresa_privada`, `tipo_servico`) VALUES(1, 'Instalar Sistema Windows + Programas Basicos', 1750, 4500, 3500, 1);
INSERT INTO `servico` (`id`, `descricao`, `preco_singular`, `preco_empresa_pubica`, `preco_empresa_privada`, `tipo_servico`) VALUES(2, 'Colocar Impressora na Rede', 2000, 5000, 3500, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnologia`
--

CREATE TABLE `tecnologia` (
  `id` int NOT NULL,
  `nome` varchar(255) NOT NULL,
  `dscricao` text NOT NULL
) ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnologia_projecto`
--

CREATE TABLE `tecnologia_projecto` (
  `tecnologia` int NOT NULL,
  `projecto` int NOT NULL
) ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_projecto`
--

CREATE TABLE `tipo_projecto` (
  `id` int NOT NULL,
  `descricao` varchar(255) NOT NULL
) ;

--
-- Extraindo dados da tabela `tipo_projecto`
--

INSERT INTO `tipo_projecto` (`id`, `descricao`) VALUES(1, 'website');
INSERT INTO `tipo_projecto` (`id`, `descricao`) VALUES(2, 'sistema');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_servico`
--

CREATE TABLE `tipo_servico` (
  `id` int NOT NULL,
  `descricao` varchar(255) NOT NULL
) ;

--
-- Extraindo dados da tabela `tipo_servico`
--

INSERT INTO `tipo_servico` (`id`, `descricao`) VALUES(1, 'suporte');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE `utilizador` (
  `id` bigint NOT NULL,
  `nome` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contacto` bigint NOT NULL
) ;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`id`, `nome`, `username`, `password`, `email`, `contacto`) VALUES(20200401053, 'Meldo Leonardo Maunze', 'mmaunze', 'hsjvuvduvub deh dhvuvdqubdu b vdvueihyyyyyyyyyyyyyyyyyyyyyyyy', 'contacto@mmaunze.com', 8421356);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `descricao` (`descricao`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Índices para tabela `categoria_publicacao`
--
ALTER TABLE `categoria_publicacao`
  ADD PRIMARY KEY (`publicacao`,`categoria`),
  ADD KEY `categoria` (`categoria`);

--
-- Índices para tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `descricao` (`descricao`);

--
-- Índices para tabela `projecto`
--
ALTER TABLE `projecto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titulo` (`titulo`),
  ADD KEY `tipo_projecto` (`tipo_projecto`),
  ADD KEY `estado` (`estado`);

--
-- Índices para tabela `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`permanent_link`),
  ADD KEY `autor` (`autor`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `descricao` (`descricao`),
  ADD KEY `tipo_servico` (`tipo_servico`);

--
-- Índices para tabela `tecnologia`
--
ALTER TABLE `tecnologia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tecnologia_projecto`
--
ALTER TABLE `tecnologia_projecto`
  ADD PRIMARY KEY (`tecnologia`,`projecto`),
  ADD KEY `projecto` (`projecto`);

--
-- Índices para tabela `tipo_projecto`
--
ALTER TABLE `tipo_projecto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipo_servico`
--
ALTER TABLE `tipo_servico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `projecto`
--
ALTER TABLE `projecto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20200401056;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tecnologia`
--
ALTER TABLE `tecnologia`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_projecto`
--
ALTER TABLE `tipo_projecto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tipo_servico`
--
ALTER TABLE `tipo_servico`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20200401054;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `categoria_publicacao`
--
ALTER TABLE `categoria_publicacao`
  ADD CONSTRAINT `categoria_publicacao_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categoria_publicacao_ibfk_2` FOREIGN KEY (`publicacao`) REFERENCES `publicacao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `projecto`
--
ALTER TABLE `projecto`
  ADD CONSTRAINT `projecto_ibfk_1` FOREIGN KEY (`tipo_projecto`) REFERENCES `tipo_projecto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `projecto_ibfk_2` FOREIGN KEY (`estado`) REFERENCES `estado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `publicacao`
--
ALTER TABLE `publicacao`
  ADD CONSTRAINT `publicacao_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `utilizador` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `servico_ibfk_1` FOREIGN KEY (`tipo_servico`) REFERENCES `tipo_servico` (`id`);

--
-- Limitadores para a tabela `tecnologia_projecto`
--
ALTER TABLE `tecnologia_projecto`
  ADD CONSTRAINT `tecnologia_projecto_ibfk_1` FOREIGN KEY (`tecnologia`) REFERENCES `tecnologia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tecnologia_projecto_ibfk_2` FOREIGN KEY (`projecto`) REFERENCES `projecto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
