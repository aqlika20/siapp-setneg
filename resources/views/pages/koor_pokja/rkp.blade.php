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
                                <h3 class="card-label">RKP
                                    <span class="d-block text-muted pt-2 font-size-sm"></span>
                                </h3>
                            </div>
                        </div>
                        <div class="card card-custom">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="desc" class="form-label">Desc</label>
                                    <textarea name="desc" class="my-editor form-control" id="desc" cols="30" rows="10"></textarea>
                                </div>
                            </div>
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
<script src="https://cdn.tiny.cloud/1/m1nz6lkq0ki8c21mhmdrhi8pfa5sjru7d79jblmku8iu0e3u/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea.my-editor',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });
  </script>
@endsection