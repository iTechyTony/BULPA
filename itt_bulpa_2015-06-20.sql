# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 192.168.0.2 (MySQL 5.1.73)
# Database: itt_bulpa
# Generation Time: 2015-06-19 23:01:53 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table administrator
# ------------------------------------------------------------

DROP TABLE IF EXISTS `administrator`;

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `administrator` WRITE;
/*!40000 ALTER TABLE `administrator` DISABLE KEYS */;

INSERT INTO `administrator` (`id`, `username`, `password`)
VALUES
	(1,'admin','21232f297a57a5a743894a0e4a801fc3');

/*!40000 ALTER TABLE `administrator` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table customer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `CustomerID` int(8) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `LastName` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `Email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Password` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Gender` text COLLATE latin1_general_ci,
  `Age` int(3) DEFAULT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;

INSERT INTO `customer` (`CustomerID`, `FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Age`)
VALUES
	(1,'Jenny','Brown','j.brown@leedsmet.ac.uk','brown01','F',23),
	(2,'Ray','Green','r.green@leedsmet.ac.uk','green01','M',19),
	(3,'Arjun','Patel','a.patel@leedsmet.ac.uk','patel01','M',20),
	(4,'Steve','Rich','s.rich@leedsmet.ac.uk','rich01','M',27),
	(5,'Amy','Park','a.park@leedsmet.ac.uk','park01','F',20),
	(6,'Rehana','Hashmi','r.hashmi@leedsmet.ac.uk','hashmi01','F',22);

/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table product
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `price` float NOT NULL,
  `description` varchar(500) NOT NULL,
  `imagename` varchar(25) NOT NULL,
  `category` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `shipping` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;

INSERT INTO `product` (`id`, `name`, `price`, `description`, `imagename`, `category`, `quantity`, `shipping`)
VALUES
	(1,'dell inspiron 1545',119.99,'2ghz quad core 2gb 250gb 15.6 screen','inspiron_1545.jpg','laptops',4,8.99),
	(2,'compaq presario cq61',149.99,'2.2ghz quad core','presariocq61.jpg','laptops',4,4.99),
	(3,'hp dv5000',179.99,'2.2ghz ','dv5000.jpg','laptops',3,6.99),
	(4,'apple iphone 4s',199.99,'','iphone4s.jpg','phones',12,4.99),
	(6,'samsung galaxy s2',144.99,'','galaxys2.jpg','phones',2,3.99),
	(7,'htc one',249.99,'','htcone.jpg','phones',2,3.99),
	(8,'4gb ram kingston',14.99,'ddr3 laptop','kingston.jpg','components',10,1.99),
	(9,'4gb ram cosair',19.99,'ddr3 desktop','cosair.jpg','components',12,1.99),
	(10,'250gb  western digital hdd',10.99,'3.5inch hdd','westerndigital.jpg','components',3,2.99),
	(11,'500gb samsung hdd',24.99,'3.5 sata hdd','samsung.jpg','components',2,3.99),
	(12,'Apple MacBook Pro',449.99,'15.4-inch glossy widescreen display\n2.53 GHz intel Core 2 Duo\n4 GB  Memory  \n8x Slot-loading SuperDrive (DVD±R DL/DVD±RW/CD-RW)\n1,000 GB Hard Drive \nNvidia GeForce 9400M and Nvidia GeForce 9600M GT\n2 USB\n\n','macbookpro.jpg','laptops',2,15.99),
	(13,'Dell Latitude',109.99,'Memory 1 GB RAM\nHard Drive 60GB\nProcessor 1.4 \nOptical Drive DVD\nAc Yes\nWireless Yes\nBluetooth No\nOperating System Windows\nScreen\n','dell_latitude.jpg','laptops',4,9.99),
	(14,'ADVENT Monza T200',199.99,'Processor: Intel® Celeron® 847 processor (1.10 GHz, 1 MB cache)Operating System: Windows 8RAM: 8 GBGraphics card: Intel Mobile NM70 Chipset- Up to 1.7GB (System Memory)Screen: 15.6\'\' LED (Screen resolution 1366 x 768 )Hard drive: 750 GB SATA 2Optical disk drive: DVD-RW - CD and DVDMemory card reader: 1 x SD/MMC/MS/MS Pro/xDUSB: ','advent.jpg','laptops',1,14.99),
	(15,'Acer C710 Chromebook',119.99,'Intel Celeron\r\nMPN:	\r\nNU.SH7EK.001\r\nProcessor Speed:	\r\n1.1 GHz\r\nScreen Size:	\r\n11.6\"\r\nHard Drive Capacity:	\r\n320 GB\r\nMemory:	\r\n2 GB\r\nOperating System:	\r\nChrome OS','acerc710.jpg','laptops',1,5.99),
	(16,'Toshiba  C850D-11K',199.99,'The Toshiba Satellite C850 series with Intel® processors offer great value and great quality for everyday computing and features a 39.6cm (15.6”) ','toshibae1.jpg','laptops',1,4.99),
	(17,'HP Elitebook 8440p',249.99,'Core i5 2.53 GHz 4GB RAM 320GB Windows 7 Pro 14\" Laptop','hpelitebook.jpg','laptops',1,14.99),
	(18,'Medion Akoya Notebook',99.99,'15.6\" Intel Dual Core 2GB RAM 320GB HDD Bluetooth E6227','medionakoya.jpg','laptops',3,9.99),
	(19,'CUBOT C9+ Unlocked',49.99,'4.0 Inch capacitive multi touch screen\r\n4.2.2 Android OS\r\nMTK6572 dual core 1.2 GHz\r\nDual SIM card dual standby\r\n256M RAM + 512M ROM\r\n4 Colors-black/red/blue/green \r\nFree & fast Shipping\r\nFree 8 GB TF card + Two Batteries','cubotc9.jpg','phones',1,3.99),
	(20,'Emoto 5.0\" Dual Core Android',65.99,'Dual Core Android 4.1 Mobile Phone Smartphone Unlocked Touch White','emoto.jpg','phones',2,2.99),
	(21,'BlackBerry Curve 8520',39.99,'Black Unlocked Smartphone Mobile Phone ','blackberry.jpg','phones',2,3.99),
	(22,'Samsung Galaxy S4 ',240,'16GB Red/Pink GSM Smart Phone (Unlocked - Global Ready)','s4.jpg','phones',1,4.99),
	(23,' Nokia 6300',19.99,'Unlocked SIM-Free Silver Nokia 6300 Mobile Phone Handset with Battery','nokia6300.jpg','phones',1,1.99),
	(24,'Blackberry 8900 Curve',30.99,'Colour	Black\r\nNetwork Technology	GSM/GPRS/EDGE\r\nBand	GSM 850/900/1800/1900 (Quadband)\r\nStyle	Bar\r\nOperating System	BlackBerry OS\r\nCamera	3.2 Megapixel\r\nMemory\r\nSupported Flash Memory Cards	Micro SD','blackberry8900.jpg','phones',2,2.99),
	(25,'HTC Salsa Purple',44.99,'Sim Free Unlocked Smartphone Mobile Phone','htcsalsa.jpg','phones',4,1.99),
	(26,'4GB(2x2GB) DDR2-800 PC2-6400',21.99,'Non-ECC Unbuffered Desktop PC Memory(RAM 240-pin','DDR2-800.jpg','components',2,3.99),
	(27,'2GB DDR2 PC2-6400S',14.99,'RAM LAPTOP MEMORY','PC2-6400S.jpg','components',3,1.99),
	(28,'500GB HITACHI ',19.99,'HARD DRIVE 500GB HITACHI HTS547550A9E384 5K750-500 SATA II 2.5\" windows-8','hdd1.jpg','components',2,4.99),
	(29,'250GB 2.5\" Sata Harddrive',21.99,'250GB 2.5\" Sata Harddrive - laptop HDD 250 GB Hard drive disk SATA','hdd2.jpg','components',2,1.99),
	(30,'New Seagate Momentus',39.99,'New Seagate Momentus 1TB Hard Drive 2.5 Internal 1000GB Laptop','seagate.jpg','components',2,1.99),
	(31,'2TB New Western Digital Green',60.99,'New Western Digital Green 2TB Hard Drive 3.5\" SATA 6Gb/s WD20EZRX 64MB','2tb.jpg','components',1,3.99);

/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `shipping` float NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `name`, `description`, `price`, `shipping`, `quantity`)
VALUES
	(1,'book','This is a book',3.99,1.99,10),
	(2,'fish','This is a plaice holder',4.99,0.99,3),
	(456,'cod','A tasty fish',4.99,0.99,34);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table testproducts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `testproducts`;

CREATE TABLE `testproducts` (
  `ProductID` int(8) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(50) NOT NULL,
  `ProductPrice` float NOT NULL,
  `ImageName` varchar(15) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `testproducts` WRITE;
/*!40000 ALTER TABLE `testproducts` DISABLE KEYS */;

INSERT INTO `testproducts` (`ProductID`, `ProductName`, `ProductPrice`, `ImageName`)
VALUES
	(1,'Cap',3.99,'caps.jpg'),
	(2,'Mugs',2.99,'mugs.jpg'),
	(3,'T-Shirt',10.99,'t-shirt.jpg'),
	(4,'Book',6.99,'book.jpg'),
	(5,'Calendar',11.99,'calendar.jpg');

/*!40000 ALTER TABLE `testproducts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userID` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `HouseNumber` float NOT NULL,
  `StreetName` varchar(20) NOT NULL,
  `MobileNumber` varchar(12) NOT NULL,
  `Postcode` varchar(9) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`userID`, `firstname`, `lastname`, `password`, `email`, `HouseNumber`, `StreetName`, `MobileNumber`, `Postcode`)
VALUES
	(1,'Tony','Ampomah','d420ce7e0c1ccb481c032e90df31cf95','antonydat@live.co.uk',142,'Fifth Avenue','079598400','YO310UZ'),
	(2,'emily','smith','5f4dcc3b5aa765d61d8327deb882cf99','emily@yahoo.com',50,'Byland Avenue','0787784545','LS119UZ'),
	(6,'Joao','Pires','aa6024fa27f44b74cf11f08ffaeb1d56','joao-101@hotmail.com',42,'St Stephens Road','0798565694','LS118QZ');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
