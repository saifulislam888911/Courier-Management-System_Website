-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 10:52 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sundarban_courier`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_information`
--

CREATE TABLE `customer_information` (
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `courier_ProductAndService_status` varchar(100) NOT NULL,
  `ProductAndService_id` int(100) DEFAULT NULL,
  `delivery_status` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `customer_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_information`
--

INSERT INTO `customer_information` (`customer_id`, `customer_name`, `customer_address`, `email_address`, `contact_no`, `courier_ProductAndService_status`, `ProductAndService_id`, `delivery_status`, `payment_status`, `customer_image`) VALUES
(1, 'Mr Faysal', 'Dokkhinkhan,BD', 'naim@gmail.com', '15XXXX', '(Pick-Up Request)', 25, 'Shipped', 'Complete', '../storage/Customer_Image/watchmen_050d_2880x1800.jpg'),
(2, 'sss', 'dd', 'pp@gmail.com', '1222', 'Sent', 2, 'On The way', 'Complete', '../storage/Customer_Image/images.png');

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE `employee_information` (
  `employee_id` int(100) NOT NULL,
  `employee_name` varchar(100) DEFAULT NULL,
  `employee_address` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `contact_no` varchar(100) DEFAULT NULL,
  `employee_position` varchar(100) DEFAULT NULL,
  `salary` int(100) DEFAULT NULL,
  `payment_status` varchar(100) DEFAULT NULL,
  `employee_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`employee_id`, `employee_name`, `employee_address`, `email_address`, `contact_no`, `employee_position`, `salary`, `payment_status`, `employee_image`) VALUES
(1, 'Mr  AAA', 'Narayangonj,Dhaka', 'aaa@gmail.com', '+880-15XXXX', 'Manager', 20000, 'Complete', '../storage/Employee_Image/14.jpg'),
(2, 'fahim', '', '@gmail.com', '+880-1', 'Delivery Man', 0, '(due)', '../storage/Employee_Image/'),
(4, '', '', '@gmail.com', '+880-1', '**choose**', 0, '', '../storage/Employee_Image/'),
(5, 'nnnnn', '', '@gmail.com', '+880-1', 'Delivery Man', 0, '', '../storage/Employee_Image/');

-- --------------------------------------------------------

--
-- Table structure for table `login_panel`
--

CREATE TABLE `login_panel` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `customer_id` varchar(100) DEFAULT NULL,
  `employee_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_panel`
--

INSERT INTO `login_panel` (`user_name`, `password`, `title`, `customer_id`, `employee_id`) VALUES
('Admin1', '1111', 'Administration', NULL, NULL),
('Receptionist1', '2222', 'Reception', NULL, NULL),
('Customer1', '3333', 'Customer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_information`
--

CREATE TABLE `product_information` (
  `product_id` varchar(20) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `owner_address` varchar(20) NOT NULL,
  `email_address` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `delivery_address` varchar(20) NOT NULL,
  `delivery_status` varchar(20) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `employee_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_information`
--

INSERT INTO `product_information` (`product_id`, `owner_name`, `owner_address`, `email_address`, `contact_no`, `delivery_address`, `delivery_status`, `payment_status`, `employee_image`) VALUES
('1', 'a', 'dhaka', 'a@gmail.com', '+880-111', 'dhaka', 'pending', 'paid', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_information`
--
ALTER TABLE `customer_information`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD PRIMARY KEY (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_information`
--
ALTER TABLE `customer_information`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employee_information`
--
ALTER TABLE `employee_information`
  MODIFY `employee_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
