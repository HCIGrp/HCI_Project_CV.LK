-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 05:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `promotion_ad`
--

CREATE TABLE `promotion_ad` (
  `Id` int(11) NOT NULL,
  `Company` varchar(80) CHARACTER SET latin1 NOT NULL,
  `Publisheddate` date NOT NULL,
  `Advertisement` varchar(300) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotion_ad`
--

INSERT INTO `promotion_ad` (`Id`, `Company`, `Publisheddate`, `Advertisement`) VALUES
(2, 'Apex Business Academy', '2020-10-18', ''),
(3, 'Wisdom Business Academy', '2020-10-09', ''),
(7, 'Abans PLC', '2020-10-05', ''),
(8, 'Softlogic ', '2020-11-04', ''),
(9, 'Kelly Felder', '2020-10-20', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `promotion_ad`
--
ALTER TABLE `promotion_ad`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `promotion_ad`
--
ALTER TABLE `promotion_ad`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
