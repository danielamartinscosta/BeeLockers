CREATE DATABASE `bee_lockers`;

USE bee_lockers;

DROP TABLE IF EXISTS tipo;
CREATE TABLE tipo (
id_tipo int(11) AUTO_INCREMENT,
nome_tipo varchar (50) not null,
PRIMARY KEY (id_tipo)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

CREATE TABLE usuario(
id_usuario int(11) AUTO_INCREMENT,
nome varchar(255) DEFAULT NULL,
cpf varchar(14) DEFAULT NULL,
email varchar(255) UNIQUE DEFAULT NULL,
sexo varchar(10) DEFAULT NULL,
telefone varchar(15) DEFAULT NULL,
senha varchar(255) DEFAULT NULL,
dtnasc varchar(25) DEFAULT NULL,
id_tipo int(11) DEFAULT NULL,
data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id_usuario),
FOREIGN KEY (id_tipo) references tipo (id_tipo)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

CREATE TABLE parceria(
id_parceria int(11) AUTO_INCREMENT,
razao_social varchar(255) DEFAULT NULL,
email varchar(255) UNIQUE DEFAULT NULL,
telefone varchar(15) DEFAULT NULL,
cnpj varchar(18) DEFAULT NULL,
senha varchar(255) DEFAULT NULL,
id_tipo int(11) DEFAULT NULL,
PRIMARY KEY (id_parceria),
FOREIGN KEY (id_tipo) references tipo (id_tipo)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

CREATE TABLE praia(
id_praia int(11) AUTO_INCREMENT,
nome_praia varchar(255) DEFAULT NULL,
imagem_praia varchar(255) DEFAULT NULL,
rua varchar (50) DEFAULT NULL,
numero varchar(20) DEFAULT NULL,
bairro varchar (50) DEFAULT NULL,
cep varchar (8) DEFAULT NULL,
id_parceria int(11),
PRIMARY KEY (id_praia),
FOREIGN KEY (id_parceria) references parceria (id_parceria)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;

CREATE TABLE reservas (
  id_reserva int(11) NOT NULL AUTO_INCREMENT,
  start DATETIME DEFAULT NULL,
  end DATETIME DEFAULT NULL,
  id_praia INT(11) DEFAULT NULL,
  id_usuario int(11) DEFAULT NULL,
  PRIMARY KEY (id_reserva),
  FOREIGN KEY (id_praia) references praia (id_praia),
  FOREIGN KEY (id_usuario) references usuario (id_usuario)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;


 INSERT INTO `tipo` (`id_tipo`, `nome_tipo`) VALUES ('1', 'admin'),
('2', 'usuario'),
('3', 'parceria'); 

INSERT INTO `usuario` (`id_usuario`, `nome`, `cpf`, `email`, `sexo`, `telefone`, `senha`, `dtnasc`, `id_tipo`, `data`) VALUES (NULL, 'Admin', '', 'admin@admin.com', 'm', '', '123456', '01/01/2022', '1', CURRENT_TIMESTAMP);

