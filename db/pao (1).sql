-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 03:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pao`
--

-- --------------------------------------------------------

--
-- Table structure for table `fem`
--

CREATE TABLE `fem` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `name_owner` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type_owner` varchar(255) NOT NULL,
  `fem` varchar(255) NOT NULL,
  `units` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `mode_aquisition` varchar(255) NOT NULL,
  `cost_aquisition` varchar(255) NOT NULL,
  `yr_acquired` varchar(255) NOT NULL,
  `use_facility` varchar(255) NOT NULL,
  `facility_cond` varchar(255) NOT NULL,
  `commodity` varchar(255) NOT NULL,
  `engine_brand` varchar(255) NOT NULL,
  `horsepower` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fem`
--

INSERT INTO `fem` (`id`, `user`, `municipality`, `name_owner`, `location`, `type_owner`, `fem`, `units`, `capacity`, `brand`, `mode_aquisition`, `cost_aquisition`, `yr_acquired`, `use_facility`, `facility_cond`, `commodity`, `engine_brand`, `horsepower`, `created_at`, `updated_at`) VALUES
(1, '', '', 'Arnulfo A. Migriño', 'Pines, Oroq. City', 'Individual', 'Mud Tractor', '1', '0.75 ha./day', '', 'Purchase', '', '', 'Private use', 'Functional', 'Rice', '', '', '2022-10-14 23:58:31', '2022-10-14 23:58:31'),
(3, '', '', 'red', 's2gdf', 'Individual', 'Mud Tractor', '32', '532', '132', 'Grant', '132', '132', 'Private use', 'Repair', 'Rice', '132', '132', '2022-10-15 21:57:55', '2022-10-15 22:21:45'),
(4, 'Pao de Arc', '', 'haha', 'dfs', 'Coop', 'Ricemill', '12', '43', 'sfdsz', 'Loan', 'fs', 'fsa', 'Custom Hire', 'Repair', 'Rice & Corn', 'r34e', '34', '2022-10-15 22:39:35', '2022-10-15 22:39:35'),
(5, '12', 'Baliangao', 's22342', 'Pines, Oroq. City', 'Trader', 'Tresher', '432', 'fsd', 'fsd', 'Loan', 'fsd', '423', 'Coop', 'Repair', 'Rice & Corn', 'r34e', '132', '2022-10-14 22:43:55', '2022-10-16 10:10:49'),
(6, '12', 'Baliangao', 'cx321', 'nn', 'Coop', 'Tresher', '432', '432', 'fds', 'Loan', 'rew', 'fsd', 'Public use', 'Repair', 'Corn', 'xxc', '423', '2022-10-15 22:56:40', '2022-10-16 10:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `actions` varchar(200) NOT NULL,
  `timesstamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user`, `actions`, `timesstamp`) VALUES
(3, 'Baliangao', 'Pao de Arc | Login', '2022-10-16 05:16:37'),
(4, '', ' | Logout', '2022-10-16 05:16:55'),
(5, 'Baliangao', 'Pao de Arc | Login', '2022-10-16 05:17:56'),
(6, 'Baliangao', 'Pao de Arc | Logout', '2022-10-16 05:18:18'),
(7, 'Baliangao', 'Pao de Arc | Login', '2022-10-16 05:19:47'),
(8, 'Baliangao', 'Pao de Arc | Logout', '2022-10-16 05:22:21'),
(9, 'Baliangao', 'Pao de Arc | Login', '2022-10-16 05:26:11'),
(10, 'Baliangao', 'Pao de Arc | Logout', '2022-10-16 05:27:07'),
(11, 'Baliangao', 'Pao de Arc | Login', '2022-10-16 09:55:57'),
(12, 'Baliangao', 'Pao de Arc | Logout', '2022-10-16 09:58:03'),
(13, 'Admin', 'Administrator | Logout', '2022-10-16 10:28:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` enum('Admin','Municipality') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `position` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `name`, `municipality`, `email`, `contact`, `sex`, `position`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Admin', '', '', '', '', '2022-10-11 04:14:24', '2022-10-11 10:01:04'),
(12, 'Municipality', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Pao de Arc', 'Baliangao', 'pao@gmail.com', '09632357966', 'Female', 'IT Staff', '2022-10-11 12:20:25', '2022-10-16 04:57:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fem`
--
ALTER TABLE `fem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fem`
--
ALTER TABLE `fem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
