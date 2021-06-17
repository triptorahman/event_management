-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 07:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(100) NOT NULL,
  `event_title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `place_name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `event_date` int(100) DEFAULT NULL,
  `status` int(100) DEFAULT NULL,
  `posted_by` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `description`, `image`, `place_name`, `address`, `event_date`, `status`, `posted_by`) VALUES
(1, 'Sajek Tour', 'Start From Dhaka', 'asset/uploads/1622826182sajek.jpg', 'Sajek Bandarban', 'Dhaka', 1623952800, 1, 1),
(2, 'Ratargul Tour', 'Start From Dhaka', 'asset/uploads/1622826367ratargul.jpg', 'sylhet', 'Dhaka', 1624125600, 1, 1),
(3, 'Saint Martin Tour', 'Saint Martin 3 days Stay', 'asset/uploads/1622826409Saintmartin.jpg', 'Saint Martin', 'Dhaka', 1624557600, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_enroll`
--

CREATE TABLE `event_enroll` (
  `event_enroll_id` int(100) NOT NULL,
  `user_id` int(100) DEFAULT NULL,
  `event_id` int(100) DEFAULT NULL,
  `enroll_date` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_enroll`
--

INSERT INTO `event_enroll` (`event_enroll_id`, `user_id`, `event_id`, `enroll_date`) VALUES
(1, 2, 1, 1622743200),
(2, 2, 2, 1622743200),
(3, 3, 1, 1622743200);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(100) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date_of_birth` int(100) DEFAULT NULL,
  `join_date` int(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact_number` varchar(100) DEFAULT NULL,
  `user_type` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `first_name`, `last_name`, `user_name`, `email`, `password`, `date_of_birth`, `join_date`, `address`, `contact_number`, `user_type`) VALUES
(1, 'Md Samiur', 'Rahman', 'admin', 'triptorahman@gmail.com', 'admin', NULL, NULL, 'Banasree, Dhaka', '01714491616', 1),
(2, 'Tripto', 'Rahman', 'tripto', 'tripto@gmail.com', '12345', 1622484000, 1622743200, 'Banasree', '01758037522', 2),
(3, 'Supto', 'Rahman', 'supto123', 'supto@gmail.com', '12345', 1275501600, 1622743200, 'Dhaka', '01718910585', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_enroll`
--
ALTER TABLE `event_enroll`
  ADD PRIMARY KEY (`event_enroll_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_enroll`
--
ALTER TABLE `event_enroll`
  MODIFY `event_enroll_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
