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

 Date: 14/01/2021 18:18:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_feedbacks
-- ----------------------------
DROP TABLE IF EXISTS `tb_feedbacks`;
CREATE TABLE `tb_feedbacks`  (
  `f_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_form_id` int(11) NULL DEFAULT NULL COMMENT 'tb_forms f_id',
  `f_field_id` int(11) NULL DEFAULT NULL COMMENT 'tb_fields f_id',
  `f_combo_val` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  `f_text_val` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Null:not text, Not Null: text',
  `f_create_date` datetime(0) NULL DEFAULT NULL COMMENT 'Feedback created datetime',
  `f_del_date` datetime(0) NULL DEFAULT NULL COMMENT 'Feedback deleted datetime',
  `f_del_flag` int(11) NULL DEFAULT 0 COMMENT '0:Not Deleted 1:Deleted',
  `f_cur_feednum` int(11) NULL DEFAULT NULL COMMENT 'Feedback count',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 57 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_feedbacks
-- ----------------------------
INSERT INTO `tb_feedbacks` VALUES (1, 1, 2, 'good', '', '2021-01-14 04:34:37', NULL, 0, 1);
INSERT INTO `tb_feedbacks` VALUES (2, 1, 3, 'average', '', '2021-01-14 04:34:37', NULL, 0, 1);
INSERT INTO `tb_feedbacks` VALUES (3, 1, 4, 'bad', '', '2021-01-14 04:34:37', NULL, 0, 1);
INSERT INTO `tb_feedbacks` VALUES (4, 1, 5, 'good', '', '2021-01-14 04:34:37', NULL, 0, 1);
INSERT INTO `tb_feedbacks` VALUES (5, 1, 7, 'good', '', '2021-01-14 04:34:37', NULL, 0, 1);
INSERT INTO `tb_feedbacks` VALUES (6, 1, 8, 'average', '', '2021-01-14 04:34:37', NULL, 0, 1);
INSERT INTO `tb_feedbacks` VALUES (7, 1, 9, 'good', '', '2021-01-14 04:34:37', NULL, 0, 1);
INSERT INTO `tb_feedbacks` VALUES (8, 1, 10, 'average', '', '2021-01-14 04:34:37', NULL, 0, 1);
INSERT INTO `tb_feedbacks` VALUES (9, 1, 11, 'bad', '', '2021-01-14 04:34:37', NULL, 0, 1);
INSERT INTO `tb_feedbacks` VALUES (10, 1, 12, '', 'You were dining at', '2021-01-14 04:34:37', NULL, 0, 1);
INSERT INTO `tb_feedbacks` VALUES (11, 1, 13, '', 'Anton Lozovyi', '2021-01-14 04:34:37', NULL, 0, 1);
INSERT INTO `tb_feedbacks` VALUES (12, 1, 14, '', 'mert@gmail.com', '2021-01-14 04:34:37', NULL, 0, 1);
INSERT INTO `tb_feedbacks` VALUES (13, 1, 15, '', '1245678910', '2021-01-14 04:34:37', NULL, 0, 1);
INSERT INTO `tb_feedbacks` VALUES (14, 1, 16, '', 'This is test other comments', '2021-01-14 04:34:37', NULL, 0, 1);
INSERT INTO `tb_feedbacks` VALUES (15, 1, 2, 'good', '', '2021-01-14 04:59:57', NULL, 0, 2);
INSERT INTO `tb_feedbacks` VALUES (16, 1, 3, 'good', '', '2021-01-14 04:59:57', NULL, 0, 2);
INSERT INTO `tb_feedbacks` VALUES (17, 1, 4, 'average', '', '2021-01-14 04:59:57', NULL, 0, 2);
INSERT INTO `tb_feedbacks` VALUES (18, 1, 5, 'bad', '', '2021-01-14 04:59:57', NULL, 0, 2);
INSERT INTO `tb_feedbacks` VALUES (19, 1, 7, 'good', '', '2021-01-14 04:59:57', NULL, 0, 2);
INSERT INTO `tb_feedbacks` VALUES (20, 1, 8, 'average', '', '2021-01-14 04:59:57', NULL, 0, 2);
INSERT INTO `tb_feedbacks` VALUES (21, 1, 9, 'average', '', '2021-01-14 04:59:57', NULL, 0, 2);
INSERT INTO `tb_feedbacks` VALUES (22, 1, 10, 'good', '', '2021-01-14 04:59:57', NULL, 0, 2);
INSERT INTO `tb_feedbacks` VALUES (23, 1, 11, 'good', '', '2021-01-14 04:59:57', NULL, 0, 2);
INSERT INTO `tb_feedbacks` VALUES (24, 1, 12, '', 'You were dining at رقم الطاولة', '2021-01-14 04:59:57', NULL, 0, 2);
INSERT INTO `tb_feedbacks` VALUES (25, 1, 13, '', 'Anton Lozovyi', '2021-01-14 04:59:57', NULL, 0, 2);
INSERT INTO `tb_feedbacks` VALUES (26, 1, 14, '', 'mert@gmail.com', '2021-01-14 04:59:57', NULL, 0, 2);
INSERT INTO `tb_feedbacks` VALUES (27, 1, 15, '', '570781599', '2021-01-14 04:59:57', NULL, 0, 2);
INSERT INTO `tb_feedbacks` VALUES (28, 1, 16, '', 'This is test for Other comments', '2021-01-14 04:59:57', NULL, 0, 2);
INSERT INTO `tb_feedbacks` VALUES (29, 1, 2, 'good', '', '2021-01-14 05:08:39', NULL, 0, 3);
INSERT INTO `tb_feedbacks` VALUES (30, 1, 3, 'good', '', '2021-01-14 05:08:39', NULL, 0, 3);
INSERT INTO `tb_feedbacks` VALUES (31, 1, 4, 'good', '', '2021-01-14 05:08:39', NULL, 0, 3);
INSERT INTO `tb_feedbacks` VALUES (32, 1, 5, 'good', '', '2021-01-14 05:08:39', NULL, 0, 3);
INSERT INTO `tb_feedbacks` VALUES (33, 1, 7, 'good', '', '2021-01-14 05:08:39', NULL, 0, 3);
INSERT INTO `tb_feedbacks` VALUES (34, 1, 8, 'good', '', '2021-01-14 05:08:39', NULL, 0, 3);
INSERT INTO `tb_feedbacks` VALUES (35, 1, 9, 'good', '', '2021-01-14 05:08:39', NULL, 0, 3);
INSERT INTO `tb_feedbacks` VALUES (36, 1, 10, 'good', '', '2021-01-14 05:08:39', NULL, 0, 3);
INSERT INTO `tb_feedbacks` VALUES (37, 1, 11, 'good', '', '2021-01-14 05:08:39', NULL, 0, 3);
INSERT INTO `tb_feedbacks` VALUES (38, 1, 12, '', 'adfadf', '2021-01-14 05:08:39', NULL, 0, 3);
INSERT INTO `tb_feedbacks` VALUES (39, 1, 13, '', 'sdafdfa', '2021-01-14 05:08:39', NULL, 0, 3);
INSERT INTO `tb_feedbacks` VALUES (40, 1, 14, '', 'adfasd', '2021-01-14 05:08:39', NULL, 0, 3);
INSERT INTO `tb_feedbacks` VALUES (41, 1, 15, '', '570781599', '2021-01-14 05:08:39', NULL, 0, 3);
INSERT INTO `tb_feedbacks` VALUES (42, 1, 16, '', 'sdfsdfadfadf', '2021-01-14 05:08:39', NULL, 0, 3);
INSERT INTO `tb_feedbacks` VALUES (43, 1, 2, 'good', '', '2021-01-14 05:13:19', NULL, 0, 4);
INSERT INTO `tb_feedbacks` VALUES (44, 1, 3, 'good', '', '2021-01-14 05:13:19', NULL, 0, 4);
INSERT INTO `tb_feedbacks` VALUES (45, 1, 4, 'good', '', '2021-01-14 05:13:19', NULL, 0, 4);
INSERT INTO `tb_feedbacks` VALUES (46, 1, 5, 'good', '', '2021-01-14 05:13:19', NULL, 0, 4);
INSERT INTO `tb_feedbacks` VALUES (47, 1, 7, 'good', '', '2021-01-14 05:13:19', NULL, 0, 4);
INSERT INTO `tb_feedbacks` VALUES (48, 1, 8, 'good', '', '2021-01-14 05:13:19', NULL, 0, 4);
INSERT INTO `tb_feedbacks` VALUES (49, 1, 9, 'good', '', '2021-01-14 05:13:19', NULL, 0, 4);
INSERT INTO `tb_feedbacks` VALUES (50, 1, 10, 'good', '', '2021-01-14 05:13:19', NULL, 0, 4);
INSERT INTO `tb_feedbacks` VALUES (51, 1, 11, 'good', '', '2021-01-14 05:13:19', NULL, 0, 4);
INSERT INTO `tb_feedbacks` VALUES (52, 1, 12, '', 'adsf', '2021-01-14 05:13:19', NULL, 0, 4);
INSERT INTO `tb_feedbacks` VALUES (53, 1, 13, '', 'adf', '2021-01-14 05:13:19', NULL, 0, 4);
INSERT INTO `tb_feedbacks` VALUES (54, 1, 14, '', 'adf', '2021-01-14 05:13:19', NULL, 0, 4);
INSERT INTO `tb_feedbacks` VALUES (55, 1, 15, '', '123123', '2021-01-14 05:13:19', NULL, 0, 4);
INSERT INTO `tb_feedbacks` VALUES (56, 1, 16, '', 'fadfasdf', '2021-01-14 05:13:19', NULL, 0, 4);

-- ----------------------------
-- Table structure for tb_fields
-- ----------------------------
DROP TABLE IF EXISTS `tb_fields`;
CREATE TABLE `tb_fields`  (
  `f_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_form_id` int(11) NULL DEFAULT NULL COMMENT 'Form\'s f_id',
  `f_field_type` int(11) NULL DEFAULT NULL COMMENT '0:section 1:input 2:radio 3:text 4:check',
  `f_no` int(11) NULL DEFAULT NULL COMMENT 'No to show',
  `f_create_date` datetime(0) NULL DEFAULT NULL COMMENT 'Field created datetime',
  `f_del_date` datetime(0) NULL DEFAULT NULL COMMENT 'Fiedl deleted datetime',
  `f_del_flag` int(11) NULL DEFAULT NULL COMMENT '0:Not deleted 1: Deleted',
  `f_section_content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `f_label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `f_section_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_fields
-- ----------------------------
INSERT INTO `tb_fields` VALUES (1, 1, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'SERVICE الخدمة', '', 1);
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
  `f_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Form Name',
  `f_slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Form Url',
  `f_welcome` varchar(512) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Form Welcome Text',
  `f_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Form Logo File Name',
  `f_state` int(11) NULL DEFAULT 1 COMMENT '0:Deactive 1: Active',
  `f_ishome` int(11) NULL DEFAULT 0 COMMENT '0:Not Home 1:Home',
  `f_create_date` datetime(0) NULL DEFAULT NULL COMMENT 'Form Created Datetime',
  `f_del_date` datetime(0) NULL DEFAULT NULL COMMENT 'Form Deleted Datetime',
  `f_del_flag` int(11) NULL DEFAULT 0 COMMENT '0:Not Deleted 1: Deleted',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_forms
-- ----------------------------
INSERT INTO `tb_forms` VALUES (1, 'Wave', 'wave', 'This is the sample welcome text.', NULL, 1, 0, NULL, NULL, 0);
INSERT INTO `tb_forms` VALUES (2, 'Crystal', 'crystal', 'This is the crystal sample welcome text', NULL, 0, 1, NULL, NULL, 0);
INSERT INTO `tb_forms` VALUES (3, 'Catalina', 'catalina', 'This is the catalina sample welcome text', NULL, 1, 1, NULL, NULL, 0);
INSERT INTO `tb_forms` VALUES (4, 'Welcome_Form', 'welcome_form', 'This is the welcome form sample welcome text', 'logo_1.png', 0, 0, '2021-01-11 09:00:00', NULL, 0);
INSERT INTO `tb_forms` VALUES (5, 'HOLA_FORM', 'hola_form', 'THIS IS THE WELCOME TEXT OF HOLA FORM', 'logo_2.png', 1, 1, '2021-01-11 09:00:00', NULL, 0);
INSERT INTO `tb_forms` VALUES (10, 'wer', 'wer', 'werwer', '21.01.13 02:39:13.png', 1, 0, '2021-01-13 02:39:13', NULL, 1);
INSERT INTO `tb_forms` VALUES (11, 'eqweqwe', 'eqweqwe', 'adfsdffsdfsdfsdf', '210113025645.png', 1, 0, '2021-01-13 02:40:09', NULL, 1);

-- ----------------------------
-- Table structure for tb_users
-- ----------------------------
DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE `tb_users`  (
  `f_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'User Name',
  `f_mail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'User Email Address',
  `f_access` int(11) NULL DEFAULT 2 COMMENT '0:SuperAdmin 1: Admin 2:User',
  `f_state` int(11) NULL DEFAULT 0 COMMENT '0:Pending 1: Allow 2:Block',
  `f_create_date` datetime(0) NULL DEFAULT NULL COMMENT 'Created Datetime',
  `f_del_date` datetime(0) NULL DEFAULT NULL COMMENT 'Deleted Datetime',
  `f_del_flag` int(11) NULL DEFAULT 0 COMMENT '0:Not Deleted  1: Deleted',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
