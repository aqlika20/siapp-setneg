

<?php $__env->startSection('content'); ?>

<?php
    $kt_logo_image = 'logo_large.svg';
?>

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">
                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row" style="margin-top: 100px;">
                        <div class="text-md-center" style="width: 100%; display: flex; justify-content: center;">
                            <img style="width: 47%;" alt="<?php echo e(config('app.name')); ?>" src="<?php echo e(asset('media/logos/'.$kt_logo_image)); ?>"/>
                        </div>
                    </div>
                    <div class="form-group row" style="justify-content: center;">
                        <div class="col-md-6 mb-5 bg-light-info p-8 rounded">
                            <label class="text-info"><strong>PIC</strong></label>
                            <div class="text-info"> User  : <strong>111111</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>Koordinator Pokja</strong></label>
                            <div class="text-info"> User  : <strong>123456</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>JF Ahli Muda </strong></label>
                            <div class="text-info"> User  : <strong>654321</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>JF Ahli Madya</strong></label>
                            <div class="text-info"> User  : <strong>222222</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>Karo</strong></label>
                            <div class="text-info"> User  : <strong>333333</strong> and password <strong>testestes</strong></div>
                        </div>
                    </div>
                    <div class="form-group row" style="justify-content: center;">
                        <div class="col-md-6">
                            <input id="nip" class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="NIP" name="nip" autocomplete="off" required/>
                        </div>
                    </div>

                    <div class="form-group row" style="justify-content: center;">
                        <div class="col-md-6">
                            <input id="password" class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password" name="password" required/>
                        </div>
                    </div>
                    <div class="form-group row" style="justify-content: center;">
                        <div class="col-md-6">
                            <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                                <div class="checkbox-inline">
                                    <label class="checkbox m-0 text-muted">
                                    <input type="checkbox" name="remember" />
                                    <span></span>Ingat Saya</label>
                                </div>
                                <a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">Lupa Password ?</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" style="justify-content: center;">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-warning btn-lg btn-block">
                                <?php echo e(__('Login')); ?>

                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ardim\Desktop\siapp\resources\views/auth/login.blade.php ENDPATH**/ ?>