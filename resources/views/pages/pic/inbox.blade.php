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
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pengangkatans as $pengangkatan)
                                    <tr>
                                        <!-- <td>{{ Helper::convertDate($pengangkatan->created_at)  }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($pengangkatan->jenis_layanan) }}</div></td>
                                        <td>{{ Helper::defineStatusBy($pengangkatan->status) }}</td> -->

                                        <td>{{ Helper::converttanggal($pengangkatan->tanggal_surat_usulan) }}</td>
                                        <td>{{ $pengangkatan->no_surat_usulan }}</td>
                                        <td>{{ $pengangkatan->instansi_pengusul }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($pengangkatan->jenis_layanan) }}</div></td>
                                        <td><div style="color: #3699FF;">{{ $pengangkatan->nip }}</div></td>
                                        <td>{{ $pengangkatan->nama }}</td>
                                        <td>{{ Helper::defineStatusBy($pengangkatan->status) }}</td>
                                        <td>
                                            @if($pengangkatan->status == Helper::$usulan_dikembalikan)
                                                <a href="{{route('pic.inbox.kenaikan_pangkat.verif', ['id' => $pengangkatan->id])}}"><i class="fa fa-pencil-alt text-success mr-2"></i></a>
                                                <a href="{{route('pic.inbox.detail-surat-pengembalian.index', ['id' => $pengangkatan->id])}}"><i class="fa flaticon2-file mr-2" style="color: #338AFF;"></i></a>
                                            @endif
                                            @if($pengangkatan->status == Helper::$tolak_jf_ahli || $pengangkatan->status == Helper::$tolak_pokja)
                                                <a href="{{route('pic.inbox.detail-alasan-penolakan.index', ['id' => $pengangkatan->id])}}"><i class="fa flaticon2-file mr-2" style="color: #338AFF;"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                @foreach($kenaikans as $kenaikan)
                                    <tr>
                                        <!-- <td>{{ Helper::convertDate($kenaikan->created_at)  }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($kenaikan->jenis_layanan) }}</div></td>
                                        <td>{{ Helper::defineStatusBy($kenaikan->status) }}</td> -->

                                        <td>{{ Helper::converttanggal($kenaikan->tanggal_surat_usulan) }}</td>
                                        <td>{{ $kenaikan->no_surat_usulan }}</td>
                                        <td>{{ $kenaikan->instansi_pengusul }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($kenaikan->jenis_layanan) }}</div></td>
                                        <td><div style="color: #3699FF;">{{ $kenaikan->nip }}</div></td>
                                        <td>{{ $kenaikan->nama }}</td>
                                        <td>{{ Helper::defineStatusBy($kenaikan->status) }}</td>
                                        <td>
                                            @if($kenaikan->status == Helper::$usulan_dikembalikan)
                                                <a href="{{route('pic.inbox.kenaikan_pangkat.verif', ['id' => $kenaikan->id])}}"><i class="fa fa-pencil-alt text-success mr-2"></i></a>
                                                <a href="{{route('pic.inbox.detail-surat-pengembalian.index', ['id' => $kenaikan->id])}}"><i class="fa flaticon2-file mr-2" style="color: #338AFF;"></i></a>
                                            @endif
                                            @if($kenaikan->status == Helper::$tolak_jf_ahli || $kenaikan->status == Helper::$tolak_pokja)
                                                <a href="{{route('pic.inbox.detail-alasan-penolakan.index', ['id' => $kenaikan->id])}}"><i class="fa flaticon2-file mr-2" style="color: #338AFF;"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                @foreach($pemberhentians as $pemberhentian)
                                    <tr>
                                        <!-- <td>{{ Helper::convertDate($pemberhentian->created_at)  }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($pemberhentian->jenis_layanan) }}</div></td>
                                        <td>{{ Helper::defineStatusBy($pemberhentian->status) }}</td> -->

                                        <td>{{ Helper::converttanggal($pemberhentian->tanggal_surat_usulan) }}</td>
                                        <td>{{ $pemberhentian->no_surat_usulan }}</td>
                                        <td>{{ $pemberhentian->instansi_pengusul }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($pemberhentian->jenis_layanan) }}</div></td>
                                        <td><div style="color: #3699FF;">{{ $pemberhentian->nip }}</div></td>
                                        <td>{{ $pemberhentian->nama }}</td>
                                        <td>{{ Helper::defineStatusBy($pemberhentian->status) }}</td>
                                        <td>
                                            @if($pemberhentian->status == Helper::$usulan_dikembalikan)
                                                <a href="{{route('pic.inbox.kenaikan_pangkat.verif', ['id' => $pemberhentian->id])}}"><i class="fa fa-pencil-alt text-success mr-2"></i></a>
                                                <a href="{{route('pic.inbox.detail-surat-pengembalian.index', ['id' => $pemberhentian->id])}}"><i class="fa flaticon2-file mr-2" style="color: #338AFF;"></i></a>
                                            @endif
                                            @if($pemberhentian->status == Helper::$tolak_jf_ahli || $pemberhentian->status == Helper::$tolak_pokja)
                                                <a href="{{route('pic.inbox.detail-alasan-penolakan.index', ['id' => $pemberhentian->id])}}"><i class="fa flaticon2-file mr-2" style="color: #338AFF;"></i></a>
                                            @endif
                                        </td>
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