-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 10:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `db_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `jur_id` int(11) NOT NULL,
  `jur_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`jur_id`, `jur_nama`) VALUES
(1, 'Teknik Informatika'),
(2, '');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mhs_id` int(11) NOT NULL,
  `mhs_nama` varchar(100) NOT NULL,
  `mhs_email` varchar(35) NOT NULL,
  `mhs_password` varchar(30) NOT NULL,
  `mhs_jeniskelamin` varchar(1) NOT NULL,
  `mhs_alamat` varchar(100) NOT NULL,
  `mhs_tgllahir` date NOT NULL,
  `mhs_jur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`mhs_id`, `mhs_nama`, `mhs_email`, `mhs_password`, `mhs_jeniskelamin`, `mhs_alamat`, `mhs_tgllahir`, `mhs_jur_id`) VALUES
(2, 'Berlian', 'berlian@aknpacitan.ac.id', '0', 'p', 'pacitan', '2022-08-25', 1),
(3, 'juli', 'juli@gmail.com', '123', 'p', 'pacitan', '2022-08-25', 1),
(4, 'putra', 'putra@gmail.com', '123', 'p', 'ada', '2022-08-25', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`jur_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mhs_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `jur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `mhs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
