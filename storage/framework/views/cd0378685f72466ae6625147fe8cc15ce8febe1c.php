



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
                                <h3 class="card-label">Surat Usulan
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

                                        <th>Surat Usulan</th>
                                        <th>Atas Nama</th>
                                        <th>NIP</th>
                                        <th>Tanggal Proses</th>
                                        <th>Batas Tanggal Revisi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $pengangkatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengangkatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <!-- <td><?php echo e(Helper::convertDate($pengangkatan->created_at)); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($pengangkatan->jenis_layanan)); ?></div></td>
                                        <td><?php echo e(Helper::defineStatusBy($pengangkatan->status)); ?></td> -->

                                        <td><?php echo e(Helper::defineJenisLayananBy($pengangkatan->jenis_layanan)); ?></td>
                                        <td><?php echo e($pengangkatan->nama); ?></td>
                                        <td><?php echo e($pengangkatan->nip); ?></td>
                                        <td><div class="text-success"><?php echo e(Helper::convertDate($pengangkatan->created_at)); ?></div></td>
                                        <td><span class="text-danger"><?php echo e($countDateJFKU); ?></span></td>
										<td>
											<a href="<?php echo e(route('koor-pokja.inbox.jfku.verif', ['id' => $pengangkatan->id])); ?>" type="button" class="btn btn-primary btn-xs">
												Detail
											</a>
										</td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = $pengangkatans_ns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $struktural): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <!-- <td><?php echo e(Helper::convertDate($struktural->created_at)); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($struktural->jenis_layanan)); ?></div></td>
                                        <td><?php echo e(Helper::defineStatusBy($struktural->status)); ?></td> -->

										<td><?php echo e(Helper::defineJenisLayananBy($struktural->jenis_layanan)); ?></td>
                                        <td><?php echo e($struktural->nama); ?></td>
                                        <td><?php echo e($struktural->nip); ?></td>
                                        <td><div class="text-success"><?php echo e(Helper::convertDate($struktural->created_at)); ?></div></td>
                                        <td><span class="text-danger"><?php echo e($countDateNS); ?></span></td>
                                        <td>
											<a href="<?php echo e(route('koor-pokja.inbox.ns.verif', ['id' => $struktural->id])); ?>" type="button" class="btn btn-primary btn-xs">
												Detail
											</a>
										</td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                                <?php $__currentLoopData = $lainnyas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lainnya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <!-- <td><?php echo e(Helper::convertDate($lainnya->created_at)); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($lainnya->jenis_layanan)); ?></div></td>
                                        <td><?php echo e(Helper::defineStatusBy($lainnya->status)); ?></td> -->

										<td><?php echo e(Helper::defineJenisLayananBy($lainnya->jenis_layanan)); ?></td>
                                        <td><?php echo e($lainnya->nama); ?></td>
                                        <td><?php echo e($lainnya->nip); ?></td>
                                        <td><div class="text-success"><?php echo e(Helper::convertDate($lainnya->created_at)); ?></div></td>
                                        <td><span class="text-danger"><?php echo e($countDateLainnya); ?></span></td>
                                        <td>
											<a href="<?php echo e(route('koor-pokja.inbox.lainnya.verif', ['id' => $lainnya->id])); ?>" type="button" class="btn btn-primary btn-xs">
												Detail
											</a>
										</td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = $kenaikans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kenaikan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <!-- <td><?php echo e(Helper::convertDate($kenaikan->created_at)); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($kenaikan->jenis_layanan)); ?></div></td>
                                        <td><?php echo e(Helper::defineStatusBy($kenaikan->status)); ?></td> -->

										<td><?php echo e(Helper::defineJenisLayananBy($kenaikan->jenis_layanan)); ?></td>
                                        <td><?php echo e($kenaikan->nama); ?></td>
                                        <td><?php echo e($kenaikan->nip); ?></td>
                                        <td><div class="text-success"><?php echo e(Helper::convertDate($kenaikan->created_at)); ?></div></td>
                                        <td><span class="text-danger"><?php echo e($countDateKenaikan); ?></span></td>
                                        <td>
											<a href="<?php echo e(route('koor-pokja.inbox.kenaikan_pangkat.verif', ['id' => $kenaikan->id])); ?>" type="button" class="btn btn-primary btn-xs">
												Detail
											</a>
										</td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = $pemberhentians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemberhentian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <!-- <td><?php echo e(Helper::convertDate($pemberhentian->created_at)); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($pemberhentian->jenis_layanan)); ?></div></td>
                                        <td><?php echo e(Helper::defineStatusBy($pemberhentian->status)); ?></td> -->

										<td><?php echo e(Helper::defineJenisLayananBy($pemberhentian->jenis_layanan)); ?></td>
                                        <td><?php echo e($pemberhentian->nama); ?></td> 
                                        <td><?php echo e($pemberhentian->nip); ?></td>
                                        <td><div class="text-success"><?php echo e(Helper::convertDate($pemberhentian->created_at)); ?></div></td>
                                        <td><span class="text-danger"><?php echo e($countDatePemberhentian); ?></span></td>
                                        <td>
											<a href="<?php echo e(route('koor-pokja.inbox.pemberhentian.verif', ['id' => $pemberhentian->id])); ?>" type="button" class="btn btn-primary btn-xs">
												Detail
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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\siapp\resources\views/pages/karo/inbox/surat_usulan.blade.php ENDPATH**/ ?>