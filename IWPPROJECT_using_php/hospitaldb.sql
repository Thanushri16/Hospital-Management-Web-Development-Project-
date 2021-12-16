-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2019 at 04:30 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appno` int(11) NOT NULL,
  `apptime` varchar(11) NOT NULL,
  `appdate` date NOT NULL,
  `appdoc` int(11) NOT NULL,
  `apppat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appno`, `apptime`, `appdate`, `appdoc`, `apppat`) VALUES
(0, '', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `dno` int(11) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `ddob` date NOT NULL,
  `dgen` varchar(10) NOT NULL,
  `dspec` varchar(30) NOT NULL,
  `dmob` int(10) NOT NULL,
  `dmail` varchar(30) NOT NULL,
  `dpass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`dno`, `dname`, `ddob`, `dgen`, `dspec`, `dmob`, `dmail`, `dpass`) VALUES
(0, 'Kavishna Sekar', '2019-09-04', '2', 'ENT Specialist', 774607490, 'rijukris99@gmail.com', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pno` int(11) NOT NULL,
  `pfname` varchar(30) NOT NULL,
  `plname` varchar(30) NOT NULL,
  `pdob` date NOT NULL,
  `pgen` varchar(10) NOT NULL,
  `pcountry` varchar(30) NOT NULL,
  `pmobile` int(10) NOT NULL,
  `pmail` varchar(30) NOT NULL,
  `ppass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appno`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`dno`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
