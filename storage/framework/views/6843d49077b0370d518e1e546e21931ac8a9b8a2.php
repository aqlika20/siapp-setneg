
    <table class="datatable datatable-borderless" id="production_icing_report">
        <thead>
            <tr>
                <th style="font-weight:bold">#</th>
                <th style="font-weight:bold">Production At Formatted</th>
                <th style="font-weight:bold">Production Time Formatted</th>
                <th style="font-weight:bold">Icing Sugar Batch No</th>
                <th style="font-weight:bold">Shift</th>
                <th style="font-weight:bold">Refined Sugar Batch No</th>
                <th style="font-weight:bold">Dextrin Batch No</th>
                <th style="font-weight:bold">Multiwall Batch No</th>
                <th style="font-weight:bold">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $num = 0
            ?>
            <?php $__currentLoopData = $icings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($num+=1); ?></td>
                <td><?php echo e(Helper::convertToViewDateTime('date',Helper::defineBatchStockBy('id',$icing->id_batch_stock_icing_sugar)->created_at)); ?></td>
                <td><?php echo e(Helper::convertToViewDateTime('time',Helper::defineBatchStockBy('id',$icing->id_batch_stock_icing_sugar)->created_at)); ?></td>
                <td><?php echo e(Helper::defineBatchStockBy('id',$icing->id_batch_stock_icing_sugar)->batch_no); ?></td>
                <td><?php echo e(Helper::defineShiftBy('id', $icing->id_shift)->name); ?></td>
                <td><?php echo e(Helper::defineBatchStockBy('id',$icing->id_batch_stock_refined_sugar)->batch_no); ?></td>
                <td><?php echo e(Helper::defineBatchStockBy('id',$icing->id_batch_stock_dextrin)->batch_no); ?></td>
                <td><?php echo e(Helper::defineBatchStockBy('id',$icing->id_batch_stock_multiwall)->batch_no); ?></td>
                <td><?php echo e($icing->qty_all); ?> <?php echo e($icing->uom); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/production_icing/report_excel.blade.php ENDPATH**/ ?>