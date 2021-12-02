



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
                            <h3 class="card-label">Verifikasi Pemberhentian <?php echo e(Helper::defineJenisLayananBy($verifikasi->jenis_layanan)); ?>

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
                                            <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26' || $verifikasi->jenis_layanan == '28' || $verifikasi->jenis_layanan == '30' || $verifikasi->jenis_layanan == '31'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" >
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Usulan</h4>
                                                <!--begin::Input-->
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
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">No. Surat Usulan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_surat_usulan); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan Yang Menandatangani</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jabatan_menandatangani); ?>" disabled  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <?php if($verifikasi->jenis_layanan == '31'): ?>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Perihal</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <textarea type="text" class="form-control" disabled><?php echo e($verifikasi->perihal); ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <?php endif; ?>

                                                <?php if($verifikasi->jenis_layanan == '30'): ?>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jangka Waktu</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jangka_waktu); ?>" disabled  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <?php endif; ?>

                                                <?php if($verifikasi->jenis_layanan == '30'): ?>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Masa Jabatan</label>
                                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->masa_jabatan_start); ?>"  disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <span class="form-text text-muted">Please input the date from start.</span>
                                                    </div>
                                                    <div>
                                                        <label class="col-form-label">s/d.</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->masa_jabatan_end); ?>"  disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <?php endif; ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Surat Usulan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_data_usulan == null): ?>
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
                                                                <?php $__currentLoopData = $file_data_usulans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_data_usulan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_data_usulan_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_data_usulan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_data_usulan"></h4>
                                                            </div>
                                                            <p id="file_data_usulan"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php if($verifikasi->jenis_layanan == '31'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Data pendukung lainnya (boleh kosong)</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_data_pendukung_lainnya == null): ?>
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
                                                                <?php $__currentLoopData = $file_data_pendukung_lainnyas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_data_pendukung_lainnya" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_data_pendukung_lainnya_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_data_pendukung_lainnya_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_data_pendukung_lainnya"></h4>
                                                            </div>
                                                            <p id="file_data_pendukung_lainnya"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>

                                                <?php if($verifikasi->jenis_layanan == '21'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Surat penyataan Permohonan APS</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_data_pernyataan_permohonan_aps == null): ?>
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
                                                                <?php $__currentLoopData = $file_data_pernyataan_permohonan_apss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_data_pernyataan_permohonan_aps" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_data_pernyataan_permohonan_aps_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_data_pernyataan_permohonan_aps_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_data_pernyataan_permohonan_aps"></h4>
                                                            </div>
                                                            <p id="file_data_pernyataan_permohonan_aps"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                
                                                

                                                <?php if($verifikasi->jenis_layanan == '28' || $verifikasi->jenis_layanan == '30'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Keppres Yang Akan Dibatalkan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_keppres_yang_dibatalkan == null): ?>
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
                                                                <?php $__currentLoopData = $file_keppres_yang_dibatalkans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_keppres_yang_dibatalkan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_keppres_yang_dibatalkan_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_keppres_yang_dibatalkan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_keppres_yang_dibatalkan"></h4>
                                                            </div>
                                                            <p id="file_keppres_yang_dibatalkan"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Catatan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <textarea type="text" class="form-control" disabled><?php echo e($verifikasi->catatan); ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if($verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '25'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Akte kematian</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_akte_kematian == null): ?>
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
                                                                <?php $__currentLoopData = $file_akte_kematians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_akte_kematian" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_akte_kematian_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_akte_kematian_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_akte_kematian"></h4>
                                                            </div>
                                                            <p id="file_akte_kematian"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '24'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Putusan Pengadilan yang Sudah Inkrach</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_putusan_pengadilan_inkrach == null): ?>
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
                                                                <?php $__currentLoopData = $file_putusan_pengadilan_inkrachs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_putusan_pengadilan_inkrach" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_putusan_pengadilan_inkrach_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_putusan_pengadilan_inkrach_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_putusan_pengadilan_inkrach"></h4>
                                                            </div>
                                                            <p id="file_putusan_pengadilan_inkrach"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>

                                                <?php if($verifikasi->jenis_layanan == '25'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Data Pendukung terkait Anumerta</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_data_pendukung_terkait == null): ?>
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
                                                                <?php $__currentLoopData = $file_data_pendukung_terkaits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_data_pendukung_terkait" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_data_pendukung_terkait_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_data_pendukung_terkait_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_data_pendukung_terkait"></h4>
                                                            </div>
                                                            <p id="file_data_pendukung_terkait"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>

                                                <?php if($verifikasi->jenis_layanan == '26'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Surat Keputusan Pengangkatan Sebagai Pejabat Negara / Komisioner atau Lembaga non Struktural / Surat Penahanan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_surat_keputusan_pengangkatan_sebagai_pejabat == null): ?>
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
                                                                <?php $__currentLoopData = $file_surat_keputusan_pengangkatan_sebagai_pejabats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_surat_keputusan_pengangkatan_sebagai_pejabat" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_surat_keputusan_pengangkatan_sebagai_pejabat_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_surat_keputusan_pengangkatan_sebagai_pejabat_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_surat_keputusan_pengangkatan_sebagai_pejabat"></h4>
                                                            </div>
                                                            <p id="file_surat_keputusan_pengangkatan_sebagai_pejabat"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>

                                            </div>
                                            <?php endif; ?>
                                            <!--end: Wizard Step 1-->

                                            <?php if($verifikasi->jenis_layanan == '27' || $verifikasi->jenis_layanan == '29'): ?>
                                                <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                    <h4 class="mb-10 font-weight-bold text-dark">Data Surat Permohonan</h4>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">No. Surat Permohonan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($verifikasi->no_surat_permohonan); ?>"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat Permohonan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_surat_permohonan); ?>"  disabled/>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Upload Surat Permohonan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <?php if($verifikasi->file_surat_permohonan == null): ?>
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
                                                                    <?php $__currentLoopData = $file_surat_permohonans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr>
                                                                        <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                        <td><a id="d_file_surat_permohonan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_surat_permohonan_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                    </tr>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </tbody>
                                                            </table>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="file_surat_permohonan_modal">
                                                        <div class="modal-dialog" >
                                                            <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_surat_permohonan"></h4>
                                                                </div>
                                                                <p id="file_surat_permohonan"></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php if($verifikasi->jenis_layanan == '29'): ?>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Surat Keterangan Kehilangan Dari Kepolisian</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <?php if($verifikasi->file_surat_keterangan_kehilangan_polisi == null): ?>
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
                                                                    <?php $__currentLoopData = $file_surat_keterangan_kehilangan_polisis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr>
                                                                        <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                        <td><a id="d_file_surat_keterangan_kehilangan_polisi" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_surat_keterangan_kehilangan_polisi_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                    </tr>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </tbody>
                                                            </table>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="file_surat_keterangan_kehilangan_polisi_modal">
                                                        <div class="modal-dialog" >
                                                            <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_surat_keterangan_kehilangan_polisi"></h4>
                                                                </div>
                                                                <p id="file_surat_keterangan_kehilangan_polisi"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Nama Kantor Polisi yang Menerbitkan Surat Kehilangan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($verifikasi->nama_kantor_polisi); ?>"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">No. Surat Kehilangan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($verifikasi->no_surat_kehilangan); ?>"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat Kehilangan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_surat_kehilangan); ?>"  disabled/>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Surat Keterangan Kehilangan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <?php if($verifikasi->file_surat_keterangan_kehilangan == null): ?>
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
                                                                    <?php $__currentLoopData = $file_surat_keterangan_kehilangans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr>
                                                                        <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                        <td><a id="d_file_surat_keterangan_kehilangan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_surat_keterangan_kehilangan_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                    </tr>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </tbody>
                                                            </table>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="file_surat_keterangan_kehilangan_modal">
                                                        <div class="modal-dialog" >
                                                            <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_surat_keterangan_kehilangan"></h4>
                                                                </div>
                                                                <p id="file_surat_keterangan_kehilangan"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php if($verifikasi->jenis_layanan == '27'): ?>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Upload Data Dokumen Klarifikasi</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <?php if($verifikasi->file_data_dokumen_klarifikasi == null): ?>
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
                                                                    <?php $__currentLoopData = $file_data_dokumen_klarifikasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr>
                                                                        <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                        <td><a id="d_file_data_dokumen_klarifikasi" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_data_dokumen_klarifikasi_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                    </tr>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </tbody>
                                                            </table>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="file_data_dokumen_klarifikasi_modal">
                                                        <div class="modal-dialog" >
                                                            <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_data_dokumen_klarifikasi"></h4>
                                                                </div>
                                                                <p id="file_data_dokumen_klarifikasi"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Petikan Asli SK Pensiun yang salah</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <?php if($verifikasi->file_petikan_asli_sk_pensiun == null): ?>
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
                                                                    <?php $__currentLoopData = $file_petikan_asli_sk_pensiuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr>
                                                                        <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                        <td><a id="d_file_petikan_asli_sk_pensiun" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_petikan_asli_sk_pensiun_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                    </tr>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </tbody>
                                                            </table>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="file_petikan_asli_sk_pensiun_modal">
                                                        <div class="modal-dialog" >
                                                            <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_petikan_asli_sk_pensiun"></h4>
                                                                </div>
                                                                <p id="file_petikan_asli_sk_pensiun"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Catatan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <textarea type="text" class="form-control" disabled><?php echo e($verifikasi->catatan); ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                                <?php endif; ?>
                                               


                                            <!--begin: Wizard Step 2-->
                                            <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26' || $verifikasi->jenis_layanan == '27' || $verifikasi->jenis_layanan == '28' || $verifikasi->jenis_layanan == '29' || $verifikasi->jenis_layanan == '30' || $verifikasi->jenis_layanan == '31'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data ASN</h4>
                                                <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26' || $verifikasi->jenis_layanan == '27' || $verifikasi->jenis_layanan == '28' || $verifikasi->jenis_layanan == '29' || $verifikasi->jenis_layanan == '30'): ?>
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
                                                <?php endif; ?>

                                                <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '27' || $verifikasi->jenis_layanan == '28' || $verifikasi->jenis_layanan == '29' || $verifikasi->jenis_layanan == '30' || $verifikasi->jenis_layanan == '31'): ?>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nama</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->nama); ?>" disabled  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <?php endif; ?>
                                                
                                                <?php if($verifikasi->jenis_layanan == '25'): ?>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nama PNS</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->nama); ?>" disabled  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '25'): ?>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nama Janda / Duda / Anak</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->nama_janda_duda_anak); ?>" disabled  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26' || $verifikasi->jenis_layanan == '30' || $verifikasi->jenis_layanan == '31'): ?>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal lahir</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_lahir); ?>" id="kt_datepicker_4_modal" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '28' || $verifikasi->jenis_layanan == '31'): ?>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jabatan); ?>" disabled  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26' || $verifikasi->jenis_layanan == '30' || $verifikasi->jenis_layanan == '31'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Pendidikan Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                        <?php $__currentLoopData = $pendidikans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendidikan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($verifikasi->pendidikan_terakhir == $pendidikan->id): ?>
                                                            <input type="text" class="form-control" value="<?php echo e($pendidikan->name); ?>" disabled />
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>

                                                <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Ijasah Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_ijasah == null): ?>
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
                                                                <?php $__currentLoopData = $file_ijasahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_ijasah" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_ijasah_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_ijasah_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_ijasah"></h4>
                                                            </div>
                                                            <p id="file_ijasah"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>

                                                <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26' || $verifikasi->jenis_layanan == '30' || $verifikasi->jenis_layanan == '31'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Instansi Induk</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->instansi_induk); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '27' || $verifikasi->jenis_layanan == '29'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Alamat</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <textarea type="text" class="form-control" disabled><?php echo e($verifikasi->alamat); ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">No. Keppres</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_keppres); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal Keppres</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control datetimepicker-input my-datepicker" value="<?php echo e($verifikasi->tanggal_keppres); ?>" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nomor Urut</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_urut); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <?php if($verifikasi->jenis_layanan == '27'): ?>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Data Yang Salah</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <textarea type="text" class="form-control" disabled><?php echo e($verifikasi->data_salah); ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Seharusnya</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <textarea type="text" class="form-control"  disabled><?php echo e($verifikasi->seharusnya); ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '26' || $verifikasi->jenis_layanan == '28' || $verifikasi->jenis_layanan == '30' || $verifikasi->jenis_layanan == '31'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Pangkat (Gol/Ruang) Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <?php $__currentLoopData = $pangkats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pangkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($verifikasi->pangkat_terakhir == $pangkat->id): ?>
                                                                <input type="text" class="form-control" value="<?php echo e($pangkat->name); ?>" disabled />
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '25'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Pangkat (Gol/Ruang) Lama</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <?php $__currentLoopData = $pangkats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pangkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($verifikasi->pangkat_lama == $pangkat->id): ?>
                                                                <input type="text" class="form-control" value="<?php echo e($pangkat->name); ?>" disabled />
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20'|| $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Pangkat (Gol/Ruang) Baru</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <?php $__currentLoopData = $pangkats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pangkat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($verifikasi->pangkat_baru == $pangkat->id): ?>
                                                                <input type="text" class="form-control" value="<?php echo e($pangkat->name); ?>" disabled />
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '28'): ?>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Nomor Keppres yang Dibatalkan</label>
                                                        <div class="col-lg-5 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($verifikasi->nomor_keppres_dibatalkan); ?>" disabled />
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Instansi Induk</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($verifikasi->instansi_induk); ?>" disabled />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Nomor Urut</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($verifikasi->no_urut); ?>"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '25'): ?>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">TMT Pangkat Baru</label>
                                                        <div class="col-lg-5 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="<?php echo e($verifikasi->tmt_pangkat_baru); ?>" disabled />
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21'|| $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '25'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT Pensiun</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tmt_pensiun); ?>" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '24'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT Pemberhentian</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tmt_pemberhentian); ?>" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '26'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT Pemberhentian Sementara</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tmt_pemberhentian_sementara); ?>" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21'|| $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '25'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Alamat Setelah Pensiun</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <textarea type="text" class="form-control" disabled><?php echo e($verifikasi->alamat_setelah_pensiun); ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Taspen</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <textarea type="text" class="form-control" disabled><?php echo e($verifikasi->taspen); ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload SK Pangkat Terakhir</label>
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
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload SK Jabatan Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_sk_jabatan_terakhir == null): ?>
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
                                                                <?php $__currentLoopData = $file_sk_jabatan_terakhirs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_sk_jabatan_terakhir" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_sk_jabatan_terakhir_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_sk_jabatan_terakhir_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_sk_jabatan_terakhir"></h4>
                                                            </div>
                                                            <p id="file_sk_jabatan_terakhir"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>

                                                <?php if($verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Berita Acara Pelantikan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_berita_acara_pelantikan == null): ?>
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
                                                                <?php $__currentLoopData = $file_berita_acara_pelantikans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_berita_acara_pelantikan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_berita_acara_pelantikan_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_berita_acara_pelantikan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_berita_acara_pelantikan"></h4>
                                                            </div>
                                                            <p id="file_berita_acara_pelantikan"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <!-- <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload File</label>
                                                    <div class="col-lg-9">
                                                        <a style="color: blue;">file.pdf</a>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <?php endif; ?>
                                            <!--end: Wizard Step 2-->

                                            <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26'): ?>
                                                <?php if($verifikasi->pangkat_gol_baru == '1'): ?>
                                                    <?php if($verifikasi->nomor_pak != ''): ?>
                                                    <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Data PAK</h4>
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
                                                            <label class="col-form-label col-lg-3 col-sm-12">Tanggal PAK</label>
                                                            <div class="col-lg-5 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_pak); ?>" id="kt_datepicker_8_modal" disabled/>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">
                                                                            <i class="la la-calendar"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Jumlah Angka Kredit</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="<?php echo e($verifikasi->jumlah_angka_kredit); ?>" disabled />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Periode Penilaian</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <?php $__currentLoopData = $periodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $periode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($verifikasi->periode_penilaian == $periode->id): ?>
                                                                        <input type="text" class="form-control" value="<?php echo e($periode->name); ?>" disabled />
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Upload File</label>
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
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php if($verifikasi->no_klarifikasi != ''): ?>
                                                    <!--begin: Wizard Step 2-->
                                                    <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Klarifikasi PAK
                                                            <span class="form-text text-muted"><small>Khusus untuk PAK yang dikeluarkan oleh Kemenkes & Kemendikbud</small></span>
                                                        </h4>

                                                        <!--begin::Input-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Nomor Klarifikasi</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="<?php echo e($verifikasi->no_klarifikasi); ?>" disabled />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Tanggal Klarifikasi</label>
                                                            <div class="col-lg-5 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_klarifikasi); ?>" disabled/>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">
                                                                            <i class="la la-calendar"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File</label>
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
                                                    </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <!--begin: Wizard Step 3-->
                                            <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Terakhir</h4>
                                                <!--begin::Select-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">jabatan_terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->jabatan_terakhir); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Unit Kerja Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->unit_kerja_terakhir); ?>" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload SK Jabatan Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_sk_jabatan_terakhir == null): ?>
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
                                                                <?php $__currentLoopData = $file_sk_jabatan_terakhirs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_sk_jabatan_terakhir" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_sk_jabatan_terakhir_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_sk_jabatan_terakhir_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_sk_jabatan_terakhir"></h4>
                                                            </div>
                                                            <p id="file_sk_jabatan_terakhir"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Berita Acara Pelantikan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_berita_acara_pelantikan == null): ?>
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
                                                                <?php $__currentLoopData = $file_berita_acara_pelantikans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_berita_acara_pelantikan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_berita_acara_pelantikan_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_berita_acara_pelantikan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_berita_acara_pelantikan"></h4>
                                                            </div>
                                                            <p id="file_berita_acara_pelantikan"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '25'): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <br>
                                                <br>
                                                <?php if($verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '25'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Pas Foto Berwarna Janda / Duda / Anak</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_pas_foto == null): ?>
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
                                                                <?php $__currentLoopData = $file_pas_fotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_pas_foto" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_pas_foto_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_pas_foto_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_pas_foto"></h4>
                                                            </div>
                                                            <p id="file_pas_foto"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22'): ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Pas Foto Berwarna YBS</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_pas_foto == null): ?>
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
                                                                <?php $__currentLoopData = $file_pas_fotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_pas_foto" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_pas_foto_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_pas_foto_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_pas_foto"></h4>
                                                            </div>
                                                            <p id="file_pas_foto"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Surat Keterangan Tidak Pernah Dijatuhi Hukuman Disiplin</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_sk_tidak_pernah_dijatuhi_hukuman == null): ?>
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
                                                                <?php $__currentLoopData = $file_sk_tidak_pernah_dijatuhi_hukumans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_sk_tidak_pernah_dijatuhi_hukuman" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_sk_tidak_pernah_dijatuhi_hukuman_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_sk_tidak_pernah_dijatuhi_hukuman_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_sk_tidak_pernah_dijatuhi_hukuman"></h4>
                                                            </div>
                                                            <p id="file_sk_tidak_pernah_dijatuhi_hukuman"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Surat Keterangan Tidak Sedang Dalam Proses Hukum DPCP</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_sk_tidak_sedang_dalam_hukum_dpcp == null): ?>
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
                                                                <?php $__currentLoopData = $file_sk_tidak_sedang_dalam_hukum_dpcps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_sk_tidak_sedang_dalam_hukum_dpcp" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_sk_tidak_sedang_dalam_hukum_dpcp_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_sk_tidak_sedang_dalam_hukum_dpcp_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_sk_tidak_sedang_dalam_hukum_dpcp"></h4>
                                                            </div>
                                                            <p id="file_sk_tidak_sedang_dalam_hukum_dpcp"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>


                                            
                                            <?php if($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26'): ?>
                                                <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catatans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
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
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>

                                            <?php if(0): ?>
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Keppres</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">No. Keppres</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->no_keppres); ?>"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal Keppres</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_keppres); ?>"  disabled/>
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
                                                    <label class="col-form-label col-lg-3 col-sm-12">Masa Jabatan</label>
                                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->masa_jabatan_start); ?>"  disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <span class="form-text text-muted">Please input the date from start.</span>
                                                    </div>
                                                    <div>
                                                        <label class="col-form-label">s/d.</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->masa_jabatan_end); ?>"  disabled/>
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
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tmt); ?>" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Hak keuangan dan Fasilitas</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->hak_keuangan); ?>" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal pelantikan</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->tanggal_pelantikan); ?>" disabled/>
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
                                                    <label class="col-form-label col-lg-3 col-sm-12">Yang Melantik</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="<?php echo e($verifikasi->yang_melantik); ?>" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload BA Pelantikan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_ba_pelantikan == null): ?>
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
                                                                <?php $__currentLoopData = $file_ba_pelantikans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_ba_pelantikan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_ba_pelantikan_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_ba_pelantikan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_ba_pelantikan"></h4>
                                                            </div>
                                                            <p id="file_ba_pelantikan"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload Sumpah Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <?php if($verifikasi->file_sumpah_jabatan == null): ?>
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
                                                                <?php $__currentLoopData = $file_sumpah_jabatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><a style="color: blue;" > <?php echo e($file); ?></a></td>
                                                                    <td><a id="d_file_sumpah_jabatan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_sumpah_jabatan_modal" data-file="<?php echo e($file); ?>">Lihat</a></td>
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_sumpah_jabatan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_sumpah_jabatan"></h4>
                                                            </div>
                                                            <p id="file_sumpah_jabatan"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
                                                <div class="mr-2">
                                                    <a href="<?php echo e(route('koor-pokja.inbox.pemberhentian.index')); ?>" type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4">Kembali</a>
                                                </div>
                                                <div>
                                                    <table>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="<?php echo e(route('koor-pokja.inbox.pemberhentian.store_tolak')); ?>">
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
                                                                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_prosess_penolakan" name="tanggal_prosess_penolakan" autocomplete="off" data-toggle="datetimepicker" data-target="#tanggal_prosess_penolakan" placeholder="Pilih Tanggal" value="<?php echo e(old('tanggal_prosess_penolakan')); ?>" required/>
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
                                                            <form method="POST" action="<?php echo e(route('koor-pokja.inbox.pemberhentian.store_proses')); ?>">
                                                                <?php echo csrf_field(); ?> 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="<?php echo e($verifikasi->id); ?>">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="<?php echo e($verifikasi->jenis_layanan); ?>">
                                                                <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" >
                                                                    Proses
                                                                </button>
                                                            </form>
                                                        </th>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="<?php echo e(route('koor-pokja.inbox.pemberhentian.store_pending')); ?>">
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
    $(document).ready(function() {
        $(document).on('click', '#d_file_data_usulan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_data_usulan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_usulan').html(link);
            $('#file_name_file_data_usulan').text(file);

            $('#file_data_usulan_modal').modal('hide');
        })
        $(document).on('click', '#d_file_data_pendukung_lainnya', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_data_pendukung_lainnya/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_pendukung_lainnya').html(link);
            $('#file_name_file_data_pendukung_lainnya').text(file);

            $('#file_data_pendukung_lainnya_modal').modal('hide');
        })
        $(document).on('click', '#d_file_keppres_yang_dibatalkan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_keppres_yang_dibatalkan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_keppres_yang_dibatalkan').html(link);
            $('#file_name_file_keppres_yang_dibatalkan').text(file);

            $('#file_keppres_yang_dibatalkan_modal').modal('hide');
        })
        $(document).on('click', '#d_file_data_pernyataan_permohonan_aps', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_data_pernyataan_permohonan_aps/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_pernyataan_permohonan_aps').html(link);
            $('#file_name_file_data_pernyataan_permohonan_aps').text(file);

            $('#file_data_pernyataan_permohonan_aps_modal').modal('hide');
        })
        $(document).on('click', '#d_file_akte_kematian', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_akte_kematian/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_akte_kematian').html(link);
            $('#file_name_file_akte_kematian').text(file);

            $('#file_akte_kematian_modal').modal('hide');
        })
        $(document).on('click', '#d_file_putusan_pengadilan_inkrach', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_putusan_pengadilan_inkrach/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_putusan_pengadilan_inkrach').html(link);
            $('#file_name_file_putusan_pengadilan_inkrach').text(file);

            $('#file_putusan_pengadilan_inkrach_modal').modal('hide');
        })
        $(document).on('click', '#d_file_data_pendukung_terkait', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_data_pendukung_terkait/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_pendukung_terkait').html(link);
            $('#file_name_file_data_pendukung_terkait').text(file);

            $('#file_data_pendukung_terkait_modal').modal('hide');
        })
        $(document).on('click', '#d_file_surat_keputusan_pengangkatan_sebagai_pejabat', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_surat_keputusan_pengangkatan_sebagai_pejabat/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_keputusan_pengangkatan_sebagai_pejabat').html(link);
            $('#file_name_file_surat_keputusan_pengangkatan_sebagai_pejabat').text(file);

            $('#file_surat_keputusan_pengangkatan_sebagai_pejabat_modal').modal('hide');
        })
        $(document).on('click', '#d_file_ijasah', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_ijasah/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_ijasah').html(link);
            $('#file_name_file_ijasah').text(file);

            $('#file_ijasah_modal').modal('hide');
        })
        $(document).on('click', '#d_file_sk_pangkat_terakhir', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_sk_pangkat_terakhir/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_sk_pangkat_terakhir').html(link);
            $('#file_name_file_sk_pangkat_terakhir').text(file);

            $('#file_sk_pangkat_terakhir_modal').modal('hide');
        })
        $(document).on('click', '#d_file_sk_jabatan_terakhir', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_sk_jabatan_terakhir/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_sk_jabatan_terakhir').html(link);
            $('#file_name_file_sk_jabatan_terakhir').text(file);

            $('#file_sk_jabatan_terakhir_modal').modal('hide');
        })
        $(document).on('click', '#d_file_berita_acara_pelantikan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_berita_acara_pelantikan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_berita_acara_pelantikan').html(link);
            $('#file_name_file_berita_acara_pelantikan').text(file);

            $('#file_berita_acara_pelantikan_modal').modal('hide');
        })
        $(document).on('click', '#d_file_pas_foto', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_pas_foto/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_pas_foto').html(link);
            $('#file_name_file_pas_foto').text(file);

            $('#file_pas_foto_modal').modal('hide');
        })
        $(document).on('click', '#d_file_sk_tidak_pernah_dijatuhi_hukuman', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_sk_tidak_pernah_dijatuhi_hukuman/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_sk_tidak_pernah_dijatuhi_hukuman').html(link);
            $('#file_name_file_sk_tidak_pernah_dijatuhi_hukuman').text(file);

            $('#file_sk_tidak_pernah_dijatuhi_hukuman_modal').modal('hide');
        })
        $(document).on('click', '#d_file_sk_tidak_sedang_dalam_hukum_dpcp', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_sk_tidak_sedang_dalam_hukum_dpcp/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_sk_tidak_sedang_dalam_hukum_dpcp').html(link);
            $('#file_name_file_sk_tidak_sedang_dalam_hukum_dpcp').text(file);

            $('#file_sk_tidak_sedang_dalam_hukum_dpcp_modal').modal('hide');
        })
        $(document).on('click', '#d_file_surat_permohonan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_surat_permohonan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_permohonan').html(link);
            $('#file_name_file_surat_permohonan').text(file);

            $('#file_surat_permohonan_modal').modal('hide');
        })
        $(document).on('click', '#d_file_surat_keterangan_kehilangan_polisi', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_surat_keterangan_kehilangan_polisi/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_keterangan_kehilangan_polisi').html(link);
            $('#file_name_file_surat_keterangan_kehilangan_polisi').text(file);

            $('#file_surat_keterangan_kehilangan_polisi_modal').modal('hide');
        })
        $(document).on('click', '#d_file_surat_keterangan_kehilangan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_surat_keterangan_kehilangan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_keterangan_kehilangan').html(link);
            $('#file_name_file_surat_keterangan_kehilangan').text(file);

            $('#file_surat_keterangan_kehilangan_modal').modal('hide');
        })
        $(document).on('click', '#d_file_data_dokumen_klarifikasi', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_data_dokumen_klarifikasi/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_dokumen_klarifikasi').html(link);
            $('#file_name_file_data_dokumen_klarifikasi').text(file);

            $('#file_data_dokumen_klarifikasi_modal').modal('hide');
        })
        $(document).on('click', '#d_file_petikan_asli_sk_pensiun', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_petikan_asli_sk_pensiun/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_petikan_asli_sk_pensiun').html(link);
            $('#file_name_file_petikan_asli_sk_pensiun').text(file);

            $('#file_petikan_asli_sk_pensiun_modal').modal('hide');
        })






        $(document).on('click', '#d_file_data_pak', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_data_pak/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_pak').html(link);
            $('#file_name_file_data_pak').text(file);

            $('#file_data_pak_modal').modal('hide');
        })
        $(document).on('click', '#d_file_klarifikasi_pak', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/file_klarifikasi_pak/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_klarifikasi_pak').html(link);
            $('#file_name_file_klarifikasi_pak').text(file);

            $('#file_klarifikasi_pak_modal').modal('hide');
        })
        $(document).on('click', '#d_file_surat_pengantar', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/data_surat_pengantar/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_pengantar').html(link);
            $('#file_name_file_surat_pengantar').text(file);

            $('#file_surat_pengantar_modal').modal('hide');
        })
        $(document).on('click', '#d_file_keppres', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/data_keppres/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_keppres').html(link);
            $('#file_name_file_keppres').text(file);

            $('#file_keppres_modal').modal('hide');
        })
        $(document).on('click', '#d_file_bukti_pendukung', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/data_bukti_pendukung/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_bukti_pendukung').html(link);
            $('#file_name_file_bukti_pendukung').text(file);

            $('#file_bukti_pendukung_modal').modal('hide');
        })
        $(document).on('click', '#d_file_ba_pelantikan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/data_ba_pelantikan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_ba_pelantikan').html(link);
            $('#file_name_file_ba_pelantikan').text(file);

            $('#file_ba_pelantikan_modal').modal('hide');
        })
        $(document).on('click', '#d_file_sumpah_jabatan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/data_sumpah_jabatan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_sumpah_jabatan').html(link);
            $('#file_name_file_sumpah_jabatan').text(file);

            $('#file_sumpah_jabatan_modal').modal('hide');
        })
    })
</script>
<script src="<?php echo e(asset('js/pages/custom/wizard/wizard-2.js')); ?>"></script>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\siapp\resources\views/pages/koor_pokja/inbox/verif_pemberhentian.blade.php ENDPATH**/ ?>