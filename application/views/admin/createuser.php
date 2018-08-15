  <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Tambah Akun</h6>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Admin') ?>">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Tambah Akun</li>
                    </ol>
                </div>
                <!-- /.page-title-right -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if ($this->session->flashdata('berhasil')): ?>
                        <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button> <i class="material-icons list-icon">check_circle</i>  <strong>Well done!</strong> Akun baru berhasil di daftarkan.
                        </div>
                        <?php elseif ($this->session->flashdata('bmn-berhasil')): ?>
                        <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button> <i class="material-icons list-icon">check_circle</i>  <strong>Well done!</strong> Akun BMN baru berhasil di daftarkan.
                        </div>
                        <?php elseif ($this->session->flashdata('keuangan-berhasil')): ?>
                        <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button> <i class="material-icons list-icon">check_circle</i>  <strong>Well done!</strong> Akun Keuangan baru berhasil di daftarkan.
                        </div>
                        <?php elseif ($this->session->flashdata('bendahara-berhasil')): ?>
                        <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button> <i class="material-icons list-icon">check_circle</i>  <strong>Well done!</strong> Akun Bendahara baru berhasil di daftarkan.
                        </div>
                        <?php elseif ($this->session->flashdata('pokja-berhasil')): ?>
                        <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button> <i class="material-icons list-icon">check_circle</i>  <strong>Well done!</strong> Akun Pokja baru berhasil di daftarkan.
                        </div>
                        <?php elseif ($this->session->flashdata('nipsalah')): ?>
                            <div class="alert alert-icon alert-danger border-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                </button> <i class="material-icons list-icon">not_interested</i>  <strong>Oh snap!</strong> NIP yang dimasukkan sudah terdaftar
                            </div>
                            <?php elseif ($this->session->flashdata('gagal')): ?>
                               <div class="alert alert-icon alert-danger border-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                </button> <i class="material-icons list-icon">not_interested</i>  <strong>Oh snap!</strong> Akun baru gagal didaftarkan
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
                                        <li class="nav-item active"><a class="nav-link" href="#ppk-tab-bordered-1" data-toggle="tab" aria-expanded="true">PPK</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#bmn-tab-bordered-1" data-toggle="tab" aria-expanded="true">BMN</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#keuangan-tab-bordered-1" data-toggle="tab" aria-expanded="true">Keuangan</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#bendahara-tab-bordered-1" data-toggle="tab" aria-expanded="true">Bendahara</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#pokja-tab-bordered-1" data-toggle="tab" aria-expanded="true">Pokja</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="ppk-tab-bordered-1">
                                              
                                            <form action ="<?php echo base_url ('Admin/Tambahakun') ?>" method="post" >
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
                                                    <label class="col-md-3 col-form-label" for="l13">Divisi</label>
                                                    <div class="col-md-9">
                                                        <span class="text-danger"><?=form_error('divisi') ?></span>
                                                        <select class="form-control" id="l13" name="divisi">
                                                            <option value="">-- Pilih Divisi --</option>
                                                            <?php foreach ($get_ppk as $u) { ?>
                                                                <option value="<?php echo $u['id_ppk']; ?>"><?php echo $u['nama']; ?></option>
                                                                <?php 
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="l0">Email</label>
                                                    <div class="col-md-9">
                                                        <span class="text-danger"><?=form_error('email') ?></span>
                                                        <input class="form-control" id="" placeholder="Email" type="email" name="email">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="l15">Alamat</label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control" id="l15" rows="3" name="alamat"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 col-form-label" for="l0">Username</label>
                                                    <div class="col-md-9">
                                                        <span class="text-danger"><?=form_error('username') ?></span>
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
                                        <div class="tab-pane" id="bmn-tab-bordered-1">
                                                <form action="<?php echo base_url ('Admin/Tambahakunbmn') ?>" method ="post">
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
                                                        <label class="col-md-3 col-form-label" for="l0">Divisi</label>
                                                        <div class="col-md-9">
                                                            <span class="text-danger"></span>
                                                            <input class="form-control" id="l0" placeholder="Divisi" type="text" name="divisi" value="BMN" readonly="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="l0">Email</label>
                                                        <div class="col-md-9">
                                                            <span class="text-danger"><?=form_error('email') ?></span>
                                                            <input class="form-control" id="l0" placeholder="Email" type="email" name="email" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="l15">Alamat</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" id="l15" rows="3" name="alamat"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="l0">Username</label>
                                                        <div class="col-md-9">
                                                            <span class="text-danger"><?=form_error('username') ?></span>
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
                                        <div class="tab-pane" id="keuangan-tab-bordered-1">
                                                <form action="<?php echo base_url ('Admin/Tambahakunkeuangan') ?>" method ="post">
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
                                                        <label class="col-md-3 col-form-label" for="l0">Divisi</label>
                                                        <div class="col-md-9">
                                                            <span class="text-danger"></span>
                                                            <input class="form-control" id="l0" placeholder="Divisi" type="text" name="divisi" value="Keuangan" readonly="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="l0">Email</label>
                                                        <div class="col-md-9">
                                                            <span class="text-danger"><?=form_error('email') ?></span>
                                                            <input class="form-control" id="l0" placeholder="Email" type="email" name="email" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="l15">Alamat</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" id="l15" rows="3" name="alamat"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="l0">Username</label>
                                                        <div class="col-md-9">
                                                            <span class="text-danger"><?=form_error('username') ?></span>
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
                                        <div class="tab-pane" id="bendahara-tab-bordered-1">
                                                <form action="<?php echo base_url ('Admin/Tambahakunbendahara') ?>" method ="post">
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
                                                        <label class="col-md-3 col-form-label" for="l0">Divisi</label>
                                                        <div class="col-md-9">
                                                            <span class="text-danger"></span>
                                                            <input class="form-control" id="l0" placeholder="Divisi" type="text" name="divisi" value="Bendahara" readonly="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="l0">Email</label>
                                                        <div class="col-md-9">
                                                            <span class="text-danger"><?=form_error('email') ?></span>
                                                            <input class="form-control" id="l0" placeholder="Email" type="email" name="email" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="l15">Alamat</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" id="l15" rows="3" name="alamat"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="l0">Username</label>
                                                        <div class="col-md-9">
                                                            <span class="text-danger"><?=form_error('username') ?></span>
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
                                        <div class="tab-pane" id="pokja-tab-bordered-1">
                                            <form action="<?php echo base_url ('Admin/Tambahakunpokja') ?>" method ="post">
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
                                                        <label class="col-md-3 col-form-label" for="l0">Divisi</label>
                                                        <div class="col-md-9">
                                                            <span class="text-danger"></span>
                                                            <input class="form-control" id="l0" placeholder="Divisi" type="text" name="divisi" value="Pokja" readonly="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="l0">Email</label>
                                                        <div class="col-md-9">
                                                            <span class="text-danger"><?=form_error('email') ?></span>
                                                            <input class="form-control" id="l0" placeholder="Email" type="email" name="email" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="l15">Alamat</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" id="l15" rows="3" name="alamat"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 col-form-label" for="l0">Username</label>
                                                        <div class="col-md-9">
                                                            <span class="text-danger"><?=form_error('username') ?></span>
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
                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                                <!-- /.tabs -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                <!-- /.row -->
            </div>
            <!-- /.widget-list -->
        </main>