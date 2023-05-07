-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 07, 2023 at 10:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suico_baldera_ochavo_gobui_nacario_webdev1_finalproject_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ID` int(8) NOT NULL,
  `CUSTOMER_NAME` varchar(100) NOT NULL,
  `CUSTOMER_CONTACT_NUMBER` bigint(11) NOT NULL,
  `CUSTOMER_EMAIL` varchar(100) NOT NULL,
  `START_DATE` date NOT NULL,
  `END_DATE` date NOT NULL,
  `NUMBER_OF_ADULTS` int(11) NOT NULL,
  `NUMBER_OF_CHILDREN` int(11) NOT NULL,
  `TOTAL_PRICE` int(11) NOT NULL,
  `TYPE` enum('STANDARD ROOM A','STANDARD ROOM B','DELUX ROOM A','DELUX ROOM B','FULLY FURNISHED ROOM','SEMI-FURNISHED ROOM') NOT NULL,
  `STATUS` enum('APPROVED','PENDING','DENIED') NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `CUSTOMER_NAME`, `CUSTOMER_CONTACT_NUMBER`, `CUSTOMER_EMAIL`, `START_DATE`, `END_DATE`, `NUMBER_OF_ADULTS`, `NUMBER_OF_CHILDREN`, `TOTAL_PRICE`, `TYPE`, `STATUS`) VALUES
(31, 'Dunphy, Alex', 12345678909, 'Alex@gmail.com', '2023-05-07', '2023-05-10', 2, 1, 3600, 'SEMI-FURNISHED ROOM', 'PENDING'),
(32, 'Dunphy, Alex', 12345678909, 'Alex@gmail.com', '2023-05-07', '2023-05-09', 1, 1, 2220, 'DELUX ROOM A', 'PENDING'),
(33, 'Gilbert, Lawrence', 9336624920, 'LawrenceGilbert@gmail.com', '2023-05-08', '2023-05-12', 1, 4, 2396, 'STANDARD ROOM B', 'PENDING'),
(34, 'Newton, Isaac', 9987456321, 'apple@gmail.com', '2023-05-16', '2023-05-23', 2, 2, 13650, 'FULLY FURNISHED ROOM', 'PENDING'),
(35, 'Newton, Isaac', 9987456321, 'apple@gmail.com', '2023-05-16', '2023-05-23', 2, 1, 7070, 'DELUX ROOM B', 'PENDING'),
(36, 'James, Bob', 9987654321, 'Bob@gmail.com', '2023-05-07', '2023-05-14', 1, 1, 4893, 'STANDARD ROOM A', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ID` int(8) NOT NULL,
  `FIRST_NAME` varchar(100) NOT NULL,
  `LAST_NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `INPUT_REVIEWS` longtext NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ID`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `INPUT_REVIEWS`, `DATE`) VALUES
(1, 'Boy', 'Human', 'boy@gmail.com', 'Apple', '2023-05-05 19:00:09'),
(2, 'Girl', 'Human', 'girl@gmail.com', 'This place is amazing to go on vacation :)', '2023-05-05 19:04:46'),
(3, 'Alex', 'Dunphy', 'Alex@gmail.com', 'Hello World :)\n', '2023-05-06 01:06:52'),
(4, 'Boy', 'Human', 'boy@gmail.com', 'Everything is AWESOME!!!', '2023-05-06 01:08:03'),
(5, 'Lawrence', 'Gilbert', 'LawrenceGilbert@gmail.com', 'Hello, This is Lawrence Gilbert :)', '2023-05-06 01:17:31'),
(6, 'Bob', 'James', 'Bob@gmail.com', 'I Love Food <3', '2023-05-06 01:21:15'),
(7, 'Isaac', 'Newton', 'apple@gmail.com', 'Hello, Welcome to Paradise :D', '2023-05-06 01:37:36'),
(8, 'Bob', 'James', 'Bob@gmail.com', 'Amazing Views and Nice Oceans :D ', '2023-05-06 08:54:42'),
(9, 'Lawrence', 'Gilbert', 'LawrenceGilbert@gmail.com', 'I Love My Vacations!!!', '2023-05-06 08:59:52'),
(10, 'Alex', 'Dunphy', 'Alex@gmail.com', 'I love the Scenery <3 :D', '2023-05-07 00:07:03'),
(11, 'Boy', 'Human', 'boy@gmail.com', 'I love the fishes in the Ocean <3', '2023-05-07 00:09:55'),
(12, 'Boy', 'Human', 'boy@gmail.com', 'I love the Sand :)', '2023-05-07 00:36:10'),
(13, 'Girl', 'Human', 'girl@gmail.com', 'I love the Beach :))', '2023-05-07 02:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(8) NOT NULL,
  `FIRST_NAME` varchar(100) NOT NULL,
  `LAST_NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `CONTACT_NUMBER` bigint(11) NOT NULL,
  `DATE_REGISTERED` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PASSWORD`, `CONTACT_NUMBER`, `DATE_REGISTERED`) VALUES
(1, 'Lawrence', 'Gilbert', 'LawrenceGilbert@gmail.com', 'Lorenz123', 9336624920, '2023-04-22 06:09:18'),
(2, 'Bob', 'James', 'Bob@gmail.com', 'Bob123', 9987654321, '2023-04-22 09:06:07'),
(4, 'Alex', 'Dunphy', 'Alex@gmail.com', 'Alex123', 12345678909, '2023-04-25 00:52:50'),
(5, 'Boy', 'Human', 'boy@gmail.com', 'boy', 9173324920, '2023-05-05 18:59:53'),
(6, 'Girl', 'Human', 'girl@gmail.com', 'girl', 9336345126, '2023-05-05 19:04:08'),
(7, 'Isaac', 'Newton', 'apple@gmail.com', 'apple', 9987456321, '2023-05-06 01:36:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
