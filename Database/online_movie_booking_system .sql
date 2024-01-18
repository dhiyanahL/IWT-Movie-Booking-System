-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 10:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_movie_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_seat`
--

CREATE TABLE `booked_seat` (
  `SeatID` int(11) NOT NULL,
  `row` varchar(1) NOT NULL,
  `seatNo` int(2) NOT NULL,
  `TheaterID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booked_seat`
--

INSERT INTO `booked_seat` (`SeatID`, `row`, `seatNo`, `TheaterID`) VALUES
(1, 'A', 1, 1),
(2, 'B', 3, 1),
(3, 'C', 1, 2),
(4, 'E', 4, 3),
(5, 'A', 5, 1),
(6, 'C', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` varchar(10) NOT NULL,
  `UserID` int(11) NOT NULL,
  `totalAmount` int(11) NOT NULL,
  `MovieID` varchar(10) NOT NULL,
  `TheaterID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `UserID`, `totalAmount`, `MovieID`, `TheaterID`) VALUES
('B1', 1, 5000, 'M1', 1),
('B2', 2, 2500, 'M2', 2),
('B3', 3, 5000, 'M5', 2),
('B4', 4, 7000, 'M4', 2);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `MovieID` varchar(10) NOT NULL,
  `M_name` varchar(50) DEFAULT NULL,
  `M_image` varchar(200) DEFAULT NULL,
  `M_details_pg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`MovieID`, `M_name`, `M_image`, `M_details_pg`) VALUES
('M1', 'Blue Beetle', 'https://cdn.moviefone.com/admin-uploads/posters/bluebeetle-movie-poster_1686265929.jpg?d=360x540&q=60', ''),
('M2', 'The Nun', 'https://posterspy.com/wp-content/uploads/2018/09/THE-NUN-poster-Luis-Manuel-Zamario.jpg', 'Movie details2.html'),
('M3', 'A Haunting In Venice', 'https://mlpnk72yciwc.i.optimole.com/cqhiHLc.IIZS~2ef73/w:auto/h:auto/q:75/https://bleedingcool.com/wp-content/uploads/2023/08/5e9a978f-eb8c-4307-853b-12f4969661dc.jpg', ''),
('M4', 'Jawan', 'https://assets.gadgets360cdn.com/pricee/assets/product/202206/Jawan-poster_1655912386.jpg', 'Movie details1.html'),
('M5', 'Gran Turismo', 'https://th.bing.com/th/id/OIP.XfsFoaVlewB3q0n12XCcKgHaLH?pid=ImgDet&rs=1', ''),
('M6', 'Equalizer3', 'https://th.bing.com/th/id/OIF.XvADiE9jsKymgFxqRlXUEA?pid=ImgDet&rs=1', ''),
('M7', 'Oppenheimer', 'https://th.bing.com/th/id/R.5282bb222d86cee9aa3a628186868714?rik=fBE0gktbVG43GA&pid=ImgRaw&r=0', ''),
('M8', 'Saw X', 'https://th.bing.com/th?id=OIF.M%2foLqqbRQYx6qhjtBm%2bDfA&pid=ImgDet&rs=1', ''),
('M9', 'Wonka', 'https://cdn.kinocheck.com/i/qvqwnak9hl.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(11) NOT NULL,
  `cardName` varchar(255) NOT NULL,
  `cardNumber` varchar(19) NOT NULL,
  `expiryMonth` varchar(30) NOT NULL,
  `expiryYear` int(11) NOT NULL,
  `CVV` varchar(4) NOT NULL,
  `totalAmount` decimal(10,2) NOT NULL,
  `paymentStatus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentID`, `cardName`, `cardNumber`, `expiryMonth`, `expiryYear`, `CVV`, `totalAmount`, `paymentStatus`) VALUES
(1, 'Kanishka', '0000111122223333', 'January', 2023, '111', 500.00, 'Pending'),
(2, 'Piumi', '1111222233334444', 'March', 2023, '110', 700.00, 'Pending'),
(3, 'Vishmi', '2222333344445555', 'February', 2024, '112', 600.00, 'Pending'),
(4, 'Chavindi', '3333444455556666', 'April', 2025, '113', 500.00, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `TheaterID` int(11) NOT NULL,
  `Theater_Name` varchar(20) NOT NULL,
  `Theater_Location` varchar(30) NOT NULL,
  `Contact_Number` int(15) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  `Seating_Capacity` int(11) NOT NULL,
  `Theater_Description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`TheaterID`, `Theater_Name`, `Theater_Location`, `Contact_Number`, `Email_Address`, `Seating_Capacity`, `Theater_Description`) VALUES
(1, 'Scope Cinema', 'Colombo City Center', 112083064, 'galagedara@scopecinemas.com', 300, 'Dedicated toward raising the bar in Sri Lanka’s cinema experience, Scope aims to provide our patrons with all the flare of old-school movie theaters, coupled with state-of-the-art modernity and comfort, consistent with international standards.'),
(2, 'PVR Cinema', 'Colombo ', 112147483, 'PVRCINEMA@gmail.com', 500, 'PVR Ltd. is the largest and the most premium film exhibition company in India. Since its inception in 1997, the brand has redefined the cinema industry and the way people watch movies in the country. The company acquired Cinemax in 2012 and had taken over DT Cinemas in the year 2016 serving 100 million + patrons annually. Currently PVR operates a cinema circuit of 845 Screens at 176 Properties in '),
(3, 'Cinemax 3D', 'Jaela', 112567435, 'Cinemax@gmail.com', 200, 'Cinemax Cinema in Ja-Ela is one of top end movie cinemas that is operated by EAP Films. At present it screens most of the top end movies including English, Sinhala and Hindi language movies.'),
(4, 'Savoy Premier', 'Rajagiriya', 112907234, 'SavoyPremier@gmail.com', 150, 'Savoy Premier Rajagiriya is located @Rajagiriya. Savoy premier cinema is a theater which is operated by EAP Movies.');

-- --------------------------------------------------------

--
-- Table structure for table `upcomingmovie`
--

CREATE TABLE `upcomingmovie` (
  `MovieID` varchar(10) NOT NULL,
  `M_name` varchar(50) NOT NULL,
  `M_image` varchar(200) NOT NULL,
  `M_details_pg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upcomingmovie`
--

INSERT INTO `upcomingmovie` (`MovieID`, `M_name`, `M_image`, `M_details_pg`) VALUES
('UM1', 'Marvels', 'https://th.bing.com/th/id/R.623ee12b48a22eac5ad46c7d2a1d0f92?rik=yNiE5PP%2for0MQg&pid=ImgRaw&r=0', 'Movie details4.html'),
('UM2', 'Wish', 'https://th.bing.com/th?id=OIF.h%2fBwCuNYfLUqZXxfYSA92A&pid=ImgDet&rs=1', 'Movie details5.html'),
('UM3', 'Paw Patrol', 'https://th.bing.com/th/id/OIP.5XCpsn_JZDHUtbWk8GaTuwAAAA?pid=ImgDet&rs=1', 'Movie details3.html'),
('UM4', 'Hunger Games', 'https://th.bing.com/th/id/OIP.fclbuDuP1OamEJ92byETZAHaK9?pid=ImgDet&w=1000&h=1479&rs=1', ''),
('UM5', 'Exorcist', 'https://th.bing.com/th/id/R.9f07e883dae386fd5d9bc41eb87b571b?rik=eHMAEwxx6O738w&pid=ImgRaw&r=0', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email_Address` varchar(100) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Mobile_Number` int(10) NOT NULL,
  `U_Address` varchar(150) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `U_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `First_Name`, `Last_Name`, `Username`, `Email_Address`, `Date_Of_Birth`, `Mobile_Number`, `U_Address`, `NIC`, `U_Password`) VALUES
(1, 'Harry', 'Depp', 'harrydepp', 'harrydepp@gmail.com', '1983-01-20', 777721345, '144/5, Wallflower Road, Dehiwala', '19984123975', 'theharrydepp456'),
(2, 'Maggie', 'Hatcher', 'maggiethehatcher', 'maggie123@gmail.com', '1994-10-25', 732149065, 'No 4,Rose Road,Kandy', '199412387694', 'maggiethehatcher'),
(3, 'Garret', 'Bee', 'garretbee', 'garret@gmail.com', '1776-10-02', 777116649, '123/45, Hamdon Lane, Wellawatta', '177642356734', 'thegarretbee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_seat`
--
ALTER TABLE `booked_seat`
  ADD PRIMARY KEY (`SeatID`),
  ADD KEY `TheaterID` (`TheaterID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `TheaterID` (`TheaterID`),
  ADD KEY `MovieID` (`MovieID`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`MovieID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`TheaterID`);

--
-- Indexes for table `upcomingmovie`
--
ALTER TABLE `upcomingmovie`
  ADD PRIMARY KEY (`MovieID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_seat`
--
ALTER TABLE `booked_seat`
  MODIFY `SeatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked_seat`
--
ALTER TABLE `booked_seat`
  ADD CONSTRAINT `booked_seat_ibfk_1` FOREIGN KEY (`TheaterID`) REFERENCES `theater` (`TheaterID`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`TheaterID`) REFERENCES `theater` (`TheaterID`),
  ADD CONSTRAINT `booking_ibfk_5` FOREIGN KEY (`MovieID`) REFERENCES `movie` (`MovieID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
