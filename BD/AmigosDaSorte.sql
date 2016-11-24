-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2016 at 04:01 PM
-- Server version: 5.7.15-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AmigosDaSorte`
--

-- --------------------------------------------------------

--
-- Table structure for table `bolao`
--

CREATE TABLE `bolao` (
  `id` int(11) NOT NULL,
  `jogo` varchar(100) NOT NULL,
  `grupo` varchar(100) NOT NULL,
  `valorcota` float NOT NULL,
  `totalcota` int(11) NOT NULL,
  `cotadisponivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bolao`
--

INSERT INTO `bolao` (`id`, `jogo`, `grupo`, `valorcota`, `totalcota`, `cotadisponivel`) VALUES
(1, 'Mega Sena', 'JG1', 11, 50, 50),
(2, 'Loto Fácil', 'JG1', 11, 50, 50),
(3, 'Dupla Sena', 'JG1', 11, 50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE `Usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `dataNascimento` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`id`, `nome`, `dataNascimento`, `telefone`, `email`, `senha`) VALUES
(1, 'Administrador', '08/11/2016', '', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bolao`
--
ALTER TABLE `bolao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bolao`
--
ALTER TABLE `bolao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
