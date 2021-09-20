



<?php $__env->startSection('content'); ?>

<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label"><?php echo e($page_title); ?>

                <div class="text-muted pt-2 font-size-sm"><?php echo e($page_description); ?></div>
            </h3>
        </div>
    </div>
    <div class="card-body">
        <div class="mb-7">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="row">
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="input-icon">
                                <input type="text" class="form-control" placeholder="Search PrO" id="warehouse_berita_acara_search_query" />
                                <span>
                                    <i class="flaticon2-search-1 text-muted"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="datatable datatable-borderless" id="warehouse_berita_acara">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Hold At Formatted</th>
                    <th>Hold Time Formatted</th>
                    <th>PrO</th>
                    <th>Seq No</th>
                    <th>Item ID</th>
                    <th>Item Desc</th>
                    <th>Sublot No</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $num = 0
                ?>
                <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $proseq = Helper::defineProseqBy('id', Helper::defineProItemBy('id',$berita->id_item)->id_proseq);   
                ?>
                <tr>
                    <td><?php echo e($num+=1); ?></td>
                    <td><?php echo e(Helper::convertToViewDateTime('date',$berita->created_at)); ?></td>
                    <td><?php echo e(Helper::convertToViewDateTime('time',$berita->created_at)); ?></td> 
                    <td><?php echo e($proseq->pro); ?></td> 
                    <td><?php echo e($proseq->seq_no); ?> of <?php echo e(Helper::getTotalSeqBy('pro', $proseq->pro)); ?></td>
                    <td><?php echo e(Helper::defineItemBy('id',Helper::defineProItemBy('id',$berita->id_item)->id_item_type)->item_id); ?></td> 
                    <td><?php echo e(Helper::defineItemBy('id',Helper::defineProItemBy('id',$berita->id_item)->id_item_type)->item_desc); ?></td> 
                    <td><?php echo e(Helper::defineProItemBy('id',$berita->id_item)->sublot_no); ?>

                    <td><?php echo e($berita->description); ?></td>
                    <td>
                        <?php if($proseq->id_status == Helper::$id_hold_warehouse): ?> 
                        <form id="form<?php echo e($num); ?>" method="POST" action="<?php echo e(route('warehouse.berita-acara.edit',[$berita->id])); ?>">
                            <?php echo csrf_field(); ?> 
                            <?php echo method_field('PATCH'); ?> 
                            <button type="button" title="Release" class="btn btn-icon btn-light btn-sm mx-1" onclick='var new_sublot_no=prompt("New Sublot No (Optional)");document.getElementById("new_sublot_no").value = new_sublot_no;document.getElementById("form<?php echo e($num); ?>").submit();'>
                                <?php echo e(Metronic::getSVG("media/svg/icons/Communication/Reply.svg", "svg-icon-md svg-icon-primary")); ?>

                            </button>
                            <input type="hidden" id="new_sublot_no" name="new_sublot_no" value=""/>
                            <a  title="Print" href="<?php echo e(route('warehouse.berita-acara.pdf',[$berita->id])); ?>" class="btn btn-icon btn-light btn-sm mx-1">
                                <?php echo e(Metronic::getSVG("media/svg/icons/Devices/Printer.svg", "svg-icon-md svg-icon-primary")); ?>

                            </a>
                        </form>
                        <?php endif; ?>
                        <?php if($proseq->id_status != Helper::$id_hold_warehouse): ?>
                        <?php echo e($berita->notes); ?>

                        <?php endif; ?>
                        
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

    </div>
</div>

</div>

</div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/warehouse/berita_acara.blade.php ENDPATH**/ ?>