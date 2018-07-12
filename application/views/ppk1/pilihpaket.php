 <main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Dafta Pilih Paket</h6>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Dashboard</a>
                </li>
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
            <div class="widget-holder col-md-12">
                <div class="widget-bg">
                    <div class="widget-body">
                        <div class="row">
                            <div class="col-md-10">
                                <h5 class="box-title">Pilih Paket</h5>
                            </div>
                        </div>
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
                                        <?php endif?>
                                    </div>
                                </div>
                        <table class="table table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Paket</th>
                                    <th>Keterangan Paket</th>
                                    <th>Upload</th>
                                    <th>Dokumen</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php foreach ($jenis as $u) {?>
                                <tr>
                                    <td><?php echo $u['id_paket'] ?></td>
                                    <td><?php echo $u['nama_paket'] ?></td>
                                    <td><?php echo $u['jenis'] ?></td>
                                    <td><?php echo $u['input_by'] ?></td>
                                    <td>
                                        <a href="<?php echo base_url() ?>"><i class="list-icon feather feather-edit" title="Edit"> Utama</i></a> &nbsp;
                                        <a onclick="return confirm('Apa anda yakin ingin menghapus data ini?')" href="<?php echo base_url() ?>"><i class="list-icon text-danger feather feather-trash-2" title="Delete">Pendukung</i></a>
                                    </td>
                                </tr>
                                <?php } ?>
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