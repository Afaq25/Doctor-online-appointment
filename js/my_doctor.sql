-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2017 at 07:31 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc_info`
--

CREATE TABLE IF NOT EXISTS `doc_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `specialty` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `doc_info`
--

INSERT INTO `doc_info` (`id`, `f_name`, `l_name`, `email`, `password`, `phone`, `specialty`, `address`, `gender`) VALUES
(1, 'afaq', 'khan', 'afaqzai@gmail.com', 'afaq', '03326967721', 'Emergency Medicine', 'people colony no 2 ', 'Male'),
(2, 'muaz', 'khan', 'muaz@gmail.com', 'pakistan', '03007231682', 'Cardiology', 'people colony no 2 ', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `pat_info`
--

CREATE TABLE IF NOT EXISTS `pat_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `email` int(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `Diseases` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pat_info`
--

INSERT INTO `pat_info` (`id`, `f_name`, `l_name`, `email`, `password`, `phone`, `Diseases`, `address`, `gender`) VALUES
(1, 'afaq', 'khan', 0, 'khan', '03007231682', 'Diabetes', 'D ground fsd', 'Male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
