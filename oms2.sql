-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 04:06 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oms2`
--
CREATE DATABASE IF NOT EXISTS `oms2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `oms2`;

-- --------------------------------------------------------

--
-- Table structure for table `app_logs`
--

CREATE TABLE IF NOT EXISTS `app_logs` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `Timestamp` varchar(255) DEFAULT NULL,
  `Action` varchar(255) DEFAULT NULL,
  `TableName` varchar(255) DEFAULT NULL,
  `RecordID` varchar(255) DEFAULT NULL,
  `SqlQuery` varchar(255) DEFAULT NULL,
  `UserID` varchar(255) DEFAULT NULL,
  `ServerIP` varchar(255) DEFAULT NULL,
  `RequestUrl` text,
  `RequestData` text,
  `RequestCompleted` varchar(255) DEFAULT NULL,
  `RequestMsg` text,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `app_logs`
--

INSERT INTO `app_logs` (`log_id`, `Timestamp`, `Action`, `TableName`, `RecordID`, `SqlQuery`, `UserID`, `ServerIP`, `RequestUrl`, `RequestData`, `RequestCompleted`, `RequestMsg`) VALUES
(1, '2021-02-13 12:45:30', 'userlogin', 'userinfo', NULL, 'SELECT   * FROM userinfo WHERE  username = ?  OR useremail = ?  LIMIT 1', '3', '127.0.0.1', 'index/login/', '{"username":"admin1","password":"admin1","userpass":"$2y$10$jf7wOEZ9jqT5BXWdKc48COeCeoa76bfJtrBK8UXXZTKLc6QF2Ns5."}', 'true', NULL),
(2, '2021-02-13 12:45:46', 'userlogout', 'userinfo', NULL, NULL, '3', '127.0.0.1', 'index/logout', '[]', 'true', NULL),
(3, '2021-02-13 15:33:23', 'userlogin', 'userinfo', NULL, 'SELECT   * FROM userinfo WHERE  username = ?  OR useremail = ?  LIMIT 1', '3', '127.0.0.1', 'index/login/', '{"username":"admin1","password":"admin1","userpass":"$2y$10$jf7wOEZ9jqT5BXWdKc48COeCeoa76bfJtrBK8UXXZTKLc6QF2Ns5."}', 'true', NULL),
(4, '2021-02-13 15:34:13', 'userlogout', 'userinfo', NULL, NULL, '3', '127.0.0.1', 'index/logout', '[]', 'true', NULL),
(5, '2021-02-13 15:37:45', 'userlogin', 'userinfo', NULL, 'SELECT   * FROM userinfo WHERE  username = ?  OR useremail = ?  LIMIT 1', '3', '::1', 'index/login/', '{"username":"admin1","password":"admin1","userpass":"$2y$10$jf7wOEZ9jqT5BXWdKc48COeCeoa76bfJtrBK8UXXZTKLc6QF2Ns5."}', 'true', NULL),
(6, '2021-02-13 15:39:45', 'userlogout', 'userinfo', NULL, NULL, '3', '::1', 'index/logout', '[]', 'true', NULL),
(7, '2021-02-13 15:52:01', 'userlogin', 'userinfo', NULL, 'SELECT   * FROM userinfo WHERE  username = ?  OR useremail = ?  LIMIT 1', '3', '::1', 'index/login/', '{"username":"admin1","password":"admin1","userpass":"$2y$10$jf7wOEZ9jqT5BXWdKc48COeCeoa76bfJtrBK8UXXZTKLc6QF2Ns5."}', 'true', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendancedb`
--

CREATE TABLE IF NOT EXISTS `attendancedb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stuindex` varchar(255) NOT NULL,
  `stuname` varchar(255) NOT NULL,
  `subcode` varchar(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `lecno` varchar(255) NOT NULL,
  `lecdate` datetime NOT NULL,
  `passtime` time NOT NULL,
  `yesono` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `attendancedb`
--

INSERT INTO `attendancedb` (`id`, `stuindex`, `stuname`, `subcode`, `subname`, `lecno`, `lecdate`, `passtime`, `yesono`) VALUES
(1, 'EE/16/00001', '', 'G1E2', '', '01', '2020-11-29 00:00:00', '19:07:21', 'Present'),
(2, 'EE/16/00001', '', 'G1E2', '', '02', '2020-11-29 00:00:00', '19:07:48', 'Present'),
(3, 'EE/16/00001', '', 'G1E2', '', '03', '2020-11-29 00:00:00', '19:07:59', 'Absent'),
(4, 'EE/16/00002', '', 'G1E2', '', '04', '2020-11-29 00:00:00', '19:08:22', 'Present'),
(5, 'EE/16/00002', '', 'G1E2', '', '01', '2021-01-06 00:00:00', '03:37:05', 'Present'),
(6, 'EP/16/00002', '', 'G1E2', '', '01', '2021-01-07 00:00:00', '03:38:17', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `cwcorrection`
--

CREATE TABLE IF NOT EXISTS `cwcorrection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stuindex` varchar(255) NOT NULL,
  `practicle` varchar(255) NOT NULL,
  `submdate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cwcorrection`
--

INSERT INTO `cwcorrection` (`id`, `stuindex`, `practicle`, `submdate`) VALUES
(1, 'EE/16/00001', 'Low Pass and High Pass Filter', '2021-01-15'),
(2, 'EE/16/10589', 'Measurement of Power', '2021-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `cwmarks`
--

CREATE TABLE IF NOT EXISTS `cwmarks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stuindex` varchar(255) NOT NULL,
  `practicle` varchar(255) NOT NULL,
  `cwmark` varchar(255) NOT NULL,
  `stuname` varchar(255) NOT NULL,
  `stugroup` varchar(255) NOT NULL,
  `subcode` varchar(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `laboratory` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cwmarks`
--

INSERT INTO `cwmarks` (`id`, `stuindex`, `practicle`, `cwmark`, `stuname`, `stugroup`, `subcode`, `subname`, `laboratory`) VALUES
(1, 'EE/16/00001', 'AC Energy Meter', '5.5', '', '', 'G1E4', '', ''),
(2, 'EE/16/00001', 'Networking', '6.2', '', '', 'G2E6', '', ''),
(3, 'EE/16/00001', 'DPCM', '5.2', '', '', 'G1E3', '', ''),
(4, 'EE/16/00001', 'Telephone Trainer', '5.6', '', '', 'G1E3', '', ''),
(5, 'EE/16/00001', 'Load and Diversity Factor', '5.8', '', '', 'G2E5', '', ''),
(6, 'EP/16/00002', 'Load characteristics of dc series motors', '7.2', '', '', 'G1E5', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cwprog`
--

CREATE TABLE IF NOT EXISTS `cwprog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stuindex` varchar(255) NOT NULL,
  `subcode` varchar(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `comptage` varchar(255) NOT NULL,
  `stuname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cwprog`
--

INSERT INTO `cwprog` (`id`, `stuindex`, `subcode`, `subname`, `comptage`, `stuname`) VALUES
(1, 'EE/16/00001', 'G1E3', '', '2', ''),
(2, 'EE/16/00001', 'G2E5', '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `examresultsbip`
--

CREATE TABLE IF NOT EXISTS `examresultsbip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stuindex` varchar(255) NOT NULL,
  `stuname` varchar(255) NOT NULL,
  `subcode` varchar(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `stugrade` varchar(255) NOT NULL,
  `stubatch` varchar(255) NOT NULL,
  `studpt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `examresultsbip`
--

INSERT INTO `examresultsbip` (`id`, `stuindex`, `stuname`, `subcode`, `subname`, `stugrade`, `stubatch`, `studpt`) VALUES
(1, 'EE/16/00001', '', 'B11/B21', '', 'A', '', ''),
(2, 'EE/16/10589', '', 'S1E1', '', 'A', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `examresultsgip`
--

CREATE TABLE IF NOT EXISTS `examresultsgip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stuindex` varchar(255) NOT NULL,
  `stuname` varchar(255) NOT NULL,
  `subcode` varchar(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `stugrade` varchar(255) NOT NULL,
  `stubatch` varchar(255) NOT NULL,
  `studpt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `examresultssip`
--

CREATE TABLE IF NOT EXISTS `examresultssip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stuindex` varchar(255) NOT NULL,
  `stuname` varchar(255) NOT NULL,
  `subcode` varchar(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `stugrade` varchar(255) NOT NULL,
  `stubatch` varchar(255) NOT NULL,
  `studpt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lecschedules`
--

CREATE TABLE IF NOT EXISTS `lecschedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stubatch` varchar(255) NOT NULL,
  `subcode` varchar(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `studpt` varchar(255) NOT NULL,
  `stucat` varchar(255) NOT NULL,
  `sheddate` varchar(255) NOT NULL,
  `shedtime` varchar(255) NOT NULL,
  `sublec` varchar(255) NOT NULL,
  `shedendtime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lecschedules`
--

INSERT INTO `lecschedules` (`id`, `stubatch`, `subcode`, `subname`, `studpt`, `stucat`, `sheddate`, `shedtime`, `sublec`, `shedendtime`) VALUES
(1, '2016', 'G1E2', '', '', 'EE', '2020-11-30', '09:00:00', 'Mr. asadda asdadasd', '12:00:00'),
(2, '2016', 'G2E5', '', '', 'EP', '2020-12-01', '09:00:00', 'Mr. second one', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE IF NOT EXISTS `noticeboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notetitle` varchar(255) NOT NULL,
  `notenote` text NOT NULL,
  `notedate` varchar(255) NOT NULL,
  `noteauthor` varchar(255) NOT NULL,
  `notepostedby` varchar(255) NOT NULL,
  `noteto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`id`, `notetitle`, `notenote`, `notedate`, `noteauthor`, `notepostedby`, `noteto`) VALUES
(1, 'Exam Admissions', 'Obtain exam admissions on or before 1st of Feburary 2021', '2021-01-11 01:50:38', 'from', 'me', 'to'),
(2, 'Study Leave', 'Study Leave from 15/01/2021 to 31/01/2021', '2021-01-11 01:59:28', 'asdada', 'asd', 'asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `pracschedules`
--

CREATE TABLE IF NOT EXISTS `pracschedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stubatch` varchar(255) NOT NULL,
  `subcode` varchar(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `practicle` varchar(255) NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `stugroup` varchar(255) NOT NULL,
  `sheddate` varchar(255) NOT NULL,
  `shedtime` varchar(255) NOT NULL,
  `studpt` varchar(255) NOT NULL,
  `stucat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pracschedules`
--

INSERT INTO `pracschedules` (`id`, `stubatch`, `subcode`, `subname`, `practicle`, `instructor`, `stugroup`, `sheddate`, `shedtime`, `studpt`, `stucat`) VALUES
(6, '2016', 'G1E3', '', 'DPCM', 'ins1', 'X', '2021-01-06', '01:40:32', 'Electrical', ''),
(7, '2016', 'G1E3', '', 'DPCM', 'ins1', 'Y', '2021-01-07', '01:41:01', 'Electrical', ''),
(8, '2016', 'G1E5', '', 'Load characteristics of dc series motors', '', 'X', '2021-03-10', '15:10:26', 'Electrical', '');

-- --------------------------------------------------------

--
-- Table structure for table `practiclesdb`
--

CREATE TABLE IF NOT EXISTS `practiclesdb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subcode` varchar(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `practicle` varchar(255) NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `laboratory` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `practiclesdb`
--

INSERT INTO `practiclesdb` (`id`, `subcode`, `subname`, `practicle`, `instructor`, `laboratory`) VALUES
(1, 'G1E4', '', 'AC Energy Meter', 'instructor one', ''),
(2, 'G2E6', '', 'Networking', 'Instructor two', ''),
(3, 'G1E3', '', 'Low Pass and High Pass Filter', '', ''),
(4, 'G1E3', '', 'Amplitude Modulation', '', ''),
(5, 'G1E3', '', 'Frequency Modulation', '', ''),
(6, 'G1E3', '', 'Telephone Trainer', '', ''),
(7, 'G1E3', '', 'DPCM', '', ''),
(8, 'G1E4', '', 'Measurement of Power', '', ''),
(9, 'G1E4', '', 'Tests on a single pha. tranf.', '', ''),
(10, 'G1E5', '', 'Load characteristics of dc series motors', '', ''),
(11, 'G1E5', '', 'stepper motor', '', ''),
(12, 'G2E5', '', 'Load and Diversity Factor', '', ''),
(13, 'G2E5', '', 'Characteristics of solar cell', '', ''),
(14, 'G2E6', '', 'Time Division Multiplexing', '', ''),
(15, 'G2E3', '', 'Study of Distribution Systems', '', ''),
(16, 'G2E3', '', 'Earthing of Electrical Systems', '', ''),
(17, 'G2E3', '', 'Motor Controling', '', ''),
(18, 'G2E3', '', 'Basics of Electrical Cad', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staffdb`
--

CREATE TABLE IF NOT EXISTS `staffdb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staffid` varchar(255) NOT NULL,
  `staffname` varchar(255) NOT NULL,
  `staffdpt` varchar(255) NOT NULL,
  `staffrole` varchar(255) NOT NULL,
  `staffcontact` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staffdb`
--

INSERT INTO `staffdb` (`id`, `staffid`, `staffname`, `staffdpt`, `staffrole`, `staffcontact`) VALUES
(1, 'st002', 'first instructor', 'Electrical', 'Instructor', '0123456456');

-- --------------------------------------------------------

--
-- Table structure for table `studentdb`
--

CREATE TABLE IF NOT EXISTS `studentdb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stuindex` varchar(255) NOT NULL,
  `stuname` varchar(255) NOT NULL,
  `stugroup` varchar(255) NOT NULL,
  `studpt` varchar(255) NOT NULL,
  `stubatch` varchar(255) NOT NULL,
  `stucat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `studentdb`
--

INSERT INTO `studentdb` (`id`, `stuindex`, `stuname`, `stugroup`, `studpt`, `stubatch`, `stucat`) VALUES
(1, 'EE/16/00001', 'saman', 'X', 'Electrical', '2016', 'EE'),
(2, 'EP/16/00002', 'student2', 'Y', 'Electrical', '2016', 'EP'),
(3, 'EE/16/00003', 'third student', 'E', 'Electrical', '2016', 'EP'),
(4, 'EE/16/00004', 'fourth student', 'R', 'Electrical', '2016', 'EE'),
(5, 'EE/16/00005', 'fifth student', 'E', 'Electrical', '2016', 'EE'),
(6, 'EE/16/00006', 'sixth student', 'B', 'Electrical', '2016', 'EE');

-- --------------------------------------------------------

--
-- Table structure for table `subjectsdb`
--

CREATE TABLE IF NOT EXISTS `subjectsdb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subcode` varchar(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `subyear` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `subjectsdb`
--

INSERT INTO `subjectsdb` (`id`, `subcode`, `subname`, `subyear`) VALUES
(1, 'S1E1', 'Electronics - 2', 'SIP'),
(2, 'S1E2', 'Power Generation', 'SIP'),
(3, 'G1E1', 'Mathematics and Computing', 'GIP'),
(4, 'G2E2', 'Electronics 1 B', 'GIP'),
(5, 'G2E6', 'Telecommuincation 1 B', 'GIP'),
(6, 'G1E5', 'Electrical power Utilization', 'GIP'),
(7, 'G1E4', 'Power Gen, Trans and Dis.', 'GIP'),
(8, 'S1E7', 'Line and Radio', 'GIP'),
(9, 'G1E2', 'Electronics 1 A', 'GIP'),
(10, 'G1E3', 'Telecomunication 1 A', 'GIP'),
(12, 'G2E1', 'Mathmatics and Computing -2', 'GIP'),
(13, 'G2E3', 'Electrical Instalation practice', 'GIP'),
(14, 'G2E4', 'Industrial Elec. and Instrumentation', 'GIP'),
(15, 'G2E5', 'Power Gen. Trans and Dis. 1 B', 'GIP'),
(16, 'B11/B21', 'Mathmatics and Computing', 'BIP'),
(17, 'B12/B22', 'English', 'BIP'),
(18, 'B13/B23', 'Workshop Technology', 'BIP'),
(19, 'B17', 'Fundementals of Mec. Eng', 'BIP'),
(20, 'B25', 'Introduction to industrial managemnt', 'BIP'),
(21, 'B14/B24', 'Enginering Drawing', 'BIP');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `userrole` varchar(255) NOT NULL,
  `usernick` varchar(255) NOT NULL,
  `userpass` varchar(255) DEFAULT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2021-02-28 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL,
  `stuindex` varchar(255) NOT NULL,
  `stucat` varchar(255) NOT NULL,
  `stugroup` varchar(255) NOT NULL,
  `fingerprint_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `username`, `useremail`, `userrole`, `usernick`, `userpass`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`, `stuindex`, `stucat`, `stugroup`, `fingerprint_id`) VALUES
(3, 'admin1', 'admin1@gmail.com', 'Administrator', 'admin1', '$2y$10$jf7wOEZ9jqT5BXWdKc48COeCeoa76bfJtrBK8UXXZTKLc6QF2Ns5.', NULL, NULL, '2021-02-28 00:00:00', NULL, '', '', '', ''),
(4, 'firstuser', 'first@gmail.com', 'User', '', '$2y$10$USCroKoZ.7u6RujvJmAHJuIxS7b.nai6mE2OTLKbQidqDJYJUfmqS', NULL, NULL, '2021-02-28 00:00:00', NULL, '', '', '', ''),
(5, 'student1', 'student1@gmail.com', 'Student', '', '$2y$10$Xcb5FPmwNb8Agpjd04vrjeuJZesajdtyVnpADGLu/jpKT0GagUhM.', NULL, NULL, '2021-02-28 00:00:00', NULL, 'EE/16/00001', 'EE', 'X', '1'),
(6, 'student2', 'stu2@gmail.com', 'Student', '', '$2y$10$6CwM6F8UVINlLRuIdyp/Hui0ZpZX9PWQlmJ.UNQgS5wC2ZtDTQZZy', NULL, NULL, '2021-02-28 00:00:00', NULL, 'EP/16/00002', 'EP', 'Y', '2'),
(7, 'student3', 'stu3@gmail.com', 'Student', '', '$2y$10$j/qhEBKjfalOrAqT3bydpeaGSoZAO80ByDg5vd9/De4BTsv6nPWfu', NULL, NULL, '2021-02-28 00:00:00', NULL, 'EE/16/00003', 'EE', 'E', ''),
(8, 'student4', 'stu4@gmail.com', 'Student', '', '$2y$10$8gDnylfDB7qFQDwTIDVPf.O5L.rjqZ1Us32E5TfK982kVIym5Af22', NULL, NULL, '2021-02-28 00:00:00', NULL, 'EE/16/00004', 'EE', 'R', ''),
(9, 'admin3', 'admin3@gmail.com', 'Administrator', '', '$2y$10$1ZNrPo9svP1ttd9EnA9HdOkfjvCkNuOjZJmPl1haqXfddgQflSWvK', NULL, NULL, '2021-02-28 00:00:00', NULL, '', '', '', ''),
(10, 'staff1', 'staff1@gmail.com', 'Instructor', '', '$2y$10$Z68o3GhHh.HH/QLqzpM9vu9MssEi0GsKpjtBLZufVnwxnt.QFBBWG', NULL, NULL, '2021-02-28 00:00:00', NULL, 'st002', '', '', ''),
(11, 'student6', 'six@gmial.com', 'Student', '', '$2y$10$8s7aph/Fy1E26xU4hq7xKO/jalcAkdzLluVP/rseDC6E9KbQ8qh2O', NULL, NULL, '2021-02-28 00:00:00', NULL, 'EE/16/00006', 'EE', 'B', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serialnumber` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fingerprint_id` varchar(255) NOT NULL,
  `fingerprint_select` int(11) NOT NULL,
  `user_date` date NOT NULL,
  `time_in` time NOT NULL,
  `del_fingerid` int(11) NOT NULL,
  `add_fingerid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `serialnumber`, `username`, `gender`, `email`, `fingerprint_id`, `fingerprint_select`, `user_date`, `time_in`, `del_fingerid`, `add_fingerid`) VALUES
(1, 'EE/16/00001', 'student1', '', '', '1', 0, '0000-00-00', '00:00:00', 0, 1),
(2, 'EP/16/00002', 'student2', '', '', '2', 0, '0000-00-00', '00:00:00', 0, 0),
(3, 'EE/16/00003', 'student3', '', '', '3', 1, '0000-00-00', '00:00:00', 0, 0),
(4, 'EE/16/00006', 'student6', '', '', '4', 0, '0000-00-00', '00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_logs`
--

CREATE TABLE IF NOT EXISTS `users_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serialnumber` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `value1` varchar(255) NOT NULL,
  `value2` varchar(255) NOT NULL,
  `checkindate` date NOT NULL,
  `timein` time NOT NULL,
  `timeout` time NOT NULL,
  `fingerprint_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users_logs`
--

INSERT INTO `users_logs` (`id`, `serialnumber`, `username`, `value1`, `value2`, `checkindate`, `timein`, `timeout`, `fingerprint_id`) VALUES
(2, 'EE/16/00001', '', 'S1E2', '01', '2021-02-24', '05:44:57', '00:00:00', '1'),
(3, 'EE/16/00001', '', 'S1E2', '02', '2021-02-25', '05:45:19', '00:00:00', '1'),
(4, 'EE/16/00001', '', 'S1E2', '03', '2021-03-31', '05:45:48', '00:00:00', '1'),
(5, 'EP/16/00002', '', 'S1E2', '01', '2021-03-31', '05:47:19', '00:00:00', '2'),
(6, 'EP/16/00002', '', 'S1E2', '03', '2021-03-31', '05:47:41', '00:00:00', '2'),
(7, 'EE/16/00001', '', 'G1E1', '01', '2021-04-01', '08:26:16', '00:00:00', '1'),
(8, 'EP/16/00002', '', 'S1E2', '04', '2021-04-01', '08:41:26', '00:00:00', '2'),
(9, 'EE/16/00001', '', 'S1E2', '05', '2021-04-02', '08:57:56', '00:00:00', '1'),
(10, 'EP/16/00002', '', 'G1E1', '01', '2021-04-02', '18:22:14', '00:00:00', '2'),
(11, 'EE/16/00006', '', 'S1E1', '03', '2021-04-04', '06:35:20', '00:00:00', 'EE/16/00006'),
(12, 'EE/16/00006', '', 'S1E1', '01', '2021-04-04', '06:36:16', '00:00:00', 'EE/16/00006'),
(13, 'EE/16/00006', '', 'B12/B22', '01', '2021-04-04', '06:41:48', '00:00:00', 'EE/16/00006'),
(14, 'EE/16/00003', '', 'S1E1', '03', '2021-04-04', '06:57:12', '00:00:00', 'EE/16/00003'),
(15, 'EE/16/00006', '', 'S1E1', '02', '2021-04-04', '07:14:57', '00:00:00', 'EE/16/00006'),
(16, 'EE/16/00001', '', 'S1E1', '01', '2021-04-04', '07:16:22', '00:00:00', 'EE/16/00001');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
