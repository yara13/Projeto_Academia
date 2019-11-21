/* Lógico Completo_1: */

CREATE TABLE usuario (
    telefone Varchar(40),
    CPF Varchar(11),
    email char(50),
    id Integer PRIMARY KEY,
    Data_de_Nascimento date,
    nome Varchar(40),
    fk_Endereco_Id Integer,
    data_cadastro datetime,
    situacao boolean,
    sexo varchar(11),
    tipo int(1)
);

CREATE TABLE mensalidade (
    data_pagamento date,
    preco decimal(5,2),
    id Integer PRIMARY KEY,
    fk_usuario_id Integer
);

CREATE TABLE treino (
    Data date,
    carga Integer,
    repeticao Integer,
    serie Integer,
    id_tipo Integer,
    id_grupo Integer,
    id Integer PRIMARY KEY,
    fk_usuario_id Integer
);

CREATE TABLE medidas (
    peso Integer,
    altura decimal(5,2),
    taxa_gordura decimal(5,2),
    data_avaliacao date,
    id Integer PRIMARY KEY UNIQUE,
    fk_usuario_id Integer,
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
    id_grupo Integer,
    id Integer PRIMARY KEY
);

CREATE TABLE grupo (
    nome Varchar(11),
    id Integer PRIMARY KEY
);

CREATE TABLE Endereco (
    Id Integer PRIMARY KEY,
    Rua Varchar(40),
    Numero Integer,
    Complemento Varchar(40),
    Cidade Varchar(40),
    Estado char(02),
    CEP Varchar(40)
);
 
ALTER TABLE usuario ADD CONSTRAINT FK_usuario_2
    FOREIGN KEY (fk_Endereco_Id)
    REFERENCES Endereco (Id)
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
    REFERENCES usuario (id)
    ON DELETE RESTRICT;
 
