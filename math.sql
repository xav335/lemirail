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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `newsletter` tinyint(4) NOT NULL DEFAULT 0,
  `fromgoldbook` tinyint(4) NOT NULL DEFAULT 0,
  `fromcontact` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4008 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (4006,'','GONZALEZ','nzalez@gmail.com','F3GcB','',NULL,0,0,1),(4007,'','GONZALEZ','jgonzalez@iconeo.fr','0WiaR','',NULL,0,0,1);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=288 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo`
--

LOCK TABLES `photo` WRITE;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
INSERT INTO `photo` VALUES (221,2,'JEANNE','AMELIN',0,'/1.jpg'),(245,2,'LOU','AURIOL',0,'/2.jpg'),(246,2,'MELINE','LANNEAU',0,'/3.jpg'),(247,2,'NINON','CORBAL',0,'/4.jpg'),(248,2,'ANNA','CHAPRON',0,'/5.jpg'),(249,2,'LEA','CALVO',0,'/6.jpg'),(250,2,'LEA','GARAUD SCHNEIDER',0,'/7.jpg'),(251,2,'LOU','HANIN',0,'/8.jpg'),(252,2,'CHARLOTTE','BLOCK',0,'/9.jpg'),(253,2,'TOSCANE','LE FLOCH',0,'/10.jpg'),(254,2,'JENNIFER','LEMAIRE',0,'/11.jpg'),(255,2,'VALENTINE','MARCANDELLA',0,'/12.jpg'),(256,2,'MARGAULT','MAYOR TANNIERE ',0,'/13.jpg'),(257,2,'ELISABETH','MILLARD',0,'/14.jpg'),(258,2,'LUCILE','MOULINIER BARRAS',0,'/15.jpg'),(259,2,'LUCILE','NADAL LE TENDRE',0,'/16.jpg'),(260,2,'JALANNE','NOAILLES ',0,'/17.jpg'),(261,2,'TAINA','NOGUE ',0,'/18.jpg'),(262,2,'SABAH','OUSFAR',0,'/19.jpg'),(263,2,'LUCIE','SURGOT',0,'/20.jpg'),(264,1,'MAXIME','BABOT',0,'/1.jpg'),(265,1,'MATHIEU','BARTHELEMY',0,'/2.jpg'),(266,1,'ARTHUR','BOUSQUET',0,'/3.jpg'),(267,1,'TOUCAN','DIRIK',0,'/4.jpg'),(268,1,'ANTONIN','GROUASIL RADENAC',0,'/5.jpg'),(269,1,'DARISS','JALLOULI',0,'/6.jpg'),(270,1,'ANTOINE','VIGNE',0,'/7.jpg'),(271,1,'ARTHUR','STUPIEN',0,'/8.jpg'),(272,1,'TIMOTHE','GRILO',0,'/9.jpg'),(273,1,'ALEXIS','PIGEAT',0,'/10.jpg'),(274,1,'ETHAN','BOCHEREAU',0,'/11.jpg'),(275,1,'TIM','LAFITTE',0,'/12.jpg'),(276,1,'ELIOT','MOTTE',0,'/13.jpg'),(277,1,'PACO','BARSACQ JEANNE',0,'/14.jpg'),(278,1,'NATHAN','ELEBAUT NATHAN',0,'/15.jpg'),(279,1,'CLEMENT','ESPERANCE',0,'/16.jpg'),(280,2,'MELISSA','RIZZETTO',0,'/21.jpg'),(281,2,'MAELLE','ROUSSEAU',0,'/22.jpg'),(282,2,'ELOUANE','PEUVRIER',0,'/23.jpg'),(283,2,'THAIS','URIOS',0,'/24.jpg'),(284,2,'MATHILDE','VALENZA',0,'/25.jpg'),(285,2,'ROMANE','VIALARD',0,'/26.jpg'),(286,2,'LUCIE','VUILLEUMIER',0,'/27.jpg'),(287,2,'CATARINA','GONCALVES CAMPANHA',0,'/28.jpg');
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

-- Dump completed on 2021-06-29 13:57:46
