-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 07:21 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gd_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `gd_gallery_sub`
--

CREATE TABLE `gd_gallery_sub` (
  `id` int(11) NOT NULL,
  `gallery_name` varchar(50) NOT NULL,
  `gallery_images` text DEFAULT NULL,
  `isdelete` int(1) NOT NULL DEFAULT 0,
  `updated_by` int(11) DEFAULT 0,
  `updated_on` varchar(30) DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT 0,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gd_gallery_sub`
--

INSERT INTO `gd_gallery_sub` (`id`, `gallery_name`, `gallery_images`, `isdelete`, `updated_by`, `updated_on`, `created_by`, `created_on`) VALUES
(1, '', 'albums/gallery_7241_causes1.jpg', 0, 1, '2019-12-11 09:36:59', 1, '2019-12-11 04:06:59'),
(2, '', 'albums/gallery_5862_causes2.jpg', 0, 1, '2019-12-11 09:36:59', 1, '2019-12-11 04:06:59'),
(3, '', 'albums/gallery_3651_causes3.jpg', 0, 1, '2019-12-11 09:42:53', 1, '2019-12-11 04:12:53'),
(4, '', 'albums/gallery_6493_causes4.jpg', 0, 1, '2019-12-11 09:42:53', 1, '2019-12-11 04:12:53'),
(5, '', 'albums/gallery_9858_causes5.jpg', 0, 1, '2019-12-11 09:44:07', 1, '2019-12-11 04:14:07'),
(6, '', 'albums/gallery_6667_causes6.jpg', 0, 1, '2019-12-11 09:44:07', 1, '2019-12-11 04:14:07'),
(7, '', 'albums/gallery_2459_404.php5', 0, 1, '2019-12-18 21:24:27', 1, '2019-12-19 04:24:27'),
(8, '', 'albums/gallery_8294_158048logo.jpg', 0, 1, '2019-12-18 21:24:27', 1, '2019-12-19 04:24:27'),
(9, '', 'albums/gallery_2660_dsc4876copycopy.jpg', 0, 1, '2020-02-29 22:25:54', 1, '2020-03-01 05:25:54'),
(10, '', 'albums/gallery_4008_dsc4788copycopy.jpg', 0, 1, '2020-02-29 22:25:54', 1, '2020-03-01 05:25:54'),
(11, '', 'albums/gallery_4822_dsc4971copy.jpg', 0, 1, '2020-02-29 22:25:54', 1, '2020-03-01 05:25:54'),
(12, '', 'albums/gallery_6738_dsc4989copy.jpg', 0, 1, '2020-02-29 22:25:54', 1, '2020-03-01 05:25:54'),
(13, '', 'albums/gallery_7261_dsc4997copy.jpg', 0, 1, '2020-02-29 22:25:54', 1, '2020-03-01 05:25:54'),
(14, '', 'albums/gallery_1651_dsc4993copy.jpg', 0, 1, '2020-02-29 22:25:54', 1, '2020-03-01 05:25:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gd_gallery_sub`
--
ALTER TABLE `gd_gallery_sub`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gd_gallery_sub`
--
ALTER TABLE `gd_gallery_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
