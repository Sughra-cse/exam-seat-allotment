-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 06:40 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exam-seat`
--

-- --------------------------------------------------------

--
-- Table structure for table `addexamhall`
--

CREATE TABLE IF NOT EXISTS `addexamhall` (
  `hallname` varchar(30) NOT NULL,
  `blockname` varchar(30) NOT NULL,
  `floor` int(7) NOT NULL,
  `seatcapacity` int(10) NOT NULL,
  PRIMARY KEY (`hallname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `addseat`
--

CREATE TABLE IF NOT EXISTS `addseat` (
  `semister` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `addstudents`
--

CREATE TABLE IF NOT EXISTS `addstudents` (
  `regno` varchar(10) NOT NULL,
  `sname` text NOT NULL,
  `branch` text NOT NULL,
  `year` year(4) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addstudents`
--

INSERT INTO `addstudents` (`regno`, `sname`, `branch`, `year`, `email`, `date`) VALUES
('1gc16cs001', 'Alis', 'CSE', 2004, 'alis@yahoo.com', '1998-10-30'),
('1gc16cs002', 'bob', 'CSE', 2004, 'bob@yahoo.com', '1998-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `add_department`
--

CREATE TABLE IF NOT EXISTS `add_department` (
  `dept` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_department`
--

INSERT INTO `add_department` (`dept`) VALUES
('maths');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('user', 'error');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
