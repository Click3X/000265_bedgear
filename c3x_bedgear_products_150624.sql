-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2015 at 12:49 PM
-- Server version: 5.5.43
-- PHP Version: 5.4.31-1+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c3x_bedgear`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblProduct`
--

DROP TABLE IF EXISTS `tblProduct`;
CREATE TABLE IF NOT EXISTS `tblProduct` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(100) DEFAULT NULL,
  `productText` varchar(255) DEFAULT NULL,
  `productImage` varchar(200) NOT NULL DEFAULT '',
  `productUrl` varchar(200) NOT NULL DEFAULT '',
  `productStoreUrl` varchar(200) NOT NULL,
  `productTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tblProduct`
--

INSERT INTO `tblProduct` (`productId`, `productName`, `productText`, `productImage`, `productUrl`, `productStoreUrl`, `productTimeStamp`) VALUES
(1, 'Balance 0.0', '', 'balance00.png', 'http://www.bedgear.com/shop/balance-0-0-stomach-sleeper-pillow.html', 'http://www.bedgear.com/shop/balance-0-0-stomach-sleeper-pillow.html', '2015-06-24 16:46:05'),
(3, 'Balance 1.0', '', 'balance10.png', 'http://www.bedgear.com/shop/balance-1-0.html', 'http://www.bedgear.com/shop/balance-1-0.html', '2015-06-24 16:46:05'),
(4, 'Twilight', '', 'twilight.png', 'http://www.bedgear.com/shop/twilight-0-0-performance-pillow-pad.html', 'http://www.bedgear.com/shop/twilight-0-0-performance-pillow-pad.html', '2015-06-24 16:46:05'),
(5, 'Dawn', '', 'dawn.png', 'http://www.bedgear.com/shop/dawn-1-0-performance-pillow.html', 'http://www.bedgear.com/shop/dawn-1-0-performance-pillow.html', '2015-06-24 16:46:05'),
(6, 'Balance 2.0', '', 'balance20.png', 'http://www.bedgear.com/shop/balance-2-0.html', 'http://www.bedgear.com/shop/balance-2-0.html', '2015-06-24 16:46:05'),
(7, 'Balance 3.0', '', 'balance30.png', 'http://www.bedgear.com/shop/balance-3-0-side-sleeper-pillow.html', 'http://www.bedgear.com/shop/balance-3-0-side-sleeper-pillow.html', '2015-06-24 16:46:05'),
(8, 'Freestyle 0.0', '', 'Freestyle00.png', 'http://www.bedgear.com/shop/freestyle-0-0-performance-pillow.html', 'http://www.bedgear.com/shop/freestyle-0-0-performance-pillow.html', '2015-06-24 16:46:05'),
(9, 'Freestyle 1.0', '', 'Freestyle10.png', 'http://www.bedgear.com/shop/freestyle-1-0-performance-pillow.html', 'http://www.bedgear.com/shop/freestyle-1-0-performance-pillow.html', '2015-06-24 16:46:05'),
(10, 'Freestyle 2.0', '', 'Freestyle20.png', 'http://www.bedgear.com/shop/freestyle-2-0-performance-pillow.html', 'http://www.bedgear.com/shop/freestyle-2-0-performance-pillow.html', '2015-06-24 16:46:05'),
(11, 'Freestyle 3.0', '', 'Freestyle30.png', 'http://www.bedgear.com/shop/freestyle-3-0-side-sleeper-pillow.html', 'http://www.bedgear.com/shop/freestyle-3-0-side-sleeper-pillow.html', '2015-06-24 16:46:05'),
(12, 'Dusk', '', 'dusk.png', 'http://www.bedgear.com/shop/dusk-2-0-performance-pillow.html', 'http://www.bedgear.com/shop/dusk-2-0-performance-pillow.html', '2015-06-24 16:46:05'),
(13, 'Night', '', 'night.png', 'http://www.bedgear.com/shop/night-3-0-performance-pillow.html', 'http://www.bedgear.com/shop/night-3-0-performance-pillow.html', '2015-06-24 16:46:05'),
(14, 'Mist', '', 'mist.png', 'http://www.bedgear.com/shop/mist-0-0-performance-pillow-pad-stomach-sleepers.html', 'http://www.bedgear.com/shop/mist-0-0-performance-pillow-pad-stomach-sleepers.html', '2015-06-24 16:46:05'),
(15, 'Thunder', '', 'thunder.png', 'http://www.bedgear.com/shop/thunder-ver-tex-stomach-sleeper-cooling-pillow.html', 'http://www.bedgear.com/shop/thunder-ver-tex-stomach-sleeper-cooling-pillow.html', '2015-06-24 16:46:05'),
(16, 'Lightning', '', 'lightning.png', 'http://www.bedgear.com/shop/lightning-2-0-performance-pillow.html', 'http://www.bedgear.com/shop/lightning-2-0-performance-pillow.html', '2015-06-24 16:46:05'),
(17, 'Rain', '', 'rain.png', 'http://www.bedgear.com/shop/rain-ver-tex-side-sleeper-cooling-pillow.html', 'http://www.bedgear.com/shop/rain-ver-tex-side-sleeper-cooling-pillow.html', '2015-06-24 16:46:05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
