-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2022 at 07:57 PM
-- Server version: 5.7.36-0ubuntu0.18.04.1
-- PHP Version: 7.3.33-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiqryananta_ksr`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `isi_artikel` text COLLATE utf8_unicode_ci NOT NULL,
  `foto_artikel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_artikel` date DEFAULT NULL,
  `penulis_artikel` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `foto_artikel`, `tanggal_artikel`, `penulis_artikel`) VALUES
(20, 'Launching Bantuan Sosial Melalui Kartu (Bas Merdu) Semarang Hebat', '<p>Launching Bantuan Sosial Melalui Kartu (Bas Merdu) Semarang Hebat<br />\r\n<br />\r\nKegiatan bantuan sosial terdampak Covid-19 berupa sembako melalui APBD Kota Semarang sampai bulan Agustus telah diberikan sebanyak 630.000 paket atau senilai Rp.&nbsp; 67.725.540.000,- diadakan pada tanggal 21 September 2020.<br />\r\n<br />\r\nDengan mempertimbangkan efisiensi, protokol kesehatan dan pemberdayaan ekonomi lokal maka pemberian bantuan langsung berupa barang menjadi dalam bentuk uang melalui Kartu Bansos Semarang Hebat, senilai Rp. 100.000,- per kartu.<br />\r\n<br />\r\nKartu Bansos Semarang Hebat tersebut selanjutnya harus dibelanjakan pada warung-warung di sekitar penerima manfaat dan diharapkan dapat menggulirkan ekonomi lokal.<br />\r\n<br />\r\nPada kegiatan ini dibagikan 210 kartu Bansos Semarang Hebat bagi penerima manfaat di Kelurahan Panggung Lor dan 130.000 untuk masyarakat kota Semarang secara bertahap.</p>\r\n', 'cek.jpg', '2021-11-25', 'adminkesra'),
(21, 'Pemberian Bantuan Sosial Tidak Terencana Santunan Kematian (BT2SK) Tahap III & Pemberian Bantuan Sos', '<p>Pemberian Bantuan Sosial Tidak Terencana Santunan Kematian atau bisa di singkat BT2SK pada tahap ketiga ini di laksanakan secara bersamaan dengan Pemberian Bantuan Sosial Permakanan Bagi Panti Sosial di Kota Semarang pada hari Senin tanggal 23 Desember 2019 di Kelurahan Bendan Ngisor, Kecamatan Gajah Mungkur. Pada hari ini Bapak Hendrar Prihadi, S.E, M.M selaku Walikota Kota Semarang berkenan hadir dan membagikan secara simbolis kepada para Penerima Bantuan Sosial.</p>\r\n', 'download.jpg', '2021-12-13', 'adminkesra'),
(22, 'Kegiatan Penempelan Stiker Keluarga Prasejahtera Kecamatan Semarang Tengah Kelurahan Pendrikan Lor', '<p>Program Kegiatan Penempelan Stiker Keluarga Prasejahtera dari Dinas Sosial Kota Semarang di Kecamatan Semarang Tengah Kelurahan Pendrikan Lor</p>\r\n', 'foto.jpg', '2021-12-13', 'adminkesra'),
(23, 'Sosialisasi Santunan Kematian', '<p>Sosialisasi Santunan Kematian (SANKEM) hari kedua ini berlangsung dengan lancar dengan Undangan para PSM (Pekerja Sosial Masyarakat) se-Kota Semarang dengan Narasumber dari Dinas Sosial tentang Kebijakan SANKEM, BAPPEDA tentang Kebijakan Pengentasan Kemiskinan, dan Bagian Hukum SETDA tentang Teknis Pengajuan Bantuan Sosial Santunan Kematian.</p>\r\n', 'sos.jpg', '2021-12-13', 'adminkesra'),
(24, 'Launching Aplikasi SIDAKSOS “Sistem Informasi Data Terpadu Kesejahteraan Sosial” Tahun 2019', '<p><strong>Sistem Informasi Data Terpadu Kesejahteraan Sosial (Sidaksos)&nbsp;</strong>ini dikembangkan oleh Dinas Sosial Kota Semarang untuk dapat menjawab tentang pentingnya data yang Valid dan ter-update guna ketepatan sasaran dalam Pemberian Bantuan dan Penanganan Fakir miskin di Kota Semarang. Sidaksos ini disediakan sebagai monitoring data dan bahan evaluasi terkait Program Penanganan Fakir Miskin di Kota Semarang yang juga disediakan rekapitulasi Data yang memberikan kemudahan bagi eksekutif dalam pengambilan keputusan.&nbsp;Untuk mendapatkan data yang valid dan up to date Verifikasi secara berkala setahun 2(dua) kali&nbsp; Juli Desember harus terus dilakukan.&nbsp;<strong>SIDAKSOS</strong>&nbsp;memuat Data Terpadu kesejahteraan Sosial Kota Semarang untuk itu Semua OPD yang terkait dengan Pemberdayaan Fakir Miskin dan Pemberian Bantuan harus mengentrikan dalam aplikasi SIDAKSOS sehingga ke depan dapat di ketahui setiap individu atau keluarga miskin sudah terintervensi program dan bantuan apa saja, hal ini digunakan sebagai evaluasi untuk pemerataan bantuan dan monitoring serta evaluasi terhadap bantuan sosial dan pemberdayaan bagi Warga Miskin yang ada di Kota Semarang, sehingga Sinergitas dan komplemetari Program bantuan antara Pusat, Provinsi dan daerah akan dapat terlihat&nbsp; melalui SIDAKSOS. Sidaksos juga memuat Rekapitulasi Data yang terperinci yang dapat menggambarkan kondisi warga miskin di Kota Semarang sehingga bisa membantu Eksekutif dalam pengambilan keputusan lebih lanjut.</p>\r\n', 'sidaksos.jpg', '2021-12-13', 'adminkesra'),
(25, 'Dinas Sosial Bersama Kemensos Melakukan Kunjungan Ke EWARONG Jatingaleh', '<p>Ewarong (elektronik warung gotong royong) adalah salah satu progam pemberdayaan dari Kementerian Sosial untuk itu perlu dilakukan pengawasan secara berkala.&nbsp;Dinas Sosial Bersama Kemensos Melakukan Kunjungan Ke EWARONG Jatingaleh untuk melakukan evaluasi dan pengarahan terhadap pelaku usaha ewarong agar dapat terarah dan lebih maju nantinya.</p>\r\n', 'jatingaleh.jpg', '2021-12-13', 'adminkesra'),
(27, 'Tim PPFM Dinas Sosial Kota Semarang Menanggapi Aduan Warga Mengenai Data BDT di Kelurahan Pelamongan', '<p>Tim PPFM Dinas Sosial Kota Semarang terjun langsung ke rumah warga untuk Menanggapi Aduan-Aduan Warga Mengenai Data BDT di Kelurahan Pelamongan Sari.</p>\r\n', 'test.jpg', '2021-12-13', 'adminkesra'),
(28, 'Pemberian Bantuan Sosial Tidak Terencana Santunan Kematian (BT2SK) tahap I gilir ke-4 di Kec. Semara', '<p>Pemberian Bantuan Sosial Tidak Terencana Santunan Kematian atau bisa di singkat BT2SK pada tahap pertama ini pada hari Rabu tanggal 21 Agustus 2019 gilir ke-4 di laksanakan secara bersamaan oleh Kecamatan Gayamsari, Semarang Timur, Pedurungan, dan Genuk dengan berkumpul di Aula Gaha Sari Kec. Gayamsari. Di hadiri oleh Walikota Kota Semarang, Kesra, seluruh staff Linjamsos juga para Camat dan Lurah dari Kecamatan Kecamatan&nbsp;Gayamsari, Semarang Timur, Pedurungan, Genuk, dan juga dari TP-PKK.</p>\r\n', 'yak.jpg', '2021-12-13', 'adminkesra'),
(29, 'Kegiatan Peningkatan Ketrampilan Berupa Pelatihan Batik Bagi Penerima Manfaat Kesejahteraan Sosial', '<p>Tujuan dilaksanakannya pelatihan batik ini untuk memberikan pengetahuan dan meningkatkan ketrampilan serta keahlian khususnya di bidang pembuatan batik. Diharapkan dengan adanya pelatihan batik ini peserta dapat mengembangkan menjadi lapangan pekerjaan/berwirausaha pembuatan batik untuk meningkatkan ekonomi keluarga.</p>\r\n', 'ntaps.jpg', '2021-12-13', 'adminkesra'),
(32, 'Rapat Koordinasi Data BDT tentang Pemuktahiran Data Sosial Ekonomi dangan PKH dan PPFM', '<p>PKH bekerja sama dengan PPFM untuk melancarkan proses verivikasi dan validasi mengenai Pemuktahiran Data Sosial Ekonomi (PDSE) guna mempercepat dan meminimalisir kesalahan data agar kegiatan verval dapat berjalan dengan semestinya.</p>\r\n', 'pkh4.jpg', '2021-12-23', 'adminkesra'),
(33, 'Kegiatan verifikasi dan validasi basis data terpadu (BDT) di rumah warga miskin', '<p>Penanganan fakir miskin melalui kegiatan verifikasi dan validasi basis data terpadu (BDT) di rumah warga miskin wilayah kelurahan Kaliwiru kecamatan Candisari dilaksanakan oleh Lurah, Kasi Kesos, TKSK, PSM dan RT pada hari Jumat&nbsp;</p>\r\n', 'kegiatan2.jpg', '2021-12-22', 'adminkesra');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_rakyat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email_rakyat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_rakyat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nomor_rakyat` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `pesan_rakyat` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `nama_rakyat`, `email_rakyat`, `alamat_rakyat`, `nomor_rakyat`, `pesan_rakyat`) VALUES
(1, 'Rifqi', 'rifqimulyakiswanto@gmail.com', 'Srondol Asri', '082133172777', 'asjdhjasjkdasd'),
(2, 'Mulya', '111201912186@mhs.dinus.ac.id', 'Srondol Asri', '0821332347374', 'Permisi pak izin bertanya'),
(3, 'Fiqry', 'fiqryananta@gmail.com', 'Semarang', '0895391328090', 'Tes'),
(4, 'Yudi', '111201912186@mhs.dinus.ac.id', 'Banyumanik', '082133172777', 'Masih belum mendapatkan dana bansos'),
(5, 'RMK', '111201912186@mhs.dinus.ac.id', 'Srondol Asri', '082133172777', 'Butuh Bantuan Sosial'),
(6, 'RMK', '111201912186@mhs.dinus.ac.id', 'Srondol Asri', '082133172777', 'Test'),
(7, 'Rifqi Mk', '111201912186@mhs.dinus.ac.id', 'Srondol Asri', '08213317277', 'Belum mendapatkan dana bansos');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `email`, `username`, `password`, `type`) VALUES
(3, 'administrator', 'adminkesra@semarangkota.go.id', 'adminkesra', '5a24331ffcb73b2bcd1aa367042323fb', 'administrator'),
(7, 'Rifqi Mulya Kiswanto', 'rifqimulyakiswanto@gmail.com', 'rifqimulyak', '827ccb0eea8a706c4c34a16891f84e7b', 'administrator'),
(10, 'RMK', '111201912186@mhs.dinus.ac.id', 'rmk', '827ccb0eea8a706c4c34a16891f84e7b', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `penulis_artikel` (`penulis_artikel`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD CONSTRAINT `tb_artikel_ibfk_1` FOREIGN KEY (`penulis_artikel`) REFERENCES `tb_user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
