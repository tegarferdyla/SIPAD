<main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Daftar Kasatker</h6>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('Admin') ?>">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Daftar Kasatker</li>
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
                            <div class="widget-heading clearfix">
                               <h5 class="box-title">Kepala Satuan Kerja</h5>
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body clearfix">
                                <<table class="table table-responsive" data-toggle="datatables">
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
                                                 foreach ($kasatker as $u) {
                                             ?>
                                            <tr>
                                                <td><?php echo ($no++); ?></td>
                                                <td><?php echo ($u->NIP); ?></td>
                                                <td><?php echo ucwords($u->nama); ?></td>
                                                <td><?php echo ($u->divisi); ?></td>
                                                <td><?php echo ($u->email); ?></td>
                                                <td><?php echo ($u->username); ?></td>

                                                <td>
                                                    <a href="<?php echo base_url()."Admin/edituser/".$u->id_user;?>"><i class="list-icon feather feather-edit" title="Edit"></i></a> &nbsp;
                                                    <a onclick="return confirm('Apa anda yakin ingin menghapus data ini?')" href="<?php echo base_url()."Admin/hapususer/".$u->id_user; ?>"><i class="list-icon text-danger feather feather-trash-2" title="Delete"></i></a>
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