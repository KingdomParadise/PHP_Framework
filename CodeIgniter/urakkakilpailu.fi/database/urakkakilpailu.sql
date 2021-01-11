/*
 Navicat Premium Data Transfer

 Source Server         : PHP7.3_root
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : urakkakilpailu

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 10/01/2021 06:54:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_bid
-- ----------------------------
DROP TABLE IF EXISTS `tb_bid`;
CREATE TABLE `tb_bid`  (
  `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_com_id` int NOT NULL COMMENT 'Company ID(tb_company f_id)',
  `f_job_id` int NOT NULL COMMENT 'Job ID(tb_job f_id)',
  `f_bid_price` int NOT NULL COMMENT 'Bid price that the company offered',
  `f_bid_content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Bid content that the company offered',
  `f_createtime` datetime(0) NOT NULL COMMENT 'Bid created time',
  `f_deltime` datetime(0) NULL DEFAULT NULL COMMENT 'Bid deleted time',
  `f_del_flag` int NOT NULL COMMENT '0:Not deleted 1:Deleted',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_bid
-- ----------------------------

-- ----------------------------
-- Table structure for tb_company
-- ----------------------------
DROP TABLE IF EXISTS `tb_company`;
CREATE TABLE `tb_company`  (
  `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_fname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'First name of user',
  `f_lname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Last name of user',
  `f_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Email address of user',
  `f_pwd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Company password hashed',
  `f_cmp_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Company name',
  `f_business_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Company business ID',
  `f_addr` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Company address',
  `f_city` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Company city',
  `f_zip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Company zipcode',
  `f_telnum` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Company telephone number',
  `f_state` int NOT NULL DEFAULT 0 COMMENT '0: Pending 1: Activated 2: Blocked',
  `f_createtime` datetime(0) NOT NULL COMMENT 'Company created time',
  `f_deltime` datetime(0) NULL DEFAULT NULL COMMENT 'Company deleted or block time',
  `f_distance` double NOT NULL COMMENT 'Company distance',
  `f_del_flag` int NULL DEFAULT NULL COMMENT '0:Not deleted 1:Deleted',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_company
-- ----------------------------

-- ----------------------------
-- Table structure for tb_job
-- ----------------------------
DROP TABLE IF EXISTS `tb_job`;
CREATE TABLE `tb_job`  (
  `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Job name',
  `f_location` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'House location',
  `f_area` int NOT NULL COMMENT 'House square meter',
  `f_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'House type',
  `f_price_start` int NOT NULL COMMENT 'Job price range start',
  `f_schedule_type` int NOT NULL COMMENT '0:Flexible 1:ASAP 2:Exactly',
  `f_schedule_date` datetime(0) NOT NULL COMMENT 'Job finish date',
  `f_price_end` int NOT NULL COMMENT 'Job price range end',
  `f_description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Job description',
  `f_dest_age` int NOT NULL COMMENT 'House age',
  `f_dest_content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'House description',
  `f_createtime` datetime(0) NOT NULL COMMENT 'Job posted time',
  `f_deltime` datetime(0) NULL DEFAULT NULL COMMENT 'Job deleted time',
  `f_del_flag` int NOT NULL COMMENT '0:Not deleted 1: Deleted',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_job
-- ----------------------------

-- ----------------------------
-- Table structure for tb_job_state
-- ----------------------------
DROP TABLE IF EXISTS `tb_job_state`;
CREATE TABLE `tb_job_state`  (
  `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT ' ',
  `f_job_id` int NOT NULL COMMENT 'Job ID(tb_job f_id)',
  `f_com_id` int NOT NULL COMMENT 'Company ID(tb_company f_id)',
  `f_state` int NOT NULL COMMENT '0:award 1:accept 2:working 3:finished',
  `f_startdate` date NOT NULL COMMENT 'Job started date',
  `f_enddate` date NOT NULL COMMENT 'Job enn date',
  `f_del_flag` int NOT NULL COMMENT '0:Not deleted 1:Deleted',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_job_state
-- ----------------------------

-- ----------------------------
-- Table structure for tb_job_transaction
-- ----------------------------
DROP TABLE IF EXISTS `tb_job_transaction`;
CREATE TABLE `tb_job_transaction`  (
  `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_job_id` int NOT NULL COMMENT 'Job ID(tb_job f_id)',
  `f_com_id` int NOT NULL COMMENT 'Company ID(tb_company f_id)',
  `f_amount` double(11, 2) NOT NULL COMMENT 'Transaction amount',
  `f_transtime` datetime(0) NOT NULL COMMENT 'Transaction time',
  `f_state` int NOT NULL COMMENT '0:pending 1:verified 2:complete',
  `f_del_flag` int NOT NULL COMMENT '0: Not delete 1: Delete',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_job_transaction
-- ----------------------------

-- ----------------------------
-- Table structure for tb_membership
-- ----------------------------
DROP TABLE IF EXISTS `tb_membership`;
CREATE TABLE `tb_membership`  (
  `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_com_id` int NOT NULL COMMENT 'Company ID(tb_company f_id)',
  `f_memship_type` int NOT NULL COMMENT '1:monthly pay 2:each job pay',
  `f_startdate` date NOT NULL COMMENT 'Membership start date',
  `f_enddate` date NOT NULL COMMENT 'Membership end date',
  `f_del_flag` int NOT NULL COMMENT '0:Not delete 1: Delete',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_membership
-- ----------------------------

-- ----------------------------
-- Table structure for tb_membership_transaction
-- ----------------------------
DROP TABLE IF EXISTS `tb_membership_transaction`;
CREATE TABLE `tb_membership_transaction`  (
  `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_com_id` int NOT NULL COMMENT 'Company ID(tb_company f_id)',
  `f_amount` double(50, 2) NOT NULL COMMENT 'Membership transaction amount',
  `f_transtime` datetime(0) NOT NULL COMMENT 'Membership transaction time',
  `f_state` int NOT NULL COMMENT '0:pending 1:verified 2:complete',
  `f_del_flag` int NOT NULL COMMENT '0:Not delete 1:Delete',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_membership_transaction
-- ----------------------------

-- ----------------------------
-- Table structure for tb_review
-- ----------------------------
DROP TABLE IF EXISTS `tb_review`;
CREATE TABLE `tb_review`  (
  `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_com_id` int NOT NULL COMMENT 'Company ID(tb_company f_id)',
  `f_job_id` int NOT NULL COMMENT 'Job ID(tb_job f_id)',
  `f_rating` double(10, 1) NOT NULL COMMENT 'Star Rating that customer gives company',
  `f_content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Review content that customer gives company',
  `f_createtime` datetime(0) NOT NULL COMMENT 'Review created time',
  `f_deltime` datetime(0) NULL DEFAULT NULL COMMENT 'Review deleted time',
  `f_del_flag` int NOT NULL COMMENT '0: not deleted 1: deleted',
  PRIMARY KEY (`f_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_review
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
