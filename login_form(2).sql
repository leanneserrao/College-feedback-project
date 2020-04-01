-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2017 at 05:30 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `expert_lectures`
--

CREATE TABLE IF NOT EXISTS `expert_lectures` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(15) NOT NULL,
  `f_name` varchar(15) NOT NULL,
  `s_roll_no` int(6) NOT NULL,
  `topic_name` varchar(40) NOT NULL,
  `sem` varchar(3) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `date` varchar(15) NOT NULL,
  `ex_q1` text NOT NULL,
  `ex_q2` text NOT NULL,
  `ex_q3` text NOT NULL,
  `ex_q4` text NOT NULL,
  `ex_q5` text NOT NULL,
  `ex_sugg` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `expert_lectures`
--

INSERT INTO `expert_lectures` (`ID`, `s_name`, `f_name`, `s_roll_no`, `topic_name`, `sem`, `subject`, `date`, `ex_q1`, `ex_q2`, `ex_q3`, `ex_q4`, `ex_q5`, `ex_sugg`) VALUES
(9, 'Pratiksha ahire', 'pooja', 501460, 'ddos', 'VI', 'DS', '7/ 4/ 2017', 'S', 'S', 'P', 'P', 'P', ''),
(10, 'Leanne', 'pooja', 501448, 'ddos', 'VI', 'DS', '7/ 4/ 2017', 'G', 'E', 'G', 'E', 'G', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(30) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `branch` varchar(15) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `rollno` int(6) NOT NULL,
  `date` varchar(15) NOT NULL,
  `f_q1` varchar(5) NOT NULL,
  `f_q2` varchar(5) NOT NULL,
  `f_q3` varchar(5) NOT NULL,
  `f_q4` varchar(5) NOT NULL,
  `f_q5` varchar(5) NOT NULL,
  `f_q6` varchar(5) NOT NULL,
  `f_q7` varchar(5) NOT NULL,
  `f_q8` varchar(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`ID`, `t_name`, `sem`, `branch`, `subject`, `rollno`, `date`, `f_q1`, `f_q2`, `f_q3`, `f_q4`, `f_q5`, `f_q6`, `f_q7`, `f_q8`) VALUES
(14, 'Ms. Smita Rukhande', 'VI', 'IT', 'DS', 501460, '7/ 4/ 2017', 'E', 'E', 'E', 'E', 'E', 'E', 'A', 'Y'),
(15, 'Ms. Smita Rukhande', 'VI', 'IT', 'DS', 501448, '7/ 4/ 2017', 'G', 'E', 'G', 'E', 'G', 'E', 'ST', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `pg1_login`
--

CREATE TABLE IF NOT EXISTS `pg1_login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `s_roll_no` int(6) NOT NULL,
  `year` text NOT NULL,
  `sem` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pg1_login`
--

INSERT INTO `pg1_login` (`ID`, `s_roll_no`, `year`, `sem`) VALUES
(12, 501460, 'III', 'VI');
