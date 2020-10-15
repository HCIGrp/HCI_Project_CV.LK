-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 10:40 PM
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
-- Database: `hci_ui/ux`
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
(10, 'sdfsf', '16597db0a3b96d4f055006a28ba9a88ad506d3ad', 'sdfsdf', 'company_logos/50605656Bash configuration for Windows CMDexe refugees unsafePerformIO.png', 'sdfsdfsd', 'sdfsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_reg`
--
ALTER TABLE `company_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_reg`
--
ALTER TABLE `company_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
