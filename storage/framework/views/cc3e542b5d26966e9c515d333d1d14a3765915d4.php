



<?php $__env->startSection('content'); ?>

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">			
            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Dashboard-->
                    <!--begin card-->
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0" style="background-color: #FFA800;">
                            <div class="card-title">
                                <h3 class="card-label">Keppres Maju
                                <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                <div class="col-xl-20 col-xxl-12">
                                    <!--begin: Wizard Form-->
                                    <form method="POST" action="<?php echo e(route('tu-menteri.inbox.keppres-store')); ?>">
                                    <?php echo csrf_field(); ?> 
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-6">
                                            <!--begin::Input-->
                                            <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id_rkp" value="<?php echo e($rkps->id); ?>">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">No Memo RKP</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" value="<?php echo e($rkps->no_memo_rkp); ?>" disabled/>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Perihal</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" value="<?php echo e($rkps->hal); ?>" disabled/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Tanggal Keppres Maju</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_keppres_maju" name="tanggal_keppres_maju" data-toggle="datetimepicker" data-target="#tanggal_keppres_maju" placeholder="Pilih Tanggal" value="<?php echo e(old('tanggal_keppres_maju')); ?>" autocomplete="off" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-5 pt-10">
                                            <div class="mr-2">
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4">Approve</button>
                                            </div>
                                        </div>
                                        <!--end: Wizard Actions-->
                                    </form>
                                    <!--end: Wizard Form-->
                                </div>
                            </div>
                            <!--end: Wizard Body-->
                        </div>
                    </div>
                    <!--end card-->
                    <!--begin::Row-->
                    
                    <!--end::Row-->
                    <!--end::Dashboard-->
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
<script>
     $('.my-datepicker').datetimepicker({
        useCurrent:false,
        format: 'DD-MMM-YYYY'
    })

    $('.my-datepicker').keydown(function(e){
        e.preventDefault();
    })

</script>
<script src="<?php echo e(asset('js/pages/custom/wizard/wizard-2.js')); ?>"></script>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\siapp\resources\views/pages/tu_kementerian/inbox/keppres_maju.blade.php ENDPATH**/ ?>