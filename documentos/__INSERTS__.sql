
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

INSERT INTO `mes` (`nomem`) VALUES
("Janeiro"),
("Fevereiro"),
("Março"),
("Abril"),
("Maio"),
("Junho"),
("Julho"),
("Agosto"),
("Setembro"),
("Outubro"),
("Novemmbro"),
("Dezembro");
--
-- Estrutura da tabela `usuario`
--
insert into `endereco` (`rua`, `numero`, `complemento`, `cidade`, `cep`, `fk_estado_id`) values
("Rua Nova", 123, "Apt 102", "Acopiara", "54345061", 6), 
("Rua Central", 07, "Casa", "Fortaleza", "54345060", 6),
("Rua da Rodoviaria", 14, "Sebrado", "Acopiara", "54345062", 6),
("Rua da Matriz", 1223, " ", "Acopiara", "54345063", 6),
("Rua dos Moreiras", 55, "Beco", "Acopiara", "54345064", 6);

INSERT INTO endereco (rua, numero, complemento, cidade, cep, fk_estado_id) VALUES 
('Rodoviaria', '678', 'apto 2', 'Acopiara', '54354654', '6');

INSERT INTO `usuario` (`telefone`, `cpf`, `email`, `data_de_nascimento`, `nome`, `fk_endereco_id`, `data_cadastro`, `situacao`, `sexo`, `tipo`) VALUES
('123456789', '12345678901', 'fulano@fulano.com', '1989-10-20', 'Daniel', 1, '2019-11-21 11:25:33', 1, 'M', 1),
('123456798', '12345678901', 'fulano@fulano.br', '1989-10-20', 'Sara', 2, '2019-11-21 11:27:01', 1, 'M', 1),
('123456798', '12345678901', 'fulano@fulano.ch', '1989-10-20', 'Yara', 3, '2019-11-21 11:27:01', 1, 'F', 1),
('123456798', '12345678901', 'fulano@fulano.rs', '1989-10-20', 'Cicero', 4, '2019-11-21 11:27:01', 1, 'F', 1),
('987654321', '78945612312', 'rony@rony.com.pt', '1970-10-15', 'Ronny', 5, '2019-11-21 11:28:12', 1, 'F', 2);

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
INSERT INTO `grupo` (`nomeg`, `grupo`) VALUES
("Peitoral", 1),
("Bíceps", 3),
("Ante-Braço", 3),
("Costas", 3),
("Tríceps", 1),
("Coxa", 2),
("Ombro/Trapézio", 1),
("Quádril/Glúteo", 2),
("Ergometria", 9);

INSERT INTO `mensalidade` (`data_pagamento`, `preco`, `fk_usuario_id`, `flag`, `fk_mes_id`) VALUES
('2019-11-25 00:00:00', 50.00, 1,1,12),
('2019-11-25 00:00:00', 40.00, 2,1,12),
('2019-11-25 00:00:00', 50.00, 3,1,12),
('2019-11-25 00:00:00', 50.00, 4,1,12),
('2019-11-25 00:00:00', 50.00, 5,1,12);


--
INSERT INTO tipo (`nomet`, `fk_grupo_id`, `imagem`) VALUES
("Cross Over", 1,"PEIT01"),
("Pec Deck", 1,"PEIT02"),
("Crucifixo", 1,"PEIT03"),
("Supino Reto", 1,"PEIT04"),
("Supino Inclinado", 1,"PEIT05"),
("Supino Declinado", 1,"PEIT06"),
("Flexão Braço", 1,"PEIT07"),
("Supino Reto Dumbell", 1,"PEIT08"),
("Supino Inclinado Dumbell", 1,"PEIT09"),

("Rosca Direita", 2,"BICE01"),
("Rosca Alternada", 2,"BICE02"),
("Rosca Scott", 2,"BICE03"),
("Banco Scott", 2,"BICE04"),
("Rosca 21", 2,"BICE05"),
("Rosca Concentrada ", 2,"BICE06"),
("Bíceps Cross Over", 2,"BICE07"),
("Rosca Na Polia", 2,"BICE08"),

("Flexão Punho", 3,"ANTE01"),
("Extensão Punho", 3,"ANTE02"),
("Rosca Inversa", 3,"ANTE03"),
("Rosca Martelo", 3,"ANTE04"),

("Puxador De Costas", 4,"COST01"),
("Puxador De Frente", 4,"COST02"),
("Remada Baixa", 4,"COST03"),
("Remada Unilateral", 4,"COST04"),
("Remada Com Barra", 4,"COST05"),
("Remada Machine", 4,"COST06"),
("Remada Articulada", 4,"COST07"),
("Pull Over", 4,"COST08"),
("Estensão De Ombro", 4,"COST09"),

("Tríceps Testa", 5,"TRIC01"),
("Tríceps Polia", 5,"TRIC02"),
("Tríceps Francês", 5,"TRIC03"),
("Tríceps Mergulho", 5,"TRIC04"),
("Tríceps Coice", 5,"TRIC05"),
("Tríceps Supino", 5,"TRIC06"),
("Tríceps Unilateral", 5,"TRIC07"),
("Tríceps Cross Over", 5,"TRIC08"),
("Tríceps Corda", 5,"TRIC09"),

("Cadeira Extensora ", 6,"COXA01"),
("Agachamento Guiado", 6,"COXA02"),
("Agachamento Na Pant.", 6,"COXA03"),
("Leg Press 45º", 6,"COXA04"),
("Leg Press Horizontal", 6,"COXA05"),
("Cadeira Flexora", 6,"COXA06"),
("Mesa Flexora ", 6,"COXA07"),
("Avanço Guiado", 6,"COXA08"),
("Stiff", 6,"COXA09"),
("Panturrilha Vertical", 6,"COXA10"),
("Agachamento Hack", 6,"COXA11"),
("Avanço No Caixote", 6,"COXA12"),

("Elevação Lateral", 7,"OMBR01"),
("Elevação Frontal", 7,"OMBR02"),
("Desenvolvimento  Máquina", 7,"OMBR03"),
("Encolhimento Ombro", 7,"OMBR04"),
("Remada Alta", 7,"OMBR05"),
("Desenvolvimento Barra", 7,"OMBR06"),
("Desenvolvimento Alternado", 7,"OMBR07"),
("Desenvolvimento Moinho", 7,"OMBR08"),
("Crucifixo Inverso", 7,"OMBR09"),
("Elevação Lataeral Banco", 7,"OMBR10"),

("Adução ", 8,"QUAD01"),
("Abdução", 8,"QUAD02"),
("Elevação Do Quadril", 8,"QUAD03"),
("Glúteo Máquina 1", 8,"QUAD04"),
("Glúteo Máquina 2", 8,"QUAD05"),

("Bicicleta", 9,"ERGO01"),
("Esteira", 9,"ERGO02"),
("Eliptica", 9,"ERGO03");


INSERT INTO `treino` (`data`, `carga`, `repeticao`, `serie`, `fk_grupo_id`, `fk_tipo_id`, `fk_usuario_id`) VALUES
('2019-11-25 00:00:00', 35, 10, 3, 1, 1, 1),
('2019-11-25 00:00:00', 40, 20, 2, 1, 2, 1),
('2019-11-25 00:00:00', 15, 30, 3, 1, 3, 1),
('2019-11-25 00:00:00', 40, 20, 3, 1, 4, 1),
('2019-11-25 00:00:00', 50, 10, 3, 1, 5, 1),

('2019-11-25 00:00:00', 35, 10, 3, 2, 14, 1),
('2019-11-25 00:00:00', 40, 20, 2, 2, 15, 1),
('2019-11-25 00:00:00', 15, 30, 3, 2, 16, 1),
('2019-11-25 00:00:00', 40, 20, 3, 2, 17, 1),

('2019-11-25 00:00:00', 35, 10, 3, 3, 18, 1),
('2019-11-25 00:00:00', 40, 20, 2, 3, 19, 1),
('2019-11-25 00:00:00', 15, 30, 3, 3, 20, 1),
('2019-11-25 00:00:00', 40, 20, 3, 3, 21, 1),

('2019-11-25 00:00:00', 35, 10, 3, 4, 27, 1),
('2019-11-25 00:00:00', 40, 20, 2, 4, 28, 1),
('2019-11-25 00:00:00', 15, 30, 3, 4, 29, 1),
('2019-11-25 00:00:00', 40, 20, 3, 4, 30, 1),

('2019-11-25 00:00:00', 35, 10, 3, 5, 31, 1),
('2019-11-25 00:00:00', 40, 20, 2, 5, 32, 1),
('2019-11-25 00:00:00', 15, 30, 3, 5, 33, 1),
('2019-11-25 00:00:00', 40, 20, 3, 5, 34, 1),

('2019-11-25 00:00:00', 35, 10, 3, 6, 48, 1),
('2019-11-25 00:00:00', 40, 20, 2, 6, 49, 1),
('2019-11-25 00:00:00', 15, 30, 3, 6, 50, 1),
('2019-11-25 00:00:00', 40, 20, 3, 6, 51, 1),

('2019-11-25 00:00:00', 35, 10, 3, 7, 52, 1),
('2019-11-25 00:00:00', 40, 20, 2, 7, 53, 1),
('2019-11-25 00:00:00', 15, 30, 3, 7, 54, 1),
('2019-11-25 00:00:00', 40, 20, 3, 7, 55, 1),

('2019-11-25 00:00:00', 35, 10, 3, 8, 63, 1),
('2019-11-25 00:00:00', 40, 20, 2, 8, 64, 1),
('2019-11-25 00:00:00', 15, 30, 3, 8, 65, 1),
('2019-11-25 00:00:00', 40, 20, 3, 8, 66, 1),

('2019-11-25 00:00:00', 35, 10, 3, 9, 67, 1),
('2019-11-25 00:00:00', 40, 20, 2, 9, 68, 1),
('2019-11-25 00:00:00', 15, 30, 3, 9, 69, 1),


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
COMMIT;
