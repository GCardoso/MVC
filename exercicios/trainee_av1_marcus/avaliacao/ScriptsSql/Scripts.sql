
-- Criando tabela empresa 
CREATE TABLE av1_empresa (id_empresa int NOT NULL PRIMARY KEY AUTO_INCREMENT,nome varchar(32) NOT NULL);

-- Criando tabela Situações
CREATE TABLE av1_situacao (id_situacao int NOT NULL PRIMARY KEY AUTO_INCREMENT,nome varchar(32) NOT NULL);

-- Criando tabela cargos
CREATE TABLE av1_cargos(id_cargo int NOT NULL PRIMARY KEY AUTO_INCREMENT,nome varchar(32) NOT NULL);
