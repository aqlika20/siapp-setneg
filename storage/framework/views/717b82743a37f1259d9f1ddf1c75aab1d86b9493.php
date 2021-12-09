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
                        <div class="col-md-6">
                            <input id="nip"  class="form-control h-auto form-control-solid py-4 px-8 " type="text" placeholder="NIP" name="nip" autocomplete="off" required autocomplete="nip" autofocus/>
                        </div>
                    </div>
                    <div class="form-group row" style="justify-content: center;">
                        <div class="col-md-6">
                            <input id="password" class="form-control h-auto form-control-solid py-4 px-8 " type="password" placeholder="Password" name="password" required autocomplete="current-password" autofocus/>
                        </div>
                    </div>
                    <div class="form-group row" style="justify-content: center;">
                        <?php $__errorArgs = ['nip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red;" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- <div class="form-group row" style="justify-content: center;">
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
                    </div> -->
                    <div class="form-group row" style="justify-content: center;">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-warning btn-lg btn-block">
                                <?php echo e(__('Login')); ?>

                            </button>
                        </div>
                    </div>

                    <div class="form-group row" style="justify-content: center;">
                        <div class="col-md-6 mb-5 bg-light-info p-8 rounded">
                            <label class="text-info"><strong>PIC</strong></label>
                            <div class="text-info"> User  : <strong>111111</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>Koordinator Pokja P4</strong></label>
                            <div class="text-info"> User  : <strong>123456</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>Koordinator Pokja KP</strong></label>
                            <div class="text-info"> User  : <strong>67890</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>Koordinator Pokja Pensiun</strong></label>
                            <div class="text-info"> User  : <strong>222222</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>JF SDMA Ahli Muda P4</strong></label>
                            <div class="text-info"> User  : <strong>333333</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>JF SDMA Ahli Muda KP</strong></label>
                            <div class="text-info"> User  : <strong>444444</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>JF SDMA Ahli Muda Pensiun</strong></label>
                            <div class="text-info"> User  : <strong>555555</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>JF SDMA  Ahli Pertama P4</strong></label>
                            <div class="text-info"> User  : <strong>666666</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>JF SDMA  Ahli Pertama KP</strong></label>
                            <div class="text-info"> User  : <strong>777777</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>JF SDMA Ahli Pertama Pensiun</strong></label>
                            <div class="text-info"> User  : <strong>888888</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>JF SDMA Ahli Terampil P4</strong></label>
                            <div class="text-info"> User  : <strong>999999</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>JF SDMA Ahli Terampil KP</strong></label>
                            <div class="text-info"> User  : <strong>000000</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>JF SDMA Ahli Terampil Pensiun</strong></label>
                            <div class="text-info"> User  : <strong>654321</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>Karo</strong></label>
                            <div class="text-info"> User  : <strong>567567</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>Deputi</strong></label>
                            <div class="text-info"> User  : <strong>345345</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>TU Menteri</strong></label>
                            <div class="text-info"> User  : <strong>890890</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>Bagian Dukungan Administrasi</strong></label>
                            <div class="text-info"> User  : <strong>321767</strong> and password <strong>testestes</strong></div>
                            <br>
                            <label class="text-info"><strong>Administrator</strong></label>
                            <div class="text-info"> User  : <strong>123748</strong> and password <strong>testestes</strong></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/siapp/resources/views/auth/login.blade.php ENDPATH**/ ?>