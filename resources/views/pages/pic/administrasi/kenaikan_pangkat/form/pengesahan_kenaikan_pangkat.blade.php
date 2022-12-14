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
                            <h3 class="card-label">Petikan Yang Hilang/Rusak
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
                                    <form class="form" id="kt_form" action="{{ route('pic.administrasi.kenaikan-pangkat.pengesahan-kenaikan-pangkat.store') }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content" data-wizard-state="current">
                                            <h4 class="mb-10 font-weight-bold text-dark">Surat Permohonan</h4>
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat Permohonan  <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_surat_permohonan" name="tanggal_surat_permohonan" data-toggle="datetimepicker" data-target="#tanggal_surat_permohonan" placeholder="Pilih Tanggal" value="{{old('tanggal_surat_permohonan')}}" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">No. Surat Permohonan  <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="no_surat_permohonan" name="no_surat_permohonan" value="{{old('no_surat_permohonan')}}" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jabatan Yang Menandatangani  <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text"class="form-control" id="jabatan_menandatangani" name="jabatan_menandatangani" value="{{old('jabatan_menandatangani')}}" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Opsi</label>
                                                <div class="col-lg-9">
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                        <input type="radio" id="opsi" name="opsi" onclick="javascript:yesnoCheck();" value="1"/>
                                                        <span></span><div style="margin-left: 10px;">Hilang</div>
                                                    </label>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                        <input type="radio" id="opsi" name="opsi" onclick="javascript:yesnoCheck();" value="2"/>
                                                        <span></span><div style="margin-left: 10px;">Rusak</div>
                                                    </label>
                                                </div>
                                            </div>

                                            <div id="hilang" style="display:none">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload Surat Keterangan Kehilangan Dari Polisi <a style="color: #FF0000;">*</a></label>
                                                    <div class="col-lg-9">
                                                        <input id="file_surat_kehilangan" name="file_surat_kehilangan[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                        
                                                        <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="rusak" style="display:none">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload Fotokopi SK Yang Hilang/Rusak <a style="color: #FF0000;">*</a></label>
                                                    <div class="col-lg-9">
                                                        <input id="file_fotokopi_sk_hilang" name="file_fotokopi_sk_hilang[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                        
                                                        <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Surat Permohonan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_surat_permohonan" name="file_surat_permohonan[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_surat_kehilangan" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Surat Keterangan Kehilangan Dari Polisi</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_fotokopi_sk_hilang" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Fotokopi SK Yang Hilang/Rusak</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_surat_permohonan" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Surat Permohonan</div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                
                                        </div>

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
                        <a href="{{ route('pic.administrasi.kenaikan-pangkat.index') }}"type="button" class="btn btn-light-danger font-weight-bold">Batalkan</a>
                    </div>
                </div>
            </div>
            <!--end: Wizard-->
        </div>
    </div>

    <input type="hidden" id="url-api-fetch-data-bkn" name="url-api-fetch-data-bkn" value="{{ route('api.bkn.fetch-data') }}"/>
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
    <script id="tambah_catatan" type="text/x-handlebars-template">
        <div class="item_data">
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label>
                <div class="col-lg-5 col-md-9 col-sm-12">
                    <div class="input-group date">
                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_catatan" name="tanggal_catatan[]" data-toggle="datetimepicker" placeholder="Pilih Tanggal" autocomplete="off" />
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Catatan</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="input-group date">
                        <textarea class="form-control" rows="3" id="catatan" name="catatan[]"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <!-- <button type="button" class="remove_detail btn btn-sm font-weight-bolder btn-light-primar">Hapus</button> -->
                    <a style="margin-top: 10px;" class="remove_detail btn btn-sm font-weight-bolder btn-light-danger">
                        <i class="la la-trash-o"></i>Hapus Catatan
                    </a>
                </div>
            </div>
        </div>
    </script>
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

            $('.select2').select2({
                placeholder: "Choose..."
            })
        }

        $("#file_surat_kehilangan").on("change", function() {
            if ($("#file_surat_kehilangan")[0].files.length > 5) {
                alert('Hanya boleh upload 5 file!.');
                $('#file_surat_kehilangan').val('');
            }
        });

        $("#file_fotokopi_sk_hilang").on("change", function() {
            if ($("#file_fotokopi_sk_hilang")[0].files.length > 5) {
                alert('Hanya boleh upload 5 file!.');
                $('#file_fotokopi_sk_hilang').val('');
            }
        });

        $("#file_surat_permohonan").on("change", function() {
            if ($("#file_surat_permohonan")[0].files.length > 5) {
                alert('Hanya boleh upload 5 file!.');
                $('#file_surat_permohonan').val('');
            }
        });

        $('#otherFieldDiv').hide();

        function yesnoCheck() {
            if (document.getElementById('opsi').checked) {
                document.getElementById('hilang').style.display = 'block';
        }
            else document.getElementById('hilang').style.display = 'none';
                document.getElementById('rusak').style.display = 'block';
        }


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
            var template = '<div class="item_data"><div class="form-group row"><label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label><div class="col-lg-5 col-md-9 col-sm-12"><div class="input-group date"><input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_catatan_' + id +'" name="tanggal_catatan[]" data-toggle="datetimepicker" data-target="#tanggal_catatan_'+ id +'" placeholder="Pilih Tanggal" autocomplete="off" /><div class="input-group-append"><span class="input-group-text"><i class="la la-calendar"></i></span></div></div></div></div><div class="form-group row"><label class="col-form-label col-lg-3 col-sm-12">Catatan</label><div class="col-lg-9 col-md-9 col-sm-12"><div class="input-group date"><textarea class="form-control" rows="3" id="catatan" name="catatan[]" ></textarea></div></div></div><div class="form-group row"><div class="col-lg-9 col-md-9 col-sm-12"><!-- <button type="button" class="remove_detail btn btn-sm font-weight-bolder btn-light-primar">Hapus</button> --><a style="margin-top: 10px;" class="remove_detail btn btn-sm font-weight-bolder btn-light-danger"><i class="la la-trash-o"></i>Hapus Catatan</a></div></div></div>'
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

        $(document).ready(function () {
        $("#file_surat_kehilangan").on("change", function () {

        if ($('#file_surat_kehilangan')[0].files.length != 0) {
            $("#checked_file_surat_kehilangan").attr('checked', true);
        } else {
            $("#checked_file_surat_kehilangan").attr('checked',false);
        }
        });

        $("#file_fotokopi_sk_hilang").on("change", function () {

        if ($('#file_fotokopi_sk_hilang')[0].files.length != 0) {
            $("#checked_file_fotokopi_sk_hilang").attr('checked', true);
        } else {
            $("#checked_file_fotokopi_sk_hilang").attr('checked',false);
        }
        });

        $("#file_surat_permohonan").on("change", function () {

        if ($('#file_surat_permohonan')[0].files.length != 0) {
            $("#checked_file_surat_permohonan").attr('checked', true);
        } else {
            $("#checked_file_surat_permohonan").attr('checked',false);
        }
        });
        
    });

    </script>
    <script>
        $(function(){
            $('#kt_form').validate({
                errorClass:"error-msg",
                errorElement:"p",
                rules:{
                    tanggal_surat_usulan: 'required',
                    no_surat_usulan: 'required',
                    jabatan_menandatangani: 'required',
                    file_data_usulan: {
                        extenstion: "pdf"
                    },

                    nip: 'required',
                    nama: 'required',
                    tempat_lahir: 'required',
                    tanggal_lahir: 'required'
                    pendidikan_terakhir: 'required',
                    instansi: 'required',
                    file_data_asn: {
                        extenstion: "pdf"
                    },
                    pangkat_gol: 'required',
                    tmt_gol: 'required',
                    tmt_cpns: 'required',
                    masa_kerja_gol_tahun: 'required',
                    masa_kerja_gol_bulan: 'required',
                    file_nota_usulan: {
                        extenstion: "pdf"
                    },

                    file_data_pak: {
                        extenstion: "pdf"
                    },
                    file_klarifikasi_pak: {
                        extenstion: "pdf"
                    },

                    jabatan: 'required',
                    no_keppress_jabatan: 'required',
                    file_jabatan: {
                        extenstion: "pdf"
                    },
                    file_pengambilan_sumpah: {
                        extenstion: "pdf"
                    },
                    tmt_jabatan: 'required',
                    unit_kerja: 'required',

                    pangkat_gol_baru: 'required',
                    tmt_gol_baru: 'required',
                    masa_kerja_gol_tahun_baru: 'required',
                    masa_kerja_gol_bulan_baru: 'required',
                    periode_kenaikan: 'required',
                    file_pendukung: {
                        extenstion: "pdf"
                    },
                    tanggal_catatan: 'required',
                    catatan: 'required'

                },
                submitHandler:function(form){
                    form.submit();
                }
            })
        })

       

    </script>
    <script src="{{ asset('js/pages/custom/wizard/wizard-3.js') }}"></script>
    <script src="{{ asset('js/hide.js') }}"></script>
    <script src="{{ asset('js/pages/crud/file-upload/dropzonejs.js') }}"></script>
    <script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/bkn.js') }}"></script> 
@endsection
