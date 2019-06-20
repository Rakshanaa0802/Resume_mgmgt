-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 07:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume_mgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc_mgmt`
--

CREATE TABLE `doc_mgmt` (
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `doc_type` varchar(25) CHARACTER SET utf8 NOT NULL,
  `emp_code` varchar(25) CHARACTER SET utf8 NOT NULL,
  `filename` varchar(40) NOT NULL,
  `path` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_mgmt`
--

INSERT INTO `doc_mgmt` (`doc_id`, `doc_name`, `doc_type`, `emp_code`, `filename`, `path`, `size`) VALUES
(4, '313187_Chrysanthemum.jpg', 'jpg', '313187111', 'Chrysanthemum.jpg', 'uploads/Chrysanthemum.jpg', 879394),
(5, '313187_continents.jpg', 'jpg', '313187', 'continents.jpg', 'uploads/continents.jpg', 6370);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc_mgmt`
--
ALTER TABLE `doc_mgmt`
  ADD PRIMARY KEY (`doc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doc_mgmt`
--
ALTER TABLE `doc_mgmt`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
