<!DOCTYPE html>
<html>
<head>
    <title><?php echo e($name_file); ?></title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
	<div class="card-title">
        <h2 class="card-label"><?php echo e($page_title); ?></h2>
    </div>
    <p style="font-size: 10pt; text-align:right;">Created at : <?php echo e($dates); ?></p>
    <br>
    <table class="datatable datatable-borderless" id="ppic_report_general">
        <thead>
            <tr>
                <th style="font-weight:bold">#</th>
                <th style="font-weight:bold">Imported At Formatted</th>
                <th style="font-weight:bold">Imported Time Formatted</th>
                <th style="font-weight:bold">Imported By Formatted</th>
                <th style="font-weight:bold">PrO</th>
                <th style="font-weight:bold">SKU Name</th>
                <th style="font-weight:bold">Comment</th>
                <th style="font-weight:bold">Seq No</th>
                <th style="font-weight:bold">Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $num = 0
        ?>
        <?php $__currentLoopData = $pros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($num+=1); ?></td>
                <td><?php echo e(Helper::convertToViewDateTime('date', $pro->created_at)); ?></td>
                <td><?php echo e(Helper::convertToViewDateTime('time', $pro->created_at)); ?></td>
                <td><?php echo e(Helper::defineUserBy('id', $pro->created_by)->name); ?></td>
                <td><?php echo e($pro->pro); ?></td>
                <td><?php echo e(Helper::defineProductBy('id', Helper::defineRemarkBy('id',$pro->id_product_remark)->id_product_type)->sku_name); ?></td>
                <td><?php echo e(Helper::defineRemarkBy('id',$pro->id_product_remark)->remark); ?></td>
                <td><?php echo e($pro->seq_no); ?> of <?php echo e(Helper::getTotalSeqBy('pro', $pro->pro)); ?></td>
                <td><?php echo e(Helper::defineStatusBy('id',$pro->id_status)->name); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
</html><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/ppic/report/general_pdf.blade.php ENDPATH**/ ?>