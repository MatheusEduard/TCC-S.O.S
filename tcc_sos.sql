-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE usuario (
nome_usuario varchar(255),
cpf_usuario varchar(14) PRIMARY KEY,
senha_usuario varchar(30),
email_usuario varchar(200),
cod_tipo_usuario int(1)
)

CREATE TABLE tipo_usuario (
descricao_tipo_usuario varchar(30),
cod_tipo_usuario int(1) PRIMARY KEY
)

CREATE TABLE tipo_resgatante (
descricao_tipo_resgatante varchar(30),
cod_tipo_resgatante int(8) PRIMARY KEY
)

CREATE TABLE resgastante (
nome_resg varchar(200),
senha_resg varchar(200),
email_resg varchar(200),
cpf_resg varchar(14) PRIMARY KEY,
cod_tipo_usuario int(1),
cod_tipo_resgatante int(8),
FOREIGN KEY(cod_tipo_usuario) REFERENCES tipo_usuario (cod_tipo_usuario),
FOREIGN KEY(cod_tipo_resgatante) REFERENCES tipo_resgatante (cod_tipo_resgatante)
)

CREATE TABLE serperntes (
cod_serpente int(8) PRIMARY KEY,
carac_1 varchar(255),
carac_2 varchar(255),
carac_3 varchar(255),
carac_4 varchar(255),
carac_5 varchar(255)
)

CREATE TABLE admin (
login varchar(30),
cod_admin int(8) PRIMARY KEY,
senha varchar(30),
cod_tipo_usuario int(1),
FOREIGN KEY(cod_tipo_usuario) REFERENCES tipo_usuario (cod_tipo_usuario)
)

CREATE TABLE capturas+ (
cpf_resg varchar(14),
cod_serpente int(8),
local_captura varchar(255),
horario_captura current_timestamp,
FOREIGN KEY(cpf_resg) REFERENCES resgastante (cpf_resg),
FOREIGN KEY(cod_serpente) REFERENCES serperntes (cod_serpente)
)

CREATE TABLE pedidos_resgates+ (
cpf_usuario varchar(14),
cpf_resg varchar(14),
local varchar(255),
questao_1 varchar(255),
questao_2 varchar(255),
questao_3 varchar(255),
questao_4 varchar(255),
questao_5 varchar(255),
FOREIGN KEY(cpf_usuario) REFERENCES usuario (cpf_usuario),
FOREIGN KEY(cpf_resg) REFERENCES resgastante (cpf_resg)
)

ALTER TABLE usuario ADD FOREIGN KEY(cod_tipo_usuario) REFERENCES tipo_usuario (cod_tipo_usuario)
