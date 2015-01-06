-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2014 at 08:14 AM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eshopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(233) NOT NULL DEFAULT '0',
  `pname` varchar(233) DEFAULT NULL,
  `brand` varchar(233) DEFAULT NULL,
  `price` varchar(233) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `brand`, `price`) VALUES
(1001, 'tshirt', 'puma', 'RS.450'),
(1002, 'tshirt', 'D&G', 'RS.766'),
(1003, 'tshirt', 'puma', 'RS.450'),
(1004, 'tshirt', 'Reebok', 'RS.546'),
(1005, 'tshirt', 'lilliput', 'RS.720'),
(1006, 'tshirt', 'Reebok', 'RS.643'),
(2001, 'dress', 'paneeri', 'RS.1000'),
(2002, 'dress', 'paneeri', 'RS.1500'),
(2003, 'dress', 'zara', 'RS.1200'),
(2004, 'dress', 'garden', 'RS.1300'),
(2005, 'dress', 'garden', 'RS.900'),
(2006, 'dress', 'Fashion', 'RS.600'),
(3001, 'cloth', 'lillyput', 'RS.500'),
(3002, 'cloth', 'D&G', 'RS.700'),
(3003, 'cloth', 'D&G', 'RS.450'),
(3004, 'cloth', 'Fashion', 'RS.1000'),
(3005, 'cloth', 'Fashion', 'RS.750'),
(3006, 'cloth', 'lillyput', 'RS.500');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(23) NOT NULL AUTO_INCREMENT,
  `username` varchar(233) DEFAULT NULL,
  `password` varchar(244) DEFAULT NULL,
  `email` varchar(233) DEFAULT NULL,
  `mobile` int(233) DEFAULT NULL,
  `address` varchar(233) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `username`, `password`, `email`, `mobile`, `address`) VALUES
(1, 'armash', 'armash', 'talktoarmash@gmail.com', 2147483647, 'B/02,Rahat apt.mumbra');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
