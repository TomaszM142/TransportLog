-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 12:43 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `delivery_address` text NOT NULL,
  `collPoint` text NOT NULL,
  `picked` text NOT NULL,
  `despatched` text NOT NULL,
  `collDate` text NOT NULL,
  `delDate` text NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `delivery_address`, `collPoint`, `picked`, `despatched`, `collDate`, `delDate`, `comments`) VALUES
(47, 'Argos', 'Bridgewater', 'WH1', 'YES', 'YES', '26/11/2019', '02/12/2019', '26 plts'),
(48, 'Argos ', 'Barton', 'WH2', 'YES', 'NO', '21/11/2019', '27/11/2019', '35 plts'),
(49, 'B&M', 'Swindon', 'WH1', 'NO', 'NO', '19/11/2019', '26/11/2019', '18 plts'),
(50, 'Tesco', 'London', 'WH2', 'YES', 'NO', '22/11/2019', '29/11/2019', '26 plts'),
(51, 'Aldi', 'NN21 6NX', 'WH1', 'NO', 'NO', '19/11/2019', '26/11/2019', '20 plts'),
(52, 'Product Placement', 'France 15990', 'WH2', 'NO', 'NO', '24/11/2019', '30/11/2019', '66 plts'),
(53, 'B&M', 'Manchester', 'WH2', 'YES', 'NO', '26/11/2019', '02/12/2019', '22 plts'),
(54, 'Tesco', 'York', 'WH1', 'NO', 'NO', '26/11/2019', '03/12/2019', '26 plts');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
