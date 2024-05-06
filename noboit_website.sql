-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2024 at 07:52 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noboit_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(150) DEFAULT NULL,
  `product_slug` varchar(250) DEFAULT NULL,
  `product_desription` varchar(1000) NOT NULL,
  `product_price` int NOT NULL DEFAULT '0',
  `product_image` varchar(200) NOT NULL,
  `active` varchar(1) NOT NULL DEFAULT 'Y',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `category_id` int NOT NULL,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `product_name` (`product_name`),
  UNIQUE KEY `product_slug` (`product_slug`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_slug`, `product_desription`, `product_price`, `product_image`, `active`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'Website Development', 'website-development', 'Website Development', 20000, 'web development.jpg', 'Y', '2024-02-28 01:11:00', NULL, 1),
(2, 'Prescription Software', 'prescription-software', 'Prescription Software', 1, 'web development.jpg', 'Y', '2024-02-28 13:52:56', NULL, 1),
(3, 'Operation Software', 'operation-software', 'Operation Software', 1, 'web development.jpg', 'Y', '2024-02-28 13:52:56', NULL, 1),
(4, '2 GB Hosting', '2-gb-hosting', '2 GB Hosting details', 100000, '1715020702_6.jpeg', 'Y', '2024-05-07 00:38:22', NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `product_category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(250) NOT NULL DEFAULT '',
  `category_description` varchar(1000) NOT NULL,
  `category_image` varchar(255) DEFAULT NULL,
  `active` varchar(1) NOT NULL DEFAULT 'Y',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`product_category_id`),
  UNIQUE KEY `category_name` (`category_name`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_category_id`, `category_name`, `category_description`, `category_image`, `active`, `created_at`, `updated_at`) VALUES
(1, 'website', 'website', 'website.jpg', 'Y', '2024-02-27 23:33:49', NULL),
(2, 'mobile', 'mobile', 'mobile application.jpg', 'Y', '2024-02-27 23:35:26', NULL),
(3, 'Software', 'Software', 'Software.jpg', 'Y', '2024-02-27 23:37:31', NULL),
(4, 'Graphics Design', 'Graphics Design', 'graphics design.jpg', 'Y', '2024-02-27 23:40:38', NULL),
(5, 'Domain', 'Domain', 'Domain.jpg', 'Y', '2024-02-27 23:43:07', NULL),
(6, 'Hosting', 'Hosting', 'Hosting.jpg', 'Y', '2024-02-27 23:43:29', NULL),
(7, 'Trending', 'Trending', '1714801379_7.jpeg', 'Y', '2024-05-02 01:34:06', NULL),
(8, 'Domain Hosting', 'Domain Hosting', '1714801204_8.png', 'Y', '2024-05-02 01:40:09', NULL),
(9, 'CC TV', 'CC TV description', '1714593674_10.jpeg', 'Y', '2024-05-02 02:01:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(250) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `active` varchar(1) NOT NULL DEFAULT 'Y',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` varchar(250) DEFAULT NULL,
  `updated_by` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `active`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'robel', '$2y$10$1yjQ.n.iZ6bgt866ii8kA.REejY7mOFCm3eGxUot645j3UfotLoLi', 'Y', '2024-05-01 11:37:25', NULL, 'system', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
