/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : new_tech

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2019-11-18 10:03:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `course_name` varchar(255) DEFAULT NULL,
  `weekday` int(255) NOT NULL,
  `time` int(11) NOT NULL,
  `teacher_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`weekday`,`time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('高等数学2A', '1', '3', '张新');
INSERT INTO `course` VALUES ('高等数学2A', '3', '4', '张新');
INSERT INTO `course` VALUES ('思修', '5', '2', '贺敬垒');
