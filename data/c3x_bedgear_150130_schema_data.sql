-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2015 at 02:10 PM
-- Server version: 5.5.41
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
-- Table structure for table `tblAnswer`
--

CREATE TABLE IF NOT EXISTS `tblAnswer` (
  `answerId` int(11) NOT NULL AUTO_INCREMENT,
  `answerText` varchar(255) DEFAULT NULL,
  `answerNumber` int(11) DEFAULT NULL,
  `answerBitpos` int(11) DEFAULT NULL,
  `questionId` int(11) DEFAULT NULL,
  `answerTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`answerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tblAnswer`
--

INSERT INTO `tblAnswer` (`answerId`, `answerText`, `answerNumber`, `answerBitpos`, `questionId`, `answerTimeStamp`) VALUES
(1, 'Male', 1, 0, 1, '2015-01-30 00:55:08'),
(2, 'Female', 2, 0, 1, '2015-01-30 00:55:02'),
(3, 'Stomach', 1, 4, 2, '2015-01-29 20:42:55'),
(4, 'Back', 2, 8, 2, '2015-01-29 20:43:02'),
(5, 'Side', 3, 16, 2, '2015-01-29 20:43:09'),
(6, 'Multiple', 4, 32, 2, '2015-01-29 20:43:14'),
(7, 'Petite', 1, 64, 3, '2015-01-29 20:43:24'),
(8, 'Narrow', 2, 128, 3, '2015-01-29 20:43:30'),
(9, 'Medium', 3, 256, 3, '2015-01-29 20:43:37'),
(10, 'Broad', 4, 512, 3, '2015-01-29 20:43:45'),
(11, 'Air Bed', 1, 1024, 4, '2015-01-29 20:43:54'),
(12, 'Hybrid', 2, 2048, 4, '2015-01-29 20:44:04'),
(13, 'Latex', 3, 4096, 4, '2015-01-29 20:44:15'),
(14, 'Memory Foam', 4, 8192, 4, '2015-01-29 20:44:25'),
(15, 'PillowTop', 5, 16384, 4, '2015-01-29 20:44:36'),
(16, 'Spring', 6, 32768, 4, '2015-01-29 20:44:46'),
(17, 'Hot', 1, 1, 5, '2015-01-30 13:36:32'),
(18, 'Cold', 2, 0, 5, '2015-01-30 13:37:26'),
(19, 'Neither', 3, 0, 5, '2015-01-30 13:37:51'),
(20, 'Snoring', 1, 0, 6, '2015-01-30 18:55:30'),
(21, 'Body', 1, 0, 7, '2015-01-30 18:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `tblProduct`
--

CREATE TABLE IF NOT EXISTS `tblProduct` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(100) DEFAULT NULL,
  `productText` varchar(255) DEFAULT NULL,
  `productTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tblProduct`
--

INSERT INTO `tblProduct` (`productId`, `productName`, `productText`, `productTimeStamp`) VALUES
(1, 'Balance 0.0', '', '2015-01-29 20:06:46'),
(3, 'Balance 1.0', '', '2015-01-29 20:07:04'),
(4, 'Twilight', '', '2015-01-29 20:07:13'),
(5, 'Dawn', '', '2015-01-29 20:07:18'),
(6, 'Balance 2.0', '', '2015-01-30 14:55:24'),
(7, 'Balance 3.0', '', '2015-01-30 14:55:52'),
(8, 'Freestyle 0.0', '', '2015-01-30 14:56:13'),
(9, 'Freestyle 1.0', '', '2015-01-30 14:56:22'),
(10, 'Freestyle 2.0', '', '2015-01-30 14:56:30'),
(11, 'Freestyle 3.0', '', '2015-01-30 14:56:39'),
(12, 'Dusk', '', '2015-01-30 14:56:50'),
(13, 'Night', '', '2015-01-30 14:56:56'),
(14, 'Mist', '', '2015-01-30 14:57:02'),
(15, 'Thunder', '', '2015-01-30 14:57:07'),
(16, 'Lightning', '', '2015-01-30 14:57:13'),
(17, 'Rain', '', '2015-01-30 14:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `tblQuestion`
--

CREATE TABLE IF NOT EXISTS `tblQuestion` (
  `questionId` int(11) NOT NULL AUTO_INCREMENT,
  `questionNumber` int(11) DEFAULT NULL,
  `questionText` varchar(255) DEFAULT NULL,
  `questionTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`questionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblQuestion`
--

INSERT INTO `tblQuestion` (`questionId`, `questionNumber`, `questionText`, `questionTimeStamp`) VALUES
(1, 1, 'Are you male or female?', '2015-01-29 20:08:10'),
(2, 2, 'What is you sleep position?', '2015-01-30 16:28:21'),
(3, 3, 'Body type?', '2015-01-30 16:28:25'),
(4, 4, 'What kind of mattress do you sleep on?', '2015-01-29 20:09:32'),
(5, 5, 'Temperature?', '2015-01-29 20:15:45'),
(6, 6, 'Any additional Sleep Concerns or Special Cases?', '2015-01-29 20:16:49'),
(7, 7, 'Do you sleep with or use any additional Pillows?', '2015-01-29 20:17:11');

-- --------------------------------------------------------

--
-- Table structure for table `tblResultproduct`
--

CREATE TABLE IF NOT EXISTS `tblResultproduct` (
  `resultproductId` int(11) NOT NULL AUTO_INCREMENT,
  `resultproductNumber` int(11) DEFAULT NULL,
  `resultproductBitint` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `resultproductTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`resultproductId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=190 ;

--
-- Dumping data for table `tblResultproduct`
--

INSERT INTO `tblResultproduct` (`resultproductId`, `resultproductNumber`, `resultproductBitint`, `productId`, `resultproductTimeStamp`) VALUES
(1, 1, 1092, 1, '2015-01-29 20:49:08'),
(2, 2, 1092, 4, '2015-01-29 20:49:37'),
(3, 3, 1092, 3, '2015-01-29 20:49:50'),
(4, 1, 1156, 1, '2015-01-29 20:50:21'),
(5, 2, 1156, 4, '2015-01-29 20:50:39'),
(6, 3, 1156, 3, '2015-01-29 20:50:53'),
(7, 1, 1284, 3, '2015-01-29 20:52:46'),
(8, 2, 1284, 5, '2015-01-29 20:52:57'),
(9, 3, 1284, 4, '2015-01-29 20:53:12'),
(13, 1, 1093, 4, '2015-01-30 15:29:04'),
(14, 2, 1093, 1, '2015-01-30 15:29:04'),
(15, 3, 1093, 3, '2015-01-30 15:29:04'),
(16, 1, 1157, 4, '2015-01-30 15:36:37'),
(17, 2, 1157, 1, '2015-01-30 15:36:37'),
(18, 3, 1157, 3, '2015-01-30 15:36:37'),
(19, 1, 1285, 5, '2015-01-30 15:37:25'),
(20, 2, 1285, 3, '2015-01-30 15:37:25'),
(21, 3, 1285, 4, '2015-01-30 15:37:25'),
(22, 1, 1540, 3, '2015-01-30 15:38:15'),
(23, 2, 1540, 5, '2015-01-30 15:38:15'),
(24, 3, 1540, 4, '2015-01-30 15:38:15'),
(25, 1, 1541, 5, '2015-01-30 15:38:34'),
(26, 2, 1541, 3, '2015-01-30 15:38:34'),
(27, 3, 1541, 4, '2015-01-30 15:38:34'),
(28, 1, 2116, 1, '2015-01-30 15:41:51'),
(29, 2, 2116, 4, '2015-01-30 15:41:51'),
(30, 3, 2116, 3, '2015-01-30 15:41:51'),
(31, 1, 2117, 4, '2015-01-30 15:42:44'),
(32, 2, 2117, 1, '2015-01-30 15:42:44'),
(33, 3, 2117, 3, '2015-01-30 15:42:44'),
(34, 1, 2180, 1, '2015-01-30 15:47:30'),
(35, 1, 2181, 4, '2015-01-30 15:47:30'),
(36, 2, 2180, 4, '2015-01-30 15:47:30'),
(37, 2, 2181, 1, '2015-01-30 15:47:30'),
(38, 3, 2180, 3, '2015-01-30 15:47:30'),
(39, 3, 2181, 3, '2015-01-30 15:47:30'),
(40, 1, 2308, 3, '2015-01-30 15:48:30'),
(41, 1, 2309, 5, '2015-01-30 15:48:30'),
(42, 2, 2308, 5, '2015-01-30 15:48:30'),
(43, 2, 2309, 3, '2015-01-30 15:48:30'),
(44, 3, 2308, 4, '2015-01-30 15:48:30'),
(45, 3, 2309, 4, '2015-01-30 15:48:30'),
(46, 1, 2564, 3, '2015-01-30 15:49:31'),
(47, 1, 2565, 5, '2015-01-30 15:49:31'),
(48, 2, 2564, 5, '2015-01-30 15:49:31'),
(49, 2, 2565, 3, '2015-01-30 15:49:31'),
(50, 3, 2564, 4, '2015-01-30 15:49:31'),
(51, 3, 2565, 4, '2015-01-30 15:49:31'),
(52, 1, 4164, 1, '2015-01-30 16:18:38'),
(53, 1, 4165, 4, '2015-01-30 16:18:38'),
(54, 2, 4164, 4, '2015-01-30 16:18:38'),
(55, 2, 4165, 1, '2015-01-30 16:18:38'),
(56, 3, 4164, 3, '2015-01-30 16:18:38'),
(57, 3, 4165, 3, '2015-01-30 16:18:38'),
(76, 1, 4228, 1, '2015-01-30 16:29:37'),
(77, 1, 4229, 4, '2015-01-30 16:29:38'),
(78, 2, 4228, 4, '2015-01-30 16:29:38'),
(79, 2, 4229, 1, '2015-01-30 16:29:38'),
(80, 3, 4228, 3, '2015-01-30 16:29:38'),
(81, 3, 4229, 3, '2015-01-30 16:29:38'),
(82, 1, 4356, 3, '2015-01-30 16:29:56'),
(83, 1, 4357, 5, '2015-01-30 16:29:56'),
(84, 2, 4356, 5, '2015-01-30 16:29:56'),
(85, 2, 4357, 3, '2015-01-30 16:29:56'),
(86, 3, 4356, 4, '2015-01-30 16:29:56'),
(87, 3, 4357, 4, '2015-01-30 16:29:56'),
(88, 1, 4612, 3, '2015-01-30 16:30:27'),
(89, 1, 4613, 5, '2015-01-30 16:30:27'),
(90, 2, 4612, 5, '2015-01-30 16:30:27'),
(91, 2, 4613, 3, '2015-01-30 16:30:27'),
(92, 3, 4612, 4, '2015-01-30 16:30:27'),
(93, 3, 4613, 4, '2015-01-30 16:30:27'),
(94, 1, 8260, 8, '2015-01-30 17:41:03'),
(95, 1, 8261, 14, '2015-01-30 17:41:03'),
(96, 2, 8260, 14, '2015-01-30 17:41:03'),
(97, 2, 8261, 8, '2015-01-30 17:41:03'),
(98, 3, 8260, 9, '2015-01-30 17:41:03'),
(99, 3, 8261, 9, '2015-01-30 17:41:03'),
(100, 1, 8324, 8, '2015-01-30 17:41:45'),
(101, 1, 8325, 14, '2015-01-30 17:41:45'),
(102, 2, 8324, 14, '2015-01-30 17:41:45'),
(103, 2, 8325, 8, '2015-01-30 17:41:45'),
(104, 3, 8324, 15, '2015-01-30 17:41:45'),
(105, 3, 8325, 15, '2015-01-30 17:41:45'),
(106, 1, 8452, 9, '2015-01-30 17:42:29'),
(107, 1, 8453, 15, '2015-01-30 17:42:29'),
(108, 2, 8452, 15, '2015-01-30 17:42:29'),
(109, 2, 8453, 9, '2015-01-30 17:42:29'),
(110, 3, 8452, 14, '2015-01-30 17:42:29'),
(111, 3, 8453, 14, '2015-01-30 17:42:30'),
(112, 1, 8708, 9, '2015-01-30 17:43:18'),
(113, 1, 8709, 15, '2015-01-30 17:43:18'),
(114, 2, 8708, 15, '2015-01-30 17:43:18'),
(115, 2, 8709, 9, '2015-01-30 17:43:18'),
(116, 3, 8708, 14, '2015-01-30 17:43:19'),
(117, 3, 8709, 14, '2015-01-30 17:43:19'),
(118, 1, 16452, 1, '2015-01-30 17:43:58'),
(119, 1, 16453, 4, '2015-01-30 17:43:58'),
(120, 2, 16452, 4, '2015-01-30 17:43:58'),
(121, 2, 16453, 1, '2015-01-30 17:43:58'),
(122, 3, 16452, 3, '2015-01-30 17:43:58'),
(123, 3, 16453, 3, '2015-01-30 17:43:58'),
(124, 1, 16516, 1, '2015-01-30 17:44:48'),
(125, 1, 16517, 4, '2015-01-30 17:44:48'),
(126, 2, 16516, 4, '2015-01-30 17:44:48'),
(127, 2, 16517, 1, '2015-01-30 17:44:48'),
(128, 3, 16516, 3, '2015-01-30 17:44:48'),
(129, 3, 16517, 3, '2015-01-30 17:44:48'),
(130, 1, 16644, 3, '2015-01-30 17:45:28'),
(131, 1, 16645, 5, '2015-01-30 17:45:28'),
(132, 2, 16644, 5, '2015-01-30 17:45:28'),
(133, 2, 16645, 3, '2015-01-30 17:45:28'),
(134, 3, 16644, 4, '2015-01-30 17:45:28'),
(135, 3, 16645, 4, '2015-01-30 17:45:28'),
(136, 1, 16900, 3, '2015-01-30 17:46:03'),
(137, 1, 16901, 5, '2015-01-30 17:46:03'),
(138, 2, 16900, 5, '2015-01-30 17:46:03'),
(139, 2, 16901, 3, '2015-01-30 17:46:03'),
(140, 3, 16900, 4, '2015-01-30 17:46:03'),
(141, 3, 16901, 4, '2015-01-30 17:46:03'),
(142, 1, 32836, 1, '2015-01-30 18:14:53'),
(143, 1, 32837, 4, '2015-01-30 18:14:53'),
(144, 2, 32836, 4, '2015-01-30 18:14:53'),
(145, 2, 32837, 1, '2015-01-30 18:14:53'),
(146, 3, 32836, 3, '2015-01-30 18:14:53'),
(147, 3, 32837, 3, '2015-01-30 18:14:53'),
(148, 1, 32900, 1, '2015-01-30 18:15:18'),
(149, 1, 32901, 4, '2015-01-30 18:15:18'),
(150, 2, 32900, 4, '2015-01-30 18:15:18'),
(151, 2, 32901, 1, '2015-01-30 18:15:18'),
(152, 3, 32900, 3, '2015-01-30 18:15:18'),
(153, 3, 32901, 3, '2015-01-30 18:15:18'),
(154, 1, 33028, 3, '2015-01-30 18:15:59'),
(155, 1, 33029, 5, '2015-01-30 18:15:59'),
(156, 2, 33028, 5, '2015-01-30 18:15:59'),
(157, 2, 33029, 3, '2015-01-30 18:15:59'),
(158, 3, 33028, 4, '2015-01-30 18:15:59'),
(159, 3, 33029, 4, '2015-01-30 18:15:59'),
(160, 1, 33284, 3, '2015-01-30 18:16:20'),
(161, 1, 33285, 5, '2015-01-30 18:16:20'),
(162, 2, 33284, 5, '2015-01-30 18:16:21'),
(163, 2, 33285, 3, '2015-01-30 18:16:21'),
(164, 3, 33284, 4, '2015-01-30 18:16:21'),
(165, 3, 33285, 4, '2015-01-30 18:16:21'),
(166, 1, 65604, 1, '2015-01-30 18:16:50'),
(167, 1, 65605, 4, '2015-01-30 18:16:50'),
(168, 2, 65604, 4, '2015-01-30 18:16:50'),
(169, 2, 65605, 1, '2015-01-30 18:16:50'),
(170, 3, 65604, 3, '2015-01-30 18:16:50'),
(171, 3, 65605, 3, '2015-01-30 18:16:50'),
(172, 1, 65668, 1, '2015-01-30 18:17:13'),
(173, 1, 65669, 4, '2015-01-30 18:17:13'),
(174, 2, 65668, 4, '2015-01-30 18:17:13'),
(175, 2, 65669, 1, '2015-01-30 18:17:13'),
(176, 3, 65668, 3, '2015-01-30 18:17:13'),
(177, 3, 65669, 3, '2015-01-30 18:17:13'),
(178, 1, 65796, 3, '2015-01-30 18:17:40'),
(179, 1, 65797, 5, '2015-01-30 18:17:41'),
(180, 2, 65796, 5, '2015-01-30 18:17:41'),
(181, 2, 65797, 3, '2015-01-30 18:17:41'),
(182, 3, 65796, 4, '2015-01-30 18:17:41'),
(183, 3, 65797, 4, '2015-01-30 18:17:41'),
(184, 1, 66052, 3, '2015-01-30 18:18:03'),
(185, 1, 66053, 5, '2015-01-30 18:18:03'),
(186, 2, 66052, 5, '2015-01-30 18:18:03'),
(187, 2, 66053, 3, '2015-01-30 18:18:03'),
(188, 3, 66052, 4, '2015-01-30 18:18:03'),
(189, 3, 66053, 4, '2015-01-30 18:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(128) NOT NULL,
  `userPassword` varchar(32) NOT NULL,
  `userStatus` varchar(50) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userEmail`, `userPassword`, `userStatus`) VALUES
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'active'),
(7, 'mattw@click3x.com', '6423c2a2f26b30abf09608c78f711ea5', 'active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;