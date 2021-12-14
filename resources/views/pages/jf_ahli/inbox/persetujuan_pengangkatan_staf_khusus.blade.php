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
                            <h3 class="card-label">Pengangkatan Pejabat Fungsional Keahlian Utama
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
                                <div data-wizard-type="step"></div>																
                            </div>
                            <!--end: Wizard Nav-->
                            <!--begin: Wizard Body-->
                            <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                <div class="col-xl-20 col-xxl-12">
                                    <!--begin: Wizard Form-->
                                    <form class="form" id="kt_form" action="{{ route('jf-ahli.inbox.persetujuan-pengangkatan-staf-khusus.store') }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;"  data-wizard-type="step-content" data-wizard-state="current">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Surat</h4>
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat Pengantar <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_surat_pengantar" name="tanggal_surat_pengantar" data-toggle="datetimepicker" data-target="#tanggal_surat_pengantar" placeholder="Pilih Tanggal" value="{{old('tanggal_surat_pengantar')}}" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">No. Surat Pengantar <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="no_surat_pengantar" name="no_surat_pengantar" value="{{old('no_surat_pengantar')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Surat Pengantar <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_surat_pengantar" name="file_surat_pengantar[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_4">
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
                                            <!--end::Input-->
                                            
                                        </div>
                                        <!--end: Wizard Step 1-->

                                        <!--begin: Wizard Step 2-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jabatan lainnya yang akan diisi <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="jabatan_lainnya" name="jabatan_lainnya" value="{{old('jabatan_lainnya')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Formasi <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="formasi" name="formasi" value="{{old('formasi')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Formasi Terisi <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-4 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="formasi_terisi_start" name="formasi_terisi_start" value="{{old('formasi_terisi_start')}}" autocomplete="off" required/>
                                                    </div>
                                                    <span class="form-text text-muted">Masks 5.</span>
                                                </div>
                                                <div>
                                                    <label class="col-form-label">Sisa Formasi <a style="color: #FF0000;">*</a></label>
                                                </div>
                                                <div class="col-lg-4 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="formasi_terisi_end" name="formasi_terisi_end" value="{{old('formasi_terisi_end')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Instansi <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text"  class="form-control" id="instansi" name="instansi" value="{{old('instansi')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Nama <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text"  class="form-control" id="nama" name="nama" value="{{old('nama')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jabatan Yang Akan di Angkat <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control select2" style="width: 230px;" id="jabatan" name="jabatan">
                                                        <option value="">Choose</option>
                                                        @foreach ($jabatans as $jabatan)
                                                            <option value="{{$jabatan->id}}" {{ old('jabatan') == $jabatan->id ? 'selected' : '' }}>{{$jabatan->nama}}</option>
                                                        @endforeach
                                                    </select>
                                                    <!-- <div class="input-group date">
                                                        <select class="custom-select form-control" id="seeAnotherField">
                                                            <option selected>pilih golongan</option>
                                                            <option value="1">Golongan 1</option>
                                                            <option value="2">Golongan 2</option>
                                                            <option value="3">Golongan 3</option>
                                                        </select>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <!--end::Input--><!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload DRH <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_dhr" name="file_dhr[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_4">
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
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Dokumen Lainnya <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_dukumen_lain_pengangkatan_jabatan_lain" name="file_dukumen_lain_pengangkatan_jabatan_lain[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_4">
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
                                            <!--end::Input-->
                                        </div>
                                        <!--end: Wizard Step 2-->

                                        <!--begin: Wizard Step 3-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Surat persetujuan Presiden</h4>
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">No Surat Persetujuan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="no_surat_persetujuan" name="no_surat_persetujuan" value="{{old('no_surat_persetujuan')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat Persetujuan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_surat_persetujuan" name="tanggal_surat_persetujuan" data-toggle="datetimepicker" data-target="#tanggal_surat_persetujuan" placeholder="Pilih Tanggal" value="{{old('tanggal_surat_persetujuan')}}" required/>
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
                                                <label class="col-form-label col-lg-3 col-sm-12">Kepada Sdr. Menteri <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                    <input type="text"  class="form-control" id="kepada_menteri" name="kepada_menteri" value="{{old('kepada_menteri')}}" autocomplete="off" required/>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Nama Staff Khusus Yang Disetujui <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text"  class="form-control" id="nama_staff_khusus" name="nama_staff_khusus" value="{{old('nama_staff_khusus')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_surat_pengantar" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Surat Pengantar</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_dhr" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File DRH</div>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom:10px;">
                                                        <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                            <input type="checkbox" id="checked_file_dukumen_lain_pengangkatan_jabatan_lain" disabled/>
                                                            <span></span><div style="margin-left: 10px;">File Dokumen Lainnya</div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 3-->

                                        <div class="d-flex justify-content-between mt-5 pt-10">
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
                        <a href="{{ route('jf-ahli.inbox.lns.index') }}"type="button" class="btn btn-light-danger font-weight-bold">Batalkan</a>
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
            $("#file_surat_pengantar").on("change", function () {
                if ($('#file_surat_pengantar')[0].files.length != 0) {
                    $("#checked_file_surat_pengantar").attr('checked', true);
                } else {
                    $("#checked_file_surat_pengantar").attr('checked',false);
                }
            });

            $("#file_dhr").on("change", function () {
                if ($('#file_dhr')[0].files.length != 0) {
                    $("#checked_file_dhr").attr('checked', true);
                } else {
                    $("#checked_file_dhr").attr('checked',false);
                }
            });

            $("#file_dukumen_lain_pengangkatan_jabatan_lain").on("change", function () {
                if ($('#file_dukumen_lain_pengangkatan_jabatan_lain')[0].files.length != 0) {
                    $("#checked_file_dukumen_lain_pengangkatan_jabatan_lain").attr('checked', true);
                } else {
                    $("#checked_file_dukumen_lain_pengangkatan_jabatan_lain").attr('checked',false);
                }
            });

        });


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

        function confirmation(){
            if(confirm('are you sure?')){
                document.getElementById('kt_form').submit();
            }else{
                return false;
            }   
        }

        $("#file_surat_pengantar").on("change", function() {
    if ($("#file_surat_pengantar")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_surat_pengantar').val('');
    }
    });

    $("#file_dhr").on("change", function() {
    if ($("#file_dhr")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_dhr').val('');
    }
    });

    $("#file_dukumen_lain_pengangkatan_jabatan_lain").on("change", function() {
    if ($("#file_dukumen_lain_pengangkatan_jabatan_lain")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_dukumen_lain_pengangkatan_jabatan_lain').val('');
    }
    });

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

                    jabatan_lainnya: 'required',
                    formasi: 'required',
                    formasi_terisi_start: 'required',
                    formasi_terisi_end: 'required',
                    instansi: 'required',
                    nama: 'required',
                    jabatan: 'required',
                    file_dhr: {
                        extenstion: "pdf"
                    },
                    file_dukumen_lain_pengangkatan_jabatan_lain: {
                        extenstion: "pdf"
                    },

                    no_surat_persetujuan: 'required',
                    tanggal_surat_persetujuan: 'required',
                    kepada_menteri: 'required',
                    nama_staff_khusus: 'required'


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