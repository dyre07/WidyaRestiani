-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 05:43 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book_ticket`
--

CREATE TABLE `book_ticket` (
  `id_book` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `qty` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_ticket`
--

INSERT INTO `book_ticket` (`id_book`, `id_movie`, `id_customer`, `date`, `time`, `qty`, `pay`, `status`) VALUES
(39, 3, 2, '2017-02-11', '12:30:00', 5, 175000, 'payed'),
(40, 2, 2, '2017-02-10', '14:30:00', 2, 90000, 'payed'),
(42, 1, 2, '2017-02-09', '12:30:00', 3, 150000, 'payed'),
(43, 3, 4, '2017-02-23', '10:30:00', 3, 105000, 'payed'),
(44, 3, 5, '2017-02-24', '10:30:00', 4, 140000, 'payed'),
(45, 2, 1, '2017-02-28', '10:30:00', 1, 45000, 'Payed'),
(46, 3, 6, '2017-03-23', '12:30:00', 3, 105000, 'Payed'),
(47, 2, 7, '2017-03-27', '10:30:00', 1, 45000, 'Payed');

-- --------------------------------------------------------

--
-- Table structure for table `make_payment`
--

CREATE TABLE `make_payment` (
  `id_payment` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `card_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `make_payment`
--

INSERT INTO `make_payment` (`id_payment`, `id_customer`, `id_book`, `amount`, `name`, `card_number`) VALUES
(7, 2, 36, 1050000, 'Alfalfa', 10090),
(8, 2, 39, 175000, 'Widya Restiani', 10090),
(9, 2, 40, 90000, 'Widya Restiani', 10090),
(10, 2, 41, 180000, 'Victoria', 11002),
(11, 2, 42, 150000, 'Victoria', 11002),
(12, 4, 43, 105000, 'Widya Restiani', 10090),
(13, 5, 44, 140000, 'ario', 10090),
(14, 1, 45, 45000, 'widya', 90123889),
(15, 6, 46, 105000, 'etw', 234235),
(16, 7, 47, 45000, 'hvhf', 76576447);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id_movie` int(11) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `movie_show` date NOT NULL,
  `studio` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `quota` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `poster` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id_movie`, `movie_name`, `movie_show`, `studio`, `price`, `quota`, `status`, `poster`, `description`) VALUES
(1, 'Dunkirk', '2017-02-09', 'Studo 1 [Dolbi Atmos]', 50000, 97, 'Playing', 'a', 'menceritakan tentang sekelompok pengembara yang tinggal disuatu gurun kemudian dimakan kadal'),
(2, 'The Snare', '2017-02-14', 'Studio 2', 45000, 141, 'Playing', 'b', 'menceritakan tentang seorang nenek yang ditinggal pergi anjingnya kemudian mati ditabrak becak '),
(3, 'Civil War', '2017-03-15', 'Studio 3', 35000, 185, 'Playing', 'c', 'perperangan antara 2 kubu, kubu siswa malas dan siswa teladan pada saat pemilihan bupati'),
(4, 'Day of the Mummy', '2017-03-14', 'Studio 4', 350000, 0, 'Playing', 'd', 'menceritakan tentang bangkitnya arwah mummy sesudah diloncati oleh kucing, kemudian terbatuk');

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `id_customer` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`id_customer`, `name`, `address`, `email`, `password`) VALUES
(1, 'Widya', 'Jl. Danau Towuti G5/D10, Sawojajar, Kedungkandang, Malang', 'widya@gmail.com', '9146bfc09df862ee46fa9b512c72f9a6'),
(2, 'Widya Restiani', 'Jl. Danau Ranau G5/D10, Sawojajar, Kedungkandang, Malang', 'widya@gmail.com', '1cdac5ad084879e80e5b67c51baa9095'),
(3, 'Victoria', 'Stepanov', 'vicstepa@gmail.com', 'a029deeea3aed8aa09c3abeb13157bc6'),
(4, 'Widya Restiani', 'jhsgjkf', 'pakayat@gmail.com', 'dcf87f21238ac60288047a5de3bf79c7'),
(5, 'Ario', 'malang', 'ario@gmail.com', '713136f194f4b40b26ca140b940f6f05'),
(6, 'Agaton', 'Malang', 'aga@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'coba', 'coba', 'coba@gmail.com', 'c3ec0f7b054e729c5a716c8125839829');

-- --------------------------------------------------------

--
-- Table structure for table `user_comment`
--

CREATE TABLE `user_comment` (
  `id_comment` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_comment`
--

INSERT INTO `user_comment` (`id_comment`, `id_movie`, `id_customer`, `comment`) VALUES
(1, 2, 2, 'Such a Great Movie'),
(2, 2, 1, 'this sucks!'),
(3, 2, 2, 'Wow!! I\'ve been waiting this movie to release'),
(4, 3, 2, 'Awww, greatest movie of this year!!'),
(5, 1, 3, 'wowowowow, I\'ve been dying watching this movie alone. don\'t forget to bring companion if you want to'),
(6, 3, 4, 'bagus'),
(7, 3, 5, 'dajkddwd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `book_ticket`
--
ALTER TABLE `book_ticket`
  ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `make_payment`
--
ALTER TABLE `make_payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id_movie`);

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `user_comment`
--
ALTER TABLE `user_comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `book_ticket`
--
ALTER TABLE `book_ticket`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `make_payment`
--
ALTER TABLE `make_payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `registered_user`
--
ALTER TABLE `registered_user`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_comment`
--
ALTER TABLE `user_comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
