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
                        <div class="card-body p-0">
                            <!--begin: Wizard Body-->
                            <div style="height: 100vh;">
                                <div style="height: 100%;" id="placeholder"></div>
                                <script type="text/javascript" src="http://206.189.84.159//web-apps/apps/api/documents/api.js"></script>
                            </div>
                            <!--end: Wizard Body-->                     
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
            },
            "documentType": "word"
        };
    var docEditor = new DocsAPI.DocEditor("placeholder", config);

</script>
@endsection 