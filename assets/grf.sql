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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `grf_conference_images` */

insert  into `grf_conference_images`(`f_id`,`title`,`title_color`,`fly_image`,`fly_org_image`,`status`,`create_at`,`create_by`,`update_at`) values (8,'ghdfghdgh','cvzxcvzxc','1529225120.jpg','222.jpg',1,'2018-06-17 14:15:19',1,NULL),(9,'','','','',0,'2018-06-17 15:15:07',1,'2018-06-17 15:46:32');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `grf_flyers` */

insert  into `grf_flyers`(`f_id`,`title`,`title_color`,`fly_image`,`fly_org_image`,`status`,`create_at`,`create_by`,`update_at`) values (5,'like that','ffff','1529223020.jpg','3333.jpg',1,'2018-06-17 13:26:31',1,'2018-06-17 13:57:58');

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `grf_journal_category` */

insert  into `grf_journal_category`(`c_id`,`category`,`seo_title`,`seo_url`,`seo_keyword`,`description`,`status`,`create_at`,`update_at`,`create_by`) values (1,'Advanced Research in Biosensor and Bioelectronics(ARBB)','seo title','vbncvbn','seo keywords','vcvzxcvcv',1,'2018-06-17 16:00:30',NULL,1),(2,'Annals of Medical & Surgical Case Reports(AMSC)',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(3,'Annals of Pediatrics and Child Care',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(4,'Clinical Oncology Research Journal (CORJ)',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(5,'Current Updates in Dermatological Problems (CUDP)',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(6,'Dentistry and Dental Ailments Journal (DDAJ)',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(7,'Insights of Cardiology: Open Access (ICOA)',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(8,'International Journal of Education Advancement (IJEA)',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(9,'Journal of Biomarker Research and Studies',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(10,'Journal of Obstetrics and Gynecological Problems(JOGP)',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(11,'Journal of Surgery and Insights (JSI)',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(12,'Journal of Urology and Renal Problems (JURP)',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(13,'Current Trends in Genetics and Microbiology (CTGM)',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(14,'Journal of Gastroenterology and Digestive Disorders (JGDD)',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(15,'Clinical Orthopedics Advanced Research Journal (COARJ)',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(16,'Chronicles of Complementary, Alternative & Integrative Medicine (CCAIM)',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(17,'Journal of Sports Science and Physical Therapy (JSSPT)',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(18,'Emergency Medicine and Trauma Care Journal (EMTCJ)',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1),(19,'Open Access Journal of Endocrinology Disorders (OAJED)',NULL,NULL,NULL,NULL,1,'2018-06-17 16:00:30',NULL,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `journals` */

insert  into `journals`(`j_id`,`category`,`baneer_image`,`title`,`alt_tags`,`seo_title`,`seo_url`,`seo_keywords`,`seo_description`,`key_words`,`description`,`prices`,`status`,`create_at`,`update_at`,`create_by`) values (1,3,'1529236287.jpg','','','','','','','','','',1,'2018-06-17 17:21:27','2018-06-17 17:21:27',1),(2,3,'1529236516.jpg','like that psoot','tags','title seo','url seo','keywords seo','desc seo','<p><strong>liket that  all peoples  are  fake  </strong></p>\r\n','<p><strong>description </strong></p>\r\n','prices',1,'2018-06-17 17:25:16','2018-06-17 17:25:16',1);

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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;