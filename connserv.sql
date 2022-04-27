-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 08:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connserv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `adminId` int(12) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_tb`
--

CREATE TABLE `appointment_tb` (
  `appointment_id` int(12) NOT NULL,
  `appointment_status` varchar(20) NOT NULL,
  `appointment_custom` varchar(255) NOT NULL,
  `appointment_title` varchar(255) NOT NULL,
  `service_price` int(11) NOT NULL,
  `approval` varchar(255) DEFAULT NULL,
  `business_id` int(12) NOT NULL,
  `rateGiven` int(11) DEFAULT NULL,
  `business_name` varchar(255) NOT NULL,
  `business_email` varchar(255) NOT NULL,
  `business_category` varchar(255) NOT NULL,
  `business_contact` varchar(255) NOT NULL,
  `client_id` int(12) NOT NULL,
  `client_firstname` varchar(255) NOT NULL,
  `client_lastname` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `min_date` date NOT NULL,
  `max_date` date NOT NULL,
  `hour_time` varchar(255) NOT NULL,
  `mins_time` varchar(255) NOT NULL,
  `hour_clock` varchar(2) NOT NULL,
  `service_note` varchar(10000) DEFAULT NULL,
  `mobile` varchar(12) NOT NULL,
  `landline` varchar(50) DEFAULT NULL,
  `houseNum` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `timedate_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_tb`
--

INSERT INTO `appointment_tb` (`appointment_id`, `appointment_status`, `appointment_custom`, `appointment_title`, `service_price`, `approval`, `business_id`, `rateGiven`, `business_name`, `business_email`, `business_category`, `business_contact`, `client_id`, `client_firstname`, `client_lastname`, `payment_method`, `min_date`, `max_date`, `hour_time`, `mins_time`, `hour_clock`, `service_note`, `mobile`, `landline`, `houseNum`, `street`, `barangay`, `city`, `timedate_stamp`) VALUES
(46, 'active', 'CON-2204234953-VI-1650646676-ULM', 'Espresso', 990, 'Approved', 39, NULL, 'Ithilien Coffee', 'ithilien@gmail.com', 'Bars and Cafes', '09676842595', 1020, 'Karl', 'Parole', 'Cash on Service (Default)', '2022-04-22', '2022-04-22', '1', '01', 'PM', 'Espresso machine and robusta coffee beans', '09219267790', 'N/A', '13', 'Pres Quezon', 'South Signal Village', 'Taguig City', '2022-04-26 17:46:55'),
(47, 'active', 'CON-2204233266-VI-1650647559-OLI', 'Facial liners', 500, 'Approved', 44, NULL, 'Meg Exclusives', 'megexclusives@gmail.com', 'Personal Care', '09676842595', 1028, 'Jennifer', 'Delos Santos', 'Cash on Service (Default)', '2022-04-22', '2022-04-22', '1', '01', 'PM', 'Supplies and restock', '09297125556', 'N/A', '120', 'Bonifacio', 'Central Bicutan', 'Taguig City', '2022-04-26 17:22:50'),
(48, 'active', 'CON-2204233663-VI-1650718811-HZR', 'Computer Hardware repair', 790, 'waiting', 40, NULL, 'CR38 Computer Solutions', 'cr38solutions@gmail.com', 'Computers', '09882852642', 1020, 'Karl', 'Parole', 'Cash on Service (Default)', '2022-04-23', '2022-04-23', '1', '01', 'PM', 'Mobo and GPu repair', '09676842595', 'N/A', '15', 'Pres Quezon', 'South Signal Village', 'Taguig City', '2022-04-26 17:46:55'),
(49, 'active', 'CON-2204243720-VI-1650741119-JGX', 'Espresso Machine', 990, 'Approved', 39, NULL, 'Ithilien Coffee', 'ithilien@gmail.com', 'Bars and Cafes', '09676842595', 1020, 'Karl', 'Parole', 'Cash on Service (Default)', '2022-04-23', '2022-04-23', '1', '01', 'PM', 'Mini espresso machine', '09676842595', 'N/A', '15', 'Pres Quezon', 'South Signal Village', 'Taguig City', '2022-04-26 17:46:55'),
(50, 'active', 'CON-2204244054-VI-1650741749-JBF', 'Espresso Machine', 990, 'Approved', 39, NULL, 'Ithilien Coffee', 'ithilien@gmail.com', 'Bars and Cafes', '09676842595', 1020, 'Karl', 'Parole', 'Cash on Service (Default)', '2022-04-23', '2022-04-23', '1', '01', 'PM', 'Lavazza jolie espresso machine repair', '09219267790', 'N/A', '15', 'Pres Quezon', 'South Signal Village', 'Taguig City', '2022-04-26 17:46:55'),
(51, 'active', 'CON-2204261746-VI-1650963679-CJR', 'Coffee Beans', 990, 'waiting', 39, NULL, 'Ithilien Coffee', 'ithilien@gmail.com', 'Bars and Cafes', '09676842595', 1020, 'Meg', 'Sta Rita', 'Cash on Service (Default)', '2022-04-26', '2022-04-26', '1', '01', 'PM', 'Arabica Coffee Beans Supplies', '09676842595', 'N/A', '71 E ', 'Pres Quezon', 'South Signal Village', 'Taguig City', '2022-04-26 17:46:55'),
(53, 'deactivated', 'CON-2204273682-VI-1650994253-LUA', 'Color Palette Tray', 300, 'waiting', 43, NULL, 'Palette', 'paletteph@gmail.com', 'Painting', '09487123651', 1020, 'Karl', 'Parole', 'Cash on Service (Default)', '2022-04-29', '2022-04-29', '1', '01', 'PM', 'Color Palette Tray', '09676842595', 'N/A', '71 E ', 'Mapagkawanggawa Street', 'South Daang Hari', 'Taguig City', '2022-04-26 17:58:08'),
(54, 'active', 'CON-2204275835-VI-1650994593-FGE', 'Coffee Liquor', 990, 'waiting', 39, NULL, 'Ithilien Coffee', 'ithilien@gmail.com', 'Bars and Cafes', '09676842595', 1018, 'Ken', 'Parole', 'Cash on Service (Default)', '2022-04-26', '2022-04-26', '1', '01', 'PM', 'Coffee Liquor', '09676842595', 'N/A', '71 E ', 'Mapagkawanggawa Street', 'Bagumbayan', 'Taguig City', '2022-04-26 17:44:48'),
(55, 'deactivated', 'CON-2204279813-VI-1650995831-MKC', 'Coffee Powder', 990, 'waiting', 39, NULL, 'Ithilien Coffee', 'ithilien@gmail.com', 'Bars and Cafes', '09676842595', 1029, 'Meg', 'Sta Rita', 'Cash on Service (Default)', '2022-04-26', '2022-04-26', '1', '01', 'PM', 'Coffee Powder', '09676842595', 'N/A', '71', 'Pres Quezon', 'Bagumbayan', 'Taguig City', '2022-04-26 17:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `business_tb`
--

CREATE TABLE `business_tb` (
  `business_id` int(50) NOT NULL,
  `business_status` varchar(20) NOT NULL,
  `datetime_created` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `rating` int(1) DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `business_email` varchar(50) DEFAULT NULL,
  `business_category` varchar(255) DEFAULT NULL,
  `business_subcategory` varchar(255) DEFAULT NULL,
  `business_description` varchar(7000) DEFAULT NULL,
  `terms_condition` varchar(4000) NOT NULL,
  `ownerId` int(12) NOT NULL,
  `unit_no` varchar(12) DEFAULT NULL,
  `business_building` varchar(50) DEFAULT NULL,
  `business_village` varchar(50) DEFAULT NULL,
  `business_barangay` varchar(50) DEFAULT NULL,
  `business_zip` varchar(12) DEFAULT NULL,
  `business_city` varchar(50) DEFAULT NULL,
  `business_landline` varchar(50) DEFAULT NULL,
  `business_mobile` varchar(50) DEFAULT NULL,
  `house_no` varchar(20) DEFAULT NULL,
  `business_street` varchar(50) DEFAULT NULL,
  `legalFileName` varchar(255) DEFAULT NULL,
  `idFileName` varchar(255) DEFAULT NULL,
  `business_icon` varchar(255) DEFAULT NULL,
  `business_map` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_tb`
--

INSERT INTO `business_tb` (`business_id`, `business_status`, `datetime_created`, `price`, `rating`, `business_name`, `business_email`, `business_category`, `business_subcategory`, `business_description`, `terms_condition`, `ownerId`, `unit_no`, `business_building`, `business_village`, `business_barangay`, `business_zip`, `business_city`, `business_landline`, `business_mobile`, `house_no`, `business_street`, `legalFileName`, `idFileName`, `business_icon`, `business_map`) VALUES
(39, 'active', '2022-04-21 2:16:40', '990', NULL, 'Ithilien Coffee', 'ithilien@gmail.com', 'Food And Beverages', 'Bars and Cafes', 'Coffee beans and machineries for coffee making and supplying', 'Sample Business Terms and Condition', 1020, '', '', '', 'South Signal Village', '1630', 'Taguig City', '', '09676842595', '4', 'Pres Quezon', '62604cdb155eb0.37077385.pdf', '62604cdb155f30.73138384.pdf', '62604cdb155f59.256956711020.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d287.096018128158!2d121.053935147275!3d14.502580325318888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cfe4cff46799%3A0x7c085f7e9eecbe71!2sAteh%20Wana%E2%80%99s%20Place!5e0!3m2!1sen!2sph!4v1650478086550!5m2!1sen!2sph\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(40, 'active', '2022-04-21 1:10:40', '790', NULL, 'CR38 Computer Solutions', 'cr38solutions@gmail.com', 'Electronics', 'Computers', 'Computer hardware and software solutions and installations with free cleaning and checkup', '', 1024, '', '', '', 'South Signal Village', '1630', 'Taguig City', '', '09882852642', 'Zone 4', '53 Navy Road', '6260087c601218.48759143.pdf', '6260087c601293.70221458.pdf', '6260087c6012b0.210500711024.png', 'https://goo.gl/maps/GDAT4jWrA1RVNcFa6'),
(41, 'active', '2022-04-20 2:00:40', '500', NULL, 'Bonheur Apparel Clothing', 'bonheurapparel@gmail.com', 'Shopping And Retail', 'Cooperative Buying', 'Cooperative buying and clothing supply', '', 1023, '', '', '', 'Central Bicutan', '1631', 'Taguig City', '', '09676842595', '44', 'Saliksik St.', '6260091adc3ec6.55151069.pdf', '', '6260091adc3fc1.925327471023.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d812.0768376646612!2d121.05049403365217!3d14.489843527616038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cf13f2815617%3A0x62cd153863a634cc!2sIndustrial%20Technology%20Development%20Institute!5e0!3m2!1sen!2sph!4v1650460848340!5m2!1sen!2sph\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(42, 'active', '2022-04-19 6:16:40', '1500', NULL, 'Spectra Tires', 'spectratires@gmail.com', 'Automotive', 'Repair and Maintenance', 'Repair and maintenance, and accessories ', '', 1025, '', '', '', 'South Signal Village', '1360', 'Taguig City', '', '09548728372', '15', 'Pres Quezon', '626009b9671cb5.68293896.pdf', '626009b9671d52.48770922.pdf', '626009b9671d72.648029901025.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482.83635029908265!2d121.05399020103745!3d14.502431070241846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cfe4cff46799%3A0x7c085f7e9eecbe71!2sAteh%20Wana%E2%80%99s%20Place!5e0!3m2!1sen!2sph!4v1650461103372!5m2!1sen!2sph\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(43, 'deactivated', '2022-04-21 2:21:51', '300', NULL, 'Palette', 'paletteph@gmail.com', 'Art And Culture', 'Painting', 'Art and Culture supplies for traditional art ', '', 1029, '', '', '', 'Pinagsama', '1632', 'Taguig City', '', '09487123651', '4', 'Tandang Sora', '62604fa5ba05e0.26886265.pdf', '62604fa5ba0673.89828565.pdf', '62604fa5ba06a2.828583751029.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d663.3208612969285!2d121.05373612712368!3d14.527088409626385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8c87a97ba9f%3A0x8586adad09b75793!2sJing%20Store!5e0!3m2!1sen!2sph!4v1650478836955!5m2!1sen!2sph\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(44, 'active', '2022-04-23 1:09:16', '500', NULL, 'Meg Exclusives', 'megexclusives@gmail.com', 'Beauty And Wellness', 'Personal Care', 'Health and beauty care for both women and men', '', 1028, '43', 'Exclusives Inc', '', 'South Signal Village', '1632', 'Taguig City', '18723581', '09676842595', '12', 'San Juan', '6262e13c70c784.40598010.pdf', '6262e13c70c824.07054215.pdf', '6262e13c70c847.239622841028.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d938.2047581546578!2d121.05142369028727!3d14.497028434978644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cf51f5a19009%3A0xe90df23474a4ce8d!2sGelbakes!5e0!3m2!1sen!2sph!4v1650647340427!5m2!1sen!2sph\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `file_tb`
--

CREATE TABLE `file_tb` (
  `file_id` int(12) NOT NULL,
  `tryId` varchar(255) DEFAULT NULL,
  `legalFileName` varchar(255) DEFAULT NULL,
  `idFileName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file_tb`
--

INSERT INTO `file_tb` (`file_id`, `tryId`, `legalFileName`, `idFileName`) VALUES
(4, NULL, '624b4f49d81693.99473830.pdf', NULL),
(5, NULL, '624b4fa3446d46.17371521.pdf', NULL),
(6, NULL, '624b4fef5401c0.95311164.pdf', NULL),
(7, NULL, '624b5028844404.75728252.pdf', NULL),
(8, NULL, '624b50742e5081.59717702.pdf', NULL),
(9, NULL, '624b512755b668.21719676.pdf', NULL),
(10, NULL, '624b51a21b73d6.38145294.pdf', NULL),
(11, NULL, '624b51dd46d572.81316501.pdf', NULL),
(12, NULL, '624b5241dd8cf0.26945534.pdf', NULL),
(13, NULL, '624b5261b73fb5.50456835.pdf', NULL),
(14, NULL, '624b52c7b49d61.75772570.pdf', NULL),
(15, NULL, '624b537be611d0.34558335.pdf', NULL),
(16, NULL, '624b53f37f4e05.09093576.pdf', NULL),
(17, NULL, '6253000c637201.08324290.pdf', NULL),
(18, NULL, 'profile.jpg', NULL),
(19, NULL, 'profile.jpg', NULL),
(20, NULL, 'profile.jpg', NULL),
(21, NULL, 'profile.jpg', NULL),
(22, NULL, 'profile.jpg', NULL),
(23, NULL, 'profile.jpg', NULL),
(24, NULL, 'profile.jpg', NULL),
(25, NULL, 'profile.jpg', NULL),
(26, NULL, 'profile.jpg', NULL),
(27, NULL, 'profile.jpg', NULL),
(28, NULL, 'profile.jpg', NULL),
(29, NULL, 'profile.jpg', NULL),
(30, NULL, 'profile.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sample_tb`
--

CREATE TABLE `sample_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `customIdentity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sample_tb`
--

INSERT INTO `sample_tb` (`id`, `username`, `customIdentity`) VALUES
(35, 'kael', ''),
(36, 'kael', '');

-- --------------------------------------------------------

--
-- Table structure for table `secondsample`
--

CREATE TABLE `secondsample` (
  `id` int(11) NOT NULL,
  `customId` varchar(50) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `secondsample`
--

INSERT INTO `secondsample` (`id`, `customId`, `userId`) VALUES
(20, 'CON-2204134517-VI-1649873759-YWY', 35);

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `user_identity` int(15) NOT NULL,
  `acc_status` varchar(20) NOT NULL,
  `user_firstname` varchar(50) DEFAULT NULL,
  `user_lastname` varchar(50) DEFAULT NULL,
  `user_uid` varchar(50) DEFAULT NULL,
  `user_birthdate` date DEFAULT NULL,
  `user_contactnum` varchar(12) DEFAULT NULL,
  `user_email` varchar(50) NOT NULL,
  `userPwd` varchar(50) NOT NULL,
  `user_housenum` varchar(50) DEFAULT NULL,
  `user_zip` varchar(50) DEFAULT NULL,
  `user_street` varchar(50) DEFAULT NULL,
  `user_barangay` varchar(50) DEFAULT NULL,
  `user_city` varchar(50) DEFAULT NULL,
  `user_district` varchar(50) DEFAULT NULL,
  `user_sex` varchar(10) DEFAULT NULL,
  `profileImg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`user_identity`, `acc_status`, `user_firstname`, `user_lastname`, `user_uid`, `user_birthdate`, `user_contactnum`, `user_email`, `userPwd`, `user_housenum`, `user_zip`, `user_street`, `user_barangay`, `user_city`, `user_district`, `user_sex`, `profileImg`) VALUES
(1018, 'active', 'Ken', 'Parole', NULL, '2004-09-29', '09676842595', 'kenparole@gmail.com', '123123', '71 E ', '1109', 'Mapagkawanggawa Street', 'Bagumbayan', 'Taguig City', 'District 1', 'Male', 'profile1018.jpg'),
(1020, 'active', 'Karl', 'Parole', NULL, '2009-12-30', '09676842595', 'parolemark@gmail.com', '123123123', '71 E ', '1109', 'Mapagkawanggawa Street', 'South Daang Hari', 'Taguig City', 'District 1', 'Male', 'profile1020.jpg'),
(1021, 'active', 'Marielle', 'De Vera', NULL, '2000-02-08', '09676842595', 'yel@gmail.com', '123123', '71 E ', '1109', 'Mapagkawanggawa Street', 'Bagumbayan', 'Taguig City', 'District 1', 'Female', 'profile1021.jpg'),
(1022, 'active', 'Bryan', 'Cabigting', NULL, '1999-12-19', '09297125556', 'cabigting@gmail.com', '123123', '88', '1360', 'Pres. Quezon', 'South Signal Village', 'Taguig City', 'District 2', 'Male', 'profile1022.jpg'),
(1023, 'active', 'Jennifer', 'Delos Santos', NULL, '1999-08-02', '09297125556', 'delossantos@gmail.com', '123123', '', '1360', 'Newgate', 'Pinagsama', 'Taguig City', 'District 2', 'Female', 'profile1023.jpg'),
(1024, 'active', 'James Darren', 'Alacar', NULL, NULL, NULL, 'jdalacar@gmail.com', '123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1025, 'active', 'Steven Kyle', 'Ballesteros', NULL, NULL, NULL, 'steven@gmail.com', '123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1026, 'active', 'Rose Angela', 'Villaflor', NULL, NULL, NULL, 'ravillaflor@gmail.com', '123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1027, 'active', 'Irish', 'Calzado', NULL, NULL, NULL, 'calzado@gmail.com', '123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1028, 'active', 'Meg', 'Sta Rita', NULL, '2001-11-25', '09284153160', 'megstarita@gmail.com', '123123', 'Blk 47, Lot 29, Prk-2', '1631', 'San Juan', 'Central Bicutan', 'Taguig City', 'District 1', 'Female', 'profile1028.jpg'),
(1029, 'deactivated', 'Kai', 'Fernandez', NULL, NULL, NULL, 'fernandez09@gmail.com', '123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1030, 'active', 'Eunice', 'Cabanting', NULL, NULL, NULL, 'cabanting@gmail.com', '123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1031, 'active', 'John Michael', 'Bondoy', NULL, NULL, NULL, 'jmbondoy@gmail.com', '123123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1032, 'active', 'Lorenz', 'Angeles', NULL, NULL, NULL, 'angeles@gmail.com', '123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `appointment_tb`
--
ALTER TABLE `appointment_tb`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `business_id` (`business_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `business_tb`
--
ALTER TABLE `business_tb`
  ADD PRIMARY KEY (`business_id`),
  ADD KEY `ownerId` (`ownerId`);

--
-- Indexes for table `file_tb`
--
ALTER TABLE `file_tb`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `sample_tb`
--
ALTER TABLE `sample_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secondsample`
--
ALTER TABLE `secondsample`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_identity`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `adminId` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointment_tb`
--
ALTER TABLE `appointment_tb`
  MODIFY `appointment_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `business_tb`
--
ALTER TABLE `business_tb`
  MODIFY `business_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `file_tb`
--
ALTER TABLE `file_tb`
  MODIFY `file_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sample_tb`
--
ALTER TABLE `sample_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `secondsample`
--
ALTER TABLE `secondsample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_identity` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1033;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment_tb`
--
ALTER TABLE `appointment_tb`
  ADD CONSTRAINT `appointment_tb_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `business_tb` (`business_id`),
  ADD CONSTRAINT `appointment_tb_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `user_tb` (`user_identity`);

--
-- Constraints for table `business_tb`
--
ALTER TABLE `business_tb`
  ADD CONSTRAINT `business_tb_ibfk_1` FOREIGN KEY (`ownerId`) REFERENCES `user_tb` (`user_identity`);

--
-- Constraints for table `secondsample`
--
ALTER TABLE `secondsample`
  ADD CONSTRAINT `secondsample_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `sample_tb` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
