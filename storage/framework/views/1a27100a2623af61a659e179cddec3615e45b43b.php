



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
                            <h3 class="card-label">Verifikasi Jabatan Keahlian Fungsional
                            <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <!--begin: Wizard-->
                                <!--begin: Wizard-->
                            <div  id="kt_wizard_v3" data-wizard-state="step-first" data-wizard-clickable="true">

                                <!--begin: Wizard Body-->
                                <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                    <div class="col-xl-20 col-xxl-12">
                                        <!--begin: Wizard Form-->
                                            <!--begin: Wizard Step 1-->
                                            <?php if($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '2' || $verifikasi->jenis_layanan == '3' || $verifikasi->jenis_layanan == '5'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" >
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Usulan</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat usulan</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="kt_datepicker_3_modal"  value="<?php echo e($verifikasi->tgl_surat_usulan); ?>" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                     <i class="la la-calendar"></i> 
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">No. Surat Usulan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_surat_usulan); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Pejabat yang Menandatangani</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->pejabat_menandatangani); ?>" disabled  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download file</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                        <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <!--end: Wizard Step 1-->
                                            <!--begin: Wizard Step 2-->
                                            <?php if($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '2' || $verifikasi->jenis_layanan == '3' || $verifikasi->jenis_layanan == '5'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data ASN</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">NIP</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->nip); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nama</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->nama); ?>" disabled  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tempat Lahir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tempat_lahir); ?>" disabled />

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal lahir</label>
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
                                                    <label class="col-form-label col-lg-3 col-sm-12">Pendidikan Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->pendidikan_terakhir); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Instansi Induk</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->instansi_induk); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Instansi Pengusul</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->instansi_pengusul); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Pangkat (Gol/Ruang)</label>
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
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT Gol/Ruang</label>
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
                                                    <label class="col-lg-3 col-form-label">Upload File</label>
                                                    <div class="col-lg-9">
                                                        <a style="color: blue;">file.pdf</a>
                                                    <!-- <input id="file_data_pak_terakhir" name="file_data_pak_terakhir[]" type="file" class="file" data-show-preview="false" multiple/>
                                                        <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span> -->
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                <!-- <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File SK Pangkat Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div> -->
                                            </div>
                                            <?php endif; ?>
                                            <!--end: Wizard Step 2-->

                                            <?php if($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '3' || $verifikasi->jenis_layanan == '5'): ?>
                                                <?php if($verifikasi->pangkat_gol == '1'): ?>
                                                    <?php if($verifikasi->nomor_pak != ''): ?>
                                                    <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Data PAK</h4>
                                                        <!--begin::Input-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Nomor PAK</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="<?php echo e($verifikasi->nomor_pak); ?>"  disabled/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Input-->
                                                        <!--begin::Input-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Tanggal PAK</label>
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
                                                            <label class="col-form-label col-lg-3 col-sm-12">Jumlah Angka Kredit</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="<?php echo e($verifikasi->jumlah_angka_kredit); ?>" disabled />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Periode Penilaian</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <?php $__currentLoopData = $periodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $periode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($verifikasi->periode_penilaian == $periode->id): ?>
                                                                        <input type="text" class="form-control" value="<?php echo e($periode->name); ?>" disabled />
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Upload File</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <a style="color: blue;">file.pdf</a>

                                                                </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php if($verifikasi->nomor_klarifikasi != ''): ?>
                                                    <!--begin: Wizard Step 2-->
                                                    <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Klarifikasi PAK
                                                            <span class="form-text text-muted"><small>Khusus untuk PAK yang dikeluarkan oleh Kemenkes & Kemendikbud</small></span>
                                                        </h4>

                                                        <!--begin::Input-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Nomor Klarifikasi</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="<?php echo e($verifikasi->nomor_klarifikasi); ?>" disabled />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Tanggal Klarifikasi</label>
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
                                                            <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <a style="color: blue;">file.pdf</a>
                                                                </div>
                                                            </div>
                                                        </div> 	
                                                    </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <!--begin: Wizard Step 3-->
                                            <?php if($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '3'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Lama</h4>
                                                <!--begin::Select-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jabatan_lama); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">No. SK Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_sk_jabatan_lama); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT Jabatan</label>
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
                                                    <label class="col-form-label col-lg-3 col-sm-12">Unit Kerja</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->unit_kerja_lama); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '2' && $verifikasi->nomor_pak_terakhir != ''): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data PAK Terakhir</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nomor PAK</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->nomor_pak_terakhir); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal PAK</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_pak_terakhir); ?>" id="kt_datepicker_8_modal" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jumlah Angka Kredit</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jumlah_angka_kredit_terakhir); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Periode Penilaian</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <?php $__currentLoopData = $periodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $periode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($verifikasi->periode_penilaian_terakhir == $periode->id): ?>
                                                                <input type="text" class="form-control" value="<?php echo e($periode->name); ?>" disabled />
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '3'): ?>

                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Baru</h4>
                                                <!--begin::Select-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jabatan_baru); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Unit Kerja</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->unit_kerja_baru); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '2' || $verifikasi->jenis_layanan == '5'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Fungsional</h4>
                                                <!--begin::Select-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jabatan_fungsional); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">No. Keppress Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_keppress_jabatan_fungsional); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">BA Pengambilan Sumpah Pelantikan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tmt_jabatan_fungsional); ?>" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Unit Kerja</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->unit_kerja_fungsional); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '5'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Pemberhentian</h4>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Alasan Pemberhentian</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_1" name="alasan_pemberhentian" value="7" <?php echo e(($verifikasi->alasan_pemberhentian =="7")? "checked" : ""); ?> disabled />
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Tidak dilantik dalam Jabatan Fungsional Keahlian Utama melewati 90 hari dari sejak Keppres diterima instansi pengusul</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_2" name="alasan_pemberhentian" value="8" <?php echo e(($verifikasi->alasan_pemberhentian =="8")? "checked" : ""); ?> disabled/>
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Alasan Lainnya</div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Keterangan Alasan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <textarea class="form-control" rows="3" id="ket_alasan_pemberhentian" name="ket_alasan_pemberhentian" disabled> <?php echo e($verifikasi->ket_alasan_pemberhentian); ?> </textarea>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File Data Pendukung Lainnya</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                    </div>
                                                </div> 

                                                <div id="kt_repeater_1">
    
                                                <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catatans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="form-group row">

                                                        <label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($catatans->tanggal_catatan); ?>"  disabled/>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <label class="col-form-label col-lg-3 col-sm-12">Catatan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($catatans->catatan); ?>"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="7" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">
                                                                        Tidak dilantik dalam Jabatan Fungsional Keahlian Utama melewati 90 hari dari sejak Keppres diterima instansi pengusul</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="2" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Nota Usulan asli yang dilengkapi dengan data formasi dan ditandatangani oleh PPK</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="3" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Sertifikat/tanda lulus/surat keterangan lulus uji kompetensi</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="4" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">PAK asli 1 tahun terakhir</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="5" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Salinan sah SK jabatan terakhir</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="6" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Salinan sah SK Pangkat terakhir</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:30px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="7" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Salinan sah SKP dan Penilaian Prestasi Kerja 2 tahun terakhir</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="8" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Semua persyaratan dan dokumen benar</div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <!--end: Wizard Step 3-->
                                            <!--begin: Wizard Step 2-->
                                            
                                            

                                            

                                            <?php if($verifikasi->jenis_layanan == '3'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Rekomendasi</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nomor Surat Rekomendasi</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_surat_rekomendasi); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tgl. Surat Rekomendasi</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tgl_surat_rekomendasi); ?>" id="kt_datepicker_8_modal" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Surat Pernyataan/Keterangan melaksanakan kegiatan Jabatan fungsional dalam 2 tahun terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '1'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Kompetensi
                                                </h4>

                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jabatan_data_kompetensi); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nomor Sertifikat/Surat</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->nomor_sertifikat); ?>" id="kt_datepicker_10_modal" disabled/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tgl.Sertifikat/surat</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tgl_sertifikat); ?>" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File Data Pendukung Lainnya</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div> 
                                            </div>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '3' ): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Formasi Jabatan
                                                </h4>

                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jumlah</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jumlah); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Terisi</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->terisi); ?>" id="kt_datepicker_10_modal" disabled/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Sisa</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->sisa); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File Data Pendukung Lainnya</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div> 
                                            </div>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '3'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">SKP 2 Tahun Terakhir
                                                </h4>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div> 

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File Data Pendukung Lainnya</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div> 

                                                <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catatans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                    <div class="form-group row">

                                                        <label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($catatans->tanggal_catatan); ?>"  disabled/>
                                                                <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <label class="col-form-label col-lg-3 col-sm-12">Catatan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($catatans->catatan); ?>"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                                <?php if($verifikasi->jenis_layanan == '1'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tgl.Sertifikat/surat</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tgl_sertifikat); ?>" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '2'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Pemberhentian</h4>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Alasan Pemberhentian</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_1" name="alasan_pemberhentian" value="1" <?php echo e(($verifikasi->alasan_pemberhentian =="1")? "checked" : ""); ?> disabled />
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Mengundurkan diri dari jabatan</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_2" name="alasan_pemberhentian" value="2" <?php echo e(($verifikasi->alasan_pemberhentian =="2")? "checked" : ""); ?> disabled/>
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Diberhentikan sementara sebagai PNS</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_3" name="alasan_pemberhentian" value="3" <?php echo e(($verifikasi->alasan_pemberhentian =="3")? "checked" : ""); ?> disabled/>
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Menjalani cuti diluar tanggungan negara</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_4" name="alasan_pemberhentian" value="4" <?php echo e(($verifikasi->alasan_pemberhentian =="4")? "checked" : ""); ?> disabled/>
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Menjanlani tugas belajar lebih dari 6 (enam) bulan</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_5" name="alasan_pemberhentian" value="5" <?php echo e(($verifikasi->alasan_pemberhentian =="5")? "checked" : ""); ?> disabled/>
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Ditugaskan secara penuh diluar jabatan fungsional</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_6" name="alasan_pemberhentian" value="6" <?php echo e(($verifikasi->alasan_pemberhentian =="6")? "checked" : ""); ?> disabled/>
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Tidak memenuhi syarat jabatan</div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Keterangan Alasan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <textarea class="form-control" rows="3" id="ket_alasan_pemberhentian" name="ket_alasan_pemberhentian" disabled> <?php echo e($verifikasi->ket_alasan_pemberhentian); ?> </textarea>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="form-group row">
                                                    <label class="col-form-label text-rigth col-lg-3 col-sm-12">TMT Pemberhentian</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tmt_pemberhentian); ?>"  disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File Data Pendukung Lainnya</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div> 

                                                <div id="kt_repeater_1">
    
                                                    <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catatans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="form-group row">

                                                        <label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($catatans->tanggal_catatan); ?>"  disabled/>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <label class="col-form-label col-lg-3 col-sm-12">Catatan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($catatans->catatan); ?>"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="1" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Surat Usulan Asli Ditandatangani PPK</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="2" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Nota Usulan asli yang dilengkapi dengan data formasi dan ditandatangani oleh PPK</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="3" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Sertifikat/tanda lulus/surat keterangan lulus uji kompetensi</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="4" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">PAK asli 1 tahun terakhir</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="5" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Salinan sah SK jabatan terakhir</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="6" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Salinan sah SK Pangkat terakhir</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:30px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="7" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Salinan sah SKP dan Penilaian Prestasi Kerja 2 tahun terakhir</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="8" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Semua persyaratan dan dokumen benar</div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '4' ): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Surat</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat Pengantar</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="kt_datepicker_3_modal"  value="<?php echo e($verifikasi->tanggal_surat_pengantar); ?>" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i> 
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">No. Surat Pengantar</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_surat_pengantar); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!--end::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download file</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                        <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Keppres</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">No. Keppres</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="kt_datepicker_3_modal"  value="<?php echo e($verifikasi->no_keppres); ?>" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal Keppres</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_keppres); ?>" disabled />
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
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download file</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Ralat</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Alasan Ralat</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="kt_datepicker_3_modal"  value="<?php echo e($verifikasi->alasan_ralat); ?>" disabled/>
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
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download file</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                        <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>


                                            <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
                                                <div class="mr-2">
                                                    <a href="<?php echo e(route('jf-ahli.inbox.usulan')); ?>" type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4">Kembali</a>
                                                </div>
                                                <div>
                                                    <table>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="<?php echo e(route('jf-ahli.inbox.usulan.store_tolak')); ?>">
                                                                <?php echo csrf_field(); ?> 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="<?php echo e($verifikasi->id); ?>">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="<?php echo e($verifikasi->jenis_layanan); ?>">
                                                                <button type="submit" class="btn btn-danger font-weight-bolder text-uppercase px-9 py-4" >
                                                                    Tolak
                                                                </button>
                                                            </form>
                                                        </th>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="<?php echo e(route('jf-ahli.inbox.usulan.store_proses')); ?>">
                                                                <?php echo csrf_field(); ?> 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="<?php echo e($verifikasi->id); ?>">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="<?php echo e($verifikasi->jenis_layanan); ?>">
                                                                <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" >
                                                                    Proses
                                                                </button>
                                                            </form>
                                                        </th>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="<?php echo e(route('jf-ahli.inbox.usulan.store_pending')); ?>">
                                                                <?php echo csrf_field(); ?> 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="<?php echo e($verifikasi->id); ?>">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="<?php echo e($verifikasi->jenis_layanan); ?>">
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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ardim\Desktop\siapp\resources\views/pages/jf_ahli/inbox/verif_usulan.blade.php ENDPATH**/ ?>