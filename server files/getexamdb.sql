-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2016 at 01:02 AM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `getexamdb`
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
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `rating_student_id_unique` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `student_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 'std1', 0, '', '2016-08-07 13:59:28', '2016-08-07 13:59:28');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=66 ;

--
-- Dumping data for table `set_1`
--

INSERT INTO `set_1` (`id`, `question_no`, `question`, `section`, `a`, `b`, `c`, `d`, `correct_option`, `created_at`, `updated_at`) VALUES
(1, 1, '<p>12.05+0.65+3.95+20.695=?</p>', 'Numerical', '<p>38.145</p>', '<p>37.345</p>', '<p>36.986</p>', '<p>37.008</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, '<p>Fine the value of 3.9562+3.999/4.2345</p>', 'Numerical', '<p>2.88</p>', '<p>4.88</p>', '<p>3.98</p>', '<p>1.88</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, '<p>Fill in the blanks:</p>\r\n<p>12.3&divide;6.5 &divide; 3.5 X 2.71=&mdash;.</p>', 'Numerical', '<p>15.63</p>', '<p>19.71</p>', '<p>14.57</p>', '<p>20.11</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 20, '<p>Find the area of the triangle &nbsp;&ndash;</p>\n<p><img src="/images/questions/q20s1.png" alt="" /></p>', 'Numerical', '<p>15 sq. cm</p>', '<p>6 sq. cm</p>', '<p>10 sq. cm</p>', '<p>8 sq. cm</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 21, '<p><img src="/images/questions/tableq1s11.jpg" alt="" /></p>\r\n<p>How many more employed were there in 1990 than in 2000?</p>', 'Psychometric', '<p>75</p>', '<p>360</p>', '<p>485</p>', '<p>100</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 23, '<p><img src="/images/questions/tableq1s13.jpg" alt="" /></p>\r\n<p>What was the difference between the highest and lowest unemployment rate amongst the group of graduates?</p>', 'Psychometric', '<p>10.5 %</p>', '<p>3.5 %</p>', '<p>4.2 %</p>', '<p>9.2 %</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 22, '<p><img src="/images/questions/tableq1s15.jpg" alt="" /></p>\r\n<p>What percentage of students was unemployed in 1990?</p>', 'Psychometric', '<p>10.5 %</p>', '<p>0.8 %</p>', '<p>8.3&nbsp;%</p>', '<p>7.8&nbsp;%</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 24, '<p><img src="/images/questions/q241.jpg" alt="" /></p>', 'Psychometric', '<p><img src="/images/questions/a24a1.jpg" alt="" /></p>', '<p><img src="/images/questions/a24b1.jpg" alt="" /></p>', '<p><img src="/images/questions/a24c1.jpg" alt="" /></p>', '<p><img src="/images/questions/a24d1.jpg" alt="" /></p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 25, '<p><img src="/images/questions/q25.jpg" alt="" /></p>', 'Psychometric', '<p><img src="/images/questions/a25a.jpg" alt="" /></p>', '<p><img src="/images/questions/a25b.jpg" alt="" /></p>', '<p><img src="/images/questions/a25c.jpg" alt="" /></p>', '<p><img src="/images/questions/a25d.jpg" alt="" /></p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 26, '<p><img src="/images/questions/q26.jpg" alt="" /></p>', 'Psychometric', '<p><img src="/images/questions/a26a.jpg" alt="" /></p>', '<p><img src="/images/questions/a26b.jpg" alt="" /></p>', '<p><img src="/images/questions/a26c.jpg" alt="" /></p>', '<p><img src="/images/questions/a26d.jpg" alt="" /></p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 36, '<p><img src="/images/questions/q36.jpg" alt="" /></p>\r\n<p>What should come in the &ldquo;?&rdquo; place?</p>', 'Psychometric', '<p>62</p>', '<p>63</p>', '<p>64</p>', '<p>65</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 37, '<p><img src="/images/questions/q37.jpg" alt="" /></p>\r\n<p>What should come in the &ldquo;?&rdquo; place?</p>', 'Psychometric', '<p>T</p>', '<p>U</p>', '<p>W</p>', '<p>V</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 38, '<p><img src="/images/questions/q38.jpg" alt="" /></p>\r\n<p>What should come in the &ldquo;?&rdquo; place?</p>', 'Psychometric', '<p>55</p>', '<p>54</p>', '<p>53</p>', '<p>52</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 4, '<p>Simplify:</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.97+6.21/2.95 x3.73/1.14</p>', 'Numerical', '<p>9.65</p>', '<p>10.68</p>', '<p>12.39</p>', '<p>11.29</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 5, '<p>Express 6:5 as per cent:</p>', 'Numerical', '<p>120 %</p>', '<p>110 %</p>', '<p>105 %</p>', '<p>108 %</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 6, '<p>What will be the percentage of increase in salary Rs. 4, 0000 to Rs, 4,600?</p>', 'Numerical', '<p>Rs. 8,520</p>', '<p>Rs. 8,720</p>', '<p>Rs. 8,250</p>', '<p>Rs. 8,630</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 7, '<p>A boxes of 2 kg apricots costs Rs. 250. What will be the cost of 4 such boxes?</p>', 'Numerical', '<p>Rs. 700</p>', '<p>Rs.&nbsp;550</p>', '<p>Rs.&nbsp;800</p>', '<p>Rs. 1000</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 8, '<p>Bananas are on sale as 4 for Rs 7. How much will 8 bananas cost?</p>', 'Numerical', '<p>Rs. 12</p>', '<p>Rs. 14</p>', '<p>Rs. 50</p>', '<p>Rs.&nbsp;20</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 9, '<p>Find the value of x for the equation</p>\r\n<p>(x+5)<sup>2</sup>-6<sup>2</sup>= 0</p>', 'Numerical', '<p>-11 and -1</p>', '<p>11 and 1</p>', '<p>-11 and 1</p>', '<p>11 and -1</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 10, '<p>If x:y:z=5:4 and y:z=9:7 find x:y;z</p>', 'Numerical', '<p>45:36:28</p>', '<p>46:36:28</p>', '<p>46:37:28</p>', '<p>45:36:29</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 11, '<p>Find the fourth proportional of 3,12,15</p>', 'Numerical', '<p>60</p>', '<p>61</p>', '<p>63</p>', '<p>64</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 12, '<p>What is the area of the sphere whose radius is 4 cm?</p>', 'Numerical', '<p>30 &prod; cm<sup>2</sup></p>', '<p>32 &prod; cm<sup>2</sup></p>', '<p>15&nbsp;&prod; cm<sup>2</sup></p>', '<p>16 &prod; cm<sup>2</sup></p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 13, '<p>[ 9 389+99)2-(389-99)2]/(389x99) is equal to</p>', 'Numerical', '<p>2</p>', '<p>4</p>', '<p>6</p>', '<p>8</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 14, '<p>How many numbers between 11 and 90 are divisible by 7?</p>', 'Numerical', '<p>11</p>', '<p>12</p>', '<p>13</p>', '<p>14</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 15, '<p>The sum of two numbers is twice their difference. If one of the numbers is 10, the other one is?</p>', 'Numerical', '<p>10</p>', '<p>20</p>', '<p>30</p>', '<p>40</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 16, '<p>Find compound interest on Rs. 6250 at 16% per annum for 2 years, compounded annually?</p>', 'Numerical', '<p>Rs 8410</p>', '<p>Rs 8409</p>', '<p>Rs 9410</p>', '<p>Rs 9409</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 17, '<p>If a=5 and b=3 find the value of a<sup>3</sup>+b<sup>3</sup>/a<sup>3</sup>-b<sup>3</sup></p>', 'Numerical', '<p>76/49</p>', '<p>87/49</p>', '<p>76/56</p>', '<p>87/32</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 18, '<p>The diameter of a wheel is 200 m. How many times the wheel will make complete revolution to cover a distance of 2512 m.</p>', 'Numerical', '<p>2 times</p>', '<p>3 times</p>', '<p>4 times</p>', '<p>5 times</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 19, '<p>If a:b=3:4 and c:b=2:5 then find a:c</p>', 'Numerical', '<p>5:8</p>', '<p>15:8</p>', '<p>8:15</p>', '<p>2:15</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 42, '<p>One who is unable to pay debts are called</p>', 'English', '<p>Poor</p>', '<p>Pauper</p>', '<p>Bankrupt</p>', '<p>Indebted</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 43, '<p>He was punished for being&hellip;.</p>', 'English', '<p>notty</p>', '<p>knotty</p>', '<p>naughty</p>', '<p>nutty</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 44, '<p>She was looked&hellip;.with great care</p>', 'English', '<p>After</p>', '<p>Into</p>', '<p>About</p>', '<p>With</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 45, '<p>I wish my parents&hellip;.here to support me.</p>', 'English', '<p>Would be&nbsp;</p>', '<p>Has been</p>', '<p>Is</p>', '<p>Were</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 46, '<p>Sun&hellip;&hellip;in the east</p>', 'English', '<p>Rises</p>', '<p>Comes</p>', '<p>Goes</p>', '<p>None</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 47, '<p>I always go to school &hellip;&hellip;foot.</p>', 'English', '<p>On</p>', '<p>By</p>', '<p>With</p>', '<p>None</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 48, '<p>Sita (walk) a mile every day.</p>', 'English', '<p>Walks</p>', '<p>Walked</p>', '<p>Walking</p>', '<p>Walk</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 49, '<p>The past form of Cut is&hellip;.</p>', 'English', '<p>Cut</p>', '<p>Cute</p>', '<p>Cutting&nbsp;</p>', '<p>Cutting</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 50, '<p>I have seen <sup>_______</sup> one eyed man.</p>\r\n<p>Fill in the blanks with the correct option.</p>', 'English', '<p>a</p>', '<p>an</p>', '<p>the</p>', '<p>two</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 51, '<p>What are you looking <sup>_______</sup> , here in the dark?</p>\r\n<p>Fill in the blank with appropriate preposition.</p>', 'English', '<p>over</p>', '<p>after</p>', '<p>for</p>', '<p>on</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 52, '<p>The train (leave) the station before we reached.</p>', 'English', '<p>Leave</p>', '<p>Left</p>', '<p>Has left</p>', '<p>Had left</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 53, '<p>Ranjan (come) here at 9 am daily.</p>', 'English', '<p>come</p>', '<p>came</p>', '<p>comes</p>', '<p>has come</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 54, '<p>Give the opposite word of &ldquo;Forbid&rdquo;</p>', 'English', '<p>bold</p>', '<p>good</p>', '<p>strong</p>', '<p>allow</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 55, '<p>Express in one word</p>\r\n<p>&ldquo;Life of a peson written by some boy&rdquo;</p>', 'English', '<p>Bibliography</p>', '<p>Biography</p>', '<p>Calligraphy</p>', '<p>Cardiograph</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 56, '<p>&ldquo;Cut and dried&rdquo;</p>\r\n<p>Give the meaning of the above phrase</p>', 'English', '<p>Cut into small pieces</p>', '<p>sudden tragedy</p>', '<p>miserable life</p>', '<p>ready to wear</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 57, '<p>Give the adjective form of &ldquo;Advice&rdquo;</p>', 'English', '<p>advice</p>', '<p>adviced</p>', '<p>advise</p>', '<p>advised</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 58, '<p>Give the superlative degree of &ldquo;beautiful&rdquo;</p>', 'English', '<p>Beautiful</p>', '<p>more beautiful</p>', '<p>most beautiful</p>', '<p>less beautiful</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 59, '<p>&ldquo;He knows me well.&rdquo;</p>\r\n<p>Change into passive voice</p>', 'English', '<p>He is known to me well</p>', '<p>I am known to him well</p>', '<p>I am not known to him</p>', '<p>He is an unknown to me</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 60, '<p>He &hellip;.good English.</p>', 'English', '<p>says</p>', '<p>speaks</p>', '<p>tells</p>', '<p>none</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 61, '<p>M.K. Gandhi&hellip;.his faults openly</p>', 'English', '<p>confessed</p>', '<p>admitted</p>', '<p>told</p>', '<p>none</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 39, '<p>Pointing towards a girl in the picture, Sunitha said, &ldquo;She is the mother of Renu, whose father is my son.&rdquo; How is Sunitha related to that girl in the picture?</p>', 'Psychometric', '<p>Mother</p>', '<p>Aunt</p>', '<p>Mother-in-law</p>', '<p>Cousin</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 40, '<p>P&rsquo;s father is Q&rsquo;s son. M is the paternal uncle of P and N is the brother of Q. How is N related to M?</p>', 'Psychometric', '<p>Brother</p>', '<p>Nephew</p>', '<p>Cousin</p>', '<p>Uncle</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 41, '<p>Nandini is the only daughter of Madan&rsquo;s sister Sangita&rsquo;s brother. How is Nandini related to Madan?</p>', 'Psychometric', '<p>Daughter</p>', '<p>Niece</p>', '<p>Cousin</p>', '<p>Niece or Daughter</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 27, '<p>&nbsp;What is the next term in the following series?</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;1, 4, 3, 9, 5, 16, 7, 25, 9, 36, 11, ?</p>', 'Psychometric', '<p>64</p>', '<p>49</p>', '<p>48</p>', '<p>55</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 28, '<p>In a certain code&nbsp;ABRACADABRA&nbsp;is coded as&nbsp;ZYIZXZWZYIZ. How will the word&nbsp;HOCUSPOCUS&nbsp;be coded in that code language?</p>', 'Psychometric', '<p>SLXFHKLXFH</p>', '<p>SLXZHKLXFH</p>', '<p>SLXFHKMXFH</p>', '<p>SLXFHILXFH</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 29, '<p>In a certain code language&nbsp;<strong>DECEMBER</strong>&nbsp;is written as&nbsp;<strong>RDEEBCME</strong>. How will&nbsp;<strong>FEBRUARY</strong>&nbsp;be written in that code language?</p>', 'Psychometric', '<p>YFAERBRU</p>', '<p>YFREABUR</p>', '<p>YFAEBRUR</p>', '<p>YFAERUBR</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 30, '<p>In a certain code&nbsp;<strong>SUCCESS</strong>&nbsp;is written as&nbsp;<strong>TWFGJYZ</strong>. How will the word&nbsp;<strong>MIRACLE</strong>&nbsp;be written in that language?</p>', 'Psychometric', '<p>NKVEHRL</p>', '<p>NKUEHRL</p>', '<p>NKTEHRL</p>', '<p>None of these</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 31, '<p><strong>12</strong>&nbsp;is related to&nbsp;<strong>36</strong>. In the same way as&nbsp;<strong>17</strong>&nbsp;is related to _____</p>', 'Psychometric', '<p>34</p>', '<p>76</p>', '<p>51</p>', '<p>63</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 32, '<p>In a certain code,&nbsp;&nbsp;<strong>@</strong>&nbsp; implies&nbsp;&nbsp;<strong>DIVIDE</strong>&nbsp;,&nbsp;&nbsp;<strong>*</strong>&nbsp; implies&nbsp;&nbsp;<strong>SUBTRACT</strong>&nbsp;,&nbsp;&nbsp;<strong>$</strong>&nbsp;&nbsp;implies&nbsp;&nbsp;<strong>MULTIPLY</strong>&nbsp; and&nbsp;&nbsp;<strong>#</strong>&nbsp;&nbsp;implies&nbsp;&nbsp;<strong>ADDITION</strong>&nbsp;, then,</p>\n<p>&nbsp;25&nbsp; $&nbsp; 2&nbsp; #&nbsp; 9&nbsp;&nbsp; $&nbsp; 4&nbsp; @&nbsp; 2&nbsp; *&nbsp; 5&nbsp; =&nbsp; ?</p>', 'Psychometric', '<p>112</p>', '<p>85</p>', '<p>73</p>', '<p>63</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 33, '<p>P, T, V, R, M, D, K and W are sitting around a circular table facing the Centre. V is second to the left of T. T is fourth to the right of M. D and P are not immediate neighbors of T. D is third to the right of P. W is not an immediate neighbor of P. P is to the immediate left of K.</p>\r\n<p>Who is second to the left of K?</p>', 'Psychometric', '<p>P</p>', '<p>R</p>', '<p>M</p>', '<p>S</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 34, '<p>P, T, V, R, M, D, K and W are sitting around a circular table facing the Centre. V is second to the left of T. T is fourth to the right of M. D and P are not immediate neighbors of T. D is third to the right of P. W is not an immediate neighbor of P. P is to the immediate left of K.</p>\n<p>Who is on the immediate left of V?</p>', 'Psychometric', '<p>D</p>', '<p>M</p>', '<p>W</p>', '<p>Data is inadequate</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 35, '<p>P, T, V, R, M, D, K and W are sitting around a circular table facing the Centre. V is second to the left of T. T is fourth to the right of M. D and P are not immediate neighbors of T. D is third to the right of P. W is not an immediate neighbor of P. P is to the immediate left of K.</p>\r\n<p>Who is third to the right of V?</p>', 'Psychometric', '<p>T</p>', '<p>K</p>', '<p>W</p>', '<p>None of the above</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Dumping data for table `set_2`
--

INSERT INTO `set_2` (`id`, `question_no`, `question`, `section`, `a`, `b`, `c`, `d`, `correct_option`, `created_at`, `updated_at`) VALUES
(1, 1, '<p>He was placed----two girls.</p>', 'English', '<p>between</p>', '<p>among</p>', '<p>with</p>', '<p>besides</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2, '<p>She came----a noble family.</p>', 'English', '<p>of</p>', '<p>from</p>', '<p>in</p>', '<p>to</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 3, '<p>He is true----his friends.</p>', 'English', '<p>to</p>', '<p>with</p>', '<p>by</p>', '<p>from</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 4, '<p>What is the time----your watch?</p>', 'English', '<p>with</p>', '<p>in</p>', '<p>between</p>', '<p>by</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 5, '<p>I cannot agree----your proposal.</p>', 'English', '<p>at</p>', '<p>to</p>', '<p>with</p>', '<p>in</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 6, '<p>&nbsp; ---- girl out of the ten will get a prize.</p>', 'English', '<p>Each</p>', '<p>Every</p>', '<p>Some</p>', '<p>Many</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 7, '<p>Did you buy ---- fruits?</p>', 'English', '<p>some</p>', '<p>any</p>', '<p>few</p>', '<p>the few</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 8, '<p>It rained ---- day during my holidays.</p>', 'English', '<p>each</p>', '<p>every</p>', '<p>many</p>', '<p>much</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 9, '<p>There are three girls, ----- is tall.</p>', 'English', '<p>neither</p>', '<p>none</p>', '<p>either</p>', '<p>any</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 10, '<p>There are four pens, you can take ----.</p>', 'English', '<p>neither</p>', '<p>any</p>', '<p>either</p>', '<p>none</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 11, '<p><strong>Choose the correct synonym of the word</strong></p>\r\n<p>Cheerful</p>', 'English', '<p>Glowing</p>', '<p>Happy</p>', '<p>Jealous</p>', '<p>Pleasure</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 12, '<p><strong>Choose the correct synonym of the word</strong></p>\r\n<p>Vacant</p>', 'English', '<p>Display</p>', '<p>Empty</p>', '<p>Full</p>', '<p>Experience</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 13, '<p><strong>Choose the correct synonym of the word</strong></p>\r\n<p>Request</p>', 'English', '<p>plead</p>', '<p>beg</p>', '<p>annoy</p>', '<p>trouble</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 14, '<p><strong>Choose the correct synonym of the word</strong></p>\r\n<p>Obstacle</p>', 'English', '<p>fight</p>', '<p>hurdle</p>', '<p>opinion</p>', '<p>views</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 15, '<p><strong>Choose the correct synonym of the word</strong></p>\r\n<p>Brief</p>', 'English', '<p>demonstrate</p>', '<p>precise</p>', '<p>systematic</p>', '<p>interest</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 16, '<p><strong>Choose the correct antonym&nbsp;of the word</strong></p>\r\n<p>Internal</p>', 'English', '<p>details</p>', '<p>present</p>', '<p>external</p>', '<p>subjective</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 17, '<p><strong>Choose the correct antonym of the word</strong></p>\r\n<p>Exit</p>', 'English', '<p>inside</p>', '<p>below</p>', '<p>around</p>', '<p>entrance</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 18, '<p><strong>Choose the correct antonym of the word</strong></p>\r\n<p>Descend</p>', 'English', '<p>upstream</p>', '<p>origin</p>', '<p>ascend</p>', '<p>inherit</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 19, '<p><strong>Choose the correct antonym of the word</strong></p>\r\n<p>Contrast</p>', 'English', '<p>similar</p>', '<p>different</p>', '<p>relief</p>', '<p>believe</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 20, '<p><strong>Choose the correct antonym of the word</strong></p>\r\n<p>Frown</p>', 'English', '<p>alive</p>', '<p>happy</p>', '<p>smile</p>', '<p>anger</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 21, '<p><strong>Choose the correct option</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p>Eight persons A, B, C, D, E, F, G and H are sitting around a rectangular table in such a way that two persons sit on each of the four sides of the table facing the centre. Persons sitting on opposite sides are exactly opposite each other.</p>\r\n<p>D faces North and sits exactly opposite. H. E is in the immediate left of H. &nbsp;A and G sit on the same side. G is exactly opposite of B, who is on the immediate right of C. A is next to the left of D.</p>\r\n<p>&nbsp;</p>\r\n<p>Who is next to E in clockwise direction?</p>', 'Psychometric', '<p>G</p>', '<p>B</p>', '<p>F</p>', '<p>A or F</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 22, '<p><strong>Choose the correct option</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p>Eight persons A, B, C, D, E, F, G and H are sitting around a rectangular table in such a way that two persons sit on each of the four sides of the table facing the centre. Persons sitting on opposite sides are exactly opposite each other.</p>\r\n<p>D faces North and sits exactly opposite. H. E is in the immediate left of H. &nbsp;A and G sit on the same side. G is exactly opposite of B, who is on the immediate right of C. A is next to the left of D.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Who is sitting opposite E?</p>', 'Psychometric', '<p>D</p>', '<p>A</p>', '<p>F</p>', '<p>A or D</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 23, '<p><strong>Choose the correct option</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p>Eight persons A, B, C, D, E, F, G and H are sitting around a rectangular table in such a way that two persons sit on each of the four sides of the table facing the centre. Persons sitting on opposite sides are exactly opposite each other.</p>\r\n<p>D faces North and sits exactly opposite. H. E is in the immediate left of H. &nbsp;A and G sit on the same side. G is exactly opposite of B, who is on the immediate right of C. A is next to the left of D.</p>\r\n<p>&nbsp;</p>\r\n<p>Who is sitting opposite A?</p>', 'Psychometric', '<p>G</p>', '<p>D</p>', '<p>E</p>', '<p>C</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 24, '<p><strong>Choose the correct option</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p>Eight persons A, B, C, D, E, F, G and H are sitting around a rectangular table in such a way that two persons sit on each of the four sides of the table facing the centre. Persons sitting on opposite sides are exactly opposite each other.</p>\r\n<p>D faces North and sits exactly opposite. H. E is in the immediate left of H. &nbsp;A and G sit on the same side. G is exactly opposite of B, who is on the immediate right of C. A is next to the left of D.</p>\r\n<p>&nbsp;</p>\r\n<p>Which of the following pairs of persons has both the persons sitting on the same side with the first person sitting on the right of the second person</p>', 'Psychometric', '<p>DF</p>', '<p>CB</p>', '<p>FC</p>', '<p>AG</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 25, '<p><strong>Choose the correct option</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p>Eight persons A, B, C, D, E, F, G and H are sitting around a rectangular table in such a way that two persons sit on each of the four sides of the table facing the centre. Persons sitting on opposite sides are exactly opposite each other.</p>\r\n<p>D faces North and sits exactly opposite. H. E is in the immediate left of H. &nbsp;A and G sit on the same side. G is exactly opposite of B, who is on the immediate right of C. A is next to the left of D.</p>\r\n<p>&nbsp;</p>\r\n<p>Which of the following statements is definitely true?</p>', 'Psychometric', '<p>A is facing north</p>\r\n<p>&nbsp;</p>', '<p>E is sitting opposite F</p>', '<p>F is on the left of G</p>', '<p>C is on the left of A</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 26, '<p><strong>Read the following statements and select the appropriate option from the options mentioned below</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p>The positions of the first and the fifth digits in the number 93264187 are interchanged. Similarly the positions of the second and the sixth digits are interchanged and so on. Which of the following will be the third digit from the right end after the rearrangement?</p>', 'Psychometric', '<p>8</p>', '<p>3</p>', '<p>2</p>', '<p>6</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 27, '<p><strong>Read the following statement and select the appropriate option from the options mentioned below</strong></p>\r\n<p>Five friends M, K, T, P and N are sitting around a circle facing towards the centre. K is sitting between M and P. N is to the immediate right of M. Who is to the immediate right of T?</p>', 'Psychometric', '<p>K</p>', '<p>P</p>', '<p>N</p>', '<p>data inadequate</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 28, '<p><strong>Read the following statement and select the appropriate option from the options mentioned below</strong></p>\r\n<p>What should come in place of the question mark (?) in the following series?</p>\r\n<p>&nbsp;</p>\r\n<p>AC FH KM PR ?</p>', 'Psychometric', '<p>VW</p>', '<p>VX</p>', '<p>WV</p>', '<p>TV</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 29, '<p><strong>Read the following statement and select the appropriate option from the options mentioned below</strong></p>\r\n<p>&nbsp;</p>\r\n<p>In a certain code language LABOUR is written as KBAPTS. How is CANDID written in that code language?</p>', 'Psychometric', '<p>DBOEJE</p>', '<p>DZDCJC</p>', '<p>BBMCHC</p>', '<p>BBMEHE</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 30, '<p><strong>Read the following statement and select the appropriate option from the options mentioned below</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Navin walked 20 metres towards East, took a left turn and walked 10 metres and again took a left turn and walked 20 metres. How far, he is from his starting position?</p>', 'Psychometric', '<p>10&nbsp;metres</p>', '<p>50&nbsp;metres</p>', '<p>40&nbsp;metres</p>', '<p>30 metres</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 31, '<p><strong>Read the following statement and select the appropriate option from the options mentioned below</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Pointing to Meena, Swarup says "she is the daughter of my grandfather''s only child". How is Meena related to Swarup?</p>', 'Psychometric', '<p>cousin</p>', '<p>sister</p>', '<p>aunt</p>', '<p>cannot be determined</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 32, '<p><strong>Read the following statement and select the appropriate option from the options mentioned below</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Rita introduced Ram to her husband and said, "Ram''s brother''s father is the only son of my grandfather." How is Rita related to Ram?</p>', 'Psychometric', '<p>Mother</p>', '<p>Aunt</p>', '<p>Sister</p>', '<p>Niece</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 33, '<p><strong>Read the following statement and select the appropriate option from the options mentioned below</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>&nbsp;</strong>X started from his house, waiked 15 metres in front, then 15 metres to right, and then turning to his left each time he walked 10, 20 and 25 metres. How far is X from his house now?</p>\r\n<p>&nbsp;</p>', 'Psychometric', '<p>30 m</p>', '<p>5 m</p>', '<p>15 m</p>', '<p>85 m</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 34, '<p><strong>Read the following statement and select the appropriate option from the options mentioned below</strong></p>\r\n<p>&nbsp;</p>\r\n<p>How many such pairs of letters are there in the word WONDERS each of which has as many letters between them in the English alphabet?</p>', 'Psychometric', '<p>One</p>', '<p>Two</p>', '<p>Three</p>', '<p>Four</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 35, '<p><strong>&nbsp; Read the following statement and select the appropriate option from the options mentioned below</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>&nbsp;&nbsp;</strong>Four of the following five are alike in a certain way and so form a group. Which is the one that does not belong to that group?</p>', 'Psychometric', '<p>120</p>', '<p>168</p>', '<p>226</p>', '<p>288</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 36, '<p><strong>Read the following statement and select the appropriate option from the options mentioned below</strong></p>\r\n<p>&nbsp;</p>\r\n<p>In a certain code WINDOWS is written as ZGQBRUV. How is HEALTH written in that code?</p>', 'Psychometric', '<p>FGCJVJ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n<p><strong>&nbsp;</strong></p>', '<p>EGXNQJ</p>', '<p>KCDMRI</p>', '<p>None of these</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 37, '<p><strong>Read the following character sequence carefully and then answer the questions given below </strong></p>\r\n<p><strong>&nbsp; </strong>D 6 ⋆ F 4 A # P M 9 R 5 U Q W H 7 Z 3 &copy; E B T 2 N @ C % Y</p>\r\n<p>&nbsp;</p>\r\n<p>Which of the following is the thirteenth to the right of the twenty-eighth element from the right?</p>', 'Psychometric', '<p>H</p>', '<p>W</p>', '<p>7</p>', '<p>F</p>', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 38, '<p><strong>Read the following character sequence carefully and then answer the questions given below </strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong>D 6 ⋆ F 4 A # P M 9 R 5 U Q W H 7 Z 3 &copy; E B T 2 N @ C % Y S</p>\r\n<p>&nbsp;</p>\r\n<p>If all the digits are dropped from the above arrangement, which of the following will be the seventeenth element from the left?</p>', 'Psychometric', '<p>B</p>', '<p>T</p>', '<p>E</p>', '<p>Z</p>', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 39, '<p><strong>Read the following character sequence carefully and then answer the questions given below </strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>D 6 ⋆ F 4 A # P M 9 R 5 U Q W H 7 Z 3 &copy; E B T 2 N @ C % Y S</p>\r\n<p>&nbsp;</p>\r\n<p>How many such symbols are there in the above arrangement, each of which is immediately preceded by a vowel and immediately followed by a consonant?</p>', 'Psychometric', '<p>None</p>', '<p>Two</p>', '<p>One</p>', '<p>Three</p>', 'c', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 40, '<p><strong>Read the following character sequence carefully and then answer the questions given below </strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>D 6 ⋆ F 4 A # P M 9 R 5 U Q W H 7 Z 3 &copy; E B T 2 N @ C % Y S</p>\r\n<p>&nbsp;</p>\r\n<p>What should come in place of question mark (?) in the following series based on the above arrangement?</p>\r\n<p>FAP 95Q HZ&copy; ?</p>', 'Psychometric', '<p>&nbsp;BT2 &nbsp;</p>', '<p>TN@</p>', '<p>2B@</p>', '<p>&nbsp;B2@</p>', 'd', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
(1, 'std1', 1, 'set_1', 60.00, 1, '0000-00-00 00:00:00', 0, '2016-08-02 11:40:55', '2016-08-07 13:59:28'),
(2, 'std2', 1, 'set_1', 60.00, 1, '0000-00-00 00:00:00', 0, '2016-08-02 11:40:55', '2016-08-05 15:50:40'),
(3, 'std3', 1, 'set_1', 60.00, 1, '0000-00-00 00:00:00', 0, '2016-08-02 11:40:55', '2016-08-05 21:31:12');

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
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `uid`, `type`, `photo`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$bUZbt0PnhlzWIWxa1E/w3eZbkjReNHYUrbTxkfzxgZArVm6qRWEMG', 'HFm3kGOodhgVRntgr0XxzHqPgdPdJapcCbKwPjVaHuyMYyavbGII5Ll6xMdz', '2016-08-02 11:40:55', '2016-08-04 22:41:07', '', 'admin', ''),
(2, 'student1', 'student1@test.com', '$2y$10$8lkK9kqvcZ4BSPGmR8qWyOblM6tG5cn06TuGCx8Z6UEpnuEqxQUxG', 'UkgNOOXBPoXfWNQf8XNSsChTllKGGuBS3rdzbe7weJZTLaPSMcDh5OGC6Fjn', '2016-08-02 11:40:55', '2016-08-07 13:59:29', 'std1', 'student', ''),
(3, 'student2', 'student2@test.com', '$2y$10$GyrYXiLdT61q/alFmCW6Xuyz2zmXpcUnZrAA6azuzCGPH7jiIbUXS', NULL, '2016-08-02 11:40:55', '2016-08-02 11:40:55', 'std2', 'student', ''),
(4, 'student3', 'student3@test.com', '$2y$10$v2Do62.MQy1phFZVhS0Em.NVi22iAi7HY2innvfBmvmcVyuI4b4Ri', NULL, '2016-08-02 11:40:55', '2016-08-02 11:40:55', 'std3', 'student', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
