-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE tipo_usuario (
descricao_tipo_usuario varchar(200),
cod_tipo_usuario int(4) NOT NULL AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE tipo_resgatante (
descricao_tipo_resgatante varchar(200),
cod_tipo_resgatante int(4) NOT NULL AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE resgastante (
nome_resg varchar(200),
senha_resg varchar(35),
email_resg varchar(200),
cpf_resg varchar(14) NOT NULL PRIMARY KEY,
cod_tipo_usuario int(4),
cod_tipo_resgatante int(4),
FOREIGN KEY(cod_tipo_usuario) REFERENCES tipo_usuario (cod_tipo_usuario),
FOREIGN KEY(cod_tipo_resgatante) REFERENCES tipo_resgatante (cod_tipo_resgatante)
);

CREATE TABLE admin (
login varchar(35),
cod_admin int(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
senha varchar(35),
cod_tipo_usuario int(4),
FOREIGN KEY(cod_tipo_usuario) REFERENCES tipo_usuario (cod_tipo_usuario)
);

CREATE TABLE serperntes (
cod_serpente int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
carac_1 varchar(200),
carac_2 varchar(200),
carac_3 varchar(200),
carac_4 varchar(200),
carac_5 varchar(200)
);

CREATE TABLE capturas (
cpf_resg varchar(14),
cod_serpente int(8),
local_captura varchar(200),
horario_captura varchar(5),
FOREIGN KEY(cpf_resg) REFERENCES resgastante (cpf_resg),
FOREIGN KEY(cod_serpente) REFERENCES serperntes (cod_serpente)
);

CREATE TABLE pedidos_resgates (
cpf_usuario varchar(14),
cpf_resg varchar(14),
local varchar(200),
questao_1 varchar(200),
questao_2 varchar(200),
questao_3 varchar(200),
questao_4 varchar(200),
questao_5 varchar(200),
FOREIGN KEY(cpf_resg) REFERENCES resgastante (cpf_resg)
);

CREATE TABLE usuario (
nome_usuario varchar(200),
cpf_usuario varchar(14) NOT NULL PRIMARY KEY,
senha_usuario varchar(35),
email_usuario varchar(200),
cod_tipo_usuario int(4),
FOREIGN KEY(cod_tipo_usuario) REFERENCES tipo_usuario (cod_tipo_usuario)
);

ALTER TABLE pedidos_resgates ADD FOREIGN KEY(cpf_usuario) REFERENCES usuario (cpf_usuario);
