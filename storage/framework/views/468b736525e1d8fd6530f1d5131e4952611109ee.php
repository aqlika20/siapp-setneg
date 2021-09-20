



<?php $__env->startSection('content'); ?>

<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label"><?php echo e($page_title); ?>

            <div class="text-muted pt-2 font-size-sm"><?php echo e($page_description); ?></div></h3>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" id="form" action="<?php echo e(route('warehouse.incoming-material.packaging.create')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group row">
                    <label for="date" class="col-md-2 col-form-label "><?php echo e(__('Date')); ?></label>
                    <div class="col-md-4">
                        <div class="input-group date" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" id="received_at_formatted" placeholder="Select date" data-target="#received_at_formatted" name="received_at_formatted" readonly/>
                            <div class="input-group-append" data-target="#received_at_formatted" data-toggle="datetimepicker">
                                <span class="input-group-text">
                                    <i class="ki ki-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="time" class="col-md-2 col-form-label "><?php echo e(__('Time')); ?></label>

                    <div class="col-md-4">
                        
                        <div class="input-group timepicker">
                            <input class="form-control" id="received_time_formatted" readonly placeholder="Select time" name="received_time_formatted" type="text"/>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="la la-clock-o"></i>
                                </span>
                            </div>
                        </div>
                            
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dn_no" class="col-md-2 col-form-label "><?php echo e(__('DN No')); ?></label>

                    <div class="col-md-4">
                        <input id="dn_no" type="text" class="form-control <?php $__errorArgs = ['dn_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="dn_no" autocomplete="dn_no" autofocus required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="po_sto" class="col-md-2 col-form-label "><?php echo e(__('PO STO')); ?></label>

                    <div class="col-md-4">
                        <input id="po_sto" type="text" class="form-control <?php $__errorArgs = ['po_sto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="po_sto" autocomplete="po_sto" autofocus required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="supplier" class="col-md-2 col-form-label "><?php echo e(__('Supplier')); ?></label>

                    <div class="col-md-4">
                        <select id="supplier" class="form-control supplier <?php $__errorArgs = ['supplier'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="supplier" autocomplete="supplier" autofocus required>
                            <option value="">Choose</option>
                            <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->supplier_id); ?> | <?php echo e($supplier->supplier_desc); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                

                <div id="item-wrapper">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="inner-item-wrapper item_data">
                                <div class="form-group row item">
                                    <div class="form-group col-md-4">
                                        <label for="item" class="col-form-label "><?php echo e(__('Item')); ?></label>
                            
                                        <div class="col-md-12 p-0">
                                            <select id="item" class="form-control item_view <?php $__errorArgs = ['item'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="item" autocomplete="item" autofocus required>
                                                <option value="">Choose</option>
                                                <?php if(count($items) > 0): ?>
                                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->item_id); ?>"><?php echo e($item->item_id); ?> | <?php echo e($item->item_desc); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>
            
                                    <div class="form-group col-md-2">
                                        <label class="col-form-label "><?php echo e(__('Qty')); ?></label>
            
                                        <div class="col-md-12 p-0">
                                            <input type="number" pattern="[0-9]+([\.,][0-9]+)?" min="1" step="1" class="form-control qty <?php $__errorArgs = ['qty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="qty" autocomplete="qty" autofocus required>
                                        </div>
                                    </div>
            
                                    <div class="form-group col-md-2">
                                        <label for="uom" class="col-form-label "><?php echo e(__('UoM')); ?></label>
            
                                        <div class="col-md-12 p-0">
                                            <input type="text" id="uom" class="form-control uom <?php $__errorArgs = ['uom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="uom" autocomplete="uom" autofocus readonly required>
                                        </div>
                                    </div>
            
                                    <div class="form-group col-md-3">
                                        <label class="col-form-label "><?php echo e(__('Batch No')); ?></label>
            
                                        <div class="col-md-12 p-0">
                                            <input type="text" class="form-control batch_no <?php $__errorArgs = ['batch_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="batch_no" autocomplete="batch_no" autofocus required>
                                        </div>
                                    </div>
            
                                    <div class="form-group col-md-3">
                                        <label class="col-form-label "><?php echo e(__('Expired At Formatted')); ?></label>
                                        <div class="col-md-12 p-0">
                                            <div class="input-group date" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input expired_at_formatted" placeholder="Select date" name="expired_at_formatted" readonly/>
                                                <div class="input-group-append" data-toggle="datetimepicker">
                                                    <span class="input-group-text">
                                                        <i class="ki ki-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                   
                                </div>
            
                                <div class="item_detail_wrapper">
                                    
            
                            
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="add_more_item_detail btn btn-primary" value="0"><?php echo e(__('Add More Item Detail')); ?></button>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col">
                                    </div>
                                </div>

                            </div>
                        </div>
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
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script id="document_template_detail" type="text/x-handlebars-template">
    <div class="form-group row item_data_detail">
        <div class="form-group col-md-3">
        </div>
        <div class="form-group col-md-3">
            <label class="col-form-label "><?php echo e(__('SSCC No')); ?></label>

            <div>
                <input type="tel" pattern="[0-9]+" class="sscc_no_detail form-control <?php $__errorArgs = ['sscc_no_detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="sscc_no_detail[]" autocomplete="sscc_no_detail" autofocus>
            </div>
        </div>

        <div class="form-group col-md-2">
            <label class="col-form-label "><?php echo e(__('Qty')); ?></label>

            <div>
                <input type="number" pattern="[0-9]+([\.,][0-9]+)?" min="1" step="1" class="qty_detail form-control <?php $__errorArgs = ['qty_detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="qty_detail[]" autocomplete="qty_detail" autofocus>
            </div>
        </div>

        <div class="form-group col-md-2">
            <div>
                <label class="col-form-label "><?php echo e(__('Grade')); ?></label>
                <input type="text" class="grade_detail form-control <?php $__errorArgs = ['grade_detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="grade_detail[]" autocomplete="grade_detail" autofocus>
            </div>
        </div>

        <div class="form-group col-md-2">
            <label class="col-form-label">Action</label>
            <div>
                <button type="button" class="remove_detail btn btn-danger"><?php echo e(__('Remove')); ?></button>
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">

    $('#supplier').select2();
    $('#item').select2();

    
    

    var i = 0;

    var numForItem = 0;
    var arrayNumForItem = 0;
    var numForRemoveItem = 0;

    var typingTimer;                //timer identifier
    var doneTypingInterval = 800;  //time in ms, 5 second for example

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

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    //initialize date
    initializeDate();

    function openModal(event){    
        var item_id = $(event.target).parent().parent().parent().find('.item_id').val();
        var item_desc = $(event.target).parent().parent().parent().find(".item_desc").val();
        var qty = $(event.target).parent().parent().parent().find(".qty").val();
        var uom = $(event.target).parent().parent().parent().find(".uom").val();
        var batch_no = $(event.target).parent().parent().parent().find(".batch_no").val();     
 
        $(event.target).parent().parent().parent().find(".addDetailModal").modal('show');

        $(event.target).parent().parent().parent().find(".modal_item_id").val(item_id);
        $(event.target).parent().parent().parent().find(".model_item_desc").val(item_desc);
        $(event.target).parent().parent().parent().find(".modal_qty").val(qty);
        $(event.target).parent().parent().parent().find(".modal_uom").val(uom);
        $(event.target).parent().parent().parent().find(".modal_batch_no").val(batch_no);
    }

    
    //on keyup, start the countdown
    $(document).on('change', '#item', function(event) {
        defineUom(event);
    });

    //user is "finished typing," do something
    function defineUom(event) {
        var item = $.trim($(event.target).val());
        var uom_field = $('#uom');

        uom_field.val("");

        if (item) {
            $.ajax({
                url: '/define-uom/warehouse/packaging',
                method: 'POST',
                data: {
                    item: item
                },
                success: function(res) {
                    console.log("RESULT", res)
                    uom_field.val(res.data);
                    
                },
                error: function(err) {
                    uom_field.val(err.responseJSON.message);
                    
                }

            })
        }
    }

    $('#form').submit(function(event){

        $('.item_view, .qty , .uom , .batch_no , .expired_at_formatted, .expired_time_formatted, .sscc_no_detail , .qty_detail , .grade_detail').each(function(){
            if($(this).val().length < 1){
                toastr.error('Please fill all fields.', 'Error')
                event.preventDefault();
            }
        })

    })

    $(document).on('click','.add_more_item_detail',function(){
        var source = $("#document_template_detail").html();
        var template = Handlebars.compile(source);
        $(this).parent().parent().parent().find(".item_detail_wrapper").append(template)  

   
    });

    $(document).on('click','.remove',function(event) {
        if ($(this).val() <= numForItem) {
            arrayNumForItem = numForItem+1;
            numForItem = numForItem-1;
        }
        $(this).closest('.inner-item-wrapper').remove();
    });

    $(document).on('click','.remove_detail',function(event) {
        $(this).closest('.item_data_detail').remove();
    });

    function initializeDate(){
        $('.expired_at_formatted').datepicker({
            format: 'dd-M-yy', 
        });
        
        $('#received_at_formatted').datepicker({
            format: 'dd-M-yy', 
        });
        $("#received_at_formatted").datepicker().datepicker("setDate", new Date());

        $('#received_time_formatted').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: true,
            snapToStep: true,
            format: 'H:i:s', 
        });


    }


    

</script>

<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/warehouse/incoming_material/packaging.blade.php ENDPATH**/ ?>