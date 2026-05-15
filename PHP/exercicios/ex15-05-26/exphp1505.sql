create database ex1505php;
use ex1505php;

CREATE TABLE tb_usuario(
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  endereco VARCHAR(50) NOT NULL,
  CONSTRAINT pk_usuario PRIMARY KEY(id)
);

select * from tb_usuario;