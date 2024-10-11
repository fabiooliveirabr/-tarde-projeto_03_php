# Backup do Banco de Dados

``` MYSQL
CREATE DATABASE bd_ana_valeria;
USE bd_ana_valeria;
CREATE TABLE tb_inscricoes(
	id_inscrito INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL    
);

SELECT * FROM tb_inscricoes;
