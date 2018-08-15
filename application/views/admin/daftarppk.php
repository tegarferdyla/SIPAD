<main class="main-wrapper clearfix">
        <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Daftar PPK</h6>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Admin') ?>">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Daftar PPK</li>
                    </ol>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list">
                <div class="row">
                    <!-- /.widget-holder -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="row">
                                <div class="widget-heading clearfix">
                                    <h5 class="box-title">Daftar PPK</h5>
                                </div>
                             </div>
                            
                            <!-- /.widget-heading -->
                            <div class="widget-body clearfix">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php if ($this->session->flashdata('updateberhasil')): ?>
                                        <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button> <i class="material-icons list-icon">check_circle</i>  <strong>Well done!</strong> PPK berhasil di update.
                                        </div>
                                        <?php elseif ($this->session->flashdata('deleteberhasil')): ?>
                                        <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button> <i class="material-icons list-icon">check_circle</i>  <strong>Well done!</strong> PPK berhasil di Delete.
                                        </div>
                                        <?php elseif ($this->session->flashdata('updategagal')): ?>
                                         <div class="alert alert-icon alert-danger border-danger alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button> <i class="material-icons list-icon">not_interested</i>  <strong>Oh snap!</strong> PPK gagal di update.
                                        </div>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <table class="table table-responsive" data-toggle="datatables">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode PPK</th>
                                            <th>Nama PPK</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no= 1; ?>
                                        <?php 
                                        foreach ($get_ppk  as $u) {
                                           ?>
                                           <tr>
                                            <td><?php echo ($no++); ?></td>
                                            <td><?php echo $u['id_ppk']; ?></td>
                                            <td><?php echo $u['nama']; ?></td>
                                            <td><?php echo $u['keterangan']; ?></td>
                                            <td>
                                                <a href="<?php echo base_url()."Admin/editppk/".$u['id_ppk'];?>"><i class="list-icon feather feather-edit" title="Edit"></i></a> &nbsp;
                                                <a onclick="return confirm('Apa anda yakin ingin menghapus data ini?')" href="<?php echo base_url()."Admin/hapusppk/".$u['id_ppk']; ?>"><i class="list-icon text-danger feather feather-trash-2" title="Delete"></i></a>
                                            </td>
                                        </tr>
                                        <?php 
                                    }
                                 ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.widget-list -->
        </main>