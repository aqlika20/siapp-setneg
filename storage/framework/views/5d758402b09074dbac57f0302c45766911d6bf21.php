



<?php $__env->startSection('content'); ?>

                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h3 class="card-label"><?php echo e($page_title); ?>

                                <div class="text-muted pt-2 font-size-sm"><?php echo e($page_description); ?></div></h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="datatable datatable-borderless" id="super_admin_setting_shift">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Shift</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $num = 0
                            ?>
                            <?php $__currentLoopData = $shifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($num+=1); ?></td>
                                    <td><?php echo e($shift->name); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <!--end: Datatable-->
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
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/super_admin/setting/shift.blade.php ENDPATH**/ ?>