<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"></button>
            <h4 class="modal-title">Balas Pesan</h4>
        </div>
        <?php echo form_open_multipart('admin/balas'); ?>
        <div class="modal-body" id="modal-edit">
            <div class="form-group">
                <label class="control-label" for="email_bagkesra">From</label>
                <input type="email" name="input_email_bagkesra" class="form-control" id="input_email_bagkesra" value="bagkesrasmg@gmail.com">
            </div>
            <div class="form-group">
                <label class="control-label" for="email_rakyat">To</label>
                <input type="email" name="input_email_rakyat" class="form-control" id="input_email_rakyat"></input>
            </div>
            <div class="form-group">
                <label class="control-label" for="subject_pesan">Subject Pesan</label><br>
                <input type="text" name="input_subject_pesan" class="form-control" id="input_subject_pesan">
            </div>
            <div class="form-group">
                <label class="control-label" for="balas_pesan">Balas Pesan</label>
                <textarea name="input_balas_pesan" class="form-control" id="input_balas_pesan"></textarea>
            </div>

        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-danger">Reset</button>
            <input type="submit" class="btn btn-primary" name="submit" value="Kirim">
        </div>
        <?= form_close(); ?>
    </div>
</div>

<script src="assets/js/jquery-1.10.2.js"></script>
<script type="text/javascript">
    $(document).on("click", ".balaspesan", function() {
        var emailrakyat = $(this).data('email_rakyat');

        $("#modal-edit #input_email_rakyat").val(emailrakyat);

    });
</script>