-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Nov-2019 às 15:41
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `medidas`
--

CREATE TABLE `medidas` (
  `peso` int(11) DEFAULT NULL,
  `altura` decimal(5,2) DEFAULT NULL,
  `taxa_gordura` decimal(5,2) DEFAULT NULL,
  `data_avaliacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL,
  `fk_usuario_id` int(11) DEFAULT NULL,
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
  `pant_esq` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `medidas`
--

INSERT INTO `medidas` (`peso`, `altura`, `taxa_gordura`, `data_avaliacao`, `id`, `fk_usuario_id`, `b_direito`, `b_esquerdo`, `torax`, `ante_b_dir`, `ante_b_esq`, `abdominal`, `quadril`, `cintura`, `coxa_dir`, `coxa_esq`, `pant_dir`, `pant_esq`) VALUES
(90, '175.00', '0.00', '2019-11-25 00:00:00', 1, 5, '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensalidade`
--

CREATE TABLE `mensalidade` (
  `data_pagamento` date DEFAULT NULL,
  `preco` decimal(5,2) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `fk_usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `treino`
--

CREATE TABLE `treino` (
  `data` date DEFAULT NULL,
  `carga` int(11) DEFAULT NULL,
  `repeticao` int(11) DEFAULT NULL,
  `serie` int(11) DEFAULT NULL,
  `id_tipo` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `fk_usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `telefone` varchar(40) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `data_de_nascimento` date DEFAULT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `fk_endereco_id` int(11) DEFAULT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `situacao` tinyint(1) NOT NULL DEFAULT '1',
  `sexo` varchar(11) DEFAULT NULL,
  `tipo` int(1) DEFAULT NULL,
  `senha` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`telefone`, `cpf`, `email`, `id`, `data_de_nascimento`, `nome`, `fk_endereco_id`, `data_cadastro`, `situacao`, `sexo`, `tipo`, `senha`) VALUES
('987654321', '', 'fulano@fulano.com', 5, '0000-00-00', 'Fulano', NULL, '2019-11-25 00:00:00', 1, 'on', 2, '123'),
('987654321', '', 'sicrano@sicrano.com', 6, '0000-00-00', 'Sicrano', NULL, '2019-11-25 00:00:00', 1, 'on', 2, '123'),
('987654321', '', 'beltrano@beltrano.com', 7, '0000-00-00', 'Beltrano', NULL, '2019-11-25 00:00:00', 1, 'on', 2, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medidas`
--
ALTER TABLE `medidas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensalidade`
--
ALTER TABLE `mensalidade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treino`
--
ALTER TABLE `treino`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medidas`
--
ALTER TABLE `medidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mensalidade`
--
ALTER TABLE `mensalidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `treino`
--
ALTER TABLE `treino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
