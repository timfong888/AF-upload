--Creating table user_group_code_assn

CREATE TABLE IF NOT EXISTS `user_group_code_assn` (
  `user_id` int(10) unsigned NOT NULL,
  `group_code_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`group_code_id`),
  KEY `group_code_id_idx` (`group_code_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
--Restrictions on foreign key table `user_group_code_assn`
--

ALTER TABLE `user_group_code_assn`
  ADD CONSTRAINT `user_group_code_assn_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`Id`),
  ADD CONSTRAINT `user_group_code_assn_ibfk_2` FOREIGN KEY (`group_code_id`) REFERENCES `group_code` (`id`);


