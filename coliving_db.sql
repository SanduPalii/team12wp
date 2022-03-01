-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 01, 2022 at 09:56 AM
-- Server version: 8.0.27
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
  `apartment_id` int NOT NULL,
  `price` int NOT NULL,
  `available` tinyint(1) NOT NULL,
  `wifi` int NOT NULL,
  `beds` int NOT NULL,
  `rooms` int NOT NULL,
  `baths` int NOT NULL,
  `size` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`apartment_id`, `price`, `available`, `wifi`, `beds`, `rooms`, `baths`, `size`) VALUES
(14, 600, 1, 200, 12, 7, 7, 500),
(18, 500, 0, 123, 2, 1, 1, 30),
(19, 234, 1, 200, 4, 2, 3, 144),
(20, 211, 1, 1, 4, 2, 2, 144),
(22, 800, 1, 200, 3, 3, 2, 60),
(23, 890, 1, 150, 12, 3, 2, 87),
(24, 500, 0, 233, 4, 2, 1, 57);

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `ID_contact` int NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Contract`
--

CREATE TABLE `Contract` (
  `ID_contract` int NOT NULL,
  `ID_customer` int NOT NULL,
  `Date_start` date NOT NULL,
  `Date_end` date NOT NULL,
  `Price` int NOT NULL,
  `ID_staff` int NOT NULL,
  `ID_apartment` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Main table';

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `ID_customer` int NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `Pass_id` varchar(15) NOT NULL,
  `Phone_num` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `ID_newsletter` int NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE `Staff` (
  `ID_staff` int NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Commision` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  MODIFY `apartment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `ID_contact` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Contract`
--
ALTER TABLE `Contract`
  MODIFY `ID_contract` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `ID_customer` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Newsletter`
--
ALTER TABLE `Newsletter`
  MODIFY `ID_newsletter` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Staff`
--
ALTER TABLE `Staff`
  MODIFY `ID_staff` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
