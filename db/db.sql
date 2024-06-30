/*!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.4.2-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: berita
-- ------------------------------------------------------
-- Server version	11.4.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Current Database: `berita`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `berita` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `berita`;

--
-- Table structure for table `artikel`
--

DROP TABLE IF EXISTS `artikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artikel` (
  `id` varchar(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `thumbnail` varchar(128) DEFAULT NULL,
  `konten` text NOT NULL,
  `dibuat` timestamp NULL DEFAULT current_timestamp(),
  `id_penulis` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_penulis` (`id_penulis`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_penulis`) REFERENCES `penulis` (`id`),
  CONSTRAINT `artikel_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artikel`
--

LOCK TABLES `artikel` WRITE;
/*!40000 ALTER TABLE `artikel` DISABLE KEYS */;
INSERT INTO `artikel` VALUES
('5c9614f4-a13c-4639-968d-0fcde792d2bb','test','679b97493dee50f24bd28ae05d2bf5ef.jpg','adlah gwej','2024-06-29 16:16:32',3,2),
('96bb63c1-4d41-4267-8e6f-52cda9b104c2','njsad','abac37f9f878e2bce2f2de003f0318fb.png','jkdj','2024-06-25 13:51:03',1,1),
('c858773b-6710-4137-ba0f-2e3061725255','woi lah','c35e8e433639c0cf479df57a8cda0d89.png','jdsakdjaksdja jdsakdjaksdja jdsakdjaksdja jdsakdjaksdjajdsakdjaksdja jdsakdjaksdja jdsakdjaksdja jdsakdjaksdjajdsakdjaksdja jdsakdjaksdja jdsakdjaksdja jdsakdjaksdjajdsakdjaksdja jdsakdjaksdja jdsakdjaksdja jdsakdjaksdjajdsakdjaksdja jdsakdjaksdja jdsakdjaksdja jdsakdjaksdjajdsakdjaksdja jdsakdjaksdja jdsakdjaksdja jdsakdjaksdja','2024-06-25 13:08:41',3,1),
('fb159615-039d-42a5-94e3-f5c9b3fe500f','dokumen aseli','39c6456a447ec8ad8619caf2b3b74571.jpg','<a href=\"https://siak.wicida.ac.id/wicida.ac.id/siawicida/images/photo/2243057.jpg\">https://siak.wicida.ac.id/wicida.ac.id/siawicida/images/photo/2243057.jpg</a>','2024-06-26 07:18:20',3,2);
/*!40000 ALTER TABLE `artikel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES
(1,'teknologi'),
(2,'olahraga'),
(4,'Sejarah');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penulis`
--

DROP TABLE IF EXISTS `penulis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penulis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penulis`
--

LOCK TABLES `penulis` WRITE;
/*!40000 ALTER TABLE `penulis` DISABLE KEYS */;
INSERT INTO `penulis` VALUES
(1,'famozzy'),
(3,'daniel'),
(4,'nopal');
/*!40000 ALTER TABLE `penulis` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2024-07-01  0:58:00
