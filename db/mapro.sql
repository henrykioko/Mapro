-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 07:07 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mapro`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(4, 'Ane', 'yep@gmail.com', 'password'),
(5, 'wwwww', 'wwwwwwwwww', 'wwwwwwwwwwwwww'),
(7, 'sweety napenda', 'love@gmaill.com', '787878'),
(13, 'kilo kumi', 'baby.gmail.com', 'errorr'),
(14, 'kilo kumi', 'baby.gmail.com', 'errorr'),
(15, 'kilo kumi', 'baby.gmail.com', 'errorr'),
(16, 'kilo kumi', 'baby.gmail.com', 'errorr'),
(17, 'mapenzi hisia', 'kk@gmail.com', 'sisi'),
(18, 'uzuri wangu', 'basi@gmail.com', '67565'),
(19, 'niongezee utamu', 'eru@gmail.com', '6466'),
(20, 'monster', 'talk@gmail.com', '34353'),
(21, 'weka mate niteleze', 'babyr@gmail.com', '2324'),
(22, 'Anne kapendeza', 'kigogo@gmal.com', '343563'),
(23, 'pablo escobar', 'nakuona@hotmail.com', '33453'),
(24, 'she loves', 'saasita@yahoo.com', '35330'),
(25, 'fucker get', 'waka@gmail,com', '43538'),
(26, 'make me sing', 'anne@gmail.com', '767837'),
(27, 'elchapo guzman', 'cheki@gmail.com', 'take'),
(28, 'wana bang', 'come@gmail.com', 'r98908'),
(29, 'sleep over', 'nightshift@yahoo.com', '34336'),
(30, 'harder baby', 'deeper@sweet.com', '23242'),
(32, 'sleep over', 'kioko@homail.com', '564546'),
(33, 'sleep over', 'kioko@homail.com', '564546'),
(34, 'sleep over', 'kioko@homail.com', '564546'),
(35, 'sleep over', 'kioko@homail.com', '564546'),
(36, 'sleep over', 'kioko@homail.com', '564546'),
(37, 'sleep over', 'kioko@homail.com', '564546'),
(38, 'sleep over', 'kioko@homail.com', '564546'),
(39, 'sleep over', 'kioko@homail.com', '564546'),
(40, 'once new', 'jk@gmail.com', '78768'),
(41, 'kikil', 'jiko@gmail.com', '5655'),
(42, 'liko', 'kkd@gmail.com', '7643'),
(43, 'kll', 'kk', 'kl88'),
(44, 'iki', 'eie', '11111'),
(46, 'jux', 'henry@hotmail.com', '5454'),
(47, 'sishi', 'sishi@gmail.com', '12345'),
(48, 'i need it', 'success@hotmail.com', '12345'),
(49, 'kioko jiko', 'hhhr@gmail.com', '1234567'),
(50, 'willy', 'willy@gmail.com', '1234'),
(51, 'renny kioko', 'were@gmail.com', '12345'),
(52, 'wilson sera', 'sera@gmail.com', '12345'),
(53, 'kiloj', 'walele@gmail.com', '12345'),
(54, 'kiloj kikio', 'waele@gmail.com', '12345'),
(55, 'baby happy', 'err@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(56, 'elchapo guzma', 'ereu@gmail.com', '670da91be64127c92faac35c8300e814'),
(57, 'willy2', 'willy2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(58, 'elchapo guzmag', 'ffffhg@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(59, 'elchapo gwwwuzmag', 'ffffhg@gmawwwil.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(60, 'hytrgt', 'nhjgg@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(61, 'kkkkk', 'kigokkgo@gmal.com', 'fa7f08233358e9b466effa1328168527'),
(62, 'kkkkkjhj', 'henryty@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(63, 'jiko', 'henqryty@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(64, 'jili ko', 'henqrytq@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(65, 'Gibby mutuma', 'mutuma@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(66, 'kioko muinde', 'choxxx@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(67, 'chameleon', 'chameleon@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(68, 'Annea kapendeza', 'annea@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(69, 'hearft kapendeza', 'kiofko@homail.com', 'ece926d8c0356205276a45266d361161'),
(70, 'shes loves', 'saassita@yahoo.com', '8f60c8102d29fcd525162d02eed4566b'),
(71, 'singing', 'shower@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(72, 'qwerty', 'qwerty@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(73, 'wwwent', 'www@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(74, 'wwweent', 'wwew@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(75, 'wwwqeent', 'wwqqew@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(76, 'wrrwwqeent', 'wwqrtew@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(77, 'wrwddqeent', 'wwwdtew@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(78, 'rwddqeent', 'wdstew@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(79, 'rwddfgent', 'wfftew@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(80, 'rwfdddfgent', 'wfftcc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(81, 'rwfdddgfgent', 'wffgtcc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(82, 'rwfdfddgfgent', 'wffgftcc@gmail.com', 'ece926d8c0356205276a45266d361161'),
(83, 'rwfddfddgfgent', 'wfdfgftcc@gmail.com', '11ddbaf3386aea1f2974eee984542152'),
(84, 'rwfddfvddgfgent', 'wfdfgftcvc@gmail.com', '386c57017f4658ca5215569643f0189d'),
(85, 'kujito', 'kujito@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(86, 'CHRIS', 'asadfr@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(87, 'vinent muema', 'vincent%@gmail.com', '62cd275989e78ee56a81f0265a87562e'),
(88, 'vinent muem', 'vincent@gmail.com', '62cd275989e78ee56a81f0265a87562e'),
(89, 'sleep overr', 'henrrry@hotmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(90, 'kujito ken', 'kido@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(91, 'mutiso david', 'david@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(92, 'brayo aggy', 'elsaldo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(93, 'chirchir aggy', 'sema@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(94, 'victoria kiamni', 'vickie@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(95, 'customer x', 'customer@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(96, 'nzamba mukola', 'nzamba@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
