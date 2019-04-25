-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2018 at 06:12 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `humanright`
--
CREATE DATABASE IF NOT EXISTS `humanright` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `humanright`;

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

DROP TABLE IF EXISTS `complain`;
CREATE TABLE IF NOT EXISTS `complain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Voilation` text NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `name` text NOT NULL,
  `age` int(11) NOT NULL,
  `photo` text NOT NULL,
  `contact` int(11) NOT NULL,
  `action` text NOT NULL,
  `progress` varchar(50) NOT NULL DEFAULT 'not yet started',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `Voilation`, `address`, `description`, `date`, `name`, `age`, `photo`, `contact`, `action`, `progress`) VALUES
(1, 'The right to life', 'sd', 'sd', '2018-04-04', 'sdg', 12, 'IMG-20180105-WA0005.jpg', 545667, 'urgent', 'not yet started'),
(2, 'The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex', 'vfzbzx', 'fvfvcv ', '0006-07-19', 'gjhg', 76, '', 5465446, 'urgent', 'not yet started'),
(3, 'The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex', 'kjgjadgk', 'jkskg', '0007-07-18', 'kanchan', 20, '', 8767, 'urgent', 'not yet started'),
(4, 'The right to life', 'ersdf', 'guu', '2018-03-12', 'adsf', 4, '', 5478, 'urgent', 'urgent'),
(5, 'The right to life', 'ersdf', 'guu', '2018-03-12', 'adsf', 4, '', 5478, 'urgent', 'urgent'),
(6, 'The right to live your life free of discrimination', 'y', 'tfu', '5668-03-19', 'r', 4, '', 54789, 'urgent', 'urgent'),
(7, 'The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs', 'kjjkgjgjh', 'kjbkvjhjh', '0004-04-18', 'kanchan', 20, '', 87877867, '', 'not yet started'),
(8, 'The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs', 'kljbl', 'lkhjjkbj', '0007-04-18', 'kanchan', 20, '', 87678, 'urgent', 'not yet started'),
(9, 'The right to liberty and freedom,The right to freedom of speech', 'adknad,n', 'kjbkvjhjh', '0004-04-18', 'kanchan', 20, '', 87678, 'urgent', 'urgent'),
(10, 'The right to life', 'dffdbd', 'dbdbgg', '0004-04-18', 'koko', 20, '', 45454, '', ''),
(11, 'The right to liberty and freedom,The right to freedom of speech', 'dvvdvs', 'dvvd', '0006-04-18', 'meena', 22, '', 9889, 'urgent', 'urgent'),
(12, 'The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex', 'hjjhjjh', ',m,nbvhg', '0002-02-18', 'sonu', 8, '', 877, 'urgent', 'urgent'),
(13, 'The right to life', 'kazipet', 'Acid Attack', '0004-04-18', 'kanchan', 20, '', 3454334, 'urgent', 'urgent'),
(14, '', 'ws', 'ee', '2018-04-12', 'w', 2, '', 12, 'urgent', ''),
(15, 'The right to life', 'wx', 's', '2018-03-31', 's', 1, '', 12, 'urgent', ''),
(16, 'The right to life', 'wx', 's', '2018-03-31', 's', 1, '', 12, 'urgent', 'urgent'),
(17, 'The right to life', 'wf', 'ww', '2018-04-25', 'e', 12, '', 133, 'urgent', 'urgent'),
(18, 'The right to life', 'wf', 'ww', '2018-04-25', 'e', 12, '', 133, 'urgent', 'urgent'),
(19, 'The right to life', 'wf', 'ww', '2018-04-25', 'e', 12, '', 133, 'urgent', 'urgent'),
(20, 'The right to life', 'wf', 'ww', '2018-04-25', 'e', 12, '', 133, 'urgent', 'urgent');

-- --------------------------------------------------------

--
-- Table structure for table `concern`
--

DROP TABLE IF EXISTS `concern`;
CREATE TABLE IF NOT EXISTS `concern` (
  `concerns` text NOT NULL,
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concern`
--

INSERT INTO `concern` (`concerns`, `aid`) VALUES
('The right to life', 1),
('The right to liberty and freedom,The right to freedom of speech', 2),
('The right to life', 3),
('The right to liberty and freedom,The right to freedom of speech', 4),
('The right to life', 5),
('The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs', 6),
('The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex', 7);

-- --------------------------------------------------------

--
-- Table structure for table `imagepost`
--

DROP TABLE IF EXISTS `imagepost`;
CREATE TABLE IF NOT EXISTS `imagepost` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagename` text NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `newsid` int(11) NOT NULL,
  `news` varchar(500) NOT NULL,
  PRIMARY KEY (`newsid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newslikes`
--

DROP TABLE IF EXISTS `newslikes`;
CREATE TABLE IF NOT EXISTS `newslikes` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `news` text NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

DROP TABLE IF EXISTS `ngo`;
CREATE TABLE IF NOT EXISTS `ngo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` longtext NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `logo` text NOT NULL,
  `proofid` int(11) NOT NULL,
  `foundedin` varchar(10) NOT NULL,
  `concern1` text NOT NULL,
  `concern2` text NOT NULL,
  `concern3` text NOT NULL,
  `concern4` text NOT NULL,
  `concern5` text NOT NULL,
  `concern6` text NOT NULL,
  PRIMARY KEY (`proofid`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`id`, `name`, `contact`, `email`, `address`, `city`, `state`, `logo`, `proofid`, `foundedin`, `concern1`, `concern2`, `concern3`, `concern4`, `concern5`, `concern6`) VALUES
(1, 'helper', 1234, 'd@g.com', 'w', 'w', 'w', 'C:\\wamp64\\www\\humanright\\images\\ngo.jpg', 1, '1234-12-3', '1', '0', '0', '0', '0', '0'),
(2, 'u', 77, 'te@g/in', 't', 't', 't', 'IMG-20180116-WA0003.jpg', 77, 't', '1', '0', '0', '0', '0', '0'),
(3, 'h', 88, 'j@g.com', 'j', 'jjj', 'j', '', 88, 'j', '4', '3', '2', '0', '0', '0'),
(4, 'sf', 5767, 'j', 'k', 'j', 'j', 'IMG-20171223-WA0000.jpg', 97, 'nn', '1', '0', '0', '0', '0', '0'),
(5, 'f', 777, 'f', 'yi', 't', 'yyy', 'IMG-20180105-WA0005.jpg', 7007, 'f', 'The right to be free from torture,slavery', '0', '0', '0', '0', '0'),
(6, 'ss', 979, 'u@g.com', 'vjk', 'iu', 'i', '28378886_1489149461197522_2414879976381116533_n.jpg', 7543, 'uu', '1', '0', '0', '0', '0', '0'),
(7, 'k', 9006, 'f@g.com', 'bjj', 'bbk', 'hih', 'IMG-20180116-WA0021.jpg', 8790, 'j', '1', '4', '0', '0', '0', '0'),
(8, 'y', 875, 'y', 'yy', 'y', 'y', 'IMG-20180116-WA0014.jpg', 9869, 'y', '1', '0', '0', '0', '0', '0'),
(9, 'asss', 76, 'u@e.com', 'i', 'jgg', 'u', 'IMG-20180116-WA0061.jpg', 68005, 'ff', '1', '6', '0', '0', '0', '0'),
(10, 'tr', 66, '46535', 'u', 'uu', 'r', 'IMG-20180116-WA0034.jpg', 765400, 'r', 'The right to life', 'The right to be free from prejudice on the basis of race, gender, national origin, color, age or sex', 'The right to live your life free of discrimination', 'The right to liberty and freedom and The right to freedom of speech', 'The right to freely exercise your religion and practice your religious beliefs without fear of being prosecuted for your beliefs', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `ngocomplain`
--

DROP TABLE IF EXISTS `ngocomplain`;
CREATE TABLE IF NOT EXISTS `ngocomplain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complainid` int(100) NOT NULL,
  `progress` text NOT NULL,
  `ngo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_concern`
--

DROP TABLE IF EXISTS `ngo_concern`;
CREATE TABLE IF NOT EXISTS `ngo_concern` (
  `ngo_id` int(20) NOT NULL,
  `checkbox_id` int(20) NOT NULL,
  PRIMARY KEY (`ngo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `messenger_id` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email_address` text NOT NULL,
  `phone_number` text NOT NULL,
  `user_type` text NOT NULL,
  `gender` text NOT NULL,
  `registration_date` date NOT NULL,
  `source` text NOT NULL,
  `fb_profile_pic_url` text NOT NULL,
  UNIQUE KEY `messenger_id` (`messenger_id`(20))
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vedio`
--

DROP TABLE IF EXISTS `vedio`;
CREATE TABLE IF NOT EXISTS `vedio` (
  `username` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vedioimage`
--

DROP TABLE IF EXISTS `vedioimage`;
CREATE TABLE IF NOT EXISTS `vedioimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` text NOT NULL,
  `fileextension` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vedioimage`
--

INSERT INTO `vedioimage` (`id`, `filename`, `fileextension`, `description`) VALUES
(40, '58a53f04f99dd116a5153df7057c9d77.mp4', 'mp4', 'dsf'),
(41, '58a53f04f99dd116a5153df7057c9d77.mp4', 'mp4', 'vgdfg'),
(42, '58a53f04f99dd116a5153df7057c9d77.mp4', 'mp4', 'dsfdfg'),
(43, '58a53f04f99dd116a5153df7057c9d77.mp4', 'mp4', 'touerot'),
(44, '58a53f04f99dd116a5153df7057c9d77.mp4', 'mp4', 'kdnfvdk'),
(45, '58a53f04f99dd116a5153df7057c9d77.mp4', 'mp4', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
CREATE TABLE IF NOT EXISTS `volunteer` (
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `street` longtext NOT NULL,
  `city` mediumtext NOT NULL,
  `state` mediumtext NOT NULL,
  `photo` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`username`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`name`, `email`, `contact`, `street`, `city`, `state`, `photo`, `username`, `password`, `id`) VALUES
('hh', 'h', 88, '', 'h', 'h', 'anime.jpg', '', '', 5),
('w', 'j', 12, 'j', 'w', 's', 'BackDrop Poster.png', '2', '2', 3),
('d', 'd', 45, 'd', 'd', 'd', '', 'd', 'd', 28),
('Divya Chauhan', 'divyachauhan661@gmail.com', 0, 'nit campus', 'Warangal', 'Telangana', '', 'divya', 'divya', 1),
('ff', 'f', 679, 'f', 'ff', 'f', '', 'f', '6', 29),
('i', 'i', 9, 'i', 'k', 'k', 'anime.jpg', 'i', 'j', 4),
('j', 'j', 987689, 'j', 'j', 'j', 'IMG-20180120-WA0000.jpg', 'j', 'j', 7),
('j', 'j', 96, 'j', 'j', 'j', '', 'jJ', '8', 8),
('kanchan', 'kk@jj.com', 6875877, 'kazipet', 'telangana', 'AndhraPradesh', 'barimage.bmp', 'kanchu', 'kanchan', 30),
('o', 'o', 7089, 'o', 'o', 'y', '', 'oo', 'o', 14),
('u', 'u', 98, 'u', 'u', 'u', '', 'u', '070', 19),
('ddxx', 'xc', 133, 'de', 'x', 'x', 'NGO.jpg', 'username', 'password', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vwork`
--

DROP TABLE IF EXISTS `vwork`;
CREATE TABLE IF NOT EXISTS `vwork` (
  `role` varchar(100) NOT NULL,
  `location` text NOT NULL,
  `date` date NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(11) NOT NULL,
  `photo` text NOT NULL,
  `help` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vwork`
--

INSERT INTO `vwork` (`role`, `location`, `date`, `password`, `username`, `photo`, `help`) VALUES
('social service', 'warangal', '2018-03-08', 'divya', 'divya', 'loginImage.jpg', 'children'),
('g', 'd', '2018-03-14', 'w', 'w', 'IMG-20171225-WA0003.jpg', 'd'),
('s', 's', '2018-03-16', 'divya', 'divya', 'NGO.jpg', 'd'),
('bdjke', 'dhjek', '1209-09-09', 'divya', 'divya', '17523167_448772262130302_886319884747873271_n (2).jpg', 'q`'),
('helper', 'kazipet', '0007-04-18', 'kanchan', 'kanchu', '', 'to priyanka');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
