-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2016 at 12:00 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `examdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  UNIQUE KEY `cache_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_27_070524_create_session_table', 1),
('2016_07_20_055652_create_cache_table', 1),
('2016_07_20_123435_create_set_1', 1),
('2016_07_20_123903_create_set_2', 1),
('2016_07_20_123911_create_set_3', 1),
('2016_07_25_110723_create_students_column', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `set_1`
--

CREATE TABLE IF NOT EXISTS `set_1` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `option_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correct_option` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `set_2`
--

CREATE TABLE IF NOT EXISTS `set_2` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `option_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correct_option` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `set_3`
--

CREATE TABLE IF NOT EXISTS `set_3` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `option_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correct_option` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `set` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_uid_unique` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `uid`, `type`, `set`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$IctjQvdhhrHuEMr.SQ0ZauwkeEk07deROf.UZ2HYpgQV1jHo6oACW', NULL, '2016-07-25 06:06:30', '2016-07-25 06:06:30', '', 'admin', ''),
(2, 'student1', 'student1@test.com', '$2y$10$Y9DXmHfBvwcDiXBR9bfH3emXK/Xi6Pg6I.gHliiZIlSDD1j1BekWa', NULL, '2016-07-25 06:06:30', '2016-07-25 06:06:30', 'std1', 'student', 'set1'),
(3, 'student2', 'student2@test.com', '$2y$10$RGhWHx1GyBmQqPLdVor1se8esAJ.X.y10PxygT3L1iBVluDlqxYQ.', NULL, '2016-07-25 06:06:30', '2016-07-25 06:06:30', 'std2', 'student', 'set2'),
(4, 'student3', 'student3@test.com', '$2y$10$Ns5HzlQokHJ0gdc1wH303.XOfZoqslG2fWw0fdlQAI7srCEmjHU5i', NULL, '2016-07-25 06:06:30', '2016-07-25 06:06:30', 'std3', 'student', 'set3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
