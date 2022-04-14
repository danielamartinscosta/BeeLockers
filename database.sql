CREATE DATABASE `bee_lockers`;

USE bee_lockers;

CREATE TABLE IF NOT EXISTS `cadastro_usuario` (
`id_usuario` int(11) AUTO_INCREMENT,
`nome` varchar(255) DEFAULT NULL,
`email` varchar(255) UNIQUE DEFAULT NULL,
`sexo` varchar(10) DEFAULT NULL,
`telefone` varchar(25) DEFAULT NULL,
`senha` varchar(255) DEFAULT NULL,
`dtnasc` varchar(25) DEFAULT NULL,
`data` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `cadastro_praia` (
`id_praia` int(11) AUTO_INCREMENT,
`nome_praia` varchar(255) DEFAULT NULL,
`nome_responsavel` varchar(255) DEFAULT NULL,
`email` varchar(255) UNIQUE DEFAULT NULL,
`telefone` varchar(25) DEFAULT NULL,
`senha` varchar(255) DEFAULT NULL,
`imagem_praia` varchar(255) DEFAULT NULL,
`data` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;