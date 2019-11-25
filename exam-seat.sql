-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 09:52 AM
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
  `branch` text NOT NULL,
  `hallname` text NOT NULL,
  `blockname` text NOT NULL,
  `floor` int(10) NOT NULL,
  `sem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addexamhall`
--

INSERT INTO `addexamhall` (`branch`, `hallname`, `blockname`, `floor`, `sem`) VALUES
('CSE', 'seminar', 'NBL', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `addseat`
--

CREATE TABLE IF NOT EXISTS `addseat` (
  `regno` varchar(30) NOT NULL,
  `branch` text NOT NULL,
  `semister` varchar(30) NOT NULL,
  `seat` int(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addseat`
--

INSERT INTO `addseat` (`regno`, `branch`, `semister`, `seat`, `date`) VALUES
('1gc16cs001', 'CSE', '7', 1, '2019-01-01'),
('1gc16cs002', 'CSE', '7', 2, '2019-01-01'),
('1gc16cs003', 'CSE', '7', 3, '2019-01-01'),
('1gc16cs004', 'CSE', '7', 4, '2019-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `addstudents`
--

CREATE TABLE IF NOT EXISTS `addstudents` (
  `regno` varchar(10) NOT NULL,
  `sname` text NOT NULL,
  `branch` text NOT NULL,
  `year` int(4) NOT NULL,
  `sem` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addstudents`
--

INSERT INTO `addstudents` (`regno`, `sname`, `branch`, `year`, `sem`, `email`, `date`) VALUES
('1gc16cs001', 'Alis', 'CSE', 2004, 7, 'alis@yahoo.com', '1999-11-04'),
('1gc16cs002', 'bob', 'CSE', 2004, 7, 'bob@yahoo.com', '1998-11-11'),
('1gc16cs003', 'babar', 'CSE', 4, 7, 'babar@gmail.com', '1998-11-18'),
('1gc16cs004', 'bia', 'CSE', 4, 7, 'bia@gmail.com', '1998-11-11');

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
