-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: sibers
-- ------------------------------------------------------
-- Server version	5.7.44

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Alfred Schmidt','123','Batkevich','Stepan',1,'2026-09-20','user'),(2,'Login2','321','Viktor','Viktor',1,'2005-05-20','admin'),(3,'sbatkevich@mail.ru','sbatkevich@mail.ru','sbatkevich@mail.ru','sbatkevich@mail.ru',1,'2024-08-09','sbatkevich@mail.ru'),(4,'Login5','12','SKD','SKD',0,'2009-09-20','user'),(5,'Login4','12','SKD','SKD',0,'2009-09-20','user'),(6,'Login6','12','SKD','SKD',0,'2009-09-20','user'),(7,'Login7','12','SKD','SKD',0,'2009-09-20','user'),(8,'Login8','12','SKD','SKD',0,'2009-09-20','user'),(9,'Login9','12','SKD','SKD',0,'2009-09-20','user'),(10,'Login10','12','SKD','SKD',0,'2009-09-20','user'),(11,'Login11','12','SKD','SKD',0,'2009-09-20','user'),(12,'Login12','12','SKD','SKD',0,'2009-09-20','user'),(13,'Login13','12','SKD','SKD',0,'2009-09-20','user'),(14,'Login14','12','SKD','SKD',0,'2009-09-20','user'),(15,'Login15','12','SKD','SKD',0,'2009-09-20','user'),(16,'Login16','12','SKD','SKD',0,'2009-09-20','user'),(17,'Login17','12','SKD','SKD',0,'2009-09-20','user'),(18,'Login18','12','SKD','SKD',0,'2009-09-20','user'),(19,'Login19','12','SKD','SKD',0,'2009-09-20','user'),(20,'Login20','12','SKD','SKD',0,'2009-09-20','user'),(21,'Login21','12','SKD','SKD',0,'2009-09-20','user');
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

-- Dump completed on 2024-08-12 16:01:42
