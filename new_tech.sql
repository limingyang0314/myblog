/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50723
Source Host           : localhost:3306
Source Database       : new_tech

Target Server Type    : MYSQL
Target Server Version : 50723
File Encoding         : 65001

Date: 2019-11-18 20:42:00
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
  `classroom` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`weekday`,`time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('高等数学2A', '1', '3', '张新', '55A117');
INSERT INTO `course` VALUES ('web开发', '2', '1', '牛志彬', '33A112');
INSERT INTO `course` VALUES ('高等数学2A', '3', '4', '张新', '55A117');
INSERT INTO `course` VALUES ('大学物理2B', '4', '2', '张颖', '33A112');
INSERT INTO `course` VALUES ('思修', '5', '2', '贺敬垒', '33A112');
INSERT INTO `course` VALUES ('大学物理2B', '5', '5', '张颖', '45B112');
INSERT INTO `course` VALUES ('择业指导', '6', '2', '辅导员', '46A117');
INSERT INTO `course` VALUES ('操作系统', '7', '1', '李罡', '46A302');
