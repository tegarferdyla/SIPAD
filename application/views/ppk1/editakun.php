  <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Edit Akun</h6>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('ppk1') ?>">Dashboard</a>
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
                                <h5 class="box-title mr-b-0">Edit Profile</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php if ($this->session->flashdata('updateberhasil')): ?>
                                        <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button> <i class="material-icons list-icon">check_circle</i>  <strong>Well done!</strong> User berhasil di update.
                                        </div>
                                        <?php elseif ($this->session->flashdata('deleteberhasil')): ?>
                                        <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button> <i class="material-icons list-icon">check_circle</i>  <strong>Well done!</strong> User berhasil di Delete.
                                        </div>
                                        <?php elseif ($this->session->flashdata('updategagal')): ?>
                                         <div class="alert alert-icon alert-danger border-danger alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button> <i class="material-icons list-icon">not_interested</i>  <strong>Oh snap!</strong> User gagal di update.
                                        </div>
                                        <?php endif ?>
                                    </div>
                                </div> 
                                <?php echo form_open_multipart('ppk1/changeprofile'); ?>
                                    <div class="form-group row">
                                        <div class="col-md-12 text-center">
                                            <img src="<?php echo base_url('assets/img/'.$user['foto']) ?>" class="rounded-circle img-thumbnail thumb-lg " style="width:190px"  alt="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label"> Ganti Foto</label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control" name="myfiles" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">NIP</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="<?php echo $user['NIP'] ?>" placeholder="" value="" type="text" name="nip" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Nama </label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="" placeholder="" type="text"  name="nama_user" value="<?php echo $user['nama'] ?>" required>
                                        </div>
                                    </div>
                                      <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="" placeholder="" type="email"  name="email" value="<?php echo $user['email'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l15">Alamat</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="" rows="3" name="alamat"><?php echo $user['alamat']; ?></textarea>
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
                                <?php echo form_close(); ?>
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