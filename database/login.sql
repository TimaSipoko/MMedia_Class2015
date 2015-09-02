-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2015 at 05:04 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `username` varchar(102) NOT NULL,
  `password` varchar(102) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Jonas', '5302532ee6bcba78086b0654aa5f3b91'),
(3, 'Tima', '5302532ee6bcba78086b0654aa5f3b91'),
(4, 'Braaf', '5302532ee6bcba78086b0654aa5f3b91'),
(5, 'Bruintjies', '5302532ee6bcba78086b0654aa5f3b91'),
(6, 'Cahiel', '5302532ee6bcba78086b0654aa5f3b91'),
(7, 'CarelseB', '5302532ee6bcba78086b0654aa5f3b91'),
(8, 'Fakier', '5302532ee6bcba78086b0654aa5f3b91'),
(9, 'Hendricks', '5302532ee6bcba78086b0654aa5f3b91'),
(10, 'Herbert', '5302532ee6bcba78086b0654aa5f3b91'),
(11, 'Mabaleka', '5302532ee6bcba78086b0654aa5f3b91'),
(12, 'Kalombo', '5302532ee6bcba78086b0654aa5f3b91'),
(13, 'Makohliso', '5302532ee6bcba78086b0654aa5f3b91'),
(14, 'Mase', '5302532ee6bcba78086b0654aa5f3b91'),
(15, 'Matsheketsheke', '5302532ee6bcba78086b0654aa5f3b91'),
(16, 'Mfiki', '5302532ee6bcba78086b0654aa5f3b91'),
(17, 'Nkolose', '5302532ee6bcba78086b0654aa5f3b91'),
(18, 'Nomnganga', '5302532ee6bcba78086b0654aa5f3b91'),
(19, 'Papu', '5302532ee6bcba78086b0654aa5f3b91'),
(20, 'Pedrito', '5302532ee6bcba78086b0654aa5f3b91'),
(21, 'Pontack', '5302532ee6bcba78086b0654aa5f3b91'),
(22, 'Sedibane', '5302532ee6bcba78086b0654aa5f3b91'),
(23, 'Swartz', '5302532ee6bcba78086b0654aa5f3b91'),
(24, 'Taliwe', '5302532ee6bcba78086b0654aa5f3b91'),
(25, 'Tisane', '5302532ee6bcba78086b0654aa5f3b91'),
(26, 'Voko', '5302532ee6bcba78086b0654aa5f3b91'),
(27, 'Yiwana', '5302532ee6bcba78086b0654aa5f3b91'),
(28, 'Zawistowski', '5302532ee6bcba78086b0654aa5f3b91'),
(29, 'Williams', '5302532ee6bcba78086b0654aa5f3b91'),
(30, 'Koopman', '5302532ee6bcba78086b0654aa5f3b91');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
