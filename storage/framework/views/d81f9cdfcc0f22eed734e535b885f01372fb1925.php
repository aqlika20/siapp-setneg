



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
                            <h3 class="card-label">Pemberian Kenaikan Pangkat
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
                                <div data-wizard-type="step"></div>
                            </div>
                            <!--end: Wizard Nav-->
                            <!--begin: Wizard Body-->
                            <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                <div class="col-xl-20 col-xxl-12">
                                    <!--begin: Wizard Form-->
                                    <form class="form" id="kt_form" action="<?php echo e(route('pic.administrasi.kenaikan-pangkat.pemberian-kenaikan-pangkat.store')); ?>" enctype="multipart/form-data" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PATCH'); ?>
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content" data-wizard-state="current">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Usulan</h4>
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat usulan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_surat_usulan" name="tanggal_surat_usulan" data-toggle="datetimepicker" data-target="#tanggal_surat_usulan" placeholder="Pilih Tanggal" value="<?php echo e(old('tanggal_surat_usulan')); ?>"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">No. Surat Usulan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="no_surat_usulan" name="no_surat_usulan" value="<?php echo e(old('no_surat_usulan')); ?>" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jabatan Yang Menandatangani <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text"class="form-control" id="jabatan_menandatangani" name="jabatan_menandatangani" value="<?php echo e(old('jabatan_menandatangani')); ?>" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Periode Kenaikan Pangkat <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-2 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <select class="form-control select2" style="width: 230px;" id="masa_periode_start" name="masa_periode_start" onchange="myFunction(event)">
                                                            <option value="" disabled selected>Choose</option>
                                                                <option value="April" <?php if(old("masa_periode_start") == "April"): ?> selected="selected" <?php endif; ?>>April</option>
                                                                <option value="Oktober" <?php if(old("masa_periode_start") == "Oktober"): ?> selected="selected" <?php endif; ?>>Oktober</option>
                                                        </select>
                                                        <div class="input-group-append">
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <span class="form-text text-muted">Please input the date from start.</span>
                                                </div>
                                                <div>
                                                    <label class="col-form-label">s/d.</label>
                                                </div>
                                                <div class="col-lg-4 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input class="form-control" style="width: 230px;" type="text" id="masa_periode_end" name="masa_periode_end" value="<?php echo e(old('masa_periode_end')); ?>" readonly />
                                                        <div class="input-group-append">
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <span class="form-text text-muted">Please input the date from start.</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Surat Usulan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_data_usulan" name="file_data_usulan[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!--end: Wizard Step 1-->

                                        <!--begin: Wizard Step 2-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data ASN</h4>
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">NIP <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="18"  class="form-control" id="nip" name="nip" value="<?php echo e(old('nip')); ?>" autocomplete="off" />
                                                    </div>
                                                </div>
                                                <button id="btn-bkn" class="btn btn-light-primary font-weight-bold">Tarik Data BKN</button>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Nama <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e(old('nama')); ?>" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tempat Lahir <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo e(old('tempat_lahir')); ?>" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Lahir <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_lahir" name="tanggal_lahir" data-toggle="datetimepicker" data-target="#tanggal_lahir" placeholder="Pilih Tanggal" value="<?php echo e(old('tanggal_lahir')); ?>" autocomplete="off" />
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
                                                <label class="col-form-label col-lg-3 col-sm-12">Pendidikan Terakhir <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" value="<?php echo e(old('pendidikan_terakhir')); ?>" autocomplete="off"/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Instansi <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="instansi" name="instansi" value="<?php echo e(old('instansi')); ?>" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Pangkat (Gol/Ruang) <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control select2" style="width: 230px;" id="pangkat_gol" name="pangkat_gol">
                                                        <option value="">Choose</option>
                                                        <?php $__currentLoopData = $pangkats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pangkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($pangkat->name); ?>" <?php if(old("pangkat_gol") == $pangkat->name): ?> selected="selected" <?php endif; ?>><?php echo e($pangkat->name); ?> (<?php echo e($pangkat->golongan); ?>/<?php echo e($pangkat->ruang); ?>)</option>
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
                                                <label class="col-form-label col-lg-3 col-sm-12">TMT Gol/Ruang <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tmt_gol" name="tmt_gol" data-toggle="datetimepicker" data-target="#tmt_gol" placeholder="Pilih Tanggal" value="<?php echo e(old('tmt_gol')); ?>" autocomplete="off" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">TMT CPNS <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tmt_cpns" name="tmt_cpns" data-toggle="datetimepicker" data-target="#tmt_cpns" placeholder="Pilih Tanggal" value="<?php echo e(old('tmt_cpns')); ?>" autocomplete="off" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Masa Kerja Golongan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="masa_kerja_gol_tahun" name="masa_kerja_gol_tahun" value="<?php echo e(old('masa_kerja_gol_tahun')); ?>" autocomplete="off" required readonly/>
                                                        <label class="col-form-label text-left col-lg-3 col-sm-12">Tahun</label>

                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Nota Usul <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_nota_usulan" name="file_nota_usulan[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>

                                            
                                            <!-- <div  id="otherFieldDiv"> -->
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Data Dokumen Penetapan Angka Kredit (PAK)</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nomor PAK</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="nomor_pak" name="nomor_pak" value="<?php echo e(old('nomor_pak')); ?>" autocomplete="off" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal PAK</label>
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
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jumlah Angka Kredit</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="jumlah_angka_kredit" name="jumlah_angka_kredit" value="<?php echo e(old('jumlah_angka_kredit')); ?>" autocomplete="off" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Periode Penilaian</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <select class="form-control select2" id="periode_penilaian" name="periode_penilaian">
                                                            <option value="">Choose</option>
                                                            <?php $__currentLoopData = $periodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $periode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($periode->id); ?>" <?php if(old("periode_penilaian") == $periode->id): ?> selected="selected" <?php endif; ?>><?php echo e($periode->name); ?></option>
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
                                                    <label class="col-lg-3 col-form-label">Upload File</label>
                                                    <div class="col-lg-9">
                                                    <input id="file_data_pak" name="file_data_pak[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
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
                                                        <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                    </div>
                                                </div>
                                                <h4 class="mb-10 font-weight-bold text-dark">Klarifikasi Data Dokumen Penetapan Angka Kredit (PAK)
                                                    <span class="form-text text-muted"><small>Khusus untuk PAK yang dikeluarkan oleh Kemenkes & Kemendikbud</small></span>
                                                </h4>

                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nomor Klarifikasi</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="no_klarifikasi_pak" name="no_klarifikasi_pak" value="<?php echo e(old('no_klarifikasi_pak')); ?>" autocomplete="off"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal Klarifikasi</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_klarifikasi_pak" name="tanggal_klarifikasi_pak" data-toggle="datetimepicker" data-target="#tanggal_klarifikasi_pak" placeholder="Pilih Tanggal" value="<?php echo e(old('tanggal_klarifikasi_pak')); ?>" />
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
                                                        <input id="file_klarifikasi_pak" name="file_klarifikasi_pak[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
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
                                                        <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                    </div>
                                                </div>
                                            <!-- </div> -->
                                        </div>
                                        <!--end: Wizard Step 2-->

                                        <!--begin: Wizard Step 3-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Pangkat Lama</h4>
                                            <!--begin::Select-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jabatan Lama <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="jabatan_lama" name="jabatan_lama" value="<?php echo e(old('jabatan_lama')); ?>" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">No. SK Jabatan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="no_sk_jabatan_lama" name="no_sk_jabatan_lama" value="<?php echo e(old('no_sk_jabatan_lama')); ?>" autocomplete="off"  />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">TMT Jabatan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tmt_jabatan_lama" name="tmt_jabatan_lama" data-toggle="datetimepicker" data-target="#tmt_jabatan_lama" placeholder="Pilih Tanggal" value="<?php echo e(old('tmt_jabatan_lama')); ?>" autocomplete="off" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Unit Kerja <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="unit_kerja_lama" name="unit_kerja_lama" value="<?php echo e(old('unit_kerja_lama')); ?>" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload SK Pangkat Terakhir <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_sk_pangkat_terakhir" name="file_sk_pangkat_terakhir[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple autocomplete="off" />
                                                    
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <!--end: Wizard Step 3-->
                                        
                                        <!--begin: Wizard Step 4-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Terakhir</h4>

                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Pangkat (Gol/Ruang) <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control" style="width: 230px;" id="pangkat_gol_baru" name="pangkat_gol_baru">
                                                        <option value="">Choose</option>
                                                        <?php $__currentLoopData = $pangkats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pangkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($pangkat->id); ?>" <?php if(old("pangkat_gol_baru") == $pangkat->id): ?> selected="selected" <?php endif; ?>><?php echo e($pangkat->name); ?> (<?php echo e($pangkat->golongan); ?>/<?php echo e($pangkat->ruang); ?>)</option>
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
                                                <label class="col-form-label col-lg-3 col-sm-12">TMT (Gol/Ruang) <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tmt_gol_baru" name="tmt_gol_baru" data-toggle="datetimepicker" data-target="#tmt_gol_baru" placeholder="Pilih Tanggal" value="<?php echo e(old('tmt_gol_baru')); ?>" autocomplete="off" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Masa Kerja Golongan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="masa_kerja_gol_tahun_baru" name="masa_kerja_gol_tahun_baru" value="<?php echo e(old('masa_kerja_gol_tahun_baru')); ?>" autocomplete="off" required readonly/>
                                                        <label class="col-form-label text-left col-lg-3 col-sm-12">Tahun</label>

                                                    </div>
                                                </div>
                                            </div>

                                             <!-- <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="masa_kerja_gol_bulan_baru" name="masa_kerja_gol_bulan_baru" value="<?php echo e(old('masa_kerja_gol_bulan_baru')); ?>" autocomplete="off" />
                                                        <label class="col-form-label text-left col-lg-3 col-sm-12">Bulan</label>
                                                    </div>
                                                </div>
                                            </div>  -->

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Periode Masa Jabatan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-4 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" name="masa_jabatan_start" data-toggle="datetimepicker" data-target="#masa_jabatan_start" placeholder="Select Date First" id="masa_jabatan_start" value="<?php echo e(old('masa_jabatan_start')); ?>"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span> 
                                                        </div>
                                                    </div>
                                                    <span class="form-text text-muted">Please input the date from start.</span>
                                                </div>
                                                <div>
                                                    <label class="col-form-label">s/d.</label>
                                                </div>
                                                <div class="col-lg-4 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" name="masa_jabatan_end" data-toggle="datetimepicker" data-target="#masa_jabatan_end" placeholder="Select Date Last" id="masa_jabatan_end" value="<?php echo e(old('masa_jabatan_end')); ?>"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload SK Jabatan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_sk_jabatan" name="file_sk_jabatan[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple />
                                                    
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload BAP <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_bap" name="file_bap[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple />
                                                    
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload SPP <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_spp" name="file_spp[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple />
                                                    
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jabatan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control" style="width: 230px;" id="jabatan_pak" name="jabatan_pak">
                                                        <option value="">Choose</option>
                                                        <?php $__currentLoopData = $jabatanPaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatanPak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($jabatanPak->id); ?>" <?php if(old("jabatan_pak") == $jabatanPak->id): ?> selected="selected" <?php endif; ?>><?php echo e($jabatanPak->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="0">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div  id="otherJabatanPAKLainnya">
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan <a style="color: #FF0000;">*</a></label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="jataban_pak_lainnya" name="jataban_pak_lainnya" value="<?php echo e(old('jataban_pak_lainnya')); ?>" autocomplete="off" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div  id="otherJabatanPAK">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload PAK/Klarifikasi <a style="color: #FF0000;">*</a></label>
                                                    <div class="col-lg-9">
                                                        <input id="file_jabatan_pak_klarifikasi" name="file_jabatan_pak_klarifikasi[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple />
                                                        
                                                        <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--end: Wizard Step 4-->

                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content" data-wizard-state="current">
                                            <h4 class="mb-10 font-weight-bold text-dark">SKP 2 Tahun Terakhir</h4>
                                          
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Status Hukuman <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control" style="width: 230px;" id="status_hukuman" name="status_hukuman">
                                                        <option value="">Choose</option>
                                                        <option value="1" <?php if(old("status_hukuman") == 1): ?> selected="selected" <?php endif; ?>>Pernah Dijatuhi Hukuman</option>
                                                        <option value="2" <?php if(old("status_hukuman") == 2): ?> selected="selected" <?php endif; ?>>Tidak Pernah Dijatuhi Hukuman</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div id="pernah">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload Surat Keputusan Penjatuhan Hukuman Disiplin <a style="color: #FF0000;">*</a></label>
                                                    <div class="col-lg-9">
                                                        <input id="file_hukuman" name="file_hukuman[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple />
                                                        
                                                        <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Catatan <a style="color: #FF0000;">*</a></label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <textarea class="form-control" rows="3" id="catatan_hukuman" name="catatan_hukuman" ></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="pangkat_luarbiasa" name="pangkat_luarbiasa" value="1"/>
                                                            <span></span><div style="margin-left: 10px;">Kenaikan Pangkat Luar Biasa</div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="pangkatLuarBiasa">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload Surat Keputusan PPK  <a style="color: #FF0000;">*</a></label>
                                                    <div class="col-lg-9">
                                                        <input id="file_surat_keputusan_ppk" name="file_surat_keputusan_ppk[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple />
                                                        
                                                        <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload SKP 1 Tahun Terakhir <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_skp_1_tahun_terakhir" name="file_skp_1_tahun_terakhir[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple />
                                                    
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload SKP 2 Tahun Terakhir <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_skp_2_tahun_terakhir" name="file_skp_2_tahun_terakhir[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple />
                                                    
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_data_usulan" disabled/>
                                                            <span></span><div style="margin-left: 10px;">Surat Usulan</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_nota_usulan" disabled/>
                                                            <span></span><div style="margin-left: 10px;">Nota Usul</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_data_pak" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Data PAK</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_klarifikasi_pak" disabled/>
                                                            <span></span><div style="margin-left: 10px;">Klarifikasi PAK</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_sk_pangkat_terakhir" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File SK Pangkat Terakhir</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_sk_jabatan" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File SK Jabatan</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_bap" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File BAP</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_spp" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File SPP</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_jabatan_pak_klarifikasi" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Jabatan PAK Klarifikasi</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_hukuman" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Hukuman</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_surat_keputusan_ppk" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Surat Keputusan PPK</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_skp_1_tahun_terakhir" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File SKP 1 Tahun Terakhir</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_skp_2_tahun_terakhir" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File SKP 2 Tahun Terakhir</div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
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
                        <a href="<?php echo e(route('pic.administrasi.kenaikan-pangkat.index')); ?>"type="button" class="btn btn-light-danger font-weight-bold">Batalkan</a>
                    </div>
                </div>
            </div>
            <!--end: Wizard-->
        </div>
    </div>
			
<input type="hidden" id="url-api-fetch-data-bkn" name="url-api-fetch-data-bkn" value="<?php echo e(route('api.bkn.fetch-data')); ?>"/>
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

            $('.select2').select2({
                placeholder: "Choose..."
            })

            $('#periode_penilaian').select2({
                placeholder: "Choose..."
            })

            $('#pangkat_gol_baru').select2({
                placeholder: "Choose..."
            })

            $('#jabatan_pak').select2({
                placeholder: "Choose..."
            })

            $('#status_hukuman').select2({
                placeholder: "Choose..."
            })
        }

        $('.select2').select2({
            placeholder: "Choose..."
        })

        $("#file_data_usulan").on("change", function() {
            if ($("#file_data_usulan")[0].files.length > 5) {
                alert('Hanya boleh upload 5 file!.');
                $('#file_data_usulan').val('');
            }
        });

        $("#file_nota_usulan").on("change", function() {
            if ($("#file_nota_usulan")[0].files.length > 5) {
                alert('Hanya boleh upload 5 file!.');
                $('#file_nota_usulan').val('');
            }
        });

        $("#file_data_pak").on("change", function() {
            if ($("#file_data_pak")[0].files.length > 5) {
                alert('Hanya boleh upload 5 file!.');
                $('#file_data_pak').val('');
            }
        });

        $("#file_klarifikasi_pak").on("change", function() {
            if ($("#file_klarifikasi_pak")[0].files.length > 5) {
                alert('Hanya boleh upload 5 file!.');
                $('#file_klarifikasi_pak').val('');
            }
        });

        $("#file_sk_pangkat_terakhir").on("change", function() {
            if ($("#file_sk_pangkat_terakhir")[0].files.length > 5) {
                alert('Hanya boleh upload 5 file!.');
                $('#file_sk_pangkat_terakhir').val('');
            }
        });

        $("#file_sk_jabatan").on("change", function() {
            if ($("#file_sk_jabatan")[0].files.length > 5) {
                alert('Hanya boleh upload 5 file!.');
                $('#file_sk_jabatan').val('');
            }
        });

        $("#file_bap").on("change", function() {
            if ($("#file_bap")[0].files.length > 5) {
                alert('Hanya boleh upload 5 file!.');
                $('#file_bap').val('');
            }
        });

        $("#file_spp").on("change", function() {
            if ($("#file_spp")[0].files.length > 5) {
                alert('Hanya boleh upload 5 file!.');
                $('#file_spp').val('');
            }
        });

        $("#file_jabatan_pak_klarifikasi").on("change", function() {
            if ($("#file_jabatan_pak_klarifikasi")[0].files.length > 5) {
                alert('Hanya boleh upload 5 file!.');
                $('#file_jabatan_pak_klarifikasi').val('');
            }
        });

        $("#file_hukuman").on("change", function() {
            if ($("#file_hukuman")[0].files.length > 5) {
                alert('Hanya boleh upload 5 file!.');
                $('#file_hukuman').val('');
            }
        });

        $("#file_surat_keputusan_ppk").on("change", function() {
            if ($("#file_surat_keputusan_ppk")[0].files.length > 5) {
                alert('Hanya boleh upload 5 file!.');
                $('#file_surat_keputusan_ppk').val('');
            }
        });

        $("#file_skp_1_tahun_terakhir").on("change", function() {
            if ($("#file_skp_1_tahun_terakhir")[0].files.length > 5) {
                alert('Hanya boleh upload 5 file!.');
                $('#file_skp_1_tahun_terakhir').val('');
            }
        });

        $("#file_skp_2_tahun_terakhir").on("change", function() {
            if ($("#file_skp_2_tahun_terakhir")[0].files.length > 5) {
                alert('Hanya boleh upload 5 file!.');
                $('#file_skp_2_tahun_terakhir').val('');
            }
        });

        $('#tmt_gol_baru').on('change.datetimepicker', function(e) {

            var date_start = new Date(document.getElementById("tmt_gol_baru").value);
            var date_start_day = date_start.getDate();
            var date_start_month = date_start.getMonth();
            var date_start_year = date_start.getFullYear();

            var date_end = new Date();
            var date_end_day = date_end.getDate();
            var date_end_month = date_end.getMonth();
            var date_end_year = date_end.getFullYear();
            console.log(date_end);
            var calculated_date = 0;
            if(date_end_month > date_start_month) 
            {
                calculated_date = date_end_year - date_start_year;
            }
            else
            { 
                calculated_date = date_end_year - date_start_year;
            }


            var out_value = calculated_date;
            document.getElementById("masa_kerja_gol_tahun_baru").value = out_value;
            // getdatadate(date_end);
        });

        $('#tmt_gol').on('change.datetimepicker', function(e) {

            var date_start = new Date(document.getElementById("tmt_gol").value);
            var date_start_day = date_start.getDate();
            var date_start_month = date_start.getMonth();
            var date_start_year = date_start.getFullYear();

            var date_end = new Date();
            var date_end_day = date_end.getDate();
            var date_end_month = date_end.getMonth();
            var date_end_year = date_end.getFullYear();
            console.log(date_end);
            var calculated_date = 0;
            if(date_end_month > date_start_month) 
            {
                calculated_date = date_end_year - date_start_year;
            }
            else
            { 
                calculated_date = date_end_year - date_start_year;
            }


            var out_value = calculated_date;
            document.getElementById("masa_kerja_gol_tahun").value = out_value;
            // getdatadate(date_end);
        });
        
        $('#otherFieldDiv').hide();
        $('#otherJabatanPAK').hide();
        $('#otherJabatanPAKLainnya').hide();
        $('#pernah').hide();
        $('#pangkatLuarBiasa').hide();


        $("#jabatan_pak").change(function() {
            if ($(this).val() == "0") {
            $('#otherJabatanPAKLainnya').show();
            } else {
            $('#otherJabatanPAKLainnya').hide();
            }
        });
        $("#otherJabatanPAKLainnya").trigger("change");
        
        $("#jabatan_pak").change(function() {
            if ($(this).val() != "0") {
            $('#otherJabatanPAK').show();
            } else {
            $('#otherJabatanPAK').hide();
            }
        });
        $("#otherJabatanPAK").trigger("change");

        $("#status_hukuman").change(function() {
            if ($(this).val() == "1") {
            $('#pernah').show();
            } else {
            $('#pernah').hide();
            }
        });
        $("#pernah").trigger("change");

        $(function () {
        $("#pangkat_luarbiasa").click(function () {
            if ($(this).is(":checked")) {
                $("#pangkatLuarBiasa").show();
            } else {
                $("#pangkatLuarBiasa").hide();
            }
        });
    });

    function myFunction(event) {

    if (event.target.value === "April") {
        document.getElementById("masa_periode_end").value ="29 Februari";
    } else if (event.target.value === "Oktober") {
        document.getElementById("masa_periode_end").value = "31 Agustus";
    }
    };

    $(document).ready(function () {
        $("#file_data_usulan").on("change", function () {

        if ($('#file_data_usulan')[0].files.length != 0) {
            $("#checked_file_data_usulan").attr('checked', true);
        } else {
            $("#checked_file_data_usulan").attr('checked',false);
        }
        });

        $("#file_nota_usulan").on("change", function () {

        if ($('#file_nota_usulan')[0].files.length != 0) {
            $("#checked_file_nota_usulan").attr('checked', true);
        } else {
            $("#checked_file_nota_usulan").attr('checked',false);
        }
        });

        $("#file_data_pak").on("change", function () {

        if ($('#file_data_pak')[0].files.length != 0) {
            $("#checked_file_data_pak").attr('checked', true);
        } else {
            $("#checked_file_data_pak").attr('checked',false);
        }
        });

        $("#file_klarifikasi_pak").on("change", function () {

        if ($('#file_klarifikasi_pak')[0].files.length != 0) {
            $("#checked_file_klarifikasi_pak").attr('checked', true);
        } else {
            $("#checked_file_klarifikasi_pak").attr('checked',false);
        }
        });
        
        $("#file_sk_pangkat_terakhir").on("change", function () {

        if ($('#file_sk_pangkat_terakhir')[0].files.length != 0) {
            $("#checked_file_sk_pangkat_terakhir").attr('checked', true);
        } else {
            $("#checked_file_sk_pangkat_terakhir").attr('checked',false);
        }
        });

        $("#file_sk_jabatan").on("change", function () {

        if ($('#file_sk_jabatan')[0].files.length != 0) {
            $("#checked_file_sk_jabatan").attr('checked', true);
        } else {
            $("#checked_file_sk_jabatan").attr('checked',false);
        }
        });

        $("#file_bap").on("change", function () {

        if ($('#file_bap')[0].files.length != 0) {
            $("#checked_file_bap").attr('checked', true);
        } else {
            $("#checked_file_bap").attr('checked',false);
        }
        });

         $("#file_spp").on("change", function () {

        if ($('#file_spp')[0].files.length != 0) {
            $("#checked_file_spp").attr('checked', true);
        } else {
            $("#checked_file_spp").attr('checked',false);
        }
        });

         $("#file_jabatan_pak_klarifikasi").on("change", function () {

        if ($('#file_jabatan_pak_klarifikasi')[0].files.length != 0) {
            $("#checked_file_jabatan_pak_klarifikasi").attr('checked', true);
        } else {
            $("#checked_file_jabatan_pak_klarifikasi").attr('checked',false);
        }
        });

         $("#file_hukuman").on("change", function () {

        if ($('#file_hukuman')[0].files.length != 0) {
            $("#checked_file_hukuman").attr('checked', true);
        } else {
            $("#checked_file_hukuman").attr('checked',false);
        }
        });

         $("#file_surat_keputusan_ppk").on("change", function () {

        if ($('#file_surat_keputusan_ppk')[0].files.length != 0) {
            $("#checked_file_surat_keputusan_ppk").attr('checked', true);
        } else {
            $("#checked_file_surat_keputusan_ppk").attr('checked',false);
        }
        });

         $("#file_skp_1_tahun_terakhir").on("change", function () {

        if ($('#file_skp_1_tahun_terakhir')[0].files.length != 0) {
            $("#checked_file_skp_1_tahun_terakhir").attr('checked', true);
        } else {
            $("#checked_file_skp_1_tahun_terakhir").attr('checked',false);
        }
        });

         $("#file_skp_2_tahun_terakhir").on("change", function () {

        if ($('#file_skp_2_tahun_terakhir')[0].files.length != 0) {
            $("#checked_file_skp_2_tahun_terakhir").attr('checked', true);
        } else {
            $("#checked_file_skp_2_tahun_terakhir").attr('checked',false);
        }
        });
    });



        function applyTimePicker(type, id, date){
            switch(type){
                case 'min':
                    $(id).datetimepicker('minDate', date);
                    break;
                case 'max':
                    $(id).datetimepicker('maxDate', date);
                    break;
            }
        }

        function renewDate(type, date){
            var new_date = null;
            switch(type){
                case 'min':
                    new_date = moment(date).add(1, "days");
                    break;
                case 'max':
                    new_date = moment(date).subtract(1, "days");
                    break;
            }

            return new_date;
        }

        $('#masa_jabatan_start, #masa_jabatan_end').on('change.datetimepicker', function(e) {
            if(e.date){
                var min_date = renewDate('min', e.date);
                applyTimePicker('min', '#masa_jabatan_end', min_date);
            }
            var date_start = new Date(document.getElementById("masa_jabatan_start").value);
            var date_start_day = date_start.getDate();
            var date_start_month = date_start.getMonth();
            var date_start_year = date_start.getFullYear();

            var date_end = new Date(document.getElementById("masa_jabatan_end").value);
            var date_end_day = date_end.getDate();
            var date_end_month = date_end.getMonth();
            var date_end_year = date_end.getFullYear();
            
            var calculated_date = 0;
            if(date_end_month > date_start_month) 
            {
                calculated_date = date_end_year - date_start_year;
            }
            else
            { 
                calculated_date = date_end_year - date_start_year;
            }


            var out_value = calculated_date;
            document.getElementById("masa").innerHTML = out_value + ' Tahun';
            getdatadate(date_end);

        });

        $('#masa_periode_start').on('change.datetimepicker', function(e) {
            if(e.date){
                var min_date = renewDate('min', e.date);
                applyTimePicker('min', '#masa_periode_end', min_date);
            }
        });

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

        // $(document).on('click','.add_more_item',function(){
        //     var source = $("#tambah_catatan").html();
        //     // var template = Handlebars.compile(source);
        //     var template = '<div class="item_data"><div class="form-group row"><label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label><div class="col-lg-5 col-md-9 col-sm-12"><div class="input-group date"><input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_catatan_' + id +'" name="tanggal_catatan[]" data-toggle="datetimepicker" data-target="#tanggal_catatan_'+ id +'" placeholder="Pilih Tanggal" autocomplete="off" /><div class="input-group-append"><span class="input-group-text"><i class="la la-calendar"></i></span></div></div></div></div><div class="form-group row"><label class="col-form-label col-lg-3 col-sm-12">Catatan</label><div class="col-lg-9 col-md-9 col-sm-12"><div class="input-group date"><textarea class="form-control" rows="3" id="catatan" name="catatan[]" ></textarea></div></div></div><div class="form-group row"><div class="col-lg-9 col-md-9 col-sm-12"><!-- <button type="button" class="remove_detail btn btn-sm font-weight-bolder btn-light-primar">Hapus</button> --><a style="margin-top: 10px;" class="remove_detail btn btn-sm font-weight-bolder btn-light-danger"><i class="la la-trash-o"></i>Hapus Catatan</a></div></div></div>'
        //     $(this).parent().parent().parent().find(".item_catatan").append(template);
        //     id++;
        //     refreshDateTimePicker();
        // });

        $(document).on('click','.remove_detail',function(event) {
            $(this).closest('.item_data').remove();
        });

        function confirmation(){
            if(confirm('are you sure?')){
                document.getElementById('kt_form').submit();
            }else{
                return false;
            }   
        }

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
                        extenstion: "pdf"
                    },
                    
                    nip: 'required',
                    nama: 'required',
                    tempat_lahir: 'required',
                    tanggal_lahir: 'required',
                    pendidikan_terakhir: 'required',
                    instansi: 'required',
                    file_data_asn: {
                        extenstion: "pdf"
                    },
                    pangkat_gol: 'required',
                    tmt_gol: 'required',
                    tmt_cpns: 'required',
                    masa_kerja_gol_tahun: 'required',
                    masa_kerja_gol_bulan: 'required',
                    file_nota_usulan: {
                        extenstion: "pdf"
                    },

                    jabatan: 'required',
                    no_keppress_jabatan: 'required',
                    file_sk_pangkat_terakhir: {
                        extenstion: "jpg,png,jpeg,pdf"
                    },
                    file_pengambilan_sumpah: {
                        extenstion: "pdf"
                    },
                    tmt_jabatan: 'required',
                    unit_kerja: 'required',

                    pangkat_gol_baru: 'required',
                    tmt_gol_baru: 'required',
                    masa_kerja_gol_tahun_baru: 'required',
                    masa_kerja_gol_bulan_baru: 'required',
                    periode_kenaikan: 'required',
                    file_pendukung: {
                        extenstion: "pdf"
                    },

                    tanggal_catatan: 'required',
                    catatan: 'required'

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
    <script src="<?php echo e(asset('js/pages/bkn.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\siapp\resources\views/pages/pic/administrasi/kenaikan_pangkat/form/pemberian_kenaikan_pangkat.blade.php ENDPATH**/ ?>