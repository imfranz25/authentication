-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: syra
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `suffix` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `civil_status` varchar(30) NOT NULL,
  `department` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `qualified_dependent_status` varchar(10) NOT NULL,
  `employee_status` varchar(20) NOT NULL,
  `pay_date` date NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `other_social_media_account` varchar(100) NOT NULL,
  `social_media_account_id` varchar(100) NOT NULL,
  `address_line1` text NOT NULL,
  `address_line2` text NOT NULL,
  `municipality` varchar(100) NOT NULL,
  `state_province` varchar(100) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `picpath` text NOT NULL,
  PRIMARY KEY (`employee_no`),
  UNIQUE KEY `UNIQUE` (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (48,'1225512','Mae','Dela','Cruz','N/A','1995-06-22','Female','Filipino','Single','IT Department','Faculty','S','Regular','2021-05-03','0926327452','francis.ong@cvsu.edu.ph','whatsapp','2326524','Salinas 2','Salinas 2','Bacoor City','Cavite','Philippines',4102,'Lost Angeles Lakers Cap.jpg'),(49,'12255125','Justine','Vitto','Cruz','N/A','2021-05-16','Male','Filipino','Married','IT Department','Faculty','S','Regular','2021-05-16','0926327452','francis.ong@cvsu.edu.ph','whatsapp','21351230','Salinas 1','Salinas 2','Bacoor City','Cavite','Philippines',4102,'New York Style Cap Black.jpg'),(40,'12255127','Juan','Dela','Ting','N/A','1970-01-29','Male','Djibouti','Widowed','IT Department','Faculty','S1','Regular','2021-10-18','0926327452','francis.ong@cvsu.edu.ph','whatsapp','2326524','Salinas 1','Salinas 2','Bacoor City','Cavite','Philippines',4102,'Los Angeles Cap.jpg'),(32,'201820202','Francis','Merchado','Salazar','N/A','2000-08-19','Male','Ethiopian','Seperated','IT Department','Technical','S','Regular','2021-05-26','0926327452','firefly@gmail.com','whatsapp','21351230','Salinas 1 Himalayan','Salinas 2 Himalayan','Bacoor City','Batangas','Pitcairn Island',41020,'New Era HIking Cap.jpg'),(34,'213252','Finch','Dreamer','Resort','N/A','2021-05-06','Male','Filipino','Seperated','IT Department','Faculty','S1','Regular','2021-05-27','0926327452','francis.ong@cvsu.edu.ph','facebook','21351230','Salinas 1 Himalayan','Salinas 2 Himalayan','Bacoor City','Cavite','Philippines',4102,'Struffles Cap Peach.jpg'),(35,'9775454','Jason','Pent','Kenburg','N/A','2018-10-15','Male','Croatian','Seperated','CS Department','Faculty','S3','Regular','2021-05-19','0924363433','kenburg@gmail.com','snapchat','378344','Salinas 1','Salinas 2','Bacoor City','Cavite','Palestine',4102,'New Era Cap Blue.jpg'),(63,'Test','Test','Test','Test','Test','2021-05-16','Male','Filipino','Single','Test','Test','Z','Test','2021-05-16','Test','test@gmail.com','facebook','Test','Test','Test','Test','Test','Philippines',2323,'admin.png');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-17 14:45:48
