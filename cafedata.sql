-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 06:42 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signupform`
--

-- --------------------------------------------------------

--
-- Table structure for table `cafedata`
--

CREATE TABLE `cafedata` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cafedata`
--

INSERT INTO `cafedata` (`id`, `username`, `fullname`, `email`, `password`, `gender`) VALUES
(50, 'Ayaan', 'Ayaan Khan', 'ak@gmail.com', 'ayaan', 'male'),
(6, 'danish', 'danish khan', 'dk@gmail.com', 'danishoperation', 'male'),
(5, 'faiz', 'Faiz khan', 'fkstudio@gmail.com', 'faizkhanitm123', 'male'),
(4, 'mamu', 'Ahtesham Ali', 'ali.ahtesham@gmail.com', 'aydaanaydeen', 'male'),
(7, 'rishi', 'rishi sir', 'rishindtv@gmai;.com', 'rishindtv', 'male'),
(2, 'ritikj', 'Ritik Jsin', 'jain.ritik001@gmail.com', 'ndtv', 'male'),
(51, 'shadab', 'Mohd. Shadab', 'shadabfeb@gmail.com', 'itssocool', 'male'),
(49, 'tom', 'tom sway', 'tm@gmail.com', '12345', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cafedata`
--
ALTER TABLE `cafedata`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cafedata`
--
ALTER TABLE `cafedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
