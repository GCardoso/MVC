
-- Criando tabela empresa 
CREATE TABLE av1_empresa (
	id_empresa int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome varchar(32) NOT NULL);

-- Criando tabela Situações
CREATE TABLE av1_situacao (
	id_situacao int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome varchar(32) NOT NULL);

-- Criando tabela cargos
CREATE TABLE av1_cargos(
	id_cargo int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome varchar(32) NOT NULL);

--Criando Tabela Filiados

ALTER TABLE av1_filiado(
  id_filiado INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(32) NOT NULL,
  cpf VARCHAR(11) UNIQUE,
  rg VARCHAR(20),
  data_de_nascimento VARCHAR(10),
  idade INT(3),
  id_empresa INT,
  id_situacao INT,
  id_cargo INT,
 ADD CONSTRAINT FK_id_empresa  FOREIGN KEY(id_empresa) REFERENCES av1_empresa(id_empresa),
 ADD CONSTRAINT FK_id_situacao FOREIGN KEY(id_situacao) REFERENCES av1_situacao(id_situacao),
 ADD CONSTRAINT FK_id_cargo    FOREIGN KEY(id_cargo) REFERENCES av1_cargos(id_cargo)
);
-- criada tabela av1_filiados

CREATE TABLE `av1_filiados` (
  `id_filiado` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `data_de_nascimento` varchar(10) DEFAULT NULL,
  `idade` int(3) DEFAULT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL,
  `id_cargo` int(11) DEFAULT NULL,
  `data_ultima_atualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--Criada tabela av1_telefones
CREATE TABLE `av1_telefones` (
  `id_dono` int(11) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `telefone_fixo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Contador de dependentes
SELECT
  f.id_filiado,
  f.nome Filiado,
  COUNT(d.id_dependente) Qtd_Dependentes
FROM
  av1_filiados f
INNER JOIN
  av1_telefones t ON t.id_dono = f.id_filiado
INNER JOIN
  av1_dependentes d ON f.id_filiado = d.id_filiado
GROUP BY
  f.id_filiado,
  f.nome