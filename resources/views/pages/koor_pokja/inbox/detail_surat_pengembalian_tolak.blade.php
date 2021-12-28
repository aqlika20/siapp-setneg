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
                                <h3 class="card-label">Surat Pengembalian
                                <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <!--begin: Wizard Body-->
                            <div class="row py-10 px-8 py-lg-12 px-lg-10">
                                <div class="col-xl-20 col-xxl-12">
                                    <!--begin: Wizard Step 1-->
                                    <div class="pb-6" style="margin-left: 50px; margin-right: 50px;">
                                        @foreach ($surats as $surat)
                                            {!! $surat->description !!}
                                        @endforeach
                                    </div>
                                    <!--end: Wizard Actions-->
                                </div>
                                <div class="mt-5 pt-10">
                                    <div class="mr-2">
                                        <a href="{{ route('koor-pokja.inbox.jfku.index') }}"type="button" class="btn btn-light-danger font-weight-bold">Batalkan</a>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Wizard Body-->                     
                        </div>
                    </div>					
					<div class="card card-custom">
						<div class="row justify-content-center">
							<div class="card-body p-0">
								<div style="height: 100vh;">
									<div style="height: 100%;" id="placeholder"></div>
									<script type="text/javascript" src="http://206.189.84.159//web-apps/apps/api/documents/api.js"></script>
								</div>
							</div>
						</div>
					</div>
                    <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
                        <div class="mr-2">
                            <a href="{{ route('koor-pokja.inbox.jfku.index')}}" type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4">Kembali</a>
                        </div>
                        <div>
                            <table>
                                <th style="margin-right: 10px;">
                                    <form method="POST" action="{{ route('koor-pokja.inbox.detail-surat-pengembalian-tolak.verifikasi') }}">
                                        @csrf 
                                        <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $verifikasi->id }}">
                                        <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $verifikasi->jenis_layanan }}">
                                        <button type="submit" class="btn btn-danger font-weight-bolder text-uppercase px-9 py-4" >
                                            Tolak
                                        </button>
                                    </form>
                                </th>
                                <th style="margin-right: 10px;">
                                    <form method="POST" action="{{ route('koor-pokja.inbox.detail-surat-pengembalian-tolak.revisi') }}">
                                        @csrf
                                        <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $verifikasi->id }}">
                                        <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $verifikasi->jenis_layanan }}">
                                        <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" >
                                            Proses
                                        </button>
                                    </form>
                                </th>
                            </table>
                        </div>
                    </div>
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
<script>
    var config = {
        "document": {
            "fileType": "docx",
            "key": {!! json_encode($stringrnd) !!},
            "title": {!! json_encode($newfilename) !!},
            "url": {!! urldecode(json_encode($urlhead)) !!},			
			"permissions": {
				"comment": false,
				"copy": false,
				"deleteCommentAuthorOnly": false,
				"download": true,
				"edit": false,
				"editCommentAuthorOnly": false,
				"fillForms": false,
				"modifyContentControl": false,
				"modifyFilter": false,
				"print": true,
				"review": false,
			},
            },
            "documentType": "word"
        };
    var docEditor = new DocsAPI.DocEditor("placeholder", config);

</script>
@endsection 