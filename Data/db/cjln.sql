/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : cjln

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2014-01-07 18:03:35
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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_auth_group
-- ----------------------------
INSERT INTO `cj_auth_group` VALUES ('6', 'admin', '1', '管理组', '系统管理组拥有一定的权限', '1', '1,8,10,11,12,9,14,35,32,33,36,38,37,2,5,3,22,39');
INSERT INTO `cj_auth_group` VALUES ('7', 'admin', '1', '默认组', '默认组', '1', '1,8,10,11,12,9,43,14,35,32,33,36,38,37,3,22,39,44,45');
INSERT INTO `cj_auth_group` VALUES ('15', 'module', '1', '测试用户组一', '测试用户组一', '1', '2,4,3,22,39');
INSERT INTO `cj_auth_group` VALUES ('16', 'module', '1', '测试用户组二', '测试用户组二', '1', '');

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
INSERT INTO `cj_auth_group_access` VALUES ('16', '7');
INSERT INTO `cj_auth_group_access` VALUES ('26', '7');

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
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

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
INSERT INTO `cj_auth_rule` VALUES ('39', '3', 'admin', '1', '123', '123123', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('43', '9', 'Admin', '1', 'menu-add', '增加', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('41', '0', 'admin', '1', '654321', '963369', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('42', '41', 'admin', '1', '654321444', '78kjkjkjk', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('44', '0', 'admin', '1', 'Admin/Index/index', '后台首页', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('45', '44', 'admin', '1', 'Admin/Index/dashboard', '后台仪表盘', '1', '');

-- ----------------------------
-- Table structure for cj_channel
-- ----------------------------
DROP TABLE IF EXISTS `cj_channel`;
CREATE TABLE `cj_channel` (
  `chanid` int(11) NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `pid` int(11) DEFAULT NULL COMMENT '栏目上级ID',
  `name` varchar(100) DEFAULT NULL COMMENT '栏目名称',
  `url` varchar(255) DEFAULT NULL COMMENT '栏目地址URL',
  `status` tinyint(5) DEFAULT NULL COMMENT '栏目状态0禁用1正常',
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`chanid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_channel
-- ----------------------------
INSERT INTO `cj_channel` VALUES ('1', '0', '关于我们', 'Home/About/index', '1', '0');
INSERT INTO `cj_channel` VALUES ('2', '0', '资讯中心', 'Home/News/index', '1', '0');
INSERT INTO `cj_channel` VALUES ('3', '0', '集团产业', 'Home/Group/index', '1', '0');
INSERT INTO `cj_channel` VALUES ('4', '1', '集团概况', 'Home/About/index1', '1', '0');
INSERT INTO `cj_channel` VALUES ('5', '1', '组织架构', 'Home/About/index2', '1', '0');
INSERT INTO `cj_channel` VALUES ('6', '1', '资质荣誉', 'Home/About/index3555', '1', '0');
INSERT INTO `cj_channel` VALUES ('9', '0', '集团产业', 'Home/GroupCy/index', '1', '0');
INSERT INTO `cj_channel` VALUES ('10', '0', '联系我们', 'Home/ContusUs', '1', '0');

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
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COMMENT='会员表\r\n@author   麦当苗儿\r\n@version  2013-05-27';

-- ----------------------------
-- Records of cj_member
-- ----------------------------
INSERT INTO `cj_member` VALUES ('15', '那一年', '0', '0000-00-00', '', '0', '0', '0', '0', '2130706433', '1387791641', '1');
INSERT INTO `cj_member` VALUES ('1', 'admin', '0', '0000-00-00', '', '0', '0', '0', '0', '2130706433', '1388657010', '1');
INSERT INTO `cj_member` VALUES ('16', 'imya', '0', '0000-00-00', '', '0', '0', '0', '0', '2130706433', '1389077138', '1');
INSERT INTO `cj_member` VALUES ('26', '12323', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('24', '12312312', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('17', '1111', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('25', '12323', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('21', 'ASDFDFDFDF', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('18', '12424', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('27', '123123zzzzzzzzzz', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('28', 'liunian', '0', '0000-00-00', '', '0', '0', '0', '0', '2130706433', '1387776203', '1');
INSERT INTO `cj_member` VALUES ('29', '这一城', '0', '0000-00-00', '', '0', '0', '0', '0', '2130706433', '1387779301', '1');
INSERT INTO `cj_member` VALUES ('30', 'cy2014', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('31', '2014', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('32', '123123213', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('33', '123213', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('34', '1233aaaaa', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('35', '123123', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('36', '123123213123aaaa', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('37', '123123333', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('38', '01233', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('39', '这是一个测试用户', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('40', '0122211', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('41', 'bbcbcvb', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('42', 'zxc131323', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('43', '1232130234', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('44', 'imya11', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('45', '963123', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');

-- ----------------------------
-- Table structure for cj_menu
-- ----------------------------
DROP TABLE IF EXISTS `cj_menu`;
CREATE TABLE `cj_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '菜单所属父级,默认为0表示顶级',
  `name` varchar(50) NOT NULL COMMENT '菜单名称',
  `url` varchar(100) DEFAULT NULL COMMENT 'url地址',
  `iconCls` varchar(100) DEFAULT NULL COMMENT '图标',
  `status` tinyint(4) DEFAULT '1' COMMENT '状态默认0使用，1禁止',
  `remark` varchar(200) DEFAULT NULL COMMENT '菜单描述',
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_menu
-- ----------------------------
INSERT INTO `cj_menu` VALUES ('1', '0', '全局', '123', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('2', '0', '设置', '123', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('3', '0', '扩展', '123', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('67', '2', '站点设置', 'Config/index', 'icon-cologne-settings', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('8', '1', '菜单项1', '123', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('9', '1', '菜单管理', 'Menu/index', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('10', '8', '菜单项1.1', '13', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('45', '3', '11111', '123', '123213', '1', null, null);
INSERT INTO `cj_menu` VALUES ('14', '32', '用户管理', 'User/index', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('33', '32', '用户组管理', 'AuthManager/userGroup', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('35', '32', '节点管理', 'Node/index', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('32', '1', '权限管理', 'AuthManager/index', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('47', '8', '11111', '23232', '1111', '1', null, null);
INSERT INTO `cj_menu` VALUES ('50', '3', '123123', '123123', 'icon-standard-award-star-gold-1', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('51', '3', '123', '12312', 'icon-hamburg-bug', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('53', '3', '测试菜单', '12323', 'icon-standard-application-view-columns', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('54', '3', '测试菜单二', '12323', 'icon-munich-product-1', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('55', '45', '12123', '1231221', 'icon-standard-application-side-list', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('57', '58', '123123', '1232', 'icon-standard-application-split', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('58', '55', '111111', '123213', 'icon-standard-arrow-refresh-small', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('59', '58', '123213', '123', '', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('60', '53', '1232', '13213', '', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('61', '10', '1232', '12321', '', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('62', '58', '123', '1111', 'icon-standard-application-side-tree', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('63', '61', '123', '123213', 'icon-standard-book-addresses', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('64', '63', '123213', '1321vv', 'icon-standard-application-split', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('65', '0', '内容', 'top-menu', 'icon-standard-text-list-bullets', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('66', '65', '栏目管理', 'Channel/index', 'icon-standard-text-list-bullets', '1', null, '0');

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
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of cj_ucenter_member
-- ----------------------------
INSERT INTO `cj_ucenter_member` VALUES ('15', '那一年', 'a129b591bd914facca99a0152a2d37aa', '1013385@163.com', '', '1386744697', '2130706433', '1387791641', '2130706433', '1386744697', '1');
INSERT INTO `cj_ucenter_member` VALUES ('1', 'admin', 'a129b591bd914facca99a0152a2d37aa', 'cjliunian@163.com', '', '1386661607', '2130706433', '1388657010', '2130706433', '1386661607', '1');
INSERT INTO `cj_ucenter_member` VALUES ('16', 'imya', 'a129b591bd914facca99a0152a2d37aa', '123456@163.com', '', '1386744916', '2130706433', '1389077138', '2130706433', '1386744916', '1');
INSERT INTO `cj_ucenter_member` VALUES ('18', '12424', 'a129b591bd914facca99a0152a2d37aa', '124@qq.com', '', '1386751177', '2130706433', '0', '0', '1386751177', '1');
INSERT INTO `cj_ucenter_member` VALUES ('25', '1111xxxxx', 'a129b591bd914facca99a0152a2d37aa', '12323123@qq.com', '', '1386820301', '2130706433', '0', '0', '1386820301', '1');
INSERT INTO `cj_ucenter_member` VALUES ('21', 'ASDFDFDFDF', 'a129b591bd914facca99a0152a2d37aa', 'qqqqwerewrr@163.com', '', '1386751865', '2130706433', '0', '0', '1386751865', '1');
INSERT INTO `cj_ucenter_member` VALUES ('24', '12312312', 'a129b591bd914facca99a0152a2d37aa', '11111@qqwer.com', '', '1386811497', '2130706433', '0', '0', '1386811497', '1');
INSERT INTO `cj_ucenter_member` VALUES ('29', '这一城', 'aed2a19beabdf4b1666538bd57601254', '1233@163.com', '', '1387779261', '2130706433', '1387779301', '2130706433', '1387779261', '1');
INSERT INTO `cj_ucenter_member` VALUES ('17', '1111', 'a129b591bd914facca99a0152a2d37aa', 'wr@qq.com', '', '1386751160', '2130706433', '0', '0', '1386751160', '1');
INSERT INTO `cj_ucenter_member` VALUES ('28', 'liunian', 'a129b591bd914facca99a0152a2d37aa', 'ssff@163.com', '', '1387764249', '2130706433', '1387776203', '2130706433', '1387764249', '1');
INSERT INTO `cj_ucenter_member` VALUES ('27', '123123zzzzzzzzzz', 'a129b591bd914facca99a0152a2d37aa', '2424234@qqq.com', '', '1386820705', '2130706433', '0', '0', '1386820705', '1');
INSERT INTO `cj_ucenter_member` VALUES ('30', 'cy2014', 'a129b591bd914facca99a0152a2d37aa', '12323@qq.com', '', '1388552188', '2130706433', '0', '0', '1388552188', '1');
INSERT INTO `cj_ucenter_member` VALUES ('31', '2014', 'a129b591bd914facca99a0152a2d37aa', '123123123@qq.com', '', '1388552273', '2130706433', '0', '0', '1388552273', '1');
INSERT INTO `cj_ucenter_member` VALUES ('32', '123123213', 'a129b591bd914facca99a0152a2d37aa', '111@123.com', '', '1388552444', '2130706433', '0', '0', '1388552444', '1');
INSERT INTO `cj_ucenter_member` VALUES ('33', '123213', 'a129b591bd914facca99a0152a2d37aa', '1232@qq.com', '', '1388552509', '2130706433', '0', '0', '1388552509', '1');
INSERT INTO `cj_ucenter_member` VALUES ('34', '1233aaaaa', 'a129b591bd914facca99a0152a2d37aa', 'qewee@xx.com', '', '1388552550', '2130706433', '0', '0', '1388552550', '1');
INSERT INTO `cj_ucenter_member` VALUES ('35', '123123', 'a129b591bd914facca99a0152a2d37aa', '132132@qq.com', '', '1388553144', '2130706433', '0', '0', '1388553144', '1');
INSERT INTO `cj_ucenter_member` VALUES ('36', '123123213123aaaa', 'a129b591bd914facca99a0152a2d37aa', 'sdfsfdf@qq.com', '', '1388553578', '2130706433', '0', '0', '1388553578', '1');
INSERT INTO `cj_ucenter_member` VALUES ('37', '123123333', 'a129b591bd914facca99a0152a2d37aa', 'sdf@qq.com', '', '1388553651', '2130706433', '0', '0', '1388553651', '1');
INSERT INTO `cj_ucenter_member` VALUES ('38', '01233', 'a129b591bd914facca99a0152a2d37aa', '456@qq.com', '', '1388553808', '2130706433', '0', '0', '1388553808', '1');
INSERT INTO `cj_ucenter_member` VALUES ('39', '这是一个测试用户', 'a129b591bd914facca99a0152a2d37aa', 'qwrw@qq.com', '', '1388553851', '2130706433', '0', '0', '1388553851', '1');
INSERT INTO `cj_ucenter_member` VALUES ('40', '0122211', 'a129b591bd914facca99a0152a2d37aa', 'sfsf@qq.com', '', '1388553919', '2130706433', '0', '0', '1388553919', '1');
INSERT INTO `cj_ucenter_member` VALUES ('41', 'bbcbcvb', 'a129b591bd914facca99a0152a2d37aa', '78879@qq.com', '', '1388553998', '2130706433', '0', '0', '1388553998', '1');
INSERT INTO `cj_ucenter_member` VALUES ('42', 'zxc131323', 'a129b591bd914facca99a0152a2d37aa', '12323444@ss.com', '', '1388554156', '2130706433', '0', '0', '1388554156', '1');
INSERT INTO `cj_ucenter_member` VALUES ('43', '1232130234', 'a129b591bd914facca99a0152a2d37aa', '8881232@qq.com', '', '1388554228', '2130706433', '0', '0', '1388554228', '1');
INSERT INTO `cj_ucenter_member` VALUES ('44', 'imya11', 'a129b591bd914facca99a0152a2d37aa', '87754466@qq.com', '', '1388554289', '2130706433', '0', '0', '1388554289', '1');
INSERT INTO `cj_ucenter_member` VALUES ('45', '963123', 'a129b591bd914facca99a0152a2d37aa', '988878798454@qq.com', '', '1388554322', '2130706433', '0', '0', '1388554322', '1');

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
