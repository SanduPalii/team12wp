-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 06, 2022 at 05:14 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coliving_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE `apartment` (
  `apartment_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `wifi` int(11) NOT NULL,
  `beds` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`apartment_id`, `price`, `available`, `wifi`, `beds`, `rooms`, `baths`, `size`) VALUES
(14, 600, 1, 200, 12, 7, 7, 600),
(18, 500, 0, 123, 2, 1, 1, 30),
(19, 234, 1, 200, 4, 2, 3, 144),
(20, 211, 1, 1, 4, 2, 2, 144),
(23, 890, 1, 150, 12, 3, 2, 87);

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `ID_contact` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`ID_contact`, `Name`, `Email`, `Country`, `Message`) VALUES
(4, 'Sandu', 'palii.sandu@gmail.com', 'Finland', 'Hello Deepak!');

-- --------------------------------------------------------

--
-- Table structure for table `Contract`
--

CREATE TABLE `Contract` (
  `ID_contract` int(11) NOT NULL,
  `ID_customer` varchar(30) NOT NULL,
  `Date_start` date NOT NULL,
  `Date_end` date NOT NULL,
  `Price` varchar(10) NOT NULL,
  `ID_staff` varchar(30) NOT NULL,
  `ID_apartment` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Main table';

--
-- Dumping data for table `Contract`
--

INSERT INTO `Contract` (`ID_contract`, `ID_customer`, `Date_start`, `Date_end`, `Price`, `ID_staff`, `ID_apartment`) VALUES
(7, 'Customer', '2022-03-08', '2022-03-08', '', 'Staff', 'Apartment'),
(8, 'Customer', '2021-03-08', '2021-03-08', '', 'Customer', '18'),
(9, 'Mike', '2022-03-10', '2023-03-10', '700', 'Antonio', '19');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `ID_customer` int(11) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `Pass_id` varchar(15) NOT NULL,
  `Phone_num` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`ID_customer`, `F_name`, `L_name`, `Pass_id`, `Phone_num`, `Email`) VALUES
(2, 'Nick', 'Ugy', 'AB99882122', '+358 43 553 123', 'nick.ugy@gmail.com'),
(3, 'Ricky', 'Tramp', 'AB23423498', '+358', 'rick.tramp@gmail.com'),
(4, 'Mike', 'Bossy', 'AB92348282', '+358 43 553 999', 'mike.bossy@gmail.com'),
(10, 'Sandu', 'Palii', 'BB990099221', '0466861544', 'palii.sandu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', '1234', 'admin'),
(2, 'user', '1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `Newsletter`
--

CREATE TABLE `Newsletter` (
  `ID_newsletter` int(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE `Staff` (
  `ID_staff` int(11) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Commision` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`ID_staff`, `F_name`, `L_name`, `Email`, `Commision`) VALUES
(1, 'Maria', 'Jackson', 'maria.jackson@gmail.com', '123'),
(3, 'Soso', 'Mimi', 'soso.mimi@gmail.com', '8%'),
(5, 'ADSASDASDA', '', '', ''),
(6, 'Asdasd', 'OAISndonof', 'amda@gaafn.ascm', '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`apartment_id`);

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`ID_contact`);

--
-- Indexes for table `Contract`
--
ALTER TABLE `Contract`
  ADD PRIMARY KEY (`ID_contract`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`ID_customer`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Newsletter`
--
ALTER TABLE `Newsletter`
  ADD PRIMARY KEY (`ID_newsletter`);

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`ID_staff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartment`
--
ALTER TABLE `apartment`
  MODIFY `apartment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `ID_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `Contract`
--
ALTER TABLE `Contract`
  MODIFY `ID_contract` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `ID_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Newsletter`
--
ALTER TABLE `Newsletter`
  MODIFY `ID_newsletter` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Staff`
--
ALTER TABLE `Staff`
  MODIFY `ID_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
