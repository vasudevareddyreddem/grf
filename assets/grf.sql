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

insert  into `article_in_process_fee`(`id`,`journal_id`,`journal_cat_id`,`table`,`status`,`create_at`,`update_at`,`create_by`) values (1,13,22,'<p>test like  that</p>\r\n',1,'2018-06-23 21:23:24','2018-06-24 17:09:00',1),(2,11,21,'<p><strong>Frontiers in Astronomy and Space Science</strong>is an open access journal covering in aspects like cosmology, space robotics and planetary materials.This journal helps to provide a unique platform to collect and disseminate state-of-the-art scientific understanding on and related discipline of Astronomy and Space sciences studies.</p>\r\n\r\n<p>Manuscripts like original articles, review articles, case reports, short communications, Perspective, Book Reviews, Image articles etc. can be accepted.</p>\r\n\r\n<p><strong>Aim and Scope</strong></p>\r\n\r\n<p>The main objective of the journal is to maintain and develop science and related research at an international level for the subject. FASS mainly focuses on cosmology, space robotics and planetary materials and related studies.</p>\r\n\r\n<p><strong>Indexing & Abstracting</strong></p>\r\n\r\n<p>All published articles are assigned to Digital Object Identifier (DOI) - Crossref.</p>\r\n\r\n<p>All published articles of this journal are included in the indexing and abstracting coverage of:</p>\r\n\r\n<p> *Google Scholar</p>\r\n\r\n<p>*Genamics – JournalSeek</p>\r\n\r\n<p>*Academic Keys</p>\r\n\r\n<p>*ResearchBib - Academic Research Index</p>\r\n\r\n<p>*Free Medical Journals - Geneva Foundation for Medical Education and Research</p>\r\n\r\n<p>*International Innovative Journal Impact Factor (IIJIF)</p>\r\n\r\n<p>*Al-Azhar University</p>\r\n\r\n<p>*Open J-Gate</p>\r\n\r\n<p>* Directory of Journals indexing</p>\r\n\r\n<p> </p>\r\n\r\n<p>All published articles are permanently archived and available at Gavin Publishers website in HTML and PDF formats.</p>\r\n',1,'2018-06-26 21:31:41','2018-06-27 21:56:10',1),(3,14,20,'<h3><a href=\"https://www.gavinpublishers.com/journals/articleprocessfee/journal-of-urology-and-renal-diseases-ISSN-2575-7903#\"><strong>Article Submission Guidelines </strong></a></h3>\r\n\r\n<h2> </h2>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Manuscript Title</strong></p>\r\n\r\n<p>Manuscript title limit should not exceed 28 words. It should not contain abbreviations and the title should be a brief phrase which describes the contents present in the article.</p>\r\n\r\n<p><strong>Details of the Author</strong></p>\r\n\r\n<p>The details (full names and affiliations) of all the authors should be given in the manuscript. For corresponding author details (<strong>Live </strong>address with <strong>Telephone</strong>, <strong>Fax</strong> and <strong>E- mail </strong>address) should be provided in the manuscript.</p>\r\n\r\n<p><strong>Image Submission:</strong></p>\r\n\r\n<p>Images with high resolutions must be submitted by the author. Authors should take full responsibility for copyrighted images during submission and publication process.Clinical and Medical Imaging is an open access journal publishing research/original submissions, reviews, brief reports, case studies, rapid communications, letters to the editor etc. related to basic, experimental and clinical aspects of research.</p>\r\n\r\n<p><strong>Submission:</strong></p>\r\n\r\n<p>Submit your contribution through contact@gavinpublishers.org</p>\r\n\r\n<p><strong>Instructions to be followed:</strong></p>\r\n\r\n<ol>\r\n <li>A brief title describing, content of the image.</li>\r\n <li>Images must be submitted in TIFF, PDF or PPT.</li>\r\n <li>The description regarding the image must be limited (250 words).</li>\r\n <li>Images should be captured at the following minimum resolutions: halftones and colour (all colour must be RGB) 100-200 dpi; combination halftones 350 dpi; line art 500 dpi to match the journal criteria.</li>\r\n <li>Citations/References (URL) should be mentioned properly.</li>\r\n</ol>\r\n\r\n<p><strong>Presentation:</strong></p>\r\n\r\n<p>Presentation is a means of communication that helps a person to disclose his work under a broad spectrum of clinical and medical sciences. Presentations are of three types: Power Point Presentation, Flow Chart and Poster presentation.</p>\r\n\r\n<p><strong>Figures and Tables</strong></p>\r\n\r\n<p><strong>Figures:</strong></p>\r\n\r\n<p>Suggested formats for figures should be in bitmap formats (JPEG, GIF, TIFF, etc.). Please send us the Photoshop indexes, in case the pictures need any differential segments on distinctive layers.</p>\r\n\r\n<p><strong>Figure Legends:</strong></p>\r\n\r\n<p>Use numerical to designate figures (e.g., Figure 1). Use justifiable description, if necessary.</p>\r\n\r\n<p><strong>Figure Quality:</strong></p>\r\n\r\n<p>During submissions, figures are supposed to be at sufficient quality, preferably as JPEGs.</p>\r\n\r\n<p><strong>Tables:</strong></p>\r\n\r\n<p>Tables can be included in the text, if not submitted as a separate file, oriented in portrait form (not landscape) and upright on the page, not sideways.</p>\r\n\r\n<p><strong>Table Legends:</strong></p>\r\n\r\n<p>Use numerical to designate tables (e.g., Table 1). Use justifiable description, if necessary.</p>\r\n\r\n<p><strong>Equations as Graphics:</strong></p>\r\n\r\n<p>If equations cannot be encoded in MathML, submit them in TIFF or EPS format as discrete files (i.e., a file containing only the data for one equation). Only when tables cannot be encoded as XML/SGML can they be submitted as graphics. If this method is used, it is critical that the font size in all equations and tables is consistent and legible throughout all submissions.</p>\r\n\r\n<ol>\r\n <li>Suggested Equation Extraction Method</li>\r\n</ol>\r\n\r\n<ol>\r\n <li>Table Specifications</li>\r\n</ol>\r\n\r\n<ol>\r\n <li>Equation Specifications</li>\r\n</ol>\r\n\r\n<p><strong>Supplementary Information:</strong></p>\r\n\r\n<p>Discrete items of the Supplementary Information (Materials & Methods, Figures, Tables, etc.,) referred to at an appropriate point in the main text of the chapter.</p>\r\n\r\n<p>Summary diagram/figure included as part of the Supplementary Information (optional).</p>\r\n\r\n<p>All Supplementary Information is supplied as a single PDF file, where possible. File size within the permitted limits for Supplementary Information. Images should be a maximum size of 640 x 480 pixels (9 x 6.8 inches at 72 pixels per inch).</p>\r\n\r\n<p><strong>Author Corrections:</strong></p>\r\n\r\n<p>Suggestions from the authors, before or after the publication process, are acceptable and ensure that the corrections are clearly legible.</p>\r\n\r\n<p><strong>Article Processing Fee</strong></p>\r\n\r\n<p>Gavin Publishers is an online international open access, peer reviewed journals publishing organization; we do not have funding/support from any Private Organizations/Government to run. To run our organization in an organized way, we charge manuscript processing fee from the authors to publish their manuscripts. We charge fee to maintain published manuscripts in online repositories. All our articles are published in most updated formats (HTML, PDF, etc.,)</p>\r\n\r\n<p>Article processing fee varies from Journal to Journal.</p>\r\n\r\n<p> </p>\r\n\r\n<table align=\"center\" border=\"2\" xss=removed>\r\n <tbody>\r\n  <tr>\r\n   <td colspan=\"2\" xss=removed><strong>Journal of Urology and Renal Diseases</strong></td>\r\n  </tr>\r\n  <tr>\r\n   <td xss=removed>Article Type</td>\r\n   <td xss=removed>Publication Fee (USD)</td>\r\n  </tr>\r\n  <tr>\r\n   <td xss=removed>Research/Review/Video Article</td>\r\n   <td xss=removed>3560</td>\r\n  </tr>\r\n  <tr>\r\n   <td xss=removed>Case Report/Mini-Review</td>\r\n   <td xss=removed>1860</td>\r\n  </tr>\r\n  <tr>\r\n   <td xss=removed>Short Communication/Commentary/Letter to Editor/Opinion/Perspective/Book review</td>\r\n   <td xss=removed>960</td>\r\n  </tr>\r\n  <tr>\r\n   <td xss=removed>Image Article/Editorial</td>\r\n   <td xss=removed>360</td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n\r\n<p> </p>\r\n\r\n<p>\\For any queries or negotiations regarding article processing fee, please contact us at: <strong>contact@gavinpublishers.org</strong></p>\r\n\r\n<p><strong>Manuscript Withdrawal Policy</strong></p>\r\n\r\n<p>Author may wish to withdraw his manuscript after submitting it to Gavin Publishers. To withdraw a manuscript we do not charge any fee, only if he/she withdraws it within a week.</p>\r\n\r\n<p>If an author withdraws manuscript after a week, then he/she will be asked to pay partial processing fee. Each and every manuscript submission costs us (Gavin Publishers) certain amount along with overhead cost during processing. Manuscripts peer review process is completed (which can often happen within a week), and it has been worked into a journal issue, we have incurred costs on our end that need to be reimbursed.</p>\r\n\r\n<p>We ask authors to pay 30% of the original article processing fee in case of withdrawal.</p>\r\n\r\n<p>For any queries or any discussions regarding manuscript withdrawal/article processing fee, please contact us at: <strong>contact@gavinpublishers.org</strong></p>\r\n\r\n<p> </p>\r\n',1,'2018-06-28 22:17:00','2018-06-28 22:17:00',1);

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

insert  into `article_procedures`(`id`,`journal_id`,`journal_cat_id`,`year_of_article`,`procedures_category`,`conference_title`,`title`,`author_name`,`doi_url`,`seo_url`,`seo_title`,`seo_keyword`,`seo_description`,`abstract`,`biography`,`pdf_file`,`image`,`status`,`create_at`,`update_at`,`create_by`) values (3,3,22,'2016','Speaker Abstract','vbx','bxcvbx','cvbxcvb','cxvbxcv','vbxvb','vbxcvb','vcbvcb','vbxcvb','<p>vbxvb</p>\r\n','<p>vbxvb</p>\r\n',NULL,NULL,1,'2018-06-24 11:41:40','2018-06-24 11:51:24',1),(4,5,20,'2016','Speaker Abstract','Conference Title','Title','Author Name','DOI Url','vbvb','xcvbxcvb','vbxcvb','vbxcvb','<p>bvxcvb</p>\r\n','<p>vcbxcbv</p>\r\n',NULL,NULL,1,'2018-06-24 17:16:36','2018-06-26 08:11:19',1);

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

insert  into `conference_process`(`id`,`journal_id`,`journal_cat_id`,`title`,`url`,`venu_place`,`status`,`create_at`,`update_at`,`create_by`) values (2,12,22,'vbvbxvb','vbxvb','cxvbxcvb',1,'2018-06-23 22:15:43','2018-06-24 17:12:27',1),(3,11,21,'gfgfg','fgsfdg','kadapa',1,'2018-06-24 17:12:09','2018-06-26 08:10:13',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `faqs` */

insert  into `faqs`(`id`,`question`,`description`,`status`,`create_at`,`update_at`,`create_by`) values (10,'gdfg','dfgdfgdf','1','2018-06-26 08:21:25',NULL,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `grf_conference_flyers` */

insert  into `grf_conference_flyers`(`f_id`,`title`,`title_color`,`fly_image`,`fly_org_image`,`status`,`create_at`,`create_by`,`update_at`) values (6,'ghdfghdgh','hdfghdfgh','1529223955.jpg','222.jpg',1,'2018-06-17 13:55:55',1,'2018-06-28 08:36:20'),(7,'ghdfghdgh','hdfghdfgh','1529224033.jpg','222.jpg',1,'2018-06-17 13:57:12',1,NULL);

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

insert  into `grf_conference_images`(`f_id`,`title`,`title_color`,`fly_image`,`fly_org_image`,`status`,`create_at`,`create_by`,`update_at`) values (8,'ghdfghdgh','cvzxcvzxc','1529225120.jpg','222.jpg',0,'2018-06-17 14:15:19',1,'2018-06-26 07:54:57');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `grf_flyers` */

insert  into `grf_flyers`(`f_id`,`title`,`title_color`,`fly_image`,`fly_org_image`,`status`,`create_at`,`create_by`,`update_at`) values (5,'like that','ffff','1530152209.jpg','2.jpg',1,'2018-06-17 13:26:31',1,'2018-06-28 07:46:48'),(7,'this  is  very  impressive','blue','1530152200.jpg','1.jpg',1,'2018-06-25 21:45:44',1,'2018-06-28 07:46:39'),(8,'reddem vasudevareddy','red','1530152229.jpg','3.jpg',1,'2018-06-28 07:47:09',1,NULL);

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

insert  into `guidelines`(`id`,`pagename`,`title`,`description`,`seo_title`,`seo_url`,`seo_keyword`,`seo_description`,`status`,`create_at`,`update_at`,`create_by`) values (5,'reddy','gdg','<p>gfd</p>\r\n','fgdgf','df','dfdgf','dfd','1','2018-06-21 08:58:58','2018-06-21 09:08:05',1),(6,'fbghfhf','vasu','<p>gf</p>\r\n','ghfg','fghffg','fg','fgfgf','1','2018-06-21 08:59:14','2018-06-21 09:07:51',1),(8,'Page Name vasu','Title','<p>xcxc</p>\r\n','cvzxcv','cxvzxcv','cvzxc','cvzxcvzxcv','1','2018-06-22 20:33:17','2018-06-26 08:24:37',1);

/*Table structure for table `home_banners` */

DROP TABLE IF EXISTS `home_banners`;

CREATE TABLE `home_banners` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `home_banners` */

insert  into `home_banners`(`b_id`,`title`,`image`,`org_image`,`status`,`create_at`,`update_at`,`create_by`) values (7,'1','1530201642.jpg','1.jpg',1,'2018-06-28 21:30:41','2018-06-28 21:30:41',1),(8,'2','1530201698.jpg','1.jpg',1,'2018-06-28 21:31:37','2018-06-28 21:31:37',1),(9,'3','1530201728.jpg','2.jpg',1,'2018-06-28 21:32:08','2018-06-28 21:32:08',1),(10,'4','1530201760.jpg','1.jpg',1,'2018-06-28 21:32:40','2018-06-28 21:32:40',1);

/*Table structure for table `home_scroll` */

DROP TABLE IF EXISTS `home_scroll`;

CREATE TABLE `home_scroll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scroll_content` text,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `home_scroll` */

insert  into `home_scroll`(`id`,`scroll_content`,`status`,`create_at`,`update_at`,`create_by`) values (1,'Do research. Feed your talent. Research not only wins the war on cliche, it\'s the key to victory over fear and it\'s cousin, depression.\r\n? Robert McKee\r\n\r\n',1,'2018-06-26 07:19:53','2018-06-28 21:36:04',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

/*Data for the table `issue_wise_article_list` */

insert  into `issue_wise_article_list`(`issue_a_id`,`i_a_id`,`article_id`,`status`,`create_at`,`create_by`) values (82,8,6,1,'2018-06-25 20:47:34',1),(83,8,7,1,'2018-06-25 20:47:34',1),(84,8,8,1,'2018-06-25 20:47:34',1),(85,8,9,1,'2018-06-25 20:47:34',1),(86,9,13,1,'2018-06-28 22:15:12',1);

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
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `issues` */

insert  into `issues`(`id`,`number`,`image`,`journal_cat_id`,`journal_id`,`year`,`status`,`create_at`,`update_at`,`create_by`) values (8,'1','1529939854.jpg','21','11','2013',1,'2018-06-25 20:47:34','2018-06-26 08:13:07',1),(9,'1','1530204312.jpg','20','14','2018',1,'2018-06-28 22:15:12',NULL,1);

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
  `seo_keyword` text,
  `seo_description` text,
  `research_article` text,
  `abstract` text,
  `introduction` text,
  `references` text,
  `figures` text,
  `suggested_citation` text,
  `tables` text,
  `pdf_file` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `video` varchar(250) DEFAULT NULL,
  `video_article` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `journal_article_in_press` */

insert  into `journal_article_in_press`(`a_id`,`journal_id`,`journal_cat_id`,`year_of_article`,`title`,`author_name`,`article_type`,`url`,`seo_title`,`seo_keyword`,`seo_description`,`research_article`,`abstract`,`introduction`,`references`,`figures`,`suggested_citation`,`tables`,`pdf_file`,`image`,`video`,`video_article`,`status`,`create_at`,`update_at`,`create_by`) values (5,5,'20','2010','vbxcvb','vbxcvb','xcvbxcvb','vbxcvb','xcvbx','vcbxcvb','xcvb','<p>vbxcvb</p>\r\n','<p>vbxcvbxcvb</p>\r\n','<p>vbxcvbxc</p>\r\n','<p>vbxbvxvb</p>\r\n','<p>vbxvbxcvbcv</p>\r\n','<p>vbxcvbxcvb</p>\r\n','<p>vbxcvbxcv</p>\r\n','1529687924.pdf','1529687924.html','1529687924.mp4',1,1,'2018-06-22 22:48:43','2018-06-24 17:56:39',1),(6,11,'21','2013',' Lorem Ipsum has been the industrys standard dummy text ever since the 1500s','testing','Article Type','URL','SEO Title','SEO Keywords','SEO Description','<p>Research Article</p>\r\n','<p>Abstract</p>\r\n','<p>Introduction</p>\r\n','<p>References</p>\r\n','<p>Figures</p>\r\n','<p>Suggested citation</p>\r\n','<p>Tables</p>\r\n','1529839780.pdf','1529839780.docx','',0,1,'2018-06-24 16:59:39','2018-06-28 08:14:20',1),(7,11,'21','2013','Lorem Ipsum is simply dummy text of the printing and typesetting','Author Name','Article Type','url','seo title','seo keywords','SEO Description','<p>Research Article</p>\r\n','<p>Abstract</p>\r\n','<p>Introduction</p>\r\n','<p>References</p>\r\n','<p>Figures</p>\r\n','<p>Suggested citation</p>\r\n','<p>Tables</p>\r\n','1529843950.pdf','1529843950.jpg','',0,1,'2018-06-24 18:09:10','2018-06-28 08:14:15',1),(8,11,'21','2013','Editors shall be honoured in position as chair/co-chair for any conferences organized','Author Name','Article Type','url','SEO Title','Annals of Medical & Surgical Case Reports(AMSC)','stes','<p>sddfds</p>\r\n','<p>dfasdfasdf</p>\r\n','','<p>asdfsdfsad</p>\r\n','<p>fasdfasd</p>\r\n','<p>fasdfasdfsd</p>\r\n','<p>dfsdfasdfsd</p>\r\n','1529853128.pdf','1529853128.jpg','',0,1,'2018-06-24 20:42:07',NULL,1),(9,11,'21','2013','We promote all the articles of the Editors that are published in our journals','vaas','Article Type','url','SEO Title','seo keywords','test','<p>dfasdfs</p>\r\n','<p>cvzxcvzxcv</p>\r\n','<p>cvzxcvzxcv</p>\r\n','<p>cvzcxvzxcv</p>\r\n','<p>cvzxcv dfdfadsf</p>\r\n','<p>dfdsf df asd</p>\r\n','<p>dfasdfasdfsd</p>\r\n','1529853190.pdf','1529853190.jpg','',0,1,'2018-06-24 20:43:09',NULL,1),(10,11,'21','2013','The review comments that are given by the editors','Author Name','Article Type','url','seo title','The review comments that are given by the editors','The review comments that are given by the editors','<p>The review comments that are given by the editors</p>\r\n','<p>The review comments that are given by the editors</p>\r\n','<p>The review comments that are given by the editors</p>\r\n','<p>The review comments that are given by the editors</p>\r\n','<p>The review comments that are given by the editors</p>\r\n','<p>The review comments that are given by the editors</p>\r\n','<p>cvzcv</p>\r\n','1529853247.pdf','1529853247.jpg','',0,1,'2018-06-24 20:44:06',NULL,1),(11,11,'21','2013','After one year of due course','After one year of due course','After one year of due course','After-one-year-of-due-course','After one year of due course','After one year of due course','After one year of due course','<p>After one year of due course</p>\r\n','<p>After one year of due course</p>\r\n','<p>After one year of due course</p>\r\n','<p>After one year of due course</p>\r\n','<p>After one year of due course</p>\r\n','<p>After one year of due course</p>\r\n','<p>After one year of due course</p>\r\n','1529853304.pdf','1529853304.jpg','',0,1,'2018-06-24 20:45:03',NULL,1),(12,11,'21','2013','Editors can be promoted as senior editor and executive','vasudevareddy reddem','research article','Editors-can-be-promoted-as-senior-editor-and-executive','Editors can be promoted as senior editor and executive','Editors can be promoted as senior editor and executive','Editors can be promoted as senior editor and executive','<p><strong>Peter Catalano, MD1*,</strong> <strong>John Walker, DMD2</strong></p>\r\n\r\n<p>1Department of Otolaryngology, St. Elizabeth&#39;s Medical Center, Tufts University School of Medicine Medical, MA, USA</p>\r\n\r\n<p>2Department of Orthodontics, Bost</p>\r\n','<ol>\r\n <li><strong>Abstract</strong></li>\r\n</ol>\r\n\r\n<p> </p>\r\n\r\n<p>Nasal breathing is a basic and critical function that we rarely think much about, and most would be quite surprised to learn how important and influential it is in growth and development, and a healthy productive life. Fundamentally speaking, nasal breathing provides us with a sense of smell, enhances oxygen absorption by our lungs (via nitric oxide production from the sinuses [1]), warms and humidifies the air we breathe before it reaches the lower airway, and helps filter impurities from the air. However, it is also responsible for proper craniofacial development [2], tempero-mandibular joint function [3], head posture [4] and more. When nasal breathing does not occur for any reason, the body is forced into a series of compromises that prioritize getting oxygen into our blood at the expense of the functions provided by the nasal breathing. Because oxygen is required for survival, we are forced to live with a host of acquired health issues as a consequence of chronic or intermittent mouth breathing. One such consequence, known as Sleep Disordered Breathing [5] (SDB), is becoming pandemic in children, and directly affects their growth, development, intellect, academic performance, behavior, and much more. Let’s begin with a quick review of the causes of nasal obstruction.</p>\r\n','<ol>\r\n <li><strong>The Common Etiologies of Nasal Obstruction</strong></li>\r\n</ol>\r\n\r\n<p>Nasal breathing is an extremely important function, and we have come to appreciate that many health problems develop when nasal breathing is compromised. The etiology of reduced nasal airflow is limited, and includes the following 5 major categories. <strong>Anatomic deformities,</strong> such as a septal deviation, alar collapse, turbinate hypertrophy, or the presence of concha bullosa are relatively common. These problems are typically genetic, but the first two can also be the result of nasal trauma. <strong>Atopy</strong> can cause swelling of the nasal submucosa and mucosal glands, and thus limit airflow. The majority of glands are located in the nasal turbinates and septal swell body, and are a major cause of their hypertrophy [6]. Atopy can be treated with various medications, however, while topical nasal steroids are the preferred treatment, a paradox arises when nasal congestion actually minimizes the access of topical medications to the nose, this markedly decreasing their effectiveness. <strong>A nasal mass or nasal polyps </strong>can also cause nasal obstruction, with symptoms that can include congestion, bloody discharge, facial pain or pressure, headache, and hyposmia.</p>\r\n\r\n<p>These growths can occur in children and adults, be benign or malignant, and have the best prognosis when diagnosed and treated early. <strong>Adenoid hypertrophy </strong>is very common in children and can cause severe nasal obstruction. The adenoids typically shrink by age > 4. Adenoids, like tonsils, are part of our immune system and serve little purpose after age 2 [7]. In addition to nasal obstruction, enlarged adenoids are implicated in the development of chronic serous otitis media and chronic sinusitis in children [8]. <strong>Vasomotor Rhinitis (VMR)</strong> is perhaps the most challenging cause of nasal obstruction and is due to and imbalance in the autonomic nervous system which controls nasal blood flow. This leads to intermittent vascular engorgement on one side or in one part of the nose, and is occasionally non-remitting. Improved breathing may occur sporadically during the day, and symptoms are almost always worse after lying down, especially on one’s side. As with most conditions, there are varying degrees of VMR. These patients often describe alternating nasal congestion, especially when supine. It is also possible to have several of these factors present simultaneously (i.e. anatomic and atopic, or atopy and polyps).</p>\r\n\r\n<ol>\r\n <li><strong>Symptoms Differ in Adults Vs Children</strong></li>\r\n</ol>\r\n\r\n<p>The most common etiology of nasal obstruction differs between adults and children. For the former they are, in order of decreasing frequency, anatomic deformities, allergy, VMR, a nasal mass (adenoid remnants are extremely rare); whereas in the latter the order would be adenoid hypertrophy, anatomic deformities, allergy, VMR, and a nasal mass. Regardless of the cause(s), nasal obstruction in adults and children leads to major physiologic changes that can have serious health consequences. In adults, a common example of the consequence of nasal obstruction is <strong>snoring and Obstructive Sleep Apnea (OSA).</strong> The most common symptom of OSA in adults is daytime fatigue and cognitive impairment, followed by a significantly increased risk for heart disease, high blood pressure, stroke, diabetes, memory loss, and reduced libido [9]. Bruxism and TMJ dysfunction are now also linked to nasal obstruction in sleep [3]. In children, OSA and <strong>Sleep Disordered Breathing (SDB)</strong> leads to very different signs and symptoms that are very common, yet often overlooked or misunderstood. These include mouth breathing, snoring, restless sleep, frequent awakenings, enuresis, lack of focus, head-forward posturing, disinterest in eating, <strong>Attention Deficit Disorder (ADD), Hyperactivity (ADHD)</strong>, poor school performance, anger, and frank aggression [10]. Headaches may also be a significant complaint. Teens can show more of the daytime fatigue seen in adults.</p>\r\n\r\n<p>A key point to remember is that not all symptoms are present in each patient and the exact constellation of symptoms varies widely among patients. For patients with OSA and SDB, more sleep is not helpful because it is during sleep when their heart, brain and other organs are stressed due to oxygen debt. They are also in what is called “sympathetic dystrophy”, where their body is subject to continuous release of adrenaline during sleep. The repetitive adrenaline surge (often called arousals on a polysomnogram) has very different physiologic effects in adults versus children. More on this to follow. CPAP (continuous positive airway pressure) machines, worn on the face or nose, attempt to force oxygen past the nasal obstruction to provide adequate oxygen during sleep. (Figure 1) However, CPAP tolerance in generally quite poor, with large sample data showing few patients using it more than 4 hours a night [11].</p>\r\n\r\n<p>Another very important point is that many patients with OSA or SDB are unaware of their nasal congestion. The two most common reasons for this are that in many patients, <strong>nasal obstruction is positional</strong> and only occurs once the patient is lying down for sleep. It takes anywhere from 30 to 90 minutes for the nasal congestion to develop when supine, and by then the patient is often already asleep and unaware of the problem. The second reason is the variability in subjective appreciation or self-awareness of nasal compromise. Many of these patients have had nasal obstruction since early childhood, thus they have no frame of reference for normal nasal breathing. It is for this very reason that we test children for hearing and visual loss in grade school. Children have no frame of reference for normal hearing or sight.</p>\r\n\r\n<p>Likewise, they have no frame of reference for normal nasal breathing, and unfortunately, there is no standard screening test for them at this time. Another common compensation for nasal obstruction is forward head posturing [10]. In order to mouth breath better, the oral airway needs to be aligned with the trachea, this would produce a chin up, extended head position. (Figure 2) Many children will sleep in an extended head position for this reason. (Figure 3) However, during daytime, we cannot see where we are going in this position. Therefore, we must lean our extended neck forward. This forward head posturing places significant stress on the posterior neck muscles and leads to cervical spine alignment. Poor cervical spine alignment can lead to nerve root compression and mal-alignment of the lower spine. Thus, once the first domino falls, it is uncertain which will be the last domino to fall- i.e. will head forward posturing affect cervical spine position alone, or will it result in lower back problems, gait issues, neck pain, etc. The bottom line is that many children who suffer from SDB go undiagnosed. Awareness for the signs and symptoms as described herein should alert teachers, parents, and physicians to the possibility of SDB in children.</p>\r\n\r\n<ol>\r\n <li><strong>The Primate Studies in Dentistry</strong></li>\r\n</ol>\r\n\r\n<p>That said, the most likely person to diagnose a child with SDB is their family dentist or orthodontist. This is directly related to the fact that nasal breathing has a tremendous impact on cranio-facial development [12], which in turn determines our dental profile and occlusion. <strong>Over 90% of children with crooked teeth, teeth grinding, or malocclusion have compromised nasal breathing </strong>[13]. (Figures 4-6) This important medical fact was first observed in the 1970’s by a Norwegian orthodontist named Dr. Egil Harvold. He noticed that many of his patients with these dental issues had nasal problems and were often mouth breathers. He reported his landmark study in 1981 entitled “<strong>Primate experiments in oral respiration” </strong>[14], where he took two groups of baby monkeys and secured silicone plugs into the nostrils of half of them. He watched as the monkeys grew over the next 6 months and noticed the ones with nasal plugs began to mouth breath by default, which in turn lead to many changes in cranio-facial growth compared to the monkeys without nasal obstruction.</p>\r\n\r\n<p>He reported the narrow maxilla, high arched palate, elongated and downwards rotation of the mandible, and varying degrees of malocclusion were hallmarks of nasal obstruction in children. Not only were skeletal changes being observed, but compensatory changes by the masticator muscles were causing lower jaw malposition. The affected monkeys subsequently developed narrow faces with elongated mandibles, known today as “adenoid facies”. (Figure 7) This finding is the physical hallmark of nasal obstruction in young children, and unfortunately, is an end-stage situation. Interestingly, Harvold then removed the nasal plugs from the monkeys who had them, and noted that many of the occlusion and jaw issues resolved over the next 6 months, therefore proving that restoration of nasal breathing can lead to reversal of these changes</p>\r\n\r\n<p>As a result of compromised nasal breathing, the narrow maxilla cannot accommodate the full complement of upper teeth and a crowded dental pattern develops. (Figure 8) It is important to note that if nasal obstruction is not corrected after the teeth have been repositioned, the once straightened teeth will likely shift again because the forces causing the shift has never been corrected. We frequently see adults and teens requiring a <strong>second, and sometimes third set of braces</strong> for this exact reason. In the past, orthodontists would extract teeth to “un-crowd” the maxilla and use braces to realign the remaining teeth. Historically, orthodontics has been the science of restorative aesthetic dentistry, whereas now it is far more focused on functional upper airway development. Thus, it is also important to diagnose and treat children at an early age because 60% of their facial growth occurs by age 4, 70% by age 5, and 90% by age 12 [15].</p>\r\n\r\n<p>The old philosophy of waiting until a child is a teen or pre-teen to address their crooked teeth is no longer appropriate. Dental extractions to un-crowd the maxilla are now largely abandoned in place of what is called <strong>palatal expansion </strong>[16]. By temporarily attaching an oral device onto the inner table of the alveolar ridge of the maxilla, the orthodontist can perform osteo-distraction, whereby they slowly move the palatal bones apart over a 6-12-month period. (Figure 9) There is no pain as the process is slow and gentle. Palatal expanders can actually bear the child’s initials or name and have become an oral fashion statement for kids. Palatal expansion ultimately causes widening of the constricted maxilla and will allow proper alignment of all teeth using braces without requiring extractions.</p>\r\n\r\n<ol>\r\n <li><strong>Palatal Expansion</strong></li>\r\n</ol>\r\n\r\n<p>It was recently reported by Dr. Melih Motro, a researcher at Boston University’s Goldman School of Dentistry, that for every 1 mm of lateral palatal expansion, the nasal airway increases by 2.4% [17]. This is an extremely important discovery because it shows us how a simple minimally invasive office treatment can begin to correct the craniofacial abnormalities that develop from reduced nasal breathing. Since the palatal bones in children are not yet fused in the midline, it is relatively easy to obtain expansion of 4-10 mm in a relatively short time. Unfortunately, this is not as easy in adults because the palatal suture has already fused. As a result of this study, palatal expansion in children with SDB and dental mal-alignment is now standard practice as the first step in modern orthodontic care [18]. Wearing head-frames or other dental devices designed to correct these orthodontic problems are actually counter-productive and place restrictive forces on a maxilla that is developing in an anterior and inferior direction [18].</p>\r\n\r\n<ol>\r\n <li><strong>ADD/ADHD and Behavioral Changes in Children</strong></li>\r\n</ol>\r\n\r\n<p>It has also been shown with increasing evidence, that approximately 40% of children who suffer from SDB develop ADD, ADHD, and/or a learning disability [19]. Statistically, if a child snores by the age of 8 and is untreated, there is an 80% chance the child will have a permanent 20% reduction in mental capacity [20]. Additionally, if a child is diagnosed with SDB in the first 5 years of life and untreated, they are 60% more likely to require special needs education by age 8 [21]. However, the clinicians diagnosing these children and offering treatment for ADD/ADHD rarely consider nasal obstruction as a cause, and are also unaware that the condition is likely reversible without the need for medications or psychological therapy. ADD and ADHD are the direct result of the concept of sympathetic dystrophy I introduced earlier. Sleep deprived children develop hyperactive behavior, and this phenomenon is witnessed in most young children as their bedtime approaches. Exposing a child to hours of adrenaline over the course of a night leads to restless sleep at night and hours of hyperactive behavior the following day. It is also responsible for their enuresis, frequent awakenings, etc. [22]. In adults, sympathetic dystrophy leads to hypertension, heart disease, stroke, and diabetes. The fatigue and cognitive issues are due to hours of oxygen debt during poor sleep. Note the vastly different phenotypes of SDB and OSA in children versus adults.</p>\r\n\r\n<p>Our group is currently investigating the reversibility of ADD/ADHD in these children. Early results show a significant ability to reverse the condition once normal nasal breathing is established. While the results of this study are not complete, we are extremely encouraged by the early data and the significant number of children whose behavior has been positively affected by reversing mouth breathing tendencies and providing quality sleep. We are currently evaluating the data with respect to the child’s age, gender, and severity of baseline ADD/ADHD to determine if there are any differences in outcomes with respect to these parameters. The ability to reverse or reduce the effects of ADD/ADHD in children is a major breakthrough with profound quality of life, social, and family implications. We have even seen children with mild autism, anxiety, or aggression become highly functioning students to the astonishment of their parents and teachers.</p>\r\n\r\n<ol>\r\n <li><strong>The Role of Tonsils & Adenoids</strong></li>\r\n</ol>\r\n\r\n<p>Thus far, we have described the major causes of compromised nasal breathing, the different phenotypes in children versus adults, and have introduced some treatment options. In the 1980’s it was discovered that hypertrophic tonsils and adenoids were responsible for SDB and OSA, and at that time, it was considered the primary etiology [23]. Hence, many children underwent <strong>T&A</strong> with the goal of correcting their SDB. Did we finally have a cure for SDB in children? (Figure 10) The answer is yes and no! Studies looking at large groups of children with SDB who underwent corrective T&A have shown that about 67% relapse with SDB > 2 years of surgery [24]. This is a very important point that was revealed after longitudinal study of affected children, and shows the importance of long-term follow-up.</p>\r\n\r\n<p>It also highlights a knowledge gap between the dental and medical communities due to a lack of communication and knowledge sharing. I mentioned earlier how Dr. Harvold had discovered the importance of nasal obstruction in craniofacial development in 1981. Yet this information was not well known or shared with medical colleagues, and largely stayed within the dental community. T&A can improve nasal breathing and sleep in many patients, however, if we do not evaluate the other 4 causes of nasal obstruction mentioned earlier, we cannot expect better outcomes for ALL who are affected. Therefore, correcting nasal airflow often requires much more than adenoidectomy [25], however, this fact was lost for years among medical specialists. In the end, the results from T&A were limited, yet helped expose the fact that physicians did not yet have all the pieces to this puzzle, and we did not fully appreciate the complexity of the problem.  </p>\r\n\r\n<p>Shortly after all of this was happening in the dental world, we began acquiring significant experience in improving the nasal airway in adults via a minimally invasive surgical procedure called MIST (minimally invasive sinus technique) [26]. MIST was originally introduced in the mid-1990’s by my mentor, Dr. Reuben Setliff. Reuben did not practice in an academic institution, had no fancy titles, yet he had a unique insight into nasal pathophysiology and how best to correct those suffering from all forms of inflammatory sinus disease. He was a superb surgeon with exceptional skills, insight, and intellect. His minimally invasive concepts have revolutionized nasal surgery and proved that less is often more when it comes to surgery in the nose. His techniques and philosophies were validated in adults and children [27], and provided a safe and effective platform upon which to expand our knowledge. The MIST procedure for airway correction often takes less than 1 hour to complete, and allows patients to return home 2 hours after surgery, and back to work or school in 1 day. There is no external evidence of the surgery, no nasal packing, splints, or sutures, and minimal patient discomfort.</p>\r\n\r\n<ol>\r\n <li><strong>Correction of Nasal Obstruction</strong></li>\r\n</ol>\r\n\r\n<p>Since 2002, we have continued to modify the MIST procedure based on the critical review of our outcomes and feedback from our patients. In the mid-2000’s we introduced a simplified in-office procedure for the correction of nasal valve collapse [28]. In 2015 we published the first article on safe and effective ablation of the septal swell body [29] (Figure 11), which has greatly improved nasal breathing in adults and children. We have learned the true path of nasal breathing within the nose from computational flow studies performed by our colleagues in Singapore [30] and China [31] (Figure 12). Based on these collective advances, we now have the first reported</p>\r\n\r\n<p>results demonstrating that our minimally invasive nasal surgery, used alone as the sole intervention, can cure OSA in 48.7% of adults, regardless of the severity of their apnea, BMI, and gender [32]. An additional 43% of patients showed improvement in their AHI although not enough to be labeled a “cure”.</p>\r\n\r\n<p>Previously, nasal surgery alone had been shown ineffective in correcting OSA with cure rates < 17></p>\r\n\r\n<p>The latter surgery takes about 3-5 hours to complete, prevents the use of MR imaging in the future, and is far more morbid and costly than MIST. Almost all the patients who were not cured after MIST had absolute or relative macroglossia, due to either a large tongue or small oral cavity. Our solution to tongue base prolapse is a device called <strong>Linguaflex</strong>. Linguaflex is an elastic tongue implant that is easily placed into the tongue in about 3-5 minutes using a straight needle [35]. Patients are unaware it is present once placed and it does not interfere with their speech or swallowing. It is adjustable, and easily reversible should the patient want it removed. This device is currently before the FDA awaiting 510K approval, and our data from clinical trials done in SE Asia show OSA cure rates from Linguaflex alone of over 70%. Combined with MIST, we believe we will have the ultimate minimally invasive options to cure OSA, SDB, and snoring in the majority of adult patients.</p>\r\n\r\n<ol>\r\n <li><strong>New Data Supports the Concept</strong></li>\r\n</ol>\r\n\r\n<p>Since 2015, we have applied these minimally invasive surgical principles to children with OSA and SDB, and continue to receive tremendous feedback from the children and their parents. With the use of a 3-dimensional CT imaging program (Figure 13), we have begun to measure the actual airway changes responsible for the subjective improvement in these children. We have found that both minimal throat area (2 dimensional measurement) and volume (3 dimensional space) have both increased an average of 42%, with every child studied showing improvement [36]. We have also just completed another study measuring the volume changes in the nasal airway that occur after our modified MIST procedure, and the average child saw a 46% improvement in nasal airway volume [37], which translates into a 3-4-fold increase in nasal airflow!</p>\r\n\r\n<p>These findings were predictable based on the Starling Resistor Model of airway collapse and also validate the concept. (Figure 14) This model states that when one reduces nasal/upstream airway resistance, you will simultaneously reduce collapse of the pharyngeal airway by reducing negative intraluminal pressure. These ground-breaking results demonstrate that we can now accurately diagnose children with SDB, identify the cause of their compromised nasal breathing, appreciate the breath and variation in their symptoms, and implement an effective treatment strategy that combines palatal expansion with minimally invasive nasal surgery, and T&A in selective individuals. Linguaflex will be a welcome addition to the adult population.</p>\r\n\r\n<p>The last item to mention is VMR, which heretofore has been almost impossible to correct medically or surgically. However, in mid-2017, a company called Arrinex developed and received FDA approval for a new device called Clarifix [38]. Using a cryo-probe strategically placed into the nose, the nerves responsible for autonomic control of nasal blood flow and secretions are literally frozen trans-mucosally in a 30 second application per side. The procedure can be performed in the office using local anesthesia in adults, and in the OR in children. Results are typically seen within 3-6 weeks and 2-year follow-up data shows over 90% success rates. Combined with MIST, we can now treat all causes of nasal obstruction in adults and children in a minimally invasive and effective manner.</p>\r\n\r\n<ol>\r\n <li><strong>More Than Hope</strong></li>\r\n</ol>\r\n\r\n<p> </p>\r\n\r\n<p>This “perfect storm” of understanding the science, appreciating patient variability, creating and adopting technical innovations, and fostering peer-to-peer learning between disciplines, has given us the unique ability to confront and treat the pandemic that is OSA and SDB, and improve the quality of life for most who suffer from them. Our work is just beginning, but we are confident we have “broken the code” on a condition that afflicts millions of people worldwide, and is responsible for a huge health care burden for society. Today there is more than hope.</p>\r\n','<ol>\r\n <li><a href=\"https://europepmc.org/abstract/med/27378676\">Jankowski R, Nguyen, DT, Poussel M, Chenuel B, Gallet P, et al. (2016) Sinusology, European annals of otorhinolaryngology. head and neck diseases 133: 263-268.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/28859912\">Torre C, Guilleminault C (2018) Establishment of nasal breathing should be the ultimate goal to secure adequate craniofacial and airway development in children. J Pediatr (Rio J) 94: 101-103.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/28805272\">Tay DKL, Pang KP (2018) Clinical phenotype of South-East Asian temporomandibular disorder patients with upper airway resistance syndrome. Journal of oral rehabilitation 45: 25-33.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/22484864\">Bharadwaj R, Ravikumar A, Krishnaswamy NR (2011) Evaluation of craniofacial morphology in patients with obstructive sleep apnea using lateral cephalometry and dynamic MRI. Indian Journal of Dental Research 22: 739-748.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5664014/\">Tolaymat A, Liu Z (2017) Sleep Disorders in Childhood Neurological Diseases. Children 4: 84.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/16564379\">Wexler D, Braverman I, Amar M (2006) Histology of the nasal septal swell body (septal turbinate). Otolaryngology-Head and Neck Surgery 134: 596-600.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/28169009\">Ciolek PJ, Xu A, Anne S, Geelan-Hansen K (2017) Role of adenoidectomy in chronic nasal obstruction after nasal steroid therapy failure. American journal of otolaryngology 38: 305-308.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/27442398\">Davcheva-Chakar M, Kaftandzhieva A, Zafirovska B (2015) Adenoid Vegetations–Reservoir of Bacteria for Chronic Otitis Media with Effusion and Chronic Rhinosinusitis. prilozi 36: 71-76.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/26763546\">Campos-Juanatey F, Fernandez-Barriales M, Gonzalez M, Portillo-Martin JA (2017) Effects of obstructive sleep apnea and its treatment over the erectile function: a systematic review. Asian journal of andrology 19: 303.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/25127644\">Hvolby A (2015) Associations of sleep disturbance with ADHD: implications for treatment. ADHD Attention Deficit and Hyperactivity Disorders 7: 1-18.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/27092702\">Hawkins SM, Jensen EL, Simon SL, Friedman NR (2016) Correlates of pediatric CPAP adherence. Journal of clinical sleep medicine: JCSM: official publication of the American Academy of Sleep Medicine 12: 879-884.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/24833165\">Muñoz ICL, Orta PB (2014) Comparison of cephalometric patterns in mouth breathing and nose breathing children. International journal of pediatric otorhinolaryngology 78: 1167-1172.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/26086193\">Šidlauskien? M, Smailien? D, Lopatien? K, ?ekanauskas E, Pribuišien? R, et al. (2015) Relationships between malocclusion, body posture, and nasopharyngeal pathology in pre-orthodontic children. Medical science monitor: international medical journal of experimental and clinical research 21: 1765-1773.</a></li>\r\n <li><a href=\"https://www.sciencedirect.com/science/article/pii/0002941673901620\">Harvold EP, Vargervik K, Chierici G (1973) Primate experiments on oral sensation and dental malocclusions. American journal of orthodontics 63: 494-508.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/28468136\">Ant A, Kemaloglu YK, Yilmaz M, Dilci A (2017) Craniofacial Deviations in the Children with Nasal Obstruction. Journal of Craniofacial Surgery 28: 625-628.</a></li>\r\n <li>Shah A, Shah P, Goje SK, Shah R, Modi B (2017) Palatal Expansion and its Effects in Orthodontics. Advanced Journal of Graduate Research 2: 31-36.</li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/25837986\">Motro M, Schauseil M, Ludwig B, Zorkun B, Mainusch S, et al. (2016) Rapid-maxillary-expansion induced rhinological effects: a retrospective multicenter study. European Archives of Oto-Rhino-Laryngology 273: 679-687.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/25790946\">Bellerive A, Montpetit A, El-Khatib H, Carra MC, Remise C, et al. (2015) The effect of rapid palatal expansion on sleep bruxism in children. Sleep and Breathing 19: 1265-1271.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/29487248\">Goyal A, Pakhare AP, Bhatt GC, Choudhary B, Patil R (2018) Association of pediatric obstructive sleep apnea with poor academic performance: A school-based study from India. Lung India 35: 132-136.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/19382210\">Owens JA (2009) Neurocognitive and behavioral impact of sleep disordered breathing in children. Pediatric pulmonology 44: 417-422.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/28848496\">Smith DL, Gozal D, Hunter SJ, Kheirandish-Gozal L (2017) Parent-reported behavioral and psychiatric problems mediate the relationship between sleep-disordered breathing and cognitive deficits in school-aged children. Frontiers in neurology 11: 410.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/28165541\">Zaffanello M, Piacentini G, Lippi G, Fanos V, Gasperi E, et al. (2017) Obstructive sleepdisordered breathing, enuresis and combined disorders in children: chance or related association. Swiss Med Wkly 147: 14400.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/1385922\">Laurikainen E, Aitasalo K, Erkinjuntti M, Wanne O (1992) Sleep apnea syndrome in children-secondary to adenotonsillar hypertrophy? Acta Otolaryngol Suppl 492: 38-41.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/24470697\">Huang YS, Guilleminault C, Lee LA, Lin CH, Hwang FM (2014) Treatment outcomes of adenotonsillectomy for children with obstructive sleep apnea: a prospective longitudinal study. Sleep 37: 71-76.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/29447890\">Thadikonda KM, Shaffer AD, Stapleton AL (2018) Outcomes of adenoidectomy-alone in patients less than 3-years old. International Journal of Pediatric Otorhinolaryngology 106:46-49.</a></li>\r\n <li><a href=\"https://link.springer.com/chapter/10.1007/978-1-4939-0265-1_21\">Catalano PJ, Gupta RC, Warman M, Wijewickrama RC (2014) Sinus Surgical Techniques from Caldwell-Luc to MIST. In Diseases of the Sinuses: 389-410.</a></li>\r\n <li>Setliff III RC (1996) Min Imally in Vasive Sin Us Surgery. Otolaryngologic Clinics of North America 29: 115.</li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/19379624\">Dolan RW, Catalano PJ, Innis W, Wanees E (2009) In-office surgical repair of nasal valve stenosis. Am J Rhinol Allergy 23: 111-114.</a></li>\r\n <li><a href=\"https://www.jscimedcentral.com/Otolaryngology/otolaryngology-2-1069.pdf\">Catalano P, Ashmead MG, Carlson D (2015) Radiofrequency ablation of septal swell body. Ann Otolaryngol Rhinol 2: 1069.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/23205221\">Wang de Y, Lee HP, Gordon BR (2012) Impacts of fluid dynamics simulation in study of nasal airflow physiology and pathophysiology in realistic human three-dimensional nose models. Clinical and experimental otorhinolaryngology 5: 181-187.</a></li>\r\n <li><a href=\"https://link.springer.com/article/10.1007/s00405-011-1771-z\">Tan J, Han D, Wang J, Liu T, Wang T, et al. (2012) Numerical simulation of normal nasal cavity airflow in Chinese adult: a computational flow dynamics model. European archives of oto-rhino-laryngology 269: 881-889.</a></li>\r\n <li>Peter Catalano Curative role of MIST in OSA (Publishing in progress).</li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/23575772\">Poirier J, George C, Rotenberg B (2014) The effect of nasal surgery on nasal continuous positive airway pressure compliance. The Laryngoscope 124: 317-319.</a></li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pubmed/29582703\">Woodson BT, Strohl KP, Soose RJ, Gillespie MB, Maurer JT, et al. (2018) Upper Airway Stimulation for Obstructive Sleep Apnea: 5-Year Outcomes. Otolaryngology-Head and Neck Surgery: 0194599818762383.</a></li>\r\n <li>Catalano PJ (2014). U.S. Patent Application No. 14/055,159.</li>\r\n <li><a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5387252/\">Alsufyani NA, Noga ML, Witmans M, Cheng I, El-Hakim H, et al. (2017) Using cone beam CT to assess the upper airway after surgery in children with sleep disordered breathing symptoms and maxillary-mandibular disproportions: a clinical pilot. Journal of Otolaryngology-Head & Neck Surgery 46: 31.</a></li>\r\n <li>Catalano P, Schlewet M Nasal airway changes after nasal and sinus surgery in children with sleep disordered breathing (Publishing in progress).</li>\r\n <li>ClinicalTrials.gov Identifier: NCT03181594.</li>\r\n</ol>\r\n','','<p><strong>Citation:</strong> Catalano P, Walker J (2018) Understanding Nasal Breathing: The Key to Evaluating and Treating Sleep Disordered Breathing in Adults and Children. Curr Trends Otolaryngol Rhinol: CTOR-121. DOI: 10.29011/ CTOR-121. 000021</p>\r\n','<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" xss=removed summary=\"This is vasudeva reddy\">\r\n <caption>Title</caption>\r\n <tbody>\r\n  <tr>\r\n   <td>helo</td>\r\n   <td>vasu</td>\r\n  </tr>\r\n  <tr>\r\n   <td>deva</td>\r\n   <td>reddy</td>\r\n  </tr>\r\n  <tr>\r\n   <td>hello</td>\r\n   <td>hi</td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n\r\n<p> </p>\r\n','1529853353.pdf','1529853353.jpg','',0,1,'2018-06-24 20:45:52','2018-06-27 08:12:36',1),(13,14,'20','2018','Clinical Oncology Research Journal','vasudevareddy reddem','Clinical Oncology Research Journal','Clinical -Oncology -Research-Journal','Clinical Oncology Research Journal','Clinical Oncology Research Journal','Clinical Oncology Research Journal','<p>Gavin Publishers is an online international open access, peer reviewed journals publishing organization which publishes all kinds of manuscripts (Research, Review, Case Reports, Editorials, Brief Reviews, Research Highlights, etc.,) from the fields related to Clinical, Pharmaceutical, Medical Sciences and Engineering.</p>\r\n\r\n<p>Our passion for serving the scientific community drove us to publish our journals through an open access mode (free to read and free to download). We strive hard to spread the knowledge and to broaden the scope of Gavin Publishers Journals worldwide. We welcome distinguished researchers, scholar, academicians and people involved in and around the fields of Clinical, Biological, Pharmaceutical, Medical, Life Sciences and Engineering with open arms to come forward to share and to gain the knowledge by an open access mode and generate a platform for emerging scholars and researchers where they can build a huge forum of scientific community at global level.</p>\r\n','<p>Gavin Publishers is an online international open access, peer reviewed journals publishing organization which publishes all kinds of manuscripts (Research, Review, Case Reports, Editorials, Brief Reviews, Research Highlights, etc.,) from the fields related to Clinical, Pharmaceutical, Medical Sciences and Engineering.</p>\r\n\r\n<p>Our passion for serving the scientific community drove us to publish our journals through an open access mode (free to read and free to download). We strive hard to spread the knowledge and to broaden the scope of Gavin Publishers Journals worldwide. We welcome distinguished researchers, scholar, academicians and people involved in and around the fields of Clinical, Biological, Pharmaceutical, Medical, Life Sciences and Engineering with open arms to come forward to share and to gain the knowledge by an open access mode and generate a platform for emerging scholars and researchers where they can build a huge forum of scientific community at global level.</p>\r\n','<p>Gavin Publishers is an online international open access, peer reviewed journals publishing organization which publishes all kinds of manuscripts (Research, Review, Case Reports, Editorials, Brief Reviews, Research Highlights, etc.,) from the fields related to Clinical, Pharmaceutical, Medical Sciences and Engineering.</p>\r\n\r\n<p>Our passion for serving the scientific community drove us to publish our journals through an open access mode (free to read and free to download). We strive hard to spread the knowledge and to broaden the scope of Gavin Publishers Journals worldwide. We welcome distinguished researchers, scholar, academicians and people involved in and around the fields of Clinical, Biological, Pharmaceutical, Medical, Life Sciences and Engineering with open arms to come forward to share and to gain the knowledge by an open access mode and generate a platform for emerging scholars and researchers where they can build a huge forum of scientific community at global level.</p>\r\n','<p>Gavin Publishers is an online international open access, peer reviewed journals publishing organization which publishes all kinds of manuscripts (Research, Review, Case Reports, Editorials, Brief Reviews, Research Highlights, etc.,) from the fields related to Clinical, Pharmaceutical, Medical Sciences and Engineering.</p>\r\n\r\n<p>Our passion for serving the scientific community drove us to publish our journals through an open access mode (free to read and free to download). We strive hard to spread the knowledge and to broaden the scope of Gavin Publishers Journals worldwide. We welcome distinguished researchers, scholar, academicians and people involved in and around the fields of Clinical, Biological, Pharmaceutical, Medical, Life Sciences and Engineering with open arms to come forward to share and to gain the knowledge by an open access mode and generate a platform for emerging scholars and researchers where they can build a huge forum of scientific community at global level.</p>\r\n','<p>Gavin Publishers is an online international open access, peer reviewed journals publishing organization which publishes all kinds of manuscripts (Research, Review, Case Reports, Editorials, Brief Reviews, Research Highlights, etc.,) from the fields related to Clinical, Pharmaceutical, Medical Sciences and Engineering.</p>\r\n\r\n<p>Our passion for serving the scientific community drove us to publish our journals through an open access mode (free to read and free to download). We strive hard to spread the knowledge and to broaden the scope of Gavin Publishers Journals worldwide. We welcome distinguished researchers, scholar, academicians and people involved in and around the fields of Clinical, Biological, Pharmaceutical, Medical, Life Sciences and Engineering with open arms to come forward to share and to gain the knowledge by an open access mode and generate a platform for emerging scholars and researchers where they can build a huge forum of scientific community at global level.</p>\r\n','<p>Gavin Publishers is an online international open access, peer reviewed journals publishing organization which publishes all kinds of manuscripts (Research, Review, Case Reports, Editorials, Brief Reviews, Research Highlights, etc.,) from the fields related to Clinical, Pharmaceutical, Medical Sciences and Engineering.</p>\r\n\r\n<p>Our passion for serving the scientific community drove us to publish our journals through an open access mode (free to read and free to download). We strive hard to spread the knowledge and to broaden the scope of Gavin Publishers Journals worldwide. We welcome distinguished researchers, scholar, academicians and people involved in and around the fields of Clinical, Biological, Pharmaceutical, Medical, Life Sciences and Engineering with open arms to come forward to share and to gain the knowledge by an open access mode and generate a platform for emerging scholars and researchers where they can build a huge forum of scientific community at global level.</p>\r\n','<p>Gavin Publishers is an online international open access, peer reviewed journals publishing organization which publishes all kinds of manuscripts (Research, Review, Case Reports, Editorials, Brief Reviews, Research Highlights, etc.,) from the fields related to Clinical, Pharmaceutical, Medical Sciences and Engineering.</p>\r\n\r\n<p>Our passion for serving the scientific community drove us to publish our journals through an open access mode (free to read and free to download). We strive hard to spread the knowledge and to broaden the scope of Gavin Publishers Journals worldwide. We welcome distinguished researchers, scholar, academicians and people involved in and around the fields of Clinical, Biological, Pharmaceutical, Medical, Life Sciences and Engineering with open arms to come forward to share and to gain the knowledge by an open access mode and generate a platform for emerging scholars and researchers where they can build a huge forum of scientific community at global level.</p>\r\n','1530204214.pdf','1530204214.jpg','',0,1,'2018-06-28 22:13:33',NULL,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `journal_banners` */

insert  into `journal_banners`(`id`,`journal_id`,`baneer_image`,`title`,`alt_tags`,`status`,`create_at`,`update_at`,`create_by`) values (2,5,'1529253750.jpg','ghdfghdgh','bvbxcvb',1,'2018-06-17 21:59:39','2018-06-25 20:58:39',1),(3,11,'1530111927.jpg','like  that','dfgdg',1,'2018-06-27 20:29:43','2018-06-27 20:35:26',1),(4,11,'1530111918.jpg','vasudevareddy','cbvbvc',1,'2018-06-27 20:30:22','2018-06-27 20:35:18',1),(5,14,'1530202500.jpg','Clinical Oncology Research Journal (CORJ)','Clinical Oncology Research Journal (CORJ)',1,'2018-06-28 21:44:59','2018-06-28 21:44:59',1),(6,14,'1530202513.jpg','Clinical Oncology Research Journal (CORJ)','Clinical Oncology Research Journal (CORJ)',1,'2018-06-28 21:45:12','2018-06-28 21:45:12',1),(7,14,'1530202527.jpg','Clinical Oncology Research Journal (CORJ)','Clinical Oncology Research Journal (CORJ)',1,'2018-06-28 21:45:26','2018-06-28 21:45:26',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `journal_editors` */

insert  into `journal_editors`(`j_e_id`,`journal_id`,`journal_cat_id`,`image`,`name`,`email`,`phone`,`designation`,`position`,`country`,`university`,`priority`,`biography`,`status`,`create_at`,`update_at`,`create_by`) values (2,12,22,'1529334192.jpg','vasudevareddy reddem','cvb@gmail.com','8500050944','des','Editor in cheif','Aruba','bxcvbxcvb','1','testing',1,'2018-06-18 20:33:11','2018-06-24 16:52:09',1),(3,12,22,'1529336187.jpg','bxcvbxcvb','vcbxcvb@gmail.com','8500050944','des','Editorial board member','Australia','cvzxcv','1','fgfgdfg',1,'2018-06-18 20:38:50','2018-06-24 16:51:46',1),(4,11,21,'1529838815.jpg','vaasudevareddy','vaasudevareddy@gmail.com','8500050944','Designation','Editor in cheif','United States','us','1','biography',1,'2018-06-24 16:43:34','2018-06-25 20:57:21',1),(5,11,21,'1530112368.jpg','vasudevareddy reddem','admin@gmail.com','8500050944','designation','Editor in cheif','Iceland','University','1','vbxvbxcvbxcvb',1,'2018-06-27 20:42:48','2018-06-27 20:42:48',1),(6,11,21,'1530112397.jpg','vasudevareddy reddem','admin@gmail.com','8500050944','designation','Editor in cheif','Bahrain','University','3','cvcvzxcv',1,'2018-06-27 20:43:17','2018-06-27 20:43:17',1),(7,11,21,'1530112449.jpg','bayapu reddy','bayapu@gmail.com','8500050944','designation','Editorial board member','Andorra','University','5','Images with high resolutions must be submitted by the author. Authors should take full responsibility for copyrighted images during submission and publication process.Clinical and Medical Imaging is an open access journal publishing research/original submissions, reviews, brief reports, case studies, rapid communications, letters to the editor etc. related to basic, experimental and clinical aspects of research.',1,'2018-06-27 20:44:08','2018-06-27 21:20:33',1),(8,14,20,'1530202990.jpg','prudhvi raj','prudhviraj@gmail.com','8500050944','designation','Editor in cheif','United States','University','1','Clinical Oncology Research Journal (CORJ) welcomes distinguished team of cancer researchers, scholars, scientists, medical/surgical/clinical practioners who have hardcore motivation for this ongoing oncology research to generate forum at a global stage and express, exchanges their updates for its reader as the single most credible, authoritative resource for disseminating significant clinical oncology',1,'2018-06-28 21:53:10','2018-06-28 21:53:10',1),(9,14,20,'1530203974.jpg','vasudevareddy reddem','admin@gmail.com','8500050944','designation','Executive editor','Bangladesh','University','5','So, keeping this as strategy the journal maintains rapid publication of high quality results in cancer research through original Research articles, Short research communication, Reviews, Mini reviews, Image articles, Case studies,  Hypothesis, Method and protocol, New instruments and regimens, Letter to the editor by electronic format of publications.',1,'2018-06-28 22:09:34','2018-06-28 22:09:34',1),(10,14,20,'1530204007.jpg','name','test@gmail.com','8500050944','designation','Editor in cheif','Bahrain','University','5','So, keeping this as strategy the journal maintains rapid publication of high quality results in cancer research through original Research articles, Short research communication, Reviews, Mini reviews, Image articles, Case studies,  Hypothesis, Method and protocol, New instruments and regimens, Letter to the editor by electronic format of publications.',1,'2018-06-28 22:10:06','2018-06-28 22:10:06',1),(11,14,20,'1530204035.jpg','bayapu reddy','bayapu@gmail.com','65656345656','designation','Executive editor','Bangladesh','University','2','So, keeping this as strategy the journal maintains rapid publication of high quality results in cancer research through original Research articles, Short research communication, Reviews, Mini reviews, Image articles, Case studies,  Hypothesis, Method and protocol, New instruments and regimens, Letter to the editor by electronic format of publications.',1,'2018-06-28 22:10:35','2018-06-28 22:10:35',1);

/*Table structure for table `journals` */

DROP TABLE IF EXISTS `journals`;

CREATE TABLE `journals` (
  `j_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) DEFAULT NULL,
  `baneer_image` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `alt_tags` varchar(250) DEFAULT NULL,
  `seo_title` varchar(250) DEFAULT NULL,
  `seo_url` varchar(250) DEFAULT NULL,
  `seo_keywords` varchar(250) DEFAULT NULL,
  `seo_description` text,
  `key_words` text,
  `description` text,
  `prices` text,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`j_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `journals` */

insert  into `journals`(`j_id`,`category`,`baneer_image`,`title`,`subject`,`alt_tags`,`seo_title`,`seo_url`,`seo_keywords`,`seo_description`,`key_words`,`description`,`prices`,`status`,`create_at`,`update_at`,`create_by`) values (5,20,'1529837540.jpg','Advanced Research in Biosensor and Bioelectronics(ARBB)','Advanced Research in Biosensor and Bioelectronics(ARBB)','Advanced Research in Biosensor and Bioelectronics(ARBB)','Advanced Research in Biosensor and Bioelectronics(ARBB)','Advanced Research-in-Biosensor-and-Bioelectronics','Advanced Research in Biosensor and Bioelectronics(ARBB)','Advanced Research in Biosensor and Bioelectronics(ARBB)','<p>Advanced Research in Biosensor and Bioelectronics(ARBB)</p>\r\n','<p>Advanced Research in Biosensor and Bioelectronics(ARBB)</p>\r\n','Advanced Research in Biosensor and Bioelectronics(ARBB)',1,'2018-06-24 16:22:20','2018-06-24 16:22:20',1),(6,20,'1529837589.jpg','Annals of Medical & Surgical Case Reports(AMSC)','Annals of Medical & Surgical Case Reports(AMSC)','Annals of Medical & Surgical Case Reports(AMSC)','Annals of Medical & Surgical Case Reports(AMSC)','Annals-of-Medical-&-Surgica-ase-Reports','Annals of Medical & Surgical Case Reports(AMSC)','Annals of Medical & Surgical Case Reports(AMSC)','<p>Annals of Medical & Surgical Case Reports(AMSC)</p>\r\n','<p>Annals of Medical & Surgical Case Reports(AMSC)</p>\r\n','Annals of Medical & Surgical Case Reports(AMSC)',1,'2018-06-24 16:23:09','2018-06-24 16:23:09',1),(7,20,'1529837614.jpg','Annals of Pediatrics and Child Care','Annals of Pediatrics and Child Care','Annals of Pediatrics and Child Care','Annals of Pediatrics and Child Care','Annals-of-Pediatrics-and-Child-Care','Annals of Pediatrics and Child Care','Annals of Pediatrics and Child Care','<p>Annals of Pediatrics and Child Care</p>\r\n','<p>Annals of Pediatrics and Child Care</p>\r\n','Annals of Pediatrics and Child Care',1,'2018-06-24 16:23:34','2018-06-24 16:23:34',1),(9,20,'1529837664.jpg','Current Updates in Dermatological Problems (CUDP)','Current Updates in Dermatological Problems (CUDP)','Current Updates in Dermatological Problems (CUDP)','Current Updates in Dermatological Problems (CUDP)','Current Updates in Dermatological Problems ','Current Updates in Dermatological Problems (CUDP)','Current Updates in Dermatological Problems (CUDP)','<p>Current Updates in Dermatological Problems (CUDP)</p>\r\n','<p>Current Updates in Dermatological Problems (CUDP)</p>\r\n','Current Updates in Dermatological Problems (CUDP)',1,'2018-06-24 16:24:23','2018-06-24 16:24:23',1),(10,20,'1529837689.jpg','Dentistry and Dental Ailments Journal (DDAJ)','Dentistry and Dental Ailments Journal (DDAJ)','Dentistry and Dental Ailments Journal (DDAJ)','Dentistry and Dental Ailments Journal (DDAJ)','Dentistry and Dental Ailments Journal','Dentistry and Dental Ailments Journal (DDAJ)','Dentistry and Dental Ailments Journal (DDAJ)','<p>Dentistry and Dental Ailments Journal (DDAJ)</p>\r\n','<p>Dentistry and Dental Ailments Journal (DDAJ)</p>\r\n','Dentistry and Dental Ailments Journal (DDAJ)',1,'2018-06-24 16:24:49','2018-06-24 16:24:49',1),(11,21,'1529837715.jpg','Insights of Cardiology: Open Access (ICOA)','Insights of Cardiology: Open Access (ICOA)','Insights of Cardiology: Open Access (ICOA)','Insights of Cardiology: Open Access (ICOA)','Insights of Cardiology: Open Access ','Insights of Cardiology: Open Access (ICOA)','Insights of Cardiology: Open Access (ICOA)','<p>Insights of Cardiology: Open Access (ICOA)</p>\r\n','<p>Insights of Cardiology: Open Access (ICOA)</p>\r\n','Insights of Cardiology: Open Access (ICOA)',1,'2018-06-24 16:25:14','2018-06-24 16:25:14',1),(12,22,'1530107701.jpg','International Journal of Education Advancement (IJEA)','International Journal of Education Advancement (IJEA)','International Journal of Education Advancement (IJEA)','International Journal of Education Advancement (IJEA)','International Journal of Education Advancement','International Journal of Education Advancement (IJEA)','International Journal of Education Advancement (IJEA)','<p>International Journal of Education Advancement (IJEA)</p>\r\n','<p>International Journal of Education Advancement (IJEA)</p>\r\n','International Journal of Education Advancement (IJEA)',1,'2018-06-24 16:25:43','2018-06-27 19:25:00',1),(13,22,'1530107424.jpg','Journal of Biomarker Research and Studies','Journal of Biomarker Research and Studies','Journal of Biomarker Research and Studies','Journal of Biomarker Research and Studies','Journal of Biomarker Research and Studies','Journal of Biomarker Research and Studies','Journal of Biomarker Research and Studies','<h3><a href=\"https://www.gavinpublishers.com/journals/journals_details/health-medical-informatics-open-access.html#\"><strong>Highlighted Topics</strong></a></h3>\r\n\r\n<ul>\r\n <li>Clinical Informatics</li>\r\n <li>Applied Clinical Informatics</li>\r\n <li>Computational Health Informatics</li>\r\n <li>Consumer Health Informatics</li>\r\n <li>Dental Informatics</li>\r\n <li>Health Informatics Applications</li>\r\n <li>Health Informatics</li>\r\n <li>Health Information Management</li>\r\n <li>Human Bioinformatics</li>\r\n <li>Innovation Studies</li>\r\n <li>Medical Informatics Applications</li>\r\n</ul>\r\n\r\n<p> </p>\r\n','<h3><a href=\"https://www.gavinpublishers.com/journals/journals_details/health-medical-informatics-open-access.html#\"><strong>About the Journal</strong></a></h3>\r\n\r\n<p>Health & Medical Informatics Open Access is an open access online journal provides an international medium comprising of extensive range of current research in the field of Health & Medical informatics. Health and Medical informatics is a multidisciplinary field that uses Health Information Technology (HIT) to improve health care by the combination of higher quality and efficiency. This Journal emphasizes the evaluation of systems in healthcare setting creating a unique platform to collect and share valuable studies that gives a wide knowledge for researchers/students in the field.</p>\r\n\r\n<h3><strong>Aim and Scope</strong></h3>\r\n\r\n<p>Health & Medical Informatics Open Accessis a peer-reviewed scientific journal covers high quality manuscripts that broadens the scope of the journal.</p>\r\n\r\n<p>The Journal aims to serve the scientific community with information provided and related research and take it to international level. In order to achieve this, it is important to bring into light disseminate outstanding research and development results to the world instantaneously the latest advances in the domain of health &medical informatics. Journal intended to collect precise data in the fields of health care informatics, healthcare management,informatics and telematics,information systems and all related aspects.</p>\r\n\r\n<p>  </p>\r\n\r\n<p>All published articles are assigned to Digital Object Identifier <a name=\"_GoBack\"></a>(DOI) - Crossref.</p>\r\n\r\n<p> </p>\r\n\r\n<p>All published articles are permanently archived and available at Gavin Publishers website in HTML and PDF formats.</p>\r\n','Journal of Biomarker Research and Studies',1,'2018-06-24 16:26:07','2018-06-27 20:03:33',1),(14,20,'1530202418.jpg','Clinical Oncology Research Journal ','Oncology ','Clinical Oncology Research Journal ','clinical-Oncology- Research -journal ','clinical-Oncology- Research -journal ','clinical-Oncology- Research -journal ','clinical-Oncology- Research -journal ','<p><strong>Coverage Topics</strong></p>\r\n\r\n<p>Manuscripts are highly encouraged to be submitted topics mentioned with:</p>\r\n\r\n<ul>\r\n <li>Cancer signs and symptoms</li>\r\n <li>Causes of cancer</li>\r\n <li>Carcinogenesis</li>\r\n <li>Cancer epigenetics</li>\r\n <li>Cancer and risk factors</li>\r\n <li>Cancer prevention</li>\r\n <li>Cancer screening</li>\r\n <li>Cancer immunotherapy</li>\r\n <li>Cancer and medication</li>\r\n <li>Complementary and alternative cancer treatments</li>\r\n <li>Cancer survivor and health care</li>\r\n <li>Cancer research</li>\r\n <li>Diet and cancer</li>\r\n <li>Epidemiology of cancer</li>\r\n <li>Geriatric oncology</li>\r\n <li>Gynecologic oncology</li>\r\n <li>Management of cancer and oncology</li>\r\n <li>Pediatric oncology</li>\r\n <li>Surgical oncology</li>\r\n <li>Radiation oncology</li>\r\n <li>Oncogenomics</li>\r\n <li>Types of cancer and symptoms</li>\r\n</ul>\r\n','<p><strong>Scope:</strong></p>\r\n\r\n<p>Clinical Oncology Research Journal (CORJ) welcomes distinguished team of cancer researchers, scholars, scientists, medical/surgical/clinical practioners who have hardcore motivation for this ongoing oncology research to generate forum at a global stage and express, exchanges their updates for its reader as the single most credible, authoritative resource for disseminating significant clinical oncology research. So, keeping this as strategy the journal maintains rapid publication of high quality results in cancer research through original Research articles, Short research communication, Reviews, Mini reviews, Image articles, Case studies,  Hypothesis, Method and protocol, New instruments and regimens, Letter to the editor by electronic format of publications.</p>\r\n\r\n<p>The journal provides all its scholarly based archives in pdf/html format with free access and downloads.</p>\r\n','test',1,'2018-06-28 21:43:38','2018-06-28 21:43:38',1);

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

insert  into `media_partners`(`id`,`title`,`image`,`alt_tags`,`status`,`create_at`,`update_at`,`create_by`) values (4,'vasu','1529678018.jpg','nhfg hgh fgsfgsf',1,'2018-06-26 08:14:19','2018-06-22 20:02:57',1);

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

insert  into `news_article`(`id`,`title`,`description`,`link`,`status`,`create_at`,`update_at`,`create_by`) values (6,'dfgfgsfg','vasudevareddy','link',1,'2018-06-26 08:15:22','2018-06-22 20:26:44',1),(7,'title','sdfgsdf','gsdfgsdfg',1,'2018-06-26 08:15:30','2018-06-22 20:29:12',1);

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

insert  into `newsletters`(`id`,`name`,`email`,`status`,`create_at`,`update_at`) values (1,'vasudevareddy reddem','vasu@gmail.com',1,'2018-06-22 23:15:03','2018-06-26 08:26:44'),(2,'ghghd','ghdgfhf@gmail.com',0,'2018-06-22 23:15:56','2018-06-22 23:30:56');

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

insert  into `published_gallery`(`id`,`image`,`alt_tags`,`status`,`create_at`,`update_at`,`create_by`) values (2,'1529603448.jpg','testing',1,'2018-06-26 08:16:34','2018-06-21 23:20:47',1);

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

insert  into `reviewerboard`(`id`,`category`,`journal`,`name`,`university`,`country`,`reviewer_board`,`status`,`craete_at`,`update_at`,`create_by`) values (2,'20','6','vasudeva','vasu','Armenia','fgsdfgsdf',1,'2018-06-24 17:22:40','0000-00-00 00:00:00',1),(3,'21','11','name','us','Afghanistan','tetsing',1,'2018-06-26 08:18:20','2018-06-24 17:21:54',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `special_issue` */

insert  into `special_issue`(`id`,`journal_id`,`journal_cat_id`,`title`,`details`,`status`,`create_at`,`update_at`,`create_by`) values (3,13,22,'ghdg','<p>vasu <strong>devareddy </strong></p>\r\n',1,'2018-06-24 15:25:11','2018-06-24 17:28:22',1),(5,11,21,'testing','<h1><strong>Special Issue </strong></h1>\r\n\r\n<p><strong>Current trends in Cosmetology & Oro Facial Surgery</strong> is a multidisciplinary, peer-reviewed open access journal, which brings the clinical practice and education into a single platform. It covers the aesthetic and craniofacial aspects of plastic surgery and also includes microsurgery, wound healing, maxillofacial cosmetic surgery, breast reconstruction etc.</p>\r\n\r\n<p><strong>Aim and Scope</strong></p>\r\n\r\n<p>Our aim is to serve the scientific knowledge to the readers with unlimited free access. We consider research manuscripts, review manuscripts, editorials, commentaries, opinions, case studies, case reports, clinical images, letters and perspectives. Editorials, perspectives and opinions are submitted by authors and editorial board members on topics pertaining to Cosmetology as well as Orofacial Surgery.</p>\r\n\r\n<p>All published articles are assigned to Digital Object Identifier (DOI) - Crossref.</p>\r\n\r\n<p> </p>\r\n\r\n<p>All published articles are permanently archived and available at Gavin Publishers website in HTML and PDF formats.</p>\r\n',1,'2018-06-27 21:44:00','2018-06-27 21:44:00',1),(6,14,20,'Clinical Oncology Research Journal (CORJ)','<h3><a href=\"https://www.gavinpublishers.com/journals/articleprocessfee/journal-of-urology-and-renal-diseases-ISSN-2575-7903#\"><strong>Article Submission Guidelines </strong></a></h3>\r\n\r\n<p><strong>Manuscript Title</strong></p>\r\n\r\n<p>Manuscript title limit should not exceed 28 words. It should not contain abbreviations and the title should be a brief phrase which describes the contents present in the article.</p>\r\n\r\n<p><strong>Details of the Author</strong></p>\r\n\r\n<p>The details (full names and affiliations) of all the authors should be given in the manuscript. For corresponding author details (<strong>Live </strong>address with <strong>Telephone</strong>, <strong>Fax</strong> and <strong>E- mail </strong>address) should be provided in the manuscript.</p>\r\n\r\n<p><strong>Image Submission:</strong></p>\r\n\r\n<p>Images with high resolutions must be submitted by the author. Authors should take full responsibility for copyrighted images during submission and publication process.Clinical and Medical Imaging is an open access journal publishing research/original submissions, reviews, brief reports, case studies, rapid communications, letters to the editor etc. related to basic, experimental and clinical aspects of research.</p>\r\n\r\n<p><strong>Submission:</strong></p>\r\n\r\n<p>Submit your contribution through contact@gavinpublishers.org</p>\r\n\r\n<p><strong>Instructions to be followed:</strong></p>\r\n\r\n<ol>\r\n <li>A brief title describing, content of the image.</li>\r\n <li>Images must be submitted in TIFF, PDF or PPT.</li>\r\n <li>The description regarding the image must be limited (250 words).</li>\r\n <li>Images should be captured at the following minimum resolutions: halftones and colour (all colour must be RGB) 100-200 dpi; combination halftones 350 dpi; line art 500 dpi to match the journal criteria.</li>\r\n <li>Citations/References (URL) should be mentioned properly.</li>\r\n</ol>\r\n\r\n<p><strong>Presentation:</strong></p>\r\n\r\n<p>Presentation is a means of communication that helps a person to disclose his work under a broad spectrum of clinical and medical sciences. Presentations are of three types: Power Point Presentation, Flow Chart and Poster presentation.</p>\r\n\r\n<p><strong>Figures and Tables</strong></p>\r\n\r\n<p><strong>Figures:</strong></p>\r\n\r\n<p>Suggested formats for figures should be in bitmap formats (JPEG, GIF, TIFF, etc.). Please send us the Photoshop indexes, in case the pictures need any differential segments on distinctive layers.</p>\r\n\r\n<p><strong>Figure Legends:</strong></p>\r\n\r\n<p>Use numerical to designate figures (e.g., Figure 1). Use justifiable description, if necessary.</p>\r\n\r\n<p><strong>Figure Quality:</strong></p>\r\n\r\n<p>During submissions, figures are supposed to be at sufficient quality, preferably as JPEGs.</p>\r\n\r\n<p><strong>Tables:</strong></p>\r\n\r\n<p>Tables can be included in the text, if not submitted as a separate file, oriented in portrait form (not landscape) and upright on the page, not sideways.</p>\r\n\r\n<p><strong>Table Legends:</strong></p>\r\n\r\n<p>Use numerical to designate tables (e.g., Table 1). Use justifiable description, if necessary.</p>\r\n\r\n<p><strong>Equations as Graphics:</strong></p>\r\n\r\n<p>If equations cannot be encoded in MathML, submit them in TIFF or EPS format as discrete files (i.e., a file containing only the data for one equation). Only when tables cannot be encoded as XML/SGML can they be submitted as graphics. If this method is used, it is critical that the font size in all equations and tables is consistent and legible throughout all submissions.</p>\r\n\r\n<ol>\r\n <li>Suggested Equation Extraction Method</li>\r\n</ol>\r\n\r\n<p> \r\n<p> </p>\r\n</p>\r\n',1,'2018-06-28 22:18:02','2018-06-28 22:18:02',1);

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

insert  into `testimonial`(`id`,`name`,`professional`,`image`,`description`,`status`,`create_at`,`update_at`,`create_by`) values (2,'vasudevareddy reddem','profinal','1529423720.jpg','gdfgsfgdsf',1,'2018-06-19 21:25:19','2018-06-26 08:19:15',1),(3,'vasudevareddy reddem','profinal','1529424434.jpg','gdfgsfgdsf',1,'2018-06-19 21:35:03','0000-00-00 00:00:00',1);

/*Table structure for table `updates` */

DROP TABLE IF EXISTS `updates`;

CREATE TABLE `updates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `updates` text,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `updates` */

insert  into `updates`(`id`,`title`,`updates`,`status`,`create_at`,`update_at`,`create_by`) values (2,'this  vasu ','reddem',1,'2018-06-27 08:05:52','2018-06-26 08:20:14',1),(3,'like that psoot','vasu',1,'2018-06-19 22:28:10',NULL,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
