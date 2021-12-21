<?php $__env->startSection('content'); ?>

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
<script>
    var config = {
        "document": {
            "fileType": "docx",
            "key": <?php echo json_encode($stringrnd); ?>,
            "title": <?php echo json_encode($newfilename); ?>,
            "url": <?php echo urldecode(json_encode($urlhead)); ?>,
            },
            "documentType": "word"
        };
    var docEditor = new DocsAPI.DocEditor("placeholder", config);

</script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/siapp/resources/views/pages/pic/detail_surat_tolak.blade.php ENDPATH**/ ?>