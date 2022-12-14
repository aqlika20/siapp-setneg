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
                                <h3 class="card-label">Status Usulan
                            </div>
                            <div class="card-toolbar">
                                <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_11_1">Diproses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_2">Pending</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_3">Ditolak</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <!--begin: Search Form-->
                            
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-2 pb-0 mt-n3">
                                <div class="tab-content mt-5" id="myTabTables11">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="kt_tab_pane_11_1" role="tabpanel" aria-labelledby="kt_tab_pane_11_1">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                                                <thead>
                                                    <tr>
                                                        <th title="Field #1">Jenis Usulan</th>
                                                        <th title="Field #2">Atas Nama</th>
                                                        <th title="Field #3">Tanggal Usulan</th>
                                                        <th title="Field #4">Status Usulan</th>
                                                        <th title="Field #4">Tanggal Persetujuan</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Pengangkatan Pejabat Fungsional Keahlian Utama</td>
                                                        <td>Anang Boni</td>
                                                        <td>
                                                            <div style="color: #FFA800;">13 Des 2020</div>
                                                        </td>
                                                        <td>
                                                            <div >
                                                                <span class="label label-lg label-light-success label-inline">Diproses</span>
                                                            </div>														
                                                        </td>
                                                        <td>
                                                            <div style="color: #3699FF;;">13 Des 2020</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pengangkatan Pejabat Fungsional Keahlian Utama</td>
                                                        <td>Joshua Aidil</td>
                                                        <td>
                                                            <div style="color: #FFA800;">17 Des 2020</div>
                                                        </td>
                                                        <td>
                                                            <div >
                                                                <span class="label label-lg label-light-success label-inline">Diproses</span>
                                                            </div>														
                                                        </td>
                                                        <td>
                                                            <div style="color: #3699FF;;">13 Des 2020</div>
                                                        </td>
                                                    </tr><tr>
                                                        <td>Pengangkatan Pejabat Fungsional Keahlian Utama</td>
                                                        <td>Sapriadi</td>
                                                        <td>
                                                            <div style="color: #FFA800;">06 Des 2020</div>
                                                        </td>
                                                        <td>
                                                            <div >
                                                                <span class="label label-lg label-light-success label-inline">Diproses</span>
                                                            </div>													
                                                        </td>
                                                        <td>
                                                            <div style="color: #3699FF;;">13 Des 2020</div>
                                                        </td>
                                                    </tr><tr>
                                                        <td>Pengangkatan Pejabat Fungsional Keahlian Utama</td>
                                                        <td>Hutagalung Mahadi</td>
                                                        <td>
                                                            <div style="color: #FFA800;">31 Nov 2020</div>
                                                        </td>
                                                        <td class="text-right">
                                                            <div >
                                                                <span class="label label-lg label-light-success label-inline">Diproses</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div style="color: #3699FF;;">13 Des 2020</div>
                                                        </td>
                                                    </tr>
                                                </tr><tr>
                                                    <td>Pengangkatan Pejabat Fungsional Keahlian Utama</td>
                                                    <td>Murtadin Mahmud</td>
                                                    <td>
                                                        <div style="color: #FFA800;"> 10 Des 2020</div>
                                                    </td>
                                                    <td class="text-right">
                                                        <div >
                                                            <span class="label label-lg label-light-success label-inline">Diproses</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div style="color: #3699FF;;">13 Des 2020</div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table data-table-bordered datatable-head-custom" id="kt_datatable"> 
                                                <thead>
                                                    <tr>
                                                        <th title="Field #1">Jenis Usulan</th>
                                                        <th title="Field #2">Atas Nama</th>
                                                        <th title="Field #3">Tanggal Usulan</th>
                                                        <th title="Field #4">Status Usulan</th>
                                                        <th title="Field #4">Tanggal keputusan</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Perpindahan Pejabat Fungsional Keahlian Utama</td>
                                                        <td>Anang Boni</td>
                                                        <td>
                                                            <div style="color: #FFA800;">13 Des 2020</div>
                                                        </td>
                                                        <td>
                                                            <div >
                                                                <span class="label label-lg label-light-danger label-inline">Ditolak</span>
                                                            </div>														
                                                        </td>
                                                        <td>
                                                            <div style="color: #F64E60;">13 Des 2020</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Perpindahan Pejabat Fungsional Keahlian Utama</td>
                                                        <td>Joshua Aidil</td>
                                                        <td>
                                                            <div style="color: #FFA800;">17 Des 2020</div>
                                                        </td>
                                                        <td>
                                                            <div >
                                                                <span class="label label-lg label-light-danger label-inline">Ditolak</span>
                                                            </div>														
                                                        </td>
                                                        <td>
                                                            <div style="color: #F64E60;">13 Des 2020</div>
                                                        </td>
                                                    </tr><tr>
                                                        <td>Perpindahan Pejabat Fungsional Keahlian Utama</td>
                                                        <td>Sapriadi</td>
                                                        <td>
                                                            <div style="color: #FFA800;">06 Des 2020</div>
                                                        </td>
                                                        <td>
                                                            <div >
                                                                <span class="label label-lg label-light-danger label-inline">Ditolak</span>
                                                            </div>													
                                                        </td>
                                                        <td>
                                                            <div style="color: #F64E60;">13 Des 2020</div>
                                                        </td>
                                                    </tr><tr>
                                                        <td>Perpindahan Pejabat Fungsional Keahlian Utama</td>
                                                        <td>Hutagalung Mahadi</td>
                                                        <td>
                                                            <div style="color: #FFA800;">31 Nov 2020</div>
                                                        </td>
                                                        <td >
                                                            <div >
                                                                <span class="label label-lg label-light-danger label-inline">Ditolak</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div style="color: #F64E60;">13 Des 2020</div>
                                                        </td>
                                                    </tr>
                                                </tr><tr>
                                                    <td>Perpindahan Pejabat Fungsional Keahlian Utama</td>
                                                    <td>Murtadin Mahmud</td>
                                                    <td>
                                                        <div style="color: #FFA800;"> 10 Des 2020</div>
                                                    </td>
                                                    <td>
                                                        <div >
                                                            <span class="label label-lg label-light-danger label-inline">Ditolak</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div style="color: #F64E60;">13 Des 2020</div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <div class="tab-pane fade " id="kt_tab_pane_11_2" role="tabpanel" aria-labelledby="kt_tab_pane_11_2">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table data-table-bordered datatable-head-custom" id="kt_datatable"> 
                                                <thead>
                                                    <tr>
                                                        <th title="Field #1">Jenis Usulan</th>
                                                        <th title="Field #2">Atas Nama</th>
                                                        <th title="Field #3">Tanggal Usulan</th>
                                                        <th title="Field #4">Status Usulan</th>
                                                        <th title="Field #4">Batas Perbaikan</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Perpindahan Pejabat Fungsional Keahlian Utama</td>
                                                        <td>Anang Boni</td>
                                                        <td>
                                                            <div style="color: #FFA800;">13 Des 2020</div>
                                                        </td>
                                                        <td>
                                                            <div >
                                                                <span class="label label-lg label-light-warning label-inline">Pending</span>
                                                            </div>														
                                                        </td>
                                                        <td>
                                                            <div style="color: #F64E60;">13 Des 2020</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Perpindahan Pejabat Fungsional Keahlian Utama</td>
                                                        <td>Joshua Aidil</td>
                                                        <td>
                                                            <div style="color: #FFA800;">17 Des 2020</div>
                                                        </td>
                                                        <td>
                                                            <div >
                                                                <span class="label label-lg label-light-warning label-inline">Pending</span>
                                                            </div>														
                                                        </td>
                                                        <td>
                                                            <div style="color: #F64E60;">13 Des 2020</div>
                                                        </td>
                                                    </tr><tr>
                                                        <td>Perpindahan Pejabat Fungsional Keahlian Utama</td>
                                                        <td>Sapriadi</td>
                                                        <td>
                                                            <div style="color: #FFA800;">06 Des 2020</div>
                                                        </td>
                                                        <td>
                                                            <div >
                                                                <span class="label label-lg label-light-warning label-inline">Pending</span>
                                                            </div>													
                                                        </td>
                                                        <td>
                                                            <div style="color: #F64E60;">13 Des 2020</div>
                                                        </td>
                                                    </tr><tr>
                                                        <td>Perpindahan Pejabat Fungsional Keahlian Utama</td>
                                                        <td>Hutagalung Mahadi</td>
                                                        <td>
                                                            <div style="color: #FFA800;">31 Nov 2020</div>
                                                        </td>
                                                        <td >
                                                            <div >
                                                                <span class="label label-lg label-light-warning label-inline">Pending</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div style="color: #F64E60;">13 Des 2020</div>
                                                        </td>
                                                    </tr>
                                                </tr><tr>
                                                    <td>Perpindahan Pejabat Fungsional Keahlian Utama</td>
                                                    <td>Murtadin Mahmud</td>
                                                    <td>
                                                        <div style="color: #FFA800;"> 10 Des 2020</div>
                                                    </td>
                                                    <td>
                                                        <div >
                                                            <span class="label label-lg label-light-warning label-inline">Pending</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div style="color: #F64E60;">13 Des 2020</div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <!--end::Tap pane-->
                                </div>
                            </div>
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