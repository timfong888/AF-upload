--
-- Droping table `group_code`
--

DROP TABLE `group_code` ;

--
-- Creating table `group_code`
--


CREATE TABLE IF NOT EXISTS `group_code` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `signup_code` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_user_index` (`id`),
  UNIQUE KEY `signup_code_idx` (`signup_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;


