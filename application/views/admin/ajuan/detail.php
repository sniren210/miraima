
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Detail Posting</h2>
                     <hr>   

                    <div class="row pt-md-4">
                        <div class="col-md-12">
                            <div class="blog-entry-2 ftco-animate">

                                <img src="<?=  base_url() ?>upload/ajuan/<?=  $row->thumbnail ?> " class="col-md-12" style="margin-bottom: 20px; height: auto; max-width: 100%;">
                                <div class="text pt-4 " style="background-color: white; padding: 20px;">
                          <h3 class="mb-4 "><?=  $row->judul ?></h3>
                          <span class="badge"><?=  $row->kategori ?></span>
                          <p class="mb-4"><?=  $row->deskripsi ?></p> 
                          <div class="form-group">  
                            <a href="<?=  base_url('admin/posting') ?>">            
                                <input type="button" value="Kembali" class="btn btn-danger btn-lg">
                            </a>
                          </div>
                        </div>
                            </div>
                        </div>
                    </div><!-- END-->
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            </div>
             <!-- /. PAGE INNER  -->
        </div> 