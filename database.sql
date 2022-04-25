CREATE DATABASE `bee_lockers`;

USE bee_lockers;

CREATE TABLE usuario(
id_usuario int(11) AUTO_INCREMENT,
nome varchar(255) DEFAULT NULL,
cpf varchar(11) DEFAULT NULL,
email varchar(255) UNIQUE DEFAULT NULL,
sexo varchar(10) DEFAULT NULL,
telefone varchar(25) DEFAULT NULL,
senha varchar(255) DEFAULT NULL,
dtnasc varchar(25) DEFAULT NULL,
id_praia int(11),
id_tipo int(11),
data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id_usuario),
FOREIGN KEY (id_praia) REFERENCES praia (id_praia)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

CREATE TABLE parceria(
id_empresa int(11) AUTO_INCREMENT,
id_praia int(11) NOT NULL,
razão_social varchar(255) DEFAULT NULL,
cnpj int(14) DEFAULT NULL,
email varchar(255) UNIQUE DEFAULT NULL,
telefone varchar(25) DEFAULT NULL,
senha varchar(255) DEFAULT NULL,
id_tipo INT(11),
data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id_empresa),
FOREIGN KEY (id_praia) references praia (id_praia)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

CREATE TABLE praia(
id_praia int(11) AUTO_INCREMENT,
nome_praia varchar(255) DEFAULT NULL,
imagem_praia varchar(255) DEFAULT NULL,
PRIMARY KEY (id_praia)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE endereco_praia(
id_endereço int(11) AUTO_INCREMENT,
numero varchar(20) not null,
rua varchar (50) not null,
bairro varchar (50) not null,
cep varchar (8) not null,
id_praia int(11),
PRIMARY KEY (id_endereço),
FOREIGN KEY (id_praia) references praia (id_praia)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

CREATE TABLE tipo (
id_tipo int(11) AUTO_INCREMENT,
admin int not null,
usuario int not null,
perceria int not NULL,
PRIMARY KEY (id_tipo)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

DROP TABLE IF EXISTS eventos;
CREATE TABLE IF NOT EXISTS eventos (
  id_evento int(11) NOT NULL AUTO_INCREMENT,
  titulo varchar(220) DEFAULT NULL,
  cor varchar(10) DEFAULT NULL,
  comeco datetime DEFAULT NULL,
  fim datetime DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;