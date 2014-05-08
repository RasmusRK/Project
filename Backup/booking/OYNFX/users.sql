# phpMyAdmin SQL Dump
# version 2.5.7-pl1
# http://www.phpmyadmin.net
#
# V�rt: localhost
# Genereringstidspunkt: 07/05 2006 kl. 23:43:49
# Server version: 4.0.24
# PHP version: 4.4.1
# 
# Database: : `nordsoe_com`
# 

# --------------------------------------------------------

#
# Struktur dump for tabellen `users`
#

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL default '',
  `password` varchar(50) default NULL,
  `name` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `phone` varchar(50) default NULL,
  `accessID` tinyint(4) default '0',
  PRIMARY KEY  (`username`)
) TYPE=MyISAM;

#
# Data dump for tabellen `users`
#

INSERT INTO `users` VALUES ('nfdimona', 'lillehors', 'Flychef', '', '00000000', 0);
INSERT INTO `users` VALUES ('144', 'Babyfly', 'Karsten Thorsmark', 'karsten.thorsmark@mail.dk', '3964 4263', 2);
INSERT INTO `users` VALUES ('9', 'hk36r', 'Lars Bentsen', 'lab@hardi-international.com', '20197306', 1);
INSERT INTO `users` VALUES ('538', 'pilot', 'John Heebøll', 'jh@catsys.dk', '2049 7789', 2);
INSERT INTO `users` VALUES ('12', 'F100F', 'Mogens Bringø', 'bringoe@adslhome.dk', '29408866', 1);
INSERT INTO `users` VALUES ('384', '20751707', 'Jens Feldborg', 'jens-feldborg@get2net.dk', '20751705', 1);
INSERT INTO `users` VALUES ('392', 'svalebo', 'Peter Rasmussen', 'pr@peter.dk', '40118899', 2);
INSERT INTO `users` VALUES ('452', 'zzzzzz12', 'Johan Moltke', 'jom@nesa.dk', '3018 1399', 2);
INSERT INTO `users` VALUES ('467', '1qaz2wsx', 'Bent Napstjert', 'btn@cowi.dk', '39699440', 2);
INSERT INTO `users` VALUES ('468', 'bookdimona', 'Michael Hasselgaard', 'hasselgaard@main.tele.dk', '29883404', 1);
INSERT INTO `users` VALUES ('481', '22924444', 'Kristian Klok', 'klok@payback.dk', '22924444', 2);
INSERT INTO `users` VALUES ('499', 'gofly', 'Michael Stougaard', 'michael.stougaard@ofir.dk', '48288020', 2);
INSERT INTO `users` VALUES ('522', 'glidenow', 'Jonas Pedersen', 'jonasfriispedersen@hotmail.com', '23636488', 2);
INSERT INTO `users` VALUES ('543', 'KLX', 'Kai Lange', 'lange@skovringen.dk', '45661102', 2);
INSERT INTO `users` VALUES ('546', 'nette', 'Finn Øland', 'finn@tdcspace.dk', '25273289', 2);
INSERT INTO `users` VALUES ('548', 'albatros', 'Claus Philipsen', 'clausphilipsen@email.dk', '51948231', 2);
INSERT INTO `users` VALUES ('188', 'jgmtafs', 'Erik Kuhlmann', 'ekh@kmech', '4058 6060', 2);
INSERT INTO `users` VALUES ('58', 'jrn', 'Henrik Sylvest', 'tzylle@hotmail', '2214 8656', 1);
INSERT INTO `users` VALUES ('229', 'dolmer15', 'Ole Buus', 'Buus.jyllinge@privat.dk', '2171 2718', 1);
INSERT INTO `users` VALUES ('508', 'yrsaleif', 'Leif Aakjer', 'leif@aakjer.dk', '4826 7852', 2);
INSERT INTO `users` VALUES ('532', 'davidsen', 'Morten Davidsen', 'davidsen@mail.dk', '4586 8770', 2);
INSERT INTO `users` VALUES ('511', 'kirneh', 'Henrik Therkildsen', 'Thh@maersk-pilot.dk', '2084 2860', 2);
INSERT INTO `users` VALUES ('59', 'jbra6iv', 'Søren Sylvest Jacobsen', 'sojac@get2net.dk', '48701755', 1);
INSERT INTO `users` VALUES ('83', 'civic', 'Hans Christian Larsen', 'hchrl@vip.cybercity.dk', '47380609', 1);
INSERT INTO `users` VALUES ('26', 'dek', 'Klaus Degner', 'degner@mail.dk', '4081 7381', 1);
INSERT INTO `users` VALUES ('255', 'airbus', 'Kren Krog Jensen', 'KrenKrogJensen@mail.tele.dk', '2090 4439', 1);
INSERT INTO `users` VALUES ('413', 'dimona', 'Steven Laursen', 'steven.laursen@bcbnet.dk', '4588 7703', 2);
INSERT INTO `users` VALUES ('137', 'kakus', 'Torben Lund Simonsen', 'torben@simons1.dk', '2015 1927', 1);
INSERT INTO `users` VALUES ('239', 'flyver', 'Leo Feldborg', 'leo@feldborg.dk', '2040 6010', 1);
