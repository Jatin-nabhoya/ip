-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 04:29 AM
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
-- Database: `ce423_rku_cie1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookissue`
--

CREATE TABLE `bookissue` (
  `id` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `issuedate` date NOT NULL,
  `duedate` date NOT NULL,
  `returndate` date NOT NULL,
  `returnstatus` tinyint(4) NOT NULL DEFAULT 0,
  `fine` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookissue`
--

INSERT INTO `bookissue` (`id`, `bookid`, `userid`, `issuedate`, `duedate`, `returndate`, `returnstatus`, `fine`, `datetime`) VALUES
(3, 3, 4, '2018-05-24', '2018-05-27', '2022-02-08', 0, 0, '2018-05-03 06:10:50'),
(4, 3, 4, '2018-05-01', '2018-05-17', '2022-02-08', 1, 0, '2018-05-03 06:11:29'),
(5, 5, 4, '2018-05-12', '2018-05-27', '2022-02-08', 0, 0, '2018-05-03 06:10:59'),
(6, 5, 4, '2018-05-05', '2018-05-25', '2022-02-08', 1, 0, '2018-05-03 06:11:16'),
(7, 1, 6, '2018-05-01', '2018-05-12', '2022-02-08', 1, 0, '2018-05-03 06:11:08'),
(8, 1, 1, '2022-02-08', '2022-02-18', '2022-02-08', 1, 0, '2022-02-08 14:11:33'),
(9, 1, 1, '2022-02-08', '2022-02-18', '2022-02-08', 1, 0, '2022-02-08 14:11:32'),
(10, 1, 1, '2022-02-08', '2022-02-18', '2022-02-08', 1, 0, '2022-02-08 14:11:31'),
(11, 5, 1, '2022-02-08', '2022-02-18', '2022-02-08', 1, 0, '2022-02-08 14:11:30'),
(12, 6, 1, '2022-02-08', '2022-02-18', '2022-02-08', 1, 0, '2022-02-08 14:11:28'),
(13, 4, 1, '2022-02-08', '2022-02-18', '2022-02-08', 1, 0, '2022-02-08 14:11:41'),
(14, 1, 1, '2022-02-08', '2022-02-18', '2022-02-09', 1, 0, '2022-02-09 03:20:25'),
(15, 1, 1, '2022-02-08', '2022-02-18', '2022-02-08', 1, 0, '2022-02-08 16:19:36'),
(16, 2, 1, '2022-02-09', '2022-02-19', '2022-02-09', 1, 0, '2022-02-09 00:42:28'),
(17, 1, 1, '2022-02-09', '2022-02-19', '2022-02-09', 1, 0, '2022-02-09 01:05:48'),
(18, 4, 1, '2022-02-09', '2022-02-22', '0000-00-00', 0, 0, '2022-02-09 02:47:46'),
(19, 6, 1, '2022-02-09', '2022-02-19', '0000-00-00', 0, 0, '2022-02-09 02:47:42'),
(20, 1, 1, '2022-02-09', '2022-02-19', '0000-00-00', 0, 0, '2022-02-09 03:12:54');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `titleurl` text NOT NULL,
  `pendingstock` int(11) NOT NULL,
  `datetime` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `price`, `stock`, `titleurl`, `pendingstock`, `datetime`) VALUES
(1, 'The Joy of PHP Programming', 'Alan Forbes', 200, 10, 'upload/The Joy of PHP Programming.jpg', 10, '2022-02-08 13:37:34'),
(2, ' PHP & MySQL Novice to Ninja', 'Kevin Yank', 156, 6, 'upload/PHP & MySQL Novice to Ninja.jpg', 4, '2022-02-08 13:37:16'),
(3, 'Head First PHP & MySQL', 'Lynn Beighley & Michael Morrison', 650, 3, 'upload/Head First PHP & MySQL.jpg', 2, '2022-02-08 13:34:18'),
(4, 'Learning PHP, MySQL, JavaScript, and CSS', 'Robin Nixon', 778, 1, 'upload/Learning PHP, MySQL, JavaScript, and CSS.jpg', 1, '2022-02-08 13:36:40'),
(5, 'PHP & MySQL Web Development', 'Luke Welling & Laura Thompson', 340, 3, 'upload/PHP & MySQL Web Development.jpg', 2, '2022-02-08 13:36:49'),
(6, 'PHP: A Beginnerï¿½s Guide ', 'Vikram Vaswani', 245, 4, 'upload/PHP A Beginner Guide.jpg', 2, '2022-02-08 13:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `datetime`) VALUES
(1, 'Admin', '2018-04-10 05:17:38'),
(2, 'Student', '2018-04-10 05:17:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL DEFAULT 'Student',
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `category`, `datetime`) VALUES
(1, 'Rajesh', 'Pandya', 'Admin@Gmail.com', '123456', 'Admin', '2019-02-21 23:50:29'),
(4, 'Student', 'Student', 'Student@Gmail.com', '123456', 'Student', '2019-02-21 23:12:09'),
(7, 'Rohit', 'Rajdev', 'Admin@Gmail.com', '123456', 'Student', '2019-02-21 23:50:45'),
(8, 'Jay', 'Joshi', 'jay@gmail.com', '123456', 'Student', '2022-02-08 16:26:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookissue`
--
ALTER TABLE `bookissue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
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
-- AUTO_INCREMENT for table `bookissue`
--
ALTER TABLE `bookissue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
