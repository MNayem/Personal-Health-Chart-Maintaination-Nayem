-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2018 at 09:39 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ziko`
--

-- --------------------------------------------------------

--
-- Table structure for table `health_chart`
--

CREATE TABLE `health_chart` (
  `Date` date NOT NULL,
  `Sleeping pill` varchar(20) NOT NULL,
  `Sleep` varchar(20) NOT NULL,
  `Problem in sleep` varchar(50) NOT NULL,
  `Stool` varchar(30) NOT NULL,
  `Feelings_Stool` text NOT NULL,
  `Breakfast` varchar(50) NOT NULL,
  `Feelings_Breakfast` text NOT NULL,
  `Lunch` varchar(100) NOT NULL,
  `Feelings_Lunch` text NOT NULL,
  `Dinner` varchar(100) NOT NULL,
  `Feelings_Dinner` text NOT NULL,
  `Snacks and Others` varchar(100) NOT NULL,
  `Feelings_Others` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health_chart`
--

INSERT INTO `health_chart` (`Date`, `Sleeping pill`, `Sleep`, `Problem in sleep`, `Stool`, `Feelings_Stool`, `Breakfast`, `Feelings_Breakfast`, `Lunch`, `Feelings_Lunch`, `Dinner`, `Feelings_Dinner`, `Snacks and Others`, `Feelings_Others`) VALUES
('2018-05-16', 'cocetin 0.7mg', '7 hours', 'No', 'Better', 'good', 'Boiled egg and butter', 'Good', 'Rice,fish and vegetable', 'Good', 'Bread with vegetable and egg fry', 'Good', 'No', 'No'),
('2018-05-20', 'no', 'good', 'no', 'good', 'bad', 'no', 'no', 'yes', 'good', 'yes', 'good', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `talha`
--

CREATE TABLE `talha` (
  `slno` int(11) NOT NULL,
  `stool` text NOT NULL,
  `breakfast` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `talha`
--

INSERT INTO `talha` (`slno`, `stool`, `breakfast`) VALUES
(0, 'good', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'Nayem', '254326');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `talha`
--
ALTER TABLE `talha`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
