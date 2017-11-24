-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2017 at 11:59 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2017_11_24_051509_signup', 1),
(4, '2017_11_24_051801_student_details', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup_details`
--

CREATE TABLE `signup_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `signup_details`
--

INSERT INTO `signup_details` (`id`, `name`, `email`, `password`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 'Bharath', 'sbharathrao870@gmail.com', '1', 'Admin', '2017-11-24 00:12:49', '2017-11-24 00:12:49'),
(2, 'bharath2', 'sbharathrao1995@gmail.com', '1', 'Admin', '2017-11-24 00:35:48', '2017-11-24 00:35:48'),
(3, 'Bharath', 'bharathrao.s@contus.in', '1', 'Manager', '2017-11-24 00:40:07', '2017-11-24 00:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `name`, `dob`, `age`, `gender`, `skills`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Bharath', '1995-12-04', '21', 'male', 'JAVA,C,', 'http://localhost/CollegeManagement/public/images/1511514840.jpg', 'desc2', '2017-11-24 00:30:37', '2017-11-24 03:44:00'),
(3, 'Bharath', '1995-12-04', '21', 'male', 'JAVA,C,', 'http://localhost/CollegeManagement/public/images/1511507802.jpg', 'Age is Now working', '2017-11-24 01:46:42', '2017-11-24 01:46:42'),
(4, 'name', '2008-08-08', '9', 'male', 'JAVA,C,', 'http://localhost/CollegeManagement/public/images/1511507852.jpg', 'desc4', '2017-11-24 01:47:32', '2017-11-24 01:47:32'),
(5, 'name', '2008-09-04', '9', 'male', 'JAVA,C,', 'http://localhost/CollegeManagement/public/images/1511508033.png', 'desc5', '2017-11-24 01:50:33', '2017-11-24 01:50:33'),
(6, 'name6', '2006-06-06', '11', 'male', 'JAVA,C,', 'http://localhost/CollegeManagement/public/images/1511508066.jpg', 'desc6', '2017-11-24 01:51:06', '2017-11-24 01:51:06'),
(7, 'name7', '1995-12-04', '21', 'male', 'JAVA,C,', 'http://localhost/CollegeManagement/public/images/1511508206.jpg', 'desc7', '2017-11-24 01:53:26', '2017-11-24 01:53:26'),
(8, 'name8', '2008-08-08', '9', 'male', 'JAVA,C,', 'http://localhost/CollegeManagement/public/images/1511514826.png', 'desc8', '2017-11-24 01:54:03', '2017-11-24 03:43:46'),
(9, 'name9', '1995-12-04', '21', 'male', 'JAVA,C,', 'http://localhost/CollegeManagement/public/images/1511513356.jpg', 'description9', '2017-11-24 03:19:16', '2017-11-24 03:19:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_details`
--
ALTER TABLE `signup_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `signup_details`
--
ALTER TABLE `signup_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
