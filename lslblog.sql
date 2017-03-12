/*
Navicat MySQL Data Transfer

Source Server         : wamp
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : lslblog

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-02-24 18:09:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for lsl_article
-- ----------------------------
DROP TABLE IF EXISTS `lsl_article`;
CREATE TABLE `lsl_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_auther` int(11) DEFAULT NULL,
  `post_title` varchar(0) DEFAULT NULL,
  `post_content` text,
  `post_status` int(11) DEFAULT NULL COMMENT '1:已审 0:未审',
  `post_public` int(11) DEFAULT NULL COMMENT '1:公开 0:私人',
  `post_date` datetime DEFAULT NULL,
  `post_modified` datetime DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `smeta` text COMMENT '拓展字段',
  `post_hits` int(11) DEFAULT NULL,
  `post_like` int(11) DEFAULT NULL,
  `post_top` int(11) DEFAULT NULL COMMENT '1:置顶 0:非置顶',
  `post_summary` text COMMENT '摘要',
  `post_comment` int(11) DEFAULT NULL COMMENT '1:允许 0:不允许',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lsl_article
-- ----------------------------

-- ----------------------------
-- Table structure for lsl_category
-- ----------------------------
DROP TABLE IF EXISTS `lsl_category`;
CREATE TABLE `lsl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lsl_category
-- ----------------------------

-- ----------------------------
-- Table structure for lsl_user
-- ----------------------------
DROP TABLE IF EXISTS `lsl_user`;
CREATE TABLE `lsl_user` (
  `id` int(11) NOT NULL,
  `user_login` varchar(255) DEFAULT NULL,
  `user_pass` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_nicename` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `sex` int(11) DEFAULT NULL COMMENT '0:保密 1:男 2:女',
  `birthday` date DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL COMMENT '个性签名',
  `create_time` datetime DEFAULT NULL,
  `user_status` int(11) DEFAULT NULL COMMENT '0:禁用 1:正常 ',
  `coin` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL COMMENT '1:admin 2:审核员 3:用户',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lsl_user
-- ----------------------------
