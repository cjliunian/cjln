/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : cjln

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2013-11-15 17:52:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cj_menu
-- ----------------------------
DROP TABLE IF EXISTS `cj_menu`;
CREATE TABLE `cj_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL COMMENT '菜单所属父级,默认为0表示顶级',
  `name` varchar(50) NOT NULL COMMENT '菜单名称',
  `url` varchar(100) DEFAULT NULL COMMENT 'url地址',
  `icon` varchar(100) DEFAULT NULL COMMENT '图标',
  `status` tinyint(4) DEFAULT '0' COMMENT '状态默认0使用，1禁止',
  `remark` varchar(200) DEFAULT NULL COMMENT '菜单描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_menu
-- ----------------------------
INSERT INTO `cj_menu` VALUES ('1', '0', '全局', null, null, '0', null);
INSERT INTO `cj_menu` VALUES ('2', '0', '设置', null, null, '0', null);
INSERT INTO `cj_menu` VALUES ('3', '0', '扩展', null, null, '0', null);
INSERT INTO `cj_menu` VALUES ('4', '2', '站点设置', null, null, '0', null);
INSERT INTO `cj_menu` VALUES ('5', '2', '水印设置', null, null, '0', null);
INSERT INTO `cj_menu` VALUES ('6', '5', '小调设置', null, null, '0', null);
INSERT INTO `cj_menu` VALUES ('7', '5', '大小设置', null, null, '0', null);
INSERT INTO `cj_menu` VALUES ('8', '1', '菜单项1', null, null, '0', null);
INSERT INTO `cj_menu` VALUES ('9', '1', '菜单项2', null, null, '0', null);
INSERT INTO `cj_menu` VALUES ('10', '8', '菜单项1.1', null, null, '0', null);
INSERT INTO `cj_menu` VALUES ('11', '10', '菜单项1.1.1', null, null, '0', null);
INSERT INTO `cj_menu` VALUES ('12', '11', '菜单项1.1.1.2', null, null, '0', null);
