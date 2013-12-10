/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : cjln

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2013-12-10 17:52:32
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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='会员表\r\n@author   麦当苗儿\r\n@version  2013-05-27';

-- ----------------------------
-- Records of cj_member
-- ----------------------------
INSERT INTO `cj_member` VALUES ('3', '1111', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('4', '错过丶流年', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('5', '12321321', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('6', '123213', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('7', '12312323', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('8', '1231232', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('9', '123123', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('10', '1231232222', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('11', '那一年', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('12', '123123123123', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('13', '123123213', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('14', '12321312312', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');

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
INSERT INTO `cj_menu` VALUES ('11', '10', '菜单项1.1.惺惺惜惺惺', '', 'icon-columns', '1', null);
INSERT INTO `cj_menu` VALUES ('12', '11', '菜单项', 'Menu/mlist', '', '0', null);
INSERT INTO `cj_menu` VALUES ('14', '1', '用户管理', 'User/index', 'icon-user', '0', null);
INSERT INTO `cj_menu` VALUES ('22', '3', '123123', '12312', '12321', '0', null);

-- ----------------------------
-- Table structure for cj_ucenter_admin
-- ----------------------------
DROP TABLE IF EXISTS `cj_ucenter_admin`;
CREATE TABLE `cj_ucenter_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `member_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理员用户ID',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '管理员状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of cj_ucenter_admin
-- ----------------------------

-- ----------------------------
-- Table structure for cj_ucenter_app
-- ----------------------------
DROP TABLE IF EXISTS `cj_ucenter_app`;
CREATE TABLE `cj_ucenter_app` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '应用ID',
  `title` varchar(30) NOT NULL COMMENT '应用名称',
  `url` varchar(100) NOT NULL COMMENT '应用URL',
  `ip` char(15) NOT NULL COMMENT '应用IP',
  `auth_key` varchar(100) NOT NULL COMMENT '加密KEY',
  `sys_login` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '同步登陆',
  `allow_ip` varchar(255) NOT NULL COMMENT '允许访问的IP',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '应用状态',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='应用表';

-- ----------------------------
-- Records of cj_ucenter_app
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of cj_ucenter_member
-- ----------------------------
INSERT INTO `cj_ucenter_member` VALUES ('3', '1111', '44d7574a190f2bddf213ecbd498eeffc', '234@qq.com', '', '1386660812', '2130706433', '0', '0', '1386660812', '1');
INSERT INTO `cj_ucenter_member` VALUES ('4', '错过丶流年', 'fdcc07798c1e03ed1f4d769d668e4863', 'cjliunian@163.com', '', '1386661607', '2130706433', '0', '0', '1386661607', '1');
INSERT INTO `cj_ucenter_member` VALUES ('5', '12321321', 'a129b591bd914facca99a0152a2d37aa', '123456@13.com', '', '1386661644', '2130706433', '0', '0', '1386661644', '1');
INSERT INTO `cj_ucenter_member` VALUES ('6', '123213', '68056d594ebe12f16fe60a7cc7e434b7', 'sdfs@qq.com', '', '1386661690', '2130706433', '0', '0', '1386661690', '1');
INSERT INTO `cj_ucenter_member` VALUES ('7', '12312323', '13a6f51106d2b23db5067400d54d9f63', '111qq@qq.com', '', '1386661710', '2130706433', '0', '0', '1386661710', '1');
INSERT INTO `cj_ucenter_member` VALUES ('8', '1231232', '509ae368e6fc03dc597a7a2b05d8024b', '111cccqq@qq.com', '', '1386662133', '2130706433', '0', '0', '1386662133', '1');
INSERT INTO `cj_ucenter_member` VALUES ('9', '123123', 'fd179ba6ac716cbc062a513f1a1259c2', '111zzzzqq@qq.com', '', '1386662877', '2130706433', '0', '0', '1386662877', '1');
INSERT INTO `cj_ucenter_member` VALUES ('10', '1231232222', '8d4840882abf160830979771896d8b78', 'qqqqqqq@zzz.com', '', '1386664184', '2130706433', '0', '0', '1386664184', '1');
INSERT INTO `cj_ucenter_member` VALUES ('11', '那一年', 'a129b591bd914facca99a0152a2d37aa', '123456x@aaa.com', '', '1386664210', '2130706433', '0', '0', '1386664210', '1');
INSERT INTO `cj_ucenter_member` VALUES ('12', '123123123123', '68056d594ebe12f16fe60a7cc7e434b7', 'xxsfsdf@163.com', '', '1386664232', '2130706433', '0', '0', '1386664232', '1');
INSERT INTO `cj_ucenter_member` VALUES ('13', '123123213', 'b97a2f95a939f2fa9aff6c7c29d2ea16', '124@pp.com', '', '1386664253', '2130706433', '0', '0', '1386664253', '1');
INSERT INTO `cj_ucenter_member` VALUES ('14', '12321312312', '1b9d017b454f3077cfafdabc50dfc683', '123231232@qq.com', '', '1386664556', '2130706433', '0', '0', '1386664556', '1');

-- ----------------------------
-- Table structure for cj_ucenter_setting
-- ----------------------------
DROP TABLE IF EXISTS `cj_ucenter_setting`;
CREATE TABLE `cj_ucenter_setting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '设置ID',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '配置类型（1-用户配置）',
  `value` text NOT NULL COMMENT '配置数据',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='设置表';

-- ----------------------------
-- Records of cj_ucenter_setting
-- ----------------------------
