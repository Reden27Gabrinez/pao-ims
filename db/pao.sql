-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 05:42 PM
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
  `categories` varchar(255) NOT NULL,
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

INSERT INTO `fem` (`id`, `user`, `municipality`, `name_owner`, `location`, `type_owner`, `categories`, `fem`, `units`, `capacity`, `brand`, `mode_aquisition`, `cost_aquisition`, `yr_acquired`, `use_facility`, `facility_cond`, `commodity`, `engine_brand`, `horsepower`, `created_at`, `updated_at`) VALUES
(1, '14', 'Oroquieta', 'Arnulfo A. Migriño', 'Pines, Oroq. City', 'Individual', 'Machinery', 'Mud Tractor', '1', '0.75 ha./day', '', 'Purchase', '', '', 'Private use', 'Functional', 'Rice', '', '', '2022-10-14 23:58:31', '2022-10-22 12:51:49'),
(13, '14', 'Oroquieta', 'Francisco C. Cuting', 'Pines, Oroq. City', 'Individual', 'Machinery', 'Mud Tractor', '1', '0.75 ha./day', '', 'Purchase', '', '', 'Private use', 'Functional', 'Rice', '', '', '2022-10-20 09:28:42', '2022-10-22 12:51:53'),
(14, '18', 'Aloran', 'fsd', 'gfd', 'Individual', 'Equipment', 'Ricemill', '', '', '', 'Loan', '', '', 'Coop', 'Functional', 'Rice & Corn', '', '', '2022-10-20 10:04:33', '2022-10-22 13:00:37'),
(15, '14', 'Oroquieta', 'Lita M. Sumiguid', 'Pines, Oroq. City', 'Individual', 'Machinery', 'Mud Tractor', '1', '0.75 ha./day', '', 'Purchase', '', '', 'Private use', 'Functional', 'Rice', '', '', '2022-10-21 02:44:30', '2022-10-22 15:26:30'),
(16, '14', 'Oroquieta', 'asfafasf', 'dsaasda', 'Individual', 'Machinery', 'Mud Tractor', '1', '0.75 ha./day', 'czxczx', 'Purchase', 'assd', 'dfsdf', 'Private use', 'Functional', 'Rice', 'hjk', 'xzC', '2022-10-21 02:54:41', '2022-10-22 12:52:10'),
(17, '20', 'Baliangao', 'Lita M. Sumiguid', 'Pines, Oroq. City', 'Individual', 'Machinery', 'Mud Tractor', '1', '0.75 ha./day', 'czxczx', 'Purchase', 'sad', 'asd', 'Private use', 'Functional', 'Rice', 'hjk', 'asd', '2022-10-21 02:59:14', '2022-10-22 12:52:13'),
(18, '14', 'Oroquieta', 'oro', 'sdf', 'Individual', 'Facility', 'Ricemill', '23', '2asd', 'fgsadf', 'Counterparting', 'asdfdd2we', '4234', 'Coop', 'Repair', 'Rice & Corn', '13', '13', '2022-10-22 15:27:30', '2022-10-22 15:27:30');

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
(47, 'Oroquieta', 'Oroquieta City | Login', '2022-10-20 09:26:40'),
(48, 'Oroquieta', 'Oroquieta City | Logout', '2022-10-20 09:47:07'),
(49, 'Aloran', 'Aloran | Login', '2022-10-20 10:04:08'),
(50, 'Aloran', 'Aloran | Logout', '2022-10-20 10:06:00'),
(51, 'Oroquieta', 'Oroquieta City | Login', '2022-10-20 10:12:39'),
(52, 'Oroquieta', 'Oroquieta City | Logout', '2022-10-20 10:13:09'),
(53, 'Aloran', 'Aloran | Login', '2022-10-21 02:38:07'),
(54, 'Aloran', 'Aloran | Logout', '2022-10-21 02:40:04'),
(55, 'Oroquieta', 'Oroquieta City | Login', '2022-10-21 02:40:20'),
(56, 'Oroquieta', 'Oroquieta City | Logout', '2022-10-21 02:49:55'),
(57, 'Baliangao', 'Jennifer Amihan | Login', '2022-10-21 02:50:12'),
(58, 'Baliangao', 'Jennifer Amihan | Logout', '2022-10-21 02:51:04'),
(59, 'Oroquieta', 'Oroquieta City | Login', '2022-10-21 02:51:29'),
(60, 'Oroquieta', 'Oroquieta City | Logout', '2022-10-21 02:57:23'),
(61, 'Baliangao', 'Jennifer Amihan | Login', '2022-10-21 02:57:41'),
(62, 'Baliangao', 'Jennifer Amihan | Logout', '2022-10-21 02:58:23'),
(63, 'Baliangao', 'Jennifer Amihan | Login', '2022-10-21 02:58:36'),
(64, 'Oroquieta', 'Oroquieta City | Login', '2022-10-22 15:09:31'),
(65, 'Oroquieta', 'Oroquieta City | Logout', '2022-10-22 15:27:42'),
(66, 'Oroquieta', 'Oroquieta City | Login', '2022-10-22 15:33:31'),
(67, 'Oroquieta', 'Oroquieta City | Logout', '2022-10-22 15:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `actions` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user`, `municipality`, `actions`, `timestamp`) VALUES
(7, 'Oroquieta City', 'Oroquieta', 'Added Francisco C. Cuting', '2022-10-20 09:28:42'),
(8, 'Aloran', 'Aloran', 'Added fsd', '2022-10-20 10:04:33'),
(9, 'Aloran', 'Aloran', 'Added 20-10-2022 of Reports', '2022-10-20 10:05:51'),
(10, 'Oroquieta City', 'Oroquieta', 'Added 20-10-2022 of Reports', '2022-10-20 10:13:04'),
(11, 'Oroquieta City', 'Oroquieta', 'Added Lita M. Sumiguid', '2022-10-21 02:44:30'),
(12, 'Oroquieta City', 'Oroquieta', 'Added asfafasf', '2022-10-21 02:54:41'),
(13, 'Jennifer Amihan', 'Baliangao', 'Added Lita M. Sumiguid', '2022-10-21 02:59:15'),
(14, 'Jennifer Amihan', 'Baliangao', 'Added 20-10-2022 of Reports', '2022-10-21 03:02:46'),
(15, 'Oroquieta City', 'Oroquieta', 'Updated Lita M. Sumiguid', '2022-10-22 15:26:30'),
(16, 'Oroquieta City', 'Oroquieta', 'Added oro', '2022-10-22 15:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `municipality` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `file_loc` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `municipality`, `name`, `file_loc`, `timestamp`) VALUES
(6, 'Aloran', 'Aloran', 'admin/reports/Aloran.20-10-2022.csv', '2022-10-20 10:05:51'),
(7, 'Oroquieta', 'Oroquieta City', 'admin/reports/Oroquieta.20-10-2022.csv', '2022-10-20 10:13:04'),
(8, 'Baliangao', 'Jennifer Amihan', 'admin/reports/Baliangao.20-10-2022.csv', '2022-10-21 03:02:46');

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
(3, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Admin', 'paoims123@gmail.com', '09632357966', 'Male', 'Administrator', '2022-10-11 04:14:24', '2022-10-18 07:17:12'),
(13, 'Municipality', 'jimenez', 'ee11cbb19052e40b07aac0ca060c23ee', 'Jimenez', 'Jimenez', 'jimenez@gmail.com', '09632357966', 'Female', 'IT Staff', '2022-10-18 07:48:43', '2022-10-18 07:48:43'),
(14, 'Municipality', 'oroquieta', 'ee11cbb19052e40b07aac0ca060c23ee', 'Oroquieta City', 'Oroquieta', 'oroquieta@gmail.com', '09632357966', 'Male', 'IT Staff', '2022-10-18 08:00:28', '2022-10-18 08:00:28'),
(15, 'Municipality', 'sinacaban', 'ee11cbb19052e40b07aac0ca060c23ee', 'Sinacaban', 'Sinacaban', 'sinacaban@gmail.com', '09632357966', 'Female', 'IT Staff', '2022-10-18 08:07:30', '2022-10-18 08:07:30'),
(16, 'Municipality', 'panaon', 'ee11cbb19052e40b07aac0ca060c23ee', 'Panaon', 'Panaon', 'panaon@gmail.com', '09632357966', 'Male', 'IT Staff', '2022-10-18 08:08:50', '2022-10-18 08:08:50'),
(17, 'Municipality', 'ozamis', 'ee11cbb19052e40b07aac0ca060c23ee', 'Ozamis City', 'Ozamis', 'ozamis@gmail.com', '09632357966', 'Female', 'IT Staff', '2022-10-19 08:39:45', '2022-10-19 08:39:45'),
(18, 'Municipality', 'aloran', 'ee11cbb19052e40b07aac0ca060c23ee', 'Aloran', 'Aloran', 'aloran@gmail.com', '096323577966', 'Male', 'IT Staff', '2022-10-20 10:03:12', '2022-10-20 10:03:12'),
(19, 'Municipality', 'tudela', 'a2aeac0b4eefcf7fcc3b6a9bd5e8bc63', 'Nige Balili', 'Tudela', 'balilinige@gmail.com', '09123456789', 'Female', 'IT Staff', '2022-10-21 02:29:27', '2022-10-21 02:29:27'),
(20, 'Municipality', 'baliangao', 'ee11cbb19052e40b07aac0ca060c23ee', 'Jennifer Amihan', 'Baliangao', 'amihanjennifer@gmail.com', '09123456789', 'Female', 'IT Staff', '2022-10-21 02:49:27', '2022-10-21 02:49:27');

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
