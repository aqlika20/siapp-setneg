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
                            <h3 class="card-label">Pemberhentian Tidak Dengan Hormat
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
                            </div>
                            <!--end: Wizard Nav-->
                            <!--begin: Wizard Body-->
                            <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                <div class="col-xl-20 col-xxl-12">
                                    <!--begin: Wizard Form-->
                                    <form class="form" id="kt_form" action="<?php echo e(route('pic.administrasi.pemberhentian.berhenti-tidak-dengan-hormat.store')); ?>" enctype="multipart/form-data" method="POST">
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
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_surat_usulan" name="tanggal_surat_usulan" data-toggle="datetimepicker" data-target="#tanggal_surat_usulan" placeholder="Pilih Tanggal" value="<?php echo e(old('tanggal_surat_usulan')); ?>" />
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
                                                <label class="col-lg-3 col-form-label">Upload Surat Usulan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_data_usulan" name="file_data_usulan[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
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
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Putusan Pengadilan yang Sudah Inkrach <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_putusan_pengadilan_inkrach" name="file_putusan_pengadilan_inkrach[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
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
                                                        <input type="number" maxlength="18"  class="form-control" id="nip" name="nip" value="<?php echo e(old('nip')); ?>" autocomplete="off" />
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
                                                    <select class="form-control select2" style="width: 230px;" id="pendidikan_terakhir" name="pendidikan_terakhir">
                                                        <option value="">Choose</option>
                                                        <?php $__currentLoopData = $pendidikans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendidikan_terakhir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($pendidikan_terakhir->id); ?>"><?php echo e($pendidikan_terakhir->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Ijasah Terakhir <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_ijasah" name="file_ijasah[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
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
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Instansi Induk <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="instansi_induk" name="instansi_induk" value="<?php echo e(old('instansi_induk')); ?>" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Pangkat (Gol/Ruang) Baru <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control select2" style="width: 230px;" id="pangkat_baru" name="pangkat_baru">
                                                        <option value="">Choose</option>
                                                        <?php $__currentLoopData = $pangkats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pangkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($pangkat->id); ?>" <?php if(old("pangkat_baru") == $pangkat->id): ?> selected="selected" <?php endif; ?>><?php echo e($pangkat->name); ?> (<?php echo e($pangkat->golongan); ?>/<?php echo e($pangkat->ruang); ?></option>
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
                                                <label class="col-form-label col-lg-3 col-sm-12">TMT Pemberhentian <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tmt_pemberhentian" name="tmt_pemberhentian" data-toggle="datetimepicker" data-target="#tmt_pemberhentian" placeholder="Pilih Tanggal" value="<?php echo e(old('tmt_pemberhentian')); ?>" autocomplete="off" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Taspen <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <textarea type="text" class="form-control" id="taspen" name="taspen" value="<?php echo e(old('taspen')); ?>" autocomplete="off" require></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload SK Pangkat Terakhir <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_sk_pangkat_terakhir" name="file_sk_pangkat_terakhir[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
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
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload SK Jabatan Terakhir <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_sk_jabatan_terakhir" name="file_sk_jabatan_terakhir[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
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

                                            <div  id="otherFieldDiv">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data PAK</h4>
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
                                                <h4 class="mb-10 font-weight-bold text-dark">Klarifikasi PAK
                                                    <span class="form-text text-muted"><small>Khusus untuk PAK yang dikeluarkan oleh Kemenkes & Kemendikbud</small></span>
                                                </h4>

                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nomor Klarifikasi</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="no_klarifikasi" name="no_klarifikasi" value="<?php echo e(old('no_klarifikasi')); ?>" autocomplete="off"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal Klarifikasi</label>
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
                                                    <label class="col-lg-3 col-form-label">Upload/Download File</label>
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
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_data_usulan" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Surat Usulan</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_putusan_pengadilan_inkrach" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Putusan Pengadilan yang Sudah Inkrach</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_ijasah" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Ijasah Terakhir</div>
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
                                                            <input type="checkbox" id="checked_file_data_pak" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Data PAK</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_klarifikasi_pak" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Klarifikasi PAK</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_sk_jabatan_terakhir" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File SK Jabatan Terakhir</div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 2-->

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
                        <a href="<?php echo e(route('pic.administrasi.pemberhentian.index')); ?>"type="button" class="btn btn-light-danger font-weight-bold">Batalkan</a>
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
    <script id="tambah_catatan" type="text/x-handlebars-template">
        <div class="item_data">
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan <a style="color: #FF0000;">*</a></label>
                <div class="col-lg-5 col-md-9 col-sm-12">
                    <div class="input-group date">
                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_catatan" name="tanggal_catatan[]" data-toggle="datetimepicker" placeholder="Pilih Tanggal" autocomplete="off" />
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Catatan <a style="color: #FF0000;">*</a></label>
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

            $('.select2').select2({
                placeholder: "Choose..."
            })
        }

        $(document).ready(function () {
            $("#file_data_usulan").on("change", function () {
                if ($('#file_data_usulan')[0].files.length != 0) {
                    $("#checked_file_data_usulan").attr('checked', true);
                } else {
                    $("#checked_file_data_usulan").attr('checked',false);
                }
            });

            $("#file_putusan_pengadilan_inkrach").on("change", function () {
                if ($('#file_putusan_pengadilan_inkrach')[0].files.length != 0) {
                    $("#checked_file_putusan_pengadilan_inkrach").attr('checked', true);
                } else {
                    $("#checked_file_putusan_pengadilan_inkrach").attr('checked',false);
                }
            });

            $("#file_ijasah").on("change", function () {
                if ($('#file_ijasah')[0].files.length != 0) {
                    $("#checked_file_ijasah").attr('checked', true);
                } else {
                    $("#checked_file_ijasah").attr('checked',false);
                }
            });

            $("#file_sk_pangkat_terakhir").on("change", function () {
                if ($('#file_sk_pangkat_terakhir')[0].files.length != 0) {
                    $("#checked_file_sk_pangkat_terakhir").attr('checked', true);
                } else {
                    $("#checked_file_sk_pangkat_terakhir").attr('checked',false);
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

            $("#file_sk_jabatan_terakhir").on("change", function () {
                if ($('#file_sk_jabatan_terakhir')[0].files.length != 0) {
                    $("#checked_file_sk_jabatan_terakhir").attr('checked', true);
                } else {
                    $("#checked_file_sk_jabatan_terakhir").attr('checked',false);
                }
            });

        });

        $('#otherFieldDiv').hide();

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
            var template = '<div class="item_data"><div class="form-group row"><label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan <a style="color: #FF0000;">*</a></label><div class="col-lg-5 col-md-9 col-sm-12"><div class="input-group date"><input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_catatan_' + id +'" name="tanggal_catatan[]" data-toggle="datetimepicker" data-target="#tanggal_catatan_'+ id +'" placeholder="Pilih Tanggal" autocomplete="off" /><div class="input-group-append"><span class="input-group-text"><i class="la la-calendar"></i></span></div></div></div></div><div class="form-group row"><label class="col-form-label col-lg-3 col-sm-12">Catatan <a style="color: #FF0000;">*</a></label><div class="col-lg-9 col-md-9 col-sm-12"><div class="input-group date"><textarea class="form-control" rows="3" id="catatan" name="catatan[]" ></textarea></div></div></div><div class="form-group row"><div class="col-lg-9 col-md-9 col-sm-12"><!-- <button type="button" class="remove_detail btn btn-sm font-weight-bolder btn-light-primar">Hapus</button> --><a style="margin-top: 10px;" class="remove_detail btn btn-sm font-weight-bolder btn-light-danger"><i class="la la-trash-o"></i>Hapus Catatan</a></div></div></div>'
            $(this).parent().parent().parent().find(".item_catatan").append(template);
            id++;
            refreshDateTimePicker();
        });

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

        $("#file_data_usulan").on("change", function() {
    if ($("#file_data_usulan")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_data_usulan').val('');
    }
    });

    $("#file_putusan_pengadilan_inkrach").on("change", function() {
    if ($("#file_putusan_pengadilan_inkrach")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_putusan_pengadilan_inkrach').val('');
    }
    });

    $("#file_ijasah").on("change", function() {
    if ($("#file_ijasah")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_ijasah').val('');
    }
    });

    $("#file_sk_pangkat_terakhir").on("change", function() {
    if ($("#file_sk_pangkat_terakhir")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_sk_pangkat_terakhir').val('');
    }
    });

    $("#file_sk_jabatan_terakhir").on("change", function() {
    if ($("#file_sk_jabatan_terakhir")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_sk_jabatan_terakhir').val('');
    }
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
                        extension: "pdf"
                    },
                    nip: 'required',
                    nama: 'required',
                    tanggal_lahir: 'required'
                    pendidikan_terakhir: 'required',
                    instansi: 'required',
                    pangkat_gol: 'required',
                    tmt_gol_baru: 'required',

                    file_data_pak: {
                        extension: "pdf"
                    },
                    file_klarifikasi_pak: {
                        extension: "pdf"
                    },

                    pangkat_lama: 'required',
                    gol_ruang_lama: 'required',
                    tmt_lama: 'required',

                    jabatan_terakhir: 'required',
                    unit_kerja_terakhir: 'required',
                    tmt_berhenti: 'required',
                    tmt_pensiun: 'required',
                    
                    tanggal_catatan: 'required',
                    catatan: 'required',
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
    <script src="<?php echo e(asset('js/pages/bkn-pemberhentian.js')); ?>"></script> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/siapp/resources/views/pages/pic/administrasi/pemberhentian/form/berhenti_tidak_hormat.blade.php ENDPATH**/ ?>