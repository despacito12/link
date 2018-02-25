-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2017 at 03:59 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cellphone`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `entry_no` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(40) DEFAULT NULL,
  `model` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`entry_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`entry_no`, `brand`, `model`) VALUES
(1, 'Samsung', 'J1'),
(4, 'Apple', 'iPhone5s'),
(5, 'SKK Mobile', 'Chronos'),
(6, 'Oppo', 'F3Plus1EqualsFour'),
(7, 'Apple', 'iPhone7PrimeEdgeS ^_^'),
(8, 'Nokia', '5110i'),
(9, 'Samsung', 'J & J'),
(10, 'Oppo', 'Neo 7');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
