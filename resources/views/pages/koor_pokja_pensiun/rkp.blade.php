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
                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0" style="background-color: #FFA800;">
                        <div class="card-title">
                            <h3 class="card-label">Memo RKP
                            <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <!--begin: Wizard Body-->
                        <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                            <div class="col-xl-20 col-xxl-12">
                                <!--begin: Wizard Form-->
                                <form class="form" id="kt_form" action="{{ route('koor-pokja-pensiun.rkp.store') }}" method="POST">
                                    @csrf
                                    <!--begin: Wizard Step 1-->
                                    <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                        <h4 class="mb-10 font-weight-bold text-dark">Data RKP</h4>
                                        <!--begin::Input-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Pengirim</label>
                                            <div class="col-lg-7 col-md-9 col-sm-12">
                                                <div class="input-group date">
                                                    <input type="text" class="form-control" placeholder="Kepala Biro APP" id="pengirim" name="pengirim" value="{{old('pengirim')}}" autocomplete="off" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Penandatangan</label>
                                            <div class="col-lg-7 col-md-9 col-sm-12">
                                                <div class="input-group date">
                                                    <input type="text" class="form-control" placeholder="Kepala Biro APP" id="penandatangan" name="penandatangan" value="{{old('penandatangan')}}" autocomplete="off" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Penerima</label>
                                            <div class="col-lg-7 col-md-9 col-sm-12">
                                                <div class="input-group date">
                                                    <input type="text" class="form-control" placeholder="Deputi AA" id="penerima" name="penerima" value="{{old('penerima')}}" autocomplete="off" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">No Memo RKP</label>
                                            <div class="col-lg-5 col-md-9 col-sm-12">
                                                <div class="input-group date">
                                                    <input type="text" class="form-control" id="no_memo_rkp" name="no_memo_rkp" value="M-  /      /AP.01/08/2021" autocomplete="off" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Tanggal Memo RKP</label>
                                            <div class="col-lg-7 col-md-9 col-sm-12">
                                                <div class="input-group date">
                                                    <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_memo" name="tanggal_memo" data-toggle="datetimepicker" data-target="#tanggal_memo" placeholder="Pilih Tanggal" autocomplete="off" value="{{old('tanggal_memo')}}" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="la la-calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Hal</label>
                                            <div class="col-lg-7 7ol-md-9 col-sm-12">
                                                <div class="input-group date">
                                                    <input type="text" class="form-control" id="hal" name="hal" value="{{old('hal')}}" autocomplete="off" required/>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="kt_repeater_1">
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Tambah Catatan</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <!-- <button type="button" class="add_more_item btn btn-sm font-weight-bolder btn-light-primar">Tambah</button> -->
                                                    <a class="add_more_item btn btn-sm font-weight-bolder btn-light-primary">
                                                        <i class="la la-plus"></i>Tambah
                                                    </a>
                                                </div>
                                            </div>

                                            <div data-repeater-item class="form-group">
                                                <div class="item_catatan">
                                                    <div class="item_data">
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label>
                                                            <div class="col-lg-5 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_catatan" name="tanggal_catatan[]" data-toggle="datetimepicker" data-target="#tanggal_catatan" placeholder="Pilih Tanggal" autocomplete="off" required />
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">
                                                                            <i class="la la-calendar"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-lg-3 col-sm-12">Catatan</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="input-group date">
                                                                    <textarea class="form-control" rows="3" id="catatan" name="catatan[]" ></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>	
                                    </div>

                                    <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
                                        <div class="mr-2">
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit" onclick="return confirmation();">RKP</button>
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
            </div>
            <!--end: Wizard-->
        </div>
    </div>

     

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
    <script id="tambah_catatan" type="text/x-handlebars-template">
        <div class="item_data">
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label>
                <div class="col-lg-5 col-md-9 col-sm-12">
                    <div class="input-group date">
                        <input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_catatan" name="tanggal_catatan[]" data-toggle="datetimepicker" placeholder="Pilih Tanggal" autocomplete="off" required />
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Catatan</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="input-group date">
                        <textarea class="form-control" rows="3" id="catatan" name="catatan[]"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <!-- <button type="button" class="remove_detail btn btn-sm font-weight-bolder btn-light-primar">Hapus</button> -->
                    <a style="margin-top: 10px;" class="remove_detail btn btn-sm font-weight-bolder btn-light-danger">
                        <i class="la la-trash-o"></i>Hapus Catatan
                    </a>
                </div>
            </div>
        </div>
    </script>
    <script>
        refreshDateTimePicker();
        function refreshDateTimePicker(){
            
            $('.my-datepicker').each(function(){
                $(this).datetimepicker({
                    useCurrent:false,
                    format: 'DD-MMM-YYYY'
                })

                $(this).keydown(function(e){
                    e.preventDefault();
                })

            })
        }
        $('#otherFieldDiv').hide();

        $('.select2').select2({
            placeholder: "Choose..."
        })

        $('#kt_repeater_1').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function () {
                $(this).slideDown();
            },

            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });

        var id = 1;

        $(document).on('click','.add_more_item',function(){
            var source = $("#tambah_catatan").html();
            // var template = Handlebars.compile(source);
            var template = '<div class="item_data"><div class="form-group row"><label class="col-form-label col-lg-3 col-sm-12">Tanggal Catatan</label><div class="col-lg-5 col-md-9 col-sm-12"><div class="input-group date"><input type="text" class="form-control datetimepicker-input my-datepicker" id="tanggal_catatan_' + id +'" name="tanggal_catatan[]" data-toggle="datetimepicker" data-target="#tanggal_catatan_'+ id +'" placeholder="Pilih Tanggal" autocomplete="off" required /><div class="input-group-append"><span class="input-group-text"><i class="la la-calendar"></i></span></div></div></div></div><div class="form-group row"><label class="col-form-label col-lg-3 col-sm-12">Catatan</label><div class="col-lg-9 col-md-9 col-sm-12"><div class="input-group date"><textarea class="form-control" rows="3" id="catatan" name="catatan[]" ></textarea></div></div></div><div class="form-group row"><div class="col-lg-9 col-md-9 col-sm-12"><!-- <button type="button" class="remove_detail btn btn-sm font-weight-bolder btn-light-primar">Hapus</button> --><a style="margin-top: 10px;" class="remove_detail btn btn-sm font-weight-bolder btn-light-danger"><i class="la la-trash-o"></i>Hapus Catatan</a></div></div></div>'
            $(this).parent().parent().parent().find(".item_catatan").append(template);
            id++;
            refreshDateTimePicker();
        });

        $(document).on('click','.remove_detail',function(event) {
            $(this).closest('.item_data').remove();
        });

        function confirmation(){
            if(confirm('are you sure?')){
                document.getElementById('kt_form').submit();
            }else{
                return false;
            }   
        }

    </script>
<script src="{{ asset('js/pages/custom/wizard/wizard-2.js') }}"></script>
<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection