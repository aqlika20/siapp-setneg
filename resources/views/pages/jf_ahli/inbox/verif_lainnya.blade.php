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
                            <h3 class="card-label">Verifikasi JF Lainnya {{Helper::defineJenisLayananBy($verifikasi_lainnya->jenis_layanan)}}
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

                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content">
                                                @if($verifikasi_lainnya->jenis_layanan == '10' || $verifikasi_lainnya->jenis_layanan == '11' || $verifikasi_lainnya->jenis_layanan == '12' || $verifikasi_lainnya->jenis_layanan == '14')
                                                    <h4 class="mb-10 font-weight-bold text-dark">Data Surat</h4>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat Pengantar</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->tanggal_surat_pengantar }}"  disabled/>
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
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->no_surat_pengantar }}"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Upload Surat Pengantar</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            @if($verifikasi_lainnya->file_surat_pengantar == null)
                                                            <h1> - </h1>
                                                            @else
                                                            <table>
                                                                <thead>
                                                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                        <th style="width: 170px">Nama File</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($file_surat_pengantars as $file)
                                                                    <tr>
                                                                        <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                        <td><a id="d_file_surat_pengantar" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_surat_pengantar_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            @endif
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
                                                @endif

                                                @if($verifikasi_lainnya->jenis_layanan == '12')
                                                    <h4 class="mb-10 font-weight-bold text-dark">Data Keppres</h4>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">No. Keppres</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->no_keppres }}"  disabled/>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Tanggal Keppres</label>
                                                        <div class="col-lg-5 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control datetimepicker-input my-datepicker" value="{{ $verifikasi_lainnya->tanggal_keppres }}" disabled/>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Upload Keppres</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            @if($verifikasi_lainnya->file_keppres == null)
                                                            <h1> - </h1>
                                                            @else
                                                            <table>
                                                                <thead>
                                                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                        <th style="width: 170px">Nama File</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($file_keppress as $file)
                                                                    <tr>
                                                                        <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                        <td><a id="d_file_keppres" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_keppres_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            @endif
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
                                                @endif

                                                @if( $verifikasi_lainnya->jenis_layanan == '10' || $verifikasi_lainnya->jenis_layanan == '11' || $verifikasi_lainnya->jenis_layanan == '14' )
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Jabatan lainnya yang akan diisi</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->jabatan_lainnya }}"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif

                                                @if($verifikasi_lainnya->jenis_layanan == '14')
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Formasi</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->formasi }}" disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Formasi Terisi</label>
                                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->formasi_terisi_start }}" disabled/>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <label class="col-form-label">Sisa Formasi</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->formasi_terisi_end }}" disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Instansi</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->instansi }}" disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Nama</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->nama }}" disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Jabatan yang akan di angkat</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                @foreach ($jabatans as $jabatan)
                                                                    @if($verifikasi_lainnya->jabatan_angkat == $jabatan->id)
                                                                    <input type="text" class="form-control" value="{{$jabatan->nama}}" disabled />
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Upload DRH</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            @if($verifikasi_lainnya->file_dhr == null)
                                                            <h1> - </h1>
                                                            @else
                                                            <table>
                                                                <thead>
                                                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                        <th style="width: 170px">Nama File</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($file_dhrs as $file)
                                                                    <tr>
                                                                        <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                        <td><a id="d_file_dhr" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_dhr_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="file_dhr_modal">
                                                        <div class="modal-dialog" >
                                                            <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_dhr"></h4>
                                                                </div>
                                                                <p id="file_dhr"></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Upload Dokumen Lainnya</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            @if($verifikasi_lainnya->file_dukumen_lain_pengangkatan_lainnya == null)
                                                            <h1> - </h1>
                                                            @else
                                                            <table>
                                                                <thead>
                                                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                        <th style="width: 170px">Nama File</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($file_dukumen_lain_pengangkatan_lainnyas as $file)
                                                                    <tr>
                                                                        <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                        <td><a id="d_file_dukumen_lain_pengangkatan_lainnya" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_dukumen_lain_pengangkatan_lainnya_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="file_dukumen_lain_pengangkatan_lainnya_modal">
                                                        <div class="modal-dialog" >
                                                            <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_dukumen_lain_pengangkatan_lainnya"></h4>
                                                                </div>
                                                                <p id="file_dukumen_lain_pengangkatan_lainnya"></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h4 class="mb-10 font-weight-bold text-dark">Surat persetujuan Presiden</h4>
                                                    <!--begin::Input-->
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">No Surat Persetujuan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->no_surat_persetujuan }}" disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Input-->
                                                    <!--begin::Input-->
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat Persetujuan</label>
                                                        <div class="col-lg-5 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control datetimepicker-input my-datepicker" value="{{ $verifikasi_lainnya->tanggal_surat_persetujuan }}" disabled/>
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
                                                        <label class="col-form-label col-lg-3 col-sm-12">Kepada Sdr. Menteri</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi_lainnya->kepada_menteri }}" disabled />

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Input-->
                                                    <!--begin::Input-->
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Nama Staff Khusus Yang Disetujui</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->	nama_staff_khusus }}" disabled />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Input-->
                                                @endif
                                                
                                                @if($verifikasi_lainnya->jenis_layanan == '10' || $verifikasi_lainnya->jenis_layanan == '11')
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Unsur</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                @foreach ($unsurs as $unsur)
                                                                    @if($verifikasi_lainnya->unsur == $unsur->id)
                                                                    <input type="text" class="form-control" value="{{$unsur->nama}}" disabled />
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">NIP</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->nip }}"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Nama</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->nama }}"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Tanggal Keppres</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->tanggal_keppres }}"  disabled/>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Instansi</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->instansi }}"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if($verifikasi_lainnya->jenis_layanan == '10')
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Jabatan yang akan di angkat</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                @foreach ($jabatans as $jabatan)
                                                                    @if($verifikasi_lainnya->jabatan_angkat == $jabatan->id)
                                                                    <input type="text" class="form-control" value="{{$jabatan->nama}}" disabled />
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if($verifikasi_lainnya->jenis_layanan == '11')
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Jabatan yang akan di berhentikan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                @foreach ($jabatans as $jabatan)
                                                                    @if($verifikasi_lainnya->jabatan_berhenti == $jabatan->id)
                                                                    <input type="text" class="form-control" value="{{$jabatan->nama}}" disabled />
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Upload DRH</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            @if($verifikasi_lainnya->file_dhr == null)
                                                            <h1> - </h1>
                                                            @else
                                                            <table>
                                                                <thead>
                                                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                        <th style="width: 170px">Nama File</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($file_dhrs as $file)
                                                                    <tr>
                                                                        <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                        <td><a id="d_file_dhr" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_dhr_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="file_dhr_modal">
                                                        <div class="modal-dialog" >
                                                            <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_dhr"></h4>
                                                                </div>
                                                                <p id="file_dhr"></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Upload Dokumen Lainnya</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            @if($verifikasi_lainnya->file_dukumen_lain_pengangkatan_lainnya == null)
                                                            <h1> - </h1>
                                                            @else
                                                            <table>
                                                                <thead>
                                                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                        <th style="width: 170px">Nama File</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($file_dukumen_lain_pengangkatan_lainnyas as $file)
                                                                    <tr>
                                                                        <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                        <td><a id="d_file_dukumen_lain_pengangkatan_lainnya" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_dukumen_lain_pengangkatan_lainnya_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="file_dukumen_lain_pengangkatan_lainnya_modal">
                                                        <div class="modal-dialog" >
                                                            <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_dukumen_lain_pengangkatan_lainnya"></h4>
                                                                </div>
                                                                <p id="file_dukumen_lain_pengangkatan_lainnya"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif

                                                @if($verifikasi_lainnya->jenis_layanan == '12')
                                                <h4 class="mb-10 font-weight-bold text-dark">Ralat</h4>
                                                
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Alasan Ralat</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi_lainnya->alasan_ralat }}"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload Bukti Pendukung</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi_lainnya->file_bukti_pendukung == null)
                                                        <h1> - </h1>
                                                        @else
                                                        <table>
                                                            <thead>
                                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="width: 170px">Nama File</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($file_bukti_pendukungs as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_bukti_pendukung" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_bukti_pendukung_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
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
                                                @endif

                                                @if($verifikasi_lainnya->jenis_layanan == '13')
                                                    <h4 class="mb-10 font-weight-bold text-dark">Keppres</h4>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">No. Keppres</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->no_keppres }}"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Tanggal Keppres</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->tanggal_keppres }}"  disabled/>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Masa Jabatan</label>
                                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control datetimepicker-input my-datepicker" name="masa_jabatan_start" data-toggle="datetimepicker" data-target="#masa_jabatan_start" placeholder="Select Date First" id="masa_jabatan_start" value="{{ $verifikasi_lainnya->masa_jabatan_start }}" disabled/>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <label class="col-form-label">s/d.</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control datetimepicker-input my-datepicker" name="masa_jabatan_end" data-toggle="datetimepicker" data-target="#masa_jabatan_end" placeholder="Select Date Last" id="masa_jabatan_end" value="{{ $verifikasi_lainnya->masa_jabatan_end }}" disabled/>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif

                                                @if($verifikasi_lainnya->jenis_layanan == '13')
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">TMT</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->tmt }}"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Hak Keuangan dan Fasilitas</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->hak_keuangan }}"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Tanggal pelantikan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->	tanggal_pelantikan }}"  disabled/>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Yang Melantik</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi_lainnya->yang_melantik }}"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Upload BA Pelantikan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            @if($verifikasi_lainnya->file_ba_pelantikan == null)
                                                            <h1> - </h1>
                                                            @else
                                                            <table>
                                                                <thead>
                                                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                        <th style="width: 170px">Nama File</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($file_ba_pelantikans as $file)
                                                                    <tr>
                                                                        <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                        <td><a id="d_file_ba_pelantikan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_ba_pelantikan_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            @endif
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
                                                        <label class="col-form-label col-lg-3 col-sm-12">Upload Sumpah Jabatan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            @if($verifikasi_lainnya->file_sumpah_jabatan == null)
                                                            <h1> - </h1>
                                                            @else
                                                            <table>
                                                                <thead>
                                                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                        <th style="width: 170px">Nama File</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($file_sumpah_jabatans as $file)
                                                                    <tr>
                                                                        <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                        <td><a id="d_file_sumpah_jabatan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_sumpah_jabatan_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            @endif
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
                                                @endif

                                            </div>
                                            
                                            <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
                                                <div class="mr-2">
                                                    <a href="{{ route('jf-ahli.inbox.usulan')}}" type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4">Kembali</a>
                                                </div>
                                                <div>
                                                    <table>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="{{ route('jf-ahli.inbox.usulan.store_tolak_lainnya') }}">
                                                                @csrf 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $verifikasi->id }}">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $verifikasi->jenis_layanan }}">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_pengirim" value="{{ $verifikasi->id_pengirim }}">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_verifikator" value="{{ $currentUser->nip }}">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_nama_verifikator" value="{{ $currentUser->name }}">
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
                                                                                                        <input type="text" class="form-control" disabled value="{{ Helper::defineJenisLayananBy($verifikasi->jenis_layanan) }}"  />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row">
                                                                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Nama ASN / Nomor Surat</label>
                                                                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                                                                    <div class="input-group date">
                                                                                                        <input type="text" class="form-control" disabled value="{{ $verifikasi->nama }}"  />
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-4 col-md-9 col-sm-12">
                                                                                                    <div class="input-group date">
                                                                                                        <input type="text" class="form-control" disabled value="{{ $verifikasi->no_surat_usulan }}"  />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--end::Input-->
                                                                                            <!--begin::Input-->
                                                                                            <div class="form-group row">
                                                                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Proses Penolakan</label>
                                                                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                                                                    <div class="input-group date">
                                                                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_prosess_penolakan" name="tanggal_prosess_penolakan" autocomplete="off" data-toggle="datetimepicker" data-target="#tanggal_prosess_penolakan" placeholder="Pilih Tanggal" value="{{old('tanggal_prosess_penolakan')}}" require/>
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
                                                                                                        <textarea class="form-control" rows="3" id="alasan_penolakan" name="alasan_penolakan" autocomplete="off" value="{{old('alasan_penolakan')}}"></textarea>
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
                                                            <form method="POST" action="{{ route('jf-ahli.inbox.usulan.store_proses_lainnya') }}">
                                                                @csrf 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $verifikasi_lainnya->id }}">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $verifikasi_lainnya->jenis_layanan }}">
                                                                <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" >
                                                                    Proses
                                                                </button>
                                                            </form>
                                                        </th>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="{{ route('jf-ahli.inbox.usulan.store_pending_lainnya') }}">
                                                                @csrf 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $verifikasi_lainnya->id }}">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $verifikasi_lainnya->jenis_layanan }}">
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
    $(document).ready(function() {
        $(document).on('click', '#d_file_surat_pengantar', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Pengangkatan_Jabatan_Lainnya_Attachments/data_surat_pengantar/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_pengantar').html(link);
            $('#file_name_file_surat_pengantar').text(file);

            $('#file_surat_pengantar_modal').modal('hide');
        })
        $(document).on('click', '#d_file_dhr', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Pengangkatan_Jabatan_Lainnya_Attachments/data_dhr/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_dhr').html(link);
            $('#file_name_file_dhr').text(file);

            $('#file_dhr_modal').modal('hide');
        })
        $(document).on('click', '#d_file_dukumen_lain_pengangkatan_lainnya', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Pengangkatan_Jabatan_Lainnya_Attachments/data_dukumen_lain_pengangkatan_jabatan_lain/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_dukumen_lain_pengangkatan_lainnya').html(link);
            $('#file_name_file_dukumen_lain_pengangkatan_lainnya').text(file);

            $('#file_dukumen_lain_pengangkatan_lainnya_modal').modal('hide');
        })
        $(document).on('click', '#d_file_keppres', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Pengangkatan_Jabatan_Lainnya_Attachments/data_keppres/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_keppres').html(link);
            $('#file_name_file_keppres').text(file);

            $('#file_keppres_modal').modal('hide');
        })
        $(document).on('click', '#d_file_bukti_pendukung', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Pengangkatan_Jabatan_Lainnya_Attachments/data_bukti_pendukung/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_bukti_pendukung').html(link);
            $('#file_name_file_bukti_pendukung').text(file);

            $('#file_bukti_pendukung_modal').modal('hide');
        })
        $(document).on('click', '#d_file_sumpah_jabatan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Pengangkatan_Jabatan_Lainnya_Attachments/data_sumpah_jabatan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_sumpah_jabatan').html(link);
            $('#file_name_file_sumpah_jabatan').text(file);

            $('#file_sumpah_jabatan_modal').modal('hide');
        })
        $(document).on('click', '#d_file_ba_pelantikan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Pengangkatan_Jabatan_Lainnya_Attachments/data_ba_pelantikan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_ba_pelantikan').html(link);
            $('#file_name_file_ba_pelantikan').text(file);

            $('#file_ba_pelantikan_modal').modal('hide');
        })
    })
</script>
<script src="{{ asset('js/pages/custom/wizard/wizard-2.js') }}"></script>
<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection