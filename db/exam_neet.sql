-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 10:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_neet`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_adminusers`
--

CREATE TABLE `exam_adminusers` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `login_type` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_adminusers`
--

INSERT INTO `exam_adminusers` (`id`, `admin_name`, `username`, `password`, `login_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'TVRJek5EVT0=', 'Admin', 'Active', '2023-10-10 07:37:18', '2023-10-10 07:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `exam_course`
--

CREATE TABLE `exam_course` (
  `sno` int(11) NOT NULL,
  `exam_course_name` varchar(200) NOT NULL,
  `exam_course_duration` int(11) NOT NULL,
  `exam_course_price` int(11) NOT NULL,
  `exam_course_starttime` time NOT NULL,
  `exam_course_endtime` time NOT NULL,
  `exam_course_status` varchar(10) NOT NULL,
  `exam_course_description` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `createdby_id` int(11) NOT NULL,
  `flog` int(11) NOT NULL DEFAULT 1 COMMENT '1 to Active & 0 to deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_course`
--

INSERT INTO `exam_course` (`sno`, `exam_course_name`, `exam_course_duration`, `exam_course_price`, `exam_course_starttime`, `exam_course_endtime`, `exam_course_status`, `exam_course_description`, `created_at`, `updated_at`, `createdby_id`, `flog`) VALUES
(1, 'NEET', 12, 50000, '08:00:00', '20:00:00', 'Active', 'NEET EXAM test', '2023-10-10 12:28:53', '2023-10-10 13:47:34', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_adminusers`
--
ALTER TABLE `exam_adminusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_course`
--
ALTER TABLE `exam_course`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_adminusers`
--
ALTER TABLE `exam_adminusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_course`
--
ALTER TABLE `exam_course`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
