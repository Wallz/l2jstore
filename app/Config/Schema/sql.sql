/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : l2jdb

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2013-03-04 18:41:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `store_administrators`
-- ----------------------------
DROP TABLE IF EXISTS `store_administrators`;
CREATE TABLE `store_administrators` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `expire` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of store_administrators
-- ----------------------------

-- ----------------------------
-- Table structure for `store_attributes_descriptions`
-- ----------------------------
DROP TABLE IF EXISTS `store_attributes_descriptions`;
CREATE TABLE `store_attributes_descriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of store_attributes_descriptions
-- ----------------------------

-- ----------------------------
-- Table structure for `store_attributes_values`
-- ----------------------------
DROP TABLE IF EXISTS `store_attributes_values`;
CREATE TABLE `store_attributes_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attribute_description_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `attribute_value_name` varchar(50) NOT NULL,
  `credit` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of store_attributes_values
-- ----------------------------

-- ----------------------------
-- Table structure for `store_configuration`
-- ----------------------------
DROP TABLE IF EXISTS `store_configuration`;
CREATE TABLE `store_configuration` (
  `configuration_id` int(11) NOT NULL,
  `configuration_name` varchar(50) NOT NULL,
  `configuration_title` varchar(155) NOT NULL,
  `configuration_key` varchar(50) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`configuration_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of store_configuration
-- ----------------------------

-- ----------------------------
-- Table structure for `store_items`
-- ----------------------------
DROP TABLE IF EXISTS `store_items`;
CREATE TABLE `store_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of store_items
-- ----------------------------
INSERT INTO `store_items` VALUES ('1', '7575', '20', '2013-03-03 11:43:53', '2013-03-03 11:43:53');
