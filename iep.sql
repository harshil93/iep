-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2013 at 07:52 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iep`
--

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE IF NOT EXISTS `ebook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `pages` int(4) NOT NULL,
  `size` float NOT NULL,
  `downloads` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`id`, `name`, `author`, `category`, `isbn`, `pages`, `size`, `downloads`) VALUES
(2, '$name', '$author', '$category', '$isbn', 1, 0, 1),
(3, 'ad', 'asd', 'comic', '12', 12, 1, 0),
(4, 'ad', 'asd', 'comic', '', 12, 1, 0),
(5, 'ad', 'asd', 'comic', '12', 12, 1, 0),
(6, 'ad', 'asd', 'comic', '345435', 345, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
