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
                                <h3 class="card-label">Inbox
                            </div>
                            <div class="card-toolbar">
                                <!--begin::Button-->
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
                                                            <!--begin::Wizard Step 2 Nav-->
                                                            <div class="wizard-step" data-wizard-type="step" style="margin-bottom: 10px;">
                                                                <div class="wizard-wrapper">
                                                                    <div class="wizard-icon">
                                                                        <span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Layout/Layout-left-panel-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                                <path d="M10,4 L21,4 C21.5522847,4 22,4.44771525 22,5 L22,7 C22,7.55228475 21.5522847,8 21,8 L10,8 C9.44771525,8 9,7.55228475 9,7 L9,5 C9,4.44771525 9.44771525,4 10,4 Z M10,10 L21,10 C21.5522847,10 22,10.4477153 22,11 L22,13 C22,13.5522847 21.5522847,14 21,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L21,16 C21.5522847,16 22,16.4477153 22,17 L22,19 C22,19.5522847 21.5522847,20 21,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z" fill="#000000"/>
                                                                                <rect fill="#000000" opacity="0.3" x="2" y="4" width="5" height="16" rx="1"/>
                                                                            </g>
                                                                        </svg><!--end::Svg Icon--></span>
                                                                    </div>
                                                                    <div class="wizard-label">
                                                                        <p class="mb-0">Pengangkatan dan Pemberhentian Pejabat Non Struktural dan Pejabat Lainnya</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Wizard Step 2 Nav-->
                                                            <!--begin::Wizard Step 3 Nav-->
                                                            <div class="wizard-step" data-wizard-type="step" style="margin-bottom: 10px;">
                                                                <div class="wizard-wrapper">
                                                                    <div class="wizard-icon">
                                                                        <span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Communication/Clipboard-check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                                <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                                                                                <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000"/>
                                                                                <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                                                                            </g>
                                                                        </svg><!--end::Svg Icon--></span>
                                                                    </div>
                                                                    <div class="wizard-label">
                                                                        <p class="mb-0">Persetujuan Pengangkatan Staf Khusus Menteri / Kepala Lembaga</p>
                                                                    </div>
                                                                </div>
                                                            </div>
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
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.pengangkatan-pejabat-fku.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Pengangkatan Pejabat Fungsional Keahlian Utama</a>
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
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.perpindahan-pejabat-fku.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Perpindahan Pejabat Fungsional Keahlian Utama</a>
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
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.ralat-keppres-fku.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Ralat Keppres Jabatan Fungsional Keahlian Utama</a>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                            <!--begin::Lable-->
                                                                            <!--end::Lable-->
                                                                        </div>
                                                                        <div class="d-flex align-items-center mb-5 bg-light-danger rounded p-4">
                                                                            <!--begin::Icon-->
                                                                            <span class="svg-icon svg-icon-danger mr-5">
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
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.pembatalan-keppres-jabatan-fku.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Pembatalan Keppres Jabatan Fungsional Keahlian Utama</a>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                            <!--begin::Lable-->
                                                                            <!--end::Lable-->
                                                                        </div>
                                                                    </div>
                                                                    <!--end: Wizard Step 1-->
                                                                    <!--begin: Wizard Step 2-->
                                                                    <div class="pb-5" data-wizard-type="step-content">
                                                                        <h4 class="mb-10 font-weight-bold text-dark">Pilih Jenis Layanan</h4>
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
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.pengangkatan-pejabat-ns.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Pengangkatan Pejabat Non Struktural</a>
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
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.pemberhentian-pejabat-ns.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Pemberhentian Pejabat Non Struktural</a>
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
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.ralat-keppres-jabatan-ns.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Ralat Keppres Jabatan Non Struktural</a>
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
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.pembatalan-keppres-jabatan-ns.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Pembatalan Keppres Jabatan Non Struktural</a>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                            <!--begin::Lable-->
                                                                            <!--end::Lable-->
                                                                        </div>
                                                                    </div>
                                                                    <!--end: Wizard Step 2-->
                                                                    <!--begin: Wizard Step 3-->
                                                                    <div class="pb-5" data-wizard-type="step-content">
                                                                        <h4 class="mb-10 font-weight-bold text-dark">Pilih Jenis Layanan</h4>
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
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.pengangkatan-pejabat-lainnya.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Pengangkatan Pejabat Lainnya</a>
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
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.pemberhentian-pejabat-lainnya.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Pemberhentian Pejabat Lainnya</a>
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
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.ralat-keppres-jabatan-lainnya.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Ralat Keppres Jabatan Lainnya</a>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                            <!--begin::Lable-->
                                                                            <!--end::Lable-->
                                                                        </div>
                                                                        <div class="d-flex align-items-center mb-5 bg-light-danger rounded p-4">
                                                                            <!--begin::Icon-->
                                                                            <span class="svg-icon svg-icon-danger mr-5">
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
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.pembatalan-keppres-jabatan-lainnya.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Pembatalan Keppres Jabatan Lainnya</a>

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
                                                                                <a href="{{ route('pic.administrasi.surat-usulan.persetujuan-pengangkatan-staf-khusus.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Persetujuan pengangkatan Staf Khusus Menteri/Kepala Lembaga</a>
                                                                                <div class="wizard-desc">Produk Surat Dinas</div>

                                                                            </div>
                                                                            <!--end::Title-->
                                                                            <!--begin::Lable-->
                                                                            <!--end::Lable-->
                                                                        </div>
                                                                        <!--end::Select-->
                                                                    </div>
                                                                    <!--end: Wizard Step 3-->
                                                                    <!--begin: Wizard Actions-->
                                                                    <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                                        <div class="mr-2">
                                                                            <a  class="btn btn-light-primary font-weight-bold mr-2" data-wizard-type="action-prev">
                                                                                <span class="svg-icon svg-icon-2x svg-icon-hover"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Angle-double-left.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                                                                        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                                                                                        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                                                                                    </g>
                                                                                </svg><!--end::Svg Icon--></span>
                                                                            </a>
                                                                        </div>
                                                                        <div>
                                                                            <a  class="btn btn-primary font-weight-bold mr-2" data-wizard-type="action-next">
                                                                                <span class="svg-icon svg-icon-light svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Angle-double-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                                                                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"/>
                                                                                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                                                                                    </g>
                                                                                </svg><!--end::Svg Icon--></span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!--end: Wizard Actions-->
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
                        <div class="card card-custom">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_tab_pane_4_1" role="tabpanel" aria-labelledby="kt_tab_pane_4_1">
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
                                                    <th>Jabatan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($pengangkatans as $pengangkatan)
                                                    <tr>
                                                        <td>{{ Helper::converttanggal($pengangkatan->tanggal_surat_usulan) }}</td>
                                                        <td>{{ $pengangkatan->no_surat_usulan }}</td>
                                                        <td>{{ $pengangkatan->instansi_pengusul }}</td>
                                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($pengangkatan->jenis_layanan) }}</div></td>
                                                        <td><div style="color: #3699FF;">{{ $pengangkatan->nip }}</div></td>
                                                        <td>{{ $pengangkatan->nama }}</td>
                                                        <td>{{ $pengangkatan->jabatan_lama }}</td>
                                                        <td>
                                                            <a href="{{route('jf-ahli-terampil-p4.jfku.verif', ['id' => $pengangkatan->id])}}" type="button" class="btn btn-success btn-sm">
                                                                Verifikasi
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <!--end: Datatable-->
                                    </div>	
                                </div>	
                            </div>
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