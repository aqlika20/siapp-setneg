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
                            <!--begin: Search Form-->
                            
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-2 pb-0 mt-n3">
                                <div class="tab-content mt-5" id="myTabTables11">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="tab_baru" role="tabpanel" aria-labelledby="tab_baru">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table data-table-bordered datatable-head-custom" id="jabatan_fungsional_baru">
                                                <thead>
                                                    <tr>
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
                                                    @foreach($pengangkatans as $pengangkatan)
                                                        <tr>
                                                            <td>{{ $pengangkatan->tgl_surat_usulan }}</td>
                                                            <td>{{ $pengangkatan->no_surat_usulan }}</td>
                                                            <td>{{ $pengangkatan->instansi_pengusul }}</td>
                                                            <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($pengangkatan->jenis_layanan) }}</div></td>
                                                            <td><div style="color: #3699FF;">{{ $pengangkatan->nip }}</div></td>
                                                            <td>{{ $pengangkatan->nama }}</td>
                                                            <td>
                                                                <a href="verifikasi.html"><i class="fa fa-pencil-alt text-success mr-2"></i></a>
                                                                <a href="{{route('koor-pokja.inbox.distributor.index', ['id' => $pengangkatan->id])}}"><i class="fa fa-share text-info mr-1"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade " id="tab_proses" role="tabpanel" aria-labelledby="tab_proses">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table data-table-bordered datatable-head-custom" id="jabatan_fungsional_proses">
                                                <thead>
                                                    <tr>
                                                        <th>Tanggal Agenda</th>
                                                        <th>No Surat</th>
                                                        <th>Instansi Pengusul</th>
                                                        <th>Jenis Usulan</th>
                                                        <th>NIP</th>
                                                        <th>Nama</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($pengangkatans as $pengangkatan)
                                                        <tr>
                                                            <td>{{ $pengangkatan->tgl_surat_usulan }}</td>
                                                            <td>{{ $pengangkatan->no_surat_usulan }}</td>
                                                            <td>{{ $pengangkatan->instansi_pengusul }}</td>
                                                            <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($pengangkatan->jenis_layanan) }}</div></td>
                                                            <td><div style="color: #3699FF;">{{ $pengangkatan->nip }}</div></td>
                                                            <td>{{ $pengangkatan->nama }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <div class="tab-pane fade " id="tab_pending" role="tabpanel" aria-labelledby="tab_pending">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table data-table-bordered datatable-head-custom" id="jabatan_fungsional_pending">
                                                <thead>
                                                    <tr>
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
                                                    @foreach($jfku_pendings as $jfku_pending)
                                                        <tr>
                                                            <td>{{ $jfku_pending->tgl_surat_usulan }}</td>
                                                            <td>{{ $jfku_pending->no_surat_usulan }}</td>
                                                            <td>{{ $jfku_pending->instansi_pengusul }}</td>
                                                            <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($jfku_pending->jenis_layanan) }}</div></td>
                                                            <td><div style="color: #3699FF;">{{ $jfku_pending->nip }}</div></td>
                                                            <td>{{ $jfku_pending->nama }}</td>
                                                            <td>
                                                                <a href="verifikasi_cek.html" type="button" class="btn btn-warning btn-sm">
                                                                    Lihat
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <div class="tab-pane fade " id="tab_tolak" role="tabpanel" aria-labelledby="tab_tolak">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table data-table-bordered datatable-head-custom" id="jabatan_fungsional_tolak">
                                                <thead>
                                                    <tr>
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
                                                    @foreach($jfku_tolaks as $jfku_tolak)
                                                        <tr>
                                                            <td>{{ $jfku_tolak->tgl_surat_usulan }}</td>
                                                            <td>{{ $jfku_tolak->no_surat_usulan }}</td>
                                                            <td>{{ $jfku_tolak->instansi_pengusul }}</td>
                                                            <td><div style="color: #FFA800;">{{ Helper::defineJenisLayananBy($jfku_tolak->jenis_layanan) }}</div></td>
                                                            <td><div style="color: #3699FF;">{{ $jfku_tolak->nip }}</div></td>
                                                            <td>{{ $jfku_tolak->nama }}</td>
                                                            <td>{{ $jfku_tolak->jabatan_fungsional }}</td>
                                                            <td>
                                                                <a href="persetujuan.html" type="button" class="btn btn-light-danger btn-sm">
                                                                    Kembalikan
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <!--end::Tap pane-->
                                </div>
                                <div class="modal fade" id="exampleModalSizeXl" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeXl" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Distribusi Surat Usulan/Pertek</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                @php
                                                    $num_list = 0
                                                @endphp

                                                @foreach($group_lists as $list)
                                                    @php
                                                        $num_list++
                                                    @endphp
                                                    <div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle" id="accordion{{$num_list}}">
                                                        <div class="card">
                                                            <div class="card-header" id="heading{{$num_list}}">
                                                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapse{{$num_list}}">
                                                                    <span class="svg-icon svg-icon-primary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                                <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                                <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                    <div class="card-label pl-4">{{$list->name}}</div>
                                                                </div>
                                                            </div>
                                                            <div id="collapse{{$num_list}}" class="collapse" data-parent="#accordion{{$num_list}}">
                                                                <div class="card-body pl-12">
                                                                    <div class="table-responsive">
                                                                        <th style="width: 200px;"><a href="#" class="btn btn-outline-success"><i class="flaticon2-poll-symbol"></i> Distribusikan Ke Group</a></th>
                                                                        <br>
                                                                        <br>
                                                                        @foreach($group_roles[$list->name] as $role)
                                                                            <table>
                                                                                <th style="width: 200px;"><span class="label label-inline label-pill label-primary" style="height: 35px; font-size: 12px;" >{{$role}}</span></th>
                                                                                <th style="width: 200px;"><a href="#" class="btn btn-outline-success"><i class="flaticon2-poll-symbol"></i> Distribusikan Ke Batch</a></th>
                                                                            </table>
                                                                            <br>
                                                                        
                                                                            <table class="table data-table-bordered datatable-head-custom" id="groupByTable" >
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th style="width: 200px;">Nama</th>
                                                                                        <th>NIP</th>
                                                                                        <th>Aksi</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @foreach($group_users as $user)
                                                                                        @if($list->name == $user->group && $role == $user->role)
                                                                                            <tr>
                                                                                                <td>{{$user->name}}</td>
                                                                                                <td>{{$user->nip}}</td>
                                                                                                <td> <a href="#" class="btn btn-light-info btn-sm">Distribusikan</a> </td>
                                                                                            </tr>
                                                                                        @endif
                                                                                    @endforeach
                                                                                </tbody>
                                                                            </table>
                                                                            <br>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                                <div class="d-flex justify-content-between mt-5 pt-10">
                                                    <div class="mr-2">
                                                    </div>
                                                    <div>
                                                        <a type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" href="form/rkp/text_editor.html">Memo RKP</a>
                                                    </div>
                                                </div>	
                                            </div>     								
                                        </div>
                                    </div>
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
<script> 
    $(function(){
        var education_card = new KTCard('education_card');
    })
</script>
<script src="{{ asset('js/pages/custom/wizard/wizard-2.js') }}"></script>
<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection