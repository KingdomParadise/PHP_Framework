/*
 Navicat Premium Data Transfer

 Source Server         : PHP7.3_root
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : webcontrol

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 08/01/2021 10:52:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_equipment
-- ----------------------------
DROP TABLE IF EXISTS `tb_equipment`;
CREATE TABLE `tb_equipment`  (
  `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `f_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `f_location` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `f_ip_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `f_create_time` datetime(0) NULL DEFAULT NULL,
  `f_del_flag` int NULL DEFAULT 0 COMMENT '0: not delete 1: delete',
  `f_state` int NULL DEFAULT 0 COMMENT '0: FAIL 1: OK',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_equipment
-- ----------------------------
INSERT INTO `tb_equipment` VALUES (1, 'firewall', 'werw', 'adfsd', '1.2.3.4', '2021-01-07 10:05:31', 0, 0);
INSERT INTO `tb_equipment` VALUES (2, 'switch', '3sdf', 'we2sdf', '1.4.2.4', '2021-01-07 10:06:29', 0, 1);
INSERT INTO `tb_equipment` VALUES (3, 'switch', '3sdfr', 'sdf', '1.4.2.4', '2021-01-07 10:06:48', 0, 1);
INSERT INTO `tb_equipment` VALUES (4, 'firewall', 'adva', 'sdfs', '1.5.2.8', '2021-01-07 10:08:36', 0, 0);
INSERT INTO `tb_equipment` VALUES (5, 'firewall', 'zcvz', 'wer', '15.15.55.10', '2021-01-07 10:09:14', 0, 0);
INSERT INTO `tb_equipment` VALUES (6, 'switch', '3sdfadfasdf', 'sdf', '13.42.35.122', '2021-01-07 10:10:32', 0, 1);
INSERT INTO `tb_equipment` VALUES (7, 'firewall', 'adfadf', 'werw', '42.3.2.45', '2021-01-07 10:11:01', 0, 0);
INSERT INTO `tb_equipment` VALUES (8, 'firewall', 'sdfs', 'sdfqw', '1.2.3.5', '2021-01-07 10:18:37', 0, 1);
INSERT INTO `tb_equipment` VALUES (9, 'firewall', 'advae2', 'sdfsva', '123.22.12.34', '2021-01-07 10:20:31', 0, 1);
INSERT INTO `tb_equipment` VALUES (10, 'firewall', 'First', 'Classroom', '192.168.1.75', '2021-01-07 10:21:14', 0, 1);
INSERT INTO `tb_equipment` VALUES (11, 'firewall', 'Second', 'Classroom', '192.168.1.76', '2021-01-07 10:21:55', 0, 1);
INSERT INTO `tb_equipment` VALUES (12, 'firewall', 'Third', 'Department', '12.52.123.55', '2021-01-07 10:22:24', 0, 0);
INSERT INTO `tb_equipment` VALUES (13, 'firewall', 'Fourth', 'Colledge', '1.5.22.123', '2021-01-07 10:22:56', 0, 0);
INSERT INTO `tb_equipment` VALUES (14, 'firewall', '6th', 'Colledge', '15.22.15.212', '2021-01-07 10:25:57', 0, 0);

-- ----------------------------
-- Table structure for tb_ip_port
-- ----------------------------
DROP TABLE IF EXISTS `tb_ip_port`;
CREATE TABLE `tb_ip_port`  (
  `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `f_port` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `f_vlan` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `f_create_time` datetime(0) NULL DEFAULT NULL,
  `f_del_flag` int NULL DEFAULT 0 COMMENT '0: not deleted  1: deleted',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_ip_port
-- ----------------------------
INSERT INTO `tb_ip_port` VALUES (1, '1.2.3.4', '1', 'core', '2021-01-08 12:18:37', 0);
INSERT INTO `tb_ip_port` VALUES (2, '1.2.3.4', '7', 'printing', '2021-01-08 12:19:10', 0);
INSERT INTO `tb_ip_port` VALUES (4, '1.2.3.4', '2', 'core', '2021-01-08 12:21:06', 0);
INSERT INTO `tb_ip_port` VALUES (5, '1.2.3.4', '3', 'core', '2021-01-08 12:21:14', 0);
INSERT INTO `tb_ip_port` VALUES (6, '1.2.3.4', '4', 'core', '2021-01-08 12:21:47', 0);
INSERT INTO `tb_ip_port` VALUES (7, '1.2.3.4', '5', 'core', '2021-01-08 12:23:47', 0);
INSERT INTO `tb_ip_port` VALUES (8, '1.2.3.4', '6', 'core', '2021-01-08 12:23:51', 0);
INSERT INTO `tb_ip_port` VALUES (9, '1.2.3.4', '16', 'core', '2021-01-08 12:24:41', 0);
INSERT INTO `tb_ip_port` VALUES (10, '192.168.1.76', '9', 'printing', '2021-01-08 12:24:49', 0);

-- ----------------------------
-- Table structure for tb_syslog
-- ----------------------------
DROP TABLE IF EXISTS `tb_syslog`;
CREATE TABLE `tb_syslog`  (
  `f_id` int NOT NULL,
  `f_ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `f_log_time` date NULL DEFAULT NULL,
  `f_del_flag` int NULL DEFAULT NULL COMMENT '0:not delete 1:delete',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_syslog
-- ----------------------------
INSERT INTO `tb_syslog` VALUES (1, '192.168.1.74', '2021-01-01', 0);
INSERT INTO `tb_syslog` VALUES (2, '192.168.1.74', '2021-01-03', 0);
INSERT INTO `tb_syslog` VALUES (3, '192.168.1.76', '2021-01-02', 0);
INSERT INTO `tb_syslog` VALUES (4, '192.168.1.76', '2021-01-06', 0);
INSERT INTO `tb_syslog` VALUES (5, '192.168.1.74', '2021-01-07', 0);
INSERT INTO `tb_syslog` VALUES (6, '192.168.1.74', '2021-01-01', 0);
INSERT INTO `tb_syslog` VALUES (7, '192.168.1.76', '2021-01-01', 0);
INSERT INTO `tb_syslog` VALUES (8, '192.168.1.74', '2021-01-05', 0);
INSERT INTO `tb_syslog` VALUES (9, '192.168.1.74', '2021-01-03', 0);
INSERT INTO `tb_syslog` VALUES (10, '192.168.1.76', '2021-01-02', 0);
INSERT INTO `tb_syslog` VALUES (11, '192.168.1.76', '2021-01-06', 0);
INSERT INTO `tb_syslog` VALUES (12, '192.168.1.74', '2021-01-07', 0);
INSERT INTO `tb_syslog` VALUES (13, '192.168.1.74', '2021-01-02', 0);
INSERT INTO `tb_syslog` VALUES (14, '192.168.1.76', '2021-01-01', 0);
INSERT INTO `tb_syslog` VALUES (15, '192.168.1.74', '2021-01-05', 0);
INSERT INTO `tb_syslog` VALUES (16, '192.168.1.74', '2021-01-03', 0);
INSERT INTO `tb_syslog` VALUES (17, '192.168.1.76', '2021-01-02', 0);
INSERT INTO `tb_syslog` VALUES (18, '192.168.1.76', '2021-01-06', 0);
INSERT INTO `tb_syslog` VALUES (19, '192.168.1.74', '2021-01-07', 0);
INSERT INTO `tb_syslog` VALUES (20, '192.168.1.74', '2021-01-02', 0);
INSERT INTO `tb_syslog` VALUES (21, '192.168.1.76', '2021-01-01', 0);
INSERT INTO `tb_syslog` VALUES (22, '192.168.1.74', '2021-01-05', 0);
INSERT INTO `tb_syslog` VALUES (23, '192.168.1.74', '2021-01-03', 0);
INSERT INTO `tb_syslog` VALUES (24, '192.168.1.76', '2021-01-02', 0);
INSERT INTO `tb_syslog` VALUES (25, '192.168.1.76', '2021-01-06', 0);
INSERT INTO `tb_syslog` VALUES (26, '192.168.1.74', '2021-01-07', 0);
INSERT INTO `tb_syslog` VALUES (27, '192.168.1.74', '2021-01-02', 0);
INSERT INTO `tb_syslog` VALUES (28, '192.168.1.76', '2021-01-01', 0);

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user`  (
  `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `f_pwd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `f_create_time` datetime(0) NULL DEFAULT NULL,
  `f_del_flag` int NULL DEFAULT 0,
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES (1, 'First', '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-07 08:55:25', 1);
INSERT INTO `tb_user` VALUES (2, 'Second', '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-07 08:56:33', 0);
INSERT INTO `tb_user` VALUES (3, 'Third', '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-07 09:04:12', 0);
INSERT INTO `tb_user` VALUES (4, 'First_test', '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-07 09:36:23', 0);
INSERT INTO `tb_user` VALUES (5, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-08 02:33:47', 1);
INSERT INTO `tb_user` VALUES (6, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-08 02:34:07', 0);

SET FOREIGN_KEY_CHECKS = 1;
