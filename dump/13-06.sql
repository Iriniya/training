-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.53 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных menu
CREATE DATABASE IF NOT EXISTS `menu` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `menu`;

-- Дамп структуры для таблица menu.meal
CREATE TABLE IF NOT EXISTS `meal` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `food` varchar(30) NOT NULL DEFAULT '0',
  `weight` varchar(50) NOT NULL DEFAULT '0',
  `price` varchar(50) NOT NULL DEFAULT '0',
  `sorter_id` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы menu.meal: ~16 rows (приблизительно)
/*!40000 ALTER TABLE `meal` DISABLE KEYS */;
INSERT INTO `meal` (`id`, `food`, `weight`, `price`, `sorter_id`) VALUES
	(19, 'Пюре картофельное', '100', '50', 4),
	(20, 'Котлета говяжья', '70', '300', 3),
	(24, 'Компот из изюма', '200', '15', 5),
	(26, 'каша рисовая', '109', '107', 1),
	(27, 'каша манная', '200', '50', 1),
	(28, 'кофе', '200', '112', 5),
	(29, 'плов', '150', '200', 3),
	(30, 'салат "Цезарь"', '100', '87', 6),
	(31, 'Рыба "Лакомка"', '200', '350', 3),
	(32, 'Телячья отбивная', '200', '400', 3),
	(33, 'Свиная отбивная', '200', '320', 3),
	(34, 'Картофель фри', '200', '90', 4),
	(35, 'Баклажаны Фаршированные', '150', '145', 6),
	(36, 'Роллы в ассотрименте', '150', '500', 6),
	(37, 'Суп "Харчо"', '200', '156', 2),
	(38, 'Суп "Карпачо"', '200', '120', 2);
/*!40000 ALTER TABLE `meal` ENABLE KEYS */;

-- Дамп структуры для таблица menu.sorter_eat
CREATE TABLE IF NOT EXISTS `sorter_eat` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы menu.sorter_eat: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `sorter_eat` DISABLE KEYS */;
INSERT INTO `sorter_eat` (`id`, `title`) VALUES
	(1, 'завтрак'),
	(2, 'первое'),
	(3, 'горячее'),
	(4, 'гарнир'),
	(5, 'напитки'),
	(6, 'холодные закуски');
/*!40000 ALTER TABLE `sorter_eat` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
