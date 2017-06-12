-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 01:53 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loadmore`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab`
--

CREATE TABLE `tab` (
  `id` bigint(20) NOT NULL,
  `tab_name` varchar(255) NOT NULL,
  `tab_value` varchar(255) NOT NULL,
  `position` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab`
--

INSERT INTO `tab` (`id`, `tab_name`, `tab_value`, `position`) VALUES
(1, 'dfg', '1', 0),
(2, 'hjk', '2', 0),
(3, 'aaaaaaaaa', 'aaaaaaaaa', 0),
(4, 'bbbbbbbbbbbb', 'bbbbbbbbbb', 0),
(5, 'ccccccccc', 'ccccccccc', 0),
(6, 'dddddddddddd', 'dddddddd', 0),
(7, 'eeeee', 'eeeeee', 0),
(8, 'ffffffffff', 'fffffffff', 0),
(9, 'ggggggg', 'gggggggg', 0),
(10, 'hhhhhhhhhhhh', 'hhhhhhhhhhhh', 0),
(11, 'iiiiiiiii', 'iiiiiiiiiiii', 0),
(12, 'iiiiiiiiiiii', 'iiiiiiiiiiiii', 0),
(13, 'jjjjjjjjjj', 'jjjjjjj', 0),
(14, 'kkkkkkkkkk', 'kkkkkkkkkkkkk', 0),
(15, 'lllllll', 'llllllll', 0),
(16, 'mmmmmmmmmm', 'mmmmmmmmmmmmm', 0),
(17, 'nnnnnnnn', 'nnnnnn', 0),
(18, 'oooooooo', 'ooooooooooo', 0),
(19, 'pppppppppppp', 'pppppppppp', 0),
(20, 'qqqqqqqqqqq', 'qqqqqqqqqqqq', 0),
(21, 'rrrrrrrrrrr', 'rrrrrrrrrrr', 0),
(22, 'sssssssssss', 'ssssssssssss', 0),
(23, 'tttttttt', 'tttttttt', 0),
(24, 'uuuuuuu', 'uuuuuuuuu', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab`
--
ALTER TABLE `tab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab`
--
ALTER TABLE `tab`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
