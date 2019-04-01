-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 05:50 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

/*CREATE TABLE `divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `division_name_eng` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_name_bng` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
*/
--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_name_eng`, `division_name_bng`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Barisal', 'বরিশাল', 1, NULL, NULL),
(2, 'Chittagong', 'চট্টগ্রাম', 1, NULL, NULL),
(3, 'Dhaka', 'ঢাকা', 1, NULL, NULL),
(4, 'Khulna', 'খুলনা', 1, NULL, NULL),
(5, 'Rajshahi', 'রাজশাহী', 1, NULL, NULL),
(6, 'Rangpur', 'রংপুর', 1, NULL, NULL),
(7, 'Sylhet', 'সিলেট', 1, NULL, NULL),
(9, 'Mymensingh', 'ময়মনসিংহ', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisions`
--
/*ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);*/

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
