-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: pao
-- ------------------------------------------------------
-- Server version 	5.5.5-10.4.24-MariaDB
-- Date: Wed, 19 Oct 2022 09:32:15 +0200

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `fem`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `name_owner` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type_owner` varchar(255) NOT NULL,
  `fem` varchar(255) NOT NULL,
  `units` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `mode_aquisition` varchar(255) NOT NULL,
  `cost_aquisition` varchar(255) NOT NULL,
  `yr_acquired` varchar(255) NOT NULL,
  `use_facility` varchar(255) NOT NULL,
  `facility_cond` varchar(255) NOT NULL,
  `commodity` varchar(255) NOT NULL,
  `engine_brand` varchar(255) NOT NULL,
  `horsepower` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fem`
--

LOCK TABLES `fem` WRITE;
/*!40000 ALTER TABLE `fem` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `fem` VALUES (1,'14','Oroquieta','Arnulfo A. Migriño','Pines, Oroq. City','Individual','Mud Tractor','1','0.75 ha./day','','Purchase','','','Private use','Functional','Rice','','','2022-10-14 23:58:31','2022-10-18 08:10:18'),(3,'13','Jimenez','red','s2gdf','Individual','Mud Tractor','32','532','132','Grant','132','132','Private use','Repair','Rice','132','132','2022-10-15 21:57:55','2022-10-18 07:49:10'),(4,'15','Sinacaban','haha','dfs','Coop','Ricemill','12','43','sfdsz','Loan','fs','fsa','Custom Hire','Repair','Rice & Corn','r34e','34','2022-10-15 22:39:35','2022-10-18 09:33:27'),(5,'12','Baliangao','s22342','Pines, Oroq. City','Trader','Tresher','432','fsd','fsd','Loan','fsd','423','Coop','Repair','Rice & Corn','r34e','132','2022-10-14 22:43:55','2022-10-16 10:10:49'),(6,'12','Baliangao','cx321','nn','Coop','Tresher','432','432','fds','Loan','rew','fsd','Public use','Repair','Corn','xxc','423','2022-10-15 22:56:40','2022-10-16 10:10:56'),(7,'12','Baliangao','naks','hkj','Coop','Ricemill','980','265','l\';','Loan','k;\'','k\';','Public use','Functional','Corn','gdf','423','2022-10-18 07:45:58','2022-10-18 07:45:58'),(8,'13','Jimenez','vv','vv','Coop','Tresher','4532','dasz','fds','Loan','52','342','Coop','Functional','Rice & Corn','453','453','2022-10-18 07:50:37','2022-10-18 07:50:37');
/*!40000 ALTER TABLE `fem` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `fem` with 7 row(s)
--

--
-- Table structure for table `logs`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(200) NOT NULL,
  `actions` varchar(200) NOT NULL,
  `timesstamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `logs` with 0 row(s)
--

--
-- Table structure for table `users`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` enum('Admin','Municipality') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `position` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `users` VALUES (3,'Admin','admin','21232f297a57a5a743894a0e4a801fc3','Administrator','Admin','paoims123@gmail.com','09632357966','Male','Administrator','2022-10-11 04:14:24','2022-10-18 07:17:12'),(12,'Municipality','baliangao','ee11cbb19052e40b07aac0ca060c23ee','Pao de Arc','Baliangao','pao@gmail.com','09632357966','Female','IT Staff','2022-10-11 12:20:25','2022-10-18 07:47:51'),(13,'Municipality','jimenez','ee11cbb19052e40b07aac0ca060c23ee','Jimenez','Jimenez','jimenez@gmail.com','09632357966','Female','IT Staff','2022-10-18 07:48:43','2022-10-18 07:48:43'),(14,'Municipality','oroquieta','ee11cbb19052e40b07aac0ca060c23ee','Oroquieta City','Oroquieta','oroquieta@gmail.com','09632357966','Male','IT Staff','2022-10-18 08:00:28','2022-10-18 08:00:28'),(15,'Municipality','sinacaban','ee11cbb19052e40b07aac0ca060c23ee','Sinacaban','Sinacaban','sinacaban@gmail.com','09632357966','Female','IT Staff','2022-10-18 08:07:30','2022-10-18 08:07:30'),(16,'Municipality','panaon','ee11cbb19052e40b07aac0ca060c23ee','Panaon','Panaon','panaon@gmail.com','09632357966','Male','IT Staff','2022-10-18 08:08:50','2022-10-18 08:08:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `users` with 6 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Wed, 19 Oct 2022 09:32:15 +0200
