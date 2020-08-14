-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 08:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `addhospital`
--

CREATE TABLE `addhospital` (
  `HospitalName` varchar(20) NOT NULL,
  `DirectorName` text NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Country` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `PostalCode` int(7) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `PhoneNo` int(10) NOT NULL,
  `MobileNo` int(10) NOT NULL,
  `Fax` int(10) NOT NULL,
  `URL` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addhospital`
--

INSERT INTO `addhospital` (`HospitalName`, `DirectorName`, `Address`, `Country`, `City`, `State`, `PostalCode`, `Email`, `PhoneNo`, `MobileNo`, `Fax`, `URL`) VALUES
('Sunayan Eye Care', 'Daniel Porter', '12,Colony name, city name', 'India', 'Jaipur', 'Rajasthan', 91403, 'danielporter@example.com', 888, 818, 818, 'https://www.SunayaneyeCare.com');

-- --------------------------------------------------------

--
-- Table structure for table `addpatient`
--

CREATE TABLE `addpatient` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `atype` text NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Patient_name` varchar(255) DEFAULT NULL,
  `PatientId` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `Height` varchar(255) DEFAULT NULL,
  `Weight` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `postalcode` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `Reason` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addpatient`
--

INSERT INTO `addpatient` (`id`, `atype`, `Age`, `Patient_name`, `PatientId`, `email`, `dob`, `gender`, `Height`, `Weight`, `Address`, `country`, `city`, `state`, `postalcode`, `phone`, `date`, `Reason`, `note`, `status`, `created_at`) VALUES
(000032, 'Fresh', '21', 'Hariom Malviya', 'SIC-2020-P01', 'gurjarhariom3114@gmail.com', '09/07/2020', 'Male', '5.2', '48', 'yashwant plaza', 'india', 'phagwara', 'punjab', '461228', '9685640396', NULL, 'CheckUp', 'helloo its first time', 'Active', '2020-07-19 16:17:30'),
(000033, 'Fresh', '32', 'Akash Gupta', 'SIC-2020-P02', 'Akash123@gmail.com', '16/07/1999', 'Male', '5.2', '48', 'Harda Madhy Pradesh', 'india', 'Harda', 'mp', '461339', '1234567899', NULL, 'Ratina', 'second entry', 'Active', '2020-07-19 16:27:06'),
(000039, 'Fresh', '32', 'Aditya gupta', 'SIC-2020-P03', 'gurjarharsh3114@gmail.com', '25/07/1999', 'Male', '6.1', '48', 'oddisa', 'india', 'bhubneswar', 'bb', '461229', '1122334455', NULL, 'Cornea', 'wellcome buddy.', 'Active', '2020-07-23 14:09:57'),
(000040, 'Fresh', '21', 'nakul sharma', 'SIC-2020-P04', 'gurjarhariom3114@gmail.com', '05/08/1999', 'Male', '5.2', '48', 'jaipur', 'india', 'jaipur', 'rajasthan', '461228', '9685640396', NULL, 'CheckUp', 'wellcome in month of august', 'Active', '2020-08-05 06:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `adduser`
--

CREATE TABLE `adduser` (
  `id` int(11) NOT NULL,
  `Occupation` varchar(255) NOT NULL,
  `ProfileID` varchar(200) NOT NULL,
  `EmployeeID` varchar(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `Age` int(10) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `alt_email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `Join_date` varchar(200) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adduser`
--

INSERT INTO `adduser` (`id`, `Occupation`, `ProfileID`, `EmployeeID`, `fname`, `lname`, `username`, `email`, `password`, `dob`, `Age`, `gender`, `alt_email`, `phone`, `Join_date`, `status`) VALUES
(1, 'Receptionist', 'Pro1', 'Emp1', 'Akash', 'sharma', 'Akash', 'Akash123@gmail.com', 'akash@123', '02 may 1998', 23, 'Male', 'akki@gmail.com', '0987654321', '07/07/2020', 'Active'),
(2, 'Doctor', 'Pro2', 'Emp2', 'Ankur', 'Sodhi', 'Ankur', 'Ankursodhi123@gmail.com', 'Ankur@321', '05 April 1999', 24, 'Male', 'Ankur23@gmail.com', '1234567899', '07/04/2018', 'Inactive'),
(3, 'Doctor', 'Pro3', 'Emp3', 'jaishree', 'jain', 'Dr. jaishree', 'jaiz123@gmail.com', 'jaiz@123', '03/05/1996', 32, 'Female', 'panda@gmail.com', '1122334455', '07/07/2006', 'Active'),
(4, 'Doctor', 'SIC-2020-Pro04', 'SIC-2020-EMP04', 'aditi', 'sharma', 'adii', 'aditi@gmail.com', 'adi@123', '19/07/2020', 22, 'Female', 'panda@gmail.com', '1234567899', '05/07/2020', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `appclone`
--

CREATE TABLE `appclone` (
  `id` int(10) NOT NULL,
  `atype` varchar(200) NOT NULL,
  `PatientId` varchar(255) NOT NULL,
  `AppointmentId` varchar(200) NOT NULL,
  `Patient_name` varchar(255) NOT NULL,
  `Age` int(5) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `Height` int(20) NOT NULL,
  `Weight` int(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Doctor_name` varchar(255) NOT NULL,
  `Reason` varchar(255) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appclone`
--

INSERT INTO `appclone` (`id`, `atype`, `PatientId`, `AppointmentId`, `Patient_name`, `Age`, `email`, `phone`, `dob`, `gender`, `Height`, `Weight`, `Address`, `Doctor_name`, `Reason`, `date`, `time`, `note`, `status`, `created_at`) VALUES
(1, 'Fresh', 'SIC-P', 'SIC-A', 'Hariom', 21, 'gurjarhariom3114@gmail.com', '9685640396', '05 April 1999', 'Male', 0, 0, '', 'Dr Sunayan', 'CheckUp', '02/07/2020', '5:35 PM', 'first patient appointment details it is.', 'Active', '2020-07-05 04:32:37'),
(2, 'Revisit', 'SIC-P', 'SIC-A', 'Harsh', 21, 'gurjarharsh3114@gmail.com', '9685640396', '02 may 1998', 'Male', 0, 0, '', 'Dr Sunayan2.0', 'Surgery', '03/07/2020', '1:37 PM', 'i am not supposed to tell you.', 'Inactive', '2020-07-05 04:32:37'),
(3, 'Fresh', 'SIC-P', 'SIC-A', 'Akash', 20, 'Akash123@gmail.com', '1122334455', '03/05/1996', 'Male', 0, 0, '', 'Dr Sunayan', 'Ratina', '06/07/2020', '5:55 PM', 'visiting first time.', 'Active', '2020-07-05 04:32:37'),
(4, 'Revisit', 'SIC-P', 'SIC-A', 'Priti', 23, 'priti12@gmail.com', '1234567890', '05/07/1996', 'Female', 0, 0, '', 'Dr Sunayan2.0', 'Cornea', '17/07/2020', '12:40 PM', 'heyy....have a good day.', 'Inactive', '2020-07-05 04:32:37'),
(5, 'Fresh', 'SIC-P', 'SIC-A', 'Anukriti', 24, 'Anu@gmail.com', '9685640396', '02 may 1998', 'Female', 0, 0, '', 'Dr Sunayan', 'CheckUp', '22/07/2020', '4:26 PM', 'eye checkup.', 'Active', '2020-07-05 04:32:37'),
(7, 'Fresh', 'SIC-P', 'SIC-A', 'david warner', 42, 'david@gmail.com', '0987654321', '08/07/2020', 'Male', 6, 65, 'Goa', 'Dr. Sunayan', 'Surgery', '10/07/2020', '1:28 PM', 'medicine description', 'Active', '2020-07-07 14:28:44'),
(0, 'Fresh', 'SIC-P', 'SIC-A', 'Aditya gupta', 21, 'gurjarharsh3114@gmail.com', '0987654321', '05/04/1997', 'Male', 5, 48, 'jaipur', 'Dr. Sunayan', 'CheckUp', '15/07/2020', '3:45 PM', 'wellcome to sunayaneyecare', 'Active', '2020-07-12 20:16:15'),
(0, 'Revisit', 'SIC-P10', 'SIC-A', 'Aditya gupta', 21, 'gurjarharsh3114@gmail.com', '0987654321', '05/04/1997', 'Male', 5, 48, 'jaipur', 'Dr. Sunayan', 'Ratina', '19/07/2020', '1:31 PM', 'visiting again', 'Active', '2020-07-18 20:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(10) NOT NULL,
  `atype` varchar(200) NOT NULL,
  `PatientId` varchar(255) NOT NULL,
  `AppointmentId` varchar(200) NOT NULL,
  `Patient_name` varchar(255) NOT NULL,
  `Age` int(5) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `Height` int(20) NOT NULL,
  `Weight` int(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `postalcode` varchar(100) NOT NULL,
  `Doctor_name` varchar(255) NOT NULL,
  `Reason` varchar(255) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `atype`, `PatientId`, `AppointmentId`, `Patient_name`, `Age`, `email`, `phone`, `dob`, `gender`, `Height`, `Weight`, `Address`, `country`, `city`, `state`, `postalcode`, `Doctor_name`, `Reason`, `date`, `time`, `note`, `status`, `created_at`) VALUES
(12, 'Fresh', 'SIC-2020-P01', 'SIC-2020-A01', 'Hariom Malviya', 21, 'gurjarhariom3114@gmail.com', '9685640396', '09/07/2020', 'Male', 5, 48, 'yashwant plaza', 'india', 'phagwara', 'punjab', '461228', 'Dr. Sunayan', 'CheckUp', '19/07/2020', '1:44 PM', 'helloo its first time', 'Active', '2020-07-19 16:14:40'),
(14, 'Fresh', 'SIC-2020-P02', 'SIC-2020-A02', 'Akash Gupta', 32, 'Akash123@gmail.com', '1234567899', '16/07/1999', 'Male', 5, 48, 'Harda Madhy Pradesh', 'india', 'Harda', 'mp', '461339', 'Dr. Sunyan2.0', 'Ratina', '22/07/2020', '3:56 PM', 'second entry', 'Active', '2020-07-19 16:27:06'),
(17, 'Revisit', 'SIC-2020-P01', 'SIC-2020-A03', 'Hariom Malviya', 21, 'gurjarhariom3114@gmail.com', '9685640396', '09/07/2020', 'Male', 5, 48, 'yashwant plaza', 'india', 'phagwara', 'punjab', '461228', 'Dr. Sunayan', 'Surgery', '23/07/2020', '11:19 AM', 'second time visiting', 'Active', '2020-07-19 17:49:25'),
(19, 'Fresh', 'SIC-2020-P03', 'SIC-2020-A04', 'Aditya gupta', 32, 'gurjarharsh3114@gmail.com', '1122334455', '25/07/1999', 'Male', 6, 48, 'oddisa', 'india', 'bhubneswar', 'bb', '461229', 'Dr. Sunyan2.0', 'Cornea', '29/07/2020', '3:39 PM', 'wellcome buddy.', 'Active', '2020-07-23 14:09:57'),
(20, 'Revisit', 'SIC-2020-P02', 'SIC-2020-A05', 'Akash Gupta', 32, 'Akash123@gmail.com', '1234567899', '16/07/1999', 'Male', 5, 48, 'Harda Madhy Pradesh', 'india', 'Harda', 'mp', '461339', 'Select', 'Select', '31/07/2020', '6:41 PM', 'good to see you again akash.', 'Active', '2020-07-23 14:11:47'),
(21, 'Fresh', 'SIC-2020-P04', 'SIC-2020-A06', 'nakul sharma', 21, 'gurjarhariom3114@gmail.com', '9685640396', '05/08/1999', 'Male', 5, 48, 'jaipur', 'india', 'jaipur', 'rajasthan', '461228', 'Dr. Sunayan', 'CheckUp', '13/08/2020', '11:00 AM', 'wellcome in month of august', 'Active', '2020-08-05 06:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `book_appmt`
--

CREATE TABLE `book_appmt` (
  `id` int(9) NOT NULL,
  `PatientId` varchar(100) NOT NULL,
  `AppointmentId` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_appmt`
--

INSERT INTO `book_appmt` (`id`, `PatientId`, `AppointmentId`, `name`, `Date`, `time`, `email`) VALUES
(1, 'SIC-2020-HP02', 'SIC-2020-HA01', 'Prayas Mishra', '2020-09-08', '14:14:00.000000', 'gurjarharsh3114@gmail.com'),
(3, 'SIC-2020-HP03', 'SIC-2020-HA02', 'ohm malviya', '2020-07-31', '17:00', 'gurjarhariom3114@gmail.com'),
(4, 'SIC-2020-HP03', 'SIC-2020-HA03', 'Aditya gupta', '2020-12-09', '18:14', 'gurjarhariom3114@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cevent`
--

CREATE TABLE `cevent` (
  `id` int(11) NOT NULL,
  `event_name` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cevent`
--

INSERT INTO `cevent` (`id`, `event_name`, `date`) VALUES
(1, 'press meet', '29/06/2020');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` bigint(20) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `email_verified_at`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Hariom malviya', 'gurjarharsh3114@gmail.com', NULL, 9340012366, 'hey..its hariom. just want to say hello to you.', '2020-06-29 16:13:25', '2020-06-29 16:13:25'),
(2, 'Hariom malviya', 'gurjarhariom3114@gmail.com', NULL, 9685640396, 'heyy its me your brother. have a good day.', '2020-07-02 04:28:43', '2020-07-02 04:28:43'),
(3, 'om', 'gurjarhariom3114@gmail.com', NULL, 987654321, 'hello its om bro', '2020-07-07 15:26:01', '2020-07-07 15:26:01'),
(4, 'Hariom malviya', 'gurjarharsh3114@gmail.com', NULL, 9685640396, 'heyy bri its hariom you have done a great job. keep it up.', '2020-07-23 15:11:44', '2020-07-23 15:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_table`
--

CREATE TABLE `doctor_table` (
  `id` int(11) NOT NULL,
  `Doctor_img` longblob,
  `First_name` varchar(15) NOT NULL,
  `Last_name` varchar(15) NOT NULL,
  `Birth_date` varchar(20) NOT NULL,
  `Gender` text NOT NULL,
  `Address` varchar(15) DEFAULT NULL,
  `Email` varchar(20) NOT NULL,
  `Country` text NOT NULL,
  `State` text NOT NULL,
  `Pincode` int(7) NOT NULL,
  `Contact_no` int(10) NOT NULL,
  `Education_institution` varchar(20) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Start_date` varchar(20) NOT NULL,
  `Complete_date` varchar(20) NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `Grade` varchar(5) NOT NULL,
  `Company_name` varchar(30) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Job_position` varchar(30) NOT NULL,
  `Period_from` varchar(20) NOT NULL,
  `Period_to` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_table`
--

INSERT INTO `doctor_table` (`id`, `Doctor_img`, `First_name`, `Last_name`, `Birth_date`, `Gender`, `Address`, `Email`, `Country`, `State`, `Pincode`, `Contact_no`, `Education_institution`, `Subject`, `Start_date`, `Complete_date`, `Degree`, `Grade`, `Company_name`, `Location`, `Job_position`, `Period_from`, `Period_to`, `created_at`) VALUES
(1, 0x494d475f32303230303331365f3030343331345f3639392e6a7067, 'Ankur', 'Sodhi', '05/06/1985', 'male', '4487 Snowbird L', 'Ankursodhi123@gmail.', 'United States', 'New York', 10523, 631, 'Oxford University', 'MBBS', '01/06/2002', '31/05/2006', 'MBBS', 'Grade', 'Madicare Hospital', 'United States', 'MD - Ophthalmology', '01/07/2007', '08/06/2018', NULL),
(2, 0x313538323236323330383435332e6a7067, 'Harsh', 'Malviya', '05/06/1985', 'male', '4487 Snowbird L', 'Harsh3114@gmail.com', 'United States', 'New York', 10523, 631, 'Oxford University', 'Computer Science', '01/06/2002', '31/05/2006', 'BE Computer Science', 'Grade', 'Digital Devlopment Inc', 'United States', 'Web Developer', '01/07/2007', '08/06/2018', NULL),
(3, 0x313538323236323330383435332e6a7067, 'John', 'Doe', '05/06/1985', 'male', '4487 Snowbird L', 'email@gmail.com', 'United States', 'New York', 10523, 631, 'Oxford University', 'Computer Science', '01/06/2002', '31/05/2006', 'BE Computer Science', 'Grade', 'Digital Devlopment Inc', 'United States', 'Web Developer', '01/07/2007', '08/06/2018', NULL),
(4, 0x313538323236323330383435332e6a7067, 'John', 'Doe', '05/06/1985', 'male', '4487 Snowbird L', 'email1234@gmail.com', 'United States', 'New York', 10523, 631, 'Oxford University', 'Computer Science', '01/06/2002', '31/05/2006', 'BE Computer Science', 'Grade', 'Digital Devlopment Inc', 'United States', 'Web Developer', '01/07/2007', '08/06/2018', '2020-07-01 14:34:45'),
(5, 0x68617273682e6a7067, 'Harsh', 'Ohm', '05/06/1985', 'male', '4487 Snowbird L', 'Harsh1234@gmail.com', 'United States', 'New York', 10523, 2147483647, 'Oxford University', 'MBBS', '01/06/2002', '31/05/2006', 'MBBS', 'Grade', 'Madicare Hospital', 'United States', 'MD - Ophthalmology', '01/07/2007', '08/06/2018', '2020-07-01 21:24:24'),
(6, 0x313538323236323330383435332e6a7067, 'John', 'Doe', '05/06/1985', 'male', '4487 Snowbird L', 'email@gmail.com', 'United States', 'New York', 10523, 631, 'Oxford University', 'Computer Science', '01/06/2002', '31/05/2006', 'BE Computer Science', 'Grade', 'Digital Devlopment Inc', 'United States', 'Web Developer', '01/07/2007', '08/06/2018', '2020-07-06 14:48:34'),
(7, 0x313538323236323330383435332e6a7067, 'Sunayan', 'Sharma', '05/06/1985', 'male', '4487 Snowbird L', 'doctor123@gmail.com', 'United States', 'New York', 10523, 631, 'Oxford University', 'Computer Science', '01/06/2002', '31/05/2006', 'BE Computer Science', 'Grade', 'Digital Devlopment Inc', 'United States', 'Web Developer', '01/07/2007', '08/06/2018', '2020-07-08 12:33:49'),
(8, 0x313538323236323330383435332e6a7067, 'John', 'Doe', '05/06/1985', 'male', '4487 Snowbird L', 'email@gmail.com', 'United States', 'New York', 10523, 631, 'Oxford University', 'Computer Science', '01/06/2002', '31/05/2006', 'BE Computer Science', 'Grade', 'Digital Devlopment Inc', 'United States', 'Web Developer', '01/07/2007', '08/06/2018', '2020-07-08 13:14:37'),
(9, 0x313538323236323330383435332e6a7067, 'Sunayan', 'Sharma', '05/06/1985', 'male', '4487 Snowbird L', 'email1234@gmail.com', 'United States', 'New York', 10523, 631, 'Oxford University', 'MBBS', '01/06/2002', '31/05/2006', 'MBBS', 'Grade', 'Madicare Hospital', 'United States', 'MD - Ophthalmology', '01/07/2007', '08/06/2018', '2020-07-08 13:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `dschedule`
--

CREATE TABLE `dschedule` (
  `id` int(9) NOT NULL,
  `From_date` varchar(200) NOT NULL,
  `To_date` varchar(200) NOT NULL,
  `Doctor_name` text NOT NULL,
  `Days` varchar(200) NOT NULL,
  `Start_time` varchar(200) NOT NULL,
  `End_time` varchar(200) NOT NULL,
  `Note` varchar(200) NOT NULL,
  `status` text NOT NULL,
  `Department` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dschedule`
--

INSERT INTO `dschedule` (`id`, `From_date`, `To_date`, `Doctor_name`, `Days`, `Start_time`, `End_time`, `Note`, `status`, `Department`) VALUES
(1, '14/07/2020', '20/07/2020', 'Doctor Name 1', '[\"Monday\",\"Wednesday\",\"Thursday\"]', '11:47 AM', '5:00 PM', 'good to go.', 'Active', 'Cardiology'),
(2, '15/07/2020', '26/07/2020', 'Doctor Name 1', '[\"Monday\",\"Tuesday\",\"Thursday\"]', '12:25 PM', '4:25 PM', 'Full day at work', 'Active', 'Eye'),
(3, '20/07/2020', '31/07/2020', 'Doctor Name 1', '[\"Monday\",\"Wednesday\",\"Thursday\"]', '10:45 AM', '6:45 PM', 'this is my schedule.', 'Active', 'Eye');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(9) NOT NULL,
  `Invoice_Id` varchar(100) NOT NULL,
  `Patient_name` varchar(200) NOT NULL,
  `PatientId` varchar(20) NOT NULL,
  `AppointmentId` varchar(100) NOT NULL,
  `Department` text NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Tax` text NOT NULL,
  `Patient_address` varchar(25) NOT NULL,
  `Billing_address` varchar(20) NOT NULL,
  `Invoice_date` varchar(100) NOT NULL,
  `Due_date` varchar(100) NOT NULL,
  `Item` varchar(25) DEFAULT NULL,
  `Description` text,
  `Unit_cost` int(4) DEFAULT NULL,
  `Qty` int(4) DEFAULT NULL,
  `Amount` int(6) DEFAULT NULL,
  `Tax_amount` int(4) DEFAULT NULL,
  `Discount` int(4) DEFAULT NULL,
  `Grand_total` int(4) DEFAULT NULL,
  `Other_info` int(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `Invoice_Id`, `Patient_name`, `PatientId`, `AppointmentId`, `Department`, `Email`, `Tax`, `Patient_address`, `Billing_address`, `Invoice_date`, `Due_date`, `Item`, `Description`, `Unit_cost`, `Qty`, `Amount`, `Tax_amount`, `Discount`, `Grand_total`, `Other_info`, `created_at`) VALUES
(1, '', '', 'SIC-P1', '', 'Eyes Specialist', 'gurjarhariom3114@gmail.co', 'GST', 'oddisa', 'oddisa', '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL, NULL, 10, 0, 157, 0, '2020-07-17 10:34:12'),
(2, '#SIC-INV', 'PK', 'SIC-P1', '', 'Eyes Specialist', 'pk@gmail.com', 'GST', 'oddisa', 'oddisa', '0000-00-00', '0000-00-00', 'medicine', 'morning and night', 200, 1, 200, 100, 0, 447, 0, '2020-07-17 18:34:47'),
(3, '#SIC-INV', 'Harsh', 'SIC-P12', '', 'Eyes Specialist', 'gurjarhariom3114@gmail.co', 'GST', 'harda', 'harda', '18/07/2020', '21/07/2020', NULL, NULL, NULL, NULL, NULL, 112, 12, 760, 0, '2020-07-17 18:54:48'),
(4, '#SIC-INV', 'pk2', 'SIC-P4', '', 'Neurology', 'pk2@gmail.com', 'GST', 'darzling', 'darzling', '19/07/2020', '29/07/2020', NULL, NULL, NULL, NULL, NULL, 100, 0, 200, 0, '2020-07-18 18:48:18'),
(5, 'SIC-2020-#INV5', 'tanuj bhatt', 'SIC-P22', '', 'Neurology', 'tanuj@gmail.com', 'GST', 'uk', 'uk', '22/07/2020', '19/07/2020', NULL, NULL, NULL, NULL, NULL, 100, 0, 247, 0, '2020-07-22 10:51:32'),
(6, 'SIC-2020-#INV06', 'david warner', 'SIC-P', '', 'Select Department', 'david@gmail.com', 'VAT', 'v. dc', 'v. dc', '13/07/2020', '31/07/2020', NULL, NULL, NULL, NULL, NULL, 100, 0, 200, 0, '2020-07-22 10:55:41'),
(7, 'SIC-2020-#INV07', 'Akash Gupta', 'SIC-2020-P02', '', 'Select Department', 'Akash123@gmail.com', 'Select Tax', 'Harda Madhy Pradesh,india', 'Harda Madhy Pradesh,', '24/07/2020', '30/07/2020', NULL, NULL, NULL, NULL, NULL, 100, 0, 500, 0, '2020-07-23 19:28:04'),
(9, 'SIC-2020-#INV08', 'Hariom Malviya', 'SIC-2020-P01', 'SIC-2020-A01', 'Eyes Specialist', 'gurjarhariom3114@gmail.co', 'GST', 'yashwant plaza,india,phag', 'yashwant plaza,india', '23/07/2020', '28/07/2020', NULL, NULL, NULL, NULL, NULL, 200, 0, 600, 0, '2020-07-23 20:12:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `ID` varchar(5) DEFAULT NULL,
  `NAME` varchar(15) DEFAULT NULL,
  `DESCP` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user2s`
--

CREATE TABLE `user2s` (
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user2s`
--

INSERT INTO `user2s` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(NULL, 'hariom', 'gurjarhariom3114@gmail.com', NULL, 'Harsh@123', NULL, NULL, NULL),
(NULL, 'arav kanwar', 'arav2@gmail.com', NULL, 'arav@123', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'om', 'gurjarharsh3114@gmail.com', NULL, '$2y$10$d3ExCiTt2sglyYiJqjI5xOYxKQDKhhzgctOHWCU0x2GCfn631pN5.', NULL, '2020-06-27 03:53:55', '2020-06-27 03:53:55'),
(2, 'hariom', 'gurjarhariom3114@gmail.com', NULL, '$2y$10$lBGzHOp9imUzlOm9c2pAW..hksJwrHmr.rblSsseAg0VUj0Ol3O72', NULL, '2020-06-27 03:58:08', '2020-06-27 03:58:08'),
(3, 'arav', 'arav@gmail.com', NULL, '$2y$10$mNFaTLJu306y9Pp/UmkKo.WRE8dTKQslOQmobb60HmsP5vwlI/c26', NULL, '2020-06-27 11:04:59', '2020-06-27 11:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `users_appmt`
--

CREATE TABLE `users_appmt` (
  `id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `sex` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_appmt`
--

INSERT INTO `users_appmt` (`id`, `name`, `dob`, `sex`, `email`, `phone`, `password`) VALUES
(1, 'prayas mishra', '1998-07-03', 'male', 'gurjarharsh3114@gmail.com', '9685640396', 'Harsh@123'),
(2, 'ohm malviya', '1999-07-02', 'male', 'gurjarhariom3114@gmail.com', '1234567899', 'om@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpatient`
--
ALTER TABLE `addpatient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adduser`
--
ALTER TABLE `adduser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_appmt`
--
ALTER TABLE `book_appmt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cevent`
--
ALTER TABLE `cevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_table`
--
ALTER TABLE `doctor_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dschedule`
--
ALTER TABLE `dschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_appmt`
--
ALTER TABLE `users_appmt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addpatient`
--
ALTER TABLE `addpatient`
  MODIFY `id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `adduser`
--
ALTER TABLE `adduser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `book_appmt`
--
ALTER TABLE `book_appmt`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cevent`
--
ALTER TABLE `cevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_table`
--
ALTER TABLE `doctor_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dschedule`
--
ALTER TABLE `dschedule`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_appmt`
--
ALTER TABLE `users_appmt`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
