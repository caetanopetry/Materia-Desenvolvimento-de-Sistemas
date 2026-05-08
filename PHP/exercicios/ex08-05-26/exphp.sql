CREATE DATABASE exphp;

CREATE TABLE tb_usuario(
  id INT NOT NULL AUTO_INCREMENT,
  nm_usuario VARCHAR(50) NOT NULL,
  nm_login VARCHAR(30) NOT NULL,
  ds_email VARCHAR(80) NOT NULL,
  ds_password VARCHAR(150) NOT NULL,
  CONSTRAINT pk_usuario PRIMARY KEY(id)
);

ALTER TABLE tb_usuario
ADD is_admin TINYINT(1) DEFAULT 0;

SELECT * from tb_usuario;