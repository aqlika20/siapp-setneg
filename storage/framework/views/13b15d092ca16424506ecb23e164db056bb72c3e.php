



<?php $__env->startSection('content'); ?>

                                <div class="card card-custom">
                                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                        <div class="card-title">
                                            <h3 class="card-label"><?php echo e($page_title); ?>

                                            <div class="text-muted pt-2 font-size-sm"><?php echo e($page_description); ?></div></h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form id="form" method="post" action="<?php echo e(route('production-icing.delivery-note.create')); ?>">
                                            <?php echo csrf_field(); ?>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="mb-7">
                                                    
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-12">
                                                                <div class="row">
                                                                    <div class="col-md-4 my-2 my-md-0">
                                                                        <div class="input-icon">
                                                                            <input type="text" class="form-control" placeholder="Search Icing Sugar Batch No" id="production_icing_delivery_note_search_query" />
                                                                            <span>
                                                                                <i class="flaticon2-search-1 text-muted"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <table class="datatable datatable-borderless" id="production_icing_delivery_note">
                                                        <thead>
                                                            <tr>
                                                                <th>Selected</th>
                                                                <th>Icing Sugar Batch No</th>
                                                                <th>Refined Sugar Batch No</th>
                                                                <th>Dextrin Batch No</th>
                                                                <th>Multiwall Batch No</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $num = 0
                                                            ?>
                                                            <?php $__currentLoopData = $icings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php 
                                                                $num+=1 
                                                            ?>
                                                            <tr>
                                                                <td><input type='checkbox' name='selected[]' class='form-control' value='<?php echo e($icing->id); ?>'></td>
                                                                <td><?php echo e(Helper::defineBatchStockBy('id',$icing->id_batch_stock_icing_sugar)->batch_no); ?></td>
                                                                <td><?php echo e(Helper::defineBatchStockBy('id',$icing->id_batch_stock_refined_sugar)->batch_no); ?></td>
                                                                <td><?php echo e(Helper::defineBatchStockBy('id',$icing->id_batch_stock_dextrin)->batch_no); ?></td>
                                                                <td><?php echo e(Helper::defineBatchStockBy('id',$icing->id_batch_stock_multiwall)->batch_no); ?></td>
                                                                <td><?php echo e($icing->qty_all); ?> <?php echo e($icing->uom); ?></td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                    <!--end: Datatable-->
                                            </div>
                                        </div>
                                        <?php if( $num > 0): ?>
                                        <div class="col-md-12 col-form-label text-md-center">
                                            <button id="submitbtn" type="submit" class="btn btn-primary "><?php echo e(__('Submit')); ?></button>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<script>

</script>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/production_icing/delivery_note.blade.php ENDPATH**/ ?>