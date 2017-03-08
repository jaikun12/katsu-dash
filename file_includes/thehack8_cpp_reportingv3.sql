-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2017 at 08:32 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thehack8_cpp_reporting`
--

-- --------------------------------------------------------

--
-- Table structure for table `reports_child_table`
--

CREATE TABLE `reports_child_table` (
  `child_id` int(15) NOT NULL,
  `child_firstname` varchar(45) NOT NULL,
  `child_middlename` varchar(45) NOT NULL,
  `child_lastname` varchar(45) NOT NULL,
  `child_prefix` varchar(45) NOT NULL,
  `child_birthdate` varchar(15) NOT NULL,
  `child_age` int(2) NOT NULL,
  `child_sex` varchar(15) NOT NULL,
  `child_religion` varchar(45) NOT NULL,
  `child_region` varchar(45) NOT NULL,
  `child_province` varchar(45) NOT NULL,
  `child_city_mun` varchar(45) NOT NULL,
  `child_barangay` varchar(45) NOT NULL,
  `child_place_of_origin` varchar(200) NOT NULL,
  `child_type_of_case` varchar(900) NOT NULL,
  `child_modes_of_victimization` varchar(900) NOT NULL,
  `child_perpetrators` varchar(900) NOT NULL,
  `child_case_origin` varchar(45) NOT NULL,
  `child_intake` varchar(45) NOT NULL,
  `child_cooperating_agencies` varchar(45) NOT NULL,
  `child_interventions_provided` varchar(45) NOT NULL,
  `child_status_of_cases` varchar(45) NOT NULL,
  `user_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reports_login_logs`
--

CREATE TABLE `reports_login_logs` (
  `login_log_id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `time_log` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reports_users_table`
--

CREATE TABLE `reports_users_table` (
  `user_id` int(15) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(75) NOT NULL,
  `is_admin` int(2) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `is_active` int(2) NOT NULL,
  `time_created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `contact_num` varchar(15) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) NOT NULL DEFAULT 'super admin'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports_users_table`
--

INSERT INTO `reports_users_table` (`user_id`, `username`, `password`, `is_admin`, `firstname`, `middlename`, `lastname`, `is_active`, `time_created`, `contact_num`, `email`, `created_by`) VALUES
(1, 'report_admin', '!@Fugcg161Fy6', 1, 'Miguel', 'Lukban', 'Osio', 1, '2017-03-08 06:09:47.174280', '123456789', 'sample@gmail.com', 'super admin'),
(2, 'jaikun12', '!@Fugcg161Fy6', 1, 'John', 'Alvarez', 'Lim', 1, '2017-03-08 06:09:47.174280', '123456789', 'sample@gmail.com', 'super admin'),
(3, 'tin-aquino', '!@Fugcg161Fy6', 1, 'Kristine', 'Alvarez', 'Aquino', 1, '2017-03-08 06:09:47.174280', '123456789', 'sample@gmail.com', 'super admin'),
(4, 'report_user', '!@J4Q/0zUJamw', 0, 'Shi Jin', 'NA', 'Yoo', 1, '2017-03-08 06:09:47.175283', '091234567', 'sample@gmail.com', 'super admin'),
(5, 'boazcstrike', '!@J4Q/0zUJamw', 0, 'Boaz', 'Y', 'Sy', 1, '2017-03-08 06:09:47.175283', '091234567', 'sample@gmail.com', 'super admin'),
(6, 'rappy', '!@J4Q/0zUJamw', 0, 'John', 'Tiongson', 'Sevilla', 1, '2017-03-08 06:09:47.175283', '091234567', 'sample@gmail.com', 'super admin'),
(7, 'report_inactive', '!@D5mroWvawd6', 1, 'Shi Jin', 'NA', 'Yoo', 0, '2017-03-08 06:09:47.175283', '092323231', 'sample@gmail.com', 'super admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reports_child_table`
--
ALTER TABLE `reports_child_table`
  ADD PRIMARY KEY (`child_id`);

--
-- Indexes for table `reports_login_logs`
--
ALTER TABLE `reports_login_logs`
  ADD PRIMARY KEY (`login_log_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `reports_users_table`
--
ALTER TABLE `reports_users_table`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reports_child_table`
--
ALTER TABLE `reports_child_table`
  MODIFY `child_id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reports_login_logs`
--
ALTER TABLE `reports_login_logs`
  MODIFY `login_log_id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reports_users_table`
--
ALTER TABLE `reports_users_table`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
