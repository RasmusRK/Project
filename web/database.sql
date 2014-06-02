CREATE TABLE  `projekt`.`users` (
 `id` INT NOT NULL PRIMARY KEY ,
 `username` VARCHAR(30) NOT NULL ,
 `password` CHAR(128) NOT NULL ,
 `salt` CHAR(128) NOT NULL ,
 `admin` TINYINT(1) NOT NULL , 
 `last_online` DATE
) ENGINE = INNODB;

CREATE TABLE  `projekt`.`login_attempts` (
 `user_id` INT(11) NOT NULL ,
 `time` INT(11) NOT NULL
) ENGINE = INNODB;

CREATE TABLE `projekt`.`categories` (
`category_name` VARCHAR(50) NOT NULL PRIMARY KEY,
`create_date` DATE NOT NULL ,
`creator` INT(11) NOT NULL ,
FOREIGN KEY (creator) REFERENCES users(id)
) ENGINE = INNODB;

CREATE TABLE `projekt`.`projekt` (
`project_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`project_name` VARCHAR(30) NOT NULL ,
`category` VARCHAR(50) NOT NULL ,
`creator_id` INT(11) NOT NULL ,
`start_date` DATE NOT NULL ,
`end_date` DATE ,
`info` VARCHAR(2000) ,
FOREIGN KEY (category) REFERENCES categories(category_name) ,
FOREIGN KEY (creator_id) REFERENCES users(id)
) ENGINE = INNODB;

CREATE TABLE `projekt`.`work_on` (
`work_on_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`user_id` INT NOT NULL  ,
`project_id` INT NOT NULL ,
`hours` INTEGER NOT NULL ,
`date` DATE NOT NULL ,
`info` VARCHAR(2000)  ,
FOREIGN KEY (project_id) REFERENCES projekt(project_id),
FOREIGN KEY(user_id) REFERENCES users(id)
) ENGINE = INNODB;

CREATE TABLE `projekt`.`email` (
`name` VARCHAR(64) ,
`id` INT NOT NULL PRIMARY KEY
) ENGINE = INNODB;

INSERT INTO email (name, id) VALUES ('henrik-thomsen@live.dk', 1);