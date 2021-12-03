



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
                                <h3 class="card-label">Rancangan Keppres
                            </div>
                        </div>
                        <div class="card-body">
                             <!--begin::Search Form-->
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
                            <table class="datatable cell-border" id="tb_administrasi">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <!-- <th>Tanggal Mengajukan</th>
                                        <th>Jenis Usulan</th>
                                        <th>Status</th> -->

                                        <th>Pengirim</th>
                                        <th>Penandatangan</th>
                                        <th>Penerima</th>
                                        <th>No Memo RKP</th>
                                        <th>Tanggal Memo</th>
                                        <th>Perihal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $rkps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rkp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <!-- <td><?php echo e(Helper::convertDate($rkp->created_at)); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($rkp->jenis_layanan)); ?></div></td>
                                        <td><?php echo e(Helper::defineStatusBy($rkp->status)); ?></td> -->

                                        <td><?php echo e($rkp->pengirim); ?></td>
                                        <td><?php echo e($rkp->penandatangan); ?></td>
                                        <td><?php echo e($rkp->penerima); ?></td>
                                        <td><?php echo e($rkp->no_memo_rkp); ?></td>
                                        <td><?php echo e($rkp->tanggal_memo); ?></td>
                                        <td><?php echo e($rkp->hal); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('dukmin.inbox.keppres-turun', ['id' => $rkp->id])); ?>" type="button" class="btn btn-success btn-xs">
											    Keppres Maju
											</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <!--end: Datatable-->
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
<script src="<?php echo e(asset('js/pages/custom/wizard/wizard-2.js')); ?>"></script>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\siapp\resources\views/pages/dukmin/inbox/pertek_bkn.blade.php ENDPATH**/ ?>