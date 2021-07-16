-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 02:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blueolz8_btr`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_englishes`
--

CREATE TABLE `event_englishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_hindis`
--

CREATE TABLE `event_hindis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `original_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `original_filename`, `filename`, `file_size`, `created_at`, `updated_at`) VALUES
(33, 'btr_image1.JPG', '5a5f50b3108e04ff842921ea0332511464e20582.JPG', 926938, '2021-06-03 00:41:55', '2021-06-03 00:41:55'),
(34, 'btr_image2.jpg', '186ba69124bebccbdb4c14bc695ad47495d6f5bc.jpg', 3680765, '2021-06-03 00:41:56', '2021-06-03 00:41:56'),
(35, 'btr_image3.jpg', '01b81e61c24b04da648a3bcdac89f2331d7cf884.jpg', 5871365, '2021-06-03 00:41:57', '2021-06-03 00:41:57'),
(36, 'btr_image4.jpg', '051c4e26b90978a1023939e0f0145100c395e7df.jpg', 4351993, '2021-06-03 00:41:57', '2021-06-03 00:41:57'),
(37, 'btr_image5.jpg', 'b6a131ef08d4e3c313e3b133197b395b0b7f1ab7.jpg', 1235748, '2021-06-03 00:42:01', '2021-06-03 00:42:01'),
(38, 'btr_image6.jpg', '98ad7bf614aebfc3507f3e0b318ed046a50047ad.jpg', 79740, '2021-06-03 00:45:44', '2021-06-03 00:45:44'),
(39, 'btr_image7.jpeg', '7bc202c3de4d8cfa7c9333baefdf6bb6454240eb.jpeg', 7762494, '2021-06-03 00:45:44', '2021-06-03 00:45:44'),
(40, 'btr_image8.jpg', '32055d3e994e849d71193d6b767da88f7822306d.jpg', 117146, '2021-06-03 00:45:45', '2021-06-03 00:45:45'),
(41, 'btr_image9.jpg', '2c0ac6d5a29effb200ac5dbed6cd3cc7a595005e.jpg', 85990, '2021-06-03 00:45:45', '2021-06-03 00:45:45'),
(42, 'btr_image10.jpg', '9d379d5f90502ca02eba528a5affb6f268918dab.jpg', 107034, '2021-06-03 00:45:46', '2021-06-03 00:45:46'),
(43, 'btr_image11.jpg', '48d93056d2224fb418a3548bdb552d324671f589.jpg', 494837, '2021-06-03 00:48:12', '2021-06-03 00:48:12'),
(44, 'btr_image12.jpg', 'be7214cb4c6d273ab1f461460f9663626f0dbb0f.jpg', 197138, '2021-06-03 00:48:12', '2021-06-03 00:48:12'),
(45, 'btr_image13.jpg', 'da505edc7c7f8d425be6798fb0432800b37ba167.jpg', 231508, '2021-06-03 00:48:14', '2021-06-03 00:48:14'),
(46, 'btr_image14.jpg', '98e89e3fe1ab976f8cd30cb3cfd8b01496393ecd.jpg', 418440, '2021-06-03 00:48:14', '2021-06-03 00:48:14'),
(47, 'btr_image15.jpg', '2ae1df14039b2ebb05812511741f79005a140195.jpg', 188671, '2021-06-03 00:48:15', '2021-06-03 00:48:15'),
(48, 'btr_image16.jpg', '8a894baa6d0f5a2fc93103971b091790825f32f2.jpg', 137931, '2021-06-03 00:48:39', '2021-06-03 00:48:39'),
(49, 'btr_image17.jpg', '180fb1dbb006856fb35e5bf89b9bceef69552c26.jpg', 309380, '2021-06-03 00:48:39', '2021-06-03 00:48:39'),
(50, 'btr_image18.jpg', '867bf341c80ea7d5483d6a2d9dca33c0a2c91e89.jpg', 432179, '2021-06-03 00:48:40', '2021-06-03 00:48:40'),
(51, 'btr_image20.jpg', '9588c3fb7311ecaa00229b62f9d9f16fe2280271.jpg', 572683, '2021-06-03 00:48:40', '2021-06-03 00:48:40'),
(52, 'btr_image21.jpg', '1ca44a69e5813820a0e89412e0ca5a4eca96557b.jpg', 251328, '2021-06-03 00:49:09', '2021-06-03 00:49:09'),
(53, 'btr_image22.jpg', '117e4adb6050902d52f8a13b21ffa8027662b214.jpg', 302703, '2021-06-03 00:49:11', '2021-06-03 00:49:11'),
(54, 'btr_image23.jpg', 'a2f6488701e9c4e45486d9808a1608e720d80d13.jpg', 234257, '2021-06-03 00:49:11', '2021-06-03 00:49:11'),
(55, 'btr_image24.jpg', 'bbe448fc595410e560997afea1e3bf2ea7593015.jpg', 2773728, '2021-06-03 00:49:12', '2021-06-03 00:49:12'),
(56, 'btr_image25.jpg', 'bda7fde61155a270b7fa6178548d93f12f72ad3f.jpg', 100405, '2021-06-03 00:49:13', '2021-06-03 00:49:13'),
(57, 'btr_image26.jpg', '6bb15523d18554a8c4495eb4e49c783f61e17752.jpg', 355032, '2021-06-03 00:49:32', '2021-06-03 00:49:32'),
(58, 'btr_image27.JPG', '3a6b54184f5dc360fb598dc15f857efdcf57a413.JPG', 554817, '2021-06-03 00:49:32', '2021-06-03 00:49:32'),
(59, 'btr_image28.jpg', 'dd3569d754164a11b2e237202ef44a72382dcd4e.jpg', 390196, '2021-06-03 00:49:33', '2021-06-03 00:49:33'),
(60, 'btr_image29.jpg', '6a608fc4f9c1064aeec6e84625a9a0565d10b308.jpg', 605015, '2021-06-03 00:49:33', '2021-06-03 00:49:33'),
(61, 'btr_image30.jpg', 'a68cffb16ade3eda2ca53afb1405ced289892824.jpg', 127687, '2021-06-03 00:49:34', '2021-06-03 00:49:34'),
(62, 'btr_image31.jpg', '1d6059c86a3d12238b659d1cb5f37694d85be84d.jpg', 214063, '2021-06-03 00:50:09', '2021-06-03 00:50:09'),
(63, 'btr_image32.jpg', 'c4fdb3928ae5543d608b45a1a7d3b053ba69f6a5.jpg', 343763, '2021-06-03 00:50:09', '2021-06-03 00:50:09'),
(64, 'btr_image33.jpg', 'f1407d72bbfd2d0a761aa87d86d8135148cb8a1e.jpg', 64887, '2021-06-03 00:50:09', '2021-06-03 00:50:09'),
(65, 'btr_image34.jpeg', 'd835ad892a6ed643a6515381bbe69f53b32acbd1.jpeg', 893674, '2021-06-03 00:50:09', '2021-06-03 00:50:09'),
(66, 'btr_image35.jpeg', 'b8ee1eb93ff559b826f14053635dd1544eb762f9.jpeg', 553423, '2021-06-03 00:50:10', '2021-06-03 00:50:10'),
(67, 'btr_image36.jpg', '1c7ee2bc4810d8485f6d299852f52163f678ddec.jpg', 427687, '2021-06-03 00:52:30', '2021-06-03 00:52:30'),
(68, 'btr_image37.jpg', '627b86ddcf6e30c9889a85a22d8ead7643a16b99.jpg', 220905, '2021-06-03 00:52:30', '2021-06-03 00:52:30'),
(69, 'btr_image38.jpg', '63df7396774d97838b8737e5e1c84aa7c05b0b4d.jpg', 1057136, '2021-06-03 00:52:31', '2021-06-03 00:52:31'),
(70, 'btr_image39.jpeg', 'b1f7e30f9a487ed213ed6c0feda44a3125e22195.jpeg', 378170, '2021-06-03 00:52:31', '2021-06-03 00:52:31'),
(71, 'btr_image40.JPG', 'cba4475e34b1e7ebffaea1dfa172e370a322ae90.JPG', 1259672, '2021-06-03 00:52:32', '2021-06-03 00:52:32'),
(72, 'btr_image41.jpg', '637077aa58b84a087c7d3168d4f6bcdd7cbd8da7.jpg', 532583, '2021-06-03 00:52:32', '2021-06-03 00:52:32'),
(73, 'btr_image42.jpg', 'c4d703fc34edcd0b0b35cd0e970f00796e5788e6.jpg', 255965, '2021-06-03 00:53:27', '2021-06-03 00:53:27'),
(74, 'btr_image43.jpg', '08e961bd769a7712f61207560a56fae0ba3d7242.jpg', 238044, '2021-06-03 00:53:27', '2021-06-03 00:53:27'),
(75, 'btr_image44.jpg', 'ec063215ed50380fb5df55fd9ba2b0c18c777c35.jpg', 272423, '2021-06-03 00:53:28', '2021-06-03 00:53:28'),
(76, 'btr_image45.jpg', '8e3bd72c4ba5cb001d477aaf1c66d9cb981c2e09.jpg', 96567, '2021-06-03 00:53:28', '2021-06-03 00:53:28'),
(77, 'btr_image46.jpg', 'faca3924d0a4745b6c5f2f6ab5f41293597ca94b.jpg', 214891, '2021-06-03 00:53:29', '2021-06-03 00:53:29'),
(78, 'btr_image47.jpg', 'bd74e4945d36a44d75cc7a229b3b58f1bffdc917.jpg', 246433, '2021-06-03 00:54:01', '2021-06-03 00:54:01'),
(79, 'btr_image49.jpg', '2903ee7fdf7050e74ae27e902d6485765fecc023.jpg', 804628, '2021-06-03 00:54:02', '2021-06-03 00:54:02'),
(80, 'btr_image50.jpg', 'b84b75acb372bb3dd3cdc5b09fdcf74e09502039.jpg', 57745, '2021-06-03 00:54:02', '2021-06-03 00:54:02'),
(81, 'btr_image51.jpg', 'dab1244322bb5aefa211afc312fa05db3535bde2.jpg', 448737, '2021-06-03 00:54:02', '2021-06-03 00:54:02'),
(82, 'btr_image52.jpg', '482ff53dfd7c0a8788efef3f0e9a7fcc869a0667.jpg', 290208, '2021-06-03 00:54:03', '2021-06-03 00:54:03'),
(83, 'btr_image53.jpg', 'e204790d95901dfc351999bfe3d08bbb418653de.jpg', 105250, '2021-06-03 00:54:03', '2021-06-03 00:54:03'),
(84, 'btr_image54.jpeg', '957b0d148075d7c1b7c39ea2b517a3cd7d226ce4.jpeg', 2352234, '2021-06-03 00:54:04', '2021-06-03 00:54:04'),
(85, 'btr_image55.jpg', '748d1a488a055414778ce7f909eaa6aec0fd29f7.jpg', 2234433, '2021-06-03 00:54:04', '2021-06-03 00:54:04'),
(86, 'btr_image56.jpg', 'ad14baac0adcc0466fe2609a773ea91652d5d8b6.jpg', 805105, '2021-06-03 00:54:34', '2021-06-03 00:54:34'),
(87, 'btr_image57.jpg', '91cfc9cee6e065a4847683834805b13fb622c3bb.jpg', 105611, '2021-06-03 00:54:35', '2021-06-03 00:54:35'),
(88, 'btr_image58.jpg', 'ce82db23a35720894f03adf1dbcdd2aca5f89fd4.jpg', 183436, '2021-06-03 00:54:35', '2021-06-03 00:54:35'),
(89, 'btr_image59.jpg', 'f14b5c08885f4980650b73cae58b399706fb78c9.jpg', 107587, '2021-06-03 00:54:35', '2021-06-03 00:54:35'),
(90, 'btr_image60.jpg', '41169314ed2f17ce6f9fee22ced0a8e5514652dd.jpg', 212596, '2021-06-03 00:54:36', '2021-06-03 00:54:36'),
(91, 'btr_image61.jpg', '2d8a46a6e88b7a245db34df79e3f95c2941d3e0e.jpg', 107393, '2021-06-03 00:54:36', '2021-06-03 00:54:36'),
(92, 'btr_image62.jpg', '0d331641ea0ee6096cb79ff3259cb3557d961473.jpg', 263749, '2021-06-03 00:54:37', '2021-06-03 00:54:37'),
(93, 'btr_image63.jpg', '8ad3bf392b448a25e4417ddbbab5bd6fe9b1b75e.jpg', 327100, '2021-06-03 00:54:37', '2021-06-03 00:54:37'),
(94, 'btr_image64.jpg', 'b72326421d8171fd54eff9cad124d54dbcfc9027.jpg', 1999339, '2021-06-03 00:54:38', '2021-06-03 00:54:38'),
(95, 'btr_image65.jpg', '77197afeb562227fba62fff8b50fdd3418e7229d.jpg', 1107641, '2021-06-03 00:54:38', '2021-06-03 00:54:38'),
(96, 'btr_image66.jpg', '3c74e51c6a7d8103437817286c8e8165ac55fea6.jpg', 2080850, '2021-06-03 00:55:00', '2021-06-03 00:55:00'),
(97, 'btr_image67.jpg', 'b801c572b346c0c29190208d8f0086db607ab7ee.jpg', 778028, '2021-06-03 00:55:00', '2021-06-03 00:55:00'),
(98, 'btr_image68.jpg', '6c82d440f4c4fe0d1d8d0d13b95db02883fde3cc.jpg', 1750846, '2021-06-03 00:55:01', '2021-06-03 00:55:01'),
(99, 'btr_image69.jpg', '76fd9b79615598c8df7773359410702ae76b0644.jpg', 904134, '2021-06-03 00:55:01', '2021-06-03 00:55:01'),
(100, 'btr_image70.jpg', '64b9e1236d13b539ca11c558f05cbb3401d311d9.jpg', 2053681, '2021-06-03 00:55:02', '2021-06-03 00:55:02'),
(101, 'btr_image71.jpg', '52d374cb3520f53fefea1c1b665d351c21cd6986.jpg', 2126304, '2021-06-03 00:55:02', '2021-06-03 00:55:02'),
(102, 'btr_image72.jpg', 'a3636494045431de3e670e91ceb4730243731207.jpg', 346530, '2021-06-03 00:55:02', '2021-06-03 00:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_12_112049_create_event_englishes_table', 1),
(5, '2021_03_16_073648_create_event_hindis_table', 1),
(6, '2021_03_16_093402_create_news_englishes_table', 1),
(7, '2021_03_16_093608_create_news_hindis_table', 1),
(8, '2021_03_20_060813_create_galleries_table', 1),
(10, '2021_07_15_054832_create_tenders_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news_englishes`
--

CREATE TABLE `news_englishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_date` date NOT NULL,
  `news_discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_news_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_englishes`
--

INSERT INTO `news_englishes` (`id`, `news_title`, `news_slug`, `news_date`, `news_discription`, `news_image`, `m_news_image`, `created_at`, `updated_at`) VALUES
(4, 'Lorem Ipsum is simply dummy text', 'lorem-ipsum-is-simply-dummy-text', '2021-06-03', '<p>Lorem Ipsum is simply dummy text&nbsp;Lorem Ipsum is simply dummy text&nbsp;Lorem Ipsum is simply dummy text&nbsp;Lorem Ipsum is simply dummy text&nbsp;Lorem Ipsum is simply dummy text&nbsp;Lorem Ipsum is simply dummy text .</p>', '1622637511nature.jpg', '', '2021-06-02 07:08:31', '2021-06-02 07:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `news_hindis`
--

CREATE TABLE `news_hindis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_date` date NOT NULL,
  `news_discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_news_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_hindis`
--

INSERT INTO `news_hindis` (`id`, `news_title`, `news_slug`, `news_date`, `news_discription`, `news_image`, `m_news_image`, `created_at`, `updated_at`) VALUES
(1, 'छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है', 'chhapa-ii-oura-aka-shhara-ya-jana-utha-ya-ga-ka-eka-sa-thha-ranae-dama-pa-tha-ha', '2021-06-02', '<p>छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है&nbsp;छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है&nbsp;छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है&nbsp;छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है&nbsp;छपाई और अक्षर योजन उद्योग का एक साधारण डमी पाठ है</p>', '1622637577css3.jpg', '', '2021-06-02 07:09:37', '2021-06-18 03:23:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenders`
--

CREATE TABLE `tenders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint(20) NOT NULL,
  `file_extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenders`
--

INSERT INTO `tenders` (`id`, `title`, `slug`, `description`, `original_filename`, `filename`, `file_size`, `file_extension`, `created_at`, `updated_at`) VALUES
(9, 'Test Tender', 'test-tender-3', '<p>This is my first tender.</p>', 'WTS-Documentation.pdf', 'f049236e673cddabf9e0ad7cf99116062435ff3c.pdf', 935461, 'pdf', '2021-07-16 06:45:54', '2021-07-16 06:54:26'),
(10, 'Test Tender', 'test-tender', '<p>This is my second tender.</p>', 'BTR Hindi.docx', '526fa164dfa0b0aa197a24bf8a2278570ecc1cc2.docx', 147287, 'docx', '2021-07-16 06:52:07', '2021-07-16 06:52:07'),
(11, 'Test Tender', 'test-tender-4', '<p>This is my test tender.</p>', 'December Quiz Certificate Database.xlsx', '44b6b36bc2b1d7743ab500ece30e7b495c9a6b96.xlsx', 27893, 'xlsx', '2021-07-16 07:27:00', '2021-07-16 07:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_as`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin BTR', 'admin@btr.com', NULL, '$2y$10$nLYWj8UvXqmmTWQ6VARXde34wS9U/LBw5UeimqpUDYzKrXxs7jMZ.', 'admin', 0, NULL, '2021-05-28 04:47:48', '2021-05-30 23:51:43'),
(2, 'SU Admin', 'suadmin@btr.com', NULL, '$2y$10$i7/FBj0C48G5w0UaEUJ6a.yUglVcCl5WIQ5mocxF4qZAV.59A/NDC', 'superadmin', 0, NULL, '2021-05-29 00:39:55', '2021-05-30 23:51:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_englishes`
--
ALTER TABLE `event_englishes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_englishes_slug_unique` (`slug`);

--
-- Indexes for table `event_hindis`
--
ALTER TABLE `event_hindis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_hindis_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_englishes`
--
ALTER TABLE `news_englishes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_englishes_news_slug_unique` (`news_slug`);

--
-- Indexes for table `news_hindis`
--
ALTER TABLE `news_hindis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_hindis_news_slug_unique` (`news_slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tenders`
--
ALTER TABLE `tenders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tenders_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_englishes`
--
ALTER TABLE `event_englishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_hindis`
--
ALTER TABLE `event_hindis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news_englishes`
--
ALTER TABLE `news_englishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news_hindis`
--
ALTER TABLE `news_hindis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tenders`
--
ALTER TABLE `tenders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
