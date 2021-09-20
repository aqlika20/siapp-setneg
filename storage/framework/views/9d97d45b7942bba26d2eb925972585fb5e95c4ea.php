



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
                                        
                                            <form id="form" method="post" action="<?php echo e(route('production-icing.incoming-material.create')); ?>">
                                                <?php echo csrf_field(); ?>
                                            <div class="mb-7">
                                            
                                                <div class="row">
                                                    <div class="col-lg-12 col-xl-12">
                                                        <div class="row">
                                                            <div class="col-md-4 my-2 my-md-0">
                                                                <div class="input-icon">
                                                                    <input type="text" class="form-control" placeholder="Search Refined Sugar Batch No" id="production_icing_incoming_material_search_query_1" />
                                                                    <span>
                                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 my-2 my-md-0">
                                                                <div class="input-icon">
                                                                    <input type="text" class="form-control" placeholder="Search Dextrin Batch No" id="production_icing_incoming_material_search_query_2" />
                                                                    <span>
                                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 my-2 my-md-0">
                                                                <div class="input-icon">
                                                                    <input type="text" class="form-control" placeholder="Search Multiwall Batch No" id="production_icing_incoming_material_search_query_3" />
                                                                    <span>
                                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="datatable datatable-borderless" id="production_icing_incoming_material">
                                                <thead>
                                                    <tr>
                                                        <th>Received</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>PO Target</th>
                                                        <th>Shift</th>
                                                        <th>Refined Sugar Batch No</th>
                                                        <th>Refined Sugar Weight</th>
                                                        <th>Dextrin Batch No</th>
                                                        <th>Dextrin Weight</th>
                                                        <th>Multiwall Batch No</th>
                                                        <th>Multiwall Piece</th>
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
                                                        <td><input type='checkbox' name='received[]' class='form-control' value='<?php echo e($icing->id); ?>'></td>
                                                        <td>
                                                            <div class="input-group date" data-target-input="nearest">
                                                                <input type="text" class="form-control datetimepicker-input created_at" placeholder="Select date" name="date[]" readonly/>
                                                                <div class="input-group-append" data-toggle="datetimepicker">
                                                                    <span class="input-group-text">
                                                                        <i class="ki ki-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                $('.created_at').datepicker({
                                                                    format: 'dd-M-yy', 
                                                                });
                                                                $(".created_at").datepicker().datepicker("setDate", new Date());
                                                            </script>
                                                        </td>
                                                        <td>
                                                            <div class="input-group timepicker">
                                                                <input class="form-control created_time"  readonly placeholder="Select time" name="time[]" type="text"/>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-clock-o"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                 $('.created_time').timepicker({
                                                                    minuteStep: 1,
                                                                    showSeconds: true,
                                                                    showMeridian: true,
                                                                    snapToStep: true,
                                                                    format: 'H:i:s', 
                                                                });
                                                            </script>
                                                        </td>
                                                        <td><?php echo e(Helper::defineIcingRequestBy('id',$icing->id_icing_request)->po_sto); ?></td>
                                                        <td><?php echo e(Helper::defineShiftBy('id', $icing->id_shift)->name); ?></td>
                                                        <td><?php echo e(Helper::defineBatchStockBy('id', $icing->id_batch_stock_refined_sugar)->batch_no); ?></td>
                                                        <td><?php echo e($icing->qty_refined_sugar); ?> <?php echo e($icing->uom); ?></td>
                                                        <td><?php echo e(Helper::defineBatchStockBy('id', $icing->id_batch_stock_dextrin)->batch_no); ?></td>
                                                        <td><?php echo e($icing->qty_dextrin); ?> <?php echo e($icing->uom); ?></td>
                                                        <td><?php echo e(Helper::defineBatchStockBy('id', $icing->id_batch_stock_multiwall)->batch_no); ?></td>
                                                        <td><?php echo e($icing->qty_multiwall); ?> PC</td>
                                                        <td><?php echo e($icing->qty_all); ?> <?php echo e($icing->uom); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                            <!--end: Datatable-->
                                            
                                            <?php if( $num > 0): ?>
                                            <div class="col-md-12 col-form-label text-md-center">
                                                <button id="submitbtn" type="submit" class="btn btn-primary "><?php echo e(__('Submit')); ?></button>
                                            </div>
                                            <?php endif; ?>
                                            </form> 
                                    </div>

                                </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
<style>
    td {  
        background-color: #86dcec;    
        
    }
</style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>



<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/production_icing/incoming_material.blade.php ENDPATH**/ ?>