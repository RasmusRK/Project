create table user(
	name varchar(255),
	id varchar(255) PRIMARY KEY,
	email varchar(255),
	password varchar(255))

INSERT INTO user (
`Name` ,`email` , `id` ,`password`
)
VALUES (
'ole',  'ole@ole.dk',  '1',  'ole'
);


CREATE TABLE  `projekt`.`members` (
 `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `username` VARCHAR( 30 ) NOT NULL ,
 `email` VARCHAR( 50 ) NOT NULL ,
 `password` CHAR( 128 ) NOT NULL ,
 `salt` CHAR( 128 ) NOT NULL
) ENGINE = INNODB