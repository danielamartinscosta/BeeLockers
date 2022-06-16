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
id_praia int(11),
id_tipo int(11),
data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id_usuario),
FOREIGN KEY (id_praia) REFERENCES praia (id_praia)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

DROP TABLE IF EXISTS parceria;
CREATE TABLE parceria(
id_parceria int(11) AUTO_INCREMENT,
razao_social varchar(255) DEFAULT NULL,
email varchar(255) UNIQUE DEFAULT NULL,
telefone varchar(14) DEFAULT NULL,
cnpj varchar(18) DEFAULT NULL,
senha varchar(255) DEFAULT NULL,
id_praia int(11) NOT NULL,
PRIMARY KEY (id_parceria),
FOREIGN KEY (id_praia) references praia (id_praia)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

DROP TABLE IF EXISTS praia;
CREATE TABLE praia(
id_praia int(11) AUTO_INCREMENT,
nome_praia varchar(255) DEFAULT NULL,
imagem_praia varchar(255) DEFAULT NULL,
rua varchar (50) not null,
numero varchar(20) not null,
bairro varchar (50) not null,
cep varchar (8) not null,
PRIMARY KEY (id_praia)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

DROP TABLE IF EXISTS tipo;
CREATE TABLE tipo (
id_tipo int(11) AUTO_INCREMENT,
admin int not null,
usuario int not null,
perceria int not NULL,
PRIMARY KEY (id_tipo)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

DROP TABLE IF EXISTS reservas;
CREATE TABLE reservas (
  id_reserva int(11) NOT NULL AUTO_INCREMENT,
  nome_responsavel varchar(220) DEFAULT NULL,
  start TIMESTAMP DEFAULT NULL,
  end TIMESTAMP DEFAULT NULL,
  id_praia INT(11) DEFAULT NULL,
  PRIMARY KEY (id_reserva),
  FOREIGN KEY (id_praia) references praia (id_praia)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

