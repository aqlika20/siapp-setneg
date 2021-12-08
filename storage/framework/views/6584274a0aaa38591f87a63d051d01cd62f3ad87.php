



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
                            <h3 class="card-label">Usulan Pengangkatan Pejabat Fungsional Ahli Utama melalui Promosi
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
                                <div data-wizard-type="step"></div>
                                <div data-wizard-type="step"></div>																						
                            </div>
                            <!--end: Wizard Nav-->
                            <!--begin: Wizard Body-->
                            <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                <div class="col-xl-20 col-xxl-12">
                                    <!--begin: Wizard Form-->
                                    <form class="form" id="kt_form" action="<?php echo e(route('pic.administrasi.surat-usulan.pengangkatan-pejabat-fku.store')); ?>" enctype="multipart/form-data" method="POST">
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
                                                    <!-- <p id="maksimal_satu_tahun">ssss</p> -->
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">No. Surat Usulan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="no_surat_usulan" name="no_surat_usulan" value="<?php echo e(old('no_surat_usulan')); ?>" autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">PPK Pejabat yang Diusulkan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="ppk_pejabat_yang_diusulkan" name="ppk_pejabat_yang_diusulkan" value="<?php echo e(old('ppk_pejabat_yang_diusulkan')); ?>" autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jabatan Yang Menandatangani <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text"class="form-control" id="pejabat_menandatangani" name="pejabat_menandatangani" value="<?php echo e(old('pejabat_menandatangani')); ?>" autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Surat Usulan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_surat_usulan" name="file_surat_usulan[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
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
                                                        <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="18"  class="form-control" id="nip" name="nip" value="<?php echo e(old('nip')); ?>" autocomplete="off"/>
                                                    </div>
                                                </div>
                                                <button id="btn-bkn" class="btn btn-light-primary font-weight-bold">Tarik Data BKN</button>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Nama dan Gelar <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e(old('nama')); ?>" autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tempat Lahir <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo e(old('tempat_lahir')); ?>" autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Lahir <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_lahir" name="tanggal_lahir" data-toggle="datetimepicker" data-target="#tanggal_lahir" placeholder="Pilih Tanggal" value="<?php echo e(old('tanggal_lahir')); ?>" autocomplete="off"/>
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
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" value="<?php echo e(old('pendidikan_terakhir')); ?>" autocomplete="off"/>
                                                    </div>
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
                                                <label class="col-form-label col-lg-3 col-sm-12">Instansi Pengusul <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="instansi_pengusul" name="instansi_pengusul" value="<?php echo e(old('instansi_pengusul')); ?>" autocomplete="off" />
                                                    </div>
                                                    <div id="instan"></div>
                                                    <?php echo e(csrf_field()); ?>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jumlah <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo e(old('jumlah')); ?>" autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Terisi <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="terisi" name="terisi" value="<?php echo e(old('terisi')); ?>" autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Sisa <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="sisa" name="sisa" value="<?php echo e(old('sisa')); ?>" autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Nota Usulan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_nota_usulan" name="file_nota_usulan[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
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
                                                <label class="col-lg-3 col-form-label">Upload Penetapan kebutuhan formasi dari KemenPANRB <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_penetapan_kebutuhan_formasi" name="file_penetapan_kebutuhan_formasi[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
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
                                                <label class="col-lg-3 col-form-label">Upload Ijazah terakhir <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_ijazah" name="file_ijazah[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
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
                                                <label class="col-lg-3 col-form-label">Upload Pencantuman Gelar Akademik (GPA) <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_pencantuman_gelar" name="file_pencantuman_gelar[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
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
                                            
                                            <br>
                                            <br>
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Dokumen Penetapan Angka Kredit (PAK)</h4>
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
                                                <label class="col-form-label col-lg-3 col-sm-12">Jumlah Angka Kredit</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="jumlah_angka_kredit" name="jumlah_angka_kredit" value="<?php echo e(old('jumlah_angka_kredit')); ?>" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal ditetapkan</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input" id="tanggal_pak" name="tanggal_pak" data-toggle="datetimepicker" data-target="#tanggal_pak" placeholder="Pilih Tanggal" value="<?php echo e(old('tanggal_pak')); ?>" autocomplete="off" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Dokumen PAK</label>
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
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Dokumen Klarifikasi PAK</label>
                                                <div class="col-lg-9">
                                                <input id="file_klarifikasi_pak" name="file_klarifikasi_pak[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
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
                                        </div>
                                        <!--end: Wizard Step 2-->

                                        <!--begin: Wizard Step 3-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Lama</h4>
                                            <!--begin::Select-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jabatan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="jabatan_lama" name="jabatan_lama" value="<?php echo e(old('jabatan_lama')); ?>" autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">No. SK Jabatan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="no_sk_jabatan_lama" name="no_sk_jabatan_lama" value="<?php echo e(old('no_sk_jabatan_lama')); ?>" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">TMT Jabatan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input" id="tmt_jabatan_lama" name="tmt_jabatan_lama" data-toggle="datetimepicker" data-target="#tmt_jabatan_lama" placeholder="Pilih Tanggal" value="<?php echo e(old('tmt_jabatan_lama')); ?>" autocomplete="off"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Satuan Organisasi Lama <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="satuan_organisasi_lama" name="satuan_organisasi_lama" value="<?php echo e(old('satuan_organisasi_lama')); ?>" autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload SK Jabatan sebelumnya <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_jabatan_lama" name="file_jabatan_lama[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple autocomplete="off"/>
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
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <!--end: Wizard Step 3-->
                                        
                                        <!--begin: Wizard Step 4-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Baru</h4>

                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jabatan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="jabatan_baru" name="jabatan_baru" value="<?php echo e(old('jabatan_baru')); ?>" autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Satuan Organisasi Baru <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="satuan_organisasi_baru" name="satuan_organisasi_baru" value="<?php echo e(old('satuan_organisasi_baru')); ?>" autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 4-->

                                        <!--begin: Wizard Step 5-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Kompetensi</h4>

                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jabatan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="jabatan_kompetensi" name="jabatan_kompetensi" value="<?php echo e(old('jabatan_kompetensi')); ?>" autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Nomor Sertifikat/Surat <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="no_sertifikat" name="no_sertifikat" value="<?php echo e(old('no_sertifikat')); ?>" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tgl.Sertifikat/Surat Kompetensi <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_sertifikat" name="tanggal_sertifikat" data-toggle="datetimepicker" data-target="#tanggal_sertifikat" placeholder="Pilih Tanggal" value="<?php echo e(old('tanggal_sertifikat')); ?>" autocomplete="off"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Sertifikat Uji Kompetensi. <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_data_kompetensi" name="file_data_kompetensi[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
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
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>

                                        </div>
                                        <!--end: Wizard Step 5-->

                                        <!--begin: Wizard Step 6-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Pangkat</h4>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Nomor SK Pangkat <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="no_sk_pangkat" name="no_sk_pangkat" value="<?php echo e(old('no_sk_pangkat')); ?>" autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Pangkat (Gol/Ruang) <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control select2" style="width: 230px;" id="pangkat_gol" name="pangkat_gol">
                                                        <option value="">Choose</option>
                                                        <?php $__currentLoopData = $pangkats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pangkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($pangkat->id); ?>" <?php echo e(old('pangkat_gol') == $pangkat->id ? 'selected' : ''); ?> ><?php echo e($pangkat->name); ?> (<?php echo e($pangkat->golongan); ?>/<?php echo e($pangkat->ruang); ?>)</option>
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
                                                <label class="col-form-label col-lg-3 col-sm-12">TMT <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tmt_gol" name="tmt_gol" data-toggle="datetimepicker" data-target="#tmt_gol" placeholder="Pilih Tanggal" value="<?php echo e(old('tmt_gol')); ?>" autocomplete="off"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload SK pangkat terakhir. <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_sk_pangkat_terakhir" name="file_sk_pangkat_terakhir[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
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
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 6-->

                                        <!--begin: Wizard Step 7-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Penilaian SKP dan Penilaian Prestasi Kerja 2 tahun terakhir</h4>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Penilaian SKP <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_penilaian_skp" name="file_penilaian_skp[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
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
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Penilaian Prestasi Kerja 2 Tahun Terakhir <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_penilaian_prestasi" name="file_penilaian_prestasi[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
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
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label"> Upload Dokumen Pendukung Lainnya <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_skp_2_lainnya" name="file_skp_2_lainnya[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
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
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
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
                                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan <a style="color: #FF0000;">*</a></label>
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
                                                                <label class="col-form-label col-lg-3 col-sm-12">Catatan <a style="color: #FF0000;">*</a></label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                    <div class="input-group date">
                                                                        <textarea class="form-control" rows="3" id="catatan" name="catatan[]" ></textarea>
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
                                                                <input type="checkbox" id="checked_file_surat_usulan" disabled/>
                                                                <span></span><div style="margin-left: 10px;">Surat Usulan</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="checked_file_nota_usulan" disabled/>
                                                                <span></span><div style="margin-left: 10px;">Nota Usulan</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="checked_file_penetapan_kebutuhan_formasi" disabled/>
                                                                <span></span><div style="margin-left: 10px;">Penetapan Kebutuhan Formasi dari KemenPANRB</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="checked_file_ijazah" disabled/>
                                                                <span></span><div style="margin-left: 10px;">Ijazah Terakhir</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="checked_file_pencantuman_gelar" disabled/>
                                                                <span></span><div style="margin-left: 10px;">Pencantuman Gelar Akademik (GPA)</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="checked_file_data_pak" disabled/>
                                                                <span></span><div style="margin-left: 10px;">Dokumen PAK</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:30px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="checked_file_klarifikasi_pak" disabled/>
                                                                <span></span><div style="margin-left: 10px;">Dokumen Klarifikasi PAK</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="checked_file_jabatan_lama" disabled/>
                                                                <span></span><div style="margin-left: 10px;">SK Jabatan Sebelumnya</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="checked_file_data_kompetensi" disabled/>
                                                                <span></span><div style="margin-left: 10px;">Sertifikat Uji Kompetensi</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="checked_file_sk_pangkat_terakhir" disabled/>
                                                                <span></span><div style="margin-left: 10px;">SK Pangkat Terakhir</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="checked_file_penilaian_skp" disabled/>
                                                                <span></span><div style="margin-left: 10px;">Penilaian SKP</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="checked_file_penilaian_prestasi" disabled/>
                                                                <span></span><div style="margin-left: 10px;">Penilaian Prestasi Kerja 2 Tahun Terakhir</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="checked_file_skp_2_lainnya" disabled/>
                                                                <span></span><div style="margin-left: 10px;">Dokumen SKP 2 Pendukung Lainnya</div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>	 
                                        </div>
                                        <!--end: Wizard Step 7-->

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
                        <a href="<?php echo e(route('pic.administrasi.surat-usulan.index')); ?>"type="button" class="btn btn-light-danger font-weight-bold">Batalkan</a>
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
    <!-- <script>
        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script> -->

    <script>
        $(document).ready(function(){

        $('#instansi_pengusul').keyup(function(){ 
                var query = $(this).val();
                if(query != '')
                {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                url:"<?php echo e(route('autocomplete.fetch')); ?>",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                    console.log("masuk", data);
                    $('#instan').fadeIn();  
                        $('#instan').html(data);
                    }
                });
                }
            });

            $(document).on('click', 'li', function(){  
                $('#instansi_pengusul').val($(this).text());  
                $('#instan').fadeOut();  
            });  

        });
        $('#tmt_jabatan_lama').datetimepicker({
            useCurrent:false,
            format: 'DD-MMM-YYYY',
            maxDate: new Date().setHours(0,0,0,0)
        })
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
 
        $(document).ready(function () 
        {
            var currentdate = new Date();
            $( "#tanggal_pak" ).datetimepicker({
                format: 'DD-MMM-YYYY',
                maxDate: moment(),
                minDate: currentdate.setFullYear(currentdate.getFullYear() - 1)
            });
            $("#file_surat_usulan").on("change", function () {
                if ($('#file_surat_usulan')[0].files.length != 0) {
                    $("#checked_file_surat_usulan").attr('checked', true);
                } else {
                    $("#checked_file_surat_usulan").attr('checked',false);
                }
            });

            $("#file_nota_usulan").on("change", function () {
                if ($('#file_nota_usulan')[0].files.length != 0) {
                    $("#checked_file_nota_usulan").attr('checked', true);
                } else {
                    $("#checked_file_nota_usulan").attr('checked',false);
                }
            });

            $("#file_penetapan_kebutuhan_formasi").on("change", function () {
                if ($('#file_penetapan_kebutuhan_formasi')[0].files.length != 0) {
                    $("#checked_file_penetapan_kebutuhan_formasi").attr('checked', true);
                } else {
                    $("#checked_file_penetapan_kebutuhan_formasi").attr('checked',false);
                }
            });
            
            $("#file_ijazah").on("change", function () {
                if ($('#file_ijazah')[0].files.length != 0) {
                    $("#checked_file_ijazah").attr('checked', true);
                } else {
                    $("#checked_file_ijazah").attr('checked',false);
                }
            });
            
            $("#file_pencantuman_gelar").on("change", function () {
                if ($('#file_pencantuman_gelar')[0].files.length != 0) {
                    $("#checked_file_pencantuman_gelar").attr('checked', true);
                } else {
                    $("#checked_file_pencantuman_gelar").attr('checked',false);
                }
            });
            
            $("#file_jabatan_lama").on("change", function () {
                if ($('#file_jabatan_lama')[0].files.length != 0) {
                    $("#checked_file_jabatan_lama").attr('checked', true);
                } else {
                    $("#checked_file_jabatan_lama").attr('checked',false);
                }
            });
            
            $("#file_data_kompetensi").on("change", function () {
                if ($('#file_data_kompetensi')[0].files.length != 0) {
                    $("#checked_file_data_kompetensi").attr('checked', true);
                } else {
                    $("#checked_file_data_kompetensi").attr('checked',false);
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
            
            $("#file_penilaian_skp").on("change", function () {
                if ($('#file_penilaian_skp')[0].files.length != 0) {
                    $("#checked_file_penilaian_skp").attr('checked', true);
                } else {
                    $("#checked_file_penilaian_skp").attr('checked',false);
                }
            });
            
            $("#file_penilaian_prestasi").on("change", function () {
                if ($('#file_penilaian_prestasi')[0].files.length != 0) {
                    $("#checked_file_penilaian_prestasi").attr('checked', true);
                } else {
                    $("#checked_file_penilaian_prestasi").attr('checked',false);
                }
            });
            
            $("#file_skp_2_lainnya").on("change", function () {
                if ($('#file_skp_2_lainnya')[0].files.length != 0) {
                    $("#checked_file_skp_2_lainnya").attr('checked', true);
                } else {
                    $("#checked_file_skp_2_lainnya").attr('checked',false);
                }
            });
            
        });

        // $('#tanggal_surat_usulan').on('change.datetimepicker', function(e) {
        //     // var input_date = e.data;
        //     var input_date = new Date(document.getElementById("tanggal_surat_usulan").value);
        //     var input_date_day = input_date.getDate();
        //     var input_date_month = input_date.getMonth();
        //     var input_date_year = input_date.getFullYear();
            
        //     var today = new Date();
        //     var today_day = today.getDate();
        //     var today_month = today.getMonth();
        //     var today_year = today.getFullYear();

        //     var calculated_date = 0;

        //     var td = dateFromDay(today_year, input_date_day);
        //     var ip = dateFromDay(input_date_year);
        //     consol.log("haha", td);
        //     calculated_date = td - ip;
            
        //     if(calculated_date >= 365){
        //         document.getElementById("maksimal_satu_tahun").innerHTML = 'gagal';
        //     } else {
        //         document.getElementById("maksimal_satu_tahun").innerHTML = 'lulus';
        //     }
            
            


        // });

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
            var template = '<div class="item_data"><div class="form-group row"><label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan <a style="color: #FF0000;">*</a></label><div class="col-lg-5 col-md-9 col-sm-12"><div class="input-group date"><input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_catatan_' + id +'" name="tanggal_catatan[]" data-toggle="datetimepicker" data-target="#tanggal_catatan_'+ id +'" placeholder="Pilih Tanggal" autocomplete="off"/><div class="input-group-append"><span class="input-group-text"><i class="la la-calendar"></i></span></div></div></div></div><div class="form-group row"><label class="col-form-label col-lg-3 col-sm-12">Catatan <a style="color: #FF0000;">*</a></label><div class="col-lg-9 col-md-9 col-sm-12"><div class="input-group date"><textarea class="form-control" rows="3" id="catatan" name="catatan[]" ></textarea></div></div></div><div class="form-group row"><div class="col-lg-9 col-md-9 col-sm-12"><!-- <button type="button" class="remove_detail btn btn-sm font-weight-bolder btn-light-primar">Hapus</button> --><a style="margin-top: 10px;" class="remove_detail btn btn-sm font-weight-bolder btn-light-danger"><i class="la la-trash-o"></i>Hapus Catatan</a></div></div></div>'
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

        $("#file_surat_usulan").on("change", function() {
    if ($("#file_surat_usulan")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_surat_usulan').val('');
    }
    });

    $("#file_nota_usulan").on("change", function() {
    if ($("#file_nota_usulan")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_nota_usulan').val('');
    }
    });

    $("#file_penetapan_kebutuhan_formasi").on("change", function() {
    if ($("#file_penetapan_kebutuhan_formasi")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_penetapan_kebutuhan_formasi').val('');
    }
    });

    $("#file_ijazah").on("change", function() {
    if ($("#file_ijazah")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_ijazah').val('');
    }
    });

    $("#file_pencantuman_gelar").on("change", function() {
    if ($("#file_pencantuman_gelar")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_pencantuman_gelar').val('');
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

    $("#file_jabatan_lama").on("change", function() {
    if ($("#file_jabatan_lama")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_jabatan_lama').val('');
    }
    });

    $("#file_data_kompetensi").on("change", function() {
    if ($("#file_data_kompetensi")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_data_kompetensi').val('');
    }
    });

    $("#file_sk_pangkat_terakhir").on("change", function() {
    if ($("#file_sk_pangkat_terakhir")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_sk_pangkat_terakhir').val('');
    }
    });

    $("#file_penilaian_skp").on("change", function() {
    if ($("#file_penilaian_skp")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_penilaian_skp').val('');
    }
    });

    $("#file_penilaian_prestasi").on("change", function() {
    if ($("#file_penilaian_prestasi")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_penilaian_prestasi').val('');
    }
    });

    $("#file_skp_2_lainnya").on("change", function() {
    if ($("#file_skp_2_lainnya")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_skp_2_lainnya').val('');
    }
    });

    </script>
    <!-- <script>
        $(function(){
            $('#kt_form').validate({
                errorClass:"error-msg",
                errorElement:"p",
                rules:{
                    tanggal_surat_usulan: ',
                    no_surat_usulan: ',
                    ppk_pejabat_yang_diusulkan: ',
                    jabatan_menandatangani: ',
                    file_surat_usulan: {
                        extenstion: "pdf"
                    },
                    
                    nip: ',
                    nama: ',
                    tempat_lahir: ',
                    tanggal_lahir: ',
                    pendidikan_terakhir: ',
                    instansi_induk: ',
                    instansi_pengusul: ',
                    jumlah: ',
                    terisi: ',
                    sisa: ',
                    file_nota_usulan: {
                        extenstion: "pdf"
                    },
                    file_penetapan_kebutuhan_formasi: {
                        extenstion: "pdf"
                    },
                    file_ijazah: {
                        extenstion: "pdf"
                    },
                    file_pencantuman_gelar: {
                        extenstion: "pdf"
                    },

                    jabatan_lama: ',
                    no_sk_jabatan_lama: ',
                    tmt_jabatan_lama: ',
                    satuan_organisasi_lama: ',
                    file_data_jabatan_lama: {
                        extenstion: "pdf"
                    },

                    jabatan_baru: ',
                    satuan_organisasi_baru: ',

                    jabatan_kompetensi: ',
                    no_sertifikat: ',
                    tanggal_sertifikat: ',
                    file_data_kompetensi: {
                        extenstion: "pdf"
                    },

                    no_sk_pangkat: ',
                    pangkat_gol: ',
                    tmt_gol: ',
                    file_sk_pangkat_terakhir: {
                        extenstion: "pdf"
                    },

                    file_data_pak: {
                        extenstion: "pdf"
                    },
                    file_klarifikasi_pak: {
                        extenstion: "pdf"
                    },

                    file_penilaian_skp: {
                        extenstion: "pdf"
                    },
                    file_penilaian_prestasi: {
                        extenstion: "pdf"
                    },
                    file_skp_2_lainnya: {
                        extenstion: "pdf"
                    },

                    ket: '
                },
                submitHandler:function(form){
                    form.submit();
                }
            })
        })

    </script> -->
    <script src="<?php echo e(asset('js/pages/custom/wizard/wizard-3.js')); ?>"></script>
    <script src="<?php echo e(asset('js/hide.js')); ?>"></script> 
    <script src="<?php echo e(asset('js/pages/crud/file-upload/dropzonejs.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('js/pages/bkn-surat-usulan-pejabat-fku.js')); ?>"></script> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\siapp\resources\views/pages/pic/administrasi/surat_usulan/form/pengangkatan_pejabat_fku.blade.php ENDPATH**/ ?>