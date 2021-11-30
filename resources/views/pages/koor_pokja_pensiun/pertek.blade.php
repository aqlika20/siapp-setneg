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
                                @foreach($pemberhentians as $pemberhentian)
                                    <tr>
                                        <!-- <td>{{ Helper::convertDate($pemberhentian->created_at) }}</td>
                                        <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($pemberhentian->jenis_layanan) }}</div></td>
                                        <td>{{ Helper::defineStatusBy($pemberhentian->status) }}</td> -->

										<td>{{ Helper::defineJenisLayananBy($pemberhentian->jenis_layanan)  }}</td>
                                        <td>{{ $pemberhentian->no_surat_usulan }}</td>
                                        <td>{{ $pemberhentian->nama }}</td>
                                        <td><div style="color: #FFA800;">{{ $pemberhentian->nip }}</div></td>
                                        <td><div style="text-align: center;"><span class="label label-lg label-light-success label-inline">{{ Helper::definePertek($pemberhentian->nip) }}</span></div></td>
                                        <td>
                                        @if(  Helper::definePertek($pemberhentian->nip)  == "Pertek Tersedia" )
											<a href="{{route('koor-pokja-pensiun.pertek.pemberhentian.verif', ['id' => $pemberhentian->id])}}" type="button" class="btn btn-light-warning btn-xs">
												Detail
											</a>	
											<a href="{{route('koor-pokja-pensiun.inbox.distributor.index', ['id' => $pemberhentian->id, 'jenis_layanan' => $pemberhentian->jenis_layanan])}}" type="button" class="btn btn-success btn-xs">
												Distribusi
											</a>
                                        @else
                                            <a href="{{route('koor-pokja-pensiun.inbox.distributor.index', ['id' => $pemberhentian->id, 'jenis_layanan' => $pemberhentian->jenis_layanan])}}" type="button" class="btn btn-success btn-xs">
												Distribusi
											</a>
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