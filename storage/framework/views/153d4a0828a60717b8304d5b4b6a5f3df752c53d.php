



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
                            <div class="card-toolbar">
                                <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#tab_baru">Baru</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#tab_proses">Proses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#tab_pending">Pending</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#tab_tolak">Ditolak</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <!--begin::Body-->
                            <div class="card-body pt-2 pb-0 mt-n3">
                                <div class="tab-content mt-5" id="myTabTables11">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="tab_baru" role="tabpanel" aria-labelledby="tab_baru">
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
                                                        <th>Tanggal Agenda</th>
                                                        <th>No Surat</th>
                                                        <th>Instansi Pengusul</th>
                                                        <th>Jenis Usulan</th>
                                                        <th>NIP</th>
                                                        <th>Nama</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $pengangkatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengangkatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <!-- <td><?php echo e(Helper::convertDate($pengangkatan->created_at)); ?></td>
                                                            <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($pengangkatan->jenis_layanan)); ?></div></td>
                                                            <td><?php echo e(Helper::defineStatusBy($pengangkatan->status)); ?></td> -->
                                                            <td><?php echo e(Helper::converttanggal($pengangkatan->tanggal_surat_usulan)); ?></td>
                                                            <td><?php echo e($pengangkatan->no_surat_usulan); ?></td>
                                                            <td><?php echo e($pengangkatan->instansi_pengusul); ?></td>
                                                            <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($pengangkatan->jenis_layanan)); ?></div></td>
                                                            <td><div style="color: #3699FF;"><?php echo e($pengangkatan->nip); ?></div></td>
                                                            <td><?php echo e($pengangkatan->nama); ?></td>
                                                            <td>
                                                                <a href="<?php echo e(route('koor-pokja.inbox.jfku.verif', ['id' => $pengangkatan->id])); ?>"><i class="fa fa-pencil-alt text-success mr-2"></i></a>
                                                                <a href="<?php echo e(route('koor-pokja.inbox.distributor.index', ['id' => $pengangkatan->id, 'jenis_layanan' => $pengangkatan->jenis_layanan])); ?>"><i class="fa fa-share text-info mr-1"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="tab_proses" role="tabpanel" aria-labelledby="tab_proses">
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
                                        <table class="datatable cell-border" id="tb_proses">
                                            <thead>
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th>Tanggal Agenda</th>
                                                    <th>No Surat</th>
                                                    <th>Instansi Pengusul</th>
                                                    <th>Jenis Usulan</th>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $jfku_verifikasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengangkatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e(Helper::converttanggal($pengangkatan->tanggal_surat_usulan)); ?></td>
                                                        <td><?php echo e($pengangkatan->no_surat_usulan); ?></td>
                                                        <td><?php echo e($pengangkatan->instansi_pengusul); ?></td>
                                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($pengangkatan->jenis_layanan)); ?></div></td>
                                                        <td><div style="color: #3699FF;"><?php echo e($pengangkatan->nip); ?></div></td>
                                                        <td><?php echo e($pengangkatan->nama); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                <?php $__currentLoopData = $ns_verifikasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ns): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e(Helper::converttanggal($ns->tanggal_surat_usulan)); ?></td>
                                                        <td><?php echo e($ns->no_surat_usulan); ?></td>
                                                        <td><?php echo e($ns->instansi_pengusul); ?></td>
                                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($ns->jenis_layanan)); ?></div></td>
                                                        <td><div style="color: #3699FF;"><?php echo e($ns->nip); ?></div></td>
                                                        <td><?php echo e($ns->nama); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php $__currentLoopData = $lainnyas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lainnya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e(Helper::converttanggal($lainnya->tanggal_surat_usulan)); ?></td>
                                                        <td><?php echo e($lainnya->no_surat_usulan); ?></td>
                                                        <td><?php echo e($lainnya->instansi_pengusul); ?></td>
                                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($lainnya->jenis_layanan)); ?></div></td>
                                                        <td><div style="color: #3699FF;"><?php echo e($lainnya->nip); ?></div></td>
                                                        <td><?php echo e($lainnya->nama); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="tab_pending" role="tabpanel" aria-labelledby="tab_pending">
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
                                        <table class="datatable cell-border" id="tb_pending">
                                            <thead>
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th>Tanggal Agenda</th>
                                                    <th>No Surat</th>
                                                    <th>Instansi Pengusul</th>
                                                    <th>Jenis Usulan</th>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $jfku_pendings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jfku_pending): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e(Helper::converttanggal($jfku_pending->tanggal_surat_usulan)); ?></td>
                                                        <td><?php echo e($jfku_pending->no_surat_usulan); ?></td>
                                                        <td><?php echo e($jfku_pending->instansi_pengusul); ?></td>
                                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($jfku_pending->jenis_layanan)); ?></div></td>
                                                        <td><div style="color: #3699FF;"><?php echo e($jfku_pending->nip); ?></div></td>
                                                        <td><?php echo e($jfku_pending->nama); ?></td>
                                                        <td>
                                                            <a href="<?php echo e(route('koor-pokja.inbox.detail-surat-pengembalian.index', ['id' => $jfku_pending->id])); ?>" type="button" class="btn btn-warning btn-sm">
                                                                Lihat
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php $__currentLoopData = $ns_verifikasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ns_verifikasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e(Helper::converttanggal($ns_verifikasi->tanggal_surat_usulan)); ?></td>
                                                        <td><?php echo e($ns_verifikasi->no_surat_usulan); ?></td>
                                                        <td><?php echo e($ns_verifikasi->instansi_pengusul); ?></td>
                                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($ns_verifikasi->jenis_layanan)); ?></div></td>
                                                        <td><div style="color: #3699FF;"><?php echo e($ns_verifikasi->nip); ?></div></td>
                                                        <td><?php echo e($ns_verifikasi->nama); ?></td>
                                                        <td>
                                                            <a href="<?php echo e(route('koor-pokja.inbox.detail-surat-pengembalian.index', ['id' => $ns_verifikasi->id])); ?>" type="button" class="btn btn-warning btn-sm">
                                                                Lihat
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php $__currentLoopData = $lainnya_verifikasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lainnya_verifikasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e(Helper::converttanggal($lainnya_verifikasi->tanggal_surat_usulan)); ?></td>
                                                        <td><?php echo e($lainnya_verifikasi->no_surat_usulan); ?></td>
                                                        <td><?php echo e($lainnya_verifikasi->instansi_pengusul); ?></td>
                                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($lainnya_verifikasi->jenis_layanan)); ?></div></td>
                                                        <td><div style="color: #3699FF;"><?php echo e($lainnya_verifikasi->nip); ?></div></td>
                                                        <td><?php echo e($lainnya_verifikasi->nama); ?></td>
                                                        <td>
                                                            <a href="<?php echo e(route('koor-pokja.inbox.detail-surat-pengembalian.index', ['id' => $lainnya_verifikasi->id])); ?>" type="button" class="btn btn-warning btn-sm">
                                                                Lihat
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="tab_tolak" role="tabpanel" aria-labelledby="tab_tolak">
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
                                        <table class="datatable cell-border" id="tb_tolak">
                                            <thead>
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th>Tanggal Agenda</th>
                                                    <th>No Surat</th>
                                                    <th>Instansi Pengusul</th>
                                                    <th>Jenis Usulan</th>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $jfku_tolaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jfku_tolak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e(Helper::converttanggal($jfku_tolak->tanggal_surat_usulan)); ?></td>
                                                        <td><?php echo e($jfku_tolak->no_surat_usulan); ?></td>
                                                        <td><?php echo e($jfku_tolak->instansi_pengusul); ?></td>
                                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($jfku_tolak->jenis_layanan)); ?></div></td>
                                                        <td><div style="color: #3699FF;"><?php echo e($jfku_tolak->nip); ?></div></td>
                                                        <td><?php echo e($jfku_tolak->nama); ?></td>
                                                        <td>
                                                            <a href="<?php echo e(route('koor-pokja.inbox.detail-surat-pengembalian-tolak.index', ['id' => $jfku_tolak->id])); ?>" type="button" class="btn btn-light-danger btn-sm">
                                                                Tolak
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php $__currentLoopData = $ns_tolaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ns_tolak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e(Helper::converttanggal($ns_tolak->tanggal_surat_usulan)); ?></td>
                                                        <td><?php echo e($ns_tolak->no_surat_usulan); ?></td>
                                                        <td><?php echo e($ns_tolak->instansi_pengusul); ?></td>
                                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($ns_tolak->jenis_layanan)); ?></div></td>
                                                        <td><div style="color: #3699FF;"><?php echo e($ns_tolak->nip); ?></div></td>
                                                        <td><?php echo e($ns_tolak->nama); ?></td>
                                                        <td>
                                                            <a href="<?php echo e(route('koor-pokja.inbox.detail-surat-pengembalian-tolak.index', ['id' => $ns_tolak->id])); ?>" type="button" class="btn btn-light-danger btn-sm">
                                                                Tolak
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php $__currentLoopData = $lainnya_tolaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lainnya_tolak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e(Helper::converttanggal($lainnya_tolak->tanggal_surat_usulan)); ?></td>
                                                        <td><?php echo e($lainnya_tolak->no_surat_usulan); ?></td>
                                                        <td><?php echo e($lainnya_tolak->instansi_pengusul); ?></td>
                                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($lainnya_tolak->jenis_layanan)); ?></div></td>
                                                        <td><div style="color: #3699FF;"><?php echo e($lainnya_tolak->nip); ?></div></td>
                                                        <td><?php echo e($lainnya_tolak->nama); ?></td>
                                                        <td>
                                                            <a href="<?php echo e(route('koor-pokja.inbox.detail-surat-pengembalian-tolak.index', ['id' => $lainnya_tolak->id])); ?>" type="button" class="btn btn-light-danger btn-sm">
                                                                Tolak
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>                                    
                                    <!--end::Tap pane-->
                                </div>
                            </div>
                            <!--end: Body-->   
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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\siapp\resources\views/pages/koor_pokja/inbox/jfku.blade.php ENDPATH**/ ?>