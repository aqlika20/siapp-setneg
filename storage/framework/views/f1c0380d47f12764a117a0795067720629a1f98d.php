



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
                                                        <div class="col-md-6 my-2 my-md-0">
                                                            <form method="POST" action="<?php echo e(route('pic.setting.item-definition.edit',[$item->id])); ?>">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('PATCH'); ?>

                                                                
                                                                <div class="form-group row">
                                                                    <label for="item_id" class="col-md-6 col-form-label text-md-left"><?php echo e(__('Item ID')); ?></label>

                                                                    <div class="col-md-12">
                                                                        <input id="item_id" type="tel" pattern="[0-9]+" class="form-control <?php $__errorArgs = ['item_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="item_id" value="<?php echo e($item->item_id); ?>" required autocomplete="item_id" autofocus>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="item_desc" class="col-md-6 col-form-label text-md-left"><?php echo e(__('Item Desc')); ?></label>

                                                                    <div class="col-md-12">
                                                                        <input id="item_desc" type="text" class="form-control <?php $__errorArgs = ['item_desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="item_desc" value="<?php echo e($item->item_desc); ?>" required autocomplete="item_desc" autofocus>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="is_packaging" class="col-md-6 col-form-label text-md-left"><?php echo e(__('Packaging?')); ?></label>
            
                                                                    <div class="col-md-1">
                                                                        <input id="is_packaging" type='checkbox' class="is_packaging form-control" name='is_packaging' class='form-control' value='1' <?php if($item->is_packaging == 1): ?> checked <?php endif; ?>>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="using_meter" class="col-md-6 col-form-label text-md-left"><?php echo e(__('Using Meter?')); ?></label>
            
                                                                    <div class="col-md-1">
                                                                        <input id="using_meter" type='checkbox' class="using_meter form-control" name='using_meter' class='form-control' value='1' <?php if($item->using_meter == 1): ?> checked <?php endif; ?>>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="notes" class="col-md-6 col-form-label text-md-left"><?php echo e(__('Notes')); ?></label>

                                                                    <div class="col-md-12">
                                                                        <textarea id="notes" rows="4" class="notes form-control <?php $__errorArgs = ['notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="notes" autocomplete="notes" autofocus><?php echo e($item->notes); ?></textarea>
                                                                    </div>
                                                                </div>

                                                                
                                                                
                                                                <a href="/pic/setting/item-definition" class="btn btn-secondary">Back</a>
                                                                <button type="submit" class="btn btn-primary"><?php echo e(__('Edit')); ?></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Search Form-->
                                        <!--end: Search Form-->
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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/pic/setting/item_definition_edit.blade.php ENDPATH**/ ?>