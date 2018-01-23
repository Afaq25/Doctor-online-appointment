-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 25, 2017 at 10:36 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(0, 'afaq@gmail.com', 'khan');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date_time` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `Patient_name` text NOT NULL,
  `pat_phone` varchar(30) NOT NULL,
  `clinic` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `date_time` (`date_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `date_time`, `name`, `email`, `Patient_name`, `pat_phone`, `clinic`) VALUES
(37, '2017/10/23 Â  9:30 to 10:00 AM1', 'afaq', 'afaqzai@gmail.com', '', '', 'people colony no 2'),
(40, '2017/10/23 Â  11:00 to 11:30 AM1', 'afaq', 'afaqzai@gmail.com', '', '', 'people colony no 2'),
(47, '2017/10/25 Â  9:00 to 9:30 AM5', 'shahid', 'khan@gmail.com', 'hamza dasgir', '0300087654316', 'tACH town FSD'),
(49, '2017/10/25 Â  9:30 to 10:00 AM4', '', '', '', '', ''),
(51, '2017/10/25 Â  10:00 to 10:30 AM7', '', '', '', '', ''),
(53, '2017/10/25 Â  10:00 to 10:30 AM16', '', '', '', '', ''),
(57, '2017/10/25 Â  9:30 to 10:00 AM16', 'danish', 'danish@gmail.com', 'umair', '0332585677', 'Small d ground'),
(59, '2017/10/25 Â  10:30 to 11:00 AM16', 'danish', 'danish@gmail.com', 'umair', '0332585677', 'Small d ground');

-- --------------------------------------------------------

--
-- Table structure for table `comapny_info`
--

CREATE TABLE IF NOT EXISTS `comapny_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `company` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `comapny_info`
--

INSERT INTO `comapny_info` (`id`, `company`, `email`, `password`, `phone`, `address`) VALUES
(1, 'vizo technology', 'khan@gmail.com', 'pakistan', '03326967721', 'house # 123'),
(2, 'chenab collage', 'chenab@gmail.com', 'pakistan', '03326967721', 'house #125'),
(3, 'pakistan', 'pak@gmail.com', 'hhh', 'asfasf23', 'fssaffs'),
(4, 'khan', 'khan@gmail.com', 'pakistan', '12123242', 'safadg'),
(5, 'vizo ', 'vizo@gmail.com', 'pakistan', '03326967721', 'skjadf;;iusaljdf'),
(6, 'khan', 'pakistan@yahoo.com', 'kahn', 'kjdjdf', 'wqefkwef'),
(7, 'Civil Hospital', 'civil@gmail.com', 'pakistan', '0410-8739625', 'Samundari chowk # 123 '),
(8, 'Civil Hospital', 'civil@gmail.com', 'pakistan', '0410-8739625', 'Samundari chowk # 123 '),
(9, 'NCBAE', 'ncba@gmail.com', 'khan', '03211', 'Lahore'),
(10, 'Allied hospital', 'hospital@gmail.com', 'pakistan', '042-872653', 'people colony # 2 '),
(11, 'pakistan', 'company@gmail.com', 'pakistan', '041-883474', '                       people colony # 2                        '),
(12, 'AFAQ', 'Khan@hotmail.com', 'pakistan', '042-9981123', 'lahore people colony no 2\r\n             '),
(13, 'head&shoulder', 'head@gmail.com', 'pakistan', '0300087654316', 'samarium lora  ');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_plan`
--

CREATE TABLE IF NOT EXISTS `doctor_plan` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `city` text NOT NULL,
  `university` text NOT NULL,
  `zip_code` varchar(30) NOT NULL,
  `address_clinic` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `doctor_plan`
--

INSERT INTO `doctor_plan` (`id`, `city`, `university`, `zip_code`, `address_clinic`) VALUES
(1, 'FAISALABAD', 'agri university', '81000', 'small people colony '),
(2, 'LAHORE', 'GC', '21000', 'not addresss'),
(3, 'MULTAN', 'hlshd', '1765458623', 'gdjhglasfas'),
(4, 'FAISALABAD', 'G.C university of faisalabad', '83000', 'ghosia chowk people colony No2'),
(5, 'LAHORE', 'wjkhwqhjrewk', '8987095224', 'klgriuwrgwe'),
(6, 'select', '', '', ''),
(7, 'FAISALABAD', 'wemn.nf', 'wjkfb;ef', 'jkb;ebr'),
(8, 'FAISALABAD', 'sljbd;wkd', 'wq.edqwe', 'j.bckw'),
(9, 'MULTAN', 'hjgsafhsaldf', '3r324', 'sdfaggr');

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
  `city` text NOT NULL,
  `university` varchar(30) NOT NULL,
  `zip_code` varchar(30) NOT NULL,
  `address_clinic` text NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `doc_info`
--

INSERT INTO `doc_info` (`id`, `f_name`, `l_name`, `email`, `password`, `phone`, `specialty`, `address`, `gender`, `city`, `university`, `zip_code`, `address_clinic`, `role`) VALUES
(1, 'afaq', 'khan', 'afaqzai@gmail.com', 'afaq', '03326967721', 'Emergency Medicine', 'people colony no 2 ', 'Male', '', '', '0', '', ''),
(2, 'muaz', 'khan', 'muaz@gmail.com', 'pakistan', '03007231682', 'Cardiology', 'people colony no 2 ', 'Male', '', '', '0', '', ''),
(3, 'mirha', 'khan', 'mirha@gmail.com', 'pakistan', '03321234567', 'Dermatology', 'people colony no 2', 'Female', '', '', '0', '', ''),
(4, 'aqib', 'khan', 'aqib@gmail.com', 'pakistan', '0332100000', 'Cardiology', 'd ground fsd', 'Male', '', '', '0', '', ''),
(5, 'shahid', 'khan', 'khan@gmail.com', 'laptop1234', '0321234556', 'Emergency Medicine', 'tACH town FSD', 'Male', '', '', '0', '', ''),
(6, 'uqba', 'hassan', 'uqba@gmail.com', 'pakistan', '0300087654316', 'Emergency Medicine', 'road no 2', 'Male', '', '', '0', '', ''),
(7, 'umair', 'khan', 'umair@yahoo.com', 'pakistan', '0332585677', 'Dermatology', 'raheem garden house # 123', 'Male', '', '', '0', '', ''),
(10, 'wefq', 'efw', 'efwedf@gmail.com', 'dsadv', 'wefe', 'Cardiology', 'fewrv', 'Male', '', '', '0', '', ''),
(11, 'asdj.kbjd', 'sad.bd', 'afaq@yahoo.com', 'jbwekj', 'bkqwlej', 'Dermatology', 'weqn mwqf', 'Male', '', '', '0', '', ''),
(12, 'hamza', 'dasgir', 'hamza@gmai.com', 'pakistan', '032000000000', 'Dermatology', 'people colny ', 'Female', '', '', '0', '', ''),
(13, 'tosif', 'khan', 'tosif@gmail.com', '12345', '032000000000', 'Patient', 'muhammadi chowk', 'Male', 'FAISALABAD', 'pakistan university', '0', '', 'Patient'),
(14, 'wf', 'wew', 'ewe@yahoo.com', 'wewe', '332', 'Patient', 'weqrr', 'Female', 'LAHORE', 'ewrrew', '0', '', 'Patient'),
(15, 'wf', 'wew', 'ewe@yahoo.com', 'pakistan', '332', 'Patient', 'weqrr', 'Female', 'LAHORE', 'ewrrew', '0', '', 'Patient'),
(16, 'danish', 'awan', 'danish@gmail.com', 'danish', '03326967721', 'Doctor', 'Small d ground ', 'Male', 'FAISALABAD', 'NCBA&E', '0', '', 'Doctor'),
(17, 'zeeshan', 'mian', 'mian@gmail.com', 'pakistan', '0300087654316', 'Doctor', 'jksfpiu', 'Male', 'FAISALABAD', 'G.C university', '0', '', 'Doctor'),
(18, 'kashmir', 'azad', 'azad@gmail.com', 'pakistan', '0300087654316', 'Emergency Medicine', 'pakistan', 'Male', 'LAHORE', 'G.C university', '38000', 'D ground', 'Doctor'),
(19, 'talha', 'tariq', 'talha@gmail.com', 'pakistan', '0300087654316', 'Dermatology', 'Islamabad  Mubarak road  ', 'Male', 'MULTAN', 'NCBAE ', '38000', 'D GROUND FSD', 'Doctor'),
(20, 'Khan', 'Afaq', 'khanafaq@gmail.com', 'pakistan', '03237645998', 'Dermatology', 'people colony no 2 ', 'Male', 'FAISALABAD', 'NCBA&E', '38000', 'D Ground Floor No 2', 'Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `pat_info`
--

CREATE TABLE IF NOT EXISTS `pat_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_type_id` int(4) DEFAULT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `Diseases` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pat_info`
--

INSERT INTO `pat_info` (`id`, `user_type_id`, `f_name`, `l_name`, `email`, `password`, `phone`, `Diseases`, `address`, `gender`, `role`) VALUES
(1, NULL, 'afaq', 'khan', '0', 'khan', '03007231682', 'Diabetes', 'D ground fsd', 'Male', ''),
(2, NULL, 'pak', 'afaq', '0', 'khan afaq', '123456', 'fever', 'D ground 856/c block', 'Male', ''),
(3, NULL, 'zubair', 'aefwfsasdgag', '0', 'HASHDKJF', '9489634', 'Heart failure', 'GHFUKDWEFQW', 'Female', ''),
(4, NULL, 'paki', 'psa', '0', 'kklfksjef', '982374', 'Patient', 'ouihfejsdnf.kas', 'Male', 'Patient'),
(5, NULL, 'pakistan', 'khan', '0', 'paki', '03222222222', 'Patient', 'people colony no 2', 'Male', 'Patient'),
(6, NULL, 'google', 'khan', '0', 'google', '0300087654316', 'Patient', 'hjlsdhasd', 'Male', 'Patient'),
(7, NULL, 'hafsa', 'bajwa', 'hafsabajwa94@gmail.com', 'Pakistan123', '3007280095', 'Patient', 'hfefg ifhelf bhfe', 'Female', 'Patient'),
(8, NULL, 'usman', 'khan', 'usman@gmail.com', 'pakistan', '0300087654316', 'Patient', 'pepople colony # 2', 'Male', 'Patient'),
(9, NULL, 'uqba', 'hassan', 'hassan@gmail.com', 'pakistan', '03356884141', 'Patient', 'Raheem garden house No 123', 'Male', 'Patient');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `specialty` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `university` text NOT NULL,
  `zip` varchar(30) NOT NULL,
  `adress_clinic` text NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `type`) VALUES
(1, 'admin'),
(2, 'doctor'),
(3, 'patient');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
