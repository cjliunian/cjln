/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : cjln

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2013-12-19 18:07:19
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
INSERT INTO `cj_auth_group` VALUES ('6', 'admin', '1', '管理组', '系统管理组拥有一定的权限', '1', '');
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
) ENGINE=MyISAM AUTO_INCREMENT=220 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_auth_rule
-- ----------------------------
INSERT INTO `cj_auth_rule` VALUES ('1', '0', 'admin', '2', 'Admin/Index/index', '首页', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('2', '0', 'admin', '2', 'Admin/Article/mydocument', '内容', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('3', '0', 'admin', '2', 'Admin/User/index', '用户', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('4', '0', 'admin', '2', 'Admin/Addons/index', '扩展', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('5', '0', 'admin', '2', 'Admin/Config/group', '系统', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('6', '0', 'admin', '1', 'Admin/Index/index', '首页', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('7', '0', 'admin', '1', 'Admin/article/add', '新增', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('8', '0', 'admin', '1', 'Admin/article/edit', '编辑', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('9', '0', 'admin', '1', 'Admin/article/setStatus', '改变状态', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('10', '0', 'admin', '1', 'Admin/article/update', '保存', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('11', '0', 'admin', '1', 'Admin/article/autoSave', '保存草稿', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('12', '2', 'admin', '1', 'Admin/article/move', '移动', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('13', '2', 'admin', '1', 'Admin/article/copy', '复制', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('14', '2', 'admin', '1', 'Admin/article/paste', '粘贴', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('15', '2', 'admin', '1', 'Admin/article/permit', '还原', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('16', '2', 'admin', '1', 'Admin/article/clear', '清空', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('17', '0', 'admin', '1', 'Admin/article/index', '文档列表', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('18', '0', 'admin', '1', 'Admin/article/recycle', '回收站', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('19', '3', 'admin', '1', 'Admin/User/addaction', '新增用户行为', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('20', '3', 'admin', '1', 'Admin/User/editaction', '编辑用户行为', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('21', '3', 'admin', '1', 'Admin/User/saveAction', '保存用户行为', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('22', '0', 'admin', '1', 'Admin/User/setStatus', '变更行为状态', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('23', '0', 'admin', '1', 'Admin/User/changeStatus?method=forbidUser', '禁用会员', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('24', '0', 'admin', '1', 'Admin/User/changeStatus?method=resumeUser', '启用会员', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('25', '0', 'admin', '1', 'Admin/User/changeStatus?method=deleteUser', '删除会员', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('26', '0', 'admin', '1', 'Admin/User/index', '用户信息', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('27', '0', 'admin', '1', 'Admin/User/action', '用户行为', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('28', '0', 'admin', '1', 'Admin/AuthManager/changeStatus?method=deleteGroup', '删除', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('29', '0', 'admin', '1', 'Admin/AuthManager/changeStatus?method=forbidGroup', '禁用', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('30', '0', 'admin', '1', 'Admin/AuthManager/changeStatus?method=resumeGroup', '恢复', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('31', '0', 'admin', '1', 'Admin/AuthManager/createGroup', '新增', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('32', '0', 'admin', '1', 'Admin/AuthManager/editGroup', '编辑', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('33', '0', 'admin', '1', 'Admin/AuthManager/writeGroup', '保存用户组', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('34', '0', 'admin', '1', 'Admin/AuthManager/group', '授权', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('35', '0', 'admin', '1', 'Admin/AuthManager/access', '访问授权', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('36', '0', 'admin', '1', 'Admin/AuthManager/user', '成员授权', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('37', '0', 'admin', '1', 'Admin/AuthManager/removeFromGroup', '解除授权', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('38', '0', 'admin', '1', 'Admin/AuthManager/addToGroup', '保存成员授权', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('39', '0', 'admin', '1', 'Admin/AuthManager/category', '分类授权', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('40', '0', 'admin', '1', 'Admin/AuthManager/addToCategory', '保存分类授权', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('41', '0', 'admin', '1', 'Admin/AuthManager/index', '权限管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('42', '0', 'admin', '1', 'Admin/Addons/create', '创建', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('43', '0', 'admin', '1', 'Admin/Addons/checkForm', '检测创建', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('44', '0', 'admin', '1', 'Admin/Addons/preview', '预览', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('45', '0', 'admin', '1', 'Admin/Addons/build', '快速生成插件', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('46', '0', 'admin', '1', 'Admin/Addons/config', '设置', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('47', '0', 'admin', '1', 'Admin/Addons/disable', '禁用', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('48', '0', 'admin', '1', 'Admin/Addons/enable', '启用', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('49', '0', 'admin', '1', 'Admin/Addons/install', '安装', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('50', '0', 'admin', '1', 'Admin/Addons/uninstall', '卸载', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('51', '0', 'admin', '1', 'Admin/Addons/saveconfig', '更新配置', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('52', '0', 'admin', '1', 'Admin/Addons/adminList', '插件后台列表', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('53', '0', 'admin', '1', 'Admin/Addons/execute', 'URL方式访问插件', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('54', '0', 'admin', '1', 'Admin/Addons/index', '插件管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('55', '0', 'admin', '1', 'Admin/Addons/hooks', '钩子管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('56', '0', 'admin', '1', 'Admin/model/add', '新增', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('57', '0', 'admin', '1', 'Admin/model/edit', '编辑', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('58', '0', 'admin', '1', 'Admin/model/setStatus', '改变状态', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('59', '0', 'admin', '1', 'Admin/model/update', '保存数据', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('60', '0', 'admin', '1', 'Admin/Model/index', '模型管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('61', '0', 'admin', '1', 'Admin/Config/edit', '编辑', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('62', '0', 'admin', '1', 'Admin/Config/del', '删除', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('63', '0', 'admin', '1', 'Admin/Config/add', '新增', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('64', '0', 'admin', '1', 'Admin/Config/save', '保存', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('65', '0', 'admin', '1', 'Admin/Config/group', '网站设置', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('66', '0', 'admin', '1', 'Admin/Config/index', '配置管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('67', '0', 'admin', '1', 'Admin/Channel/add', '新增', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('68', '0', 'admin', '1', 'Admin/Channel/edit', '编辑', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('69', '0', 'admin', '1', 'Admin/Channel/del', '删除', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('70', '0', 'admin', '1', 'Admin/Channel/index', '导航管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('71', '0', 'admin', '1', 'Admin/Category/edit', '编辑', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('72', '0', 'admin', '1', 'Admin/Category/add', '新增', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('73', '0', 'admin', '1', 'Admin/Category/remove', '删除', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('74', '0', 'admin', '1', 'Admin/Category/index', '分类管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('75', '0', 'admin', '1', 'Admin/file/upload', '上传控件', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('76', '0', 'admin', '1', 'Admin/file/uploadPicture', '上传图片', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('77', '0', 'admin', '1', 'Admin/file/download', '下载', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('94', '0', 'admin', '1', 'Admin/AuthManager/modelauth', '模型授权', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('79', '0', 'admin', '1', 'Admin/article/batchOperate', '导入', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('80', '0', 'admin', '1', 'Admin/Database/index?type=export', '备份数据库', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('81', '0', 'admin', '1', 'Admin/Database/index?type=import', '还原数据库', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('82', '0', 'admin', '1', 'Admin/Database/export', '备份', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('83', '0', 'admin', '1', 'Admin/Database/optimize', '优化表', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('84', '0', 'admin', '1', 'Admin/Database/repair', '修复表', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('86', '0', 'admin', '1', 'Admin/Database/import', '恢复', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('87', '0', 'admin', '1', 'Admin/Database/del', '删除', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('88', '0', 'admin', '1', 'Admin/User/add', '新增用户', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('89', '0', 'admin', '1', 'Admin/Attribute/index', '属性管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('90', '0', 'admin', '1', 'Admin/Attribute/add', '新增', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('91', '0', 'admin', '1', 'Admin/Attribute/edit', '编辑', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('92', '0', 'admin', '1', 'Admin/Attribute/setStatus', '改变状态', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('93', '0', 'admin', '1', 'Admin/Attribute/update', '保存数据', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('95', '0', 'admin', '1', 'Admin/AuthManager/addToModel', '保存模型授权', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('96', '0', 'admin', '1', 'Admin/Category/move', '移动', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('97', '0', 'admin', '1', 'Admin/Category/merge', '合并', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('98', '0', 'admin', '1', 'Admin/Config/menu', '后台菜单管理', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('99', '0', 'admin', '1', 'Admin/Article/mydocument', '内容', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('100', '0', 'admin', '1', 'Admin/Menu/index', '菜单管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('101', '0', 'admin', '1', 'Admin/other', '其他', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('102', '0', 'admin', '1', 'Admin/Menu/add', '新增', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('103', '0', 'admin', '1', 'Admin/Menu/edit', '编辑', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('104', '0', 'admin', '1', 'Admin/Think/lists?model=article', '文章管理', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('105', '0', 'admin', '1', 'Admin/Think/lists?model=download', '下载管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('106', '0', 'admin', '1', 'Admin/Think/lists?model=config', '配置管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('107', '0', 'admin', '1', 'Admin/Action/actionlog', '行为日志', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('108', '0', 'admin', '1', 'Admin/User/updatePassword', '修改密码', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('109', '0', 'admin', '1', 'Admin/User/updateNickname', '修改昵称', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('110', '0', 'admin', '1', 'Admin/action/edit', '查看行为日志', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('205', '0', 'admin', '1', 'Admin/think/add', '新增数据', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('111', '0', 'admin', '2', 'Admin/article/index', '文档列表', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('112', '0', 'admin', '2', 'Admin/article/add', '新增', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('113', '0', 'admin', '2', 'Admin/article/edit', '编辑', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('114', '0', 'admin', '2', 'Admin/article/setStatus', '改变状态', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('115', '0', 'admin', '2', 'Admin/article/update', '保存', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('116', '0', 'admin', '2', 'Admin/article/autoSave', '保存草稿', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('117', '0', 'admin', '2', 'Admin/article/move', '移动', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('118', '0', 'admin', '2', 'Admin/article/copy', '复制', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('119', '0', 'admin', '2', 'Admin/article/paste', '粘贴', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('120', '0', 'admin', '2', 'Admin/article/batchOperate', '导入', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('121', '0', 'admin', '2', 'Admin/article/recycle', '回收站', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('122', '0', 'admin', '2', 'Admin/article/permit', '还原', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('123', '0', 'admin', '2', 'Admin/article/clear', '清空', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('124', '0', 'admin', '2', 'Admin/User/add', '新增用户', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('125', '0', 'admin', '2', 'Admin/User/action', '用户行为', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('126', '0', 'admin', '2', 'Admin/User/addAction', '新增用户行为', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('127', '0', 'admin', '2', 'Admin/User/editAction', '编辑用户行为', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('128', '0', 'admin', '2', 'Admin/User/saveAction', '保存用户行为', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('129', '0', 'admin', '2', 'Admin/User/setStatus', '变更行为状态', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('130', '0', 'admin', '2', 'Admin/User/changeStatus?method=forbidUser', '禁用会员', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('131', '0', 'admin', '2', 'Admin/User/changeStatus?method=resumeUser', '启用会员', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('132', '0', 'admin', '2', 'Admin/User/changeStatus?method=deleteUser', '删除会员', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('133', '0', 'admin', '2', 'Admin/AuthManager/index', '权限管理', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('134', '0', 'admin', '2', 'Admin/AuthManager/changeStatus?method=deleteGroup', '删除', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('135', '0', 'admin', '2', 'Admin/AuthManager/changeStatus?method=forbidGroup', '禁用', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('136', '0', 'admin', '2', 'Admin/AuthManager/changeStatus?method=resumeGroup', '恢复', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('137', '0', 'admin', '2', 'Admin/AuthManager/createGroup', '新增', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('138', '0', 'admin', '2', 'Admin/AuthManager/editGroup', '编辑', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('139', '0', 'admin', '2', 'Admin/AuthManager/writeGroup', '保存用户组', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('140', '0', 'admin', '2', 'Admin/AuthManager/group', '授权', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('141', '0', 'admin', '2', 'Admin/AuthManager/access', '访问授权', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('142', '0', 'admin', '2', 'Admin/AuthManager/user', '成员授权', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('143', '0', 'admin', '2', 'Admin/AuthManager/removeFromGroup', '解除授权', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('144', '0', 'admin', '2', 'Admin/AuthManager/addToGroup', '保存成员授权', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('145', '0', 'admin', '2', 'Admin/AuthManager/category', '分类授权', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('146', '0', 'admin', '2', 'Admin/AuthManager/addToCategory', '保存分类授权', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('147', '0', 'admin', '2', 'Admin/AuthManager/modelauth', '模型授权', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('148', '0', 'admin', '2', 'Admin/AuthManager/addToModel', '保存模型授权', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('149', '0', 'admin', '2', 'Admin/Addons/create', '创建', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('150', '0', 'admin', '2', 'Admin/Addons/checkForm', '检测创建', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('151', '0', 'admin', '2', 'Admin/Addons/preview', '预览', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('152', '0', 'admin', '2', 'Admin/Addons/build', '快速生成插件', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('153', '0', 'admin', '2', 'Admin/Addons/config', '设置', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('154', '0', 'admin', '2', 'Admin/Addons/disable', '禁用', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('155', '0', 'admin', '2', 'Admin/Addons/enable', '启用', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('156', '0', 'admin', '2', 'Admin/Addons/install', '安装', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('157', '0', 'admin', '2', 'Admin/Addons/uninstall', '卸载', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('158', '0', 'admin', '2', 'Admin/Addons/saveconfig', '更新配置', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('159', '0', 'admin', '2', 'Admin/Addons/adminList', '插件后台列表', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('160', '0', 'admin', '2', 'Admin/Addons/execute', 'URL方式访问插件', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('161', '0', 'admin', '2', 'Admin/Addons/hooks', '钩子管理', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('162', '0', 'admin', '2', 'Admin/Model/index', '模型管理', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('163', '0', 'admin', '2', 'Admin/model/add', '新增', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('164', '0', 'admin', '2', 'Admin/model/edit', '编辑', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('165', '0', 'admin', '2', 'Admin/model/setStatus', '改变状态', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('166', '0', 'admin', '2', 'Admin/model/update', '保存数据', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('167', '0', 'admin', '2', 'Admin/Attribute/index', '属性管理', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('168', '0', 'admin', '2', 'Admin/Attribute/add', '新增', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('169', '0', 'admin', '2', 'Admin/Attribute/edit', '编辑', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('170', '0', 'admin', '2', 'Admin/Attribute/setStatus', '改变状态', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('171', '0', 'admin', '2', 'Admin/Attribute/update', '保存数据', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('172', '0', 'admin', '2', 'Admin/Config/index', '配置管理', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('173', '0', 'admin', '2', 'Admin/Config/edit', '编辑', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('174', '0', 'admin', '2', 'Admin/Config/del', '删除', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('175', '0', 'admin', '2', 'Admin/Config/add', '新增', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('176', '0', 'admin', '2', 'Admin/Config/save', '保存', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('177', '0', 'admin', '2', 'Admin/Menu/index', '菜单管理', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('178', '0', 'admin', '2', 'Admin/Channel/index', '导航管理', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('179', '0', 'admin', '2', 'Admin/Channel/add', '新增', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('180', '0', 'admin', '2', 'Admin/Channel/edit', '编辑', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('181', '0', 'admin', '2', 'Admin/Channel/del', '删除', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('182', '0', 'admin', '2', 'Admin/Category/index', '分类管理', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('183', '0', 'admin', '2', 'Admin/Category/edit', '编辑', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('184', '0', 'admin', '2', 'Admin/Category/add', '新增', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('185', '0', 'admin', '2', 'Admin/Category/remove', '删除', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('186', '0', 'admin', '2', 'Admin/Category/move', '移动', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('187', '0', 'admin', '2', 'Admin/Category/merge', '合并', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('188', '0', 'admin', '2', 'Admin/Database/index?type=export', '备份数据库', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('189', '0', 'admin', '2', 'Admin/Database/export', '备份', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('190', '0', 'admin', '2', 'Admin/Database/optimize', '优化表', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('191', '0', 'admin', '2', 'Admin/Database/repair', '修复表', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('192', '0', 'admin', '2', 'Admin/Database/index?type=import', '还原数据库', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('193', '0', 'admin', '2', 'Admin/Database/import', '恢复', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('194', '0', 'admin', '2', 'Admin/Database/del', '删除', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('195', '0', 'admin', '2', 'Admin/other', '其他', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('196', '0', 'admin', '2', 'Admin/Menu/add', '新增', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('197', '0', 'admin', '2', 'Admin/Menu/edit', '编辑', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('198', '0', 'admin', '2', 'Admin/Think/lists?model=article', '应用', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('199', '0', 'admin', '2', 'Admin/Think/lists?model=download', '下载管理', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('200', '0', 'admin', '2', 'Admin/Think/lists?model=config', '应用', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('201', '0', 'admin', '2', 'Admin/Action/actionlog', '行为日志', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('202', '0', 'admin', '2', 'Admin/User/updatePassword', '修改密码', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('203', '0', 'admin', '2', 'Admin/User/updateNickname', '修改昵称', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('204', '0', 'admin', '2', 'Admin/action/edit', '查看行为日志', '-1', '');
INSERT INTO `cj_auth_rule` VALUES ('206', '0', 'admin', '1', 'Admin/think/edit', '编辑数据', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('207', '0', 'admin', '1', 'Admin/Menu/import', '导入', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('208', '0', 'admin', '1', 'Admin/Model/generate', '生成', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('209', '0', 'admin', '1', 'Admin/Addons/addHook', '新增钩子', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('210', '0', 'admin', '1', 'Admin/Addons/edithook', '编辑钩子', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('211', '0', 'admin', '1', 'Admin/Article/sort', '文档排序', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('212', '0', 'admin', '1', 'Admin/Config/sort', '排序', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('213', '0', 'admin', '1', 'Admin/Menu/sort', '排序', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('214', '0', 'admin', '1', 'Admin/Channel/sort', '排序', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('215', '0', 'admin', '1', 'Admin/Category/operate/type/move', '移动', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('216', '0', 'admin', '1', 'Admin/Category/operate/type/merge', '合并', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('217', '1', 'admin', '1', '23', '2323', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('219', '217', 'admin', '1', 'vvvsdfsdf', 'aaaaaa', '1', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COMMENT='会员表\r\n@author   麦当苗儿\r\n@version  2013-05-27';

-- ----------------------------
-- Records of cj_member
-- ----------------------------
INSERT INTO `cj_member` VALUES ('15', '那一年', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('4', '错过丶流年', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
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
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of cj_ucenter_member
-- ----------------------------
INSERT INTO `cj_ucenter_member` VALUES ('15', '那一年', 'a129b591bd914facca99a0152a2d37aa', '1013385@163.com', '', '1386744697', '2130706433', '0', '0', '1386744697', '1');
INSERT INTO `cj_ucenter_member` VALUES ('4', '错过丶流年', 'fdcc07798c1e03ed1f4d769d668e4863', 'cjliunian@163.com', '', '1386661607', '2130706433', '0', '0', '1386661607', '1');
INSERT INTO `cj_ucenter_member` VALUES ('16', 'imya', 'a129b591bd914facca99a0152a2d37aa', '123456@163.com', '', '1386744916', '2130706433', '0', '0', '1386744916', '1');
INSERT INTO `cj_ucenter_member` VALUES ('18', '12424', 'a129b591bd914facca99a0152a2d37aa', '124@qq.com', '', '1386751177', '2130706433', '0', '0', '1386751177', '1');
INSERT INTO `cj_ucenter_member` VALUES ('23', 'wrqwerwr', 'a129b591bd914facca99a0152a2d37aa', 'mdfgg@163.com', '', '1386811471', '2130706433', '0', '0', '1386811471', '1');
INSERT INTO `cj_ucenter_member` VALUES ('25', '1111xxxxx', 'a129b591bd914facca99a0152a2d37aa', '12323123@qq.com', '', '1386820301', '2130706433', '0', '0', '1386820301', '1');
INSERT INTO `cj_ucenter_member` VALUES ('22', '111111111111111', 'a129b591bd914facca99a0152a2d37aa', '1xvsddsfd@163.com', '', '1386811439', '2130706433', '0', '0', '1386811439', '1');
INSERT INTO `cj_ucenter_member` VALUES ('21', 'ASDFDFDFDF', 'a129b591bd914facca99a0152a2d37aa', 'qqqqwerewrr@163.com', '', '1386751865', '2130706433', '0', '0', '1386751865', '1');
INSERT INTO `cj_ucenter_member` VALUES ('24', '12312312', 'a129b591bd914facca99a0152a2d37aa', '11111@qqwer.com', '', '1386811497', '2130706433', '0', '0', '1386811497', '1');
INSERT INTO `cj_ucenter_member` VALUES ('20', '2312312', 'a129b591bd914facca99a0152a2d37aa', '11111@qq.com', '', '1386751815', '2130706433', '0', '0', '1386751815', '1');
INSERT INTO `cj_ucenter_member` VALUES ('17', '1111', 'a129b591bd914facca99a0152a2d37aa', 'wr@qq.com', '', '1386751160', '2130706433', '0', '0', '1386751160', '1');
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
