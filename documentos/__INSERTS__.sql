
INSERT INTO `estado` (`nome`, `sigla`) VALUES
("Acre", "AC"),
("Alagoas", "AL"),
("Amapá", "AP"),
("Amazonas", "AM"),
("Bahia", "BA"),
("Ceará", "CE"),
("Distrito Federal", "DF"),
("Espírito Santo", "ES"),
("Goiás", "GO"),
("Maranhão", "MA"),
("Mato Grosso", "MT"),
("Mato Grosso do Sul", "MS"),
("Minas Gerais", "MG"),
("Pará", "PA"),
("Paraíba", "PB"),
("Paraná", "PR"),
("Pernambuco", "PE"),
("Piauí", "PI"),
("Rio de Janeiro", "RJ"),
("Rio Grande do Norte", "RN"),
("Rio Grande do Sul", "RS"),
("Rondônia", "RO"),
("Roraima", "RR"),
("Santa Catarina", "SC"),
("São Paulo", "SP"),
("Sergipe", "SE"),
("Tocantins", "TO");


--
-- Estrutura da tabela `usuario`
--
insert into `endereco` (`rua`, `numero`, `complemento`, `cidade`, `cep`, `fk_estado_id`) values
("Rua Nova", 123, "Apt 102", "Acopiara", "54345061", 6), 
("Rua Central", 07, "Casa", "Fortaleza", "54345060", 6),
("Rua da Rodoviaria", 14, "Sebrado", "Acopiara", "54345062", 6),
("Rua da Matriz", 1223, " ", "Acopiara", "54345063", 6),
("Rua dos Moreiras", 55, "Beco", "Acopiara", "54345064", 6);

insert into `usuario` (`telefone`, `cpf`, `email`, `data_de_nascimento`, `nome`, `fk_endereco_id`, `data_cadastro`, `situacao`, `sexo`, `tipo`, `senha`) values
('123456789', '12345678901', 'fulano@fulano.com', '1989-10-20', 'Daniel', 1, '2019-11-21 11:25:33', 1, 'M', 1, "123456"),
('123456798', '12345678901', 'fulano@fulano.br', '1989-10-20', 'Sara', 2, '2019-11-21 11:27:01', 1, 'M', 1, "123456"),
('123456798', '12345678901', 'fulano@fulano.ch', '1989-10-20', 'Yara', 3, '2019-11-21 11:27:01', 1, 'F', 1, "123456"),
('123456798', '12345678901', 'fulano@fulano.rs', '1989-10-20', 'Cicero', 4, '2019-11-21 11:27:01', 1, 'F', 1, "123456"),
('987654321', '78945612312', 'rony@rony.com.pt', '1970-10-15', 'Ronny', 5, '2019-11-21 11:28:12', 1, 'F', 2, "123456");

INSERT INTO `medidas` (`peso`, `altura`, `taxa_gordura`, `data_avaliacao`, `fk_usuario_id`, `b_direito`, `b_esquerdo`, `torax`, `ante_b_dir`, `ante_b_esq`, `abdominal`, `quadril`, `cintura`, `coxa_dir`, `coxa_esq`, `pant_dir`, `pant_esq`) VALUES
(90, '1.75', '0.00', '2019-11-25 00:00:00', 1, '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '0.00', '0.00'),
(60, '1.75', '0.00', '2019-11-25 00:00:00', 2, '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '0.00', '0.00'),
(80, '1.75', '0.00', '2019-11-25 00:00:00', 3, '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '0.00', '0.00'),
(50, '1.75', '0.00', '2019-11-25 00:00:00', 4, '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '0.00', '0.00'),
(100, '1.75', '0.00', '2019-11-25 00:00:00', 5, '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '30.00', '0.00', '0.00');
-- --------------------------------------------------------

--
-- Extraindo dados da tabela `usuario`
--
INSERT INTO `grupo` (`nome`) VALUES
("Peitoral"),
("Bíceps"),
("Ante-Braço"),
("Costas"),
("Tríceps"),
("Coxa"),
("Ombro/Trapézio"),
("Quádril/Glúteo");

INSERT INTO `mensalidade` (`data_pagamento`, `preco`, `fk_usuario_id`) VALUES
('2019-11-25 00:00:00', 50.00, 1),
('2019-11-25 00:00:00', 40.00, 2),
('2019-11-25 00:00:00', 50.00, 3),
('2019-11-25 00:00:00', 50.00, 4),
('2019-11-25 00:00:00', 50.00, 5);

INSERT INTO `tipo` (`nome`, `fk_grupo_id`) VALUES
("Cross Over", 1),
("Cruxifixo", 1),
("Flexao Braço", 1),
("Supino Reto", 1),
("Supino Inclinado", 1);

INSERT INTO `treino` (`data`, `carga`, `repeticao`, `serie`, `fk_grupo_id`, `fk_tipo_id`, `fk_usuario_id`) VALUES
('2019-11-25 00:00:00', 35, 10, 3, 1, 1, 1),
('2019-11-25 00:00:00', 40, 20, 2, 1, 2, 1),
('2019-11-25 00:00:00', 15, 30, 3, 1, 3, 1),
('2019-11-25 00:00:00', 40, 20, 3, 1, 4, 1),
('2019-11-25 00:00:00', 50, 10, 3, 1, 5, 1),
('2019-11-25 00:00:00', 35, 10, 3, 1, 1, 2),
('2019-11-25 00:00:00', 40, 20, 2, 1, 2, 2),
('2019-11-25 00:00:00', 15, 30, 3, 1, 3, 2),
('2019-11-25 00:00:00', 40, 20, 3, 1, 4, 2),
('2019-11-25 00:00:00', 50, 10, 3, 1, 5, 2),
('2019-11-25 00:00:00', 35, 10, 3, 1, 1, 3),
('2019-11-25 00:00:00', 40, 20, 2, 1, 2, 3),
('2019-11-25 00:00:00', 15, 30, 3, 1, 3, 3),
('2019-11-25 00:00:00', 40, 20, 3, 1, 4, 3),
('2019-11-25 00:00:00', 50, 10, 3, 1, 5, 3),
('2019-11-25 00:00:00', 35, 10, 3, 1, 1, 4),
('2019-11-25 00:00:00', 40, 20, 2, 1, 2, 4),
('2019-11-25 00:00:00', 15, 30, 3, 1, 3, 4),
('2019-11-25 00:00:00', 40, 20, 3, 1, 4, 4),
('2019-11-25 00:00:00', 50, 10, 3, 1, 5, 4);
--

COMMIT;
