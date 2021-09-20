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
    <table class="datatable datatable-borderless" id="ppic_report_production">
        <thead>
            <tr>
                <th style="font-weight:bold">#</th>
                <th style="font-weight:bold">PrO</th>
                <th style="font-weight:bold">Operation</th>
                <th style="font-weight:bold">Equipment</th>
                <th style="font-weight:bold">Seq No</th>
                <th style="font-weight:bold">Item ID</th>
                <th style="font-weight:bold">Item Desc</th>
                <th style="font-weight:bold">Batch No</th>
                <th style="font-weight:bold">Sublot No</th>
                <th style="font-weight:bold">Qty</th>
                <th style="font-weight:bold">UoM</th>
                <th style="font-weight:bold">Sent To SAP</th>
                <th style="font-weight:bold">Tumbler</th>
                <th style="font-weight:bold">RpM</th>
                <th style="font-weight:bold">Duration In Second</th>
                <th style="font-weight:bold">User</th>
                <th style="font-weight:bold">Last Produced At Formatted</th>
                <th style="font-weight:bold">Last Produced Time Formatted</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $num = 0
        ?>
        <?php $__currentLoopData = $pros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($num+=1); ?></td>
                <td><?php echo e($pro->pro); ?></td>
                <td></td>
                <td></td>
                <td><?php echo e($pro->seq_no); ?> of <?php echo e(Helper::getTotalSeqBy('pro', $pro->pro)); ?></td>
                <td><?php echo e(Helper::defineItemBy('id',$pro->id_item_type)->item_id); ?></td>
                <td><?php echo e(Helper::defineItemBy('id',$pro->id_item_type)->item_desc); ?></td>
                <td><?php echo e($pro->lot_no); ?></td>
                <td><?php echo e($pro->sublot_no); ?></td>
                <td><?php echo e($pro->qty); ?></td>
                <td><?php echo e($pro->uom); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Batching 2</td>
                <td></td>
                <td></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
</html><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/ppic/report/production_pdf.blade.php ENDPATH**/ ?>