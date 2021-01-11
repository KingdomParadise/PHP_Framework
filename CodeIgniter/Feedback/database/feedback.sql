/*
 Navicat Premium Data Transfer

 Source Server         : PHP7.3_root
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : feedback

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 11/01/2021 08:30:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_feedbacks
-- ----------------------------
DROP TABLE IF EXISTS `tb_feedbacks`;
CREATE TABLE `tb_feedbacks`  (
  `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_form_id` int NULL DEFAULT NULL COMMENT 'tb_forms f_id',
  `f_field_id` int NULL DEFAULT NULL COMMENT 'tb_fields f_id',
  `f_combo_val` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  `f_text_val` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Null:not text, Not Null: text',
  `f_create_date` datetime(0) NULL DEFAULT NULL COMMENT 'Feedback created datetime',
  `f_del_date` datetime(0) NULL DEFAULT NULL COMMENT 'Feedback deleted datetime',
  `f_del_flag` int NULL DEFAULT 0 COMMENT '0:Not Deleted 1:Deleted',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_feedbacks
-- ----------------------------

-- ----------------------------
-- Table structure for tb_fields
-- ----------------------------
DROP TABLE IF EXISTS `tb_fields`;
CREATE TABLE `tb_fields`  (
  `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_form_id` int NULL DEFAULT NULL COMMENT 'Form\'s f_id',
  `f_field_type` int NULL DEFAULT NULL COMMENT '0:section 1:input 2:radio 3:text 4:check',
  `f_no` int NULL DEFAULT NULL COMMENT 'No to show',
  `f_create_date` datetime(0) NULL DEFAULT NULL COMMENT 'Field created datetime',
  `f_del_date` datetime(0) NULL DEFAULT NULL COMMENT 'Fiedl deleted datetime',
  `f_del_flag` int NULL DEFAULT NULL COMMENT '0:Not deleted 1: Deleted',
  `f_section_content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `f_label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `f_section_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_fields
-- ----------------------------
INSERT INTO `tb_fields` VALUES (1, 1, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'SERVICE الخدمة', NULL, 1);
INSERT INTO `tb_fields` VALUES (2, 1, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 'Attitude & Friendliness الاداء واللطف', 1);
INSERT INTO `tb_fields` VALUES (3, 1, 2, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 'Attentiveness الانتباه', 1);
INSERT INTO `tb_fields` VALUES (4, 1, 2, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 'Product knowledge المعرفة', 1);
INSERT INTO `tb_fields` VALUES (5, 1, 2, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', 'Grooming الهندام', 1);
INSERT INTO `tb_fields` VALUES (6, 1, 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'FOOD الطعام', NULL, 2);
INSERT INTO `tb_fields` VALUES (7, 1, 2, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, 'Menu variety تنوع الاطباق', 2);
INSERT INTO `tb_fields` VALUES (8, 1, 2, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, 'Beverage selection تنوع المشروبات', 2);
INSERT INTO `tb_fields` VALUES (9, 1, 2, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, 'Taste المذاق', 2);
INSERT INTO `tb_fields` VALUES (10, 1, 2, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, 'Portion size حجم الطبق', 2);
INSERT INTO `tb_fields` VALUES (11, 1, 2, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, 'Quality & freshness الجودة والنوعية', 2);
INSERT INTO `tb_fields` VALUES (12, 1, 1, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, 'You were dining at رقم الطاولة', NULL);
INSERT INTO `tb_fields` VALUES (13, 1, 1, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, 'Full name الاسم كامل*', NULL);
INSERT INTO `tb_fields` VALUES (14, 1, 1, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, 'Email االبريد الالكتروني*', NULL);
INSERT INTO `tb_fields` VALUES (15, 1, 1, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, 'Mobile الجوال*', NULL);
INSERT INTO `tb_fields` VALUES (16, 1, 3, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, 'Other comments هل هناك ملاحظات اضافية', NULL);

-- ----------------------------
-- Table structure for tb_forms
-- ----------------------------
DROP TABLE IF EXISTS `tb_forms`;
CREATE TABLE `tb_forms`  (
  `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Form Name',
  `f_slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Form Url',
  `f_welcome` varchar(512) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Form Welcome Text',
  `f_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Form Logo File Name',
  `f_state` int NULL DEFAULT 1 COMMENT '0:Deactive 1: Active',
  `f_ishome` int NULL DEFAULT 0 COMMENT '0:Not Home 1:Home',
  `f_create_date` datetime(0) NULL DEFAULT NULL COMMENT 'Form Created Datetime',
  `f_del_date` datetime(0) NULL DEFAULT NULL COMMENT 'Form Deleted Datetime',
  `f_del_flag` int NULL DEFAULT 0 COMMENT '0:Not Deleted 1: Deleted',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_forms
-- ----------------------------
INSERT INTO `tb_forms` VALUES (1, 'Wave', 'wave', 'This is the sample welcome text.', NULL, 1, 0, NULL, NULL, 0);

-- ----------------------------
-- Table structure for tb_users
-- ----------------------------
DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE `tb_users`  (
  `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'User Name',
  `f_mail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'User Email Address',
  `f_access` int NULL DEFAULT 2 COMMENT '0:SuperAdmin 1: Admin 2:User',
  `f_state` int NULL DEFAULT 0 COMMENT '0:Pending 1: Allow 2:Block',
  `f_create_date` datetime(0) NULL DEFAULT NULL COMMENT 'Created Datetime',
  `f_del_date` datetime(0) NULL DEFAULT NULL COMMENT 'Deleted Datetime',
  `f_del_flag` int NULL DEFAULT 0 COMMENT '0:Not Deleted  1: Deleted',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_users
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
