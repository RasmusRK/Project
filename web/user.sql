CREATE TABLE  `projekt`.`users` (
 `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `username` VARCHAR( 30 ) NOT NULL ,
 `email` VARCHAR( 50 ) NOT NULL ,
 `password` CHAR( 128 ) NOT NULL ,
 `salt` CHAR( 128 ) NOT NULL,
 'admin' TINYINT(1) NOT NULL
) ENGINE = INNODB


CREATE TABLE  `projekt`.`login_attempts` (
 `user_id` INT( 11 ) NOT NULL ,
 `time` VARCHAR( 30 ) NOT NULL
) ENGINE = INNODB

CREATE TABLE `projekt`.`work_on` (
`work_on_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`user_id` INT NOT NULL  ,
`projekt_id` INT NOT NULL ,
`hours` INTEGER NOT NULL ,
`date` INTEGER NOT NULL ,
`info` varchar( 2000 ),
FOREIGN KEY (projekt_id) REFERENCES projekt(projekt_id),
FOREIGN KEY(user_id) REFERENCES users(id)
) ENGINE = INNODB

CREATE TABLE `projekt`.`projekt` (
`projekt_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`projekt_name` VARCHAR( 30 ) NOT NULL ,
`start_date` INTEGER NOT NULL ,
`end_date` INTEGER ,
`info` CHAR( 255 ) 
) ENGINE = INNODB