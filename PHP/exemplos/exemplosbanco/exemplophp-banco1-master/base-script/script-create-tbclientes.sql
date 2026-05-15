CREATE TABLE tb_clientes(
   id INT NOT NULL AUTO_INCREMENT,
   nm_nome VARCHAR(40) NOT NULL,
   ds_endereco VARCHAR(40),
   nr_telefone VARCHAR(15),
   ds_email VARCHAR(80),
   CONSTRAINT pk_clientes PRIMARY KEY(id)
)