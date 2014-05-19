-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2014 at 03:19 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel`
--
CREATE DATABASE IF NOT EXISTS `hostel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hostel`;

-- --------------------------------------------------------

--
-- Table structure for table `authority`
--

CREATE TABLE IF NOT EXISTS `authority` (
  `AID` int(11) DEFAULT NULL,
  `FNAME` varchar(20) DEFAULT NULL,
  `MNAME` varchar(20) DEFAULT NULL,
  `LNAME` varchar(20) DEFAULT NULL,
  `GENDER` varchar(1) DEFAULT NULL,
  `DID` int(11) DEFAULT NULL,
  `PASSWORD` varchar(32) DEFAULT NULL,
  `PHONE` bigint(11) NOT NULL,
  `EMAIL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authority`
--

INSERT INTO `authority` (`AID`, `FNAME`, `MNAME`, `LNAME`, `GENDER`, `DID`, `PASSWORD`, `PHONE`, `EMAIL`) VALUES
(111111, 'Admin', '', 'Prakash', 'M', 7, 'admin', 1234567891, 'XYZ@QWERTY.COM'),
(333333, 'RAVI', 'SAAND', 'MUNDOTIA', 'M', 5, '111111', 1234567891, 'XYZ@QWERTY.COM'),
(444444, 'NIKHIL', '', 'JAISWAL', 'M', 1, '111111', 1234567891, 'XYZ@QWERTY.COM'),
(555555, 'MANI', '', 'SHANKAR', 'M', 2, '1111111', 1234567891, 'XYZ@QWERTY.COM'),
(666666, 'ANKIT', '', 'GOEL', 'M', 4, '1111111', 1234567891, 'XYZ@QWERTY.COM'),
(777777, 'kamina', '', 'JAISWAL', 'M', 6, '1111111', 1234567891, 'XYZ@QWERTY.COM');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `CID` int(11) NOT NULL AUTO_INCREMENT,
  `COMPLAINT_TEXT` varchar(1000) NOT NULL,
  `SID` int(11) DEFAULT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `complaint_dept`
--

CREATE TABLE IF NOT EXISTS `complaint_dept` (
  `CID` int(11) NOT NULL,
  `DID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `STATUS` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_dept`
--

INSERT INTO `complaint_dept` (`CID`, `DID`, `SID`, `STATUS`) VALUES
(1, 1, 909090, 'Y'),
(2, 1, 909090, 'N'),
(3, 3, 909090, 'N'),
(4, 6, 909090, 'N'),
(7, 4, 909090, 'N'),
(5, 2, 909090, 'Y'),
(6, 5, 909090, 'Y'),
(8, 1, 444444, 'Y'),
(9, 1, 909090, 'Y'),
(11, 1, 909090, 'Y'),
(10, 1, 909090, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_redundant`
--

CREATE TABLE IF NOT EXISTS `complaint_redundant` (
  `CID` int(11) NOT NULL AUTO_INCREMENT,
  `COMPLAINT_TEXT` varchar(1000) NOT NULL,
  `SID` int(11) DEFAULT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `complaint_redundant`
--

INSERT INTO `complaint_redundant` (`CID`, `COMPLAINT_TEXT`, `SID`) VALUES
(1, 'wadawdawd', 909090),
(2, 'DADWADAD', 909090),
(3, 'afsdfsefsefs', 909090),
(4, 'qrrw3rrfqwrgwr3', 909090),
(5, 'ADWdAWDvv weawrvbawravbr awervwrv', 909090),
(6, 'efaeveraev avwvwarva vgat4ev', 909090),
(7, 'awvervaw rewb evrwrvrwe ', 909090),
(8, 'afefweafawfweaf', 444444),
(9, 'QDqeQEQEqeq', 909090),
(10, 'ythyvvtyhyhb tbtyhbth', 909090),
(11, 'light not working', 909090);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `DID` int(11) DEFAULT NULL,
  `DNAME` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DID`, `DNAME`) VALUES
(1, 'ELECTRICITY'),
(2, 'WATER'),
(3, 'SANITATION'),
(4, 'MAINTANANCE'),
(5, 'MESS'),
(6, 'HOSTELOFFICE'),
(7, 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `FID` int(11) NOT NULL AUTO_INCREMENT,
  `F_TEXT` varchar(1000) NOT NULL,
  PRIMARY KEY (`FID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FID`, `F_TEXT`) VALUES
(1, 'hello sir'),
(2, 'this is good');

-- --------------------------------------------------------

--
-- Table structure for table `filledmessauthority`
--

CREATE TABLE IF NOT EXISTS `filledmessauthority` (
  `MID` int(11) NOT NULL,
  `AID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filledmessauthority`
--

INSERT INTO `filledmessauthority` (`MID`, `AID`) VALUES
(555, 111111),
(222, 777777);

-- --------------------------------------------------------

--
-- Table structure for table `filledmessstudent`
--

CREATE TABLE IF NOT EXISTS `filledmessstudent` (
  `MID` int(11) NOT NULL,
  `SID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filledmessstudent`
--

INSERT INTO `filledmessstudent` (`MID`, `SID`) VALUES
(444, 909090);

-- --------------------------------------------------------

--
-- Table structure for table `filledroomstudent`
--

CREATE TABLE IF NOT EXISTS `filledroomstudent` (
  `HID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `RID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filledroomstudent`
--

INSERT INTO `filledroomstudent` (`HID`, `SID`, `RID`) VALUES
(1, 909090, 5);

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE IF NOT EXISTS `hostel` (
  `HID` int(11) NOT NULL,
  `HNAME` varchar(30) NOT NULL,
  `TYPE` varchar(1) NOT NULL,
  `CAPACITY` int(11) NOT NULL,
  `FILLED` int(11) DEFAULT '0',
  PRIMARY KEY (`HID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`HID`, `HNAME`, `TYPE`, `CAPACITY`, `FILLED`) VALUES
(1, 'Mega Tower 1', 'M', 20, 1),
(2, 'Mega Tower 2', 'F', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE IF NOT EXISTS `mess` (
  `MID` int(11) NOT NULL,
  `MNAME` varchar(100) DEFAULT NULL,
  `FOODTYPE` varchar(1) DEFAULT NULL,
  `CAPACITY` int(11) DEFAULT NULL,
  `FILLED` int(11) DEFAULT NULL,
  PRIMARY KEY (`MID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`MID`, `MNAME`, `FOODTYPE`, `CAPACITY`, `FILLED`) VALUES
(111, 'Block 1 Mess', 'V', 10, 0),
(222, 'Block 2 Mess', 'V', 10, 2),
(333, 'Block 3 Mess', 'V', 10, 1),
(444, 'Block 4 Mess', 'V', 10, 1),
(555, 'Block 5 Mess', 'V', 10, 1),
(666, 'Block 6 Mess', 'V', 10, 0),
(777, 'Block 7 Mess', 'V', 10, 0),
(888, 'Block 8 Mess', 'N', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `SID` int(11) NOT NULL,
  `FNAME` varchar(20) DEFAULT NULL,
  `MNAME` varchar(20) DEFAULT NULL,
  `LNAME` varchar(20) DEFAULT NULL,
  `GENDER` varchar(1) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `YEAR` int(11) DEFAULT NULL,
  `PASSWORD` text NOT NULL,
  `college_id` text NOT NULL,
  `approve` int(11) NOT NULL DEFAULT '0',
  `email` text NOT NULL,
  `phone` bigint(20) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`SID`, `FNAME`, `MNAME`, `LNAME`, `GENDER`, `DOB`, `YEAR`, `PASSWORD`, `college_id`, `approve`, `email`, `phone`) VALUES
(12345, 'khhjh', 'ghgjhg', 'gjhgjhg', 'M', '2014-04-17', 3, '', '12345.jpg', 1, '', 0),
(123456, 'ankit', '', 'asdad', 'M', '2014-04-23', 0, '', '123456.jpg', 1, '', 0),
(234567, 'Ravi', '', 'Prakash', 'M', '2014-06-21', 3, '234567', '234567.png', 1, 'nikhiljaiswal2008@gmail.com', 7987654321),
(8765567, 'ankit', '', 'goel', 'M', '2014-04-18', 3, 'hello', '8765567.jpg', 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `RID` int(11) NOT NULL,
  `HID` int(11) NOT NULL,
  `RCAP` int(11) NOT NULL,
  `RFILLED` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`RID`, `HID`, `RCAP`, `RFILLED`) VALUES
(1, 1, 2, 0),
(2, 1, 2, 0),
(3, 1, 2, 0),
(4, 1, 2, 0),
(5, 1, 2, 1),
(6, 1, 2, 0),
(7, 1, 2, 0),
(8, 1, 2, 0),
(9, 1, 2, 0),
(10, 1, 2, 0),
(1, 2, 2, 0),
(2, 2, 2, 0),
(3, 2, 2, 0),
(4, 2, 2, 0),
(5, 2, 2, 1),
(6, 2, 2, 0),
(7, 2, 2, 0),
(8, 2, 2, 0),
(9, 2, 2, 0),
(10, 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `SID` int(11) NOT NULL DEFAULT '0',
  `FNAME` varchar(20) DEFAULT NULL,
  `MNAME` varchar(20) DEFAULT NULL,
  `LNAME` varchar(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `GENDER` varchar(1) DEFAULT NULL,
  `FFNAME` varchar(20) DEFAULT NULL,
  `FMNAME` varchar(20) DEFAULT NULL,
  `FLNAME` varchar(20) DEFAULT NULL,
  `MFNAME` varchar(20) DEFAULT NULL,
  `MMNAME` varchar(20) DEFAULT NULL,
  `MLNAME` varchar(20) DEFAULT NULL,
  `YEAR` int(11) DEFAULT NULL,
  `PASSWORD` varchar(32) DEFAULT NULL,
  `IMAGE` text NOT NULL,
  `PHONE` bigint(20) DEFAULT NULL,
  `EMAIL` text NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`SID`, `FNAME`, `MNAME`, `LNAME`, `DOB`, `GENDER`, `FFNAME`, `FMNAME`, `FLNAME`, `MFNAME`, `MMNAME`, `MLNAME`, `YEAR`, `PASSWORD`, `IMAGE`, `PHONE`, `EMAIL`) VALUES
(123456, 'ankit', '', 'asdad', '2014-04-23', 'M', NULL, NULL, NULL, NULL, NULL, NULL, 3, '', '123456.jpg', 0, ''),
(234567, 'Ravi', '', 'Prakash', '2014-06-21', 'M', NULL, NULL, NULL, NULL, NULL, NULL, 3, '234567', '234567.png', 7987654321, 'nikhiljaiswal2008@gmail.com'),
(909090, 'Shivam', '', 'Singh', '0000-00-00', 'M', 'Jitendra', '', 'Singh', 'Pushpa', '', 'Singh', 0, 'hello', '909090.jpg', 9035220168, 'shivamnitk2015@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
