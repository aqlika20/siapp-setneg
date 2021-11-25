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
                                <h3 class="card-label">Daftar Surat Usulan Jabatan Fungsional
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
                                                                        <span class="svg-icon svg-icon-2x">
                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                                                </g>
                                                                            </svg>
                                                                            <!--end::Svg Icon-->
                                                                        </span>
                                                                    </div>
                                                                    <div class="wizard-label">
                                                                        <p class="mb-0">Pengangkatan dan Pemberhentian Pejabat Fungsional Keahlian Utama</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Wizard Step 1 Nav-->
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
                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                            <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                                                                            <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.pengangkatan-pejabat-fku.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Pengangkatan Pejabat Fungsional Ahli Utama melalui Promosi</a>
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
                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                            <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                                                                            <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.perpindahan-pejabat-fku.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Pengangkatan Pejabat Fungsional Ahli Utama melalui perpindahan dari jabatan lain</a>
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
                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                            <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                                                                            <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.pemberhentian-pejabat-fku.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Pemberhentian Pejabat Fungsional Keahlian Utama</a>
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
                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                            <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                                                                            <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.ralat-keppres-fku.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Usulan Lainnya</a>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                            <!--begin::Lable-->
                                                                            <!--end::Lable-->
                                                                        </div>
                                                                    </div>
                                                                    <!--end: Wizard Step 1-->
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
                                                    <input type="text" class="form-control" placeholder="Search By NIP" id="no_surat" />
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
                            <table class="datatable cell-border" id="tb_administrasi">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <!-- <th>Tanggal Mengajukan</th>
                                        <th>Jenis Usulan</th>
                                        <th>Status</th> -->

                                        <th>Tanggal Agenda</th>
                                        <th>No Surat</th>
                                        <th>Instansi Pengusul</th>
                                        <th>Jenis Usulan</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pengangkatans as $pengangkatan)
                                    <tr>
                                        <!-- <td>{{ Helper::convertDate($pengangkatan->created_at)  }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($pengangkatan->jenis_layanan) }}</div></td>
                                        <td>{{ Helper::defineStatusBy($pengangkatan->status) }}</td> -->

                                        <td>{{ $pengangkatan->tanggal_surat_usulan }}</td>
                                        <td>{{ $pengangkatan->no_surat_usulan }}</td>
                                        <td>{{ $pengangkatan->instansi_pengusul }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($pengangkatan->jenis_layanan) }}</div></td>
                                        <td><div style="color: #3699FF;">{{ $pengangkatan->nip }}</div></td>
                                        <td>{{ $pengangkatan->nama }}</td>
                                        <td>{{ Helper::defineStatusBy($pengangkatan->status) }}</td>
                                    </tr>
                                @endforeach

                                @foreach($strukturals as $struktural)
                                    <tr>
                                        <!-- <td>{{ Helper::convertDate($struktural->created_at) }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($struktural->jenis_layanan) }}</div></td>
                                        <td>{{ Helper::defineStatusBy($struktural->status) }}</td> -->

                                        <td>{{ $struktural->tanggal_surat_usulan }}</td>
                                        <td>{{ $struktural->no_surat_usulan }}</td>
                                        <td>{{ $struktural->instansi_pengusul }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($struktural->jenis_layanan) }}</div></td>
                                        <td><div style="color: #3699FF;">{{ $struktural->nip }}</div></td>
                                        <td>{{ $struktural->nama }}</td>
                                        <td>{{ Helper::defineStatusBy($struktural->status) }}</td>
                                    </tr>
                                @endforeach
                                
                                @foreach($lainnyas as $lainnya)
                                    <tr>
                                        <!-- <td>{{ Helper::convertDate($lainnya->created_at) }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($lainnya->jenis_layanan) }}</div></td>
                                        <td>{{ Helper::defineStatusBy($lainnya->status) }}</td> -->

                                        <td>{{ $lainnya->tanggal_surat_usulan }}</td>
                                        <td>{{ $lainnya->no_surat_usulan }}</td>
                                        <td>{{ $lainnya->instansi_pengusul }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($lainnya->jenis_layanan) }}</div></td>
                                        <td><div style="color: #3699FF;">{{ $lainnya->nip }}</div></td>
                                        <td>{{ $lainnya->nama }}</td>
                                        <td>{{ Helper::defineStatusBy($lainnya->status) }}</td>
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