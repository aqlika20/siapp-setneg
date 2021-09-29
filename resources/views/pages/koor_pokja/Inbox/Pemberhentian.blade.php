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
                                <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_11_1">Baru</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_2">Proses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_3">Pending</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_4">Ditolak</a>
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
                                                        <th title="Field #1">Tanggal Agenda</th>
                                                        <th title="Field #2">No Surat</th>
                                                        <th title="Field #3">Instansi Pengusul</th>
                                                        <th title="Field #4">Jenis Usulan</th>
                                                        <th title="Field #5">NIP</th>
                                                        <th title="Field #6">Nama</th>
                                                        <th title="Field #7">Jabatan</th>
                                                        <th title="Field #8">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>08-07-2019</td>
                                                        <td>B-17/07/19</td>
                                                        <td>Kemen PUPERA</td>
                                                        <td>
                                                            <div style="color: #FFA800;">Kenaikan Pangkat Pilihan</div>
                                                        </td>
                                                        <td><div style="color: #3699FF;">19187678956987</div></td>

                                                        <td>Minah</td>
                                                        <td>Sekretaris Jendral</td>
                                                        <td>
                                                            <a href="verifikasi.html"><i class="fa fa-pencil-alt text-success mr-2"></i></a>
                                                            <a href="custom/pages/verifikasi.html"><i class="fa fa-archive text-warning mr-2"></i></a>
                                                            <a ><i class="fa fa-share text-info mr-1"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>08-07-2019</td>
                                                        <td>B-15/Jambi/07/19</td>
                                                        <td>Pemprov Jambi</td>
                                                        <td>
                                                            <div style="color: #FFA800;">Kenaikan Pangkat Pilihan</div>
                                                        </td>
                                                        <td><div style="color: #3699FF;">19187678956987</div></td>

                                                        <td>Paijo</td>
                                                        <td>Widyaiswara Keahlian Utama</td>
                                                        <td>
                                                            <a href="verifikasi.html"><i class="fa fa-pencil-alt text-success mr-2"></i></a>
                                                            <a href="custom/pages/verifikasi.html"><i class="fa fa-archive text-warning mr-2"></i></a>
                                                            <a ><i class="fa fa-share text-info mr-1"></i></a>
                                                        </td>												
                                                    </tr>
                                                    <tr>
                                                        <td>08-07-2019</td>
                                                        <td>B-18/BKN/07/19</td>
                                                        <td>BKN</td>
                                                        <td>
                                                            <div style="color: #FFA800;">Kenaikan Pangkat Pilihan</div>
                                                        </td>
                                                        <td><div style="color: #3699FF;">19187678956987</div></td>
                                                        <td>Painem</td>
                                                        <td>Peneliti Keahlian Utama </td>
                                                        <td>
                                                            <a href="verifikasi.html"><i class="fa fa-pencil-alt text-success mr-2"></i></a>
                                                            <a href="custom/pages/verifikasi.html"><i class="fa fa-archive text-warning mr-2"></i></a>
                                                            <a ><i class="fa fa-share text-info mr-1"></i></a>
                                                        </td>												
                                                    </tr>
                                                    <tr>
                                                        <td>08-07-2019</td>
                                                        <td>B-13/08/19</td>
                                                        <td>BPKP</td>
                                                        <td>
                                                            <div style="color: #FFA800;">Kenaikan Pangkat Pilihan</div>
                                                        </td>
                                                        <td><div style="color: #3699FF;">19187678956987</div></td>

                                                        <td>Parto</td>
                                                        <td>Auditor Keahlian Utama</td>
                                                        <td>
                                                            <a href="verifikasi.html"><i class="fa fa-pencil-alt text-success mr-2"></i></a>
                                                            <a href="custom/pages/verifikasi.html"><i class="fa fa-archive text-warning mr-2"></i></a>
                                                            <a ><i class="fa fa-share text-info mr-1"></i></a>
                                                        </td>												
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="kt_tab_pane_11_2" role="tabpanel" aria-labelledby="kt_tab_pane_11_2">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table data-table-bordered datatable-head-custom" id="kt_datatable"> 
                                                <thead>
                                                    <tr>
                                                        <th title="Field #1">Tanggal Agenda</th>
                                                        <th title="Field #2">No Surat</th>
                                                        <th title="Field #3">Instansi Pengusul</th>
                                                        <th title="Field #4">Jenis Usulan</th>
                                                        <th title="Field #5">NIP</th>
                                                        <th title="Field #6">Nama</th>
                                                        <th title="Field #7">Jabatan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>08-07-2019</td>
                                                        <td>B-17/07/19</td>
                                                        <td>Kemen PUPERA</td>
                                                        <td>
                                                            <div style="color: #FFA800;">Kenaikan Pangkat Pilihan</div>
                                                        </td>
                                                        <td><div style="color: #3699FF;">19187678956987</div></td>

                                                        <td>Minah</td>
                                                        <td>Sekretaris Jendral</td>
                                                    </tr>
                                                    <tr>
                                                        <td>08-07-2019</td>
                                                        <td>B-15/Jambi/07/19</td>
                                                        <td>Pemprov Jambi</td>
                                                        <td>
                                                            <div style="color: #FFA800;">Kenaikan Pangkat Pilihan</div>
                                                        </td>
                                                        <td><div style="color: #3699FF;">19187678956987</div></td>

                                                        <td>Paijo</td>
                                                        <td>Widyaiswara Keahlian Utama</td>												
                                                    </tr>
                                                    <tr>
                                                        <td>08-07-2019</td>
                                                        <td>B-18/BKN/07/19</td>
                                                        <td>BKN</td>
                                                        <td>
                                                            <div style="color: #FFA800;">Kenaikan Pangkat Pilihan</div>
                                                        </td>
                                                        <td><div style="color: #3699FF;">19187678956987</div></td>
                                                        <td>Painem</td>
                                                        <td>Peneliti Keahlian Utama </td>											
                                                    </tr>
                                                    <tr>
                                                        <td>08-07-2019</td>
                                                        <td>B-13/08/19</td>
                                                        <td>BPKP</td>
                                                        <td>
                                                            <div style="color: #FFA800;">Kenaikan Pangkat Pilihan</div>
                                                        </td>
                                                        <td><div style="color: #3699FF;">19187678956987</div></td>

                                                        <td>Parto</td>
                                                        <td>Auditor Keahlian Utama</td>											
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <div class="tab-pane fade " id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table data-table-bordered datatable-head-custom" id="kt_datatable"> 
                                                <thead>
                                                    <tr>
                                                        <th title="Field #1">Tanggal Agenda</th>
                                                        <th title="Field #2">No Surat</th>
                                                        <th title="Field #3">Instansi Pengusul</th>
                                                        <th title="Field #4">Jenis Usulan</th>
                                                        <th title="Field #5">NIP</th>
                                                        <th title="Field #6">Nama</th>
                                                        <th title="Field #7">Jabatan</th>
                                                        <th title="Field #8">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>08-07-2019</td>
                                                        <td>B-17/07/19</td>
                                                        <td>Kemen PUPERA</td>
                                                        <td>
                                                            <div style="color: #FFA800;">Kenaikan Pangkat Pilihan</div>
                                                        </td>
                                                        <td><div style="color: #3699FF;">19187678956987</div></td>

                                                        <td>Minah</td>
                                                        <td>Sekretaris Jendral</td>
                                                        <td>
                                                            <a href="verifikasi_cek.html" type="button" class="btn btn-warning btn-sm">
                                                                Lihat
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>08-07-2019</td>
                                                        <td>B-15/Jambi/07/19</td>
                                                        <td>Pemprov Jambi</td>
                                                        <td>
                                                            <div style="color: #FFA800;">Kenaikan Pangkat Pilihan</div>
                                                        </td>
                                                        <td><div style="color: #3699FF;">19187678956987</div></td>

                                                        <td>Paijo</td>
                                                        <td>Widyaiswara Keahlian Utama</td>
                                                        <td>
                                                            <a href="verifikasi_cek.html" type="button" class="btn btn-warning btn-sm">
                                                                Lihat
                                                            </a>
                                                        </td>												
                                                    </tr>
                                                    <tr>
                                                        <td>08-07-2019</td>
                                                        <td>B-18/BKN/07/19</td>
                                                        <td>BKN</td>
                                                        <td>
                                                            <div style="color: #FFA800;">Kenaikan Pangkat Pilihan</div>
                                                        </td>
                                                        <td><div style="color: #3699FF;">19187678956987</div></td>
                                                        <td>Painem</td>
                                                        <td>Peneliti Keahlian Utama </td>
                                                        <td>
                                                            <a href="verifikasi_cek.html" type="button" class="btn btn-warning btn-sm">
                                                                Lihat
                                                            </a>
                                                        </td>												
                                                    </tr>
                                                    <tr>
                                                        <td>08-07-2019</td>
                                                        <td>B-13/08/19</td>
                                                        <td>BPKP</td>
                                                        <td>
                                                            <div style="color: #FFA800;">Kenaikan Pangkat Pilihan</div>
                                                        </td>
                                                        <td><div style="color: #3699FF;">19187678956987</div></td>

                                                        <td>Parto</td>
                                                        <td>Auditor Keahlian Utama</td>
                                                        <td>
                                                            <a href="verifikasi_cek.html" type="button" class="btn btn-warning btn-sm">
                                                                Lihat
                                                            </a>
                                                        </td>												
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <div class="tab-pane fade " id="kt_tab_pane_11_4" role="tabpanel" aria-labelledby="kt_tab_pane_11_4">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table data-table-bordered datatable-head-custom" id="kt_datatable"> 
                                                <thead>
                                                    <tr>
                                                        <th title="Field #1">Tanggal Agenda</th>
                                                        <th title="Field #2">No Surat</th>
                                                        <th title="Field #3">Instansi Pengusul</th>
                                                        <th title="Field #4">Jenis Usulan</th>
                                                        <th title="Field #5">NIP</th>
                                                        <th title="Field #6">Nama</th>
                                                        <th title="Field #7">Jabatan</th>
                                                        <th title="Field #8">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>08-07-2019</td>
                                                        <td>B-17/07/19</td>
                                                        <td>Kemen PUPERA</td>
                                                        <td>
                                                            <div style="color: #FFA800;">Kenaikan Pangkat Pilihan</div>
                                                        </td>
                                                        <td><div style="color: #3699FF;">19187678956987</div></td>

                                                        <td>Minah</td>
                                                        <td>Sekretaris Jendral</td>
                                                        <td>
                                                            <a href="persetujuan.html" type="button" class="btn btn-light-danger btn-sm">
                                                                Kembalikan
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>08-07-2019</td>
                                                        <td>B-15/Jambi/07/19</td>
                                                        <td>Pemprov Jambi</td>
                                                        <td>
                                                            <div style="color: #FFA800;">Kenaikan Pangkat Pilihan</div>
                                                        </td>
                                                        <td><div style="color: #3699FF;">19187678956987</div></td>

                                                        <td>Paijo</td>
                                                        <td>Widyaiswara Keahlian Utama</td>
                                                        <td>
                                                            <a href="persetujuan.html" type="button" class="btn btn-light-danger btn-sm">
                                                                Kembalikan
                                                            </a>
                                                        </td>												
                                                    </tr>
                                                    <tr>
                                                        <td>08-07-2019</td>
                                                        <td>B-18/BKN/07/19</td>
                                                        <td>BKN</td>
                                                        <td>
                                                            <div style="color: #FFA800;">Kenaikan Pangkat Pilihan</div>
                                                        </td>
                                                        <td><div style="color: #3699FF;">19187678956987</div></td>
                                                        <td>Painem</td>
                                                        <td>Peneliti Keahlian Utama </td>
                                                        <td>
                                                            <a href="persetujuan.html" type="button" class="btn btn-light-danger btn-sm">
                                                                Kembalikan
                                                            </a>
                                                        </td>												
                                                    </tr>
                                                    <tr>
                                                        <td>08-07-2019</td>
                                                        <td>B-13/08/19</td>
                                                        <td>BPKP</td>
                                                        <td>
                                                            <div style="color: #FFA800;">Kenaikan Pangkat Pilihan</div>
                                                        </td>
                                                        <td><div style="color: #3699FF;">19187678956987</div></td>

                                                        <td>Parto</td>
                                                        <td>Auditor Keahlian Utama</td>
                                                        <td>
                                                            <a href="persetujuan.html" type="button" class="btn btn-light-danger btn-sm">
                                                                Kembalikan
                                                            </a>
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