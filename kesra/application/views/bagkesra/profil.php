<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagian Kesejahteraan Rakyat Kota Semarang</title>
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.png" type="image/gif">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/profil.css" />
</head>

<body>
    <?php include 'header.php' ?>

    <section class="profil" id="profil">

        <div class="content">

            <h3>Bagian Kesejahteraan Rakyat</h3>
            <p>Kesejahteraan Rakyat merupakan bagian dari Pemerintah Kota Semarang. Terwujudnya kesejahteraan masyarakat dapat menciptakan struktur masyarakat yang seimbang, ideal dan teratur dengan memberi kesempatan kepada semua elemen masyarakat untuk membangun suatu peradaban kehidupan yang layak dan mereka yang lemah mendapatkan bantuan dari pemerintah</p>

        </div>

        <div class="image">
            <!-- <img src="images/home-img.png" alt=""> -->
            <img src="<?php echo base_url(); ?>assets/img/visi.png">
        </div>

    </section>

    <section class="profil" id="profil">

        <div class="image">
            <!-- <img src="images/home-img.png" alt=""> -->
            <img src="<?php echo base_url(); ?>assets/img/tugas.png">
        </div>

        <div class="content">

            <h3>Tugas dan Fungsi</h3>
            <p>Bagian Kesejahteraan Rakyat mempunyai tugas menyusun bahan perumusan kebijakan pemerintahan daerah dan mengkoordinasikan pelaksanaan tugas di bidang kesejahteraan sosial, bidang kesehatan masyarakat, bidang agama, bidang pendidikan dan bidang kebudayaan. Fungsi dari Bagian Kesejahteraan Rakyat yaitu : </p> <br>
            <ol>
                <li>Penyusunan bahan perumusan kebijakan umum pemerintahan daerah dibidang Pelayanan sosial, bidang kesehatan keluarga, bidang agama, bidang pendidikan dan bidang kebudayaan</li>
                <li>Penyusunan rencana program dan rencana kerja anggaran di bidang Pelayanan sosial, bidang kesehatan keluarga, bidang agama, bidang pendidikan dan bidang kebudayaan</li>
                <li>Pengkoordinasian pelaksanaan tugas di bidang pelayanan sosial, bidang kesehatan keluarga, bidang agama, bidang pendidikan dan bidang kebudayaan</li>
                <li>Pelaksanaan dan pembinaan administrasi di bidang pelayanan sosial, bidang kesehatan keluarga, bidang agama, bidang pendidikan dan bidang kebudayaan</li>
                <li>Pelaksanaan pembinaan, pemantauan, pengawasan dan pengendalian di bidang pelayanan sosial, bidang kesehatan keluarga, bidang agama, bidang pendidikan dan bidang kebudayaan</li>
                <li>Pelaksanaan monitoring, evaluasi dan pelaporan pelaksanaan kebijakan di bidang pelayanan sosial, bidang kesehatan keluarga, bidang agama, bidang pendidikan dan bidang kebudayaan</li>
                <li>Penyusunan laporan realisasi anggaran Bagian Kesejahteraan Rakyat</li>
                <li>Penyusunan laporan kinerja program Bagian Kesejahteraan Rakyat</li>
                <li>Pelaksanaan tugas lain yang diberikan oleh Asisten Administrasi Administrasi Perekonomian, Pembangunan dan Kesejahteraan Rakyat sesuai dengan bidang tugasnya</li>
            </ol>

        </div>
    </section>

    <section class="profil" id="profil">

        <div class="content">
            <h3>Struktur Organisasi</h3>
            <a href="<?php echo base_url("bagkesra/struktur") ?>" class="btn">Selengkapnya</a>
        </div>

        <div class="image">
            <!-- <img src="images/home-img.png" alt=""> -->
            <img src="<?php echo base_url(); ?>assets/img/organisasi.png">
        </div>

    </section>

    <div class="footer" id="footer">
        <?php include 'footer.php' ?>
    </div>
</body>

</html>