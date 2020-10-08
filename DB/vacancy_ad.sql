-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2020 at 12:13 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hci`
--

-- --------------------------------------------------------

--
-- Table structure for table `vacancy_ad`
--

CREATE TABLE `vacancy_ad` (
  `Id` int(11) NOT NULL,
  `Company` varchar(80) NOT NULL,
  `Position` varchar(80) NOT NULL,
  `Opendate` date NOT NULL,
  `Closedate` date NOT NULL,
  `Advertisement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy_ad`
--

INSERT INTO `vacancy_ad` (`Id`, `Company`, `Position`, `Opendate`, `Closedate`, `Advertisement`) VALUES
(74, 'ABC (Pvt) Ltd', 'Tech Lead', '2020-09-28', '2020-10-22', ''),
(76, 'ABC (Pvt) Ltd', 'Engineer', '2020-09-29', '2020-12-10', ''),
(77, 'ABC (Pvt) Ltd', 'Engineer', '2020-09-29', '2020-12-10', ''),
(82, 'ABC (Pvt) Ltd', 'Associate Software Engineer', '2020-09-30', '2020-10-30', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vacancy_ad`
--
ALTER TABLE `vacancy_ad`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vacancy_ad`
--
ALTER TABLE `vacancy_ad`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
