SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `store_users`
-- ----------------------------
CREATE TABLE `store_users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
