
		<div id="colorlib-main">
			<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-xl-12 py-5 px-md-5">
	    				<div class="row pt-md-4">
                        <div class="col-md-12">
                            <div class="blog-entry-2 ftco-animate">

                                <img src="<?=  base_url() ?>upload/thumb/<?=  $row->thumbnail ?> " class="col-md-12" style="margin-bottom: 20px; max-height: 70vh; padding: 0; margin-bottom: 0;">
                                <div class="text pt-4 " style="background-color: white; padding: 20px;">
                                	<div class="col-md-12">	
			                          <h3 class=""><?=  $row->judul ?></h3>
			                          <small class="badge badge-primary font-italic" style=""><?=  $row->kategori ?></small>
				                       <p class="mb-4"><?=  $row->deskripsi ?></p>
                                	</div>
                          <div class="author mb-4 d-flex align-items-center">
                                <a href="#" class="img" style="background-image: url(<?=  base_url() ?>upload/admin/<?=  $row->profil ?>);"></a>
                                <div class="ml-3 info">
                                    <span>Written by</span>
                                    <h3><?=  $row->username ?>, <span><?=  $row->tanggal ?></span></h3>
                                </div>
                            </div>
                          <div class="meta-wrap d-md-flex align-items-center">
                            <div class="half order-md-last text-md-right">
                            </div>
                          </div>
                        </div>
                            </div>
                        </div>
                    </div><!-- END-->
			    		<div class="row">
			          <div class="col">
			            <div class="block-27">
			              <ul>
			                <li><a href="#">&lt;</a></li>
			                <li class="active"><span>1</span></li>
			                <li><a href="#">2</a></li>
			                <li><a href="#">3</a></li>
			                <li><a href="#">4</a></li>
			                <li><a href="#">5</a></li>
			                <li><a href="#">&gt;</a></li>
			              </ul>
			            </div>
			          </div>
			        </div>
			    	</div>
	    		</div>
	    	</div>
	    </section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

