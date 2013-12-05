/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : cjln

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2013-12-05 17:19:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cj_member
-- ----------------------------
DROP TABLE IF EXISTS `cj_member`;
CREATE TABLE `cj_member` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `nickname` char(16) NOT NULL DEFAULT '' COMMENT '昵称',
  `sex` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '性别',
  `birthday` date NOT NULL DEFAULT '0000-00-00' COMMENT '生日',
  `qq` char(10) NOT NULL DEFAULT '' COMMENT 'qq号',
  `score` mediumint(8) NOT NULL DEFAULT '0' COMMENT '用户积分',
  `login_num` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '登录次数',
  `reg_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '注册IP',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `last_login_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '最后登录IP',
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '会员状态',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `ix_uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='会员表\r\n@author   麦当苗儿\r\n@version  2013-05-27';

-- ----------------------------
-- Records of cj_member
-- ----------------------------

-- ----------------------------
-- Table structure for cj_menu
-- ----------------------------
DROP TABLE IF EXISTS `cj_menu`;
CREATE TABLE `cj_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL COMMENT '菜单所属父级,默认为0表示顶级',
  `name` varchar(50) NOT NULL COMMENT '菜单名称',
  `url` varchar(100) DEFAULT NULL COMMENT 'url地址',
  `iconCls` varchar(100) DEFAULT NULL COMMENT '图标',
  `status` tinyint(4) DEFAULT '0' COMMENT '状态默认0使用，1禁止',
  `remark` varchar(200) DEFAULT NULL COMMENT '菜单描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_menu
-- ----------------------------
INSERT INTO `cj_menu` VALUES ('1', '0', '全局', '', 'icon-columns', '0', null);
INSERT INTO `cj_menu` VALUES ('2', '0', '设置', null, 'icon-columns', '0', null);
INSERT INTO `cj_menu` VALUES ('3', '0', '扩展', null, 'icon-columns', '0', null);
INSERT INTO `cj_menu` VALUES ('4', '2', '站点设置', null, 'icon-columns', '0', null);
INSERT INTO `cj_menu` VALUES ('5', '2', '水印设置', null, 'icon-columns', '0', null);
INSERT INTO `cj_menu` VALUES ('6', '5', '小调设置', null, 'icon-ok', '1', null);
INSERT INTO `cj_menu` VALUES ('7', '5', '大小设置', null, 'icon-columns', '0', null);
INSERT INTO `cj_menu` VALUES ('8', '1', '菜单项1', null, 'icon-columns', '0', null);
INSERT INTO `cj_menu` VALUES ('9', '1', '菜单管理', 'Menu/index', 'icon-columns', '0', null);
INSERT INTO `cj_menu` VALUES ('10', '8', '菜单项1.1', null, 'icon-columns', '0', null);
INSERT INTO `cj_menu` VALUES ('11', '10', '菜单项1.1.1女', '', 'icon-columns', '1', null);
INSERT INTO `cj_menu` VALUES ('12', '11', '菜单项', 'Menu/mlist', '', '0', null);
INSERT INTO `cj_menu` VALUES ('14', '1', '用户管理', 'User/index', 'icon-user', '0', null);
INSERT INTO `cj_menu` VALUES ('22', '3', '123123', '12312', '12321', '0', null);

-- ----------------------------
-- Table structure for cj_ucenter_member
-- ----------------------------
DROP TABLE IF EXISTS `cj_ucenter_member`;
CREATE TABLE `cj_ucenter_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` char(16) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `email` char(32) NOT NULL COMMENT '用户邮箱',
  `mobile` char(15) NOT NULL COMMENT '用户手机',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `reg_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '注册IP',
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `last_login_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '最后登录IP',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(4) DEFAULT '0' COMMENT '用户状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of cj_ucenter_member
-- ----------------------------
