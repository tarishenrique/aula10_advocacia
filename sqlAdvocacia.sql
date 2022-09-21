advocaciaCREATE DATABASE advocacia

USE advocacia

CREATE TABLE advogado
(
identificacao_oab varchar(20) primary key,
nome varchar(100) not null,
cpf varchar(15) not null,
email varchar(50)
)

CREATE TABLE contato
(
id_contato int primary key auto_increment,
nome varchar(100) not null,
email varchar(50) not null,
pergunta varchar(400)
)

CREATE TABLE orcamento
(
id_orcamento int primary key auto_increment,
nome varchar(100) not null,
cpf varchar(15) not null,
telefone varchar(20),
email varchar(50),
turno varchar(30),
vara varchar(50),
descricao_processo text
)

