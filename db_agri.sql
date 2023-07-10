-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 10, 2023 at 03:56 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `lmi_form`
--

DROP TABLE IF EXISTS `lmi_form`;
CREATE TABLE IF NOT EXISTS `lmi_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_no` int(11) NOT NULL,
  `insurance_type` varchar(255) NOT NULL DEFAULT 'Livestock Mortality Insurance',
  `full_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `marital_stat` varchar(255) NOT NULL,
  `spouse_name` varchar(255) NOT NULL,
  `animal_type` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `stock_source` varchar(255) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `ear_mark` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `basic_color` varchar(255) NOT NULL,
  `no_of_male_animals` varchar(255) NOT NULL,
  `no_of_female_animals` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `no_of_housing` varchar(255) NOT NULL,
  `no_of_birth_per_house_unit` varchar(255) NOT NULL,
  `date_of_purchase` date NOT NULL,
  `total_no_of_heads_per_enroll` varchar(255) NOT NULL,
  `cert_owner_large_cattle_no` varchar(255) NOT NULL,
  `cert_transfer_large_cattle_no` varchar(255) NOT NULL,
  `desired_sum_insured` varchar(255) NOT NULL,
  `total_sum_insured` varchar(255) NOT NULL,
  `coverage_for_epidemic_disease1` varchar(255) NOT NULL,
  `coverage_for_epidemic_disease2` varchar(255) NOT NULL,
  `coverage_for_epidemic_disease3` varchar(255) NOT NULL,
  `signature` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lmi_form`
--

INSERT INTO `lmi_form` (`id`, `account_no`, `insurance_type`, `full_name`, `contact`, `date_of_birth`, `gender`, `marital_stat`, `spouse_name`, `animal_type`, `purpose`, `stock_source`, `breed`, `ear_mark`, `brand`, `basic_color`, `no_of_male_animals`, `no_of_female_animals`, `age`, `no_of_housing`, `no_of_birth_per_house_unit`, `date_of_purchase`, `total_no_of_heads_per_enroll`, `cert_owner_large_cattle_no`, `cert_transfer_large_cattle_no`, `desired_sum_insured`, `total_sum_insured`, `coverage_for_epidemic_disease1`, `coverage_for_epidemic_disease2`, `coverage_for_epidemic_disease3`, `signature`) VALUES
(1, 119121, 'Livestock Mortality Insurance', 'Paolo Zapatero Bachicha', '09568142192', '2002-07-23', 'Male', 'single', 'N/A', 'Cow', 'Milking', 'Bought', 'Asian', 'N/A', 'Calf', 'Standard Black and White', '3', '3', 4, '2', '3', '2019-06-04', '6', 'N/A', 'N/A', '25000', '25000', 'N/A', 'N/A', 'N/A', NULL),
(2, 228281, 'Livestock Mortality Insurance', 'John Doe', '09123456789', '1997-08-06', 'Male', 'married', 'Marry Doe', 'Cow', 'Milking', 'Dairy Farm', 'Holstein', '2345', 'DEF', 'Standard Black and White', '2', '8', 5, '2', '2', '2018-08-20', '10', 'N/A', 'N/A', '200000', '2000000', 'Bovine viral diarrhea', 'Bovine viral diarrhea', 'Bovine respiratory disease', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

DROP TABLE IF EXISTS `user_table`;
CREATE TABLE IF NOT EXISTS `user_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_type` varchar(255) NOT NULL DEFAULT 'client',
  `account_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2032 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `account_type`, `account_no`, `name`, `email`, `password`) VALUES
(1, 'client', 119121, 'Paolo Bachicha', 'paolobachicha@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'client', 228281, 'John Doe', 'johndoe@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2031, 'admin', 1020, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
