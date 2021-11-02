

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
                    <div class="form-group row" style="justify-content: center;">
                        <div class="col-md-6">
                            <div class="mt-5 text-md-center">
                                <span class="opacity-70 mr-4">Atau login menggunakan</span>
                            </div>
                            <div class="mt-10"></div>
                            <a href="index.html" class="btn btn-outline-dark btn-lg btn-block">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:assets/media/svg/social-icons/google.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M19.9895 10.1871C19.9895 9.36767 19.9214 8.76973 19.7742 8.14966H10.1992V11.848H15.8195C15.7062 12.7671 15.0943 14.1512 13.7346 15.0813L13.7155 15.2051L16.7429 17.4969L16.9527 17.5174C18.879 15.7789 19.9895 13.221 19.9895 10.1871Z" fill="#4285F4" />
                                        <path d="M10.1993 19.9313C12.9527 19.9313 15.2643 19.0454 16.9527 17.5174L13.7346 15.0813C12.8734 15.6682 11.7176 16.0779 10.1993 16.0779C7.50243 16.0779 5.21352 14.3395 4.39759 11.9366L4.27799 11.9466L1.13003 14.3273L1.08887 14.4391C2.76588 17.6945 6.21061 19.9313 10.1993 19.9313Z" fill="#34A853" />
                                        <path d="M4.39748 11.9366C4.18219 11.3166 4.05759 10.6521 4.05759 9.96565C4.05759 9.27909 4.18219 8.61473 4.38615 7.99466L4.38045 7.8626L1.19304 5.44366L1.08875 5.49214C0.397576 6.84305 0.000976562 8.36008 0.000976562 9.96565C0.000976562 11.5712 0.397576 13.0882 1.08875 14.4391L4.39748 11.9366Z" fill="#FBBC05" />
                                        <path d="M10.1993 3.85336C12.1142 3.85336 13.406 4.66168 14.1425 5.33717L17.0207 2.59107C15.253 0.985496 12.9527 0 10.1993 0C6.2106 0 2.76588 2.23672 1.08887 5.49214L4.38626 7.99466C5.21352 5.59183 7.50242 3.85336 10.1993 3.85336Z" fill="#EB4335" />
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\siapp\resources\views/auth/login.blade.php ENDPATH**/ ?>