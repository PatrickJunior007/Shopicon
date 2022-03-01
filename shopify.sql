-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 01, 2022 at 03:35 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopify`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_ads`
--

DROP TABLE IF EXISTS `product_ads`;
CREATE TABLE IF NOT EXISTS `product_ads` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `wa_status` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `description` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `premium_nature` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_ads`
--

INSERT INTO `product_ads` (`id`, `title`, `number`, `wa_status`, `category`, `location`, `images`, `price`, `description`, `user_email`, `user_name`, `date`, `premium_nature`) VALUES
(8, 'Tekken', '237677313963', '1', 'video_games', 'Buea', 'IMG-61beee795e8ff0.90220164.jpg', 50000, 'bon prix', 'patrick@gmail.com', 'Patrick', '2023-12-15 11:31:34', 1),
(11, 'Ps4 Spiderman', '237677313963', '1', 'video_games', 'Buea', 'IMG-61cafde7577a94.27300221.png', 52000, 'bon prix', 'patrick@gmail.com', 'Patrick', '2020-12-15 11:32:55', 1),
(29, 'assassin valhalla', '670157564', '1', 'video_games', 'Douala', 'IMG-61c06bae4a5de0.27472124.jpg', 35000, 'bon jeux playstation', 'somto@gmail.com', 'Somto', '2021-12-20 12:16:19', 0),
(36, 'nfs heat', '5468465166', '1', 'vehicles', 'Yaounde', 'IMG-61d251e53cbf34.12194633.jpg', 562000, 'nkjnnjk kjn  jnln ', 'landry@gmail.com', 'landry', '2022-01-03 02:31:17', 0),
(35, 'ps5', '670157564', '1', 'video_games', 'Yaounde', 'IMG-61d24518c8f185.89812091.jpg', 20000, 'xdjnkjd', 'landry@gmail.com', 'landry', '2022-01-03 01:36:40', 0),
(25, 'Forza Horizon', '677313736', '1', 'phone_tablet', 'Buea', 'IMG-61be4377353260.66178184.jpg', 30000, 'good', 'somto@gmail.com', 'Somto', '2021-12-18 21:24:23', 0),
(28, 'Mario Kart 8', '6773136963', '1', 'phone_tablet', 'Douala', 'IMG-61c065363461c0.37950423.jpg', 23000, 'cest le bon prix', 'junior@gmail.com', 'Junior', '2021-12-20 11:48:09', 0),
(32, 'marvel avenger', '237677313963', '1', 'video_games', 'Yaounde', 'IMG-61c4cda03c76f6.35024741.jpg', 25000, 'bon jeux', 'patrickjunior@gmail.com', 'patrick1', '2021-12-23 20:10:29', 0),
(33, 'lambogihni v5', '237677313963', '1', 'vehicles', 'Douala', 'IMG-61c712fd798074.11023476.jpg', 600000, 'voiture neuf avec moteur', 'patrick@gmail.com', 'Patrick', '2021-12-25 13:47:57', 0),
(34, 'Nike Air max', '237670157564', '1', 'men_fashion', 'Douala', 'IMG-61cd8e0887a0e5.47570306.jpg', 10000, 'new shoe a good price\r\nContact me for more details', 'patrick@gmail.com', 'Patrick', '2021-12-30 11:46:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `number` varchar(200) NOT NULL,
  `wa_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number` (`number`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `number`, `wa_status`, `email`, `password`) VALUES
(3, 'Patrick', '456123789', '1', 'patrick@gmail.com', '$2y$10$IDOQhc9OBYmby4dNYwsBreIeS2J7YwrQTrx6ftc3tYYGj/q6q7y/y'),
(4, 'pat', '123456789', '', 'pat@gmail.com', '$2y$10$uDZrOpgs8omfLaSKqlrSze1jkVW3SlBPQcr.sRLyzcndTa/zENDUO'),
(5, 'girl', '123456', '', 'ogambapatrickjunior@gmail.com', '$2y$10$FZhbJiTyYA65BNKqsThx2Op3cL5cwozv9.nIiBuZw/0lh3.wnrfga'),
(7, 'Somto', '68394882', '1', 'somto@gmail.com', '$2y$10$tgfTP/y4Fjk.LuisKuVuiOsEXUId3f6LMP.wc6cvRioAGjNvT/IbW'),
(8, 'Junior', '677313963', '1', 'junior@gmail.com', '$2y$10$R1ZGtLv9ckKI3MfuB1naRecX/bCBso8Mo5CLSN29aw2Xp/EvUV6RW'),
(9, 'Jordan', '69325874', '1', 'jordan@gmail.com', '$2y$10$Ysk/8cY3Zu959e8saH0dheFBK2hMzyNdVFz3XU0Q17.Sj/fnU0t0W'),
(12, 'patrick1', '237677313963', '1', 'patrickjunior@gmail.com', '$2y$10$ydnv6MKRAsLz949UCHC8SuX4a5F3Me5K215J6i2cKcW81O37FrfA2'),
(13, 'Jessica', '237670789537', '1', 'jessica@gmail.com', '$2y$10$8xtqlFbsh.GC1gpcw33opu2MmjD0HwI7OIdzgrHCGKofTIEax9I6.'),
(14, 'landry', '671369682', '1', 'landry@gmail.com', '$2y$10$SdjttVELSS1NAm5g3xGMLuLfWGARAmlB1S7Nm2uDOqXyf9f5jRIcC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
