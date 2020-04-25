<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    file_browser_callback: function(field, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
            title: 'KCFinder',
            width: 700,
            height: 500,
            inline: true,
            close_previous: false
        }, {
            window: win,
            input: field
        });
        return false;
    },
    selector: "#keterangan",
    height: 150,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>Edit Posting</h2>
             <hr> 
            </div>
    <?php 
    echo form_open_multipart('admin/kategori/edit/'.$row->idKategori);
     ?> 
            <div class="col-md-12">
            <div class="form-group form-group-lg">
            <label>Kategori</label>
            <input type="text" name="kategori" placeholder="Kategori" value="<?=  $row->kategori ?>" autocomplete="off" class="form-control">
            </div>
            </div>


            <div class="col-md-12">            
                <div class="form-group">
                <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
                <a href="<?=  base_url('admin/posting') ?>">            
                    <input type="button" value="Kembali" class="btn btn-default btn-lg">
                </a>
                </div>
            </div>
    <?php echo form_close() ?>  

            </div>
        </div>
    </div>
</div>



 