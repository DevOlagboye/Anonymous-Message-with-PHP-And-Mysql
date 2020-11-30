-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 08:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anonymous`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `messages` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `username`, `messages`) VALUES
(1, 'Olagboye', 'This is my message to you'),
(2, 'Olagboye', 'Another Message to you'),
(3, 'Olagboye', 'Another message from me to you'),
(4, 'Olagboye', 'How far na? It has been a while now what\'s up?'),
(5, 'Admin', 'How far na? One love bro'),
(6, 'Admin', 'Here is your New Message'),
(7, '', 'Thsis is sjkfjdj'),
(8, '', 'This is a message to you Akinbayo'),
(9, '', 'this is my message to you Akinbayo'),
(10, '', 'This is Dev Olagboye talking to you Akintayo'),
(11, '', 'This is my message to you Akinbayo from Dev Olagboye'),
(12, 'Akinbayo', 'Here is my Message to you Akinbayo from Dev Olagboye'),
(13, '', 'This is a message to you bro.\r\n\r\nOne Love.'),
(14, 'Akinbayo', 'Here is my Message to you bro.....'),
(15, '', ''),
(16, 'Akinbayo', 'This is my message to Akinbayo How are you?'),
(17, 'Akinbayo', 'This is another message to Akinbayo'),
(18, 'Akinbayo', 'Another Message to Akinbayo'),
(19, 'Admin', 'How are you my Admin...'),
(20, 'Admin', 'How are you doing my Admin...'),
(21, 'Admin', 'How is everything over there my Admin it has been a while bro.'),
(22, 'Olasco', 'Hey bro, what\'s up?\r\n\r\nit has been a while  bro'),
(23, 'Olasco', 'Yeah bro, how far with the stuff?'),
(24, '', 'Here is my message to you my dearest admin.'),
(25, '', 'Here is my other message to you my Admin Let\'s go bro.'),
(26, '', 'Here is my other message to you my Admin Let\'s go bro.'),
(27, '', 'Here is my other message to you my Admin Let\'s go bro.'),
(28, 'Olasco', 'Here is my other message to you my Admin Let\'s go bro.'),
(29, 'Admin', 'Here is my other message to you my Admin Let\'s go bro.'),
(30, 'Admin', 'Let\'s Go'),
(38, '', 'New Message to you Admin'),
(39, '', 'Another new Message to Admin'),
(40, '', 'New message to Admin'),
(41, 'Admin', 'My admin what\'s up?'),
(42, 'Akinbayo', 'What\'s up Akinbayo?'),
(43, 'Odunayomide', 'One Love Odunayomide we Love you bro!'),
(44, 'Admin', 'How is it going Admin?'),
(45, 'Admin', 'Let\'s check you out admin...'),
(46, 'Olugboye', 'Hey, Olugboye it has been a while I hear from you how have you been, how is everyone over there it is your anonymous friend sending you regards.\r\n\r\n\r\n\r\n\r\n\r\nRegards,\r\nYour Anonymous Friend....');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'Admin', 'Akingbola123*', 'Admin@admin'),
(2, 'Odunayo', 'Akingbola123*', 'olasco@gmail.com'),
(3, 'Damilola', 'Akingbola123*', ''),
(4, 'Seyi', 'Akingbola123*', ''),
(5, 'Olagboye', 'Akingbola', 'devolagboye@gmail.com'),
(6, 'Akinbayo', 'Akinbayopass', 'akinbayo@gmail.com'),
(9, 'Damilare', 'Damilare123', 'damilola@gmail.com'),
(10, 'Odunayomide', 'Odunayomide', 'odunayomide@gmail.com'),
(15, 'Test@Test', 'Test@Test', 'Test@Test'),
(16, 'Test@Test', 'Test2Test', 'Test@Test'),
(25, 'Olasco', 'Olaasco', 'Olasco@gmail.com'),
(27, 'Olugboye', 'Olugboye', 'olugboye@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
