-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 10:24 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c45_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` char(3) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `komponen` varchar(50) DEFAULT NULL,
  `flag_aktif` smallint(1) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama`, `komponen`, `flag_aktif`, `created`, `modified`) VALUES
('K01', 'Kedisiplinan', 'Absensi', 1, '2023-07-07 23:40:43', '2023-07-07 23:40:43'),
('K02', 'Pelatihan', 'Jumlah sertifikat', 1, '2023-07-07 23:41:14', '2023-07-07 23:50:57'),
('K03', 'Hasil Kerja', 'Hasil kerja yang diberikan', 1, '2023-07-07 23:49:50', '2023-07-07 23:50:52'),
('K04', 'Kreativitas', 'Tugas yang diberikan', 1, '2023-07-07 23:50:03', '2023-07-07 23:50:43'),
('K05', 'Perilaku', 'Sosialisasi antar rekan kerja, tamu, dan atasan', 1, '2023-07-07 23:50:35', '2023-07-07 23:50:35'),
('K06', 'Hasil Akhir', 'Metode C45', 1, '2023-07-08 02:53:30', '2023-07-08 02:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` char(5) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` char(10) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `flag_aktif` smallint(1) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `jenis_kelamin`, `no_hp`, `alamat`, `flag_aktif`, `created`, `modified`) VALUES
('P0001', 'Andi', 'Laki-laki', '081233445566', 'Jl. Kemana', 1, '2023-07-08 00:07:32', '2023-07-08 00:07:32'),
('P0002', 'Budi', 'Laki-laki', '082323788371', 'Jl. Jalan', 1, '2023-07-08 00:07:45', '2023-07-08 00:07:45'),
('P0003', 'Cantika', 'Perempuan', '081343248638', 'Jl. Kereta Seberang', 1, '2023-07-08 00:08:45', '2023-07-08 00:08:45'),
('P0004', 'Dinda', 'Perempuan', '082309342798', 'Jl. Pulang', 1, '2023-07-08 00:09:30', '2023-07-08 00:09:30'),
('P0005', 'Eka', 'Perempuan', '082209372194', 'Jl. Siapa', 1, '2023-07-08 00:09:57', '2023-07-08 00:09:57'),
('P0006', 'Fajar', 'Laki-laki', '081230957834', 'Jl. Apa', 1, '2023-07-08 00:10:15', '2023-07-08 00:10:15'),
('P0007', 'Gina', 'Perempuan', '081398372580', 'Jl. Nin', 1, '2023-07-08 00:10:47', '2023-07-08 00:10:47'),
('P0008', 'Han', 'Laki-laki', '081332785972', 'Jl. Pintas', 1, '2023-07-08 00:11:11', '2023-07-08 00:11:11'),
('P0009', 'Irani', 'Perempuan', '081243294623', 'Jl. Samping', 1, '2023-07-08 00:11:33', '2023-07-08 00:11:33'),
('P0010', 'Jordi', 'Laki-laki', '081292479814', 'Jl. Yuk', 1, '2023-07-08 00:12:12', '2023-07-08 00:12:12'),
('P0011', 'Kinan', 'Perempuan', '081291363963', 'Jl. Ya Kan', 1, '2023-07-08 02:21:43', '2023-07-08 02:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` char(20) NOT NULL,
  `id_pegawai` char(5) DEFAULT NULL,
  `id_kriteria` char(3) DEFAULT NULL,
  `id_sub_kriteria` char(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_pegawai`, `id_kriteria`, `id_sub_kriteria`, `created`) VALUES
('P202307080255373g8', 'P0001', 'K01', 'SK01', '2023-07-08 02:55:37'),
('P20230708025537422', 'P0001', 'K06', 'SK16', '2023-07-08 02:55:37'),
('P202307080255376Ft', 'P0001', 'K03', 'SK08', '2023-07-08 02:55:37'),
('P20230708025537iSW', 'P0001', 'K04', 'SK11', '2023-07-08 02:55:37'),
('P20230708025537nH3', 'P0001', 'K05', 'SK13', '2023-07-08 02:55:37'),
('P20230708025537rPD', 'P0001', 'K02', 'SK05', '2023-07-08 02:55:37'),
('P20230708025625byt', 'P0005', 'K02', 'SK07', '2023-07-08 02:56:25'),
('P20230708025625F8f', 'P0005', 'K03', 'SK09', '2023-07-08 02:56:25'),
('P20230708025625if1', 'P0005', 'K04', 'SK12', '2023-07-08 02:56:25'),
('P20230708025625uHx', 'P0005', 'K06', 'SK18', '2023-07-08 02:56:25'),
('P20230708025625XNW', 'P0005', 'K05', 'SK13', '2023-07-08 02:56:25'),
('P20230708025625yMO', 'P0005', 'K01', 'SK01', '2023-07-08 02:56:25'),
('P20230708025634B9G', 'P0006', 'K02', 'SK05', '2023-07-08 02:56:34'),
('P20230708025634FET', 'P0006', 'K04', 'SK12', '2023-07-08 02:56:34'),
('P20230708025634i3n', 'P0006', 'K01', 'SK04', '2023-07-08 02:56:34'),
('P20230708025634RGA', 'P0006', 'K06', 'SK19', '2023-07-08 02:56:34'),
('P20230708025634SRL', 'P0006', 'K05', 'SK15', '2023-07-08 02:56:34'),
('P20230708025634tHK', 'P0006', 'K03', 'SK10', '2023-07-08 02:56:34'),
('P202307080256482qr', 'P0007', 'K03', 'SK09', '2023-07-08 02:56:48'),
('P20230708025648DtG', 'P0007', 'K04', 'SK11', '2023-07-08 02:56:48'),
('P20230708025648G8s', 'P0007', 'K02', 'SK07', '2023-07-08 02:56:48'),
('P20230708025648h3C', 'P0007', 'K06', 'SK18', '2023-07-08 02:56:48'),
('P20230708025648rUe', 'P0007', 'K01', 'SK02', '2023-07-08 02:56:48'),
('P20230708025648YKR', 'P0007', 'K05', 'SK13', '2023-07-08 02:56:48'),
('P20230708025657AN8', 'P0008', 'K01', 'SK04', '2023-07-08 02:56:57'),
('P20230708025657CrY', 'P0008', 'K05', 'SK13', '2023-07-08 02:56:57'),
('P20230708025657Mo9', 'P0008', 'K03', 'SK08', '2023-07-08 02:56:57'),
('P20230708025657SDf', 'P0008', 'K04', 'SK11', '2023-07-08 02:56:57'),
('P20230708025657tMR', 'P0008', 'K02', 'SK05', '2023-07-08 02:56:57'),
('P20230708025657YLC', 'P0008', 'K06', 'SK18', '2023-07-08 02:56:57'),
('P20230708025707AU8', 'P0009', 'K04', 'SK12', '2023-07-08 02:57:07'),
('P20230708025707BHC', 'P0009', 'K06', 'SK18', '2023-07-08 02:57:07'),
('P20230708025707DKf', 'P0009', 'K02', 'SK07', '2023-07-08 02:57:07'),
('P20230708025707kCb', 'P0009', 'K01', 'SK01', '2023-07-08 02:57:07'),
('P20230708025707VYk', 'P0009', 'K05', 'SK15', '2023-07-08 02:57:07'),
('P20230708025707z4t', 'P0009', 'K03', 'SK09', '2023-07-08 02:57:07'),
('P20230708025712eFG', 'P0010', 'K04', 'SK12', '2023-07-08 02:57:12'),
('P20230708025712gxl', 'P0010', 'K03', 'SK10', '2023-07-08 02:57:12'),
('P20230708025712iOz', 'P0010', 'K05', 'SK15', '2023-07-08 02:57:12'),
('P20230708025712p4W', 'P0010', 'K06', 'SK19', '2023-07-08 02:57:12'),
('P20230708025712pD7', 'P0010', 'K01', 'SK04', '2023-07-08 02:57:12'),
('P20230708025712rzL', 'P0010', 'K02', 'SK07', '2023-07-08 02:57:12'),
('P20230708032015CrL', 'P0003', 'K03', 'SK09', '2023-07-08 03:20:15'),
('P20230708032015fwC', 'P0003', 'K06', 'SK18', '2023-07-08 03:20:15'),
('P20230708032015FZB', 'P0003', 'K02', 'SK05', '2023-07-08 03:20:15'),
('P20230708032015k3D', 'P0003', 'K04', 'SK12', '2023-07-08 03:20:15'),
('P20230708032015Mkn', 'P0003', 'K01', 'SK02', '2023-07-08 03:20:15'),
('P20230708032015wrV', 'P0003', 'K05', 'SK13', '2023-07-08 03:20:15'),
('P202307080320248W2', 'P0004', 'K06', 'SK18', '2023-07-08 03:20:24'),
('P20230708032024FIB', 'P0004', 'K01', 'SK03', '2023-07-08 03:20:24'),
('P20230708032024G4A', 'P0004', 'K04', 'SK11', '2023-07-08 03:20:24'),
('P20230708032024iKQ', 'P0004', 'K03', 'SK08', '2023-07-08 03:20:24'),
('P20230708032024p6j', 'P0004', 'K05', 'SK15', '2023-07-08 03:20:24'),
('P20230708032024R9R', 'P0004', 'K02', 'SK05', '2023-07-08 03:20:24'),
('P202307080321137WR', 'P0002', 'K05', 'SK13', '2023-07-08 03:21:13'),
('P20230708032113i2v', 'P0002', 'K04', 'SK11', '2023-07-08 03:21:13'),
('P20230708032113JOZ', 'P0002', 'K02', 'SK06', '2023-07-08 03:21:13'),
('P20230708032113o8j', 'P0002', 'K06', 'SK17', '2023-07-08 03:21:13'),
('P20230708032113qx8', 'P0002', 'K01', 'SK01', '2023-07-08 03:21:13'),
('P20230708032113x3l', 'P0002', 'K03', 'SK08', '2023-07-08 03:21:13');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id_sub_kriteria` char(4) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `id_kriteria` char(3) DEFAULT NULL,
  `flag_aktif` smallint(1) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id_sub_kriteria`, `nama`, `keterangan`, `id_kriteria`, `flag_aktif`, `created`, `modified`) VALUES
('SK01', 'Sangat Baik', 'Kehadiran lebih dari 90 persen', 'K01', 1, '2023-07-07 23:54:43', '2023-07-07 23:54:43'),
('SK02', 'Baik', 'Kehadiran 70-90 persen', 'K01', 1, '2023-07-07 23:56:12', '2023-07-07 23:56:12'),
('SK03', 'Cukup Baik', 'Kehadiran 50-70 persen', 'K01', 1, '2023-07-07 23:59:53', '2023-07-07 23:59:53'),
('SK04', 'Kurang', 'Kehadiran', 'K01', 1, '2023-07-08 00:00:11', '2023-07-08 00:00:11'),
('SK05', 'Baik', 'Lebih dari 5 sertifikasi', 'K02', 1, '2023-07-08 00:02:55', '2023-07-08 00:02:55'),
('SK06', 'Cukup Baik', '3-5 sertifikasi', 'K02', 1, '2023-07-08 00:03:14', '2023-07-08 00:03:14'),
('SK07', 'Kurang', 'Kurang dari 3 sertifikasi', 'K02', 1, '2023-07-08 00:03:36', '2023-07-08 00:03:36'),
('SK08', 'Baik', 'Hasil kerja sangat memuaskan', 'K03', 1, '2023-07-08 00:03:56', '2023-07-08 00:03:56'),
('SK09', 'Cukup Baik', 'Hasil kerja masih bisa diterima', 'K03', 1, '2023-07-08 00:04:16', '2023-07-08 00:04:16'),
('SK10', 'Kurang', 'Hasil kerja sangat kurang', 'K03', 1, '2023-07-08 00:04:34', '2023-07-08 00:04:34'),
('SK11', 'Baik', 'Sangat kreatifitas', 'K04', 1, '2023-07-08 00:04:50', '2023-07-08 00:04:50'),
('SK12', 'Kurang', 'Kurang kreatifitas', 'K04', 1, '2023-07-08 00:05:09', '2023-07-08 00:05:09'),
('SK13', 'Baik', 'Sosialisasi sangat baik', 'K05', 1, '2023-07-08 00:05:30', '2023-07-08 00:05:30'),
('SK14', 'Cukup Baik', 'Sosialisasi cukup', 'K05', 1, '2023-07-08 00:05:45', '2023-07-08 00:05:45'),
('SK15', 'Kurang', 'Sosialisasi kurang', 'K05', 1, '2023-07-08 00:06:01', '2023-07-08 00:06:01'),
('SK16', 'Sangat Baik', 'Sangat Baik', 'K06', 1, '2023-07-08 02:54:09', '2023-07-08 02:54:09'),
('SK17', 'Baik', 'Baik', 'K06', 1, '2023-07-08 02:54:18', '2023-07-08 02:54:18'),
('SK18', 'Cukup Baik', 'Cukup Baik', 'K06', 1, '2023-07-08 02:54:30', '2023-07-08 02:54:30'),
('SK19', 'Kurang', 'Kurang', 'K06', 1, '2023-07-08 02:54:43', '2023-07-08 02:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` char(20) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_user_level` smallint(3) DEFAULT NULL,
  `id_user_table` char(20) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `flag_aktif` smallint(1) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `id_user_level`, `id_user_table`, `fullname`, `flag_aktif`, `created`, `modified`) VALUES
('U20200413155850hor', 'admin', '$2y$12$adoM2geXUi2lv5KcuFn7rea04.mP8Bi70cjrqNwDyKNSf8VgX6kOy', 1, 'Administrator', 'Administrator', 1, '2020-04-13 15:58:50', '2020-05-16 15:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id` smallint(3) NOT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id`, `name`) VALUES
(1, 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id_sub_kriteria`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
