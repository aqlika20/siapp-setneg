



<?php $__env->startSection('content'); ?>

                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h3 class="card-label"><?php echo e($page_title); ?>

                            <div class="text-muted pt-2 font-size-sm"><?php echo e($page_description); ?></div></h3>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form id="blending_form" method="post" action="<?php echo e(route('warehouse.delivery-note.production.create')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="border border-primary p-3" style="border-radius:0.42rem;">
                                        <label><b>Available PrO</b></label>
                                        <table class="datatable datatable-borderless" id="warehouse_delivery_note_production">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>PrO</th>
                                                    <th>SKU Name</th>
                                                    <th>Comment</th>
                                                    <th>Status</th>
                                                    <th>Seq No</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1
                                                ?>
                                                <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                <tr>
                                                    <td><?php echo e($num++); ?></td>
                                                    <td><?php echo e($stock->pro); ?></td>
                                                    <td><?php echo e(Helper::defineProductBy('id', Helper::defineRemarkBy('id',$stock->id_product_remark)->id_product_type)->sku_name); ?></td>
                                                    <td><?php echo e(Helper::defineRemarkBy('id',$stock->id_product_remark)->remark); ?></td>
                                                    <td><?php echo e(Helper::defineStatusBy('id', $stock->id_status)->name); ?></td>
                                                    <td><?php echo e($stock->seq_no); ?> of <?php echo e(Helper::getTotalSeqBy('pro', $stock->pro)); ?></td>
                                                </tr>
                
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="border border-primary p-3" style="border-radius:0.42rem;">
                                        <!--begin: Datatable-->
                                        <label><b><?php echo e(__('Icing Sugar Stock')); ?></b></label>
                                        <table class="datatable datatable-borderless" id="warehouse_delivery_note_production_dextrin_stock">
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
                                            <?php $__currentLoopData = $icing_sugars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icing_sugar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $item_data = Helper::defineItemBy('id', $icing_sugar->id_item_type);
                                                ?>
                                                <tr>
                                                    <td><?php echo e($num+=1); ?></td>
                                                    <td><?php echo e($icing_sugar->batch_no); ?></td>
                                                    <td><?php echo e($item_data->item_id); ?></td>
                                                    <td><?php echo e($item_data->item_desc); ?></td>
                                                    <td><?php echo e($icing_sugar->actual_weight); ?> <?php echo e($icing_sugar->uom); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                        <!--end: Datatable-->
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-md-2 col-form-label "><?php echo e(__('Date')); ?></label>
                                <div class="col-md-4">
                                    <div class="input-group date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" id="date" placeholder="Select date" data-target="#date" name="date" readonly/>
                                        <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
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
                                        <input class="form-control" id="time" readonly placeholder="Select time" name="time" type="text"/>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-clock-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                        
                                </div>
                            </div>
                
                            <div class="form-group row">
                                <label for="shift" class="col-md-2 col-form-label "><?php echo e(__('Shift')); ?></label>
                
                                <div class="col-md-4">
                                    <select id="shift" class="form-control shift <?php $__errorArgs = ['shift'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="shift" autocomplete="shift" autofocus required>
                                        <option value="">Choose</option>
                                        <?php $__currentLoopData = $shifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($shift->id); ?>"><?php echo e($shift->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select> 
                                </div>
                            </div>
                
                            <div class="form-group row">
                                <label for="pro" class="col-md-2 col-form-label text-md-left"><?php echo e(__('Search PrO')); ?></label>
                
                                <div class="col-md-4">
                                    
                                    <div class="input-icon">
                                        <input id="pro" type="numeric" class="form-control <?php $__errorArgs = ['pro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="pro" required autocomplete="pro" placeholder="Search PrO" autofocus>
                                        <span>
                                            <i class="flaticon2-search-1 text-muted"></i>
                                        </span>
                                    </div>
                                        
                                </div>
                            </div>
                
                            <div id="table-wrapper">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <table class="datatable datatable-borderless" id="warehouse_delivery_note_production_list">
                        
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-form-label text-md-center">
                                <button id="submitbtn"type="submit" class="btn btn-primary d-none"><?php echo e(__('Submit')); ?></button>
                            </div>
                        </form>
                    </div>
                
                </div>
                                
                                
<?php $__env->stopSection(); ?>
                            

<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<script>
    $('#shift').select2();
    
    $('#date').datepicker({
        format: 'dd-M-yy', 
    });
    $("#date").datepicker().datepicker("setDate", new Date());

    $('#time').timepicker({
        minuteStep: 1,
        showSeconds: true,
        showMeridian: true,
        snapToStep: true,
        format: 'H:i:s', 
    });
    // ---------------pro---------------
    $(function() {
        var typingTimer; //timer identifier
        var doneTypingInterval = 800; //time in ms, 5 second for example

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
        //on keyup, start the countdown
        $(document).on('keyup', '#pro', function(event) {
            clearTimeout(typingTimer);
            clearForm(); 
            if ($(this).val()) {
                typingTimer = setTimeout(function() {
                    definepro(event);
                }, doneTypingInterval);
                event.preventDefault();
            }
        });

        //user is "finished typing," do something
        function definepro(event) {
            var pro = $.trim($(event.target).val());
            console.log(pro);

            if (pro) {
                if (pro.length >= 3) {
                    $.ajax({
                        url: '/define-pro/warehouse/production',
                        method: 'POST',
                        data: {
                            pro: pro
                        },
                        success: function(res) {
                            console.log("RESULT", res);

                            var tableData = prepareTableData(res.data);

                            createDataTable(tableData)
                            
                            
                        },
                        error: function(err) {
                            clearForm();
                            console.log(err);
                            
                        }

                    })
                } else {
                }
            }
        }

        function prepareTableData(array) {
            var newArray = [];

            $.each(array, function(index, innerArray) {
                newArray.push({
                    "selected": "<input type='checkbox' name='selected[]' class='form-control selected' value='" + innerArray.id_pro + "' title='Selected'>",
                    "seq_no": innerArray.seq_no,
                    "sku_name": innerArray.sku_name,
                    "remark": innerArray.remark
                });
            })

    

            return newArray;

        }

        function clearForm() {
            $('#table-wrapper').html('<table class="datatable datatable-borderless" id="warehouse_delivery_note_production_list"></table>');
            $('#submitbtn').addClass('d-none')
        }
        
        function createDataTable(tableData) {
            var datatable = $('#warehouse_delivery_note_production_list').KTDatatable({
                pagination: false,
                data: {
                    type: 'local',
                    source: tableData
                },
                rows: {
                    autoHide: false
                },
                layout: {
                    scroll: true,
                    customScrollbar: false
                },
                columns: [{
                    field: 'selected',
                    title: 'Selected',
                    sortable: false,
                }, {
                    field: 'seq_no',
                    title: 'Seq No'
                }, {
                    field: 'sku_name',
                    title: 'SKU Name'
                }, {
                    field: 'remark',
                    title: 'Comment'
                }
            ]
            });
            
            $('#submitbtn').removeClass('d-none');
            return datatable;

        }

    })
</script>

<script>
    $('#input_date').datepicker({
        format: 'yyyy-mm-dd', 
    });
    $("#input_date").datepicker().datepicker("setDate", new Date());
</script>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/warehouse/delivery_note/production.blade.php ENDPATH**/ ?>