-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 12:08 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marriage`
--

-- --------------------------------------------------------

--
-- Table structure for table `marriage_data`
--

CREATE TABLE `marriage_data` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `nidbridge` varchar(255) NOT NULL,
  `statusbridge` varchar(255) NOT NULL,
  `agmoney` int(11) NOT NULL,
  `agpaid` int(11) NOT NULL,
  `addresbridge` text NOT NULL,
  `agebridge` int(11) NOT NULL,
  `fnameGroom` varchar(30) NOT NULL,
  `lnameGroom` varchar(30) NOT NULL,
  `nidgroom` varchar(30) NOT NULL,
  `statusgroom` varchar(255) NOT NULL,
  `agmoneyGroom` int(11) NOT NULL,
  `agpaidGroom` int(11) NOT NULL,
  `addresGroom` text NOT NULL,
  `ukilNameOne` varchar(30) NOT NULL,
  `ukilIdOne` varchar(255) NOT NULL,
  `ukilNameTwo` varchar(255) NOT NULL,
  `ukilidTwo` varchar(255) NOT NULL,
  `ukilNameThree` varchar(255) NOT NULL,
  `ukilidThree` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marriage_data`
--

INSERT INTO `marriage_data` (`id`, `fname`, `lname`, `nidbridge`, `statusbridge`, `agmoney`, `agpaid`, `addresbridge`, `agebridge`, `fnameGroom`, `lnameGroom`, `nidgroom`, `statusgroom`, `agmoneyGroom`, `agpaidGroom`, `addresGroom`, `ukilNameOne`, `ukilIdOne`, `ukilNameTwo`, `ukilidTwo`, `ukilNameThree`, `ukilidThree`) VALUES
(8, 'Konna Not', 'Konna', '45454', 'Never Married', 45454, 4545, '', 44, 'Rahama', 'dfdfd', '5454', '', 4545, 454, '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marriage_data`
--
ALTER TABLE `marriage_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marriage_data`
--
ALTER TABLE `marriage_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
