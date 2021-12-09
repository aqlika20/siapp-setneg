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
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">List RKP 
                            </div>
                            <div class="card-toolbar">
                                <!--begin::Button-->
                                <a type="button" class="btn btn-warning" href="<?php echo e(route('koor-pokja.rkp.home')); ?>">
                                    + Memo RKP
                                </a>
                                <!--end::Button-->
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <!--begin::Table-->
                            <div class="mb-7">
                                <div class="row align-items-center">
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="row align-items-center">
                                            <div class="col-md-4 my-2 my-md-0">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="Search By NIP" id="no_surat" />
                                                    <span>
                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Search Form-->
                            <!--begin: Datatable-->
                            <table class="datatable cell-border" id="tb_baru">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th>No Memo RKP</th>
                                        <th>Pengirim</th>
                                        <th>Penerima</th>
                                        <th>Tanggal Memo RKP</th>
                                        <th>Penandatangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $rkps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rkp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($rkp->no_memo_rkp); ?></td>
                                            <td><?php echo e($rkp->pengirim); ?></td>
                                            <td><?php echo e($rkp->penerima); ?></td>
                                            <td><div style="color: #FFA800;"><?php echo e($rkp->tanggal_memo); ?></div></td>
                                            <td><div style="color: #3699FF;"><?php echo e($rkp->penandatangan); ?></div></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <!--end: Datatable-->
                            <!--end::Table-->
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
    $(function(){
        var education_card = new KTCard('education_card');
    })
</script>
<script src="<?php echo e(asset('js/pages/custom/wizard/wizard-2.js')); ?>"></script>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/siapp/resources/views/pages/koor_pokja/list_rkp.blade.php ENDPATH**/ ?>