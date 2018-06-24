/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.16-MariaDB : Database - grf
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`grf` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `grf`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(45) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `org_password` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `notes` varchar(250) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`role`,`username`,`name`,`email`,`password`,`org_password`,`address`,`phone`,`notes`,`profile_pic`,`status`,`create_at`,`updated_at`) values (1,'Admin',NULL,'vasudevareddy reddem','admin@gmail.com','e10adc3949ba59abbe56e057f20f883e','123456','kadapa','8500050944','testing  purpose','1529212466.jpg',1,'2018-06-17 09:05:14','2018-06-17 11:01:34'),(2,NULL,NULL,NULL,'vasu@gmail.com','e10adc3949ba59abbe56e057f20f883e',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL);

/*Table structure for table `article_in_process_fee` */

DROP TABLE IF EXISTS `article_in_process_fee`;

CREATE TABLE `article_in_process_fee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) DEFAULT NULL,
  `journal_cat_id` int(11) DEFAULT NULL,
  `table` text,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `article_in_process_fee` */

insert  into `article_in_process_fee`(`id`,`journal_id`,`journal_cat_id`,`table`,`status`,`create_at`,`update_at`,`create_by`) values (1,13,22,'<p>test like  that</p>\r\n',1,'2018-06-23 21:23:24','2018-06-24 17:09:00',1),(2,11,21,'',1,'2018-06-23 21:29:47','2018-06-24 17:08:47',1),(3,5,20,'<p>cvcvzxcv</p>\r\n',1,'2018-06-24 17:07:17','2018-06-24 17:08:39',1);

/*Table structure for table `article_procedures` */

DROP TABLE IF EXISTS `article_procedures`;

CREATE TABLE `article_procedures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) DEFAULT NULL,
  `journal_cat_id` int(11) DEFAULT NULL,
  `year_of_article` varchar(250) DEFAULT NULL,
  `procedures_category` varchar(250) DEFAULT NULL,
  `conference_title` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `author_name` varchar(250) DEFAULT NULL,
  `doi_url` varchar(250) DEFAULT NULL,
  `seo_url` varchar(250) DEFAULT NULL,
  `seo_title` varchar(250) DEFAULT NULL,
  `seo_keyword` text,
  `seo_description` text,
  `abstract` text,
  `biography` text,
  `pdf_file` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `article_procedures` */

insert  into `article_procedures`(`id`,`journal_id`,`journal_cat_id`,`year_of_article`,`procedures_category`,`conference_title`,`title`,`author_name`,`doi_url`,`seo_url`,`seo_title`,`seo_keyword`,`seo_description`,`abstract`,`biography`,`pdf_file`,`image`,`status`,`create_at`,`update_at`,`create_by`) values (3,3,22,'2016','Speaker Abstract','vbx','bxcvbx','cvbxcvb','cxvbxcv','vbxvb','vbxcvb','vcbvcb','vbxcvb','<p>vbxvb</p>\r\n','<p>vbxvb</p>\r\n',NULL,NULL,1,'2018-06-24 11:41:40','2018-06-24 11:51:24',1),(4,5,20,'2016','Speaker Abstract','Conference Title','Title','Author Name','DOI Url','vbvb','xcvbxcvb','vbxcvb','vbxcvb','<p>bvxcvb</p>\r\n','<p>vcbxcbv</p>\r\n',NULL,NULL,1,'2018-06-24 17:16:36','2018-06-24 17:17:57',1);

/*Table structure for table `conference_process` */

DROP TABLE IF EXISTS `conference_process`;

CREATE TABLE `conference_process` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) DEFAULT NULL,
  `journal_cat_id` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `venu_place` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `conference_process` */

insert  into `conference_process`(`id`,`journal_id`,`journal_cat_id`,`title`,`url`,`venu_place`,`status`,`create_at`,`update_at`,`create_by`) values (2,12,22,'vbvbxvb','vbxvb','cxvbxcvb',1,'2018-06-23 22:15:43','2018-06-24 17:12:27',1),(3,11,21,'gfgfg','fgsfdg','kadapa',1,'2018-06-24 17:12:09','2018-06-24 17:12:09',1);

/*Table structure for table `contactus` */

DROP TABLE IF EXISTS `contactus`;

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(250) DEFAULT NULL,
  `lastName` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `contactus` */

insert  into `contactus`(`id`,`firstName`,`lastName`,`email`,`phone`,`message`,`create_at`) values (1,'fgfgdsf','gdfgsdf','gdfg@gmail.com','8500050944','dfgsdf','2018-06-14 23:18:41'),(2,'bb','cvbcvb','cvb@gmail.com','8500050944','ghsfghfg','2018-06-14 23:19:50'),(3,'fgsdfg','fgsdfg','cvb@gmail.com','65656345656','fgsdfg','2018-06-15 07:56:05'),(4,'hdfgshdghjGHGHFghfg','gfdgfdfgd','fghghg@gmail.com','8500050944','lithat','2018-06-17 10:22:42');

/*Table structure for table `faqs` */

DROP TABLE IF EXISTS `faqs`;

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `faqs` */

insert  into `faqs`(`id`,`question`,`description`,`status`,`create_at`,`update_at`,`create_by`) values (9,'vbvb','redde','1','2018-06-19 22:57:15','2018-06-19 23:00:12',1);

/*Table structure for table `grf_conference_flyers` */

DROP TABLE IF EXISTS `grf_conference_flyers`;

CREATE TABLE `grf_conference_flyers` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `title_color` varchar(250) DEFAULT NULL,
  `fly_image` varchar(250) DEFAULT NULL,
  `fly_org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `grf_conference_flyers` */

insert  into `grf_conference_flyers`(`f_id`,`title`,`title_color`,`fly_image`,`fly_org_image`,`status`,`create_at`,`create_by`,`update_at`) values (6,'ghdfghdgh','hdfghdfgh','1529223955.jpg','222.jpg',0,'2018-06-17 13:55:55',1,'2018-06-17 14:06:28'),(7,'ghdfghdgh','hdfghdfgh','1529224033.jpg','222.jpg',1,'2018-06-17 13:57:12',1,NULL),(8,'vcvcxv','cvzxcvzxcv','1529224879.jpg','555.jpg',1,'2018-06-17 14:11:19',1,NULL);

/*Table structure for table `grf_conference_images` */

DROP TABLE IF EXISTS `grf_conference_images`;

CREATE TABLE `grf_conference_images` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `title_color` varchar(250) DEFAULT NULL,
  `fly_image` varchar(250) DEFAULT NULL,
  `fly_org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `grf_conference_images` */

insert  into `grf_conference_images`(`f_id`,`title`,`title_color`,`fly_image`,`fly_org_image`,`status`,`create_at`,`create_by`,`update_at`) values (8,'ghdfghdgh','cvzxcvzxc','1529225120.jpg','222.jpg',1,'2018-06-17 14:15:19',1,NULL);

/*Table structure for table `grf_flyers` */

DROP TABLE IF EXISTS `grf_flyers`;

CREATE TABLE `grf_flyers` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `title_color` varchar(250) DEFAULT NULL,
  `fly_image` varchar(250) DEFAULT NULL,
  `fly_org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `grf_flyers` */

insert  into `grf_flyers`(`f_id`,`title`,`title_color`,`fly_image`,`fly_org_image`,`status`,`create_at`,`create_by`,`update_at`) values (5,'like that','ffff','1529223020.jpg','3333.jpg',1,'2018-06-17 13:26:31',1,'2018-06-17 13:57:58'),(6,'','','1529423004.jpg','222.jpg',1,'2018-06-19 21:13:24',1,NULL);

/*Table structure for table `grf_journal_category` */

DROP TABLE IF EXISTS `grf_journal_category`;

CREATE TABLE `grf_journal_category` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(250) DEFAULT NULL,
  `seo_title` varchar(250) DEFAULT NULL,
  `seo_url` varchar(250) DEFAULT NULL,
  `seo_keyword` varchar(250) DEFAULT NULL,
  `description` text,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `grf_journal_category` */

insert  into `grf_journal_category`(`c_id`,`category`,`seo_title`,`seo_url`,`seo_keyword`,`description`,`status`,`create_at`,`update_at`,`create_by`) values (20,'Medical','Medical','Medical','Medical','Medical',1,'2018-06-22 22:51:30',NULL,1),(21,'Pharmaceutial','Pharmaceutial','Pharmaceutial','Pharmaceutial','Pharmaceutial',1,'2018-06-22 22:51:46',NULL,1),(22,'Clinical','Clinical','Clinical','Clinical','Clinical',1,'2018-06-22 22:51:59',NULL,1),(23,'Engineering','Engineering','Engineering','Engineering','Engineering',1,'2018-06-22 22:52:12',NULL,1),(24,'Basic-Sciences','Basic-Sciences','Basic-Sciences','Basic-Sciences','Basic-Sciences',1,'2018-06-22 22:52:27',NULL,1);

/*Table structure for table `guidelines` */

DROP TABLE IF EXISTS `guidelines`;

CREATE TABLE `guidelines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagename` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `seo_title` varchar(250) DEFAULT NULL,
  `seo_url` varchar(250) DEFAULT NULL,
  `seo_keyword` varchar(250) DEFAULT NULL,
  `seo_description` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `guidelines` */

insert  into `guidelines`(`id`,`pagename`,`title`,`description`,`seo_title`,`seo_url`,`seo_keyword`,`seo_description`,`status`,`create_at`,`update_at`,`create_by`) values (5,'reddy','gdg','<p>gfd</p>\r\n','fgdgf','df','dfdgf','dfd','1','2018-06-21 08:58:58','2018-06-21 09:08:05',1),(6,'fbghfhf','vasu','<p>gf</p>\r\n','ghfg','fghffg','fg','fgfgf','1','2018-06-21 08:59:14','2018-06-21 09:07:51',1),(7,'fgsdfgsdfg','fvbxvcb','<p>fgdfg</p>\r\n','fgsdfg','sdfgsdfg','sdfgsdfg','sdfgsdf','1','2018-06-21 22:20:05','2018-06-22 20:32:30',1),(8,'Page Name vasu','Title','<p>xcxc</p>\r\n','cvzxcv','cxvzxcv','cvzxc','cvzxcvzxcv','1','2018-06-22 20:33:17','2018-06-22 20:33:28',1);

/*Table structure for table `issue_wise_article_list` */

DROP TABLE IF EXISTS `issue_wise_article_list`;

CREATE TABLE `issue_wise_article_list` (
  `issue_a_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_a_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`issue_a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `issue_wise_article_list` */

/*Table structure for table `issues` */

DROP TABLE IF EXISTS `issues`;

CREATE TABLE `issues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `journal_cat_id` varchar(250) DEFAULT NULL,
  `journal_id` varchar(250) DEFAULT NULL,
  `year` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `issues` */

/*Table structure for table `journal_article_in_press` */

DROP TABLE IF EXISTS `journal_article_in_press`;

CREATE TABLE `journal_article_in_press` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) DEFAULT NULL,
  `journal_cat_id` varchar(25) DEFAULT NULL,
  `year_of_article` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `author_name` varchar(250) DEFAULT NULL,
  `article_type` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `seo_title` varchar(250) DEFAULT NULL,
  `seo_keyword` varchar(250) DEFAULT NULL,
  `seo_description` varchar(250) DEFAULT NULL,
  `research_article` varchar(250) DEFAULT NULL,
  `abstract` varchar(250) DEFAULT NULL,
  `introduction` varchar(250) DEFAULT NULL,
  `references` varchar(250) DEFAULT NULL,
  `figures` varchar(250) DEFAULT NULL,
  `suggested_citation` varchar(250) DEFAULT NULL,
  `tables` varchar(250) DEFAULT NULL,
  `pdf_file` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `video` varchar(250) DEFAULT NULL,
  `video_article` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `journal_article_in_press` */

insert  into `journal_article_in_press`(`a_id`,`journal_id`,`journal_cat_id`,`year_of_article`,`title`,`author_name`,`article_type`,`url`,`seo_title`,`seo_keyword`,`seo_description`,`research_article`,`abstract`,`introduction`,`references`,`figures`,`suggested_citation`,`tables`,`pdf_file`,`image`,`video`,`video_article`,`status`,`create_at`,`update_at`,`create_by`) values (5,5,'20','2010','vbxcvb','vbxcvb','xcvbxcvb','vbxcvb','xcvbx','vcbxcvb','xcvb','<p>vbxcvb</p>\r\n','<p>vbxcvbxcvb</p>\r\n','<p>vbxcvbxc</p>\r\n','<p>vbxbvxvb</p>\r\n','<p>vbxvbxcvbcv</p>\r\n','<p>vbxcvbxcvb</p>\r\n','<p>vbxcvbxcv</p>\r\n','1529687924.pdf','1529687924.html','1529687924.mp4',1,1,'2018-06-22 22:48:43','2018-06-24 17:56:39',1),(6,11,'21','2013',' Lorem Ipsum has been the industrys standard dummy text ever since the 1500s','testing','Article Type','URL','SEO Title','SEO Keywords','SEO Description','<p>Research Article</p>\r\n','<p>Abstract</p>\r\n','<p>Introduction</p>\r\n','<p>References</p>\r\n','<p>Figures</p>\r\n','<p>Suggested citation</p>\r\n','<p>Tables</p>\r\n','1529839780.pdf','1529839780.docx','',0,1,'2018-06-24 16:59:39','2018-06-24 18:09:43',1),(7,11,'21','2013','Lorem Ipsum is simply dummy text of the printing and typesetting','Author Name','Article Type','url','seo title','seo keywords','SEO Description','<p>Research Article</p>\r\n','<p>Abstract</p>\r\n','<p>Introduction</p>\r\n','<p>References</p>\r\n','<p>Figures</p>\r\n','<p>Suggested citation</p>\r\n','<p>Tables</p>\r\n','1529843950.pdf','1529843950.jpg','',0,1,'2018-06-24 18:09:10',NULL,1);

/*Table structure for table `journal_banners` */

DROP TABLE IF EXISTS `journal_banners`;

CREATE TABLE `journal_banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) DEFAULT NULL,
  `baneer_image` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `alt_tags` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `journal_banners` */

insert  into `journal_banners`(`id`,`journal_id`,`baneer_image`,`title`,`alt_tags`,`status`,`create_at`,`update_at`,`create_by`) values (2,3,'1529253750.jpg','ghdfghdgh','bvbxcvb',1,'2018-06-17 21:59:39','2018-06-17 22:12:30',1);

/*Table structure for table `journal_editors` */

DROP TABLE IF EXISTS `journal_editors`;

CREATE TABLE `journal_editors` (
  `j_e_id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) DEFAULT NULL,
  `journal_cat_id` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `position` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `university` varchar(250) DEFAULT NULL,
  `priority` varchar(250) DEFAULT NULL,
  `biography` text,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`j_e_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `journal_editors` */

insert  into `journal_editors`(`j_e_id`,`journal_id`,`journal_cat_id`,`image`,`name`,`email`,`phone`,`designation`,`position`,`country`,`university`,`priority`,`biography`,`status`,`create_at`,`update_at`,`create_by`) values (2,12,22,'1529334192.jpg','vasudevareddy reddem','cvb@gmail.com','8500050944','des','Editor in cheif','Aruba','bxcvbxcvb','1','testing',1,'2018-06-18 20:33:11','2018-06-24 16:52:09',1),(3,12,22,'1529336187.jpg','bxcvbxcvb','vcbxcvb@gmail.com','8500050944','des','Editorial board member','Australia','cvzxcv','1','fgfgdfg',1,'2018-06-18 20:38:50','2018-06-24 16:51:46',1),(4,11,21,'1529838815.jpg','vaasudevareddy','vaasudevareddy@gmail.com','8500050944','Designation','Editor in cheif','United States','us','1','biography',1,'2018-06-24 16:43:34','2018-06-24 16:55:32',1);

/*Table structure for table `journals` */

DROP TABLE IF EXISTS `journals`;

CREATE TABLE `journals` (
  `j_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) DEFAULT NULL,
  `baneer_image` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `alt_tags` varchar(250) DEFAULT NULL,
  `seo_title` varchar(250) DEFAULT NULL,
  `seo_url` varchar(250) DEFAULT NULL,
  `seo_keywords` varchar(250) DEFAULT NULL,
  `seo_description` text,
  `key_words` text,
  `description` text,
  `prices` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`j_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `journals` */

insert  into `journals`(`j_id`,`category`,`baneer_image`,`title`,`alt_tags`,`seo_title`,`seo_url`,`seo_keywords`,`seo_description`,`key_words`,`description`,`prices`,`status`,`create_at`,`update_at`,`create_by`) values (5,20,'1529837540.jpg','Advanced Research in Biosensor and Bioelectronics(ARBB)','Advanced Research in Biosensor and Bioelectronics(ARBB)','Advanced Research in Biosensor and Bioelectronics(ARBB)','Advanced Research in Biosensor and Bioelectronics(ARBB)','Advanced Research in Biosensor and Bioelectronics(ARBB)','Advanced Research in Biosensor and Bioelectronics(ARBB)','<p>Advanced Research in Biosensor and Bioelectronics(ARBB)</p>\r\n','<p>Advanced Research in Biosensor and Bioelectronics(ARBB)</p>\r\n','Advanced Research in Biosensor and Bioelectronics(ARBB)',1,'2018-06-24 16:22:20','2018-06-24 16:22:20',1),(6,20,'1529837589.jpg','Annals of Medical & Surgical Case Reports(AMSC)','Annals of Medical & Surgical Case Reports(AMSC)','Annals of Medical & Surgical Case Reports(AMSC)','Annals of Medical & Surgical Case Reports(AMSC)','Annals of Medical & Surgical Case Reports(AMSC)','Annals of Medical & Surgical Case Reports(AMSC)','<p>Annals of Medical & Surgical Case Reports(AMSC)</p>\r\n','<p>Annals of Medical & Surgical Case Reports(AMSC)</p>\r\n','Annals of Medical & Surgical Case Reports(AMSC)',1,'2018-06-24 16:23:09','2018-06-24 16:23:09',1),(7,20,'1529837614.jpg','Annals of Pediatrics and Child Care','Annals of Pediatrics and Child Care','Annals of Pediatrics and Child Care','Annals of Pediatrics and Child Care','Annals of Pediatrics and Child Care','Annals of Pediatrics and Child Care','<p>Annals of Pediatrics and Child Care</p>\r\n','<p>Annals of Pediatrics and Child Care</p>\r\n','Annals of Pediatrics and Child Care',1,'2018-06-24 16:23:34','2018-06-24 16:23:34',1),(8,20,'1529837638.jpg','Clinical Oncology Research Journal (CORJ)','Clinical Oncology Research Journal (CORJ)','Clinical Oncology Research Journal (CORJ)','Clinical Oncology Research Journal (CORJ)','Clinical Oncology Research Journal (CORJ)','Clinical Oncology Research Journal (CORJ)','<p>Clinical Oncology Research Journal (CORJ)</p>\r\n','<p>Clinical Oncology Research Journal (CORJ)</p>\r\n','Clinical Oncology Research Journal (CORJ)',1,'2018-06-24 16:23:58','2018-06-24 16:23:58',1),(9,20,'1529837664.jpg','Current Updates in Dermatological Problems (CUDP)','Current Updates in Dermatological Problems (CUDP)','Current Updates in Dermatological Problems (CUDP)','Current Updates in Dermatological Problems (CUDP)','Current Updates in Dermatological Problems (CUDP)','Current Updates in Dermatological Problems (CUDP)','<p>Current Updates in Dermatological Problems (CUDP)</p>\r\n','<p>Current Updates in Dermatological Problems (CUDP)</p>\r\n','Current Updates in Dermatological Problems (CUDP)',1,'2018-06-24 16:24:23','2018-06-24 16:24:23',1),(10,20,'1529837689.jpg','Dentistry and Dental Ailments Journal (DDAJ)','Dentistry and Dental Ailments Journal (DDAJ)','Dentistry and Dental Ailments Journal (DDAJ)','Dentistry and Dental Ailments Journal (DDAJ)','Dentistry and Dental Ailments Journal (DDAJ)','Dentistry and Dental Ailments Journal (DDAJ)','<p>Dentistry and Dental Ailments Journal (DDAJ)</p>\r\n','<p>Dentistry and Dental Ailments Journal (DDAJ)</p>\r\n','Dentistry and Dental Ailments Journal (DDAJ)',1,'2018-06-24 16:24:49','2018-06-24 16:24:49',1),(11,21,'1529837715.jpg','Insights of Cardiology: Open Access (ICOA)','Insights of Cardiology: Open Access (ICOA)','Insights of Cardiology: Open Access (ICOA)','Insights of Cardiology: Open Access (ICOA)','Insights of Cardiology: Open Access (ICOA)','Insights of Cardiology: Open Access (ICOA)','<p>Insights of Cardiology: Open Access (ICOA)</p>\r\n','<p>Insights of Cardiology: Open Access (ICOA)</p>\r\n','Insights of Cardiology: Open Access (ICOA)',1,'2018-06-24 16:25:14','2018-06-24 16:25:14',1),(12,22,'1529837744.jpg','International Journal of Education Advancement (IJEA)','International Journal of Education Advancement (IJEA)','International Journal of Education Advancement (IJEA)','International Journal of Education Advancement (IJEA)','International Journal of Education Advancement (IJEA)','International Journal of Education Advancement (IJEA)','<p>International Journal of Education Advancement (IJEA)</p>\r\n','<p>International Journal of Education Advancement (IJEA)</p>\r\n','International Journal of Education Advancement (IJEA)',1,'2018-06-24 16:25:43','2018-06-24 16:25:43',1),(13,22,'1529837768.jpg','Journal of Biomarker Research and Studies','Journal of Biomarker Research and Studies','Journal of Biomarker Research and Studies','Journal of Biomarker Research and Studies','Journal of Biomarker Research and Studies','Journal of Biomarker Research and Studies','<p>Journal of Biomarker Research and Studies</p>\r\n','<p>Journal of Biomarker Research and Studies</p>\r\n','Journal of Biomarker Research and Studies',1,'2018-06-24 16:26:07','2018-06-24 16:26:07',1);

/*Table structure for table `media_partners` */

DROP TABLE IF EXISTS `media_partners`;

CREATE TABLE `media_partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `alt_tags` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `media_partners` */

insert  into `media_partners`(`id`,`title`,`image`,`alt_tags`,`status`,`create_at`,`update_at`,`create_by`) values (4,'vasu','1529678018.jpg','nhfg hgh fgsfgsf',1,'2018-06-22 20:03:37','2018-06-22 20:02:57',1);

/*Table structure for table `menuscript_list` */

DROP TABLE IF EXISTS `menuscript_list`;

CREATE TABLE `menuscript_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `firstName` varchar(250) DEFAULT NULL,
  `lastName` varchar(250) DEFAULT NULL,
  `university` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `menuscript_title` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL,
  `journel` varchar(250) DEFAULT NULL,
  `abstract` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `menuscript_list` */

insert  into `menuscript_list`(`id`,`title`,`firstName`,`lastName`,`university`,`country`,`email`,`phone`,`menuscript_title`,`address`,`message`,`journel`,`abstract`,`image`,`create_at`) values (1,'MR','reddem','vasudevareddy','jntua','Algeria','test@gmail.com','8500050944','cvcv','cvxcvxcvxcv ','cxvzxcvxzcv','Journal of Gastroenterology and Digestive Disorders (JGDD)','test',NULL,'2018-06-14 23:22:23'),(2,'MR','vasudevareddy','htrtytry','University','India','vasu@gmail.com','8500050944','menu ttile','hyd','i like  that','Annals of Medical & Surgical Case Reports(AMSC)','dgfg','','2018-06-16 14:07:09'),(3,'MR','vasudevareddy','htrtytry','University','India','vasu@gmail.com','8500050944','menu ttile','hyd','i like  that','Annals of Medical & Surgical Case Reports(AMSC)','dgfg','','2018-06-16 14:09:21'),(4,'MR','vasudevareddy','htrtytry','University','India','vasu@gmail.com','8500050944','menu ttile','hyd','i like  that','Annals of Medical & Surgical Case Reports(AMSC)','dgfg','','2018-06-16 14:10:41'),(5,'MR','vasudevareddy','htrtytry','University','India','vasu@gmail.com','8500050944','menu ttile','hyd','i like  that','Annals of Medical & Surgical Case Reports(AMSC)','dgfg','','2018-06-16 14:11:24'),(6,'MR','vasudevareddy','htrtytry','University','India','vasu@gmail.com','8500050944','menu ttile','hyd','i like  that','Annals of Medical & Surgical Case Reports(AMSC)','dgfg','','2018-06-16 14:11:49');

/*Table structure for table `news_article` */

DROP TABLE IF EXISTS `news_article`;

CREATE TABLE `news_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `news_article` */

insert  into `news_article`(`id`,`title`,`description`,`link`,`status`,`create_at`,`update_at`,`create_by`) values (6,'dfgfgsfg','vasudevareddy','link',1,'2018-06-22 20:29:37','2018-06-22 20:26:44',1),(7,'title','sdfgsdf','gsdfgsdfg',1,'2018-06-22 20:29:12','2018-06-22 20:29:12',1);

/*Table structure for table `newsletters` */

DROP TABLE IF EXISTS `newsletters`;

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `newsletters` */

insert  into `newsletters`(`id`,`name`,`email`,`status`,`create_at`,`update_at`) values (1,'vasudevareddy reddem','vasu@gmail.com',1,'2018-06-22 23:15:03','2018-06-22 23:15:03'),(2,'ghghd','ghdgfhf@gmail.com',0,'2018-06-22 23:15:56','2018-06-22 23:30:56');

/*Table structure for table `published_gallery` */

DROP TABLE IF EXISTS `published_gallery`;

CREATE TABLE `published_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `alt_tags` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `published_gallery` */

insert  into `published_gallery`(`id`,`image`,`alt_tags`,`status`,`create_at`,`update_at`,`create_by`) values (2,'1529603448.jpg','testing',1,'2018-06-21 23:20:51','2018-06-21 23:20:47',1);

/*Table structure for table `reviewerboard` */

DROP TABLE IF EXISTS `reviewerboard`;

CREATE TABLE `reviewerboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) DEFAULT NULL,
  `journal` varchar(45) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `university` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `reviewer_board` text,
  `status` int(11) DEFAULT '1',
  `craete_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `reviewerboard` */

insert  into `reviewerboard`(`id`,`category`,`journal`,`name`,`university`,`country`,`reviewer_board`,`status`,`craete_at`,`update_at`,`create_by`) values (2,'20','6','vasudeva','vasu','Armenia','fgsdfgsdf',1,'2018-06-24 17:22:40','0000-00-00 00:00:00',1),(3,'21','11','name','us','Afghanistan','tetsing',1,'2018-06-24 17:21:54','2018-06-24 17:21:54',1);

/*Table structure for table `special_issue` */

DROP TABLE IF EXISTS `special_issue`;

CREATE TABLE `special_issue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) DEFAULT NULL,
  `journal_cat_id` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `details` text,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `special_issue` */

insert  into `special_issue`(`id`,`journal_id`,`journal_cat_id`,`title`,`details`,`status`,`create_at`,`update_at`,`create_by`) values (2,11,21,'ghdfgh','<p>ghgfhdgjdghjf   bhh</p>\r\n                                            \r\n        ',1,'2018-06-24 15:24:50','2018-06-24 17:27:04',1),(3,13,22,'ghdg','<p>vasu <strong>devareddy </strong></p>\r\n',1,'2018-06-24 15:25:11','2018-06-24 17:28:22',1),(4,11,21,'title','<p>testing  purpose</p>\r\n',1,'2018-06-24 17:26:52','2018-06-24 17:26:52',1),(5,11,21,'gfgfg','                                            \r\n        fgsfgsdfgdfg',1,'2018-06-24 17:28:01','2018-06-24 17:28:01',1);

/*Table structure for table `testimonial` */

DROP TABLE IF EXISTS `testimonial`;

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `professional` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `description` text,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `testimonial` */

insert  into `testimonial`(`id`,`name`,`professional`,`image`,`description`,`status`,`create_at`,`update_at`,`create_by`) values (2,'vasudevareddy reddem','profinal','1529423720.jpg','gdfgsfgdsf',1,'2018-06-19 21:25:19','0000-00-00 00:00:00',1),(3,'vasudevareddy reddem','profinal','1529424434.jpg','gdfgsfgdsf',1,'2018-06-19 21:35:03','0000-00-00 00:00:00',1);

/*Table structure for table `updates` */

DROP TABLE IF EXISTS `updates`;

CREATE TABLE `updates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `updates` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `updates` */

insert  into `updates`(`id`,`title`,`updates`,`status`,`create_at`,`update_at`,`create_by`) values (2,'gfdgdfg','reddem','1','2018-06-19 22:28:18',NULL,1),(3,'like that psoot','vasu','1','2018-06-19 22:28:10',NULL,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
