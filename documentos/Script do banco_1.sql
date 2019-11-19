/* Lógico Completo_1: */

CREATE TABLE usuario (
    Id_endereco Varchar(40),
    telefone Varchar(40),
    CPF Varchar(11),
    email char(50),
    id Interger PRIMARY KEY,
    Data_de_Nascimento date,
    nome Varchar(40),
    fk_Endereco_Id Interger
);

CREATE TABLE mensalidade (
    data_pagamento date,
    preco decimal(5,2),
    id Interger PRIMARY KEY,
    fk_usuario_id Interger
);

CREATE TABLE treino (
    Data date,
    carga Interger,
    repeticao Interger,
    serie Interger,
    id_tipo Interger,
    id_grupo Interger,
    id Interger PRIMARY KEY,
    fk_usuario_id Interger
);

CREATE TABLE medidas (
    Peso Interger,
    altura decimal(5,2),
    taxa_gordura decimal(5,2),
    data_ficha date,
    id Interger PRIMARY KEY,
    fk_usuario_id Interger
);

CREATE TABLE tipo (
    nome Varchar(40),
    id_grupo Interger,
    id Interger PRIMARY KEY
);

CREATE TABLE grupo (
    nome Varchar(11),
    id Interger PRIMARY KEY
);

CREATE TABLE Endereco (
    Id Interger PRIMARY KEY,
    Rua Varchar(40),
    Numero Interger,
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
 
ALTER TABLE tipo ADD CONSTRAINT FK_tipo_2
    FOREIGN KEY (fk_treino_id)
    REFERENCES treino (id)
    ON DELETE RESTRICT;
 
ALTER TABLE grupo ADD CONSTRAINT FK_grupo_2
    FOREIGN KEY (fk_tipo_id)
    REFERENCES tipo (id)
    ON DELETE RESTRICT;