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

        <div class="content-center">

            <h3>Struktur Organisasi</h3>
            <img src="<?php echo base_url(); ?>assets/img/struktur.PNG">

        </div>
    </section>

    <div class="kembali" align="center">
        <a href="<?= base_url("bagkesra/profil") ?>" class='btn'>Kembali</a>
    </div>

    <div class="footer" id="footer">
        <?php include 'footer.php' ?>
    </div>

</body>

</html>