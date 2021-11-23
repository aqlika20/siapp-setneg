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
                                <h3 class="card-label">Daftar Surat Usulan Kenaikan Pangkat
                            </div>
                            <div class="card-toolbar">
                                <!--begin::Button-->
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalSizeXl">
                                    + Usulan Baru
                                </button>
                                <!--end::Button-->
                                <!-- Modal-->
                                <div class="modal fade" id="exampleModalSizeXl" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeXl" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Layanan Pengangkatan</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!--begin: Wizard-->
                                                <div class="wizard wizard-2" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="false">
                                                    <!--begin: Wizard Nav-->
                                                    <div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
                                                        <!--begin::Wizard Step 1 Nav-->
                                                        <div class="wizard-steps">
                                                            <div class="wizard-step" data-wizard-type="step" data-wizard-state="current" style="margin-bottom: 10px;">
                                                                <div class="wizard-wrapper">
                                                                    <div class="wizard-icon">
                                                                        <span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Home/Chair2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                                <path d="M6.54246133,21.5014597 L8.1406184,15.5370564 C8.28356021,15.0035903 8.83189716,14.6870078 9.36536327,14.8299496 C9.89882937,14.9728914 10.2154119,15.5212284 10.07247,16.0546945 L8.47431299,22.0190978 C8.33137118,22.5525639 7.78303422,22.8691464 7.24956812,22.7262046 C6.71610201,22.5832628 6.39951952,22.0349258 6.54246133,21.5014597 Z M17.4495897,21.4711096 C17.5925315,22.0045757 17.275949,22.5529126 16.7424829,22.6958545 C16.2090168,22.8387963 15.6606799,22.5222138 15.517738,21.9887477 L14.2148496,17.126302 C14.0719078,16.5928359 14.3884903,16.0444989 14.9219564,15.9015571 C15.4554225,15.7586153 16.0037595,16.0751978 16.1467013,16.6086639 L17.4495897,21.4711096 Z" fill="#000000" opacity="0.3"/>
                                                                                <path d="M7.36092084,1 L16.6390792,1 C17.7436487,1 18.6390792,1.8954305 18.6390792,3 C18.6390792,3.11016172 18.6299775,3.22013512 18.611867,3.32879797 L17.0696334,12.5821995 C17.0294511,12.8232935 16.820856,13 16.5764365,13 L7.42356354,13 C7.17914397,13 6.97054891,12.8232935 6.93036658,12.5821995 L5.388133,3.32879797 C5.20654289,2.23925733 5.94258223,1.20880226 7.03212287,1.02721215 C7.14078572,1.00910168 7.25075912,1 7.36092084,1 Z M5.5,14 L18.5,14 C19.3284271,14 20,14.6715729 20,15.5 C20,16.3284271 19.3284271,17 18.5,17 L5.5,17 C4.67157288,17 4,16.3284271 4,15.5 C4,14.6715729 4.67157288,14 5.5,14 Z" fill="#000000"/>
                                                                            </g>
                                                                        </svg><!--end::Svg Icon--></span>
                                                                    </div>
                                                                    <div class="wizard-label">
                                                                        <p class="mb-0">Kenaikan Pangkat</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Wizard Step 1 Nav-->
                                                            <!--begin::Wizard Step 2 Nav-->
                                                            
                                                            <!--end::Wizard Step 3 Nav-->
                                                            <!--begin::Wizard Step 4 Nav-->
                                                            
                                                            <!--end::Wizard Step 6 Nav-->
                                                        </div>
                                                    </div>
                                                    <!--end: Wizard Nav-->
                                                    <!--begin: Wizard Body-->
                                                    <div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
                                                        <!--begin: Wizard Form-->
                                                        <div class="row">
                                                            <div class="offset-xxl-1 col-xxl-10">
                                                                <form class="form" id="kt_form">
                                                                    <!--begin: Wizard Step 1-->
                                                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                                                        <h4 class="mb-10 font-weight-bold text-dark">Pilih Jenis Layanan</h4>
                                                                        <!--begin::Input-->
                                                                        
                                                                        <!--end::Input-->
                                                                        <!--begin::Input-->
                                                                        
                                                                        <!--end::Input-->
                                                                        <div class="d-flex align-items-center mb-5 bg-light-warning rounded p-4">
                                                                            <!--begin::Icon-->
                                                                            <span class="svg-icon svg-icon-warning mr-5">
                                                                                <span class="svg-icon svg-icon-lg">
                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                                            <path d="M5.5,2 L18.5,2 C19.3284271,2 20,2.67157288 20,3.5 L20,6.5 C20,7.32842712 19.3284271,8 18.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,3.5 C4,2.67157288 4.67157288,2 5.5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L13,6 C13.5522847,6 14,5.55228475 14,5 C14,4.44771525 13.5522847,4 13,4 L11,4 Z" fill="#000000" opacity="0.3"/>
                                                                                            <path d="M5.5,9 L18.5,9 C19.3284271,9 20,9.67157288 20,10.5 L20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 L4,10.5 C4,9.67157288 4.67157288,9 5.5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L13,13 C13.5522847,13 14,12.5522847 14,12 C14,11.4477153 13.5522847,11 13,11 L11,11 Z M5.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,20.5 C20,21.3284271 19.3284271,22 18.5,22 L5.5,22 C4.67157288,22 4,21.3284271 4,20.5 L4,17.5 C4,16.6715729 4.67157288,16 5.5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L13,20 C13.5522847,20 14,19.5522847 14,19 C14,18.4477153 13.5522847,18 13,18 L11,18 Z" fill="#000000"/>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.kenaikan-pangkat.pemberian-kenaikan-pangkat.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Pemberian Kenaikan Pangkat</a>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                            <!--begin::Lable-->
                                                                            <!--end::Lable-->
                                                                        </div>
                                                                        <div class="d-flex align-items-center mb-5 bg-light-success rounded p-4">
                                                                            <!--begin::Icon-->
                                                                            <span class="svg-icon svg-icon-success mr-5">
                                                                                <span class="svg-icon svg-icon-lg">
                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                                            <path d="M5.5,2 L18.5,2 C19.3284271,2 20,2.67157288 20,3.5 L20,6.5 C20,7.32842712 19.3284271,8 18.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,3.5 C4,2.67157288 4.67157288,2 5.5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L13,6 C13.5522847,6 14,5.55228475 14,5 C14,4.44771525 13.5522847,4 13,4 L11,4 Z" fill="#000000" opacity="0.3"/>
                                                                                            <path d="M5.5,9 L18.5,9 C19.3284271,9 20,9.67157288 20,10.5 L20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 L4,10.5 C4,9.67157288 4.67157288,9 5.5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L13,13 C13.5522847,13 14,12.5522847 14,12 C14,11.4477153 13.5522847,11 13,11 L11,11 Z M5.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,20.5 C20,21.3284271 19.3284271,22 18.5,22 L5.5,22 C4.67157288,22 4,21.3284271 4,20.5 L4,17.5 C4,16.6715729 4.67157288,16 5.5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L13,20 C13.5522847,20 14,19.5522847 14,19 C14,18.4477153 13.5522847,18 13,18 L11,18 Z" fill="#000000"/>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.kenaikan-pangkat.pembatalan-keppres-kenaikan-pangkat.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Pembatalan Keppres Kenaikan Pangkat</a>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                            <!--begin::Lable-->
                                                                            <!--end::Lable-->
                                                                        </div>
                                                                        <div class="d-flex align-items-center mb-5 bg-light-primary rounded p-4">
                                                                            <!--begin::Icon-->
                                                                            <span class="svg-icon svg-icon-primary mr-5">
                                                                                <span class="svg-icon svg-icon-lg">
                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                                            <path d="M5.5,2 L18.5,2 C19.3284271,2 20,2.67157288 20,3.5 L20,6.5 C20,7.32842712 19.3284271,8 18.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,3.5 C4,2.67157288 4.67157288,2 5.5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L13,6 C13.5522847,6 14,5.55228475 14,5 C14,4.44771525 13.5522847,4 13,4 L11,4 Z" fill="#000000" opacity="0.3"/>
                                                                                            <path d="M5.5,9 L18.5,9 C19.3284271,9 20,9.67157288 20,10.5 L20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 L4,10.5 C4,9.67157288 4.67157288,9 5.5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L13,13 C13.5522847,13 14,12.5522847 14,12 C14,11.4477153 13.5522847,11 13,11 L11,11 Z M5.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,20.5 C20,21.3284271 19.3284271,22 18.5,22 L5.5,22 C4.67157288,22 4,21.3284271 4,20.5 L4,17.5 C4,16.6715729 4.67157288,16 5.5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L13,20 C13.5522847,20 14,19.5522847 14,19 C14,18.4477153 13.5522847,18 13,18 L11,18 Z" fill="#000000"/>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.kenaikan-pangkat.pengesahan-kenaikan-pangkat.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Petikan Yang Hilang/Rusak</a>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                            <!--begin::Lable-->
                                                                            <!--end::Lable-->
                                                                        </div>
                                                                        <div class="d-flex align-items-center mb-5 bg-light-info rounded p-4">
                                                                            <!--begin::Icon-->
                                                                            <span class="svg-icon svg-icon-info mr-5">
                                                                                <span class="svg-icon svg-icon-lg">
                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                                            <path d="M5.5,2 L18.5,2 C19.3284271,2 20,2.67157288 20,3.5 L20,6.5 C20,7.32842712 19.3284271,8 18.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,3.5 C4,2.67157288 4.67157288,2 5.5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L13,6 C13.5522847,6 14,5.55228475 14,5 C14,4.44771525 13.5522847,4 13,4 L11,4 Z" fill="#000000" opacity="0.3"/>
                                                                                            <path d="M5.5,9 L18.5,9 C19.3284271,9 20,9.67157288 20,10.5 L20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 L4,10.5 C4,9.67157288 4.67157288,9 5.5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L13,13 C13.5522847,13 14,12.5522847 14,12 C14,11.4477153 13.5522847,11 13,11 L11,11 Z M5.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,20.5 C20,21.3284271 19.3284271,22 18.5,22 L5.5,22 C4.67157288,22 4,21.3284271 4,20.5 L4,17.5 C4,16.6715729 4.67157288,16 5.5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L13,20 C13.5522847,20 14,19.5522847 14,19 C14,18.4477153 13.5522847,18 13,18 L11,18 Z" fill="#000000"/>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.kenaikan-pangkat.ralat-keppres-kepangkatan.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Ralat Keppres Kepangkatan</a>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                            <!--begin::Lable-->
                                                                            <!--end::Lable-->
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!--end: Wizard-->
                                                        </div>
                                                        <!--end: Wizard Form-->
                                                    </div>
                                                    <!--end: Wizard Body-->
                                                </div>
                                                <!--end: Wizard-->
                                            </div>                                                            
                                        </div>
                                    </div>
                                </div>
                                <!--end::Button-->
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Search Form-->
                            <div class="mb-7">
                                <div class="row align-items-center">
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="row align-items-center">
                                            <div class="col-md-4 my-2 my-md-0">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="Search By NIP" id="no_surat2" />
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
                            <!--begin: Datatable-->
                            <table class="datatable cell-border" id="tb_administrasi2">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th>Tanggal Agenda</th>
                                        <th>No Surat</th>
                                        <th>Instansi Pengusul</th>
                                        <th>Jenis Usulan</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jabatan Lama</th>
                                        <th>Jabatan Baru</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pengangkatans as $pengangkatan)
                                    <tr>
                                        <td>{{ $pengangkatan->tanggal_surat_usulan }}</td>
                                        <td>{{ $pengangkatan->no_surat_usulan }}</td>
                                        <td>{{ $pengangkatan->instansi_pengusul }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($pengangkatan->jenis_layanan) }}</div></td>
                                        <td><div style="color: #3699FF;">{{ $pengangkatan->nip }}</div></td>
                                        <td>{{ $pengangkatan->nama }}</td>
                                        <td>{{ $pengangkatan->jabatan_lama }}</td>
                                        <td>{{ $pengangkatan->jabatan_baru }}</td>
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