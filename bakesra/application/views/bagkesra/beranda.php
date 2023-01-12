<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagian Kesejahteraan Rakyat Kota Semarang</title>
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.png" type="image/gif">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/layout.css" />

</head>

<body>

    <?php include 'header.php' ?>

    <section class="home" id="home">

        <div class="content">

            <h3>Bagian Kesejahteraan Rakyat</h3>
            <p>Kesejahteraan Rakyat merupakan bagian dari Pemerintah Kota Semarang. Bagian Kesejahteraan Rakyat Kota Semarang merupakan dibawah dari Dinas Sosial Kota Semarang</p>
            <a href="<?php echo base_url("bagkesra/profil") ?>" class="btn">Profil Bagian</a>

        </div>

        <div class="image">
            <!-- <img src="images/home-img.png" alt=""> -->
            <img src="<?php echo base_url(); ?>assets/img/logokota.png">
        </div>

    </section>

    <section class="features" id="features">
        <h1 class="heading">Artikel</h1>
        <div class='box-container'>
            <?php $nomor = 0;
            foreach ($bagkesra as $data) {
                if ($nomor == 0) { ?>
                    <div class='box-utama'>
                        <img src="<?= base_url() ?>assets/img/uploads/<?= $data->foto_artikel; ?>">
                        <h3><?php echo $data->judul_artikel; ?></h3>
                        <a href='<?= base_url("bagkesra/artikel/" . $data->id_artikel) ?>' class='btn'>Selengkapnya</a>
                    </div>
                    <br>

                <?php $nomor++;
                } elseif ($nomor > 0 && $nomor < 3) { ?>
                    <div class='box'>
                        <img src="<?= base_url() ?>assets/img/uploads/<?= $data->foto_artikel; ?>">
                        <h3><?php echo $data->judul_artikel; ?></h3>
                        <a href='<?= base_url("bagkesra/artikel/" . $data->id_artikel) ?>' class='btn'>Selengkapnya</a>
                    </div>
                <?php $nomor++;
                } ?>
            <?php } ?>
        </div>
        <div class="all" align="right">
            <a href="<?= base_url("bagkesra/tampil_artikel/") ?>">Lebih Banyak</a>
        </div>
    </section>



    <section class="contact" id="contact">

        <div class="image">
            <img src="<?php echo base_url(); ?>assets/img/pesan.png">
        </div>
        <?php echo form_open("bagkesra/kontak"); ?>
        <form method="POST" action="">

            <h1 class="heading">KONTAK</h1>

            <div class="inputBox">
                <input type="text" name="nama_rakyat" required>
                <label>name</label>
            </div>

            <div class="inputBox">
                <input type="email" name="email_rakyat" required>
                <label>email</label>
            </div>

            <div class="inputBox">
                <input type="text" name="alamat_rakyat" required>
                <label>alamat</label>
            </div>

            <div class="inputBox">
                <input type="number" name="nomor_rakyat" required>
                <label>phone</label>
            </div>

            <div class="inputBox">
                <textarea required name="pesan_rakyat" id="" cols="30" rows="10"></textarea>
                <label>pesan</label>
            </div>

            <input type="submit" class="btn" name="submit" value="Kirim Pesan">

        </form>

    </section>

    <section class="berita" id="berita">
        <div class='box-container'>
            <div class='box'>
                <h3>Berita Kota Semarang</h3>
                <iframe src="http://smartcity.semarangkota.go.id/public/rssberita/index.php" height="300px" width='100%' scrolling="yes" frameborder="0"></iframe>
            </div>
            <div class='box'>
                <h3>Jadwal Kegiatan</h3>
                <iframe src="http://webservice.infokegiatan.semarangkota.go.id/data.php" height="300px" width='100%' scrolling="yes" frameborder="0"></iframe>
            </div>
            <div class='box'>
                <h3>Twitter Hendi</h3>
                <a class="twitter-timeline" height="300px" width="100%" href="https://twitter.com/hendrarprihadi">Tweets by Hendi (Hendrar Prihadi)</a>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </section>

    <div class="footer" id="footer">
        <?php include 'footer.php' ?>
    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>