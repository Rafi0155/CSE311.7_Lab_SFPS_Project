-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 01:25 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sfps_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `enrolment`
--

CREATE TABLE `enrolment` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` char(100) NOT NULL,
  `PHONE_NO` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `GENDER` char(7) NOT NULL,
  `COURSE_CODE` char(20) NOT NULL,
  `AMOUNT` double(8,3) NOT NULL,
  `ENROLL_DATE` date NOT NULL,
  `PAYMENT_STATUS` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolment`
--

INSERT INTO `enrolment` (`ID`, `NAME`, `EMAIL`, `PHONE_NO`, `DOB`, `GENDER`, `COURSE_CODE`, `AMOUNT`, `ENROLL_DATE`, `PAYMENT_STATUS`) VALUES
(10, 'name', 'a@email.com', 198, '2015-12-17', 'Male', 'cse311', 6000.000, '2015-12-17', 0),
(80, 'rafi', 'mushfique.rafi@northsouth.edu', 123456789, '2022-12-09', 'Male', 'eee', 50000.000, '2022-12-06', 0),
(456987, 'all', 'wasif.udoy@northsouth.edu', 987654, '2022-12-13', 'Male', 'soc', 70000.000, '2022-12-05', 0),
(1233212, 'a', 'alifabdullahsiam@gmail.com', 123321, '2022-12-22', 'Others', 'env', 5555.000, '2022-12-06', 0),
(222555888, 'allall', 'allall@gmail.com', 998855, '2022-12-13', 'Female', 'pay154', 99999.999, '2022-12-06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_db`
--

CREATE TABLE `login_db` (
  `Email` char(100) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `User_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_db`
--

INSERT INTO `login_db` (`Email`, `User_Name`, `User_Password`) VALUES
('a', 'a', '1'),
('alifabdullahsiam@gmail.com', 'a', 'a'),
('b', 'b', '0'),
('n', 'n', 'n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrolment`
--
ALTER TABLE `enrolment`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `login_db`
--
ALTER TABLE `login_db`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
