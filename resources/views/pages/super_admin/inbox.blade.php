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
                    <!--begin::Dashboard-->
                    <!--begin card-->
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">Daftar Pemberhentian
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin: Search Form-->
                            <!--begin::Search Form-->
                            <div class="mb-7">
                                <div class="row align-items-center">
                                    <div class="col-lg col-xl-6">
                                        <div class="row align-items-center">
                                            <div class="col-md-9 my-2 my-md-0">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="Cari..." id="kt_datatable_search_query" />
                                                    <span>
                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!--end::Search Form-->
                            <!--end: Search Form-->
                            <!--begin: Datatable-->
                            <table class="datatable cell-border" id="jabatan_fungsional">
                                <thead>
                                    <tr>
                                        <th><b>Tanggal Agenda</b></th>
                                        <th><b>No Surat</b></th>
                                        <th><b>Instansi Pengusul</b></th>
                                        <th><b>Jenis Usulan</b></th>
                                        <th><b>NIP</b></th>
                                        <th><b>Nama</b></th>
                                        <th><b>Jabatan</b></th>
                                        <th><b>Aksi</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pengangkatans as $pengangkatan)
                                    <tr>
                                        <td>{{ $pengangkatan->tanggal_surat_usulan }}</td>
                                        <td>{{ $pengangkatan->no_surat_usulan }}</td>
                                        <td>{{ $pengangkatan->instansi }}</td>
                                        <td>{{ $pengangkatan->jenis_usulan }}</td>
                                        <td>{{ $pengangkatan->nip }}</td>
                                        <td>{{ $pengangkatan->nama }}</td>
                                        <td>{{ $pengangkatan->jabatan }}</td>
                                        <td>Coming Soon..</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!--end: Datatable-->
                        </div>
                    </div>
                    <!--end card-->
                    <!--begin::Row-->
                    
                    <!--end::Row-->
                    <!--end::Dashboard-->
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
<script src="{{ asset('js/pages/custom/wizard/wizard-2.js') }}"></script>
<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection