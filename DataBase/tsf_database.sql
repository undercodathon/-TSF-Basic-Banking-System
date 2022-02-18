-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 07:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_balance`) VALUES
(1, 'Khaled', 'Khaled@gmail.com', 97761),
(2, 'Hassan', 'Hassan@gmail.com', 62373),
(3, 'Abdallah', 'Abdallah@gmail.com', 101852),
(4, 'Anna', 'Anna@gmail.com', 114347),
(5, 'Ibrahim', 'Ibrahim@gmail.com', 146249),
(6, 'Hana', 'Hana@gmail.com', 104787),
(7, 'Yassin', 'Yassin@gmail.com', 100309),
(9, 'Fahd', 'Fahd@gmail.com', 100342),
(10, 'Hossam', 'Hossam@gmail.com', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`sender`, `receiver`, `amount`) VALUES
('Hassan', 'Ibrahim', 213),
('Ibrahim', 'Hassan', 6654),
('Khaled', 'Hana', 2423),
('Hassan', 'Yassin', 3432),
('Abdallah', '', 3212),
('Hassan', 'Anna', 5463),
('', 'Ibrahim', 31232),
('Yassin', 'Abdallah', 3123),
('Hassan', 'Ibrahim', 20132),
('Ibrahim', 'Fahd', 342),
('Hassan', 'Hana', 2133),
('Khaled', 'Hassan', 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
