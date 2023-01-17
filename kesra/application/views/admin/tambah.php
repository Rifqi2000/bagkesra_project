<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"></button>
            <h4 class="modal-title">Tambah Artikel</h4>
        </div>
        <?php echo form_open("admin/tambah", array('enctype' => 'multipart/form-data')); ?>
        <div class="modal-body" >
            <div class="form-group">
                <label class="control-label" for="judul_artikel">Judul Artikel</label>
                <input type="text" name="input_judul_artikel" class="form-control" id="input_judul_artikel" required>
            </div>
            <div class="form-group">
                <label class="control-label" for="isi_artikel">Isi Artikel</label>
                <textarea name="input_isi_artikel" class="ckeditor" id="input_isi_artikel" required></textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="foto_artikel">Foto Artikel</label><br>
                <input type="file" name="foto_artikel" id="foto_artikel">
            </div>
            <div class="form-group">
                <label class="control-label" for="tanggal_artikel">Tanggal Artikel</label>
                <input type="date" name="input_tanggal_artikel" class="form-control" id="input_tanggal_artikel" required>
            </div>
            <div class="form-group">
                <label class="control-label" for="penulis_artikel">Penulis Artikel</label>
                <input type="text" name="input_penulis_artikel" class="form-control" id="input_penulis_artikel" value="<?php echo $this->session->userdata("nama"); ?>" readonly></input>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="reset" class="btn btn-danger">Reset</button>
            <input type="submit" class="btn btn-success" name="submit" value="Simpan">
        </div>
        
        <?php echo form_close(); ?>
    </div>
</div>

