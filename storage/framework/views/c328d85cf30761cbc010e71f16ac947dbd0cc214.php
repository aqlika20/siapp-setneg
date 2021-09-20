



<?php $__env->startSection('content'); ?>

                                <div class="card card-custom">
                                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                        <div class="card-title">
                                            <h3 class="card-label">Profile
                                            <div class="text-muted pt-2 font-size-sm">About Your Profile</div></h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="accordion accordion-solid accordion-toggle-plus" id="accordion-preview">
                                            <div class="card">
                                                <div class="card-header" id="headingOne6">
                                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#data">
                                                        <i class="flaticon2-file"></i> Data
                                                    </div>
                                                </div>
                                                <div id="data" class="collapse" data-parent="#accordion-preview">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 my-2 my-md-0">
                                                                        <form method="POST" action="<?php echo e(route('profile.edit')); ?>">
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
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e($currentUser->name); ?>" required autocomplete="name" autofocus>
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
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e($currentUser->email); ?>" required autocomplete="email" readonly>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <?php if($currentUser->roles->id == 5): ?>
                                                                            <div class="form-group row">
                                                                                <label for="address" class="col-md-6 col-form-label text-md-left"><?php echo e(__('Address')); ?></label>
                
                                                                                <div class="col-md-12">
                                                                                    <textarea id="address" rows="4" class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="address" required autocomplete="address" autofocus><?php echo e($currentCustomer->address); ?></textarea>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label for="contact" class="col-md-6 col-form-label text-md-left"><?php echo e(__('Contact')); ?></label>
                
                                                                                <div class="col-md-12">
                                                                                    <input id="contact" type="tel" class="form-control <?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="contact" value="<?php echo e($currentCustomer->contact); ?>" required autocomplete="contact" autofocus>
                                                                                </div>
                                                                            </div>
                                                                            <?php endif; ?>
                                                                            
                                                                            <button type="submit" class="btn btn-primary"><?php echo e(__('Edit')); ?></button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo6">
                                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#password">
                                                        <i class="flaticon2-shield"></i> Password
                                                    </div>
                                                </div>
                                                <div id="password" class="collapse" data-parent="#accordion-preview">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 my-2 my-md-0">
                                                                        <form method="POST" action="<?php echo e(route('profile.change-password')); ?>">
                                                                            <?php echo csrf_field(); ?>
                                                                            <?php echo method_field('PATCH'); ?>
                                                                            
                                                                            <div class="form-group row">
                                                                                <label for="new-password" class="col-md-6 col-form-label text-md-left"><?php echo e(__('New Password')); ?></label>
                
                                                                                <div class="col-md-12">
                                                                                    <input id="new-password" type="password" minlength="8" class="form-control <?php $__errorArgs = ['new-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="new_password" required autocomplete="new-password" autofocus>
                                                                                </div>
                                                                            </div>
                
                                                                            <div class="form-group row">
                                                                                <label for="new-password" class="col-md-6 col-form-label text-md-left"><?php echo e(__('Confirm New Password')); ?></label>
                
                                                                                <div class="col-md-12">
                                                                                    <input id="new-password-confirm" type="password" minlength="8" class="form-control" name="new_password_confirmation" required autocomplete="new-password" autofocus>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <button type="submit" class="btn btn-primary"><?php echo e(__('Change')); ?></button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\tigaraksa\resources\views/pages/profile.blade.php ENDPATH**/ ?>