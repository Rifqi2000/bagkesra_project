<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagian Kesejahteraan Rakyat Kota Semarang</title>
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.png" type="image/gif">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/allartikel.css" />
</head>

<body>
    <?php include 'header.php' ?>

    <section class="features" id="features">
        <br><br><br>
        <h1 class="heading">Artikel</h1>
        <div class='box-container'>
            <?php $no = $offset;

            foreach ($bagkesra as $data) { ?>
                <?php if (strlen($data->judul_artikel) > 30) { ?>
                    <div class='box-utama'>
                        <img src="<?= base_url() ?>assets/img/uploads/<?= $data->foto_artikel; ?>" width="300px">
                        <h3><?php echo  substr($data->judul_artikel, 0, 50), " ..."; ?></h3>
                        <a href='<?= base_url("bagkesra/artikel/" . $data->id_artikel) ?>' class='btn'>Selengkapnya</a>
                    </div>
                <?php } else { ?>
                    <div class='box-utama'>
                        <img src="<?= base_url() ?>assets/img/uploads/<?= $data->foto_artikel; ?>" width="300px">
                        <h3><?php echo $data->judul_artikel ?></h3>
                        <a href='<?= base_url("bagkesra/artikel/" . $data->id_artikel) ?>' class='btn'>Selengkapnya</a>
                    </div>
                <?php } ?>



            <?php $no++;
            } ?>
        </div>
    </section>

    <?php echo $halaman; ?>

    <div class="footer" id="footer">
        <?php include 'footer.php' ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>