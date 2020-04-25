
       <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Table Examples</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <?php if ($this->session->flashdata('sukses')): ?>                 
                     <div class="alert alert-success" role="alert">
                        <?=  $this->session->flashdata('sukses'); ?>
                    </div>
                 <?php endif ?>
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <a href="<?=  base_url('admin/kategori/tambah') ?>" class="btn btn-primary">Tambah</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="10%">No</th>
                                            <th width="50%">Nama Kategori</th>
                                            <th width="50%">aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; foreach ($row as $rows): ?>                                            
                                        <tr class="odd gradeX">
                                            <td><?=  $no ?></td>
                                            <td><?=  $rows['kategori'] ?></td>
                                            <td class="center">
                                                <button class="label label-danger" data-toggle="modal" data-target="#Delete<?=  $rows['idKategori'] ?>">
                                                    Delete
                                                </button>
                                                <span class="label label-success">
                                                    <a href="<?=  base_url('admin/kategori/edit/') ?><?=  $rows['idKategori'] ?>" style="color: white;">Edit</a></span>
                                            </td>
                                        </tr>
                                        
                                        <?php $no++; endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
    </div>
<?php $no=1; foreach ($row as $rows): ?>
<div class="modal fade" id="Delete<?=  $rows['idKategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Hapus  Berita</h4>
            </div>
            <div class="modal-body">

            <p class="alert alert-success">Yakin ingin menghapus  berita ini?</p>

            </div>
            <div class="modal-footer">
                
                <a href="<?=  base_url('admin/kategori/delete/') ?><?=  $rows['idKategori'] ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Ya, Hapus</a>
                
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php $no++; endforeach ?>
