-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2026 at 02:59 PM
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
-- Database: `icsa_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `email` varchar(190) DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `login_attempts` tinyint(3) UNSIGNED DEFAULT 0,
  `locked_until` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` enum('admin','staff') DEFAULT 'staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password_hash`, `email`, `last_login`, `login_attempts`, `locked_until`, `created_at`, `role`) VALUES
(1, 'admin', '$2y$10$POWGGbhGXQxohPuDqJqnQ./7JLMiuS3WtY6fLuofs2NzhVbOI4Fse', 'admin@icsa.us', '2026-03-31 12:17:32', 0, NULL, '2026-03-30 15:12:57', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_sessions`
--

CREATE TABLE `admin_sessions` (
  `id` varchar(64) NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_sessions`
--

INSERT INTO `admin_sessions` (`id`, `admin_id`, `ip_address`, `user_agent`, `created_at`, `last_activity`) VALUES
('1286ddc70213cb5b7038df6b1f2bea3f69766f30338d4694133e1a0a84567a3c', 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.4 Safari/605.1.15', '2026-03-31 12:17:32', '2026-03-31 12:17:32'),
('373f086efd1bffb10dd486bed84a349a071dc6562c6b7c19cf0cbb553d2245b5', 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.4 Safari/605.1.15', '2026-03-31 12:17:28', '2026-03-31 12:17:28'),
('460c3d4f8206f3dbb726d1d88bec40c40a79aa33e7d88350141f0f6b0b0be107', 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.4 Safari/605.1.15', '2026-03-31 12:17:31', '2026-03-31 12:17:31'),
('61de812bd1e4893012a22d4834d5245d96b06ab60ce89f65ace7ee0b5b2534b5', 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.4 Safari/605.1.15', '2026-03-31 12:13:20', '2026-03-31 12:13:20'),
('6c672afb8760bdbf7a3236667e4f4074ea23e55abce6cd2f76c236c9bd7d5446', 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.4 Safari/605.1.15', '2026-03-31 12:13:25', '2026-03-31 12:13:25'),
('76eeed0422d1a74b02165273d72638fb102ec617457867a023cc4dae97eb1687', 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.4 Safari/605.1.15', '2026-03-31 12:15:42', '2026-03-31 12:15:42'),
('84ac9111fb0f18aebb36c471844b7594878274b0964242dd4a4a3f93947827ef', 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.4 Safari/605.1.15', '2026-03-30 15:13:54', '2026-03-31 11:56:57'),
('c4a08498b489ef50fff8b3f514a6b6725f3d9d0af9025cde1abade256d2028ad', 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.4 Safari/605.1.15', '2026-03-31 12:15:44', '2026-03-31 12:15:44'),
('e323a3dbca22565bc531183ab778386cb81bbf5adb4d546564ff7ac1626e1027', 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.4 Safari/605.1.15', '2026-03-31 12:14:09', '2026-03-31 12:14:09'),
('ee18b8c5ba8b5f3c418023ca1e139d1e7830f14ae52878eee6ea03980b9c06fb', 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.4 Safari/605.1.15', '2026-03-31 12:13:41', '2026-03-31 12:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(190) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `course_interest` varchar(120) DEFAULT NULL,
  `subject` varchar(60) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('new','in_progress','resolved','archived') DEFAULT 'new',
  `admin_notes` text DEFAULT NULL,
  `replied_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_username` (`username`);

--
-- Indexes for table `admin_sessions`
--
ALTER TABLE `admin_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_admin_id` (`admin_id`),
  ADD KEY `idx_last_activity` (`last_activity`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_contact_created_at` (`created_at`),
  ADD KEY `idx_contact_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
