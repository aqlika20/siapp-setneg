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
                                <h3 class="card-label">Management Pengguna</h3>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('administrator.user-management.edit',[$user->id]) }}">
                                @csrf
                                @method('PATCH')
                                
                                <div class="form-group row">
                                    <label for="name" class="col-md-6 col-form-label text-md-left">{{ __('Name') }}</label>

                                    <div class="col-md-12">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nip" class="col-md-6 col-form-label text-md-left">NIP</label>

                                    <div class="col-md-12">
                                        <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ $user->nip }}" required autocomplete="nip" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="role" class="col-md-6 col-form-label text-md-left">{{ __('Role') }}</label>

                                    <div class="col-md-12">
                                        <select id="role" class="form-control" name="role" required autofocus>
                                            @foreach ($roles as $role)
                                                <option value="{{$role->id}}" @if ($user->roles_id == $role->id) {{ 'selected' }} @endif>{{$role->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="group" class="col-md-6 col-form-label text-md-left">Group</label>

                                    <div class="col-md-12">
                                        <select id="group" class="form-control" name="group" required autofocus>
                                            @foreach ($groups as $group)
                                                <option value="{{$group->id}}" @if ($user->groups_id == $group->id) {{ 'selected' }} @endif>{{$group->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-6 col-form-label text-md-left">{{ __('New Password') }}</label>

                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="" autocomplete="password" readonly>
                                    </div>
                                </div>
                                
                                <a href="{{ route('administrator.user-management.index') }}" class="btn btn-secondary">Back</a>
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