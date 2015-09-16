-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.6.26 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Versie:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Databasestructuur van testpwd wordt geschreven
DROP DATABASE IF EXISTS `testpwd`;
CREATE DATABASE IF NOT EXISTS `testpwd` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `testpwd`;

-- Structuur van  tabel testpwd.user wordt geschreven
CREATE TABLE IF NOT EXISTS `user` (
  `Userid` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(50) NOT NULL,
  PRIMARY KEY (`Userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel testpwd.user: ~2 rows (ongeveer)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`Userid`, `Password`, `Name`) VALUES
	('admin', '$2y$10$O3NkbGZrajtzZGtqYXNmauwZkZudp7oZZQqExT47J5wyiFHBB3G/q', 'Dr. Heinz Doofenshmirtz'),
	('gru', '$2y$10$O3NkbGZrajtzZGtqYXNmauymL7l.qwLohXnPQ1R0KdqLR1tYE6IKe', 'Felonious Gru');
	
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
