-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 08, 2016 at 08:48 am
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dorys`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `by_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `by_id`, `created_at`, `updated_at`) VALUES
(1, 'Beef', 8, '2016-12-07 10:15:10', NULL),
(2, 'Chicken', 8, '2016-12-07 10:15:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `dish_id` int(10) UNSIGNED NOT NULL,
  `category` enum('Beef','Chicken','Egg','Fish','Noodles','Pork','Shrimp','Soup','Special Order','Squid','Tokwa','Toppings','Rice','Dessert','Drinks') COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `add_upd_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dish_id`, `category`, `name`, `price`, `image`, `add_upd_by`, `created_at`, `updated_at`) VALUES
(1, 'Beef', 'Beef brisket', '200.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(2, 'Beef', 'Beef with broccoli flower', '180.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(3, 'Beef', 'Beef with young corn and mushroom', '165.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(4, 'Beef', 'Braised beef', '0.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(5, 'Chicken', 'Braised chicken and mushroom', '190.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(6, 'Chicken', 'Buttered chicken', '155.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(7, 'Chicken', 'Chicken with nuts and mushroom', '200.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(8, 'Chicken', 'Chicken curry', '160.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(9, 'Chicken', 'Chicken liver and gizzard', '200.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(10, 'Chicken', 'Chicken rebosado', '150.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(11, 'Chicken', 'Chicken with black bean sauce', '200.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(12, 'Chicken', 'Chicken with broccoli', '160.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(13, 'Chicken', 'Chicken with cauliflower', '165.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(14, 'Chicken', 'Chicken with celery', '155.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(15, 'Chicken', 'Chicken with green peas', '155.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(16, 'Chicken', 'Chicken with ham', '375.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(17, 'Chicken', 'Chicken with pechay', '150.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(18, 'Chicken', 'Chicken with pineapple', '165.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(19, 'Chicken', 'Chicken with sitsaro', '170.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(20, 'Chicken', 'Chicken with taosi', '150.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(21, 'Chicken', 'Chicken with green and red pepper', '165.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(22, 'Chicken', 'Chicken with tomato sauce', '160.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(23, 'Chicken', 'Fried chicken', '375.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(24, 'Chicken', 'Soy chicken', '365.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(25, 'Chicken', 'White chicken', '375.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(26, 'Egg', 'Torta con baboy', '135.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(27, 'Egg', 'Torta con beef', '135.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(28, 'Egg', 'Torta con grejo', '135.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(29, 'Egg', 'Torta con hipon', '135.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(30, 'Fish', 'Fish fillet and tofu mushroon sauce', '210.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(31, 'Fish', 'Fish fillet with crab sauce', '190.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(32, 'Fish', 'Fish fillet with mushroom sauce', '190.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(33, 'Fish', 'Fish fillet with sweet and sour sauce', '170.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(34, 'Fish', 'Fish fillet with taosi', '170.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(35, 'Fish', 'Fish fillet with tokwa and taosi', '180.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(36, 'Fish', 'Fish head and tokwa in earthen pot', '250.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(37, 'Fish', 'Fish head in earthen pot', '225.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(38, 'Fish', 'Spicy whole lapu-lapu', '0.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(39, 'Fish', 'Steam lapu-lapu', '0.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(40, 'Fish', 'Steam lapu-lapu with black bean sauce ', '0.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(41, 'Fish', 'Steam lapu-lapu with ginger leek sauce', '0.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(42, 'Fish', 'Steam lapu-lapu with mushroom sauce', '0.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(43, 'Fish', 'Steam lapu-lapu with oyster sauce', '0.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(44, 'Fish', 'Steam lapu-lapu with salsa blanca', '0.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(45, 'Fish', 'Whole lapu-lapu with sweet and sour sauce', '0.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(46, 'Noodles', 'Chopsuey de Canton', '0.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(47, 'Noodles', 'Pancit Canton', '0.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(48, 'Pork', 'Crispy pata', '395.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(49, 'Pork', 'Lumpia Shanghai', '125.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(50, 'Pork', 'Pata tim', '160.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(51, 'Pork', 'Pork steak', '150.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(52, 'Shrimp', 'Camaron con jamon', '185.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(53, 'Shrimp', 'Camaron rebosado ', '145.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(54, 'Shrimp', 'Camaron with red sauce', '190.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(55, 'Shrimp', 'Camaron rellenado', '190.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(56, 'Shrimp', 'Fried shrimp', '155.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(57, 'Shrimp', 'Shrimp and tokwa taosi', '180.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(58, 'Shrimp', 'Shrimp curry', '175.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(59, 'Shrimp', 'Shrimp gambas', '195.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(60, 'Shrimp', 'Shrimp with ampalaya', '180.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(61, 'Shrimp', 'Shrimp with celery', '175.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(62, 'Shrimp', 'Shrimp with green peas', '175.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(63, 'Shrimp', 'Shrimp with onions', '175.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(64, 'Shrimp', 'Shrimp with sitsaro', '175.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(65, 'Shrimp', 'Sinigang hipon', '285.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(66, 'Soup', 'Corn soup - small', '100.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(67, 'Soup', 'Corn soup - medium', '115.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(68, 'Soup', 'Corn soup - large', '140.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(69, 'Soup', 'Nido soup - small', '100.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(70, 'Soup', 'Nido soup - medium', '115.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(71, 'Soup', 'Nido soup - large', '140.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(72, 'Soup', 'Pao Bao soup - small', '110.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(73, 'Soup', 'Pao Bao soup - medium', '130.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(74, 'Soup', 'Pao Bao soup - large', '145.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(75, 'Special Order', 'Cold cuts', '340.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(76, 'Special Order', 'Dory''s chopsuey', '135.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(77, 'Special Order', 'SIPO', '180.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(78, 'Special Order', 'Young corn with mushroom', '160.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(79, 'Squid', 'Crispy squid roll (calamares)', '145.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(80, 'Squid', 'Sauted squid', '150.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(81, 'Squid', 'Shredded squid with kumpao sauce', '160.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(82, 'Tokwa', 'Fried tokwa', '120.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(83, 'Toppings', 'Asado rice', '150.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(84, 'Toppings', 'Braised beef rice', '160.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(85, 'Toppings', 'Dory''s rice', '145.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(86, 'Toppings', 'Soy chicken rice', '150.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(87, 'Rice', 'Fried rice', '0.00', 'friedchicken.jpg', 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_11_20_225215_create_set_menus_table', 1),
('2016_11_20_232512_create_dishes_table', 1),
('2016_11_20_234610_create_set_items', 1),
('2016_12_07_224712_create_categories_table', 2),
('2016_12_08_011702_create_terms_and_conditions_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('millen.c.wong@gmail.com', 'a92a100698375374f9f55d43a40fc381c67ff266d23d87ae822a9402c9aac144', '2016-12-07 08:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `set_items`
--

CREATE TABLE `set_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `set_menu_id` int(10) UNSIGNED NOT NULL,
  `set_item_id` int(10) UNSIGNED NOT NULL,
  `set_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `set_menus`
--

CREATE TABLE `set_menus` (
  `set_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `duration` int(11) NOT NULL,
  `by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `set_menus`
--

INSERT INTO `set_menus` (`set_id`, `name`, `price`, `duration`, `by`, `created_at`, `updated_at`) VALUES
(1, 'Set 2700', '2700.00', 2, 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(2, 'Set 3100', '3100.00', 2, 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(3, 'Set 3150', '3150.00', 2, 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(4, 'Set 3500', '3500.00', 2, 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(5, 'Set 4400', '4400.00', 2, 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(6, 'Set 4900', '4900.00', 2, 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(7, 'Set 5900', '5900.00', 2, 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(8, 'Set A', '3250.00', 4, 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(9, 'Set B', '4150.00', 4, 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(10, 'Set C', '4600.00', 4, 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20'),
(11, 'Set D', '4950.00', 4, 'millen', '2016-12-04 15:28:20', '2016-12-04 15:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(10) UNSIGNED NOT NULL,
  `tc_by` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dish_id`),
  ADD UNIQUE KEY `dishes_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `set_items`
--
ALTER TABLE `set_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_items_set_menu_id_foreign` (`set_menu_id`),
  ADD KEY `set_items_set_item_id_foreign` (`set_item_id`);

--
-- Indexes for table `set_menus`
--
ALTER TABLE `set_menus`
  ADD PRIMARY KEY (`set_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_login_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `dish_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `set_items`
--
ALTER TABLE `set_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `set_menus`
--
ALTER TABLE `set_menus`
  MODIFY `set_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `set_items`
--
ALTER TABLE `set_items`
  ADD CONSTRAINT `set_items_set_item_id_foreign` FOREIGN KEY (`set_item_id`) REFERENCES `dishes` (`dish_id`),
  ADD CONSTRAINT `set_items_set_menu_id_foreign` FOREIGN KEY (`set_menu_id`) REFERENCES `set_menus` (`set_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
