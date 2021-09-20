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
    <table class="datatable datatable-borderless" id="filling_report">
        <thead>
            <tr>
                <th>#</th>
                <th>Item ID</th>
                <th>Item Desc</th>
                <th>Batch No</th>
                <th>PrO</th>
                <th>SKU Name</th>
                <th>Comment</th>
                <th>Seq No</th>
                <th>Shift</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $num = 0
        ?>
        <?php $__currentLoopData = $fillings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filling): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($num+=1); ?></td>
                <td><?php echo e(Helper::defineItemBy('id',(Helper::defineBatchStockBy('id',$filling->id_batch_stock)->id_item_type))->item_id); ?></td>
                <td><?php echo e(Helper::defineItemBy('id',(Helper::defineBatchStockBy('id',$filling->id_batch_stock)->id_item_type))->item_desc); ?></td>
                <td><?php echo e(Helper::defineBatchStockBy('id',$filling->id_batch_stock)->batch_no); ?></td>
                <td><?php echo e(Helper::defineProseqBy('id',Helper::defineStockBatchProBy('id',$filling->id_stock_batch_pro)->id_proseq)->pro); ?></td>
                <td><?php echo e(Helper::defineProductBy('id', Helper::defineRemarkBy('id',Helper::defineProseqBy('id',Helper::defineStockBatchProBy('id',$filling->id_stock_batch_pro)->id_proseq)->id_product_remark)->id_product_type)->sku_name); ?></td>
                <td><?php echo e(Helper::defineRemarkBy('id',Helper::defineProseqBy('id',Helper::defineStockBatchProBy('id',$filling->id_stock_batch_pro)->id_proseq)->id_product_remark)->remark); ?></td>
                <td><?php echo e(Helper::defineProseqBy('id',Helper::defineStockBatchProBy('id',$filling->id_stock_batch_pro)->id_proseq)->seq_no); ?> of <?php echo e(Helper::getTotalSeqBy('pro',Helper::defineProseqBy('id',Helper::defineStockBatchProBy('id',$filling->id_stock_batch_pro)->id_proseq)->pro)); ?></td>
                <td><?php echo e(Helper::defineShiftBy('id',$filling->id_shift)->name); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
</html><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/filling/report_pdf.blade.php ENDPATH**/ ?>