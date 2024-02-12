-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table blood_donation_society.donor_registrations
CREATE TABLE IF NOT EXISTS `donor_registrations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `blood_group` varchar(50) DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `is_approved` tinyint DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table blood_donation_society.donor_registrations: ~12 rows (approximately)
INSERT INTO `donor_registrations` (`id`, `name`, `date_of_birth`, `gender`, `address`, `mobile`, `blood_group`, `nid`, `is_approved`, `photo`) VALUES
	(1, 'sarowar', '2023-04-03', 'male', 'dinajpur', '363562', 'B+', '4757568767578', 1, NULL),
	(2, 'kamrul hasan', '2023-11-15', 'male', 'rajshahi', '1834923498', 'O+', '4757568767578', 1, NULL),
	(3, 'kabil hasan', '2003-05-20', 'male', 'dinajpur', '023919149139', 'AB-', '4757568767578', 1, NULL),
	(4, 'sarowar', '2001-02-16', 'male', 'dinajpur', '01908032671', 'B+', '4757568767578', 1, NULL),
	(7, 'Monayem', '2001-07-23', 'male', 'nawabgonj', '01702879593', 'O+', '4757568767578', 1, NULL),
	(8, 'rakibul', '2023-11-10', 'male', 'dinajpur', '879656556', 'O-', '4757568767578', NULL, NULL),
	(9, 'Nirob', '2004-06-09', 'male', 'nawabgonj', '01869667598', 'A+', '4757568767578', 1, NULL),
	(10, 'Fahim', '2000-06-29', 'male', 'rajshahi', '019927559425', 'A+', '4757568767578', 1, NULL),
	(11, 'ahasan kabil', '1998-02-18', 'male', 'nawabgonj', '01874839264', 'O+', '4757568767578', 1, NULL),
	(12, 'Sarowar Saykat', '2003-02-25', 'male', 'dinajpur', '01908032671', 'B+', '4757568767578', 1, 'Snapchat-1256179388.jpg'),
	(13, 'abir', '2023-12-18', 'male', 'rajshahi', '02899824365', 'B+', '4757568767578', 1, 'bongobondhu.jpg'),
	(14, 'kaosar', '2023-12-18', 'male', 'rajshahi', '787949449', 'B+', '4757568767578', 1, '2019-11-13-13-24-45-3-1080x330.jpg');

-- Dumping structure for table blood_donation_society.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `email` text,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table blood_donation_society.users: ~4 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
	(4, 'Sarowar Saykat', 'sarowarsaykat@gmail.com', '1234asdf', NULL),
	(6, 'Sarowar Saykat', 'sarowarsaykat@gmail.com', '12345asd', '2023-11-23 00:00:00'),
	(7, 'sarowar', 'sarowarsaykat@gmail.com', '1234', '2023-11-23 18:18:55'),
	(8, 'abir', 'abirhasan@gmail.com', '1234', '2023-11-24 00:21:36');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
