-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2019 at 10:47 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp`
--

-- --------------------------------------------------------

--
-- Table structure for table `emps`
--

CREATE TABLE `emps` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emps`
--

INSERT INTO `emps` (`id`, `name`, `address`) VALUES
(1, 'hamza', 'gulshanbhear'),
(2, 'ali', 'gulshanzia'),
(3, 'usama', 'haydrabad'),
(4, 'hamzashah', 'ghaziabad'),
(5, 'kainat', 'gulshanbhear'),
(6, 'thair', 'haydre'),
(7, 'uzaid', '1number'),
(8, 'faizan', 'sector11'),
(9, 'wasim', 'l-block'),
(10, 'shakil', 'nagan'),
(11, 'maham', '5c4'),
(12, 'zubair', 's3ctor16'),
(13, 'shabaz', 'tohidcolony'),
(14, 'daniyal', 'banaras'),
(15, 'kamran', 'jackapabad'),
(16, 'hammad', 'aziznagar'),
(17, 'jamil', 'gulshanzia'),
(18, 'salambheari', '15number'),
(19, 'hamza', '123d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emps`
--
ALTER TABLE `emps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emps`
--
ALTER TABLE `emps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
