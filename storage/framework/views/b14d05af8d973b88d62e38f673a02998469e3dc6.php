



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
                            <h3 class="card-label">Verifikasi JFKU <?php echo e(Helper::defineJenisLayananBy($verifikasi->jenis_layanan)); ?>

                            <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <!--begin: Wizard-->
                                <!--begin: Wizard-->
                            <div  id="kt_wizard_v3" data-wizard-state="step-first" data-wizard-clickable="true">

                                <!--begin: Wizard Body-->
                                <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                    <div class="col-xl-20 col-xxl-12">
                                        <!--begin: Wizard Form-->
                                            <!--begin: Wizard Step 1-->
                                            <?php if($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '2' || $verifikasi->jenis_layanan == '3'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" >
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Usulan</h4>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat usulan</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_surat_usulan); ?>" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!-- <p id="maksimal_satu_tahun">ssss</p> -->
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">No. Surat Usulan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_surat_usulan); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">PPK Pejabat yang Diusulkan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->ppk_pejabat_yang_diusulkan); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan Yang Menandatangani</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->pejabat_menandatangani); ?>" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Surat Usulan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_surat_usulan == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_surat_usulans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_surat_usulan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_surat_usulan_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="file_surat_usulan_modal">
                                                <div class="modal-dialog" >
                                                    <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_surat_usulan"></h4>
                                                        </div>
                                                        <p id="file_surat_usulan"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <!--end: Wizard Step 1-->
                                            <!--begin: Wizard Step 2-->
                                            <?php if($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '2' || $verifikasi->jenis_layanan == '3'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data ASN</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">NIP</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->nip); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nama dan Gelar</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->nama); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tempat Lahir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tempat_lahir); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal lahir</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_lahir); ?>" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Pendidikan Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->pendidikan_terakhir); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Instansi Induk</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->instansi_induk); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Instansi Pengusul</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->instansi_pengusul); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jumlah</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jumlah); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Terisi</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->terisi); ?>" id="kt_datepicker_10_modal" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Sisa</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->sisa); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload Nota Usulan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_nota_usulan == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_nota_usulans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_nota_usulan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_nota_usulan_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_nota_usulan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_nota_usulan"></h4>
                                                            </div>
                                                            <p id="file_nota_usulan"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                            <?php endif; ?>
                                            <?php if($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '3'): ?>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload Penetapan kebutuhan formasi dari KemenPANRB</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_penetapan_kebutuhan_formasi == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_penetapan_kebutuhan_formasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_penetapan_kebutuhan_formasi" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_penetapan_kebutuhan_formasi_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_penetapan_kebutuhan_formasi_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_penetapan_kebutuhan_formasi"></h4>
                                                            </div>
                                                            <p id="file_penetapan_kebutuhan_formasi"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload Ijazah terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_ijazah == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_ijazahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_ijazah" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_ijazah_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_ijazah_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_ijazah"></h4>
                                                            </div>
                                                            <p id="file_ijazah"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload Pencantuman Gelar Akademik (GPA)</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_pencantuman_gelar == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_pencantuman_gelars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_pencantuman_gelar" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_pencantuman_gelar_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_pencantuman_gelar_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_pencantuman_gelar"></h4>
                                                            </div>
                                                            <p id="file_pencantuman_gelar"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                            <?php endif; ?>
                                            <?php if($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '2' || $verifikasi->jenis_layanan == '3'): ?>
                                            </div>
                                            <!--end: Wizard Step 2-->
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '2'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Fungsional</h4>
                                                <!--begin::Select-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jabatan_fungsional); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nomor Keppres Pengangkatan <br><a style="color:grey; font-size:12px;">(Contoh: 1/M Tahun 2021)</a></label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_keppress_jabatan_fungsional); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Keppres Pengangkatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_keppres_pengangkatan == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_keppres_pengangkatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_keppres_pengangkatan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_keppres_pengangkatan_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_keppres_pengangkatan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_keppres_pengangkatan"></h4>
                                                            </div>
                                                            <p id="file_keppres_pengangkatan"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">BA Pengambilan Sumpah/Pelantikan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_ba_pengambilan_sumpah_pelantikan_fungsional == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_ba_pengambilan_sumpah_pelantikan_fungsionals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_ba_pengambilan_sumpah_pelantikan_fungsional" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_ba_pengambilan_sumpah_pelantikan_fungsional_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_ba_pengambilan_sumpah_pelantikan_fungsional_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_ba_pengambilan_sumpah_pelantikan_fungsional"></h4>
                                                            </div>
                                                            <p id="file_ba_pengambilan_sumpah_pelantikan_fungsional"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tmt_jabatan_fungsional); ?>" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Satuan Organisasi</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->satuan_organisasi_fungsional); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>  

                                            <?php if($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '3'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Lama</h4>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jabatan_lama); ?>" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">No. SK Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_sk_jabatan_lama); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT Jabatan</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tmt_jabatan_lama); ?>" id="kt_datepicker_9_modal" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Satuan Organisasi Lama</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->satuan_organisasi_lama); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload SK Jabatan sebelumnya</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_data_jabatan_lama == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_data_jabatan_lamas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_data_jabatan_lama" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_data_jabatan_lama_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_data_jabatan_lama_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_jabatan_lama"></h4>
                                                            </div>
                                                            <p id="file_data_jabatan_lama"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '1'|| $verifikasi->jenis_layanan == '3'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Baru</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jabatan_baru); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Satuan Organisasi Baru</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->satuan_organisasi_baru); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '3'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Kompetensi</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jabatan_kompetensi); ?>" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nomor Sertifikat/Surat</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->nomor_sertifikat); ?>" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tgl.Sertifikat/Surat Kompetensi</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_sertifikat); ?>" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Sertifikat Uji Kompetensi.</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_data_kompetensi == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_data_kompetensis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_data_kompetensi" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_data_kompetensi_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_data_kompetensi_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_data_kompetensi"></h4>
                                                            </div>
                                                            <p id="file_data_kompetensi"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <?php endif; ?>
                                            <?php if($verifikasi->jenis_layanan == '3'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Rekomendasi</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nomor Surat Rekomendasi</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_surat_rekomendasi); ?>" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat Rekomendasi</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_surat_rekomendasi); ?>" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Surat Rekomendasi</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_data_rekomendasi == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_data_rekomendasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_data_rekomendasi" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_data_rekomendasi_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_data_rekomendasi_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_data_rekomendasi"></h4>
                                                            </div>
                                                            <p id="file_data_rekomendasi"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Surat Keterangan Masih Menduduki Jabatan <br><a style="color:grey; font-size:12px;">(Ditandatangani Paling Rendah Pyb)</a></label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_surat_keterangan_menduduki_jabatan == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_surat_keterangan_menduduki_jabatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_surat_keterangan_menduduki_jabatan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_surat_keterangan_menduduki_jabatan_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_surat_keterangan_menduduki_jabatan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_surat_keterangan_menduduki_jabatan"></h4>
                                                            </div>
                                                            <p id="file_surat_keterangan_menduduki_jabatan"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload Surat Keterangan Memiliki Pengalaman Minimal 2 Tahun Dalam JF Yang Akan Diduduki</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_surat_keterangan_pengalaman == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_surat_keterangan_pengalamans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_surat_keterangan_pengalaman" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_surat_keterangan_pengalaman_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_surat_keterangan_pengalaman_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_surat_keterangan_pengalaman"></h4>
                                                            </div>
                                                            <p id="file_surat_keterangan_pengalaman"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '2' || $verifikasi->jenis_layanan == '3'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Pangkat</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nomor SK Pangkat</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_sk_pangkat); ?>" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Pangkat (Gol/Ruang)</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->pangkat_gol); ?>" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tmt_gol); ?>" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload SK pangkat terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_sk_pangkat_terakhir == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_sk_pangkat_terakhirs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_sk_pangkat_terakhir" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_sk_pangkat_terakhir_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_sk_pangkat_terakhir_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_sk_pangkat_terakhir"></h4>
                                                            </div>
                                                            <p id="file_sk_pangkat_terakhir"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '3'): ?>
                                                <?php if($verifikasi->pangkat_gol == '1'): ?>
                                                    <?php if($verifikasi->nomor_pak != ''): ?>
                                                    <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Data Dokumen Penetapan Angka Kredit (PAK)</h4>
                                                        <!--begin::Input-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Nomor PAK</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="<?php echo e($verifikasi->nomor_pak); ?>"  disabled/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Input-->
                                                        <!--begin::Input-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Jumlah Angka Kredit</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="<?php echo e($verifikasi->jumlah_angka_kredit); ?>" disabled />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Input-->
                                                        <!--begin::Input-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Tanggal ditetapkan</label>
                                                            <div class="col-lg-5 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_pak); ?>" disabled/>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">
                                                                            <i class="la la-calendar"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Input-->
                                                        <!--begin::Input-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Upload Dokumen PAK</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <?php if($verifikasi->file_data_pak == null): ?>
                                                                    <h1> - </h1>
                                                                <?php else: ?>
                                                                <table>
                                                                    <thead>
                                                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                            <th style="width: 170px">Nama File</th>
                                                                            <th>Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php $__currentLoopData = $file_data_paks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <tr>
                                                                            <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                            <td><a id="d_file_data_pak" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_data_pak_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                        </tr>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </tbody>
                                                                </table>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div class="modal fade" id="file_data_pak_modal">
                                                            <div class="modal-dialog" >
                                                                <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_data_pak"></h4>
                                                                    </div>
                                                                    <p id="file_data_pak"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Input-->
                                                        <!--begin::Input-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Upload Dokumen Klarifikasi PAK</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <?php if($verifikasi->file_klarifikasi_pak == null): ?>
                                                                    <h1> - </h1>
                                                                <?php else: ?>
                                                                <table>
                                                                    <thead>
                                                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                            <th style="width: 170px">Nama File</th>
                                                                            <th>Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php $__currentLoopData = $file_klarifikasi_paks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <tr>
                                                                            <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                            <td><a id="d_file_klarifikasi_pak" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_klarifikasi_pak_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                        </tr>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </tbody>
                                                                </table>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div class="modal fade" id="file_klarifikasi_pak_modal">
                                                            <div class="modal-dialog" >
                                                                <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_klarifikasi_pak"></h4>
                                                                    </div>
                                                                    <p id="file_klarifikasi_pak"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '2'): ?>
                                                <?php if($verifikasi->pangkat_gol == '1'): ?>
                                                    <?php if($verifikasi->nomor_pak != ''): ?>
                                                    <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Data Dokumen Penetapan Angka Kredit (PAK) Terakhir</h4>
                                                        <!--begin::Input-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Nomor PAK</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="<?php echo e($verifikasi->nomor_pak); ?>"  disabled/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Input-->
                                                        <!--begin::Input-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Jumlah Angka Kredit</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="<?php echo e($verifikasi->jumlah_angka_kredit); ?>" disabled />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Input-->
                                                        <!--begin::Input-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Tanggal Ditetapkan</label>
                                                            <div class="col-lg-5 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_pak); ?>" disabled/>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">
                                                                            <i class="la la-calendar"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Input-->
                                                        <!--begin::Input-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Upload Dokumen PAK</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <?php if($verifikasi->file_data_pak == null): ?>
                                                                    <h1> - </h1>
                                                                <?php else: ?>
                                                                <table>
                                                                    <thead>
                                                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                            <th style="width: 170px">Nama File</th>
                                                                            <th>Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php $__currentLoopData = $file_data_paks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <tr>
                                                                            <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                            <td><a id="d_file_data_pak" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_data_pak_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                        </tr>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </tbody>
                                                                </table>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div class="modal fade" id="file_data_pak_modal">
                                                            <div class="modal-dialog" >
                                                                <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_data_pak"></h4>
                                                                    </div>
                                                                    <p id="file_data_pak"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Input-->
                                                        <!--begin::Input-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Upload Dokumen Klarifikasi PAK</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <?php if($verifikasi->file_klarifikasi_pak == null): ?>
                                                                    <h1> - </h1>
                                                                <?php else: ?>
                                                                <table>
                                                                    <thead>
                                                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                            <th style="width: 170px">Nama File</th>
                                                                            <th>Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php $__currentLoopData = $file_klarifikasi_paks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <tr>
                                                                            <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                            <td><a id="d_file_klarifikasi_pak" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_klarifikasi_pak_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                        </tr>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </tbody>
                                                                </table>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div class="modal fade" id="file_klarifikasi_pak_modal">
                                                            <div class="modal-dialog" >
                                                                <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_klarifikasi_pak"></h4>
                                                                    </div>
                                                                    <p id="file_klarifikasi_pak"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <!--begin: Wizard Step 3-->
                                            
                                            <?php if($verifikasi->jenis_layanan == '2'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Pemberhentian</h4>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Alasan Pemberhentian</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_1" name="alasan_pemberhentian" value="1" <?php echo e(($verifikasi->alasan_pemberhentian =="1")? "checked" : ""); ?> disabled />
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Mengundurkan diri dari jabatan</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_2" name="alasan_pemberhentian" value="2" <?php echo e(($verifikasi->alasan_pemberhentian =="2")? "checked" : ""); ?> disabled/>
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Diberhentikan sementara sebagai PNS</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_3" name="alasan_pemberhentian" value="3" <?php echo e(($verifikasi->alasan_pemberhentian =="3")? "checked" : ""); ?> disabled/>
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Menjalani cuti diluar tanggungan negara</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_4" name="alasan_pemberhentian" value="4" <?php echo e(($verifikasi->alasan_pemberhentian =="4")? "checked" : ""); ?> disabled/>
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Menjalani tugas di luar lebih dari 6 (enam) bulan</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_5" name="alasan_pemberhentian" value="5" <?php echo e(($verifikasi->alasan_pemberhentian =="5")? "checked" : ""); ?> disabled/>
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Ditugaskan secara penuh diluar jabatan fungsional</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_6" name="alasan_pemberhentian" value="6" <?php echo e(($verifikasi->alasan_pemberhentian =="6")? "checked" : ""); ?> disabled/>
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Tidak memenuhi syarat jabatan</div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Keterangan Alasan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <textarea class="form-control" rows="3" id="ket_alasan_pemberhentian" name="ket_alasan_pemberhentian" disabled> <?php echo e($verifikasi->ket_alasan_pemberhentian); ?> </textarea>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="form-group row">
                                                    <label class="col-form-label text-rigth col-lg-3 col-sm-12">TMT Pemberhentian</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tmt_pemberhentian); ?>"  disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File Data Pendukung Lainnya</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_pendukung_pemberhentian == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_pendukung_pemberhentians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_pendukung_pemberhentian" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_pendukung_pemberhentian_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_pendukung_pemberhentian_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_pendukung_pemberhentian"></h4>
                                                            </div>
                                                            <p id="file_pendukung_pemberhentian"></p>
                                                        </div>
                                                    </div>
                                                </div> 

                                                <div id="kt_repeater_1">
    
                                                    <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catatans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="form-group row">

                                                        <label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($catatans->tanggal_catatan); ?>"  disabled/>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <label class="col-form-label col-lg-3 col-sm-12">Catatan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($catatans->catatan); ?>"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="1" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Surat Usulan Asli Ditandatangani PPK</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="2" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Nota Usulan asli yang dilengkapi dengan data formasi dan ditandatangani oleh PPK</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="3" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Sertifikat/tanda lulus/surat keterangan lulus uji kompetensi</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="4" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">PAK asli 1 tahun terakhir</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="5" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Salinan sah SK jabatan terakhir</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="6" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Salinan sah SK Pangkat terakhir</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:30px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="7" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Salinan sah SKP dan Penilaian Prestasi Kerja 2 tahun terakhir</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="8" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Semua persyaratan dan dokumen benar</div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '3'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Penilaian SKP dan Penilaian Prestasi Kerja 2 tahun terakhir
                                                </h4>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Penilaian SKP</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_penilaian_skp == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_penilaian_skps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_penilaian_skp" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_penilaian_skp_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_penilaian_skp_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_penilaian_skp"></h4>
                                                            </div>
                                                            <p id="file_penilaian_skp"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Penilaian Prestasi Kerja 2 Tahun Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_penilaian_prestasi == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_penilaian_prestasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_penilaian_prestasi" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_penilaian_prestasi_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_penilaian_prestasi_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_penilaian_prestasi"></h4>
                                                            </div>
                                                            <p id="file_penilaian_prestasi"></p>
                                                        </div>
                                                    </div>
                                                </div> 

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Dokumen Pendukung Lainnya</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_skp_2_dukungan_lainnya == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_skp_2_dukungan_lainnyas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_skp_2_dukungan_lainnya" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_skp_2_dukungan_lainnya_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_skp_2_dukungan_lainnya_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_skp_2_dukungan_lainnya"></h4>
                                                            </div>
                                                            <p id="file_skp_2_dukungan_lainnya"></p>
                                                        </div>
                                                    </div>
                                                </div> 

                                                <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catatans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="form-group row">

                                                        <label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($catatans->tanggal_catatan); ?>"  disabled/>
                                                                <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <label class="col-form-label col-lg-3 col-sm-12">Catatan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($catatans->catatan); ?>"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '4' ): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Usulan</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat Pengantar</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_surat_pengantar); ?>" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i> 
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">No. Surat Pengantar</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_surat_pengantar); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!--end::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Surat Pengantar</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_surat_pengantar == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_surat_pengantars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_surat_pengantar" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_surat_pengantar_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_surat_pengantar_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_surat_pengantar"></h4>
                                                            </div>
                                                            <p id="file_surat_pengantar"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Keppres</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">No. Keppres</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="kt_datepicker_3_modal"  value="<?php echo e($verifikasi->no_keppres); ?>" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal Keppres</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_keppres); ?>" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!--end::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Keppres</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_keppres == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_keppress; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_keppres" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_keppres_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_keppres_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_keppres"></h4>
                                                            </div>
                                                            <p id="file_keppres"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Ralat</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Alasan Ralat</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="kt_datepicker_3_modal"  value="<?php echo e($verifikasi->alasan_ralat); ?>" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!--end::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Bukti Pendukung</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_bukti_pendukung == null): ?>
                                                            <h1> - </h1>
                                                        <?php else: ?>
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $file_bukti_pendukungs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_bukti_pendukung" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_bukti_pendukung_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_bukti_pendukung_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_bukti_pendukung"></h4>
                                                            </div>
                                                            <p id="file_bukti_pendukung"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
                                                <div class="mr-2">
                                                    <a href="<?php echo e(route('koor-pokja.inbox.jfku.index')); ?>" type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4">Kembali</a>
                                                </div>
                                                <div>
                                                    <table>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="<?php echo e(route('koor-pokja.inbox.jfku.store_tolak')); ?>">
                                                                <?php echo csrf_field(); ?> 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="<?php echo e($verifikasi->id); ?>">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="<?php echo e($verifikasi->jenis_layanan); ?>">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_pengirim" value="<?php echo e($verifikasi->id_pengirim); ?>">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_verifikator" value="<?php echo e($currentUser->nip); ?>">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_nama_verifikator" value="<?php echo e($currentUser->name); ?>">
                                                                <a class="btn btn-danger font-weight-bolder text-uppercase px-9 py-4" data-toggle="modal" data-target="#tolak">
                                                                    Tolak
                                                                </a>
                                                                <div class="modal fade" id="tolak">
                                                                    <div class="modal-dialog" >
                                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Penolakan Surat Usulan</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">   
                                                                                <div class="pb-6" data-wizard-type="step-content">
                                                                                    <div id="otherFieldDiv_2">
                                                                                        <h4 class="mb-10 font-weight-bold text-danger">Form Penolakan</h4>
                                                                                            <!--begin::Input-->
                                                                                            <div class="form-group row">
                                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Jenis Usulan</label>
                                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                                    <div class="input-group date">
                                                                                                        <input type="text" class="form-control" disabled value="<?php echo e(Helper::defineJenisLayananBy($verifikasi->jenis_layanan)); ?>"  />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row">
                                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Nama ASN / Nomor Surat</label>
                                                                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                                                                    <div class="input-group date">
                                                                                                        <input type="text" class="form-control" disabled value="<?php echo e($verifikasi->nama); ?>"  />
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-4 col-md-9 col-sm-12">
                                                                                                    <div class="input-group date">
                                                                                                        <input type="text" class="form-control" disabled value="<?php echo e($verifikasi->no_surat_usulan); ?>"  />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end::Input-->
                                                                                            <!--begin::Input-->
                                                                                            <div class="form-group row">
                                                                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Proses Penolakan</label>
                                                                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                                                                    <div class="input-group date">
                                                                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_prosess_penolakan" name="tanggal_prosess_penolakan" autocomplete="off" data-toggle="datetimepicker" data-target="#tanggal_prosess_penolakan" placeholder="Pilih Tanggal" value="<?php echo e(old('tanggal_prosess_penolakan')); ?>" require/>
                                                                                                        <div class="input-group-append">
                                                                                                            <span class="input-group-text">
                                                                                                                <i class="la la-calendar"></i>
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row ">
                                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Alasan Penolakan</label>
                                                                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                                                                    <div class="input-group ">
                                                                                                        <textarea class="form-control" rows="3" id="alasan_penolakan" name="alasan_penolakan" autocomplete="off" value="<?php echo e(old('alasan_penolakan')); ?>"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                                        <!--begin::Input-->
                                                                                    </div>
                                                                                    <div  id="otherFieldDiv_3">                                             <!--begin::Input-->
                                                                                        <div class="row ">
                                                                                            <div class="col-lg-9 ml-lg-auto">
                                                                                                <button type="submit" id="kt_sweetalert_demo_5" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" >
                                                                                                    Kirim Penolakan
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--begin::Input-->
                                                                                    </div>
                                                                                </div> 
                                                                            </div> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </th>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="<?php echo e(route('koor-pokja.inbox.jfku.store_proses')); ?>">
                                                                <?php echo csrf_field(); ?> 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="<?php echo e($verifikasi->id); ?>">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="<?php echo e($verifikasi->jenis_layanan); ?>">
                                                                <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" >
                                                                    Proses
                                                                </button>
                                                            </form>
                                                        </th>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="<?php echo e(route('koor-pokja.inbox.jfku.store_pending')); ?>">
                                                                <?php echo csrf_field(); ?> 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="<?php echo e($verifikasi->id); ?>">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="<?php echo e($verifikasi->jenis_layanan); ?>">
                                                                <button type="submit" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" >
                                                                    Pending
                                                                </button>
                                                            </form>
                                                        </th>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--end: Wizard Actions-->
                                        <!--end: Wizard Form-->
                                    </div>
                                </div>
                                <!--end: Wizard Body-->
                            </div>
                            <!--end: Wizard-->
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
<script>
    refreshDateTimePicker();
        function refreshDateTimePicker(){
            
            $('.my-datepicker').each(function(){
                $(this).datetimepicker({
                    useCurrent:false,
                    format: 'DD-MMM-YYYY'
                })

                $(this).keydown(function(e){
                    e.preventDefault();
                })

            })
        }
        $('#otherFieldDiv').hide();

        

        $('.select2').select2({
            placeholder: "Choose..."
        })

        $('#kt_repeater_1').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function () {
                $(this).slideDown();
            },

            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });

        var id = 1;

        $(document).on('click','.add_more_item',function(){
            var source = $("#tambah_catatan").html();
            // var template = Handlebars.compile(source);
            var template = '<div class="item_data"><div class="form-group row"><label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label><div class="col-lg-5 col-md-9 col-sm-12"><div class="input-group date"><input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_catatan_' + id +'" name="tanggal_catatan[]" data-toggle="datetimepicker" data-target="#tanggal_catatan_'+ id +'" placeholder="Pilih Tanggal" autocomplete="off" require /><div class="input-group-append"><span class="input-group-text"><i class="la la-calendar"></i></span></div></div></div></div><div class="form-group row"><label class="col-form-label col-lg-3 col-sm-12">Catatan</label><div class="col-lg-9 col-md-9 col-sm-12"><div class="input-group date"><textarea class="form-control" rows="3" id="catatan" name="catatan[]" ></textarea></div></div></div><div class="form-group row"><div class="col-lg-9 col-md-9 col-sm-12"><!-- <button type="button" class="remove_detail btn btn-sm font-weight-bolder btn-light-primar">Hapus</button> --><a style="margin-top: 10px;" class="remove_detail btn btn-sm font-weight-bolder btn-light-danger"><i class="la la-trash-o"></i>Hapus Catatan</a></div></div></div>'
            $(this).parent().parent().parent().find(".item_catatan").append(template);
            id++;
            refreshDateTimePicker();
        });

        $(document).on('click','.remove_detail',function(event) {
            $(this).closest('.item_data').remove();
        });

        function confirmation(){
            if(confirm('are you sure?')){
                document.getElementById('kt_form').submit();
            }else{
                return false;
            }   
        }

    $(document).ready(function() {
        $(document).on('click', '#d_file_surat_usulan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_surat_usulan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_usulan').html(link);
            $('#file_name_file_surat_usulan').text(file);

            $('#file_surat_usulan_modal').modal('hide');
        })

        $(document).on('click', '#d_file_nota_usulan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_asn/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_nota_usulan').html(link);
            $('#file_name_file_nota_usulan').text(file);

            $('#file_nota_usulan_modal').modal('hide');
        })

        $(document).on('click', '#d_file_penetapan_kebutuhan_formasi', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_penetapan_kebutuhan_formasi_dari_kemenpanrb/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_penetapan_kebutuhan_formasi').html(link);
            $('#file_name_file_penetapan_kebutuhan_formasi').text(file);

            $('#file_penetapan_kebutuhan_formasi_modal').modal('hide');
        })

        $(document).on('click', '#d_file_ijazah', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_ijazah_terakhir/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_ijazah').html(link);
            $('#file_name_file_ijazah').text(file);

            $('#file_ijazah_modal').modal('hide');
        })

        $(document).on('click', '#d_file_pencantuman_gelar', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_pencantuman_gelar_akademik/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_pencantuman_gelar').html(link);
            $('#file_name_file_pencantuman_gelar').text(file);

            $('#file_pencantuman_gelar_modal').modal('hide');
        })

        $(document).on('click', '#d_file_data_jabatan_lama', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_data_jabatan_lama/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_jabatan_lama').html(link);
            $('#file_name_file_data_jabatan_lama').text(file);

            $('#file_data_jabatan_lama_modal').modal('hide');
        })

        $(document).on('click', '#d_file_data_pak', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_data_pak/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_pak').html(link);
            $('#file_name_file_data_pak').text(file);

            $('#file_data_pak_modal').modal('hide');
        })
        $(document).on('click', '#d_file_klarifikasi_pak', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_klarifikasi_pak/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_klarifikasi_pak').html(link);
            $('#file_name_file_klarifikasi_pak').text(file);

            $('#file_klarifikasi_pak_modal').modal('hide');
        })
        $(document).on('click', '#d_file_jabatan_lama', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_jabatan_lama/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_jabatan_lama').html(link);
            $('#file_name_jabatan_lama').text(file);

            $('#file_jabatan_lama_modal').modal('hide');
        })
        $(document).on('click', '#d_file_sk_pangkat_terakhir', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_sk_pangkat_terakhir/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_sk_pangkat_terakhir').html(link);
            $('#file_name_file_sk_pangkat_terakhir').text(file);

            $('#file_sk_pangkat_terakhir_modal').modal('hide');
        })
        $(document).on('click', '#d_file_data_jabatan_baru', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_data_jabatan_baru/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_jabatan_baru').html(link);
            $('#file_name_file_data_jabatan_baru').text(file);

            $('#file_data_jabatan_baru_modal').modal('hide');
        })
        $(document).on('click', '#d_file_ba_pelantikan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_ba_pelantikan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_ba_pelantikan').html(link);
            $('#file_name_file_ba_pelantikan').text(file);

            $('#file_ba_pelantikan_modal').modal('hide');
        })
        
        $(document).on('click', '#d_file_data_jabatan_fungsional', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_data_jabatan_fungsional/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_jabatan_fungsional').html(link);
            $('#file_name_file_data_jabatan_fungsional').text(file);

            $('#file_data_jabatan_fungsional_modal').modal('hide');
        })

        $(document).on('click', '#d_file_data_rekomendasi', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_data_rekomendasi/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_rekomendasi').html(link);
            $('#file_name_file_data_rekomendasi').text(file);

            $('#file_data_rekomendasi_modal').modal('hide');
        })

        $(document).on('click', '#d_file_skp_2_lainnya', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_skp_2_lainnya/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_skp_2_lainnya').html(link);
            $('#file_name_file_skp_2_lainnya').text(file);

            $('#file_skp_2_lainnya_modal').modal('hide');
        })

        $(document).on('click', '#d_file_skp_2', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_skp_2/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_skp_2').html(link);
            $('#file_name_file_skp_2').text(file);

            $('#file_skp_2_modal').modal('hide');
        })

        $(document).on('click', '#d_file_surat_pernyataan_rekomendasi', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_surat_pernyataan_rekomendasi/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_pernyataan_rekomendasi').html(link);
            $('#file_name_file_surat_pernyataan_rekomendasi').text(file);

            $('#file_surat_pernyataan_rekomendasi_modal').modal('hide');
        })

        $(document).on('click', '#d_file_data_kompetensi', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_data_kompetensi/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_kompetensi').html(link);
            $('#file_name_file_data_kompetensi').text(file);

            $('#file_data_kompetensi_modal').modal('hide');
        })
        
        $(document).on('click', '#d_file_formasi_jabatan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_formasi_jabatan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_formasi_jabatan').html(link);
            $('#file_name_file_formasi_jabatan').text(file);

            $('#file_formasi_jabatan_modal').modal('hide');
        })

        $(document).on('click', '#d_file_pendukung_pemberhentian', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_pendukung_pemberhentian/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_pendukung_pemberhentian').html(link);
            $('#file_name_file_pendukung_pemberhentian').text(file);

            $('#file_pendukung_pemberhentian_modal').modal('hide');
        })

        $(document).on('click', '#d_file_surat_pengantar', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_surat_pengantar/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_pengantar').html(link);
            $('#file_name_file_surat_pengantar').text(file);

            $('#file_surat_pengantar_modal').modal('hide');
        })

        $(document).on('click', '#d_file_keppres', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_keppres/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_keppres').html(link);
            $('#file_name_file_keppres').text(file);

            $('#file_keppres_modal').modal('hide');
        })

        $(document).on('click', '#d_file_sumpah_jabatan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_sumpah_jabatan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_sumpah_jabatan').html(link);
            $('#file_name_file_sumpah_jabatan').text(file);

            $('#file_sumpah_jabatan_modal').modal('hide');
        })

        $(document).on('click', '#d_file_penilaian_skp', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_penilaian_skp/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_penilaian_skp').html(link);
            $('#file_name_file_penilaian_skp').text(file);

            $('#file_penilaian_skp_modal').modal('hide');
        })

        $(document).on('click', '#d_file_penilaian_prestasi', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_penilaian_prestasi/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_penilaian_prestasi').html(link);
            $('#file_name_file_penilaian_prestasi').text(file);

            $('#file_penilaian_prestasi_modal').modal('hide');
        })

        $(document).on('click', '#d_file_skp_2_dukungan_lainnya', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_skp_2_dukungan_lainnya/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_skp_2_dukungan_lainnya').html(link);
            $('#file_name_file_skp_2_dukungan_lainnya').text(file);

            $('#file_skp_2_dukungan_lainnya_modal').modal('hide');
        })

        $(document).on('click', '#d_file_surat_keterangan_menduduki_jabatan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_surat_keterangan_menduduki_jabatan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_keterangan_menduduki_jabatan').html(link);
            $('#file_name_file_surat_keterangan_menduduki_jabatan').text(file);

            $('#file_surat_keterangan_menduduki_jabatan_modal').modal('hide');
        })

        $(document).on('click', '#d_file_surat_keterangan_pengalaman', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_surat_keterangan_pengalaman/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_keterangan_pengalaman').html(link);
            $('#file_name_file_surat_keterangan_pengalaman').text(file);

            $('#file_surat_keterangan_pengalaman_modal').modal('hide');
        })

        $(document).on('click', '#d_file_keppres_pengangkatan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_keppres_pengangkatan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_keppres_pengangkatan').html(link);
            $('#file_name_file_keppres_pengangkatan').text(file);

            $('#file_keppres_pengangkatan_modal').modal('hide');
        })

        $(document).on('click', '#d_file_ba_pengambilan_sumpah_pelantikan_fungsional', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_ba_pengambilan_sumpah_pelantikan_fungsional/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_ba_pengambilan_sumpah_pelantikan_fungsional').html(link);
            $('#file_name_file_ba_pengambilan_sumpah_pelantikan_fungsional').text(file);

            $('#file_ba_pengambilan_sumpah_pelantikan_fungsional_modal').modal('hide');
        })

        $(document).on('click', '#d_file_surat_pengantar', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/data_surat_pengantar/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_pengantar').html(link);
            $('#file_name_file_surat_pengantar').text(file);

            $('#file_surat_pengantar_modal').modal('hide');
        })

        $(document).on('click', '#d_file_keppres', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/data_keppres/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_keppres').html(link);
            $('#file_name_file_keppres').text(file);

            $('#file_keppres_modal').modal('hide');
        })

        $(document).on('click', '#d_file_bukti_pendukung', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/data_bukti_pendukung/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_bukti_pendukung').html(link);
            $('#file_name_file_bukti_pendukung').text(file);

            $('#file_bukti_pendukung_modal').modal('hide');
        })

    })
</script>
<script src="<?php echo e(asset('js/pages/custom/wizard/wizard-2.js')); ?>"></script>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\siapp\resources\views/pages/koor_pokja/inbox/verif.blade.php ENDPATH**/ ?>