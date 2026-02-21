-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2024 at 03:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_careerhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_login`
--

CREATE TABLE `tbl_admin_login` (
  `login_name` varchar(80) NOT NULL,
  `login_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin_login`
--

INSERT INTO `tbl_admin_login` (`login_name`, `login_password`) VALUES
('admin@gmail.com', 1111),
('grishma@gmail.com', 2222),
('grishma@gmail.com', 2222),
('vaishvi@gmail.com', 3333),
('final@gmail.com', 1010);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tagline` varchar(80) NOT NULL,
  `detail` text NOT NULL,
  `technology` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`id`, `name`, `tagline`, `detail`, `technology`, `file`, `status`) VALUES
(2, 'Accutech', 'Building The Future With Intelligence!!', 'With over 450,000+ development hours across 950+ projects and 100% customer satisfaction, our team has built an inclusive mindset that allows us to tackle business complexities with ease. We relish new challenges and continuously grow, allowing our clients to focus on their core business while we handle the technical elements.', 'Python JavaScript OpenCV Darknet Darknet', 'accutech_logo.jpg', 1),
(3, 'Weboccult', 'Welcome to Web-Occult Technologies Pvt Ltd', 'With over 450,000+ development hours across 950+ projects and 100% customer satisfaction, our team has built an inclusive mindset that allows us to tackle business complexities with ease. We relish new challenges and continuously grow, allowing our clients to focus on their core business while we handle the technical elements', 'Python JavaScript OpenCV Darknet Darknet', 'weboc.jpg', 1),
(4, 'Infinity', 'Welcome to InfotechTechnologies Pvt Ltd', 'Infinity is highly ranked with 17+ years of extensive experience and helping clients to achieve success in the following imposing terms: URP - University Resource Planning, Enterprise Resource Planning - ERP/CRM/SCM, ITS - Infinity Travels Solutions. Our aim is to serve the best digital solutions to Educational Institutes, Enterprises, and travel industries.\r\nInfinity\'s work culture and environment made us to win \"Great Place to Work\" award.', 'Python JavaScript OpenCV Darknet Darknet', 'infinity_logo.jpg', 1),
(5, 'Cipher Craft', 'Welcome to CiphercraftPvt Ltd', 'CipherCraft is an innovative IT company specializing in advanced technology solutions, cybersecurity, and software development. With a focus on delivering customized services, it empowers businesses to achieve seamless digital transformation. CipherCraft’s expertise in data encryption, cloud integration, and cutting-edge applications ensures robust security and efficiency.', 'Python JavaScript OpenCV Darknet Darknet', 'ciphercraft.jpg', 1),
(6, 'Qtonz', 'Building The Future With Intelligence!!', 'Qtonz is a forward-thinking IT company dedicated to empowering businesses with innovative technology solutions. Specializing in software development, data analytics, and cloud integration, Qtonz delivers tailored strategies to optimize operations and drive growth. With a commitment to quality and cutting-edge innovation', 'Python JavaScript OpenCV Darknet Darknet', 'job_logo_10.jpg', 1),
(7, 'TechForce Global', 'Building The Future With IT!!', 'Tech Force Global is a dynamic IT company committed to delivering transformative technology solutions. Specializing in software development, cloud services, and digital transformation, it empowers businesses to achieve operational excellence. With a focus on innovation and customer-centric strategies, Tech Force Global combines technical expertise with industry insights', 'Python JavaScript OpenCV Darknet Darknet', 'tfg.jpg', 1),
(8, 'Grishma', 'Welcome to Web-Occult Technologies Pvt Ltd', 'asasd', 'Python JavaScript OpenCV Darknet Darknet', 'accutech_logo.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `con_id` int(11) NOT NULL,
  `con_fname` varchar(80) NOT NULL,
  `con_lname` varchar(255) NOT NULL,
  `con_email` varchar(80) NOT NULL,
  `con_subject` varchar(200) NOT NULL,
  `con_message` text NOT NULL,
  `con_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`con_id`, `con_fname`, `con_lname`, `con_email`, `con_subject`, `con_message`, `con_status`) VALUES
(18, 'Grishma', 'Bhuva', 'gbhuva@gmail.com', 'final check', 'finalll', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feed_ID` int(11) NOT NULL,
  `feed_name` varchar(30) NOT NULL,
  `feed_email` varchar(30) NOT NULL,
  `feed_phone` varchar(10) NOT NULL,
  `feed_feedback` text NOT NULL,
  `feed_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feed_ID`, `feed_name`, `feed_email`, `feed_phone`, `feed_feedback`, `feed_status`) VALUES
(14, 'Grishma', 'gbhuva@gmail.com', '9876543210', 'final', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_happycandidate`
--

CREATE TABLE `tbl_happycandidate` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `text` varchar(255) NOT NULL,
  `pos` varchar(40) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_happycandidate`
--

INSERT INTO `tbl_happycandidate` (`id`, `name`, `text`, `pos`, `status`) VALUES
(35, 'Grishma Bhuva', '			This platform has helped me to get the job I deserved in less amount of time. The team and the user interafce is also amazing. I would appreciate their hard work and recommend them for sure.		', 'Software Engineer', 1),
(36, 'Vaishvi Mehta', '		Nature holds an unparalleled beauty that inspires awe and tranquility. Towering trees sway in rhythm with the wind, while rivers carve their paths through ancient landscapes, whispering stories of time. Birds sing melodies that uplift the spirit, and th', 'UI/UX Engineer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

CREATE TABLE `tbl_job` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `job-type` varchar(255) NOT NULL,
  `experiance` varchar(200) NOT NULL,
  `job-description` varchar(255) NOT NULL,
  `skills` text NOT NULL,
  `company-name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `company-description` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_job`
--

INSERT INTO `tbl_job` (`id`, `title`, `salary`, `job-type`, `experiance`, `job-description`, `skills`, `company-name`, `location`, `company-description`, `status`) VALUES
(1, 'abc', '123', 'Part Time', '123', 'aa', 'aa', 'abc', 'abc', 'aaa', 1),
(2, 'software engineer', '30000', 'Full Time', '2', 'build software', 'none', 'TCS', 'Rajkot', 'none', 1),
(3, 'software engineer', '123', 'Part Time', '123', 'abc', 'abc', 'Infotech', 'abcabc', 'abc', 1),
(4, 'software engineer', '123', 'Part Time', '', 'avbc', 'abc', 'Infotech', 'abcabc', 'abc', 1),
(5, 'software engineer', '123', 'Part Time', '', 'avbc', 'abc', 'Infotech', 'abcabc', 'abc', 1),
(6, 'software engineer', '123', 'Full Time', '', 'avc', 'abc', 'TCS', 'abcabc', 'abc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `reg_id` int(11) NOT NULL,
  `reg_name` varchar(40) NOT NULL,
  `reg_email` varchar(80) NOT NULL,
  `reg_password` varchar(80) NOT NULL,
  `reg_phone` varchar(10) NOT NULL,
  `reg_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`reg_id`, `reg_name`, `reg_email`, `reg_password`, `reg_phone`, `reg_status`) VALUES
(17, 'Vaishvi', 'vmehta720@rku.ac.in', '2222', '9898771140', 1),
(18, 'Grishma', 'gbhuva@gmail.com', '1111', '9876543211', 1),
(19, 'final', 'final@gmail.com', '1000', '987654321', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration_employers`
--

CREATE TABLE `tbl_registration_employers` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` int(10) NOT NULL,
  `phone` int(11) NOT NULL,
  `Company` varchar(80) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_registration_employers`
--

INSERT INTO `tbl_registration_employers` (`id`, `name`, `email`, `password`, `phone`, `Company`, `status`) VALUES
(1, 'Grishma', 'abc@gmail.com', 1111, 2147483647, 'abc', 1),
(2, 'Vaishvi', 'vmehta720@rku.ac.in', 1111, 2147483647, 'weboccult', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resume`
--

CREATE TABLE `tbl_resume` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(90) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text NOT NULL,
  `graduation` varchar(90) NOT NULL,
  `post graduation` varchar(90) NOT NULL,
  `skills` text NOT NULL,
  `experience` varchar(90) NOT NULL,
  `company` varchar(90) NOT NULL,
  `position` varchar(90) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_resume`
--

INSERT INTO `tbl_resume` (`ID`, `name`, `email`, `phone`, `address`, `graduation`, `post graduation`, `skills`, `experience`, `company`, `position`, `status`) VALUES
(12, 'Grishma', 'gbhuva@gmail.com', 2147483647, 'abc', 'abc', 'abc', 'last check', '33', 'abc', 'abc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `experiance` varchar(200) NOT NULL,
  `job-description` varchar(255) NOT NULL,
  `company-name` varchar(255) NOT NULL,
  `company-description` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`id`, `title`, `salary`, `time`, `experiance`, `job-description`, `company-name`, `company-description`, `status`) VALUES
(1, 'abc', '123', '3', '123', 'finall', 'abc', 'finLLL', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feed_ID`);

--
-- Indexes for table `tbl_happycandidate`
--
ALTER TABLE `tbl_happycandidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job`
--
ALTER TABLE `tbl_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tbl_registration_employers`
--
ALTER TABLE `tbl_registration_employers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_resume`
--
ALTER TABLE `tbl_resume`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feed_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_happycandidate`
--
ALTER TABLE `tbl_happycandidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_job`
--
ALTER TABLE `tbl_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_registration_employers`
--
ALTER TABLE `tbl_registration_employers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_resume`
--
ALTER TABLE `tbl_resume`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
