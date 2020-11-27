-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2020 at 04:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cab`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `distance` varchar(100) NOT NULL,
  `is_available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`id`, `name`, `distance`, `is_available`) VALUES
(1, 'Charbagh', '0', 1),
(2, 'Indira Nagar', '10', 1),
(3, 'BBD', '30', 1),
(4, 'Barabanki', '60', 1),
(5, 'Faizabad', '100', 1),
(6, 'Basti', '150', 1),
(10, 'Gorakhpur', '210', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ride`
--

CREATE TABLE `tbl_ride` (
  `ride_id` int(11) NOT NULL,
  `ride_date` date NOT NULL,
  `from_loc` varchar(30) NOT NULL,
  `to_loc` varchar(30) NOT NULL,
  `total_distance` varchar(10) NOT NULL,
  `cab_type` varchar(200) NOT NULL,
  `luggage` varchar(10) NOT NULL,
  `total_fare` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `customer_user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ride`
--

INSERT INTO `tbl_ride` (`ride_id`, `ride_date`, `from_loc`, `to_loc`, `total_distance`, `cab_type`, `luggage`, `total_fare`, `status`, `customer_user_id`) VALUES
(4, '2020-11-27', 'Charbagh', 'Barabanki', '60', 'CedMicro', '0', '785', 2, '2'),
(5, '2020-11-27', 'Charbagh', 'Indira Nagar', '10', 'CedMicro', '', '185', 2, '3'),
(6, '2020-11-30', 'Charbagh', 'Faizabad', '100', 'CedMini', '10', '200', 2, '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date_of_signup` datetime NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `is_block` tinyint(1) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `name`, `date_of_signup`, `mobile`, `is_block`, `password`, `isAdmin`) VALUES
(1, 'admin', 'Ismail', '2020-11-26 11:34:36', '9161220126', 1, '5f4dcc3b5aa765d61d8327deb882cf99', 1),
(2, 'ismail', 'ismail', '2020-11-26 11:34:59', '9161220125', 1, '5f4dcc3b5aa765d61d8327deb882cf99', 0),
(3, 'umar', 'umar', '2020-11-26 12:31:11', '23323232', 0, '92deb3f274aaee236194c05729bfa443', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ride`
--
ALTER TABLE `tbl_ride`
  ADD PRIMARY KEY (`ride_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_ride`
--
ALTER TABLE `tbl_ride`
  MODIFY `ride_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
