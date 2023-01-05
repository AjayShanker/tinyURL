CREATE TABLE IF NOT EXISTS `link` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `url` varchar(1000) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;