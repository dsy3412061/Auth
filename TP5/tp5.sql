/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tp5

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-11-10 21:32:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tp_admin
-- ----------------------------
DROP TABLE IF EXISTS `tp_admin`;
CREATE TABLE `tp_admin` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` mediumint(3) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_admin
-- ----------------------------
INSERT INTO `tp_admin` VALUES ('8', 'admin123', 'e10adc3949ba59abbe56e057f20f883e', '1', '1509625793');
INSERT INTO `tp_admin` VALUES ('7', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', '0');

-- ----------------------------
-- Table structure for tp_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `tp_auth_group`;
CREATE TABLE `tp_auth_group` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL COMMENT '用户组名',
  `status` mediumint(5) NOT NULL,
  `rules` text NOT NULL COMMENT '规则',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_auth_group
-- ----------------------------
INSERT INTO `tp_auth_group` VALUES ('2', '超级管理员', '1', '1,3,2,6,7,9,10,11,13,12,19,14,15,16,17,18,20,21,22,23');
INSERT INTO `tp_auth_group` VALUES ('3', '管理员', '1', '9,14,15,16,17,18');
INSERT INTO `tp_auth_group` VALUES ('5', '用户组', '1', '');
INSERT INTO `tp_auth_group` VALUES ('6', '普通用户组', '1', '1,3,2,6,7');

-- ----------------------------
-- Table structure for tp_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `tp_auth_group_access`;
CREATE TABLE `tp_auth_group_access` (
  `uid` mediumint(9) unsigned NOT NULL,
  `group_id` mediumint(9) unsigned NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_auth_group_access
-- ----------------------------
INSERT INTO `tp_auth_group_access` VALUES ('4', '2', '0');
INSERT INTO `tp_auth_group_access` VALUES ('8', '3', '1509625793');
INSERT INTO `tp_auth_group_access` VALUES ('6', '3', '0');
INSERT INTO `tp_auth_group_access` VALUES ('7', '2', '0');

-- ----------------------------
-- Table structure for tp_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `tp_auth_rule`;
CREATE TABLE `tp_auth_rule` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL COMMENT '英文权限地址',
  `title` char(100) NOT NULL COMMENT '汉字权限地址',
  `type` tinyint(5) NOT NULL DEFAULT '1',
  `status` tinyint(5) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL,
  `level` tinyint(3) NOT NULL,
  `pid` mediumint(9) NOT NULL DEFAULT '0' COMMENT '上级权限',
  `sort` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=134 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_auth_rule
-- ----------------------------
INSERT INTO `tp_auth_rule` VALUES ('1', '系统设置', 'sys', '1', '1', '', '0', '0', '0');
INSERT INTO `tp_auth_rule` VALUES ('2', '友情链接', 'link', '1', '1', '', '0', '0', '0');
INSERT INTO `tp_auth_rule` VALUES ('3', '配置项', 'conf/conf', '1', '1', '', '1', '1', '1');
INSERT INTO `tp_auth_rule` VALUES ('11', '用户组添加', 'authgroup/add', '1', '1', '', '2', '10', '0');
INSERT INTO `tp_auth_rule` VALUES ('13', '用户组列表', 'authgroup/lst', '1', '1', '', '2', '10', '0');
INSERT INTO `tp_auth_rule` VALUES ('6', '链接列表', 'link/list', '1', '1', '', '1', '2', '10');
INSERT INTO `tp_auth_rule` VALUES ('7', '链接添加', 'link/add', '1', '1', '', '1', '2', '0');
INSERT INTO `tp_auth_rule` VALUES ('9', '权限管理', 'auth', '1', '1', '', '0', '0', '0');
INSERT INTO `tp_auth_rule` VALUES ('12', '用户组编辑', 'authgroup/edit', '1', '1', '', '2', '10', '0');
INSERT INTO `tp_auth_rule` VALUES ('10', '用户组管理', 'authgroup', '1', '1', '', '1', '9', '0');
INSERT INTO `tp_auth_rule` VALUES ('14', '管理员管理', 'admin', '1', '1', '', '1', '9', '0');
INSERT INTO `tp_auth_rule` VALUES ('15', '管理员列表', 'admin/lst', '1', '1', '', '2', '14', '0');
INSERT INTO `tp_auth_rule` VALUES ('16', '添加管理员', 'admin/add', '1', '1', '', '2', '14', '0');
INSERT INTO `tp_auth_rule` VALUES ('17', '编辑管理员', 'admin/edit', '1', '1', '', '2', '14', '0');
INSERT INTO `tp_auth_rule` VALUES ('18', '删除管理员', 'admin/del', '1', '1', '', '2', '14', '0');
INSERT INTO `tp_auth_rule` VALUES ('19', '用户组删除', 'authgroup/del', '1', '1', '', '2', '10', '0');
INSERT INTO `tp_auth_rule` VALUES ('20', '权限列表', 'authrule/lst', '1', '1', '', '1', '9', '0');
INSERT INTO `tp_auth_rule` VALUES ('21', '添加权限', 'authrule/add', '1', '1', '', '1', '9', '0');
INSERT INTO `tp_auth_rule` VALUES ('22', '权限删除', 'authrule/del', '1', '1', '', '1', '9', '0');
INSERT INTO `tp_auth_rule` VALUES ('23', '权限编辑', 'authrule/edit', '1', '1', '', '1', '9', '0');
