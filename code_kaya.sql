-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 06:04 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_kaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `path` varchar(45) NOT NULL,
  `keywords` varchar(45) NOT NULL,
  `day` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `type`, `name`, `path`, `keywords`, `day`) VALUES
(11, '', 'Personal Website.mp4', 'video/Personal Website.mp4', 'robotics, python', '2021-06-30 08:21:36.723096'),
(12, '', 'Personal Website.mp4', 'video/Personal Website.mp4', 'robotics, python', '2021-06-30 08:22:00.556031'),
(13, '', 'Personal Website.mp4', 'video/Personal Website.mp4', 'robotics, python', '2021-06-30 08:22:14.818603'),
(14, '', 'Personal Website.mp4', 'video/Personal Website.mp4', 'robotics, python', '2021-06-30 08:23:06.171472'),
(15, '', 'Personal Website.mp4', 'video/Personal Website.mp4', 'robotics, python', '2021-06-30 08:25:46.383612'),
(16, '', 'Personal Website.mp4', 'video/Personal Website.mp4', 'robotics, python', '2021-06-30 08:26:21.484409'),
(17, '', 'Personal Website.mp4', 'video/Personal Website.mp4', 'robotics, python', '2021-06-30 08:27:09.918040'),
(18, '', 'Personal Website.mp4', 'video/Personal Website.mp4', 'robotics, python', '2021-06-30 08:28:31.170304'),
(19, '', 'Personal Website.mp4', 'video/Personal Website.mp4', 'robotics, python', '2021-06-30 08:28:52.389829'),
(20, '', 'Personal Website.mp4', 'video/Personal Website.mp4', 'robotics, python', '2021-06-30 08:29:12.936309'),
(21, '', 'Personal Website.mp4', 'video/Personal Website.mp4', 'robotics, python', '2021-06-30 08:29:18.458778'),
(22, '', 'Personal Website.mp4', 'video/Personal Website.mp4', 'robotics, python', '2021-06-30 08:29:40.586894');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
