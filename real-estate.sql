-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 11:08 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real-estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `uname`, `password`, `contact`, `email`, `gender`) VALUES
(1, 'Admin', 'Admin', 'qwerty', 2147483647, 'admin@gmail.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
('Sukhbir ', 'sukhbir@gamil.com', 'company', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `des` varchar(250) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`des`, `name`, `email`) VALUES
('nice', 'Sukhbir ', 'alex@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(10) NOT NULL,
  `description` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `available` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `rooms` int(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `images` varchar(300) NOT NULL,
  `type` varchar(20) NOT NULL,
  `value` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `bathroom` int(10) NOT NULL,
  `garage` int(10) NOT NULL,
  `details` varchar(250) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `description`, `name`, `available`, `state`, `size`, `rooms`, `address`, `images`, `type`, `value`, `city`, `area`, `bathroom`, `garage`, `details`, `contact`) VALUES
(23, 'House', 'Rohit', 'Rent', 'Punjab', '1800', 3, '2025 New Amritsar C-Block ,Amritsar', 'images/204234679M-1574732496297.jpeg', 'Residential', '₹15,000 / Month', 'Amritsar', '200', 2, 1, '2 bedroom , 1 drawing Room , 1 Kitchen and 2 bathroom with cupboards', '9635742510'),
(24, 'Flat', 'Sagar', 'Sale', 'West Bengal', '2250', 3, 'Flat No.1050 Albert Colony , Hawara Road , Kolkata', 'images/Besttech Park View.jpg', 'Residential', '₹ 3 crore', 'Kolkata', '250', 3, 1, '3 Bedroom 1 Drawing room 1 Lobby with balcony with garage \r\nand fully furnished.', '6987543210'),
(25, 'Bungalow', 'Sukhbir', 'Sale', 'Punjab', '2250', 5, 'Sector 19 Bungalow No. 210 Chandigarh', 'images/etic15chandigarh-copy.jpg', 'Residential', '₹ 3.5 crore', 'Chandigarh', '250', 5, 1, '5 Bedroom with attached bathroom , 2 drawing room , 2 Kitchen and lobby with  hall basement , well finished .', '9652432102'),
(26, 'Flat', 'Sukhbir', 'Rent', 'Punjab', '1800', 2, 'Flat No. 510 ,Doordarshan Colony , Nakodar Road , Jalandhar', 'images/4402.jpg', 'Residential', '₹10,000 / Month', 'Jalandhar', '200', 2, 1, '2 Bedrooms , 2 Bathrooms, Drawing Room with lobby and balcony', '9652432102'),
(27, 'Bungalow', 'Sukhbir', 'Rent', 'Himachal Pardesh', '2100', 4, 'Bungalow No. 550, Mall Road , Shimla', 'images/posh-residential-house-chandigarh-india-CC0YHB.jpg', 'Residential', '₹15,000 / Month', 'Shimla', '233', 4, 1, '4 Bedrooms with attached bathrooms , lobby with 2 drawing rooms and 1 Porch ', '9652432102'),
(28, 'House', 'Sagar', 'Sale', 'Maharashtra', '1500', 4, 'H.No. 205 Panchvati Road Nashik', 'images/ch-2-759.jpg', 'Residential', '₹ 70 Lakh', 'Nashik', '166', 4, 1, '4 Bedroom with attach bathroom , 2 drawing room, 2 kitchen ,1 balcony ', '6987543210'),
(30, 'House', 'Gurpreet', 'Sale', 'Uttrakhand', '1800', 5, 'H.no 2108 Bus Stand road , Indra colony, Dehradun', 'images/1-2188.1506075420.2864.jpg', 'Residential', '₹ 2 crore', 'Dehradun ', '200', 5, 1, '5 bedrooms with attached bathrooms, 2 kitchen, 2 drawing rooms, with balcony and garden . ', '8324579820'),
(31, 'Farmhouse', 'Rohit', 'Sale', 'Goa', '2400', 6, 'H.no 137 ,Opp Beach Road ,Panaji', 'images/62513923.jpg', 'Residential', '₹ 4 crore', 'Panaji', '266', 6, 2, '6 bedrooms with attached bathrooms ,3 kitchens , 2 drawing rooms , lobby and garden with swimming pool.', '9635742510'),
(32, 'Flat', 'Gurpreet', 'Rent', 'Rajasthan', '2100', 3, 'Flat no.360 ,Nirman Nagar Opp Hawa Mahal ,Jaipur', 'images/jewel-of-india.jpg', 'Residential', '₹25,000 / Month', 'Jaipur', '233', 3, 1, '3 bedrooms with attached bathrooms , 1 kitchen , 1 drawing room with lobby and balcony', '8324579820'),
(33, 'Farmhouse', 'Gurpreet', 'Rent', 'Maharashtra', '2500', 4, 'H.no 450 ,Navi Mumbai Vashi', 'images/thefarmhouse-nadhal-chouk-karjat1.jpg', 'Residential', '₹20,000/Month', 'Mumbai', '277', 4, 1, '4 bedrooms with attached bathrooms , 2 kitchen ,1 drawing room , lobby and balcony , with garden', '8324579820');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `uid` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`uid`, `name`, `uname`, `password`, `contact`, `address`, `email`, `state`, `city`, `gender`) VALUES
(1, 'Sukhbir ', 'Sukhbir', '987654', '9652432102', 'chd', 'sukhbir@gmail.com', 'Punjab', 'Chandigarh', 'Male'),
(7, 'sagar', 'sagar', '123456', '6987543210', 'asr', 'sagar@gmail.com', 'Punjab', 'Amritsar', 'Male'),
(8, 'Gurpreet', 'Gurpreet', '000000', '8324579820', 'asr', 'gurpreet@gmail.com', 'Punjab', 'Amritsar', 'Male'),
(9, 'Rohit', 'Rohit', '123456', '9635742510', 'asr', 'rohit@gmail.com', 'Punjab', 'Amritsar', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

CREATE TABLE `student1` (
  `name` varchar(20) NOT NULL,
  `roll_no` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `marital` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`name`, `roll_no`, `address`, `contact`, `class`, `marital`, `gender`) VALUES
('Sukhbir ', 37, 'asr', '258', 'BCA', 'Unmarried', 'Male'),
('Alex', 78, 'asr', '357', 'BCA', 'Unmarried', 'Male'),
('Alex', 7568, 'sfgjhj', '2322', 'BCA', 'Unmarried', 'Male'),
('Sukhbir ', 3, 'jyrt', '258', '', 'Unmarried', 'Male'),
('a2', 6, 'ffxjnxf', '258', 'BCA', 'Unmarried', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
