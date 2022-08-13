/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.17 : Database - ajax_demo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ajax_demo` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ajax_demo`;

/*Table structure for table `student_info` */

DROP TABLE IF EXISTS `student_info`;

CREATE TABLE `student_info` (
  `student_id` varchar(11) NOT NULL,
  `student_name` varchar(50) DEFAULT NULL,
  `student_address` varchar(100) DEFAULT NULL,
  `semister` varchar(15) DEFAULT NULL,
  `stu_cgpa` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `student_info` */

insert  into `student_info`(`student_id`,`student_name`,`student_address`,`semister`,`stu_cgpa`) values ('13510101','Iqbal Hossain1','Chittagong','8th','3.92'),('13510102','Tohidul Islam','Miroshrai','7th','3.50'),('13510103','Emran Hossain','Dhaka','5th','3.32'),('13510104','Kuddus Bulbul','Faridpur','10th','3.00'),('13510105','Sayed Hossain','Feni','8th','3.26');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
