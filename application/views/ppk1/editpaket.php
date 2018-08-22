  <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Edit Paket</h6>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('PPK1') ?>">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Paket</li>
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
                                <h5 class="box-title mr-b-0">Update Data Paket</h5>
                                <form action ="<?php echo base_url ('PPK1/editpaketfungsi') ?>"  method="post">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Nama Paket</label>
                                        <div class="col-md-9">
                                            <input class="form-control" value="<?php echo $id_paket ?>" placeholder="" type="hidden" name="id_paket" readonly>
                                            <input class="form-control" id="" placeholder="" type="text" name="nama_paket" value="<?php echo $nama_paket ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Jenis Paket</label>
                                        <div class="col-md-9">
                                            <select name="jenispaket" class="form-control">
                                                <option value="kontraktual">Kontraktual</option>
                                                <option value="suakelola">Suakelola</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l0">Tahun Paket</label>
                                        <div class="col-md-9">
                                            <select name="tahun" class="form-control">
                                                <?php foreach ($get_tahun as $r): ?>
                                                    <option value="<?php echo $r['id_tahun'] ?>">Tahun <?php echo $r['nama_tahun']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="l15">Deskripsi</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="l15" rows="3" name="deskripsi"><?php echo $deskripsi; ?></textarea>
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