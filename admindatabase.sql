-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 04, 2023 at 04:40 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admindatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int NOT NULL,
  `adminName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adminEmail` varchar(150) NOT NULL,
  `userPhone` varchar(40) DEFAULT NULL,
  `profile_pic` varchar(60) NOT NULL DEFAULT 'demo.png',
  `adminPass` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fb_link` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `twitter_link` varchar(250) DEFAULT NULL,
  `linkedin_link` varchar(250) DEFAULT NULL,
  `about_description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `adminName`, `adminEmail`, `userPhone`, `profile_pic`, `adminPass`, `fb_link`, `twitter_link`, `linkedin_link`, `about_description`) VALUES
(32, 'Arifur Rahman Rifat', 'arifurrahmanrifat72@gmail.com', '01303181894', '32.jpg', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, NULL, NULL),
(33, 'Arifur Rahman Rifat', 'beky@mailinator.com', '+1 (288) 803-8991', '33.png', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, NULL, NULL),
(34, 'Rifat', 'faqydu@mailinator.com', '01303181893', '34.png', '5359634296651746cadd6dbb7af8c68c7fe6c04b', NULL, NULL, NULL, NULL),
(36, 'Arifur Rahman Rifat', 'arifurrahmanrifat73@gmail.com', '01303181894', '36.jpg', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', NULL, NULL, NULL, NULL),
(37, 'Arifur Rahman Rifat', 'arifurrahmanrifat74@gmail.com', '01303181894', '37.jpg', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'https://www.facebook.com/me/', 'https://twitter.com/Arifur2911', 'https://www.linkedin.com/in/arifur-rahman-rifat-259334242/', 'Freelancers and entrepreneurs use about.me to grow their audience and get more clients. · ');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `ID` int NOT NULL,
  `brand_image` varchar(100) NOT NULL,
  `brand_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`ID`, `brand_image`, `brand_status`) VALUES
(10, '37_1668891714.png', 'active'),
(11, '37_1668891719.png', 'active'),
(12, '37_1668891724.png', 'active'),
(13, '37_1668891728.png', 'active'),
(14, '37_1668891732.png', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `ID` int NOT NULL,
  `counter_icon` varchar(20) NOT NULL,
  `counter_number` varchar(10) NOT NULL,
  `counter_text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`ID`, `counter_icon`, `counter_number`, `counter_text`) VALUES
(1, 'flaticon-award', '300', 'FEATURE ITEM'),
(2, 'flaticon-like', '400', 'ACTIVE PRODUCTS'),
(3, 'flaticon-event', '40', 'YEAR EXPERIENCE'),
(6, 'flaticon-woman', '3000', 'OUR CLIENTS'),
(13, 'fa fa-android', '500', 'FEATURE ITEM');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `name`, `email`, `message`) VALUES
(1, 'Arifur rahman Rifat', 'arifurrahmanrifat74@gmail.com', 'hi'),
(2, 'Arifur rahman Rifat', 'arifurrahmanrifat72@gmail.com', 'hello'),
(3, 'Arifur rahman Rifat', 'koxedufaq@mailinator.com', 'hello'),
(4, 'Arifur rahman', 'koxedufaq@mailinator.com', 'hi i&#039;m arifur rahman rifat'),
(5, 'Arifur rahman Rifat', 'arifurrahmanrifat72@gmail.com', 'hi'),
(6, 'Arifur rahman Rifat', 'arifurrahmanrifat74@gmail.com', 'hi I&#039;m Arifur Rahman Rifat.I&#039;m Web designer and Developer.'),
(7, 'Arifur rahman Rifat', 'arifurrahmanrifat74@gmail.com', 'Hi'),
(8, 'Arifur rahman Rifat', 'arifurrahmanrifat74@gmail.com', 'hi'),
(9, 'Arifur rahman Rifat', 'arifurrahmanrifat74@gmail.com', 'hi'),
(10, 'Selma Ortiz', 'fequf@mailinator.com', 'Cum deleniti eaque e'),
(11, 'Gannon Evans', 'jesoxigoh@mailinator.com', 'Ut adipisicing labor'),
(12, 'Arifur rahman Rifat', 'arifurrahmanrifat72@gmail.com', 'Donec rutrum congue leo eget malesuada. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ID` int NOT NULL,
  `service_titel` varchar(100) NOT NULL,
  `service_icon` varchar(100) NOT NULL,
  `service_description` text NOT NULL,
  `service_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ID`, `service_titel`, `service_icon`, `service_description`, `service_status`) VALUES
(1, 'CREATIVE DESIGN', 'fab fa-react ', ' Creative design involves using computer-generated imagery and digital animation to visualise a product', 'active'),
(2, ' UNLIMITED FEATURES', 'fab fa-free-code-camp', 'Our pricing is simple and every user gets unlimited features', 'active'),
(3, 'ULTRA RESPONSIVE', 'fal fa-desktop ', ' Responsive design is said to be the method of choice in the mobile web.', 'active'),
(4, 'CREATIVE IDEAS', 'fal fa-lightbulb-on ', 'You will find below the best Creative website designs to inspire you', 'active'),
(5, 'EASY CUSTOMIZATION', ' fal fa-edit', 'Ambition is a Simple, Clean and Flat Responsive WordPress Theme', 'active'),
(6, 'SUPPER SUPPORT', 'fal fa-headset ', 'SuperSport.com delivers comprehensive coverage of major sporting events', 'active'),
(9, 'Web Design & Development ', 'fa fa-connectdevelop', 'Web design is concerned with what the user actually sees on their computer screen or mobile device, while web development', 'active'),
(10, 'CREATIVE IDEA', 'fa fa-android', 'Find & Download Free Graphic Resources for Creative Idea', 'inactive'),
(11, 'CREATIVE ', 'fa fa-address-card', 'very simple then. A creative idea is the result of two or more notions coming together in the mind in order to create an all new notion', 'active'),
(12, 'Sit ipsam quia porr', 'fa fa-address-book-o', 'iiiiii', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `ID` int NOT NULL,
  `skill_category` varchar(30) DEFAULT NULL,
  `skill_number` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`ID`, `skill_category`, `skill_number`) VALUES
(6, 'HTML', '95'),
(7, 'CSS', '95'),
(9, 'js', '55'),
(10, 'php', '40'),
(11, 'python', '30');

-- --------------------------------------------------------

--
-- Table structure for table `soical_links`
--

CREATE TABLE `soical_links` (
  `ID` int NOT NULL,
  `fb_link` varchar(250) DEFAULT NULL,
  `twitter_link` varchar(250) DEFAULT NULL,
  `linkedin_link` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `ID` int NOT NULL,
  `testimonial_image` varchar(200) NOT NULL,
  `testimonial_description` text NOT NULL,
  `testimonial_name` varchar(100) NOT NULL,
  `testimonial_title` varchar(150) NOT NULL,
  `testimonial_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`ID`, `testimonial_image`, `testimonial_description`, `testimonial_name`, `testimonial_title`, `testimonial_status`) VALUES
(11, '37_1668817520.jpg', 'Quisquam nulla dolor', 'Raven Roberts', 'Quos voluptatum cumq', 'inactive'),
(12, '37_1668817530.jpg', 'Ad itaque esse modi', 'Sage Waters', 'Voluptate non eiusmo', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `ID` int NOT NULL,
  `work_title` varchar(100) NOT NULL,
  `work_heading` varchar(250) NOT NULL,
  `work_description` text NOT NULL,
  `work_image` varchar(200) NOT NULL,
  `work_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`ID`, `work_title`, `work_heading`, `work_description`, `work_image`, `work_status`) VALUES
(37, 'Design', 'Design is the process of imagining ', 'Design is the process of imagining and planning the creation of objects, systems, buildings, vehicles, etc. It is about creating solutions for people.', '37_1668711024.jpg', 'active'),
(38, 'Video', 'Dark Beauty', 'Design is the process of imagining and planning the creation of objects, systems, buildings, vehicles, etc. It is about creating solutions for people.', '38_1668711636.jpg', 'active'),
(39, 'Audio', 'Gilroy Limbo.', 'Design is the process of imagining and planning the creation of objects, systems, buildings, vehicles, etc. It is about creating solutions for people.', '37_1668711524.jpg', 'active'),
(40, 'Design', 'Ipsum which', 'Design is the process of imagining and planning the creation of objects, systems, buildings, vehicles, etc. It is about creating solutions for people.', '37_1668711578.jpg', 'active'),
(41, 'Creative', 'Eiusmod tempor', 'Design is the process of imagining and planning the creation of objects, systems, buildings, vehicles, etc. It is about creating solutions for people.', '37_1668711694.jpg', 'active'),
(42, 'UX/UI', 'again there', 'Design is the process of imagining and planning the creation of objects, systems, buildings, vehicles, etc. It is about creating solutions for people.', '37_1668711740.jpg', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `adminEmail` (`adminEmail`),
  ADD UNIQUE KEY `adminEmail_2` (`adminEmail`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `soical_links`
--
ALTER TABLE `soical_links`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `soical_links`
--
ALTER TABLE `soical_links`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
