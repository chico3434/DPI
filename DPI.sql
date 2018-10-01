-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 01/10/2018 às 19:47
-- Versão do servidor: 5.7.23-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `DPI`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Administradores`
--

CREATE TABLE `Administradores` (
  `usuario` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Administradores`
--

INSERT INTO `Administradores` (`usuario`, `senha`) VALUES
('root', 'toor');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Funcionarios`
--

CREATE TABLE `Funcionarios` (
  `email` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `dataNascimento` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `profissao` char(2) NOT NULL,
  `salario` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Funcionarios`
--

INSERT INTO `Funcionarios` (`email`, `nome`, `dataNascimento`, `sexo`, `profissao`, `salario`) VALUES
('chicokarkow@hotmail.com', 'Francisco', '2000-07-20', 'M', 'DV', 20000);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Profissoes`
--

CREATE TABLE `Profissoes` (
  `cod` char(2) NOT NULL,
  `nome` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Profissoes`
--

INSERT INTO `Profissoes` (`cod`, `nome`) VALUES
('AS', 'Analista de Sistemas'),
('DG', 'Designer Gráfico'),
('DV', 'Desenvolvedor'),
('ML', 'Machine Learning'),
('RD', 'Profissional de Redes'),
('SI', 'Segurança da Informação');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `Administradores`
--
ALTER TABLE `Administradores`
  ADD PRIMARY KEY (`usuario`);

--
-- Índices de tabela `Funcionarios`
--
ALTER TABLE `Funcionarios`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `Profissoes`
--
ALTER TABLE `Profissoes`
  ADD PRIMARY KEY (`cod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
