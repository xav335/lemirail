-- MariaDB dump 10.17  Distrib 10.4.13-MariaDB, for osx10.10 (x86_64)
--
-- Host: localhost    Database: math
-- ------------------------------------------------------
-- Server version	10.4.13-MariaDB

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
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `legende` text NOT NULL,
  `vote` int(11) unsigned DEFAULT 0,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=287 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo`
--

LOCK TABLES `photo` WRITE;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
INSERT INTO `photo` VALUES (221,2,'Lilou','',4,'/1.jpg'),(245,2,'jennifer','',0,'/2.jpg'),(246,2,'Lilou','',0,'/3.jpg'),(247,2,'jennifer','',1,'/4.jpg'),(248,2,'Lilou','',0,'/5.jpg'),(249,2,'jennifer','',1,'/6.jpg'),(250,2,'Lilou','',3,'/7.jpg'),(251,2,'jennifer','',1,'/8.jpg'),(252,2,'Lilou','',0,'/9.jpg'),(253,2,'jennifer','',1,'/10.jpg'),(254,2,'Lilou','',0,'/11.jpg'),(255,2,'jennifer','',0,'/12.jpg'),(256,2,'Lilou','',0,'/13.jpg'),(257,2,'jennifer','',1,'/14.jpg'),(258,2,'Lilou','',2,'/15.jpg'),(259,2,'jennifer','',2,'/16.jpg'),(260,2,'jennifer','',0,'/17.jpg'),(261,2,'Lilou','',1,'/18.jpg'),(262,2,'jennifer','',1,'/19.jpg'),(263,2,'jennifer','',3,'/20.jpg'),(264,1,'Lilou','',4,'/1.jpg'),(265,1,'Lilou','',0,'/2.jpg'),(266,1,'Lilou','',0,'/3.jpg'),(267,1,'Lilou','',2,'/4.jpg'),(268,1,'Lilou','',1,'/5.jpg'),(269,1,'Lilou','',0,'/6.jpg'),(270,1,'Lilou','',0,'/7.jpg'),(271,1,'Lilou','',0,'/8.jpg'),(272,1,'Lilou','',1,'/9.jpg'),(273,1,'Lilou','',0,'/10.jpg'),(274,1,'Lilou','',0,'/11.jpg'),(275,1,'Lilou','',1,'/12.jpg'),(276,1,'Lilou','',0,'/13.jpg'),(277,1,'Lilou','',0,'/14.jpg'),(278,1,'Lilou','',0,'/15.jpg'),(279,1,'Lilou','',4,'/16.jpg'),(280,2,'Lilou','',1,'/21.jpg'),(281,2,'Lilou','',1,'/22.jpg'),(282,2,'Lilou','',0,'/23.jpg'),(283,2,'Lilou','',1,'/24.jpg'),(284,2,'','',0,'/25.jpg'),(285,2,'','',0,'/26.jpg'),(286,2,'','',0,'/27.jpg');
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-02 12:09:03
