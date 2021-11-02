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
                                <h3 class="card-label">Pertek
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

                                        <th>Surat Usulan</th>
                                        <th>Nomor Surat</th>
                                        <th>Atas Nama</th>
                                        <th>NIP</th>
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

                                        <td>{{ Helper::defineJenisLayananBy($pengangkatan->jenis_layanan)  }}</td>
                                        <td>{{ $pengangkatan->no_surat_usulan }}</td>
                                        <td>{{ $pengangkatan->nama }}</td>
                                        <td><div style="color: #FFA800;">{{ $pengangkatan->nip }}</div></td>
                                        <td><div style="text-align: center;"><span class="label label-lg label-light-success label-inline">{{ Helper::defineStatusBy($pengangkatan->status) }}</span></div></td>
										<td>
											<a href="{{route('koor-pokja.inbox.jfku.verif', ['id' => $pengangkatan->id])}}" type="button" class="btn btn-light-warning btn-xs">
												Detail
											</a>
											<a href="{{route('koor-pokja.inbox.distributor.index', ['id' => $pengangkatan->id, 'jenis_layanan' => $pengangkatan->jenis_layanan])}}" type="button" class="btn btn-success btn-xs">
												Distribusi
											</a>
										</td>
                                    </tr>
                                @endforeach

                                @foreach($strukturals as $struktural)
                                    <tr>
                                        <!-- <td>{{ Helper::convertDate($struktural->created_at) }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($struktural->jenis_layanan) }}</div></td>
                                        <td>{{ Helper::defineStatusBy($struktural->status) }}</td> -->

										<td>{{ Helper::defineJenisLayananBy($struktural->jenis_layanan)  }}</td>
                                        <td>{{ $struktural->no_surat_usulan }}</td>
                                        <td>{{ $struktural->nama }}</td>
                                        <td><div style="color: #FFA800;">{{ $struktural->nip }}</div></td>
                                        <td><div style="text-align: center;"><span class="label label-lg label-light-success label-inline">{{ Helper::defineStatusBy($struktural->status) }}</span></div></td>
										<td>
											<a href="{{route('koor-pokja.inbox.ns.verif', ['id' => $struktural->id])}}" type="button" class="btn btn-light-warning btn-xs">
												Detail
											</a>
											<a href="{{route('koor-pokja.inbox.distributor.index', ['id' => $pengangkatan->id, 'jenis_layanan' => $pengangkatan->jenis_layanan])}}" type="button" class="btn btn-success btn-xs">
												Distribusi
											</a>
										</td>
                                    </tr>
                                @endforeach
                                
                                @foreach($lainnyas as $lainnya)
                                    <tr>
                                        <!-- <td>{{ Helper::convertDate($lainnya->created_at) }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($lainnya->jenis_layanan) }}</div></td>
                                        <td>{{ Helper::defineStatusBy($lainnya->status) }}</td> -->

										<td>{{ Helper::defineJenisLayananBy($lainnya->jenis_layanan)  }}</td>
                                        <td>{{ $lainnya->no_surat_usulan }}</td>
                                        <td>{{ $lainnya->nama }}</td>
                                        <td><div style="color: #FFA800;">{{ $lainnya->nip }}</div></td>
                                        <td><div style="text-align: center;"><span class="label label-lg label-light-success label-inline">{{ Helper::defineStatusBy($lainnya->status) }}</span></div></td>
										<td>
											<a href="{{route('koor-pokja.inbox.lainnya.verif', ['id' => $lainnya->id])}}" type="button" class="btn btn-light-warning btn-xs">
												Detail
											</a>
											<a href="{{route('koor-pokja.inbox.distributor.index', ['id' => $pengangkatan->id, 'jenis_layanan' => $pengangkatan->jenis_layanan])}}" type="button" class="btn btn-success btn-xs">
												Distribusi
											</a>
										</td>
                                    </tr>
                                @endforeach

                                @foreach($kenaikans as $kenaikan)
                                    <tr>
                                        <!-- <td>{{ Helper::convertDate($kenaikan->created_at) }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($kenaikan->jenis_layanan) }}</div></td>
                                        <td>{{ Helper::defineStatusBy($kenaikan->status) }}</td> -->

										<td>{{ Helper::defineJenisLayananBy($kenaikan->jenis_layanan)  }}</td>
                                        <td>{{ $kenaikan->no_surat_usulan }}</td>
                                        <td>{{ $kenaikan->nama }}</td>
                                        <td><div style="color: #FFA800;">{{ $kenaikan->nip }}</div></td>
                                        <td><div style="text-align: center;"><span class="label label-lg label-light-success label-inline">{{ Helper::defineStatusBy($kenaikan->status) }}</span></div></td>
										<td>
											<a href="{{route('koor-pokja.inbox.kenaikan_pangkat.verif', ['id' => $kenaikan->id])}}" type="button" class="btn btn-light-warning btn-xs">
												Detail
											</a>
											<a href="{{route('koor-pokja.inbox.distributor.index', ['id' => $pengangkatan->id, 'jenis_layanan' => $pengangkatan->jenis_layanan])}}" type="button" class="btn btn-success btn-xs">
												Distribusi
											</a>
										</td>
                                    </tr>
                                @endforeach

                                @foreach($pemberhentians as $pemberhentian)
                                    <tr>
                                        <!-- <td>{{ Helper::convertDate($pemberhentian->created_at) }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($pemberhentian->jenis_layanan) }}</div></td>
                                        <td>{{ Helper::defineStatusBy($pemberhentian->status) }}</td> -->

										<td>{{ Helper::defineJenisLayananBy($pemberhentian->jenis_layanan)  }}</td>
                                        <td>{{ $pemberhentian->no_surat_usulan }}</td>
                                        <td>{{ $pemberhentian->nama }}</td>
                                        <td><div style="color: #FFA800;">{{ $pemberhentian->nip }}</div></td>
                                        <td><div style="text-align: center;"><span class="label label-lg label-light-success label-inline">{{ Helper::defineStatusBy($pemberhentian->status) }}</span></div></td>
										<td>
											<a href="{{route('koor-pokja.inbox.pemberhentian.verif', ['id' => $pemberhentian->id])}}" type="button" class="btn btn-light-warning btn-xs">
												Detail
											</a>	
											<a href="{{route('koor-pokja.inbox.distributor.index', ['id' => $pengangkatan->id, 'jenis_layanan' => $pengangkatan->jenis_layanan])}}" type="button" class="btn btn-success btn-xs">
												Distribusi
											</a>
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