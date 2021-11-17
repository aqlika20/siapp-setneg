



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
                            <h3 class="card-label">Pengangkatan Pejabat Fungsional Keahlian Utama
                            <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <!--begin: Wizard-->
                        <div class="wizard wizard-3" id="kt_wizard_v3" data-wizard-state="step-first" data-wizard-clickable="true">
                            <!--begin: Wizard Nav-->
                            <div>
                                <div data-wizard-type="step" data-wizard-state="current"></div>
                                <div data-wizard-type="step"></div>
                                <div data-wizard-type="step"></div>
                                <div data-wizard-type="step"></div>																					
                            </div>
                            <!--end: Wizard Nav-->
                            <!--begin: Wizard Body-->
                            <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                <div class="col-xl-20 col-xxl-12">
                                    <!--begin: Wizard Form-->
                                    <form class="form" id="kt_form" action="<?php echo e(route('pic.administrasi.jabatan-fungsional.store')); ?>" enctype="multipart/form-data" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PATCH'); ?>
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-6" data-wizard-type="step-content" data-wizard-state="current">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Usulan</h4>
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Surat usulan</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="req_tanggal_surat_usulan" name="req_tanggal_surat_usulan" data-toggle="datetimepicker" data-target="#req_tanggal_surat_usulan" placeholder="Pilih Tanggal" value="<?php echo e(old('req_tanggal_surat_usulan')); ?>" require/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">No. Surat Usulan</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="req_no_surat_usulan" name="req_no_surat_usulan" value="<?php echo e(old('req_no_surat_usulan')); ?>" require/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Pejabat yang Menandatangani</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text"class="form-control" id="req_jabatan_menandatangani" name="req_jabatan_menandatangani" value="<?php echo e(old('req_jabatan_menandatangani')); ?>" require/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">Upload/Download File</label>
                                                <div class="col-lg-9">
                                                    <input id="req_file_data_usulan" name="req_file_data_usulan[]" type="file" class="file" data-show-preview="false" multiple/>
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_4">
                                                        <div class="dropzone-panel mb-lg-0 mb-2">
                                                            <a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm">Attach files</a>
                                                            <a class="dropzone-upload btn btn-light-primary font-weight-bold btn-sm">Upload All</a>
                                                            <a class="dropzone-remove-all btn btn-light-primary font-weight-bold btn-sm">Remove All</a>
                                                        </div>
                                                        <div class="dropzone-items">
                                                            <div class="dropzone-item" style="display:none">
                                                                <div class="dropzone-file">
                                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                                        <span data-dz-name="">some_image_file_name.jpg</span>
                                                                        <strong>(<span data-dz-size="">340kb</span>)</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-progress">
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-toolbar">
                                                                    <span class="dropzone-start">
                                                                        <i class="flaticon2-arrow"></i>
                                                                    </span>
                                                                    <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                    <span class="dropzone-delete" data-dz-remove="">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
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
                                                        <input type="text" class="form-control" id="req_nip" name="req_nip" value="<?php echo e(old('req_nip')); ?>" require/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Nama</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="req_nama" name="req_nama" value="<?php echo e(old('req_nama')); ?>" require />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Tempat Lahir</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="req_tempat_lahir" name="req_tempat_lahir" value="<?php echo e(old('req_tempat_lahir')); ?>" require />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Lahir</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="req_tanggal_lahir" name="req_tanggal_lahir" data-toggle="datetimepicker" data-target="#req_tanggal_lahir" placeholder="Pilih Tanggal" value="<?php echo e(old('req_tanggal_lahir')); ?>" require/>
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
                                                        <input type="text" class="form-control" id="req_pendidikan_terakhir" name="req_pendidikan_terakhir" value="<?php echo e(old('req_pendidikan_terakhir')); ?>" require />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Instansi</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="req_instansi" name="req_instansi" value="<?php echo e(old('req_instansi')); ?>" require />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">Upload/Download Nota Usul</label>
                                                <div class="col-lg-9">
                                                    <input id="req_file_nota_usulan" name="req_file_nota_usulan[]" type="file" class="file" data-show-preview="false" multiple/>
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_5">
                                                        <div class="dropzone-panel mb-lg-0 mb-2">
                                                            <a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm">Attach files</a>
                                                            <a class="dropzone-upload btn btn-light-primary font-weight-bold btn-sm">Upload All</a>
                                                            <a class="dropzone-remove-all btn btn-light-primary font-weight-bold btn-sm">Remove All</a>
                                                        </div>
                                                        <div class="dropzone-items">
                                                            <div class="dropzone-item" style="display:none">
                                                                <div class="dropzone-file">
                                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                                        <span data-dz-name="">some_image_file_name.jpg</span>
                                                                        <strong>(<span data-dz-size="">340kb</span>)</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-progress">
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-toolbar">
                                                                    <span class="dropzone-start">
                                                                        <i class="flaticon2-arrow"></i>
                                                                    </span>
                                                                    <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                    <span class="dropzone-delete" data-dz-remove="">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Pangkat (Gol/Ruang)</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control select2" style="width: 230px;" id="req_pangkat_gol" name="req_pangkat_gol">
                                                        <option value="">Choose</option>
                                                        <?php $__currentLoopData = $pangkats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pangkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($pangkat->id); ?>" <?php echo e(old('req_pangkat_gol') == $pangkat->id ? 'selected' : ''); ?>><?php echo e($pangkat->name); ?> | <?php echo e($pangkat->golongan); ?> | <?php echo e($pangkat->ruang); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <!-- <div class="input-group date">
                                                        <select class="custom-select form-control" id="seeAnotherField">
                                                            <option selected>pilih golongan</option>
                                                            <option value="1">Golongan 1</option>
                                                            <option value="2">Golongan 2</option>
                                                            <option value="3">Golongan 3</option>
                                                            </select>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">TMT Gol/Ruang</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="req_tmt_gol" name="req_tmt_gol" data-toggle="datetimepicker" data-target="#req_tmt_gol" placeholder="Pilih Tanggal" value="<?php echo e(old('req_tmt_gol')); ?>" require />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">TMT CPNS</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="req_tmt_cpns" name="req_tmt_cpns" data-toggle="datetimepicker" data-target="#req_tmt_cpns" placeholder="Pilih Tanggal" value="<?php echo e(old('req_tmt_cpns')); ?>" require />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Masa Kerja Golongan</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="req_masa_kerja_gol_tahun" name="req_masa_kerja_gol_tahun" value="<?php echo e(old('req_masa_kerja_gol_tahun')); ?>" require />
                                                        <label class="col-form-label text-left col-lg-3 col-sm-12">Tahun</label>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12"></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="req_masa_kerja_gol_bulan" name="req_masa_kerja_gol_bulan" value="<?php echo e(old('req_masa_kerja_gol_bulan')); ?>" require />
                                                        <label class="col-form-label text-left col-lg-3 col-sm-12">Bulan</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">Upload/Download Nota Usul</label>
                                                <div class="col-lg-9">
                                                    <input id="req_file_nota_usulan_2" name="req_file_nota_usulan_2[]" type="file" class="file" data-show-preview="false" multiple/>
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_6">
                                                        <div class="dropzone-panel mb-lg-0 mb-2">
                                                            <a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm">Attach files</a>
                                                            <a class="dropzone-upload btn btn-light-primary font-weight-bold btn-sm">Upload All</a>
                                                            <a class="dropzone-remove-all btn btn-light-primary font-weight-bold btn-sm">Remove All</a>
                                                        </div>
                                                        <div class="dropzone-items">
                                                            <div class="dropzone-item" style="display:none">
                                                                <div class="dropzone-file">
                                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                                        <span data-dz-name="">some_image_file_name.jpg</span>
                                                                        <strong>(<span data-dz-size="">340kb</span>)</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-progress">
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-toolbar">
                                                                    <span class="dropzone-start">
                                                                        <i class="flaticon2-arrow"></i>
                                                                    </span>
                                                                    <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                    <span class="dropzone-delete" data-dz-remove="">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
                                                </div>
                                            </div>
                                            <div  id="otherFieldDiv">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data PAK</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Nomor PAK</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="req_nomor_pak" name="req_nomor_pak" value="<?php echo e(old('req_nomor_pak')); ?>" require />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal PAK</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control datetimepicker-input my-datepicker" id="req_tanggal_pak" name="req_tanggal_pak" data-toggle="datetimepicker" data-target="#req_tanggal_pak" placeholder="Pilih Tanggal" value="<?php echo e(old('req_tanggal_pak')); ?>" require />
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
                                                            <input type="text" class="form-control" id="req_jumlah_angka_kredit" name="req_jumlah_angka_kredit" value="<?php echo e(old('req_jumlah_angka_kredit')); ?>" require />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Periode Penilaian</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <select class="form-control select2" id="req_periode_penilaian" name="req_periode_penilaian">
                                                            <option value="">Choose</option>
                                                            <?php $__currentLoopData = $periodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $periode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($periode->id); ?>" <?php echo e(old('req_periode_penilaian') == $periode->id ? 'selected' : ''); ?>><?php echo e($periode->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <!-- <div class="input-group date">
                                                            <select class="custom-select form-control">
                                                                <option selected>pilih golongan</option>
                                                                <option value="1">Golongan 1</option>
                                                                <option value="2">Golongan 2</option>
                                                                <option value="3">Golongan 3</option>
                                                            </select>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label text-lg-right">Upload File</label>
                                                    <div class="col-lg-9">
                                                    <input id="req_file_data_pak" name="req_file_data_pak[]" type="file" class="file" data-show-preview="false" multiple/>
                                                        <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_7">
                                                            <div class="dropzone-panel mb-lg-0 mb-2">
                                                                <a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm">Attach files</a>
                                                                <a class="dropzone-upload btn btn-light-primary font-weight-bold btn-sm">Upload All</a>
                                                                <a class="dropzone-remove-all btn btn-light-primary font-weight-bold btn-sm">Remove All</a>
                                                            </div>
                                                            <div class="dropzone-items">
                                                                <div class="dropzone-item" style="display:none">
                                                                    <div class="dropzone-file">
                                                                        <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                                            <span data-dz-name="">some_image_file_name.jpg</span>
                                                                            <strong>(<span data-dz-size="">340kb</span>)</strong>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropzone-progress">
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropzone-toolbar">
                                                                        <span class="dropzone-start">
                                                                            <i class="flaticon2-arrow"></i>
                                                                        </span>
                                                                        <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
                                                                            <i class="flaticon2-cross"></i>
                                                                        </span>
                                                                        <span class="dropzone-delete" data-dz-remove="">
                                                                            <i class="flaticon2-cross"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
                                                    </div>
                                                </div>
                                                <h4 class="mb-10 font-weight-bold text-dark">Klarifikasi PAK
                                                    <span class="form-text text-muted"><small>Khusus untuk PAK yang dikeluarkan oleh Kemenkes & Kemendikbud</small></span>
                                                </h4>

                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Nomor Klarifikasi</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="req_masa_kerja_gol" name="req_masa_kerja_gol" value="<?php echo e(old('req_masa_kerja_gol')); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Klarifikasi</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control datetimepicker-input my-datepicker" id="req_tanggal_klarifikasi" name="req_tanggal_klarifikasi" data-toggle="datetimepicker" data-target="#req_tanggal_klarifikasi" placeholder="Pilih Tanggal" value="<?php echo e(old('req_tanggal_klarifikasi')); ?>" require />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label text-lg-right">Upload/Download File</label>
                                                    <div class="col-lg-9">
                                                        <input id="req_file_klarifikasi_pak" name="req_file_klarifikasi_pak[]" type="file" class="file" data-show-preview="false" multiple/>
                                                        <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_8">
                                                            <div class="dropzone-panel mb-lg-0 mb-2">
                                                                <a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm">Attach files</a>
                                                                <a class="dropzone-upload btn btn-light-primary font-weight-bold btn-sm">Upload All</a>
                                                                <a class="dropzone-remove-all btn btn-light-primary font-weight-bold btn-sm">Remove All</a>
                                                            </div>
                                                            <div class="dropzone-items">
                                                                <div class="dropzone-item" style="display:none">
                                                                    <div class="dropzone-file">
                                                                        <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                                            <span data-dz-name="">some_image_file_name.jpg</span>
                                                                            <strong>(<span data-dz-size="">340kb</span>)</strong>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropzone-progress">
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropzone-toolbar">
                                                                        <span class="dropzone-start">
                                                                            <i class="flaticon2-arrow"></i>
                                                                        </span>
                                                                        <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
                                                                            <i class="flaticon2-cross"></i>
                                                                        </span>
                                                                        <span class="dropzone-delete" data-dz-remove="">
                                                                            <i class="flaticon2-cross"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!--end: Wizard Step 2-->
                                        <!--begin: Wizard Step 3-->
                                        <div class="pb-6" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan</h4>
                                            <!--begin::Select-->
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Jabatan</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="req_jabatan" name="req_jabatan" value="<?php echo e(old('req_jabatan')); ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">No. Keppress Jabatan</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="req_no_keppress_jabatan" name="req_no_keppress_jabatan" value="<?php echo e(old('req_no_keppress_jabatan')); ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">Upload/Dowlnoad File</label>
                                                <div class="col-lg-9">
                                                    <input id="req_file_jabatan" name="req_file_jabatan[]" type="file" class="file" data-show-preview="false" multiple/>
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_9">
                                                        <div class="dropzone-panel mb-lg-0 mb-2">
                                                            <a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm">Attach files</a>
                                                            <a class="dropzone-upload btn btn-light-primary font-weight-bold btn-sm">Upload All</a>
                                                            <a class="dropzone-remove-all btn btn-light-primary font-weight-bold btn-sm">Remove All</a>
                                                        </div>
                                                        <div class="dropzone-items">
                                                            <div class="dropzone-item" style="display:none">
                                                                <div class="dropzone-file">
                                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                                        <span data-dz-name="">some_image_file_name.jpg</span>
                                                                        <strong>(<span data-dz-size="">340kb</span>)</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-progress">
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-toolbar">
                                                                    <span class="dropzone-start">
                                                                        <i class="flaticon2-arrow"></i>
                                                                    </span>
                                                                    <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                    <span class="dropzone-delete" data-dz-remove="">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">BA Pengambilan Sumpah/Pelantikan</label>
                                                <div class="col-lg-9">
                                                    <input id="req_file_pengambilan_sumpah" name="req_file_pengambilan_sumpah[]" type="file" class="file" data-show-preview="false" multiple/>
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_10">
                                                        <div class="dropzone-panel mb-lg-0 mb-2">
                                                            <a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm">Attach files</a>
                                                            <a class="dropzone-upload btn btn-light-primary font-weight-bold btn-sm">Upload All</a>
                                                            <a class="dropzone-remove-all btn btn-light-primary font-weight-bold btn-sm">Remove All</a>
                                                        </div>
                                                        <div class="dropzone-items">
                                                            <div class="dropzone-item" style="display:none">
                                                                <div class="dropzone-file">
                                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                                        <span data-dz-name="">some_image_file_name.jpg</span>
                                                                        <strong>(<span data-dz-size="">340kb</span>)</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-progress">
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-toolbar">
                                                                    <span class="dropzone-start">
                                                                        <i class="flaticon2-arrow"></i>
                                                                    </span>
                                                                    <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                    <span class="dropzone-delete" data-dz-remove="">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">TMT Jabatan</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="req_tmt_jabatan" name="req_tmt_jabatan" data-toggle="datetimepicker" data-target="#req_tmt_jabatan" placeholder="Pilih Tanggal" value="<?php echo e(old('req_tmt_jabatan')); ?>" require />
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
                                                        <input type="text" class="form-control" id="req_unit_kerja" name="req_unit_kerja" value="<?php echo e(old('req_unit_kerja')); ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 3-->
                                        <!--begin: Wizard Step 2-->
                                        
                                        <!--end: Wizard Step 2-->
                                        <!--begin: Wizard Step 2-->
                                        <div class="pb-6" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Pangkat Baru</h4>

                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Pangkat (Gol/Ruang)</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control select2" style="width: 230px;" id="req_pangkat_gol_baru" name="req_pangkat_gol_baru">
                                                        <option value="">Choose</option>
                                                        <?php $__currentLoopData = $pangkats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pangkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($pangkat->id); ?>" <?php echo e(old('req_pangkat_gol_baru') == $pangkat->id ? 'selected' : ''); ?>><?php echo e($pangkat->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <!-- <div class="input-group date">
                                                        <select class="custom-select form-control">
                                                            <option selected>pilih golongan</option>
                                                            <option value="1">Golongan 1</option>
                                                            <option value="2">Golongan 2</option>
                                                            <option value="3">Golongan 3</option>
                                                        </select>
                                                    </div> -->
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">TMT (Gol/Ruang)</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="req_tmt_gol_baru" name="req_tmt_gol_baru" data-toggle="datetimepicker" data-target="#req_tmt_gol_baru" placeholder="Pilih Tanggal" value="<?php echo e(old('req_tmt_gol_baru')); ?>" require/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Masa Kerja Golongan</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="req_masa_kerja_gol_tahun_baru" name="req_masa_kerja_gol_tahun_baru" value="<?php echo e(old('req_masa_kerja_gol_tahun_baru')); ?>" />
                                                        <label class="col-form-label text-left col-lg-3 col-sm-12">Tahun</label>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12"></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="req_masa_kerja_gol_bulan_baru" name="req_masa_kerja_gol_bulan_baru" value="<?php echo e(old('req_masa_kerja_gol_bulan_baru')); ?>" />
                                                        <label class="col-form-label text-left col-lg-3 col-sm-12">Bulan</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Periode Kenaikan Pangkat</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control select2" id="req_periode_kenaikan" name="req_periode_kenaikan">
                                                        <option value="">Choose</option>
                                                        <?php $__currentLoopData = $periodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $periode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($periode->id); ?>" <?php echo e(old('req_periode_kenaikan') == $periode->id ? 'selected' : ''); ?>><?php echo e($periode->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <!-- <div class="input-group date">
                                                        <select class="custom-select form-control">
                                                            <option selected>pilih golongan</option>
                                                            <option value="1">Golongan 1</option>
                                                            <option value="2">Golongan 2</option>
                                                            <option value="3">Golongan 3</option>
                                                            </select>
                                                    </div> -->
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">Upload/Download File Data Pendukung Lainnya</label>
                                                <div class="col-lg-9">
                                                    <input id="req_file_pendukung" name="req_file_pendukung[]" type="file" class="file" data-show-preview="false" multiple/>
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_11">
                                                        <div class="dropzone-panel mb-lg-0 mb-2">
                                                            <a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm">Attach files</a>
                                                            <a class="dropzone-upload btn btn-light-primary font-weight-bold btn-sm">Upload All</a>
                                                            <a class="dropzone-remove-all btn btn-light-primary font-weight-bold btn-sm">Remove All</a>
                                                        </div>
                                                        <div class="dropzone-items">
                                                            <div class="dropzone-item" style="display:none">
                                                                <div class="dropzone-file">
                                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                                        <span data-dz-name="">some_image_file_name.jpg</span>
                                                                        <strong>(<span data-dz-size="">340kb</span>)</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-progress">
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-toolbar">
                                                                    <span class="dropzone-start">
                                                                        <i class="flaticon2-arrow"></i>
                                                                    </span>
                                                                    <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                    <span class="dropzone-delete" data-dz-remove="">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">Tambah Catatan</label>
                                                <div class="col-lg-9">
                                                    <input id="req_file_catatan" name="req_file_catatan[]" type="file" class="file" data-show-preview="false" multiple/>
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_12">
                                                        <div class="dropzone-panel mb-lg-0 mb-2">
                                                            <a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm">Attach files</a>
                                                            <a class="dropzone-upload btn btn-light-primary font-weight-bold btn-sm">Upload All</a>
                                                            <a class="dropzone-remove-all btn btn-light-primary font-weight-bold btn-sm">Remove All</a>
                                                        </div>
                                                        <div class="dropzone-items">
                                                            <div class="dropzone-item" style="display:none">
                                                                <div class="dropzone-file">
                                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                                        <span data-dz-name="">some_image_file_name.jpg</span>
                                                                        <strong>(<span data-dz-size="">340kb</span>)</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-progress">
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-toolbar">
                                                                    <span class="dropzone-start">
                                                                        <i class="flaticon2-arrow"></i>
                                                                    </span>
                                                                    <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                    <span class="dropzone-delete" data-dz-remove="">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Catatan</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="req_tanggal_catatan" name="req_tanggal_catatan" data-toggle="datetimepicker" data-target="#req_tanggal_catatan" placeholder="Pilih Tanggal" value="<?php echo e(old('req_tanggal_catatan')); ?>" require />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Catatan</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <textarea class="form-control" rows="3" id="req_catatan" name="req_catatan" value="<?php echo e(old('req_catatan')); ?>"></textarea>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>

                                        <div class="d-flex justify-content-between mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Sebelumnya</button>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit" onclick="return confirmation();">Kirim Usulan</button>
                                                <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Berikutnya</button>
                                            </div>
                                        </div>
                                        <!--end: Wizard Actions-->
                                    </form>
                                    <!--end: Wizard Form-->
                                </div>
                            </div>
                            <!--end: Wizard Body-->
                        </div>
                        <!--end: Wizard-->                      
                    </div>
                    <div class="modal-footer">
                        <a href="<?php echo e(route('pic.administrasi.jabatan-fungsional.index')); ?>"type="button" class="btn btn-light-danger font-weight-bold">Batalkan</a>
                    </div>
                </div>
            </div>
            <!--end: Wizard-->
        </div>
    </div>
				
<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
<style>
    td {  
        background-color: #86dcec;    
        
    }
</style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script>
        $('.my-datepicker').datetimepicker({
            useCurrent:false,
            format: 'DD-MMM-YYYY'
        })

        $('#otherFieldDiv').hide();

        $('.my-datepicker').keydown(function(e){
            e.preventDefault();
        })

        $('.select2').select2({
            placeholder: "Choose..."
        })

    </script>
    <script>
        $(function(){
            $('#kt_form').validate({
                errorClass:"error-msg",
                errorElement:"p",
                rules:{
                    req_tanggal_surat_usulan: 'required',
                    req_no_surat_usulan: 'required',
                    req_jabatan_menandatangani: 'required',
                    req_file_data_usulan: {
                        extenstion: "docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf"
                    },
                    req_nip: 'required',
                    req_nama: 'required',
                    req_tempat_lahir: 'required',
                    req_tanggal_lahir: 'required'
                    req_pendidikan_terakhir: 'required',
                    req_instansi: 'required',
                    req_file_nota_usulan: {
                        extenstion: "docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf"
                    },
                    req_pangkat_gol: 'required',
                    req_tmt_gol: 'required',
                    req_tmt_cpns: 'required',
                    req_masa_kerja_gol_tahun: 'required',
                    req_masa_kerja_gol_bulan: 'required',
                    req_file_nota_usulan_2: {
                        extenstion: "docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf"
                    },
                    req_file_data_pak: {
                        extenstion: "docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf"
                    },
                    req_file_klarifikasi_pak: {
                        extenstion: "docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf"
                    },
                    req_jabatan: 'required',
                    req_no_keppress_jabatan: 'required',
                    req_file_jabatan: {
                        extenstion: "docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf"
                    },
                    req_file_pengambilan_sumpah: {
                        extenstion: "docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf"
                    },
                    req_tmt_jabatan: 'required',
                    req_unit_kerja: 'required',
                    req_pangkat_gol_baru: 'required',
                    req_tmt_gol_baru: 'required',
                    req_masa_kerja_gol_tahun_baru: 'required',
                    req_masa_kerja_gol_bulan_baru: 'required',
                    req_periode_kenaikan: 'required',
                    req_file_pendukung: {
                        extenstion: "docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf"
                    },
                    req_file_catatan: {
                        extenstion: "docx,doc,xlsx,xls,csv,jpg,png,jpeg,pdf"
                    },
                    req_tanggal_catatan: 'required',
                    req_catatan: 'required'

                },
                submitHandler:function(form){
                    form.submit();
                }
            })
        })
    </script>
    <script src="<?php echo e(asset('js/pages/custom/wizard/wizard-3.js')); ?>"></script>
    <script src="<?php echo e(asset('js/hide.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/crud/file-upload/dropzonejs.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\tigaraksa\resources\views/pages/pic/administrasi/form/form_keahlian_utama.blade.php ENDPATH**/ ?>