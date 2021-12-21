-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 23, 2021 at 02:57 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nmcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `2yeartest`
--

CREATE TABLE `2yeartest` (
  `id` int(11) NOT NULL,
  `test_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `2yeartest`
--

INSERT INTO `2yeartest` (`id`, `test_name`) VALUES
(1, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `5yeartest`
--

CREATE TABLE `5yeartest` (
  `id` int(11) NOT NULL,
  `test_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `5yeartest`
--

INSERT INTO `5yeartest` (`id`, `test_name`) VALUES
(1, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `6monthtest`
--

CREATE TABLE `6monthtest` (
  `id` int(11) NOT NULL,
  `test_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `6monthtest`
--

INSERT INTO `6monthtest` (`id`, `test_name`) VALUES
(1, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `6weektest`
--

CREATE TABLE `6weektest` (
  `id` int(11) NOT NULL,
  `test_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `6weektest`
--

INSERT INTO `6weektest` (`id`, `test_name`) VALUES
(1, 'OPV'),
(2, 'HEP-B'),
(3, 'PCV'),
(4, 'PCG'),
(6, ''),
(7, 'b'),
(8, 'a'),
(9, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `9monthtest`
--

CREATE TABLE `9monthtest` (
  `id` int(11) NOT NULL,
  `test_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `9monthtest`
--

INSERT INTO `9monthtest` (`id`, `test_name`) VALUES
(1, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `10weektest`
--

CREATE TABLE `10weektest` (
  `id` int(11) NOT NULL,
  `test_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `10weektest`
--

INSERT INTO `10weektest` (`id`, `test_name`) VALUES
(1, 'OPV'),
(2, 'HEP-B'),
(3, 'PCV'),
(4, 'PCG');

-- --------------------------------------------------------

--
-- Table structure for table `10yeartest`
--

CREATE TABLE `10yeartest` (
  `id` int(11) NOT NULL,
  `test_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `10yeartest`
--

INSERT INTO `10yeartest` (`id`, `test_name`) VALUES
(1, 'a'),
(2, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `12monthtest`
--

CREATE TABLE `12monthtest` (
  `id` int(11) NOT NULL,
  `test_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `12monthtest`
--

INSERT INTO `12monthtest` (`id`, `test_name`) VALUES
(1, 'a'),
(2, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `14weektest`
--

CREATE TABLE `14weektest` (
  `id` int(11) NOT NULL,
  `test_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `14weektest`
--

INSERT INTO `14weektest` (`id`, `test_name`) VALUES
(1, 'OPV'),
(2, 'HEP-B'),
(3, 'PCV'),
(4, 'PCG');

-- --------------------------------------------------------

--
-- Table structure for table `15monthtest`
--

CREATE TABLE `15monthtest` (
  `id` int(11) NOT NULL,
  `test_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `15monthtest`
--

INSERT INTO `15monthtest` (`id`, `test_name`) VALUES
(1, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `16monthtest`
--

CREATE TABLE `16monthtest` (
  `id` int(11) NOT NULL,
  `test_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `16monthtest`
--

INSERT INTO `16monthtest` (`id`, `test_name`) VALUES
(1, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `18monthtest`
--

CREATE TABLE `18monthtest` (
  `id` int(11) NOT NULL,
  `test_name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `18monthtest`
--

INSERT INTO `18monthtest` (`id`, `test_name`) VALUES
(1, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `UserID` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserID`, `Password`) VALUES
('nmcs', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `birthtest`
--

CREATE TABLE `birthtest` (
  `id` int(11) NOT NULL,
  `test_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `birthtest`
--

INSERT INTO `birthtest` (`id`, `test_name`) VALUES
(1, 'OPV'),
(2, 'HEP-B'),
(3, 'PCV'),
(4, 'PCG'),
(10, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `umrno` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `RegistrationDate` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `babyname` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `DateOfDelivery` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Gender` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `MotherName` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FatherName` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Age` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deliverystatus` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Weight` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `MobileNumber` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Remarks` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doctor_name` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deliverylocation` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `IPD` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ward` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateOfAdmission` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remarkipd` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateOfDischarge` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `diagnosis` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `dischargetype` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `dischargereason` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `birthvaccine` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birthtestremark` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birthtestdate` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sixweekvaccine` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sixweektestremark` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sixweektestdate` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tenweekvaccine` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tenweektestremark` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tenweektestdate` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fourteenweekvaccine` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fourteenweektestremark` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fourteenweektestdate` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sixmonthvaccine` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sixmonthtestremark` varchar(70) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sixmonthtestdate` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ninemonthvaccine` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ninemonthtestremark` varchar(70) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ninemonthtestdate` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `twelvemonthvaccine` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `twelvemonthtestremark` varchar(70) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `twelvemonthtestdate` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fifteenmonthvaccine` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fifteenmonthtestremark` varchar(70) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fifteenmonthtestdate` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sixteenmonthvaccine` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sixteenmonthtestremark` varchar(70) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sixteenmonthtestdate` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `eightteenmonthvaccine` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `eightteenmonthtestremark` varchar(70) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `eightteenmonthtestdate` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `twoyearvaccine` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `twoyeartestremark` varchar(70) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `twoyeartestdate` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fiveyearvaccine` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fiveyeartestremark` varchar(70) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fiveyeartestdate` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tenyearvaccine` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tenyeartestremark` varchar(70) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tenyeartestdate` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`umrno`, `RegistrationDate`, `babyname`, `DateOfDelivery`, `Gender`, `MotherName`, `FatherName`, `Age`, `deliverystatus`, `Weight`, `MobileNumber`, `Remarks`, `doctor_name`, `deliverylocation`, `IPD`, `ward`, `DateOfAdmission`, `remarkipd`, `DateOfDischarge`, `diagnosis`, `dischargetype`, `dischargereason`, `birthvaccine`, `birthtestremark`, `birthtestdate`, `sixweekvaccine`, `sixweektestremark`, `sixweektestdate`, `tenweekvaccine`, `tenweektestremark`, `tenweektestdate`, `fourteenweekvaccine`, `fourteenweektestremark`, `fourteenweektestdate`, `sixmonthvaccine`, `sixmonthtestremark`, `sixmonthtestdate`, `ninemonthvaccine`, `ninemonthtestremark`, `ninemonthtestdate`, `twelvemonthvaccine`, `twelvemonthtestremark`, `twelvemonthtestdate`, `fifteenmonthvaccine`, `fifteenmonthtestremark`, `fifteenmonthtestdate`, `sixteenmonthvaccine`, `sixteenmonthtestremark`, `sixteenmonthtestdate`, `eightteenmonthvaccine`, `eightteenmonthtestremark`, `eightteenmonthtestdate`, `twoyearvaccine`, `twoyeartestremark`, `twoyeartestdate`, `fiveyearvaccine`, `fiveyeartestremark`, `fiveyeartestdate`, `tenyearvaccine`, `tenyeartestremark`, `tenyeartestdate`) VALUES
('1', '2021-03-09', 'a', '2021-03-09', 'Male', 'a', 'a', 'a', 'normal', '45', '1234567890', 'good hai', 'iiuh', 'inside', '123456', 'IPD', '2021-03-10', 'good hai', '2021-03-10', 'patient123', 'Normal', 'good hai', ',PCV', 'llll', '2021-03-10', ',PCV', 'jb', '2021-03-14', ',PCV', 'jn', '2021-03-14', ',PCG', 'jj', '2021-03-14', ',a', 'ih', '2021-03-14', ',a', 'jn', '2021-03-14', ',a', 'h', '2021-03-09', ',a', 'nkjn', '2021-03-14', ',a', 'hb', '2021-03-14', ',a', 'bjh', '2021-03-14', ',a', 'i', '2021-03-14', ',a', 'jhb', '2021-03-14', ',b', 'khv', '2021-03-14'),
('2', '2021-03-12', 'jgq', '2021-03-12', 'Male', 'ig', 'kihu', '6', 'normal', '45 kg', '1234567890', 'good', 'iiuh', 'inside', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `doctor_name`) VALUES
(2, 'Dr. Ashish Kashyap'),
(3, 'Dr. Asif'),
(4, 'Dr. Sunil'),
(5, 'Dr. Kajal'),
(6, 'Dr. Juhi'),
(7, 'Dr. Satyam'),
(8, 'Dr. Jafar'),
(9, 'Dr. Vipul');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `umrno` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `RegistrationDate` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `PatientName` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `HusbandName` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `MobileNumber` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Weight` varchar(7) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Age` varchar(11) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `BloodGroup` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Prebaby` varchar(7) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `MaritalStatus` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Village` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `District` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `PinCode` varchar(11) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `City` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `State` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ChildTwin` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ChildHeartbeat` varchar(7) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `LMP` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `EDD` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Scheme` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ward` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `IPD` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Bed` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateOfAdmission` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remarkipd` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateOfDischarge` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `diagnosis` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dischargetype` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dischargereason` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ward1` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `IPD1` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Bed1` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateOfAdmission1` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remarkipd1` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateOfDischarge1` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `diagnosis1` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dischargetype1` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dischargereason1` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doctor_name1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FirstMonth` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remark1` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateOfFirst` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doctor_name2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `SecondMonth` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remark2` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateOfSecond` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doctor_name3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ThirdMonth` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remark3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateOfThird` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doctor_name4` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FourthMonth` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remark4` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateOfFourth` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doctor_name5` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FifthMonth` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remark5` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateOfFifth` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doctor_name6` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `SixMonth` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remark6` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateOfSix` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doctor_name7` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `SevenMonth` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remark7` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateOfSeven` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doctor_name8` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `EightMonth` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remark8` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateOfEight` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `doctor_name9` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NinthMonth` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remark9` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateOfNinth` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`umrno`, `RegistrationDate`, `PatientName`, `HusbandName`, `MobileNumber`, `Weight`, `Age`, `BloodGroup`, `Prebaby`, `MaritalStatus`, `Village`, `District`, `PinCode`, `City`, `State`, `ChildTwin`, `ChildHeartbeat`, `LMP`, `EDD`, `Scheme`, `ward`, `IPD`, `Bed`, `DateOfAdmission`, `remarkipd`, `DateOfDischarge`, `diagnosis`, `dischargetype`, `dischargereason`, `ward1`, `IPD1`, `Bed1`, `DateOfAdmission1`, `remarkipd1`, `DateOfDischarge1`, `diagnosis1`, `dischargetype1`, `dischargereason1`, `doctor_name1`, `FirstMonth`, `remark1`, `DateOfFirst`, `doctor_name2`, `SecondMonth`, `remark2`, `DateOfSecond`, `doctor_name3`, `ThirdMonth`, `remark3`, `DateOfThird`, `doctor_name4`, `FourthMonth`, `remark4`, `DateOfFourth`, `doctor_name5`, `FifthMonth`, `remark5`, `DateOfFifth`, `doctor_name6`, `SixMonth`, `remark6`, `DateOfSix`, `doctor_name7`, `SevenMonth`, `remark7`, `DateOfSeven`, `doctor_name8`, `EightMonth`, `remark8`, `DateOfEight`, `doctor_name9`, `NinthMonth`, `remark9`, `DateOfNinth`) VALUES
('11', '2021/07/18', 'Preety', 'Hello', '1234567890', '40 ', '2021-05-02', 'B+', '0', 'Married', 'Karwandiya', 'Rohtas', '821307', 'Sasaram', 'Bihar', 'No', '12', '2021-07-18', '2021-07-18', 'ANC', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('12', '2021/07/18', 'akh', 'jhbskh', 'khhdxlj', '12', '5', 'O+', '0', 'Married', 'khb', 'kb', 'g', 'kb', 'kb', 'No', '21', '2021-07-18', '2021-07-18', 'ANC', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('13', '2021/07/18', 'ABC', 'XYZ', '9658743210', '66', '23', 'B-', '0', 'Married', 'AA', 'OO', '984560', 'WW', 'MHGHF', 'No', '12', '2021-07-18', '2021-07-18', 'ANC', 'IPD', '123', '05', '2021-07-18', 'Good', '2021-07-18', 'v', 'LAMA', 'Bad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dr. Asif', ',Urine', 'jk', '2021-07-18', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('14', '2021/07/18', 'Preety Gupta', 'Anand Gupta', '7070147999', '40', '25', 'B+', '0', 'Married', 'Dehri', 'Rohtas', '821307', 'Dehri', 'Bihar', 'No', '12', '2021-07-18', '2021-07-18', 'ANC', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('154', '2021/03/28', 'jb', 'kj', 'lnj', 'jln', '2021-03-28', 'B-', 'khb', 'Married', 'jn', 'ln', 'jnlj', 'jlljl', 'nl', 'No', 'l', '2021-03-28', '2021-03-28', 'ANC', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2', '2021/03/09', 'a', 'aa', 'a', 'a', '45', 'O+', 'a', 'Married', 'a', 'a', 'a', 'a', 'a', 'No', '12', '2021-03-09', '2021-03-09', 'Non - ANC', 'Yes', '123456', '', '2021-03-09', 'good', '2021-03-10', 'Patien', 'Normal', 'good', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'iiuh', 'UltraSound', 'kj', '2021-03-10', 'Dr. Asif', ',Urine', 'hgv', '2021-03-23', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('200609111', '2021/01/10', 'Preety Devi', 'Triloki Nath', '8873844540', '38 kg', '30', 'B+', '0', 'Married', 'Akorigola', 'Rohtas', '821307', 'Dehri', 'Bihar', 'No', '20', '2021-03-10', '2021-03-10', 'Non - ANC', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dr. Sunil', ',UltraSound\r\n', 'Good', '2021-07-15', 'Dr. Ashish Kashyap', ',Urine', 'Good', '2021-08-05', 'Dr. Kajal', ',UltraSound\r\n,Urine', 'Good', '2021-09-02', 'Dr. Asif', ',Urine', 'Good', '2021-12-24', 'Dr. Satyam', ',UltraSound\r\n,Urine', 'Good', '2021-01-04', 'Dr. Vipul', ',UltraSound\r\n', 'Good', '2021-02-20', 'Dr. Satyam', ',Urine', 'Good', '2021-03-15', 'Dr. Ashish Kashyap', ',UltraSound\r\n', 'Good', '2021-04-16', 'Dr. Kajal', ',Urine', 'Good', '2021-05-13'),
('3', '2021/03/09', 'vb', 'b', 'b', 'b', '2', 'O+', 'b', 'Married', 'b', 'b', 'b', 'b', 'b', 'No', 'b', '2021-03-09', '2021-03-09', 'ANC', '', '', '', '', '', '2021-03-09', 'patient', 'LAMA', 'good', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', 'iiuh', ',UltraSound\r\n', 'b', '2021-03-09', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('4', '2021/03/09', 'c', 'c', 'c', 'c', '45', 'A-', 'c', 'Married', 'c', 'c', 'c', 'c', 'c', 'No', 'c', '2021-03-09', '2021-03-09', 'Non - ANC', 'No', '12346655', '', '2021-03-09', 'good', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('5', '2021/03/09', 'a', 'b', '1234567890', '45 kg', '4', 'A+', '0', 'Married', 'a', 'b', '821307', 'c', 'd', 'No', '12', '2021-03-09', '2021-03-09', 'ANC', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('7', '2021/01/10', 'h', 'j', '15', 'j', '45', 'O+', '5', 'Married', '4', 'j', 'k', 'b', 'j', 'No', 'k', '2021-03-10', '2021-03-10', 'ANC', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('8', '2021/03/10', 'jh', 'h', 'jg', 'uj', '2', 'A+', 'k', 'Married', 'j', 'y', 'g', 'ji', 'u', 'No', 'h', '2021-03-10', '2021-03-10', 'Non - ANC', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('9', '2021/03/13', 'uh', 'hh', 'iuh', 'hu', '2021-03-13', 'O+', 'iuh', 'Married', 'o', 'ohu', 'iuh', 'iuh', 'iuh', 'No', 'huih', '2021-03-13', '2021-03-13', 'Non - ANC', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE `scheme` (
  `id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`id`, `name`) VALUES
(1, 'ANC'),
(2, 'Non - ANC');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `test_name` varchar(70) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `test_name`) VALUES
(1, 'UltraSound\r\n'),
(2, 'Urine');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `UserID` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `UserID`, `Password`) VALUES
(1, 'kittu', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `id` int(11) NOT NULL,
  `ward_name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`id`, `ward_name`) VALUES
(1, 'IPD'),
(2, 'OPD'),
(3, 'Emergency');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2yeartest`
--
ALTER TABLE `2yeartest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `5yeartest`
--
ALTER TABLE `5yeartest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `6monthtest`
--
ALTER TABLE `6monthtest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `6weektest`
--
ALTER TABLE `6weektest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `9monthtest`
--
ALTER TABLE `9monthtest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `10weektest`
--
ALTER TABLE `10weektest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `10yeartest`
--
ALTER TABLE `10yeartest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `12monthtest`
--
ALTER TABLE `12monthtest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `14weektest`
--
ALTER TABLE `14weektest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `15monthtest`
--
ALTER TABLE `15monthtest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `16monthtest`
--
ALTER TABLE `16monthtest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `18monthtest`
--
ALTER TABLE `18monthtest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birthtest`
--
ALTER TABLE `birthtest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD UNIQUE KEY `umrno` (`umrno`) USING BTREE;

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`umrno`),
  ADD UNIQUE KEY `umrno` (`umrno`);

--
-- Indexes for table `scheme`
--
ALTER TABLE `scheme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2yeartest`
--
ALTER TABLE `2yeartest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `5yeartest`
--
ALTER TABLE `5yeartest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `6monthtest`
--
ALTER TABLE `6monthtest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `6weektest`
--
ALTER TABLE `6weektest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `9monthtest`
--
ALTER TABLE `9monthtest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `10weektest`
--
ALTER TABLE `10weektest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `10yeartest`
--
ALTER TABLE `10yeartest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `12monthtest`
--
ALTER TABLE `12monthtest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `14weektest`
--
ALTER TABLE `14weektest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `15monthtest`
--
ALTER TABLE `15monthtest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `16monthtest`
--
ALTER TABLE `16monthtest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `18monthtest`
--
ALTER TABLE `18monthtest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `birthtest`
--
ALTER TABLE `birthtest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `scheme`
--
ALTER TABLE `scheme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
