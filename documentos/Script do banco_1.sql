/* Lógico Completo_1: */
/* Lógico Completo_1: */

CREATE TABLE usuario (
    telefone Varchar(40),
    cpf Varchar(11),
    email char(50),
    id int PRIMARY KEY AUTO_INCREMENT,
    data_de_nascimento date,
    nome Varchar(40),
    fk_endereco_id int,
    data_cadastro datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    situacao boolean NOT NULL DEFAULT '1',
    sexo varchar(11),
    tipo int(1)
);

CREATE TABLE mensalidade (
    data_pagamento date,
    preco decimal(5,2),
    id int PRIMARY KEY AUTO_INCREMENT,
    fk_usuario_id int
);

CREATE TABLE treino (
    data date,
    carga int,
    repeticao int,
    serie int,
    id_tipo int,
    id_grupo int,
    id int PRIMARY KEY AUTO_INCREMENT,
    fk_usuario_id int
);

CREATE TABLE medidas (
    peso int,
    altura decimal(5,2),
    taxa_gordura decimal(5,2),
    data_avaliacao date NOT NULL DEFAULT CURRENT_TIMESTAMP,
    id int PRIMARY KEY AUTO_INCREMENT,
    fk_usuario_id int,
    b_direito decimal(5,2),
    b_esquerdo decimal(5,2),
    torax decimal(5,2),
    ante_b_dir decimal(5,2),
    ante_b_esq decimal(5,2),
    abdominal decimal(5,2),
    quadril decimal(5,2),
    cintura decimal(5,2),
    coxa_dir decimal(5,2),
    coxa_esq decimal(5,2),
    pant_dir decimal(5,2),
    pant_esq decimal(5,2)
);

CREATE TABLE tipo (
    nome Varchar(40),
    id_grupo int,
    id int PRIMARY KEY AUTO_INCREMENT
);

CREATE TABLE grupo (
    nome Varchar(11),
    id int PRIMARY KEY AUTO_INCREMENT
);

CREATE TABLE endereco (
    id int PRIMARY KEY AUTO_INCREMENT,
    rua Varchar(40),
    numero int,
    complemento Varchar(40),
    cidade Varchar(40),
    cstado char(02),
    cep Varchar(40)
);
 
ALTER TABLE usuario ADD CONSTRAINT FK_usuario_2
    FOREIGN KEY (fk_endereco_id)
    REFERENCES endereco (id)
    ON DELETE RESTRICT;
 
ALTER TABLE mensalidade ADD CONSTRAINT FK_mensalidade_2
    FOREIGN KEY (fk_usuario_id)
    REFERENCES usuario (id)
    ON DELETE RESTRICT;
 
ALTER TABLE treino ADD CONSTRAINT FK_treino_2
    FOREIGN KEY (fk_usuario_id)
    REFERENCES usuario (id)
    ON DELETE RESTRICT;
 
ALTER TABLE medidas ADD CONSTRAINT FK_medidas_2
    FOREIGN KEY (fk_usuario_id)
    REFERENCES usuario (id
    ON DELETE RESTRICT;
 
