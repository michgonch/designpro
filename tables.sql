CREATE TABLE `designpro`.`users` ( 
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , 
  `name` VARCHAR(128) NOT NULL , 
  `login` VARCHAR(64) NOT NULL , 
  `email` VARCHAR(128) NOT NULL , 
  `password` VARCHAR(64) NOT NULL , 
  `role` VARCHAR(64) NOT NULL , 
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `designpro`.`orders` ( 
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , 
  `user_id` VARCHAR(128) NOT NULL , 
  `title` VARCHAR(64) NOT NULL , 
  `description` VARCHAR(128) NOT NULL , 
  `status` VARCHAR(64) NOT NULL , 
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;