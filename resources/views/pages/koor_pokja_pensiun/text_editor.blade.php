{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                <div class="container">
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0" style="background-color: #FFA800;">
                            <div class="card-title">
                                <h3 class="card-label">Text editor
                                    <span class="d-block text-muted pt-2 font-size-sm"></span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="card card-custom">
                        <div class="card-body">
                            <form method="POST" action="{{ route('koor-pokja-pensiun.text-editor.store') }}">
                            @csrf
                                <div class="tinymce">
                                    <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="{{ $rkp->id }}">
                                    <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_jenis" value="{{ $rkp->id_layanan }}">
                                    <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_nip" value="{{ $rkp->nip }}">
                                    <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_pengirim" value="{{ $rkp->id_pengirim }}">
                                    <textarea class="description" name="description">
                                        <p><strong>Pengirim</strong> : {{$rkp->pengirim}}</p>
                                        <p><strong>Penandatangan</strong> : {{$rkp->penandatangan}}</p>
                                        <p><strong>Penerima</strong> : {{$rkp->penerima}}</p>
                                        <p><strong>No Memo RKP</strong> : {{$rkp->no_memo_rkp}}</p>
                                        <p><strong>Tanggal Memo RKP</strong> : {{$rkp->tanggal_memo}}</p>
                                        <p><strong>Hal</strong> : {{$rkp->hal}}</p>

                                        @foreach ($notes as $catatans)
                                            <p><strong>Tanggal Catatan</strong> : {{$catatans->tanggal_catatan}}</p>
                                            <p><strong>Catatan</strong> : {{$catatans->catatan}}</p>
                                        @endforeach
                                    </textarea>
                                </div>
                                <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
                                    <div class="mr-2">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" onclick="return confirmation();">Kirim</button>
                                    </div>
                                </div>
                            </form>
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
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        selector:'textarea.description',
        height: 300,
        menubar: false,
        plugins: 'image code',
        toolbar: ['styleselect fontselect fontsizeselect',
                'undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify',
                'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code'], 
        /* enable title field in the Image dialog*/
        image_title: true,
        /* enable automatic uploads of images represented by blob or data URIs*/
        automatic_uploads: true,
        /*
            URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
            images_upload_url: 'postAcceptor.php',
            here we add custom filepicker only to Image dialog
        */
        file_picker_types: 'image',
        /* and here's our custom image picker*/
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            /*
            Note: In modern browsers input[type="file"] is functional without
            even adding it to the DOM, but that might not be the case in some older
            or quirky browsers like IE, so you might want to add it to the DOM
            just in case, and visually hide it. And do not forget do remove it
            once you do not need it anymore.
            */

            input.onchange = function () {
            var file = this.files[0];

            var reader = new FileReader();
            reader.onload = function () {
                /*
                Note: Now we need to register the blob in TinyMCEs image blob
                registry. In the next release this part hopefully won't be
                necessary, as we are looking to handle it internally.
                */
                var id = 'blobid' + (new Date()).getTime();
                var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);

                /* call the callback and populate the Title field with the file name */
                cb(blobInfo.blobUri(), { title: file.name });
            };
            reader.readAsDataURL(file);
            };

            input.click();
        },
    });
</script>
    
@endsection