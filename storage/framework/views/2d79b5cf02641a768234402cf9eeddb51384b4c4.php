



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
                            <h3 class="card-label">Ralat Keppres Kepangkatan
                            <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <!--begin: Wizard-->
                        <div class="wizard wizard-3" id="kt_wizard_v3" data-wizard-state="step-first" data-wizard-clickable="true">
                            <!--begin: Wizard Nav-->
                            <div>
                                <div data-wizard-type="step" data-wizard-state="current"></div>
                            </div>
                            <!--end: Wizard Nav-->
                            <!--begin: Wizard Body-->
                            <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                <div class="col-xl-20 col-xxl-12">
                                    <!--begin: Wizard Form-->
                                    <form class="form" id="kt_form" action="<?php echo e(route('pic.administrasi.kenaikan-pangkat.ralat-keppres-kepangkatan.store')); ?>" enctype="multipart/form-data" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PATCH'); ?>
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content" data-wizard-state="current">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Surat</h4>
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat Permohonan</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_surat_permohonan" name="tanggal_surat_permohonan" data-toggle="datetimepicker" data-target="#tanggal_surat_permohonan" placeholder="Pilih Tanggal" value="<?php echo e(old('tanggal_surat_permohonan')); ?>" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">No. Surat Permohonan</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="no_surat_permohonan" name="no_surat_permohonan" value="<?php echo e(old('no_surat_permohonan')); ?>" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jabatan yang Menandatangani</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text"class="form-control" id="jabatan_menandatangani" name="jabatan_menandatangani" value="<?php echo e(old('jabatan_menandatangani')); ?>" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Surat Permohonan</label>
                                                <div class="col-lg-9">
                                                    <input id="file_surat_permohonan" name="file_surat_permohonan[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Dokumen Klarifikasi</label>
                                                <div class="col-lg-9">
                                                    <input id="file_dokumen_klarifikasi" name="file_dokumen_klarifikasi[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Fotokopi SK Yang Diperbaiki</label>
                                                <div class="col-lg-9">
                                                    <input id="file_fotokopi_sk_diperbaiki" name="file_fotokopi_sk_diperbaiki[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_surat_permohonan" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Surat Permohonan</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_dokumen_klarifikasi" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Dokumen Klarifikasi</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_fotokopi_sk_diperbaiki" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Fotokopi SK Yang Diperbaiki</div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            
                                        </div>
                                        <!--end: Wizard Step 1-->

                                        <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
                                            <div class="mr-2">
                                                
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Kirim Usulan</button>
                                                <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Berikutnya</button>
                                            </div>
                                        </div>
                                        <!--end: Wizard Actions-->
                                    </form>
                                    <!--end: Wizard Form-->
                                </div>
                            </div>
                            <!--end: Wizard Body-->
                        </div>
                        <!--end: Wizard-->                      
                    </div>
                    <div class="modal-footer">
                        <a href="<?php echo e(route('pic.administrasi.kenaikan-pangkat.index')); ?>"type="button" class="btn btn-light-danger font-weight-bold">Batalkan</a>
                    </div>
                </div>
            </div>
            <!--end: Wizard-->
        </div>
    </div>
				
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
        $('.my-datepicker').datetimepicker({
            useCurrent:false,
            format: 'DD-MMM-YYYY'
        })

        $('.my-datepicker').keydown(function(e){
            e.preventDefault();
        })

        $('.select2').select2({
            placeholder: "Choose..."
        })

        function applyTimePicker(type, id, date){
            switch(type){
                case 'min':
                    $(id).datetimepicker('minDate', date);
                    break;
                case 'max':
                    $(id).datetimepicker('maxDate', date);
                    break;
            }
        }

        function renewDate(type, date){
            var new_date = null;
            switch(type){
                case 'min':
                    new_date = moment(date).add(1, "days");
                    break;
                case 'max':
                    new_date = moment(date).subtract(1, "days");
                    break;
            }

            return new_date;
        }

        $(document).ready(function () {
        $("#file_surat_permohonan").on("change", function () {

        if ($('#file_surat_permohonan')[0].files.length != 0) {
            $("#checked_file_surat_permohonan").attr('checked', true);
        } else {
            $("#checked_file_surat_permohonan").attr('checked',false);
        }
        });

        $("#file_dokumen_klarifikasi").on("change", function () {

        if ($('#file_dokumen_klarifikasi')[0].files.length != 0) {
            $("#checked_file_dokumen_klarifikasi").attr('checked', true);
        } else {
            $("#checked_file_dokumen_klarifikasi").attr('checked',false);
        }
        });

        $("#file_fotokopi_sk_diperbaiki").on("change", function () {

        if ($('#file_fotokopi_sk_diperbaiki')[0].files.length != 0) {
            $("#checked_file_fotokopi_sk_diperbaiki").attr('checked', true);
        } else {
            $("#checked_file_fotokopi_sk_diperbaiki").attr('checked',false);
        }
        });
    });


        $('#masa_jabatan_start').on('change.datetimepicker', function(e) {
            if(e.date){
                var min_date = renewDate('min', e.date);
                applyTimePicker('min', '#masa_jabatan_end', min_date);
            }
        });

        function confirmation(){
            if(confirm('are you sure?')){
                document.getElementById('kt_form').submit();
            }else{
                return false;
            }   
        }

    </script>
    <script>
        $(function(){
            $('#kt_form').validate({
                errorClass:"error-msg",
                errorElement:"p",
                rules:{
                    tanggal_surat_pengantar: 'required',
                    no_surat_pengantar: 'required',
                    file_surat_pengantar: {
                        extenstion: "pdf"
                    },
                    no_keppres: 'required',
                    tanggal_keppres: 'required',
                    file_keppres: {
                        extenstion: "pdf"
                    },
                    alasan_ralat: 'required',
                    file_bukti_pendukung: {
                        extenstion: "pdf"
                    }

                    // no_keppres: 'required',
                    // tanggal_keppres: 'required',
                    // masa_jabatan_start: 'required',
                    // masa_jabatan_end: 'required',

                    // tmt: 'required',
                    // hak_keuangan: 'required',
                    // tanggal_pelantikan: 'required',
                    // yang_melantik: 'required',
                    
                    // file_ba_pelantikan: {
                    //     extenstion: "pdf"
                    // },
                    // file_sumpah_jabatan: {
                    //     extenstion: "pdf"
                    // }

                },
                submitHandler:function(form){
                    form.submit();
                }
            })
        })

        $("#file_surat_permohonan").on("change", function() {
    if ($("#file_surat_permohonan")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_surat_permohonan').val('');
    }
    });

    $("#file_dokumen_klarifikasi").on("change", function() {
    if ($("#file_dokumen_klarifikasi")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_dokumen_klarifikasi').val('');
    }
    });

    $("#file_fotokopi_sk_diperbaiki").on("change", function() {
    if ($("#file_fotokopi_sk_diperbaiki")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_fotokopi_sk_diperbaiki').val('');
    }
    });

    </script>
    <script src="<?php echo e(asset('js/pages/custom/wizard/wizard-3.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/crud/file-upload/dropzonejs.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ardim\Desktop\siapp2\siapp\resources\views/pages/pic/administrasi/kenaikan_pangkat/form/ralat_keppres_kepangkatan.blade.php ENDPATH**/ ?>