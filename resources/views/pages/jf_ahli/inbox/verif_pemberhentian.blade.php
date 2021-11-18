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
                            <h3 class="card-label">Verifikasi Pemberhentian {{Helper::defineJenisLayananBy($verifikasi->jenis_layanan)}}
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
                                            @if ($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" >
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Usulan</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat usulan</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="kt_datepicker_3_modal"  value="{{ $verifikasi->tanggal_surat_usulan }}" disabled/>
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
                                                            <input type="text" class="form-control" value="{{ $verifikasi->no_surat_usulan }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Pejabat yang Menandatangani</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->pejabat_menandatangani }}" disabled  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download file</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_data_usulan == null)
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
                                                                @foreach($file_data_usulans as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_data_usulan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_data_usulan_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
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
                                            </div>
                                            @endif
                                            <!--end: Wizard Step 1-->
                                            <!--begin: Wizard Step 2-->
                                            @if ($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data ASN</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">NIP</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->nip }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nama</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->nama }}" disabled  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal lahir</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tanggal_lahir }}" id="kt_datepicker_4_modal" disabled/>
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
                                                            <input type="text" class="form-control" value="{{ $verifikasi->pendidikan_terakhir }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Instansi</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->instansi }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Pangkat (Gol/Ruang) Baru</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            @foreach ($pangkats as $pangkat)
                                                                @if($verifikasi->pangkat_gol_baru == $pangkat->id)
                                                                <input type="text" class="form-control" value="{{$pangkat->name}}" disabled />
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT Gol/Ruang</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tmt_gol_baru }}" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload File</label>
                                                    <div class="col-lg-9">
                                                        <a style="color: blue;">file.pdf</a>
                                                    </div>
                                                </div> -->
                                            </div>
                                            @endif
                                            <!--end: Wizard Step 2-->

                                            @if ($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26')
                                                @if ($verifikasi->pangkat_gol_baru == '1')
                                                    @if ($verifikasi->nomor_pak != '')
                                                    <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Data PAK</h4>
                                                        <!--begin::Input-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Nomor PAK</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="{{ $verifikasi->nomor_pak }}"  disabled/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Input-->
                                                        <!--begin::Input-->
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Tanggal PAK</label>
                                                            <div class="col-lg-5 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="{{ $verifikasi->tanggal_pak }}" id="kt_datepicker_8_modal" disabled/>
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
                                                                    <input type="text" class="form-control" value="{{ $verifikasi->jumlah_angka_kredit }}" disabled />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Periode Penilaian</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    @foreach ($periodes as $periode)
                                                                        @if($verifikasi->periode_penilaian == $periode->id)
                                                                        <input type="text" class="form-control" value="{{$periode->name}}" disabled />
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Upload File</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                @if($verifikasi->file_data_pak == null)
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
                                                                        @foreach($file_data_paks as $file)
                                                                        <tr>
                                                                            <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                            <td><a id="d_file_data_pak" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_data_pak_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                                @endif
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
                                                    @endif
                                                    @if ($verifikasi->no_klarifikasi != '')
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
                                                                    <input type="text" class="form-control" value="{{ $verifikasi->no_klarifikasi }}" disabled />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Tanggal Klarifikasi</label>
                                                            <div class="col-lg-5 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="{{ $verifikasi->tanggal_klarifikasi }}" disabled/>
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
                                                                @if($verifikasi->file_klarifikasi_pak == null)
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
                                                                        @foreach($file_klarifikasi_paks as $file)
                                                                        <tr>
                                                                            <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                            <td><a id="d_file_klarifikasi_pak" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_klarifikasi_pak_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                                @endif
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
                                                    @endif
                                                @endif
                                            @endif

                                            <!--begin: Wizard Step 3-->
                                            @if ($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Pangkat Lama</h4>
                                                <!--begin::Select-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Pangkat Lama</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->pangkat_lama }}"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Gol. Ruang Lama</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->gol_ruang_lama }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT Lama</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tmt_lama }}" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                            @endif

                                            @if($verifikasi->jenis_layanan == '27')
                                                <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                    <h4 class="mb-10 font-weight-bold text-dark">Data Surat</h4>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat Pengantar</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi->tanggal_surat_pengantar }}"  disabled/>
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
                                                                <input type="text" class="form-control" value="{{ $verifikasi->no_surat_pengantar }}"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Upload Surat Pengantar</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            @if($verifikasi->file_surat_pengantar == null)
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
                                                </div>
                                            @endif

                                            @if($verifikasi->jenis_layanan == '27')
                                                <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                    <h4 class="mb-10 font-weight-bold text-dark">Data Keppres</h4>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">No. Keppres</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi->no_keppres }}"  disabled/>
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
                                                                <input type="text" class="form-control datetimepicker-input my-datepicker" value="{{ $verifikasi->tanggal_keppres }}" disabled/>
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
                                                            @if($verifikasi->file_keppres == null)
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
                                                </div>
                                            @endif

                                            @if($verifikasi->jenis_layanan == '27')
                                                <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                    <h4 class="mb-10 font-weight-bold text-dark">Ralat</h4>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Alasan Ralat</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi->alasan_ralat }}"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Upload Bukti Pendukung</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            @if($verifikasi->file_bukti_pendukung == null)
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
                                                </div>
                                            @endif

                                            <!--begin: Wizard Step 3-->
                                            @if ($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Terakhir</h4>
                                                <!--begin::Select-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->jabatan_terakhir }}"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Unit Kerja Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->unit_kerja_terakhir }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT Berhenti</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tmt_berhenti }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT Pensiun</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tmt_pensiun }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                            @endif
                                            
                                            @if ($verifikasi->jenis_layanan == '19' || $verifikasi->jenis_layanan == '20' || $verifikasi->jenis_layanan == '21' || $verifikasi->jenis_layanan == '22' || $verifikasi->jenis_layanan == '23' || $verifikasi->jenis_layanan == '24' || $verifikasi->jenis_layanan == '25' || $verifikasi->jenis_layanan == '26')
                                                @foreach ($notes as $catatans)
                                                    <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="{{ $catatans->tanggal_catatan }}"  disabled/>
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
                                                                    <input type="text" class="form-control" value="{{ $catatans->catatan }}"  disabled/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif

                                            @if ($verifikasi->jenis_layanan == '28' || $verifikasi->jenis_layanan == '29')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Keppres</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">No. Keppres</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->no_keppres }}"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal Keppres</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tanggal_keppres }}"  disabled/>
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
                                                            <input type="text" class="form-control" value="{{ $verifikasi->masa_jabatan_start }}"  disabled/>
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
                                                            <input type="text" class="form-control" value="{{ $verifikasi->masa_jabatan_end }}"  disabled/>
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
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tmt }}" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Hak keuangan dan Fasilitas</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->hak_keuangan }}" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal pelantikan</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tanggal_pelantikan }}" disabled/>
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
                                                            <input type="text" class="form-control" value="{{ $verifikasi->yang_melantik }}" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload BA Pelantikan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_ba_pelantikan == null)
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
                                                    <label class="col-lg-3 col-form-label">Upload Sumpah Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_sumpah_jabatan == null)
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
                                            </div>
                                            @endif

                                            <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
                                                <div class="mr-2">
                                                    <a href="{{ route('jf-ahli.inbox.usulan')}}" type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4">Kembali</a>
                                                </div>
                                                <div>
                                                    <table>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="{{ route('jf-ahli.inbox.pemberhentian.store_tolak') }}">
                                                                @csrf 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $verifikasi->id }}">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $verifikasi->jenis_layanan }}">
                                                                <button type="submit" class="btn btn-danger font-weight-bolder text-uppercase px-9 py-4" >
                                                                    Tolak
                                                                </button>
                                                            </form>
                                                        </th>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="{{ route('jf-ahli.inbox.pemberhentian.store_proses') }}">
                                                                @csrf 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $verifikasi->id }}">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $verifikasi->jenis_layanan }}">
                                                                <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" >
                                                                    Proses
                                                                </button>
                                                            </form>
                                                        </th>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="{{ route('jf-ahli.inbox.pemberhentian.store_pending') }}">
                                                                @csrf 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $verifikasi->id }}">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $verifikasi->jenis_layanan }}">
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
        $(document).on('click', '#d_file_data_usulan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/data_usulan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_usulan').html(link);
            $('#file_name_file_data_usulan').text(file);

            $('#file_data_usulan_modal').modal('hide');
        })
        $(document).on('click', '#d_file_data_pak', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/data_pak/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_pak').html(link);
            $('#file_name_file_data_pak').text(file);

            $('#file_data_pak_modal').modal('hide');
        })
        $(document).on('click', '#d_file_klarifikasi_pak', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/pemberhentian_attachments/klarifikasi_pak/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
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
<script src="{{ asset('js/pages/custom/wizard/wizard-2.js') }}"></script>
<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection