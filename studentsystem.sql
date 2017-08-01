/*
Navicat MySQL Data Transfer

Source Server         : 123
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : studentsystem

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-08-01 15:01:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for courses
-- ----------------------------
DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `c_id` int(12) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) DEFAULT NULL,
  `t_id` int(12) DEFAULT NULL,
  `c_time` char(12) DEFAULT NULL,
  `c_count` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`c_id`),
  KEY `t#` (`t_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of courses
-- ----------------------------
INSERT INTO `courses` VALUES ('000000000001', '高等数学', '201601', '1,2', '1,3,5');
INSERT INTO `courses` VALUES ('000000000002', '大学英语', '201602', '5,6', '1,4');
INSERT INTO `courses` VALUES ('000000000003', 'C语言程序设计', '201603', '7,8', '3');

-- ----------------------------
-- Table structure for nickname
-- ----------------------------
DROP TABLE IF EXISTS `nickname`;
CREATE TABLE `nickname` (
  `key` int(14) unsigned NOT NULL AUTO_INCREMENT,
  `s_id` int(12) DEFAULT NULL,
  `nick_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`key`),
  KEY `NickName` (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nickname
-- ----------------------------
INSERT INTO `nickname` VALUES ('1', '2016211000', '123');
INSERT INTO `nickname` VALUES ('3', '2016211002', '2231aa');
INSERT INTO `nickname` VALUES ('4', '2016211003', '32142');

-- ----------------------------
-- Table structure for permission
-- ----------------------------
DROP TABLE IF EXISTS `permission`;
CREATE TABLE `permission` (
  `list` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`list`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of permission
-- ----------------------------
INSERT INTO `permission` VALUES ('1', '0', '0');
INSERT INTO `permission` VALUES ('2', '201601', '1');
INSERT INTO `permission` VALUES ('3', '201602', '1');
INSERT INTO `permission` VALUES ('4', '201603', '1');

-- ----------------------------
-- Table structure for studentcouse
-- ----------------------------
DROP TABLE IF EXISTS `studentcouse`;
CREATE TABLE `studentcouse` (
  `key` int(12) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `s_id` int(12) DEFAULT NULL,
  `c_id` int(12) DEFAULT NULL,
  PRIMARY KEY (`key`),
  KEY `S#` (`s_id`),
  KEY `T#` (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of studentcouse
-- ----------------------------
INSERT INTO `studentcouse` VALUES ('000000000001', '2016211000', '1');
INSERT INTO `studentcouse` VALUES ('000000000002', '2016211000', '2');
INSERT INTO `studentcouse` VALUES ('000000000003', '2016211000', '3');

-- ----------------------------
-- Table structure for students
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `s_id` int(12) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `s_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `s_sex` char(5) DEFAULT NULL,
  `s_class` char(12) DEFAULT NULL,
  `s_college` varchar(255) DEFAULT NULL,
  `s_grade` char(15) DEFAULT NULL,
  `s_majornum` char(15) DEFAULT NULL,
  `s_majorname` varchar(255) DEFAULT NULL,
  `s_status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2016211004 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of students
-- ----------------------------
INSERT INTO `students` VALUES ('002016211000', 'admin', '2bf5bacd68092fd8825061d6a13d754a', '男', '123', '123', '1', '123', '123', '2333');
INSERT INTO `students` VALUES ('002016211001', '1231', '2bf5bacd68092fd8825061d6a13d754a', '男', '1231', '爱的', '1', '231', '231', 'NULL');
INSERT INTO `students` VALUES ('002016211002', 'wehaou', '2bf5bacd68092fd8825061d6a13d754a', '男', '23871', '4hsa', '1', '123', '28471y', 'NULL');
INSERT INTO `students` VALUES ('002016211003', '2312', '2bf5bacd68092fd8825061d6a13d754a', '男', '23871', '4hsa', '1', '123', '28471y', 'NULL');

-- ----------------------------
-- Table structure for teachers
-- ----------------------------
DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers` (
  `t_id` int(12) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `t_name` varchar(255) DEFAULT NULL,
  `t_college` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `notice` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=201604 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teachers
-- ----------------------------
INSERT INTO `teachers` VALUES ('000000000001', 'admmin', '0', '4c9a0328118285c19398530a28890922', '0', 'NULL');
INSERT INTO `teachers` VALUES ('000000201601', '王某', '理学院', '55fdae3a92fb5373da06decc60684426', '1', '期末了同学们该复习了！');
INSERT INTO `teachers` VALUES ('000000201602', '李某', '外国语学院', 'b55db214e2f902e01d8601fcff286163', '1', '听力考试在周日进行');
INSERT INTO `teachers` VALUES ('000000201603', '张某', '计算机学院', 'f613537fb14b5709c2cca3af986b0684', '1', 'NULL');
