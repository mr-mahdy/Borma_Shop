-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 06:28 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_borma`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_produk`
--

CREATE TABLE `daftar_produk` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `min_order` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `color` varchar(128) NOT NULL,
  `size` varchar(64) NOT NULL,
  `weight` int(11) NOT NULL,
  `unit_weight` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `condition` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_upload` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_produk`
--

INSERT INTO `daftar_produk` (`id`, `name`, `category`, `min_order`, `price`, `color`, `size`, `weight`, `unit_weight`, `stock`, `condition`, `description`, `image`, `date_upload`, `id_user`) VALUES
(58, 'kamera canon', 'Elektronik', 1, 6500000, 'Hitam', '12x10x7.5 cm', 2, 'Kilogram (kg)', 5, 'Baru', 'fgss', 'kamera.jpg', 1574694870, 2),
(59, 'HP Samsung S7', 'Elektronik', 1, 8500000, 'Hitam', '12x10cm', 500, 'Kilogram (kg)', 7, 'Baru', 'Handphone Samsung S7', 'hp.jpg', 1574696503, 2),
(60, 'Sepatu Coklat', 'Fashion Pria', 1, 150000, 'Coklat', '37,38,39,40cm', 20, 'gram (g)', 50, 'Baru', 'Sepatu coklat tren', 'sepatu.jpg', 1574696958, 1),
(61, 'Treadmill Commercial Gymost', 'Sport & Stationary', 1, 38000000, 'Hitam', '2140 x 910 x 150 mm', 165, 'Kilogram (kg)', 3, 'Baru', 'Control panel : 15.6 inch TFT Screen\r\n\r\nMotor 3-6 HP AC Horsepower\r\n\r\nSpeed Range 1-22km/h\r\n\r\nSlope Range 0-15*\r\n\r\nExercise Program : 36 preset motion programs * 1 manual motion program\r\n\r\nEntertainment feature : MP3, Video player, Wifi Internet\r\n\r\nHeart Rate Monitor : Have\r\n\r\nRunway Area : 1550 * 580 mm', 'treadmill.jpg', 1574697885, 1),
(62, 'KEMEJA PRIA COWO KANTOR KASUAL', 'Fashion Pria', 1, 42000, 'Putih', 'S, M, L, XL', 200, 'gram (g)', 45, 'Baru', 'BAHAN KATUN STRETCH\r\nMODEL SLIM FIT\r\n', 'kemeja.jpg', 1575200507, 3),
(63, 'Rok Flare Bahan Scuba Khusus Hitam', 'Fashion Wanita', 1, 52000, 'Hitam', 'LP: 65-75 cm P: 60 cm', 200, 'gram (g)', 15, 'Baru', 'PROMO\r\n------------------------\r\nRok Flare 7/8 Bahan Scuba\r\nKhusus Hitam\r\nFit to L\r\nDibawah Lutut', 'rok.jpg', 1575200833, 3),
(64, 'Dea - Heels Wanita', 'Fashion Wanita', 1, 234900, 'Beige', '36-40 cm', 900, 'gram (g)', 27, 'Baru', 'Detail Produk :\r\n? Sol Anti Slip Tidak licin di lantai\r\n? 100% Sintetic Leather\r\n? Tinggi hak 5 cm\r\n? Tersedia dalam ukuran 36-40\r\n', 'sepatuwanita.jpg', 1575200993, 1),
(65, 'Best RC Dachi Zane Coffee Table Meja Tamu Multifungsi uk 100x40 Brown', 'Furniture & Dekorasi Rumah', 1, 348000, '-', '-', 5, 'Kilogram (kg)', 7, 'Baru', '[ WAJIB DI BACA ]\r\nProsedur dan Ketentuan Pengiriman\r\n1. Untuk Pengiriman Lebih Cepat Bisa Pilih Metode Pengiriman GOSEND/GOJEK/GRAB (HANYA AREA JAKARTA DAN TANGGERANG)\r\n\r\n2. PILIH JNE = HANYA KIRIM INVOICE, PRODUK DIKIRIM DENGAN EKSPEDISI DAKOTA\r\n\r\n3. Customer hanya di charge Berat Barang pada produk 5000gr/ 8000gr (bukan Berat Barang Sebenarnya), dan Produk dikirim dengan DAKOTA (Utk pilihan Kurir JNE) . Kalau pilih GOJEK, Produk dikirim dgn GOJEK juga.\r\n\r\n4. Barang yang dikirim dalam keadaan knockdown, Customer merakit sendiri, perakitan mudah dan disertai intruksi. Mohon maaf kurir tidak melayani perakitan barang.\r\n\r\n5. Mohon dipastikan nomor telepon/HP anda yang tercantum pada invoice order sudah benar dan dalam kondisi selalu aktif.\r\n\r\n6. Produk akan dikirimkan dengan ekspedisi Dakota Cargo via darat/ Kurir Toko sehingga waktu pengiriman 3-7 hari kerja.\r\n\r\n7. SETUJU = NO KOMPLAIN\r\n\r\n8. Untuk pertanyaan lain nya silahkan via Chat ya.\r\n\r\nNOTE : Untuk produk furniture berukuran besar seperti Springbed/Lemari/Meja RiaS/Meja Makan Seller Hanya mengirimkan Invoice. Sementara Produk akan dikirim Oleh kurir Toko', 'fur.jpg', 1575424718, 3);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jasa_pengiriman` varchar(30) NOT NULL,
  `jenis_pembayaran` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `id_pembeli`, `id_produk`, `jumlah`, `jasa_pengiriman`, `jenis_pembayaran`, `status`, `created_date`) VALUES
(1, 2, 60, 1, 'JNE', 'Paypal', 'Kirim', '25-12-2019'),
(2, 2, 60, 2, 'J&T Express', 'COD', 'Kirim', '25-12-2019'),
(3, 2, 59, 1, 'J&T Express', 'COD', 'Belum', '25-12-2019'),
(4, 2, 58, 1, 'J&T Express', 'COD', 'Belum', '25-12-2019'),
(5, 1, 65, 1, 'POS Indonesia', 'Bank Transfer', 'Kirim', '25-12-2019'),
(6, 1, 64, 1, 'POS Indonesia', 'Bank Transfer', 'Kirim', '25-12-2019');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(11) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `tgl_lhr` varchar(20) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id`, `jenis_kelamin`, `tgl_lhr`, `telepon`, `alamat`) VALUES
(1, 'L', '05-11-1998', '08953469', 'jl sindang sari'),
(2, 'L', '20-11-2000', '08951421', 'jl Sarijadi');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_item`
--

CREATE TABLE `tipe_item` (
  `id` int(11) NOT NULL,
  `tipe_item` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_item`
--

INSERT INTO `tipe_item` (`id`, `tipe_item`) VALUES
(1, 'Elektronik'),
(2, 'Fashion Pria'),
(3, 'Fashion Wanita'),
(4, 'Furniture & Dekorasi Rumah'),
(5, 'Sport & Stationary');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` varchar(128) NOT NULL,
  `id_pembeli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `id_pembeli`) VALUES
(0, 'mahdy', 'mr.mahdy@gmail.com', 'default.jpg', '$2y$10$A8dQTj3Pw3Zib0VCWSncvu1GRZOzDVfj2kl5cIOCanUINoVb2AqzC', 2, 1, '24-12-2019', 1),
(1, 'Boy Shop', 'boy@gmail.com', 'default.jpg', '$2y$10$1Blp4U6obSZ.vKxsFe1OSur6vDXpN1Q2wzy2TK4fPfbsCs3PPSUxK', 1, 1, '24-12-2019', 0),
(2, 'Girl Shop', 'girl@gmail.com', 'default.jpg', '$2y$10$4IxQ/Ei2hy4CgsCkIL4N3uWdE5eKjCEFr9thOFTZYVPdoXDZT9saW', 1, 1, '24-12-2019', 0),
(3, 'Shoes Shop', 'ss@gmail.com', 'default.jpg', '$2y$10$T6QBX03OW3XGknwuJSPhdudRu2UQAZrirNVIBNTXLI8wAmH/sugPW', 1, 1, '24-12-2019', 0),
(11, 'boy', 'boy5@gmail.com', 'default.jpg', '$2y$10$PIhKsgPGukxpLAYS6T0lQu56FPACXynhl8l.bfXXMsP1YAmsY5gPG', 2, 1, '24-12-2019', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Seller'),
(2, 'Buyer');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(0, 'stevealfk@gmail.com', 'lbXZrPpfeoIlh9F1EIJ0nIY7JLyOhZXiJmfivqOUFRc=', 1566107909),
(0, 'stevealfk@gmail.com', 'wJvegHQEDU9GOsBINPPFZIkM0/IvI8lfbMey1noLOk0=', 1566108353),
(0, 'stevealfk@gmail.com', 'pYGB4M2lY5Fwn1/NjtJcJsBiVdtq+YKVe7m28eX1rRQ=', 1566108759),
(0, 'stevealfk@gmail.com', 'qtFzbTb8Qc6uDCiwR6MXSL5U6I2iTB9Qr+Bx15DYgVI=', 1566108763),
(0, 'stevealfk@gmail.com', 'uPCaKQgHJq5Dyop4+z+y6LpAd7ptCqZ/ZmmNcfslnWg=', 1566108797),
(0, 'stevealfk@gmail.com', 'beBCa797zYhX6j/xMXTmbPL9BQQ1oZ6JC8JVE+rs8lk=', 1566189807),
(0, 'barber@gmail.com', 'PXXhMcMgMhagD4zgOJjHSMKfo7hg0B+97UOwly7+/fY=', 1566925139);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_produk`
--
ALTER TABLE `daftar_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_item`
--
ALTER TABLE `tipe_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_produk`
--
ALTER TABLE `daftar_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipe_item`
--
ALTER TABLE `tipe_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
