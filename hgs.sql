-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2018 at 06:47 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_product` (`product_id`),
  KEY `cart_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`) VALUES
(1, 1, 1);

--
-- Triggers `cart`
--
DROP TRIGGER IF EXISTS `delete_logger`;
DELIMITER $$
CREATE TRIGGER `delete_logger` BEFORE DELETE ON `cart` FOR EACH ROW INSERT INTO cart_log
VALUES (id,old.id,old.user_id,old.product_id,"removed")
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `insert_logger`;
DELIMITER $$
CREATE TRIGGER `insert_logger` AFTER INSERT ON `cart` FOR EACH ROW INSERT INTO cart_log
VALUES (id,new.id,new.user_id,new.product_id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cart_log`
--

DROP TABLE IF EXISTS `cart_log`;
CREATE TABLE IF NOT EXISTS `cart_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cart_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `status` varchar(12) NOT NULL DEFAULT 'inserted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_log`
--

INSERT INTO `cart_log` (`id`, `cart_id`, `user_id`, `product_id`, `status`) VALUES
(1, 6, 1, 1, 'inserted'),
(2, 13, 2, 1, 'inserted'),
(3, 1, 1, 1, 'inserted');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

DROP TABLE IF EXISTS `mail`;
CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) NOT NULL,
  `mail` varchar(70) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `name`, `mail`, `message`) VALUES
(1, 'amr', 'adasd@asdasd.com', 'asdasdmnadf,aknasdd \r\n fkansasdflkja skldjaslfk asda'),
(2, 'kareem', 'asdkasld@asdas,asdf', 'asfasdfkladjflkj hi kareeeem ');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `price` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_order` (`user_id`),
  KEY `product_order` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `product_id`, `price`) VALUES
(1, 1, 1, 123),
(2, 2, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `price` int(6) NOT NULL,
  `serial` varchar(30) NOT NULL,
  `image` blob,
  `url_img` text,
  `out_of_stock` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `genre`, `price`, `serial`, `image`, `url_img`, `out_of_stock`) VALUES
(1, 'test1', '', 123, 'aadasd', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(12) NOT NULL,
  `lname` varchar(12) NOT NULL,
  `mail` varchar(70) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `mail`, `password`, `level`) VALUES
(1, 'amr', 'morsy', 'amr150908@bue.edu.eg', 'a1234567', 1),
(2, 'ds', 'sdf', 'msgsdfg', 'sdfsdf', 1),
(3, 'fd', 'fd', 'ddffd', 'dfddf', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cart_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `product_order` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_order` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
