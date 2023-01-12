<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagian Kesejahteraan Rakyat Kota Semarang</title>
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.png" type="image/gif">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/layout.css" />
</head>

<body>
    <?php include 'header.php' ?>

    <section class="features" id="features">
        <br><br><br>
        <h1 class="heading">Artikel</h1>
        <div class='box-container'>
            <?php foreach ($bagkesra as $data) { ?>
                <div class='box'>
                    <img src="<?= base_url() ?>assets/img/uploads/<?= $data->foto_artikel; ?>">
                    <h3><?php echo $data->judul_artikel; ?></h3>
                    <a href='<?= base_url("bagkesra/artikel/" . $data->id_artikel) ?>' class='btn'>Selengkapnya</a>
                </div>
            <?php } ?>
        </div>
    </section>

    <div class="footer" id="footer">
        <?php include 'footer.php' ?>
    </div>
</body>

</html>