-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 05:43 AM
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
-- Table structure for table `districts`
--
/*
CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `division_id` int(11) NOT NULL,
  `district_name_eng` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_name_bng` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;*/

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `district_name_eng`, `district_name_bng`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'BARGUNA', 'বরগুনা', 1, NULL, NULL),
(2, 1, 'BARISAL', 'বরিশাল', 1, NULL, NULL),
(3, 1, 'BHOLA', 'ভোলা', 1, NULL, NULL),
(4, 1, 'JHALOKATI', 'ঝালকাঠি', 1, NULL, NULL),
(5, 1, 'PATUAKHALI', 'পটুয়াখালী ', 1, NULL, NULL),
(6, 1, 'PIROJPUR', 'পিরোজপুর ', 1, NULL, NULL),
(7, 2, 'BANDARBAN', 'বান্দরবান', 1, NULL, NULL),
(8, 2, 'BRAHMANBARIA', 'ব্রাহ্মণবাড়িয়া', 1, NULL, NULL),
(9, 2, 'CHANDPUR', 'চাঁদপুর', 1, NULL, NULL),
(10, 2, 'CHITTAGONG', 'চট্টগ্রাম', 1, NULL, NULL),
(11, 2, 'COMILLA', 'কুমিল্লা', 1, NULL, NULL),
(12, 2, 'COXS BAZAR', 'কক্সবাজার ', 1, NULL, NULL),
(13, 2, 'FENI', 'ফেনী', 1, NULL, NULL),
(14, 2, 'KHAGRACHHARI', 'খাগড়াছড়ি', 1, NULL, NULL),
(15, 2, 'LAKSHMIPUR', 'লক্ষ্মীপুর', 1, NULL, NULL),
(16, 2, 'NOAKHALI', 'নোয়াখালী', 1, NULL, NULL),
(17, 2, 'RANGAMATI', 'রাঙ্গামাটি', 1, NULL, NULL),
(18, 3, 'DHAKA', 'ঢাকা ', 1, NULL, NULL),
(19, 3, 'FARIDPUR', 'ফরিদপুর ', 1, NULL, NULL),
(20, 3, 'GAZIPUR', 'গাজীপুর ', 1, NULL, NULL),
(21, 3, 'GOPALGANJ', 'গোপালগঞ্জ', 1, NULL, NULL),
(22, 9, 'JAMALPUR', 'জামালপুর ', 1, NULL, NULL),
(23, 3, 'KISHOREGONJ', 'কিশোরগঞ্জ ', 1, NULL, NULL),
(24, 3, 'MADARIPUR', 'মাদারীপুর ', 1, NULL, NULL),
(25, 3, 'MANIKGANJ', 'মানিকগঞ্জ ', 1, NULL, NULL),
(26, 3, 'MUNSHIGANJ', 'মুন্সিগঞ্জ ', 1, NULL, NULL),
(27, 9, 'MYMENSINGH', 'ময়মনসিংহ ', 1, NULL, NULL),
(28, 3, 'NARAYANGANJ', 'নারায়ণগঞ্জ ', 1, NULL, NULL),
(29, 3, 'NARSINGDI', 'নরসিংদী ', 1, NULL, NULL),
(30, 9, 'NETRAKONA', 'নেত্রকোণা ', 1, NULL, NULL),
(31, 3, 'RAJBARI', 'রাজবাড়ী ', 1, NULL, NULL),
(32, 3, 'SHARIATPUR', 'শরীয়তপুর  ', 1, NULL, NULL),
(33, 9, 'SHERPUR', 'শেরপুর ', 1, NULL, NULL),
(34, 3, 'TANGAIL', 'টাঙ্গাইল ', 1, NULL, NULL),
(35, 4, 'BAGERHAT', 'বাগেরহাট', 1, NULL, NULL),
(36, 4, 'CHUADANGA', 'চুয়াডাঙ্গা ', 1, NULL, NULL),
(37, 4, 'JESSORE', 'যশোর ', 1, NULL, NULL),
(38, 4, 'JHENAIDAH', 'ঝিনাইদহ ', 1, NULL, NULL),
(39, 4, 'KHULNA', 'খুলনা ', 1, NULL, NULL),
(40, 4, 'KUSHTIA', 'কুষ্টিয়া ', 1, NULL, NULL),
(41, 4, 'MAGURA', 'মাগুরা', 1, NULL, NULL),
(42, 4, 'MEHERPUR', 'মেহেরপুর ', 1, NULL, NULL),
(43, 4, 'NARAIL', 'নড়াইল ', 1, NULL, NULL),
(44, 4, 'SATKHIRA', 'সাতক্ষীরা ', 1, NULL, NULL),
(45, 5, 'BOGRA', 'বগুড়া ', 1, NULL, NULL),
(46, 5, 'JOYPURHAT', 'জয়পুরহাট', 1, NULL, NULL),
(47, 5, 'NAOGAON', 'নওগাঁ ', 1, NULL, NULL),
(48, 5, 'NATORE', 'নাটোর ', 1, NULL, NULL),
(49, 5, 'CHAPAI NABABGANJ', 'চাঁপাই নাবাবগঞ্জ ', 1, NULL, NULL),
(50, 5, 'PABNA', 'পাবনা', 1, NULL, NULL),
(51, 5, 'RAJSHAHI', 'রাজশাহী ', 1, NULL, NULL),
(52, 5, 'SIRAJGANJ', 'সিরাজগঞ্জ', 1, NULL, NULL),
(53, 6, 'DINAJPUR', 'দিনাজপুর ', 1, NULL, NULL),
(54, 6, 'GAIBANDHA', 'গাইবান্ধা ', 1, NULL, NULL),
(55, 6, 'KURIGRAM', 'কুড়িগ্রাম ', 1, NULL, NULL),
(56, 6, 'LALMONIRHAT', 'লালমনিরহাট ', 1, NULL, NULL),
(57, 6, 'NILPHAMARI', 'নীলফামারী', 1, NULL, NULL),
(58, 6, 'PANCHAGARH', 'পঞ্চগড় ', 1, NULL, NULL),
(59, 6, 'RANGPUR', 'রংপুর ', 1, NULL, NULL),
(60, 6, 'THAKURGAON', 'ঠাকুরগাঁও', 1, NULL, NULL),
(61, 7, 'HABIGANJ', 'হবিগঞ্জ ', 1, NULL, NULL),
(62, 7, 'MAULVIBAZAR', 'মৌলভীবাজার ', 1, NULL, NULL),
(63, 7, 'SUNAMGANJ', 'সুনামগঞ্জ ', 1, NULL, NULL),
(64, 7, 'SYLHET', 'সিলেট', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
/*ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);*/

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
