-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 09:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `numina_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `sr_no` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `about` varchar(25) NOT NULL,
  `our_product` varchar(25) NOT NULL,
  `reasearch_and_development` varchar(25) NOT NULL,
  `f_and_q` varchar(25) NOT NULL,
  `contect_us` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `sub_title` varchar(150) NOT NULL,
  `short_description` varchar(500) NOT NULL,
  `long_description` varchar(1500) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `sub_title`, `short_description`, `long_description`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Antacid', 'Fast relief for heartburn & indigestion', 'Relief in 60 Secs', 'long Descriptio', 'Go to Antacid', NULL, '2024-11-05 09:10:44'),
(2, 'Antibiotics', 'Targeted treatments for bacterial infections', '1 Solution for Every Infection', '1 Solution for Every Infection 1 Solution for Every Infection', 'Go to Antibiotics', '2024-10-28 12:39:27', '2024-10-28 12:39:27'),
(3, 'Analgesic', 'Fast-acting solutions to manage pain', 'Pain Relief in 30 Mins', 'Pain Relief in 30 Mins Pain Relief in 30 Mins', 'Go to Analgesic', '2024-10-29 05:59:41', '2024-10-29 05:59:41'),
(4, 'Analgesic, Antipyretic, and Anti-emetic', 'Pain, fever, and nausea relief in one drug', 'Triple Action, 1 Pill', 'Triple Action, 1 Pill Triple Action, 1 Pill', 'Go to Analgesic, Antipyretic, and Anti-emetic', '2024-10-29 06:36:50', '2024-11-05 09:09:40'),
(5, 'Analgesic & Anti-inflammatory', 'Relieves pain and controls inflammation', 'Dual Action in 45 Minutes', 'Dual Action in 45 Minutes Dual Action in 45 Minutes', 'Go to Analgesic & Anti-inflammatory', '2024-10-29 09:46:30', '2024-10-29 09:46:30'),
(6, 'Anti-allergic', 'Rapid relief from allergy symptoms', 'Breathe Easy in 5 Minutes', 'Breathe Easy in 5 Minutes Breathe Easy in 5 Minutes', 'Go to Anti-allergic', '2024-11-04 09:39:12', '2024-11-04 09:39:12'),
(7, 'Multivitamins and Supplements', 'Essential nutrients for overall wellness', 'Daily Health Boost', 'Daily Health Boost Daily Health Boost', 'Go to Multivitamins and Supplements', '2024-11-04 09:44:05', '2024-11-04 09:44:05'),
(8, 'Anti-diabetics', 'Effective management of blood sugar', '1 Dose, Better Control', '1 Dose, Better Control 1 Dose, Better Control', 'Go to Anti-diabetics', '2024-11-04 09:45:04', '2024-11-04 09:45:04'),
(9, 'Cardiovascular Drugs', 'Supports cardiovascular health quickly', 'Heart Health Matters', 'Heart Health Matters Heart Health Matters', 'Go to Cardiovascular Drugs', '2024-11-04 09:46:50', '2024-11-04 09:46:50'),
(10, 'Antimicrobials', 'Protection against harmful microorganisms', 'Defend in 10 Days', 'Protection against harmful microorganisms Defend in 10 Days', 'Go to Antimicrobials', '2024-11-04 09:47:54', '2024-11-04 09:47:54'),
(11, 'Antiretrovirals (ARVs)', 'Effective management for healthier living with HIV', '1 Solution for Life', '1 Solution for Life 1 Solution for Life', 'Go to Antiretrovirals', '2024-11-04 09:48:37', '2024-11-04 11:19:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sr_no` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sr_no`, `email`, `password`, `created_at`) VALUES
(1, 'admin@example.com', '123456', '2024-10-25 09:50:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
