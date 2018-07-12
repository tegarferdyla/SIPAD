    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">
            <!-- Sidebar Menu -->
             <div class="side-content mr-t-30 mr-lr-15"><a class="btn btn-block btn-info ripple fw-600" href="">Unit Kerja <br><?php echo ucwords($this->session->userdata('divisi')); ?></a>
            </div>
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    <li class="current-page active"><a href="<?php echo site_url('ppk1') ?>"><i class="list-icon feather feather-pie-chart"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-briefcase"></i> <span class="hide-menu">Tahun</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="<?php echo site_url('ppk1/daftartahun') ?>">Daftar Tahun</a>
                            </li>
                            <li><a href="<?php echo site_url('ppk1/inputtahun') ?>">Input Tahun</a>
                            </li>
                        </ul>
                    </li>
                     <li class="current-page "><a href="<?php echo site_url('ppk1/input') ?>"><i class="list-icon feather feather-plus"></i><span class="hide-menu">Unggah Paket</span></a>
                    </li>
                    
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-settings"></i> <span class="hide-menu">Ubah Profil</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="<?php echo site_url('ppk1/profile') ?>">Profil</a>
                            </li>
                            <li><a href="<?php echo site_url('ppk1/changepassword') ?>">Ubah Password</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
        </aside>