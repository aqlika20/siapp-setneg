



<?php $__env->startSection('content'); ?>

                                <div class="card card-custom">
                                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                        <div class="card-title">
                                            <h3 class="card-label"><?php echo e($page_title); ?>

                                            <div class="text-muted pt-2 font-size-sm"><?php echo e($page_description); ?></div></h3>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <div class="border border-primary p-3" style="border-radius:0.42rem;">
                                                    <!--begin: Datatable-->
                                                    <label><b><?php echo e(__('Refined Sugar Stock')); ?></b></label>
                                                    <table class="datatable datatable-borderless" id="warehouse_delivery_note_icing_process_refined_sugar_stock">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
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
                                                        <?php $__currentLoopData = $refined_sugars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $refined_sugar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                                $item_data = Helper::defineItemBy('id', $refined_sugar->id_item_type);
                                                            ?>
                                                            <tr>
                                                                <td><?php echo e($num+=1); ?></td>
                                                                <td><?php echo e($refined_sugar->batch_no); ?></td>
                                                                <td><?php echo e($item_data->item_id); ?></td>
                                                                <td><?php echo e($item_data->item_desc); ?></td>
                                                                <td><?php echo e($refined_sugar->actual_weight); ?> <?php echo e($refined_sugar->uom); ?></td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                    <!--end: Datatable-->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="border border-primary p-3" style="border-radius:0.42rem;">
                                                    <!--begin: Datatable-->
                                                    <label><b><?php echo e(__('Dextrin Stock')); ?></b></label>
                                                    <table class="datatable datatable-borderless" id="warehouse_delivery_note_icing_process_dextrin_stock">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
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
                                                        <?php $__currentLoopData = $dextrins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dextrin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                                $item_data = Helper::defineItemBy('id', $dextrin->id_item_type);
                                                            ?>
                                                            <tr>
                                                                <td><?php echo e($num+=1); ?></td>
                                                                <td><?php echo e($dextrin->batch_no); ?></td>
                                                                <td><?php echo e($item_data->item_id); ?></td>
                                                                <td><?php echo e($item_data->item_desc); ?></td>
                                                                <td><?php echo e($dextrin->actual_weight); ?> <?php echo e($dextrin->uom); ?></td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                    <!--end: Datatable-->
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-6">
                                                <div class="border border-primary p-3" style="border-radius:0.42rem;">
                                                    <!--begin: Datatable-->
                                                    <label><b><?php echo e(__('Multiwall Stock')); ?></b></label>
                                                    <table class="datatable datatable-borderless" id="warehouse_delivery_note_icing_process_multiwall_stock">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Batch No</th>
                                                                <th>Item ID</th>
                                                                <th>Item Desc</th>
                                                                <th>Piece</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                            $num = 0
                                                        ?>
                                                        <?php $__currentLoopData = $multiwalls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multiwall): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                                $item_data = Helper::defineItemBy('id', $multiwall->id_item_type);
                                                            ?>
                                                            <tr>
                                                                <td><?php echo e($num+=1); ?></td>
                                                                <td><?php echo e($multiwall->batch_no); ?></td>
                                                                <td><?php echo e($item_data->item_id); ?></td>
                                                                <td><?php echo e($item_data->item_desc); ?></td>
                                                                <td><?php echo e($multiwall->actual_weight); ?> <?php echo e($multiwall->uom); ?></td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                    <!--end: Datatable-->
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-6">
                                                <div class="border border-primary p-3" style="border-radius:0.42rem;">
                                                    <!--begin: Datatable-->
                                                    <label><b><?php echo e(__('Icing Sugar Request')); ?></b></label>
                                                    <table class="datatable datatable-borderless" id="warehouse_delivery_note_icing_process_request_stock">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Requested At Formatted</th>
                                                                <th>PO Target</th>
                                                                <th>Weight</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                            $num = 0
                                                        ?>
                                                        <?php $__currentLoopData = $icing_sugar_requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icing_sugar_request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if(empty($icing_sugar_request->notes)): ?>
                                                        <tr>
                                                            <td><?php echo e($num+=1); ?></td>
                                                            <td><?php echo e(Helper::convertToViewDateTime('date', $icing_sugar_request->created_at)); ?></td>
                                                            <td><?php echo e($icing_sugar_request->po_sto); ?></td>
                                                            <td><?php echo e($icing_sugar_request->qty); ?> <?php echo e($icing_sugar_request->uom); ?></td>
                                                            
                                                        </tr>
                                                        <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                    <!--end: Datatable-->
                                                </div>
                                            </div>
                                        </div>
                                        <form method="POST" id="form" action="<?php echo e(route('warehouse.delivery-note.icing-process.create')); ?>">
                                        <?php echo csrf_field(); ?>
                                        
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="item_detail_wrapper">
                                                    <div class="form-group row item_data">

                                                        <div class="form-group col-md-3">
                                                            <label for="po_sto" class=" col-form-label text-md-left"><?php echo e(__('PO Target')); ?></label>
                                                            <div class="col-md-12 p-0">
                                                                <select id="po_sto" class="form-control po_sto <?php $__errorArgs = ['po_sto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="po_sto[]" autocomplete="po_sto" autofocus>
                                                                    <option value="">Choose</option>
                                                                    <?php $__currentLoopData = $icing_sugar_requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icing_sugar_request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if(empty($icing_sugar_request->notes)): ?>
                                                                        <option value="<?php echo e($icing_sugar_request->id); ?>"><?php echo e($icing_sugar_request->po_sto); ?></option>
                                                                    <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                            <label for="shift" class=" col-form-label text-md-left"><?php echo e(__('Shift')); ?></label>
                                                            <div class="col-md-12 p-0">
                                                                <select id="shift" class="form-control shift <?php $__errorArgs = ['shift'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="shift[]" autocomplete="shift" autofocus>
                                                                    <option value="">Choose</option>
                                                                    <?php $__currentLoopData = $shifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($shift->id); ?>"><?php echo e($shift->name); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                            <label for="multiwall_batch_no" class=" col-form-label text-md-left"><?php echo e(__('Multiwall Batch No')); ?></label>
                                
                                                                <select id="multiwall_batch_no" class="form-control multiwall_batch_no <?php $__errorArgs = ['multiwall_batch_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="multiwall_batch_no[]" autocomplete="multiwall_batch_no" autofocus>
                                                                    <option value="">Choose</option>
                                                                    <?php $__currentLoopData = $multiwalls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multiwall): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($multiwall->id); ?>"><?php echo e($multiwall->batch_no); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                        </div>

                                                        <div class="form-group col-md-2">
                                                            <label class=" col-form-label text-md-left"><?php echo e(__('Multiwall Piece')); ?></label>
                                                                <div class="input-group">
                                                                    <input type="number" pattern="[0-9]+([\.,][0-9]+)?" min="0.001"step="0.001" id="multiwall_amount" class="form-control multiwall_weight <?php $__errorArgs = ['multiwall_weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="multiwall_weight[]" autocomplete="multiwall_weight" autofocus>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">
                                                                            PC
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                            <label for="refined_sugar_batch_no" class=" col-form-label text-md-left"><?php echo e(__('Refined Sugar Batch No')); ?></label>
                                
                                                                <select id="refined_sugar_batch_no" class="form-control refined_sugar_batch_no <?php $__errorArgs = ['refined_sugar_batch_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="refined_sugar_batch_no[]" autocomplete="refined_sugar_batch_no" autofocus>
                                                                    <option value="">Choose</option>
                                                                    <?php $__currentLoopData = $refined_sugars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $refined_sugar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($refined_sugar->id); ?>"><?php echo e($refined_sugar->batch_no); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                        </div>

                                                        <div class="form-group col-md-2">
                                                            <label class=" col-form-label text-md-left"><?php echo e(__('Refined Sugar Weight')); ?></label>
                                                                <div class="input-group">
                                                                    <input type="number" pattern="[0-9]+([\.,][0-9]+)?" min="0.001"step="0.001" id="refined_sugar_weight" class="form-control refined_sugar_weight <?php $__errorArgs = ['refined_sugar_weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="refined_sugar_weight[]" autocomplete="refined_sugar_weight" autofocus>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">
                                                                            KG
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                            <label for="dextrin_batch_no" class=" col-form-label text-md-left"><?php echo e(__('Dextrin Batch No')); ?></label>
                                
                                                                <select id="dextrin_batch_no" class="form-control dextrin_batch_no <?php $__errorArgs = ['dextrin_batch_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="dextrin_batch_no[]" autocomplete="dextrin_batch_no" autofocus>
                                                                    <option value="">Choose</option>
                                                                    <?php $__currentLoopData = $dextrins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dextrin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($dextrin->id); ?>"><?php echo e($dextrin->batch_no); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                        </div>                                

                                                        <div class="form-group col-md-2">
                                                            <label class=" col-form-label text-md-left"><?php echo e(__('Dextrin Weight')); ?></label>
                                                                <div class="input-group">
                                                                    <input type="number" pattern="[0-9]+([\.,][0-9]+)?" min="0.001"step="0.001" id="dextrin_weight" class="form-control dextrin_weight <?php $__errorArgs = ['dextrin_weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="dextrin_weight[]" autocomplete="dextrin_weight" autofocus >
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">
                                                                            KG
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        

                                                        <div class="form-group col-md-2">
                                                            <label class=" col-form-label text-md-left"><?php echo e(__('Total')); ?></label>
                                                                <div class="input-group">
                                                                    <input type="number" pattern="[0-9]+([\.,][0-9]+)?" min="0.001"step="0.001" class="form-control total <?php $__errorArgs = ['total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="total[]" autocomplete="total" autofocus readonly>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">
                                                                            KG
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                        </div>

                                                        
                                                    </div>

                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <button type="button" class="add_more_item btn btn-primary"><?php echo e(__('Add More Item')); ?></button>
                                            </div>
                                        
                                        </div>
                                        <div class="col-md-12 col-form-label text-md-center">
                                            <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
                                        </div>
                                        </form>
                                    </div>
                                </div>

                                

<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script id="document_template_detail" type="text/x-handlebars-template">
    
    <div class="form-group row item_data">

               
        <div class="form-group col-md-3">
            <label for="po_sto" class=" col-form-label text-md-left"><?php echo e(__('PO Target')); ?></label>

                <select class="form-control po_sto <?php $__errorArgs = ['po_sto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="po_sto[]" autocomplete="po_sto" autofocus>
                    <option value="">Choose</option>
                    <?php $__currentLoopData = $icing_sugar_requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icing_sugar_request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(empty($icing_sugar_request->notes)): ?>
                   <option value="<?php echo e($icing_sugar_request->id); ?>"><?php echo e($icing_sugar_request->po_sto); ?></option>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
        </div>

        <div class="form-group col-md-3">
            <label for="shift" class=" col-form-label text-md-left"><?php echo e(__('Shift')); ?></label>

                <select class="form-control shift <?php $__errorArgs = ['shift'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="shift[]" autocomplete="shift" autofocus>
                    <option value="">Choose</option>
                    <?php $__currentLoopData = $shifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <option value="<?php echo e($shift->id); ?>"><?php echo e($shift->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
        </div>

        <div class="form-group col-md-3">
            <label for="multiwall_batch_no" class=" col-form-label text-md-left"><?php echo e(__('Multiwall Batch No')); ?></label>

            <div class="">
                <select class="form-control multiwall_batch_no <?php $__errorArgs = ['multiwall_batch_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="multiwall_batch_no[]" autocomplete="multiwall_batch_no" autofocus>
                    <option value="">Choose</option>
                    <?php $__currentLoopData = $multiwalls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multiwall): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($multiwall->id); ?>"><?php echo e($multiwall->batch_no); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="form-group col-md-2">
            <label class=" col-form-label text-md-left"><?php echo e(__('Multiwall Piece')); ?></label>
                <div class="input-group">
                    <input type="number" pattern="[0-9]+([\.,][0-9]+)?" min="0.001" step=".01" class="form-control multiwall_weight <?php $__errorArgs = ['multiwall_weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="multiwall_weight[]" autocomplete="multiwall_weight" autofocus>
                    <div class="input-group-append">
                        <span class="input-group-text">
                            PC
                        </span>
                    </div>
                </div>
        </div>

        <div class="form-group col-md-3">
            <label for="refined_sugar_batch_no" class=" col-form-label text-md-left"><?php echo e(__('Refined Sugar Batch No')); ?></label>

            <div class="">
                <select class="form-control refined_sugar_batch_no <?php $__errorArgs = ['refined_sugar_batch_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="refined_sugar_batch_no[]" autocomplete="refined_sugar_batch_no" autofocus>
                    <option value="">Choose</option>
                    <?php $__currentLoopData = $refined_sugars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $refined_sugar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($refined_sugar->id); ?>"><?php echo e($refined_sugar->batch_no); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="form-group col-md-2">
            <label class=" col-form-label text-md-left"><?php echo e(__('Refined Sugar Weight')); ?></label>
                <div class="input-group">
                    <input type="number" pattern="[0-9]+([\.,][0-9]+)?" min="0.001" step=".01" class="form-control refined_sugar_weight <?php $__errorArgs = ['refined_sugar_weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="refined_sugar_weight[]" autocomplete="refined_sugar_weight" autofocus>
                    <div class="input-group-append">
                        <span class="input-group-text">
                            KG
                        </span>
                    </div>
                </div>
        </div>

        <div class="form-group col-md-3">
            <label for="dextrin_batch_no" class=" col-form-label text-md-left"><?php echo e(__('Dextrin Batch No')); ?></label>

            <div class="">
                <select class="form-control dextrin_batch_no <?php $__errorArgs = ['dextrin_batch_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="dextrin_batch_no[]" autocomplete="dextrin_batch_no" autofocus>
                    <option value="">Choose</option>
                    <?php $__currentLoopData = $dextrins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dextrin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($dextrin->id); ?>"><?php echo e($dextrin->batch_no); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>    

        <div class="form-group col-md-2">
            <label class=" col-form-label text-md-left"><?php echo e(__('Dextrin Weight')); ?></label>
                <div class="input-group">
                    <input type="number" pattern="[0-9]+([\.,][0-9]+)?" min="0.001" step=".01" class="form-control dextrin_weight <?php $__errorArgs = ['dextrin_weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="dextrin_weight[]" autocomplete="dextrin_weight" autofocus>
                    <div class="input-group-append">
                        <span class="input-group-text">
                            KG
                        </span>
                    </div>
                </div>
        </div>

        <div class="form-group col-md-2">
            <label class=" col-form-label text-md-left"><?php echo e(__('Total')); ?></label>
                <div class="input-group">
                    <input type="number" pattern="[0-9]+([\.,][0-9]+)?" min="0.001" step=".01" class="form-control total <?php $__errorArgs = ['total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="total[]" autocomplete="total" autofocus readonly >
                    <div class="input-group-append">
                        <span class="input-group-text">
                            KG
                        </span>
                    </div>
                </div>
        </div>

        <div class="form-group col">
            <div class="text-md-left">
                <button type="button" class="col-form-label text-md-left remove_detail btn btn-danger"><?php echo e(__('Remove')); ?></button>
            </div>
        </div>

    </div>

</script>
<script type="text/javascript">
    $(document).ready(function() {
        refresh();
    });
   function refresh(){
    $('.po_sto').select2();
    $('.shift').select2();
    $('.multiwall_batch_no').select2();
    $('.refined_sugar_batch_no').select2(); 
    $('.dextrin_batch_no').select2();

    // $(".refined_sugar_weight, .dextrin_weight").keyup(function(){
    //     $(".total").val(+$(".refined_sugar_weight").val() + +$(".dextrin_weight").val());
    // });
   }
    
    var typingTimer;                //timer identifier
    var doneTypingInterval = 800;  //time in ms, 5 second for example

    toastr.options = {
        "closeButton": true,
        "debug": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "0",
        "hideDuration": "0",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    $(document).on('keyup', '.refined_sugar_weight, .dextrin_weight', function () {
        refinedSugarWeight = $(this).parent().parent().parent().find('.refined_sugar_weight');
        dextrinWeight = $(this).parent().parent().parent().find('.dextrin_weight');
        totalWeight = $(this).parent().parent().parent().find('.total');
        // clearTimeout(typingTimer);
        if (refinedSugarWeight.length>0 && dextrinWeight.length>0) {
            // typingTimer = setTimeout(function(){
            totalWeight.val(String(parseFloat(refinedSugarWeight.val())+parseFloat(dextrinWeight.val())));
            // }, doneTypingInterval);
        }
        else {
            totalWeight.val("");
        }
    });
    
    $('#form').submit(function(event){

        $('.code , .refined_sugar_batch_no , .refined_sugar_weight , .dextrin_batch_no , .dextrin_batch_weight, .total').each(function(){
            if($(this).val().length < 1){
                toastr.error('Please fill all fields.', 'Error')
                event.preventDefault();
            }
        });

    });
    
    
    $(document).on('click','.add_more_item',function(){
        var source = $("#document_template_detail").html();
        var template = Handlebars.compile(source);
        $(this).parent().parent().parent().find(".item_detail_wrapper").append(template);
        refresh();
    });

    $(document).on('click','.remove_detail',function(event) {
            $(this).closest('.item_data').remove();
    });

    $('#input_date').datepicker({
        format: 'yyyy-mm-dd', 
    });
    $("#input_date").datepicker().datepicker("setDate", new Date());
</script>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/warehouse/delivery_note/icing_process.blade.php ENDPATH**/ ?>