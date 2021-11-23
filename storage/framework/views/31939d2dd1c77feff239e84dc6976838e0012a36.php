



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

                                                                        <div class="pb-6" data-wizard-type="step-content">
                                                                            <?php if($verifikasi_ns->jenis_layanan == '6' || $verifikasi_ns->jenis_layanan == '7'): ?>
                                                                            <h4 class="mb-10 font-weight-bold text-dark">Data Surat</h4>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Surat Pengantar</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <input type="text" class="form-control" value="<?php echo e($verifikasi_ns->tanggal_surat_pengantar); ?>"  disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">No. Surat Pengantar</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <input type="text" class="form-control" value="<?php echo e($verifikasi_ns->no_surat_pengantar); ?>"  disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Upload Surat Pengantar</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <a style="color: blue;">file.pdf</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">LNS yang diisi</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <input type="text" class="form-control" value="<?php echo e($verifikasi_ns->lns); ?>"  disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Unsur</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <?php if($verifikasi_ns->unsur == '1'): ?>
                                                                                        <input type="text" class="form-control" value="Pemerintah" disabled />
                                                                                        <?php endif; ?>
                                                                                        <?php if($verifikasi_ns->unsur == '2'): ?>
                                                                                        <input type="text" class="form-control" value="Non Pemerintah" disabled />
                                                                                        <?php endif; ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">NIP</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <input type="text" class="form-control" value="<?php echo e($verifikasi_ns->nip); ?>"  disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Nama</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <input type="text" class="form-control" value="<?php echo e($verifikasi_ns->nama); ?>"  disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Keppres</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <input type="text" class="form-control" value="<?php echo e($verifikasi_ns->tanggal_keppres); ?>"  disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Instansi</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <input type="text" class="form-control" value="<?php echo e($verifikasi_ns->instansi); ?>"  disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <?php if($verifikasi_ns->jenis_layanan == '6'): ?>
                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Jabatan yang akan di angkat</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <?php if($verifikasi_ns->unsur == '1'): ?>
                                                                                        <input type="text" class="form-control" value="Jendral" disabled />
                                                                                        <?php endif; ?>
                                                                                        <?php if($verifikasi_ns->unsur == '2'): ?>
                                                                                        <input type="text" class="form-control" value="Kolonel" disabled />
                                                                                        <?php endif; ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <?php endif; ?>

                                                                            <?php if($verifikasi_ns->jenis_layanan == '7'): ?>
                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Jabatan yang akan di berhentikan</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <?php if($verifikasi_ns->unsur == '1'): ?>
                                                                                        <input type="text" class="form-control" value="Jendral" disabled />
                                                                                        <?php endif; ?>
                                                                                        <?php if($verifikasi_ns->unsur == '2'): ?>
                                                                                        <input type="text" class="form-control" value="Kolonel" disabled />
                                                                                        <?php endif; ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <?php endif; ?>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Upload DRH</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <a style="color: blue;">file.pdf</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Upload Dokumen Lainnya</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <a style="color: blue;">file.pdf</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <?php endif; ?>

                                                                            <?php if($verifikasi_ns->jenis_layanan == '8' || $verifikasi_ns->jenis_layanan == '9'): ?>
                                                                            <h4 class="mb-10 font-weight-bold text-dark">Keppres</h4>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">No. Keppres</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <input type="text" class="form-control" value="<?php echo e($verifikasi_ns->no_keppres); ?>"  disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Keppres</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <input type="text" class="form-control" value="<?php echo e($verifikasi_ns->tanggal_keppres); ?>"  disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Masa Jabatan</label>
                                                                                <div class="col-lg-4 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" name="req_masa_jabatan_start" data-toggle="datetimepicker" data-target="#req_masa_jabatan_start" placeholder="Select Date First" id="req_masa_jabatan_start" value="<?php echo e($verifikasi_ns->masa_jabatan_start); ?>" disabled/>
                                                                                        <div class="input-group-append">
                                                                                            <span class="input-group-text">
                                                                                                <i class="la la-calendar"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <label class="col-form-label">s/d.</label>
                                                                                </div>
                                                                                <div class="col-lg-4 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" name="req_masa_jabatan_end" data-toggle="datetimepicker" data-target="#req_masa_jabatan_end" placeholder="Select Date Last" id="req_masa_jabatan_end" value="<?php echo e($verifikasi_ns->masa_jabatan_end); ?>" disabled/>
                                                                                        <div class="input-group-append">
                                                                                            <span class="input-group-text">
                                                                                                <i class="la la-calendar"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">TMT</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <input type="text" class="form-control" value="<?php echo e($verifikasi_ns->tmt); ?>"  disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Hak Keuangan dan Fasilitas</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <input type="text" class="form-control" value="<?php echo e($verifikasi_ns->hak_keuangan); ?>"  disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Yang Melantik</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <input type="text" class="form-control" value="<?php echo e($verifikasi_ns->yang_melantik); ?>"  disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Upload BA Pelantikan</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <a style="color: blue;">file.pdf</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Upload Sumpah Jabatan</label>
                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                    <div class="input-group date">
                                                                                        <a style="color: blue;">file.pdf</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <?php endif; ?>

                                                                        </div>
                                                                      
                                                                        <div class="d-flex justify-content-between mt-5 pt-10">
                                                                            <div class="mr-2">
                                                                                <a href="custom/pages/persetujuan.html" type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4">Kembali</a>
                                                                            </div>
                                                                            <div>
                                                                                <table>
                                                                                    <th style="margin-right: 10px;">
                                                                                        <form method="POST" action="<?php echo e(route('koor-pokja.inbox.jfku.store_tolak', ['id' => $verifikasi_ns->id])); ?>">
                                                                                            <?php echo csrf_field(); ?> 
                                                                                            <input type="hidden" class="btn btn-danger font-weight-bolder text-uppercase px-9 py-4" name="tolak" value="3">
                                                                                            <!-- <a type="submit" class="btn btn-danger font-weight-bolder text-uppercase px-9 py-4" style="margin-right: 10px;">Tolak</a> -->
                                                                                            <button type="submit" class="btn btn-danger font-weight-bolder text-uppercase px-9 py-4" >
                                                                                                Tolak
                                                                                            </button>
                                                                                        </form>
                                                                                    </th>
                                                                                    <th style="margin-right: 10px;">
                                                                                        <form method="POST" action="<?php echo e(route('koor-pokja.inbox.jfku.store_proses', ['id' => $verifikasi_ns->id])); ?>">
                                                                                            <?php echo csrf_field(); ?> 
                                                                                            <input type="hidden" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" name="proses" value="1">
                                                                                            <!-- <a type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" style="margin-right: 10px;">Proses</a> -->
                                                                                            <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" >
                                                                                                Proses
                                                                                            </button>
                                                                                        </form>
                                                                                    </th>
                                                                                    <th style="margin-right: 10px;">
                                                                                        <form method="POST" action="<?php echo e(route('koor-pokja.inbox.jfku.store_pending', ['id' => $verifikasi_ns->id])); ?>">
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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ardim\Desktop\siapp\resources\views/pages/koor_pokja/inbox/verif_ns.blade.php ENDPATH**/ ?>