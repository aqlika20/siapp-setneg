



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
        

            <div class="form-group row">
                <div class="col-md-12">
                    <div class="border border-primary p-3" style="border-radius:0.42rem;">
                        <div class="refine-sugar-table-wrapper">
                                <label><b>Icing Sugar Request</b></label>
                                <table class="datatable datatable-borderless" id="ppic_icing_request">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>PO Target</th>
                                            <th>Weight</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $num = 0
                                        ?>
                                        <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(empty($request->notes)): ?>
                                        <tr>
                                            <td><?php echo e($num+=1); ?></td>
                                            <td><?php echo e($request->po_sto); ?></td>
                                            <td><?php echo e($request->qty); ?> <?php echo e($request->uom); ?></td>
                                            <td>
                                                <form method="POST" action="<?php echo e(route('ppic.production-planning.icing-sugar.delete',[$request->id])); ?>">
                                                    <?php echo csrf_field(); ?> 
                                                    <?php echo method_field('DELETE'); ?>
                                                    <a href="<?php echo e(route('ppic.production-planning.icing-sugar.view',[$request->id])); ?>" title="Edit" class="btn btn-icon btn-light btn-sm mx-1">
                                                        <?php echo e(Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-md svg-icon-primary")); ?>

                                                    </a>
                                                    <button type="submit" title="Delete" class="btn btn-icon btn-light btn-sm mx-1" onclick='return confirm("Are you sure?")'>
                                                        <?php echo e(Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary")); ?>

                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>

            <form id="icing_sugar_form" method="post" action="<?php echo e(route('ppic.production-planning.icing-sugar.create')); ?>">
                <?php echo csrf_field(); ?>
            <div class="form-group row">
                <label for="date" class="col-md-2 col-form-label "><?php echo e(__('Date')); ?></label>
                <div class="col-md-4">
                    <div class="input-group date" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" id="date" placeholder="Select date" data-target="#date" name="date" readonly/>
                        <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                            <span class="input-group-text">
                                <i class="ki ki-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="time" class="col-md-2 col-form-label "><?php echo e(__('Time')); ?></label>

                <div class="col-md-4">
                    
                    <div class="input-group timepicker">
                        <input class="form-control" id="time" readonly placeholder="Select time" name="time" type="text"/>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-clock-o"></i>
                            </span>
                        </div>
                    </div>
                        
                </div>
            </div>

            
            <div class="form-group row">
                <label for="po_sto" class="col-md-2 col-form-label "><?php echo e(__('PO Target')); ?></label>

                <div class="col-md-4">
                    <input id="po_sto" type="text" class="form-control <?php $__errorArgs = ['po_sto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="po_sto" autocomplete="po_sto" autofocus required>
                </div>
            </div>
            

            <div class="form-group row">
                <label for="weight" class="col-md-2 col-form-label "><?php echo e(__('Icing Sugar Weight')); ?></label>
                <div class="input-group col-md-4">
                    <input type="number" class="form-control" placeholder="Input Weight" name="weight" pattern="[0-9]+([\.,][0-9]+)?" min="0.001"step="0.001" required/>
                    <div class="input-group-append">
                        <span class="input-group-text">
                            KG
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-form-label text-md-center">
                <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
            </div>
        </form>
    </div>
</div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<script>
    $('#shift').select2();

    $('#date').datepicker({
        format: 'dd-M-yy', 
    });
    $("#date").datepicker().datepicker("setDate", new Date());

    $('#time').timepicker({
        minuteStep: 1,
        showSeconds: true,
        showMeridian: true,
        snapToStep: true,
        format: 'H:i:s', 
    });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/ppic/production_planning/icing_sugar.blade.php ENDPATH**/ ?>