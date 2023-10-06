-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 01:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(5) NOT NULL,
  `book_name` varchar(70) DEFAULT NULL,
  `book_image` varchar(100) DEFAULT NULL,
  `book_author_name` varchar(50) DEFAULT NULL,
  `book_publication_name` varchar(50) DEFAULT NULL,
  `book_purchase_date` varchar(50) DEFAULT NULL,
  `book_price` int(10) DEFAULT NULL,
  `book_qty` int(5) DEFAULT NULL,
  `available_qty` int(5) DEFAULT NULL,
  `libraian_username` varchar(50) DEFAULT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `book_image`, `book_author_name`, `book_publication_name`, `book_purchase_date`, `book_price`, `book_qty`, `available_qty`, `libraian_username`, `datetime`) VALUES
(13, 'Yardley Shawiouio', '20231003033910.png', 'Kenneth Hensley', 'Dean Booker ', '2001-03-28', 747, 640, 586, 'bdmotaleb', '2023-10-03 19:39:10'),
(15, 'Amena Mor', '20231003034539.png', 'Hope Shaw', 'Laurel Garcia     ', '1998-10-28', 91, 267, 193, 'bdmotaleb', '2023-10-03 19:45:39'),
(16, 'Moana', '20231003034547.png', 'Rogan Talley', 'Hyacinth Campos       gdfgdfgdfv   ', '2018-01-05', 647, 21474836, 886, 'bdmotaleb', '2023-10-03 19:45:47'),
(20, '', '20231004064033.', 'fgdfg', '', '2023-10-18', -3, -2, -2, 'bdmotaleb', '2023-10-04 22:40:33'),
(21, 'Anika Santana', '20231005060939.png', 'Clementine Barrera', 'Iona Lyons', '1998-02-12', 282, 666, 529, 'bdmotaleb', '2023-10-05 22:09:39'),
(22, 'Brandon Fisher', '20231005060946.png', 'Idona Merrill', 'Beverly Morton', '2016-01-26', 881, 921, 977, 'bdmotaleb', '2023-10-05 22:09:46'),
(23, 'Mikayla Pruitt', '20231005060952.png', 'Jason Moreno', 'Phoebe Bray', '1979-07-17', 738, 655, 391, 'bdmotaleb', '2023-10-05 22:09:52'),
(24, 'Naomi Colon', '20231005060958.png', 'Echo Hyde', 'Malik Hernandez', '2013-06-20', 494, 139, 804, 'bdmotaleb', '2023-10-05 22:09:58'),
(25, 'Richard Daugherty', '20231005061014.png', 'Serina Ray', 'Velma Cash', '2021-04-13', 883, 925, 869, 'bdmotaleb', '2023-10-05 22:10:14'),
(26, 'Brendan Riley', '20231006011623.jpeg', 'Macon Morris', 'Gisela Sanford', '1979-01-22', 840, 6, 3, 'bdmotaleb', '2023-10-06 17:16:23'),
(27, 'Rajah Shaw', '20231006011639.jpeg', 'Otto Oconnor', 'Boris Jimenez', '2016-10-13', 4, 3, 7, 'bdmotaleb', '2023-10-06 17:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE `issue_books` (
  `id` int(5) NOT NULL,
  `student_id` int(5) NOT NULL,
  `book_id` int(5) NOT NULL,
  `book_issue_date` varchar(20) NOT NULL,
  `book_return_date` varchar(20) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `issue_books`
--

INSERT INTO `issue_books` (`id`, `student_id`, `book_id`, `book_issue_date`, `book_return_date`, `datetime`) VALUES
(1, 2, 0, '04-10-2023', '', '2023-10-04 16:33:42'),
(2, 2, 15, '04-10-2023', '05-10-23', '2023-10-04 16:34:05'),
(3, 3, 15, '05-10-2023', '', '2023-10-05 01:20:37'),
(4, 1, 13, '05-10-2023', '05-10-23', '2023-10-05 01:20:45'),
(5, 1, 13, '05-10-2023', '05-10-23', '2023-10-05 01:28:26'),
(6, 2, 15, '05-10-2023', '05-10-23', '2023-10-05 01:28:35'),
(7, 3, 15, '05-10-2023', '05-10-23', '2023-10-05 01:28:49'),
(8, 3, 15, '05-10-2023', '05-10-23', '2023-10-05 01:29:35'),
(9, 3, 15, '05-10-2023', '05-10-23', '2023-10-05 01:32:51'),
(10, 3, 15, '05-10-2023', '05-10-23', '2023-10-05 01:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `libraian`
--

CREATE TABLE `libraian` (
  `id` int(3) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `libraian`
--

INSERT INTO `libraian` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `datetime`) VALUES
(1, 'motaleb', 'hossain', 'bdmotaleb33@gmail.com', 'bdmotaleb', '123456', '2023-10-02 02:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(6) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `roll` int(6) NOT NULL,
  `reg` int(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `student_image` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `roll`, `reg`, `email`, `username`, `password`, `phone`, `student_image`, `status`, `datetime`) VALUES
(19, 'cxvdftgfd', 'emonfgmdfdfgg', 657656, 123456, 'frisdfgwfgdfsdfdgtdd1@gmail.com', 'rterfdsfdfgfdfgfgdf', '$2y$10$JFUlClXna4WqsM1pbTYTbO.bRM9TPdpmtjBvWP.e/jiZJhnLc.6a6', '01703790103', '20231006010041.jpg', 0, '2023-10-06 11:00:41'),
(20, 'cxvdftgfd', 'emonfgmdfdfgg', 657656, 123456, 'frisdfgwdsffgdfsdfdgtdd1@gmail.com', 'rterfdsfdfgsdffdfgfgdf', '$2y$10$kZNwUSccB9yrb7/hO0aRKuPAoIE2TgO5sVgvWqew1KOoDOMvZmTmC', '01703790103', '20231006010113.jpg', 0, '2023-10-06 11:01:13'),
(21, 'Anastasia Richardson', 'Brenna Farley', 657656, 123456, 'mylivaz@mailinator.com', 'dexejgfgfdf', '$2y$10$WaSPqXGzpkAgMH3KnckP7OrWnILn.iIzC6rgSR4i6M9SNFcmgWlju', '01703790103', '20231006010658.jpeg', 0, '2023-10-06 11:06:58'),
(22, 'Anastasia Richardson', 'Brenna Farley', 657656, 123456, 'myliwrwevaz@mailinator.com', 'dexejfgdfgfgfdf', '$2y$10$eSHR1/kSlU6pS90RA99QG.JCUU9rviIoY6mcNhaZnlFsZAxMV6TYG', '01703790103', '20231006010740.jpeg', 0, '2023-10-06 11:07:40'),
(23, 'Anastasia Richardson', 'Brenna Farley', 657656, 123456, 'myliwrwwerfweevaz@mailinator.com', 'dexejfgdfgfrwsfgfdf', '$2y$10$vRsSyRWkfzTSxt0QeaQHeexxEEcHjjRJbm7SODYSeFTow1UjoHQRu', '01703790103', '20231006010754.jpeg', 0, '2023-10-06 11:07:54'),
(24, 'Anastasia Richardson', 'Brenna Farley', 657656, 123456, 'myliwrwwsdferfweevaz@mailinator.com', 'dexsdfdejfgdfgfrwsfgfdf', '$2y$10$.5BFRsID2NkbLkatugd3zuyD16d3uRu3OJG3EzkOC/fYQD5cDaMjO', '01703790103', '20231006010908.jpeg', 0, '2023-10-06 11:09:08'),
(25, 'alauddin', 'emon', 657656, 123456, 'a@gmail.com', 'dexsdfdejfgddffgfrwsfgfdf', '$2y$10$S5nTPOG9L6FtSfsSMnC6L.XEpltqcjVit1J5wyQ.ShCftBXcefilS', '01703790103', '20231006011020.jpeg', 1, '2023-10-06 11:10:20'),
(26, 'alauddin', 'emon', 657656, 123456, 'emon@gmail.com', 'dexsdfcvzxdejfgddffgfrwsfgfdf', '$2y$10$KjuScWvh5OotRVLBSvt.ue8jPDxZo1SQ1vaeqeOMm5XxqdFrzrPZK', '01703790103', '20231006011043.jpeg', 0, '2023-10-06 11:10:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_books`
--
ALTER TABLE `issue_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libraian`
--
ALTER TABLE `libraian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `libraian`
--
ALTER TABLE `libraian`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
