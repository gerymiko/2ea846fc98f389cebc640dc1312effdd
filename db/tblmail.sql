/*
 Navicat Premium Data Transfer

 Source Server         : PostgreSQL
 Source Server Type    : PostgreSQL
 Source Server Version : 130001
 Source Host           : localhost:5432
 Source Catalog        : sendmail
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 130001
 File Encoding         : 65001

 Date: 07/12/2020 19:13:19
*/


-- ----------------------------
-- Table structure for tblmail
-- ----------------------------
DROP TABLE IF EXISTS "public"."tblmail";
CREATE TABLE "public"."tblmail" (
  "id" int4 NOT NULL GENERATED BY DEFAULT AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
),
  "sender" varchar(255) COLLATE "pg_catalog"."default",
  "receiver" varchar(255) COLLATE "pg_catalog"."default",
  "body" varchar(255) COLLATE "pg_catalog"."default",
  "subject" varchar(255) COLLATE "pg_catalog"."default",
  "createddate" date DEFAULT CURRENT_TIMESTAMP
)
;

-- ----------------------------
-- Records of tblmail
-- ----------------------------
INSERT INTO "public"."tblmail" VALUES (7, 'iamsender@odeo.tech', 'iamreceiver@odeo.tech', 'Lorem ipsum Dolor', 'Thanks for choosing Me!', '2020-12-07');

-- ----------------------------
-- Primary Key structure for table tblmail
-- ----------------------------
ALTER TABLE "public"."tblmail" ADD CONSTRAINT "tblmail_pkey" PRIMARY KEY ("id");
