<main class="main-wrapper clearfix">
        <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Daftar User</h6>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Daftar User</li>
                    </ol>
                </div>
                <!-- /.page-title-right -->
            </div>
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
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list">
                <div class="row">
                    <!-- Tabs Bordered -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <div class="tabs tabs-bordered">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item active"><a class="nav-link" href="#kasatker-tab-bordered-1" data-toggle="tab" aria-expanded="true">Kasatker</a>
                                        </li>
                                        <li class="nav-item "><a class="nav-link" href="#ppk-tab-bordered-1" data-toggle="tab" aria-expanded="true">PPK</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#bmn-tab-bordered-1" data-toggle="tab" aria-expanded="true">BMN</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#keuangan-tab-bordered-1" data-toggle="tab" aria-expanded="true">Keuangan</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#bendahara-tab-bordered-1" data-toggle="tab" aria-expanded="true">Bendahara</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-tabs -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="kasatker-tab-bordered-1">
                                            <p>Daftar Kasatker</p>
                                        </div>
                                        <div class="tab-pane" id="ppk-tab-bordered-1">
                                            <table class="table table-responsive" data-toggle="datatables">
                                                <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Divisi</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no= 1; ?>
                                            <?php 
                                                 foreach ($user as $u) {
                                             ?>
                                            <tr>
                                                <td><?php echo ($no++); ?></td>
                                                <td><?php echo ($u->NIP); ?></td>
                                                <td><?php echo ucwords($u->nama); ?></td>
                                                <td><?php echo ($u->divisi); ?></td>
                                                <td><?php echo ($u->email); ?></td>
                                                <td><?php echo ($u->username); ?></td>

                                                <td>
                                                    <a href="<?php echo base_url()."admin/edituser/".$u->id_user;?>"><i class="list-icon feather feather-edit" title="Edit"></i></a> &nbsp;
                                                    <a onclick="return confirm('Apa anda yakin ingin menghapus data ini?')" href="<?php echo base_url()."admin/hapususer/".$u->id_user; ?>"><i class="list-icon text-danger feather feather-trash-2" title="Delete"></i></a>
                                                </td>
                                            </tr>
                                            <?php 
                                                }
                                             ?>
                                        </tbody>
                                            </table>
                                        </div>
                                    <div class="tab-pane" id="bmn-tab-bordered-1">
                                           <table class="table table-responsive" data-toggle="datatables">
                                            <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Divisi</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no= 1; ?>
                                        <?php 
                                             foreach ($bmn as $u) {
                                         ?>
                                        <tr>
                                            <td><?php echo ($no++); ?></td>
                                            <td><?php echo ($u->NIP); ?></td>
                                            <td><?php echo ucwords($u->nama); ?></td>
                                            <td><?php echo ($u->divisi); ?></td>
                                            <td><?php echo ($u->email); ?></td>
                                            <td><?php echo ($u->username); ?></td>

                                            <td>
                                                <a href="<?php echo base_url()."admin/edituser/".$u->id_user;?>"><i class="list-icon feather feather-edit" title="Edit"></i></a> &nbsp;
                                                <a onclick="return confirm('Apa anda yakin ingin menghapus data ini?')" href="<?php echo base_url()."admin/hapususer/".$u->id_user; ?>"><i class="list-icon text-danger feather feather-trash-2" title="Delete"></i></a>
                                            </td>
                                        </tr>
                                        <?php 
                                            }
                                         ?>
                                    </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="keuangan-tab-bordered-1">
                                       <table class="table table-responsive" data-toggle="datatables">
                                            <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Divisi</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no= 1; ?>
                                        <?php 
                                             foreach ($keuangan as $u) {
                                         ?>
                                        <tr>
                                            <td><?php echo ($no++); ?></td>
                                            <td><?php echo ($u->NIP); ?></td>
                                            <td><?php echo ucwords($u->nama); ?></td>
                                            <td><?php echo ($u->divisi); ?></td>
                                            <td><?php echo ($u->email); ?></td>
                                            <td><?php echo ($u->username); ?></td>

                                            <td>
                                                <a href="<?php echo base_url()."admin/edituser/".$u->id_user;?>"><i class="list-icon feather feather-edit" title="Edit"></i></a> &nbsp;
                                                <a onclick="return confirm('Apa anda yakin ingin menghapus data ini?')" href="<?php echo base_url()."admin/hapususer/".$u->id_user; ?>"><i class="list-icon text-danger feather feather-trash-2" title="Delete"></i></a>
                                            </td>
                                        </tr>
                                        <?php 
                                            }
                                         ?>
                                        </tbody>
                                    </table>
                                </div>
                                        <div class="tab-pane" id="bendahara-tab-bordered-1">
                                             <table class="table table-responsive" data-toggle="datatables">
                                            <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Divisi</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no= 1; ?>
                                        <?php 
                                             foreach ($bendahara as $u) {
                                         ?>
                                        <tr>
                                            <td><?php echo ($no++); ?></td>
                                            <td><?php echo ($u->NIP); ?></td>
                                            <td><?php echo ucwords($u->nama); ?></td>
                                            <td><?php echo ($u->divisi); ?></td>
                                            <td><?php echo ($u->email); ?></td>
                                            <td><?php echo ($u->username); ?></td>

                                            <td>
                                                <a href="<?php echo base_url()."admin/edituser/".$u->id_user;?>"><i class="list-icon feather feather-edit" title="Edit"></i></a> &nbsp;
                                                <a onclick="return confirm('Apa anda yakin ingin menghapus data ini?')" href="<?php echo base_url()."admin/hapususer/".$u->id_user; ?>"><i class="list-icon text-danger feather feather-trash-2" title="Delete"></i></a>
                                            </td>
                                        </tr>
                                        <?php 
                                            }
                                         ?>
                                        </tbody>
                                    </table>
                                        </div>
                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                                <!-- /.tabs -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
            </div>
            <!-- /.widget-list -->
        </main>