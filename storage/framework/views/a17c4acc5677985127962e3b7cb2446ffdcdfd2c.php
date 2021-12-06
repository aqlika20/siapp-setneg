



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
                            <h3 class="card-label">Pembatalan Keppres Kenaikan Pangkat
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
                                    <form class="form" id="kt_form" action="<?php echo e(route('pic.administrasi.kenaikan-pangkat.pembatalan-keppres-kenaikan-pangkat.store')); ?>" enctype="multipart/form-data" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PATCH'); ?>
                                         <!--begin: Wizard Step 1-->
                                         <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content" data-wizard-state="current">
                                            <h4 class="mb-10 font-weight-bold text-dark">Keppres</h4>
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">No. Keppres</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="no_keppres" name="no_keppres" value="<?php echo e(old('no_keppres')); ?>" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Keppres</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_keppres" name="tanggal_keppres" data-toggle="datetimepicker" data-target="#tanggal_keppres" placeholder="Pilih Tanggal" value="<?php echo e(old('tanggal_keppres')); ?>" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Alasan Pembatalan</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control select22" style="width: 230px;" id="alasan_pembatalan" name="alasan_pembatalan">
                                                        <option value="" disabled selected>Choose</option>
                                                        <option value="1">Meninggal Dunia Sebelum Periode Kenaikan Pangkat</option>
                                                        <option value="2">Alasan Terkait Dengan Jabatan</option>
                                                        <option value="0">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div  id="otherAlasanPembatalan">
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Alasan Pembatalan(Lainnya)</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="alasan_pembatalan_lainnya" name="alasan_pembatalan_lainnya" value="<?php echo e(old('alasan_pembatalan_lainnya')); ?>" autocomplete="off" />
                                                        </div>
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
                                                <label class="col-lg-3 col-form-label">Upload Keppres Yang Dibatalkan</label>
                                                <div class="col-lg-9">
                                                    <input id="file_keppres_dibatalkan" name="file_keppres_dibatalkan[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Akta Meninggal Dunia / Alasan Terkait Dengan Jabatan / Lainnya</label>
                                                <div class="col-lg-9">
                                                    <input id="file_alasan" name="file_alasan[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
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
                                                            <input type="checkbox" id="checked_file_keppres_dibatalkan" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Keppres Yang Dibatalkan</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_alasan" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Upload Akta Meninggal Dunia / Alasan Terkait Dengan Jabatan / Lainnya</div>
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

        $('#otherAlasanPembatalan').hide();

        $("#alasan_pembatalan").change(function() {
            if ($(this).val() == "0") {
            $('#otherAlasanPembatalan').show();
            } else {
            $('#otherAlasanPembatalan').hide();
            }
        });
        $("#otherAlasanPembatalan").trigger("change");

        $(document).ready(function () {
        $("#file_surat_permohonan").on("change", function () {

        if ($('#file_surat_permohonan')[0].files.length != 0) {
            $("#checked_file_surat_permohonan").attr('checked', true);
        } else {
            $("#checked_file_surat_permohonan").attr('checked',false);
        }
        });

        $("#file_keppres_dibatalkan").on("change", function () {

        if ($('#file_keppres_dibatalkan')[0].files.length != 0) {
            $("#checked_file_keppres_dibatalkan").attr('checked', true);
        } else {
            $("#checked_file_keppres_dibatalkan").attr('checked',false);
        }
        });

        $("#file_alasan").on("change", function () {

        if ($('#file_alasan')[0].files.length != 0) {
            $("#checked_file_alasan").attr('checked', true);
        } else {
            $("#checked_file_alasan").attr('checked',false);
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
                    no_keppres: 'required',
                    tanggal_keppres: 'required',
                    masa_jabatan_start: 'required',
                    masa_jabatan_end: 'required',

                    tmt: 'required',
                    hak_keuangan: 'required',
                    tanggal_pelantikan: 'required',
                    yang_melantik: 'required',
                    
                    file_ba_pelantikan: {
                        extenstion: "pdf"
                    },
                    file_sumpah_jabatan: {
                        extenstion: "pdf"
                    }

                },
                submitHandler:function(form){
                    form.submit();
                }
            })
        })

    </script>
    <script src="<?php echo e(asset('js/pages/custom/wizard/wizard-3.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/crud/file-upload/dropzonejs.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ardim\Desktop\siapp2\siapp\resources\views/pages/pic/administrasi/kenaikan_pangkat/form/pembatalan_keppres_kenaikan_pangkat.blade.php ENDPATH**/ ?>