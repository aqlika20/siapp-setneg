



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
                            <h3 class="card-label">Usulan Pembatalan Keppres Jabatan Fungsional Kehalian Utama
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
                                    <form class="form" id="kt_form" action="<?php echo e(route('pic.administrasi.surat-usulan.pembatalan-keppres-jabatan-fku.store')); ?>" enctype="multipart/form-data" method="POST">
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
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_surat_usulan" name="tanggal_surat_usulan" data-toggle="datetimepicker" data-target="#tanggal_surat_usulan" placeholder="Pilih Tanggal" value="<?php echo e(old('tanggal_surat_usulan')); ?>" required/>
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
                                                        <input type="text" class="form-control" id="no_surat_usulan" name="no_surat_usulan" value="<?php echo e(old('no_surat_usulan')); ?>" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Pejabat yang Menandatangani</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text" onkeydown="return /[a-zA-Z0-9\s]+/i.test(event.key)" class="form-control" id="jabatan_menandatangani" name="jabatan_menandatangani" value="<?php echo e(old('jabatan_menandatangani')); ?>" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">Upload/Download File</label>
                                                <div class="col-lg-9">
                                                    <input id="file_data_usulan" name="file_data_usulan[]" type="file" class="file" data-show-preview="false" multiple/>
                                                    
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
                                                        <input type="number" class="form-control" id="nip" name="nip" value="<?php echo e(old('nip')); ?>" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Nama</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" onkeydown="return /[a-zA-Z0-9\s]+/i.test(event.key)" class="form-control" id="nama" name="nama" value="<?php echo e(old('nama')); ?>" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Tempat Lahir</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" onkeydown="return /[a-zA-Z0-9\s]+/i.test(event.key)" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo e(old('tempat_lahir')); ?>" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Lahir</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_lahir" name="tanggal_lahir" data-toggle="datetimepicker" data-target="#tanggal_lahir" placeholder="Pilih Tanggal" value="<?php echo e(old('tanggal_lahir')); ?>" autocomplete="off" required/>
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
                                                        <input type="text" onkeydown="return /[a-zA-Z0-9\s]+/i.test(event.key)" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" value="<?php echo e(old('pendidikan_terakhir')); ?>" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Instansi Induk</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" onkeydown="return /[a-zA-Z0-9\s]+/i.test(event.key)" class="form-control" id="instansi_induk" name="instansi_induk" value="<?php echo e(old('instansi_induk')); ?>" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Instansi Pengusul</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" onkeydown="return /[a-zA-Z0-9\s]+/i.test(event.key)" class="form-control" id="instansi_pengusul" name="instansi_pengusul" value="<?php echo e(old('instansi_pengusul')); ?>" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Pangkat (Gol/Ruang)</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control select2" style="width: 230px;" id="pangkat_gol" name="pangkat_gol">
                                                        <option value="">Choose</option>
                                                        <?php $__currentLoopData = $pangkats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pangkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($pangkat->id); ?>" <?php echo e(old('pangkat_gol') == $pangkat->id ? 'selected' : ''); ?>><?php echo e($pangkat->name); ?> | <?php echo e($pangkat->golongan); ?> | <?php echo e($pangkat->ruang); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">TMT Gol/Ruang</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tmt_gol" name="tmt_gol" data-toggle="datetimepicker" data-target="#tmt_gol" placeholder="Pilih Tanggal" value="<?php echo e(old('tmt_gol')); ?>" autocomplete="off" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">Upload/Download Nota Usul</label>
                                                <div class="col-lg-9">
                                                    <input id="file_data_asn" name="file_data_asn[]" type="file" class="file" data-show-preview="false" multiple/>
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
                                                            <input type="text" class="form-control" id="nomor_pak" name="nomor_pak" value="<?php echo e(old('nomor_pak')); ?>" autocomplete="off" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal PAK</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_pak" name="tanggal_pak" data-toggle="datetimepicker" data-target="#tanggal_pak" placeholder="Pilih Tanggal" value="<?php echo e(old('tanggal_pak')); ?>" autocomplete="off" />
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
                                                            <input type="text" onkeydown="return /[a-zA-Z0-9\s]+/i.test(event.key)" class="form-control" id="jumlah_angka_kredit" name="jumlah_angka_kredit" value="<?php echo e(old('jumlah_angka_kredit')); ?>" autocomplete="off" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Periode Penilaian</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <select class="form-control select2" id="periode_penilaian" name="periode_penilaian">
                                                            <option value="">Choose</option>
                                                            <?php $__currentLoopData = $periodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $periode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($periode->id); ?>" <?php echo e(old('periode_penilaian') == $periode->id ? 'selected' : ''); ?>><?php echo e($periode->name); ?></option>
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
                                                    <input id="file_data_pak" name="file_data_pak[]" type="file" class="file" data-show-preview="false" multiple/>
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
                                                            <input type="text" class="form-control" id="no_klarifikasi" name="no_klarifikasi" value="<?php echo e(old('no_klarifikasi')); ?>" autocomplete="off"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Klarifikasi</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_klarifikasi" name="tanggal_klarifikasi" data-toggle="datetimepicker" data-target="#tanggal_klarifikasi" placeholder="Pilih Tanggal" value="<?php echo e(old('tanggal_klarifikasi')); ?>" />
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
                                                        <input id="file_klarifikasi_pak" name="file_klarifikasi_pak[]" type="file" class="file" data-show-preview="false" multiple/>
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
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Fungsional</h4>
                                            <!--begin::Select-->
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Jabatan</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" onkeydown="return /[a-zA-Z0-9\s]+/i.test(event.key)" class="form-control" id="jabatan_fungsional" name="jabatan_fungsional" value="<?php echo e(old('jabatan_fungsional')); ?>" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">No. Keppress Jabatan</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="no_keppress_jabatan_fungsional" name="no_keppress_jabatan_fungsional" value="<?php echo e(old('no_keppress_jabatan_fungsional')); ?>" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Unit Kerja</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" onkeydown="return /[a-zA-Z0-9\s]+/i.test(event.key)" class="form-control" id="unit_kerja_fungsional" name="unit_kerja_fungsional" value="<?php echo e(old('unit_kerja_fungsional')); ?>" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">Upload/Dowlnoad File</label>
                                                <div class="col-lg-9">
                                                    <input id="file_data_jabatan_fungsional" name="file_data_jabatan_fungsional[]" type="file" class="file" data-show-preview="false" multiple autocomplete="off" required/>
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
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Penerimaan Keppes</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tgl_penerimaan_keppres" name="tgl_penerimaan_keppres" data-toggle="datetimepicker" data-target="#tgl_penerimaan_keppres" placeholder="Pilih Tanggal" value="<?php echo e(old('tgl_penerimaan_keppres')); ?>" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">Upload/Dowlnoad File</label>
                                                <div class="col-lg-9">
                                                    <input id="file_data_jabatan_fungsional_2" name="file_data_jabatan_fungsional_2[]" type="file" class="file" data-show-preview="false" multiple autocomplete="off" required/>
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
                                            
                                        </div>

                                        
                                        <!--end: Wizard Step 3-->
                                        <!--begin: Wizard Step 2-->
                                        
                                        <!--end: Wizard Step 2-->
                                        <!--begin: Wizard Step 2-->
                                        <div class="pb-6" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Pemberhentian</h4>

                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Alasan Pemberhentian</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div style="margin-bottom:10px;">
                                                        <label class="radio radio-success">
                                                            <input type="radio" id="radio_1" name="alasan_pemberhentian" value="7"/>
                                                            <span></span>
                                                            <div style="margin-left: 10px;">Tidak dilantik dalam Jabatan Fungsional Keahlian Utama melewati 90 hari dari sejak Keppres diterima instansi pengusul </div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="radio radio-success">
                                                            <input type="radio" id="radio_2" name="alasan_pemberhentian" value="8"/>
                                                            <span></span>
                                                            <div style="margin-left: 10px;">Alasan lainnya</div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Keterangan Alasan</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <textarea class="form-control" rows="3" id="ket_alasan_pemberhentian" name="ket_alasan_pemberhentian" value="<?php echo e(old('ket_alasan_pemberhentian')); ?>"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">Upload/Dowlnoad File Dukungan Lainnya</label>
                                                <div class="col-lg-9">
                                                    <input id="file_data_pemberhentian" name="file_data_pemberhentian[]" type="file" class="file" data-show-preview="false" multiple autocomplete="off" required/>
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

                                            <div id="kt_repeater_1">
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tambah Catatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <!-- <button type="button" class="add_more_item btn btn-sm font-weight-bolder btn-light-primar">Tambah</button> -->
                                                        <a class="add_more_item btn btn-sm font-weight-bolder btn-light-primary">
                                                            <i class="la la-plus"></i>Tambah
                                                        </a>
                                                    </div>
                                                </div>

                                                <div data-repeater-item class="form-group">
                                                    <div class="item_catatan">
                                                        <div class="item_data">
                                                            <div class="form-group row">
                                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label>
                                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                                    <div class="input-group date">
                                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_catatan" name="tanggal_catatan[]" data-toggle="datetimepicker" data-target="#tanggal_catatan" placeholder="Pilih Tanggal" autocomplete="off"/>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">
                                                                                <i class="la la-calendar"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-form-label col-lg-3 col-sm-12">Catatan</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                    <div class="input-group date">
                                                                        <textarea class="form-control" rows="3" id="catatan" name="catatan[]"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="ket" name="ket[]" value="1"/>
                                                                <span></span><div style="margin-left: 10px;">Surat Usulan Asli Ditandatangani PPK</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="ket" name="ket[]" value="2"/>
                                                                <span></span><div style="margin-left: 10px;">Nota Usulan asli yang dilengkapi dengan data formasi dan ditandatangani oleh PPK</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="ket" name="ket[]" value="3"/>
                                                                <span></span><div style="margin-left: 10px;">Sertifikat/tanda lulus/surat keterangan lulus uji kompetensi</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="ket" name="ket[]" value="4"/>
                                                                <span></span><div style="margin-left: 10px;">PAK asli 1 tahun terakhir</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="ket" name="ket[]" value="5"/>
                                                                <span></span><div style="margin-left: 10px;">Salinan sah SK jabatan terakhir</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="ket" name="ket[]" value="6"/>
                                                                <span></span><div style="margin-left: 10px;">Salinan sah SK Pangkat terakhir</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:30px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="ket" name="ket[]" value="7"/>
                                                                <span></span><div style="margin-left: 10px;">Salinan sah SKP dan Penilaian Prestasi Kerja 2 tahun terakhir</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="ket" name="ket[]" value="8"/>
                                                                <span></span><div style="margin-left: 10px;">Semua persyaratan dan dokumen benar</div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="d-flex justify-content-between mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Sebelumnya</button>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Kirim Usulan</button>
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
                        <a href="<?php echo e(route('pic.administrasi.surat-usulan.index')); ?>"type="button" class="btn btn-light-danger font-weight-bold">Batalkan</a>
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
    <script id="tambah_catatan" type="text/x-handlebars-template">
        <div class="item_data">
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label>
                <div class="col-lg-5 col-md-9 col-sm-12">
                    <div class="input-group date">
                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_catatan" name="tanggal_catatan[]" data-toggle="datetimepicker" placeholder="Pilih Tanggal" autocomplete="off"/>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Catatan</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="input-group date">
                        <textarea class="form-control" rows="3" id="catatan" name="catatan[]"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <!-- <button type="button" class="remove_detail btn btn-sm font-weight-bolder btn-light-primar">Hapus</button> -->
                    <a style="margin-top: 10px;" class="remove_detail btn btn-sm font-weight-bolder btn-light-danger">
                        <i class="la la-trash-o"></i>Hapus Catatan
                    </a>
                </div>
            </div>
        </div>
    </script>

    <script>
        refreshDateTimePicker();
        function refreshDateTimePicker(){
            
            $('.my-datepicker').each(function(){
                $(this).datetimepicker({
                    useCurrent:false,
                    format: 'DD-MMM-YYYY'
                })

                $(this).keydown(function(e){
                    e.preventDefault();
                })

            })
        }

        $('#otherFieldDiv').hide();

        $('.select2').select2({
            placeholder: "Choose..."
        })

        $('#kt_repeater_1').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function () {
                $(this).slideDown();
            },

            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });


        var id = 1;

        $(document).on('click','.add_more_item',function(){
            var source = $("#tambah_catatan").html();
            // var template = Handlebars.compile(source);
            var template = '<div class="item_data"><div class="form-group row"><label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label><div class="col-lg-5 col-md-9 col-sm-12"><div class="input-group date"><input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_catatan_' + id +'" name="tanggal_catatan[]" data-toggle="datetimepicker" data-target="#tanggal_catatan_'+ id +'" placeholder="Pilih Tanggal" autocomplete="off" /><div class="input-group-append"><span class="input-group-text"><i class="la la-calendar"></i></span></div></div></div></div><div class="form-group row"><label class="col-form-label col-lg-3 col-sm-12">Catatan</label><div class="col-lg-9 col-md-9 col-sm-12"><div class="input-group date"><textarea class="form-control" rows="3" id="catatan" name="catatan[]" ></textarea></div></div></div><div class="form-group row"><div class="col-lg-9 col-md-9 col-sm-12"><!-- <button type="button" class="remove_detail btn btn-sm font-weight-bolder btn-light-primar">Hapus</button> --><a style="margin-top: 10px;" class="remove_detail btn btn-sm font-weight-bolder btn-light-danger"><i class="la la-trash-o"></i>Hapus Catatan</a></div></div></div>'
            $(this).parent().parent().parent().find(".item_catatan").append(template);
            id++;
            refreshDateTimePicker();
        });

        $(document).on('click','.remove_detail',function(event) {
            $(this).closest('.item_data').remove();
        });


    </script>
    <script>
        $(function(){
            $('#kt_form').validate({
                errorClass:"error-msg",
                errorElement:"p",
                rules:{
                    tanggal_surat_usulan: 'required',
                    no_surat_usulan: 'required',
                    jabatan_menandatangani: 'required',
                    file_data_usulan: {
                        extenstion: "jpg,png,jpeg,pdf"
                    },
                    nip: 'required',
                    nama: 'required',
                    tempat_lahir: 'required',
                    tanggal_lahir: 'required'
                    pendidikan_terakhir: 'required',
                    instansi_induk: 'required',
                    instansi_pengusul: 'required',
                    pangkat_gol: 'required',
                    tmt_gol: 'required',
                    file_data_asn: {
                        extenstion: "jpg,png,jpeg,pdf"
                    },
                    jabatan_fungsional: 'required',
                    no_keppress_jabatan_fungsional: 'required',
                    unit_kerja_fungsional: 'required',
                    file_data_jabatan_fungsional: {
                        extenstion: "jpg,png,jpeg,pdf"
                    },
                    tgl_penerimaan_keppres: 'required',
                    file_data_jabatan_fungsional_2: {
                        extenstion: "jpg,png,jpeg,pdf"
                    },
                    alasan_pemberhentian: 'required',
                    ket_alasan_pemberhentian: 'required',
                    file_data_pemberhentian: {
                        extenstion: "jpg,png,jpeg,pdf"
                    },
                    ket: 'required'

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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ardim\Desktop\siapp\resources\views/pages/pic/administrasi/surat_usulan/form/pembatalan_keppres_jabatan_fku.blade.php ENDPATH**/ ?>