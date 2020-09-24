-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jan 2018 pada 03.15
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autojuara`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `full_name`, `username`, `password`, `last_login`) VALUES
(2, 'Muhammad Ilman Nurhakim', 'ilman', '8e633fe77acab4fdf3a7f45f29a2af91', '2018-01-04'),
(3, 'Kelompok 3', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-01-04'),
(4, 'Thiago', 'thiago', '8c278462dc2f486dd9697edc17eff391', '2018-01-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `classi_id` int(11) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `price` bigint(30) NOT NULL,
  `spec` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `car`
--

INSERT INTO `car` (`car_id`, `classi_id`, `car_name`, `price`, `spec`) VALUES
(1, 2, 'Mitsubishi Xpander Ultimate (JDM)', 350000000, '<p><strong>Mitsubishi Xpander tipe GLX (MT)</strong><br />\r\n&ndash; Lingkar roda standar 15&Prime; (plastik dop)<br />\r\n&ndash; Piano black front grille<br />\r\n&ndash; Color key door mirror<br />\r\n&ndash; Color key door handle<br />\r\n&ndash; Door mirror side turn lamp<br />\r\n&ndash; Front air conditioner (single blower)<br />\r\n&ndash; Power window<br />\r\n&ndash; Central door lock<br />\r\n&ndash; Electric door mirror<br />\r\n&ndash; Fabric seat materials<br />\r\n&ndash; Urethane steering wheel<br />\r\n&ndash; Semi-high contrast meter cluster<br />\r\n&ndash; Multi information display<br />\r\n&ndash; Audio less with 2 speakers<br />\r\n&ndash; 12V accessory socket<br />\r\n&ndash; Side impact beam<br />\r\n&ndash; Dual airbags<br />\r\n&ndash; ABS+EBD<br />\r\n&ndash; ISOFIX child restraint seat<br />\r\n&ndash; Emergency Stop Signal (ESS)<br />\r\n&ndash; Immobilizer<br />\r\n&mdash; 5 speed MT</p>\r\n\r\n<p><strong>Mitsubishi Xpander tipe GLS (MT)</strong><br />\r\n&ndash; Semua spesifikasi tipe GLX, plus;<br />\r\n&ndash; Alloy wheel 15&Prime;<br />\r\n&ndash; Fog lamp<br />\r\n&ndash; Rear air conditioner blower (double blower)<br />\r\n&ndash; Remote entry system with alarm<br />\r\n&ndash; Unique wide 2DIN audio, CD/MP3 player, USB port with 4 speakers<br />\r\n&ndash; Welcome light<br />\r\n&ndash; Coming home light</p>\r\n\r\n<p><strong>Mitsubishi Xpander tipe Exceed (AT &ndash; MT)</strong><br />\r\n&ndash; Semua spesifikasi tipe GLS, plus;<br />\r\n&ndash; 16&Prime; two-tone alloy wheel<br />\r\n&ndash; Electronic folding mirror<br />\r\n&ndash; High grade fabric seat materials &ndash; dengan water repellent<br />\r\n&ndash; Semi-high contrast meter cluster with decoration<br />\r\n&ndash; Driver seat height adjuster<br />\r\n&ndash; Seatback pocket (Driver side)<br />\r\n&ndash; Audio remote control steering switch<br />\r\n&ndash; 12V accessory socket (x3)<br />\r\n&mdash; 4-speed AT dan 5-speed MT</p>\r\n\r\n<p><strong>Mitsubishi Xpander tipe Sport (AT)</strong><br />\r\n&ndash; Semua spesifikasi tipe Exceed, plus;<br />\r\n&ndash; Chrome + clear smoke grille<br />\r\n&ndash; Leather wrapped steering wheel<br />\r\n&ndash; Leather wrapped AT shift knob<br />\r\n&ndash; Leather wrapped parking brake lever<br />\r\n&ndash; Deluxe type floor console<br />\r\n&ndash; High contrast meter cluster<br />\r\n&ndash; Color LCD multi information display<br />\r\n&ndash; Keyless operation display (KOS)<br />\r\n&ndash; Engine start/stop button<br />\r\n&ndash; Unique wide 2DIN audio with 6 speakers<br />\r\n&ndash; Brake Assist (BA)<br />\r\n&ndash; Hill Start Assist (HSA)<br />\r\n&ndash; Active Stability Control (ASC) with Traction Control Logic (TCL)</p>\r\n\r\n<p><strong>Mitsubishi Xpander tipe Ultimate (AT only)</strong><br />\r\n&ndash; Semua spesifikasi tipe Sport<br />\r\n&ndash; Chrome door handle<br />\r\n&ndash; Chrome door mirror<br />\r\n&ndash; Hands free function with steering switch<br />\r\n&ndash; Unique wide 2DIN touchscreen audio (Sony tipe Mega Bass), DVD player, USB port with speakers<br />\r\n&ndash; Rear view camera</p>\r\n\r\n<p>Kemudian, untuk pilihan warna masing-masing adalah; varian Ultimate (AT) dan Sport (AT)<br />\r\ntersedia pilihan dari Quartz White Pearl, Diamond Black Mica, Silver, Red Metallic, dan Titanium Grey. Sementara varian Exceed (AT), Exceed (MT), GLS dan GLX (MT) ada pilihan Quartz White Pearl, Diamond Black Mica, dan Silver.</p>\r\n'),
(2, 5, 'BMW 7 Series M Sport', 4000000000, ''),
(3, 3, 'Honda Brio', 400000000, '<p style=\"text-align:center\">jskdnfiubhbkbhbh</p>\r\n\r\n<p>bhkbhkbhkb</p>\r\n\r\n<p>-</p>\r\n\r\n<p>i</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(4, 2, 'Avanza', 200000000, '<p>-1200 cc</p>\r\n\r\n<p>-5 speed</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `classi_car`
--

CREATE TABLE `classi_car` (
  `classi_id` int(11) NOT NULL,
  `classi_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `classi_car`
--

INSERT INTO `classi_car` (`classi_id`, `classi_name`) VALUES
(2, 'MPV'),
(3, 'Hatchback'),
(4, 'SUV'),
(5, 'Sedan'),
(6, 'Coupe'),
(7, 'VAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `transaction_date` date NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `transaction_date`, `admin_id`) VALUES
(1, '2017-12-31', 2),
(2, '2017-12-31', 2),
(3, '2017-12-31', 2),
(4, '2018-01-03', 2),
(5, '2018-01-04', 3),
(6, '2018-01-04', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `t_detail_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `price` bigint(30) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaction_detail`
--

INSERT INTO `transaction_detail` (`t_detail_id`, `car_id`, `qty`, `transaction_id`, `price`, `status`) VALUES
(2, 1, 9, 3, 350000000, '1'),
(3, 2, 1, 4, 4000000000, '1'),
(4, 3, 1, 5, 400000000, '1'),
(5, 4, 1, 6, 200000000, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `classi_car`
--
ALTER TABLE `classi_car`
  ADD PRIMARY KEY (`classi_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`t_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `classi_car`
--
ALTER TABLE `classi_car`
  MODIFY `classi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `t_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
