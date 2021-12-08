



<?php $__env->startSection('content'); ?>

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">			
            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Dashboard-->
                    <!--begin card-->
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">Management Pengguna</h3>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="<?php echo e(route('administrator.user-management.edit',[$user->id])); ?>">
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
                                    <label for="nip" class="col-md-6 col-form-label text-md-left">NIP</label>

                                    <div class="col-md-12">
                                        <input id="nip" type="text" class="form-control <?php $__errorArgs = ['nip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nip" value="<?php echo e($user->nip); ?>" required autocomplete="nip" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="role" class="col-md-6 col-form-label text-md-left"><?php echo e(__('Role')); ?></label>

                                    <div class="col-md-12">
                                        <select id="role" class="form-control" name="role" required autofocus>
                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($role->id); ?>" <?php if($user->roles_id == $role->id): ?> <?php echo e('selected'); ?> <?php endif; ?>><?php echo e($role->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="group" class="col-md-6 col-form-label text-md-left">Group</label>

                                    <div class="col-md-12">
                                        <select id="group" class="form-control" name="group" required autofocus>
                                            <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($group->id); ?>" <?php if($user->groups_id == $group->id): ?> <?php echo e('selected'); ?> <?php endif; ?>><?php echo e($group->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
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
                                
                                <a href="<?php echo e(route('administrator.user-management.index')); ?>" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
                            </form>
                        </div>
                    </div>
                    <!--end card-->
                    <!--begin::Row-->
                    
                    <!--end::Row-->
                    <!--end::Dashboard-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
        <!--end::Content-->

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
    $('#role').select2();
    $('#group').select2();
</script>
<script src="<?php echo e(asset('js/pages/custom/wizard/wizard-2.js')); ?>"></script>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\siapp\resources\views/pages/administrator/user_management_edit.blade.php ENDPATH**/ ?>