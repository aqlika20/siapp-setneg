



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
                                                            <td><?php echo e($pengangkatan->tanggal_surat_usulan); ?></td>
                                                            <td><?php echo e($pengangkatan->no_surat_usulan); ?></td>
                                                            <td><?php echo e($pengangkatan->instansi_pengusul); ?></td>
                                                            <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($pengangkatan->jenis_layanan)); ?></div></td>
                                                            <td><div style="color: #3699FF;"><?php echo e($pengangkatan->nip); ?></div></td>
                                                            <td><?php echo e($pengangkatan->nama); ?></td>
                                                            <td>
                                                                <a href="<?php echo e(route('jf-ahli.inbox.usulan.verif', ['id' => $pengangkatan->id])); ?>" type="button" class="btn btn-success font-weight-bold align-items-md-end">Verifikasi</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    <?php $__currentLoopData = $pengangkatans_ns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengangkatan_ns): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <!-- <td><?php echo e(Helper::convertDate($pengangkatan_ns->created_at)); ?></td>
                                                            <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($pengangkatan_ns->jenis_layanan)); ?></div></td>
                                                            <td><?php echo e(Helper::defineStatusBy($pengangkatan_ns->status)); ?></td> -->
                                                            <td><?php echo e($pengangkatan_ns->tanggal_surat_usulan); ?></td>
                                                            <td><?php echo e($pengangkatan_ns->no_surat_usulan); ?></td>
                                                            <td><?php echo e($pengangkatan_ns->instansi_pengusul); ?></td>
                                                            <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($pengangkatan_ns->jenis_layanan)); ?></div></td>
                                                            <td><div style="color: #3699FF;"><?php echo e($pengangkatan_ns->nip); ?></div></td>
                                                            <td><?php echo e($pengangkatan_ns->nama); ?></td>
                                                            <td>
                                                                <a href="<?php echo e(route('jf-ahli.inbox.usulan.verif_ns', ['id' => $pengangkatan_ns->id])); ?>" type="button" class="btn btn-success font-weight-bold align-items-md-end">Verifikasi</a>
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
                                                            <td>
                                                                <a href="<?php echo e(route('jf-ahli.inbox.usulan.verif_lainnya', ['id' => $lainnya->id])); ?>" type="button" class="btn btn-success font-weight-bold align-items-md-end">Verifikasi</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    <?php $__currentLoopData = $kenaikans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kenaikan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($kenaikan->tanggal_surat_usulan); ?></td>
                                                            <td><?php echo e($kenaikan->no_surat_usulan); ?></td>
                                                            <td><?php echo e($kenaikan->instansi_pengusul); ?></td>
                                                            <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($kenaikan->jenis_layanan)); ?></div></td>
                                                            <td><div style="color: #3699FF;"><?php echo e($kenaikan->nip); ?></div></td>
                                                            <td><?php echo e($kenaikan->nama); ?></td>
                                                            <td>
                                                                <a href="<?php echo e(route('jf-ahli.inbox.kenaikan_pangkat.verif', ['id' => $kenaikan->id])); ?>" type="button" class="btn btn-success font-weight-bold align-items-md-end">Verifikasi</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    <?php $__currentLoopData = $pemberhentians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemberhentian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($pemberhentian->tanggal_surat_usulan); ?></td>
                                                            <td><?php echo e($pemberhentian->no_surat_usulan); ?></td>
                                                            <td><?php echo e($pemberhentian->instansi_pengusul); ?></td>
                                                            <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($pemberhentian->jenis_layanan)); ?></div></td>
                                                            <td><div style="color: #3699FF;"><?php echo e($pemberhentian->nip); ?></div></td>
                                                            <td><?php echo e($pemberhentian->nama); ?></td>
                                                            <td>
                                                                <a href="<?php echo e(route('jf-ahli.inbox.pemberhentian.verif', ['id' => $pemberhentian->id])); ?>" type="button" class="btn btn-success font-weight-bold align-items-md-end">Verifikasi</a>
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
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $pengangkatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengangkatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($pengangkatan->tanggal_surat_usulan); ?></td>
                                                        <td><?php echo e($pengangkatan->no_surat_usulan); ?></td>
                                                        <td><?php echo e($pengangkatan->instansi_pengusul); ?></td>
                                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($pengangkatan->jenis_layanan)); ?></div></td>
                                                        <td><div style="color: #3699FF;"><?php echo e($pengangkatan->nip); ?></div></td>
                                                        <td><?php echo e($pengangkatan->nama); ?></td>
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
                                                        <td><?php echo e($jfku_pending->tanggal_surat_usulan); ?></td>
                                                        <td><?php echo e($jfku_pending->no_surat_usulan); ?></td>
                                                        <td><?php echo e($jfku_pending->instansi_pengusul); ?></td>
                                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($jfku_pending->jenis_layanan)); ?></div></td>
                                                        <td><div style="color: #3699FF;"><?php echo e($jfku_pending->nip); ?></div></td>
                                                        <td><?php echo e($jfku_pending->nama); ?></td>
                                                        <td>
                                                            <a href="verifikasi_cek.html" type="button" class="btn btn-success font-weight-bold align-items-md-end">
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
                                                        <td><?php echo e($jfku_tolak->tanggal_surat_usulan); ?></td>
                                                        <td><?php echo e($jfku_tolak->no_surat_usulan); ?></td>
                                                        <td><?php echo e($jfku_tolak->instansi_pengusul); ?></td>
                                                        <td><div style="color: #FFA800;"><?php echo e(Helper::defineJenisLayananBy($jfku_tolak->jenis_layanan)); ?></div></td>
                                                        <td><div style="color: #3699FF;"><?php echo e($jfku_tolak->nip); ?></div></td>
                                                        <td><?php echo e($jfku_tolak->nama); ?></td>
                                                        <td><?php echo e($jfku_tolak->jabatan_fungsional); ?></td>
                                                        <td>
                                                            <a href="persetujuan.html" type="button" class="btn btn-light-danger btn-sm">
                                                                Kembalikan
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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ardim\Desktop\siapp\resources\views/pages/jf_ahli/inbox/usulan.blade.php ENDPATH**/ ?>