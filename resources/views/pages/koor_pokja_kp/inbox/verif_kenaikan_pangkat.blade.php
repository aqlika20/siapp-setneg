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
                            <h3 class="card-label">Verifikasi Kenaikan Pangkat {{Helper::defineJenisLayananBy($verifikasi->jenis_layanan)}}
                            <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <!--begin: Wizard-->
                                <!--begin: Wizard-->
                            <div id="kt_wizard_v3" data-wizard-state="step-first" data-wizard-clickable="true">

                                <!--begin: Wizard Body-->
                                <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                    <div class="col-xl-20 col-xxl-12">
                                        <!--begin: Wizard Form-->
                                        
                                            @if ($verifikasi->jenis_layanan == '15')
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

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Periode Kenaikan Pangkat</label>
                                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            @if ($verifikasi->masa_periode_start == 1)
                                                            <input type="text" class="form-control" value="April" disabled  />
                                                            
                                                            @else
                                                            <input type="text" class="form-control" value="Oktober" disabled  />

                                                            @endif
                                                            <div class="input-group-append">
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label class="col-form-label">s/d.</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            @if ($verifikasi->masa_periode_end== 1)
                                                            <input type="text" class="form-control" value="29 Februari" disabled  />
                                                            
                                                            @else
                                                            <input type="text" class="form-control" value="31 Agustus" disabled  />

                                                            @endif                                                            
                                                            <div class="input-group-append">
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--end::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">File Surat Usulan</label>
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

                                            @if ($verifikasi->jenis_layanan == '15')
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
                                                            @foreach ($pendidikan_terakhirs as $pend)
                                                            <input type="text" class="form-control" value="{{ $pend->name }}" disabled />
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                @if($verifikasi->jenis_layanan == '1')
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
                                                @endif
                                                @if($verifikasi->jenis_layanan == '15')
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Instansi</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->instansi }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Pangkat (Gol/Ruang)</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            @foreach ($pangkats as $pangkat)
                                                                @if($verifikasi->pangkat_gol == $pangkat->id)
                                                                <input type="text" class="form-control" value="{{$pangkat->name}} ({{$pangkat->golongan}}/{{$pangkat->ruang}}" disabled />
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT Gol/Ruang</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tmt_gol }}" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT CPNS</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{$verifikasi->tmt_cpns}}" disabled />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Masa Kerja Golongan</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{$verifikasi->masa_kerja_gol_tahun}}" autocomplete="off" disabled required/>
                                                            <label class="col-form-label text-left col-lg-3 col-sm-12">Tahun</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{$verifikasi->masa_kerja_gol_bulan}}" autocomplete="off" disabled required/>
                                                            <label class="col-form-label text-left col-lg-3 col-sm-12">Bulan</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                @if($verifikasi->jenis_layanan == '15')
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">File Nota Usul</label>
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
                                                @endif
                                                @if($verifikasi->jenis_layanan == '17')
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT CPNS</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tmt_cpns }}" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Masa Kerja Golongan</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->masa_kerja_gol_tahun }}" disabled />
                                                            <label class="col-form-label text-left col-lg-3 col-sm-12">Tahun</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->masa_kerja_gol_bulan }}" disabled />
                                                            <label class="col-form-label text-left col-lg-3 col-sm-12">Bulan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Upload/Download Nota Usul</label>
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
                                                @endif
                                            </div>
                                            @endif
                                            
                                            @if ($verifikasi->jenis_layanan == '15')
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
                                            
                                            @if ($verifikasi->jenis_layanan == '15')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Pangkat Lama</h4>
                                                <!--begin::Select-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan Lama</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->jabatan_lama }}" disabled />
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
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tmt_jabatan_lama }}" disabled />
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

                                                <div class="modal fade" id="file_jabatan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_jabatan"></h4>
                                                            </div>
                                                            <p id="file_jabatan"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">File SK Pangkat Terakhir</label>
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
                                            
                                            @if ($verifikasi->jenis_layanan == '15')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data Jabatan Terakhir</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Pangkat (Gol/Ruang)</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @foreach ($pangkat_gol_barus as $pgb)
                                                        <input type="text" class="form-control" value="{{$pgb->name}}" disabled />
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">TMT (Gol/Ruang)</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{$verifikasi->tmt_gol_baru}}" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Masa Kerja Golongan</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{$verifikasi->masa_kerja_gol_tahun_baru}}" disabled />
                                                            <label class="col-form-label text-left col-lg-3 col-sm-12">Tahun</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12"></label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{$verifikasi->masa_kerja_gol_bulan_baru}}" disabled />
                                                            <label class="col-form-label text-left col-lg-3 col-sm-12">Bulan</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if ($verifikasi->jabatan_pak == 0)
                                                        <input type="text" class="form-control" value="{{$verifikasi->jabatan_pak_lainnya}}" disabled />
                                                        @else
                                                         @foreach ($jabatan_paks as $jpak)
                                                        <input type="text" class="form-control" value="{{$jpak->name}}" disabled />
                                                        @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                                

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Periode Masa Jabatan</label>
                                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{$verifikasi->masa_jabatan_start}}" disabled  />
                                                            <div class="input-group-append">
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label class="col-form-label">s/d.</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{$verifikasi->masa_jabatan_end}}" disabled  />
                                                            <div class="input-group-append">
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">File SK Jabatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_sk_jabatan == null)
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
                                                                @foreach($file_sk_jabatans as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_sk_jabatans" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_sk_jabatans_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_sk_jabatans_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_sk_jabatans"></h4>
                                                            </div>
                                                            <p id="file_sk_jabatans"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">File BAP</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_bap == null)
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
                                                                @foreach($file_baps as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_baps" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_baps_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_baps_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_baps"></h4>
                                                            </div>
                                                            <p id="file_baps"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">File SPP</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_spp == null)
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
                                                                @foreach($file_spps as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_spp" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_spp_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_spp_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_spp"></h4>
                                                            </div>
                                                            <p id="file_spp"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            @endif
                                            
                                            @if ($verifikasi->jenis_layanan == '15')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Data SKP 2 Tahun Terakhir</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Hukuman(Pernah/Tidak Pernah)</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if ($verifikasi->status_hukuman == 1)
                                                        <input type="text" class="form-control" value="Pernah Dijatuhi Hukuman" disabled />
                                                        @else
                                                        <input type="text" class="form-control" value="Tidak Pernah Dijatuhi Hukuman" disabled />
                                                        @endif
                                                    </div>
                                                </div>

                                                @if ($verifikasi->status_hukuman == 1)
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">File Surat Keputusan Penjatuhan Hukuman Disiplin</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_hukuman == null)
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
                                                                @foreach($file_hukumans as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_hukuman" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_hukuman_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_hukuman_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_hukuman"></h4>
                                                            </div>
                                                            <p id="file_hukuman"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Catatan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <input type="textarea" class="form-control" value="{{$verifikasi->catatan_hukuman}}" disabled />
                                                    </div>
                                                </div>
                                                @endif

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">File SKP 1 Tahun Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_skp_1_tahun_terakhir == null)
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
                                                                @foreach($file_skp_1_tahun_terakhirs as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_skp_1_tahun_terakhir" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_skp_1_tahun_terakhir_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_skp_1_tahun_terakhir_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_skp_1_tahun_terakhir"></h4>
                                                            </div>
                                                            <p id="file_skp_1_tahun_terakhir"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">File SKP 2 Tahun Terakhir</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_skp_2_tahun_terakhir == null)
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
                                                                @foreach($file_skp_2_tahun_terakhirs as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_skp_2_tahun_terakhir" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_skp_2_tahun_terakhir_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_skp_2_tahun_terakhir_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_skp_2_tahun_terakhir"></h4>
                                                            </div>
                                                            <p id="file_skp_2_tahun_terakhir"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                                                       
                                            </div>
                                            @endif

                                            @if ($verifikasi->jenis_layanan == '15')
                                            @if ($verifikasi->pangkat_luar_biasa == '1')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Kenaikan Pangkat Luarbiasa</h4>
                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">File Surat Keputusan PPK</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_surat_keputusan_ppk == null)
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
                                                                @foreach($file_surat_keputusan_ppks as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_surat_keputusan_ppk" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_surat_keputusan_ppk_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_surat_keputusan_ppk_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_surat_keputusan_ppk"></h4>
                                                            </div>
                                                            <p id="file_surat_keputusan_ppk"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endif

                                            @if ($verifikasi->jenis_layanan == '16')
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
                                                    <label class="col-form-label col-lg-3 col-sm-12">Alasan Pembatalan</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->alasan_pembatalan }}"  disabled/>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="la la-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Surat Permohonan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_surat_permohonan == null)
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
                                                                @foreach($file_surat_permohonans as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_surat_permohonan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_surat_permohonan_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_surat_permohonan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_surat_permohonan"></h4>
                                                            </div>
                                                            <p id="file_surat_permohonan"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload Keppres Yang Dibatalkan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_keppres_dibatalkan == null)
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
                                                                @foreach($file_keppres_dibatalkans as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_keppres_dibatalkan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_keppres_dibatalkan_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_keppres_dibatalkan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_keppres_dibatalkan"></h4>
                                                            </div>
                                                            <p id="file_keppres_dibatalkan"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload Akta Meninggal Dunia / Alasan Terkait Dengan Jabatan / Lainnya</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_alasan == null)
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
                                                                @foreach($file_alasans as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_alasan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_alasan_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_alasan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_alasan"></h4>
                                                            </div>
                                                            <p id="file_alasan"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            @if ($verifikasi->jenis_layanan == '17')
                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                <h4 class="mb-10 font-weight-bold text-dark">Surat Permohonan
                                                </h4>

                                                <!--begin::Input-->
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat Permohonan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->tanggal_surat_permohonan }}"  disabled/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Nomor Surat Permohonan</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->no_surat_permohonan }}" id="kt_datepicker_10_modal" disabled/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Jabatan Yang Menandatangani</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" value="{{ $verifikasi->pejabat_menandatangani }}" disabled />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Hilangan/Rusak</label>
                                                    <div class="col-lg-5 col-md-9 col-sm-12">
                                                        <div class="input-group">
                                                            @if ($verifikasi->opsi == 1)
                                                            <input type="text" class="form-control" value="Hilang" disabled />
                                                            @else
                                                            <input type="text" class="form-control" value="Rusak" disabled />
                                                            @endif
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Surat Permohonan</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_surat_permohonan == null)
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
                                                                @foreach($file_surat_permohonans as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_surat_permohonan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_surat_permohonan_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_surat_permohonan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_surat_permohonan"></h4>
                                                            </div>
                                                            <p id="file_surat_permohonan"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                @if ($verifikasi->opsi == 1)
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload Surat Keterangan Kehilangan Dari Polisi</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_surat_kehilangan == null)
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
                                                                @foreach($file_surat_kehilangans as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_surat_kehilangan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_surat_kehilangan_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_surat_kehilangan_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_surat_kehilangan"></h4>
                                                            </div>
                                                            <p id="file_surat_kehilangan"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload Fotokopi SK Yang Hilang/Rusak</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_fotokopi_sk_hilang == null)
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
                                                                @foreach($file_fotokopi_sk_hilangs as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_fotokopi_sk_hilang" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_fotokopi_sk_hilang_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_fotokopi_sk_hilang_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_fotokopi_sk_hilang"></h4>
                                                            </div>
                                                            <p id="file_fotokopi_sk_hilang"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                @else
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Upload Fotokopi SK Yang Hilang/Rusak</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($verifikasi->file_fotokopi_sk_hilang == null)
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
                                                                @foreach($file_fotokopi_sk_hilangs as $file)
                                                                <tr>
                                                                    <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                    <td><a id="d_file_fotokopi_sk_hilang" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_fotokopi_sk_hilang_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="file_fotokopi_sk_hilang_modal">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_fotokopi_sk_hilang"></h4>
                                                            </div>
                                                            <p id="file_fotokopi_sk_hilang"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                @endif
                                            </div>
                                            @endif

                                            <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                                @if($verifikasi->jenis_layanan == '18')
                                                    <h4 class="mb-10 font-weight-bold text-dark">Data Surat</h4>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Tanggal Surat Permohonan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi->tanggal_surat_permohonan}}"  disabled/>
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
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control" value="{{ $verifikasi->no_surat_permohonan }}"  disabled/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label">Surat Permohonan</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            @if($verifikasi->file_surat_permohonan == null)
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
                                                                    @foreach($file_surat_permohonans as $file)
                                                                    <tr>
                                                                        <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                        <td><a id="d_file_surat_permohonan" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_surat_permohonan_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            @endif
                                                        </div>
                                                    </div>
    
                                                    <div class="modal fade" id="file_surat_permohonan_modal">
                                                        <div class="modal-dialog" >
                                                            <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_surat_permohonan"></h4>
                                                                </div>
                                                                <p id="file_surat_permohonan"></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label">Dokumen Klarifikasi</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            @if($verifikasi->file_dokumen_klarifikasi == null)
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
                                                                    @foreach($file_dokumen_klarifikasis as $file)
                                                                    <tr>
                                                                        <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                        <td><a id="d_file_dokumen_klarifikasi" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_dokumen_klarifikasi_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            @endif
                                                        </div>
                                                    </div>
    
                                                    <div class="modal fade" id="file_dokumen_klarifikasi_modal">
                                                        <div class="modal-dialog" >
                                                            <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_dokumen_klarifikasi"></h4>
                                                                </div>
                                                                <p id="file_dokumen_klarifikasi"></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label">Fotokopi SK Yang Diperbaiki</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            @if($verifikasi->file_fotokopi_sk_diperbaiki == null)
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
                                                                    @foreach($file_fotokopi_sk_diperbaikis as $file)
                                                                    <tr>
                                                                        <td><a style="color: blue;" > {{ $file }}</a></td>
                                                                        <td><a id="d_file_fotokopi_sk_diperbaiki" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#file_fotokopi_sk_diperbaiki_modal" data-file="{{ $file }}">Lihat</a></td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            @endif
                                                        </div>
                                                    </div>
    
                                                    <div class="modal fade" id="file_fotokopi_sk_diperbaiki_modal">
                                                        <div class="modal-dialog" >
                                                            <div class="modal-content" style="width: 800px !important; height: 800px !important;">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="font-weight: bold;" id="file_name_file_fotokopi_sk_diperbaiki"></h4>
                                                                </div>
                                                                <p id="file_fotokopi_sk_diperbaiki"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                @endif
                                            </div>
                                                                                            
                                                <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
                                                    <div class="mr-2">
                                                        <a href="{{ route('koor-pokja-kp.inbox.kenaikan-pangkat.index')}}" type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4">Kembali</a>
                                                    </div>
                                                    <div>
                                                        <table>
                                                            <th style="margin-right: 10px;">
                                                            <form method="POST" action="{{ route('koor-pokja-kp.inbox.kenaikan_pangkat.store_tolak') }}">
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
                                                                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_prosess_penolakan" name="tanggal_prosess_penolakan" autocomplete="off" data-toggle="datetimepicker" data-target="#tanggal_prosess_penolakan" placeholder="Pilih Tanggal" value="{{old('tanggal_prosess_penolakan')}}" required/>
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
                                                            <form method="POST" action="{{ route('koor-pokja-kp.inbox.kenaikan_pangkat.store_proses') }}">
                                                                @csrf 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $verifikasi->id }}">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $verifikasi->jenis_layanan }}">
                                                                <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4">
                                                                    Proses
                                                                </button>
                                                            </form>
                                                        </th>
                                                        <th style="margin-right: 10px;">
                                                            <form method="POST" action="{{ route('koor-pokja-kp.inbox.kenaikan_pangkat.store_pending') }}">
                                                                @csrf 
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $verifikasi->id }}">
                                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $verifikasi->jenis_layanan }}">
                                                                <button type="submit" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4">
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
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_usulan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_usulan').html(link);
            $('#file_name_file_data_usulan').text(file);

            $('#file_data_usulan_modal').modal('hide');
        })

        $(document).on('click', '#d_file_nota_usulan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/nota_usulan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_nota_usulan').html(link);
            $('#file_name_file_nota_usulan').text(file);

            $('#file_nota_usulan_modal').modal('hide');
        })

        $(document).on('click', '#d_file_sk_pangkat_terakhir', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_sk_pangkat_terakhir/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_sk_pangkat_terakhir').html(link);
            $('#file_name_file_sk_pangkat_terakhir').text(file);

            $('#file_sk_pangkat_terakhir_modal').modal('hide');
        })

        $(document).on('click', '#d_file_sk_jabatans', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_sk_jabatan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_sk_jabatans').html(link);
            $('#file_name_file_sk_jabatans').text(file);

            $('#file_sk_jabatans_modal').modal('hide');
        })

        $(document).on('click', '#d_file_data_pak', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_pak/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_data_pak').html(link);
            $('#file_name_file_data_pak').text(file);

            $('#file_data_pak_modal').modal('hide');
        })

        $(document).on('click', '#d_file_klarifikasi_pak', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/klarifikasi_pak/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_klarifikasi_pak').html(link);
            $('#file_name_file_klarifikasi_pak').text(file);

            $('#file_klarifikasi_pak_modal').modal('hide');
        })

        $(document).on('click', '#d_file_baps', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_bap/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_baps').html(link);
            $('#file_name_file_baps').text(file);

            $('#file_baps_modal').modal('hide');
        })

        $(document).on('click', '#d_file_spp', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_spp/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_spp').html(link);
            $('#file_name_file_spp').text(file);

            $('#file_spp_modal').modal('hide');
        })

        $(document).on('click', '#d_file_hukuman', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_file_hukuman/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_hukuman').html(link);
            $('#file_name_file_hukuman').text(file);

            $('#file_hukuman_modal').modal('hide');
        })

        $(document).on('click', '#d_file_skp_1_tahun_terakhir', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_file_sk_1_tahun_terakhir/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_skp_1_tahun_terakhir').html(link);
            $('#file_name_file_skp_1_tahun_terakhir').text(file);

            $('#file_skp_1_tahun_terakhir_modal').modal('hide');
        })

        $(document).on('click', '#d_file_skp_2_tahun_terakhir', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_file_sk_2_tahun_terakhir/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_file_skp_2_tahun_terakhir').html(link);
            $('#file_name_file_skp_2_tahun_terakhir').text(file);

            $('#file_skp_2_tahun_terakhir_modal').modal('hide');
        })

        $(document).on('click', '#d_file_surat_keputusan_ppk', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_keputusan_ppk/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_keputusan_ppk').html(link);
            $('#file_name_file_surat_keputusan_ppk').text(file);

            $('#file_surat_keputusan_ppk_modal').modal('hide');
        })

        $(document).on('click', '#d_file_surat_permohonan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_surat_permohonan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_permohonan').html(link);
            $('#file_name_file_surat_permohonan').text(file);

            $('#file_surat_permohonan_modal').modal('hide');
        })

        $(document).on('click', '#d_file_keppres_dibatalkan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_keppres_dibatalkan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_keppres_dibatalkan').html(link);
            $('#file_name_file_keppres_dibatalkan').text(file);

            $('#file_keppres_dibatalkan_modal').modal('hide');
        })

        $(document).on('click', '#d_file_alasan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_alasan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_alasan').html(link);
            $('#file_name_file_alasan').text(file);

            $('#file_alasan_modal').modal('hide');
        })

        $(document).on('click', '#d_file_surat_kehilangan', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_surat_kehilangan/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_surat_kehilangan').html(link);
            $('#file_name_file_surat_kehilangan').text(file);

            $('#file_surat_kehilangan_modal').modal('hide');
        })

        $(document).on('click', '#d_file_fotokopi_sk_hilang', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_fotokopi_sk_hilang/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_fotokopi_sk_hilang').html(link);
            $('#file_name_file_fotokopi_sk_hilang').text(file);

            $('#file_fotokopi_sk_hilang_modal').modal('hide');
        })

        $(document).on('click', '#d_file_dokumen_klarifikasi', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_dokumen_klarifikasi/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_dokumen_klarifikasi').html(link);
            $('#file_name_file_dokumen_klarifikasi').text(file);

            $('#file_dokumen_klarifikasi_modal').modal('hide');
        })

        $(document).on('click', '#d_file_fotokopi_sk_diperbaiki', function() {
            var file = $(this).data('file');
            var link = "<iframe src='/storage/Kenaikan_Pangkat_Attachments/data_file_fotokopi_sk_diperbaiki/"+file+"' style='width: 800px !important; height: 800px !important;'></iframe>"
            $('#file_fotokopi_sk_diperbaiki').html(link);
            $('#file_name_file_fotokopi_sk_diperbaiki').text(file);

            $('#file_fotokopi_sk_diperbaiki_modal').modal('hide');
        })
        
    })
</script>
<script src="{{ asset('js/pages/custom/wizard/wizard-2.js') }}"></script>
<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection