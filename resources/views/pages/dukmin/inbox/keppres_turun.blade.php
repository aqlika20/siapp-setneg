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
                        <div class="card-header flex-wrap border-0 pt-6 pb-0" style="background-color: #FFA800;">
                            <div class="card-title">
                                <h3 class="card-label">Keppres Turun
                                <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                <div class="col-xl-20 col-xxl-12">
                                    <!--begin: Wizard Form-->
                                    <form method="POST" action="{{ route('dukmin.inbox.keppres-store') }}" enctype="multipart/form-data">
                                    @csrf 
                                    @method('PATCH')
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-6">
                                            <!--begin::Input-->
                                            <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id_rkp" value="{{ $rkps->id }}">
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">No Memo RKP</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" value="{{ $rkps->no_memo_rkp }}" disabled/>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Perihal</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" value="{{ $rkps->hal }}" disabled/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Keppres Maju</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" value="{{  Helper::converttanggal($rkps->tanggal_keppres_maju) }}" disabled/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">No. Keppres</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="no_keppres" name="no_keppres" value="{{old('no_keppres')}}" autocomplete="off" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->

                                            <!--begin::Input-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Keppres Turun</label>
                                                <div class="col-lg-5 col-md-9 col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_keppres_turun" name="tanggal_keppres_turun" data-toggle="datetimepicker" data-target="#tanggal_keppres_turun" placeholder="Pilih Tanggal" value="{{old('tanggal_keppres_turun')}}" autocomplete="off" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input-->

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label">Upload File Keppres</label>
                                                <div class="col-lg-9">
                                                    <input id="file_keppres" name="file_keppres[]" type="file" class="file" data-show-preview="false" multiple/>
                                                    
                                                    <!-- <div class="dropzone dropzone-multi" id="kt_dropzone_4">
                                                        <div class="dropzone-panel mb-lg-0 mb-2">
                                                            <a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm">Attach files</a>
                                                            <a class="dropzone-upload btn btn-light-primary font-weight-bold btn-sm">Upload All</a>
                                                            <a class="dropzone-remove-all btn btn-light-primary font-weight-bold btn-sm">Remove All</a>
                                                        </div>
                                                        <div class="dropzone-items">
                                                            <div class="dropzone-item" style="display:none">
                                                                <div class="dropzone-file">
                                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                                        <span data-dz-name="">some_image_file_name.jpg</span>
                                                                        <strong>(<span data-dz-size="">340kb</span>)</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-progress">
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropzone-toolbar">
                                                                    <span class="dropzone-start">
                                                                        <i class="flaticon2-arrow"></i>
                                                                    </span>
                                                                    <span class="dropzone-cancel" data-dz-remove="" style="display: none;">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                    <span class="dropzone-delete" data-dz-remove="">
                                                                        <i class="flaticon2-cross"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-between mt-5 pt-10">
                                            <div class="mr-2">
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4">Approve</button>
                                            </div>
                                        </div>
                                        <!--end: Wizard Actions-->
                                    </form>
                                    <!--end: Wizard Form-->
                                </div>
                            </div>
                            <!--end: Wizard Body-->
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
     $('.my-datepicker').datetimepicker({
        useCurrent:false,
        format: 'DD-MMM-YYYY'
    })

    $('.my-datepicker').keydown(function(e){
        e.preventDefault();
    })

</script>
<script src="{{ asset('js/pages/custom/wizard/wizard-2.js') }}"></script>
<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection 