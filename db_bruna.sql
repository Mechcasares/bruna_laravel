CREATE DATABASE  IF NOT EXISTS `db_bruna` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_bruna`;
-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_bruna
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.40-MariaDB

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `name`) VALUES (1,NULL,NULL,'Sillas'),(2,NULL,NULL,'Mesas'),(3,NULL,NULL,'Sofas'),(4,NULL,NULL,'Accesorios');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_06_26_143717_create_products_table',1),(4,'2019_06_26_152759_add_photopath_column_to_products_table',1),(5,'2019_06_26_171234_create_sales_table',1),(6,'2019_06_26_171618_create_salesdetail_table',1),(7,'2019_06_26_172337_create_categories_table',1),(8,'2019_06_28_210718_add_column_category_id_to_products_table',1),(9,'2019_07_06_194714_add_role_column_to_users_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photopath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `created_at`, `updated_at`, `name`, `price`, `description`, `photopath`, `category_id`) VALUES (1,'2019-07-09 20:32:16','2019-07-09 20:32:16','TIA',8500.00,'Sofá de dos cuerpos tela pana vintage green','img/ujHxDCoxhbiElTHTwLivRlqMuG98Mbo8oQF5KEq4.jpeg','3'),(2,'2019-07-09 02:38:16','2019-07-09 02:38:16','TYRELL',25900.00,'Sofá de dos cuerpos tela pana vintage yellow','img/tAcRysivZn9eNa57jacHuUHPU2NgcPodKmV3JHta.jpeg','3'),(3,'2019-07-09 05:32:05','2019-07-09 05:32:05','ANDERSON',10000.00,'Sofá de dos cuerpos tela pana vintage pink','img/BNjRWQKJUVLAA8blYHqKmz9ZzqxlARxUhWwDFURk.jpeg','3'),(4,'2019-07-09 19:48:56','2019-07-09 19:48:56','OSLO',8800.00,'Madera paraiso lustre poliuretano blanco.','img/qfUWlDJ0eviuc5iC2PSnaYYOiaV5Ww7ESlSEWYwZ.png','2'),(5,'2019-07-09 19:51:02','2019-07-09 19:51:02','TULIP',15000.00,'Tapa paraíso laqueada blanca. Base de fibra de vidrio negra.','img/Hy6xF8KuqtFkQ4ktJqFqkEjr92prJEjvELn5wgDT.png','2'),(6,'2019-07-09 19:59:36','2019-07-09 19:59:36','NUEVA YORK',12000.00,'Tapa en madera Viraró. Base en hierro color negro.','img/rs78jODz65nmAmLDxtPIm8xFGEHg3u2IpwK3txrb.png','2'),(7,'2019-07-09 20:05:25','2019-07-09 20:09:43','ELLE',3200.00,'Asiento tapizado simil cuero color blanco. Patas en madera de haya.','img/A50EGkHZ2rorq13UlQ3rZbsVHWOzIaSDIe5AZGs0.png','1'),(8,'2019-07-09 20:08:53','2019-07-09 20:14:09','HARM GRIS',2300.00,'Tapizado en pana gris. Patas en madera de haya.','img/3sS9aeIF7gYty6hFut3xt8OGxmdlZX1ofg1nDpFo.png','1'),(9,'2019-07-09 20:13:54','2019-07-09 20:13:54','HARM CARAMELO',2300.00,'Tapizado en pana gris. Patas en madera de haya.','img/fm2s6dFASoVF4lpFPqg8BDmSVNjf7K39hZDqT7IZ.png','1'),(10,'2019-07-09 20:20:19','2019-07-09 20:20:19','MIRA',800.00,'Florero en aluminio con acabado de cobre.','img/15w9aGUa0mplF1zWz5QyK5Zug1bLiFpyiUtV8TRS.png','4'),(11,'2019-07-09 20:22:59','2019-07-09 20:22:59','TELL ME MORE',1200.00,'Candelabro doble. Material aluminino acabado de cobre.','img/V51M501mQyFVInEiZHypp6Z5emXQ18Wv32QhX0sc.png','4'),(12,'2019-07-09 20:30:17','2019-07-09 20:30:17','CURVE',1200.00,'Duo cuadros abstractos. Marco negro.','img/lGZqvpIxrwhbRydVa7oXBV7ZE8jGWgWLkmEa0edo.png','4');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salesdetail`
--

DROP TABLE IF EXISTS `salesdetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salesdetail` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `items` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salesdetail`
--

LOCK TABLES `salesdetail` WRITE;
/*!40000 ALTER TABLE `salesdetail` DISABLE KEYS */;
/*!40000 ALTER TABLE `salesdetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES (2,'Gaby','gkr1110@gmail.com',NULL,'$2y$10$p36YUtfSxKG7cnZly7VureYwrqFwmD.RLOAZhfAa7O4Wnm81/jAr.',NULL,'2019-07-09 01:17:16','2019-07-09 01:17:16','9');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'db_bruna'
--

--
-- Dumping routines for database 'db_bruna'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-09 15:07:23
