-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 07:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teducate`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(10) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(8, '2022_07_27_213839_create_resources_table', 5),
(16, '2014_10_12_000000_create_users_table', 6),
(17, '2014_10_12_100000_create_password_resets_table', 6),
(18, '2019_08_19_000000_create_failed_jobs_table', 6),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 6),
(20, '2022_07_22_080341_create_surveys_table', 6),
(21, '2022_08_03_153434_image', 7),
(22, '2022_08_04_085447_create_surveys_table', 7),
(23, '2022_08_04_085910_create_resources_table', 8);

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
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key_stage` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `curriculum_point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tutorial1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tutorial2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tutorial3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_instructions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_instructions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lesson` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `share` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources` 
--
-- NOTE: ONLY ALGORITHMS AND PROGRAMS TRAINING FOR YEAR 1 HAVE BEEN ADDED FOR DEMONSTRATION PURPOSES

INSERT INTO `resources` (`id`, `key_stage`, `year`, `value`, `name`, `curriculum_point`, `tutorial1`, `tutorial2`, `tutorial3`, `primary_instructions`, `secondary_instructions`, `lesson`, `feedback`, `share`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'algorithms', 'Understand what algorithms are; how they are implemented as programs on digital devices; and  that programs execute by following precise and unambiguous instructions ', 'https://www.youtube.com/watch?time_continue=5&v=Da5TOXCwLSg&feature=emb_logo', 'https://www.bbc.co.uk/bitesize/topics/z3tbwmn/articles/z3whpv4', 'https://www.youtube.com/watch?v=kM9ASKAni_s&ab_channel=GCFLearnFree.org', 'https://www.youtube.com/watch?v=4N0R16Y97l0', 'https://www.youtube.com/watch?v=7UN_0NiBTKs&ab_channel=EduonixLearningSolutions', 'https://studio.code.org/s/coursea-2022/lessons/4/levels/2', '/feedback', '/share', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 1, 2, 'algorithms', 'Understand what algorithms are; how they are implemented as programs on digital devices; and  that programs execute by following precise and unambiguous instructions ', 'https://www.youtube.com/watch?time_continue=5&v=Da5TOXCwLSg&feature=emb_logo', 'https://www.bbc.co.uk/bitesize/topics/z3tbwmn/articles/z3whpv4', '', 'https://www.youtube.com/watch?v=4N0R16Y97l0', 'https://www.youtube.com/watch?v=7UN_0NiBTKs&ab_channel=EduonixLearningSolutions', 'https://studio.code.org/s/coursea-2022/lessons/4/levels/2', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 1, 3, 'algorithms', 'Understand what algorithms are; how they are implemented as programs on digital devices; and  that programs execute by following precise and unambiguous instructions ', 'https://www.bbc.co.uk/bitesize/topics/z3tbwmn/articles/z3whpv4', 'https://www.bbc.co.uk/bitesize/topics/z3tbwmn/articles/z3whpv4', '', 'https://www.youtube.com/watch?v=4N0R16Y97l0', '', 'https://studio.code.org/s/coursea-2022/lessons/4/levels/2', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 1, 4, 'algorithms', 'Understand what algorithms are; how they are implemented as programs on digital devices; and  that programs execute by following precise and unambiguous instructions ', 'https://www.bbc.co.uk/bitesize/topics/z3tbwmn/articles/z3whpv4', '', '', 'https://www.youtube.com/watch?v=ZnBF2GeAKbo&ab_channel=BBCIdeas', '', 'https://www.stem.org.uk/resources/elibrary/resource/357409/lego-building-algorithm-activity', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 1, 5, 'algorithms', 'Understand what algorithms are; how they are implemented as programs on digital devices; and  that programs execute by following precise and unambiguous instructions ', 'https://www.youtube.com/watch?v=McM9YCeyt_Q&t=163s&ab_channel=BBCTeach', '', '', 'https://www.youtube.com/watch?v=ZnBF2GeAKbo&ab_channel=BBCIdeas', '', 'https://technologyforlearners.com/wp-content/uploads/2015/03/KS1-Crazy-Character-Algorithms-Activity-PDF-Barefoot-Computing2.pdf', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 1, 6, 'algorithms', 'Understand what algorithms are; how they are implemented as programs on digital devices; and  that programs execute by following precise and unambiguous instructions ', 'https://www.youtube.com/watch?v=6hfOvs8pY1k&t=1s&ab_channel=TED-Ed', '', '', 'https://www.youtube.com/watch?v=ZnBF2GeAKbo&ab_channel=BBCIdeas', '', 'https://technologyforlearners.com/wp-content/uploads/2015/03/KS1-Crazy-Character-Algorithms-Activity-PDF-Barefoot-Computing2.pdf', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 1, 7, 'algorithms', 'Understand what algorithms are; how they are implemented as programs on digital devices; and  that programs execute by following precise and unambiguous instructions ', 'https://www.theschoolrun.com/what-algorithm', '', '', 'https://www.youtube.com/watch?v=ZnBF2GeAKbo&ab_channel=BBCIdeas', '', 'https://technologyforlearners.com/wp-content/uploads/2015/03/KS1-Crazy-Character-Algorithms-Activity-PDF-Barefoot-Computing2.pdf', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 1, 1, 'programs', 'Create and debug simple programs', 'https://youtu.be/CGPjraqX_ac', 'https://www.youtube.com/watch?v=CGPjraqX_ac&ab_channel=RUMPUS%23', 'https://youtu.be/MEeOrUxEEvk', 'https://youtu.be/g9lQgtcHGRg', 'https://www.educationquizzes.com/ks1/computing/debugging/', 'https://studio.code.org/s/course2/lessons/10/levels/1', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1, 1, 2, 'programs', 'Create and debug simple programs', 'https://youtu.be/CGPjraqX_ac', 'https://www.youtube.com/watch?v=CGPjraqX_ac&ab_channel=RUMPUS%23', '', 'https://youtu.be/g9lQgtcHGRg', '', 'https://studio.code.org/s/course2/lessons/10/levels/1', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 1, 1, 3, 'programs', 'Create and debug simple programs', 'https://www.youtube.com/watch?v=CGPjraqX_ac&ab_channel=RUMPUS%23', 'https://www.youtube.com/watch?v=CGPjraqX_ac&ab_channel=RUMPUS%23', '', 'https://youtu.be/g9lQgtcHGRg', '', 'https://studio.code.org/s/course2/lessons/10/levels/1', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 1, 1, 4, 'programs', 'Create and debug simple programs', 'https://www.youtube.com/watch?v=CGPjraqX_ac&ab_channel=RUMPUS%24', 'https://youtu.be/MEeOrUxEEvk', '', 'https://youtu.be/g9lQgtcHGRg', '', 'https://studio.code.org/s/course2/lessons/10/levels/1', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 1, 1, 5, 'programs', 'Create and debug simple programs', 'https://www.youtube.com/watch?v=CGPjraqX_ac&ab_channel=RUMPUS%25', '', '', 'https://code.org/curriculum/course2/10/Teacher', '', 'https://studio.code.org/s/course2/lessons/10/levels/1', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 1, 1, 6, 'programs', 'Create and debug simple programs', 'https://www.theschoolrun.com/what-debugging', '', '', 'https://code.org/curriculum/course2/10/Teacher', 'https://jfo8000.github.io/ScratchJr-Desktop/', 'https://www.scratchjr.org/teach/activities', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 1, 1, 7, 'programs', 'Create and debug simple programs', 'https://www.theschoolrun.com/what-debugging', '', '', 'https://code.org/curriculum/course2/10/Teacher', 'https://jfo8000.github.io/ScratchJr-Desktop/', 'https://www.scratchjr.org/teach/activities', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `value` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `user_id`, `value`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'KS1_algorithms', '2022-08-04 07:58:38', '2022-08-04 07:58:38'),
(2, 1, 1, 'KS1_programs', '2022-08-04 07:58:38', '2022-08-04 07:58:38'),
(3, 1, 2, 'KS1_logic', '2022-08-04 07:58:38', '2022-08-04 07:58:38'),
(4, 1, 2, 'KS1_purpose', '2022-08-04 07:58:38', '2022-08-04 07:58:38'),
(5, 1, 3, 'KS1_information', '2022-08-04 07:58:38', '2022-08-04 07:58:38'),
(6, 1, 3, 'KS1_safety', '2022-08-04 07:58:38', '2022-08-04 07:58:38'),
(7, 1, 4, 'KS2_debugging', '2022-08-04 07:58:38', '2022-08-04 07:58:38'),
(8, 1, 4, 'KS2_variables', '2022-08-04 07:58:38', '2022-08-04 07:58:38'),
(9, 1, 5, 'KS2_reasoning', '2022-08-04 07:58:38', '2022-08-04 07:58:38'),
(10, 1, 5, 'KS2_networks', '2022-08-04 07:58:38', '2022-08-04 07:58:38'),
(11, 1, 6, 'KS2_search', '2022-08-04 07:58:38', '2022-08-04 07:58:38'),
(12, 1, 6, 'KS2_variety', '2022-08-04 07:58:38', '2022-08-04 07:58:38'),
(13, 1, 7, 'KS2_responsible', '2022-08-04 07:58:38', '2022-08-04 07:58:38'),
(14, 2, 1, 'KS1_algorithms', '2022-08-04 20:25:12', '2022-08-04 20:25:12'),
(15, 2, 1, 'KS1_programs', '2022-08-04 20:25:12', '2022-08-04 20:25:12'),
(16, 2, 2, 'KS1_logic', '2022-08-04 20:25:12', '2022-08-04 20:25:12'),
(17, 2, 2, 'KS1_purpose', '2022-08-04 20:25:12', '2022-08-04 20:25:12'),
(18, 2, 3, 'KS1_information', '2022-08-04 20:25:12', '2022-08-04 20:25:12'),
(19, 2, 3, 'KS1_safety', '2022-08-04 20:25:12', '2022-08-04 20:25:12'),
(20, 2, 7, 'KS2_debugging', '2022-08-04 20:25:12', '2022-08-04 20:25:12'),
(21, 2, 6, 'KS2_variables', '2022-08-04 20:25:12', '2022-08-04 20:25:12'),
(22, 2, 5, 'KS2_reasoning', '2022-08-04 20:25:12', '2022-08-04 20:25:12'),
(23, 2, 4, 'KS2_networks', '2022-08-04 20:25:12', '2022-08-04 20:25:12'),
(24, 2, 3, 'KS2_search', '2022-08-04 20:25:12', '2022-08-04 20:25:12'),
(25, 2, 2, 'KS2_variety', '2022-08-04 20:25:12', '2022-08-04 20:25:12'),
(26, 2, 1, 'KS2_responsible', '2022-08-04 20:25:12', '2022-08-04 20:25:12'),
(27, 3, 1, 'KS1_algorithms', '2022-08-06 14:01:10', '2022-08-06 14:01:10'),
(28, 3, 2, 'KS1_programs', '2022-08-06 14:01:10', '2022-08-06 14:01:10'),
(29, 3, 3, 'KS1_logic', '2022-08-06 14:01:10', '2022-08-06 14:01:10'),
(30, 3, 4, 'KS1_purpose', '2022-08-06 14:01:10', '2022-08-06 14:01:10'),
(31, 3, 5, 'KS1_information', '2022-08-06 14:01:10', '2022-08-06 14:01:10'),
(32, 3, 6, 'KS1_safety', '2022-08-06 14:01:10', '2022-08-06 14:01:10'),
(33, 3, 7, 'KS2_debugging', '2022-08-06 14:01:10', '2022-08-06 14:01:10'),
(34, 3, 6, 'KS2_variables', '2022-08-06 14:01:10', '2022-08-06 14:01:10'),
(35, 3, 5, 'KS2_reasoning', '2022-08-06 14:01:10', '2022-08-06 14:01:10'),
(36, 3, 4, 'KS2_networks', '2022-08-06 14:01:10', '2022-08-06 14:01:10'),
(37, 3, 3, 'KS2_search', '2022-08-06 14:01:10', '2022-08-06 14:01:10'),
(38, 3, 2, 'KS2_variety', '2022-08-06 14:01:10', '2022-08-06 14:01:10'),
(39, 3, 1, 'KS2_responsible', '2022-08-06 14:01:10', '2022-08-06 14:01:10'),
(40, 4, 1, 'KS1_algorithms', '2022-08-08 20:25:08', '2022-08-08 20:25:08'),
(41, 4, 7, 'KS1_programs', '2022-08-08 20:25:08', '2022-08-08 20:25:08'),
(42, 4, 7, 'KS1_logic', '2022-08-08 20:25:08', '2022-08-08 20:25:08'),
(43, 4, 7, 'KS1_purpose', '2022-08-08 20:25:09', '2022-08-08 20:25:09'),
(44, 4, 7, 'KS1_information', '2022-08-08 20:25:09', '2022-08-08 20:25:09'),
(45, 4, 7, 'KS1_safety', '2022-08-08 20:25:09', '2022-08-08 20:25:09'),
(46, 4, 2, 'KS2_debugging', '2022-08-08 20:25:09', '2022-08-08 20:25:09'),
(47, 4, 2, 'KS2_variables', '2022-08-08 20:25:09', '2022-08-08 20:25:09'),
(48, 4, 1, 'KS2_reasoning', '2022-08-08 20:25:09', '2022-08-08 20:25:09'),
(49, 4, 3, 'KS2_networks', '2022-08-08 20:25:09', '2022-08-08 20:25:09'),
(50, 4, 2, 'KS2_search', '2022-08-08 20:25:09', '2022-08-08 20:25:09'),
(51, 4, 4, 'KS2_variety', '2022-08-08 20:25:09', '2022-08-08 20:25:09'),
(52, 4, 5, 'KS2_responsible', '2022-08-08 20:25:09', '2022-08-08 20:25:09'),
(53, 5, 1, 'KS1_algorithms', '2022-08-09 15:39:11', '2022-08-09 15:39:11'),
(54, 5, 2, 'KS1_programs', '2022-08-09 15:39:11', '2022-08-09 15:39:11'),
(55, 5, 2, 'KS1_logic', '2022-08-09 15:39:11', '2022-08-09 15:39:11'),
(56, 5, 2, 'KS1_purpose', '2022-08-09 15:39:11', '2022-08-09 15:39:11'),
(57, 5, 2, 'KS1_information', '2022-08-09 15:39:11', '2022-08-09 15:39:11'),
(58, 5, 2, 'KS1_safety', '2022-08-09 15:39:11', '2022-08-09 15:39:11'),
(59, 5, 2, 'KS2_debugging', '2022-08-09 15:39:11', '2022-08-09 15:39:11'),
(60, 5, 2, 'KS2_variables', '2022-08-09 15:39:11', '2022-08-09 15:39:11'),
(61, 5, 2, 'KS2_reasoning', '2022-08-09 15:39:11', '2022-08-09 15:39:11'),
(62, 5, 2, 'KS2_networks', '2022-08-09 15:39:11', '2022-08-09 15:39:11'),
(63, 5, 2, 'KS2_search', '2022-08-09 15:39:11', '2022-08-09 15:39:11'),
(64, 5, 2, 'KS2_variety', '2022-08-09 15:39:11', '2022-08-09 15:39:11'),
(65, 5, 2, 'KS2_responsible', '2022-08-09 15:39:11', '2022-08-09 15:39:11');

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
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user2', 'user2@gmial.com', NULL, '$2y$10$sI5A4e.HrbiKeDI4IoGmbOnKLsotyuB5bpHT.Y2KF6.JYSXfc8nvq', 'Biro Girl.jpg', NULL, '2022-08-04 07:57:29', '2022-08-04 08:28:22'),
(2, 'user1', 'user1@gmail.com', NULL, '$2y$10$O2UMLTKXhClfnP8hduSD0Oa2e3TXZWtH1J2Pb4y17r45KKATHAmZq', 'user 1.jpg', NULL, '2022-08-04 20:24:21', '2022-08-11 06:42:46'),
(3, 'Laura', 'laura@gmail.com', NULL, '$2y$10$/ZIZD1Ft1EqrqB5IxbKePO5.1EWylKLG0uH1UL5lLUYHAbhIgJ9eC', 'user 1.jpg', 'cLD16CgQcg2exy7JHByc9qW4hXo2ftoW1A6NX6ll3GrwGhwIjuxUsar3riGt', '2022-08-06 13:59:42', '2022-08-16 16:05:21'),
(4, 'John Smith', 'johnsmith1234567891011121314151617181920@gmail.com', NULL, '$2y$10$FOCsgdmboUme2XhVbEVG9./Bn1WIh3/FKnso1glxeCIyoYu2xUUVO', 'logo.jpg', NULL, '2022-08-08 20:19:33', '2022-08-08 20:48:04'),
(5, 'user3', 'user3@gmail.com', NULL, '$2y$10$bwj.j4jUJNmEakGM0IgA6ur4rrYgUvNvo5RNtK.wFDZ.JkX4ssrPm', 'user 1.jpg', NULL, '2022-08-09 11:42:41', '2022-08-09 15:35:36'),
(6, 'user4', 'user4@gmail.com', NULL, '$2y$10$T.Q49FOLMbx2wjXXV93I2etniLUquJE.192AJdOITcA9sQbQTqKLG', 'user.png', NULL, '2022-08-10 12:14:21', '2022-08-10 12:14:21'),
(7, 'user6', 'user6@gmail.com', NULL, '$2y$10$SjDurmeFW4b7I28GCqbv9eK60IZt4KY8zUKcovLUPgkIrkpCbzi46', 'user.png', NULL, '2022-08-10 12:36:49', '2022-08-10 12:36:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
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
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surveys_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
