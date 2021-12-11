-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 02:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storesss`
--
create database storesss;
use storesss;
-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, '9mm Handgun', 36000),
(2, 'Pump Action Shotgun', 40000),
(3, 'Magnum Handgun', 45000),
(4, 'PKM', 50000),
(5, 'AN-94', 13000),
(6, 'Desert Eagle', 30000),
(7, 'Sniper Rifle', 80000),
(8, '.45 ACP Handgun', 18000),
(9, 'M4', 80000),
(10, 'Custom 9mm', 10000),
(11, 'MP4', 15000),
(12, 'Magnum-Bronze', 13000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `user_id` int(11) NOT NULL,
  `products` varchar(30) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`user_id`, `products`, `total`) VALUES
(4, 'Arthur', 0),
(9, 'gun', 120000),
(42, 'OMARI', 123),
(10001, '9mm Handgun, Pump Action Shotg', 95000),
(10002, 'Magnum-Bronze, Sniper Rifle, D', 120000),
(10003, 'Name', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Venu', 'venu@xyz.com', '100001', '1649611400', 'Bangalore', 'Sai Ram road'),
(2, 'Nidhi', 'nidhi19@gmail.com', '100005', '9877878788', 'Karwar', 'Kodibaag'),
(3, 'Riya', 'riya12@gmail.com', '1000090', '8788787877', 'Mumbai', 'Andheri'),
(4, 'Haritha', 'haritha888@gmail.com', '1000082', '8788787888', 'Bangalore', 'Electronic city'),
(5, 'harsha', 'harsha45@gmail.com', '1000067', '8988988988', 'Bangalore', 'Electronic city'),
(6, 'Preetha', 'preetha222@gmail.com', '1001001', '8988989800', 'Mumbai', 'Navi Mumbai'),
(7, 'aravinda', 'ara11@gmail.com', '100100100', '8788679800', 'Chennai', 'koimedu'),
(8, 'Geeta', 'geeta11@gmail.com', '1234567', '6766767677', 'Mumbai', 'Andheri'),
(9, 'priya', 'priya44@gmail.com', '12121212', '8988989899', 'Mumbai', 'Navi Mumbai'),
(10, 'seema', 'seema11@gmail.com', '11111111', '6777676766', 'Mumbai', 'Navi Mumbai'),
(11, 'abcd', 'abcdefg@gmail.com', '9b874d36b003ea971d16c6fa947a6228', '8788787877', 'Karwar', 'wail Mehkeri'),
(12, 'seta', 'seta11@gmail.com', 'fcf272aed6ef644a2b1a5ccedb828847', '8788787877', 'Karwar', 'Karwar'),
(13, 'ee', 'ee11@gmail.com', 'e5e5d06e8e9f950414c4cd8eb18d9e7c', '8788787877', 'Karwar', 'karwar'),
(14, 'rema', 'rema11@gmail.com', 'cf36cba3a1d28a4947b6b8706df9c91b', '8788787877', 'Karwar', 'khodibaag'),
(15, 'hh', 'hh11@gmail.com', 'de43e0fe88869b15160e7e0be4190423', '8788787877', 'Karwar', 'karwar'),
(16, 'zz', 'zz11@gmail.com', '4ce4daf8c6283a054e1fe6bf2124cb63', '6766767677', 'karwar', 'karwar'),
(17, 'vina', 'vina11@gmail.com', 'fcf272aed6ef644a2b1a5ccedb828847', '8788789899', 'k', 'k'),
(18, 'reta', 'reta@gmail.com', '8b2773c0f1074f1cd5bc6f64eb19a592', '98', 'k', 'k'),
(19, 'aa', 'aa@gmail.com', 'aa21ac9ebd74ef6f04d95897ff5443d5', '8788787888', 'k', 'k'),
(20, 'tt', 'tt11@gmail.com', '3ed80171b1f4ab825f2038fc203c887c', '9899898999', 't', 't'),
(21, 'sana', 'sana22@gmail.com', '73812f2b9a460ff9b3873fbcf717b5f7', '8888888888', 'karwar', 'sai mandir road'),
(22, 'ana', 'ana22@gmail.com', '987654', '9899898988', 'ka', 'kaa'),
(23, 'corn', 'capaalse@gmail.com', 'tom123', '9874232124', 'tema', 'tema'),
(24, 'gerald', 'gerald@gmail.com', 'boadiagain', '9244143416', 'Accra', 'SSNIT FLAT Blk 2'),
(25, 'Cornelius', 'corn@gmail.com', 'tom125', '9686758444', 'tema', 'tema');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 1, 2, 'Confirmed'),
(2, 11, 2, 'Confirmed'),
(5, 12, 1, 'Confirmed'),
(6, 12, 2, 'Confirmed'),
(8, 13, 1, 'Confirmed'),
(9, 13, 2, 'Confirmed'),
(12, 14, 1, 'Added to cart'),
(13, 14, 2, 'Added to cart'),
(16, 20, 1, 'Confirmed'),
(17, 21, 1, 'Added to cart'),
(18, 21, 2, 'Added to cart'),
(20, 22, 1, 'Added to cart'),
(21, 22, 2, 'Added to cart'),
(47, 9, 1, 'Confirmed'),
(48, 9, 3, 'Confirmed'),
(50, 23, 5, 'Confirmed'),
(53, 23, 11, 'Confirmed'),
(56, 23, 8, 'Confirmed'),
(59, 23, 9, 'Confirmed'),
(63, 23, 3, 'Confirmed'),
(69, 23, 3, 'Confirmed'),
(70, 23, 3, 'Confirmed'),
(71, 23, 6, 'Confirmed'),
(73, 23, 8, 'Confirmed'),
(74, 24, 2, 'Confirmed'),
(77, 24, 2, 'Confirmed'),
(78, 24, 3, 'Confirmed'),
(80, 24, 9, 'Confirmed'),
(81, 24, 10, 'Confirmed'),
(83, 24, 2, 'Confirmed'),
(84, 24, 10, 'Confirmed'),
(86, 24, 4, 'Confirmed'),
(87, 23, 3, 'Confirmed'),
(89, 23, 6, 'Confirmed'),
(90, 23, 8, 'Confirmed'),
(93, 23, 3, 'Confirmed'),
(96, 23, 3, 'Confirmed'),
(100, 23, 3, 'Confirmed'),
(104, 23, 3, 'Confirmed'),
(105, 23, 5, 'Confirmed'),
(107, 23, 3, 'Confirmed'),
(109, 23, 8, 'Confirmed'),
(111, 23, 3, 'Confirmed'),
(115, 23, 3, 'Confirmed'),
(124, 23, 3, 'Confirmed'),
(126, 23, 4, 'Confirmed'),
(128, 23, 2, 'Confirmed'),
(129, 23, 1, 'Confirmed'),
(130, 23, 4, 'Confirmed'),
(131, 25, 2, 'Confirmed'),
(133, 25, 6, 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
