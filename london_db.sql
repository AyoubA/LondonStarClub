-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2014 at 12:44 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `london_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(3) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `addressLine1` varchar(30) NOT NULL,
  `addressLine2` varchar(30) NOT NULL,
  `addressCity` varchar(15) NOT NULL,
  `addressPostal` varchar(6) NOT NULL,
  `password` varchar(32) NOT NULL,
  `previousbuys` int(11) NOT NULL,
  `customertypeID` int(11) NOT NULL COMMENT 'type of customer, regular or corporate',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `typeID` int(11) NOT NULL COMMENT 'typeID will contain what type of event it is, corporate, student or mystery',
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` text NOT NULL,
  `pricemale` decimal(10,0) NOT NULL,
  `pricefemale` decimal(10,0) NOT NULL,
  `memberprice` decimal(10,0) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
