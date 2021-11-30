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
                            <h3 class="card-label">Setting Halaman Laporan
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
                                        <!--begin::Input-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Judul</label>
                                            <div class="col-lg-7 col-md-9 col-sm-12">
                                                <div class="input-group date">
                                                    <input type="text" class="form-control" placeholder="Kepala Biro APP" id="judul" name="judul" value="{{old('judul')}}" autocomplete="off" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Nomor Surat</label>
                                            <div class="col-lg-7 col-md-9 col-sm-12">
                                                <div class="input-group date">
                                                    <input type="text" class="form-control" placeholder="Kepala Biro APP" id="nomor_surat" name="nomor_surat" value="{{old('nomor_surat')}}" autocomplete="off" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Konten Surat</label>
                                            <div class="col-lg-7 col-md-9 col-sm-12">
                                                <div class="input-group date">
                                                    <textarea type="text" class="form-control" placeholder="Deputi AA" id="content_surat" name="content_surat" value="{{old('content_surat')}}" autocomplete="off" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        

                                    <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
                                        <div class="mr-2">
                                        </div>
                                        <div>
                                            @if($pengangkatan->jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $pengangkatan->jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $pengangkatan->jenis_layanan == Helper::$perpindahan_pejabat_FKU || $pengangkatan->jenis_layanan == Helper::$ralat_keppres_jabatan_FKU || $pengangkatan->jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU)
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $pengangkatan->id }}">
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $pengangkatan->jenis_layanan }}">
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_nip" value="{{ $pengangkatan->nip }}">
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_pengirim" value="{{ $pengangkatan->id_pengirim }}">
                                            @elseif($ns->jenis_layanan == Helper::$pengangkatan_pejabat_NS || $ns->jenis_layanan == Helper::$pemberhentian_pejabat_NS || $ns->jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $ns->jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $ns->id }}">
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $ns->jenis_layanan }}">
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_nip" value="{{ $ns->nip }}">
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_pengirim" value="{{ $ns->id_pengirim }}">
                                            @elseif($lainnya->jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $lainnya->jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $lainnya->jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $lainnya->jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $lainnya->jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus)
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $lainnya->id }}">
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $lainnya->jenis_layanan }}">
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_nip" value="{{ $lainnya->nip }}">
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_pengirim" value="{{ $lainnya->id_pengirim }}">
                                            @elseif($kenaikan->jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $kenaikan->jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $kenaikan->jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $kenaikan->jenis_layanan == Helper::$ralat_keppres_kepangkatan)
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $kenaikan->id }}">
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $kenaikan->jenis_layanan }}">
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_nip" value="{{ $kenaikan->nip }}">
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_pengirim" value="{{ $kenaikan->id_pengirim }}">
                                            @elseif($pemberhentian->jenis_layanan == Helper::$bup_non_kpp || $pemberhentian->jenis_layanan == Helper::$bup_kpp || $pemberhentian->jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $pemberhentian->jenis_layanan == Helper::$non_bup_JDA_non_kpp || $pemberhentian->jenis_layanan == Helper::$non_bup_JDA_kpp || $pemberhentian->jenis_layanan == Helper::$berhenti_tidak_hormat || $pemberhentian->jenis_layanan == Helper::$anumerta || $pemberhentian->jenis_layanan == Helper::$pemberhentian_sementara || $pemberhentian->jenis_layanan == Helper::$ralat_keppres_pemberhentian || $pemberhentian->jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $pemberhentian->jenis_layanan == Helper::$petikan_keppres_hilang)
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $pemberhentian->id }}">
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $pemberhentian->jenis_layanan }}">
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_nip" value="{{ $pemberhentian->nip }}">
                                                <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_pengirim" value="{{ $pemberhentian->id_pengirim }}">
                                            @endif
                                            <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit" onclick="return confirmation();">pdf</button>
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