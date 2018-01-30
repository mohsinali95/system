-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2017 at 03:23 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `billdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(128) NOT NULL AUTO_INCREMENT,
  `fname` varchar(128) NOT NULL,
  `lname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fname`, `lname`, `username`, `password`) VALUES
(32, 'Jannah', 'Mazo', 'jannah', '11'),
(37, 'admin', 'Example', 'admin@example.com', 'a3db61'),
(38, 'waqas', 'yaqoob', 'waqas', 'waqas');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int(128) NOT NULL AUTO_INCREMENT,
  `ttl_electric` int(11) NOT NULL,
  `ttl_rental` int(11) NOT NULL,
  `ttl_water` int(11) NOT NULL,
  `date_issued` date NOT NULL,
  `tenant_id` int(128) NOT NULL,
  `room_id` int(11) NOT NULL,
  `issued_by` varchar(28) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `ttl_electric`, `ttl_rental`, `ttl_water`, `date_issued`, `tenant_id`, `room_id`, `issued_by`, `status`) VALUES
(25, 500, 3000, 100, '2017-11-23', 2, 2, 'waqas yaqoob', 1);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE IF NOT EXISTS `discount` (
  `dis_id` int(11) NOT NULL AUTO_INCREMENT,
  `dis_prc` text NOT NULL,
  `dis_val` text NOT NULL,
  PRIMARY KEY (`dis_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`dis_id`, `dis_prc`, `dis_val`) VALUES
(1, '0%', '0'),
(2, '10%', '0.10'),
(3, '20%', '0.20'),
(4, '30%', '0.30'),
(5, '40%', '0.40'),
(6, '50%', '0.50'),
(7, '60%', '0.60'),
(8, '70%', '0.70'),
(9, '80%', '0.80'),
(10, '90%', '0.90'),
(11, '100%', '0.100');

-- --------------------------------------------------------

--
-- Table structure for table `electricity`
--

CREATE TABLE IF NOT EXISTS `electricity` (
  `electric_id` int(128) NOT NULL AUTO_INCREMENT,
  `amount` varchar(128) NOT NULL,
  `room_id` int(128) NOT NULL,
  `date_st` date NOT NULL,
  `date_end` date NOT NULL,
  PRIMARY KEY (`electric_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `electricity`
--

INSERT INTO `electricity` (`electric_id`, `amount`, `room_id`, `date_st`, `date_end`) VALUES
(16, '100', 1, '2017-11-20', '2017-11-26'),
(17, '500', 2, '2017-11-20', '2017-11-26'),
(18, '1000', 3, '2017-11-20', '2017-11-26'),
(19, '2000', 4, '2017-11-20', '2017-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(128) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(128) NOT NULL,
  `rental` varchar(128) NOT NULL,
  `rental1` varchar(15) NOT NULL,
  `rental2` varchar(40) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `rental`, `rental1`, `rental2`) VALUES
(1, 'Prep 1', '2000', '100', '800'),
(2, 'Nursary ', '3000', '200', '500'),
(3, 'Class 1 A', '2000', '250', '1000'),
(4, 'Class 2 A', '1890', '260', '1000'),
(5, 'Class 3 A', '1832', '270', '1000'),
(6, 'Class 4 A', '1833', '280', '1000'),
(7, 'Class 5 A', '1850', '290', '1000'),
(8, 'Class 6 A', '1700', '300', '2000'),
(9, 'Class 7 A', '2100', '310', '2000'),
(14, 'Class 8 A', '2000', '320', '2000'),
(15, 'Class 9 A', '2000', '330', '2000'),
(20, 'Class 10 A', '2000', '340', '2000'),
(21, 'Class 11', '3000', '350', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE IF NOT EXISTS `tenant` (
  `tenant_id` int(128) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `fname` varchar(128) NOT NULL,
  `mname` varchar(128) NOT NULL,
  `lname` varchar(128) NOT NULL,
  `nname` varchar(128) NOT NULL,
  `age` text NOT NULL,
  `bdate` date NOT NULL,
  `address` varchar(128) NOT NULL,
  `contact` text NOT NULL,
  `water` varchar(128) NOT NULL,
  `date_registered` date NOT NULL,
  `dis_id` int(11) NOT NULL,
  PRIMARY KEY (`tenant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`tenant_id`, `room_id`, `gender`, `fname`, `mname`, `lname`, `nname`, `age`, `bdate`, `address`, `contact`, `water`, `date_registered`, `dis_id`) VALUES
(1, 1, 'Male', 'Armando', 'Moya', 'Langido', 'Jr', '21', '1993-07-23', 'Caliling, Cauayan Negros Occidental', '09491232217', '100', '2017-11-23', 1),
(2, 2, 'Male', 'Jewel', 'Langido', 'Nepomuceno', 'Jewel', '18', '1996-10-01', 'Caliling, Cauayan Negros Occidental', '09486566789', '100', '2017-11-23', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
