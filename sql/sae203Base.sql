-- MySQL dump 10.19  Distrib 10.3.36-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sae203Base
-- ------------------------------------------------------
-- Server version	10.3.36-MariaDB-0+deb10u2

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
-- Table structure for table `articles_luxe`
--

DROP TABLE IF EXISTS `articles_luxe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles_luxe` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_nom` char(50) NOT NULL,
  `article_prix` decimal(7,2) NOT NULL,
  `article_desc` varchar(600) NOT NULL,
  `article_type` varchar(50) NOT NULL,
  `article_marque` char(50) NOT NULL,
  `article_photo` varchar(255) NOT NULL,
  `#designer_id` int(11) NOT NULL,
  PRIMARY KEY (`article_id`),
  KEY `designer_id` (`#designer_id`),
  CONSTRAINT `designer_id` FOREIGN KEY (`#designer_id`) REFERENCES `designers_luxe` (`designer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles_luxe`
--

LOCK TABLES `articles_luxe` WRITE;
/*!40000 ALTER TABLE `articles_luxe` DISABLE KEYS */;
/*!40000 ALTER TABLE `articles_luxe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `designers_luxe`
--

DROP TABLE IF EXISTS `designers_luxe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `designers_luxe` (
  `designer_id` int(11) NOT NULL,
  `designer_prenom` char(50) NOT NULL,
  `designer_nom` char(50) NOT NULL,
  `designer_nationalite` char(50) NOT NULL,
  `designer_date_naissance` year(4) NOT NULL,
  PRIMARY KEY (`designer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `designers_luxe`
--

LOCK TABLES `designers_luxe` WRITE;
/*!40000 ALTER TABLE `designers_luxe` DISABLE KEYS */;
/*!40000 ALTER TABLE `designers_luxe` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-02 10:11:33
