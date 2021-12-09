<?php $__env->startSection('content'); ?>

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
            "key": "Khirz6zTPdfd4",
            "title": "rancangan_keppres.docx",
            "url": "http://104.248.194.62/storage/template"
            },
            "documentType": "word"
        };
    var docEditor = new DocsAPI.DocEditor("placeholder", config);

</script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/siapp/resources/views/pages/koor_pokja/inbox/text_editor_inbox_pending.blade.php ENDPATH**/ ?>