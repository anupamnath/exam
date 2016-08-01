-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2016 at 05:42 PM
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
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `q1` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q2` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q3` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q4` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q5` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q6` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q7` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q8` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q9` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q10` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q11` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q12` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q13` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q14` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q15` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q16` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q17` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q18` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q19` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q20` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q21` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q22` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q23` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q24` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q25` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q26` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q27` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q28` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q29` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q30` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q31` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q32` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q33` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q34` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q35` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q36` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q37` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q38` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q39` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q40` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q41` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q42` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q43` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q44` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q45` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q46` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q47` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q48` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q49` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q50` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q51` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q52` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q53` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q54` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q55` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q56` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q57` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q58` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q59` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `q60` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `answers_student_id_unique` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
-- Table structure for table `exam_details`
--

CREATE TABLE IF NOT EXISTS `exam_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `exam_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` double(8,2) NOT NULL,
  `sets` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `questions_per_set` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `exam_details`
--

INSERT INTO `exam_details` (`id`, `exam_name`, `duration`, `sets`, `questions_per_set`, `created_at`, `updated_at`) VALUES
(1, 'Assam Down Town University Online Examination', 60.00, '3', '60', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `marked`
--

CREATE TABLE IF NOT EXISTS `marked` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `q1` tinyint(4) NOT NULL,
  `q2` tinyint(4) NOT NULL,
  `q3` tinyint(4) NOT NULL,
  `q4` tinyint(4) NOT NULL,
  `q5` tinyint(4) NOT NULL,
  `q6` tinyint(4) NOT NULL,
  `q7` tinyint(4) NOT NULL,
  `q8` tinyint(4) NOT NULL,
  `q9` tinyint(4) NOT NULL,
  `q10` tinyint(4) NOT NULL,
  `q11` tinyint(4) NOT NULL,
  `q12` tinyint(4) NOT NULL,
  `q13` tinyint(4) NOT NULL,
  `q14` tinyint(4) NOT NULL,
  `q15` tinyint(4) NOT NULL,
  `q16` tinyint(4) NOT NULL,
  `q17` tinyint(4) NOT NULL,
  `q18` tinyint(4) NOT NULL,
  `q19` tinyint(4) NOT NULL,
  `q20` tinyint(4) NOT NULL,
  `q21` tinyint(4) NOT NULL,
  `q22` tinyint(4) NOT NULL,
  `q23` tinyint(4) NOT NULL,
  `q24` tinyint(4) NOT NULL,
  `q25` tinyint(4) NOT NULL,
  `q26` tinyint(4) NOT NULL,
  `q27` tinyint(4) NOT NULL,
  `q28` tinyint(4) NOT NULL,
  `q29` tinyint(4) NOT NULL,
  `q30` tinyint(4) NOT NULL,
  `q31` tinyint(4) NOT NULL,
  `q32` tinyint(4) NOT NULL,
  `q33` tinyint(4) NOT NULL,
  `q34` tinyint(4) NOT NULL,
  `q35` tinyint(4) NOT NULL,
  `q36` tinyint(4) NOT NULL,
  `q37` tinyint(4) NOT NULL,
  `q38` tinyint(4) NOT NULL,
  `q39` tinyint(4) NOT NULL,
  `q40` tinyint(4) NOT NULL,
  `q41` tinyint(4) NOT NULL,
  `q42` tinyint(4) NOT NULL,
  `q43` tinyint(4) NOT NULL,
  `q44` tinyint(4) NOT NULL,
  `q45` tinyint(4) NOT NULL,
  `q46` tinyint(4) NOT NULL,
  `q47` tinyint(4) NOT NULL,
  `q48` tinyint(4) NOT NULL,
  `q49` tinyint(4) NOT NULL,
  `q50` tinyint(4) NOT NULL,
  `q51` tinyint(4) NOT NULL,
  `q52` tinyint(4) NOT NULL,
  `q53` tinyint(4) NOT NULL,
  `q54` tinyint(4) NOT NULL,
  `q55` tinyint(4) NOT NULL,
  `q56` tinyint(4) NOT NULL,
  `q57` tinyint(4) NOT NULL,
  `q58` tinyint(4) NOT NULL,
  `q59` tinyint(4) NOT NULL,
  `q60` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `marked_student_id_unique` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
('2016_07_25_110723_create_students_column', 1),
('2016_07_27_051926_create_answers_table', 1),
('2016_07_27_053316_create_marked_table', 1),
('2016_07_27_060002_create_exam_details_table', 1),
('2016_07_27_060030_create_student_status_table', 1);

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
  `question_no` int(11) NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a` text COLLATE utf8_unicode_ci NOT NULL,
  `b` text COLLATE utf8_unicode_ci NOT NULL,
  `c` text COLLATE utf8_unicode_ci NOT NULL,
  `d` text COLLATE utf8_unicode_ci NOT NULL,
  `correct_option` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `set_1_question_no_unique` (`question_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `set_1`
--

INSERT INTO `set_1` (`id`, `question_no`, `question`, `section`, `a`, `b`, `c`, `d`, `correct_option`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ten years ago, P was half of Q''s age. If the ratio of their present ages is 3:4, what will be the total of their present ages?', 'age', '45', '40', '35', '30', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 'Test question 2?', 'typeA', '23', '76', '11', '45', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 'Test question 3?', 'typeB', 'aaa', 'bbb', 'ccc', 'ddd', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `set_2`
--

CREATE TABLE IF NOT EXISTS `set_2` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question_no` int(11) NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a` text COLLATE utf8_unicode_ci NOT NULL,
  `b` text COLLATE utf8_unicode_ci NOT NULL,
  `c` text COLLATE utf8_unicode_ci NOT NULL,
  `d` text COLLATE utf8_unicode_ci NOT NULL,
  `correct_option` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `set_2_question_no_unique` (`question_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `set_2`
--

INSERT INTO `set_2` (`id`, `question_no`, `question`, `section`, `a`, `b`, `c`, `d`, `correct_option`, `created_at`, `updated_at`) VALUES
(1, 1, 'Father is aged three times more than his son Sunil. After 8 years, he would be two and a half times of Sunil''s age. After further 8 years, how many times would he be of Sunil''s age?', 'age', '4 times', '5 times', '2 times', '3 times', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 'Test question 5?', 'typeA', '23', '76', '11', '45', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 'Test question 6?', 'typeB', 'aaa', 'bbb', 'ccc', 'ddd', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `set_3`
--

CREATE TABLE IF NOT EXISTS `set_3` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question_no` int(11) NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a` text COLLATE utf8_unicode_ci NOT NULL,
  `b` text COLLATE utf8_unicode_ci NOT NULL,
  `c` text COLLATE utf8_unicode_ci NOT NULL,
  `d` text COLLATE utf8_unicode_ci NOT NULL,
  `correct_option` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `set_3_question_no_unique` (`question_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `set_3`
--

INSERT INTO `set_3` (`id`, `question_no`, `question`, `section`, `a`, `b`, `c`, `d`, `correct_option`, `created_at`, `updated_at`) VALUES
(1, 1, 'A man is 24 years older than his son. In two years, his age will be twice the age of his son. What is the present age of his son?', 'age', '23 years', '22 years', '21 years', '20 years', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 'Test question 7?', 'typeA', '23', '76', '11', '45', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 'Test question 8?', 'typeB', 'aaa', 'bbb', 'ccc', 'ddd', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_status`
--

CREATE TABLE IF NOT EXISTS `student_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exam_id` int(11) NOT NULL,
  `set` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time_remaining` double(8,2) NOT NULL,
  `current_question` int(11) NOT NULL,
  `start_exam` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_exam` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_status_student_id_unique` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student_status`
--

INSERT INTO `student_status` (`id`, `student_id`, `exam_id`, `set`, `time_remaining`, `current_question`, `start_exam`, `end_exam`, `created_at`, `updated_at`) VALUES
(1, 'std1', 1, 'set_1', 60.00, 0, '0000-00-00 00:00:00', 0, '2016-08-01 09:04:49', '2016-08-01 09:04:49'),
(2, 'std2', 1, 'set_2', 60.00, 0, '0000-00-00 00:00:00', 0, '2016-08-01 09:04:49', '2016-08-01 09:04:49'),
(3, 'std3', 1, 'set_3', 60.00, 0, '0000-00-00 00:00:00', 0, '2016-08-01 09:04:49', '2016-08-01 09:04:49');

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `uid`, `type`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$wPz5doI3qbpXYcRJVtmAMu3HQ.MKJ80vNqDgWNlA1ye6XFPibrxqi', 'aGzL3szA1UlYd592AoOKUBoLVZgU8oygTKBTV0skjq2DgYRKexWSeppxjRJX', '2016-08-01 09:04:47', '2016-08-01 09:05:17', '', 'admin'),
(2, 'student1', 'student1@test.com', '$2y$10$fW35XrEVm/Vb5oBf6LWB4OIeUPBreLrGpimYgAcoYEPMcalHAefrS', NULL, '2016-08-01 09:04:47', '2016-08-01 09:04:47', 'std1', 'student'),
(3, 'student2', 'student2@test.com', '$2y$10$hqspB5uOTjsiyOQMT76QIuZTAO5MiGlbLpXK.G1l8pgJWpN2GLuau', NULL, '2016-08-01 09:04:48', '2016-08-01 09:04:48', 'std2', 'student'),
(4, 'student3', 'student3@test.com', '$2y$10$iilyCZJC3vHpTYrBjLkrp.7kHeA7CnkHXLS3Z29Z0i/XMfC/sDvVG', NULL, '2016-08-01 09:04:48', '2016-08-01 09:04:48', 'std3', 'student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
