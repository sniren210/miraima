

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2>Tambah Petugas</h2>
             <hr> 
            </div>
                <?php if ($this->session->flashdata('gagal')): ?>
                    <div class="col-md-12">                    
                        <div class="alert alert-danger" role="alert">
                            <?=  $this->session->flashdata('gagal') ?>
                        </div>
                    </div>
                <?php endif ?>
    <?php 
    echo form_open_multipart('admin/petugas/tambah');
     ?> 
            <div class="col-md-12">
            <div class="form-group form-group-lg">
            <label>username</label>
            <input type="text" name="username" placeholder="username" autocomplete="off" class="form-control" value="<?= set_value('username'); ?>">
            </div>
            </div>
            <?= form_error('username', '<div class="col-md-12"><div class="alert alert-danger">', '</div></div>'); ?>


            <div class="col-md-6">
            <div class="form-group form-group-lg">
            <label>password</label>
            <input type="password" name="password1" placeholder="password" autocomplete="off" class="form-control" value="<?= set_value('password1'); ?>">
            </div>
            </div>

            <div class="col-md-6">
            <div class="form-group form-group-lg">
            <label>confirm password</label>
            <input type="password" name="password2" placeholder="confirm password" autocomplete="off" class="form-control">
            </div>
            </div>
            <?= form_error('password1', '<div class="col-md-12"><div class="alert alert-danger">', '</div></div>'); ?>
            

            <div class="col-md-12">
            <div class="form-group">
            <label>Profil</label>
            <input type="file" name="gambar" class="form-control">
            </div>
            </div>
    
            <div class="col-md-12">            
                <div class="form-group">
                <input type="submit" name="submit" value="Tambah Data" class="btn btn-primary btn-lg">
                <a href="<?=  base_url('admin/petugas') ?>">            
                    <input type="button" value="Kembali" class="btn btn-default btn-lg">
                </a>
                </div>
            </div>

    <?php echo form_close() ?> 
            </div>
        </div>
    </div>
</div>

<!--    </form> -->

 