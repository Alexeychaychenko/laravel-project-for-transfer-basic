/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.17-MariaDB : Database - laxwin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `end_days` */

DROP TABLE IF EXISTS `end_days`;

CREATE TABLE `end_days` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `end_days` */

insert  into `end_days`(`id`,`username`,`amount`,`comment`,`created_at`,`updated_at`) values 
(7,'Employer',234.00,'asdfasdf','2021-03-04 00:35:37','2021-03-04 00:35:37'),
(8,'Location Manager',23.00,'sdfasdf','2021-03-04 00:35:47','2021-03-04 00:35:47');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `intakes` */

DROP TABLE IF EXISTS `intakes`;

CREATE TABLE `intakes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `shippingmethod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippingweight` double(8,2) NOT NULL,
  `pickup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `week` int(11) NOT NULL,
  `Box` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `intakes` */

insert  into `intakes`(`id`,`shippingmethod`,`customername`,`barcode`,`description`,`shippingweight`,`pickup`,`location`,`price`,`week`,`Box`,`status`,`created_at`,`updated_at`) values 
(1,'air','Location Manager','TBA155499926201','PART123',1.50,'Highway','LOC0134',10.43,9,'Unknown','New','2021-03-01 00:59:45','2021-03-04 02:44:47'),
(2,'eco','Client','sdf','sfdf',0.40,'KerKplein','LOC0073',2.78,9,'Unknown','New','2021-03-02 15:32:32','2021-03-05 00:08:39'),
(3,'eco','Location Manager','sdf','sfdf',0.40,'Highway','LOC0134',2.78,9,'Unknown','New','2021-03-02 15:33:13','2021-03-05 00:09:02'),
(4,'eco','Admin','sdf','sfdf',0.40,'KerKplein','LOD0982',1.70,9,'Unknown','New','2021-03-02 15:33:21','2021-03-05 00:08:09'),
(5,'2','Location Manager','234234','sdfasdf',0.40,'Highway','LOC0134',691.20,9,'Unknown','New','2021-03-02 15:34:50','2021-03-02 15:34:50'),
(12,'eco','Client','3234234','fdgsdfg',0.40,'KerKplein','LOC0073',1.70,9,'Unknown','New','2021-03-05 22:36:31','2021-03-05 22:36:31'),
(13,'eco','Employer','2342','sdfsdf',0.40,'Moengo','LOC0056',1.70,9,'Unknown','New','2021-03-05 22:37:46','2021-03-05 22:37:46');

/*Table structure for table `locations` */

DROP TABLE IF EXISTS `locations`;

CREATE TABLE `locations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locationname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `locations` */

insert  into `locations`(`id`,`photo`,`locationname`,`shortname`,`comments`,`price`,`created_at`,`updated_at`) values 
(1,'location_default.png','Kerklpein','Kerkplein','This is Kerkplein',123.12,'2021-02-26 10:56:56','2021-02-26 10:56:56');

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `touser` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `messages` */

insert  into `messages`(`id`,`touser`,`username`,`content`,`created_at`,`updated_at`) values 
(1,1,'','You are Welcom! In our site, you can get All survice...','2021-02-26 10:58:25','2021-02-26 10:58:25'),
(2,1,'','adfasdfasdf','2021-02-26 12:15:31','2021-02-26 12:15:31'),
(3,0,'Client','adfasdfasdf','2021-02-26 12:15:57','2021-02-26 12:15:57'),
(4,1,'','hello','2021-02-26 12:22:43','2021-02-26 12:22:43'),
(5,0,'Client','ok','2021-02-26 12:22:58','2021-02-26 12:22:58'),
(15,1,'','asdfasdf','2021-02-26 12:43:56','2021-02-26 12:43:56'),
(16,1,'','asdfas','2021-02-26 12:43:58','2021-02-26 12:43:58'),
(17,0,'Location Manager','asdfasdf','2021-02-26 12:45:19','2021-02-26 12:45:19'),
(18,0,'Admin','fsdfasdf','2021-02-26 13:04:56','2021-02-26 13:04:56'),
(21,0,'Client','sdfasdfasdf','2021-02-26 13:41:12','2021-02-26 13:41:12'),
(22,0,'Admin','fasdfas','2021-02-26 13:41:37','2021-02-26 13:41:37'),
(23,1,'','asdfasdfasdf','2021-02-26 14:08:07','2021-02-26 14:08:07'),
(24,1,'','sdafsdf','2021-02-26 14:13:28','2021-02-26 14:13:28'),
(25,1,'','sdfasdf','2021-02-26 14:13:41','2021-02-26 14:13:41'),
(26,0,'Client','dfasdfa','2021-02-26 14:13:49','2021-02-26 14:13:49'),
(27,1,'','asdfasdf','2021-02-26 14:14:03','2021-02-26 14:14:03'),
(28,1,'','asdfas','2021-02-26 14:14:08','2021-02-26 14:14:08'),
(29,1,'','asdfasdf','2021-02-26 14:17:20','2021-02-26 14:17:20'),
(30,0,'Client','sdfasdf','2021-02-26 14:19:06','2021-02-26 14:19:06'),
(31,1,'','sadfasdf','2021-02-26 14:19:28','2021-02-26 14:19:28'),
(32,1,'','asdfasdfasdf','2021-02-26 14:20:32','2021-02-26 14:20:32'),
(33,1,'','sdafasdfasdf','2021-02-26 14:24:06','2021-02-26 14:24:06'),
(34,0,'Employer','sadfasdf','2021-02-26 14:24:25','2021-02-26 14:24:25'),
(35,1,'','Good morning. \ni am support .\nwho are working in this site now?','2021-02-28 08:31:47','2021-02-28 08:31:47');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2021_02_23_103230_create_setting_tables_table',1),
(5,'2021_02_24_194703_create_locations_table',1),
(6,'2021_02_25_073456_create_slides_table',1),
(7,'2021_02_25_200526_create_suppliers_table',1),
(9,'2021_02_26_083736_create_message',2),
(12,'2021_02_27_073735_create_start_days_table',4),
(13,'2021_02_27_231844_create_end_days_table',5),
(14,'2021_02_26_234528_create_intakes_table',6);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `setting` */

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `airmailprice` double(8,2) NOT NULL,
  `ecoprice` double(8,2) NOT NULL,
  `seafreightfactor` double(8,2) NOT NULL,
  `seafreightprice` double(8,2) NOT NULL,
  `srdrate` double(8,2) NOT NULL,
  `eurorate` double(8,2) NOT NULL,
  `giftcardrate` double(8,2) NOT NULL,
  `orderrate` double(8,2) NOT NULL,
  `seafreightrate` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `setting` */

insert  into `setting`(`id`,`airmailprice`,`ecoprice`,`seafreightfactor`,`seafreightprice`,`srdrate`,`eurorate`,`giftcardrate`,`orderrate`,`seafreightrate`,`created_at`,`updated_at`) values 
(1,6.95,4.25,15.00,1728.00,7.70,7.70,0.03,0.09,1.25,'2021-02-26 10:56:36','2021-03-01 00:25:00');

/*Table structure for table `slides` */

DROP TABLE IF EXISTS `slides`;

CREATE TABLE `slides` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `imagename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `slides` */

insert  into `slides`(`id`,`imagename`,`created_at`,`updated_at`) values 
(1,'900omslag.png','2021-02-26 10:57:08','2021-02-26 10:57:08'),
(2,'161490314120238819.jpg','2021-02-26 10:57:08','2021-03-05 00:12:21'),
(3,'900bannerfb2020-new.png','2021-02-26 10:57:08','2021-02-26 10:57:08');

/*Table structure for table `start_days` */

DROP TABLE IF EXISTS `start_days`;

CREATE TABLE `start_days` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `start_days` */

insert  into `start_days`(`id`,`username`,`amount`,`comment`,`created_at`,`updated_at`) values 
(21,'Client',234.30,'htis iskkd','2021-02-28 13:09:39','2021-02-28 13:09:39');

/*Table structure for table `suppliers` */

DROP TABLE IF EXISTS `suppliers`;

CREATE TABLE `suppliers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `suppliers` */

insert  into `suppliers`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'AMAZON NL','2021-02-26 10:57:18','2021-02-28 23:27:26'),
(5,'AMAZON NL','2021-02-28 23:27:57','2021-02-28 23:27:57');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idcard` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idcardnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `readmessage` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`idcard`,`status`,`idcardnumber`,`firstname`,`lastname`,`username`,`readmessage`,`email`,`email_verified_at`,`phonenumber`,`location`,`pickup`,`address`,`role`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'admin.png','1','123456','Admin','Admin','Admin',-5,'admin@outlook.com',NULL,'','LOD0982','KerKplein','','1','$2y$10$7k3P6abj94eQg1z/gIOVLuXYAH6L1YKlGZXR4U9ZZAerNmzpDyIQW',NULL,'2021-02-26 10:56:47','2021-03-01 00:45:12'),
(2,'client.png','1','234567','Client','Client','Client',20,'client@outlook.com',NULL,'234234234','LOC0073','KerKplein','','2','$2y$10$bPzrfVaGYUZWfZYt4/WK8u9VPdZAEt/gWamjxMqJp/OPCs4nz9mXu',NULL,'2021-02-26 10:56:47','2021-03-06 13:56:31'),
(3,'employer.png','1','345678','Employer','Employer','Employer',10,'employer@outlook.com',NULL,'','LOC0056','Moengo','','1','$2y$10$RTb.apKjU15w4s7V3IfjHO.NaSSu3MnULYexnaHNn/tTQhy/j9DyW',NULL,'2021-02-26 10:56:47','2021-02-28 11:25:09'),
(4,'location.png','1','456789','Location','Location','Location Manager',16,'location@outlook.com',NULL,'324234234234','LOC0134','Highway','','4','$2y$10$CBAHiJrd1zIY7gIx3x8ra.NHXsjPTJ0Tp3JaTttFnf6MYoiMX8IdS',NULL,'2021-02-26 10:56:47','2021-03-03 11:52:03'),
(5,'warehouse.png','1','567890','Warehouse','Warehouse','Warehouse',11,'warehouse@outlook.com',NULL,'02342342234','LOC0024','KerKplein','','5','$2y$10$ASTw3RtO/JopIzxz6napWO3KQyOvzW6gFRTpDklw/w/0Csy.NKJzO',NULL,'2021-02-26 10:56:47','2021-02-28 11:20:04');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
