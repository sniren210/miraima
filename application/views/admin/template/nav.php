
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=  base_url('admin') ?>">Miraima admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?=  date('Y-m-d'); ?>&nbsp;&nbsp;
    <a href="login.html" class="btn btn-success square-btn-adjust"><i class="fa fa-user"></i>&nbsp;Admin</a>&nbsp;&nbsp;
     <a href="<?=  base_url('login/logout') ?>" class="btn btn-danger square-btn-adjust"><i class="fa fa-sign-out"></i>&nbsp;Logout</a> &nbsp;&nbsp;
      <a href="<?=  base_url() ?>" class="btn btn-danger square-btn-adjust"><i class="fa fa-home"></i>&nbsp;HomePage</a>
 </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
					</li>
				
					
                    <li>
                        <a  href="<?=  base_url('admin') ?>"><i class="fa fa-dashboard "></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-book"></i>Posting<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?=  base_url('admin/posting') ?>">Data Posting</a>
                            </li>
                            <li>
                                <a href="<?=  base_url('admin/posting/tambah') ?>">Tambah Posting</a>
                            </li>
                            <li>
                                <a href="<?=  base_url('admin/kategori') ?>">Kategori Posting</a>
                            </li>
                        </ul>
                      </li> 
                    <li>

                        <a href="<?=  base_url('admin/ajuan') ?>"><i class="fa fa-newspaper-o"></i>Ajuan</a>
                      </li> 	
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i>Petugas<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?=  base_url('admin/petugas') ?>">Data Petugas</a>
                            </li>
                            <li>
                                <a href="<?=  base_url('admin/petugas/tambah') ?>">Tambah Petugas</a>
                            </li>
                        </ul>
                      </li>  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->