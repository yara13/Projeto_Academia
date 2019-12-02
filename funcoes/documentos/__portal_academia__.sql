-- phpmyadmin sql dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- host: 127.0.0.1
-- generation time: 21-nov-2019 às 15:37
-- versão do servidor: 10.1.38-mariadb
-- versão do php: 7.3.2

set sql_mode = "no_auto_value_on_zero";
set autocommit = 0;
start transaction;
set time_zone = "+00:00";


/*!40101 set @old_character_set_client=@@character_set_client */;
/*!40101 set @old_character_set_results=@@character_set_results */;
/*!40101 set @old_collation_connection=@@collation_connection */;
/*!40101 set names utf8mb4 */;

--
-- database: `portal_academia`
--
-- indexes for dumped tables
--
create table `estado` (
  `id` int primary key not null auto_increment,
  `nome` varchar(99) default null,
  `sigla` varchar(2) default null
) engine=innodb default charset=utf8;


create table `endereco` (
  `id` int primary key not null auto_increment,
  `rua` varchar(100) default null,
  `numero` int(11) default null,
  `complemento` varchar(40) default null,
  `cidade` varchar(100) default null,
  `cep` varchar(9) not null,
  `fk_estado_id` int,
   foreign key (fk_estado_id) references estado(id)
) engine=innodb default charset=utf8;

--
-- estrutura da tabela `usuario`
--

create table `usuario` (
  `id` int primary key not null auto_increment,
  `telefone` varchar(40) default null,
  `cpf` varchar(11) not null,
  `email` char(50) default null,
  `data_de_nascimento` date not null,
  `nome` varchar(40) not null,
  `fk_endereco_id` int not null,
  `data_cadastro` datetime not null default current_timestamp,
  `situacao` tinyint(1) not null default '1',
  `sexo` varchar(1) not null,
  `tipo` int(1) not null default '1',
  foreign key (fk_endereco_id) references endereco(id)
) engine=innodb default charset=utf8;




-- --------------------------------------------------------


--
-- estrutura da tabela `grupo`
--

create table `grupo` (
  `Id` int primary key not null auto_increment,
  `nomeg` varchar(99) not null
) engine=innodb default charset=utf8;
-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- estrutura da tabela `mensalidade`
--

create table `mensalidade` (
  `id` int primary key not null auto_increment,
  `data_pagamento` date default null,
  `preco` decimal(5,2) default null,
  `fk_usuario_id` int not null,
  foreign key (fk_usuario_id) references usuario(id)
) engine=innodb default charset=utf8;

-- --------------------------------------------------------

--
-- estrutura da tabela `tipo`
--

create table `tipo` (
  `id` int primary key not null auto_increment,
  `nomet` varchar(40) not null,
  `fk_grupo_id` int not null,
  foreign key (fk_grupo_id) references grupo(id)
) engine=innodb default charset=utf8;

-- --------------------------------------------------------

--
-- estrutura da tabela `treino`
--

create table `treino` (
  `id` int primary key not null auto_increment,
  `data` date default null,
  `carga` int(11) default null,
  `repeticao` int(11) default null,
  `serie` int(11) default null,
  `fk_grupo_id` int not null,
  `fk_usuario_id` int not null,
  `fk_tipo_id` int not null,
  foreign key (fk_grupo_id) references grupo(id),
  foreign key (fk_usuario_id) references usuario(id),
  foreign key (fk_tipo_id) references tipo(id)
) engine=innodb default charset=utf8;

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- estrutura da tabela `medidas`
--

create table `medidas` (
  `id` int primary key not null auto_increment,
  `peso` decimal(5,2) default null CHECK (peso>=20.0),
  `altura` decimal(5,2) default null CHECK (altura>=1.00),
  `taxa_gordura` decimal(5,2) default null,
  `data_avaliacao` datetime not null default current_timestamp,
  `fk_usuario_id` int not null,
  `b_direito` decimal(5,2) default null,
  `b_esquerdo` decimal(5,2) default null,
  `torax` decimal(5,2) default null,
  `ante_b_dir` decimal(5,2) default null,
  `ante_b_esq` decimal(5,2) default null,
  `abdominal` decimal(5,2) default null,
  `quadril` decimal(5,2) default null,
  `cintura` decimal(5,2) default null,
  `coxa_dir` decimal(5,2) default null,
  `coxa_esq` decimal(5,2) default null,
  `pant_dir` decimal(5,2) default null,
  `pant_esq` decimal(5,2) default null,
  foreign key (fk_usuario_id) references usuario(id)
) engine=innodb default charset=utf8;


commit;

/*!40101 set character_set_client=@old_character_set_client */;
/*!40101 set character_set_results=@old_character_set_results */;
/*!40101 set collation_connection=@old_collation_connection */;
