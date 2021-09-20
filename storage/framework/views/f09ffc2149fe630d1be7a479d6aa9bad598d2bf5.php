



<?php $__env->startSection('content'); ?>

                                <div class="card card-custom">
                                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                        <div class="card-title">
                                            <h3 class="card-label"><?php echo e($page_title); ?>

                                            <div class="text-muted pt-2 font-size-sm"><?php echo e($page_description); ?></div></h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!--begin: Search Form-->
                                        <!--begin::Search Form-->
                                        
                                            <form id="form" method="post" action="<?php echo e(route('filling.incoming-material.create')); ?>">
                                                <?php echo csrf_field(); ?>
                                            <div class="mb-7">
                                            
                                                <div class="row">
                                                    <div class="col-lg-12 col-xl-12">
                                                        <div class="row">
                                                            <div class="col-md-4 my-2 my-md-0">
                                                                <div class="input-icon">
                                                                    <input type="text" class="form-control" placeholder="Search Batch No" id="filling_incoming_material_search_query" />
                                                                    <span>
                                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="datatable datatable-borderless" id="filling_incoming_material">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Received</th>
                                                        <th>Batch No</th>
                                                        <th>Item ID</th>
                                                        <th>Item Desc</th>
                                                        <th>Weight</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $num = 0
                                                ?>
                                                <?php $__currentLoopData = $fillings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filling): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            
                                                            <td><input type='checkbox' name='received[]' class='form-control' value='<?php echo e($filling->id); ?>'></td>
                                                            <td><?php echo e(Helper::defineBatchStockBy('id',$filling->id_batch_stock)->batch_no); ?></td>
                                                            <td><?php echo e(Helper::defineItemBy('id',(Helper::defineBatchStockBy('id',$filling->id_batch_stock)->id_item_type))->item_id); ?></td>
                                                            <td><?php echo e(Helper::defineItemBy('id',(Helper::defineBatchStockBy('id',$filling->id_batch_stock)->id_item_type))->item_desc); ?></td>
                                                            <td><?php echo e(Helper::defineBatchStockBy('id',$filling->id_batch_stock)->actual_weight); ?> <?php echo e(Helper::defineBatchStockBy('id',$filling->id_batch_stock)->uom); ?></td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                            <!--end: Datatable-->
                                        
                                            <div class="col-md-12 col-form-label text-md-center">
                                                <button id="submitbtn" type="submit" class="btn btn-primary "><?php echo e(__('Submit')); ?></button>
                                            </div>
                                        </form>
                                    </div>

                                </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script>
    $('#available').tab('show')
</script>






<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/filling/incoming_material.blade.php ENDPATH**/ ?>