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
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('super-admin.user-management.edit',[$user->id]) }}">
                                @csrf
                                @method('PATCH')
                                
                                <div class="form-group row">
                                    <label for="name" class="col-md-6 col-form-label text-md-left">{{ __('Name') }}</label>

                                    <div class="col-md-12">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-6 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="roles_id" class="col-md-6 col-form-label text-md-left">{{ __('Role') }}</label>

                                    <div class="col-md-12">
                                        <select id="roles_id" class="form-control" name="roles_id" required autofocus>
                                            <option value="">Choose</option>
                                                <option value="">All</option>
                                                <option value="1" @if ($user->roles_id == 1) {{ 'selected' }} @endif>Super Admin</option>
                                                <option value="2" @if ($user->roles_id == 2) {{ 'selected' }} @endif>PPIC</option>
                                                <option value="3" @if ($user->roles_id == 3) {{ 'selected' }} @endif>Warehouse</option>
                                                <option value="4" @if ($user->roles_id == 4) {{ 'selected' }} @endif>Production - Icing</option>
                                                <option value="5" @if ($user->roles_id == 5) {{ 'selected' }} @endif>Production - Batching 1</option>
                                                <option value="6" @if ($user->roles_id == 6) {{ 'selected' }} @endif>Production - Batching 2</option>
                                                <option value="7" @if ($user->roles_id == 7) {{ 'selected' }} @endif>Filling</option>
                                            </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-6 col-form-label text-md-left">{{ __('New Password') }}</label>

                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="" autocomplete="password" readonly>
                                    </div>
                                </div>
                                
                                <a href="/super-admin/user-management" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                            </form>
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