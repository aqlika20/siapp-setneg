
<?php if(config('layout.content.extended')): ?>
    <?php echo $__env->yieldContent('content'); ?>
<?php else: ?>
    <div class="d-flex flex-column-fluid">
        <div class="<?php echo e(Metronic::printClasses('content-container', false)); ?>">
            <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong><?php echo e($message); ?></strong>
            </div>
            <?php endif; ?>

            <?php if($message = Session::get('error')): ?>
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong><?php echo e($message); ?></strong>
            </div>
            <?php endif; ?>

            <?php if($message = Session::get('warning')): ?>
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong><?php echo e($message); ?></strong>
            </div>
            <?php endif; ?>

            <?php if($message = Session::get('info')): ?>
            <div class="alert alert-info alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong><?php echo e($message); ?></strong>
            </div>
            <?php endif; ?>

            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li ><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/siapp/resources/views/layout/base/_content.blade.php ENDPATH**/ ?>