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
                            <h3 class="card-label">Permasalahan Kepegawaian Lainnya
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
                                    <form class="form" id="kt_form" action="{{ route('pic.administrasi.pemberhentian.permasalahan-kepegawaian-lainnya.store') }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content" data-wizard-state="current">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Surat Usulan</h4>
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat usulan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_surat_usulan" name="tanggal_surat_usulan" data-toggle="datetimepicker" data-target="#tanggal_surat_usulan" placeholder="Pilih Tanggal" value="{{old('tanggal_surat_usulan')}}" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">No. Surat Usulan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="no_surat_usulan" name="no_surat_usulan" value="{{old('no_surat_usulan')}}" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jabatan Yang Menandatangani <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text"class="form-control" id="jabatan_menandatangani" name="jabatan_menandatangani" value="{{old('jabatan_menandatangani')}}" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Perihal <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <textarea type="text" class="form-control" id="perihal" name="perihal" value="{{old('perihal')}}" autocomplete="off" require></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Surat Usulan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_data_usulan" name="file_data_usulan[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
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
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Data pendukung lainnya</label>
                                                <div class="col-lg-9">
                                                    <input id="file_data_pendukung_lainnya" name="file_data_pendukung_lainnya[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    
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

                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data ASN</h4>
                                            
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Nama <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama')}}" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Lahir <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_lahir" name="tanggal_lahir" data-toggle="datetimepicker" data-target="#tanggal_lahir" placeholder="Pilih Tanggal" value="{{old('tanggal_lahir')}}" autocomplete="off" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Pangkat (Gol/Ruang) Terakhir <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control select2" style="width: 230px;" id="pangkat_terakhir" name="pangkat_terakhir">
                                                        <option value="">Choose</option>
                                                        @foreach ($pangkats as $pangkat)
                                                            <option value="{{$pangkat->id}}" @if (old("pangkat_terakhir") == $pangkat->id) selected="selected" @endif>{{$pangkat->name}} ({{$pangkat->golongan}}/{{$pangkat->ruang}})</option>
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
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jabatan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{old('jabatan')}}" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Instanasi Induk <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <textarea type="text" class="form-control" id="instansi_induk" name="instansi_induk" value="{{old('instansi_induk')}}" autocomplete="off" require></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Pendidikan Terakhir <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control select2" style="width: 230px;" id="pendidikan_terakhir" name="pendidikan_terakhir">
                                                        <option value="">Choose</option>
                                                        @foreach ($pendidikans as $pendidikan_terakhir)
                                                            <option value="{{$pendidikan_terakhir->id}}">{{$pendidikan_terakhir->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12"></label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <div style="margin-bottom:10px;">
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                        <input type="checkbox" id="checked_file_data_usulan" disabled/>
                                                        <span></span><div style="margin-left: 10px;">File Surat Usulan</div>
                                                    </label>
                                                </div>
                                                <div style="margin-bottom:10px;">
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                        <input type="checkbox" id="checked_file_data_pendukung_lainnya" disabled/>
                                                        <span></span><div style="margin-left: 10px;">File Data pendukung lainnya</div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!--begin: Wizard Step 1-->
                                        <!-- <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Keppres</h4>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">No. Keppres <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="no_keppres" name="no_keppres" value="{{old('no_keppres')}}" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Keppres <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_keppres" name="tanggal_keppres" data-toggle="datetimepicker" data-target="#tanggal_keppres" placeholder="Pilih Tanggal" value="{{old('tanggal_keppres')}}" autocomplete="off" />
                                                        <div class="input-group-append">
                                                            <span class="input-g    roup-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Masa Jabatan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-4 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" name="masa_jabatan_start" data-toggle="datetimepicker" data-target="#masa_jabatan_start" placeholder="Select Date First" id="masa_jabatan_start" value="{{ old('masa_jabatan_start') }}" autocomplete="off" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <span class="form-text text-muted">Please input the date from start.</span>
                                                </div>
                                                <div>
                                                    <label class="col-form-label">s/d. <a style="color: #FF0000;">*</a></label>
                                                </div>
                                                <div class="col-lg-4 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" name="masa_jabatan_end" data-toggle="datetimepicker" data-target="#masa_jabatan_end" placeholder="Select Date Last" id="masa_jabatan_end" value="{{ old('masa_jabatan_end') }}" autocomplete="off" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!--end: Wizard Step 1-->

                                        <!--begin: Wizard Step 2-->
                                        <!-- <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">TMT <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="tmt" name="tmt" value="{{old('tmt')}}" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Hak keuangan dan Fasilitas <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="hak_keuangan" name="hak_keuangan" value="{{old('hak_keuangan')}}" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal pelantikan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_pelantikan" name="tanggal_pelantikan" data-toggle="datetimepicker" data-target="#tanggal_pelantikan" placeholder="Pilih Tanggal" value="{{old('tanggal_pelantikan')}}" autocomplete="off" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Yang Melantik <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="yang_melantik" name="yang_melantik" value="{{old('yang_melantik')}}" autocomplete="off" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload BA Pelantikan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_ba_pelantikan" name="file_ba_pelantikan[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload Sumpah Jabatan <a style="color: #FF0000;">*</a></label>
                                                <div class="col-lg-9">
                                                    <input id="file_sumpah_jabatan" name="file_sumpah_jabatan[]" accept=".jpg,.jpeg,.png,.pdf" type="file" class="file" data-show-preview="false" multiple/>
                                                    <span class="form-text text-muted">Format file harus berbentuk jpg, png, jpeg, pdf, batas size file 1 MB dan file tidak boleh lebih dari 5 file</span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!--end: Wizard Step 2-->

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
                        <a href="{{ route('pic.administrasi.pemberhentian.index') }}"type="button" class="btn btn-light-danger font-weight-bold">Batalkan</a>
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

        $(document).ready(function () {
            $("#file_data_usulan").on("change", function () {
                if ($('#file_data_usulan')[0].files.length != 0) {
                    $("#checked_file_data_usulan").attr('checked', true);
                } else {
                    $("#checked_file_data_usulan").attr('checked',false);
                }
            });

            $("#file_data_pendukung_lainnya").on("change", function () {
                if ($('#file_data_pendukung_lainnya')[0].files.length != 0) {
                    $("#checked_file_data_pendukung_lainnya").attr('checked', true);
                } else {
                    $("#checked_file_data_pendukung_lainnya").attr('checked',false);
                }
            });

        });

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

        function confirmation(){
            if(confirm('are you sure?')){
                document.getElementById('kt_form').submit();
            }else{
                return false;
            }   
        }

        $("#file_data_usulan").on("change", function() {
    if ($("#file_data_usulan")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_data_usulan').val('');
    }
    });

        $("#file_data_pendukung_lainnya").on("change", function() {
    if ($("#file_data_pendukung_lainnya")[0].files.length > 5) {
        alert('Hanya boleh upload 5 file!.');
        $('#file_data_pendukung_lainnya').val('');
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
    <script src="{{ asset('js/hide.js') }}"></script> 
    <script src="{{ asset('js/pages/crud/file-upload/dropzonejs.js') }}"></script>
    <script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection