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
                                <h3 class="card-label">Inbox
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

                                        <th>Tanggal Agenda</th>
                                        <th>No Surat</th>
                                        <th>Instansi Pengusul</th>
                                        <th>Jenis Usulan</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $pengangkatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengangkatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <!-- <td><?php echo e(Helper::convertDate($pengangkatan->created_at)); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($pengangkatan->jenis_layanan)); ?></div></td>
                                        <td><?php echo e(Helper::defineStatusBy($pengangkatan->status)); ?></td> -->

                                        <td><?php echo e($pengangkatan->tanggal_surat_usulan); ?></td>
                                        <td><?php echo e($pengangkatan->no_surat_usulan); ?></td>
                                        <td><?php echo e($pengangkatan->instansi_pengusul); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($pengangkatan->jenis_layanan)); ?></div></td>
                                        <td><div style="color: #3699FF;"><?php echo e($pengangkatan->nip); ?></div></td>
                                        <td><?php echo e($pengangkatan->nama); ?></td>
                                        <td><?php echo e(Helper::defineStatusBy($pengangkatan->status)); ?></td>
                                        <td>
                                            <?php if($pengangkatan->status == Helper::$usulan_dikembalikan): ?>
                                                <a href="<?php echo e(route('pic.inbox.kenaikan_pangkat.verif', ['id' => $pengangkatan->id])); ?>"><i class="fa fa-pencil-alt text-success mr-2"></i></a>
                                                <a href="<?php echo e(route('pic.inbox.detail-surat-pengembalian.index', ['id' => $pengangkatan->id])); ?>"><i class="fa flaticon2-file mr-2" style="color: #338AFF;"></i></a>
                                            <?php endif; ?>
                                            <?php if($pengangkatan->status == Helper::$tolak_jf_ahli || $pengangkatan->status == Helper::$tolak_pokja): ?>
                                                <a href="<?php echo e(route('pic.inbox.detail-alasan-penolakan.index', ['id' => $pengangkatan->id])); ?>"><i class="fa flaticon2-file mr-2" style="color: #338AFF;"></i></a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $pengangkatans_ns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ns): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <!-- <td><?php echo e(Helper::convertDate($ns->created_at)); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($ns->jenis_layanan)); ?></div></td>
                                        <td><?php echo e(Helper::defineStatusBy($ns->status)); ?></td> -->

                                        <td><?php echo e($ns->tanggal_surat_usulan); ?></td>
                                        <td><?php echo e($ns->no_surat_usulan); ?></td>
                                        <td><?php echo e($ns->instansi_pengusul); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($ns->jenis_layanan)); ?></div></td>
                                        <td><div style="color: #3699FF;"><?php echo e($ns->nip); ?></div></td>
                                        <td><?php echo e($ns->nama); ?></td>
                                        <td><?php echo e(Helper::defineStatusBy($ns->status)); ?></td>
                                        <td>
                                            <?php if($ns->status == Helper::$usulan_dikembalikan): ?>
                                                <a href="<?php echo e(route('pic.inbox.kenaikan_pangkat.verif', ['id' => $ns->id])); ?>"><i class="fa fa-pencil-alt text-success mr-2"></i></a>
                                                <a href="<?php echo e(route('pic.inbox.detail-surat-pengembalian.index', ['id' => $ns->id])); ?>"><i class="fa flaticon2-file mr-2" style="color: #338AFF;"></i></a>
                                            <?php endif; ?>
                                            <?php if($ns->status == Helper::$tolak_jf_ahli || $ns->status == Helper::$tolak_pokja): ?>
                                                <a href="<?php echo e(route('pic.inbox.detail-alasan-penolakan.index', ['id' => $ns->id])); ?>"><i class="fa flaticon2-file mr-2" style="color: #338AFF;"></i></a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $lainnyas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lainnya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <!-- <td><?php echo e(Helper::convertDate($lainnya->created_at)); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($lainnya->jenis_layanan)); ?></div></td>
                                        <td><?php echo e(Helper::defineStatusBy($lainnya->status)); ?></td> -->

                                        <td><?php echo e($lainnya->tanggal_surat_usulan); ?></td>
                                        <td><?php echo e($lainnya->no_surat_usulan); ?></td>
                                        <td><?php echo e($lainnya->instansi_pengusul); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($lainnya->jenis_layanan)); ?></div></td>
                                        <td><div style="color: #3699FF;"><?php echo e($lainnya->nip); ?></div></td>
                                        <td><?php echo e($lainnya->nama); ?></td>
                                        <td><?php echo e(Helper::defineStatusBy($lainnya->status)); ?></td>
                                        <td>
                                            <?php if($lainnya->status == Helper::$usulan_dikembalikan): ?>
                                                <a href="<?php echo e(route('pic.inbox.kenaikan_pangkat.verif', ['id' => $lainnya->id])); ?>"><i class="fa fa-pencil-alt text-success mr-2"></i></a>
                                                <a href="<?php echo e(route('pic.inbox.detail-surat-pengembalian.index', ['id' => $lainnya->id])); ?>"><i class="fa flaticon2-file mr-2" style="color: #338AFF;"></i></a>
                                            <?php endif; ?>
                                            <?php if($lainnya->status == Helper::$tolak_jf_ahli || $lainnya->status == Helper::$tolak_pokja): ?>
                                                <a href="<?php echo e(route('pic.inbox.detail-alasan-penolakan.index', ['id' => $lainnya->id])); ?>"><i class="fa flaticon2-file mr-2" style="color: #338AFF;"></i></a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $kenaikans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kenaikan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <!-- <td><?php echo e(Helper::convertDate($kenaikan->created_at)); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($kenaikan->jenis_layanan)); ?></div></td>
                                        <td><?php echo e(Helper::defineStatusBy($kenaikan->status)); ?></td> -->

                                        <td><?php echo e($kenaikan->tanggal_surat_usulan); ?></td>
                                        <td><?php echo e($kenaikan->no_surat_usulan); ?></td>
                                        <td><?php echo e($kenaikan->instansi_pengusul); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($kenaikan->jenis_layanan)); ?></div></td>
                                        <td><div style="color: #3699FF;"><?php echo e($kenaikan->nip); ?></div></td>
                                        <td><?php echo e($kenaikan->nama); ?></td>
                                        <td><?php echo e(Helper::defineStatusBy($kenaikan->status)); ?></td>
                                        <td>
                                            <?php if($kenaikan->status == Helper::$usulan_dikembalikan): ?>
                                                <a href="<?php echo e(route('pic.inbox.kenaikan_pangkat.verif', ['id' => $kenaikan->id])); ?>"><i class="fa fa-pencil-alt text-success mr-2"></i></a>
                                                <a href="<?php echo e(route('pic.inbox.detail-surat-pengembalian.index', ['id' => $kenaikan->id])); ?>"><i class="fa flaticon2-file mr-2" style="color: #338AFF;"></i></a>
                                            <?php endif; ?>
                                            <?php if($kenaikan->status == Helper::$tolak_jf_ahli || $kenaikan->status == Helper::$tolak_pokja): ?>
                                                <a href="<?php echo e(route('pic.inbox.detail-alasan-penolakan.index', ['id' => $kenaikan->id])); ?>"><i class="fa flaticon2-file mr-2" style="color: #338AFF;"></i></a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $pemberhentians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemberhentian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <!-- <td><?php echo e(Helper::convertDate($pemberhentian->created_at)); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($pemberhentian->jenis_layanan)); ?></div></td>
                                        <td><?php echo e(Helper::defineStatusBy($pemberhentian->status)); ?></td> -->

                                        <td><?php echo e($pemberhentian->tanggal_surat_usulan); ?></td>
                                        <td><?php echo e($pemberhentian->no_surat_usulan); ?></td>
                                        <td><?php echo e($pemberhentian->instansi_pengusul); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($pemberhentian->jenis_layanan)); ?></div></td>
                                        <td><div style="color: #3699FF;"><?php echo e($pemberhentian->nip); ?></div></td>
                                        <td><?php echo e($pemberhentian->nama); ?></td>
                                        <td><?php echo e(Helper::defineStatusBy($pemberhentian->status)); ?></td>
                                        <td>
                                            <?php if($pemberhentian->status == Helper::$usulan_dikembalikan): ?>
                                                <a href="<?php echo e(route('pic.inbox.kenaikan_pangkat.verif', ['id' => $pemberhentian->id])); ?>"><i class="fa fa-pencil-alt text-success mr-2"></i></a>
                                                <a href="<?php echo e(route('pic.inbox.detail-surat-pengembalian.index', ['id' => $pemberhentian->id])); ?>"><i class="fa flaticon2-file mr-2" style="color: #338AFF;"></i></a>
                                            <?php endif; ?>
                                            <?php if($pemberhentian->status == Helper::$tolak_jf_ahli || $pemberhentian->status == Helper::$tolak_pokja): ?>
                                                <a href="<?php echo e(route('pic.inbox.detail-alasan-penolakan.index', ['id' => $pemberhentian->id])); ?>"><i class="fa flaticon2-file mr-2" style="color: #338AFF;"></i></a>
                                            <?php endif; ?>
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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/siapp/resources/views/pages/pic/inbox.blade.php ENDPATH**/ ?>