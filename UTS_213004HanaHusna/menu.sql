/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.27-MariaDB : Database - menu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`menu` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `menu`;

/*Table structure for table `eatdrink` */

DROP TABLE IF EXISTS `eatdrink`;

CREATE TABLE `eatdrink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(100) DEFAULT NULL,
  `fnb` varchar(100) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `harga` char(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `eatdrink` */

insert  into `eatdrink`(`id`,`gambar`,`fnb`,`ket`,`harga`) values 
(1,'breadbasket.jpg','Bread Basket','Terdiri dari berbagai jenis roti dengan bahan premium','5.50'),
(2,'honey almond granola.jpg','Honey Almond Granola with Fruits','Sereal alami dari oat panggang dengan topping madu, almond, strawberry dan blueberry','7.00'),
(3,'belgian waffle.jpg','Belgian Waffle','Waffle dengan tepung malt dan topping es krim vanilla','7.50.'),
(4,'scrambled eggs.jpg','Scrambled Eggs','Telur orak-arik, paprika merah dan bawang putih panggang dengan side dish lainnya','7.50'),
(5,'blueberry pancakes.jpg','Blueberry Pancakes','Pancake dengan sirup, butter, dan banyak buah blueberry','8.50'),
(6,'burger and fries.jpg','Burger and Fries','Perpaduan burger dan kentang goreng yang nikmat','10.50'),
(7,'croissant.jpg','Croissant','Dessert khas Prancis dengan bahan premium','7.50'),
(8,'Hawaiian Chicken pizza smoked.jpg','Hawaiian Chicken Pizza Smoked','Pizza khas Hawaii dengan toping ayam dan lainnya','14.00'),
(9,'lemon tart.jpg','Lemon Tart','Pie tart dengan rasa lemon dan toping buah beri','8.00'),
(10,'macarons.jpg','Macarons','Aneka macam rasa dan warna macaron yang berbeda','5.00'),
(11,'Ramen noodles with soft boiled egg, shrimp and snow peas.jpg','Ramen','Ramen dengan telur rebus, udang dan kacang polong','12.50'),
(12,'coffee.jpg','Coffee','Kopi Regular','2.50'),
(13,'chocolate espresso.jpg','Chocolate Espresso','Chocolate espresso dengan susu','4.50'),
(14,'iced tea.jpg','Iced Tea','Segarnya es teh manis','3.00'),
(15,'soda.jpg','Soda','Coke, Sprite, Fanta, dan lainnya','2.50');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
