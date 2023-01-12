-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 02:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bagkesra`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `isi_artikel` text COLLATE utf8_unicode_ci NOT NULL,
  `foto_artikel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_artikel` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `foto_artikel`, `tanggal_artikel`) VALUES
(11, 'Dukung Kemajuan Kota, Mbak Ita', '<p>Sinergitas dalam pengelolaan transportasi publik menjadi salah satu kunci perkembangan pariwisata. Hal tersebut ditegaskan pelaksana tugas atau Plt. Wali kota Semarang, Hevearita Gunaryanti Rahayu saat memberikan pengarahan dalam workshop bertemakan Sinergi Diseminasi Informasi Melalui Komunitas Transportasi Publik yang diselenggarakan oleh Dinas Komunikasi, Informatika, Statistik dan Persandian Kota Semarang di Situation Room Balaikota.&nbsp;</p>\r\n\r\n<p>Menurutnya, transportasi merupakan urat nadi atau jantung yang menjadi komponen penting guna menunjang kelancaran jalannya pembangunan dan pengembangan pada suatu wilayah termasuk di Kota Semarang. Selain berfungsi sebagai angkutan orang dan barang, transportasi publik memiliki potensi sebagai media desiminasi informasi. Perempuan yang akrab disapa mbak Ita pun menegaskan perlunya sinergitas antar stakeholder utamanya yang bergerak di sektor transportasi publik.</p>\r\n\r\n<p>&ldquo;Bicara mengenai transportasi publik, kita perlu adanya sinergitas antar stakeholder baik dari Pemerintah Kota Semarang, BUMN yang membidangi ini kan banyak ada Angkasa Pura, Pelindo, kemudian BUMD-nya ada, BLUD juga komunitas-komunitas yang tentunya kita harapkan mereka menjadi satu kesatuan,&rdquo; tutur Mbak Ita, Rabu (14/12).</p>\r\n\r\n<p>Dirinya mendorong jajarannya untuk berkolaborasi dalam menciptakan inovasi produk-produk yang mendukung kemajuan pariwisata, tidak sekedar program-program konvensional. Mbak Ita mencontohkan pemakaian QRIS dan hingga e-wallet yang dapat mempermudah wisatawan dalam bertransaksi selama melakukan kunjungan di Kota Semarang.</p>\r\n\r\n<p>&ldquo;Seperti sebelumnya kami sudah membahas Smart Tourism. Turis manca negara jika ke sini tidak perlu tukar uang ke rupiah tapi bisa menggunalan e-wallet yang otomatis menyesuaikan mata uang kita. Pelaku usaha juga harus memiliki pemikiran yang inovatif seperti sudah menyediakan sistem QRIS hingga mesin edc,&rdquo; jelas Mbak Ita.</p>\r\n\r\n<p>&ldquo;Diperlukan juga komunitas-komunitas untuk mendukung. Setiap melangkah, kita pasti ada kekurangan. Nah kekurangan ini akan ditutupi oleh masukan-masukan dari komunitas. Ada Genpi, komunitas transportasi publik. Ini yang diperlukan kolaborasi seperti ini dan Saya sangat senang teman-teman sudah mulai bisa berkolaborasi, tidak lagi mengedepankan ego sektoral. Kalau kita bicara digitalisasi ada Kominfo, Disbudpar pengampu pariwisata. Kalau nanti pariwisatanya tinggi, multiplier nya orang bisa berbelanja banyak di sini akhirnya apa kesejahteraan masyarakat intinya di situ,&rdquo; imbuh Mbak Ita.</p>\r\n\r\n<p>Terkait sejauh mana digitalisasi telah diterapkan di kota yang dipimpinnya, Mbak Ita berpendapat bahwa digitalisasi di Kota Semarang sudah berjalan dengan cukup baik namun kolaborasinya belum maksimal. Dirinya berharap, ke depannya melalui digitalisasi, dapat tercipta integrasi dalam mengakses transportasi publik.&nbsp;</p>\r\n\r\n<p>&ldquo;Seperti beli tiket kereta api sudah bisa online tapi kan belum terkoneksi dengan moda transportasi setelahnya (bus/transportasi online). Sekarang ini mau tidak mau, suka tidak suka pada saat kemarin saya ada penilaian di Komisi Informasi Publik itu juga ditanya serba digitalisasi. Kemarin kita juga sudah meresmikan signage building sehingga wisatawan yang ingin tahu (mengenai objek wisata yang ada) bisa scan QR code,&rdquo; pungkasnya.</p>\r\n\r\n<p>Workshop tersebut diikuti oleh perwakilan dari penyedia jasa transportasi seperti Maxim, Gojek, Grab, PT KAI, Angkasa Pura, ASITA Jawa Tengah, pihak pemerintahan seperti Dinas Perhubungan, Dinas Kebudayaan dan Pariwisata, dan stakeholder lainnya. Workshop tersebut bertujuan untuk menciptakan langkah strategis guna mengoptimalkan sarana prasarana dan media informasi pada komunitas transportasi maupun pada Pemerintah Kota Semarang sehingga akan mendukung pengembangan dan pembangunan Kota Semarang, utamanya dalam bidang pariwisata.</p>\r\n', 'WhatsApp-Image-2022-12-16-at-00_00_412.jpeg', '2023-01-09'),
(12, 'Respons Cepat Banjir di Dinar ', '<p>Pelaksana tugas atau Plt. Wali Kota Semarang Hevearita Gunaryanti Rahayu langsung turun lapangan meninjau lokasi banjir di Perumahan Dinar Indah, Meteseh, Kecamatan Tembalang, Jumat (6/1/2023).</p>\r\n\r\n<p>Ita mengatakan, Pemerintah Kota (Pemkot) Semarang langsung menerjunkan personil untuk melakukan evakuasi warga. &nbsp;</p>\r\n\r\n<p>Hal tersebut dilakukan Pemkot Semarang bersama Badan Penanggulangan Bencana Daerah (BPBD), Badan Nasional Pencarian dan Pertolongan (Basarnas), Palang Merah Indonesia (PMI), Tentara Nasional Indonesia (TNI), Polisi Republik Indonesia (Polri) dan warga masyarakat serta sukarelawan.</p>\r\n\r\n<p>Adapun banjir di wilayah tersebut terjadi karena tanggul di Sungai Pengkol jebol akibat curah hujan tinggi di wilayah Ungaran. &quot;Ini adalah banjir kiriman dari Ungaran, dari Sungai Pluweh. Dan dampaknya banjir di wilayah Dinar Indah. Di sini yang terdampak ada 1 RT dengan rincian 37 KK dan 147 jiwa. Yang terdampak lagi ada di Sendang Mulyo sekitar 150 jiwa tapi hanya lewat saja (airnya) dan Rowosari 300 jiwa. Saat ini semua sudah surut,&quot; tutur Ita, sapaan akrab Plt. Wali kota dalam siaran persnya.</p>\r\n\r\n<p>Ita menjelaskan bahwa wilayah Dinar Indah memang bukan daerah pemukiman karena berupa cekungan sehingga menjadi langganan banjir.</p>\r\n\r\n<p>Setidaknya di kawasan tersebut sudah tiga kali terjadi banjir. Selain menerjungkan personil, orang nomor satu di Kota Semarang ini mengatakan pihaknya dengan sigap mengirimkan bantuan makananan untuk korban banjir di wilayah tersebut.</p>\r\n\r\n<p>&quot;Tadi kebetulan di balai kota ada dapur umum yang harusnya tutup hari ini karena di wilayah yang terdampak banjir sudah surut semuanya.</p>\r\n\r\n<p>Mendengar seperti ini dapur umum langsung menyiapkan untuk mengirim makan malam dan sudah sampai untuk warga yang mengungsi di masjid,&quot; kata Ita. Adapun untuk tempat pengungsian, Ita mengatakan pihaknya telah menyiapkan gedung diklat yang berada tak jauh dari Perumahan Dinar Indah.</p>\r\n\r\n<p>&nbsp;&quot;Utamanya perempuan dan anak-anak kami arahkan (mengungsi) ke sana.</p>\r\n\r\n<p>Kami bawa pakai bis Pemkot atau kendaraan kami langsir sehingga mereka bisa istirahat dengan nyaman. Semua kebutuhan makanan akan kami cukupi,&quot; lanjutnya.</p>\r\n\r\n<p>Tidak hanya itu, Ita telah pula berkoordinasi dengan Balai Besar Wilayah Sungai (BBWS) dalam penanganan banjir di Dinar Indah. Pasalnya Sungai Pengkol ini juga milik BBWS.</p>\r\n\r\n<p>&quot;Tadi kami sudah berkomunikasi dengan kepala BBWS pak Ade dan sudah dilakukan tindakan-tindakan karena ini airnya lari ke Pucang Gading dan kali Babon jadi kita harus waspada,&quot; kata Ita. &quot;Tapi tadi disampaikan oleh Dinas Pekerjaan Umum (DPU) Bendungan yang di Pluweh ini sudah surut dan hujannya sudah reda.</p>\r\n\r\n<p>DPU juga mengirimkan sandbag untuk menutup tanggul yang jebol,&quot; ujar Ita. Ia mengatakan, pihaknya juga siap mengupayakan relokasi pemukiman warga Dinar Indah ke depannya. &quot;Memang 2 hari ini kita mendapatkan (banjir) kiriman tapi apapun itu kita harus antisipasi.</p>\r\n\r\n<p>Makanya tadi masyarakat yang dari Dinar Indah sudah sadar dan minta direlokasi. Ya kami coba pikirkan untuk relokasi yang terbaik,&quot; ujar Ita.</p>\r\n', 'ita.jpg', '2023-01-09'),
(13, 'Pemkot dan Buruh Sepakati Usul', '<p>Pemerintah Kota (Pemkot) Semarang melalui Dinas Tenaga Kerja sepakat dengan serikat pekerja mengusulkan upah minimum kota (UMK) di Kota Semarang tahun 2023 sebesar Rp 3.060.000 atau naik 7,9 persen dari tahun lalu.</p>\r\n\r\n<p>Kepala Dinas Tenaga Kerja (Disnaker) Kota Semarang, Sutrisno mengatakan, usulan penetapan UMK di Kota Semarang tahun 2023 pihaknya menyepakati dengan serikat pekerja, yakni mengusulkan sebesar Rp 3.060.000. Meski, dari Apindo bersikukuh menolak kenaikan jumlah besaran UMK tahun 2023 tersebut karena mengacu pada PP Nomor 36 tahun 2021 terkait penetapan UMK.</p>\r\n\r\n<p>&quot;Jadi usulan besaran UMK di Kota Semarang tahun 2023 pemerintah sepakat dengan serikat pekerja ada kenaikan sebesar 7,9 persen dari UMK tahun lalu. Nominalnya sekitar Rp 3.060.000,&quot; jelasnya, usai hadiri rapat dewan pengupahan bersama perwakilan Apindo dan serikat pekerja di kantornya, Selasa (29/11).</p>\r\n\r\n<p>Dari usulan serikat pekerja, kata dia juga mengusulkan penghitungan UMK berdasarkan kebutuhan hidup layak ( KHL) namun setelah ikut rapat dewan pengupahan kemudian menyepakati sama dengan usulan pemerintah berdasarkan Permenaker Nomor 18 tahun 2022, yaitu naik 7,9 persen. Namun, dari Apindo menolaknya dan menginginkan menempuh judial review (JR) berdasarkan PP Nomor 36 tahun 2021.</p>\r\n\r\n<p>Hasil dari usulan UMK ini, nantinya akan diusulkan kepada Plt. Wali Kota Semarang untuk diajukan ke Provinsi dengan batas waktu penetapannya sampai awal Desember untuk ditetapkan Gubernur.</p>\r\n\r\n<p>Anggota KSPN Kota Semarang, Slamet Kaswanto mengatakan pihaknya menolak usulan penetapan UMK di Kota Semarang tahun 2023 dari Apindo yang berdasarkan PP Nomor 36 Tahun 2021. Sebenarnya, Serikat Pekerja memiliki dasar penentuan UMK sendiri yaitu berdasarkan kebutuhan hidup layak (KHL), dengan melakukan survei harga kebutuhan pokok di lima pasar Kota Semarang. Yakni diantaranya Pasar Karang ayu, Jatingaleh, Mangkang, Langgar dan Pedurungan.</p>\r\n\r\n<p>&quot;Dari survei di pasar tersebut menghasilkan UMK tahun 2023 sebesar Rp 3,6 juta, atau naik 29 persen dari tahun lalu,&quot; katanya.</p>\r\n\r\n<p>Pihaknya juga menyampaikan agar dalam rapat dewan pengupahan, usulan UMK tahun 2023 dilepaskan dari PP Nomor 36 tahun 2021.</p>\r\n\r\n<p>&quot;Sepakat dengan pemerintah kota Semarang yang diwakili Kepala Dinas Tenaga Kerja berdasarkan Permenaker Nomor 18 Tahun 2022 tentang penetapan UMP tahun 2023, sehingga menjadi sebesar Rp 3.060.000 atau naik sebesar 7,9 persen sekitar Rp 225 ribu dari UMK tahun lalu sebesar Rp 2.800.000,&quot; tandasnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sementara, Sekretaris Apindo Kota Semarang, Nugroho Aprianto mengatakan, pihaknya menolak penetapan UMK tahun 2023 kota Semarang berdasarkan Permenaker Nomor 18 tahun 2022 dengan kenaikan maksimal 10 persen dari tahun lalu. Apindo, kata dia masih berpedoman pada PP Nomor 36 tahun 2021 tentang penghitungan UMK, sehingga tegas menolak Permenaker tersebut.</p>\r\n\r\n<p>&quot;Karena jelas Permenaker Nomor 18 tahun 2022 itu bertentangan dengan peraturan yang lebih tinggi yaitu UU Nomor 13 tahun 2003 tentang Ketenagakerjaan dan UU 11 tahun 2020, serta keputusan Mahkamah Agung tahun 2021, tidak boleh kebijakan justru bertolak belakang dengan UU Cipta Kerja serta bertentangan PP Nomor 36 tahun 2021,&quot; jelasnya.</p>\r\n\r\n<p>Menurutnya, dimana ada sejumlah pasal di dalam PP Nomor 36 tahun 2021 yang diubah dalam Permenaker Nomor 18 tahun 2022 tersebut dan formula penghitungan UMK juga baru tidak seperti yang ada di PP Nomor 36, sebelumnya ada penetapan batas atas dan bawah. &quot;Lalu, baru bisa dihitung besaran UMK-nya. Kalau di formula sesuai Permenaker menjadi berubah memakai penghitungan sama dengan upah minimum sedang berjalan ditambah dengan inflasi dan pertumbuhan ekonomi dikalikan alpa. &quot;Alpa ini hal yang baru dalam penghitungan UMK, yakni produktifitas dan kesempatan kerja dimasukkan, setelah kami tanyakan kepada pihak BPS juga tidak mengetahui ada hal itu. Yang besaran alpa yaitu 0,1 sampai 0,3 batasnya dan nilai besaran UMK-nya tidak boleh lebih dari 10 persen,&quot;paparnya.</p>\r\n\r\n<p>Selain itu, menurutnya di aturan Permenaker Nomor 18 tahun 2022 juga penetapan UMP juga bertentangan dengan PP Nomor 36 tahun 2021, seperti di Permenaker tersebut untuk UMP ditetapkan pada tanggal 21 November, di Permenaker diubah menjadi tanggal 28 November. Sedangkan, untuk waktu penetapan</p>\r\n\r\n<p>UMK pada 31 November diubah menjadi 31 Desember. &quot;Jelas, kata dia dilihat dari tata urutan Permenaker itu menyalahi peraturan di atasnya,&quot; ungkapnya.</p>\r\n\r\n<p>Dalam rapat pleno kali ini, Apindo juga mengusulkan besaran UMK tahun 2023, naik sebesar 4,31 persen, atau sebesar Rp 2,9 juta. &quot;Dalam rapat ini kami tidak sepakat dengan usulan pemerintah dan serikat pekerja, kami punya usulan UMK sebesar Rp 2,9 juta atau naik 4,31 persen. Saat ini, pihak Apindo Nasional bersama kadin dan lainnya juga sedang menempuh uji materil terhadap Permenaker Nomor 18 tahun 2022 ini ke Mahkamah Agung di Jakarta,&quot; pungkasnya.</p>\r\n\r\n<p>Sebelumnya, Pada Senin (28/11), Gubernur Jawa Tengah, Ganjar Pranowo menetapkan besaran Upah Minimun Provinsi (UMP) sebesar Rp 1,9 juta, atau naik sebesar 8,1 persen dari UMP tahun lalu.</p>\r\n', 'IMG_20221118_160349-(1).jpg', '2023-01-09'),
(14, 'Ringankan Beban Nelayan, Pemko', '<p>Dalam rangka membantu meringankan beban para nelayan yang terdampak kenaikan harga BBM dan juga inflasi, Sabtu (26/11) bertempat di Tambaklorok, Kelurahan Tanjung Mas, Pelaksana tugas atau Plt. Wali kota Semarang, Hevearita Gunaryanti Rahayu bersama BPJS menyerahkan 1.200 bantuan paket sembako.</p>\r\n\r\n<p>&ldquo;Ini adalah salah satu upaya dari Pemerintah kota Semarang dan BPJS Ketenagakerjaan (BPJAMSOSTEK) untuk mensupport para nelayan yang terdampak kenaikan harga BBM, inflasi, hingga banjir rob. Adapun Tanjung Mas masuk dalam tujuh kelurahan yang ada di bawah standar. Maka dipacu dengan adanya bantuan, pemberdayaan masyarakat, dibangun sheet pile untuk mengurangi dampak-dampak tersebut. Kita dorong agar tidak sampai setahun pemasangan sheet pile di wilayah Tanjung Mas ini (selesai),&rdquo; tutur perempuan yang akrab di sapa Mbak Ita tersebut.</p>\r\n\r\n<p>Pada kesempatan tersebut, juga dilaksanakan penyerahan santunan secara simbolis kepada ahli waris nelayan dan pedagang ikan diď daerah Tambaklorok oleh BPJS Ketenagakerjaan Semarang Pemuda. Mbak Ita berharap masyarakat akan merasakan manfaat dengan menjadi anggota BPJS ketenagakerjaan dengan membayar iuran yang tentu sudah disesuaikan dengan kemampuan.</p>\r\n\r\n<p>&ldquo;Seperti tadi ada pedagang perempuan yang menerima ahli warisnya sebesar 42 juta. Ini diharapkan menjadi pendorong. Karena yang namanya meninggal dan kecelakaan kan kita tidak tahu. Kita terima kasih kepada BPJS yang sudah mensupport, membantu,&rdquo; ujar Mbak Ita.</p>\r\n\r\n<p>Mbak Ita juga mengapresiasi masyarakat Tanjung Mas yang sudah mulai menerapkan pertanian perkotaan (urban farming). Menurutnya, hal tersebut dapat menghemat biaya belanja harian. Pihaknya bertekad untuk mendorong agar pertanian perkotaan bisa tumbuh bagus di wilayah Tanjung Mas. Di samping itu, dirinya juga menilai saat ini hasil tangkapan ikan para nelayan cukup bagus dan lebih dari cukup.</p>\r\n\r\n<p>&ldquo;Kemarin-kemarin kami juga menyadari panjenengan berkutat dengan rob, dengan banjir dan wilayah-wilayah seperti ini menjadi tanggung jawab Pemerintah Kota Semarang. Jaga kesehatan selalu. Terima kasih juga sudah pada booster untuk mencegah terjangkitnya covid-19. Semangat, berkah, dan selalu dalam lindungan Allah SWT,&rdquo; tandasnya.</p>\r\n', 'WhatsApp-Image-2022-11-27-at-18_56_53.jpeg', '2023-01-10'),
(15, 'Walikota Hendi Sulap Kali Sema', 'Sebanyak 200 kilogram ikan karper dan 10.000 benih ikan karper dan nila disebar di sepanjangan Kali Semarang ruas Jalan Dr. Sutomo, Kota Semarang, Jumat (20/4). Penebaran ikan dan benih ikan tersebut dilakukan oleh Walikota Semarang, Hendrar Prihadi sebagai salah satu inovasi untuk semakin menambah daya tari kawasan Kali Semarang tersebut. Hendi, sapaan akrab Walikota Semarang tersebut pun hadir langsung dalam kegiatan tersebut, dengan secara simbolis menceburkan satu ekor ikan karper dengan berat 5 kilogram.\nDisamping untuk menambah daya tarik wilayah, penebaran ikan di Kali Semarang tersebut juga merupakan salah satu inovasi dalam upaya menjaga kebersihan kali yang telah selesai ditata pada tahun 2017. Penataan tersebut meliputi pengerukan sedimen kali, peningkatan jalan inspeksi, hingga pembangunan taman.\nHendi berkeyakinan dengan ditebarnya sejumlah ikan dan benih ikan di Kali Semarang tersebut, maka akan mampu menumbuhkan rasa memiliki yang lebih besar dalam diri masyrakat sekitar. Ini karena, dirinya mempersilahkan ikan yang berada di Kali Semarang tersebut untuk dipanen oleh masyarakat sekitar, untuk kemudian dioleh menjadi berbagai produk yang dapat dijual untuk menambah pemasukan warga.\n\n\"Satu tahun yang lalu kali ini bisa dibilang kumuh, keruh, dan dangkal, tapi hari ini bisa kita lihat kondisinya sudah jauh berubah menjadi lebih bersih dan nyaman\", tutur Hendi. \"Dan hari ini saya minta masyarakat untuk tidak buang sampah sembarangan, para pedagang juga harus tertib menjaga kebersihan dan kerapian. Ini agar orang menjadi betah datang ke sini, yang ujung-ujungan perputaran uang di sini jadi lebih tinggi\", pinta orang nomor satu Kota Semarang tersebut. \nPada hari itu sendiri, selain dilakukan penebaran ikan, juga diselenggarakan kegiatan lomba mancing yang diikuti oleh berbagai elemen masyarakat di Kota Semarang. Dengan perlombaan yang digelar dalam rangka HUT Kota Semarang ke-471 itu, diharapkan dapat menjadi permulaan kegiatan positif di wilayah tersebut yang akan dilakukan rutin. \n\n\n“Ke depan Pokdarwis (Kelompok Sadar Wisata) akan mengadakan lomba mancing seperti ini setiap hari Sabtu dan Minggu”, ujar Hendi. \"Ini tentu saja bagian dari optimalisasi potensi wisata di wilayah Kali Semarang ini, yang harus terus digali supaya tidak benar-benar menjadi kawasan wisata baru di Kota Semarang\", tambahnya.\n\nDalam lomba mancing kali itu memperebutkan ikan karper yang diceburkan Walikota Semarang seberat 5 kilogram.  Untuk peserta yang mampu memancing ikan yang diceburkan oleh Hendi tersebut, maka berhak membawa pulang hadiah uang tunai sebesar 3 juta rupiah. Sedangkan untuk pemenang kedua dan ketiga, masing-masing akan mendapatkan uang tunai sebesar 2,5 juta rupiah dan 2 juta rupiah.', 'KMF_7361.jpg', '2023-01-10');

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
(3, 'Rifqi', 'rifqimulyakiswanto@gmail.com', 'Srondol Asri', '082133172777', 'Bagaimana ini?');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `add_date` int(11) NOT NULL,
  `edit_date` int(11) NOT NULL,
  `checked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `email`, `username`, `password`, `type`, `add_date`, `edit_date`, `checked`) VALUES
(3, 'administrator', 'adminkesra@semarangkota.go.id', 'adminkesra', '5a24331ffcb73b2bcd1aa367042323fb', 'administrator', 1634626721, 1634626762, 1),
(4, 'haha', '', 'test', '$2y$10$0DTeZ8hrsCaftT0p9Q/vjeOtZoByljxvULCcwKo7SOP8MsbRs/nAq', 'administrator', 0, 0, 0),
(5, 'Rifqi Mulya Kiswanto', 'rifqimulyakiswanto@gmail.com', 'rifqimulyak', '202cb962ac59075b964b07152d234b70', 'administrator', 12122123, 12213213, 1),
(6, 'test', 'test@gmail.com', 'test', '16d7a4fca7442dda3ad93c9a726597e4', 'administrator', 1289210, 1289210, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
