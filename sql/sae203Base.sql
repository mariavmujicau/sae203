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
  `_designer_id` int(11) NOT NULL,
  PRIMARY KEY (`article_id`),
  KEY `designer_id` (`_designer_id`),
  CONSTRAINT `designer_id` FOREIGN KEY (`_designer_id`) REFERENCES `designers_luxe` (`designer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles_luxe`
--

LOCK TABLES `articles_luxe` WRITE;
/*!40000 ALTER TABLE `articles_luxe` DISABLE KEYS */;
INSERT INTO `articles_luxe` VALUES (1,'Chanel classique',8930.00,'noir en cuir','sac à main','Chanel','2023_03_24_15_39_10---chanel.jpg',1),(2,'Lady Dior',5300.00,'Cuir d\'agneau Cannage couleur fard et Les charms D.I.O.R. en métal doré pâle','sac à main','Dior','ladydior.webp',2),(3,'Boy',6350.00,'Couleur Noire avec chaîne en métal','sac à main','Chanel','boy.webp',1),(4,'Bandoulière',1450.00,'confectionné en Re-Nylon, un fil de nylon régénéré (ECONYL®). Bordé de cuir Saffiano s’accompagne d’une pochette amovible.','Sac à Bandoulière','Prada','bandouliereprada.webp',3),(5,'Birkin',5000.00,'cuir patrimoine rare\r\n','Sac à main','Hermès','birkin.webp\r\n',4),(6,'Speedy Bag',1300.00,'en toile monogramme avec poignées en cuir\r\n','sac à main','Louis Vuitton','speedy.webp',5),(7,'Marmont Bag',2000.00,'matelassé en cuir avec logo GG\r\n','Sac à main','Gucci','marmont.webp\r\n',6),(8,'Neverfull MM',1850.00,'toile Monogram','sac à main','Louis Vuitton','neverfullmm.webp',7),(9,'Dionysus',2200.00,'orné d\'une boucle de tête de tigre','Sac à Bandoulière','Gucci','dionysus.webp',6),(10,'Galleria',3600.00,'en cuir saffiano','sac à main','Prada','galleria.webp',3),(11,'Triomphe',3000.00,'Doublure en agneau, finition en or, porté croisé et épaule','sac à main','Celine','triomphe.webp',8),(12,'Sac de Jour',2000.00,'muni de poignées tubulaires en cuir grainé','sac à main','Yves Saint Laurent','jour.webp',10),(13,'Kelly',7000.00,'Forme de trapèze ','sac à main','Hermès','kelly.webp',11),(14,'antigona',1900.00,'forme trapèze, avec patch triangulaire GIVENCHY, zip oversized et détails métalliques.','Sac à main','Givenchy','angora.webp',12),(15,'Luggage',2000.00,'doublure veau façon velours et finition argent ','Sac à main','Celine','luggage.webp',8),(16,'Peekaboo',4500.00,'anse arrondie, bride porté épaule détachable, fermoir à loquet, compartiment principal, poches intérieures zippées, plaque logo intérieure, finitions en métal doré, ornements argentés. Matière : cuir de veau.','Sac à main','Fendi','peekaboo.webp',13),(17,'Baguette',2000.00,'toile/cuir, motif monogrammé Zucchino signature, plaque logo FF, bride porté épaule ajustable, rabat sur le dessus à fermeture magnétique','Sac à main','Fendi','baguette.webp',13),(18,'Box bag',4500.00,'peau de lézard, forme rectangulaire structurée et finitions en métal doré','Sac à main','Celine','box.webp',8),(19,'Pochette metis',2200.00,'cuir de vache souple grainé embossé Monogram Empreinte et cuir de vache souple grainé','Sac à Bandoulière','Louis Vuitton','metis.webp',14),(20,'Puzzle',2000.00,'de forme cuboïde et une technique de coupe précise créer les lignes géométriques distinctives de Puzzle.','Sac à main','Loewe','puzzle.webp',15),(21,'Matelassé',1600.00,'noir, cuir nappa, détail matelassé, logo lettre, fermeture zippée sur le dessus, anse plate sur le dessus, bride porté épaule détachable et ajustable.','Sac à main','Miu Miu','matelasse.webp',3),(22,'Faye',1500.00,'s\'ouvre sur un intérieur pratique, doublé en veau velours beige','Sac porté épaule','Chloé','faye.webp',16),(23,'Chiquito',400.00,'en cuir avec poignée renforcée,  fermeture aimantée et bandoulière réglable amovible.','Sac à main','Jacquemus','chiquito.webp',17),(24,'Jodie',2100.00,'en cuir Intrecciato','Sac à main','Bottega Veneta','jodie.webp',18),(25,'TB',1890.00,'rigide en toile et cuir bicolore, doté d\'un fermoir Monogram Thomas Burberry.','Sac à main','Burberry','tb.webp',12),(26,'Jackie',2200.00,'motif monogrammé, bordure contrastante, finitions en métal doré, bride porté épaule ajustable','Sac porté épaule','Gucci','jackie.webp',19),(27,'Alma',1400.00,'en toile Damier Ébène graphique comprend un cadenas et des clés dorés, deux poignées Toron et une cloche-clés en cuir raffinée.','Sac à main','Louis Vuitton','alma.webp',5),(28,'Locket',950.00,'fermeture en métal','Sac à Bandoulière','Jimmy Choo','locket.jpg',20),(29,'PS1',1795.00,'confectionné en cuir froissé et est sécurisé par une fermeture à languette en métal argenté signature et des sangles ceinturées.','Sac à main','Proenza Schouler','ps1.webp',21),(30,'Falabella',800.00,'bordure à chaîne argentée, bride portée épaule en chaîne argentée, bouton pression sur le dessus, poche intérieure plaquée, logo en relief à l\'intérieur et breloque à logo. ','Sac à main','Stella McCartney','falabella.webp',22),(31,'Pashli',550.00,'en cuir de veau','Sac à Bandoulière','Phillip Lim','3.1.webp',23),(32,'Lady D-Joy',5000.00,'Raffinée et féminine, cette création intemporelle rend hommage au design épuré de l\'iconique ligne Lady Dior.','Sac à main','Dior','joy.webp',24),(33,'Soho',1972.00,'cuir de veau, logo GG signature, détail de pompon, compartiment principal, poches intérieures zippées, deux brides porté épaule détachables en cuir et maillons de chaîne.','Sac à main','Gucci','soho.webp',25),(34,'Drew',2000.00,'forme arrondie et cuir souple soulignent le charme sensuel du modèle, dont les lignes nettes s\'habillent de détails bijoux en métal. ','Sac à Bandoulière','Chloé','drew.webp',26),(35,'Mon Tresor',1900.00,'avec fermeture par cordon de serrage et détails en métal en forme du logo Fendi.','Sac à main','Fendi','montresor.webp',13),(36,'Saddle',4200.00,'toile/cuir, motif monogrammé Trotter signature, anneaux à initiale CD signature, breloque à logo, anse classique, rabat sur le dessus, fermeture scratch, compartiment principal, poches intérieures zippées, patch logo intérieur, poche plaquée à l\'arrière, finitions en métal doré.','Sac à main','Dior','saddle.webp',27),(37,'Lockit',1750.00,'en toile Monogram et cuir de vache est orné d\'un cadenas LV oversize doré.','Sac à main','Louis Vuitton','lockit.webp',7),(38,'Jige',6500.00,' cuir, patch logo sur le devant, rabat sur le devant.','Pochette','Hermès','jige.jpg',28),(39,'Muse',1000.00,'cuir de veau, rabat sur le devant, fermoir à loquet, anse arrondie, poche intérieure plaquée, patch logo intérieur, doublure intégrale, pieds en métal, finitions en métal argenté, forme rectangulaire. ','Sac à main','Yves Saint Laurent','muse.webp',29),(40,'Belt',1100.00,'Doublure veau façon velours, finition en or.','Sac à main','Celine','belt.jpg',8),(41,'Tote',2500.00,'Sac grand format en toile à motif Intreccio, une poche zippée amovible à l’intérieur','Sac à main','Bottega Veneta','tote.jpg',30),(42,'woody',950.00,'confectionné en toile de lin','Sac à main','Chloé','woody.webp',16),(43,'Kan-I',2100.00,'réalisé en cuir avec noir avec motif FF imprimé en relief et peint à la main dans des tons de marron.','Sac à main','Fendi','kan-i.webp',13),(44,'Rockstud',2500.00,'chaîne Rockstud Spike Valentino Garavani en nappa d\'agneau souple.','Sac à Bandoulière','Valentino','rockstud.webp',31),(45,'Le 5 à 7',1990.00,'hobo fermé par une patte de cuir ornée du cassandre et double suède ton sur ton.','Sac à main','Yves Saint Laurent','5a7.jpg',10),(46,'16',5800.00,'porté à main; épaule et croisé. Tourniquet métallique, poche intérieure plate.','Sac à main','Celine','16.webp',10),(47,'Multipochette accesoires',2050.00,'confectionnée en toile Monogram, cette Multi Pochette Accessoires est un sac hybride à porté croisé doté de multiples poches et compartiments.','Sac à main','Louis Vuitton','multipochette.webp',5),(48,'Nile',1500.00,'confectionné en cuir de veau lisse et veau velours, le sac bracelet arbore des détails masculins se manifestant à travers les lignes élégantes de la partie supérieure et son allure équestre. ','Sac à main','Chloé','nilo.webp',16),(49,'C',1680.00,'en cuir de taurillon couleur saphir rose, attaches-poignées décor C finition palladiée, signature Cartier couleur argent marquée à chaud sur la face avant.','Sac à main','Cartier','c.webp',32),(50,'Petite Malle East West',5100.00,'en toile Monogram est agrémenté d\'une garniture en cuir noir.','Sac à main','Louis Vuitton','malle.webp',14);
/*!40000 ALTER TABLE `articles_luxe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `designers_luxe`
--

DROP TABLE IF EXISTS `designers_luxe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `designers_luxe` (
  `designer_id` int(11) NOT NULL AUTO_INCREMENT,
  `designer_prenom` char(50) NOT NULL,
  `designer_nom` char(50) NOT NULL,
  `designer_nationalite` char(50) NOT NULL,
  `designer_date_naissance` int(4) NOT NULL,
  PRIMARY KEY (`designer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `designers_luxe`
--

LOCK TABLES `designers_luxe` WRITE;
/*!40000 ALTER TABLE `designers_luxe` DISABLE KEYS */;
INSERT INTO `designers_luxe` VALUES (1,'Karl','Lagerfeld','Allemand',1933),(2,'Gianfranco','Ferré','Français',1944),(3,'Miuccia','Prada','Italienne',1949),(4,'Octave','Marsal','Français',1990),(5,'Louis','Vuitton','Français',1821),(6,'Alessandro','Michele','Italien',1972),(7,'Marc','Jacobs','Américain',1963),(8,'Phoebe','Philo','Anglaise',1973),(9,'Gianfranco','Ferré','Italien',1944),(10,'Hedi','Slimane','Français',1968),(11,'Robert','Dumas','Français',1938),(12,'Riccardo','Tisci','Italien',1974),(13,'Silvia','Venturini Fendi','Italienne',1967),(14,'Nicolas','Ghesquière','Français',1997),(15,'Jonathan','Anderson','Britannique',1984),(16,'Natacha','Ramsay-Levi','Française',1971),(17,'Simon','Porte Jacquemus','Français',1990),(18,'Daniel','Lee','Britannique',1986),(19,'Guccio','Gucci','Italien',1881),(20,'Tamara','Mellon','Britannique',1977),(21,'Jack','McCollough','Américain',1980),(22,'Stella',' McCartney','Britannique',1971),(23,'Phillip','Lim','Américain',1973),(24,'John','Galliano','Britannique',1960),(25,' Frida','Giannini','Italien',1970),(26,'Clare','Waight Keller','Britannique',1970),(27,'Maria Grazia','Chiuri','Italienne',1964),(28,'Catherine','Chaillet','Française',1942),(29,'Stefano','Pilati','Italien',1965),(30,'Tomas','Maier','Alemand',1957),(31,'Pierpaolo','Piccioli','Italien',1967),(32,'Cartier','','Français',1847);
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

-- Dump completed on 2023-03-24 15:43:16
