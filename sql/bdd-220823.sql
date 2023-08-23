-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: portfolio
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.04.1

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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'GREGORY LACROIX','gregorylacroix78@gmail.com','0767853089','test greg','2023-04-14 14:23:01','2023-04-14 14:23:01'),(2,'GREGORY LACROIX','gregorylacroix78@gmail.com','0767853089','test 2 greg','2023-04-14 14:23:34','2023-04-14 14:23:34'),(3,'GREGORY LACROIX','gregorylacroix78@gmail.com','0767853089','fgvrrergergergerg','2023-04-14 14:26:17','2023-04-14 14:26:17'),(4,'GREGORY LACROIX','gregorylacroix78@gmail.com','0767853089','bla bla bla','2023-04-14 14:27:48','2023-04-14 14:27:48'),(6,'GREGORY LACROIX','gregorylacroix78@gmail.com','0767853089','yhgygyg','2023-08-20 19:22:07','2023-08-20 19:22:07');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `custom_site`
--

DROP TABLE IF EXISTS `custom_site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `custom_site` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nav_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `hover_link_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legale_notice` longtext COLLATE utf8mb4_unicode_ci,
  `avatar_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan_footer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `custom_site`
--

LOCK TABLES `custom_site` WRITE;
/*!40000 ALTER TABLE `custom_site` DISABLE KEYS */;
INSERT INTO `custom_site` VALUES (6,'#ffffff','#6e07f3','#ffffff','#6e07f3','64e21d193c964776619240.jpg','64d8c4d13baaa959210769.png',NULL,'2023-08-20 16:03:05','#6e07f3',1,'Concepteur développeur Web & Formateur digital','643854fcc6811716248720.pdf','<p style=\"text-align:center\">Depuis le d&eacute;but de mon parcours en tant que d&eacute;veloppeur web ind&eacute;pendant il y a plus de 7 ans, j&#39;ai travaill&eacute; pour des agences, et collabor&eacute; avec des personnes talentueuses pour cr&eacute;er des produits num&eacute;riques &agrave; usage professionnel et grand public. Je suis naturellement confiant, curieux et je travaille perp&eacute;tuellement &agrave; am&eacute;liorer mes comp&eacute;tences.</p>','<p>38 rue de la f&eacute;e&nbsp;</p>\r\n\r\n<p>28410 BOUTIGNY-PROUAIS</p>','https://www.facebook.com/ketur78','https://twitter.com/GLX_28','https://www.linkedin.com/in/gregory-lacroix/','<p>Conform&eacute;ment aux dispositions de la loi n&deg; 2004-575 du 21 juin 2004 pour la confiance en l&#39;&eacute;conomie num&eacute;rique, il est pr&eacute;cis&eacute; aux utilisateurs du site GLX l&#39;identit&eacute; des diff&eacute;rents intervenants dans le cadre de sa r&eacute;alisation et de son suivi.</p>\r\n\r\n<h3>Edition du site</h3>\r\n\r\n<p>Le pr&eacute;sent site, accessible &agrave; l&rsquo;URL www.gregory-lacroix-pf.com.fr (le &laquo; Site &raquo;), est &eacute;dit&eacute; par :</p>\r\n\r\n<p>La soci&eacute;t&eacute; GLX, ayant son si&egrave;ge situ&eacute; &agrave; BOUTIGNY-PROUAIS, repr&eacute;sent&eacute;e par Gr&eacute;gory LACROIX d&ucirc;ment habilit&eacute;(e)</p>\r\n\r\n<h3>H&eacute;bergement</h3>\r\n\r\n<p>Le Site est h&eacute;berg&eacute; par la soci&eacute;t&eacute; PlanetHoster, situ&eacute; 4416 Louis-B.-Mayer Laval, Qu&eacute;bec Canada H7P 0G1, (contact t&eacute;l&eacute;phonique ou email : (+1) 855 774 4678).</p>\r\n\r\n<h3>Directeur de publication</h3>\r\n\r\n<p>Le Directeur de la publication du Site est Gr&eacute;gory LACROIX.</p>\r\n\r\n<h3>Nous contacter</h3>\r\n\r\n<p>Par t&eacute;l&eacute;phone : +330767853089<br />\r\nPar email : gregorylacroix78@gmail.com</p>\r\n\r\n<h3>Donn&eacute;es personnelles</h3>\r\n\r\n<p>Le traitement de vos donn&eacute;es &agrave; caract&egrave;re personnel est r&eacute;gi par notre Charte du respect de la vie priv&eacute;e, disponible depuis la section &quot;Charte de Protection des Donn&eacute;es Personnelles&quot;, conform&eacute;ment au R&egrave;glement G&eacute;n&eacute;ral sur la Protection des Donn&eacute;es 2016/679 du 27 avril 2016 (&laquo;RGPD&raquo;).</p>','#ff4155','64d941ae6f0aa306635655.png','Je conçois et code des choses magnifiquement simples, et j\'aime ce que je fais.','Vivre, apprendre & monter de niveau un jour à la fois.','Salut, je suis Grégory. Ravi de vous rencontrer.');
/*!40000 ALTER TABLE `custom_site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20230413124239','2023-04-13 14:42:49',201),('DoctrineMigrations\\Version20230413124957','2023-04-13 14:51:08',92),('DoctrineMigrations\\Version20230413133340','2023-04-13 15:33:45',65),('DoctrineMigrations\\Version20230413140523','2023-04-13 16:05:28',65),('DoctrineMigrations\\Version20230413151327','2023-04-13 17:13:32',57),('DoctrineMigrations\\Version20230413153121','2023-04-13 17:31:25',42),('DoctrineMigrations\\Version20230413180103','2023-04-13 20:01:08',82),('DoctrineMigrations\\Version20230413183558','2023-04-13 20:36:03',89),('DoctrineMigrations\\Version20230413195142','2023-04-13 21:51:47',88),('DoctrineMigrations\\Version20230413201345','2023-04-13 22:13:50',65),('DoctrineMigrations\\Version20230413211900','2023-04-13 23:19:05',87),('DoctrineMigrations\\Version20230413223200','2023-04-14 00:32:05',114),('DoctrineMigrations\\Version20230413233222','2023-04-14 01:32:28',89),('DoctrineMigrations\\Version20230414121146','2023-04-14 14:11:55',73),('DoctrineMigrations\\Version20230414130754','2023-04-14 15:07:59',96),('DoctrineMigrations\\Version20230502123901','2023-05-02 14:39:09',47),('DoctrineMigrations\\Version20230704092128','2023-07-04 11:21:38',67),('DoctrineMigrations\\Version20230704092256','2023-07-04 11:22:59',60),('DoctrineMigrations\\Version20230704092341','2023-07-04 11:23:44',46),('DoctrineMigrations\\Version20230726105208','2023-07-26 12:52:16',42),('DoctrineMigrations\\Version20230802155434','2023-08-02 17:54:46',65),('DoctrineMigrations\\Version20230813183422','2023-08-13 20:34:35',63),('DoctrineMigrations\\Version20230813184758','2023-08-13 20:48:04',41),('DoctrineMigrations\\Version20230813185406','2023-08-13 20:54:10',44),('DoctrineMigrations\\Version20230821174437','2023-08-21 19:44:46',99);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messenger_messages`
--

LOCK TABLES `messenger_messages` WRITE;
/*!40000 ALTER TABLE `messenger_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messenger_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `screenshot_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio`
--

LOCK TABLES `portfolio` WRITE;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
INSERT INTO `portfolio` VALUES (3,'LaOndartistica','la Ondartistica est le nom de scene d\'un graffeur professionel sous le pseudonyme POLONOVA','https://laondartistica.fr','64386c9d5179b026758462.jpg','2023-04-13 22:57:01','2023-08-21 19:51:20',1,'64e3a418632d9953514169.png');
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'gregorylacroix78@gmail.com','[\"ROLE_ADMIN\"]','$2y$13$QmHRHZCqGE4y1qWfb.6PsOmqszN8RVDvA0mjlqiSVgwPo7JA4eIx.',0,'Grégory','LACROIX',1),(2,'lekurd78@gmail.com','[\"ROLE_ADMIN\"]','$2y$13$f1P8hhhlGDR0zSNtOeHPbeofrO6wDvmlN8dw7ODxLI/4M3ZITSv2W',0,NULL,NULL,0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-22 17:35:23
