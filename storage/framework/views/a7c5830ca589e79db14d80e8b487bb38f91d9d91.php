



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
                                                            <form method="POST" action="<?php echo e(route('pic.user-management.edit',[$user->id])); ?>">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('PATCH'); ?>
                                                                
                                                                <div class="form-group row">
                                                                    <label for="name" class="col-md-6 col-form-label text-md-left"><?php echo e(__('Name')); ?></label>

                                                                    <div class="col-md-12">
                                                                        <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e($user->name); ?>" required autocomplete="name" autofocus>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="email" class="col-md-6 col-form-label text-md-left"><?php echo e(__('E-Mail Address')); ?></label>

                                                                    <div class="col-md-12">
                                                                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e($user->email); ?>" required autocomplete="email" readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="roles_id" class="col-md-6 col-form-label text-md-left"><?php echo e(__('Role')); ?></label>

                                                                    <div class="col-md-12">
                                                                        <select id="roles_id" class="form-control" name="roles_id" required autofocus>
                                                                            <option value="">Choose</option>
                                                                                <option value="">All</option>
                                                                                <option value="1" <?php if($user->roles_id == 1): ?> <?php echo e('selected'); ?> <?php endif; ?>>PIC</option>
                                                                                <option value="2" <?php if($user->roles_id == 2): ?> <?php echo e('selected'); ?> <?php endif; ?>>PPIC</option>
                                                                                <option value="3" <?php if($user->roles_id == 3): ?> <?php echo e('selected'); ?> <?php endif; ?>>Warehouse</option>
                                                                                <option value="4" <?php if($user->roles_id == 4): ?> <?php echo e('selected'); ?> <?php endif; ?>>Production - Icing</option>
                                                                                <option value="5" <?php if($user->roles_id == 5): ?> <?php echo e('selected'); ?> <?php endif; ?>>Production - Batching 1</option>
                                                                                <option value="6" <?php if($user->roles_id == 6): ?> <?php echo e('selected'); ?> <?php endif; ?>>Production - Batching 2</option>
                                                                                <option value="7" <?php if($user->roles_id == 7): ?> <?php echo e('selected'); ?> <?php endif; ?>>Filling</option>
                                                                            </select>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="password" class="col-md-6 col-form-label text-md-left"><?php echo e(__('New Password')); ?></label>

                                                                    <div class="col-md-12">
                                                                        <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" value="" autocomplete="password" readonly>
                                                                    </div>
                                                                </div>
                                                                
                                                                <a href="/pic/user-management" class="btn btn-secondary">Back</a>
                                                                <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
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
<script>
    $('#roles_id').select2();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/pic/user_management_edit.blade.php ENDPATH**/ ?>