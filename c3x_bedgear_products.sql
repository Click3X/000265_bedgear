# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.0.95)
# Database: c3x_bedgear
# Generation Time: 2015-06-24 02:57:05 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tblProduct
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tblProduct`;

CREATE TABLE `tblProduct` (
  `productId` int(11) NOT NULL auto_increment,
  `productName` varchar(100) default NULL,
  `productText` varchar(255) default NULL,
  `productImage` varchar(200) NOT NULL default '',
  `productUrl` varchar(200) NOT NULL default '',
  `productStoreUrl` varchar(200) NOT NULL,
  `productTimeStamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`productId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tblProduct` WRITE;
/*!40000 ALTER TABLE `tblProduct` DISABLE KEYS */;

INSERT INTO `tblProduct` (`productId`, `productName`, `productText`, `productImage`, `productUrl`, `productStoreUrl`, `productTimeStamp`)
VALUES
	(1,'Balance 0.0','','balance00.png','http://www.bedgear.com/shop/balance-0-0-stomach-sleeper-pillow.html','http://www.bedgear.com/shop/checkout/cart/add/product/11/','2015-06-23 21:12:33'),
	(3,'Balance 1.0','','balance10.png','http://www.bedgear.com/shop/balance-1-0.html','http://www.bedgear.com/shop/checkout/cart/add/product/49/','2015-06-14 22:18:08'),
	(4,'Twilight','','twilight.png','http://www.bedgear.com/shop/twilight-0-0-performance-pillow-pad.html','http://www.bedgear.com/shop/checkout/cart/add/product/127/','2015-06-23 21:11:37'),
	(5,'Dawn','','dawn.png','http://www.bedgear.com/shop/dawn-1-0-performance-pillow.html','http://www.bedgear.com/shop/checkout/cart/add/product/19/','2015-06-23 21:10:11'),
	(6,'Balance 2.0','','balance20.png','http://www.bedgear.com/shop/balance-2-0.html','http://www.bedgear.com/shop/checkout/cart/add/product/50/','2015-06-14 22:19:00'),
	(7,'Balance 3.0','','balance30.png','http://www.bedgear.com/shop/balance-3-0-side-sleeper-pillow.html','http://www.bedgear.com/shop/checkout/cart/add/product/14/','2015-06-23 20:59:52'),
	(8,'Freestyle 0.0','','Freestyle00.png','http://www.bedgear.com/shop/freestyle-0-0-performance-pillow.html','http://www.bedgear.com/shop/checkout/cart/add/product/125/','2015-06-23 20:58:37'),
	(9,'Freestyle 1.0','','Freestyle10.png','http://www.bedgear.com/shop/freestyle-1-0-performance-pillow.html','http://www.bedgear.com/shop/checkout/cart/add/product/22/','2015-06-23 20:57:46'),
	(10,'Freestyle 2.0','','Freestyle20.png','http://www.bedgear.com/shop/freestyle-2-0-performance-pillow.html','http://www.bedgear.com/shop/checkout/cart/add/product/2/','2015-06-23 20:56:40'),
	(11,'Freestyle 3.0','','Freestyle30.png','http://www.bedgear.com/shop/freestyle-3-0-side-sleeper-pillow.html','http://www.bedgear.com/shop/checkout/cart/add/product/23/','2015-06-23 20:54:20'),
	(12,'Dusk','','dusk.png','http://www.bedgear.com/shop/dusk-2-0-performance-pillow.html','http://www.bedgear.com/shop/checkout/cart/add/product/20/','2015-06-23 20:50:12'),
	(13,'Night','','night.png','http://www.bedgear.com/shop/night-3-0-performance-pillow.html','http://www.bedgear.com/shop/checkout/cart/add/product/21/','2015-06-23 20:48:06'),
	(14,'Mist','','mist.png','http://www.bedgear.com/shop/mist-0-0-performance-pillow-pad-stomach-sleepers.html','http://www.bedgear.com/shop/checkout/cart/add/product/126/','2015-06-23 20:46:00'),
	(15,'Thunder','','thunder.png','http://www.bedgear.com/shop/thunder-ver-tex-stomach-sleeper-cooling-pillow.html','http://www.bedgear.com/shop/checkout/cart/add/product/3/','2015-06-23 20:44:49'),
	(16,'Lightning','','lightning.png','http://www.bedgear.com/shop/lightning-2-0-performance-pillow.html','http://www.bedgear.com/shop/checkout/cart/add/product/24/','2015-06-23 20:43:27'),
	(17,'Rain','','rain.png','http://www.bedgear.com/shop/rain-ver-tex-side-sleeper-cooling-pillow.html','http://www.bedgear.com/shop/checkout/cart/add/product/25/','2015-06-23 20:36:31');

/*!40000 ALTER TABLE `tblProduct` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
