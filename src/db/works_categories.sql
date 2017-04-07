-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 06:03 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_laravel_v53`
--

-- --------------------------------------------------------

--
-- Table structure for table `works_categories`
--

DROP TABLE IF EXISTS `works_categories`;
CREATE TABLE `works_categories` (
  `work_category_id` int(11) NOT NULL,
  `work_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `works_categories`
--

INSERT INTO `works_categories` (`work_category_id`, `work_category_name`) VALUES
(1, '<p>Truong Giang</p>'),
(2, '<p><span style="color: #666666; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;">Nguyễn Văn A</span></p>'),
(3, '<p><span style="color: #666666; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;">Nguyễn Thị B</span></p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `works_categories`
--
ALTER TABLE `works_categories`
  ADD PRIMARY KEY (`work_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `works_categories`
--
ALTER TABLE `works_categories`
  MODIFY `work_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
