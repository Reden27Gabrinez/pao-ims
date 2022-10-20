-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 05:39 AM
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
(1, '14', 'Oroquieta', 'Arnulfo A. Migriño', 'Pines, Oroq. City', 'Individual', 'Mud Tractor', '1', '0.75 ha./day', '', 'Purchase', '', '', 'Private use', 'Functional', 'Rice', '', '', '2022-10-14 23:58:31', '2022-10-18 08:10:18');

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
(3, 'Pao de Arc', 'Baliangao', 'Added cxz', '2022-10-19 14:32:59'),
(4, 'Pao de Arc', 'Baliangao', 'Updated cxz2', '2022-10-19 14:33:27'),
(5, 'Jimenez', 'Jimenez', 'Added 20-10-2022 of Reports', '2022-10-20 00:00:05'),
(6, 'Jimenez', 'Jimenez', 'Added 20-10-2022 of Reports', '2022-10-20 00:02:45');

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
(12, 'Municipality', 'baliangao', 'ee11cbb19052e40b07aac0ca060c23ee', 'Pao de Arc', 'Baliangao', 'pao@gmail.com', '09632357966', 'Female', 'IT Staff', '2022-10-11 12:20:25', '2022-10-18 07:47:51'),
(13, 'Municipality', 'jimenez', 'ee11cbb19052e40b07aac0ca060c23ee', 'Jimenez', 'Jimenez', 'jimenez@gmail.com', '09632357966', 'Female', 'IT Staff', '2022-10-18 07:48:43', '2022-10-18 07:48:43'),
(14, 'Municipality', 'oroquieta', 'ee11cbb19052e40b07aac0ca060c23ee', 'Oroquieta City', 'Oroquieta', 'oroquieta@gmail.com', '09632357966', 'Male', 'IT Staff', '2022-10-18 08:00:28', '2022-10-18 08:00:28'),
(15, 'Municipality', 'sinacaban', 'ee11cbb19052e40b07aac0ca060c23ee', 'Sinacaban', 'Sinacaban', 'sinacaban@gmail.com', '09632357966', 'Female', 'IT Staff', '2022-10-18 08:07:30', '2022-10-18 08:07:30'),
(16, 'Municipality', 'panaon', 'ee11cbb19052e40b07aac0ca060c23ee', 'Panaon', 'Panaon', 'panaon@gmail.com', '09632357966', 'Male', 'IT Staff', '2022-10-18 08:08:50', '2022-10-18 08:08:50'),
(17, 'Municipality', 'ozamis', 'ee11cbb19052e40b07aac0ca060c23ee', 'Ozamis City', 'Ozamis', 'ozamis@gmail.com', '09632357966', 'Female', 'IT Staff', '2022-10-19 08:39:45', '2022-10-19 08:39:45');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
