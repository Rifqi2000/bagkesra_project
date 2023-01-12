<section class="features" id="features">
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