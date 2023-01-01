-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 05:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baristaology`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`, `email`) VALUES
(1, 'admin', 'pass', 'admin@domain.com'),
(2, 'username', 'password', 'admin1@domain.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `name`, `description`) VALUES
(1, 'Drip coffee makers', 'coffee made by letting boiling water dri'),
(3, 'Espresso machine', 'An espresso machine brews coffee by forcing pressurized water near boiling point through a \"puck\" of ground coffee and a filter in order to produce a thick, concentrated coffee called espresso.'),
(4, 'Cups', 'A coffee cup is a container that coffee and espresso-based drinks are served. '),
(5, 'Thermos Cup', 'A thermos is a bottle with a double-walled container inside of it.'),
(6, 'drip grinders', ''),
(7, 'HarioGlassJapan', ''),
(8, 'Baratza', ''),
(9, 'Coffee machine', ''),
(10, 'Cups & Thermos', ''),
(11, 'Grinders', '');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ID` int(10) NOT NULL,
  `name` varchar(45) NOT NULL,
  `logo` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `description` text NOT NULL,
  `categoryID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ID`, `name`, `logo`, `price`, `description`, `categoryID`) VALUES
(1, 'Braun drip coffee ma', 'OHMIC', 250, '15 small cups - 10 large cups\r\naxial filter\r\njug of glass\r\nAuto-stop at minute 40\r\n1000 watts', 1),
(2, 'Braun Multiserve Black Coffee Maker', 'OHMIC', 1000, '24-hour timing system\r\nAuto-stop at minute 40\r\nAcoustic alert upon completion\r\nLarge glass jug 10 cups - base / special cup rack', 1),
(3, 'Bloomy coffee maker', 'OHMIC', 850, 'Follow the standards of specialty coffee\r\nMakes 8 cups\r\nHigh-quality water heating element\r\nAuto shut-off feature', 1),
(4, 'Lilit Bianca V2 Espresso Machine', 'Lelit', 15000, 'Programmable pressure iron\r\nManual water flow control\r\nDifferential integrative controller\r\nInlaid with walnut wood\r\nStainless steel double boilers', 3),
(5, 'Rocket Espresso R Cinquantoto Coffee Machine', 'Lelit', 11000, 'A double-boiler espresso machine\r\nCommercial grade circulating pump\r\nThe communication device is attached to the side\r\nThe outer body is made of stainless steel\r\nDual temperature-controlled boilers operate independently', 3),
(6, 'Barista Express Sage Coffee Maker SES875', 'Lelit', 2300, 'PID temperature control\r\nEquipped with a grinder with powerful blades\r\nMake high-quality espresso\r\nThermal heating system', 3),
(7, 'Flat white cups', 'Fellow', 120, 'cup capacity 150\r\nglass cup', 4),
(8, 'Flat white cups', 'Rocket', 120, 'cup capacity 150\r\nglass cup', 4),
(9, 'Cups', 'Fellow', 100, 'cup capacity 200\r\nglass cup', 4),
(10, 'Fressko Camino Cool White', 'Fressko', 120, 'Vacuum wall to retain heat\r\nSpill-proof\r\nScratch Resistant Body\r\nClick on the lid to lock\r\n', 5),
(11, 'Fressko Camino Cool black', 'Fressko', 120, 'Vacuum wall to retain heat\r\nSpill-proof\r\nScratch Resistant Body\r\nClick on the lid to lock', 5),
(12, 'Rivers Dimita Thermal Mug', 'Rivers', 80, 'Lightweight\r\nEquipped with replaceable covers\r\ndouble wall\r\nfall resistant\r\n\r\n', 5),
(13, 'Baratza Anchor Coffee Grinder with Conical Bl', 'Baratza', 280, 'A specially designed conical blade provides finer grinding options.\r\nGrinding options suitable for coffee preparation by Chemex and Aeropress.\r\nIt is distinguished by 40 different grinding degrees, ranging from a fine grind to a coarse grind suitable for the French press.', 6),
(14, 'Hario Coffee Mill Mini Slim Pro Plus Hand Gri', 'Hario', 90, 'Transparent cover with silicone grip\r\nHolds up to 24g (2 cups)\r\nThe ceramic grinder is easily adjusted for proper grinding coarseness\r\nCompact, lightweight, and slim design for easy storage and travel', 6),
(15, 'Brewista Kettle Second Edition 1.2 Liter Blac', 'Brewista', 0, 'Built-in countdown/countdown timer\r\nGooseneck spout for precise pouring control\r\nPrecise digital temperature selection in 1-degree increments, common temperature presets\r\nThe current and desired temperature is displayed simultaneously on the LCD screen\r\n\r\n', 7),
(16, 'Drip On Drip Coffee Pitcher 600ml (White)', 'Brewista', 0, 'The stylish heat-resistant wooden handle allows you to easily hold the jug and pour hot water safely\r\nThere are ventilation holes on the lid to prevent lid burn.', 7),
(17, 'Hario V60 Coffee Starter Kit - Brown', 'Hario', 0, 'All the essentials you need to easily prepare a professional cup of coffee.\r\nKit includes Hario V60 Plastic Coffee Dripper, V60 Glass Carafe, 02 Size V60 Paper …', 7),
(18, 'Prazza City 270 - Coffee Grinder', 'Baratza', 1800, 'Coffee pot with a capacity of 230 grams\r\nThe adjustable coffee filter holder\r\n40mm diameter steel conical grinding blade\r\n3 programmable settings\r\n\r\n\r\n', 8),
(19, 'Eureka Mignon Selenzo - Espresso Grinder', 'Baratza', 1800, 'Metal grinding blades with a diameter of 50 mm\r\nSmooth grinding degree adjustment\r\nCoffee pot capacity: 300g\r\nanti-caking system\r\n', 8),
(20, 'Eureka Atom Grinder', 'Eureka', 1800, 'Flat steel blade 60mm dial size\r\nNon-graded grinding adjustment\r\nvery quiet\r\nProgrammable dosing feature', 8);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ID` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `body` text NOT NULL,
  `rating` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ID`, `item_id`, `name`, `body`, `rating`) VALUES
(1, 8, 'customer1', 'I like the design of the cup.', '4.50'),
(2, 6, 'customer2', 'we used it in the office and it\'s really great.', '5.00'),
(3, 12, 'customer3', 'I\'m glad I brought this mug on my journey to Mount Everest since it keeps my coffee warm.', '5.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_0` (`categoryID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `rating` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `ID_0` FOREIGN KEY (`categoryID`) REFERENCES `category` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `rating` FOREIGN KEY (`item_id`) REFERENCES `item` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
