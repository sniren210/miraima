
		<div id="colorlib-main">
			<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-xl-12 py-5 px-md-5">
	    				<div class="row pt-md-4">
	    					<?php foreach ($row as $data): ?>
	    						
							<div class="col-md-12">
		    					<div class="blog-entry-2 ftco-animate" style="border: 2px solid white; padding: 20px;">
		    							<a href="<?=  base_url() ?>upload/thumb/<?=  $data['thumbnail'] ?>" >
		    								<img src="<?=  base_url() ?>upload/thumb/<?=  $data['thumbnail'] ?>" class="img col-md-12">
		    							</a>
		    							<div class="text pt-4">

					              	<div class="half">
						              	<p><a href="<?=  base_url('home/read') ?>/<?=  $data['idPosting'] ?>" class="btn btn-primary btn-sm p-3 px-xl-4 py-xl-3">Continue Reading</a></p>
					              	</div>
					              </div>
					            </div>
	    					</div>
	    					<?php endforeach ?>

	    					</div>
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
			    		</div><!-- END-->
			    	</div>
	    		</div>
	    	</div>
	    </section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

