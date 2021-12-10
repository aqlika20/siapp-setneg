{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
	<div class="row">
        <!--begin::Content-->
        <div class="col-lg-5">
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="card">
                            <div class="card-header flex-wrap border-0 pt-6 pb-0" style="background-color: #FFA800;">
                                <div class="card-title">
                                    <h3 class="card-label">Surat Pengembalian Berkas Pending
                                    <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="wizard wizard-3" id="kt_wizard_v3" data-wizard-state="step-first" data-wizard-clickable="true">
                                    <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                                        <div class="col-xl-20 col-xxl-12">
                                            <form class="form" id="test_callbackform" action="{{ route('koor-pokja.inbox.jfku.store_pending') }}" enctype="multipart/form-data" method="POST">
                                                @csrf 
												<input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $pengangkatans->id }}">
												<input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $pengangkatans->jenis_layanan }}">
                                                <!--begin: Wizard Step 1-->
                                                <div class="pb-6" style="margin-left: 50px; margin-right: 50px;" data-wizard-type="step-content" data-wizard-state="current">
                                                    <div class="form-group row">
														<label class="col-form-label col-lg-3 col-sm-12">No. Surat Usulan</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<div class="input-group">
																<input type="text" class="form-control" value="{{ $pengangkatans->no_surat_usulan }}" disabled />
															</div>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label col-lg-3 col-sm-12">NIP</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<div class="input-group date">
																<input type="text" class="form-control" value="{{ $pengangkatans->nip }}" disabled />
															</div>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label col-lg-3 col-sm-12">Nama dan Gelar</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<div class="input-group date">
																<input type="text" class="form-control" value="{{ $pengangkatans->nama }}" disabled />
															</div>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label col-lg-3 col-sm-12">Instansi Pengusul</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<div class="input-group date">
																<input type="text" class="form-control" value="{{ $pengangkatans->instansi_pengusul }}" disabled />
															</div>
														</div>
													</div>
													<div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">sifat <a style="color: #FF0000;">*</a></label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="sifat" name="sifat" value="{{ $sifat }}" autocomplete="off"/>
															</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Hal <a style="color: #FF0000;">*</a></label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="hal" name="hal" value="{{ $hal }}" autocomplete="off"/>
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Yth. <a style="color: #FF0000;">*</a></label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group">
                                                                <textarea type="text" class="form-control" id="yth" name="yth" autocomplete="off">{{ $yth }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">konten. <a style="color: #FF0000;">*</a></label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <div class="input-group">
                                                                <textarea type="text" class="form-control" id="konten" name="konten" autocomplete="off">{{ $konten }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												
												

                                                <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
                                                    <div>
                                                        <button type="submit" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4">GENERATE</button>
                                                    </div>
                                                </div>
											</form>
											<div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
												<form method="POST" action="{{ route('koor-pokja.inbox.jfku.pending_text_editor') }}">
													@csrf 
													<input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $pengangkatans->id }}">
													<input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $pengangkatans->jenis_layanan }}">
													<input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_file_name" value="{{ $newfilename }}">
													<input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_nip" value="{{ $pengangkatans->nip }}">
													<input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_pengirim" value="{{ $pengangkatans->id_pengirim }}">
													<button type="submit" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" >
														KIRIM
													</button>
												</form>
											</div>
                                        </div>
                                    </div>
                                
                                </div>
                            
                            
                        </div>
                    </div>
                </div>
            
            </div>
            
        </div>
		<div class="col-lg-7">
			<div class="row justify-content-center">
				<div class="col-xl-20 col-xxl-12">
					<div style="height: 100vh;">
						<div style="height: 100%;" id="placeholder"></div>
						<script type="text/javascript" src="http://206.189.84.159//web-apps/apps/api/documents/api.js"></script>
					</div>
				</div>
			</div>
		</div>
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
            },
            "documentType": "word"
        };
    var docEditor = new DocsAPI.DocEditor("placeholder", config);

</script>
    
    
@endsection