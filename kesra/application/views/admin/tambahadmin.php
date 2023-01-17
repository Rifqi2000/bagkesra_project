<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"></button>
            <h4 class="modal-title">Tambah Admin</h4>
        </div>
        <?php echo form_open("admin/tambahAdmin", array('enctype' => 'multipart/form-data')); ?>
        <div class="modal-body">
            <div class="form-group">
                <label class="control-label" for="nama">Nama Lengkap</label>
                <input type="text" name="input_nama" class="form-control" id="input_nama" required>
            </div>
            <div class="form-group">
                <label class="control-label" for="email">Email Aktif</label>
                <input type="email" name="input_email" class="form-control" id="input_email" required>
            </div>
            <div class="form-group">
                <label class="control-label" for="username">Username</label>
                <input type="text" name="input_username" class="form-control" id="input_username" required>
            </div>
            <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <input type="password" name="input_password" class="form-control" id="input_password" required>
            </div>
            <div class="form-group">
                <label class="control-label" for="type">Type</label>
                <input type="text" name="input_type" class="form-control" id="input_type" value="administrator" readonly>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-danger">Reset</button>
            <input type="submit" class="btn btn-success" name="submit" value="Simpan">
        </div>
        <?php echo form_close(); ?>
    </div>
</div>