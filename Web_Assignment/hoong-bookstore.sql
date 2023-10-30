-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2022 at 10:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoong-bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cus_ID` int(10) NOT NULL,
  `Username` varchar(18) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Contact` varchar(11) NOT NULL,
  `Shipping_Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cus_ID`, `Username`, `Password`, `Name`, `Contact`, `Shipping_Address`) VALUES
(1, 'test', 'pass', 'abc', '0127383746', 'Jalan Testing'),
(2, 'test1', 'password', 'def', '0110293847', 'Jalan Anywhere'),
(3, 'test2', 'PASSWORD', 'ghi', '01345678902', 'Jalan Jalan'),
(4, 'test3', 'PassWord', 'jkl', '01456789023', 'Jalan Besar'),
(5, 'test4', 'PassworD', 'abc', '0111234567', 'Jalan Kecil'),
(6, 'testuser', 'password', 'hello', '01235678901', 'Jalan Kecil 2'),
(7, 'demo', 'testing', 'Chai Hoong', '01345682425', 'Jalan Bangsar'),
(8, 'test10', 'password', 'asaca', '0129873456', 'Jalan Sederhana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cus_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cus_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
