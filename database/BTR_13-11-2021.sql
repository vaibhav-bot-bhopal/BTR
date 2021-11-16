-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: blueolz8_btr
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint NOT NULL,
  `file_extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `documents_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `original_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,'btr_image1','827868609199a36874714bb32333c84fc8ab971a.JPG','JPG',132873,'2021-10-11 07:59:38','2021-10-11 07:59:38'),(2,'btr_image2','d4ee5fc62ae42bebc54502e3f251e4e2d4581504.jpg','jpg',142498,'2021-10-11 08:00:20','2021-10-11 08:00:20'),(3,'btr_image3','45d54504c2049bac32af890ab48ae48ea169b87e.jpg','jpg',187349,'2021-10-11 08:00:20','2021-10-11 08:00:20'),(4,'btr_image4','bc942ce51af3033f14202ab5185acfb38de75a8e.jpg','jpg',205565,'2021-10-11 08:00:21','2021-10-11 08:00:21'),(5,'btr_image5','5ff06841a16bad5bff562919930ce8a216f07182.jpg','jpg',86661,'2021-10-11 08:00:21','2021-10-11 08:00:21'),(6,'btr_image6','139c0e3fd513261a3b627a1831255e5122d8cfc4.jpg','jpg',92158,'2021-10-11 08:01:01','2021-10-11 08:01:01'),(7,'btr_image7','115f5a273875d1679014ee277a27c116cb913c54.jpeg','jpeg',126716,'2021-10-11 08:01:01','2021-10-11 08:01:01'),(8,'btr_image8','912f9d177e4f5a14a089c688e25c63573486506f.jpg','jpg',118900,'2021-10-11 08:01:02','2021-10-11 08:01:02'),(9,'btr_image9','04712a1cbc30c9163f85f126d8e09d21a819a584.jpg','jpg',93085,'2021-10-11 08:01:02','2021-10-11 08:01:02'),(10,'btr_image10','ee1a1beea9b181af6c24ddebce2bca3d0f1c6c20.jpg','jpg',106014,'2021-10-11 08:01:03','2021-10-11 08:01:03'),(11,'btr_image11','da9731004bb438fade5edaf14e340da81a33ca0f.jpg','jpg',107911,'2021-10-11 08:01:28','2021-10-11 08:01:28'),(12,'btr_image12','a3465d059b92334ee5fea917a475d2bfb032cf5b.jpg','jpg',101161,'2021-10-11 08:01:28','2021-10-11 08:01:28'),(13,'btr_image13','d8a5276be606cea091fed313a9593a9b67d42cc9.jpg','jpg',129923,'2021-10-11 08:01:29','2021-10-11 08:01:29'),(14,'btr_image14','9ddd7ab905496150d527088920dd0ec06ce5a267.jpg','jpg',146807,'2021-10-11 08:01:29','2021-10-11 08:01:29'),(15,'btr_image15','db36d6c2a4bd643a244d083c8b2777e7807621b1.jpg','jpg',99298,'2021-10-11 08:01:30','2021-10-11 08:01:30'),(16,'btr_image16','48e796802195de6283826da0285f6ed837f21085.jpg','jpg',104824,'2021-10-11 08:01:47','2021-10-11 08:01:47'),(17,'btr_image17','ee73fa7efdae4f71083957518dc2cfd0713a1e12.jpg','jpg',153998,'2021-10-11 08:01:47','2021-10-11 08:01:47'),(18,'btr_image18','e3030309f512f6df395245758ab9821c4df8afb3.jpg','jpg',152149,'2021-10-11 08:01:48','2021-10-11 08:01:48'),(19,'btr_image19','bea7e769ba224dcbf46b221ac915eeb88789a0a3.jpg','jpg',240548,'2021-10-11 08:01:48','2021-10-11 08:01:48'),(20,'btr_image20','071a047057a56490bce009a1175afbdd509bdb0a.jpg','jpg',74435,'2021-10-11 08:01:49','2021-10-11 08:01:49'),(21,'btr_image21','a8b30577d7c643a487b782cb77b8b7fb5e20b592.jpg','jpg',110939,'2021-10-11 08:02:07','2021-10-11 08:02:07'),(22,'btr_image22','f5060970c45dd103b5a96396895623c0c6b3d904.jpg','jpg',125544,'2021-10-11 08:02:07','2021-10-11 08:02:07'),(23,'btr_image23','975d8304fb2d22cb4e69b02c53dbc3360f860138.jpg','jpg',127456,'2021-10-11 08:02:07','2021-10-11 08:02:07'),(24,'btr_image24','60a1b55232309713f070b0bfc6000b06376ed98d.jpg','jpg',139715,'2021-10-11 08:02:07','2021-10-11 08:02:07'),(25,'btr_image25','bd3953cadb88784941cd818fa441fc63f2e4fc08.jpg','jpg',59254,'2021-10-11 08:02:08','2021-10-11 08:02:08'),(26,'btr_image26','604601ac9da9b81c9b4fcdd972343d089afecd93.jpg','jpg',166439,'2021-10-11 08:02:23','2021-10-11 08:02:23'),(27,'btr_image27','611d7a1bd7d846dd22a6bb3c895087c1fd1b6bea.JPG','JPG',106259,'2021-10-11 08:02:23','2021-10-11 08:02:23'),(28,'btr_image28','dd657d67f159899c7d62df7c94ff6f8b9712067f.jpg','jpg',150261,'2021-10-11 08:02:23','2021-10-11 08:02:23'),(29,'btr_image29','9f2a02ac2a75269d0744f21541c9be7fc4a66d71.jpg','jpg',118885,'2021-10-11 08:02:23','2021-10-11 08:02:23'),(30,'btr_image30','b66a7afd31f2e64df6f6c011fdcb509969815f21.jpg','jpg',36105,'2021-10-11 08:02:24','2021-10-11 08:02:24'),(31,'btr_image31','5216d473c551eb3ce445b7997323f193ca269574.jpg','jpg',199641,'2021-10-11 08:02:46','2021-10-11 08:02:46'),(32,'btr_image32','3430857655e1d550e63975717e8a707fe69c77ab.jpg','jpg',2140460,'2021-10-11 08:02:47','2021-10-11 08:02:47'),(33,'btr_image33','63287c9e218ab63a103b8ef73e6b22eb9977be4f.jpg','jpg',43365,'2021-10-11 08:02:47','2021-10-11 08:02:47'),(34,'btr_image34','03a1b4507ca968a7d44c03a36c38683eecee9ef5.jpeg','jpeg',55158,'2021-10-11 08:02:47','2021-10-11 08:02:47'),(35,'btr_image35','c474c7faab4064fc035424e13ff908ccd8a899b4.jpeg','jpeg',31667,'2021-10-11 08:02:48','2021-10-11 08:02:48'),(36,'btr_image36','1e60d6ee500d9096c4e102948e2a365b6a01928b.jpg','jpg',24436,'2021-10-11 08:03:06','2021-10-11 08:03:06'),(37,'btr_image37','062e2ae5aadaab24d558502823b866951b2f6af2.jpg','jpg',63532,'2021-10-11 08:03:06','2021-10-11 08:03:06'),(38,'btr_image38','b9f364387fe8c05f4d7838b48ad04f8e00520f44.jpg','jpg',46780,'2021-10-11 08:03:06','2021-10-11 08:03:06'),(39,'btr_image39','1b13a864c0ff146c31d9b3d24f195cf1ed759274.jpeg','jpeg',63348,'2021-10-11 08:03:06','2021-10-11 08:03:06'),(40,'btr_image40','ffa3efa59843c4f57dd9c024b867ae9a7f6c0dbc.JPG','JPG',70640,'2021-10-11 08:03:07','2021-10-11 08:03:07'),(41,'btr_image41','576460a8184be65d9e885f455c0bc4efa24a9c86.jpg','jpg',57054,'2021-10-11 08:03:07','2021-10-11 08:03:07'),(42,'btr_image42','cbd9de9f1cae1037a2af5afa28504b8d08d92c89.jpg','jpg',419291,'2021-10-11 08:03:08','2021-10-11 08:03:08'),(43,'btr_image43','783909e8f86b16c671a7700388263d85bc46033c.jpg','jpg',42900,'2021-10-11 08:03:08','2021-10-11 08:03:08'),(44,'btr_image44','1726946534c273189ca3f749976585e196369a48.jpg','jpg',59059,'2021-10-11 08:03:09','2021-10-11 08:03:09'),(45,'btr_image45','f66d35b31640bd9a22bc872a76e873289179d0ef.jpg','jpg',29646,'2021-10-11 08:03:09','2021-10-11 08:03:09'),(46,'btr_image46','dd7d933e0cccfc495a3b983abe776eb16b75ff4c.jpg','jpg',31623,'2021-10-11 08:03:28','2021-10-11 08:03:28'),(47,'btr_image47','d071c67b919e336bd91218ee052ca5d043100310.jpg','jpg',56497,'2021-10-11 08:03:28','2021-10-11 08:03:28'),(48,'btr_image48','44601d28b1f154a8adc8adac2638c81dfc9ee061.jpg','jpg',45468,'2021-10-11 08:03:29','2021-10-11 08:03:29'),(49,'btr_image49','224b4bcf5ad97ae8b8a75b5ba4568541648a23db.jpg','jpg',59614,'2021-10-11 08:03:29','2021-10-11 08:03:29'),(50,'btr_image50','d793fa70de3656b7016e33e347a53cf4d375bae1.jpg','jpg',22814,'2021-10-11 08:03:29','2021-10-11 08:03:29'),(51,'btr_image51','a15b2e67a2e19348a8f13593943c55be77cb8904.jpg','jpg',55030,'2021-10-11 08:03:30','2021-10-11 08:03:30'),(52,'btr_image52','92a5b9a238ddc3a0f0cf5d7d8e2686616218e650.jpg','jpg',56105,'2021-10-11 08:03:30','2021-10-11 08:03:30'),(53,'btr_image53','e302f968ff15750d69a4cb214224507541af7855.jpg','jpg',36651,'2021-10-11 08:03:30','2021-10-11 08:03:30'),(54,'btr_image54','e354e75c1a6ea193a4c229320f5d3e0fb50fc7a3.jpeg','jpeg',61810,'2021-10-11 08:03:31','2021-10-11 08:03:31'),(55,'btr_image55','0a8fac2bfaa05a663ca0696e09614961513d64a6.jpg','jpg',144880,'2021-10-11 08:03:31','2021-10-11 08:03:31'),(56,'btr_image56','f988a4a5f19812e0a8ba104b6cfe87318ed2e535.jpg','jpg',93626,'2021-10-11 08:03:32','2021-10-11 08:03:32'),(57,'btr_image57','ddfc19aec903f5de5ef55332c5e36231f69a426f.jpg','jpg',124307,'2021-10-11 08:03:32','2021-10-11 08:03:32'),(58,'btr_image58','67107360934befa20c7859011f4ef9c1892d41e8.jpg','jpg',113403,'2021-10-11 08:03:32','2021-10-11 08:03:32'),(59,'btr_image59','422ebdfd8baf21006f427aeef49caa973bdb9fc2.jpg','jpg',65183,'2021-10-11 08:03:33','2021-10-11 08:03:33'),(60,'btr_image60','cc2704ab70427d45dede8868135a1722044b071a.jpg','jpg',41596,'2021-10-11 08:03:33','2021-10-11 08:03:33'),(61,'btr_image61','826e6ac3c4cd6636e6642de95435af5e29457956.jpg','jpg',52375,'2021-10-11 08:03:54','2021-10-11 08:03:54'),(62,'btr_image62','c0ceb7337181210a209432deaa2bd2fb06d9c005.jpg','jpg',32835,'2021-10-11 08:03:54','2021-10-11 08:03:54'),(63,'btr_image63','01a1bdc158b7f6d8d699bd3d382a801e800974b3.jpg','jpg',35735,'2021-10-11 08:03:55','2021-10-11 08:03:55'),(64,'btr_image64','6831623111c4922816040591224e048786d80c92.jpg','jpg',67000,'2021-10-11 08:03:55','2021-10-11 08:03:55'),(65,'btr_image65','960229b48dbf30ce547f102df5d408e97ad597a3.jpg','jpg',62757,'2021-10-11 08:03:56','2021-10-11 08:03:56'),(66,'btr_image66','068f1a5b1c6e3873411bc6ff40a016a7c2fd4738.jpg','jpg',59127,'2021-10-11 08:03:56','2021-10-11 08:03:56'),(67,'btr_image67','3221505e290d4eeb32a1e544072bae24ae19c263.jpg','jpg',60803,'2021-10-11 08:03:57','2021-10-11 08:03:57'),(68,'btr_image68','d33777d9685ee9423b781894eb4d97eac51b5af8.jpg','jpg',57030,'2021-10-11 08:03:57','2021-10-11 08:03:57'),(69,'btr_image69','8b5968f8e113f4c54fc457583659b90873882b24.jpg','jpg',58745,'2021-10-11 08:03:57','2021-10-11 08:03:57'),(70,'btr_image70','0a4d9a6f94b179a7cd9b181f88f6fb4e18168bbf.jpg','jpg',51154,'2021-10-11 08:03:57','2021-10-11 08:03:57'),(71,'btr_image71','4d58f379416769b1c6ae344846c9deeb78087995.jpg','jpg',67530,'2021-10-11 08:03:58','2021-10-11 08:03:58'),(72,'btr_image72','849ee624a26a98e4332ad022d27a60d41692b9ea.jpg','jpg',54323,'2021-10-11 08:03:58','2021-10-11 08:03:58');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_03_20_060813_create_galleries_table',1),(5,'2021_07_15_054832_create_tenders_table',1),(6,'2021_07_29_063621_create_trackers_table',1),(7,'2021_07_30_153218_create_documents_table',1),(8,'2021_10_09_152334_create_news_table',1),(9,'2021_10_09_161629_create_news_images_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (17,'India For Tigers – A Rally On Wheel , Began From Bandhavgarh','india-for-tigers-a-rally-on-wheel-began-from-bandhavgarh','2021-10-06','<p style=\"text-align:justify\">To commemorate the 75 years of Independence of on 15th August 2021; Govt. of India. is conducting a 75 week long country wide campaign<strong>&nbsp;&ldquo;Azadi ka Amrut Mahotsav&rdquo;&nbsp;</strong>with focus on participation from common citizens of the country. To celebrate the monumental occasion under &ldquo;Azadi ka Amrut Mahotsav&rdquo;, The National Tiger Conservation Authority (NTCA), is conducting a pan India activity called&nbsp;<strong>&ldquo;India for Tigers &ndash; A Rally on Wheel&rdquo;&nbsp;</strong>with the objective of celebrating the occasion and spreading the message of biodiversity conservation under the ambit of Project Tiger and Integrated Development of Wildlife Habitats.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>&quot;India for Tigers &ndash; A Rally of Wheels&rdquo; , event began today at Bandhavgarh National Park Tiger Reserve and it will be culminating at Kanha Tiger Reserve on 7th of October. Catch few of the Glimpses.&quot;</strong></p>','1636700323Azadi-ka-Amrut-Mahotsav.jpeg','2021-11-12 06:58:44','2021-11-12 06:58:44');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_images`
--

DROP TABLE IF EXISTS `news_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `news_id` bigint unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_images_news_id_foreign` (`news_id`),
  CONSTRAINT `news_images_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_images`
--

LOCK TABLES `news_images` WRITE;
/*!40000 ALTER TABLE `news_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `news_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tenders`
--

DROP TABLE IF EXISTS `tenders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tenders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_date` datetime NOT NULL,
  `original_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint NOT NULL,
  `file_extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tenders_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenders`
--

LOCK TABLES `tenders` WRITE;
/*!40000 ALTER TABLE `tenders` DISABLE KEYS */;
/*!40000 ALTER TABLE `tenders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trackers`
--

DROP TABLE IF EXISTS `trackers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trackers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `hits` int NOT NULL,
  `visit_date` date NOT NULL,
  `visit_time` time NOT NULL,
  `browser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trackers`
--

LOCK TABLES `trackers` WRITE;
/*!40000 ALTER TABLE `trackers` DISABLE KEYS */;
INSERT INTO `trackers` VALUES (1,'::1','2021-10-13',12,'2021-10-13','13:32:12','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36','2021-10-13 07:46:02','2021-10-13 08:02:12'),(2,'::1','2021-10-14',22,'2021-10-14','13:56:22','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36','2021-10-14 05:48:47','2021-10-14 08:26:22'),(3,'::1','2021-10-20',75,'2021-10-20','14:18:10','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36','2021-10-20 06:40:17','2021-10-20 08:48:10'),(4,'::1','2021-10-21',266,'2021-10-21','18:26:07','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36','2021-10-21 05:39:18','2021-10-21 12:56:07'),(5,'192.168.1.25','2021-10-21',11,'2021-10-21','15:15:08','Mozilla/5.0 (Linux; Android 11; RMX3360) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.85 Mobile Safari/537.36','2021-10-21 08:19:30','2021-10-21 09:45:08'),(6,'192.168.1.25','2021-10-21',1,'2021-10-21','13:53:43','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.85 Safari/537.36','2021-10-21 08:23:43','2021-10-21 08:23:43'),(7,'::1','2021-10-22',180,'2021-10-22','18:26:42','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36','2021-10-22 05:56:05','2021-10-22 12:56:42'),(8,'192.168.1.25','2021-10-22',25,'2021-10-22','18:33:05','Mozilla/5.0 (Linux; Android 11; RMX3360) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.85 Mobile Safari/537.36','2021-10-22 09:37:56','2021-10-22 13:03:05'),(9,'::1','2021-10-22',2,'2021-10-22','17:14:39','Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Mobile Safari/537.36','2021-10-22 11:38:03','2021-10-22 11:44:39'),(10,'::1','2021-10-23',7,'2021-10-23','11:54:28','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36','2021-10-23 06:13:41','2021-10-23 06:24:28'),(11,'::1','2021-11-11',1,'2021-11-11','16:39:11','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36','2021-11-11 11:09:11','2021-11-11 11:09:11'),(12,'::1','2021-11-12',26,'2021-11-12','18:05:27','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36','2021-11-12 06:38:41','2021-11-12 12:35:27'),(13,'::1','2021-11-13',21,'2021-11-13','12:38:41','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36','2021-11-13 06:07:40','2021-11-13 07:08:41');
/*!40000 ALTER TABLE `trackers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `status` tinyint NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@btr.com',NULL,'$2y$10$RSEl4VVgvREqikhtNYf2ReEO0WNXyTylkfB10129r4ze9d29Dzuoi','admin',0,NULL,'2021-10-09 10:48:34','2021-11-13 06:34:38'),(2,'Super Admin','super@btr.org',NULL,'$2y$10$YJ7i4LwZdlFSp5vQeXFhceCgBqTmlC9hWTV5/iFlF4vm1uYZ6.5Ay','superadmin',0,NULL,'2021-11-12 12:36:48','2021-11-13 06:36:35'),(3,'Bandhavgarh Admin','admin@btr.org',NULL,'$2y$10$HENKpv1TAo1Cmg5wxR3fpOrCjHlYL5EqBwqwu3HgdXBIrC2MNTrj2','admin',0,NULL,'2021-11-12 12:38:09','2021-11-12 12:38:09');
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

-- Dump completed on 2021-11-13 14:45:49
