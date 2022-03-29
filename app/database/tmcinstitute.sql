-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 12:04 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmcinstitute`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Corporate Governance', '2022-02-11 13:43:17', '2022-02-11 13:43:17'),
(2, 'Financial Crime Prevention', '2022-02-11 13:43:17', '2022-02-11 13:43:17'),
(3, 'Insurance Courses', '2022-02-11 13:43:17', '2022-02-11 13:43:17'),
(4, 'Risk Management', '2022-02-11 13:43:17', '2022-02-11 13:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirements` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outline` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category_id`, `name`, `price`, `discount`, `views`, `duration`, `requirements`, `outline`, `description`, `created_at`, `updated_at`, `image`, `cover_image`) VALUES
(1, 1, 'Enterprise Risk Management Principles', 200000, 150000, NULL, '2 days', NULL, '<p>Day One<br />Introduction to risk management<br />How to define risk?<br />What covers the risk management process?&nbsp;<br />Why manage risk?<br />The attributes of effective risk management that will fit your organisation<br />Key risk management disciplines<br />The risk management process<br />Identify the proper communication channels and the stakeholders<br />Establish the internal and external contexts<br />Risk assessment process<br />Risk identification and analysis tools and techniques that will fit your needs<br />Day Two<br />The risk management process<br />Risk prioritisation: define the likelihood and impacts<br />Build your relevant risk heatmap<br />Design a meaningful risk register<br />Define your organisation&rsquo;s risk appetite and tolerance levels<br />How to treat the risks?<br />Monitoring and review: keep constantly updated and relevant views on your exposures<br />The risk management framework and embedding a risk culture<br />Risk management framework<br />Embedding risk management in your corporate culture<br />Being a successful risk manager: know your strengths<br />Benefits of risk management: how to increase your performance</p><p>Who should take this course</p><ul><li>Risk professionals</li><li>&nbsp;Business leaders (CEOs, heads of function,senior managers)</li><li>Assurance providers, e.g., internal and external auditors</li><li>Non-executive directors (particularly those with responsibility for audit and risk)</li><li>Professional advisors wishing to provide more expert support for their clients&rsquo; market</li></ul>', '<p>Introduction to risk management<br />How to define risk?<br />What covers the risk management process?&nbsp;<br />Why manage risk?<br />The attributes of effective risk management that will fit your organisation<br />Key risk management disciplines<br />The risk management process<br />Identify the proper communication channels and the stakeholders<br />Establish the internal and external contexts<br />Risk assessment process<br />Risk identification and analysis tools and techniques that will fit your needs<br />Day Two<br />The risk management process<br />Risk prioritisation: define the likelihood and impacts<br />Build your relevant risk heatmap<br />Design a meaningful risk register<br />Define your organisation&rsquo;s risk appetite and tolerance levels<br />How to treat the risks?<br />Monitoring and review: keep constantly updated and relevant views on your exposures<br />The risk management framework and embedding a risk culture<br />Risk management framework<br />Embedding risk management in your corporate culture<br />Being a successful risk manager: know your strengths<br />Benefits of risk management: how to increase your performance</p><p>Who should take this course</p><ul><li>Risk professionals</li><li>&nbsp;Business leaders (CEOs, heads of function,senior managers)</li><li>Assurance providers, e.g., internal and external auditors</li><li>Non-executive directors (particularly those with responsibility for audit and risk)</li><li>Professional advisors wishing to provide more expert support for their clients&rsquo; market</li></ul>', '2022-02-11 11:59:56', '2022-03-29 08:57:12', '1648547831Risk--Managers-Master-Class.png', NULL),
(2, 2, 'Enterprise Risk Management Principles', 33000, 29000, NULL, '14 days', NULL, 'Introduction to risk management Risk management framework\n                Embedding risk management in your corporate culture\n                Being a successful risk manager: know your strengths\n                Benefits of risk management: how to increase your performance', 'Day One\n                Introduction to risk management\n                How to define risk?\n                What covers the risk management process?\n                Why manage risk?\n                The attributes of effective risk management that will fit your organisation\n                Key risk management disciplines', '2022-02-11 11:59:56', '2022-02-11 11:59:56', NULL, NULL),
(3, 2, 'Enterprise Risk Management Principles', 34499, 23888, NULL, '14 days', NULL, 'Introduction to risk management Risk management framework\n                Embedding risk management in your corporate culture\n                Being a successful risk manager: know your strengths\n                Benefits of risk management: how to increase your performance', 'Day One\n                Introduction to risk management\n                How to define risk?\n                What covers the risk management process?\n                Why manage risk?\n                The attributes of effective risk management that will fit your organisation\n                Key risk management disciplines', '2022-02-11 11:59:56', '2022-02-11 11:59:56', NULL, NULL),
(4, 1, 'Enterprise Risk Management Principles', 35333, 12333, NULL, '14 days', NULL, 'Introduction to risk management Risk management framework\n                Embedding risk management in your corporate culture\n                Being a successful risk manager: know your strengths\n                Benefits of risk management: how to increase your performance', 'Day One\n                Introduction to risk management\n                How to define risk?\n                What covers the risk management process?\n                Why manage risk?\n                The attributes of effective risk management that will fit your organisation\n                Key risk management disciplines', '2022-02-11 11:59:56', '2022-02-11 11:59:56', NULL, NULL),
(5, 3, 'Enterprise Risk Management Principles', 45333, 33333, NULL, '14 days', NULL, 'Introduction to risk management Risk management framework\n                Embedding risk management in your corporate culture\n                Being a successful risk manager: know your strengths\n                Benefits of risk management: how to increase your performance', 'Day One\n                Introduction to risk management\n                How to define risk?\n                What covers the risk management process?\n                Why manage risk?\n                The attributes of effective risk management that will fit your organisation\n                Key risk management disciplines', '2022-02-11 11:59:56', '2022-02-11 11:59:56', NULL, NULL),
(6, 3, 'Enterprise Risk Management Principles', 44555, 33444, NULL, '14 days', NULL, 'Introduction to risk management Risk management framework\n                Embedding risk management in your corporate culture\n                Being a successful risk manager: know your strengths\n                Benefits of risk management: how to increase your performance', 'Day One\n                Introduction to risk management\n                How to define risk?\n                What covers the risk management process?\n                Why manage risk?\n                The attributes of effective risk management that will fit your organisation\n                Key risk management disciplines', '2022-02-11 11:59:56', '2022-02-11 11:59:56', NULL, NULL),
(7, 3, 'Enterprise Risk Management Principles', 88444, 47888, NULL, '14 days', NULL, 'Introduction to risk management Risk management framework\n                Embedding risk management in your corporate culture\n                Being a successful risk manager: know your strengths\n                Benefits of risk management: how to increase your performance', 'Day One\n                Introduction to risk management\n                How to define risk?\n                What covers the risk management process?\n                Why manage risk?\n                The attributes of effective risk management that will fit your organisation\n                Key risk management disciplines', '2022-02-11 11:59:56', '2022-02-11 11:59:56', NULL, NULL),
(8, 4, 'Enterprise Risk Management Principles', 34880, 25999, NULL, '14 days', NULL, 'Introduction to risk management Risk management framework\n                Embedding risk management in your corporate culture\n                Being a successful risk manager: know your strengths\n                Benefits of risk management: how to increase your performance', 'Day One\n                Introduction to risk management\n                How to define risk?\n                What covers the risk management process?\n                Why manage risk?\n                The attributes of effective risk management that will fit your organisation\n                Key risk management disciplines', '2022-02-11 11:59:56', '2022-02-11 11:59:56', NULL, NULL),
(9, 4, 'Enterprise Risk Management Principles', 45990, 34000, NULL, '14 days', NULL, 'Introduction to risk management Risk management framework\n                Embedding risk management in your corporate culture\n                Being a successful risk manager: know your strengths\n                Benefits of risk management: how to increase your performance', 'Day One\n                Introduction to risk management\n                How to define risk?\n                What covers the risk management process?\n                Why manage risk?\n                The attributes of effective risk management that will fit your organisation\n                Key risk management disciplines', '2022-02-11 11:59:56', '2022-02-11 11:59:56', NULL, NULL),
(10, 2, 'new course', 200, 399, NULL, '14 weeks', NULL, 'kaksklasdaskld\r\nasdklasdkalsd\r\nasdklasda\r\nklasdlkad', NULL, '2022-02-24 00:29:44', '2022-02-24 00:29:44', '1645666184stds-removebg-preview.png', NULL),
(11, 1, 'new course', 200, 399, NULL, '14 weeks', NULL, '<p>kaksklasdaskld asdklasdkalsd asdklasda klasdlkad</p>', '<p>this is the updated files</p>', '2022-02-24 00:45:51', '2022-02-24 12:39:48', '1645667151stds-removebg-preview.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidates` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`id`, `course_id`, `name`, `email`, `address`, `state`, `candidates`, `phone`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 4, 'michael kachi', NULL, NULL, NULL, NULL, NULL, '2022-02-22 09:08:21', '2022-02-22 09:08:21', NULL),
(2, 4, 'michael kachi', NULL, NULL, NULL, NULL, NULL, '2022-02-22 09:08:47', '2022-02-22 09:08:47', NULL),
(3, 4, 'michael kachi', NULL, NULL, NULL, NULL, NULL, '2022-02-22 09:14:07', '2022-02-22 09:14:07', NULL),
(4, 4, 'michael kachi', NULL, NULL, NULL, NULL, NULL, '2022-02-22 09:28:00', '2022-02-22 09:28:00', NULL),
(5, 4, 'michael kachi', 'mikkynoble@gmail.com', 'Lagos', 'lagos', NULL, '08039388373', '2022-02-22 09:28:24', '2022-02-22 09:28:24', NULL),
(6, 4, 'michael kachi', 'mikkynoble@gmail.com', 'Lagos', 'lagos', NULL, '08039388373', '2022-02-22 09:28:53', '2022-02-22 09:28:53', NULL),
(7, 4, 'michael kachi', 'mikkynoble@gmail.com', 'Lagos', 'lagos', NULL, '08039388373', '2022-02-22 09:29:37', '2022-02-22 09:29:37', NULL),
(8, 4, 'michael kachi', 'mikkynoble@gmail.com', 'Lagos', 'lagos', NULL, '08039388373', '2022-02-22 09:30:19', '2022-02-22 09:30:19', NULL),
(9, 4, 'michael kachi', 'mikkynoble@gmail.com', 'Lagos', 'lagos', NULL, '08039388373', '2022-02-22 09:30:47', '2022-02-22 09:30:47', NULL),
(10, 4, 'michael kachi', 'mikkynoble@gmail.com', 'Lagos', 'lagos', NULL, '08039388373', '2022-02-22 09:36:09', '2022-02-22 09:36:09', NULL),
(11, 4, 'michael kachi', 'mikkynoble@gmail.com', 'Lagos', 'lagos', NULL, '08039388373', '2022-02-22 09:54:07', '2022-02-22 09:54:07', NULL),
(12, 4, 'michael kachi', 'mikkynoble@gmail.com', 'Lagos', 'klsdfl', '6 - 10', '08039388373', '2022-02-22 10:41:21', '2022-02-22 10:41:21', NULL),
(13, 4, 'michael kachi', 'mikkynoble@gmail.com', 'Lagos', 'lagos', '1 - 5', '8099444531', '2022-02-22 10:48:55', '2022-02-22 10:48:55', NULL),
(14, 2, 'michael kachi', 'mikkynoble@gmail.com', 'Lagos', 'LA', '6 - 10', '08039388373', '2022-02-25 06:48:06', '2022-02-25 06:48:06', NULL),
(15, 10, 'michael kachi', 'mikkynoble@gmail.com', 'Lagos', 'lagos', '10 - 50', '08039388373', '2022-02-25 11:23:31', '2022-02-25 11:23:31', NULL),
(16, 2, 'michael kachi', 'mikkynoble@gmail.com', 'Lagos', 'klsdfl', '19', '08039388373', '2022-02-28 11:01:58', '2022-02-28 11:01:58', NULL),
(17, 11, 'michael kachi', 'mikkynoble@gmail.com', 'Lagos', 'lagos', '9', '08039388373', '2022-02-28 11:31:38', '2022-02-28 11:31:38', NULL),
(18, 11, 'michael kachi', 'jesmikky@gmail.com', 'Lagos', 'lagos', '1', '08039388373', '2022-03-01 09:19:35', '2022-03-01 09:19:35', 5),
(19, 11, 'michael kachi', 'mikkynobale@gmail.com', 'Lagos', 'lagos', '1', '08039388373', '2022-03-01 09:20:40', '2022-03-01 09:20:40', 6),
(20, 11, 'michael kachi', 'mikkynoble@gmail.com', 'Lagos', 'lagos', '1', '08039388373', '2022-03-01 09:23:10', '2022-03-01 09:23:10', 7),
(21, 11, 'michael kachi', 'michaelkachi2018@gmail.com', 'Lagos', 'lagos', '17', '08039388373', '2022-03-01 15:00:19', '2022-03-01 15:00:19', 8);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_11_104523_create_categories_table', 1),
(6, '2022_02_11_105320_create_courses_table', 1),
(7, '2022_02_11_134022_add_field_to_course', 2),
(8, '2022_02_21_233849_create_enrollments_table', 3),
(9, '2022_03_01_084416_add_field_to_enrollments', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'TMC Admin', 'admin@tmcinstitute.com', NULL, '$2y$10$ce.dokpuvv7RKLP/D.5gU.cB1O6K3wA5HnRKXKrK3Dt0.V6fIqmWO', NULL, '2022-02-25 10:47:04', '2022-02-25 10:47:04'),
(5, 'michael kachi', 'jesmikky@gmail.com', NULL, '$2y$10$RHB/WLQAim5oLT8EO245X.w0FDRhfM505cwwDfmhP6ZzEtKOkdITu', NULL, '2022-03-01 09:19:33', '2022-03-01 09:19:33'),
(6, 'michael kachi', 'mikkynobale@gmail.com', NULL, '$2y$10$NNOqs9TmaoUxkv3/xFAzOuAw8MDjR54SrB94KydDijtDRelry.Xcu', NULL, '2022-03-01 09:20:38', '2022-03-01 09:20:38'),
(7, 'michael kachi', 'mikkynoble@gmail.com', NULL, '$2y$10$igds18AhQLkcpfbutc4vveKwPsvhdKlzdZJuLe6j.IJTCo9omCyBO', NULL, '2022-03-01 09:23:08', '2022-03-01 09:23:08'),
(8, 'michael kachi', 'michaelkachi2018@gmail.com', NULL, '$2y$10$RB1brXXgURbiUA/SRuGj7ed4cBjax8tIElMzvjRdYSAsq/HVsdFme', NULL, '2022-03-01 15:00:17', '2022-03-01 15:00:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
