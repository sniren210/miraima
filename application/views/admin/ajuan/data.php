
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
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="10%">No</th>
                                            <th width="20%">Judul</th>
                                            <th width="20%">kategori</th>
                                            <th width="30%">Tanggal Terbit</th>
                                            <th width="20%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; foreach ($row as $rows): ?>                                            
                                        <tr class="odd gradeX">
                                            <td><?=  $no ?></td>
                                            <td><?=  $rows['judul'] ?></td>
                                            <td><?=  $rows['kategori'] ?></td>
                                            <td class="center"><?=  $rows['tanggal'] ?></td>
                                            <td class="center">
                                                <span class="label label-primary">
                                                    <a href="<?=  base_url('admin/Ajuan/detail/') ?><?=  $rows['idAjuan'] ?>" style="color: white;">Detail</a></span>
                                                <button class="label label-danger" data-toggle="modal" data-target="#Delete<?=  $rows['idAjuan'] ?>">
                                                    Delete
                                                </button>
                                                <button class="label label-success" data-toggle="modal" data-target="#Publish<?=  $rows['idAjuan'] ?>">
                                                    Publish
                                                </button>
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
<div class="modal fade" id="Delete<?=  $rows['idAjuan'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                
                <a href="<?=  base_url('admin/Ajuan/delete/') ?><?=  $rows['idAjuan'] ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Ya, Hapus</a>
                
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php $no++; endforeach ?>

<?php $no=1; foreach ($row as $rows): ?>
<div class="modal fade" id="Publish<?=  $rows['idAjuan'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Publish  Berita</h4>
            </div>
            <div class="modal-body">

            <p class="alert alert-success">Yakin ingin mempublish  berita ini?</p>

            </div>
            <div class="modal-footer">
                
                <a href="<?=  base_url('admin/Ajuan/delete/') ?><?=  $rows['idAjuan'] ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Ya, Publish</a>
                
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php $no++; endforeach ?>
