# API para o aplicativo mobile
Criada por José Leonardo Correa e Matheus Felipe Garcia
##Criar base de dados:
```sql
CREATE DATABASE IF NOT EXISTS `app-mobile`;
USE `app-mobile`;

CREATE TABLE `produtos` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET latin1 NOT NULL,
  `descricao` text CHARACTER SET latin1 NOT NULL,
  `valor` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB
```
