# phpMyAdmin SQL Dump
# version 2.5.7-pl1
# http://www.phpmyadmin.net
#
# V�rt: localhost
# Genereringstidspunkt: 07/05 2006 kl. 23:44:18
# Server version: 4.0.24
# PHP version: 4.4.1
# 
# Database: : `nordsoe_com`
# 

# --------------------------------------------------------

#
# Struktur dump for tabellen `booking`
#

CREATE TABLE `booking` (
  `year` mediumint(9) NOT NULL default '0',
  `month` tinyint(4) NOT NULL default '0',
  `date` tinyint(4) NOT NULL default '0',
  `time1` text NOT NULL,
  `time2` text NOT NULL,
  `time3` text NOT NULL,
  `time4` text NOT NULL,
  `time5` text NOT NULL,
  `time6` text NOT NULL,
  `time7` text NOT NULL,
  `time8` text NOT NULL,
  `time9` text NOT NULL,
  `time10` text NOT NULL,
  `time11` text NOT NULL,
  `time12` text NOT NULL,
  `time13` text NOT NULL,
  `time14` text NOT NULL,
  PRIMARY KEY  (`year`,`month`,`date`)
) TYPE=MyISAM;

#
# Data dump for tabellen `booking`
#

INSERT INTO `booking` VALUES (2006, 4, 21, '', '', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', '', '', '', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 5, 24, '', '', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', '', '', '', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 6, 8, '', '', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', '', '', '', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 7, 6, '', '', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', '', '', '', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 8, 23, '', '', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', '', '', '', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 3, 14, '', '', 'Klaus Degner\n1\ndegner@mail.dk\n26', 'Klaus Degner\n1\ndegner@mail.dk\n26', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 4, 14, '', '', 'Klaus Degner\n1\ndegner@mail.dk\n26\n543\nlange@skovringen.dk', 'Klaus Degner\n1\ndegner@mail.dk\n26\n543\nlange@skovringen.dk', '', '', '', 'Klaus Degner\n1\ndegner@mail.dk\n26', 'Klaus Degner\n1\ndegner@mail.dk\n26', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 5, 11, '', '', 'Klaus Degner\n1\ndegner@mail.dk\n26', 'Klaus Degner\n1\ndegner@mail.dk\n26', '', '', 'Kai Lange\n2\nlange@skovringen.dk\n543', 'Klaus Degner\n1\ndegner@mail.dk\n26\n543\nlange@skovringen.dk', 'Klaus Degner\n1\ndegner@mail.dk\n26\n543\nlange@skovringen.dk', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 6, 2, '', '', 'Klaus Degner\n1\ndegner@mail.dk\n26', 'Klaus Degner\n1\ndegner@mail.dk\n26', '', '', '', 'Klaus Degner\n1\ndegner@mail.dk\n26', 'Klaus Degner\n1\ndegner@mail.dk\n26', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 6, 15, '', '', '', '', '', '', '', 'Klaus Degner\n1\ndegner@mail.dk\n26', 'Klaus Degner\n1\ndegner@mail.dk\n26', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 7, 26, '', '', 'Klaus Degner\n1\ndegner@mail.dk\n26', 'Klaus Degner\n1\ndegner@mail.dk\n26', '', '', '', 'Mogens Bringø\n1\nbringoe@adslhome.dk\n12', 'Mogens Bringø\n1\nbringoe@adslhome.dk\n12', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 8, 10, '', '', 'Klaus Degner\n1\ndegner@mail.dk\n26', 'Klaus Degner\n1\ndegner@mail.dk\n26', '', '', '', 'Klaus Degner\n1\ndegner@mail.dk\n26', 'Klaus Degner\n1\ndegner@mail.dk\n26', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 8, 24, '', '', 'Klaus Degner\n1\ndegner@mail.dk\n26', 'Klaus Degner\n1\ndegner@mail.dk\n26', '', '', '', 'Mogens Bringø\n1\nbringoe@adslhome.dk\n12', 'Mogens Bringø\n1\nbringoe@adslhome.dk\n12', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 3, 17, '', '', '', '', '', '', '', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 4, 28, '', '', '', '', '', '', '', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 6, 23, '', '', '', '', '', '', '', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 7, 12, '', '', '', '', '', '', '', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 7, 19, '', '', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', '', '', '', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 8, 9, '', '', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', '', '', '', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 9, 1, '', '', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', '', '', '', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 9, 7, '', '', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', '', '', '', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 9, 15, '', '', 'Mogens Bringø\n1\nbringoe@adslhome.dk\n12', 'Mogens Bringø\n1\nbringoe@adslhome.dk\n12', '', '', '', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 3, 30, '', '', 'Kren Krog Jensen\n1\nKrenKrogJensen@mail.tele.dk\n255', 'Kren Krog Jensen\n1\nKrenKrogJensen@mail.tele.dk\n255', '', '', '', 'Kren Krog Jensen\n1\nKrenKrogJensen@mail.tele.dk\n255', 'Kren Krog Jensen\n1\nKrenKrogJensen@mail.tele.dk\n255', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 4, 13, '', '', 'Kren Krog Jensen\n1\nKrenKrogJensen@mail.tele.dk\n255', 'Kren Krog Jensen\n1\nKrenKrogJensen@mail.tele.dk\n255', '', '', '', 'Kren Krog Jensen\n1\nKrenKrogJensen@mail.tele.dk\n255', 'Kren Krog Jensen\n1\nKrenKrogJensen@mail.tele.dk\n255', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 4, 27, '', '', 'Kren Krog Jensen\n1\nKrenKrogJensen@mail.tele.dk\n255', 'Kren Krog Jensen\n1\nKrenKrogJensen@mail.tele.dk\n255', '', '', '', 'Kren Krog Jensen\n1\nKrenKrogJensen@mail.tele.dk\n255', 'Kren Krog Jensen\n1\nKrenKrogJensen@mail.tele.dk\n255', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 5, 10, '', '', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', '', '', '', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 6, 1, '', '', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', '', '', '', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 6, 22, '', '', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', '', '', '', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 6, 29, '', '', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', '', '', '', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 8, 3, '', '', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', '', '', '', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 8, 16, '', '', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', '', '', '', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', 'Leo Feldborg\n1\nleo@feldborg.dk\n239', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 7, 13, '', '', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', '', '', '', 'Mogens Bringø\n1\nbringoe@adslhome.dk\n12', 'Mogens Bringø\n1\nbringoe@adslhome.dk\n12', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 8, 2, '', '', 'Mogens Bringø\n1\nbringoe@adslhome.dk\n12', 'Mogens Bringø\n1\nbringoe@adslhome.dk\n12', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 7, 20, '', '', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', '', '', '', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 7, 27, '', '', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', '', '', '', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 8, 17, '', '', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', '', '', '', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 9, 14, '', '', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', '', '', '', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 9, 21, '', '', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', 'Torben Lund Simonsen\n1\ntorben@simons1.dk\n137', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 4, 4, '', '', '', 'John Heebøll\n2\njh@catsys.dk\n538', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 4, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 7, 5, '', '', 'Klaus Degner\n1\ndegner@mail.dk\n26', 'Klaus Degner\n1\ndegner@mail.dk\n26', '', '', '', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 8, 30, '', '', 'Mogens Bringø\n1\nbringoe@adslhome.dk\n12', 'Mogens Bringø\n1\nbringoe@adslhome.dk\n12', '', '', '', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 9, 8, '', '', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', '', '', '', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 9, 28, '', '', '', '', '', '', '', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 3, 29, '', '', 'Klaus Degner\n1\ndegner@mail.dk\n26', 'Klaus Degner\n1\ndegner@mail.dk\n26', '', '', '', 'Klaus Degner\n1\ndegner@mail.dk\n26', 'Klaus Degner\n1\ndegner@mail.dk\n26', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 3, 23, '', '', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', '', '', '', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', 'Hans Christian Larsen\n1\nhchrl@vip.cybercity.dk\n83', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 4, 7, '', '', '', '', '', '', '', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 5, 17, '', '', 'Mogens Bringø\n1\nbringoe@adslhome.dk\n12', 'Mogens Bringø\n1\nbringoe@adslhome.dk\n12', '', '', '', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 6, 16, '', '', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', '', '', '', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 6, 30, '', '', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', '', '', '', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', '', '', '');
INSERT INTO `booking` VALUES (2006, 3, 15, '', '', 'Lars Bentsen\n1\nlab@hardi-international.com\n9\n543\nlange@skovringen.dk', 'Lars Bentsen\n1\nlab@hardi-international.com\n9\n543\nlange@skovringen.dk', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 6, 9, '', '', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', 'Lars Bentsen\n1\nlab@hardi-international.com\n9', '', '', 'Michael Hasselgaard\n1\nhasselgaard@main.tele.dk\n468', 'Michael Hasselgaard\n1\nhasselgaard@main.tele.dk\n468', '', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 3, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 3, 6, '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 4, 6, '', '', 'Lars Bentsen\n1\nlab@hardi-international.com\n9\n543\nlange@skovringen.dk', 'Lars Bentsen\n1\nlab@hardi-international.com\n9\n543\nlange@skovringen.dk', '', '', '', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59\n452\njom@nesa.dk', 'Søren Sylvest Jacobsen\n1\nsojac@get2net.dk\n59\n452\njom@nesa.dk', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 5, 18, '', '', '', '', '', '', '', 'Mogens Bringø\n1\nbringoe@adslhome.dk\n12', 'Mogens Bringø\n1\nbringoe@adslhome.dk\n12', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 4, 20, '', '', '', '', '', '', 'Michael Hasselgaard\n1\nhasselgaard@main.tele.dk\n468', 'Michael Hasselgaard\n1\nhasselgaard@main.tele.dk\n468', '', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 3, 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `booking` VALUES (2006, 5, 25, '', '', '', '', '', '', 'Michael Hasselgaard\n1\nhasselgaard@main.tele.dk\n468', 'Michael Hasselgaard\n1\nhasselgaard@main.tele.dk\n468', '', '', '', '', '', '');
