
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- categoria
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `categoria`;


CREATE TABLE `categoria`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- oferta
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `oferta`;


CREATE TABLE `oferta`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`titulo` VARCHAR(255),
	`descripcion` TEXT,
	`precio` VARCHAR(255),
	`imagen` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- info
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `info`;


CREATE TABLE `info`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`principal` TEXT,
	`secundario` TEXT,
	`archivo` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
