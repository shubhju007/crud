-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 06:03 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(20) NOT NULL,
  `dep_name` varchar(200) NOT NULL,
  `dep_location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`, `dep_location`) VALUES
(1, 'CSE', 'pune'),
(2, 'IT', 'bhopal'),
(3, 'ECE', 'jharkhand');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(20) NOT NULL,
  `emp_name` varchar(200) NOT NULL,
  `job_name` varchar(200) NOT NULL,
  `manager_id` int(10) NOT NULL,
  `hire_date` date NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  `commission` decimal(10,0) NOT NULL,
  `dep_id` int(10) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `job_name`, `manager_id`, `hire_date`, `salary`, `commission`, `dep_id`, `EmailId`, `password`, `userimage`) VALUES
(1, 'Ravi1', 'Ass.manager', 1, '2019-11-01', '12000', '12', 1, 'khatarkar.priyanka456@gmail.com', 'xyz', 'Ravi11575805730.jpg'),
(2, 'sonam', 'hlper', 2, '2019-11-01', '12', '1', 2, 'ravi@gmail.com', '', ''),
(4, 'anu', 'Tester', 3, '2019-11-21', '4500', '12', 2, '', '', ''),
(5, 'abdu12', '', 0, '0000-00-00', '0', '0', 2, 'khatarkar.priyanka456@gmail.com', 'xyz', ''),
(9, 'Shubham Junwal', '', 0, '0000-00-00', '0', '0', 2, 'khatarkar.priyanka456@gmail.com', 'xyz', ''),
(10, 'Priyanka khatarkar ', '', 0, '0000-00-00', '0', '0', 1, 'khatarkar.priyanka456@gmail.com', 'xyz', ''),
(12, 'shubham1', '', 0, '0000-00-00', '0', '0', 1, 'nakodashri@gmail.com', 'abcd', 'shubham513.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `forgotpassword`
--

CREATE TABLE `forgotpassword` (
  `id` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `timestamp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgotpassword`
--

INSERT INTO `forgotpassword` (`id`, `email`, `timestamp`) VALUES
(1, 'nakodashri@gmail.com', '1576935461'),
(2, 'nakodashri@gmail.com', '1577722233'),
(3, 'nakodashri@gmail.com', '1577722262'),
(4, 'nakodashri@gmail.com', '1577722304'),
(5, 'khatarkar.priyanka456@gmail.com', '1577861348');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'hello', 'jhbibn', '2019-12-03 00:00:00', '2019-12-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'CODEX@123', 0, 0, 0, NULL, '2018-10-11 13:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(250) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `images` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`, `images`) VALUES
(1, 'Willie Whited', '2524 White River Way', 'Salt Lake City', '84106', 'USA', 'willie-whited.jpg'),
(2, 'Lisa Squires', 'Fehringer Strasse 27', 'MARIA BUCH', '8750', 'Austria', 'lisa-squires.jpg'),
(3, 'Sean Patterson', 'Rue des Ecoles 426', 'Vlierzele', '9520', 'Belgium', 'sean-patterson.jpg'),
(4, 'Anna Scott', 'Rua C 66, 1384', 'Goiania-GO', '74305-450', 'Brazil', 'anna-scott.jpg'),
(5, 'Desmond Peterson', '1414 Grey Rd', 'Feversham', 'ON N0C 1C0', 'Canada', 'desmond-peterson.jpg'),
(6, 'Samuel Hogan', '13, Avenue De Marlioz', 'ARGENTEUIL', '95100', 'France', 'samuel-hogan.jpg'),
(7, 'John Miller', 'Pappelallee 21', 'Arnsdorf', '09661', 'Germany', 'john-miller.jpg'),
(8, 'Rose Joyce', 'Via Galileo Ferraris, 38', 'Malavicina MN', '46040', 'Italy', 'rose-joyce.jpg'),
(9, 'Phillip Tilton', 'Huibertplaat 120', 'DH  Zwolle', '8032', 'Netherland', 'phillip-tilton.jpg'),
(10, 'Anita McGurk', '128 St Pauls Court Cloverlea', 'Palmerston North', '4412', 'New Zealand', 'anita-mcgurk.jpg'),
(11, 'John Morgan', '286 Stanza Bopape St', 'Louis Trichardt', '0923', 'South Africa', 'john-morgan.jpg'),
(12, 'Margaret Teets', 'Grossmatt 62', 'Betschwanden', '8777', 'Switzerland', 'margaret-teets.jpg'),
(13, 'Dara Adams', '21 Fraserburgh Rd', 'LINNELS', 'NE46 8YB', 'United Kingdom', 'dara-adams.jpg'),
(14, 'Bennie J. Martin', '34 Masthead Drive', 'PARK AVENUE QLD', '4701', 'Australia', 'bennie-j-martin.jpg'),
(15, 'Gladys Ashford', 'Holzstrasse 14', 'SALCHENDORF', '9064', 'Austria', 'gladys-ashford.jpg'),
(16, 'William Lavallie', 'Heirstraat 31', 'Marchin', '4570', 'Belgium', 'william-lavallie.jpg'),
(17, 'Antonio Wayman', '2331 Carlson Road', 'Prince George', 'BC V2L 5E5', 'Canada', 'antonio-wayman.jpg'),
(18, 'Carol Selders', 'Ysitie 44', 'TAMPERE', '33240', 'Finland', 'carol-selders.jpg'),
(19, 'David Sato', '30, Rue de la Pompe', 'MANOSQUE', '04100', 'France', 'david-sato.jpg'),
(20, 'Amy Vanmatre', 'Friedrichstrasse 4', 'Dusseldorf Flehe', '40223', 'Germany', 'amy-vanmatre.jpg'),
(21, 'Kenny Todd', 'Corso Porta Nuova, 10', 'Quara RE', '42010', 'Italy', 'kenny-todd.jpg'),
(22, 'Marla Alvarez', 'Tielstraat 17', 'Amsterdam-Zuidoost', '1107 RC', 'Netherland', 'marla-alvarez.jpg'),
(23, 'George Stanley', '95 Belle Verde Drive Rothesay Bay', 'North Shore', '0630', 'New Zealand', 'george-stanley.jpg'),
(24, 'David Bennett', 'Torvbakkgata 219', 'OSLO', '0550', 'Norway', 'david-bennett.jpg'),
(25, 'Donald Garrett', '86 St Denys Road', 'POYS STREET', 'IP17 9TF', 'United Kingdom', 'donald-garrett.jpg'),
(26, 'Horace Morgan', '3435 Jarvis Street', 'Buffalo', '14202', 'United States', 'horace-morgan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_name`, `user_email`, `user_password`, `user_image`) VALUES
(1, 'shubham', 'nakodashri@gmail.com', '1234', ''),
(3, 'hello', 'yello@gmail.com', 'hello', 'default.png'),
(4, 'hello', 'dsfas@gmail.com', '5421', 'default.png'),
(5, 'adsas', 'asfjl@gmail.com', 'kjnin', 'adsas571.jpg'),
(6, 'kml', 'oin@gmail.com', 'kjnmkln', 'kml6097.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `dep_id` (`dep_id`);

--
-- Indexes for table `forgotpassword`
--
ALTER TABLE `forgotpassword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `forgotpassword`
--
ALTER TABLE `forgotpassword`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`dep_id`) REFERENCES `department` (`dep_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
