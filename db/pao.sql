-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 07:57 AM
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
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrato', 'Sinacaban', '', '', '', '', '2022-10-11 04:14:24', '2022-10-11 04:14:24'),
(2, 'Municipality', 'jimenez', '21232f297a57a5a743894a0e4a801fc3', 'JIMENEZ', 'Jimenez', '', '', '', '', '2022-10-11 04:14:24', '2022-10-11 04:14:24'),
(3, 'Municipality', 'oroquieta', '21232f297a57a5a743894a0e4a801fc3', 'OROQUIETA', 'Oroquieta', '', '', '', '', '2022-10-11 04:14:24', '2022-10-11 04:14:24'),
(4, 'Municipality', 'calamba', '21232f297a57a5a743894a0e4a801fc3', 'CALAMBA', 'Calamba', '', '', '', '', '2022-10-11 04:14:24', '2022-10-11 04:14:24'),
(5, 'Municipality', 'baliangao', '21232f297a57a5a743894a0e4a801fc3', 'BALIANGAO', 'Baliangao', '', '', '', '', '2022-10-11 04:14:24', '2022-10-11 04:14:24'),
(7, 'Municipality', 'maica', '202cb962ac59075b964b07152d234b70', 'Jamaica Vina', 'Oroquieta', 'jam@gmail.com', '09632357966', 'Female', 'IT Staff', '2022-10-11 04:28:14', '2022-10-11 04:29:52'),
(8, 'Municipality', 'jam', '202cb962ac59075b964b07152d234b70', 'ss', 'Sapang Dalaga', 'redgabrinez@gmail.com', '545', 'Male', 'IT Staff', '2022-10-11 04:36:05', '2022-10-11 04:36:05'),
(9, 'Municipality', 'reden', 'd9d4f495e875a2e075a1a4a6e1b9770f', 'dfs', 'Sapang Dalaga', 'reden@hiro-c.net', '265', 'Male', 'IT Staff', '2022-10-11 04:39:43', '2022-10-11 04:39:43'),
(10, 'Municipality', 'jam', 'c20ad4d76fe97759aa27a0c99bff6710', 'vd', 'Calamba', 'saldariega.ma.queennie09@gmail.com', '22', 'Female', 'Database Manager', '2022-10-11 04:41:14', '2022-10-11 04:41:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
