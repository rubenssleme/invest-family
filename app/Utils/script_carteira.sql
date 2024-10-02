 CREATE TABLE `carteira` (
  	`id` INT(11) NOT NULL AUTO_INCREMENT,
  	`ticker` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
  	`produto`VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
    `qtde`VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
    `p_medio`VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
    `c_atual`VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
    `p_unitario`VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
    `t_provento`VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
    `rendimento`VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
  	`ativo` ENUM('s','n') NOT NULL COLLATE 'utf8_general_ci',	
    `data` TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  	PRIMARY KEY (`id`) USING BTREE
  )
  COLLATE='utf8_general_ci'
  ENGINE=InnoDB
  AUTO_INCREMENT=1;