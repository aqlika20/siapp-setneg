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
                                <h3 class="card-label">Management Pengguna </h3>
                            </div>
                            <div class="card-toolbar">
                                <!--begin::Button-->
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#newDataModal">
                                    + Tambah Pengguna Baru
                                </button>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="newDataModal" tabindex="-1" role="dialog" aria-labelledby="newDataModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <form method="POST" action="{{ route('administrator.user-management.store') }}">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="newDataModalLabel">Pengguna Baru</h5>
                                    </div>
                                    <div class="modal-body">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nip" class="col-md-4 col-form-label text-md-right">NIP</label>

                                            <div class="col-md-6">
                                                <input id="nip" type="number" maxlength="18" class="form-control" name="nip" required autocomplete="nip" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                                            <div class="col-md-6">
                                                <select id="role" class="form-control" name="role" required autofocus>
                                                    <option value="">Choose</option>
                                                    @foreach ($roles as $role)
                                                        <option value="{{$role->id}}" {{ old('role') == $role->id ? 'selected' : '' }}>{{$role->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="group" class="col-md-4 col-form-label text-md-right">Group</label>

                                            <div class="col-md-6">
                                                <select id="group" class="form-control" name="group" required autofocus>
                                                    <option value="">Choose</option>
                                                    @foreach ($groups as $group)
                                                        <option value="{{$group->id}}" {{ old('group') == $group->id ? 'selected' : '' }}>{{$group->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                                    </div>
                                </form>
                                </div>
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

                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>Roles</th>
                                        <th>Group</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->nip }}</td>
                                        <td>{{ Helper::defineRole($user->roles_id) }}</td>
                                        <td>{{ Helper::defineGroup($user->groups_id) }}</td>
                                        <td>coming soon..</td>
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
<script>
    $('#role').select2();
    $('#group').select2();
</script>
<script src="{{ asset('js/pages/custom/wizard/wizard-2.js') }}"></script>
<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection