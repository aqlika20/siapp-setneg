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
                            <h3 class="card-label">Perpindahan dari Jabatan fungsional Keahlian Utama
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
                                <div data-wizard-type="step"></div>	
                                <div data-wizard-type="step"></div>
                                <div data-wizard-type="step"></div>
                                <div data-wizard-type="step"></div>																					
                            </div>
                            <!--end: Wizard Nav-->
                            <!--begin: Wizard Body-->
                            <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                <div class="col-xl-20 col-xxl-12">
                                    <!--begin: Wizard Form-->
                                    <form class="form" id="kt_form" action="{{ route('pic.administrasi.surat-usulan.perpindahan-pejabat-fku.store') }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content" data-wizard-state="current">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Usulan</h4>
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat usulan</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_surat_usulan" name="tanggal_surat_usulan" data-toggle="datetimepicker" data-target="#tanggal_surat_usulan" placeholder="Pilih Tanggal" value="{{old('tanggal_surat_usulan')}}" required/>
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
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="no_surat_usulan" name="no_surat_usulan" value="{{old('no_surat_usulan')}}" autocomplete="off" onkeydown="return /[a-zA-Z0-9\s]+/i.test(event.key)" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jabatan Yang Menandatangani</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text"class="form-control" id="jabatan_menandatangani" name="jabatan_menandatangani" value="{{old('jabatan_menandatangani')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload/Download File</label>
                                                <div class="col-lg-9">
                                                    <input id="file_data_usulan" name="file_data_usulan[]" type="file" class="file" data-show-preview="false" multiple/>
                                                    
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
                                            
                                        </div>
                                        <!--end: Wizard Step 1-->
                                        <!--begin: Wizard Step 2-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data ASN</h4>
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">NIP</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="number" class="form-control" id="nip" name="nip" value="{{old('nip')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Nama</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tempat Lahir</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{old('tempat_lahir')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Lahir</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_lahir" name="tanggal_lahir" data-toggle="datetimepicker" data-target="#tanggal_lahir" placeholder="Pilih Tanggal" value="{{old('tanggal_lahir')}}" autocomplete="off" required/>
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
                                                <label class="col-form-label col-lg-3 col-sm-12">Pendidikan Terakhir</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" value="{{old('pendidikan_terakhir')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Instansi Induk</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="instansi_induk" name="instansi_induk" value="{{old('instansi_induk')}}" autocomplete="off" onkeydown="return /[a-zA-Z0-9\s]+/i.test(event.key)" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Instansi Pengusul</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="instansi_pengusul" name="instansi_pengusul" value="{{old('instansi_pengusul')}}" autocomplete="off" onkeydown="return /[a-zA-Z0-9\s]+/i.test(event.key)" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Pangkat (Gol/Ruang)</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control select2" style="width: 230px;" id="pangkat_gol" name="pangkat_gol">
                                                        <option value="">Choose</option>
                                                        @foreach ($pangkats as $pangkat)
                                                            <option value="{{$pangkat->id}}" {{ old('pangkat_gol') == $pangkat->id ? 'selected' : '' }}>{{$pangkat->golongan}} | {{$pangkat->ruang}}</option>
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
                                                <label class="col-form-label col-lg-3 col-sm-12">TMT Gol/Ruang</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tmt_gol" name="tmt_gol" data-toggle="datetimepicker" data-target="#tmt_gol" placeholder="Pilih Tanggal" value="{{old('tmt_gol')}}" autocomplete="off" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload File</label>
                                                <div class="col-lg-9">
                                                    <input id="file_data_asn" name="file_data_asn[]" type="file" class="file" data-show-preview="false" multiple/>
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
                                            <div  id="otherFieldDiv">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data PAK</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nomor PAK</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="nomor_pak" name="nomor_pak" value="{{old('nomor_pak')}}" autocomplete="off" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal PAK</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_pak" name="tanggal_pak" data-toggle="datetimepicker" data-target="#tanggal_pak" placeholder="Pilih Tanggal" value="{{old('tanggal_pak')}}" autocomplete="off" />
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
                                                            <input type="text" class="form-control" id="jumlah_angka_kredit" name="jumlah_angka_kredit" value="{{old('jumlah_angka_kredit')}}" autocomplete="off" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Periode Penilaian</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <select class="form-control select2" id="periode_penilaian" name="periode_penilaian">
                                                            <option value="">Choose</option>
                                                            @foreach ($periodes as $periode)
                                                                <option value="{{$periode->id}}" {{ old('periode_penilaian') == $periode->id ? 'selected' : '' }}>{{$periode->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <!-- <div class="input-group date">
                                                            <select class="custom-select form-control">
                                                                <option selected>pilih golongan</option>
                                                                <option value="1">Golongan 1</option>
                                                                <option value="2">Golongan 2</option>
                                                                <option value="3">Golongan 3</option>
                                                            </select>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload File</label>
                                                    <div class="col-lg-9">
                                                    <input id="file_data_pak" name="file_data_pak[]" type="file" class="file" data-show-preview="false" multiple/>
                                                        <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_7">
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
                                            </div>
                                        </div>
                                        
                                        <!--end: Wizard Step 2-->
                                        <!--begin: Wizard Step 3-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Lama</h4>
                                            <!--begin::Select-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jabatan</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="jabatan_lama" name="jabatan_lama" value="{{old('jabatan_lama')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">No. SK Jabatan</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="no_sk_jabatan_lama" name="no_sk_jabatan_lama" value="{{old('no_sk_jabatan_lama')}}" autocomplete="off" onkeydown="return /[a-zA-Z0-9\s]+/i.test(event.key)" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">TMT Jabatan</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tmt_jabatan_lama" name="tmt_jabatan_lama" data-toggle="datetimepicker" data-target="#tmt_jabatan_lama" placeholder="Pilih Tanggal" value="{{old('tmt_jabatan_lama')}}" autocomplete="off" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Unit Kerja</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="unit_kerja_lama" name="unit_kerja_lama" value="{{old('unit_kerja_lama')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload/Download File</label>
                                                <div class="col-lg-9">
                                                    <input id="file_data_jabatan_lama" name="file_data_jabatan_lama[]" type="file" class="file" data-show-preview="false" multiple required/>
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_11">
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
                                        </div>
                                        <!--end: Wizard Step 3-->
                                        <!--begin: Wizard Step 2-->
                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Baru</h4>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jabatan</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="jabatan_baru" name="jabatan_baru" value="{{old('jabatan_baru')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Unit Kerja</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="unit_kerja_baru" name="unit_kerja_baru" value="{{old('unit_kerja_baru')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload/Download File</label>
                                                <div class="col-lg-9">
                                                    <input id="file_data_jabatan_baru" name="file_data_jabatan_baru[]" type="file" class="file" data-show-preview="false" multiple required/>
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_11">
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
                                        </div>

                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Rekomendasi</h4>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Nomor Surat Rekomendasi</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="no_surat_rekomendasi" name="no_surat_rekomendasi" value="{{old('no_surat_rekomendasi')}}" autocomplete="off" onkeydown="return /[a-zA-Z0-9\s]+/i.test(event.key)" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tgl. Surat Rekomendasi</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                    <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_surat_rekomendasi" name="tanggal_surat_rekomendasi" data-toggle="datetimepicker" data-target="#tanggal_surat_rekomendasi" placeholder="Pilih Tanggal" value="{{old('tanggal_surat_rekomendasi')}}" autocomplete="off" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload/Download File</label>
                                                <div class="col-lg-9">
                                                    <input id="file_data_rekomendasi" name="file_data_rekomendasi[]" type="file" class="file" data-show-preview="false" multiple required/>
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_11">
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
                                                <label class="col-lg-3 col-form-label">Surat Pernyataan/Keterangan melaksanakan kegiatan Jabatan fungsional dalam 2 tahun terakhir</label>
                                                <div class="col-lg-9">
                                                    <input id="file_surat_pernyataan_rekomendasi" name="file_surat_pernyataan_rekomendasi[]" type="file" class="file" data-show-preview="false" multiple required/>
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_11">
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
                                        </div>

                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Data Formasi Jabatan</h4>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Jumlah</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{old('jumlah')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Terisi</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="terisi" name="terisi" value="{{old('terisi')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Sisa</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" id="sisa" name="sisa" value="{{old('sisa')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload/Download File</label>
                                                <div class="col-lg-9">
                                                    <input id="file_formasi_jabatan" name="file_formasi_jabatan[]" type="file" class="file" data-show-preview="false" multiple required/>
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_11">
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
                                        </div>

                                        <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">SKP 2 Tahun Terakhir</h4>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload/Download File</label>
                                                <div class="col-lg-9">
                                                    <input id="file_skp_2" name="file_skp_2[]" type="file" class="file" data-show-preview="false" multiple required/>
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_11">
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
                                                <label class="col-lg-3 col-form-label">Upload/Download File Data Dukungan Lainnya</label>
                                                <div class="col-lg-9">
                                                    <input id="file_skp_2_dukungan_lainnya" name="file_skp_2_dukungan_lainnya[]" type="file" class="file" data-show-preview="false" multiple required/>
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_11">
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

                                            <div id="kt_repeater_1">
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tambah Catatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <!-- <button type="button" class="add_more_item btn btn-sm font-weight-bolder btn-light-primar">Tambah</button> -->
                                                        <a class="add_more_item btn btn-sm font-weight-bolder btn-light-primary">
                                                            <i class="la la-plus"></i>Tambah
                                                        </a>
                                                    </div>
                                                </div>

                                                <div data-repeater-item class="form-group">
                                                    <div class="item_catatan">
                                                        <div class="item_data">
                                                            <div class="form-group row">
                                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label>
                                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                                    <div class="input-group date">
                                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_catatan" name="tanggal_catatan[]" data-toggle="datetimepicker" data-target="#tanggal_catatan" placeholder="Pilih Tanggal" autocomplete="off" required/>
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
                                                                        <textarea class="form-control" rows="3" id="catatan" name="catatan[]" ></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="ket" name="ket[]" value="1"/>
                                                                <span></span><div style="margin-left: 10px;">Surat Usulan Asli Ditandatangani PPK</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="ket" name="ket[]" value="2"/>
                                                                <span></span><div style="margin-left: 10px;">Nota Usulan asli yang dilengkapi dengan data formasi dan ditandatangani oleh PPK</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="ket" name="ket[]" value="3"/>
                                                                <span></span><div style="margin-left: 10px;">Sertifikat/tanda lulus/surat keterangan lulus uji kompetensi</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="ket" name="ket[]" value="4"/>
                                                                <span></span><div style="margin-left: 10px;">PAK asli 1 tahun terakhir</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="ket" name="ket[]" value="5"/>
                                                                <span></span><div style="margin-left: 10px;">Salinan sah SK jabatan terakhir</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="ket" name="ket[]" value="6"/>
                                                                <span></span><div style="margin-left: 10px;">Salinan sah SK Pangkat terakhir</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:30px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="ket" name="ket[]" value="7"/>
                                                                <span></span><div style="margin-left: 10px;">Salinan sah SKP dan Penilaian Prestasi Kerja 2 tahun terakhir</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                <input type="checkbox" id="ket" name="ket[]" value="8"/>
                                                                <span></span><div style="margin-left: 10px;">Semua persyaratan dan dokumen benar</div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Sebelumnya</button>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit" onclick="return confirmation();">Kirim Usulan</button>
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
                        <a href="{{ route('pic.administrasi.surat-usulan.index') }}"type="button" class="btn btn-light-danger font-weight-bold">Batalkan</a>
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
    <script id="tambah_catatan" type="text/x-handlebars-template">
        <div class="item_data">
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label>
                <div class="col-lg-5 col-md-9 col-sm-12">
                    <div class="input-group date">
                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_catatan" name="tanggal_catatan[]" data-toggle="datetimepicker" placeholder="Pilih Tanggal"  autocomplete="off" required/>
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
                        <textarea class="form-control" rows="3" id="catatan" name="catatan[]" ></textarea>
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
            var template = '<div class="item_data"><div class="form-group row"><label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label><div class="col-lg-5 col-md-9 col-sm-12"><div class="input-group date"><input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_catatan_' + id +'" name="tanggal_catatan[]" data-toggle="datetimepicker" data-target="#tanggal_catatan_'+ id +'" placeholder="Pilih Tanggal" autocomplete="off" required/><div class="input-group-append"><span class="input-group-text"><i class="la la-calendar"></i></span></div></div></div></div><div class="form-group row"><label class="col-form-label col-lg-3 col-sm-12">Catatan</label><div class="col-lg-9 col-md-9 col-sm-12"><div class="input-group date"><textarea class="form-control" rows="3" id="catatan" name="catatan[]" ></textarea></div></div></div><div class="form-group row"><div class="col-lg-9 col-md-9 col-sm-12"><!-- <button type="button" class="remove_detail btn btn-sm font-weight-bolder btn-light-primar">Hapus</button> --><a style="margin-top: 10px;" class="remove_detail btn btn-sm font-weight-bolder btn-light-danger"><i class="la la-trash-o"></i>Hapus Catatan</a></div></div></div>'
            $(this).parent().parent().parent().find(".item_catatan").append(template);
            id++;
            refreshDateTimePicker();
        });

        $(document).on('click','.remove_detail',function(event) {
            $(this).closest('.item_data').remove();
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
                    instansi_induk: 'required',
                    instansi_pengusul: 'required',
                    pangkat_gol: 'required',
                    tmt_gol: 'required',
                    file_data_asn: {
                        extenstion: "pdf"
                    },

                    jabatan_lama: 'required',
                    no_sk_jabatan_lama: 'required',
                    tmt_jabatan_lama: 'required',
                    unit_kerja_lama: 'required',
                    file_data_jabatan_lama: {
                        extenstion: "pdf"
                    },

                    jabatan_baru: 'required',
                    unit_kerja_baru: 'required',
                    file_data_jabatan_baru: {
                        extenstion: "pdf"
                    },

                    no_surat_rekomendasi: 'required',
                    tanggal_surat_rekomendasi: 'required',
                    file_data_rekomendasi: {
                        extenstion: "pdf"
                    },
                    file_surat_pernyataan_rekomendasi: {
                        extenstion: "pdf"
                    },

                    jumlah: 'required',
                    terisi: 'required',
                    sisa: 'required',
                    file_formasi_jabatan: {
                        extenstion: "pdf"
                    },

                    file_skp_2: {
                        extenstion: "pdf"
                    },
                    file_skp_2_dukungan_lainnya: {
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