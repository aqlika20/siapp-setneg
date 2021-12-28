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
                                        <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#tab_baru">Baru</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#tab_proses">Proses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#tab_pending">Pending</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#tab_tolak">Ditolak</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <!--begin::Body-->
                            <div class="card-body pt-2 pb-0 mt-n3">
                                <div class="tab-content mt-5" id="myTabTables11">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="tab_baru" role="tabpanel" aria-labelledby="tab_baru">
                                        <!--begin::Table-->
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
                                            <table class="datatable cell-border" id="tb_baru">
                                                <thead>
                                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                        <th>Tanggal Agenda</th>
                                                        <th>No Surat</th>
                                                        <th>Instansi Pengusul</th>
                                                        <th>Jenis Usulan</th>
                                                        <th>NIP</th>
                                                        <th>Nama</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach($kenaikans as $kenaikan)
                                                        <tr>
                                                            <td>{{ $kenaikan->tanggal_surat_usulan }}</td>
                                                            <td>{{ $kenaikan->no_surat_usulan }}</td>
                                                            <td>{{ $kenaikan->instansi_pengusul }}</td>
                                                            <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($kenaikan->jenis_layanan) }}</div></td>
                                                            <td><div style="color: #3699FF;">{{ $kenaikan->nip }}</div></td>
                                                            <td>{{ $kenaikan->nama }}</td>
                                                            <td>
                                                                <a href="{{route('jf-ahli-terampil-kp.inbox.kenaikan_pangkat.verif', ['id' => $kenaikan->id])}}" type="button" class="btn btn-success font-weight-bold align-items-md-end">Verifikasi</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="tab_proses" role="tabpanel" aria-labelledby="tab_proses">
                                        <!--begin::Table-->
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
                                        <table class="datatable cell-border" id="tb_proses">
                                            <thead>
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th>Tanggal Agenda</th>
                                                    <th>No Surat</th>
                                                    <th>Instansi Pengusul</th>
                                                    <th>Jenis Usulan</th>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              
                                                @foreach($kenaikans as $kenaikan)
                                                        <tr>
                                                            <td>{{ $kenaikan->tanggal_surat_usulan }}</td>
                                                            <td>{{ $kenaikan->no_surat_usulan }}</td>
                                                            <td>{{ $kenaikan->instansi_pengusul }}</td>
                                                            <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($kenaikan->jenis_layanan) }}</div></td>
                                                            <td><div style="color: #3699FF;">{{ $kenaikan->nip }}</div></td>
                                                            <td>{{ $kenaikan->nama }}</td>
                                                            <td>
                                                                <a href="{{route('jf-ahli-terampil-kp.inbox.kenaikan_pangkat.verif', ['id' => $kenaikan->id])}}" type="button" class="btn btn-success font-weight-bold align-items-md-end">Verifikasi</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="tab_pending" role="tabpanel" aria-labelledby="tab_pending">
                                        <!--begin::Table-->
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
                                        <table class="datatable cell-border" id="tb_pending">
                                            <thead>
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th>Tanggal Agenda</th>
                                                    <th>No Surat</th>
                                                    <th>Instansi Pengusul</th>
                                                    <th>Jenis Usulan</th>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($kenaikan_pendings as $kenaikan_pending)
                                                        <tr>
                                                            <td>{{ $kenaikan_pending->tanggal_surat_usulan }}</td>
                                                            <td>{{ $kenaikan_pending->no_surat_usulan }}</td>
                                                            <td>{{ $kenaikan_pending->instansi_pengusul }}</td>
                                                            <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($kenaikan_pending->jenis_layanan) }}</div></td>
                                                            <td><div style="color: #3699FF;">{{ $kenaikan_pending->nip }}</div></td>
                                                            <td>{{ $kenaikan_pending->nama }}</td>
                                                            <td>
                                                                <a href="{{route('jf-ahli-terampil-kp.inbox.kenaikan_pangkat.verif', ['id' => $kenaikan_pending->id])}}" type="button" class="btn btn-success font-weight-bold align-items-md-end">Verifikasi</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="tab_tolak" role="tabpanel" aria-labelledby="tab_tolak">
                                        <!--begin::Table-->
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
                                        <table class="datatable cell-border" id="tb_tolak">
                                            <thead>
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th>Tanggal Agenda</th>
                                                    <th>No Surat</th>
                                                    <th>Instansi Pengusul</th>
                                                    <th>Jenis Usulan</th>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($kenaikan_tolaks as $kenaikan_tolak)
                                                        <tr>
                                                            <td>{{ $kenaikan_tolak->tanggal_surat_usulan }}</td>
                                                            <td>{{ $kenaikan_tolak->no_surat_usulan }}</td>
                                                            <td>{{ $kenaikan_tolak->instansi_pengusul }}</td>
                                                            <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($kenaikan_tolak->jenis_layanan) }}</div></td>
                                                            <td><div style="color: #3699FF;">{{ $kenaikan_tolak->nip }}</div></td>
                                                            <td>{{ $kenaikan_tolak->nama }}</td>
                                                            <td>
                                                                <a href="{{route('jf-ahli-terampil-kp.inbox.kenaikan_pangkat.verif', ['id' => $kenaikan_tolak->id])}}" type="button" class="btn btn-success font-weight-bold align-items-md-end">Verifikasi</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>                                    
                                    <!--end::Tap pane-->
                                </div>
                            </div>
                            <!--end: Body-->   
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
<script> 
    $(function(){
        var education_card = new KTCard('education_card');
    })
</script>
<script src="{{ asset('js/pages/custom/wizard/wizard-2.js') }}"></script>
<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection