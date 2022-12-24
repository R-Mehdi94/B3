-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: sb
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `atelier`
--

DROP TABLE IF EXISTS `atelier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `atelier` (
  `numero` int NOT NULL AUTO_INCREMENT,
  `theme` varchar(50) NOT NULL,
  `nb_places` int NOT NULL DEFAULT '10',
  `responsable` int NOT NULL,
  `date_enregistrement` date NOT NULL,
  `date_heure` datetime NOT NULL,
  `duree` int NOT NULL DEFAULT '1',
  `nb_participants` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`numero`),
  KEY `responsable` (`responsable`),
  CONSTRAINT `atelier_ibfk_1` FOREIGN KEY (`responsable`) REFERENCES `responsable` (`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atelier`
--

LOCK TABLES `atelier` WRITE;
/*!40000 ALTER TABLE `atelier` DISABLE KEYS */;
INSERT INTO `atelier` VALUES (1,'Liquide vaisselle',8,2,'2022-10-13','2022-10-29 10:30:00',2,0),(2,'D√©tachant Linge',10,1,'2022-10-13','2022-10-29 14:00:00',2,0),(3,'Cr√®me hydratante pour homme',10,2,'2022-10-20','2022-11-03 10:00:00',3,0),(4,'Mousse √† raser',8,1,'2022-10-20','2022-11-03 15:00:00',2,1);
/*!40000 ALTER TABLE `atelier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `client` (
  `numero` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `mdp` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `cp` char(5) DEFAULT NULL,
  `ville` varchar(30) DEFAULT NULL,
  `mobile` char(10) DEFAULT NULL,
  `civilite` varchar(4) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'ONESTAS','Valentine','azerty','valentine.onestas@gmail.com','1995-11-08','15, rue de la gare','94130','Nogent s/Marne','0693530293','Mlle'),(3,'HAFIDI','Nadiya','azerty','n.hafidi@gmail.com','2000-04-01','11, bd de Strasbourg','94120','Fontenay s/bois','0711930388','Mme'),(4,'OSARO','Cl√©mence','azerty','c.osaro@orange.fr','2001-09-15','25, place de la mairie','77350','Le M√©e s/Seine','0683340299','Mme'),(5,'JADOUX','Lucie','azerty','lucie.jadoux@gmail.com','1997-11-03','2, bd de La R√©publique','94130','Nogent s/Marne','0703740203','Mlle'),(6,'KANNY','Pauline','azerty','p.kanny@gmail.com','1999-01-11','1 ter, rue Paul Doumer','95000','Cergy','0730832731','Mme'),(8,'KARA','Juliette','azerty','juliette.kara@gmail.com','2007-05-10','21, rue de la gare','94200','Ivry s/Seine','0799720154','Mlle'),(9,'LAURY','Sophie','azerty','sophie.laury@gmail.com','2002-08-02','15, rue du parc','94400','Vitry s/Seine','0638304393','Mlle');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participer`
--

DROP TABLE IF EXISTS `participer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `participer` (
  `client` int NOT NULL,
  `atelier` int NOT NULL,
  `date_inscription` date NOT NULL,
  PRIMARY KEY (`client`,`atelier`),
  KEY `atelier` (`atelier`),
  CONSTRAINT `participer_ibfk_1` FOREIGN KEY (`client`) REFERENCES `client` (`numero`),
  CONSTRAINT `participer_ibfk_2` FOREIGN KEY (`atelier`) REFERENCES `atelier` (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participer`
--

LOCK TABLES `participer` WRITE;
/*!40000 ALTER TABLE `participer` DISABLE KEYS */;
INSERT INTO `participer` VALUES (1,3,'2022-10-25'),(3,1,'2022-10-25'),(3,3,'2022-10-25'),(5,1,'2022-10-25'),(5,4,'2022-10-25'),(9,1,'2022-10-25');
/*!40000 ALTER TABLE `participer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsable`
--

DROP TABLE IF EXISTS `responsable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `responsable` (
  `numero` int NOT NULL AUTO_INCREMENT,
  `nom` varbinary(200) NOT NULL,
  `prenom` varbinary(200) NOT NULL,
  `mdp` varchar(256) NOT NULL,
  `login` varchar(30) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsable`
--

LOCK TABLES `responsable` WRITE;
/*!40000 ALTER TABLE `responsable` DISABLE KEYS */;
INSERT INTO `responsable` VALUES (1,_binary '\Œ)_\Â&\∆2:\¬Zc\„\Î¯',_binary 'å\’0\’dK[\[\Ò\∆Z4','f2d81a260dea8a100dd517984e53c56a7523d96942a834b9cdc249bd4e8c7aa9','mdasilva'),(2,_binary 'ç©cóü\Í4säJË®¨',_binary '+$˛\ˆ∏je<à	3+AS0','f2d81a260dea8a100dd517984e53c56a7523d96942a834b9cdc249bd4e8c7aa9','kjones');
/*!40000 ALTER TABLE `responsable` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-09 14:15:50
