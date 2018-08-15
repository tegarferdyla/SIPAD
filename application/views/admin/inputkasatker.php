  <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Input Kasatker</h6>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Admin') ?>">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Input Kasatker</li>
                    </ol>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="row">
                <div class="col-md-12">
                     <?php if ($this->session->flashdata('berhasil')): ?>
                        <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button> <i class="material-icons list-icon">check_circle</i>  <strong>Well done!</strong> Akun baru berhasil di daftarkan.
                        </div>
                      <?php elseif ($this->session->flashdata('nipsalah')): ?>
                            <div class="alert alert-icon alert-danger border-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                </button> <i class="material-icons list-icon">not_interested</i>  <strong>Oh snap!</strong> NIP yang dimasukkan sudah terdaftar
                            </div>
                       <?php endif ?>       
                </div>
            </div>
            <div class="widget-list">
                <div class="row">
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title mr-b-0">Kepala Satuan Kerja</h5>
                                <form action="<?php echo base_url('Admin/Tambahkasatker') ?>" method="post">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">NIP</label>
                                        <div class="col-md-9">
                                            <span class="text-danger"><?=form_error('nip') ?></span>
                                            <input class="form-control" id="l0" placeholder="NIP" type="text" name="nip">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Nama Lengkap</label>
                                        <div class="col-md-9">
                                            <span class="text-danger"><?=form_error('nama') ?></span>
                                            <input class="form-control" id="l0" placeholder="Nama Lengkap" type="text" name="nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Bagian</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l0" value="Kasatker" placeholder="Kasatker" type="text" name='divisi' readonly>
                                        </div>
                                    </div>
                                       <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Email</label>
                                        <div class="col-md-9">
                                            <span class="text-danger"><?=form_error('email') ?></span>
                                            <input class="form-control" id="" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l15">Alamat</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="l15" rows="3" name="alamat"></textarea>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <span class="text-danger"><?=form_error('username') ?></span>
                                        <label class="col-md-3 col-form-label" for="l0">Username</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="" placeholder="Username" type="text" name="username">
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="form-group row">
                                            <div class="col-md-9 ml-md-auto btn-list">
                                                <button class="btn btn-primary btn-rounded" type="submit">Submit</button>
                                                <button class="btn btn-outline-default btn-rounded" type="reset">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.widget-list -->
        </main>