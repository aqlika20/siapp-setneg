<?php $__env->startSection('content'); ?>

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
                                        <?php $__currentLoopData = $surats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $surat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo $surat->description; ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <!--end: Wizard Actions-->
                                </div>
                                <div class="mt-5 pt-10">
                                    <div class="mr-2">
                                        <a href="<?php echo e(route('koor-pokja.inbox.jfku.index')); ?>"type="button" class="btn btn-light-danger font-weight-bold">Batalkan</a>
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
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/siapp/resources/views/pages/koor_pokja/inbox/detail_surat_pengembalian.blade.php ENDPATH**/ ?>