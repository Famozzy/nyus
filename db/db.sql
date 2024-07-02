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
('5c9614f4-a13c-4639-968d-0fcde792d2bb','Gemini AI: Model AI Generatif Tercanggih Google','69cdbb7ac99ca6c4d8059be0e6872c31.jpg','Gemini AI, chatbot kecerdasan buatan generatif yang dikembangkan Google, menjadi model AI paling canggih dan fleksibel saat ini. Kemampuannya yang mutakhir membuka berbagai kemungkinan baru bagi pengguna, pengembang, dan perusahaan.\r\n\r\nGemini AI unggul dalam hal kemampuan multimodalitasnya. Artinya, ia dapat memahami dan memproses informasi dari berbagai format, seperti teks, kode, gambar, dan audio. Hal ini memungkinkannya untuk menyelesaikan berbagai tugas secara efektif. Contohnya, Gemini dapat membantu menulis teks kreatif, menerjemahkan bahasa, meringkas informasi, bahkan membuat kode. Kemampuannya memahami gambar dan audio memungkinkan Gemini menjawab pertanyaan terkait gambar atau video, serta membuat musik atau menghasilkan efek suara.\r\n\r\nSelain itu, Gemini AI dirancang untuk dapat berjalan di berbagai perangkat, mulai dari pusat data hingga perangkat mobile. Fleksibilitas ini memungkinkannya diintegrasikan ke berbagai aplikasi dan layanan, sehingga manfaatnya dapat dinikmati oleh pengguna yang lebih luas. Pengembang dapat memanfaatkannya untuk membangun aplikasi yang lebih cerdas dan intuitif. Perusahaan dapat menggunakannya untuk meningkatkan efisiensi dan produktivitas dalam berbagai bidang, seperti customer service, marketing, dan research and development.\r\n\r\nDengan kemampuannya yang mutakhir dan fleksibilitasnya yang tinggi, Gemini AI menandakan era baru dalam kecerdasan buatan. Potensinya untuk memahami dan memproses informasi dari berbagai format, serta kemampuannya untuk berjalan di berbagai perangkat, membuka berbagai kemungkinan baru untuk aplikasi AI di masa depan. Gemini AI diharapkan dapat membantu manusia dalam berbagai aspek kehidupan, mulai dari menyelesaikan tugas sehari-hari hingga membantu memecahkan masalah yang kompleks. Saat ini, Gemini AI masih dalam tahap pengembangan, namun Google berencana untuk membuatnya lebih mudah diakses publik di masa depan.','2024-06-29 16:16:32',1,1),
('96bb63c1-4d41-4267-8e6f-52cda9b104c2','Atarashii Gakko!: Musik Energik yang Menginspirasi dan Memotivasi','b95d350deefa880de662487a0d6d205c.jpg','Atarashii Gakko!, yang dikenal di Jepang sebagai Atarashii Gakkou no Leaders, adalah grup vokal wanita asal Jepang yang dibentuk pada tahun 2015. Beranggotakan empat orang, yaitu Suzume, Rin, MIZYU, dan Hikaru, Atarashii Gakko! membawa angin segar ke dunia musik J-Pop dengan konsep pemberontak dan semangat kebebasan mereka.\r\n\r\nLagu-lagu Atarashii Gakko! seringkali mengangkat tema-tema yang dianggap tabu di masyarakat Jepang, seperti body positivity, individualitas, dan kritik sosial. Musik mereka memadukan genre pop, rock, dan hip-hop, menghasilkan suara yang energik dan catchy. Penampilan mereka di atas panggung pun penuh dengan koreografi yang dinamis dan ekspresif, semakin memperkuat pesan yang ingin mereka sampaikan.\r\n\r\nKeberanian Atarashii Gakko! dalam mendobrak norma dan menyampaikan pesan yang berani telah menarik banyak penggemar, terutama di kalangan generasi muda Jepang. Mereka telah menjadi ikon pemberontakan dan kebebasan bagi banyak orang yang ingin mengekspresikan diri mereka dengan bebas tanpa terikat oleh batasan sosial.','2024-06-25 13:51:03',4,2),
('c858773b-6710-4137-ba0f-2e3061725255','Moondrop IEM: In-Ear Monitor Berkualitas Tinggi untuk Pengalaman Audio yang Menakjubkan','95e8dc40d0f543145989ddeb786b78d1.jpg','Moondrop adalah merek audio asal Cina yang terkenal dengan produk In-Ear Monitor (IEM) berkualitas tinggi. Didirikan pada tahun 2014, Moondrop dengan cepat mendapatkan popularitas di kalangan audiophiles karena menawarkan IEM dengan performa suara yang luar biasa dan desain yang elegan, dengan harga yang relatif terjangkau.\r\n\r\nIEM Moondrop terkenal dengan suaranya yang netral dan seimbang, dengan detail yang kaya dan respons bass yang solid. IEM ini cocok untuk berbagai genre musik, dari pop dan rock hingga klasik dan jazz. Moondrop juga menawarkan berbagai model IEM dengan berbagai fitur dan harga, sehingga Anda dapat menemukan yang tepat untuk kebutuhan dan anggaran Anda.\r\n\r\nSalah satu model IEM Moondrop yang paling populer adalah Starfield. Starfield adalah IEM single-dynamic driver yang menawarkan suara yang seimbang dan detail dengan bass yang kuat. IEM ini nyaman dipakai untuk waktu yang lama dan dilengkapi dengan kabel yang dapat dilepas.\r\n\r\nModel IEM Moondrop lainnya yang populer adalah Blessing 2. Blessing 2 adalah IEM hybrid yang menggunakan kombinasi driver dynamic dan planar untuk menghasilkan suara yang detail dan dinamis. IEM ini memiliki desain yang ergonomis dan nyaman dipakai untuk waktu yang lama.\r\n\r\nMoondrop juga menawarkan berbagai aksesoris IEM, seperti eartips, kabel upgrade, dan case. Aksesoris ini dapat membantu Anda meningkatkan performa IEM Anda dan menyesuaikannya dengan preferensi mendengarkan Anda.\r\n\r\nJika Anda mencari IEM berkualitas tinggi dengan suara yang luar biasa dan desain yang elegan, Moondrop adalah merek yang harus Anda pertimbangkan. Moondrop menawarkan berbagai model IEM dengan berbagai fitur dan harga, sehingga Anda dapat menemukan yang tepat untuk kebutuhan dan anggaran Anda.','2024-06-25 13:08:41',3,1),
('fb159615-039d-42a5-94e3-f5c9b3fe500f','Rust: Bahasa Pemrograman Performa Tinggi dengan Keamanan Memori','2cd570f3003e9b5c1ee180117c703614.jpg','Rust adalah bahasa pemrograman modern yang dirancang untuk memberikan performa tinggi dan keamanan memori. Bahasa ini terinspirasi oleh C dan C++ namun dengan beberapa perbedaan signifikan yang membuatnya lebih aman dan mudah digunakan. Salah satu fitur utama Rust adalah kepemilikan, sistem yang memastikan memori dibebaskan secara otomatis dan aman, sehingga mencegah kebocoran memori dan masalah keamanan lainnya yang umum terjadi pada bahasa lain.','2024-06-26 07:18:20',3,1);
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
(2,'musik'),
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

-- Dump completed on 2024-07-02 14:23:36
