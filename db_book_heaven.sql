-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 07:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_book_heaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_tracks`
--

CREATE TABLE `login_tracks` (
  `id` int(2) NOT NULL,
  `user_id` int(3) NOT NULL,
  `login_time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_tracks`
--

INSERT INTO `login_tracks` (`id`, `user_id`, `login_time`) VALUES
(1, 0, '2024-10-19 08:51:54'),
(2, 0, '2024-10-19 08:52:07'),
(3, 0, '2024-10-19 08:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_login`
--

CREATE TABLE `tbl_admin_login` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `s_key` varchar(60) NOT NULL,
  `role` int(2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin_login`
--

INSERT INTO `tbl_admin_login` (`id`, `username`, `password`, `s_key`, `role`, `status`) VALUES
(1, 'nemit', '5623', '5623', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `id` int(30) NOT NULL,
  `isbn` bigint(20) NOT NULL,
  `category_id` int(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `language` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `sp_amount` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`id`, `isbn`, `category_id`, `name`, `publisher`, `author`, `description`, `language`, `amount`, `sp_amount`, `status`) VALUES
(1, 123456789, 1, 'Alchemist', 'Manjul Publishing', 'Paulo Coeulo', 'alchemist book is a good book for non-fiction book lovers for african and egyptian lanscapes and more. The author Paulo coeulo have been more inspired by this book than most of others', 'English', 650, 500, 1),
(2, 654987, 2, 'Atomic Habits', 'Nemit Sagar', 'Hinal Patel', 'This changes your everyday routine into something that helps you to achieve something you always want to get for.', 'Hindi', 500, 450, 1),
(3, 894512, 1, 'Rich Dad Poor Dad', 'Kiyoski', 'Kiyoski', 'This book can lead your thoughts on rich and poor thinking', 'English', 450, 350, 1),
(4, 98754213, 6, 'hinal sagar', 'hinal sagar', 'hinal sagar', 'this is great book to read about food.', 'Gujarati', 450, 400, 1),
(5, 256545, 9, 'dhruv seth', 'demo', 'Paulo Coeulo', 'this book is for travel lovers', 'Hindi', 200, 300, 1),
(6, 50, 1, 'nemit', 'nemit', 'newmit', 'nemit', 'hindi', 605, 500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_image`
--

CREATE TABLE `tbl_book_image` (
  `id` int(3) NOT NULL,
  `type` varchar(40) NOT NULL,
  `isbn` bigint(20) NOT NULL,
  `stat_file` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(70) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `status`) VALUES
(1, 'fiction', 1),
(2, 'non-fiction', 1),
(3, 'Comics', 1),
(4, 'Children\'s Books', 1),
(5, 'Academic and Educational', 1),
(6, 'Cookbooks and Food', 1),
(7, 'Arts & Crafts', 1),
(8, 'Health & Fitness', 1),
(9, 'Travel & Geography', 1),
(10, 'Business & Economics', 1),
(11, 'Technology', 1),
(12, 'Religion & Spirituality', 1),
(13, 'Sports', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `name`, `status`) VALUES
(1, 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_signup`
--

CREATE TABLE `tbl_user_signup` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_signup`
--

INSERT INTO `tbl_user_signup` (`id`, `username`, `mobile_no`, `email`, `password`, `status`) VALUES
(1, '', 0, 'nemitsagar558@gmail.com', '123', 1),
(2, '', 0, 'yashsagarjava@gmail.com', 'Nemit@264', 1),
(3, '', 0, 'demo@gmail.com', '123456789', 1),
(4, '', 0, 'hinal@gmail.com', '123456789', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_tracks`
--
ALTER TABLE `login_tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_book_image`
--
ALTER TABLE `tbl_book_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_signup`
--
ALTER TABLE `tbl_user_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_tracks`
--
ALTER TABLE `login_tracks`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_book_image`
--
ALTER TABLE `tbl_book_image`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user_signup`
--
ALTER TABLE `tbl_user_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
