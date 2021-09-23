



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
                                <h3 class="card-label">Daftar Pemberhentian
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin: Search Form-->
                            <!--begin::Search Form-->
                            <div class="mb-7">
                                <div class="row align-items-center">
                                    <div class="col-lg col-xl-6">
                                        <div class="row align-items-center">
                                            <div class="col-md-9 my-2 my-md-0">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="Cari..." id="kt_datatable_search_query" />
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
                            <!--end: Search Form-->
                            <!--begin: Datatable-->
                            <table class="datatable cell-border" id="jabatan_fungsional">
                                <thead>
                                    <tr>
                                        <th><b>Tanggal Agenda</b></th>
                                        <th><b>No Surat</b></th>
                                        <th><b>Instansi Pengusul</b></th>
                                        <th><b>Jenis Usulan</b></th>
                                        <th><b>NIP</b></th>
                                        <th><b>Nama</b></th>
                                        <th><b>Jabatan</b></th>
                                        <th><b>Aksi</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $pengangkatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengangkatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($pengangkatan->tanggal_surat_usulan); ?></td>
                                        <td><?php echo e($pengangkatan->no_surat_usulan); ?></td>
                                        <td><?php echo e($pengangkatan->instansi); ?></td>
                                        <td><?php echo e($pengangkatan->jenis_usulan); ?></td>
                                        <td><?php echo e($pengangkatan->nip); ?></td>
                                        <td><?php echo e($pengangkatan->nama); ?></td>
                                        <td><?php echo e($pengangkatan->jabatan); ?></td>
                                        <td>Coming Soon..</td>
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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\siapp\resources\views/pages/super_admin/inbox.blade.php ENDPATH**/ ?>