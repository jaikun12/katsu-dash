-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2017 at 03:25 AM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thehack8_cpp_reporting`
--
CREATE DATABASE IF NOT EXISTS `thehack8_cpp_reporting` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `thehack8_cpp_reporting`;

-- --------------------------------------------------------

--
-- Table structure for table `reports_login_logs`
--

CREATE TABLE IF NOT EXISTS `reports_login_logs` (
  `login_log_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `time_log` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reports_users_table`
--

CREATE TABLE IF NOT EXISTS `reports_users_table` (
  `user_id` int(15) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(75) NOT NULL,
  `is_admin` int(2) NOT NULL,
  `firstname` int(45) NOT NULL,
  `middlename` int(45) NOT NULL,
  `lastname` int(45) NOT NULL,
  `is_active` int(2) NOT NULL,
  `time_created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `contact_num` varchar(15) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reports_users_table`
--
ALTER TABLE `reports_users_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reports_users_table`
--
ALTER TABLE `reports_users_table`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
