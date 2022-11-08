-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `counter`;
CREATE TABLE `counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `counter` int(100) NOT NULL DEFAULT '1',
  `def_name` varchar(255) NOT NULL DEFAULT 'null',
  `time` datetime NOT NULL,
  `from` varchar(2550) NOT NULL DEFAULT 'null',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2021-09-12 22:56:06
