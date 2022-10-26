-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 10:16 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chromavisiondata`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_data`
--

CREATE TABLE `client_data` (
  `client_id` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `mname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `cus_email` varchar(45) NOT NULL,
  `cus_password` varchar(45) NOT NULL,
  `cus_ContactNumber` varchar(45) NOT NULL,
  `cus_region` varchar(45) NOT NULL,
  `cus_province` varchar(45) NOT NULL,
  `cus_city` varchar(45) NOT NULL,
  `cus_barangay` varchar(45) NOT NULL,
  `packages` varchar(45) NOT NULL,
  `cus_sched` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_data`
--

INSERT INTO `client_data` (`client_id`, `fname`, `mname`, `lname`, `cus_email`, `cus_password`, `cus_ContactNumber`, `cus_region`, `cus_province`, `cus_city`, `cus_barangay`, `packages`, `cus_sched`, `status`) VALUES
(1, 'WILJAMES', 'BORBOR', 'LARA', 'james.lee.lara@gmail.com', '12345678', '09489384195', 'V', 'SORSOGON', 'MAGALLANES', 'BACALON', 'Crystal Packages', '01/20/2022', 'New'),
(2, 'Jezeath', 'Clem', 'Bo', 'jezz09@gmail.com', '', '09679753256', '05', '0562', '056211', '056211014', 'Crystal Packages', '29/11/2022', ''),
(12, '', 'Clem', 'Bo', 'jezz09@gmail.com', '', '09679753256', '06', '0619', '061913', '061913013', 'Crystal Packages', '10/21/2022', '');

-- --------------------------------------------------------

--
-- Table structure for table `cv_packages`
--

CREATE TABLE `cv_packages` (
  `id` int(45) NOT NULL,
  `package_category` varchar(45) NOT NULL,
  `package_name` varchar(45) NOT NULL,
  `package_image` varchar(45) NOT NULL,
  `prices` varchar(45) NOT NULL,
  `item_1` varchar(45) NOT NULL,
  `item_2` varchar(45) NOT NULL,
  `item_3` varchar(45) NOT NULL,
  `item_4` varchar(45) NOT NULL,
  `item_5` varchar(45) NOT NULL,
  `item_6` varchar(45) NOT NULL,
  `item_8` varchar(45) NOT NULL,
  `item_9` varchar(45) NOT NULL,
  `item_10` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cv_packages`
--

INSERT INTO `cv_packages` (`id`, `package_category`, `package_name`, `package_image`, `prices`, `item_1`, `item_2`, `item_3`, `item_4`, `item_5`, `item_6`, `item_8`, `item_9`, `item_10`) VALUES
(1, 'Premier Content', 'Crystal Packages', 'assets/images/crystal packages.jpg', 'P15,000', '1 Photographer', 'Unlimited Shots Stored in USB 8GB Flash drive', 'Free signature Frame', '', '', '', '', '', ''),
(2, 'Premier Content', 'Silver Packages', 'assets/images/silverpackages.jpg', 'P25,000', '2 Photographer', '1 Light man', '1 16 GB USB Flash drive w/ original footage o', '5x7 40 pages imported coffee table album', '1 11x14 Blow-up photo canvass', '1 3x5 tarp in move style poster', 'Free on location Pre-nuptial/ Pre-debut Picto', '1 10 pages Guest Book', ''),
(3, 'Premier Content', 'Gold Packages', 'assets/images/goldpackages.jpg', 'P50,000', '3 Photographers', '1 Videographer on Panasonic 4k/HD Cam', '2 Videographers on DSLR', '2 Light men', '1 16GB SDHC CARD with original footage of ent', '1 16GB SDHC CARD with video content (AVP, SDE', '', '', ''),
(4, 'Creative Content', 'Production Set', 'assets/images/productionset.jpg', 'P35,000', '3 Videographer on DSLR', '2 light men on 5 pcs 1000W LED LIGHTS, Raw/ u', '1 DVD for Church Ceremony', '1 DVD for Reception', '2 Copy of final DVD with 3 Chapters', 'Live streaming of entire event', '', '', ''),
(5, 'Creative Content', 'Creative Art Photography', 'assets/images/creative.jpg', 'P75,000', '1 fashion Photographer on full frame DSLR', '1 product Photographer on APS-C DSLR', 'Story Board Series, ON E- Session for 3 days', '1 40 Pages 11x14 Imported Magnetic overlay Le', '1 11x14 Blow-up Photo Canvass (B&W or SEPIA)', '1 24X30 Blow-up Photo Canvass (Full Color)', 'Free Stylist on E-session', 'Free Make-up Artist', ''),
(6, 'Creative Content', 'Wedding Cinema', 'assets/images/weddingcinema.jpg', 'P75,000', '3 Videographer on DSLR', '1 Videographer on Panasonic 4k/HD CAM', '2 light men on 5 pcs 1000W LED LIGHTS', 'Raw/unedited &Edited Stored on 2 32GB SDHC CA', 'DVD Copy of final event with 3 Chapters', 'Live streaming on entire event', 'Short Film Style on E-session', 'Story Boarding on event Documentation', 'Full Video Equipment'),
(7, 'Standard Content', 'Chroma Vision Standard', 'assets/images/standard.jpg', 'P38,500', '12 Photographer', '1 Videographer on DSLR', '2 Light men', 'Photos Stored on 16GB SD-CARD', '1 5X7 40 Pages Imported Leather Album', '1 11x14 Blow-up Photo canvass (E-session phot', '1 16x20 Photo canvass (bride portraits)', '1 3x5 TARP (movie style poster)', 'AVP /music video of e-session'),
(8, 'Standard Content', 'Mobile Studio', 'assets/images/mobilestudio.jpg', 'P7,500', 'Maximum of 4 HRS On location', 'Complete Studio Setup with 3 Softbox', '100pcs of 4X6 Digital', '2 PCS of studio Backdrop', '', '', '', '', ''),
(9, 'Standard Content', 'Photobooth', 'assets/images/booth-setup.jpg', 'P6,500', 'Unlimited Shots', 'Photo Store on DVD', '2 lights Setup with tarpaulin as Backdrop', 'Complete Photo booth accessories', '', '', '', '', ''),
(10, 'Video Packages', 'Aerial Packages', 'assets/images/dgdf.jpg', 'CVDJI P7,500', '2 Drone Flying Max 4,500ft. Data Save on 16GB', '', '', '', '', '', '', '', ''),
(11, 'Video Packages', 'Video Services', 'assets/images/dgdf.jpg', 'CVSRV P6,500', '1 video operator on tripod un-edited video sa', '', '', '', '', '', '', '', ''),
(12, 'Video Packages', 'Wedding Cinema', 'assets/images/weddingcinema.jpg', 'CVGH4MK4DSLR P78,500', '2 Cinematographer + 1 video operator on crane', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `foldername` varchar(45) NOT NULL,
  `FILE_NAME` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `username`, `foldername`, `FILE_NAME`) VALUES
(1, 'james.lee.lara@gmail.com', 'james.lee.lara@gmail.com', 'TK2_9850.jpg'),
(2, 'james.lee.lara@gmail.com', 'james.lee.lara@gmail.com', 'TK2_9851.jpg'),
(3, 'james.lee.lara@gmail.com', 'james.lee.lara@gmail.com', 'TK2_9958.jpg'),
(4, 'james.lee.lara@gmail.com', 'james.lee.lara@gmail.com', 'TK2_9886.jpg'),
(5, 'james.lee.lara@gmail.com', 'james.lee.lara@gmail.com', 'TK2_9958.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `category` varchar(45) NOT NULL,
  `filename` varchar(45) NOT NULL,
  `filesize` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `category`, `filename`, `filesize`) VALUES
(1, 'wedding', '3.jpg', ''),
(2, 'wedding', '7.jpg', ''),
(3, 'wedding', '8_1.jpg', ''),
(4, 'wedding', '9 2.jpg', ''),
(5, 'wedding', '9_1.jpg', ''),
(6, 'wedding', '12.jpg', ''),
(7, 'wedding', '13.jpg', ''),
(8, 'wedding', '13_1.jpg', ''),
(9, 'wedding', '14_1.jpg', ''),
(11, 'wedding', 'TK2_0032.jpg', ''),
(12, 'wedding', 'TK2_0068.jpg', ''),
(13, 'wedding', 'TK2_9861.jpg', ''),
(14, 'wedding', 'TK2_0054.jpg', ''),
(15, 'wedding', 'TK2_0058.jpg', ''),
(16, 'wedding', 'TK2_0064.jpg', ''),
(17, 'wedding', 'TK2_0092.jpg', ''),
(18, 'wedding', 'TK2_0095.jpg', ''),
(19, 'wedding', 'TK2_0095.jpg', ''),
(20, 'wedding', 'TK2_9850.jpg', ''),
(21, 'wedding', 'TK2_9851.jpg', ''),
(22, 'wedding', 'TK2_9886.jpg', ''),
(23, 'wedding', 'TK2_9958.jpg', ''),
(24, 'wedding', '16.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `middle_name` varchar(45) NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  `region` varchar(45) NOT NULL,
  `province` varchar(45) NOT NULL,
  `municipality` varchar(45) NOT NULL,
  `barangay` varchar(45) NOT NULL,
  `zipcode` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `middle_name`, `phone_number`, `email`, `password`, `role`, `region`, `province`, `municipality`, `barangay`, `zipcode`) VALUES
(1, 'jameslara090', 'Wiljames', 'Lara', 'Borbor', '09489384195', 'james.lee.lara@gmail.com', '12345678', 'ADMIN', 'V', 'SORSOGON', 'MAGALLANES', 'BACALON', '4705'),
(2, '', 'Mykee', 'Baylon', 'Millares', '09489384195', 'mykeemillares01@yahoo.com', '12345678', 'admin', '05', '0562', '056205', '056205006', '');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `v_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `description` longtext NOT NULL,
  `filename` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`v_id`, `name`, `category`, `description`, `filename`) VALUES
(1, 'MARK & JONNA(SDE)', '', 'People define love in different ways. For some it’s passion, for others love means loyalty, compassion, generosity or a friendship on fire. For Kox and Anj, for what better way to define love than by marrying the person you would want to spend the rest of your life with. Let’s open up our hearts to love as we witness another heartfelt union of two souls.', 'SDE.mp4'),
(2, 'ARA & ARCHIE(SDE)', '', 'People define love in different ways. For some it’s passion, for others love means loyalty, compassion, generosity or a friendship on fire. For Kox and Anj, for what better way to define love than by marrying the person you would want to spend the rest of your life with. Let’s open up our hearts to love as we witness another heartfelt union of two souls.', 'DEMO2_CHROMAVISION.mp4'),
(3, 'MARK & JONNA(SDE)', '', 'People define love in different ways. For some it’s passion, for others love means loyalty, compassion, generosity or a friendship on fire. For Kox and Anj, for what better way to define love than by marrying the person you would want to spend the rest of your life with. Let’s open up our hearts to love as we witness another heartfelt union of two souls.', 'DEMO1_CHROMAVISION.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_data`
--
ALTER TABLE `client_data`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `cv_packages`
--
ALTER TABLE `cv_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_data`
--
ALTER TABLE `client_data`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cv_packages`
--
ALTER TABLE `cv_packages`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
