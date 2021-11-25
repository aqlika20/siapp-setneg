



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
                                <h3 class="card-label">Pertek
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
                                        <th>Nomor Surat</th>
                                        <th>Atas Nama</th>
                                        <th>NIP</th>
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

                                        <td><?php echo e(Helper::defineJenisLayananBy($pengangkatan->jenis_layanan)); ?></td>
                                        <td><?php echo e($pengangkatan->no_surat_usulan); ?></td>
                                        <td><?php echo e($pengangkatan->nama); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e($pengangkatan->nip); ?></div></td>
                                        <td><div style="text-align: center;"><span class="label label-lg label-light-success label-inline"><?php echo e(Helper::definePertek($pengangkatan->nip)); ?></span></div></td>
										<td>
											<a href="<?php echo e(route('koor-pokja.pertek.jfku.verif', ['id' => $pengangkatan->id])); ?>" type="button" class="btn btn-light-warning btn-xs">
												Detail
											</a>
											<a href="<?php echo e(route('koor-pokja.inbox.distributor.index', ['id' => $pengangkatan->id, 'jenis_layanan' => $pengangkatan->jenis_layanan])); ?>" type="button" class="btn btn-success btn-xs">
												Distribusi
											</a>
										</td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = $strukturals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $struktural): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <!-- <td><?php echo e(Helper::convertDate($struktural->created_at)); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($struktural->jenis_layanan)); ?></div></td>
                                        <td><?php echo e(Helper::defineStatusBy($struktural->status)); ?></td> -->

										<td><?php echo e(Helper::defineJenisLayananBy($struktural->jenis_layanan)); ?></td>
                                        <td><?php echo e($struktural->no_surat_usulan); ?></td>
                                        <td><?php echo e($struktural->nama); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e($struktural->nip); ?></div></td>
                                        <td><div style="text-align: center;"><span class="label label-lg label-light-success label-inline"><?php echo e(Helper::definePertek($struktural->nip)); ?></span></div></td>
										<td>
											<a href="<?php echo e(route('koor-pokja.pertek.ns.verif', ['id' => $struktural->id])); ?>" type="button" class="btn btn-light-warning btn-xs">
												Detail
											</a>
											<a href="<?php echo e(route('koor-pokja.inbox.distributor.index', ['id' => $struktural->id, 'jenis_layanan' => $struktural->jenis_layanan])); ?>" type="button" class="btn btn-success btn-xs">
												Distribusi
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
                                        <td><?php echo e($lainnya->no_surat_usulan); ?></td>
                                        <td><?php echo e($lainnya->nama); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e($lainnya->nip); ?></div></td>
                                        <td><div style="text-align: center;"><span class="label label-lg label-light-success label-inline"><?php echo e(Helper::definePertek($lainnya->nip)); ?></span></div></td>
                                        <td>
											<a href="<?php echo e(route('koor-pokja.pertek.lainnya.verif', ['id' => $lainnya->id])); ?>" type="button" class="btn btn-light-warning btn-xs">
												Detail
											</a>
											<a href="<?php echo e(route('koor-pokja.inbox.distributor.index', ['id' => $lainnya->id, 'jenis_layanan' => $lainnya->jenis_layanan])); ?>" type="button" class="btn btn-success btn-xs">
												Distribusi
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
                                        <td><?php echo e($kenaikan->no_surat_usulan); ?></td>
                                        <td><?php echo e($kenaikan->nama); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e($kenaikan->nip); ?></div></td>
                                        <td><div style="text-align: center;"><span class="label label-lg label-light-success label-inline"><?php echo e(Helper::definePertek($kenaikan->nip)); ?></span></div></td>
										<td>
											<a href="<?php echo e(route('koor-pokja.pertek.kenaikan_pangkat.verif', ['id' => $kenaikan->id])); ?>" type="button" class="btn btn-light-warning btn-xs">
												Detail
											</a>
											<a href="<?php echo e(route('koor-pokja.inbox.distributor.index', ['id' => $kenaikan->id, 'jenis_layanan' => $kenaikan->jenis_layanan])); ?>" type="button" class="btn btn-success btn-xs">
												Distribusi
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
                                        <td><?php echo e($pemberhentian->no_surat_usulan); ?></td>
                                        <td><?php echo e($pemberhentian->nama); ?></td>
                                        <td><div style="color: #FFA800;"><?php echo e($pemberhentian->nip); ?></div></td>
                                        <td><div style="text-align: center;"><span class="label label-lg label-light-success label-inline"><?php echo e(Helper::definePertek($pemberhentian->nip)); ?></span></div></td>
                                        <td>
											<a href="<?php echo e(route('koor-pokja.pertek.pemberhentian.verif', ['id' => $pemberhentian->id])); ?>" type="button" class="btn btn-light-warning btn-xs">
												Detail
											</a>	
											<a href="<?php echo e(route('koor-pokja.inbox.distributor.index', ['id' => $pemberhentian->id, 'jenis_layanan' => $pemberhentian->jenis_layanan])); ?>" type="button" class="btn btn-success btn-xs">
												Distribusi
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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\siapp\resources\views/pages/koor_pokja/pertek.blade.php ENDPATH**/ ?>