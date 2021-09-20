



<?php $__env->startSection('content'); ?>

                                <div class="card card-custom">
                                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                        <div class="card-title">
                                            <h3 class="card-label"><?php echo e($page_title); ?>

                                            <div class="text-muted pt-2 font-size-sm"><?php echo e($page_description); ?></div></h3>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <!--begin: Search Form-->
                                        <!--begin::Search Form-->
                                        <div class="mb-7">
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <div class="row">
                                                        <div class="col-md-4 my-2 my-md-0">
                                                            <div class="input-icon">
                                                                <input type="text" class="form-control" placeholder="Search PrO" id="warehouse_stock_list_major_minor_item_search_query" />
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
                                        <table class="datatable datatable-borderless" id="warehouse_stock_list_major_minor_item">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>PrO</th>
                                                    <th>SKU Name</th>
                                                    <th>Comment</th>
                                                    <th>Seq No</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $num = 0
                                            ?>
                                            <?php $__currentLoopData = $pros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($num+=1); ?></td>
                                                    <td><?php echo e($pro->pro); ?></td>
                                                    <td><?php echo e(Helper::defineProductBy('id', Helper::defineRemarkBy('id',$pro->id_product_remark)->id_product_type)->sku_name); ?></td>
                                                    <td><?php echo e(Helper::defineRemarkBy('id',$pro->id_product_remark)->remark); ?></td>
                                                    <td><?php echo e($pro->seq_no); ?> of <?php echo e(Helper::getTotalSeqBy('pro', $pro->pro)); ?></td>
                                                    <td>
                                                        <div>
                                                            <a href="<?php echo e(route('warehouse.stock-list.major-minor-item.detail',[$pro->id])); ?>" title="Detail" class="btn btn-icon btn-light btn-sm mx-1">
                                                                <?php echo e(Metronic::getSVG("media/svg/icons/Files/File.svg", "svg-icon-md svg-icon-primary")); ?>

                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/warehouse/stock_list/major_minor_item.blade.php ENDPATH**/ ?>