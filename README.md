## API para o aplicativo APP COMPRAS

Criada por José Leonardo Correa e Matheus Felipe Garcia.

## Para executar:
* PHP >= 5.5
* MySQL

## Exemplo de retorno da API:
```json
[
  {
     "id" : 1,
     "name" : "Produto 1",
     "description" : "Descrição do produto",
     "value" : 5.99
  },
  {
     "id" : 2,
     "name" : "Produto 2",
     "description" : "Descrição do produto 2",
     "value" : 8.99
  }
]
```

## Script para criar base de dados:
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
