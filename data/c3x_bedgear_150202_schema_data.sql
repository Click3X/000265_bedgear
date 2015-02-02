-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2015 at 05:28 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

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
(21, 'Body', 1, 0, 7, '2015-01-30 18:55:45'),
(22, 'Overall hot w/ cold', 2, 0, 6, '2015-02-02 14:03:14'),
(23, 'Pregnancy', 3, 0, 6, '2015-02-02 14:03:29'),
(24, 'Insomnia', 4, 0, 6, '2015-02-02 14:03:59'),
(25, 'Night sweats', 5, 0, 6, '2015-02-02 14:04:17'),
(26, 'Flipping - Cool side', 6, 0, 6, '2015-02-02 14:04:52'),
(27, 'Leg', 2, 0, 7, '2015-02-02 14:05:17'),
(28, 'Back Rest', 3, 0, 7, '2015-02-02 14:05:38'),
(29, 'Waterbed', 7, 65536, 4, '2015-02-02 22:26:34');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=526 ;

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
(189, 3, 66053, 4, '2015-01-30 18:18:03'),
(190, 1, 1096, 1, '2015-02-02 21:49:38'),
(191, 1, 1097, 4, '2015-02-02 21:49:38'),
(192, 2, 1096, 4, '2015-02-02 21:49:38'),
(193, 2, 1097, 1, '2015-02-02 21:49:38'),
(194, 3, 1096, 5, '2015-02-02 21:49:38'),
(195, 3, 1097, 5, '2015-02-02 21:49:38'),
(196, 1, 1160, 3, '2015-02-02 21:50:01'),
(197, 1, 1161, 5, '2015-02-02 21:50:01'),
(198, 2, 1160, 5, '2015-02-02 21:50:01'),
(199, 2, 1161, 3, '2015-02-02 21:50:02'),
(200, 3, 1160, 4, '2015-02-02 21:50:02'),
(201, 3, 1161, 4, '2015-02-02 21:50:02'),
(202, 1, 1288, 6, '2015-02-02 21:51:20'),
(203, 1, 1289, 12, '2015-02-02 21:51:21'),
(204, 2, 1288, 12, '2015-02-02 21:51:21'),
(205, 2, 1289, 6, '2015-02-02 21:51:21'),
(206, 3, 1288, 3, '2015-02-02 21:51:21'),
(207, 3, 1289, 3, '2015-02-02 21:51:21'),
(208, 1, 1544, 6, '2015-02-02 21:51:53'),
(209, 1, 1545, 12, '2015-02-02 21:51:53'),
(210, 2, 1544, 12, '2015-02-02 21:51:54'),
(211, 2, 1545, 6, '2015-02-02 21:51:54'),
(212, 3, 1544, 3, '2015-02-02 21:51:54'),
(213, 3, 1545, 3, '2015-02-02 21:51:54'),
(214, 1, 2120, 1, '2015-02-02 21:52:10'),
(215, 1, 2121, 4, '2015-02-02 21:52:10'),
(216, 2, 2120, 4, '2015-02-02 21:52:11'),
(217, 2, 2121, 1, '2015-02-02 21:52:11'),
(218, 3, 2120, 5, '2015-02-02 21:52:11'),
(219, 3, 2121, 5, '2015-02-02 21:52:11'),
(220, 1, 2184, 3, '2015-02-02 21:52:32'),
(221, 1, 2185, 5, '2015-02-02 21:52:32'),
(222, 2, 2184, 5, '2015-02-02 21:52:32'),
(223, 2, 2185, 3, '2015-02-02 21:52:32'),
(224, 3, 2184, 4, '2015-02-02 21:52:32'),
(225, 3, 2185, 4, '2015-02-02 21:52:32'),
(226, 1, 2312, 6, '2015-02-02 21:52:56'),
(227, 1, 2313, 12, '2015-02-02 21:52:56'),
(228, 2, 2312, 12, '2015-02-02 21:52:56'),
(229, 2, 2313, 6, '2015-02-02 21:52:56'),
(230, 3, 2312, 3, '2015-02-02 21:52:57'),
(231, 3, 2313, 3, '2015-02-02 21:52:57'),
(232, 1, 2568, 6, '2015-02-02 21:53:18'),
(233, 1, 2569, 12, '2015-02-02 21:53:18'),
(234, 2, 2568, 12, '2015-02-02 21:53:18'),
(235, 2, 2569, 6, '2015-02-02 21:53:18'),
(236, 3, 2568, 3, '2015-02-02 21:53:18'),
(237, 3, 2569, 3, '2015-02-02 21:53:18'),
(238, 1, 4168, 1, '2015-02-02 21:53:42'),
(239, 1, 4169, 4, '2015-02-02 21:53:42'),
(240, 2, 4168, 4, '2015-02-02 21:53:42'),
(241, 2, 4169, 1, '2015-02-02 21:53:42'),
(242, 3, 4168, 5, '2015-02-02 21:53:42'),
(243, 3, 4169, 5, '2015-02-02 21:53:42'),
(244, 1, 4232, 3, '2015-02-02 21:54:00'),
(245, 1, 4233, 12, '2015-02-02 21:54:00'),
(246, 2, 4232, 12, '2015-02-02 21:54:00'),
(247, 2, 4233, 3, '2015-02-02 21:54:00'),
(248, 3, 4232, 4, '2015-02-02 21:54:00'),
(249, 3, 4233, 4, '2015-02-02 21:54:00'),
(250, 1, 4360, 6, '2015-02-02 21:54:22'),
(251, 1, 4361, 12, '2015-02-02 21:54:22'),
(252, 2, 4360, 12, '2015-02-02 21:54:22'),
(253, 2, 4361, 6, '2015-02-02 21:54:22'),
(254, 3, 4360, 3, '2015-02-02 21:54:22'),
(255, 3, 4361, 3, '2015-02-02 21:54:22'),
(256, 1, 4616, 6, '2015-02-02 21:54:41'),
(257, 1, 4617, 12, '2015-02-02 21:54:41'),
(258, 2, 4616, 12, '2015-02-02 21:54:41'),
(259, 2, 4617, 6, '2015-02-02 21:54:41'),
(260, 3, 4616, 3, '2015-02-02 21:54:41'),
(261, 3, 4617, 3, '2015-02-02 21:54:41'),
(262, 1, 8264, 8, '2015-02-02 21:55:08'),
(263, 1, 8265, 14, '2015-02-02 21:55:08'),
(264, 2, 8264, 14, '2015-02-02 21:55:08'),
(265, 2, 8265, 8, '2015-02-02 21:55:08'),
(266, 3, 8264, 9, '2015-02-02 21:55:08'),
(267, 3, 8265, 9, '2015-02-02 21:55:09'),
(268, 1, 8328, 9, '2015-02-02 21:55:32'),
(269, 1, 8329, 15, '2015-02-02 21:55:32'),
(270, 2, 8328, 15, '2015-02-02 21:55:32'),
(271, 2, 8329, 9, '2015-02-02 21:55:32'),
(272, 3, 8328, 14, '2015-02-02 21:55:32'),
(273, 3, 8329, 14, '2015-02-02 21:55:32'),
(274, 1, 8456, 10, '2015-02-02 21:56:36'),
(275, 1, 8457, 16, '2015-02-02 21:56:36'),
(276, 2, 8456, 16, '2015-02-02 21:56:36'),
(277, 2, 8457, 10, '2015-02-02 21:56:36'),
(278, 3, 8456, 9, '2015-02-02 21:56:36'),
(279, 3, 8457, 9, '2015-02-02 21:56:36'),
(280, 1, 8712, 10, '2015-02-02 21:57:02'),
(281, 1, 8713, 16, '2015-02-02 21:57:02'),
(282, 2, 8712, 16, '2015-02-02 21:57:02'),
(283, 2, 8713, 10, '2015-02-02 21:57:02'),
(284, 3, 8712, 15, '2015-02-02 21:57:02'),
(285, 3, 8713, 15, '2015-02-02 21:57:02'),
(286, 1, 16456, 1, '2015-02-02 21:57:26'),
(287, 1, 16457, 4, '2015-02-02 21:57:26'),
(288, 2, 16456, 4, '2015-02-02 21:57:26'),
(289, 2, 16457, 1, '2015-02-02 21:57:26'),
(290, 3, 16456, 5, '2015-02-02 21:57:26'),
(291, 3, 16457, 5, '2015-02-02 21:57:27'),
(292, 1, 16520, 3, '2015-02-02 21:57:49'),
(293, 1, 16521, 5, '2015-02-02 21:57:49'),
(294, 2, 16520, 5, '2015-02-02 21:57:49'),
(295, 2, 16521, 3, '2015-02-02 21:57:49'),
(296, 3, 16520, 4, '2015-02-02 21:57:49'),
(297, 3, 16521, 4, '2015-02-02 21:57:49'),
(298, 1, 16648, 6, '2015-02-02 21:58:15'),
(299, 1, 16649, 12, '2015-02-02 21:58:16'),
(300, 2, 16648, 12, '2015-02-02 21:58:16'),
(301, 2, 16649, 6, '2015-02-02 21:58:16'),
(302, 3, 16648, 3, '2015-02-02 21:58:16'),
(303, 3, 16649, 3, '2015-02-02 21:58:16'),
(304, 1, 16904, 6, '2015-02-02 21:58:39'),
(305, 1, 16905, 12, '2015-02-02 21:58:39'),
(306, 2, 16904, 12, '2015-02-02 21:58:39'),
(307, 2, 16905, 6, '2015-02-02 21:58:39'),
(308, 3, 16904, 3, '2015-02-02 21:58:39'),
(309, 3, 16905, 3, '2015-02-02 21:58:40'),
(310, 1, 32840, 1, '2015-02-02 21:59:01'),
(311, 1, 32841, 5, '2015-02-02 21:59:01'),
(312, 2, 32840, 5, '2015-02-02 21:59:01'),
(313, 2, 32841, 1, '2015-02-02 21:59:01'),
(314, 3, 32840, 4, '2015-02-02 21:59:01'),
(315, 3, 32841, 4, '2015-02-02 21:59:01'),
(316, 1, 32904, 3, '2015-02-02 21:59:43'),
(317, 1, 32905, 12, '2015-02-02 21:59:44'),
(318, 2, 32904, 12, '2015-02-02 21:59:44'),
(319, 2, 32905, 3, '2015-02-02 21:59:44'),
(320, 3, 32904, 4, '2015-02-02 21:59:44'),
(321, 3, 32905, 4, '2015-02-02 21:59:44'),
(322, 1, 33032, 6, '2015-02-02 22:00:02'),
(323, 1, 33033, 12, '2015-02-02 22:00:02'),
(324, 2, 33032, 12, '2015-02-02 22:00:02'),
(325, 2, 33033, 6, '2015-02-02 22:00:02'),
(326, 3, 33032, 3, '2015-02-02 22:00:02'),
(327, 3, 33033, 3, '2015-02-02 22:00:02'),
(328, 1, 33288, 6, '2015-02-02 22:00:36'),
(329, 1, 33289, 12, '2015-02-02 22:00:36'),
(330, 2, 33288, 12, '2015-02-02 22:00:36'),
(331, 2, 33289, 6, '2015-02-02 22:00:36'),
(332, 3, 33288, 3, '2015-02-02 22:00:36'),
(333, 3, 33289, 3, '2015-02-02 22:00:36'),
(334, 1, 65608, 1, '2015-02-02 22:01:06'),
(335, 1, 65609, 4, '2015-02-02 22:01:07'),
(336, 2, 65608, 4, '2015-02-02 22:01:07'),
(337, 2, 65609, 1, '2015-02-02 22:01:07'),
(338, 3, 65608, 5, '2015-02-02 22:01:07'),
(339, 3, 65609, 5, '2015-02-02 22:01:07'),
(340, 1, 65672, 3, '2015-02-02 22:01:25'),
(341, 1, 65673, 12, '2015-02-02 22:01:25'),
(342, 2, 65672, 12, '2015-02-02 22:01:25'),
(343, 2, 65673, 3, '2015-02-02 22:01:25'),
(344, 3, 65672, 4, '2015-02-02 22:01:25'),
(345, 3, 65673, 4, '2015-02-02 22:01:25'),
(346, 1, 65800, 6, '2015-02-02 22:01:54'),
(347, 1, 65801, 12, '2015-02-02 22:01:54'),
(348, 2, 65800, 12, '2015-02-02 22:01:54'),
(349, 2, 65801, 6, '2015-02-02 22:01:54'),
(350, 3, 65800, 3, '2015-02-02 22:01:54'),
(351, 3, 65801, 3, '2015-02-02 22:01:54'),
(352, 1, 66056, 6, '2015-02-02 22:02:18'),
(353, 1, 66057, 12, '2015-02-02 22:02:18'),
(354, 2, 66056, 12, '2015-02-02 22:02:18'),
(355, 2, 66057, 6, '2015-02-02 22:02:18'),
(356, 3, 66056, 3, '2015-02-02 22:02:18'),
(357, 3, 66057, 3, '2015-02-02 22:02:18'),
(358, 1, 1104, 1, '2015-02-02 22:02:53'),
(359, 1, 1105, 4, '2015-02-02 22:02:53'),
(360, 2, 1104, 4, '2015-02-02 22:02:53'),
(361, 2, 1105, 1, '2015-02-02 22:02:53'),
(362, 3, 1104, 5, '2015-02-02 22:02:53'),
(363, 3, 1105, 5, '2015-02-02 22:02:53'),
(364, 1, 1168, 3, '2015-02-02 22:03:14'),
(365, 1, 1169, 5, '2015-02-02 22:03:14'),
(366, 2, 1168, 5, '2015-02-02 22:03:14'),
(367, 2, 1169, 3, '2015-02-02 22:03:14'),
(368, 3, 1168, 12, '2015-02-02 22:03:15'),
(369, 3, 1169, 12, '2015-02-02 22:03:15'),
(370, 1, 1296, 6, '2015-02-02 22:03:48'),
(371, 1, 1297, 12, '2015-02-02 22:03:48'),
(372, 2, 1296, 12, '2015-02-02 22:03:48'),
(373, 2, 1297, 6, '2015-02-02 22:03:48'),
(374, 3, 1296, 3, '2015-02-02 22:03:49'),
(375, 3, 1297, 3, '2015-02-02 22:03:49'),
(376, 1, 1552, 7, '2015-02-02 22:04:15'),
(377, 1, 1553, 13, '2015-02-02 22:04:15'),
(378, 2, 1552, 13, '2015-02-02 22:04:15'),
(379, 2, 1553, 7, '2015-02-02 22:04:15'),
(380, 3, 1552, 6, '2015-02-02 22:04:15'),
(381, 3, 1553, 6, '2015-02-02 22:04:15'),
(382, 1, 2128, 1, '2015-02-02 22:04:58'),
(383, 1, 2129, 4, '2015-02-02 22:04:58'),
(384, 2, 2128, 4, '2015-02-02 22:04:58'),
(385, 2, 2129, 1, '2015-02-02 22:04:58'),
(386, 3, 2128, 5, '2015-02-02 22:04:58'),
(387, 3, 2129, 5, '2015-02-02 22:04:58'),
(388, 1, 2192, 3, '2015-02-02 22:05:17'),
(389, 1, 2193, 5, '2015-02-02 22:05:17'),
(390, 2, 2192, 5, '2015-02-02 22:05:17'),
(391, 2, 2193, 3, '2015-02-02 22:05:17'),
(392, 3, 2192, 12, '2015-02-02 22:05:17'),
(393, 3, 2193, 12, '2015-02-02 22:05:17'),
(394, 1, 2320, 6, '2015-02-02 22:05:37'),
(395, 1, 2321, 12, '2015-02-02 22:05:37'),
(396, 2, 2320, 12, '2015-02-02 22:05:37'),
(397, 2, 2321, 6, '2015-02-02 22:05:37'),
(398, 3, 2320, 3, '2015-02-02 22:05:37'),
(399, 3, 2321, 3, '2015-02-02 22:05:37'),
(400, 1, 2576, 7, '2015-02-02 22:05:59'),
(401, 1, 2577, 13, '2015-02-02 22:05:59'),
(402, 2, 2576, 13, '2015-02-02 22:05:59'),
(403, 2, 2577, 7, '2015-02-02 22:05:59'),
(404, 3, 2576, 6, '2015-02-02 22:05:59'),
(405, 3, 2577, 6, '2015-02-02 22:05:59'),
(406, 1, 4176, 1, '2015-02-02 22:06:22'),
(407, 1, 4177, 4, '2015-02-02 22:06:22'),
(408, 2, 4176, 4, '2015-02-02 22:06:22'),
(409, 2, 4177, 1, '2015-02-02 22:06:22'),
(410, 3, 4176, 5, '2015-02-02 22:06:22'),
(411, 3, 4177, 5, '2015-02-02 22:06:22'),
(412, 1, 4240, 3, '2015-02-02 22:06:48'),
(413, 1, 4241, 5, '2015-02-02 22:06:48'),
(414, 2, 4240, 5, '2015-02-02 22:06:48'),
(415, 2, 4241, 3, '2015-02-02 22:06:48'),
(416, 3, 4240, 12, '2015-02-02 22:06:48'),
(417, 3, 4241, 12, '2015-02-02 22:06:48'),
(418, 1, 4368, 6, '2015-02-02 22:07:10'),
(419, 1, 4369, 12, '2015-02-02 22:07:10'),
(420, 2, 4368, 12, '2015-02-02 22:07:10'),
(421, 2, 4369, 6, '2015-02-02 22:07:10'),
(422, 3, 4368, 3, '2015-02-02 22:07:10'),
(423, 3, 4369, 3, '2015-02-02 22:07:10'),
(424, 1, 4624, 7, '2015-02-02 22:07:34'),
(425, 1, 4625, 13, '2015-02-02 22:07:34'),
(426, 2, 4624, 13, '2015-02-02 22:07:34'),
(427, 2, 4625, 7, '2015-02-02 22:07:34'),
(428, 3, 4624, 6, '2015-02-02 22:07:34'),
(429, 3, 4625, 6, '2015-02-02 22:07:34'),
(430, 1, 8272, 8, '2015-02-02 22:08:03'),
(431, 1, 8273, 14, '2015-02-02 22:08:03'),
(432, 2, 8272, 14, '2015-02-02 22:08:03'),
(433, 2, 8273, 8, '2015-02-02 22:08:03'),
(434, 3, 8272, 9, '2015-02-02 22:08:03'),
(435, 3, 8273, 9, '2015-02-02 22:08:03'),
(436, 1, 8336, 9, '2015-02-02 22:08:24'),
(437, 1, 8337, 15, '2015-02-02 22:08:24'),
(438, 2, 8336, 15, '2015-02-02 22:08:24'),
(439, 2, 8337, 9, '2015-02-02 22:08:24'),
(440, 3, 8336, 14, '2015-02-02 22:08:24'),
(441, 3, 8337, 14, '2015-02-02 22:08:24'),
(442, 1, 8464, 10, '2015-02-02 22:08:50'),
(443, 1, 8465, 16, '2015-02-02 22:08:51'),
(444, 2, 8464, 16, '2015-02-02 22:08:51'),
(445, 2, 8465, 10, '2015-02-02 22:08:51'),
(446, 3, 8464, 11, '2015-02-02 22:08:51'),
(447, 3, 8465, 11, '2015-02-02 22:08:51'),
(448, 1, 8720, 11, '2015-02-02 22:09:16'),
(449, 1, 8721, 17, '2015-02-02 22:09:16'),
(450, 2, 8720, 17, '2015-02-02 22:09:16'),
(451, 2, 8721, 11, '2015-02-02 22:09:16'),
(452, 3, 8720, 16, '2015-02-02 22:09:16'),
(453, 3, 8721, 16, '2015-02-02 22:09:16'),
(454, 1, 16464, 1, '2015-02-02 22:09:42'),
(455, 1, 16465, 4, '2015-02-02 22:09:42'),
(456, 2, 16464, 4, '2015-02-02 22:09:42'),
(457, 2, 16465, 1, '2015-02-02 22:09:42'),
(458, 3, 16464, 5, '2015-02-02 22:09:42'),
(459, 3, 16465, 5, '2015-02-02 22:09:42'),
(460, 1, 16528, 3, '2015-02-02 22:10:03'),
(461, 1, 16529, 5, '2015-02-02 22:10:03'),
(462, 2, 16528, 5, '2015-02-02 22:10:03'),
(463, 2, 16529, 3, '2015-02-02 22:10:03'),
(464, 3, 16528, 12, '2015-02-02 22:10:03'),
(465, 3, 16529, 12, '2015-02-02 22:10:03'),
(466, 1, 16656, 6, '2015-02-02 22:10:28'),
(467, 1, 16657, 12, '2015-02-02 22:10:28'),
(468, 2, 16656, 12, '2015-02-02 22:10:29'),
(469, 2, 16657, 6, '2015-02-02 22:10:29'),
(470, 3, 16656, 3, '2015-02-02 22:10:29'),
(471, 3, 16657, 3, '2015-02-02 22:10:29'),
(472, 1, 16912, 7, '2015-02-02 22:10:48'),
(473, 1, 16913, 13, '2015-02-02 22:10:48'),
(474, 2, 16912, 13, '2015-02-02 22:10:48'),
(475, 2, 16913, 7, '2015-02-02 22:10:49'),
(476, 3, 16912, 6, '2015-02-02 22:10:49'),
(477, 3, 16913, 6, '2015-02-02 22:10:49'),
(478, 1, 32848, 1, '2015-02-02 22:21:26'),
(479, 1, 32849, 4, '2015-02-02 22:21:26'),
(480, 2, 32848, 4, '2015-02-02 22:21:26'),
(481, 2, 32849, 1, '2015-02-02 22:21:26'),
(482, 3, 32848, 5, '2015-02-02 22:21:26'),
(483, 3, 32849, 5, '2015-02-02 22:21:26'),
(484, 1, 32912, 3, '2015-02-02 22:21:52'),
(485, 1, 32913, 5, '2015-02-02 22:21:52'),
(486, 2, 32912, 5, '2015-02-02 22:21:52'),
(487, 2, 32913, 3, '2015-02-02 22:21:52'),
(488, 3, 32912, 12, '2015-02-02 22:21:52'),
(489, 3, 32913, 12, '2015-02-02 22:21:52'),
(490, 1, 33040, 6, '2015-02-02 22:22:20'),
(491, 1, 33041, 12, '2015-02-02 22:22:20'),
(492, 2, 33040, 12, '2015-02-02 22:22:20'),
(493, 2, 33041, 6, '2015-02-02 22:22:20'),
(494, 3, 33040, 3, '2015-02-02 22:22:20'),
(495, 3, 33041, 3, '2015-02-02 22:22:20'),
(496, 1, 33296, 7, '2015-02-02 22:22:59'),
(497, 1, 33297, 13, '2015-02-02 22:22:59'),
(498, 2, 33296, 13, '2015-02-02 22:22:59'),
(499, 2, 33297, 7, '2015-02-02 22:22:59'),
(500, 3, 33296, 6, '2015-02-02 22:22:59'),
(501, 3, 33297, 6, '2015-02-02 22:22:59'),
(502, 1, 65616, 1, '2015-02-02 22:23:18'),
(503, 1, 65617, 4, '2015-02-02 22:23:18'),
(504, 2, 65616, 4, '2015-02-02 22:23:18'),
(505, 2, 65617, 1, '2015-02-02 22:23:18'),
(506, 3, 65616, 5, '2015-02-02 22:23:18'),
(507, 3, 65617, 5, '2015-02-02 22:23:18'),
(508, 1, 65680, 3, '2015-02-02 22:23:49'),
(509, 1, 65681, 5, '2015-02-02 22:23:49'),
(510, 2, 65680, 5, '2015-02-02 22:23:49'),
(511, 2, 65681, 3, '2015-02-02 22:23:49'),
(512, 3, 65680, 12, '2015-02-02 22:23:49'),
(513, 3, 65681, 12, '2015-02-02 22:23:49'),
(514, 1, 65808, 6, '2015-02-02 22:24:14'),
(515, 1, 65809, 12, '2015-02-02 22:24:15'),
(516, 2, 65808, 12, '2015-02-02 22:24:15'),
(517, 2, 65809, 6, '2015-02-02 22:24:15'),
(518, 3, 65808, 3, '2015-02-02 22:24:15'),
(519, 3, 65809, 3, '2015-02-02 22:24:15'),
(520, 1, 66064, 7, '2015-02-02 22:24:41'),
(521, 1, 66065, 13, '2015-02-02 22:24:41'),
(522, 2, 66064, 13, '2015-02-02 22:24:41'),
(523, 2, 66065, 7, '2015-02-02 22:24:41'),
(524, 3, 66064, 6, '2015-02-02 22:24:41'),
(525, 3, 66065, 6, '2015-02-02 22:24:41');

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