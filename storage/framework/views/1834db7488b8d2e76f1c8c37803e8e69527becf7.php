<?php if(config('layout', 'extras/user/dropdown/style') == 'light'): ?>
    
    <div class="d-flex align-items-center p-8 rounded-top">
            
            <div class="text-white m-0 flex-grow-1 mr-3 font-size-h5 font-weight-bold text-capitalize"><?php echo e($currentUser->name); ?></div>
            <div class="label label-lg font-weight-bold label-inline text-capitalize"><?php echo e($currentUser->roles->name); ?></div>
    </div>
    <div class="separator separator-solid"></div>
<?php else: ?>
    
    <div class="d-flex align-items-center justify-content-between flex-wrap p-8 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url('<?php echo e(asset('media/misc/bg-1.jpg')); ?>')">
        <div class="align-items-center mr-2">
            
            <div class="text-white m-0 flex-grow-1 mr-3 font-size-h5 font-weight-bold text-capitalize"><?php echo e($currentUser->name); ?></div>
            <div class="label label-lg font-weight-bold label-inline text-capitalize"><?php echo e($currentUser->roles->name); ?></div>
        </div>
    </div>
<?php endif; ?>


<div class="navi navi-spacer-x-0 pt-5">
    
    <a href="<?php echo e(route('profile.index')); ?>" class="navi-item px-8">
        <div class="navi-link">
            <div class="navi-icon mr-2">
                <i class="flaticon2-calendar-3 text-success"></i>
            </div>
            <div class="navi-text">
                <div class="font-weight-bold">
                    My Profile
                </div>
                <div class="text-muted">
                    Account settings and more
                </div>
            </div>
        </div>
    </a>

    
    <div class="navi-separator mt-3"></div>
    <div class="navi-footer  px-8 py-5">
        <a href="<?php echo e(route('logout')); ?>"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-light-primary font-weight-bold">Sign Out</a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
    </div>
</div>
<?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/layout/partials/extras/dropdown/_user.blade.php ENDPATH**/ ?>