-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jun-2022 às 17:59
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `campanha`
--

CREATE TABLE `campanha` (
  `id` int(11) NOT NULL,
  `nome_campanha` text NOT NULL,
  `camisa` text NOT NULL,
  `calca` text NOT NULL,
  `sapato` text NOT NULL,
  `meia` text NOT NULL,
  `cueca` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `campanha`
--

INSERT INTO `campanha` (`id`, `nome_campanha`, `camisa`, `calca`, `sapato`, `meia`, `cueca`) VALUES
(21, 'Campanha do Agasalho 2022', 'PP, P, M, G, GG, EGG', '36, 38, 46', '36, 37, 43', 'P, G', 'G, GG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(1, 'Camisa'),
(2, 'Calça'),
(3, 'Sapato'),
(4, 'Meia'),
(5, 'Cueca / Calcinha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `doador`
--

CREATE TABLE `doador` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `endereco` varchar(40) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `numero` int(100) NOT NULL,
  `genero` varchar(2) NOT NULL,
  `tamanho_camisa` varchar(3) NOT NULL,
  `tamanho_calca` int(58) NOT NULL,
  `tamanho_sapato` int(44) NOT NULL,
  `tamanho_meia` varchar(3) NOT NULL,
  `tamanho_cueca` varchar(3) NOT NULL,
  `id_donatario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `doador`
--

INSERT INTO `doador` (`id`, `nome`, `data_nascimento`, `telefone`, `email`, `endereco`, `bairro`, `numero`, `genero`, `tamanho_camisa`, `tamanho_calca`, `tamanho_sapato`, `tamanho_meia`, `tamanho_cueca`, `id_donatario`) VALUES
(146, 'Danton da Rosa Abreu', '2022-05-31', '55997234421', 'danton.rosa07@gmail.com', 'Rua da Praia', 'Restinga', 804, 'M', 'P', 40, 38, 'M', 'M', 0),
(147, 'Lauren Duarte Fagudes', '2005-07-05', '55984223344', 'laurenzinhaaaa@gmail.com', 'Rua santa aparecida ', 'Cidade Alta', 799, 'F', 'M', 44, 38, 'P', 'P', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `donatario`
--

CREATE TABLE `donatario` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `endereco` varchar(40) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `numero` int(11) NOT NULL,
  `genero` varchar(3) NOT NULL,
  `tamanho_camisa` varchar(3) NOT NULL,
  `tamanho_calca` int(58) NOT NULL,
  `tamanho_sapato` int(58) NOT NULL,
  `tamanho_meia` varchar(3) NOT NULL,
  `tamanho_cueca` varchar(3) NOT NULL,
  `id_doador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `donatario`
--

INSERT INTO `donatario` (`id`, `nome`, `data_nascimento`, `telefone`, `email`, `endereco`, `bairro`, `numero`, `genero`, `tamanho_camisa`, `tamanho_calca`, `tamanho_sapato`, `tamanho_meia`, `tamanho_cueca`, `id_doador`) VALUES
(10, 'Matheus Almeida', '1999-05-15', '55999995544', 'mateusalmeida@hotmail.com', 'Rua da lagoa', 'Centro', 237, 'NB', 'EG', 52, 41, 'M', 'M', 0),
(11, 'João almeida', '2022-05-08', '55999773341', 'joao@email.com', 'rua da plenituda', 'centro', 555, 'M', 'EGG', 58, 44, 'G', 'GG', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `usuario` varchar(16) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `data_nascimento`, `telefone`, `email`, `endereco`, `bairro`, `numero`, `usuario`, `senha`) VALUES
(4, 'Danton da Rosa Abreu', '2022-06-22', '55997234421', 'danton.rosa07@gmail.com', 'Rua da Praia', 'Restinga', '804', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `tamanho` varchar(30) NOT NULL,
  `entrada` int(11) NOT NULL,
  `saida` int(11) NOT NULL,
  `disponibilidade` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`id`, `nome`, `tamanho`, `entrada`, `saida`, `disponibilidade`, `id_categoria`) VALUES
(1, 'Camisa', 'PP', 35, 35, 0, 1),
(2, 'Camisa', 'P', 15, 15, 0, 1),
(3, 'Camisa', 'M', 5, 5, 0, 1),
(4, 'Camisa', 'G', 1, 1, 0, 1),
(5, 'Camisa', 'GG', 5, 5, 0, 1),
(6, 'Camisa', 'EG', 0, 0, 0, 1),
(7, 'Camisa', 'EGG', 4, 4, 0, 1),
(8, 'Calça', '36', 0, 0, 0, 2),
(9, 'Calça', '38', 0, 0, 0, 2),
(10, 'Calça', '40', 3, 3, 0, 2),
(11, 'Calça', '42', 0, 0, 0, 2),
(12, 'Calça', '44', 3, 3, 0, 2),
(13, 'Calça', '46', 0, 0, 0, 2),
(14, 'Calça', '48', 0, 0, 0, 2),
(15, 'Calça', '50', 0, 0, 0, 2),
(16, 'Calça', '52', 5, 5, 0, 2),
(17, 'Calça', '54', 0, 0, 0, 2),
(18, 'Calça', '56', 0, 0, 0, 2),
(19, 'Calça', '58', 0, 0, 0, 2),
(20, 'Sapato', '33', 0, 0, 0, 3),
(21, 'Sapato', '34', 0, 0, 0, 3),
(22, 'Sapato', '35', 0, 0, 0, 3),
(23, 'Sapato', '36', 0, 0, 0, 3),
(24, 'Sapato', '37', 0, 0, 0, 3),
(25, 'Sapato', '38', 0, 0, 0, 3),
(26, 'Sapato', '39', 0, 0, 0, 3),
(27, 'Sapato', '40', 0, 0, 0, 3),
(28, 'Sapato', '41', 0, 0, 0, 3),
(29, 'Sapato', '42', 0, 0, 0, 3),
(30, 'Sapato', '43', 0, 0, 0, 3),
(31, 'Sapato', '44', 0, 0, 0, 3),
(32, 'Meia', 'PP', 0, 0, 0, 4),
(33, 'Meia', 'P', 0, 0, 0, 4),
(34, 'Meia', 'M', 0, 0, 0, 4),
(35, 'Meia', 'G', 0, 0, 0, 4),
(36, 'Cueca / Calcinha', 'PP', 0, 0, 0, 5),
(37, 'Cueca / Calcinha', 'P', 0, 0, 0, 5),
(38, 'Cueca / Calcinha', 'M', 0, 0, 0, 5),
(39, 'Cueca / Calcinha', 'G', 0, 0, 0, 5),
(40, 'Cueca / Calcinha', 'GG', 0, 0, 0, 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `campanha`
--
ALTER TABLE `campanha`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `doador`
--
ALTER TABLE `doador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `donatario`
--
ALTER TABLE `donatario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `campanha`
--
ALTER TABLE `campanha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `doador`
--
ALTER TABLE `doador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT de tabela `donatario`
--
ALTER TABLE `donatario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
