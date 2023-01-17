<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagian Kesejahteraan Rakyat Kota Semarang</title>
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.png" type="image/gif">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/artikel.css" />
</head>

<body>
    <?php include 'header.php' ?>

    <section class="artikel" id="artikel">
        <div class="content">
            <h2><?php echo $bagkesra->judul_artikel ?></h2>
            <img src="<?= base_url() ?>assets/img/uploads/<?= $bagkesra->foto_artikel; ?>" width="100%">
            <p><?php echo $bagkesra->isi_artikel ?></p>
            <h5>Disunting pada tanggal <?php $tanggal = $bagkesra->tanggal_artikel;
                                        echo date('d F Y', strtotime($tanggal))  ?></h5>
            <h5>Oleh <?php echo $bagkesra->penulis_artikel ?></h5>

            <a href="<?php echo base_url("bagkesra/tampil_artikel") ?>" class="btn">Kembali</a>

        </div>


    </section>

    <div class="footer" id="footer">
        <?php include 'footer.php' ?>
    </div>
</body>

</html>