-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: authentication
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
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account` (
  `account_id` int(255) NOT NULL AUTO_INCREMENT,
  `account_user` varchar(255) NOT NULL,
  `account_pass` varchar(255) NOT NULL,
  `account_email` varchar(100) NOT NULL,
  `account_created` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES (1,'ADMIN','$2y$10$JT5SNcsfg50iU76s9uJkR.zInm4Py/2Fw7KN4OYR.eh.JWzccT.Ce','francis.ong@cvsu.edu.ph','2021-04-24 10:19:23'),(22,'acer','$2y$10$IMV2HgPpspM5j6v3DprCj.Dz0LFnDvDxABvGy8TLsKyxLjaLtgrXK','acer@gmail.com','2021-05-11 10:00:15'),(23,'qwerty','$2y$10$DXm7B1BaWZtK69ymNuIZjucbaSrDGe0QuBY/Rh8AEiMFCqzpZaAjS','qwerty@gmail.com','2021-05-12 20:25:07'),(24,'francis','$2y$10$LJQwvGi4ELzNmJCzvg61revJxsuHMdcbhGqYE8kF6JlhukDT.yXkW','francis@cvsu.edu.ph','2021-06-15 04:53:06');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `code`
--

DROP TABLE IF EXISTS `code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `code` (
  `code_id` int(255) NOT NULL AUTO_INCREMENT,
  `account_user` varchar(255) NOT NULL,
  `code_num` int(255) NOT NULL,
  `code_time_created` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `code_expiration` datetime(6) NOT NULL,
  PRIMARY KEY (`code_id`)
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `code`
--

LOCK TABLES `code` WRITE;
/*!40000 ALTER TABLE `code` DISABLE KEYS */;
INSERT INTO `code` VALUES (127,'ADMIN',424303,'2021-05-11 09:54:38.444437','2021-05-11 21:59:38.000000'),(128,'ADMIN',645252,'2021-05-11 09:55:41.035945','2021-05-11 22:00:41.000000'),(129,'ADMIN',42919,'2021-05-11 09:55:45.746321','2021-05-11 22:00:45.000000'),(130,'acer',180417,'2021-05-11 10:00:31.881907','2021-05-11 22:05:31.000000'),(131,'ADMIN',155670,'2021-05-11 10:23:28.364378','2021-05-11 22:28:28.000000'),(132,'acer',590613,'2021-05-11 23:28:44.700091','2021-05-12 11:33:44.000000'),(133,'ADMIN',354368,'2021-05-11 23:32:11.594318','2021-05-12 11:37:11.000000'),(134,'ADMIN',829944,'2021-05-11 23:35:55.141571','2021-05-12 11:40:55.000000'),(135,'acer',765088,'2021-05-11 23:37:58.469992','2021-05-12 11:42:58.000000'),(136,'ADMIN',490989,'2021-05-11 23:38:18.089444','2021-05-12 11:43:18.000000'),(137,'acer',687900,'2021-05-11 23:44:50.917131','2021-05-12 11:49:50.000000'),(138,'ADMIN',805890,'2021-05-11 23:45:06.397434','2021-05-12 11:50:06.000000'),(139,'acer',809769,'2021-05-11 23:46:52.912684','2021-05-12 11:51:52.000000'),(140,'ADMIN',54540,'2021-05-11 23:47:15.366903','2021-05-12 11:52:15.000000'),(141,'acer',213146,'2021-05-11 23:49:30.992943','2021-05-12 11:54:30.000000'),(142,'ADMIN',826825,'2021-05-11 23:49:52.719058','2021-05-12 11:54:52.000000'),(143,'acer',635908,'2021-05-11 23:51:45.543464','2021-05-12 11:56:45.000000'),(144,'ADMIN',835640,'2021-05-11 23:56:00.804592','2021-05-12 12:01:00.000000'),(145,'acer',188918,'2021-05-11 23:56:44.040619','2021-05-12 12:01:44.000000'),(146,'acer',21649,'2021-05-12 00:00:45.772235','2021-05-12 12:05:45.000000'),(147,'acer',446523,'2021-05-12 00:03:28.812525','2021-05-12 12:08:28.000000'),(148,'acer',181172,'2021-05-12 00:04:55.986814','2021-05-12 12:09:55.000000'),(149,'ADMIN',146507,'2021-05-12 00:05:09.396246','2021-05-12 12:10:09.000000'),(150,'ADMIN',106458,'2021-05-12 20:18:38.221058','2021-05-13 08:23:38.000000'),(151,'acer',732105,'2021-05-12 20:19:06.701846','2021-05-13 08:24:06.000000'),(152,'qwerty',637486,'2021-05-12 20:25:18.364555','2021-05-13 08:30:18.000000'),(153,'ADMIN',317604,'2021-05-12 20:27:29.593799','2021-05-13 08:32:29.000000'),(154,'acer',558355,'2021-05-12 20:30:58.585192','2021-05-13 08:35:58.000000'),(155,'ADMIN',738514,'2021-05-12 20:31:29.137699','2021-05-13 08:36:29.000000'),(156,'ADMIN',335197,'2021-05-12 20:35:34.694085','2021-05-13 08:40:34.000000'),(157,'acer',559413,'2021-05-13 03:42:37.659702','2021-05-13 15:47:37.000000'),(158,'ADMIN',913534,'2021-05-13 03:43:07.453573','2021-05-13 15:48:07.000000'),(159,'acer',986568,'2021-05-13 07:21:36.561185','2021-05-13 19:26:36.000000'),(160,'ADMIN',987774,'2021-05-13 07:22:13.757147','2021-05-13 19:27:13.000000'),(161,'acer',920725,'2021-05-13 07:33:12.842635','2021-05-13 19:38:12.000000'),(162,'acer',206279,'2021-05-13 07:33:19.078416','2021-05-13 19:38:19.000000'),(163,'acer',740590,'2021-05-13 07:34:48.537776','2021-05-13 19:39:48.000000'),(164,'ADMIN',219633,'2021-05-13 07:35:24.280080','2021-05-13 19:40:24.000000'),(165,'acer',320443,'2021-05-13 08:41:18.680339','2021-05-13 20:46:18.000000'),(166,'acer',148415,'2021-05-13 08:42:34.844373','2021-05-13 20:47:34.000000'),(167,'ADMIN',992588,'2021-05-13 08:43:09.624801','2021-05-13 20:48:09.000000'),(168,'ADMIN',418263,'2021-06-14 23:22:13.081421','2021-06-15 11:27:13.000000'),(169,'acer',224986,'2021-06-15 00:00:47.486515','2021-06-15 12:05:47.000000'),(170,'ADMIN',652565,'2021-06-15 00:01:52.756558','2021-06-15 12:06:52.000000'),(171,'ADMIN',517586,'2021-06-15 00:02:32.235475','2021-06-15 12:07:32.000000'),(172,'acer',147780,'2021-06-15 00:03:12.009843','2021-06-15 12:08:12.000000'),(173,'ADMIN',68757,'2021-06-15 00:03:36.720548','2021-06-15 12:08:36.000000'),(174,'ADMIN',790430,'2021-06-15 00:05:48.655896','2021-06-15 12:10:48.000000'),(175,'ADMIN',462911,'2021-06-15 02:08:32.527636','2021-06-15 14:13:32.000000'),(176,'ADMIN',566324,'2021-06-15 02:09:24.528454','2021-06-15 14:14:24.000000'),(177,'ADMIN',224114,'2021-06-15 02:09:29.517159','2021-06-15 14:14:29.000000'),(178,'ADMIN',437785,'2021-06-15 02:10:07.072794','2021-06-15 14:15:07.000000'),(179,'ADMIN',64386,'2021-06-15 04:36:48.115039','2021-06-15 16:41:48.000000'),(180,'francis',492742,'2021-06-15 04:53:47.589551','2021-06-15 16:58:47.000000'),(181,'francis',485587,'2021-06-15 04:54:37.813252','2021-06-15 16:59:37.000000'),(182,'francis',656572,'2021-06-15 04:54:52.940188','2021-06-15 16:59:52.000000'),(183,'ADMIN',649896,'2021-06-15 04:58:18.105147','2021-06-15 17:03:18.000000');
/*!40000 ALTER TABLE `code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_log`
--

DROP TABLE IF EXISTS `event_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_log` (
  `event_id` int(255) NOT NULL AUTO_INCREMENT,
  `account_user` varchar(255) NOT NULL,
  `event_action` varchar(255) NOT NULL,
  `event_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_log`
--

LOCK TABLES `event_log` WRITE;
/*!40000 ALTER TABLE `event_log` DISABLE KEYS */;
INSERT INTO `event_log` VALUES (1,'ADMIN','Log-in','2021-05-11 09:54:38.820410'),(2,'ADMIN','Logged-in','2021-05-11 09:54:46.553095'),(3,'ADMIN','Log-out','2021-05-11 09:55:36.089497'),(4,'ADMIN','Log-in','2021-05-11 09:55:41.127727'),(5,'ADMIN','Resend Code','2021-05-11 09:55:45.806216'),(6,'ADMIN','Logged-in','2021-05-11 09:55:50.193746'),(7,'ADMIN','Log-out','2021-05-11 09:58:19.449462'),(8,'acer','Log-in','2021-05-11 10:00:31.937772'),(9,'acer','Logged-in','2021-05-11 10:00:36.798943'),(10,'acer','Log-out','2021-05-11 10:23:22.023535'),(11,'ADMIN','Log-in','2021-05-11 10:23:28.419909'),(12,'ADMIN','Logged-in','2021-05-11 10:23:33.282657'),(13,'ADMIN','Log-out','2021-05-11 23:28:35.429515'),(14,'acer','Log-in','2021-05-11 23:28:44.923847'),(15,'acer','Logged-in','2021-05-11 23:28:50.607623'),(16,'acer','Log-out','2021-05-11 23:32:00.794018'),(17,'ADMIN','Log-in','2021-05-11 23:32:11.675471'),(18,'ADMIN','Logged-in','2021-05-11 23:32:16.220276'),(19,'ADMIN','Log-out','2021-05-11 23:35:25.563952'),(20,'ADMIN','Log-in','2021-05-11 23:35:55.195444'),(21,'ADMIN','Logged-in','2021-05-11 23:36:00.783414'),(22,'ADMIN','Log-out','2021-05-11 23:37:51.043552'),(23,'acer','Log-in','2021-05-11 23:37:58.533566'),(24,'acer','Logged-in','2021-05-11 23:38:02.657718'),(25,'acer','Log-out','2021-05-11 23:38:13.608678'),(26,'ADMIN','Log-in','2021-05-11 23:38:18.121760'),(27,'ADMIN','Logged-in','2021-05-11 23:38:22.170775'),(28,'ADMIN','Log-out','2021-05-11 23:44:37.480141'),(29,'acer','Log-in','2021-05-11 23:44:50.969447'),(30,'acer','Logged-in','2021-05-11 23:44:54.989679'),(31,'acer','Log-out','2021-05-11 23:45:02.007941'),(32,'ADMIN','Log-in','2021-05-11 23:45:06.447297'),(33,'ADMIN','Logged-in','2021-05-11 23:45:11.078879'),(34,'ADMIN','Log-out','2021-05-11 23:46:22.169050'),(35,'acer','Log-in','2021-05-11 23:46:52.962960'),(36,'acer','Logged-in','2021-05-11 23:46:57.333579'),(37,'acer','Log-out','2021-05-11 23:47:09.938091'),(38,'ADMIN','Log-in','2021-05-11 23:47:15.421963'),(39,'ADMIN','Logged-in','2021-05-11 23:47:20.194637'),(40,'ADMIN','Log-out','2021-05-11 23:49:18.480255'),(41,'acer','Log-in','2021-05-11 23:49:31.046428'),(42,'acer','Logged-in','2021-05-11 23:49:35.782320'),(43,'acer','Log-out','2021-05-11 23:49:48.477417'),(44,'ADMIN','Log-in','2021-05-11 23:49:52.769406'),(45,'ADMIN','Logged-in','2021-05-11 23:49:57.452276'),(46,'ADMIN','Log-out','2021-05-11 23:51:37.604568'),(47,'acer','Log-in','2021-05-11 23:51:45.584379'),(48,'acer','Logged-in','2021-05-11 23:51:50.482351'),(49,'acer','Log-out','2021-05-11 23:55:50.718607'),(50,'ADMIN','Log-in','2021-05-11 23:56:00.849601'),(51,'ADMIN','Logged-in','2021-05-11 23:56:05.485142'),(52,'ADMIN','Log-out','2021-05-11 23:56:15.852021'),(53,'acer','Log-in','2021-05-11 23:56:44.071951'),(54,'acer','Logged-in','2021-05-11 23:56:48.831110'),(55,'acer','Log-out','2021-05-12 00:00:32.675656'),(56,'acer','Log-in','2021-05-12 00:00:45.825226'),(57,'acer','Logged-in','2021-05-12 00:00:50.016551'),(58,'acer','Log-out','2021-05-12 00:03:20.991974'),(59,'acer','Log-in','2021-05-12 00:03:28.842741'),(60,'acer','Logged-in','2021-05-12 00:03:33.471079'),(61,'acer','Log-out','2021-05-12 00:04:20.574989'),(62,'acer','Log-in','2021-05-12 00:04:56.022621'),(63,'acer','Logged-in','2021-05-12 00:05:00.589001'),(64,'acer','Log-out','2021-05-12 00:05:05.077231'),(65,'ADMIN','Log-in','2021-05-12 00:05:09.435136'),(66,'ADMIN','Logged-in','2021-05-12 00:05:13.612845'),(67,'ADMIN','Log-out','2021-05-12 00:07:53.226817'),(68,'ADMIN','Log-in','2021-05-12 20:18:38.436671'),(69,'ADMIN','Logged-in','2021-05-12 20:18:49.844897'),(70,'ADMIN','Log-out','2021-05-12 20:18:57.940651'),(71,'acer','Log-in','2021-05-12 20:19:06.763993'),(72,'acer','Logged-in','2021-05-12 20:19:11.990981'),(73,'acer','Log-out','2021-05-12 20:20:58.907256'),(74,'qwerty','Log-in','2021-05-12 20:25:18.421433'),(75,'qwerty','Logged-in','2021-05-12 20:25:22.790209'),(76,'qwerty','Log-out','2021-05-12 20:27:19.211604'),(77,'ADMIN','Log-in','2021-05-12 20:27:29.670674'),(78,'ADMIN','Logged-in','2021-05-12 20:27:34.064096'),(79,'ADMIN','Log-out','2021-05-12 20:30:30.840357'),(80,'acer','Log-in','2021-05-12 20:30:58.632840'),(81,'acer','Logged-in','2021-05-12 20:31:03.032416'),(82,'acer','Log-out','2021-05-12 20:31:19.503539'),(83,'ADMIN','Log-in','2021-05-12 20:31:29.268507'),(84,'ADMIN','Logged-in','2021-05-12 20:31:34.059250'),(85,'ADMIN','Log-out','2021-05-12 20:35:26.679700'),(86,'ADMIN','Log-in','2021-05-12 20:35:34.745631'),(87,'ADMIN','Logged-in','2021-05-12 20:35:39.616150'),(88,'ADMIN','Log-out','2021-05-13 03:41:52.969010'),(89,'acer','Log-in','2021-05-13 03:42:38.113059'),(90,'acer','Logged-in','2021-05-13 03:42:46.903106'),(91,'acer','Log-out','2021-05-13 03:43:01.993194'),(92,'ADMIN','Log-in','2021-05-13 03:43:07.512429'),(93,'ADMIN','Logged-in','2021-05-13 03:43:12.248787'),(94,'ADMIN','Log-out','2021-05-13 04:11:03.396598'),(95,'acer','Log-in','2021-05-13 07:21:37.125535'),(96,'acer','Logged-in','2021-05-13 07:21:48.775747'),(97,'acer','Log-out','2021-05-13 07:22:08.300030'),(98,'ADMIN','Log-in','2021-05-13 07:22:13.825820'),(99,'ADMIN','Logged-in','2021-05-13 07:22:19.574492'),(100,'ADMIN','Log-out','2021-05-13 07:31:43.402025'),(101,'acer','Log-in','2021-05-13 07:33:12.946919'),(102,'acer','Log-in','2021-05-13 07:33:19.127359'),(103,'acer','Log-in','2021-05-13 07:34:48.683666'),(104,'acer','Logged-in','2021-05-13 07:34:55.478255'),(105,'acer','Log-out','2021-05-13 07:35:16.938329'),(106,'ADMIN','Log-in','2021-05-13 07:35:24.318994'),(107,'ADMIN','Logged-in','2021-05-13 07:35:31.003339'),(108,'ADMIN','Log-out','2021-05-13 08:40:25.918975'),(109,'acer','Log-in','2021-05-13 08:41:18.917675'),(110,'acer','Logged-in','2021-05-13 08:41:28.935367'),(111,'acer','Log-out','2021-05-13 08:41:43.823096'),(112,'acer','Log-in','2021-05-13 08:42:34.953898'),(113,'acer','Logged-in','2021-05-13 08:42:42.481621'),(114,'acer','Log-out','2021-05-13 08:43:02.822387'),(115,'ADMIN','Log-in','2021-05-13 08:43:09.677279'),(116,'ADMIN','Logged-in','2021-05-13 08:43:16.619179'),(117,'ADMIN','Log-in','2021-06-14 23:22:13.431332'),(118,'ADMIN','Logged-in','2021-06-14 23:22:20.921311'),(119,'ADMIN','Log-out','2021-06-15 00:00:29.457913'),(120,'acer','Log-in','2021-06-15 00:00:47.549394'),(121,'acer','Logged-in','2021-06-15 00:00:51.732101'),(122,'acer','Log-out','2021-06-15 00:01:42.933037'),(123,'ADMIN','Log-in','2021-06-15 00:01:52.818833'),(124,'ADMIN','Logged-in','2021-06-15 00:01:57.465409'),(125,'ADMIN','Log-out','2021-06-15 00:02:27.423399'),(126,'ADMIN','Log-in','2021-06-15 00:02:32.286565'),(127,'ADMIN','Logged-in','2021-06-15 00:02:36.496488'),(128,'ADMIN','Log-out','2021-06-15 00:03:00.579956'),(129,'acer','Log-in','2021-06-15 00:03:12.065708'),(130,'acer','Logged-in','2021-06-15 00:03:17.247049'),(131,'acer','Log-out','2021-06-15 00:03:32.061655'),(132,'ADMIN','Log-in','2021-06-15 00:03:36.779073'),(133,'ADMIN','Logged-in','2021-06-15 00:03:41.410489'),(134,'ADMIN','Log-out','2021-06-15 00:05:36.116230'),(135,'ADMIN','Log-in','2021-06-15 00:05:48.704644'),(136,'ADMIN','Logged-in','2021-06-15 00:05:53.821868'),(137,'ADMIN','Log-out','2021-06-15 02:08:21.699405'),(138,'ADMIN','Log-in','2021-06-15 02:08:32.602855'),(139,'ADMIN','Logged-in','2021-06-15 02:08:37.883242'),(140,'ADMIN','Log-out','2021-06-15 02:09:13.839329'),(141,'ADMIN','Log-in','2021-06-15 02:09:24.605792'),(142,'ADMIN','Log-in','2021-06-15 02:09:29.571562'),(143,'ADMIN','Logged-in','2021-06-15 02:09:34.039102'),(144,'ADMIN','Log-out','2021-06-15 02:10:01.921342'),(145,'ADMIN','Log-in','2021-06-15 02:10:07.128925'),(146,'ADMIN','Logged-in','2021-06-15 02:10:17.653332'),(147,'ADMIN','Log-out','2021-06-15 04:33:36.037636'),(148,'ADMIN','Log-in','2021-06-15 04:36:48.220131'),(149,'ADMIN','Logged-in','2021-06-15 04:37:00.499812'),(150,'ADMIN','Log-out','2021-06-15 04:48:15.748352'),(151,'francis','Log-in','2021-06-15 04:53:47.654604'),(152,'francis','Log-in','2021-06-15 04:54:37.894403'),(153,'francis','Resend Code','2021-06-15 04:54:53.011066'),(154,'francis','Logged-in','2021-06-15 04:55:15.046388'),(155,'francis','Password Changed','2021-06-15 04:56:20.462624'),(156,'francis','Log-out','2021-06-15 04:58:08.855339'),(157,'ADMIN','Log-in','2021-06-15 04:58:18.175031'),(158,'ADMIN','Logged-in','2021-06-15 04:58:29.385876');
/*!40000 ALTER TABLE `event_log` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-15 17:01:11
