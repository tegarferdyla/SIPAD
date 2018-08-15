<main class="main-wrapper clearfix">
	<!-- Page Title Area -->
	<div class="row page-title clearfix">
		<div class="page-title-left">
			<h6 class="page-title-heading mr-0 mr-r-5">Dokumen Utama</h6>
			<small><?php echo $nama ?></small>					 
		</div>
		<!-- /.page-title-left -->
		<div class="page-title-right d-none d-sm-inline-flex">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo site_url('PPK1') ?>">Dashboard</a></li>
                	<li class="breadcrumb-item"><a href="<?php echo site_url('PPK1/jenispaket/'.$tahun->id_tahun) ?>"><?php echo $tahun->nama_tahun ?></a></li>
                	<li class="breadcrumb-item"><a href="<?php echo site_url('PPK1/pilihpaket/'.$tahun->id_tahun.'/'.$paket[0]['jenis']) ?>"><?php echo ucwords($paket[0]['jenis']) ?></a></li>
                	<li class="breadcrumb-item active">Edit Dokumen</li>
			</ol>
		</div>
		<!-- /.page-title-right -->
	</div>
	<!-- /.page-title -->
	<!-- =================================== -->
	<!-- Different data widgets ============ -->
	<!-- =================================== -->
	<form action="<?php echo site_url('PPK1/updatedocutama') ?>" method="post" enctype="multipart/form-data" id="interviewForm" >
		<div class="widget-list">
			<div class="col-md-12 widget-holder">
				<div class="widget-bg">
					<div class="widget-body clearfix">
						<div class="row">
                            <div class="col-md-11">
                                <h6 class="text-muted"><?php echo $show[0]['nama_paket']; ?></h6>
                            </div>
                            <div class="col-md-1">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Aksi
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu list-unstyled card-body">
                                        <li><a href="<?php echo site_url('PPK1/viewdocutama/'. $show[0]['id_paket']) ?>">Lihat Dokumen</a></li>
                                    </ul>
                                </div>
                            </div>    
                        </div>
						<div class="row">
							<h4 class="box-title mr-b-0" >Kelompok 1</h4>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="surat_md" class="form-control-label text-blue">Surat Minat Daerah</label>
                                        <input type="hidden" value="<?php echo $show[0]['id_paket'] ?>" name="id_paket">
								<p>
									<?php echo $doc1->surat_md ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->surat_md) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->surat_md ?>" name="delf1">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file1" accept="application/pdf">
									</p>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="surat_mh" class="form-control-label text-blue">Surat Menerima Hibah</label>
								<p><?php echo $doc1->surat_mh ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->surat_mh) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->surat_mh ?>" name="delf2">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file2" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="surat_kl" class="form-control-label text-blue">Surat Kesiapan Lahan</label>
								<p><?php echo $doc1->surat_kl ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->surat_kl) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->surat_kl ?>" name="delf3">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file3" accept="application/pdf">
									</p>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="kesepakatan_bersama" class="form-control-label text-blue">Kesepakatan Bersama (KSB)</label>
								<p><?php echo $doc1->kesepakatan_bersama ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->kesepakatan_bersama) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->kesepakatan_bersama ?>" name="delf4">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file4" accept="application/pdf">
									</p>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="perjanjian_kerjasama" class="form-control-label text-blue">Perjanjian Kerja Sama</label>
                                        <input type="hidden" value="<?php echo $doc1->perjanjian_kerjasama ?>" name="delf5">
								<p><?php echo $doc1->perjanjian_kerjasama ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->perjanjian_kerjasama) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->perjanjian_kerjasama ?>">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file5" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="widget-list">
			<div class="col-md-12 widget-holder">
				<div class="widget-bg">
					<div class="widget-body clearfix">
						<h4 class="box-title mr-b-0">Kelompok 2</h4><br>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="sppbj" class="form-control-label text-blue">SPBJ</label>
								<p><?php echo $doc1->sppbj ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->sppbj) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->sppbj ?>" name="delf6">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file6" accept="application/pdf">
									</p>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="form-control-label text-blue" for="spmk">SPMK</label>
								<p><?php echo $doc1->spmk ?>
									<button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->spmk) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->spmk ?>" name="delf7">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file7" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="naskah_kontrak" class="form-control-label text-blue">Naskah Kontrak</label>
								<p><?php echo $doc1->naskah_kontrak ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->naskah_kontrak) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->naskah_kontrak ?>" name="delf8">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file8" accept="application/pdf">
									</p>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="form-control-label text-blue" for="rencana_mk">Rencana Mutu Kontrak</label>
								<p><?php echo $doc1->rencana_mk ?>
									<button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->rencana_mk) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->rencana_mk ?>" name="delf9">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file9" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="bcp" class="form-control-label text-blue">Berita acara Pre-Construction</label>
								<p><?php echo $doc1->bcp ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->bcp) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->bcp ?>" name="delf10">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file10" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="widget-list">
			<div class="col-md-12 widget-holder">
				<div class="widget-bg">
					<div class="widget-body clearfix">
						<h4 class="box-title mr-b-0">MC0</h4><br>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="mc0_dd" class="form-control-label text-blue">Design Drawing</label>
								<p><?php echo $doc1->mc0_dd ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->mc0_dd) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->mc0_dd ?>" name="delf11">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file11" accept="application/pdf">
									</p>
								</div>
							</div>

							<div class="form-group col-md-6">
								<label class="form-control-label text-blue" for="mc0_bal">Berita Acara Lapangan</label>
								<p><?php echo $doc1->mc0_bal ?>
									<button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->mc0_bal) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->mc0_bal ?>" name="delf12">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file12" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="mc0_jdst" class="form-control-label text-blue">Justifikasi dan Spesifikasi Teknis</label>
								<p><?php echo $doc1->mc0_jdst ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc1->mc0_jdst) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc1->mc0_jdst ?>" name="delf13">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file13" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="widget-list">
			<div class="col-md-12 widget-holder">
				<div class="widget-bg">
					<div class="widget-body clearfix">
						<h4 class="box-title mr-b-0">Hasil Klarifikasi Pasca MC0</h4><br>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="pasca_boq" class="form-control-label text-blue">Bill of Quantity</label>
								<p><?php echo $doc4->pasca_boq ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_boq) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc4->pasca_boq ?>" name="delf14">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file14" accept="application/pdf">
									</p>
								</div>
							</div>

							<div class="form-group col-md-6">
								<label class="form-control-label text-blue" for="pasca_jdst">Justifikasi dan Spesifikasi Teknis</label>
								<p><?php echo $doc4->pasca_jdst ?>
									<button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_jdst) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc4->pasca_jdst ?>" name="delf15">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file15" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="pasca_slp" class="form-control-label text-blue">Surat Lampiran Pendukung</label>
								<p><?php echo $doc4->pasca_slp ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_slp) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc4->pasca_slp ?>" name="delf16">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file16" accept="application/pdf">
									</p>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="form-control-label text-blue" for="pasca_kurva">Kurva R Revisi</label>
								<p><?php echo $doc4->pasca_kurva ?>
									<button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_kurva) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc4->pasca_kurva ?>" name="delf17">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file17" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="pasca_shop" class="form-control-label text-blue">Shop Drawing</label>
								<p><?php echo $doc4->pasca_shop ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_shop) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc4->pasca_shop ?>" name="delf18">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file18" accept="application/pdf">
									</p>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="form-control-label text-blue" for="pasca_bakn">Berita Acara Klarifikasi Negosiasi</label>
								<p><?php echo $doc4->pasca_bakn ?>
									<button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_bakn) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc4->pasca_bakn ?>" name="delf19">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file19" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="pasca_nai" class="form-control-label text-blue">Naskah Adendum I</label>
								<p><?php echo $doc4->pasca_nai ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc4->pasca_nai) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc4->pasca_nai ?>" name="delf20">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file20" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="widget-list">
			<div class="col-md-12 widget-holder">
				<div class="widget-bg">
					<div class="widget-body clearfix">
						<h4 class="box-title mr-b-0">Ceklis Jika Dibutuhkan</h4><br>
						<div class="row">
							<div class="form-group col-md-2">
								<div class="check">
									<h4 class="box-title mr-b-0">Addendum II
										<input type="checkbox" name="topic1" />
									</h4>
								</div>
							</div>
							<div class="form-group col-md-2">
								<div class="check">
									<h4 class="box-title mr-b-0">Addendum III
										<input type="checkbox" name="topic2" />
									</h4>
								</div>
							</div>
							<div class="form-group col-md-2">
								<div class="check">
									<h4 class="box-title mr-b-0">Addendum IV
										<input type="checkbox" name="topic3" />
									</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div style="display: none;" data-topic="addendumii">
			<div class="widget-list">
				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h4 class="box-title mr-b-0">Addendum II</h4><br>
							<fieldset>
								<div class="row">
									<div class="col-sm-6">
										<label for="addii_bal" class="form-control-label text-blue">Bill of Quantity</label>
										<p><?php echo $doc5->addii_bal ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_bal) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc5->addii_bal ?>" name="delf21">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file21" accept="application/pdf">
											</p>
										</div>
									</div>
									<div class="col-sm-6">
										<label for="addii_boq" class="form-control-label text-blue">Justifikasi dan Spesifikasi Teknis</label>
										<p><?php echo $doc5->addii_boq ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_boq) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc5->addii_boq ?>" name="delf22">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file22" accept="application/pdf">
											</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<label for="addii_jdst" class="form-control-label text-blue">Surat Lampiran Pendukung</label>
										<p><?php echo $doc5->addii_jdst ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_jdst) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc5->addii_jdst ?>" name="delf23">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file23" accept="application/pdf">
											</p>
										</div>
									</div>
									<div class="col-sm-6">
										<label for="addii_boq" class="form-control-label text-blue">Kurva R Revisi</label>
										<p><?php echo $doc5->addii_slp ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_slp) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc5->addii_slp ?>" name="delf24">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file24" accept="application/pdf">
											</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<label for="addii_kurva" class="form-control-label text-blue">Shop Drawing</label>
										<p><?php echo $doc5->addii_kurva ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_kurva) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc5->addii_kurva ?>" name="delf25">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file25" accept="application/pdf">
											</p>
										</div>
									</div>
									<div class="col-sm-6">
										<label for="addii_kurva" class="form-control-label text-blue">Berita Acara Klarifikasi Negosiasi</label>
										<p><?php echo $doc5->addii_shop ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_shop) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc5->addii_shop ?>" name="delf26">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file26" accept="application/pdf">
											</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<label for="addii_bakln" class="form-control-label text-blue">Berita Acara Lapangan</label>
										<p><?php echo $doc5->addii_bakln ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_bakln) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc5->addii_bakln ?>" name="delf27">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file27" accept="application/pdf">
											</p>
										</div>
									</div>
									<div class="col-sm-6">
										<label for="addii_naii" class="form-control-label text-blue">Naskah Adendum II</label>
										<p><?php echo $doc5->addii_naii ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc5->addii_naii) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc5->addii_naii ?>" name="delf28">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file28" accept="application/pdf">
											</p>
										</div>
									</div>
								</div>
							</fieldset>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div style="display: none;" data-topic="addendumiii">
			<div class="widget-list">
				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h4 class="box-title mr-b-0">Addendum III</h4><br>
							<fieldset>
								<div class="row">
									<div class="col-sm-6">
										<label for="addiii_bal" class="form-control-label text-blue">Bill of Quantity</label>
										<p><?php echo $doc6->addiii_bal ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_bal) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc6->addiii_bal ?>" name="delf29">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file29" accept="application/pdf">
											</p>
										</div>
									</div>
									<div class="col-sm-6">
										<label for="addiii_boq" class="form-control-label text-blue">Justifikasi dan Spesifikasi Teknis</label>
										<p><?php echo $doc6->addiii_boq ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_boq) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc6->addiii_boq ?>" name="delf30">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file30" accept="application/pdf">
											</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<label for="addiii_jdst" class="form-control-label text-blue">Surat Lampiran Pendukung</label>
										<p><?php echo $doc6->addiii_jdst ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_jdst) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc6->addiii_jdst ?>" name="delf31">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file31" accept="application/pdf">
											</p>
										</div>
									</div>
									<div class="col-sm-6">
										<label for="addiii_boq" class="form-control-label text-blue">Kurva R Revisi</label>
										<p><?php echo $doc6->addiii_slp ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_slp) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc6->addiii_slp ?>" name="delf32">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file32" accept="application/pdf">
											</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<label for="addiii_kurva" class="form-control-label text-blue">Shop Drawing</label>
										<p><?php echo $doc6->addiii_kurva ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_kurva) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc6->addiii_kurva ?>" name="delf33">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file33" accept="application/pdf">
											</p>
										</div>
									</div>
									<div class="col-sm-6">
										<label for="addiii_kurva" class="form-control-label text-blue">Berita Acara Klarifikasi Negosiasi</label>
										<p><?php echo $doc6->addiii_shop ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_shop) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc6->addiii_shop ?>" name="delf34">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file34" accept="application/pdf">
											</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<label for="addiii_bakln" class="form-control-label text-blue">Berita Acara Lapangan</label>
										<p><?php echo $doc6->addiii_bakln ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addiii_bakln) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc6->addiii_bakln ?>" name="delf35">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file35" accept="application/pdf">
											</p>
										</div>
									</div>
									<div class="col-sm-6">
										<label for="addii_naii" class="form-control-label text-blue">Naskah Adendum III</label>
										<p><?php echo $doc6->addii_naiii ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc6->addii_naiii) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc6->addii_naiii ?>" name="delf36">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file36" accept="application/pdf">
											</p>
										</div>
									</div>
								</div>
							</fieldset>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="display: none;" data-topic="addendumiv">
			<div class="widget-list">
				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h4 class="box-title mr-b-0">Addendum IV</h4><br>
							<fieldset>
								<div class="row">
									<div class="col-sm-6">
										<label for="addii_bal" class="form-control-label text-blue">Bill of Quantity</label>
										<p><?php echo $doc7->addiv_bal ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_bal) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc7->addiv_bal ?>" name="delf37">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file37" accept="application/pdf">
											</p>
										</div>
									</div>
									<div class="col-sm-6">
										<label for="addiv_boq" class="form-control-label text-blue">Justifikasi dan Spesifikasi Teknis</label>
										<p><?php echo $doc7->addiv_boq ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_boq) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc7->addiv_boq ?>" name="delf38">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file38" accept="application/pdf">
											</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<label for="addiv_jdst" class="form-control-label text-blue">Surat Lampiran Pendukung</label>
										<p><?php echo $doc7->addiv_jdst ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_jdst) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc7->addiv_jdst ?>" name="delf39">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file39" accept="application/pdf">
											</p>
										</div>
									</div>
									<div class="col-sm-6">
										<label for="addiv_boq" class="form-control-label text-blue">Kurva R Revisi</label>
										<p><?php echo $doc7->addiv_slp ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_slp) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc7->addiv_slp ?>" name="delf40">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file40" accept="application/pdf">
											</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<label for="addiv_kurva" class="form-control-label text-blue">Shop Drawing</label>
										<p><?php echo $doc7->addiv_kurva ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_kurva) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc7->addiv_kurva ?>" name="delf41">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file41" accept="application/pdf">
											</p>
										</div>
									</div>
									<div class="col-sm-6">
										<label for="addiv_kurva" class="form-control-label text-blue">Berita Acara Klarifikasi Negosiasi</label>
										<p><?php echo $doc7->addiv_shop ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_shop) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc7->addiv_shop ?>" name="delf42">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file42" accept="application/pdf">
											</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<label for="addiv_bakn" class="form-control-label text-blue">Berita Acara Lapangan</label>
										<p><?php echo $doc7->addiv_bakn ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_bakn) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc7->addiv_bakn ?>" name="delf43">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file43" accept="application/pdf">
											</p>
										</div>
									</div>
									<div class="col-sm-6">
										<label for="addiv_naii" class="form-control-label text-blue">Naskah Adendum IV</label>
										<p><?php echo $doc7->addiv_naiv ?>
											<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc7->addiv_naiv) ?>">
												<i class="feather feather-eye text-dark"></i>
												<input type="hidden" value="<?= $doc7->addiv_naiv ?>" name="delf44">
											</button>
										</p>
										<div class="col-sm-10">
											<p class="file-upload btn btn-primary">
												Perbaharui <input type="file" name="file44" accept="application/pdf">
											</p>
										</div>
									</div>
								</div>
							</fieldset>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="widget-list">
			<div class="col-md-12 widget-holder">
				<div class="widget-bg">
					<div class="widget-body clearfix">
						<h4 class="box-title mr-b-0">Kelompok 3</h4><br>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="laporan_harian1" class="form-control-label text-blue">Laporan Harian</label>
								<p><?php echo $doc2->laporan_harian1 ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->laporan_harian1) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc2->laporan_harian1 ?>" name="delf45">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file45" accept="application/pdf">
									</p>
								</div>
							</div>

							<div class="form-group col-md-6">
								<label class="form-control-label text-blue" for="laporan_mingguan1">Mingguan</label>
								<p><?php echo $doc2->laporan_mingguan1 ?>
									<button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->laporan_mingguan1) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc2->laporan_mingguan1 ?>" name="delf46">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file46" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="bulanan_kontraktor" class="form-control-label text-blue">Bulanan Kontraktor</label>
								<p><?php echo $doc2->bulanan_kontraktor ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->bulanan_kontraktor) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc2->bulanan_kontraktor ?>" name="delf47">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file47" accept="application/pdf">
									</p>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="form-control-label text-blue" for="sertifikat_pembayaran">Sertifikat Pembayaran</label>
								<p><?php echo $doc2->sertifikat_pembayaran ?>
									<button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->sertifikat_pembayaran) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc2->sertifikat_pembayaran ?>" name="delf48">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file48" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="widget-list">
			<div class="col-md-12 widget-holder">
				<div class="widget-bg">
					<div class="widget-body clearfix">
						<h4 class="box-title mr-b-0">Kelompok 4</h4><br>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="laporan_harian2" class="form-control-label text-blue">Laporan Harian</label>
								<p><?php echo $doc2->laporan_harian2 ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->laporan_harian2) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc2->laporan_harian2 ?>" name="delf49">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file49" accept="application/pdf">
									</p>
								</div>
							</div>

							<div class="form-group col-md-6">
								<label class="form-control-label text-blue" for="laporan_mingguan2">Mingguan</label>
								<p><?php echo $doc2->laporan_mingguan2 ?>
									<button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->laporan_mingguan2) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc2->laporan_mingguan2 ?>" name="delf50">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file50" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="bulanan_konsultan" class="form-control-label text-blue">Bulanan Konsultan Supervisi</label>
								<p><?php echo $doc2->bulanan_konsultan ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->bulanan_konsultan) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc2->bulanan_konsultan ?>" name="delf51">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file51" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="widget-list">
			<div class="col-md-12 widget-holder">
				<div class="widget-bg">
					<div class="widget-body clearfix">
						<h4 class="box-title mr-b-0">Kelompok 5</h4><br>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="berita_apm" class="form-control-label text-blue">Berita Acara Pengujian Material</label>
								<p><?php echo $doc2->berita_apm ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->berita_apm) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc2->berita_apm ?>" name="delf52">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file52" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="widget-list">
			<div class="col-md-12 widget-holder">
				<div class="widget-bg">
					<div class="widget-body clearfix">
						<h4 class="box-title mr-b-0">Kelompok 6</h4><br>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="berita_ascm" class="form-control-label text-blue">Berita Acara Show Cause Meeting (SCM)</label>
								<p><?php echo $doc2->berita_ascm ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->berita_ascm) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc2->berita_ascm ?>" name="delf53">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file53" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="widget-list">
			<div class="col-md-12 widget-holder">
				<div class="widget-bg">
					<div class="widget-body clearfix">
						<h4 class="box-title mr-b-0">Provisional Hand Over (PHO)</h4><br>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="provisional_sp" class="form-control-label text-blue">Surat Pemohonan PHO</label>
								<p><?php echo $doc2->provisional_sp ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->provisional_sp) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc2->provisional_sp ?>" name="delf54">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file54" accept="application/pdf">
									</p>
								</div>
							</div>

							<div class="form-group col-md-6">
								<label class="form-control-label text-blue" for="provisional_bafv">Berita Acara First Visit</label>
								<p><?php echo $doc2->provisional_bafv ?>
									<button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->provisional_bafv) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc2->provisional_bafv ?>" name="delf55">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file55" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="provisional_basv" class="form-control-label text-blue">Berita Acara Second Visit</label>
								<p><?php echo $doc2->provisional_basv ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->provisional_basv) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc2->provisional_basv ?>" name="delf56">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file56" accept="application/pdf">
									</p>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="form-control-label text-blue" for="provisional_bastp">Berita Acara Serah Terima Pekerjaan</label>
								<p><?php echo $doc2->provisional_bastp ?>
									<button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc2->provisional_bastp) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc2->provisional_bastp ?>" name="delf57">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file57" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="widget-list">
			<div class="col-md-12 widget-holder">
				<div class="widget-bg">
					<div class="widget-body clearfix">
						<h4 class="box-title mr-b-0">Final Hand Over (PHO)</h4><br>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="final_sp" class="form-control-label text-blue">Surat Pemohonan FHO</label>
								<p><?php echo $doc3->final_sp ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc3->final_sp) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc3->final_sp ?>" name="delf58">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file58" accept="application/pdf">
									</p>
								</div>
							</div>

							<div class="form-group col-md-6">
								<label class="form-control-label text-blue" for="final_bafv">Berita Acara First Visit</label>
								<p><?php echo $doc3->final_bafv ?>
									<button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc3->final_bafv) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc3->final_bafv ?>" name="delf59">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file59" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-6">
								<label for="final_basv" class="form-control-label text-blue">Berita Acara Second Visit</label>
								<p><?php echo $doc3->final_basv ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc3->final_basv) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc3->final_basv ?>" name="delf60">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file60" accept="application/pdf">
									</p>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="form-control-label text-blue" for="final_bastp">Berita Acara Serah Terima</label>
								<p><?php echo $doc3->final_bastp ?>
									<button class="btn btn-show"  data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc3->final_bastp) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc3->final_bastp ?>" name="delf61">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file61" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="widget-list">
			<div class="col-md-12 widget-holder">
				<div class="widget-bg">
					<div class="widget-body clearfix">
						<h4 class="box-title mr-b-0">Kelompok 7</h4><br>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="final_dokumentasi" class="form-control-label text-blue">Dokumentasi</label>
								<p><?php echo $doc3->final_dokumentasi ?>
									<button class="btn btn-show" data-toggle="modal" data-target="#modalCustom" type="button" value="<?php echo base_url('assets/data/' . $tahun->nama_tahun . '/' .$nama. '/' . $paket[0]['jenis'] . '/' . $paket[0]['nama_paket'] . '/' . $doc3->final_dokumentasi) ?>">
										<i class="feather feather-eye text-dark"></i>
										<input type="hidden" value="<?= $doc3->final_dokumentasi ?>" name="delf62">
									</button>
								</p>
								<div class="col-sm-10">
									<p class="file-upload btn btn-primary">
										Perbaharui <input type="file" name="file62" accept="application/pdf">
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
			<button class="btn btn-success btn-block" type="submit">Save Update</button>
			</div>
		</div>
	</form>

	<!-- Modal -->
	<div class="modal fade" id="modalCustom" role="dialog">
    		<div class="modal-dialog modal-lg">
    			<div class="modal-content">
    				<div class="modal-header">
                    	<button type="button" class="close" data-dismiss="modal">&times;</button>
	                    <h4 class="modal-title"></h4>
	               </div>
	               <div class="modal-body">
	                    <embed src="ucup" width="100%" height="500px">
	               </div>
	               <div class="modal-footer">
	               	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	               </div>
	          </div>
	     </div>
	</div>
	<!-- Modal -->

</main>
<!-- /.widget-list -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#interviewForm')
        .find('input[type="checkbox"][name="topic1"]')
        .on('change', function() {
            $container = $('[data-topic="addendumii"]');
            $container.toggle();
            });
    });
    $(document).ready(function() {
        $('#interviewForm')
        .find('input[type="checkbox"][name="topic2"]')
        .on('change', function() {
            var topic      = $(this).val(),
            $container = $('[data-topic="addendumiii"]');
            $container.toggle();
            });
    });
    $(document).ready(function() {
        $('#interviewForm')
        .find('input[type="checkbox"][name="topic3"]')
        .on('change', function() {
            $container = $('[data-topic="addendumiv"]');
            $container.toggle();
            });
    });
    $(".btn-show").click(function() {
        var value = $(this).val()
        var value2 = $(this).find("input").val()
        if (value2 == "" ) {
            $("#modalCustom .modal-body").find("embed").hide()
        $("#modalCustom .modal-header .modal-title").html("no data")
                        }
        else{
            $("#modalCustom .modal-body").find("embed").show()
        var a = $("#modalCustom .modal-body").find("embed").prop("src",value)
        $("#modalCustom .modal-header .modal-title").html(value2)
        // alert(a)
        }
    });
    $('.file-upload').click(function() {
        $('.file-upload').file_upload();
    });
</script>