-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Nov-2019 às 18:31
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.27

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `Id` int(11) NOT NULL,
  `Rua` varchar(40) DEFAULT NULL,
  `Numero` int(11) DEFAULT NULL,
  `Complemento` varchar(40) DEFAULT NULL,
  `Cidade` varchar(40) DEFAULT NULL,
  `Estado` char(2) DEFAULT NULL,
  `CEP` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

CREATE TABLE `grupo` (
  `nome` varchar(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `fk_tipo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medidas`
--

CREATE TABLE `medidas` (
  `Peso` int(11) DEFAULT NULL,
  `altura` decimal(5,2) DEFAULT NULL,
  `taxa_gordura` decimal(5,2) DEFAULT NULL,
  `data_ficha` date DEFAULT NULL,
  `id` int(11) NOT NULL,
  `fk_usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensalidade`
--

CREATE TABLE `mensalidade` (
  `data_pagamento` date DEFAULT NULL,
  `preco` decimal(5,2) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `fk_usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `nome` varchar(40) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `fk_treino_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `treino`
--

CREATE TABLE `treino` (
  `Data` date DEFAULT NULL,
  `carga` int(11) DEFAULT NULL,
  `repeticao` int(11) DEFAULT NULL,
  `serie` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `fk_usuario_id` int(11) DEFAULT NULL,
  `fk_tipo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `Id_endereco` int(11) DEFAULT NULL,
  `telefone` varchar(40) DEFAULT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `Data_de_Nascimento` date DEFAULT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `fk_Endereco_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_grupo_3` (`fk_tipo_id`);

--
-- Indexes for table `medidas`
--
ALTER TABLE `medidas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_medidas_2` (`fk_usuario_id`);

--
-- Indexes for table `mensalidade`
--
ALTER TABLE `mensalidade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_mensalidade_2` (`fk_usuario_id`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tipo_2` (`fk_treino_id`);

--
-- Indexes for table `treino`
--
ALTER TABLE `treino`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_treino_2` (`fk_usuario_id`),
  ADD KEY `FK_treino_3` (`fk_tipo_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_usuario_2` (`fk_Endereco_Id`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `FK_grupo_2` FOREIGN KEY (`fk_tipo_id`) REFERENCES `tipo` (`id`),
  ADD CONSTRAINT `FK_grupo_3` FOREIGN KEY (`fk_tipo_id`) REFERENCES `tipo` (`id`);

--
-- Limitadores para a tabela `medidas`
--
ALTER TABLE `medidas`
  ADD CONSTRAINT `FK_medidas_2` FOREIGN KEY (`fk_usuario_id`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `mensalidade`
--
ALTER TABLE `mensalidade`
  ADD CONSTRAINT `FK_mensalidade_2` FOREIGN KEY (`fk_usuario_id`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `tipo`
--
ALTER TABLE `tipo`
  ADD CONSTRAINT `FK_tipo_2` FOREIGN KEY (`fk_treino_id`) REFERENCES `treino` (`id`);

--
-- Limitadores para a tabela `treino`
--
ALTER TABLE `treino`
  ADD CONSTRAINT `FK_treino_2` FOREIGN KEY (`fk_usuario_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `FK_treino_3` FOREIGN KEY (`fk_tipo_id`) REFERENCES `tipo` (`id`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_usuario_2` FOREIGN KEY (`fk_Endereco_Id`) REFERENCES `endereco` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
