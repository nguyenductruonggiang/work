-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 06:02 AM
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
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `work_id` int(11) NOT NULL,
  `work_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_situation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_postday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_expirationday` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`work_id`, `work_name`, `work_situation`, `work_description`, `work_address`, `work_postday`, `work_expirationday`) VALUES
(38, 'Nguyễn Văn A', 'Thủ Kho', 'Tốt nghiệp đại học Công nghệ thực phẩm', 'Bình Thạnh', '22/3/2016', '22/3/2017'),
(74, 'Nguyễn Thị B', 'Nhân viên chăm sóc khách hàng', '<p><span style="color: #666666; font-family: RobotoRegular, Arial;">Nhanh nhẹn, &nbsp;cẩn thận, cầu tiến. Vui vẻ, giao tiếp th&acirc;n thiện với mọi người.</span></p>', 'Thủ Đức', '3/2/2017', '8/5/2017'),
(67, 'Hàm Hồ', 'NHÂN VIÊN SẢN XUẤT/KHO', '<p><span style="color: #666666; font-family: RobotoRegular, Arial;">Tốt nghiệp đại học chuy&ecirc;n ng&agrave;nh h&oacute;a ph&acirc;n t&iacute;ch, c&ocirc;ng nghệ sinh học.</span></p>', ' chợ lớn', '30/4/2017', '30/7/2017'),
(70, 'Nguyễn Văn BCD', 'Dựng Phim', '<p><span style="color: #666666; font-family: RobotoRegular, Arial;">Kiểm tra c&aacute;c chỉ ti&ecirc;u chất lượng đạm, độ tươi, tro, canxi.... Lấy mẫu, lưu mẫu, hủy mẫu đ&uacute;ng quy tr&igrave;nh</span></p>', 'Studio', '21/2/2017', '23/5/2017'),
(71, 'Nguyễn Đức Trường Giang', 'Nhân viên', '<p><span style="color: #666666; font-family: RobotoRegular, Arial;">Nhanh nhẹn, khỏe mạnh, cẩn thận, cầu tiến. Vui vẻ, giao tiếp th&acirc;n thiện với mọi người.</span></p>', 'Thủ Đức', '11/2/2017', '23/5/2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`work_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
