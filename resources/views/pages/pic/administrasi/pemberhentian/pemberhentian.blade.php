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
                                                                        <p class="mb-0">Pemberhentian</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wizard-step" data-wizard-type="step" style="margin-bottom: 10px; background-color: #ffffff;">	
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
                                                                                            <path d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z" fill="#000000" opacity="0.3"/>
                                                                                            <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"/>
                                                                                            <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"/>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.pemberhentian.bup-non-kpp.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">BUP Non KPP</a>
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
                                                                                            <path d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z" fill="#000000" opacity="0.3"/>
                                                                                            <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"/>
                                                                                            <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"/>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.pemberhentian.bup-kpp.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">BUP KPP</a>
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
                                                                                            <path d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z" fill="#000000" opacity="0.3"/>
                                                                                            <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"/>
                                                                                            <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"/>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.pemberhentian.berhenti-atas-permintaan-sendiri.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Berhenti Atas Permintaan Sendiri</a>
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
                                                                                            <path d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z" fill="#000000" opacity="0.3"/>
                                                                                            <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"/>
                                                                                            <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"/>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.pemberhentian.non-bup-jda-non-kpp.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Non BUP Janda/Duda/Anak non KPP</a>
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
                                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                                            <path d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z" fill="#000000" opacity="0.3"/>
                                                                                            <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"/>
                                                                                            <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"/>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.pemberhentian.non-bup-jda-kpp.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Non BUP Janda/Duda/Anak KPP</a>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                            <!--begin::Lable-->
                                                                            <!--end::Lable-->
                                                                        </div>
                                                                        <div class="d-flex align-items-center mb-5 bg-light-warning rounded p-4">
                                                                            <!--begin::Icon-->
                                                                            <span class="svg-icon svg-icon-warning mr-5">
                                                                                <span class="svg-icon svg-icon-lg">
                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                                            <path d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z" fill="#000000" opacity="0.3"/>
                                                                                            <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"/>
                                                                                            <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"/>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.pemberhentian.berhenti-tidak-dengan-hormat.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Berhenti Tidak Dengan Hormat</a>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                            <!--begin::Lable-->
                                                                            <!--end::Lable-->
                                                                        </div>
                                                                        </div>
                                                                        <div class="pb-5" data-wizard-type="step-content">
                                                                            <h4 class="mb-10 font-weight-bold text-dark">Pilih Jenis Layanan</h4>

                                                                        <div class="d-flex align-items-center mb-5 bg-light-warning rounded p-4">
                                                                            <!--begin::Icon-->
                                                                            <span class="svg-icon svg-icon-warning mr-5">
                                                                                <span class="svg-icon svg-icon-lg">
                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                                            <path d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z" fill="#000000" opacity="0.3"/>
                                                                                            <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"/>
                                                                                            <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"/>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.pemberhentian.anumerta.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Anumerta</a>
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
                                                                                            <path d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z" fill="#000000" opacity="0.3"/>
                                                                                            <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"/>
                                                                                            <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"/>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.pemberhentian.pemberhentian-sementara.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Pemberhentian Sementara</a>
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
                                                                                            <path d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z" fill="#000000" opacity="0.3"/>
                                                                                            <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"/>
                                                                                            <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"/>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.pemberhentian.ralat-keppres-pemberhentian.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Ralat Keppres Pemberhentian</a>
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
                                                                                            <path d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z" fill="#000000" opacity="0.3"/>
                                                                                            <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"/>
                                                                                            <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"/>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.pemberhentian.pembatalan-keppres-pemberhentian.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Pembatalan Keppres Pemberhentian</a>
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
                                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                                            <path d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z" fill="#000000" opacity="0.3"/>
                                                                                            <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"/>
                                                                                            <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"/>
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.pemberhentian.petikan-keppres-yang-hilang.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Petikan Keppres yang Hilang/Rusak</a>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                            <!--begin::Lable-->
                                                                            <!--end::Lable-->
                                                                        </div>
                                                                        <div class="d-flex align-items-center mb-5 rounded p-4">
                                                                            <!--begin::Icon-->
                                                                            <span class="svg-icon mr-5">
                                                                                <span class="svg-icon svg-icon-lg">
                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                                            </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </span>
                                                                            <!--end::Icon-->
                                                                            <!--begin::Title-->
                                                                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                                                                <a href="{{ route('pic.administrasi.kenaikan-pangkat.index') }}" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1"></a>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                            <!--begin::Lable-->
                                                                            <!--end::Lable-->
                                                                        </div>
                                                                    </div>
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
                                                                    
                                                                    <!--end: Wizard Step 1-->
                                                                    <!--begin: Wizard Step 2-->
                                                                    <!--end: Wizard Step 2-->
                                                                    <!--begin: Wizard Step 3-->
                                                                    <!--end: Wizard Step 3-->
                                                                    <!--begin: Wizard Step 4-->
                                                                    <!--end: Wizard Step 4-->
                                                                    <!--begin: Wizard Step 5-->
                                                                    <!--end: Wizard Step 5-->
                                                                    <!--begin: Wizard Step 6-->
                                                                    <!--end: Wizard Step 6-->
                                                                    <!--begin: Wizard Actions-->
                                                                    
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
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
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
                                        <td>{{ $pengangkatan->instansi}}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($pengangkatan->jenis_layanan) }}</div></td>
                                        <td><div style="color: #3699FF;">{{ $pengangkatan->nip }}</div></td>
                                        <td>{{ $pengangkatan->nama }}</td>
                                        <td>{{ Helper::defineStatusBy($pengangkatan->status) }}</td>
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