/* EXERCICIO 1 = CRIAR BANCO */
CREATE DATABASE TABACARIA;
USE TABACARIA;
/* EXERCICIO 2 = CRIAR UMA OU MAIS TABELAS */
CREATE TABLE PRODUTOS(
	NOME VARCHAR(100),
	MARCA VARCHAR(100),
	SETOR VARCHAR(30),
	ESTOQUE INT(3),
	VALOR FLOAT(10,2),
	PESO_GR INT(4)
);
/* EXERCICIO 3 = Inserir os respectivos registros */

INSERT INTO PRODUTOS VALUES('Tabaco artesanal','tatudobem','especiarias',15,09.9,500);
INSERT INTO PRODUTOS VALUES('Fumo de rolo','organico','especiarias',20,15.9,500);
INSERT INTO PRODUTOS VALUES('Papel para cigarros','tatudobem','acessorios',50,5.9,010);
INSERT INTO PRODUTOS VALUES('Escencia para Naguile','own','especiarias',30,20.0,500);
INSERT INTO PRODUTOS VALUES('Esqueiro ','bic','acessorios',33,5.0,50);
/* EXERCICIO 4 = Empregar o conceito do alias de coluna e “projetar” a informação desejada;*/

SELECT *,'CANE FUMOS' AS LOJA,  NOW() AS DATA_HORA FROM PRODUTOS;