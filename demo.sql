-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2018 at 04:04 AM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Email` varchar(100) NOT NULL,
  `Item` varchar(100) NOT NULL,
  `Zip` varchar(5) NOT NULL,
  `Price` double(9,2) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Email`, `Item`, `Zip`, `Price`, `Date`) VALUES
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 20.00, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 50.00, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.68, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 9.69, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 20.00, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 20.00, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 20.00, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 20.00, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 29.00, '2018-08-01'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 29.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 45.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 99.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 99.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'S', '35216', 232.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 500.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 22.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 2.00, '2018-08-02'),
('rajan.ananthan@gmail.com', 'Orange', '35216', 2.00, '2018-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`email`) VALUES
('fuck@fuck.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
