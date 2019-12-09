-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 01:32 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webpro_leskuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(20) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pass`) VALUES
('admin01', 'b2643ddf720115c8af7b6e76f3ae90fc');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(10) NOT NULL,
  `sub_id` varchar(10) NOT NULL,
  `univ_id` varchar(10) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_desc` varchar(200) NOT NULL,
  `course_date` date NOT NULL,
  `course_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `sub_id`, `univ_id`, `course_name`, `course_desc`, `course_date`, `course_price`) VALUES
('ADRDEV', 'KMPTR', 'TELU', 'Android Development', 'Android software development is the process by which new applications are created for devices running the Android operating system.', '2019-04-01', 100000),
('DBSYS', 'KMPTR', 'UGM', 'Database System & Architecture', 'A database is an organized collection of data, generally stored and accessed electronically from a computer system. Where databases are more complex they are often developed using formal design and mo', '2019-02-12', 150000),
('IMGPRCS', 'KMPTR', 'TELU', 'Matlab Image Processing', 'image processing is the use of computer algorithms to perform image processing on digital images.', '2019-03-01', 100000),
('IMMUNSYS', 'BIO', 'UNPAD', 'Immune System', 'Describes how the immune system works', '2019-12-02', 100000),
('MCHLR', 'KMPTR', 'ITB', 'Machine Learning', 'Machine Learning merupakan salah satu cabang dari disiplin ilmu Kecerdasan Buatan (Artificial Intellegence) yang membahas mengenai pembangunan sistem yang berdasarkan pada data.', '2019-02-14', 75000),
('PLNTRY', 'FSK', 'ITB', 'The Planetary Objects', 'Detailed explanation about the planetary objects in the universe', '2019-12-05', 150000),
('UI', 'SNI', 'ISBI', 'UI Development', 'User interface design or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with t', '2019-04-02', 80000),
('UX', 'SNI', 'ISBI', 'UX Development', 'How to build a good UX Design', '2019-12-01', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `course_owns`
--

CREATE TABLE `course_owns` (
  `course_owns_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `date_owned` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_owns`
--

INSERT INTO `course_owns` (`course_owns_id`, `user_id`, `course_id`, `date_owned`) VALUES
(1, 1, 'MCHLR', '2019-12-09'),
(2, 3, 'ADRDEV', '2019-12-09'),
(3, 3, 'DBSYS', '2019-12-09'),
(4, 4, 'ADRDEV', '2019-12-09'),
(5, 4, 'IMGPRCS', '2019-12-09'),
(6, 4, 'IMGPRCS', '2019-12-09'),
(7, 5, 'ADRDEV', '2019-12-09'),
(8, 5, 'DBSYS', '2019-12-09'),
(9, 5, 'DBSYS', '2019-12-09'),
(10, 5, 'DBSYS', '2019-12-09'),
(11, 5, 'DBSYS', '2019-12-09'),
(12, 8, 'ADRDEV', '2019-12-09'),
(13, 9, 'ADRDEV', '2019-12-09'),
(14, 11, 'MCHLR', '2019-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` varchar(10) NOT NULL,
  `sub_nama` varchar(50) NOT NULL,
  `sub_desc` varchar(200) NOT NULL,
  `sub_foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_nama`, `sub_desc`, `sub_foto`) VALUES
('BIO', 'Biologi', 'Biologi adalah kajian tentang kehidupan, dan organisme hidup, termasuk struktur, fungsi, pertumbuhan, evolusi, persebaran, dan taksonominya. ', 'bio.jpg'),
('FSK', 'Fisika', 'Fisika adalah ilmu mengenai alam, yang mempelajari unsur-unsur dasar pembentuk alam semesta, gaya-gaya yang bekerja di dalamnya, dan akibat-akibatnya; mencakup rentang yang luas.', 'fsk.jpg'),
('KMPTR', 'Ilmu Komputer', 'Secara umum diartikan sebagai ilmu yang mempelajari baik tentang komputasi, perangkat keras (hardware) maupun perangkat lunak (software).', 'kmptr.jpg'),
('SNI', 'seni', 'Seni adalah keahlian membuat karya yang bermutu, seperti tari, lukisan, ukiran. Seni meliputi banyak kegiatan manusia dalam menciptakan karya visual, audio, atau pertunjukan.', 'sni.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `univ_id` varchar(10) NOT NULL,
  `univ_name` varchar(50) NOT NULL,
  `univ_logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`univ_id`, `univ_name`, `univ_logo`) VALUES
('ITB', 'Institut Teknologi Bandung ', 'itb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_joined` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `date_joined`) VALUES
(1, 'Ahmad Satriamulya', 'ahmadrayi44@gmail.com', 'tumpenglontong', '2019-12-09'),
(2, 'romi', 'romi123@sasa.com', '37f5a1f50adc555f46d93c30bed0219a', '2019-12-09'),
(3, 'Adam', 'adam@gmail.com', '57ba172a6be125cca2f449826f9980ca', '2019-12-09'),
(4, 'Adam', 'c@a.com', 'c1f68ec06b490b3ecb4066b1b13a9ee9', '2019-12-09'),
(5, 'Prawira Adam', 'contohuser@gmail.com', '46f94c8de14fb36680850768ff1b7f2a', '2019-12-09'),
(6, 'asd', 'asd@as.com', '4297f44b13955235245b2497399d7a93', '2019-12-09'),
(7, 'Prawira Adam', 'contohuser1@gmail.com', '4297f44b13955235245b2497399d7a93', '2019-12-09'),
(8, 'Prawira Adam', 'prawiraadam21@gmail.com', '46f94c8de14fb36680850768ff1b7f2a', '2019-12-09'),
(9, 'Prawira Adam', 'prawiraadam01@gmail.com', '46f94c8de14fb36680850768ff1b7f2a', '2019-12-09'),
(10, 'Prawira Adam', 'prawiraadam02@gmail.com', '46f94c8de14fb36680850768ff1b7f2a', '2019-12-09'),
(11, 'shadieq', 'shadieqq@gmail.com', 'bf32d527861c59a176f10ccd1fb1e2eb', '2019-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `vid_id` int(11) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `univ_id` varchar(10) NOT NULL,
  `vid_nama` varchar(50) NOT NULL,
  `vid_content` varchar(50) NOT NULL,
  `vid_desc` varchar(200) NOT NULL,
  `vid_thubnail` varchar(50) NOT NULL,
  `vid_maker` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`vid_id`, `course_id`, `univ_id`, `vid_nama`, `vid_content`, `vid_desc`, `vid_thubnail`, `vid_maker`) VALUES
(1, 'MCHLR', 'ITB', 'Regresi Linear, pertemuan 1', 'https://www.youtube.com/watch?v=VKTXVV0eTIY', 'sebuah video linear regresi', 'thumb1.jpg', 'Romi Romanda'),
(2, 'MCHLR', 'ITB', 'Pengenalan Machine Learning', 'https://www.youtube.com/watch?v=HcqpanDadyQ', 'Video mengenai hal hal seputar machine learning', 'malin.jpg', 'Romi Romanda'),
(3, 'UIUX', 'ISBI', 'Material Design', 'https://www.youtube.com/watch?v=rrT6v5sOwJg', 'Pengenalan material design', 'matdesign.png', 'Marc Jacobs'),
(4, 'UIUX', 'ISBI', 'Introduction to UI / UX', 'https://www.youtube.com/watch?v=RtPnVtXw6HU', 'Pengenalan UI / UX', 'uiux.png', 'Marc Jacobs'),
(5, 'ADRDEV', 'TELU', 'Android Studio Part I', 'https://www.youtube.com/embed/K2dodTXARqc', 'Pengenalan software android studio', 'androidstudio.jpg', 'Andy Rubin'),
(6, 'ADRDEV', 'TELU', 'Android Studio Part II', 'https://www.youtube.com/embed/EOfCEhWq8sg', 'Membuat aplikasi sederhana dengan Android Studio', 'asd', 'TELU'),
(7, 'IMMUNSYS', 'UNPAD', 'Immune System Part I', 'https://www.youtube.com/embed/zQGOcOUBi6s', 'Every second of your life you are under attack. Bacteria, viruses, spores and more living stuff wants to enter your body and use its resources for itself. The immune system is a powerful army of cells', 'asd', 'UNPAD'),
(8, 'IMMUNSYS', 'UNPAD', 'Immune System Part II', 'https://www.youtube.com/embed/BSypUV6QUNw', 'One of the key players of our immune system is the complement system. An army of millions and trillions of tiny bombs, which work together in a complex and elegant dance to stop intruders in your body', 'asd', 'UNPAD'),
(9, 'PLNTRY', 'ITB', 'Neutron Stars', 'https://www.youtube.com/embed/udFxKZRyQt4', 'Neutron stars are one of the most extreme and violent things in the universe. Giant atomic nuclei, only a few kilometers in diameter but as massive as stars. And they owe their existence to the death ', 'asd', 'ITB'),
(10, 'PLNTRY', 'ITB', 'Black Hole', 'https://www.youtube.com/embed/e-P5IFTqB98', 'Black holes. Lets talk about them.', 'asd', 'ITB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_owns`
--
ALTER TABLE `course_owns`
  ADD PRIMARY KEY (`course_owns_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`univ_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`vid_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_owns`
--
ALTER TABLE `course_owns`
  MODIFY `course_owns_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `vid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
