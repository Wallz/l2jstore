SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `store_users`
-- ----------------------------
DROP TABLE IF EXISTS `store_users`;
CREATE TABLE `store_users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of store_users
-- ----------------------------
INSERT INTO `store_users` VALUES ('1', 'exemplo@exemplo.com', 'ad9dda528978aca6f9407c52741aa10f', '2013-03-06 07:52:11', '2013-03-06 07:52:13');
