-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Nov-2019 às 15:37
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_academia`
--
-- Indexes for dumped tables
--
CREATE TABLE `estado` (
  `Id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` varchar(99) DEFAULT NULL,
  `sigla` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `endereco` (
  `Id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `Rua` varchar(100) DEFAULT NULL,
  `Numero` int(11) DEFAULT NULL,
  `Complemento` varchar(40) DEFAULT NULL,
  `Cidade` varchar(100) DEFAULT NULL,
  `CEP` varchar(9) NOT NULL,
  `fk_estado_id` int,
   FOREIGN KEY (fk_estado_id) REFERENCES estado(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `telefone` varchar(40) DEFAULT NULL,
  `CPF` varchar(11) NOT NULL,
  `email` char(50) DEFAULT NULL,
  `Data_de_Nascimento` date NOT NULL,
  `nome` varchar(40) NOT NULL,
  `fk_Endereco_Id` int NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `situacao` tinyint(1) NOT NULL DEFAULT '1',
  `sexo` varchar(1) NOT NULL,
  `tipo` int(1) NOT NULL DEFAULT '1',
  `senha` varchar(50) NOT NULL,
  FOREIGN KEY (fk_Endereco_Id) REFERENCES endereco(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




-- --------------------------------------------------------


--
-- Estrutura da tabela `grupo`
--

CREATE TABLE `grupo` (
  `Id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Estrutura da tabela `mensalidade`
--

CREATE TABLE `mensalidade` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `data_pagamento` date DEFAULT NULL,
  `preco` decimal(5,2) DEFAULT NULL,
  `fk_usuario_id` int NOT NULL,
  FOREIGN KEY (fk_usuario_id) REFERENCES usuario(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `fk_grupo_id` int NOT NULL,
  FOREIGN KEY (fk_grupo_id) REFERENCES grupo(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `treino`
--

CREATE TABLE `treino` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `Data` date DEFAULT NULL,
  `carga` int(11) DEFAULT NULL,
  `repeticao` int(11) DEFAULT NULL,
  `serie` int(11) DEFAULT NULL,
  `fk_grupo_id` int NOT NULL,
  `fk_usuario_id` int NOT NULL,
  `fk_tipo_id` int NOT NULL,
  FOREIGN KEY (fk_grupo_id) REFERENCES grupo(id),
  FOREIGN KEY (fk_usuario_id) REFERENCES usuario(id),
  FOREIGN KEY (fk_tipo_id) REFERENCES tipo(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Estrutura da tabela `medidas`
--

CREATE TABLE `medidas` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `peso` decimal(5,2) DEFAULT NULL,
  `altura` decimal(5,2) DEFAULT NULL,
  `taxa_gordura` decimal(5,2) DEFAULT NULL,
  `data_avaliacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_usuario_id` int NOT NULL,
  `b_direito` decimal(5,2) DEFAULT NULL,
  `b_esquerdo` decimal(5,2) DEFAULT NULL,
  `torax` decimal(5,2) DEFAULT NULL,
  `ante_b_dir` decimal(5,2) DEFAULT NULL,
  `ante_b_esq` decimal(5,2) DEFAULT NULL,
  `abdominal` decimal(5,2) DEFAULT NULL,
  `quadril` decimal(5,2) DEFAULT NULL,
  `cintura` decimal(5,2) DEFAULT NULL,
  `coxa_dir` decimal(5,2) DEFAULT NULL,
  `coxa_esq` decimal(5,2) DEFAULT NULL,
  `pant_dir` decimal(5,2) DEFAULT NULL,
  `pant_esq` decimal(5,2) DEFAULT NULL,
  FOREIGN KEY (fk_usuario_id) REFERENCES usuario(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
