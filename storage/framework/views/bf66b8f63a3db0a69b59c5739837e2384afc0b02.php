



<?php $__env->startSection('content'); ?>

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
                            <form method="POST" action="<?php echo e(route('koor-pokja.text-editor.store')); ?>">
                            <?php echo csrf_field(); ?>
                                <div class="tinymce">
                                    <input type="hidden" class="btn btn-warning font-weight-bolder text-uppercase px-9 py-4" name="v_id" value="<?php echo e($rkp->id); ?>">
                                    <textarea class="description" name="description">
                                        <p><strong>Pengirim</strong> : <?php echo e($rkp->pengirim); ?></p>
                                        <p><strong>Penandatangan</strong> : <?php echo e($rkp->penandatangan); ?></p>
                                        <p><strong>Penerima</strong> : <?php echo e($rkp->penerima); ?></p>
                                        <p><strong>No Memo RKP</strong> : <?php echo e($rkp->no_memo_rkp); ?></p>
                                        <p><strong>Tanggal Memo RKP</strong> : <?php echo e($rkp->tanggal_memo); ?></p>
                                        <p><strong>Hal</strong> : <?php echo e($rkp->hal); ?></p>

                                        <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catatans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <p><strong>Tanggal Catatan</strong> : <?php echo e($catatans->tanggal_catatan); ?></p>
                                            <p><strong>Catatan</strong> : <?php echo e($catatans->catatan); ?></p>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <br>
                                        <br>
                                        <h1>Data ASN</h1>
                                        <?php $__currentLoopData = $data_asns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data_asn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <p><strong>Nama</strong> : <?php echo e($data_asn->nama); ?></p>
                                            <p><strong>NIP</strong> : <?php echo e($data_asn->nip); ?></p>
                                            <p><strong>Instansi Pengusul</strong> : <?php echo e($data_asn->instansi_pengusul); ?></p>
                                            <br>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </textarea>
                                </div>
                                <div class="d-flex justify-content-between mt-5 pt-10" style="margin-left: 50px; margin-right: 50px;">
                                    <div class="mr-2">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--end::Content-->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
<style>
    td {  
        background-color: #86dcec;    
        
    }
</style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('js/pages/custom/wizard/wizard-2.js')); ?>"></script>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('node_modules/tinymce/tinymce.js')); ?>"></script>
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
            Note: In modern browsers input[accept=".jpg,.jpeg,.png,.pdf" type="file"] is functional without
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
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\siapp\resources\views/pages/koor_pokja/text_editor.blade.php ENDPATH**/ ?>