-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2015 at 08:16 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `app_acc`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_doc`
--

CREATE TABLE IF NOT EXISTS `bank_doc` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `bank_name` int(10) NOT NULL,
  `type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_on_card` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_on_card` varchar(50) CHARACTER SET swe7 NOT NULL,
  `cvv` varchar(10) CHARACTER SET ucs2 COLLATE ucs2_swedish_ci NOT NULL,
  `pin` int(10) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `bank_doc`
--

INSERT INTO `bank_doc` (`id`, `user_id`, `bank_name`, `type`, `name_on_card`, `num_on_card`, `cvv`, `pin`, `created_at`, `updated_at`) VALUES
(0, 2, 4, 'Debit', 'AJIT HOGADE', '4890210282139450', '094', 5884, '2015-03-18 13:31:31', '2015-03-18 13:31:31'),
(0, 2, 5, 'Debit', 'AJIT HOGADE', '4591500211345695', '616', 8627, '2015-03-18 13:33:10', '2015-03-18 13:33:10'),
(0, 2, 1, 'Debit', 'AJITH', '4375510394171018', '491', 8584, '2015-03-18 13:34:26', '2015-03-18 13:34:26'),
(0, 2, 6, 'Debit', 'AJIT V HOGADE', '4214580170058122', '263', 0, '2015-03-18 13:39:21', '2015-03-18 13:39:21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
