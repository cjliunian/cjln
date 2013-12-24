/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : cjln

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2013-12-24 18:02:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cj_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `cj_auth_group`;
CREATE TABLE `cj_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户组id,自增主键',
  `module` varchar(20) NOT NULL COMMENT '用户组所属模块',
  `type` tinyint(4) NOT NULL COMMENT '组类型',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '用户组中文名称',
  `description` varchar(80) NOT NULL DEFAULT '' COMMENT '描述信息',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '用户组状态：为1正常，为0禁用,-1为删除',
  `rules` varchar(500) NOT NULL DEFAULT '' COMMENT '用户组拥有的规则id，多个规则 , 隔开',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_auth_group
-- ----------------------------
INSERT INTO `cj_auth_group` VALUES ('8', 'admin', '0', 'xxxxxxxx', '看你怎么写都可以', '1', '');
INSERT INTO `cj_auth_group` VALUES ('6', 'admin', '1', '管理组', '系统管理组拥有一定的权限', '1', '1,220,221,222,223');
INSERT INTO `cj_auth_group` VALUES ('7', 'admin', '1', '默认组', '默认组', '1', '');
INSERT INTO `cj_auth_group` VALUES ('9', 'admin', '1', '123', '123123', '1', '');
INSERT INTO `cj_auth_group` VALUES ('10', 'admin', '1', 'ssssssssss', '1111111111', '1', '');
INSERT INTO `cj_auth_group` VALUES ('11', 'admin', '1', '1123', '123', '1', '');
INSERT INTO `cj_auth_group` VALUES ('12', 'admin', '1', 'qqqqqqqqqqq', '123', '1', '');
INSERT INTO `cj_auth_group` VALUES ('13', 'admin', '1', '123123', '122', '1', '');
INSERT INTO `cj_auth_group` VALUES ('14', 'module', '1', 'sdfsdfsdf', 'sdfsd', '1', '');

-- ----------------------------
-- Table structure for cj_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `cj_auth_group_access`;
CREATE TABLE `cj_auth_group_access` (
  `uid` int(10) unsigned NOT NULL COMMENT '用户id',
  `group_id` mediumint(8) unsigned NOT NULL COMMENT '用户组id',
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_auth_group_access
-- ----------------------------
INSERT INTO `cj_auth_group_access` VALUES ('4', '6');
INSERT INTO `cj_auth_group_access` VALUES ('4', '9');
INSERT INTO `cj_auth_group_access` VALUES ('4', '10');
INSERT INTO `cj_auth_group_access` VALUES ('4', '11');
INSERT INTO `cj_auth_group_access` VALUES ('4', '12');
INSERT INTO `cj_auth_group_access` VALUES ('15', '6');
INSERT INTO `cj_auth_group_access` VALUES ('15', '10');
INSERT INTO `cj_auth_group_access` VALUES ('15', '11');
INSERT INTO `cj_auth_group_access` VALUES ('15', '12');
INSERT INTO `cj_auth_group_access` VALUES ('16', '9');
INSERT INTO `cj_auth_group_access` VALUES ('16', '11');
INSERT INTO `cj_auth_group_access` VALUES ('16', '12');
INSERT INTO `cj_auth_group_access` VALUES ('17', '6');
INSERT INTO `cj_auth_group_access` VALUES ('17', '11');
INSERT INTO `cj_auth_group_access` VALUES ('17', '12');
INSERT INTO `cj_auth_group_access` VALUES ('18', '6');
INSERT INTO `cj_auth_group_access` VALUES ('18', '12');
INSERT INTO `cj_auth_group_access` VALUES ('20', '6');
INSERT INTO `cj_auth_group_access` VALUES ('20', '12');
INSERT INTO `cj_auth_group_access` VALUES ('21', '6');
INSERT INTO `cj_auth_group_access` VALUES ('21', '12');
INSERT INTO `cj_auth_group_access` VALUES ('22', '6');
INSERT INTO `cj_auth_group_access` VALUES ('22', '7');
INSERT INTO `cj_auth_group_access` VALUES ('22', '12');
INSERT INTO `cj_auth_group_access` VALUES ('23', '6');
INSERT INTO `cj_auth_group_access` VALUES ('23', '11');
INSERT INTO `cj_auth_group_access` VALUES ('23', '12');
INSERT INTO `cj_auth_group_access` VALUES ('24', '11');
INSERT INTO `cj_auth_group_access` VALUES ('24', '12');
INSERT INTO `cj_auth_group_access` VALUES ('25', '6');
INSERT INTO `cj_auth_group_access` VALUES ('25', '7');
INSERT INTO `cj_auth_group_access` VALUES ('25', '12');
INSERT INTO `cj_auth_group_access` VALUES ('26', '6');
INSERT INTO `cj_auth_group_access` VALUES ('26', '11');
INSERT INTO `cj_auth_group_access` VALUES ('26', '12');
INSERT INTO `cj_auth_group_access` VALUES ('27', '6');
INSERT INTO `cj_auth_group_access` VALUES ('27', '12');

-- ----------------------------
-- Table structure for cj_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `cj_auth_rule`;
CREATE TABLE `cj_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '规则id,自增主键',
  `pid` mediumint(8) NOT NULL,
  `module` varchar(20) NOT NULL COMMENT '规则所属module',
  `type` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1-url;2-主菜单',
  `name` char(80) NOT NULL DEFAULT '' COMMENT '规则唯一英文标识',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '规则中文描述',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否有效(0:无效,1:有效)',
  `condition` varchar(300) NOT NULL DEFAULT '' COMMENT '规则附加条件',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`module`,`name`,`type`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_auth_rule
-- ----------------------------
INSERT INTO `cj_auth_rule` VALUES ('1', '0', 'admin', '1', '0aa', '全局', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('2', '0', 'admin', '1', '1aa', '设置', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('3', '0', 'admin', '1', '2aa', '扩展', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('4', '2', 'admin', '1', '3aa', '站点设置', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('5', '2', 'admin', '1', '4aa', '水印设置', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('6', '5', 'admin', '1', '5aa', '小调设置', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('7', '5', 'admin', '1', '6aa', '大小设置', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('8', '1', 'admin', '1', '7aa', '菜单项1', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('9', '1', 'admin', '1', 'Menu/index', '菜单管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('10', '8', 'admin', '1', '9aa', '菜单项1.1', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('11', '10', 'admin', '1', '10aa', '菜单项1.1.惺惺惜惺惺', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('12', '11', 'admin', '1', 'Menu/mlist', '菜单项', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('14', '1', 'admin', '1', 'User/index', '用户管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('22', '3', 'admin', '1', '12312', '123123', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('33', '32', 'admin', '1', 'AuthManager/userGroup', '用户组管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('35', '1', 'admin', '1', 'Node/index', '节点管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('32', '1', 'admin', '1', 'AuthManager/index', '权限管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('36', '33', 'admin', '1', 'user-group-add', '增加', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('37', '33', 'admin', '1', 'user-group-edit', '修改', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('38', '36', 'admin', '1', 'test-1', '测试1', '1', '');

-- ----------------------------
-- Table structure for cj_config
-- ----------------------------
DROP TABLE IF EXISTS `cj_config`;
CREATE TABLE `cj_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '配置ID',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '配置名称',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '配置类型',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '配置说明',
  `group` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '配置分组',
  `extra` varchar(255) NOT NULL DEFAULT '' COMMENT '配置值',
  `remark` varchar(100) NOT NULL COMMENT '配置说明',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `value` text NOT NULL COMMENT '配置值',
  `sort` smallint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_config
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COMMENT='会员表\r\n@author   麦当苗儿\r\n@version  2013-05-27';

-- ----------------------------
-- Records of cj_member
-- ----------------------------
INSERT INTO `cj_member` VALUES ('15', '那一年', '0', '0000-00-00', '', '0', '0', '0', '0', '2130706433', '1387791641', '1');
INSERT INTO `cj_member` VALUES ('1', 'admin', '0', '0000-00-00', '', '0', '0', '0', '0', '2130706433', '1387874744', '1');
INSERT INTO `cj_member` VALUES ('16', 'imya', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('26', '12323', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('24', '12312312', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('17', '1111', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('23', 'wrqwerwr', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('22', '111111111111111', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('25', '12323', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('20', '2312312', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('21', 'ASDFDFDFDF', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('18', '12424', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('27', '123123zzzzzzzzzz', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('28', 'liunian', '0', '0000-00-00', '', '0', '0', '0', '0', '2130706433', '1387776203', '1');
INSERT INTO `cj_member` VALUES ('29', '这一城', '0', '0000-00-00', '', '0', '0', '0', '0', '2130706433', '1387779301', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_menu
-- ----------------------------
INSERT INTO `cj_menu` VALUES ('1', '0', '全局', '', 'icon-text_list_bullets', '0', null);
INSERT INTO `cj_menu` VALUES ('2', '0', '设置', null, 'icon-text_list_bullets', '0', null);
INSERT INTO `cj_menu` VALUES ('3', '0', '扩展', null, 'icon-text_list_bullets', '0', null);
INSERT INTO `cj_menu` VALUES ('4', '2', '站点设置', null, 'icon-text_list_bullets', '0', null);
INSERT INTO `cj_menu` VALUES ('5', '2', '水印设置', null, 'icon-text_list_bullets', '0', null);
INSERT INTO `cj_menu` VALUES ('6', '5', '小调设置', null, 'icon-text_list_bullets', '1', null);
INSERT INTO `cj_menu` VALUES ('7', '5', '大小设置', null, 'icon-text_list_bullets', '0', null);
INSERT INTO `cj_menu` VALUES ('8', '1', '菜单项1', null, 'icon-text_list_bullets', '0', null);
INSERT INTO `cj_menu` VALUES ('9', '1', '菜单管理', 'Menu/index', 'icon-text_list_bullets', '0', null);
INSERT INTO `cj_menu` VALUES ('10', '8', '菜单项1.1', null, 'icon-text_list_bullets', '0', null);
INSERT INTO `cj_menu` VALUES ('11', '10', '菜单项1.1.惺惺惜惺惺', '', 'icon-text_list_bullets', '1', null);
INSERT INTO `cj_menu` VALUES ('12', '11', '菜单项', 'Menu/mlist', 'icon-text_list_bullets', '0', null);
INSERT INTO `cj_menu` VALUES ('14', '1', '用户管理', 'User/index', 'icon-text_list_bullets', '0', null);
INSERT INTO `cj_menu` VALUES ('22', '3', '123123', '12312', 'icon-text_list_bullets', '0', null);
INSERT INTO `cj_menu` VALUES ('33', '32', '用户组管理', 'AuthManager/userGroup', 'icon-text_list_bullets', '0', null);
INSERT INTO `cj_menu` VALUES ('35', '1', '节点管理', 'Node/index', 'icon-text_list_bullets', '0', null);
INSERT INTO `cj_menu` VALUES ('32', '1', '权限管理', 'AuthManager/index', 'icon-text_list_bullets', '0', null);

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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of cj_ucenter_member
-- ----------------------------
INSERT INTO `cj_ucenter_member` VALUES ('15', '那一年', 'a129b591bd914facca99a0152a2d37aa', '1013385@163.com', '', '1386744697', '2130706433', '1387791641', '2130706433', '1386744697', '1');
INSERT INTO `cj_ucenter_member` VALUES ('1', 'admin', 'a129b591bd914facca99a0152a2d37aa', 'cjliunian@163.com', '', '1386661607', '2130706433', '1387874744', '2130706433', '1386661607', '1');
INSERT INTO `cj_ucenter_member` VALUES ('16', 'imya', 'a129b591bd914facca99a0152a2d37aa', '123456@163.com', '', '1386744916', '2130706433', '0', '0', '1386744916', '1');
INSERT INTO `cj_ucenter_member` VALUES ('18', '12424', 'a129b591bd914facca99a0152a2d37aa', '124@qq.com', '', '1386751177', '2130706433', '0', '0', '1386751177', '1');
INSERT INTO `cj_ucenter_member` VALUES ('23', 'wrqwerwr', 'a129b591bd914facca99a0152a2d37aa', 'mdfgg@163.com', '', '1386811471', '2130706433', '0', '0', '1386811471', '1');
INSERT INTO `cj_ucenter_member` VALUES ('25', '1111xxxxx', 'a129b591bd914facca99a0152a2d37aa', '12323123@qq.com', '', '1386820301', '2130706433', '0', '0', '1386820301', '1');
INSERT INTO `cj_ucenter_member` VALUES ('22', '111111111111111', 'a129b591bd914facca99a0152a2d37aa', '1xvsddsfd@163.com', '', '1386811439', '2130706433', '0', '0', '1386811439', '1');
INSERT INTO `cj_ucenter_member` VALUES ('21', 'ASDFDFDFDF', 'a129b591bd914facca99a0152a2d37aa', 'qqqqwerewrr@163.com', '', '1386751865', '2130706433', '0', '0', '1386751865', '1');
INSERT INTO `cj_ucenter_member` VALUES ('24', '12312312', 'a129b591bd914facca99a0152a2d37aa', '11111@qqwer.com', '', '1386811497', '2130706433', '0', '0', '1386811497', '1');
INSERT INTO `cj_ucenter_member` VALUES ('29', '这一城', 'aed2a19beabdf4b1666538bd57601254', '1233@163.com', '', '1387779261', '2130706433', '1387779301', '2130706433', '1387779261', '1');
INSERT INTO `cj_ucenter_member` VALUES ('20', '2312312', 'a129b591bd914facca99a0152a2d37aa', '11111@qq.com', '', '1386751815', '2130706433', '0', '0', '1386751815', '1');
INSERT INTO `cj_ucenter_member` VALUES ('17', '1111', 'a129b591bd914facca99a0152a2d37aa', 'wr@qq.com', '', '1386751160', '2130706433', '0', '0', '1386751160', '1');
INSERT INTO `cj_ucenter_member` VALUES ('28', 'liunian', 'a129b591bd914facca99a0152a2d37aa', 'ssff@163.com', '', '1387764249', '2130706433', '1387776203', '2130706433', '1387764249', '1');
INSERT INTO `cj_ucenter_member` VALUES ('27', '123123zzzzzzzzzz', 'a129b591bd914facca99a0152a2d37aa', '2424234@qqq.com', '', '1386820705', '2130706433', '0', '0', '1386820705', '1');

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
