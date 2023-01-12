<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"></button>
            <h4 class="modal-title">Edit Artikel</h4>
        </div>
        <?php echo form_open("admin/edit", array('enctype' => 'multipart/form-data')); ?>
        <div class="modal-body" id="modal-edit">
            <div class="form-group">
                <label class="control-label" for="judul_artikel">Id Artikel</label>
                <input type="text" name="input_id_artikel" class="form-control" id="input_id_artikel" readonly>
            </div>
            <div class="form-group">
                <label class="control-label" for="judul_artikel">Judul Artikel</label>
                <input type="text" name="input_judul_artikel" class="form-control" id="input_judul_artikel">
            </div>
            <div class="form-group">
                <label class="control-label" for="isi_artikel">Isi Artikel</label>
                <textarea name="input_isi_artikel" class="ckeditor" id="input_isi_artikel"></textarea>
            </div>
            <div class="form-group" id="container_foto">
            </div>
            <div class="form-group">
                <label class="control-label" for="foto_artikel">Foto Artikel</label><br>
                <input type="file" name="foto_artikel" id="foto_artikel">
            </div>
            <div class="form-group">
                <label class="control-label" for="tanggal_artikel">Update Tanggal Artikel</label>
                <input type="date" name="input_tanggal_artikel" class="form-control" id="input_tanggal_artikel" required>
            </div>

        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-danger">Reset</button>
            <input type="submit" class="btn btn-success" name="submit" value="Simpan">
        </div>
        <?= form_close(); ?>
    </div>
</div>

<script src="assets/js/jquery-1.10.2.js"></script>
<script type="text/javascript">
    $(document).on("click", ".edit_artikel", function() {
        var idartikel = $(this).data('id_artikel');
        var judulartikel = $(this).data('judul_artikel');
        var isiartikel = $(this).data('isi_artikel');
        var fotoartikel = $(this).data('foto_artikel');
        var tanggalartikel = new Date($(this).data('tanggal_artikel'));

        $("#modal-edit #input_id_artikel").val(idartikel);
        $("#modal-edit #input_judul_artikel").val(judulartikel);
        CKEDITOR.instances['input_isi_artikel'].setData(isiartikel);
        $("#modal-edit #input_isi_artikel").CKEDITOR.instances['isiartikel'].getData();

        document.getElementById("container_foto").innerHTML = '<img src="' + fotoartikel + '" width="200px" height="100px">';

        $("#modal-edit #input_tanggal_artikel").val(tanggalartikel.dateToInput());

    });

    Date.prototype.dateToInput = function() {
        return this.getFullYear() + '-' + ('0' + (this.getMonth() + 1)).substr(-2, 2) + '-' + ('0' + this.getDate()).substr(-2, 2);
    }
</script>