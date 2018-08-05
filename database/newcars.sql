-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2018 at 06:25 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newcars`
--

-- --------------------------------------------------------

--
-- Table structure for table `financing_tbl`
--

CREATE TABLE `financing_tbl` (
  `financing_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `model` varchar(100) DEFAULT NULL,
  `price` decimal(20,2) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `purpose` varchar(100) DEFAULT NULL,
  `downpayment` decimal(20,2) DEFAULT NULL,
  `term` varchar(100) DEFAULT NULL,
  `amount` decimal(20,2) DEFAULT NULL,
  `emp_status` varchar(100) DEFAULT NULL,
  `income` decimal(20,2) DEFAULT NULL,
  `expenses` varchar(255) DEFAULT NULL,
  `bank_rel` varchar(255) DEFAULT NULL,
  `bday` datetime DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dependents` int(10) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `time_call` varchar(100) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_tbl`
--

CREATE TABLE `inquiry_tbl` (
  `inquiry_id` int(10) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `eadd` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `buy_range` varchar(255) DEFAULT NULL,
  `bank_loan` varchar(255) DEFAULT NULL,
  `contact_alt` varchar(13) DEFAULT NULL,
  `time_call` varchar(100) NOT NULL,
  `model` varchar(255) NOT NULL,
  `source` varchar(100) NOT NULL,
  `date` datetime DEFAULT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry_tbl`
--

INSERT INTO `inquiry_tbl` (`inquiry_id`, `contact`, `eadd`, `address`, `message`, `buy_range`, `bank_loan`, `contact_alt`, `time_call`, `model`, `source`, `date`, `name`) VALUES
(1, '09176279173<b', 'reymond.diestro@gmail.com<br/>', 'test<br/>', '<br/>', '<br/>', '<br/>', '<br/>', '<br/>', 'toyota vios at<br/>', 'model page<br/>', '2018-07-09 10:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `date`) VALUES
(1, 'reymond.diestro@gmail.com', '2018-06-06 11:03:54'),
(2, 'reymond.diestro@carmudi.com.ph', '2018-06-06 12:09:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `financing_tbl`
--
ALTER TABLE `financing_tbl`
  ADD PRIMARY KEY (`financing_id`);

--
-- Indexes for table `inquiry_tbl`
--
ALTER TABLE `inquiry_tbl`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `financing_tbl`
--
ALTER TABLE `financing_tbl`
  MODIFY `financing_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inquiry_tbl`
--
ALTER TABLE `inquiry_tbl`
  MODIFY `inquiry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
