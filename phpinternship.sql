-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 24, 2018 at 06:43 AM
-- Server version: 5.7.22
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpinternship`
--

-- --------------------------------------------------------

--
-- Table structure for table `art2comm`
--

CREATE TABLE `art2comm` (
  `id` int(11) NOT NULL,
  `commentdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `useremail` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `idArticol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `art2comm`
--

INSERT INTO `art2comm` (`id`, `commentdate`, `useremail`, `comment`, `idArticol`) VALUES
(1, '2018-08-21 09:18:58', 'vmatei@y.com', 'work work', 23),
(2, '2018-08-21 09:26:53', 'vmatei@y.com', 'Nice work', 23),
(3, '2018-08-21 09:29:02', 'vmatei@y.com', 'wooow', 23),
(4, '2018-08-21 09:29:07', 'vmatei@y.com', 'nice', 23),
(5, '2018-08-21 12:45:05', 'vm@email.com', 'dasda', 9),
(6, '2018-08-22 07:31:23', 'vm@email.com', 'dasdas', 9),
(7, '2018-08-24 11:33:04', 'matei@email.com', 'dsadasda', 22),
(8, '2018-08-24 11:36:26', 'matei@email.com', 'dada', 22),
(9, '2018-08-24 11:36:51', 'matei@email.com', 'dada', 22),
(10, '2018-08-24 11:37:31', 'matei@email.com', 'dsad', 22),
(11, '2018-08-24 11:37:44', 'matei@email.com', 'dsad', 22),
(12, '2018-08-24 11:38:30', 'matei@email.com', 'dada', 22),
(13, '2018-08-24 13:21:05', 'vm@email.com', 'dada', 212),
(14, '2018-08-24 13:21:27', 'vm@email.com', 'da', 200),
(15, '2018-08-24 13:23:22', 'vm@email.com', 'dasdasda', 200),
(16, '2018-08-24 13:24:37', 'vm@email.com', 'fdsf', 156),
(17, '2018-08-24 13:26:09', 'vm@email.com', 'da', 100),
(18, '2018-08-24 13:27:14', 'vm@email.com', 'dassda', 100),
(19, '2018-08-24 13:27:35', 'vm@email.com', 'dsadsa', 100),
(20, '2018-08-24 13:28:05', 'vm@email.com', '2222', 100),
(21, '2018-08-24 13:41:48', 'matei@email.com', 'dadada admin', 180);

-- --------------------------------------------------------

--
-- Table structure for table `articol2autori`
--

CREATE TABLE `articol2autori` (
  `id` int(11) NOT NULL,
  `idArticol` int(11) NOT NULL,
  `idAutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articol2autori`
--

INSERT INTO `articol2autori` (`id`, `idArticol`, `idAutor`) VALUES
(1, 29, 70),
(2, 127, 73),
(3, 116, 19),
(5, 36, 7),
(6, 202, 9),
(8, 241, 37),
(9, 22, 97),
(10, 126, 27),
(11, 113, 2),
(12, 135, 27),
(13, 241, 49),
(14, 40, 41),
(15, 233, 28),
(16, 133, 7),
(17, 81, 44),
(18, 157, 94),
(19, 173, 99),
(20, 176, 45),
(21, 165, 35),
(22, 214, 64),
(23, 247, 12),
(24, 116, 83),
(25, 140, 73),
(26, 171, 91),
(28, 62, 52),
(29, 201, 83),
(30, 189, 10),
(32, 134, 93),
(33, 224, 53),
(34, 219, 96),
(35, 222, 27),
(36, 146, 65),
(37, 172, 10),
(38, 49, 32),
(40, 204, 56),
(41, 45, 13),
(42, 61, 39),
(43, 177, 10),
(44, 182, 56),
(45, 43, 94),
(46, 234, 8),
(47, 43, 13),
(49, 125, 78),
(50, 137, 22),
(51, 143, 83),
(52, 55, 30),
(53, 177, 95),
(54, 115, 64),
(55, 103, 21),
(57, 243, 40),
(58, 130, 93),
(59, 246, 28),
(60, 249, 35),
(61, 139, 39),
(62, 178, 7),
(63, 169, 76),
(64, 66, 63),
(65, 186, 47),
(66, 79, 49),
(68, 161, 49),
(69, 142, 70),
(70, 169, 65),
(71, 223, 39),
(72, 238, 92),
(73, 29, 96),
(74, 112, 55),
(75, 112, 82),
(76, 70, 60),
(77, 62, 80),
(78, 171, 49),
(80, 69, 18),
(81, 69, 43),
(82, 230, 29),
(83, 213, 25),
(84, 203, 4),
(86, 69, 67),
(87, 51, 77),
(88, 234, 64),
(89, 135, 84),
(90, 151, 44),
(91, 124, 74),
(92, 158, 18),
(93, 94, 14),
(94, 99, 48),
(95, 39, 51),
(96, 208, 45),
(97, 225, 71),
(98, 65, 13),
(100, 207, 23),
(101, 144, 53),
(102, 205, 80),
(103, 206, 48),
(104, 132, 27),
(105, 193, 77),
(106, 161, 95),
(107, 47, 31),
(108, 163, 15),
(109, 31, 85),
(110, 172, 37),
(111, 104, 64),
(112, 111, 23),
(113, 180, 73),
(114, 76, 69),
(115, 81, 12),
(116, 141, 12),
(118, 94, 30),
(119, 194, 72),
(120, 216, 42),
(121, 187, 93),
(122, 160, 78),
(123, 199, 24),
(124, 246, 84),
(125, 102, 83),
(127, 80, 84),
(128, 35, 84),
(129, 180, 90),
(130, 200, 92),
(131, 179, 49),
(132, 99, 71),
(133, 167, 61),
(134, 113, 87),
(135, 226, 46),
(136, 215, 82),
(137, 162, 31),
(138, 76, 79),
(139, 149, 34),
(140, 194, 84),
(141, 219, 31),
(142, 141, 15),
(143, 191, 95),
(144, 145, 95),
(145, 27, 57),
(146, 117, 96),
(147, 52, 19),
(148, 228, 74),
(150, 147, 25),
(151, 165, 39),
(152, 32, 45),
(153, 110, 89),
(154, 139, 62),
(155, 229, 39),
(156, 79, 19),
(158, 242, 49),
(159, 246, 95),
(160, 105, 23),
(161, 237, 40),
(163, 175, 44),
(164, 226, 78),
(165, 110, 74),
(166, 100, 51),
(167, 238, 3),
(168, 99, 51),
(169, 134, 11),
(170, 166, 45),
(171, 35, 82),
(172, 188, 59),
(173, 100, 11),
(174, 88, 14),
(175, 48, 4),
(176, 128, 17),
(177, 209, 37),
(178, 172, 76),
(179, 56, 87),
(180, 52, 98),
(181, 36, 71),
(182, 84, 74),
(183, 235, 28),
(184, 136, 93),
(185, 29, 69),
(187, 215, 19),
(188, 160, 96),
(189, 128, 29),
(190, 195, 38),
(191, 219, 7),
(192, 31, 4),
(193, 27, 88),
(194, 240, 58),
(195, 137, 88),
(196, 219, 66),
(197, 210, 5),
(199, 129, 26),
(200, 234, 73),
(213, 251, 125),
(215, 31, 125),
(218, 206, 128),
(219, 150, 128),
(221, 252, 128),
(229, 253, 128),
(230, 21, 128);

-- --------------------------------------------------------

--
-- Table structure for table `articol2categorii`
--

CREATE TABLE `articol2categorii` (
  `id` int(11) NOT NULL,
  `idArticol` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articol2categorii`
--

INSERT INTO `articol2categorii` (`id`, `idArticol`, `idCategorie`) VALUES
(2, 76, 6),
(4, 126, 6),
(5, 200, 1),
(6, 181, 6),
(8, 120, 1),
(9, 156, 2),
(10, 88, 8),
(11, 161, 8),
(12, 62, 7),
(14, 212, 4),
(15, 117, 4),
(17, 246, 5),
(18, 76, 4),
(19, 109, 3),
(20, 85, 4),
(21, 139, 10),
(22, 158, 6),
(23, 144, 1),
(24, 159, 9),
(25, 115, 9),
(26, 183, 6),
(27, 162, 4),
(30, 206, 1),
(31, 113, 6),
(32, 230, 1),
(33, 100, 2),
(35, 235, 6),
(36, 41, 4),
(37, 211, 2),
(38, 137, 8),
(39, 159, 3),
(40, 247, 8),
(42, 180, 5),
(43, 180, 2),
(44, 141, 1),
(45, 64, 4),
(46, 96, 10),
(47, 147, 9),
(48, 163, 1),
(49, 122, 2),
(50, 36, 7),
(51, 54, 4),
(52, 157, 10),
(53, 103, 4),
(55, 214, 1),
(56, 240, 1),
(57, 194, 6),
(59, 120, 8),
(60, 183, 4),
(61, 112, 8),
(62, 98, 4),
(63, 37, 3),
(64, 149, 10),
(66, 176, 8),
(67, 130, 5),
(68, 71, 8),
(69, 181, 2),
(71, 57, 10),
(72, 206, 5),
(73, 247, 2),
(74, 193, 4),
(75, 129, 7),
(76, 146, 6),
(77, 92, 1),
(78, 48, 3),
(79, 170, 8),
(80, 219, 8),
(83, 248, 6),
(84, 45, 6),
(85, 141, 10),
(86, 70, 5),
(87, 117, 10),
(88, 220, 1),
(89, 195, 5),
(90, 208, 4),
(91, 39, 5),
(92, 68, 1),
(93, 199, 8),
(94, 102, 8),
(95, 183, 3),
(96, 160, 8),
(97, 145, 5),
(100, 158, 3),
(101, 246, 3),
(103, 47, 8),
(104, 122, 5),
(105, 142, 3),
(106, 191, 3),
(107, 138, 8),
(108, 88, 5),
(109, 57, 5),
(111, 219, 2),
(112, 200, 6),
(113, 172, 8),
(114, 220, 7),
(115, 45, 5),
(117, 22, 1),
(118, 113, 9),
(119, 162, 6),
(120, 33, 9),
(121, 95, 2),
(122, 45, 2),
(123, 203, 3),
(124, 249, 9),
(125, 183, 2),
(126, 64, 6),
(127, 110, 8),
(128, 228, 10),
(129, 82, 2),
(130, 132, 1),
(131, 115, 6),
(133, 76, 5),
(134, 187, 9),
(135, 144, 9),
(136, 146, 3),
(137, 169, 9),
(138, 236, 6),
(139, 174, 4),
(140, 68, 7),
(141, 86, 2),
(142, 115, 5),
(143, 245, 4),
(144, 221, 5),
(145, 237, 4),
(146, 54, 1),
(147, 103, 7),
(148, 81, 9),
(149, 66, 2),
(150, 22, 3),
(151, 123, 7),
(152, 231, 3),
(153, 190, 8),
(154, 125, 1),
(155, 230, 3),
(156, 110, 3),
(157, 136, 5),
(158, 204, 10),
(159, 135, 8),
(160, 73, 10),
(161, 119, 10),
(162, 149, 6),
(163, 136, 10),
(166, 91, 3),
(167, 82, 1),
(169, 31, 3),
(170, 171, 1),
(171, 168, 2),
(172, 117, 10),
(173, 174, 6),
(174, 49, 5),
(175, 163, 2),
(176, 186, 9),
(177, 122, 5),
(178, 30, 6),
(179, 174, 3),
(180, 155, 4),
(181, 235, 5),
(182, 87, 2),
(183, 71, 3),
(184, 82, 1),
(185, 88, 3),
(186, 232, 5),
(187, 74, 6),
(188, 99, 4),
(189, 129, 6),
(190, 84, 2),
(191, 85, 10),
(192, 201, 7),
(193, 28, 4),
(194, 181, 2),
(196, 140, 9),
(197, 116, 4),
(198, 54, 5),
(199, 46, 8),
(200, 67, 7),
(203, 128, 9),
(204, 149, 6),
(205, 178, 9),
(206, 188, 4),
(207, 53, 4),
(209, 84, 7),
(210, 150, 4),
(211, 77, 6),
(212, 176, 1),
(213, 159, 2),
(214, 60, 6),
(215, 123, 9),
(217, 191, 8),
(219, 35, 1),
(220, 54, 9),
(221, 116, 3),
(222, 182, 1),
(223, 179, 4),
(224, 178, 7),
(225, 200, 5),
(226, 163, 10),
(227, 174, 10),
(228, 61, 4),
(229, 79, 8),
(230, 134, 10),
(231, 108, 7),
(232, 66, 4),
(233, 188, 2),
(234, 107, 9),
(235, 68, 3),
(236, 168, 7),
(238, 30, 7),
(239, 33, 9),
(240, 195, 8),
(241, 181, 1),
(242, 148, 10),
(243, 89, 3),
(244, 136, 7),
(245, 152, 7),
(246, 85, 8),
(248, 80, 5),
(249, 178, 1),
(250, 24, 8),
(251, 177, 4),
(254, 24, 3),
(270, 251, 3),
(271, 251, 5),
(272, 251, 6),
(275, 31, 4),
(278, 206, 1),
(279, 206, 5),
(293, 253, 5),
(294, 253, 7),
(295, 253, 9),
(296, 21, 5),
(297, 21, 6);

-- --------------------------------------------------------

--
-- Table structure for table `articole`
--

CREATE TABLE `articole` (
  `id` int(11) NOT NULL,
  `titlu` varchar(30) NOT NULL,
  `continut` text NOT NULL,
  `imagine` text NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articole`
--

INSERT INTO `articole` (`id`, `titlu`, `continut`, `imagine`, `visible`) VALUES
(21, 'It\'s a Very Merry Movie', 'Distal gastrectomy', 'http://dummyimage.com/148x108.png/5fa2dd/ffffff', 0),
(22, 'Ballad of Ramblin\' Jack, The', 'Mix venous bld gas meas', 'http://dummyimage.com/151x144.png/ff4444/ffffff', 1),
(24, 'Ordet (Word, The)', 'Thorac contr phlebog NEC', 'http://dummyimage.com/101x194.png/5fa2dd/ffffff', 1),
(27, 'Eye See You (D-Tox)', 'Endo imp grft thor aorta', 'http://dummyimage.com/124x132.jpg/dddddd/000000', 0),
(28, 'Missing Person, The', 'Dilate pylorus, incision', 'http://dummyimage.com/177x158.jpg/5fa2dd/ffffff', 1),
(29, 'The Damned', 'Pancreatic homotransplan', 'http://dummyimage.com/167x184.png/cc0000/ffffff', 0),
(30, 'Ditirambo', 'Hearing examination NOS', 'http://dummyimage.com/102x244.png/dddddd/000000', 1),
(31, 'Recruiter, The', 'Percutan hrt assist syst												', 'article-31.jpg', 1),
(32, 'Double Trouble', 'Rectal perirect op NEC', 'http://dummyimage.com/237x162.png/dddddd/000000', 1),
(33, 'It\'s a Very Merry Movie', 'Distal gastrectomy', 'http://dummyimage.com/148x108.png/5fa2dd/ffffff', 0),
(34, 'Ballad of Ramblin\' Jack, The', 'Mix venous bld gas meas', 'http://dummyimage.com/151x144.png/ff4444/ffffff', 1),
(35, 'Promised Life', 'Bronchial repair NEC', 'http://dummyimage.com/200x217.bmp/ff4444/ffffff', 0),
(36, 'Cul-de-sac', 'SuperSat O2 therapy', 'http://dummyimage.com/101x196.jpg/ff4444/ffffff', 1),
(37, 'Alatriste', 'Hypothermia', 'http://dummyimage.com/170x220.png/ff4444/ffffff', 0),
(38, 'Piled Higher and Deeper', 'Open testicular biopsy', 'http://dummyimage.com/138x118.jpg/5fa2dd/ffffff', 1),
(39, 'Hours', 'Hand tendon reattachment', 'http://dummyimage.com/246x105.bmp/cc0000/ffffff', 0),
(40, 'Toast of New York, The', 'Bact smear-eye', 'http://dummyimage.com/138x184.png/dddddd/000000', 1),
(41, 'Ordet (Word, The)', 'Thorac contr phlebog NEC', 'http://dummyimage.com/101x194.png/5fa2dd/ffffff', 0),
(42, 'Book of Life, The', 'Tot ostect-tibia/fibula', 'http://dummyimage.com/130x228.bmp/cc0000/ffffff', 1),
(43, 'Trouble with Angels, The', 'Pulmon art wedge monitor', 'http://dummyimage.com/222x178.bmp/cc0000/ffffff', 0),
(45, 'Missing Person, The', 'Dilate pylorus, incision', 'http://dummyimage.com/177x158.jpg/5fa2dd/ffffff', 0),
(46, 'The Damned 25', 'Pancreatic homotransplan', 'http://dummyimage.com/167x184.png/cc0000/ffffff', 1),
(47, 'Ditirambo', 'Hearing examination NOS', 'http://dummyimage.com/102x244.png/dddddd/000000', 0),
(48, 'Recruiter, The', 'Percutan hrt assist syst', 'http://dummyimage.com/218x187.bmp/cc0000/ffffff', 1),
(49, 'Double Trouble', 'Rectal perirect op NEC', 'http://dummyimage.com/237x162.png/dddddd/000000', 0),
(50, 'It\'s a Very Merry Movie', 'Distal gastrectomy', 'http://dummyimage.com/148x108.png/5fa2dd/ffffff', 1),
(51, 'Ballad of Ramblin\' Jack, The', 'Mix venous bld gas meas', 'http://dummyimage.com/151x144.png/ff4444/ffffff', 0),
(52, 'Promised Life Of U', 'Bronchial repair NEC', 'http://dummyimage.com/200x217.bmp/ff4444/ffffff', 1),
(53, 'Cul-de-sac 22', 'SuperSat O2 therapy', 'http://dummyimage.com/101x196.jpg/ff4444/ffffff', 0),
(54, 'Alatriste', 'Hypothermia', 'http://dummyimage.com/170x220.png/ff4444/ffffff', 1),
(55, 'Piled Higher and Deeper', 'Open testicular biopsy', 'http://dummyimage.com/138x118.jpg/5fa2dd/ffffff', 0),
(56, 'Hours', 'Hand tendon reattachment', 'http://dummyimage.com/246x105.bmp/cc0000/ffffff', 1),
(57, 'Days and Hours', 'Fus/refus 9 vertebrae', 'http://dummyimage.com/206x124.bmp/cc0000/ffffff', 0),
(58, 'Sphere', 'Sm bowel endoscopy NEC', 'http://dummyimage.com/166x244.png/cc0000/ffffff', 1),
(59, 'Lethal Weapon', 'Tm contrast arthrogram', 'http://dummyimage.com/238x108.jpg/dddddd/000000', 0),
(60, 'Toast of New York, The', 'Bact smear-eye', 'http://dummyimage.com/138x184.png/dddddd/000000', 1),
(61, 'Ordet (Word, The)', 'Thorac contr phlebog NEC', 'http://dummyimage.com/101x194.png/5fa2dd/ffffff', 0),
(62, 'Book of Life, The', 'Tot ostect-tibia/fibula', 'http://dummyimage.com/130x228.bmp/cc0000/ffffff', 1),
(63, 'Trouble with Angels, The', 'Pulmon art wedge monitor', 'http://dummyimage.com/222x178.bmp/cc0000/ffffff', 0),
(64, 'Eye See You (D-Tox)', 'Endo imp grft thor aorta', 'http://dummyimage.com/124x132.jpg/dddddd/000000', 1),
(65, 'Missing Person, The', 'Dilate pylorus, incision', 'http://dummyimage.com/177x158.jpg/5fa2dd/ffffff', 0),
(66, 'The Damned', 'Pancreatic homotransplan', 'http://dummyimage.com/167x184.png/cc0000/ffffff', 1),
(67, 'Ditirambo', 'Hearing examination NOS', 'http://dummyimage.com/102x244.png/dddddd/000000', 0),
(68, 'Recruiter, The', 'Percutan hrt assist syst', 'http://dummyimage.com/218x187.bmp/cc0000/ffffff', 1),
(69, 'Double Trouble', 'Rectal perirect op NEC', 'http://dummyimage.com/237x162.png/dddddd/000000', 0),
(70, 'It\'s a Very Merry Movie', 'Distal gastrectomy', 'http://dummyimage.com/148x108.png/5fa2dd/ffffff', 1),
(71, 'Ballad of Ramblin\' Jack, The', 'Mix venous bld gas meas', 'http://dummyimage.com/151x144.png/ff4444/ffffff', 0),
(72, 'Promised Life', 'Bronchial repair NEC', 'http://dummyimage.com/200x217.bmp/ff4444/ffffff', 1),
(73, 'Cul-de-sac', 'SuperSat O2 therapy', 'http://dummyimage.com/101x196.jpg/ff4444/ffffff', 0),
(74, 'Alatriste', 'Hypothermia', 'http://dummyimage.com/170x220.png/ff4444/ffffff', 1),
(75, 'Piled Higher and Deeper', 'Open testicular biopsy', 'http://dummyimage.com/138x118.jpg/5fa2dd/ffffff', 0),
(76, 'Le Mans, 24 Hours', 'Hand tendon reattachment', 'http://dummyimage.com/246x105.bmp/cc0000/ffffff', 1),
(77, 'Days and Hours', 'Fus/refus 9 vertebrae', 'http://dummyimage.com/206x124.bmp/cc0000/ffffff', 0),
(78, 'Sphere 28', 'Sm bowel endoscopy NEC', 'http://dummyimage.com/166x244.png/cc0000/ffffff', 1),
(79, 'Lethal Weapon', 'Tm contrast arthrogram', 'http://dummyimage.com/238x108.jpg/dddddd/000000', 0),
(80, ' (Tuntematon emäntä)', 'Remove skull tongs', 'http://dummyimage.com/219x161.jpg/5fa2dd/ffffff', 1),
(81, 'Hit Man', 'Intra-abdomin shunt NEC', 'http://dummyimage.com/176x140.png/cc0000/ffffff', 0),
(82, 'Barnacle Bill', 'Repair of thymus', 'http://dummyimage.com/108x120.jpg/5fa2dd/ffffff', 1),
(83, 'Death of a President', 'Urin diversion to bowel', 'http://dummyimage.com/174x130.bmp/5fa2dd/ffffff', 0),
(84, 'Darling', 'Suture scrotal lacerat', 'http://dummyimage.com/130x235.bmp/cc0000/ffffff', 1),
(85, 'Toast of New York, The', 'Bact smear-eye', 'http://dummyimage.com/138x184.png/dddddd/000000', 0),
(86, 'Ordet (Word, The)', 'Thorac contr phlebog NEC', 'http://dummyimage.com/101x194.png/5fa2dd/ffffff', 1),
(87, 'Book of Life, The', 'Tot ostect-tibia/fibula', 'http://dummyimage.com/130x228.bmp/cc0000/ffffff', 0),
(88, 'Trouble with Angels, The', 'Pulmon art wedge monitor', 'http://dummyimage.com/222x178.bmp/cc0000/ffffff', 1),
(89, 'Eye See You (D-Tox)', 'Endo imp grft thor aorta', 'http://dummyimage.com/124x132.jpg/dddddd/000000', 0),
(90, 'Missing Person, The', 'Dilate pylorus, incision', 'http://dummyimage.com/177x158.jpg/5fa2dd/ffffff', 1),
(91, 'The Damned', 'Pancreatic homotransplan', 'http://dummyimage.com/167x184.png/cc0000/ffffff', 0),
(92, 'Ditirambo', 'Hearing examination NOS', 'http://dummyimage.com/102x244.png/dddddd/000000', 1),
(93, 'Recruiter, The', 'Percutan hrt assist syst', 'http://dummyimage.com/218x187.bmp/cc0000/ffffff', 0),
(94, 'Double Trouble', 'Rectal perirect op NEC', 'http://dummyimage.com/237x162.png/dddddd/000000', 1),
(95, 'It\'s a Very Merry Movie', 'Distal gastrectomy', 'http://dummyimage.com/148x108.png/5fa2dd/ffffff', 0),
(96, 'Ballad of Ramblin\' Jack, The', 'Mix venous bld gas meas', 'http://dummyimage.com/151x144.png/ff4444/ffffff', 1),
(97, 'Promised Life', 'Bronchial repair NEC', 'http://dummyimage.com/200x217.bmp/ff4444/ffffff', 0),
(98, 'Cul-de-sac', 'SuperSat O2 therapy', 'http://dummyimage.com/101x196.jpg/ff4444/ffffff', 1),
(99, 'Alatriste', 'Hypothermia', 'http://dummyimage.com/170x220.png/ff4444/ffffff', 0),
(100, 'Piled Higher and Deeper', 'Open testicular biopsy', 'http://dummyimage.com/138x118.jpg/5fa2dd/ffffff', 1),
(101, 'Hours', 'Hand tendon reattachment', 'http://dummyimage.com/246x105.bmp/cc0000/ffffff', 0),
(102, 'Days and Hours', 'Fus/refus 9 vertebrae', 'http://dummyimage.com/206x124.bmp/cc0000/ffffff', 1),
(103, 'Sphere', 'Sm bowel endoscopy NEC', 'http://dummyimage.com/166x244.png/cc0000/ffffff', 0),
(104, 'Lethal Weapon', 'Tm contrast arthrogram', 'http://dummyimage.com/238x108.jpg/dddddd/000000', 1),
(105, ' (Tuntematon emäntä)', 'Remove skull tongs', 'http://dummyimage.com/219x161.jpg/5fa2dd/ffffff', 0),
(106, 'Hit Man', 'Intra-abdomin shunt NEC', 'http://dummyimage.com/176x140.png/cc0000/ffffff', 1),
(107, 'Barnacle Bill', 'Repair of thymus', 'http://dummyimage.com/108x120.jpg/5fa2dd/ffffff', 0),
(108, 'Death of a President', 'Urin diversion to bowel', 'http://dummyimage.com/174x130.bmp/5fa2dd/ffffff', 1),
(109, 'Darling', 'Suture scrotal lacerat', 'http://dummyimage.com/130x235.bmp/cc0000/ffffff', 0),
(110, 'Winged Migration ', 'Antitoxin administra NEC', 'http://dummyimage.com/200x114.png/5fa2dd/ffffff', 1),
(111, 'I Am Number Four', 'Thoracentesis', 'http://dummyimage.com/116x118.bmp/5fa2dd/ffffff', 0),
(112, 'Like Dandelion Dust', 'Intrathor lymphangiogram', 'http://dummyimage.com/161x180.jpg/5fa2dd/ffffff', 1),
(113, 'The Opposite Sex', 'Tracheoesoph fistulizat', 'http://dummyimage.com/233x160.bmp/dddddd/000000', 0),
(114, 'Father and Son (Otets i syn)', 'Hepatotomy', 'http://dummyimage.com/195x222.jpg/5fa2dd/ffffff', 1),
(115, 'Whitecoats', 'Open uterine biopsy', 'http://dummyimage.com/197x241.png/cc0000/ffffff', 0),
(116, 'Living Sea, The', 'Antitoxin administra NEC', 'http://dummyimage.com/144x222.png/cc0000/ffffff', 1),
(117, 'Gossip', 'Excise minor les lid NEC', 'http://dummyimage.com/142x148.bmp/5fa2dd/ffffff', 0),
(118, 'Dear Wendy', 'Knee synovectomy', 'http://dummyimage.com/143x107.png/ff4444/ffffff', 1),
(119, 'Mushrooming (Seenelkäik)', 'Saliv glnd dx proc NEC', 'http://dummyimage.com/235x121.jpg/dddddd/000000', 0),
(120, 'Manxman, The', 'Globus pallidus ops', 'http://dummyimage.com/146x166.bmp/ff4444/ffffff', 1),
(121, 'Walking Tall', '2ndry exent cavity graft', 'http://dummyimage.com/115x217.bmp/5fa2dd/ffffff', 0),
(122, 'The Opposite Sex', 'Tracheoesoph fistulizat', 'http://dummyimage.com/233x160.bmp/dddddd/000000', 1),
(123, 'Father and Son (Otets i syn)', 'Hepatotomy', 'http://dummyimage.com/195x222.jpg/5fa2dd/ffffff', 0),
(124, 'Whitecoats', 'Open uterine biopsy', 'http://dummyimage.com/197x241.png/cc0000/ffffff', 1),
(125, 'Living Sea, The', 'Antitoxin administra NEC', 'http://dummyimage.com/144x222.png/cc0000/ffffff', 0),
(126, 'Gossip', 'Excise minor les lid NEC', 'http://dummyimage.com/142x148.bmp/5fa2dd/ffffff', 1),
(127, 'Dear Wendy', 'Knee synovectomy', 'http://dummyimage.com/143x107.png/ff4444/ffffff', 0),
(128, 'Mushrooming (Seenelkäik)', 'Saliv glnd dx proc NEC', 'http://dummyimage.com/235x121.jpg/dddddd/000000', 1),
(129, 'Manxman, The', 'Globus pallidus ops', 'http://dummyimage.com/146x166.bmp/ff4444/ffffff', 0),
(130, 'Walking Tall', '2ndry exent cavity graft', 'http://dummyimage.com/115x217.bmp/5fa2dd/ffffff', 1),
(131, 'Tender Hook, The ', 'Neurolyt injec-symp nrv', 'http://dummyimage.com/203x137.jpg/ff4444/ffffff', 0),
(132, 'Lonely Man, The', 'Fitting of hearing aid', 'http://dummyimage.com/173x171.jpg/dddddd/000000', 1),
(133, 'Spitfire Grill, The', 'Common duct exploration', 'http://dummyimage.com/167x208.jpg/5fa2dd/ffffff', 0),
(134, 'King of Comedy, The', 'Arthrocentesis', 'http://dummyimage.com/247x199.jpg/cc0000/ffffff', 1),
(135, 'The Opposite Sex', 'Tracheoesoph fistulizat', 'http://dummyimage.com/233x160.bmp/dddddd/000000', 0),
(136, 'Father and Son (Otets i syn)', 'Hepatotomy', 'http://dummyimage.com/195x222.jpg/5fa2dd/ffffff', 1),
(137, 'Whitecoats', 'Open uterine biopsy', 'http://dummyimage.com/197x241.png/cc0000/ffffff', 0),
(138, 'Living Sea, The', 'Antitoxin administra NEC', 'http://dummyimage.com/144x222.png/cc0000/ffffff', 1),
(139, 'Gossip', 'Excise minor les lid NEC', 'http://dummyimage.com/142x148.bmp/5fa2dd/ffffff', 0),
(140, 'Dear Wendy', 'Knee synovectomy', 'http://dummyimage.com/143x107.png/ff4444/ffffff', 1),
(141, 'Mushrooming (Seenelkäik)', 'Saliv glnd dx proc NEC', 'http://dummyimage.com/235x121.jpg/dddddd/000000', 0),
(142, 'Manxman, The', 'Globus pallidus ops', 'http://dummyimage.com/146x166.bmp/ff4444/ffffff', 1),
(143, 'Walking Tall', '2ndry exent cavity graft', 'http://dummyimage.com/115x217.bmp/5fa2dd/ffffff', 0),
(144, 'Tender Hook, The ', 'Neurolyt injec-symp nrv', 'http://dummyimage.com/203x137.jpg/ff4444/ffffff', 1),
(145, 'Lonely Man, The', 'Fitting of hearing aid', 'http://dummyimage.com/173x171.jpg/dddddd/000000', 0),
(146, 'Spitfire Grill, The', 'Common duct exploration', 'http://dummyimage.com/167x208.jpg/5fa2dd/ffffff', 1),
(147, 'King of Comedy, The', 'Arthrocentesis', 'http://dummyimage.com/247x199.jpg/cc0000/ffffff', 0),
(148, 'Scarlet Dove,', 'Pelvic evisceration', 'http://dummyimage.com/165x159.jpg/ff4444/ffffff', 1),
(149, 'Trekkies 2', 'Bone grft to metacar/car', 'http://dummyimage.com/156x235.jpg/cc0000/ffffff', 0),
(150, 'South Central', 'Upper limb endarterectom												', 'article-150.', 1),
(151, 'Teenagers from Outer Space', 'Epilation of skin', 'http://dummyimage.com/244x218.png/ff4444/ffffff', 0),
(152, 'The Opposite Sex', 'Tracheoesoph fistulizat', 'http://dummyimage.com/233x160.bmp/dddddd/000000', 1),
(153, 'Father and Son (Otets i syn)', 'Hepatotomy', 'http://dummyimage.com/195x222.jpg/5fa2dd/ffffff', 0),
(154, 'Whitecoats', 'Open uterine biopsy', 'http://dummyimage.com/197x241.png/cc0000/ffffff', 1),
(155, 'Living Sea, The', 'Antitoxin administra NEC', 'http://dummyimage.com/144x222.png/cc0000/ffffff', 0),
(156, 'Gossip', 'Excise minor les lid NEC', 'http://dummyimage.com/142x148.bmp/5fa2dd/ffffff', 1),
(157, 'Dear Wendy', 'Knee synovectomy', 'http://dummyimage.com/143x107.png/ff4444/ffffff', 0),
(158, 'Mushrooming (Seenelkäik)', 'Saliv glnd dx proc NEC', 'http://dummyimage.com/235x121.jpg/dddddd/000000', 1),
(159, 'Manxman, The', 'Globus pallidus ops', 'http://dummyimage.com/146x166.bmp/ff4444/ffffff', 0),
(160, 'Walking Tall', '2ndry exent cavity graft', 'http://dummyimage.com/115x217.bmp/5fa2dd/ffffff', 1),
(161, 'Tender Hook, The ', 'Neurolyt injec-symp nrv', 'http://dummyimage.com/203x137.jpg/ff4444/ffffff', 0),
(162, 'Lonely Man, The', 'Fitting of hearing aid', 'http://dummyimage.com/173x171.jpg/dddddd/000000', 1),
(163, 'Spitfire Grill, The', 'Common duct exploration', 'http://dummyimage.com/167x208.jpg/5fa2dd/ffffff', 0),
(164, 'King of Comedy, The', 'Arthrocentesis', 'http://dummyimage.com/247x199.jpg/cc0000/ffffff', 1),
(165, 'Scarlet Dove,', 'Pelvic evisceration', 'http://dummyimage.com/165x159.jpg/ff4444/ffffff', 0),
(166, 'Trekkies 2', 'Bone grft to metacar/car', 'http://dummyimage.com/156x235.jpg/cc0000/ffffff', 1),
(167, 'South Central', 'Upper limb endarterectom', 'http://dummyimage.com/123x163.jpg/ff4444/ffffff', 0),
(168, 'Teenagers from Outer Space', 'Epilation of skin', 'http://dummyimage.com/244x218.png/ff4444/ffffff', 1),
(169, 'After the ', 'Tm manipulation NEC', 'http://dummyimage.com/176x118.png/ff4444/ffffff', 0),
(170, 'The Opposite Sex', 'Tracheoesoph fistulizat', 'http://dummyimage.com/233x160.bmp/dddddd/000000', 1),
(171, 'Father and Son (Otets i syn)', 'Hepatotomy', 'http://dummyimage.com/195x222.jpg/5fa2dd/ffffff', 0),
(172, 'Whitecoats', 'Open uterine biopsy', 'http://dummyimage.com/197x241.png/cc0000/ffffff', 1),
(173, 'Living Sea, The', 'Antitoxin administra NEC', 'http://dummyimage.com/144x222.png/cc0000/ffffff', 0),
(174, 'Gossip', 'Excise minor les lid NEC', 'http://dummyimage.com/142x148.bmp/5fa2dd/ffffff', 1),
(175, 'Dear Wendy', 'Knee synovectomy', 'http://dummyimage.com/143x107.png/ff4444/ffffff', 0),
(176, 'Mushrooming (Seenelkäik)', 'Saliv glnd dx proc NEC', 'http://dummyimage.com/235x121.jpg/dddddd/000000', 1),
(177, 'Manxman, The', 'Globus pallidus ops', 'http://dummyimage.com/146x166.bmp/ff4444/ffffff', 0),
(178, 'Walking Tall', '2ndry exent cavity graft', 'http://dummyimage.com/115x217.bmp/5fa2dd/ffffff', 1),
(179, 'Tender Hook, The ', 'Neurolyt injec-symp nrv', 'http://dummyimage.com/203x137.jpg/ff4444/ffffff', 0),
(180, 'Lonely Man, The', 'Fitting of hearing aid', 'http://dummyimage.com/173x171.jpg/dddddd/000000', 1),
(181, 'Spitfire Grill, The', 'Common duct exploration', 'http://dummyimage.com/167x208.jpg/5fa2dd/ffffff', 0),
(182, 'King of Comedy, The', 'Arthrocentesis', 'http://dummyimage.com/247x199.jpg/cc0000/ffffff', 1),
(183, 'Scarlet Dove,', 'Pelvic evisceration', 'http://dummyimage.com/165x159.jpg/ff4444/ffffff', 0),
(184, 'Trekkies 2', 'Bone grft to metacar/car', 'http://dummyimage.com/156x235.jpg/cc0000/ffffff', 1),
(185, 'South Central', 'Upper limb endarterectom', 'http://dummyimage.com/123x163.jpg/ff4444/ffffff', 0),
(186, 'Teenagers from Outer Space', 'Epilation of skin', 'http://dummyimage.com/244x218.png/ff4444/ffffff', 1),
(187, 'After the ', 'Tm manipulation NEC', 'http://dummyimage.com/176x118.png/ff4444/ffffff', 0),
(188, 'Porco Rosso ', 'Tot brch extrac w forcep', 'http://dummyimage.com/107x146.bmp/cc0000/ffffff', 1),
(189, 'Flawless', 'Music therapy', 'http://dummyimage.com/216x247.jpg/dddddd/000000', 0),
(190, 'Bowling for Columbine', 'Remove corneal implant', 'http://dummyimage.com/184x236.jpg/cc0000/ffffff', 1),
(191, 'Great Gatsby, The', 'Conjunctival biopsy', 'http://dummyimage.com/182x235.bmp/dddddd/000000', 0),
(192, 'This Time Around', 'Amputation through foot', 'http://dummyimage.com/238x149.jpg/dddddd/000000', 1),
(193, 'Last Days', 'Excision acoustc neuroma', 'http://dummyimage.com/103x191.bmp/dddddd/000000', 0),
(194, 'Make the Yuletide Gay', 'Stereo radiosurgery NEC', 'http://dummyimage.com/250x200.jpg/5fa2dd/ffffff', 1),
(195, 'The Opposite Sex', 'Tracheoesoph fistulizat', 'http://dummyimage.com/233x160.bmp/dddddd/000000', 0),
(196, 'Father and Son (Otets i syn)', 'Hepatotomy', 'http://dummyimage.com/195x222.jpg/5fa2dd/ffffff', 1),
(197, 'Whitecoats', 'Open uterine biopsy', 'http://dummyimage.com/197x241.png/cc0000/ffffff', 0),
(198, 'Living Sea, The', 'Antitoxin administra NEC', 'http://dummyimage.com/144x222.png/cc0000/ffffff', 1),
(199, 'Gossip', 'Excise minor les lid NEC', 'http://dummyimage.com/142x148.bmp/5fa2dd/ffffff', 0),
(200, 'Dear Wendy', 'Knee synovectomy', 'http://dummyimage.com/143x107.png/ff4444/ffffff', 1),
(201, 'Mushrooming (Seenelkäik)', 'Saliv glnd dx proc NEC', 'http://dummyimage.com/235x121.jpg/dddddd/000000', 0),
(202, 'Manxman, The', 'Globus pallidus ops', 'http://dummyimage.com/146x166.bmp/ff4444/ffffff', 1),
(203, 'Walking Tall', '2ndry exent cavity graft', 'http://dummyimage.com/115x217.bmp/5fa2dd/ffffff', 0),
(204, 'Tender Hook, The ', 'Neurolyt injec-symp nrv', 'http://dummyimage.com/203x137.jpg/ff4444/ffffff', 1),
(205, 'Lonely Man, The', 'Fitting of hearing aid', 'http://dummyimage.com/173x171.jpg/dddddd/000000', 0),
(206, '', '										', 'article-206.', 1),
(207, 'King of Comedy, The', 'Arthrocentesis', 'http://dummyimage.com/247x199.jpg/cc0000/ffffff', 0),
(208, 'Scarlet Dove,', 'Pelvic evisceration', 'http://dummyimage.com/165x159.jpg/ff4444/ffffff', 1),
(209, 'Trekkies 2', 'Bone grft to metacar/car', 'http://dummyimage.com/156x235.jpg/cc0000/ffffff', 0),
(210, 'South Central', 'Upper limb endarterectom', 'http://dummyimage.com/123x163.jpg/ff4444/ffffff', 1),
(211, 'Teenagers from Outer Space', 'Epilation of skin', 'http://dummyimage.com/244x218.png/ff4444/ffffff', 0),
(212, 'After the ', 'Tm manipulation NEC', 'http://dummyimage.com/176x118.png/ff4444/ffffff', 1),
(213, 'Porco Rosso ', 'Tot brch extrac w forcep', 'http://dummyimage.com/107x146.bmp/cc0000/ffffff', 0),
(214, 'Flawless', 'Music therapy', 'http://dummyimage.com/216x247.jpg/dddddd/000000', 1),
(215, 'Bowling for Columbine', 'Remove corneal implant', 'http://dummyimage.com/184x236.jpg/cc0000/ffffff', 0),
(216, 'Great Gatsby, The', 'Conjunctival biopsy', 'http://dummyimage.com/182x235.bmp/dddddd/000000', 1),
(217, 'This Time Around', 'Amputation through foot', 'http://dummyimage.com/238x149.jpg/dddddd/000000', 0),
(218, 'Last Days', 'Excision acoustc neuroma', 'http://dummyimage.com/103x191.bmp/dddddd/000000', 1),
(219, 'Make the Yuletide Gay', 'Stereo radiosurgery NEC', 'http://dummyimage.com/250x200.jpg/5fa2dd/ffffff', 0),
(220, ' Became Mixed-Up Zombies', 'Repl/rep thr unt tot hrt', 'http://dummyimage.com/130x167.png/5fa2dd/ffffff', 1),
(221, 'Rabid', 'Remov thor ther dev NEC', 'http://dummyimage.com/189x231.png/5fa2dd/ffffff', 0),
(222, 'The Opposite Sex', 'Tracheoesoph fistulizat', 'http://dummyimage.com/233x160.bmp/dddddd/000000', 1),
(223, 'Father and Son (Otets i syn)', 'Hepatotomy', 'http://dummyimage.com/195x222.jpg/5fa2dd/ffffff', 0),
(224, 'Whitecoats', 'Open uterine biopsy', 'http://dummyimage.com/197x241.png/cc0000/ffffff', 1),
(225, 'Living Sea, The', 'Antitoxin administra NEC', 'http://dummyimage.com/144x222.png/cc0000/ffffff', 0),
(226, 'Gossip', 'Excise minor les lid NEC', 'http://dummyimage.com/142x148.bmp/5fa2dd/ffffff', 1),
(227, 'Dear Wendy', 'Knee synovectomy', 'http://dummyimage.com/143x107.png/ff4444/ffffff', 0),
(228, 'Mushrooming (Seenelkäik)', 'Saliv glnd dx proc NEC', 'http://dummyimage.com/235x121.jpg/dddddd/000000', 1),
(229, 'Manxman, The', 'Globus pallidus ops', 'http://dummyimage.com/146x166.bmp/ff4444/ffffff', 0),
(230, 'Walking Tall', '2ndry exent cavity graft', 'http://dummyimage.com/115x217.bmp/5fa2dd/ffffff', 1),
(231, 'Tender Hook, The ', 'Neurolyt injec-symp nrv', 'http://dummyimage.com/203x137.jpg/ff4444/ffffff', 0),
(232, 'Lonely Man, The', 'Fitting of hearing aid', 'http://dummyimage.com/173x171.jpg/dddddd/000000', 1),
(233, 'Spitfire Grill, The', 'Common duct exploration', 'http://dummyimage.com/167x208.jpg/5fa2dd/ffffff', 0),
(234, 'King of Comedy, The', 'Arthrocentesis', 'http://dummyimage.com/247x199.jpg/cc0000/ffffff', 1),
(235, 'Scarlet Dove,', 'Pelvic evisceration', 'http://dummyimage.com/165x159.jpg/ff4444/ffffff', 0),
(236, 'Trekkies 2', 'Bone grft to metacar/car', 'http://dummyimage.com/156x235.jpg/cc0000/ffffff', 1),
(237, 'South Central', 'Upper limb endarterectom', 'http://dummyimage.com/123x163.jpg/ff4444/ffffff', 0),
(238, 'Teenagers from Outer Space', 'Epilation of skin', 'http://dummyimage.com/244x218.png/ff4444/ffffff', 1),
(239, 'After the ', 'Tm manipulation NEC', 'http://dummyimage.com/176x118.png/ff4444/ffffff', 0),
(240, 'Porco Rosso ', 'Tot brch extrac w forcep', 'http://dummyimage.com/107x146.bmp/cc0000/ffffff', 1),
(241, 'Flawless', 'Music therapy', 'http://dummyimage.com/216x247.jpg/dddddd/000000', 0),
(242, 'Bowling for Columbine', 'Remove corneal implant', 'http://dummyimage.com/184x236.jpg/cc0000/ffffff', 1),
(243, 'Great Gatsby, The', 'Conjunctival biopsy', 'http://dummyimage.com/182x235.bmp/dddddd/000000', 0),
(244, 'This Time Around', 'Amputation through foot', 'http://dummyimage.com/238x149.jpg/dddddd/000000', 1),
(245, 'Last Days', 'Excision acoustc neuroma', 'http://dummyimage.com/103x191.bmp/dddddd/000000', 0),
(246, 'Make the Yuletide Gay', 'Stereo radiosurgery NEC', 'http://dummyimage.com/250x200.jpg/5fa2dd/ffffff', 1),
(247, ' Became Mixed-Up Zombies', 'Repl/rep thr unt tot hrt', 'http://dummyimage.com/130x167.png/5fa2dd/ffffff', 0),
(248, 'Rabid', 'Remov thor ther dev NEC', 'http://dummyimage.com/189x231.png/5fa2dd/ffffff', 1),
(249, 'Age of the Medici,  ', 'Imp epiretinal prosth', 'http://dummyimage.com/187x112.bmp/ff4444/ffffff', 0),
(250, 'Matei', 'Article content\r\n												', 'article-250.jpg', 1),
(251, 'Matei', 'Article content\r\n												', 'article-251.jpg', 1),
(252, '', '\r\n												', 'article-252.', 1),
(253, 'Matei2520', 'Article content\r\n																								', 'article-253.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categorii`
--

CREATE TABLE `categorii` (
  `id` int(11) NOT NULL,
  `nume` varchar(60) NOT NULL,
  `descriere` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorii`
--

INSERT INTO `categorii` (`id`, `nume`, `descriere`) VALUES
(1, 'literatura', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(2, 'SF', 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(3, 'Police', 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(4, 'movies', 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(5, 'religion', 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(6, 'explore', 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(7, 'nature', 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(8, 'kids', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(9, 'cooking', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(10, 'music', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nume` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nume`, `email`, `password`, `role`) VALUES
(1, 'Wynter', '', '', ''),
(2, 'Holly', 'admin@email.com', 'asdasd', ''),
(3, 'Sonia', '', '', ''),
(4, 'Tiger', '', '', ''),
(5, 'Denton', '', '', ''),
(6, 'Carissa', '', '', ''),
(7, 'Jacqueline', '', '', ''),
(8, 'Baxter', '', '', ''),
(9, 'Bevis', '', '', ''),
(10, 'Anthony', '', '', ''),
(11, 'Fay', '', '', ''),
(12, 'Joseph', '', '', ''),
(13, 'Avram', '', '', ''),
(14, 'Rahim', '', '', ''),
(15, 'Ryder', '', '', ''),
(16, 'Harper', '', '', ''),
(17, 'Alana', '', '', ''),
(18, 'Carol', '', '', ''),
(19, 'Harrison', '', '', ''),
(20, 'Justin', '', '', ''),
(21, 'Teagan', '', '', ''),
(22, 'Drew', '', '', ''),
(23, 'Shelly', '', '', ''),
(24, 'Noah', '', '', ''),
(25, 'Yasir', '', '', ''),
(26, 'Dale', '', '', ''),
(27, 'Kristen', '', '', ''),
(28, 'Laura', '', '', ''),
(29, 'Lynn', '', '', ''),
(30, 'Piper', '', '', ''),
(31, 'Britanni', '', '', ''),
(32, 'Hamish', '', '', ''),
(33, 'Garth', '', '', ''),
(34, 'Orlando', '', '', ''),
(35, 'Ezra', '', '', ''),
(36, 'Timothy', '', '', ''),
(37, 'Gary', '', '', ''),
(38, 'Hamish', '', '', ''),
(39, 'Cameron', '', '', ''),
(40, 'Echo', '', '', ''),
(41, 'Palmer', '', '', ''),
(42, 'Pamela', '', '', ''),
(43, 'Samantha', '', '', ''),
(44, 'Abbot', '', '', ''),
(45, 'Zane', '', '', ''),
(46, 'Camilla', '', '', ''),
(47, 'Hall', '', '', ''),
(48, 'Orli', '', '', ''),
(49, 'Drake', '', '', ''),
(50, 'Elijah', '', '', ''),
(51, 'Halla', '', '', ''),
(52, 'Kirestin', '', '', ''),
(53, 'Tanisha', '', '', ''),
(54, 'Tanek', '', '', ''),
(55, 'Kuame', '', '', ''),
(56, 'Rigel', '', '', ''),
(57, 'Nomlanga', '', '', ''),
(58, 'Jemima', '', '', ''),
(59, 'Sybil', '', '', ''),
(60, 'Dexter', '', '', ''),
(61, 'Wade', '', '', ''),
(62, 'Nayda', '', '', ''),
(63, 'Eric', '', '', ''),
(64, 'Hiroko', '', '', ''),
(65, 'Fritz', '', '', ''),
(66, 'India', '', '', ''),
(67, 'Kyla', '', '', ''),
(68, 'Denton', '', '', ''),
(69, 'Naomi', '', '', ''),
(70, 'Robert', '', '', ''),
(71, 'Steven', '', '', ''),
(72, 'Zeus', '', '', ''),
(73, 'Kyra', '', '', ''),
(74, 'Ivory', '', '', ''),
(75, 'Timothy', '', '', ''),
(76, 'Brielle', '', '', ''),
(77, 'Daniel', '', '', ''),
(78, 'Seth', '', '', ''),
(79, 'Knox', '', '', ''),
(80, 'Audrey', '', '', ''),
(81, 'Flavia', '', '', ''),
(82, 'Ralph', '', '', ''),
(83, 'Hilel', '', '', ''),
(84, 'Montana', '', '', ''),
(85, 'Madison', '', '', ''),
(86, 'Aurelia', '', '', ''),
(87, 'Clayton', '', '', ''),
(88, 'Hashim', '', '', ''),
(89, 'Hamilton', '', '', ''),
(90, 'Regan', '', '', ''),
(91, 'Jemima', '', '', ''),
(92, 'Xander', '', '', ''),
(93, 'Louis', '', '', ''),
(94, 'Deanna', '', '', ''),
(95, 'Kirk', '', '', ''),
(96, 'Lionel', '', '', ''),
(97, 'Victoria', '', '', ''),
(98, 'Cynthia', '', '', ''),
(99, 'Regan', '', '', ''),
(100, 'Suki', '', '', ''),
(124, 'Matei', 'vmatei@y.com', 'bbd734cbeae2fe0d7b7b3d961c10223d6dfbd1b4bb902c05a856d448687f1de191516fc9e301a3d01cf5139de12d6dae584444212c6e17ea30791b38812d80a8', ''),
(125, 'Matei7', 'vm@email.com', '4d1279d9b4c4be91ecce67186430dcd3916a0c471196b8f9e828166743683af958b378d63eabacbd55983e1bb1ec9dfaaf977b54c25618321ce64778961e33b7', 'user'),
(126, 'aaa', 'admi22n@email.com', '0cde631960d279c18f8617e3b96184aaf91841d134520e58af4147599d3351c3e153ffef9f18b0a625a7b4f44762ec503ec8ba22febe41483b68478da7c9f541', ''),
(127, 'Matei', 'vmatei@yahoo.com', '0cde631960d279c18f8617e3b96184aaf91841d134520e58af4147599d3351c3e153ffef9f18b0a625a7b4f44762ec503ec8ba22febe41483b68478da7c9f541', ''),
(128, 'Matei7', 'matei@email.com', '4d1279d9b4c4be91ecce67186430dcd3916a0c471196b8f9e828166743683af958b378d63eabacbd55983e1bb1ec9dfaaf977b54c25618321ce64778961e33b7', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art2comm`
--
ALTER TABLE `art2comm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idArticol` (`idArticol`);

--
-- Indexes for table `articol2autori`
--
ALTER TABLE `articol2autori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAutor` (`idAutor`),
  ADD KEY `articol2autori_ibfk_1` (`idArticol`);

--
-- Indexes for table `articol2categorii`
--
ALTER TABLE `articol2categorii`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idArticol` (`idArticol`),
  ADD KEY `idCategorie` (`idCategorie`);

--
-- Indexes for table `articole`
--
ALTER TABLE `articole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorii`
--
ALTER TABLE `categorii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `art2comm`
--
ALTER TABLE `art2comm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `articol2autori`
--
ALTER TABLE `articol2autori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `articol2categorii`
--
ALTER TABLE `articol2categorii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;

--
-- AUTO_INCREMENT for table `articole`
--
ALTER TABLE `articole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `categorii`
--
ALTER TABLE `categorii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articol2autori`
--
ALTER TABLE `articol2autori`
  ADD CONSTRAINT `articol2autori_ibfk_1` FOREIGN KEY (`idArticol`) REFERENCES `articole` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articol2autori_ibfk_2` FOREIGN KEY (`idAutor`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `articol2categorii`
--
ALTER TABLE `articol2categorii`
  ADD CONSTRAINT `articol2categorii_ibfk_1` FOREIGN KEY (`idArticol`) REFERENCES `articole` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articol2categorii_ibfk_2` FOREIGN KEY (`idCategorie`) REFERENCES `categorii` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
