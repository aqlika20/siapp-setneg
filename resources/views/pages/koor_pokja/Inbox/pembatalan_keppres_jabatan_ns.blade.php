{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">	
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0" style="background-color: #FFA800;">
                        <div class="card-title">
                            <h3 class="card-label">Pembatalan Keppres Jabatan Non Struktural
                            <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <!--begin: Wizard-->
                        <div class="wizard wizard-3" id="kt_wizard_v3" data-wizard-state="step-first" data-wizard-clickable="true">
                            <!--begin: Wizard Nav-->
                            <div>
                                <div data-wizard-type="step" data-wizard-state="current"></div>
                                <div data-wizard-type="step"></div>																				
                            </div>
                            <!--end: Wizard Nav-->
                            <!--begin: Wizard Body-->
                            <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                <div class="col-xl-20 col-xxl-12">
                                    <!--begin: Wizard Form-->
                                    <form class="form" id="kt_form" action="{{ route('koor-pokja.inbox.pembatalan-keppres-jabatan-ns.store') }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content" data-wizard-state="current">
                                            <h4 class="mb-10 font-weight-bold text-dark">Keppres</h4>
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">No. Keppres <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="no_keppres" name="no_keppres" value="{{old('no_keppres')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Keppres <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_keppres" name="tanggal_keppres" data-toggle="datetimepicker" data-target="#tanggal_keppres" placeholder="Pilih Tanggal" value="{{old('tanggal_keppres')}}" autocomplete="off" required/>
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
                                                <label class="col-form-label col-lg-3 col-sm-12">Periode <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-4 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" name="masa_jabatan_start" onkeyup="calculate_date()" data-toggle="datetimepicker" data-target="#masa_jabatan_start" placeholder="Select Date First" id="masa_jabatan_start" value="{{ old('masa_jabatan_start') }}"/>
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
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" name="masa_jabatan_end" data-toggle="datetimepicker" data-target="#masa_jabatan_end" placeholder="Select Date Last" id="masa_jabatan_end" value="{{ old('masa_jabatan_end') }}"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->

                                            <div class="form-group row" id="hahaha">
                                                <label class="col-form-label col-lg-3 col-sm-12">Masa Jabatan</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="col-form-label col-lg-3 col-sm-12">
                                                        <p id="masa"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!--end: Wizard Step 1-->

                                        <!--begin: Wizard Step 2-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">TMT <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="tmt" name="tmt" value="{{old('tmt')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row" id="kurang_enam">
                                                <label class="col-form-label col-lg-3 col-sm-12">6 Bulan Sebelum Berakhir Masa Jabatan</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="col-form-label col-lg-3 col-sm-12">
                                                        <p id="enam_bulan"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Hak keuangan dan Fasilitas <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="hak_keuangan" name="hak_keuangan" value="{{old('hak_keuangan')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal pelantikan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_pelantikan" name="tanggal_pelantikan" data-toggle="datetimepicker" data-target="#tanggal_pelantikan" placeholder="Pilih Tanggal" value="{{old('tanggal_pelantikan')}}" autocomplete="off" required/>
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
                                                <label class="col-form-label col-lg-3 col-sm-12">Yang Melantik <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="yang_melantik" name="yang_melantik" value="{{old('yang_melantik')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload BA Pelantikan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_ba_pelantikan" name="file_ba_pelantikan[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_5">
                                                        <div class="dropzone-panel mb-lg-0 mb-2">
                                                            <a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm">Attach files</a>
                                                            <a class="dropzone-upload btn btn-light-primary font-weight-bold btn-sm">Upload All</a>
                                                            <a class="dropzone-remove-all btn btn-light-primary font-weight-bold btn-sm">Remove All</a>
                                                        </div>
                                                        <div class="dropzone-items">
                                                            <div class="dropzone-item" style="display:none">
                                                                <div class="dropzone-file">
                                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                                        <span data-dz-name="">some_image_file_name.jpg</span>
                                                                        <strong>(<span data-dz-size="">340kb</span>)</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-progress">
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-toolbar">
                                                                    <span class="dropzone-start">
                                                                        <i class="flaticon2-arrow"></i>
                                                                    </span>
                                                                    <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                    <span class="dropzone-delete" data-dz-remove="">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Sumpah Jabatan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_sumpah_jabatan" name="file_sumpah_jabatan[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_5">
                                                        <div class="dropzone-panel mb-lg-0 mb-2">
                                                            <a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm">Attach files</a>
                                                            <a class="dropzone-upload btn btn-light-primary font-weight-bold btn-sm">Upload All</a>
                                                            <a class="dropzone-remove-all btn btn-light-primary font-weight-bold btn-sm">Remove All</a>
                                                        </div>
                                                        <div class="dropzone-items">
                                                            <div class="dropzone-item" style="display:none">
                                                                <div class="dropzone-file">
                                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                                        <span data-dz-name="">some_image_file_name.jpg</span>
                                                                        <strong>(<span data-dz-size="">340kb</span>)</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-progress">
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-toolbar">
                                                                    <span class="dropzone-start">
                                                                        <i class="flaticon2-arrow"></i>
                                                                    </span>
                                                                    <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                    <span class="dropzone-delete" data-dz-remove="">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_ba_pelantikan" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File BA Pelantikan</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_sumpah_jabatan" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Sumpah Jabatan</div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--end: Wizard Step 2-->

                                        <!--start: Wizard Actions-->
                                        <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Sebelumnya</button>
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
                        <a href="{{ route('koor-pokja.inbox.lns.index') }}"type="button" class="btn btn-light-danger font-weight-bold">Batalkan</a>
                    </div>
                </div>
            </div>
            <!--end: Wizard-->
        </div>
    </div>
				
@endsection

{{-- Styles Section --}}
@section('styles')
<style>
    td {  
        background-color: #86dcec;    
        
    }
</style>
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script>
        $(document).ready(function () {
            $("#file_ba_pelantikan").on("change", function () {
                if ($('#file_ba_pelantikan')[0].files.length != 0) {
                    $("#checked_file_ba_pelantikan").attr('checked', true);
                } else {
                    $("#checked_file_ba_pelantikan").attr('checked',false);
                }
            });

            $("#file_sumpah_jabatan").on("change", function () {
                if ($('#file_sumpah_jabatan')[0].files.length != 0) {
                    $("#checked_file_sumpah_jabatan").attr('checked', true);
                } else {
                    $("#checked_file_sumpah_jabatan").attr('checked',false);
                }
            });

        });

        $('.my-datepicker').datetimepicker({
            useCurrent:false,
            format: 'DD/MMM/YYYY'
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

        $('#hahaha').hide();
        $("#masa_jabatan_end").on('change.datetimepicker', function(e) {
            if (e.date == null) {
            $('#hahaha').hide();
            } else {
            $('#hahaha').show();
            }
        });
        
        $('#kurang_enam').hide();
        $("#masa_jabatan_end").on('change.datetimepicker', function(e) {
            if (e.date == null) {
            $('#kurang_enam').hide();
            } else {
            $('#kurang_enam').show();
            }
        });

        $("#tanggal_keppres").on('change.datetimepicker', function(e) {
            var data = e.date.format('DD/MMM/YYYY');
            document.getElementById("tmt").value = data;
        });


        $('#masa_jabatan_start, #masa_jabatan_end').on('change.datetimepicker', function(e) {
            if(e.date){
                var min_date = renewDate('min', e.date);
                applyTimePicker('min', '#masa_jabatan_end', min_date);
            }
            var date_start = new Date(document.getElementById("masa_jabatan_start").value);
            var date_start_day = date_start.getDate();
            var date_start_month = date_start.getMonth();
            var date_start_year = date_start.getFullYear();

            var date_end = new Date(document.getElementById("masa_jabatan_end").value);
            var date_end_day = date_end.getDate();
            var date_end_month = date_end.getMonth();
            var date_end_year = date_end.getFullYear();
            
            var calculated_date = 0;
            if(date_end_month > date_start_month) 
            {
                calculated_date = date_end_year - date_start_year;
            }
            else
            { 
                calculated_date = date_end_year - date_start_year;
            }


            var out_value = calculated_date;
            document.getElementById("masa").innerHTML = out_value + ' Tahun';
            getdatadate(date_end);

        });

        function getdatadate(date){
            date.setMonth(date.getMonth() - 6);
            console.log('hahaha', date);
            document.getElementById("enam_bulan").innerHTML =  moment(date).format("DD/MMM/YYYY") ;
        }

        function confirmation(){
            if(confirm('are you sure?')){
                document.getElementById('kt_form').submit();
            }else{
                return false;
            }   
        }

        $("#file_ba_pelantikan").on("change", function() {
    if ($("#file_ba_pelantikan")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_ba_pelantikan').val('');
    }
    });

    $("#file_sumpah_jabatan").on("change", function() {
    if ($("#file_sumpah_jabatan")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_sumpah_jabatan').val('');
    }
    });

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
    <script src="{{ asset('js/pages/custom/wizard/wizard-3.js') }}"></script>
    <script src="{{ asset('js/pages/crud/file-upload/dropzonejs.js') }}"></script>
    <script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection