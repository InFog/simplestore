-- MySQL dump 10.13  Distrib 5.6.27, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: simplestore
-- ------------------------------------------------------
-- Server version	5.6.27-0ubuntu0.15.04.1

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
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(20) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` VALUES (1,'Canon_700D_21.jpg','Camera and Display',1),(2,'Canon_700D_1.jpg','Camera',1),(3,'wok1.jpg','Wok',2),(4,'snes1.png','SNES',3),(5,'snes_controller.jpg','SNES Controller',3),(6,'watering_can1.jpg','Blue Watering Can',4),(7,'blue_can_2.jpg','',4),(8,'wide_lenses.jpg','',14);
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `description` text,
  `categories` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Canon EOS 700D Digital SLR Camera','canon-eos-700d-digital-slr-camera',410.00,'Canon','Step into DSLR photography with the Canon EOS 700D 18-55 and let your creativity grow','electronics,photo,cameras'),(2,'Healthy Cooking Marble Effect Non-Stick Scratch Re','healthy-cooking-marble-effect-non-stick-scratch-re',28.00,'Regis Stone','A whole new way to fry-dry. This 28cm Wok will let you fry, stir-fry and saut with no added oil or fat, thanks to the ultra-non-stick hybrid marble effect coating.','house,cooking,pan'),(3,'Super Nintendo SNES','super-nintendo-snes',120.00,'Nintendo','Best 16bit gaming console ever.','games,electronic'),(4,'Blue Watering Can 1L','blue-watering-can-1l',15.00,'MyGarden','Regular watering can. Does not need batteries!','garden'),(14,'Tokina AT-X 116 Pro DX II 11-16mm f2.8','tokina-at-x-116-pro-dx-ii-11-16mm-f2.8',399.00,'Tokina','The Tokina AT-X 116 PRO DX-II is an update to the widely popular and award winning AT-X 116 PRO DX, 11-16 F/2.8 lens.','photo,electronic');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-01 14:26:56
