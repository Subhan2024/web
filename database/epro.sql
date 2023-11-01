-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 04:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epro`
--

-- --------------------------------------------------------

--
-- Table structure for table `add`
--

CREATE TABLE `add` (
  `aid` int(20) NOT NULL,
  `company` varchar(255) NOT NULL,
  `name` varchar(252) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(111) NOT NULL,
  `city` varchar(255) NOT NULL,
  `astatus` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add`
--

INSERT INTO `add` (`aid`, `company`, `name`, `email`, `password`, `phone`, `city`, `astatus`) VALUES
(1, 'tcs', 'hamza', 'hamza@gmail.com', '$2y$10$ruGfavOzJ5b0qXUZlSNO9ecWIgns1i98seZRNHI/a80MdUVeVs0V6', 2147483647, 'Karachi', 1),
(2, 'Leopards', 'Subhan', 'subhan@gmail.com', '$2y$10$huh0QZyqvRt3Cq2BTnH9sODzl8jw4T3HWxkQGCybzDydjR9kF5FJC', 2147483647, 'Lahore', 1),
(3, 'Trax', 'Waqas', 'waqas@gmail.com', '$2y$10$Pnm/0aakKV8PbhhvjieBiueDyszksU9FceJj5TV37lnWI9uB02vsa', 2147483647, 'Islamabad', 1),
(4, 'Tcs', 'aqib', 'aqib@gmail.com', '$2y$10$l9y/szhWLTnCkzhppG6V9.XzvVBzT4uBIlIgGtcXwtOLlOfTg2v22', 925924866, 'Lahore', 1),
(5, 'Leopards', 'rohan', 'rohan@gmail.com', '$2y$10$xgWDf6z0ezU7YVMAGKtCduk.mUfBly5YhWPprYB26ET5p40QlqT/u', 2147483647, 'Karachi', 1),
(6, 'Trax', 'sufiyan', 'sufiyan@gmail.com', '$2y$10$aZp6XPfZvkab9zwK9zvdLuOj3grtTn8PpYIUcYTKNsooJWUSQmn8e', 923456909, 'Karachi', 1),
(7, 'Tcs', 'Naveed', 'naved@gmail.com', '$2y$10$T64.hiMttfl1fjxA7LwI9OL92SvCEhxS/1Ie8NKQzo78ShvPamQg2', 34545456, 'Islamabad', 1),
(8, 'Leopards', 'Ahmed', 'ahmed@gmail.com', '$2y$10$WDvut48GqmUMwO5KAZg5WesqIb1ob22wVVNY/VkOxTa/NFiXCcCuG', 986124866, 'Islamabad', 1),
(10, 'Trax', 'saqib', 'saqib@gmail.com', '$2y$10$OdnT8ZsozB3G.smaTxniH.8Yo/fv6m2OWeQluy5oc57iVwT9FQGG6', 355924866, 'Lahore', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(111) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(7, 'affan', 'siddiquiaffan701@gmail.com', '$2y$10$LLrWut1jqQjLAoKiddodZeyZPd3f.VD8Ff3eNXX0rgZQPoQWeJ7LK'),
(8, 'amir', 'abc@gmail.com', '$2y$10$boTAVCnw2IhJif9rOa8sl.eeuvFoROVndClIVbvs/xtKN073GSRsO');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `fid` int(88) NOT NULL,
  `aid` int(22) NOT NULL,
  `id` int(29) NOT NULL,
  `bdate` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `price` int(88) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`fid`, `aid`, `id`, `bdate`, `status`, `price`) VALUES
(10, 1, 23, '2023-10-02', 1, 900),
(10, 1, 24, '2023-11-03', 1, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `fid` int(111) NOT NULL,
  `scompany` varchar(167) NOT NULL,
  `fname` varchar(122) NOT NULL,
  `lname` varchar(321) NOT NULL,
  `femail` varchar(111) NOT NULL,
  `raddress` text NOT NULL,
  `saddress` text NOT NULL,
  `city` varchar(212) NOT NULL,
  `phone` int(111) NOT NULL,
  `ctype` varchar(122) NOT NULL,
  `weight` varchar(112) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(222) NOT NULL,
  `status` varchar(88) NOT NULL DEFAULT 'In Progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`fid`, `scompany`, `fname`, `lname`, `femail`, `raddress`, `saddress`, `city`, `phone`, `ctype`, `weight`, `date`, `gender`, `status`) VALUES
(10, 'Tcs', 'waleed', 'ali', 'waleed@gmail.com', '2848 du Caminito Street, Los Angeles, LA 91214.', 'D 2/5  Nazimabad no 2 Karachi near imtiaz', 'Karachi', 31552116, 'paper', '19kg', '2023-11-04', 'Male', 'deliver'),
(11, 'Leopards', 'waqar', 'khan', 'waqar@gmail.com', 'nazimabad', '2848 du Caminito Street, Los new, LA 91214.', 'Karachi', 322654323, 'tissue box', '2kg', '2023-11-11', 'Male', 'deliver'),
(12, 'Trax', 'umar', 'siddiqui', 'umar@gmail.com', 'sec2', 'North Karachi', 'Karachi', 324576768, 'gas', '33kg', '2023-10-31', 'Male', 'In Progress');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(88) NOT NULL,
  `firstname` varchar(222) NOT NULL,
  `lastname` varchar(444) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(233) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `status`) VALUES
(8, 'Farees', 'khan', 'farees@gmail.com', '$2y$10$sBFzDlMqWaq1yDH89syxnO616fZmUWWybuSJx/6dxWXn1DOmsyyvy', 1),
(9, 'rohan', 'ali', 'rohan@gmail.com', '$2y$10$.Pg6Lztq1DrIk4Q.IS0Kmej1XwHdtPWgLm87pvVy0ScuTeOvz/iYO', 1),
(10, 'amir', 'ali', 'amir@gmail.com', '$2y$10$GCiFlO890WwxdiQ4cc9q9uIfDIkub9ps58hkqQNbnjJyp9W2FlC02', 1),
(11, 'nawaz', 'ayub', 'nawaz@gmail.com', '$2y$10$zv8hatBZ.awonHn4PfDyjeStKQb7/MAEUIKcWcZIlj8t8.3udhOqS', 1),
(12, 'huzaifa', 'ali', 'huzaifa@gmail.com', '$2y$10$YZaDOT4J9ky2kR5W18mLEuuJszKlNmaCHu5Ri15uAGXNA3TavGBj6', 1),
(13, 'haris', 'khan', 'haris@gmail.com', '$2y$10$Kz8tkoOoxp.8A9N/dhMfFepdaliTsvtHLIi5uK62L/0ZeGKZ5woze', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add`
--
ALTER TABLE `add`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aid` (`aid`),
  ADD KEY `fid` (`fid`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add`
--
ALTER TABLE `add`
  MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(29) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `fid` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(88) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `add` (`aid`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`fid`) REFERENCES `form` (`fid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
