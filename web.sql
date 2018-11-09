-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2018 at 04:45 PM
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
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `Id_category` int(11) NOT NULL,
  `namecat` varchar(30) NOT NULL,
  `filter` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `Id_post` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  `Tag` varchar(30) NOT NULL,
  `uniqueurl` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Label` varchar(30) NOT NULL,
  `textcontent` varchar(30) NOT NULL,
  `referencepost` varchar(30) NOT NULL,
  `Id_category` int(30) NOT NULL,
  PRIMARY KEY (`Id_post`),
  KEY `Id_user` (`Id_user`),
  KEY `Id_category` (`Id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `Id_img` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  `Id_category` int(11) NOT NULL,
  `uniqueurl` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_img`),
  KEY `Id_img` (`Id_img`),
  KEY `Id_user` (`Id_user`),
  KEY `Id_category` (`Id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `secret_ans` varchar(30) NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `Facebook` varchar(30) NOT NULL,
  `Instagram` varchar(30) NOT NULL,
  `Deviantart` varchar(30) NOT NULL,
  `Twitter` varchar(30) NOT NULL,
  `Twitch` varchar(30) NOT NULL,
  `birthday` varchar(30) NOT NULL,
  `Patreon` varchar(30) NOT NULL,
  `kofi` varchar(30) NOT NULL,
  `Paypal` varchar(30) NOT NULL,
  `Description` varchar(30) NOT NULL,
  `interest_cat` varchar(30) NOT NULL,
  `labels` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `Id_category` int(11) NOT NULL,
  `weburl` varchar(30) NOT NULL,
  `gallery` varchar(30) NOT NULL,
  `ID_gallery` int(11) NOT NULL,
  `socialmedia` varchar(30) NOT NULL,
  `followers` varchar(30) NOT NULL,
  `following` varchar(30) NOT NULL,
  `ID_task` int(11) NOT NULL,
  PRIMARY KEY (`Id_user`),
  KEY `Id_user` (`Id_user`),
  KEY `Id_category` (`Id_category`),
  KEY `ID_gallery` (`ID_gallery`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `user` (`Id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `user` (`Id_user`),
  ADD CONSTRAINT `gallery_ibfk_2` FOREIGN KEY (`Id_category`) REFERENCES `categories` (`Id_category`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Id_category`) REFERENCES `categories` (`Id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
