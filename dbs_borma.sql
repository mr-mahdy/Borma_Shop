-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 08:51 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

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
(62, 'XMAN JAMES MAN KEMEJA PRIA COWO KANTOR KASUAL FORMAL LENGAN PANJANG - Putih, S', 'Fashion Pria', 1, 42000, 'Putih', 'S, M, L, XL', 200, 'gram (g)', 45, 'Baru', 'BUDAYAKAN MEMBACA SEBELUM MEMBELI !!!\r\nREAL PICTURE\r\nBAHAN KATUN STRETCH\r\nMODEL SLIM FIT\r\nKANTONG HIDUP\r\nSIZE CHAT :\r\nLINGKAR DADA X PANJANG BAJU\r\n- XS : 88CM X 65CM\r\n- S : 90CM X 65CM\r\n- M : 100CM X 70CM\r\n- L : 102CM X 70CM\r\n- XL : 104CM X 71CM\r\n\r\n- NOTE :\r\n~ MOHON UNTUK TIDAK REQUEST WARNA MELALUI CHAT\r\n~ SILAKAN PILIH WARNA SESUAI DI VARIASI ATAU TULIS DI KOMENTAR PEMBELI\r\n~ BARANG YG DI BELI TIDAK BISA DI RETUR DENGAN ALASAN APAPUN KECUALI :\r\n~ BARANG CACAT ( SOBEK )\r\n~ KESALAHAN DARI KAMI BILA SALAH KIRIM BARANG\r\n~ UNTUK UKURAN HARAP SESUAIKAN DENGAN SIZE CHAT YG SUDAH ADA, BILA BARANG KEKECILAN TIDAK BISA DI TUKAR\r\n~ MODEL BAJU SLIM FIT COCOK UNTUK PRIA YANG MEMILIKI BADAN SLIM ATAU KURUS\r\n~ TIDAK COCOK UNTUK PRIA YG BERBADAN GEMUK ATAU PERUT BUNCIT\r\n~ TRANSAKSI YG MASUK SEBELUM JAM 17.00 WIB AKAN DI KIRIM HARI YG SAMA LEWAT DARI ITU KIRIM KE ESOKAN HARI NYA\r\n~ PENGIRIMAN SETIAP HARI SENIN – SABTU HARI MINGGU LIBUR', 'kemeja.jpg', 1575200507, 3),
(63, 'Rok Flare 7/8 Bahan Scuba Khusus Hitam', 'Fashion Wanita', 1, 52000, 'Hitam', 'LP: 65-75 cm P: 60 cm', 200, 'gram (g)', 15, 'Baru', 'PROMO\r\n-------------------------------------------------\r\nRok Flare 7/8 Bahan Scuba\r\nKhusus Hitam\r\nFit to L\r\nDibawah Lutut\r\nLP: 65-75 cm\r\nPanjang: 60 cm', 'rok.jpg', 1575200833, 3),
(64, 'Dea - Heels Wanita 1803-113 All Beige Size 36 - 40 - Beige, 36', 'Fashion Wanita', 1, 234900, 'Beige', '36-40 cm', 900, 'gram (g)', 27, 'Baru', 'Detail Produk :\r\n? Sol Anti Slip Tidak licin di lantai\r\n? 100% Sintetic Leather\r\n? Nyaman dipakai\r\n?Cocok untuk formal, Pesta dan casual\r\n? Tinggi hak 5 cm\r\n? Tersedia dalam ukuran 36-40\r\n\r\nAvailable Color : Black & All Beige\r\nSize 36/40\r\n• 36 = 23 cm\r\n• 37 = 23.5 cm\r\n• 38 = 24 cm\r\n• 39 = 24.5 cm\r\n• 40 = 25 cm\r\n_____________________\r\n\r\nNB : Chat sebelum memesan untuk ketersedian stok, dan jika ragu dengan ukuran size kami, ada baiknya ukur telapak kaki anda dengan penggaris, kami akan mencocokan size yang pas di kaki anda, sehingga tidak salah milih size :).\r\n\r\nThank You And Happy Shopping ;)', 'sepatuwanita.jpg', 1575200993, 3),
(65, 'Best RC Dachi Zane Coffee Table Meja Tamu Multifungsi uk 100x40 Brown', 'Furniture & Dekorasi Rumah', 1, 348000, '-', '-', 5, 'Kilogram (kg)', 7, 'Baru', '[ WAJIB DI BACA ]\r\nProsedur dan Ketentuan Pengiriman\r\n1. Untuk Pengiriman Lebih Cepat Bisa Pilih Metode Pengiriman GOSEND/GOJEK/GRAB (HANYA AREA JAKARTA DAN TANGGERANG)\r\n\r\n2. PILIH JNE = HANYA KIRIM INVOICE, PRODUK DIKIRIM DENGAN EKSPEDISI DAKOTA\r\n\r\n3. Customer hanya di charge Berat Barang pada produk 5000gr/ 8000gr (bukan Berat Barang Sebenarnya), dan Produk dikirim dengan DAKOTA (Utk pilihan Kurir JNE) . Kalau pilih GOJEK, Produk dikirim dgn GOJEK juga.\r\n\r\n4. Barang yang dikirim dalam keadaan knockdown, Customer merakit sendiri, perakitan mudah dan disertai intruksi. Mohon maaf kurir tidak melayani perakitan barang.\r\n\r\n5. Mohon dipastikan nomor telepon/HP anda yang tercantum pada invoice order sudah benar dan dalam kondisi selalu aktif.\r\n\r\n6. Produk akan dikirimkan dengan ekspedisi Dakota Cargo via darat/ Kurir Toko sehingga waktu pengiriman 3-7 hari kerja.\r\n\r\n7. SETUJU = NO KOMPLAIN\r\n\r\n8. Untuk pertanyaan lain nya silahkan via Chat ya.\r\n\r\nNOTE : Untuk produk furniture berukuran besar seperti Springbed/Lemari/Meja RiaS/Meja Makan Seller Hanya mengirimkan Invoice. Sementara Produk akan dikirim Oleh kurir Toko', 'fur.jpg', 1575424718, 3);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `nama_item` varchar(255) NOT NULL,
  `id_tipe_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `nama_item`, `id_tipe_item`) VALUES
(5, 'Laptop', 1),
(6, 'Komputer', 1),
(7, 'Handphone', 1),
(8, 'Tablet', 1),
(9, 'Aksesoris Handphone', 1),
(10, 'Aksesoris Komputer', 1),
(13, 'Atasan Wanita', 3),
(14, 'Bawahan Wanita', 3),
(15, 'Sepatu Wanita', 3),
(16, 'Perhiasan', 3),
(17, 'Tas Wanita', 3),
(18, 'Aksesoris Wanita', 3),
(19, 'Dapur', 4),
(20, 'Furniture', 4),
(21, 'Dekorasi Rumah', 4),
(22, 'Pencahayaan', 4),
(23, 'Gym & Fitness', 5),
(24, 'Olahraga', 5),
(25, 'Buku', 5),
(26, 'Stationary', 5),
(27, 'Gaming', 5),
(28, 'Sepatu Pria', 2),
(29, 'Atasan Pria', 2),
(30, 'Bawahan Pria', 2),
(31, 'Jam Tangan Pria', 2),
(32, 'Aksesoris Pria', 2),
(33, 'Admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_penjual`
--

CREATE TABLE `menu_penjual` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_penjual`
--

INSERT INTO `menu_penjual` (`id`, `menu`, `url`) VALUES
(1, 'Overview', 'Penjual/Dashboard'),
(2, 'Pesanan', ''),
(3, 'Produk', ''),
(4, 'Penjualan', ''),
(5, 'Statistik', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `noTelp` varchar(13) NOT NULL,
  `tanggal_dibuat` varchar(20) NOT NULL,
  `verifikasi` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id`, `nama_toko`, `email`, `password`, `noTelp`, `tanggal_dibuat`, `verifikasi`) VALUES
(20, 'sadf', 'stevealfk@gmail.com', 'sfadfg', '34124124123', '18-08-2019', 'Iya'),
(21, 'Mahdy Store', 'stevealfk@gmail.com', '123', '12312312312', '19-08-2019', 'Iya'),
(36, 'Khalifah Gadget', 'Khalifah@gadget.com', '123', '123', '31-08-2019', 'Iya'),
(52, 'Khalifah Gadget', 'Khalifah@gadget.com', '123123', '123', '01-09-2019', 'Iya');

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
(1, 'aaa', 'mr@gmail.com', 'default.jpg', '$2y$10$j06V76vtzIEQQ7fIpuZbB.BxPtlDOX59nb6Y4sK1Q1b9X3u1Oyhfy', 1, 1, '24-11-2019', 0),
(2, 'Mahdy Khairudin', 'mr.mahdy5@gmail.com', 'default.jpg', '$2y$10$yAyAworEFfNW1lfNqz7/xuUsnj3O3T9buiopM7EPPk5kibLPpyWtG', 1, 1, '24-11-2019', 0),
(3, 'Boy Shop', 'boy@gmail.com', 'default.jpg', '$2y$10$PpknhKh.lY66/MsdOgWe9u3DF95fjl5RwD0Sd8fwvbz7AzZ3mReuO', 1, 1, '01-12-2019', 0),
(4, 'Amelia H', 'ahaerizkina@gmail.com', 'default.jpg', '$2y$10$dU4Kj8oqai6NiSjougm1KeD3aBs6jliqHET9v9bbj5glLYUGQw6oS', 2, 1, '13-12-2019', 0),
(5, 'ruth', 'ruthsaanah@gmail.com', 'default.jpg', '$2y$10$9VqZldHq6wT8/028/ABJhOlPym/iIuu9b/g02ZBcO5m0XAJ8jbAQ2', 1, 1, '13-12-2019', 0);

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_produk`
--
ALTER TABLE `daftar_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_penjual`
--
ALTER TABLE `menu_penjual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daftar_produk`
--
ALTER TABLE `daftar_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `menu_penjual`
--
ALTER TABLE `menu_penjual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penjual`
--
ALTER TABLE `penjual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tipe_item`
--
ALTER TABLE `tipe_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
