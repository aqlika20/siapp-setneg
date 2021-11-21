



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
                                <h3 class="card-label">Alasan Penolakan
                                <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <!--begin: Wizard Body-->
                            <div class="row py-10 px-8 py-lg-12 px-lg-10">
                                <div class="col-xl-20 col-xxl-12">
                                    <!--begin: Wizard Step 1-->
                                    <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Tanggal Proses Penolakan</label>
                                            <div class="col-lg-5 col-md-9 col-sm-12">
                                                <div class="input-group date">
                                                    <input type="text" class="form-control datetimepicker-input my-datepicker" value="<?php echo e($alasans->tanggal_prosess_penolakan); ?>" disabled/>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="la la-calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="col-form-label col-lg-3 col-sm-12">Alasan Penolakan</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <div class="input-group ">
                                                    <textarea class="form-control" rows="3" disabled><?php echo e($alasans->alasan_penolakan); ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Wizard Actions-->
                                </div>
                                <div class="mt-5 pt-10">
                                    <div class="mr-2">
                                        <a href="<?php echo e(route('pic.inbox.index')); ?>"type="button" class="btn btn-light-danger font-weight-bold">Batalkan</a>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Wizard Body-->                     
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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\siapp\resources\views/pages/pic/detail_surat_tolak.blade.php ENDPATH**/ ?>