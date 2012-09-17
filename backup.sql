-- MySQL dump 10.13  Distrib 5.1.61, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: MCQ
-- ------------------------------------------------------
-- Server version	5.1.61-0ubuntu0.10.10.1-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `shellscipting`
--

DROP TABLE IF EXISTS `shellscipting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shellscipting` (
  `id` int(11) DEFAULT NULL,
  `question` varchar(500) DEFAULT NULL,
  `choises` varchar(255) DEFAULT NULL,
  `answer` varchar(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shellscipting`
--

LOCK TABLES `shellscipting` WRITE;
/*!40000 ALTER TABLE `shellscipting` DISABLE KEYS */;
INSERT INTO `shellscipting` VALUES (1,'question1','ch1|ch2|ch3|ch4|','a'),(2,'question2','ch1|ch2|ch3|ch4|','b'),(3,'question3','ch1|ch2|ch3|ch4|','c'),(4,'question4','ch1|ch2|ch3|ch4|','d'),(5,'question5','ch1|ch2|ch3|ch4|','a');
/*!40000 ALTER TABLE `shellscipting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shellscipting_attend`
--

DROP TABLE IF EXISTS `shellscipting_attend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shellscipting_attend` (
  `uname` varchar(255) DEFAULT NULL,
  `mark` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shellscipting_attend`
--

LOCK TABLES `shellscipting_attend` WRITE;
/*!40000 ALTER TABLE `shellscipting_attend` DISABLE KEYS */;
INSERT INTO `shellscipting_attend` VALUES ('rosh',100),('vijeen',2);
/*!40000 ALTER TABLE `shellscipting_attend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `uname` varchar(255) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('vijeen','e0ad2c551d4e8142340017de4c49217cf91364fc'),('rosh','630bfd79d98a827d66ce889215e4fae100b7dffb'),('vijeen','2');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-09-17  9:01:39
