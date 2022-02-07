-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 04:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaranswab`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `tanggal_kunjungan` date NOT NULL DEFAULT current_timestamp(),
  `no_boking` varchar(30) NOT NULL,
  `pemeriksaan` varchar(20) NOT NULL,
  `jenis_pasien` varchar(50) NOT NULL,
  `nomor_identitas` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL DEFAULT current_timestamp(),
  `telpon` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `negara` varchar(20) NOT NULL,
  `datang` varchar(20) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `keberangkatan` date NOT NULL DEFAULT current_timestamp(),
  `jenis_kendaraan` varchar(15) NOT NULL,
  `maskapai` varchar(20) NOT NULL,
  `awal_gejala` date NOT NULL DEFAULT current_timestamp(),
  `demam` varchar(10) NOT NULL,
  `menggigil` varchar(10) NOT NULL,
  `sakit_kepala` varchar(10) NOT NULL,
  `abdomen` varchar(10) NOT NULL,
  `batuk` varchar(10) NOT NULL,
  `pilek` varchar(10) NOT NULL,
  `sesak_nafas` varchar(10) NOT NULL,
  `tenggorokan` varchar(10) NOT NULL,
  `diare` varchar(10) NOT NULL,
  `lemas` varchar(10) NOT NULL,
  `nyeri_otot` varchar(10) NOT NULL,
  `mual` varchar(10) NOT NULL,
  `hamil` varchar(10) NOT NULL,
  `diabetes` varchar(10) NOT NULL,
  `penyakit_jantung` varchar(10) NOT NULL,
  `hipertensi` varchar(10) NOT NULL,
  `keganasan` varchar(10) NOT NULL,
  `imunologi` varchar(10) NOT NULL,
  `ginjal_kronis` varchar(10) NOT NULL,
  `gagal_hati` varchar(10) NOT NULL,
  `ppok` varchar(10) NOT NULL,
  `faktor1` varchar(10) NOT NULL,
  `faktor2` varchar(10) NOT NULL,
  `faktor3` varchar(10) NOT NULL,
  `faktor4` varchar(10) NOT NULL,
  `faktor5` varchar(10) NOT NULL,
  `faktor6` varchar(10) NOT NULL,
  `faktor7` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
