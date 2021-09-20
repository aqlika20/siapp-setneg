



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
                                        
                                            <form id="form" method="post" action="<?php echo e(route('production-icing.icing-process.create')); ?>">
                                                <?php echo csrf_field(); ?>
                                            <div class="mb-7">
                                            
                                                <div class="row">
                                                    <div class="col-lg-12 col-xl-12">
                                                        <div class="row">
                                                            <div class="col-md-4 my-2 my-md-0">
                                                                <div class="input-icon">
                                                                    <input type="text" class="form-control" placeholder="Search Refined Sugar Batch No" id="production_icing_icing_process_search_query_1" />
                                                                    <span>
                                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 my-2 my-md-0">
                                                                <div class="input-icon">
                                                                    <input type="text" class="form-control" placeholder="Search Dextrin Batch No" id="production_icing_icing_process_search_query_2" />
                                                                    <span>
                                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 my-2 my-md-0">
                                                                <div class="input-icon">
                                                                    <input type="text" class="form-control" placeholder="Search Multiwall Batch No" id="production_icing_icing_process_search_query_3" />
                                                                    <span>
                                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="datatable datatable-borderless" id="production_icing_icing_process">
                                                <thead>
                                                    <tr>
                                                        <th>Selected</th>
                                                        <th>Icing Sugar Batch No</th>
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
                                                        <td><input type='checkbox' name='selected[]' class='form-control' value='<?php echo e($icing->id); ?>'></td>
                                                        <td><?php echo e(Helper::defineBatchStockBy('id', $icing->id_batch_stock_icing_sugar)->batch_no); ?></td>
                                                        <td><?php echo e(Helper::defineIcingRequestBy('id',$icing->id_icing_request)->po_sto); ?></td>
                                                        <td><?php echo e(Helper::defineShiftBy('id', $icing->id_shift)->name); ?></td>
                                                        <td><?php echo e(Helper::defineBatchStockBy('id', $icing->id_batch_stock_refined_sugar)->batch_no); ?></td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" pattern="[0-9]+([\.,][0-9]+)?" min="0.001"step="0.001" id="refined_sugar_weight" class="form-control refined_sugar_weight <?php $__errorArgs = ['refined_sugar_weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="refined_sugar_weight[]" autocomplete="refined_sugar_weight" autofocus value="<?php echo e($icing->qty_refined_sugar); ?>">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        KG
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><?php echo e(Helper::defineBatchStockBy('id', $icing->id_batch_stock_dextrin)->batch_no); ?></td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" pattern="[0-9]+([\.,][0-9]+)?" min="0.001"step="0.001" id="dextrin_weight" class="form-control dextrin_weight <?php $__errorArgs = ['dextrin_weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="dextrin_weight[]" autocomplete="dextrin_weight" autofocus  value="<?php echo e($icing->qty_dextrin); ?>">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        KG
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><?php echo e(Helper::defineBatchStockBy('id', $icing->id_batch_stock_multiwall)->batch_no); ?></td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" pattern="[0-9]+([\.,][0-9]+)?" min="0.001"step="0.001" id="multiwall_weight" class="form-control multiwall_weight <?php $__errorArgs = ['multiwall_weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="multiwall_weight[]" autocomplete="multiwall_weight" autofocus value="<?php echo e($icing->qty_multiwall); ?>">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        PC
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" pattern="[0-9]+([\.,][0-9]+)?" min="0.001"step="0.001" id="total" class="form-control total <?php $__errorArgs = ['total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="total[]" autocomplete="total" autofocus value="<?php echo e($icing->qty_all); ?>" >
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        KG
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
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

<script>
    // $(document).on('keyup', '.refined_sugar_weight, .dextrin_weight', function () {
    //     refinedSugarWeight = $(this).parent().parent().parent().find('.refined_sugar_weight');
    //     dextrinWeight = $(this).parent().parent().parent().find('.dextrin_weight');
    //     totalWeight = $(this).parent().parent().parent().find('.total');
    //     // clearTimeout(typingTimer);
    //     if (refinedSugarWeight.length>0 && dextrinWeight.length>0) {
    //         // typingTimer = setTimeout(function(){
    //         totalWeight.val(String(parseFloat(refinedSugarWeight.val())+parseFloat(dextrinWeight.val())));
    //         // }, doneTypingInterval);
    //     }
    //     else {
    //         totalWeight.val("");
    //     }
    // });
</script>

<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/production_icing/icing_process.blade.php ENDPATH**/ ?>