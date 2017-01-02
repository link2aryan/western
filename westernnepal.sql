-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2017 at 03:18 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `westernnepal`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `userID` int(11) NOT NULL,
  `placeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`userID`, `placeID`) VALUES
(1, 1),
(1, 2),
(1, 4),
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `placeID` int(11) NOT NULL,
  `placeName` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `NHeritages` text NOT NULL COMMENT 'Natural Heritages',
  `CnRHeritages` text NOT NULL COMMENT 'Cultural/Religious Heritages',
  `OAttractions` text NOT NULL COMMENT 'Other Attractions',
  `Adventure` text NOT NULL COMMENT 'Adventure Options',
  `travelTime` text NOT NULL COMMENT 'Best time to Travel',
  `image` text NOT NULL COMMENT 'Image of location'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`placeID`, `placeName`, `location`, `NHeritages`, `CnRHeritages`, `OAttractions`, `Adventure`, `travelTime`, `image`) VALUES
(1, 'Gulmi', 'Lumbini Zone', 'Reshunga Lake Thaple Lake Padiko Lake Raniban Lake Dhurkot''s Bichitra Cave Resunga Hill', 'Maghe Sankranti Bhagawati Mandir Thaghas Vagawati Mandir Siddhababa Mandir Khadka Ghudaune Panchawali Pratha Saraya Dance', 'Coffee farming Annapurna Himalayan Ranges can be seen from here Herbs', 'Bird Watching Hiking', 'October to December April to February', 'gulmi.png'),
(2, 'Manang', 'Gandaki Zone', 'Tilicho Lake, Annapurna and Gangapurna', 'Gompa at Manang and Braga, Gompa at Manang and Braga,Gompa at Manang and Braga', 'PhotoGraphy, Trekking Gateway', 'Short treks , Eco friendly adventures,hikings, Bujnee, Horse Riding', 'October to December,April to February', 'manang.jpg'),
(4, 'Lamjung', 'Gandaki Zone', 'Trekking route Thorang La Pass', 'cultural dances like Kaura, Chutka, Krishna Charitra, Sorothi, Ghaantu,	Home Stay:Ghale Gaun, Pas Gaun, Bhujung', 'PhotoGraphy, Marshyangdi Hydro Power, Gateway to Mustang', 'Short treks , Eco friendly adventures,hikings', 'October to December\r\nApril to February', 'lamjung.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `userID` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `lvl` int(2) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`userID`, `fullName`, `Email`, `Password`, `DOB`, `lvl`, `username`, `image`) VALUES
(1, 'Milan Thapa', 'aryan@icomdroid.com', 'aryan', '1995-12-18', 1, 'aryan', ''),
(2, 'Omash Thapa', 'omash@icomdroid.com', 'omash', '2016-12-01', 1, 'omash', ''),
(3, 'Nita KC', 'nita@icomdroid.com', '12345678', '0000-00-00', 0, 'nita', ''),
(4, 'Nitesh Kafle', 'nitesh@outlook.com', 'nitesh', '1995-12-18', 0, 'nitesh', ''),
(5, 'Milan Khanal', 'milan@gmail.com', 'milan', '1995-03-03', 1, 'milan', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`userID`,`placeID`),
  ADD KEY `placeID` (`placeID`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`placeID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `placeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user_info` (`userID`),
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`placeID`) REFERENCES `places` (`placeID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
