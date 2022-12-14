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
                            <h3 class="card-label">Verifikasi JFKU {{Helper::defineJenisLayananBy($verifikasi->jenis_layanan)}}
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
                                            @if ($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '2' || $verifikasi->jenis_layanan == '3')
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
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan Yang Menandatangani</label>
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
                                                        @if($verifikasi->file_surat_usulan == null)
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
                                                            @foreach($file_surat_usulans as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_surat_usulan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_surat_usulan_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="file_surat_usulan_modal">
                                                <div class="modal-dialog" >
                                                    <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_surat_usulan"></h4>
                                                        </div>
                                                        <p id="file_surat_usulan"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            <!--end: Wizard Step 1-->
                                            <!--begin: Wizard Step 2-->
                                            @if ($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '2' || $verifikasi->jenis_layanan == '3')
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
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tempat Lahir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tempat_lahir }}" disabled />
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
                                                    <label class="col-form-label col-lg-3 col-sm-12">Instansi Induk</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->instansi_induk }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Instansi Pengusul</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->instansi_pengusul }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download file</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div> --}}
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Pangkat (Gol/Ruang)</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            @if($verifikasi->pangkat_gol == '1')
                                                            <input type="text" class="form-control" value="Juru Muda (I/A)" disabled />
                                                            @endif
                                                            @if($verifikasi->pangkat_gol == 2)
                                                            <input type="text" class="form-control" value="Juru Muda Tingkat 1 (I/B)" disabled />
                                                            @endif
                                                            @if($verifikasi->pangkat_gol == 3)
                                                            <input type="text" class="form-control" value="Juru (I/C)" disabled />
                                                            @endif
                                                            @if($verifikasi->pangkat_gol == 4)
                                                            <input type="text" class="form-control" value="Juru Tingakat 1 (I/D)" disabled />
                                                            @endif
                                                            @if($verifikasi->pangkat_gol == 5)
                                                            <input type="text" class="form-control" value="Pengatur Muda (II/A)" disabled />
                                                            @endif
                                                            @if($verifikasi->pangkat_gol == 6)
                                                            <input type="text" class="form-control" value="Pengatur Muda Tingkat I (II/B)" disabled />
                                                            @endif
                                                            @if($verifikasi->pangkat_gol == 7)
                                                            <input type="text" class="form-control" value="Pengatur (II/C)" disabled />
                                                            @endif
                                                            @if($verifikasi->pangkat_gol == 8)
                                                            <input type="text" class="form-control" value="Pengatur Tingkat I (II/D)" disabled />
                                                            @endif
                                                            @if($verifikasi->pangkat_gol == 9)
                                                            <input type="text" class="form-control" value="Penata Muda (III/A)" disabled />
                                                            @endif
                                                            @if($verifikasi->pangkat_gol == 10)
                                                            <input type="text" class="form-control" value="Penata Muda Tingkat I (III/B)" disabled />
                                                            @endif
                                                            @if($verifikasi->pangkat_gol == 11)
                                                            <input type="text" class="form-control" value="Penata (III/C)" disabled />
                                                            @endif
                                                            @if($verifikasi->pangkat_gol == 12)
                                                            <input type="text" class="form-control" value="Penata Tingakat I (III/D)" disabled />
                                                            @endif
                                                            @if($verifikasi->pangkat_gol == 13)
                                                            <input type="text" class="form-control" value="Pembina (IV/A)" disabled />
                                                            @endif
                                                            @if($verifikasi->pangkat_gol == 14)
                                                            <input type="text" class="form-control" value="Pembina Tingkat 1 (IV/B)" disabled />
                                                            @endif
                                                            @if($verifikasi->pangkat_gol == 15)
                                                            <input type="text" class="form-control" value="Pembina Utama Muda (IV/C)" disabled />
                                                            @endif
                                                            @if($verifikasi->pangkat_gol == 16)
                                                            <input type="text" class="form-control" value="Pembina Utama Madya (IV/D)" disabled />
                                                            @endif
                                                            @if($verifikasi->pangkat_gol == 17)
                                                            <input type="text" class="form-control" value="Pembina Utama (IV/E)" disabled />
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT Gol/Ruang</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tmt_gol }}" id="kt_datepicker_5_modal" disabled />
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
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_nota_usulan == null)
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
                                                            @foreach($file_nota_usulans as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_nota_usulan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_nota_usulan_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_nota_usulan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_nota_usulan"></h4>
                                                            </div>
                                                            <p id="file_nota_usulan"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT CPNS</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="" id="kt_datepicker_6_modal" />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Masa Kerja Golongan</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value=""  />
                                                            <label class="col-form-label text-left col-lg-3 col-sm-12">Tahun</label>

                                                        </div>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value=""  />
                                                            <label class="col-form-label text-left col-lg-3 col-sm-12">Bulan</label>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <!-- <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File SK Pangkat Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <a style="color: blue;">file.pdf</a>
                                                        </div>
                                                        </div>
                                                </div> -->
                                            </div>
                                            @endif
                                            <!--end: Wizard Step 2-->

                                            @if ($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '3')
                                                @if ($verifikasi->pangkat_gol == '1')
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
                                                    @if ($verifikasi->nomor_klarifikasi != '')
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
                                                                    <input type="text" class="form-control" value="{{ $verifikasi->nomor_klarifikasi }}" disabled />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Tanggal Klarifikasi</label>
                                                            <div class="col-lg-5 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control" value="{{ $verifikasi->tanggal_klarifikasi }}" id="kt_datepicker_9_modal" disabled/>
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
                                            @if ($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '3')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Lama</h4>
                                                <!--begin::Select-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->jabatan_lama }}"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">No. SK Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->no_sk_jabatan_lama }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT Jabatan</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tmt_jabatan_lama }}" id="kt_datepicker_9_modal" disabled/>
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
                                                            <input type="text" class="form-control" value="{{ $verifikasi->unit_kerja_lama }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_jabatan_lama == null)
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
                                                            @foreach($file_jabatan_lamas as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_jabatan_lama" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_jabatan_lama_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_jabatan_lama_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_jabatan_lama"></h4>
                                                            </div>
                                                            <p id="file_jabatan_lama"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            @if ($verifikasi->jenis_layanan == '2' && $verifikasi->nomor_pak_terakhir != '')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data PAK Terakhir</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nomor PAK</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->nomor_pak_terakhir }}"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal PAK</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tanggal_pak_terakhir }}" id="kt_datepicker_8_modal" disabled/>
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
                                                            <input type="text" class="form-control" value="{{ $verifikasi->jumlah_angka_kredit_terakhir }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Periode Penilaian</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            @foreach ($periodes as $periode)
                                                                @if($verifikasi->periode_penilaian_terakhir == $periode->id)
                                                                <input type="text" class="form-control" value="{{$periode->name}}" disabled />
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_sk_pangkat_terakhir == null)
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
                                                            @foreach($file_sk_pangkat_terakhirs as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_sk_pangkat_terakhir" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_sk_pangkat_terakhir_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
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
                                            </div>
                                            @endif

                                            @if ($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '3')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Baru</h4>
                                                <!--begin::Select-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->jabatan_baru }}"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Unit Kerja</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->unit_kerja_baru }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_data_jabatan_baru == null)
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
                                                            @foreach($file_data_jabatan_barus as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_data_jabatan_baru" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_data_jabatan_baru_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_data_jabatan_baru_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_data_jabatan_baru"></h4>
                                                            </div>
                                                            <p id="file_file_data_jabatan_baru"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            @if ($verifikasi->jenis_layanan == '2')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Fungsional</h4>
                                                <!--begin::Select-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->jabatan_fungsional }}"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">No. Keppress Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->no_keppress_jabatan_fungsional }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_data_jabatan_fungsional == null)
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
                                                            @foreach($file_data_jabatan_fungsionals as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_data_jabatan_fungsional" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_data_jabatan_fungsional_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_data_jabatan_fungsional_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_data_jabatan_fungsional"></h4>
                                                            </div>
                                                            <p id="file_data_jabatan_fungsional"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">BA Pengambilan Sumpah Pelantikan</label>
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
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tmt_jabatan_fungsional }}" disabled />
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
                                                            <input type="text" class="form-control" value="{{ $verifikasi->unit_kerja_fungsional }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif  

                                            @if ($verifikasi->jenis_layanan == '3')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Rekomendasi</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nomor Surat Rekomendasi</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->no_surat_rekomendasi }}"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tgl. Surat Rekomendasi</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tanggal_surat_rekomendasi }}" id="kt_datepicker_8_modal" disabled/>
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
                                                        @if($verifikasi->file_data_rekomendasi == null)
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
                                                            @foreach($file_data_rekomendasis as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_data_rekomendasi" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_data_rekomendasi_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_data_rekomendasi_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_data_rekomendasi"></h4>
                                                            </div>
                                                            <p id="file_data_rekomendasi"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Surat Pernyataan/Keterangan melaksanakan kegiatan Jabatan fungsional dalam 2 tahun terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_surat_pernyataan_rekomendasi == null)
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
                                                            @foreach($file_surat_pernyataan_rekomendasis as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_surat_pernyataan_rekomendasi" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_surat_pernyataan_rekomendasi_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_surat_pernyataan_rekomendasi_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_surat_pernyataan_rekomendasi"></h4>
                                                            </div>
                                                            <p id="file_surat_pernyataan_rekomendasi"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            @if ($verifikasi->jenis_layanan == '1')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Kompetensi
                                                </h4>

                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->jabatan_data_kompetensi }}"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nomor Sertifikat/Surat</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->nomor_sertifikat }}" id="kt_datepicker_10_modal" disabled/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tgl.Sertifikat/surat</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tanggal_sertifikat }}" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File Data Pendukung Lainnya</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_data_kompetensi == null)
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
                                                            @foreach($file_data_kompetensis as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_data_kompetensi" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_data_kompetensi_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_data_kompetensi_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_data_kompetensi"></h4>
                                                            </div>
                                                            <p id="file_data_kompetensi"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            @if ($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '3' )
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Formasi Jabatan
                                                </h4>

                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jumlah</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->jumlah }}"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Terisi</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->terisi }}" id="kt_datepicker_10_modal" disabled/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Sisa</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->sisa }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File Data Pendukung Lainnya</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_formasi_jabatan == null)
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
                                                            @foreach($file_formasi_jabatans as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_formasi_jabatan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_formasi_jabatan_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_formasi_jabatan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_formasi_jabatan"></h4>
                                                            </div>
                                                            <p id="file_formasi_jabatan"></p>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            @endif

                                            @if ($verifikasi->jenis_layanan == '1' || $verifikasi->jenis_layanan == '3')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">SKP 2 Tahun Terakhir
                                                </h4>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_skp_2 == null)
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
                                                            @foreach($file_skp_2s as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_skp_2" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_skp_2_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_skp_2_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_skp_2"></h4>
                                                            </div>
                                                            <p id="file_skp_2"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File Data Pendukung Lainnya</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_skp_2_lainnya == null)
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
                                                            @foreach($file_skp_2_lainnyas as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_skp_2_lainnya" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_skp_2_lainnya_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_skp_2_lainnya_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_skp_2_lainnya"></h4>
                                                            </div>
                                                            <p id="file_skp_2_lainnya"></p>
                                                        </div>
                                                    </div>
                                                </div> 

                                                @foreach ($notes as $catatans)
                                                    
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
                                                @endforeach
                                                
                                                @if ($verifikasi->jenis_layanan == '1')
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tgl.Sertifikat/surat</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tanggal_sertifikat }}" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                            @endif

                                            @if ($verifikasi->jenis_layanan == '2')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Pemberhentian</h4>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Alasan Pemberhentian</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_1" name="alasan_pemberhentian" value="1" {{ ($verifikasi->alasan_pemberhentian =="1")? "checked" : "" }} disabled />
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Mengundurkan diri dari jabatan</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_2" name="alasan_pemberhentian" value="2" {{ ($verifikasi->alasan_pemberhentian =="2")? "checked" : "" }} disabled/>
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Diberhentikan sementara sebagai PNS</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_3" name="alasan_pemberhentian" value="3" {{ ($verifikasi->alasan_pemberhentian =="3")? "checked" : "" }} disabled/>
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Menjalani cuti diluar tanggungan negara</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_4" name="alasan_pemberhentian" value="4" {{ ($verifikasi->alasan_pemberhentian =="4")? "checked" : "" }} disabled/>
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Menjanlani tugas belajar lebih dari 6 (enam) bulan</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_5" name="alasan_pemberhentian" value="5" {{ ($verifikasi->alasan_pemberhentian =="5")? "checked" : "" }} disabled/>
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Ditugaskan secara penuh diluar jabatan fungsional</div>
                                                            </label>
                                                        </div>
                                                        <div style="margin-bottom:10px;">
                                                            <label class="radio radio-success">
                                                                <input type="radio" id="radio_6" name="alasan_pemberhentian" value="6" {{ ($verifikasi->alasan_pemberhentian =="6")? "checked" : "" }} disabled/>
                                                                <span></span>
                                                                <div style="margin-left: 10px;">Tidak memenuhi syarat jabatan</div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Keterangan Alasan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <textarea class="form-control" rows="3" id="ket_alasan_pemberhentian" name="ket_alasan_pemberhentian" disabled> {{ $verifikasi->ket_alasan_pemberhentian }} </textarea>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="form-group row">
                                                    <label class="col-form-label text-rigth col-lg-3 col-sm-12">TMT Pemberhentian</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tmt_pemberhentian }}"  disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download File Data Pendukung Lainnya</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_pendukung_pemberhentian == null)
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
                                                            @foreach($file_pendukung_pemberhentians as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_pendukung_pemberhentian" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_pendukung_pemberhentian_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="file_pendukung_pemberhentian_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_pendukung_pemberhentian"></h4>
                                                            </div>
                                                            <p id="file_pendukung_pemberhentian"></p>
                                                        </div>
                                                    </div>
                                                </div> 

                                                <div id="kt_repeater_1">
    
                                                    @foreach ($notes as $catatans)
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
                                                @endforeach
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="1" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Surat Usulan Asli Ditandatangani PPK</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="2" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Nota Usulan asli yang dilengkapi dengan data formasi dan ditandatangani oleh PPK</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="3" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Sertifikat/tanda lulus/surat keterangan lulus uji kompetensi</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="4" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">PAK asli 1 tahun terakhir</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="5" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Salinan sah SK jabatan terakhir</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="6" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Salinan sah SK Pangkat terakhir</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:30px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="7" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Salinan sah SKP dan Penilaian Prestasi Kerja 2 tahun terakhir</div>
                                                                </label>
                                                            </div>
                                                            <div style="margin-bottom:10px;">
                                                                <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary">
                                                                    <input type="checkbox" id="ket" name="ket[]" value="8" disabled/>
                                                                    <span></span><div style="margin-left: 10px;">Semua persyaratan dan dokumen benar</div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            
                                            @if ($verifikasi->jenis_layanan == '5')
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
                                            @if ($verifikasi->jenis_layanan == '4' )
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Surat</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat Pengantar</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="kt_datepicker_3_modal"  value="{{ $verifikasi->tanggal_surat_pengantar }}" disabled/>
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
                                                            <input type="text" class="form-control" value="{{ $verifikasi->no_surat_pengantar }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!--end::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download file</label>
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

                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Keppres</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">No. Keppres</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="kt_datepicker_3_modal"  value="{{ $verifikasi->no_keppres }}" disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    {{-- <i class="la la-calendar"></i> --}}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal Keppres</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tanggal_keppres }}" disabled />
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
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download file</label>
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

                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Ralat</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Alasan Ralat</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" id="kt_datepicker_3_modal"  value="{{ $verifikasi->alasan_ralat }}" disabled/>
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
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download file</label>
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


                                            <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
                                                <div class="mr-2">
                                                    <a href="{{ route('pic.inbox.index')}}" type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4">Kembali</a>
                                                </div>
                                                <div>
                                                    <table>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="{{ route('pic.inbox.jfku.store_proses') }}">
                                                                @csrf 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $verifikasi->id }}">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $verifikasi->jenis_layanan }}">
                                                                <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" >
                                                                    Proses
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
        $(document).on('click', '#d_file_surat_usulan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_surat_usulan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_usulan').html(link);
            $('#file_name_file_surat_usulan').text(file);

            $('#file_surat_usulan_modal').modal('hide');
        })

        $(document).on('click', '#d_file_nota_usulan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_asn/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_nota_usulan').html(link);
            $('#file_name_file_nota_usulan').text(file);

            $('#file_nota_usulan_modal').modal('hide');
        })
        $(document).on('click', '#d_file_data_pak', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_data_pak/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_pak').html(link);
            $('#file_name_file_data_pak').text(file);

            $('#file_data_pak_modal').modal('hide');
        })
        $(document).on('click', '#d_file_klarifikasi_pak', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_klarifikasi_pak/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_klarifikasi_pak').html(link);
            $('#file_name_file_klarifikasi_pak').text(file);

            $('#file_klarifikasi_pak_modal').modal('hide');
        })
        $(document).on('click', '#d_file_jabatan_lama', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_jabatan_lama/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_jabatan_lama').html(link);
            $('#file_name_jabatan_lama').text(file);

            $('#file_jabatan_lama_modal').modal('hide');
        })
        $(document).on('click', '#d_file_sk_pangkat_terakhir', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_sk_pangkat_terakhir/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_sk_pangkat_terakhir').html(link);
            $('#file_name_file_sk_pangkat_terakhir').text(file);

            $('#file_sk_pangkat_terakhir_modal').modal('hide');
        })
        $(document).on('click', '#d_file_data_jabatan_baru', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_data_jabatan_baru/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_jabatan_baru').html(link);
            $('#file_name_file_data_jabatan_baru').text(file);

            $('#file_data_jabatan_baru_modal').modal('hide');
        })
        $(document).on('click', '#d_file_ba_pelantikan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_ba_pelantikan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_ba_pelantikan').html(link);
            $('#file_name_file_ba_pelantikan').text(file);

            $('#file_ba_pelantikan_modal').modal('hide');
        })
        
        $(document).on('click', '#d_file_data_jabatan_fungsional', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_data_jabatan_fungsional/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_jabatan_fungsional').html(link);
            $('#file_name_file_data_jabatan_fungsional').text(file);

            $('#file_data_jabatan_fungsional_modal').modal('hide');
        })

        $(document).on('click', '#d_file_data_rekomendasi', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_data_rekomendasi/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_rekomendasi').html(link);
            $('#file_name_file_data_rekomendasi').text(file);

            $('#file_data_rekomendasi_modal').modal('hide');
        })

        $(document).on('click', '#d_file_skp_2_lainnya', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_skp_2_lainnya/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_skp_2_lainnya').html(link);
            $('#file_name_file_skp_2_lainnya').text(file);

            $('#file_skp_2_lainnya_modal').modal('hide');
        })

        $(document).on('click', '#d_file_skp_2', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_skp_2/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_skp_2').html(link);
            $('#file_name_file_skp_2').text(file);

            $('#file_skp_2_modal').modal('hide');
        })

        $(document).on('click', '#d_file_surat_pernyataan_rekomendasi', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_surat_pernyataan_rekomendasi/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_pernyataan_rekomendasi').html(link);
            $('#file_name_file_surat_pernyataan_rekomendasi').text(file);

            $('#file_surat_pernyataan_rekomendasi_modal').modal('hide');
        })

        $(document).on('click', '#d_file_data_kompetensi', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_data_kompetensi/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_kompetensi').html(link);
            $('#file_name_file_data_kompetensi').text(file);

            $('#file_data_kompetensi_modal').modal('hide');
        })
        
        $(document).on('click', '#d_file_formasi_jabatan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_formasi_jabatan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_formasi_jabatan').html(link);
            $('#file_name_file_formasi_jabatan').text(file);

            $('#file_formasi_jabatan_modal').modal('hide');
        })

        $(document).on('click', '#d_file_pendukung_pemberhentian', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_pendukung_pemberhentian/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_pendukung_pemberhentian').html(link);
            $('#file_name_file_pendukung_pemberhentian').text(file);

            $('#file_pendukung_pemberhentian_modal').modal('hide');
        })

        $(document).on('click', '#d_file_surat_pengantar', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_surat_pengantar/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_pengantar').html(link);
            $('#file_name_file_surat_pengantar').text(file);

            $('#file_surat_pengantar_modal').modal('hide');
        })

        $(document).on('click', '#d_file_keppres', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_keppres/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_keppres').html(link);
            $('#file_name_file_keppres').text(file);

            $('#file_keppres_modal').modal('hide');
        })

        $(document).on('click', '#d_file_sumpah_jabatan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/JFKU_Attachments/file_sumpah_jabatan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_sumpah_jabatan').html(link);
            $('#file_name_file_sumpah_jabatan').text(file);

            $('#file_sumpah_jabatan_modal').modal('hide');
        })

    })
</script>
<script src="{{ asset('js/pages/custom/wizard/wizard-2.js') }}"></script>
<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection