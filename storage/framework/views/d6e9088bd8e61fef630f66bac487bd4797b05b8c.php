



<?php $__env->startSection('content'); ?>

                                <div class="card card-custom">
                                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                        <div class="card-title">
                                            <h3 class="card-label"><?php echo e($page_title); ?>

                                            <div class="text-muted pt-2 font-size-sm"><?php echo e($page_description); ?></div></h3>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="border border-primary p-3" style="border-radius:0.42rem;">
                                                    <!--begin: Datatable-->
                                                    <label><b><?php echo e(__('Filling Stock')); ?></b></label>
                                                    <table class="datatable datatable-borderless" id="warehouse_delivery_note_packaging_filling_stock">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Batch No</th>
                                                                <th>Item ID</th>
                                                                <th>Item Desc</th>
                                                                <th>Weight</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                            $num = 0
                                                        ?>
                                                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <?php if(Helper::checkAvailablePackaging('id',$item->id) == true): ?>
                                                                <td><?php echo e($num+=1); ?></td>
                                                                <td><?php echo e($item->batch_no); ?></td>
                                                                <td><?php echo e(Helper::defineItemBy('id',$item->id_item_type)->item_id); ?></td>
                                                                <td><?php echo e(Helper::defineItemBy('id',$item->id_item_type)->item_desc); ?></td>
                                                                <td><?php echo e($item->actual_weight); ?> <?php echo e($item->uom); ?></td>
                                                                <?php endif; ?>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                    <!--end: Datatable-->
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <form id="form" method="post" action="<?php echo e(route('warehouse.delivery-note.packaging.create')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group row">
                                                
                                                                    <label for="item" class="col-md-2 col-form-label text-md-left"><?php echo e(__('Packaging')); ?></label>
                                                                    <div class="col-md-4">
                                                                        <select id="item" class="form-control item <?php $__errorArgs = ['item'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="item" autocomplete="item" autofocus required>
                                                                            <option value="">Choose</option>
                                                                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php if(Helper::checkAvailablePackaging('id',$item->id) == true): ?>
                                                                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->batch_no); ?> | <?php echo e(Helper::defineItemBy('id',$item->id_item_type)->item_id); ?> | <?php echo e(Helper::defineItemBy('id',$item->id_item_type)->item_desc); ?> | <?php echo e($item->actual_weight); ?> <?php echo e($item->uom); ?></option>
                                                                            <?php endif; ?>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>
                                                                    </div>
                                                            
                                            
                                        </div>
                                        
                                        <div class="col-md-12 col-form-label text-md-center">
                                            <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
                                        </div>
                                    </form>
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

<script>
    $(document).ready(function() {
        refresh();
    });
   function refresh(){
    $('#item').select2();

    // $(".refined_sugar_weight, .dextrin_weight").keyup(function(){
    //     $(".total").val(+$(".refined_sugar_weight").val() + +$(".dextrin_weight").val());
    // });
   }

   toastr.options = {
        "closeButton": true,
        "debug": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "0",
        "hideDuration": "0",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    // $('#form').submit(function(event){

    //     $('.item').each(function(){
    //         if($(this).val().length < 1){
    //             toastr.error('Please fill a field.', 'Error')
    //             event.preventDefault();
    //         }
    //     })

// })

//    $(document).on('click','.add_more_item',function(){
//         var source = $("#document_template_detail").html();
//         var template = Handlebars.compile(source);
//         $(this).parent().parent().find(".item_detail_wrapper").append(template);
//         refresh();
//     });

//     $(document).on('click','.remove_detail',function(event) {
//             $(this).closest('.item_data').remove();
//     });
</script>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/warehouse/delivery_note/packaging.blade.php ENDPATH**/ ?>