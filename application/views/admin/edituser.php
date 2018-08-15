  <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Edit User</h6>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Admin') ?>">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/daftaruser') ?>">Daftar User</a></li>
                        <li class="breadcrumb-item active">Edit PPK</li>
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
                                <h5 class="box-title mr-b-0">User</h5>   
                                <form action="<?php echo base_url()."index.php/Admin/updateuser" ?>" method="post">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Kode User</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="<?php echo $user['id_user'] ?>" placeholder="Kode PPK" type="text" name="id_user" readonly>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">NIP</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l0" placeholder="NIP" type="text" name="NIP" value="<?php echo $user['NIP'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Nama</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l0" placeholder="Nama" type="text" name="nama" value="<?php echo $user['nama'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Divisi</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l0" placeholder="" type="text" name="divisi" value="<?php echo $user['bagian']?>" readonly>
                                        </div>
                                    </div><!-- 
                                  <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l13">Divisi</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="l13" name="divisi">
                                                <option value=""><?php echo $user['bagian'] ?></option>
                                                <?php foreach ($get_ppk as $u) { ?>
                                                <option value="<?php echo $u['nama']; ?>"><?php echo $u['nama']; ?></option>
                                                <?php 
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l0" placeholder="Email" type="email" name="email" value="<?php echo $user['email']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Username</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="l0" placeholder="Email" type="text" name="username" value="<?php echo $user['username'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="form-group row">
                                            <div class="col-md-9 ml-md-auto btn-list">
                                                <button class="btn btn-primary btn-rounded" onclick="return confirm('Apa anda yakin ingin mengubah data ini?')" type="submit">Submit</button>
                                                <button class="btn btn-outline-default btn-rounded" type=""><a href="<?php echo site_url('Admin/daftaruser') ?>">Cancel</a></button>
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