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
             <h2>Tambah Posting</h2>
             <hr> 
            </div>
                <?php if ($this->session->flashdata('gagal')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?=  $this->session->flashdata('gagal') ?>
                    </div>
                <?php endif ?>
    <?php 
    echo form_open_multipart('admin/posting/tambah');
     ?> 
            <div class="col-md-8">
            <div class="form-group form-group-lg">
            <label>Judul</label>
            <input type="text" name="judul" placeholder="Judul" autocomplete="off" class="form-control">
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group form-group-lg">
            <label>Kategori Posting</label>
            <select name="kategori" class="form-control">
                <?php foreach ($kategori as $data): ?>
                    
                    <option value="<?=  $data['idKategori'] ?>"><?=  $data['kategori'] ?></option>
                <?php endforeach ?>
            </select>
            </div>
            </div>


            <div class="col-md-12">

            <div class="form-group">
            <label>Upload thumbnail</label>
            <input type="file" name="gambar" class="form-control">
            </div>

            <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" placeholder="Keterangan" id="keterangan"></textarea>
            </div>

            <div class="form-group">
            <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
            <a href="<?=  base_url('admin/posting') ?>">            
                <input type="button" value="Kembali" class="btn btn-default btn-lg">
            </a>
            </div>

    <?php echo form_close() ?> 
            </div>
        </div>
    </div>
</div>

<!--    </form> -->

 