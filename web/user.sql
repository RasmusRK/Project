CREATE TABLE  `projekt`.`users` (
 `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `username` VARCHAR( 30 ) NOT NULL ,
 `email` VARCHAR( 50 ) NOT NULL ,
 `password` CHAR( 128 ) NOT NULL ,
 `salt` CHAR( 128 ) NOT NULL,
 'admin' TINYINT(1) NOT NULL
) ENGINE = INNODB;

CREATE TABLE  `projekt`.`login_attempts` (
 `user_id` INT(11) NOT NULL ,
 `time` INT(11) NOT NULL
) ENGINE = INNODB;

CREATE TABLE `projekt`.`projekt` (
`project_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`project_name` VARCHAR(30) NOT NULL ,
`category` VARCHAR(255) ,
`start_date` DATE NOT NULL ,
`end_date` DATE ,
`info` VARCHAR(2000) 
) ENGINE = INNODB;

CREATE TABLE `projekt`.`work_on` (
`work_on_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`user_id` INT NOT NULL  ,
`project_id` INT NOT NULL ,
`hours` INTEGER NOT NULL ,
`date` INTEGER NOT NULL ,
`info` VARCHAR( 2000 ),
FOREIGN KEY (project_id) REFERENCES projekt(project_id),
FOREIGN KEY(user_id) REFERENCES users(id)
) ENGINE = INNODB;

INSERT INTO projekt (project_name, start_date, info)
VALUES ("fly1", '2014-03-30', "fly1 skal males blablabla");

INSERT INTO projekt (project_name, start_date, end_date, info)
VALUES ("opfyldning", '2014-10-03', '2014-04-15', "kantinen skal fyldes op med øl");

INSERT INTO projekt (project_name, start_date, info)
VALUES ("oprydning", '2014-01-01', "der skal ryddes op i flygaragen");
