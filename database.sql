CREATE DATABASE `bee_lockers`;

USE bee_lockers;

DROP TABLE IF EXISTS usuario;
CREATE TABLE usuario(
id_usuario int(11) AUTO_INCREMENT,
nome varchar(255) DEFAULT NULL,
cpf varchar(14) DEFAULT NULL,
email varchar(255) UNIQUE DEFAULT NULL,
sexo varchar(10) DEFAULT NULL,
telefone varchar(14) DEFAULT NULL,
senha varchar(255) DEFAULT NULL,
dtnasc varchar(25) DEFAULT NULL,
data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id_usuario)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

CREATE TABLE parceria(
id_parceria int(11) AUTO_INCREMENT,
razao_social varchar(255) DEFAULT NULL,
email varchar(255) UNIQUE DEFAULT NULL,
telefone varchar(14) DEFAULT NULL,
cnpj varchar(18) DEFAULT NULL,
senha varchar(255) DEFAULT NULL,
PRIMARY KEY (id_parceria)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

CREATE TABLE praia(
id_praia int(11) AUTO_INCREMENT,
nome_praia varchar(255) DEFAULT NULL,
imagem_praia varchar(255) DEFAULT NULL,
rua varchar (50) not null,
numero varchar(20) not null,
bairro varchar (50) not null,
cep varchar (8) not null,
id_parceria int(11),
PRIMARY KEY (id_praia),
FOREIGN KEY (id_parceria) references parceria (id_parceria)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

CREATE TABLE tipo (
id_tipo int(11) AUTO_INCREMENT,
nome_tipo varchar (50) not null,
PRIMARY KEY (id_tipo)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

CREATE TABLE reservas (
  id_reserva int(11) NOT NULL AUTO_INCREMENT,
  nome_responsavel varchar(220) DEFAULT NULL,
  start TIMESTAMP DEFAULT NULL,
  end TIMESTAMP DEFAULT NULL,
  id_praia INT(11) DEFAULT NULL,
  PRIMARY KEY (id_reserva),
  FOREIGN KEY (id_praia) references praia (id_praia)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

CREATE TABLE armarios(
  id_armario int(11) NOT NULL AUTO_INCREMENT,
  numero_armario int(11) DEFAULT NULL,
  status_armario varchar(225) DEFAULT NULL,
  PRIMARY KEY (id_armario)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

INSERT INTO armarios(
  id_armario, numero_armario, status_armario) VALUES (1, 1, disponivel), 
  (2, 2, disponivel),
  (3, 3, disponivel),
  (4, 4, disponivel),
  (5, 5, disponivel),
  (6, 6, disponivel),
  (7, 7, disponivel),
  (8, 8, disponivel),
  (9, 9, disponivel),
  (10, 10, disponivel);