-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Oct 16, 2023 at 06:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `old_username` varchar(30) NOT NULL,
  `new_username` varchar(30) NOT NULL,
  `renew_username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `old_username`, `new_username`, `renew_username`) VALUES
(1, 'Admin', 'Admin12', 'Admin12'),
(2, 'abc', 'abc123', 'abc123'),
(3, 'dfg', 'DFG123', 'DFG123'),
(4, 'XYZ', 'xyz123', 'xyz123');

-- --------------------------------------------------------

--
-- Table structure for table `cn_system`
--

CREATE TABLE `cn_system` (
  `Drug_ID` varchar(4) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Manufactured_date` date NOT NULL,
  `Expire_date` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Dose` varchar(5) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cn_system`
--

INSERT INTO `cn_system` (`Drug_ID`, `Name`, `Manufactured_date`, `Expire_date`, `Quantity`, `Dose`, `Price`, `Image`) VALUES
('M06', 'Amitriptyline ', '2023-09-20', '2025-09-20', 20, '10mg', '15000.00', 0x696d616765732d6d65646963696e652f616d697472697074796c696e65202d432e6a706567),
('M07', 'Duloxetine ', '2023-10-23', '2025-10-23', 30, '30mg', '40000.00', 0x696d616765732d6d65646963696e652f64756c6f786574696e652d432e6a706567),
('M08', 'Pregabalin ', '2023-11-28', '2025-11-28', 50, '300mg', '60000.00', 0x696d616765732d6d65646963696e652f707265676162616c696e2d432e6a706567),
('M09', 'Gabapentin', '2023-10-27', '2025-10-27', 45, '100mg', '65000.00', 0x696d616765732d6d65646963696e652f6761626170656e74696e2d432e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `salutation` varchar(15) NOT NULL,
  `email` varchar(12) NOT NULL,
  `contactNumber` int(10) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `salutation`, `email`, `contactNumber`, `comment`) VALUES
(1, 'Bimal', 'Manager', 'pererabimal@', 715689351, ' This is very fast web site.'),
(2, 'Kamal', 'Nurse', 'kamal@gmail.', 746859782, ' adxfgasgc');

-- --------------------------------------------------------

--
-- Table structure for table `diabetes`
--

CREATE TABLE `diabetes` (
  `Drug_ID` varchar(4) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Manufactured_date` date NOT NULL,
  `Expire_date` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Dose` varchar(5) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diabetes`
--

INSERT INTO `diabetes` (`Drug_ID`, `Name`, `Manufactured_date`, `Expire_date`, `Quantity`, `Dose`, `Price`, `Image`) VALUES
('M15', 'Short-acting insulin', '2023-11-27', '2025-11-27', 50, '100mg', '12000.00', 0x696d616765732d6d65646963696e652f73686f72742d616374696e67e2809d20696e73756c696e2d442e6a706567),
('M16', 'Rapid-acting insulin', '2023-08-25', '2025-08-25', 70, '10ml', '40000.00', 0x696d616765732d6d65646963696e652f726170696420616374696e6720696e73756c696e2d442e6a7067),
('M17', 'Intermediate insulin', '2023-10-17', '2025-10-17', 40, '100ml', '50000.00', 0x696d616765732d6d65646963696e652f496e7465726d6564696174652d616374696e6720696e73756c696e2d442e6a706567),
('M18', 'Long-acting insulin', '2023-07-25', '2025-07-25', 45, '100ml', '46000.00', 0x696d616765732d6d65646963696e652f4c6f6e672d6c617374696e6720696e73756c696e2d442e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doc_ID` varchar(7) NOT NULL,
  `Hospital` varchar(10) DEFAULT NULL,
  `First_Name` varchar(20) DEFAULT NULL,
  `Last_name` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone_No` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doc_ID`, `Hospital`, `First_Name`, `Last_name`, `Email`, `Phone_No`) VALUES
('25ZML48', 'Cleveland ', 'David', 'William', 'williamdavid@gmail.com', 2147483647),
('42LMC56', 'Toronto Ge', 'Daniel', 'Mathew', 'mathewdaniel@gmail.com', 2147483647),
('48ZCKS2', 'Mayo Clini', 'Alex', 'James', 'jamesalex@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `ent`
--

CREATE TABLE `ent` (
  `Drug_ID` varchar(4) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Manufactured_date` date NOT NULL,
  `Expire_date` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Dose` varchar(5) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ent`
--

INSERT INTO `ent` (`Drug_ID`, `Name`, `Manufactured_date`, `Expire_date`, `Quantity`, `Dose`, `Price`, `Image`) VALUES
('M10', 'Fluticasone ', '2023-07-14', '2023-07-14', 35, '50mcg', '55000.00', 0x696d616765732d6d65646963696e652f466c7574696361736f6e65206e6173616c207072657061726174696f6e732d454e542e6a706567),
('M11', 'Gentamicin ', '2023-10-15', '2025-10-15', 45, '10ml', '30000.00', 0x696d616765732d6d65646963696e652f47656e74616d6963696e206561722064726f70732d454e542e6a706567),
('M12', 'Hydrocortisone ', '2023-06-07', '2025-06-07', 40, '100mg', '35000.00', 0x696d616765732d6d65646963696e652f487964726f636f727469736f6e652d454e542e6a706567),
('M13', 'Ipratropium ', '2023-07-15', '2025-07-15', 50, '10mg', '70000.00', 0x696d616765732d6d65646963696e652f4970726174726f7069756d206e6173616c2073707261792d454e542e6a706567),
('M14', 'Miconazole ', '2023-08-07', '2025-08-07', 55, '40g', '50000.00', 0x696d616765732d6d65646963696e652f4d69636f6e617a6f6c6520666f72206f72616c207468727573682d454e542e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `eye`
--

CREATE TABLE `eye` (
  `Drug_ID` varchar(4) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Manufactured_date` date NOT NULL,
  `Expire_date` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Dose` varchar(5) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eye`
--

INSERT INTO `eye` (`Drug_ID`, `Name`, `Manufactured_date`, `Expire_date`, `Quantity`, `Dose`, `Price`, `Image`) VALUES
('M19', 'Acetazolamide', '2023-11-03', '2025-11-03', 100, '250mg', '90000.00', 0x696d616765732d6d65646963696e652f41636574617a6f6c616d69646520666f7220676c6175636f6d61202d452e6a706567),
('M20', 'Acetylcysteine', '2023-06-25', '2025-06-25', 80, '100mg', '65000.00', 0x696d616765732d6d65646963696e652f41636574796c6379737465696e652d452e6a706567),
('M21', 'Aciclovir', '2023-10-20', '2025-10-20', 50, '400mg', '50000.00', 0x696d616765732d6d65646963696e652f416369636c6f766972202d452e6a706567),
('M22', 'Antazoline', '2023-06-14', '2025-06-14', 70, '10ml', '70000.00', 0x696d616765732d6d65646963696e652f416e74617a6f6c696e652d452e6a706567),
('M23', 'Apraclonidine', '2023-10-10', '2025-10-10', 50, '5ml', '50000.00', 0x696d616765732d6d65646963696e652f41707261636c6f6e6964696e652d452e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Feedback_Discrip` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `Name`, `Email`, `Feedback_Discrip`) VALUES
(1, 'Nimal', 'pereranimal@gmail.co', 'It is a very fast. I like to this web site.'),
(35, 'Kamal', 'pererakamal@gmail.co', 'It is very beautiful.'),
(36, 'fffh', 'ghjggjg', 'hfhfhfhfhf'),
(37, 'gfdgf', 'gfdf@gmai,com', 'gdfgdfgdg');

-- --------------------------------------------------------

--
-- Table structure for table `heart`
--

CREATE TABLE `heart` (
  `Drug_ID` varchar(4) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Manufactured_date` date NOT NULL,
  `Expire_date` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Dose` varchar(5) NOT NULL,
  `Price` float NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heart`
--

INSERT INTO `heart` (`Drug_ID`, `Name`, `Manufactured_date`, `Expire_date`, `Quantity`, `Dose`, `Price`, `Image`) VALUES
('M01', 'Apixaban', '2023-09-03', '2025-09-03', 30, '5mg', 30000, 0x696d616765732d6d65646963696e652f417069786162616e2d482e6a706567),
('M02', 'Dabigatran', '2023-10-20', '2025-10-20', 50, '100mg', 50000, 0x696d616765732d6d65646963696e652f4461626967617472616e2d482e6a706567),
('M03', 'Edoxaban', '2023-09-07', '2025-09-07', 60, '60mg', 20000, 0x696d616765732d6d65646963696e652f45646f786162616e2d482e6a706567),
('M04', 'Heparin', '2023-10-10', '2025-10-10', 100, '100ml', 50000, 0x696d616765732d6d65646963696e652f4865706172696e2d482e6a706567),
('M05', 'Rivaroxaban', '2023-11-05', '2025-11-05', 30, '20mg', 10000, 0x696d616765732d6d65646963696e652f52697661726f786162616e2d482e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `infections`
--

CREATE TABLE `infections` (
  `Drug_ID` varchar(4) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Manufactured_date` date NOT NULL,
  `Expire_date` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Dose` varchar(5) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infections`
--

INSERT INTO `infections` (`Drug_ID`, `Name`, `Manufactured_date`, `Expire_date`, `Quantity`, `Dose`, `Price`, `Image`) VALUES
('M24', 'Amoxicillin', '2023-07-15', '2025-07-15', 200, '500mg', '100000.00', 0x696d616765732d6d65646963696e652f616d6f786963696c6c696e2d492e6a706567),
('M25', 'Erythromycin', '2023-08-07', '2025-08-07', 100, '500mg', '80000.00', 0x696d616765732d6d65646963696e652f6572797468726f6d7963696e2d492e6a706567),
('M26', 'Ciprofloxacin', '2023-11-05', '2025-11-05', 60, '500mg', '50000.00', 0x696d616765732d6d65646963696e652f636970726f666c6578696e652d492e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `Manager_ID` varchar(10) NOT NULL,
  `Password` varchar(10) DEFAULT NULL,
  `City` varchar(8) DEFAULT NULL,
  `Street` varchar(15) DEFAULT NULL,
  `Postal_code` int(10) DEFAULT NULL,
  `House_name` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `First_name` varchar(8) DEFAULT NULL,
  `Last_name` varchar(8) DEFAULT NULL,
  `Username` varchar(12) DEFAULT NULL,
  `Phone_No` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`Manager_ID`, `Password`, `City`, `Street`, `Postal_code`, `House_name`, `Email`, `First_name`, `Last_name`, `Username`, `Phone_No`) VALUES
('M01', 'GweO6784a', 'Gampaha', 'Holy Cross Road', 21, 'Woofy', 'fernandoamali@gmail.com', 'Amali', 'Fernando', 'Manager1', 765233560);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_stock`
--

CREATE TABLE `medicine_stock` (
  `Drug_ID` varchar(4) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Manufactured_date` date DEFAULT NULL,
  `Expire_date` date DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Dose` varchar(5) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_stock`
--

INSERT INTO `medicine_stock` (`Drug_ID`, `Name`, `Manufactured_date`, `Expire_date`, `Quantity`, `Dose`, `Price`, `Image`) VALUES
('M01', 'Apixaban', '2023-09-03', '2025-09-03', 30, '5mg', '30000.00', 0x696d616765732d6d65646963696e652f417069786162616e2d482e6a706567),
('M02', 'Dabigatran', '2023-10-20', '2025-10-20', 50, '100mg', '50000.00', 0x696d616765732d6d65646963696e652f4461626967617472616e2d482e6a706567),
('M03', 'Edoxaban', '2023-09-07', '2025-09-07', 60, '60mg', '20000.00', 0x696d616765732d6d65646963696e652f45646f786162616e2d482e6a706567),
('M04', 'Heparin', '2023-10-10', '2025-10-10', 100, '100ml', '50000.00', 0x696d616765732d6d65646963696e652f4865706172696e2d482e6a706567),
('M05', 'Rivaroxaban', '2023-11-05', '2025-11-05', 30, '20mg', '10000.00', 0x696d616765732d6d65646963696e652f52697661726f786162616e2d482e6a706567),
('M06', 'Amitriptyline', '2023-09-20', '2025-09-20', 20, '10mg', '15000.00', 0x696d616765732d6d65646963696e652f616d697472697074796c696e65202d432e6a706567),
('M07', 'Duloxetine', '2023-10-23', '2025-10-23', 30, '30mg', '40000.00', 0x696d616765732d6d65646963696e652f64756c6f786574696e652d432e6a706567),
('M08', 'Pregabalin', '2023-11-28', '2025-11-28', 50, '300mg', '60000.00', 0x696d616765732d6d65646963696e652f707265676162616c696e2d432e6a706567),
('M09', 'Gabapentin', '2023-10-27', '2025-10-27', 45, '100mg', '65000.00', 0x696d616765732d6d65646963696e652f6761626170656e74696e2d432e6a706567),
('M10', 'Fluticasone', '2023-07-14', '2025-07-14', 35, '50mg', '55000.00', 0x696d616765732d6d65646963696e652f466c7574696361736f6e65206e6173616c207072657061726174696f6e732d454e542e6a706567),
('M11', 'Gentamicin', '2023-10-15', '2025-10-15', 45, '10ml', '30000.00', 0x696d616765732d6d65646963696e652f47656e74616d6963696e206561722064726f70732d454e542e6a706567),
('M12', 'Hydrocortisone', '2023-06-07', '2025-06-07', 40, '100mg', '35000.00', 0x696d616765732d6d65646963696e652f487964726f636f727469736f6e652d454e542e6a706567),
('M13', 'Ipratropium', '2023-07-15', '2025-07-15', 50, '10mg', '70000.00', 0x696d616765732d6d65646963696e652f4970726174726f7069756d206e6173616c2073707261792d454e542e6a706567),
('M14', 'Miconazole', '2023-08-07', '2025-08-07', 55, '40mg', '50000.00', 0x696d616765732d6d65646963696e652f4d69636f6e617a6f6c6520666f72206f72616c207468727573682d454e542e6a706567),
('M15', 'Short-acting insulin', '2023-11-27', '2025-11-27', 50, '100mg', '12000.00', 0x696d616765732d6d65646963696e652f73686f72742d616374696e67e2809d20696e73756c696e2d442e6a706567),
('M16', 'Rapid-acting insulin', '2023-08-25', '2025-08-25', 70, '10ml', '40000.00', 0x696d616765732d6d65646963696e652f726170696420616374696e6720696e73756c696e2d442e6a7067),
('M17', 'Intermediate insulin', '2023-10-17', '2025-10-17', 40, '100ml', '50000.00', 0x696d616765732d6d65646963696e652f496e7465726d6564696174652d616374696e6720696e73756c696e2d442e6a706567),
('M18', 'Long-acting insulin', '2023-07-25', '2025-07-25', 45, '100ml', '46000.00', 0x696d616765732d6d65646963696e652f4c6f6e672d6c617374696e6720696e73756c696e2d442e6a706567),
('M19', 'Acetazolamide', '2023-11-03', '2025-11-03', 100, '250mg', '90000.00', 0x696d616765732d6d65646963696e652f41636574617a6f6c616d69646520666f7220676c6175636f6d61202d452e6a706567),
('M20', 'Acetylcysteine', '2023-06-25', '2025-06-25', 80, '100mg', '65000.00', 0x696d616765732d6d65646963696e652f41636574796c6379737465696e652d452e6a706567),
('M21', 'Aciclovir', '2023-10-20', '2025-10-20', 50, '400mg', '50000.00', 0x696d616765732d6d65646963696e652f416369636c6f766972202d452e6a706567),
('M22', 'Antazoline', '2023-06-14', '2025-06-14', 70, '10ml', '70000.00', 0x696d616765732d6d65646963696e652f416e74617a6f6c696e652d452e6a706567),
('M23', 'Apraclonidine', '2023-10-10', '2025-10-10', 50, '5ml', '50000.00', 0x696d616765732d6d65646963696e652f41707261636c6f6e6964696e652d452e6a706567),
('M24', 'Amoxicillin', '2023-07-15', '2025-07-15', 200, '500mg', '100000.00', 0x696d616765732d6d65646963696e652f616d6f786963696c6c696e2d492e6a706567),
('M25', 'Erythromycin', '2023-08-07', '2025-08-07', 100, '500mg', '80000.00', 0x696d616765732d6d65646963696e652f6572797468726f6d7963696e2d492e6a706567),
('M26', 'Ciprofloxacin', '2023-11-05', '2025-11-05', 60, '500mg', '50000.00', 0x696d616765732d6d65646963696e652f636970726f666c6578696e652d492e6a706567),
('M27', 'Ibuprofen', '2023-10-20', '2025-10-20', 100, '200mg', '35000.00', 0x696d616765732d6d65646963696e652f69627570726f66656e2d4d2e6a706567),
('M28', 'Diclofenac', '2023-08-25', '2025-08-25', 70, '100mg', '70000.00', 0x696d616765732d6d65646963696e652f6469636c6f66656e61632d4d2e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `musle_and_joint`
--

CREATE TABLE `musle_and_joint` (
  `Drug_ID` varchar(4) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Manufactured_date` date NOT NULL,
  `Expire_date` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Dose` varchar(5) NOT NULL,
  `Price` float NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musle_and_joint`
--

INSERT INTO `musle_and_joint` (`Drug_ID`, `Name`, `Manufactured_date`, `Expire_date`, `Quantity`, `Dose`, `Price`, `Image`) VALUES
('M27', 'Ibuprofen', '2023-10-20', '2025-10-20', 100, '200mg', 35000, 0x696d616765732d6d65646963696e652f69627570726f66656e2d4d2e6a706567),
('M28', 'Diclofenac', '2023-08-25', '2025-08-25', 70, '100mg', 70000, 0x696d616765732d6d65646963696e652f6469636c6f66656e61632d4d2e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `ID` varchar(4) NOT NULL,
  `First_Name` varchar(20) DEFAULT NULL,
  `Last_name` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL,
  `City` char(10) DEFAULT NULL,
  `Street` varchar(20) DEFAULT NULL,
  `Postal_code` int(10) DEFAULT NULL,
  `House_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`ID`, `First_Name`, `Last_name`, `Email`, `Password`, `City`, `Street`, `Postal_code`, `House_name`) VALUES
('P01', 'Stephan', 'Jonas', 'jonasstephan@gmail.com', 'st012', 'Colombo', 'St.Merys Road', 105, 'Rajkot'),
('P02', 'Jessie', 'Kidd', 'kiddjessie@gmail.com', 'JK123', 'Gampaha', 'Holy Cross Road', 21, 'Rio');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `Id` int(10) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Age` int(4) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Contact_No` int(10) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`Id`, `Name`, `Age`, `Email`, `Contact_No`, `Message`, `Image`) VALUES
(1, 'Kamal', 20, 'pererakamal@gmail.co', 745698632, 'Hi doctor..', ''),
(2, 'Bimal', 22, 'pererabimal@gmail.co', 745696532, 'Injured..', ''),
(3, 'Nimal', 25, 'pereranimal@gmail.co', 716983265, 'I have a fever.', ''),
(4, 'bimali', 45, 'bimali@gmail.com', 546546445, 'fsdfsdsdfsdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fullname`, `dob`, `email`, `username`, `password`, `confirm_password`) VALUES
(1, 'Nimal Perera', '1999-10-02', 'pereranimal@gmail.co', 'nimal', 'abc123', 'abc123'),
(2, 'Kamal Perera', '2000-12-21', 'pererakamal@gmail.co', 'kamal', 'xyz@123', 'xyz@123'),
(3, 'Kamali', '2000-12-25', 'kamali@gmail.com', 'kamali', 'asd@123', 'asd@123');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `User_ID` varchar(5) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Phone_No` int(10) NOT NULL,
  `Age` int(11) NOT NULL,
  `House_Name` varchar(50) NOT NULL,
  `Postal_code` int(3) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `City` varchar(10) NOT NULL,
  `Image` blob NOT NULL,
  `Country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`User_ID`, `First_Name`, `Last_Name`, `Email`, `Password`, `DOB`, `Phone_No`, `Age`, `House_Name`, `Postal_code`, `Street`, `City`, `Image`, `Country`) VALUES
('User1', 'Sarah', 'Smith', 'smithsarah@gmail.com', 'User1212', '2000-01-03', 135647892, 23, 'Arin', 100, 'St. Johns Street', 'Atlanta', '', 'Sri Lanka'),
('User2', 'Chris', 'Bhang', 'bhangchris@345.com', 'User2345', '1997-10-03', 178965428, 26, 'Blacky', 200, 'Blane Street', 'LA', '', 'United States'),
('User3', 'John', 'Williams', 'williamsjohn@gmail.com', 'User4545', '1987-02-08', 786459834, 36, 'Kim', 300, 'Jadewood farms', 'California', '', 'Sri Lanka'),
('User4', 'Olivia', 'Cooper', 'cooperolivia@gmail.com', 'User4567', '1970-08-20', 786458329, 53, 'Rose', 400, 'Flower boulebard', 'Georgia', '', 'United States');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cn_system`
--
ALTER TABLE `cn_system`
  ADD PRIMARY KEY (`Drug_ID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diabetes`
--
ALTER TABLE `diabetes`
  ADD PRIMARY KEY (`Drug_ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doc_ID`);

--
-- Indexes for table `ent`
--
ALTER TABLE `ent`
  ADD PRIMARY KEY (`Drug_ID`);

--
-- Indexes for table `eye`
--
ALTER TABLE `eye`
  ADD PRIMARY KEY (`Drug_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `heart`
--
ALTER TABLE `heart`
  ADD PRIMARY KEY (`Drug_ID`);

--
-- Indexes for table `infections`
--
ALTER TABLE `infections`
  ADD PRIMARY KEY (`Drug_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`Manager_ID`);

--
-- Indexes for table `medicine_stock`
--
ALTER TABLE `medicine_stock`
  ADD PRIMARY KEY (`Drug_ID`);

--
-- Indexes for table `musle_and_joint`
--
ALTER TABLE `musle_and_joint`
  ADD PRIMARY KEY (`Drug_ID`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
