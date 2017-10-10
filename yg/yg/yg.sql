/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : yg

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-10-10 00:15:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for complete
-- ----------------------------
DROP TABLE IF EXISTS `complete`;
CREATE TABLE `complete` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `department` tinyint(10) NOT NULL DEFAULT '0' COMMENT '部门',
  `output` varchar(255) DEFAULT '' COMMENT '产量',
  `output_value` varchar(255) DEFAULT '' COMMENT '产值',
  `profit` varchar(255) DEFAULT '' COMMENT '利润',
  `payment` varchar(255) DEFAULT '' COMMENT '回款',
  `year` varchar(255) DEFAULT '' COMMENT '年份',
  `interval_type` tinyint(10) DEFAULT '1' COMMENT '时段类别：1:year;2:season;3:month;4:week',
  `interval_value` varchar(50) DEFAULT '' COMMENT '时段：年、第几季度、几月、第几周',
  `completion_rate` varchar(255) DEFAULT '' COMMENT '完成率 (type=1,2时使用)',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of complete
-- ----------------------------
INSERT INTO `complete` VALUES ('2', '1', '194.00000', '200.00000', '522.00000', '213.00000', '2017', '1', '2017', '');
INSERT INTO `complete` VALUES ('3', '1', '38.00000', '99.00000', '381.00000', '61.00000', '2017', '2', '1', '');
INSERT INTO `complete` VALUES ('4', '1', '38.00000', '99.00000', '381.00000', '61.00000', '2017', '3', '1', '');
INSERT INTO `complete` VALUES ('5', '1', '', '', '', '', '2017', '3', '2', '');
INSERT INTO `complete` VALUES ('8', '2', '', '', '', '', '2017', '1', '2017', '');
INSERT INTO `complete` VALUES ('9', '2', '', '', '', '', '2017', '2', '1', '');
INSERT INTO `complete` VALUES ('10', '2', '', '', '', '', '2017', '3', '1', '');
INSERT INTO `complete` VALUES ('11', '2', '', '', '', '', '2017', '3', '2', '');
INSERT INTO `complete` VALUES ('26', '3', '', '', '', '', '2017', '1', '2017', '');
INSERT INTO `complete` VALUES ('27', '3', '', '', '', '', '2017', '2', '1', '');
INSERT INTO `complete` VALUES ('28', '3', '', '', '', '', '2017', '3', '1', '');
INSERT INTO `complete` VALUES ('29', '3', '', '', '', '', '2017', '3', '2', '');
INSERT INTO `complete` VALUES ('37', '1', '12', '32', '32', '32', '2017', '4', '1', '');
INSERT INTO `complete` VALUES ('38', '1', '12', '32', '23', '23', '2017', '4', '2', '');
INSERT INTO `complete` VALUES ('39', '1', '2', '3', '3', '4', '2017', '4', '3', '');

-- ----------------------------
-- Table structure for plan
-- ----------------------------
DROP TABLE IF EXISTS `plan`;
CREATE TABLE `plan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `department` tinyint(10) NOT NULL DEFAULT '0' COMMENT '部门',
  `output` varchar(255) DEFAULT '' COMMENT '产量',
  `output_value` varchar(255) DEFAULT '' COMMENT '产值',
  `profit` varchar(255) DEFAULT '' COMMENT '利润',
  `payment` varchar(255) DEFAULT '' COMMENT '回款',
  `year` varchar(255) DEFAULT '' COMMENT '年份',
  `interval_type` tinyint(10) DEFAULT '1' COMMENT '时段类别：1:year;2:season;3:month;4:week',
  `interval_value` varchar(50) DEFAULT '' COMMENT '时段：年、第几季度、几月、第几周',
  `sign` varchar(255) DEFAULT '' COMMENT '核心字段数据的签名',
  `output_rate` varchar(255) DEFAULT '' COMMENT '产量完成率',
  `output_value_rate` varchar(255) DEFAULT '' COMMENT '产值完成率',
  `profit_rate` varchar(255) DEFAULT '' COMMENT '利润完成率',
  `payment_rate` varchar(255) DEFAULT '' COMMENT '回款完成率',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of plan
-- ----------------------------
INSERT INTO `plan` VALUES ('1', '0', '', '', '', '', '', '1', '', '', '', '', '', '');
INSERT INTO `plan` VALUES ('2', '1', '1', '1', '1', '1', '2017', '1', '2017', '', '194.00', '200.00', '522.00', '213.00');
INSERT INTO `plan` VALUES ('3', '1', '2', '2', '2', '2', '2017', '2', '1', '', '19.00', '49.50', '190.50', '30.50');
INSERT INTO `plan` VALUES ('4', '1', '3', '3', '3', '3', '2017', '3', '1', '', '12.66', '33.00', '127.00', '20.33');
INSERT INTO `plan` VALUES ('5', '1', '3', '3', '3', '3', '2017', '3', '2', '', '', '', '', '');
INSERT INTO `plan` VALUES ('6', '1', '4', '44', '44', '4', '2017', '4', '1', '', '', '', '', '');
INSERT INTO `plan` VALUES ('7', '1', '4', '44', '4', '4', '2017', '4', '2', '', '', '', '', '');
INSERT INTO `plan` VALUES ('8', '2', '2', '2', '2', '2', '2017', '1', '2017', '', '', '', '', '');
INSERT INTO `plan` VALUES ('9', '2', '2', '2', '2', '2', '2017', '2', '1', '', '', '', '', '');
INSERT INTO `plan` VALUES ('10', '2', '2', '2', '2', '2', '2017', '3', '1', '', '', '', '', '');
INSERT INTO `plan` VALUES ('11', '2', '2', '2', '2', '2', '2017', '3', '2', '', '', '', '', '');
INSERT INTO `plan` VALUES ('12', '2', '2', '2', '2', '2', '2017', '4', '1', '', '', '', '', '');
INSERT INTO `plan` VALUES ('13', '2', '2', '2', '2', '2', '2017', '4', '2', '', '', '', '', '');
INSERT INTO `plan` VALUES ('26', '3', '1', '1', '1', '1', '2017', '1', '2017', '', '', '', '', '');
INSERT INTO `plan` VALUES ('27', '3', '2', '2', '2', '2', '2017', '2', '1', '', '', '', '', '');
INSERT INTO `plan` VALUES ('28', '3', '3', '3', '3', '3', '2017', '3', '1', '', '', '', '', '');
INSERT INTO `plan` VALUES ('29', '3', '3', '3', '3', '3', '2017', '3', '2', '', '', '', '', '');
INSERT INTO `plan` VALUES ('30', '3', '3', '3', '3', '3', '2017', '4', '1', '', '', '', '', '');
INSERT INTO `plan` VALUES ('31', '3', '3', '3', '3', '3', '2017', '4', '2', '', '', '', '', '');
INSERT INTO `plan` VALUES ('32', '4', '1', '2', '2', '3', '2017', '1', '2017', '', '', '', '', '');
INSERT INTO `plan` VALUES ('33', '4', '3', '3', '2', '2', '2017', '2', '1', '', '', '', '', '');
INSERT INTO `plan` VALUES ('34', '4', '3', '4', '3', '3', '2017', '3', '1', '', '', '', '', '');
INSERT INTO `plan` VALUES ('35', '4', '4', '3', '3', '3', '2017', '3', '2', '', '', '', '', '');
INSERT INTO `plan` VALUES ('36', '4', '4', '45', '5', '4', '2017', '4', '1', '', '', '', '', '');
INSERT INTO `plan` VALUES ('37', '4', '4', '4', '4', '4', '2017', '4', '2', '', '', '', '', '');
INSERT INTO `plan` VALUES ('38', '5', '1', '2', '3', '3', '2017', '1', '2017', '', '', '', '', '');
INSERT INTO `plan` VALUES ('39', '5', '4', '4', '4', '4', '2017', '2', '1', '', '', '', '', '');
INSERT INTO `plan` VALUES ('40', '5', '3', '3', '3', '3', '2017', '3', '1', '', '', '', '', '');
INSERT INTO `plan` VALUES ('41', '5', '3', '3', '3', '3', '2017', '3', '2', '', '', '', '', '');
INSERT INTO `plan` VALUES ('42', '5', '4', '4', '4', '4', '2017', '4', '1', '', '', '', '', '');
INSERT INTO `plan` VALUES ('43', '5', '4', '4', '4', '4', '2017', '4', '2', '', '', '', '', '');

-- ----------------------------
-- Table structure for revise
-- ----------------------------
DROP TABLE IF EXISTS `revise`;
CREATE TABLE `revise` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `department` tinyint(10) NOT NULL DEFAULT '0' COMMENT '部门',
  `output` varchar(255) DEFAULT '' COMMENT '产量',
  `output_value` varchar(255) DEFAULT '' COMMENT '产值',
  `profit` varchar(255) DEFAULT '' COMMENT '利润',
  `payment` varchar(255) DEFAULT '' COMMENT '回款',
  `year` varchar(255) DEFAULT '' COMMENT '年份',
  `interval_type` tinyint(10) DEFAULT '1' COMMENT '时段类别：1:year;2:season;3:month;4:week',
  `interval_value` varchar(50) DEFAULT '' COMMENT '时段：年、第几季度、几月、第几周',
  `sign` varchar(255) DEFAULT '' COMMENT '核心字段数据的签名',
  `output_rate` varchar(255) DEFAULT '' COMMENT '产量完成率',
  `output_value_rate` varchar(255) DEFAULT '' COMMENT '产值完成率',
  `profit_rate` varchar(255) DEFAULT '' COMMENT '利润完成率',
  `payment_rate` varchar(255) DEFAULT '' COMMENT '回款完成率',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of revise
-- ----------------------------
INSERT INTO `revise` VALUES ('2', '1', '1', '1', '1', '1', '2017', '1', '2017', '', '194.00', '200.00', '522.00', '213.00');
INSERT INTO `revise` VALUES ('3', '1', '2', '2', '2', '2', '2017', '2', '1', '', '19.00', '49.50', '190.50', '30.50');
INSERT INTO `revise` VALUES ('4', '1', '3', '3', '3', '3', '2017', '3', '1', '', '12.66', '33.00', '127.00', '20.33');
INSERT INTO `revise` VALUES ('5', '1', '3', '3', '3', '3', '2017', '3', '2', '', '', '', '', '');
INSERT INTO `revise` VALUES ('6', '1', '4', '44', '44', '4', '2017', '4', '1', '', '', '', '', '');
INSERT INTO `revise` VALUES ('7', '1', '4', '44', '4', '4', '2017', '4', '2', '', '', '', '', '');
INSERT INTO `revise` VALUES ('8', '2', '222', '2', '2', '2', '2017', '1', '2017', '4b9acad541f258fae85504fd4d6a213f', '', '', '', '');
INSERT INTO `revise` VALUES ('9', '2', '2', '23', '2', '2', '2017', '2', '1', '20a47a35772d4671b99b35db09ff0757', '', '', '', '');
INSERT INTO `revise` VALUES ('10', '2', '2', '2', '2', '2', '2017', '3', '1', 'bb40928664cd41c81177404c54442892', '', '', '', '');
INSERT INTO `revise` VALUES ('11', '2', '21', '22', '2', '2', '2017', '3', '2', 'ec87951de577429868a037b7dcf2d618', '', '', '', '');
INSERT INTO `revise` VALUES ('12', '2', '2334', '23', '22', '2', '2017', '4', '1', '9707668672f45f13f6903d6f61137d12', '', '', '', '');
INSERT INTO `revise` VALUES ('13', '2', '23', '2333', '222', '2', '2017', '4', '2', '7414541071877531836a0cd3916d352f', '', '', '', '');
INSERT INTO `revise` VALUES ('32', '4', '1', '2', '2', '3', '2017', '1', '2017', '', '', '', '', '');
INSERT INTO `revise` VALUES ('33', '4', '3', '3', '2', '2', '2017', '2', '1', '', '', '', '', '');
INSERT INTO `revise` VALUES ('34', '4', '3', '4', '3', '3', '2017', '3', '1', '', '', '', '', '');
INSERT INTO `revise` VALUES ('35', '4', '4', '3', '3', '3', '2017', '3', '2', '', '', '', '', '');
INSERT INTO `revise` VALUES ('36', '4', '4', '45', '5', '4', '2017', '4', '1', '', '', '', '', '');
INSERT INTO `revise` VALUES ('37', '4', '4', '4', '4', '4', '2017', '4', '2', '', '', '', '', '');
INSERT INTO `revise` VALUES ('38', '5', '1', '2', '3', '3', '2017', '1', '2017', '', '', '', '', '');
INSERT INTO `revise` VALUES ('39', '5', '4', '4', '4', '4', '2017', '2', '1', '', '', '', '', '');
INSERT INTO `revise` VALUES ('40', '5', '3', '3', '3', '3', '2017', '3', '1', '', '', '', '', '');
INSERT INTO `revise` VALUES ('41', '5', '3', '3', '3', '3', '2017', '3', '2', '', '', '', '', '');
INSERT INTO `revise` VALUES ('42', '5', '4', '4', '4', '4', '2017', '4', '1', '', '', '', '', '');
INSERT INTO `revise` VALUES ('43', '5', '4', '4', '4', '4', '2017', '4', '2', '', '', '', '', '');
INSERT INTO `revise` VALUES ('26', '3', '1', '1', '1', '1', '2017', '1', '2017', '', '', '', '', '');
INSERT INTO `revise` VALUES ('27', '3', '2', '2', '2', '2', '2017', '2', '1', '', '', '', '', '');
INSERT INTO `revise` VALUES ('28', '3', '3', '3', '3', '3', '2017', '3', '1', '', '', '', '', '');
INSERT INTO `revise` VALUES ('29', '3', '3', '3', '3', '3', '2017', '3', '2', '', '', '', '', '');
INSERT INTO `revise` VALUES ('30', '3', '3', '3', '3', '3', '2017', '4', '1', '', '', '', '', '');
INSERT INTO `revise` VALUES ('31', '3', '3', '3', '3', '3', '2017', '4', '2', '', '', '', '', '');
