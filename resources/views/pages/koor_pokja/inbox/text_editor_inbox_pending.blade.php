{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

        <!--begin::Content-->
        


        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                <div class="container fill">
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0" style="background-color: #FFA800;">
                            <div class="card-title">
                                <h3 class="card-label">Text editor
                                    <span class="d-block text-muted pt-2 font-size-sm"></span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="height: 100vh;">
                        <div style="height: 100%;" id="placeholder"></div>
                        <script type="text/javascript" src="http://206.189.84.159//web-apps/apps/api/documents/api.js"></script>
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
            "key": "Khirz6zTPdfd4",
            "title": "rancangan_keppres.docx",
            "url": "http://104.248.194.62/storage/template"
            },
            "documentType": "word"
        };
    var docEditor = new DocsAPI.DocEditor("placeholder", config);

</script>
    
@endsection