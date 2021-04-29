-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 08:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eskwela`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_id` bigint(100) NOT NULL,
  `s_firstname` text NOT NULL,
  `s_lastname` text NOT NULL,
  `s_username` varchar(20) NOT NULL,
  `s_password` varchar(80) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_dobd` int(11) NOT NULL,
  `s_dobm` int(11) NOT NULL,
  `s_doby` int(11) NOT NULL,
  `s_region` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_id`, `s_firstname`, `s_lastname`, `s_username`, `s_password`, `s_email`, `s_dobd`, `s_dobm`, `s_doby`, `s_region`) VALUES
(16, 'kevin', 'salamat', 'krbsalamat2', '$2y$10$32L/jznM/Wp5C4p/Bvwxku1cFCbmt0yjF97Wy4W6fU3h.KFk409h6', 'krbsalamat@gmail.com', 17, 10, 1996, 'NCR'),
(17, 'kevin', 'salamat', 'admin11', '$2y$10$9wefqRYDSUO0pIX1vuVKl.0N8yt5uWR.gCm3QOoyyqDD8srI/DdG6', 'asdasdasd@asd', 23, 1, 2000, 'NCR'),
(18, 'kevin', 'salamat', 'actestteacher', '$2y$10$wZvwn5t4YSskBVnkQAoa3e2eb0Rg4N77qH3CzKxEgRTHYTTovoVNm', 'krbsalamat@gmail.com', 29, 7, 2001, 'Region III'),
(19, 'asd', 'sdf', 'aaaaaa', '$2y$10$1iDnd8yVV9peGIrSuP7HOexCjpfcIOA1hdp2PGPO9HXhl7ZMj5CKq', 'asd@asd', 12, 1, 2000, 'NCR'),
(2147483647, 'asdas', 'dsdfsdf', 'asdasdasd1', '$2y$10$r3vcO75L/C.eCrDI17sEmOs.J.Y9w6bhaDPM6T58Haf0zxc.owSZ.', 'asdasdasd@asd', 23, 1, 1999, 'NCR'),
(1698399546531489, 'asdasd', 'asdasd', 'asdasdasd', '$2y$10$2VMuPzNqv4SrRdih6bon9e87moIeEszHS6yFsMVNpPpH5klJPP6PO', 'asd@asd', 13, 1, 1999, 'NCR');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` bigint(100) NOT NULL,
  `t_firstname` text NOT NULL,
  `t_lastname` text NOT NULL,
  `t_email` varchar(50) NOT NULL,
  `t_username` varchar(20) NOT NULL,
  `t_password` varchar(80) NOT NULL,
  `t_dobd` int(11) NOT NULL,
  `t_dobm` int(11) NOT NULL,
  `t_doby` int(11) NOT NULL,
  `t_region` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
