
SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

CREATE schema `DB_Lucas_teste`;
use `DB_Lucas_teste`;

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria`  (
  `cod_categoria` int(255) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255),
  PRIMARY KEY (`cod_categoria`)
);

DROP TABLE IF EXISTS `produto`;
CREATE TABLE `produto`  (
  `cod_produto` int(255) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255),
  `cod_categoria` int(255) NULL DEFAULT NULL,
  PRIMARY KEY (`cod_produto`),
  CONSTRAINT `cod_categoria` FOREIGN KEY (`cod_categoria`) REFERENCES `categoria` (`cod_categoria`)
);

INSERT INTO `categoria` VALUES (1, 'limpeza');
INSERT INTO `categoria` VALUES (2, 'comida');
INSERT INTO `categoria` VALUES (3, 'outros');

