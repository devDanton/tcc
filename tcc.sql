-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Maio-2022 às 05:07
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
-- Estrutura da tabela `doador`
--

CREATE TABLE `doador` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `endereco` int(40) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `numero` int(100) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `tamanho_camisa` varchar(3) NOT NULL,
  `tamanho_calca` int(58) NOT NULL,
  `tamanho_sapato` int(44) NOT NULL,
  `tamanho_meia` varchar(3) NOT NULL,
  `tamanho_cueca` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `tamanho` varchar(4) NOT NULL,
  `entrada` int(11) NOT NULL,
  `saida` int(11) NOT NULL,
  `disponibilidade` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `doador`
--
ALTER TABLE `doador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `doador`
--
ALTER TABLE `doador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
