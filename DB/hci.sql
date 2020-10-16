-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 08:10 PM
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
-- Table structure for table `company_reg`
--

CREATE TABLE `company_reg` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_reg`
--

INSERT INTO `company_reg` (`id`, `email`, `password`, `company_name`, `profile_img`, `address`, `phone`) VALUES
(1, '', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', 'company_logos/12589446', '', 'admin'),
(2, '', '16597db0a3b96d4f055006a28ba9a88ad506d3ad', 'company', 'company_logos/77001144', 'address', 'contact'),
(3, '', '16597db0a3b96d4f055006a28ba9a88ad506d3ad', 'sdfsdf', 'company_logos/31102968', 'sdfsf', 'sdfsd'),
(4, '', '16597db0a3b96d4f055006a28ba9a88ad506d3ad', 'sdfsdf', 'company_logos/78518201anonymous-c0af8ad3-9f27-4ad5-b954-e0f8aee6d683.jpg', 'sdfsf', 'sdfsd'),
(5, 'sdfsfd', '16597db0a3b96d4f055006a28ba9a88ad506d3ad', 'sdfsdf', 'company_logos/41378891anonymous-c0af8ad3-9f27-4ad5-b954-e0f8aee6d683.jpg', 'sdfsf', 'sdfsd'),
(6, 'sdf@sdfsd.sdfs', '16597db0a3b96d4f055006a28ba9a88ad506d3ad', 'dfsdfsd', 'company_logos/25237521hd-anonymous_123836285_275.jpg', 'sdfsd', 'sdfsdfsdf'),
(7, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'sdfsdf', 'company_logos/97969065car-1281640_1920.jpg', 'sdfsdf', 'sdfsdf'),
(8, 'sdf', '16597db0a3b96d4f055006a28ba9a88ad506d3ad', 'dfsdfsd', 'company_logos/29826094Bash configuration for Windows CMDexe refugees unsafePerformIO.png', 'sdfsdfsdsdf', 'sdfsd'),
(9, 'sdf', '16597db0a3b96d4f055006a28ba9a88ad506d3ad', 'dfsdfsd', 'company_logos/40245779Bash configuration for Windows CMDexe refugees unsafePerformIO.png', 'sdfsdfsdsdf', 'sdfsd'),
(10, 'sdfsf', '16597db0a3b96d4f055006a28ba9a88ad506d3ad', 'sdfsdf', 'company_logos/50605656Bash configuration for Windows CMDexe refugees unsafePerformIO.png', 'sdfsdfsd', 'sdfsdf'),
(11, 'qwerty@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ABC (Pvt) Ltd', 'company_logos/495480153.jpg', 'www', '0111234567');

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
(82, 'ABC (Pvt) Ltd', 'Associate Software Engineer', '2020-09-30', '2020-10-30', ''),
(84, 'ABC (Pvt) Ltd', 'Quantity Surveyor', '2020-10-10', '2020-10-30', ''),
(89, 'ABC (Pvt) Ltd', 'Biomedical Engineer', '2020-10-13', '2020-11-12', ''),
(90, 'ABC (Pvt) Ltd', 'Senior Quantity Surveyor', '2020-10-13', '2020-11-12', ''),
(92, 'ABC (Pvt) Ltd', 'Social Media manager ', '2020-10-13', '2020-11-12', ''),
(95, 'ABC (Pvt) Ltd', 'Customer Initiative Associate', '2020-10-16', '2020-11-07', ''),
(96, 'ABC (Pvt) Ltd', 'Accountant', '2020-10-16', '2020-11-15', ''),
(97, 'ABC (Pvt) Ltd', 'Draftsman', '2020-10-16', '2020-11-15', 'vacancy_advertisements/570060493.jpg'),
(98, 'ABC (Pvt) Ltd', 'Tech Lead', '2020-10-16', '2020-11-15', 'company_logos/67804305');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_reg`
--
ALTER TABLE `company_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion_ad`
--
ALTER TABLE `promotion_ad`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `vacancy_ad`
--
ALTER TABLE `vacancy_ad`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_reg`
--
ALTER TABLE `company_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `promotion_ad`
--
ALTER TABLE `promotion_ad`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vacancy_ad`
--
ALTER TABLE `vacancy_ad`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
