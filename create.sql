CREATE DATABASE PRODUTOS;

USE PRODUTOS;
CREATE TABLE JOGOS(
	JOGO VARCHAR(100),
	DESENVOLVEDORA VARCHAR(100),
	GENERO VARCHAR(30),
	PLATAFORMA VARCHAR(30),
	VALOR FLOAT(10,2),
	ANO INT(4)
);

SHOW DATABASES;

USE PRODUTOS;
/*CREATE*/

INSERT INTO JOGOS VALUES('Dont Starve Together','Nuuvem','Aventura','PC',9.9,2015);
INSERT INTO JOGOS VALUES('Enter the Dungeon','Nuuvem','RPG','PC',11.19,2018);
INSERT INTO JOGOS VALUES('Resident Evil 4 Remake','Capcom','TPS','PC',40.99,2017);
INSERT INTO JOGOS VALUES('Dark Souls','FromSoftware','ARPG','PC',15.99,2014);

/*READ*/

select JOGO, VALOR FROM JOGOS WHERE GENERO = 'Aventura';

/*UPDATE*/

UPDATE JOGOS set VALOR = 20.00 where 
  GENERO = 'Aventura';
  
/*DELETE*/

DELETE from JOGOS where VALOR > 40;