-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 09:10 AM
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `region_id`) VALUES
(1, 'Marawi City', 17),
(2, 'Lamitan City', 17),
(3, 'Baguio City', 16),
(4, 'Tabuk City', 16),
(5, 'Caloocan City', 15),
(6, 'Las Pinas City', 15),
(7, 'Makati City', 15),
(8, 'Malabon City', 15),
(9, 'Mandaluyong City', 15),
(10, 'Manila City', 15),
(11, 'Marikina City', 15),
(12, 'Muntinlupa City', 15),
(13, 'Navotas City', 15),
(14, 'Paranaque City', 15),
(15, 'Pasay City', 15),
(16, 'Pasig City', 15),
(17, 'Quezon City', 15),
(18, 'San Juan City', 15),
(19, 'Taguig City', 15),
(20, 'Valenzuela City', 15),
(21, 'Batac City', 1),
(22, 'Laoag City', 1),
(23, 'Candon City', 1),
(24, 'Vigan City', 1),
(25, 'San Fernando City', 1),
(26, 'Alaminos City', 1),
(27, 'Dagupan City', 1),
(28, 'San Carlos City', 1),
(29, 'Uradaneta City', 1),
(30, 'Tuguegarao City', 2),
(31, 'Cauayan City', 2),
(32, 'Ilagan City', 2),
(33, 'Santiago City', 2),
(34, 'Balanga City', 3),
(35, 'Malolos City', 3),
(36, 'Meycauayan City', 3),
(37, 'San Jose Del Monte City', 3),
(38, 'Cabanatuan City', 3),
(39, 'Gapan City', 3),
(40, 'Munoz City', 3),
(41, 'Palayan City', 3),
(42, 'Angeles City', 3),
(43, 'Mabalacat City', 3),
(44, 'San Fernando City', 3),
(45, 'Tarlac City', 3),
(46, 'Olongapo City', 3),
(47, 'San Jose City', 2),
(48, 'Batangas City', 4),
(49, 'Lipa City', 4),
(50, 'Tanauan City', 4),
(51, 'Bacoor City', 4),
(52, 'Cavite City', 4),
(53, 'Dasmarinas City', 4),
(54, 'Imus City', 4),
(55, 'Tagaytay City', 4),
(56, 'Trece Martires City', 4),
(57, 'Binan City', 4),
(58, 'Cabuyao City', 4),
(59, 'San Pablo City', 4),
(60, 'Santa Rosa City', 4),
(61, 'Lucena City', 4),
(62, 'Tayabas City', 4),
(63, 'Antipolo City', 4),
(64, 'Calamba City', 4),
(65, 'Calapan City', 5),
(66, 'Puerto Princesa City', 5),
(67, 'Legazpi City', 6),
(68, 'Ligao City', 6),
(69, 'Tabaco City', 6),
(70, 'Iriga City', 6),
(71, 'Naga City', 6),
(72, 'Masbate City', 6),
(73, 'Sorsogon City', 6),
(80, 'Roxas City', 7),
(81, 'Iloilo City', 7),
(82, 'Passi City', 7),
(83, 'Bacolod City', 7),
(84, 'Bago City', 7),
(85, 'Cadiz City', 7),
(86, 'Escalante City', 7),
(87, 'Himamaylan City', 7),
(88, 'Kabankalan City', 7),
(89, 'La Carlota City', 7),
(90, 'Sagay City', 7),
(91, 'San Carlos City', 7),
(92, 'Silay City', 7),
(93, 'Sipalay City', 7),
(94, 'Talisay City', 7),
(95, 'Victorias City', 7),
(96, 'Tagbilaran City', 8),
(97, 'Bogo City', 8),
(98, 'Carcar City', 8),
(99, 'Cebu City', 8),
(100, 'Danao City', 8),
(101, 'Lapu-Lapu City', 8),
(102, 'Manduae City', 8),
(103, 'Talisay City', 8),
(104, 'Bais City', 8),
(105, 'Bayawan City', 8),
(106, 'Canlaon City', 8),
(107, 'Dumagete City', 8),
(108, 'Guihulngan City', 8),
(109, 'Tanjay City', 8),
(110, 'Toledo City', 8),
(111, 'Borogan City', 9),
(112, 'Baybay City', 9),
(113, 'Ormoc City', 9),
(114, 'Tacloban City', 9),
(115, 'Calbayog City', 9),
(116, 'Catbalogan City', 9),
(117, 'Maasin City', 9),
(118, 'Isabela City', 10),
(119, 'Dapitan City', 10),
(120, 'Dipolog City', 10),
(121, 'Pagadian City', 10),
(122, 'Zamboanga City', 10),
(123, 'Malaybalay City', 11),
(124, 'Valencia City', 11),
(125, 'Iligan City', 11),
(126, 'Oroquiteta City', 11),
(127, 'Ozamiz City', 11),
(128, 'Tangub City', 11),
(129, 'Cagayan de Oro City', 11),
(130, 'El Salvador City', 11),
(131, 'Ginggoog City', 11),
(132, 'Panabo City', 12),
(133, 'Samal City', 12),
(134, 'Tagum City', 12),
(135, 'Davao City', 12),
(136, 'Digos Salvador City', 12),
(137, 'Mati City', 12),
(138, 'Kidapawan City', 13),
(139, 'Cotobato City', 13),
(140, 'General Santos City', 13),
(141, 'Koronadal City', 13),
(142, 'Tacurog City', 13),
(143, 'Butuan City', 14),
(144, 'Cabadbaran City', 14),
(145, 'Bayugan Santos City', 14),
(146, 'Surigao City', 14),
(147, 'Bislig City', 14),
(148, 'Tacurog City', 14);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `Region_ID` int(11) NOT NULL,
  `Region_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`Region_ID`, `Region_Name`) VALUES
(1, 'Region I'),
(2, 'Region II'),
(3, 'Region III'),
(4, 'Region IV-A'),
(5, 'Region IV- B'),
(6, 'Region V'),
(7, 'Region VI'),
(8, 'Region VII'),
(9, 'Region VIII'),
(10, 'Region IV'),
(11, 'Region X'),
(12, 'Region XI'),
(13, 'Region XII'),
(14, 'Region XIII'),
(15, 'NCR'),
(16, 'CAR'),
(17, 'BARMM');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `Student_ID` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Middle_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Birthday` varchar(255) NOT NULL,
  `Address_1` varchar(255) NOT NULL,
  `Address_2` varchar(255) DEFAULT NULL,
  `Region_ID` int(11) NOT NULL,
  `city_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`Student_ID`, `First_Name`, `Middle_Name`, `Last_Name`, `Birthday`, `Address_1`, `Address_2`, `Region_ID`, `city_id`) VALUES
(4, 'Ronniel', 'Crisostomo', 'Buhay', '2000-07-19', 'Talon,Tuy', '', 13, 140);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`Region_ID`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`Student_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `Region_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `Student_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
