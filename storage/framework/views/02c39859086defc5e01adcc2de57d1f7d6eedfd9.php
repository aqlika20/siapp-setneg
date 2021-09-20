



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
                                        <div class="mb-7">
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <div class="row">
                                                        <div class="col-md-4 my-2 my-md-0">
                                                            <div class="input-icon">
                                                                <input type="text" class="form-control" placeholder="Search Batch No" id="warehouse_stock_list_other_search_query" />
                                                                <span>
                                                                    <i class="flaticon2-search-1 text-muted"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Search Form-->
                                        <!--end: Search Form-->
                                        <!--begin: Datatable-->
                                        <table class="datatable datatable-borderless" id="warehouse_stock_list_other">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Item ID</th>
                                                    <th>Item Desc</th>
                                                    <th>Batch No</th>
                                                    <th>Supplier</th>
                                                    <th>Qty</th>
                                                    <th>UoM</th>
                                                    <th>Actual Weight</th>
                                                    <th>Received At Formatted</th>
                                                    <th>Received Time Formatted</th>
                                                    <th>Expired At Formatted</th>
                                                    <th>Expired Time Formatted</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $num = 0
                                            ?>
                                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(Helper::checkAvailablePackaging('id',$item->id) == true): ?>
                                            <tr>
                                                
                                                <td><?php echo e($num+=1); ?></td>
                                                <td><?php echo e(Helper::defineItemBy('id',$item->id_item_type)->item_id); ?></td>
                                                <td><?php echo e(Helper::defineItemBy('id',$item->id_item_type)->item_desc); ?></td>
                                                <td><?php echo e($item->batch_no); ?></td>
                                                <td>
                                                    <?php if(Helper::defineItemBy('id',$item->id_item_type)->item_id == Helper::$icing_sugar): ?>
                                                    -
                                                    <?php endif; ?>
                                                    <?php if(Helper::defineItemBy('id',$item->id_item_type)->item_id != Helper::$icing_sugar): ?>
                                                    <?php echo e(Helper::defineSupplierBy('id',$item->id_supplier)->supplier_desc); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e($item->qty); ?></td>
                                                <td><?php echo e($item->uom); ?></td>
                                                <td><?php echo e($item->actual_weight); ?> <?php echo e($item->uom); ?></td>
                                                <td><?php echo e(Helper::convertToViewDateTime('date',$item->received_at)); ?></td>
                                                <td><?php echo e(Helper::convertToViewDateTime('time',$item->received_at)); ?></td>
                                                <td><?php echo e(Helper::convertToViewDateTime('date',$item->expired_at)); ?></td>
                                                <td><?php echo e(Helper::convertToViewDateTime('time',$item->expired_at)); ?></td>
                                                
                                                <td>
                                                    
                                                        
                                                        <?php if($item->qty == $item->actual_weight): ?>
                                                            <form method="POST" action="<?php echo e(route('warehouse.stock-list.other.delete',[$item->id])); ?>">
                                                                <?php echo csrf_field(); ?> 
                                                                <?php echo method_field('DELETE'); ?>
                                                                <?php if(Helper::defineBatchDetailBy('id_batch_stock',$item->id)): ?>
                                                                <a href="<?php echo e(route('warehouse.stock-list.other.detail',[$item->id])); ?>" title="Detail" class="btn btn-icon btn-light btn-sm mx-1">
                                                                    <?php echo e(Metronic::getSVG("media/svg/icons/Files/File.svg", "svg-icon-md svg-icon-primary")); ?>

                                                                </a>
                                                                <?php endif; ?>
                                                                <a href="<?php echo e(route('warehouse.stock-list.other.view',[$item->id])); ?>" title="Edit" class="btn btn-icon btn-light btn-sm mx-1">
                                                                    <?php echo e(Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-md svg-icon-primary")); ?>

                                                                </a>
                                                                <button type="submit" title="Delete" class="btn btn-icon btn-light btn-sm mx-1" onclick='return confirm("Are you sure?")'>
                                                                    <?php echo e(Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary")); ?>

                                                                </button>
                                                            </form>
                                                        <?php else: ?>
                                                            <form method="POST" action="<?php echo e(route('warehouse.stock-list.other.use',[$item->id])); ?>">
                                                                <?php echo csrf_field(); ?> 
                                                                <?php echo method_field('PATCH'); ?>
                                                                <?php if(Helper::defineBatchDetailBy('id_batch_stock',$item->id)): ?>
                                                                <div>
                                                                    <a href="<?php echo e(route('warehouse.stock-list.other.detail',[$item->id])); ?>" title="Detail" class="btn btn-icon btn-light btn-sm mx-1">
                                                                        <?php echo e(Metronic::getSVG("media/svg/icons/Files/File.svg", "svg-icon-md svg-icon-primary")); ?>

                                                                    </a>
                                                                </div>
                                                                <?php endif; ?>
                                                                <button type="submit" title="Use" class="btn btn-icon btn-light btn-sm mx-1" onclick='return confirm("Are you sure?")'>
                                                                    <?php echo e(Metronic::getSVG("media/svg/icons/Navigation/Check.svg", "svg-icon-md svg-icon-primary")); ?>

                                                                </button>
                                                            </form>
                                                            
                                                        <?php endif; ?>
                                                    
                                                </td>
                                                
                                            </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                        <!--end: Datatable-->
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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/warehouse/stock_list/other.blade.php ENDPATH**/ ?>