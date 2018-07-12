    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">
            <!-- Sidebar Menu -->
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    <li class="current-page <?php if($this->uri->segment(2)==""){echo 'active';}?>"><a href="<?php echo site_url('admin') ?>"><i class="list-icon feather feather-pie-chart"></i><span class="hide-menu">DASHBOARD</span></a>
                    </li>
                    <li class="menu-item-has-children <?php if ( $this->uri->segment(2)=="daftarkasatker" OR $this->uri->segment(2)=="inputkasatker"){
                        echo 'active';} ?>"><a href="javascript:void(0);"><i class="list-icon feather feather-user"></i> <span class="hide-menu">KASATKER</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li class="<?php if($this->uri->segment(2)=="daftarkasatker"){echo 'active daftarkasatker-active';} ?>"><a href="<?php echo site_url('admin/daftarkasatker') ?>">Daftar Kasatker</a>
                            </li>
                            <li class="<?php if($this->uri->segment(2)=="inputkasatker"){echo 'active inputkasatker-active';} ?>"><a href="<?php echo site_url('admin/inputkasatker') ?>">Buat Akun Kasatker</a>
                            </li>
                        </ul>
                    </li>                    
                    <li class="menu-item-has-children <?php if ( $this->uri->segment(2)=="daftarppk" OR $this->uri->segment(2)=="inputppk"){
                        echo 'active';} ?>"><a href="javascript:void(0);"><i class="list-icon feather feather-briefcase"></i> <span class="hide-menu">PPK</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li class="<?php if($this->uri->segment(2)=="daftarppk"){echo 'active daftarppk-active';} ?>"><a href="<?php echo site_url('admin/daftarppk') ?>">Daftar PPK</a>
                             </li>
                             <li class="<?php if($this->uri->segment(2)=="inputppk"){echo 'active inputppk-active';} ?>"><a href="<?php echo site_url('admin/inputppk') ?>">Buat PPK Baru</a>
                             </li>
                        </ul>
                    </li>
                     <li class="menu-item-has-children <?php if ( $this->uri->segment(2)=="daftaruser" OR $this->uri->segment(2)=="createuser"){
                        echo 'active';} ?>"><a href="javascript:void(0);"><i class="list-icon feather feather-user-plus"></i> <span class="hide-menu">USER</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li class="<?php if($this->uri->segment(2)=="daftaruser"){echo 'active daftaruser-active';} ?>"><a href="<?php echo site_url('admin/daftaruser') ?>">Daftar User</a>
                            </li>
                            <li class="<?php if($this->uri->segment(2)=="createuser"){echo 'active createuser-active';} ?>"><a href="<?php echo site_url('admin/createuser') ?>">Tambah Akun</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon feather feather-settings"></i> <span class="hide-menu">PROFILE</span></a>
                        <ul class="list-unstyled sub-menu">
                            <li><a href="<?php echo site_url('admin/profile') ?>">Profil</a>
                            </li>
                            <li><a href="<?php echo site_url('admin/changepassword') ?>">Ubah Password</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.side-menu -->
            </nav>
            <!-- /.sidebar-nav -->
        </aside>