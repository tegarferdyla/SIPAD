<main class="main-wrapper clearfix">
    <!-- Page Title Area -->
    <div class="row page-title clearfix">
        <div class="page-title-left">
            <h6 class="page-title-heading mr-0 mr-r-5">Edit Akun</h6>
        </div>
        <!-- /.page-title-left -->
        <div class="page-title-right d-none d-sm-inline-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('Bmn') ?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Edit Akun</li>
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
            <div class="col-md-12 widget-holder">
                <div class="widget-bg">
                    <div class="widget-body clearfix">
                        <h5 class="box-title mr-b-0">Edit Password</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <?php if ($this->session->flashdata('updateberhasil')): ?>
                                <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button> <i class="material-icons list-icon">check_circle</i>  <strong>Well done!</strong> Password berhasil di ubah.
                                </div>
                                <?php elseif ($this->session->flashdata('updategagal')): ?>
                                 <div class="alert alert-icon alert-danger border-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button> <i class="material-icons list-icon">not_interested</i>  <strong>Oh snap!</strong> Password lama salah.
                                </div>
                                <?php elseif ($this->session->flashdata('passbeda')): ?>
                                 <div class="alert alert-icon alert-warning border-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button> <i class="material-icons list-icon">not_interested</i>  <strong>Oh snap!</strong> Password tidak sama.
                                </div>
                                <?php endif ?>
                            </div>
                        </div> 
                        <form action="<?php echo site_url('Home/updatepassword') ?>" method="post">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l0">Password Lama</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Password Lama" name="passlama" type="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l0">Password Baru</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Password Baru" type="password"  name="passnew">
                                </div>
                            </div>
                              <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="l0">Konfirmasi Password Baru</label>
                                <div class="col-md-9">
                                    <input class="form-control" placeholder="Konfirmasi Password Baru" type="password"  name="repassnew">
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