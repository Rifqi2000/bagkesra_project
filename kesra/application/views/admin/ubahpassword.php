<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"></button>
            <h4 class="modal-title">Ubah Password</h4>
        </div>
        <?php echo form_open("admin/ubahPassword", array('enctype' => 'multipart/form-data')); ?>
        <div class="modal-body" id="modal-edit">
            <div class="form-group">
                <label class="control-label" for="judul_artikel">Id Admin</label>
                <input type="text" name="input_id" class="form-control" id="input_id" readonly>
            </div>
            <div class="form-group">
                <label class="control-label" for="nama">Nama Lengkap</label>
                <input type="text" name="input_nama" class="form-control" id="input_nama" readonly>
            </div>
            <div class="form-group">
                <label class="control-label" for="email">Email Aktif</label>
                <input type="email" name="input_email" class="form-control" id="input_email" readonly>
            </div>
            <div class="form-group">
                <label class="control-label" for="username">Username</label>
                <input type="text" name="input_username" class="form-control" id="input_username" readonly>
            </div>
            <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <input type="password" name="input_password" class="form-control" id="input_password" required>
            </div>
            <div class="form-group">
                <label class="control-label" for="type">Type</label>
                <input type="text" name="input_type" class="form-control" id="input_type" readonly>
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
        var idadmin = $(this).data('id_admin');
        var namaadmin = $(this).data('name');
        var emailadmin = $(this).data('email');
        var usernameadmin = $(this).data('username');
        var typeadmin = $(this).data('type');
        

        $("#modal-edit #input_id").val(idadmin);
        $("#modal-edit #input_nama").val(namaadmin);
        $("#modal-edit #input_email").val(emailadmin);
        $("#modal-edit #input_username").val(usernameadmin);
        $("#modal-edit #input_type").val(typeadmin);
        

    });
</script>