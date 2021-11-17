



<?php $__env->startSection('content'); ?>

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class="container">
                    <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0" style="background-color: #FFA800;">
                        <div class="card-title">
                            <h3 class="card-label">Verifikasi Usulan
                            <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <!--begin: Wizard-->
                            <!--begin: Wizard-->
                            <div  id="kt_wizard_v3" data-wizard-state="step-first" data-wizard-clickable="true">
                                <!--begin: Wizard Nav-->
                                <div>
                                        <div data-wizard-type="step" data-wizard-state="current">
                                        </div>
                                        <div data-wizard-type="step" >
                                        </div>
                                        <div data-wizard-type="step" >
                                        </div>
                                        <div data-wizard-type="step">
                                        </div>
                                        <div data-wizard-type="step">
                                        </div>
                                        <div data-wizard-type="step">
                                        </div>																						
                                </div>
                                <!--end: Wizard Nav-->
                                <!--begin: Wizard Body-->
                                <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                    <div class="col-xl-20 col-xxl-12">
                                        <!--begin: Wizard Form-->
                                        <form class="form" id="kt_form">
                                            <!--begin: Wizard Step 1-->
                                            <div class="pb-6" data-wizard-type="step-content" data-wizard-state="current">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Personal</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Surat usulan</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="kt_datepicker_3_modal"  value="<?php echo e($verifikasi->tanggal_surat_usulan); ?>" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">No. Surat Usulan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_surat_usulan); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">pejabat yang menandatangani</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->pejabat_menandatangani); ?>" disabled  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Upload/Download file</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                        <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <!--end: Wizard Step 1-->
                                            <!--begin: Wizard Step 2-->
                                            <div class="pb-6" data-wizard-type="step-content">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data ASN</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">NIP</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->nip); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Nama</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->nama); ?>" disabled  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Tempat Lahir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tempat_lahir); ?>" disabled />

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal lahir</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_lahir); ?>" id="kt_datepicker_4_modal" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Pendidikan Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->pendidikan_terakhir); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Instansi Induk</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->instansi_induk); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Instansi Pengusul</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->instansi_pengusul); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Upload/Download file</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Pangkat (Gol/Ruang)</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <?php if($verifikasi->pangkat_gol == '1'): ?>
                                                            <input type="text" class="form-control" value="Juru Muda (I/A)" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->pangkat_gol == 2): ?>
                                                            <input type="text" class="form-control" value="Juru Muda Tingkat 1 (I/B)" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->pangkat_gol == 3): ?>
                                                            <input type="text" class="form-control" value="Juru (I/C)" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->pangkat_gol == 4): ?>
                                                            <input type="text" class="form-control" value="Juru Tingakat 1 (I/D)" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->pangkat_gol == 5): ?>
                                                            <input type="text" class="form-control" value="Pengatur Muda (II/A)" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->pangkat_gol == 6): ?>
                                                            <input type="text" class="form-control" value="Pengatur Muda Tingkat I (II/B)" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->pangkat_gol == 7): ?>
                                                            <input type="text" class="form-control" value="Pengatur (II/C)" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->pangkat_gol == 8): ?>
                                                            <input type="text" class="form-control" value="Pengatur Tingkat I (II/D)" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->pangkat_gol == 9): ?>
                                                            <input type="text" class="form-control" value="Penata Muda (III/A)" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->pangkat_gol == 10): ?>
                                                            <input type="text" class="form-control" value="Penata Muda Tingkat I (III/B)" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->pangkat_gol == 11): ?>
                                                            <input type="text" class="form-control" value="Penata (III/C)" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->pangkat_gol == 12): ?>
                                                            <input type="text" class="form-control" value="Penata Tingakat I (III/D)" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->pangkat_gol == 13): ?>
                                                            <input type="text" class="form-control" value="Pembina (IV/A)" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->pangkat_gol == 14): ?>
                                                            <input type="text" class="form-control" value="Pembina Tingkat 1 (IV/B)" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->pangkat_gol == 15): ?>
                                                            <input type="text" class="form-control" value="Pembina Utama Muda (IV/C)" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->pangkat_gol == 16): ?>
                                                            <input type="text" class="form-control" value="Pembina Utama Madya (IV/D)" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->pangkat_gol == 17): ?>
                                                            <input type="text" class="form-control" value="Pembina Utama (IV/E)" disabled />
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">TMT Gol/Ruang</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tmt_gol); ?>" id="kt_datepicker_5_modal" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Upload/Download File SK Pangkat Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div>
                                                
                                            </div>
                                            <!--end: Wizard Step 2-->
                                            <!--begin: Wizard Step 3-->
                                            <div class="pb-6" data-wizard-type="step-content">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Lama</h4>
                                                <!--begin::Select-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jabatan_lama); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">no. SK Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_sk_jabatan_lama); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">TMT Jabatan</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tmt_jabatan_lama); ?>" id="kt_datepicker_9_modal" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Unit Kerja</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->unit_kerja_lama); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Upload/Download File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div>
                                            </div>

                                            <div class="pb-6" data-wizard-type="step-content">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Baru</h4>
                                                <!--begin::Select-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jabatan_baru); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Unit Kerja</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->unit_kerja_baru); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Upload/Download File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div>
                                            </div>

                                            <!--end: Wizard Step 3-->
                                            <!--begin: Wizard Step 2-->
                                            <div class="pb-6" data-wizard-type="step-content">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data PAK</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Nomor PAK</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->nomor_pak); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal PAK</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_pak); ?>" id="kt_datepicker_8_modal" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Jumlah Angka Kredit</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jumlah_angka_kredit); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Periode Penilaian</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <?php if($verifikasi->periode_penilaian == '1'): ?>
                                                            <input type="text" class="form-control" value="Periode 1" disabled />
                                                            <?php endif; ?>
                                                            <?php if($verifikasi->periode_penilaian == '2'): ?>
                                                            <input type="text" class="form-control" value="Periode 2" disabled />
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Upload File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>

                                                        </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <!--end: Wizard Step 2-->
                                            <!--begin: Wizard Step 2-->
                                            <div class="pb-6" data-wizard-type="step-content">
                                                <h4 class="mb-10 font-weight-bold text-dark">Karifikasi PAK
                                                    <span class="form-text text-muted"><small>Khusus untuk PAK yang dikeluarkan oleh Kemenkes & Kemendikbud</small></span>
                                                </h4>

                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Nomor Klarifikasi</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->nomor_klarifikasi); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Klarifikasi</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_klarifikasi); ?>" id="kt_datepicker_9_modal" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Upload/Download File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>

                                                        </div>
                                                        </div>
                                                </div> 	
                                            </div>
                                            <div class="pb-6" data-wizard-type="step-content">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Kompetensi
                                                </h4>

                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jabatan_data_kompetensi); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Nomor Sertifikat/Surat</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->nomor_sertifikat); ?>" id="kt_datepicker_10_modal" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Tgl.Sertifikat/surat</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_sertifikat); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Upload/Download File Data Pendukung Lainnya</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div> 
                                            </div>

                                            <div class="pb-6" data-wizard-type="step-content">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Formasi Jabatan
                                                </h4>

                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Jumlah</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jumlah); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Terisi</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->terisi); ?>" id="kt_datepicker_10_modal" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Sisa</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->sisa); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Upload/Download File Data Pendukung Lainnya</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div> 
                                            </div>

                                            <div class="pb-6" data-wizard-type="step-content">
                                                <h4 class="mb-10 font-weight-bold text-dark">SKP 2 Tahun Terakhir
                                                </h4>

                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Upload/Download File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div> 

                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Upload/Download File Data Pendukung Lainnya</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div> 

                                                <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catatans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                    <div class="form-group row">

                                                        <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Catatan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($catatans->tanggal_catatan); ?>"  disabled/>
                                                            </div>
                                                        </div>
                                                        
                                                        <label class="col-form-label text-right col-lg-3 col-sm-12">Catatan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($catatans->catatan); ?>"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Tgl.Sertifikat/surat</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_sertifikat); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!--end: Wizard Step 2-->
                                            <!--begin: Wizard Step 2-->
                                            
                                            <!--end: Wizard Step 2-->
                                            <!--begin: Wizard Step 4-->
                                            <!--end: Wizard Step 4-->
                                            <!--begin: Wizard Actions-->
                                            <div class="d-flex justify-content-between mt-5 pt-10">
                                                <div class="mr-2">
                                                    <a href="custom/pages/persetujuan.html" type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4">Kembali</a>
                                                </div>
                                                <div>
                                                    <table>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="<?php echo e(route('jf-ahli.jfku.store_tolak', ['id' => $verifikasi->id])); ?>">
                                                                <?php echo csrf_field(); ?> 
                                                                <input type="hidden" class="btn btn-danger font-weight-bolder text-uppercase px-9 py-4" name="tolak" value="3">
                                                                <!-- <a type="submit" class="btn btn-danger font-weight-bolder text-uppercase px-9 py-4" style="margin-right: 10px;">Tolak</a> -->
                                                                <button type="submit" class="btn btn-danger font-weight-bolder text-uppercase px-9 py-4" >
                                                                    Tolak
                                                                </button>
                                                            </form>
                                                        </th>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="<?php echo e(route('jf-ahli.jfku.store_proses', ['id' => $verifikasi->id])); ?>">
                                                                <?php echo csrf_field(); ?> 
                                                                <input type="hidden" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" name="proses" value="1">
                                                                <!-- <a type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" style="margin-right: 10px;">Proses</a> -->
                                                                <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" >
                                                                    Proses
                                                                </button>
                                                            </form>
                                                        </th>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="<?php echo e(route('jf-ahli.jfku.store_pending', ['id' => $verifikasi->id])); ?>">
                                                                <?php echo csrf_field(); ?> 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="pending" value="2">
                                                                <!-- <a type="submit" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" style="margin-right: 10px;">Pending</a> -->
                                                                <button type="submit" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" >
                                                                    Pending
                                                                </button>
                                                            </form>
                                                        </th>
                                                    </table>
                                                    
                                                    
                                                    

                                                </div>
                                            </div>
                                            <!--end: Wizard Actions-->
                                        <!--end: Wizard Form-->
                                    </div>
                                </div>
                                <!--end: Wizard Body-->
                            </div>
                            <!--end: Wizard-->
                                        
                        </div>
                            
                    </div>
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
        <!--end::Content-->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
<style>
    td {  
        background-color: #86dcec;    
        
    }
</style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('js/pages/custom/wizard/wizard-2.js')); ?>"></script>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\siapp\resources\views/pages/jf_ahli/verif.blade.php ENDPATH**/ ?>