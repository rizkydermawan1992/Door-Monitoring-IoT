-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 09:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensor`
--

-- --------------------------------------------------------

--
-- Table structure for table `penerima_notif`
--

CREATE TABLE `penerima_notif` (
  `id` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_chat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerima_notif`
--

INSERT INTO `penerima_notif` (`id`, `nama`, `id_chat`) VALUES
(12, 'Rizky Project', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_door`
--

CREATE TABLE `tabel_door` (
  `id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `door_state` int(11) NOT NULL,
  `msg_state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_door`
--

INSERT INTO `tabel_door` (`id`, `waktu`, `door_state`, `msg_state`) VALUES
(1, '2021-10-24 04:38:44', 1, 0),
(2, '2021-10-24 04:40:55', 0, 0),
(3, '2021-10-24 04:40:58', 1, 0),
(4, '2021-10-24 04:41:04', 0, 0),
(5, '2021-10-24 04:41:06', 1, 0),
(6, '2021-10-24 04:41:27', 0, 0),
(7, '2021-10-24 04:41:30', 1, 0),
(8, '2021-10-24 04:41:38', 0, 0),
(9, '2021-10-24 04:41:42', 1, 0),
(10, '2021-10-24 04:41:45', 0, 0),
(11, '2021-10-24 04:41:46', 1, 0),
(12, '2021-10-24 04:41:55', 0, 0),
(13, '2021-10-24 04:41:57', 1, 0),
(14, '2021-10-24 04:41:59', 0, 0),
(15, '2021-10-24 04:42:00', 1, 0),
(16, '2021-10-24 04:42:02', 0, 0),
(17, '2021-10-24 04:42:26', 1, 0),
(18, '2021-10-24 04:42:32', 0, 0),
(19, '2021-10-24 04:42:55', 1, 0),
(20, '2021-10-24 04:42:59', 0, 0),
(21, '2021-10-24 04:43:54', 1, 0),
(22, '2021-10-24 04:43:56', 0, 0),
(23, '2021-10-24 04:44:17', 1, 0),
(24, '2021-10-24 04:44:20', 0, 0),
(25, '2021-10-24 04:44:27', 1, 0),
(26, '2021-10-24 04:44:29', 0, 0),
(27, '2021-10-24 04:44:41', 1, 0),
(28, '2021-10-24 04:44:44', 0, 0),
(29, '2021-10-24 04:46:11', 1, 0),
(30, '2021-10-24 04:46:13', 0, 0),
(31, '2021-10-24 04:46:25', 1, 0),
(32, '2021-10-24 04:46:25', 0, 0),
(33, '2021-10-24 04:46:59', 1, 0),
(34, '2021-10-24 04:47:01', 0, 0),
(35, '2021-10-24 04:48:14', 1, 0),
(36, '2021-10-24 04:48:17', 0, 0),
(37, '2021-10-24 04:48:21', 1, 0),
(38, '2021-10-24 04:48:22', 0, 0),
(39, '2021-10-24 04:48:28', 1, 0),
(40, '2021-10-24 04:48:30', 0, 0),
(41, '2021-10-24 04:49:23', 1, 0),
(42, '2021-10-24 04:49:24', 0, 0),
(43, '2021-10-24 04:50:26', 1, 0),
(44, '2021-10-24 04:50:28', 0, 0),
(45, '2021-10-24 04:50:34', 1, 0),
(46, '2021-10-24 04:50:39', 0, 0),
(47, '2021-10-24 04:50:50', 1, 0),
(48, '2021-10-24 04:51:07', 0, 0),
(49, '2021-10-24 04:51:18', 1, 0),
(50, '2021-10-24 04:51:52', 0, 0),
(51, '2021-10-24 04:52:02', 1, 0),
(52, '2021-10-24 04:52:04', 0, 0),
(53, '2021-10-24 04:52:11', 1, 0),
(54, '2021-10-24 04:52:12', 0, 0),
(55, '2021-10-24 04:52:43', 1, 0),
(56, '2021-10-24 04:52:44', 0, 0),
(57, '2021-10-24 04:52:45', 1, 0),
(58, '2021-10-24 04:52:46', 0, 0),
(59, '2021-10-24 04:52:49', 1, 0),
(60, '2021-10-24 04:52:54', 0, 0),
(61, '2021-10-24 04:52:57', 1, 0),
(62, '2021-10-24 04:53:33', 0, 0),
(63, '2021-10-24 04:53:35', 1, 0),
(64, '2021-10-24 04:53:37', 0, 0),
(65, '2021-10-24 04:53:44', 1, 0),
(66, '2021-10-24 04:53:46', 0, 0),
(67, '2021-10-24 04:53:47', 1, 0),
(68, '2021-10-24 04:54:11', 0, 0),
(69, '2021-10-24 04:54:34', 1, 0),
(70, '2021-10-24 05:20:36', 0, 0),
(71, '2021-10-24 05:20:39', 1, 0),
(72, '2021-10-24 05:20:49', 0, 0),
(73, '2021-10-24 05:20:51', 1, 0),
(74, '2021-10-24 05:28:13', 0, 0),
(75, '2021-10-24 05:28:15', 1, 0),
(76, '2021-10-24 05:37:58', 0, 0),
(77, '2021-10-24 05:38:00', 1, 0),
(78, '2021-10-24 05:42:09', 0, 0),
(79, '2021-10-24 05:42:11', 1, 0),
(80, '2021-10-24 05:42:13', 0, 0),
(81, '2021-10-24 05:42:15', 1, 0),
(82, '2021-10-24 05:43:08', 0, 0),
(83, '2021-10-24 05:43:10', 1, 0),
(84, '2021-10-24 05:59:07', 0, 0),
(85, '2021-10-24 05:59:09', 1, 0),
(86, '2021-10-24 05:59:09', 0, 0),
(87, '2021-10-24 05:59:11', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_setting`
--

CREATE TABLE `tabel_setting` (
  `alarm` int(20) NOT NULL,
  `notif` int(20) NOT NULL,
  `msg_state` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_setting`
--

INSERT INTO `tabel_setting` (`alarm`, `notif`, `msg_state`) VALUES
(0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penerima_notif`
--
ALTER TABLE `penerima_notif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_door`
--
ALTER TABLE `tabel_door`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_setting`
--
ALTER TABLE `tabel_setting`
  ADD PRIMARY KEY (`alarm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penerima_notif`
--
ALTER TABLE `penerima_notif`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tabel_door`
--
ALTER TABLE `tabel_door`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
