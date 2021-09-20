



<?php $__env->startSection('content'); ?>

<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label"><?php echo e($page_title); ?>

                <div class="text-muted pt-2 font-size-sm"><?php echo e($page_description); ?></div>
            </h3>
        </div>
        <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
        <form>
        </form>
        <div class="form-group row">
            <div class="col-md-12">
                <div class="border border-primary p-3" style="border-radius:0.42rem;">
                    <label><b><?php echo e(__('Available PrO')); ?></b></label>
                    
                    <table class="datatable datatable-borderless" id="ppic_available_pro">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>PrO</th>
                                <th>SKU Name</th>
                                <th>Comment</th>
                                <th>Seq Total</th>
                                <th>Action</th>
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
                                <td><?php echo e(Helper::defineProductBy('id', Helper::defineRemarkBy('id',$pro->id_product_remark)->id_product_type)->sku_name); ?></td>
                                <td><?php echo e(Helper::defineRemarkBy('id',$pro->id_product_remark)->remark); ?></td>
                                <td><?php echo e(Helper::getTotalSeqBy('pro', $pro->pro)); ?></td>
                                <td>
                                    <form method="POST" action="<?php echo e(route('ppic.import-csv.delete',[$pro->pro])); ?>">
                                        <?php echo csrf_field(); ?> 
                                        <a title="Detail" class="btn btn-icon btn-light btn-sm mx-1 btn_detail" data-toggle="modal" data-target="#detail_data" data-pro="<?php echo e(route('ppic.import-csv.detail',[$pro->pro])); ?>">
                                            <?php echo e(Metronic::getSVG("media/svg/icons/Files/File.svg", "svg-icon-md svg-icon-primary")); ?>

                                        </a>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" title="Delete" class="btn btn-icon btn-light btn-sm mx-1" onclick='return confirm("Are you sure?")'>
                                            <?php echo e(Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary")); ?>

                                        </button>
                                        
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <form action="<?php echo e(route('ppic.import-csv.create')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label for="upload_csv"
                        class="col-md-2 col-form-label text-md-left"><?php echo e(__('Upload CSV')); ?></label>

                        <div class="col-md-4">
                            <input id="upload_csv" type="file" accept=".csv"
                                class="form-control <?php $__errorArgs = ['upload_csv'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="upload_csv"
                                required autocomplete="upload_csv" autofocus>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="pro" class="col-md-2 col-form-label text-md-left"><?php echo e(__('PrO')); ?></label>
                            
                        <div class="col-md-4">
                            <input id="pro" type="text" class="form-control <?php $__errorArgs = ['pro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            name="pro" required autocomplete="pro" autofocus readonly>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="sku_name"
                        class="col-md-2 col-form-label text-md-left"><?php echo e(__('SKU Name')); ?></label>
                        
                        <div class="col-md-4">
                            <input id="sku_name" type="text"
                            class="form-control <?php $__errorArgs = ['sku_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="sku_name"
                            required autocomplete="sku_name" autofocus readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="remark"
                        class="col-md-2 col-form-label text-md-left"><?php echo e(__('Comment')); ?></label>
                        
                        <div class="col-md-4">
                            <input id="remark" type="text"
                            class="form-control <?php $__errorArgs = ['remark'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="remark"
                            required autocomplete="remark" autofocus readonly>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="seq_total"
                            class="col-md-2 col-form-label text-md-left"><?php echo e(__('Seq Total')); ?></label>
                            
                            <div class="col-md-4">
                            <input id="seq_total" type="text"
                            class="form-control <?php $__errorArgs = ['seq_total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="seq_total" required
                                autocomplete="seq_total" autofocus readonly>
                            </div>
                        </div>
                </div>
            </div>
            <div id="table-wrapper">
                <div class="mb-7 d-none" id="major_minor_item_search_query_wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <div class="row">
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" placeholder="Search Item ID"
                                        id="major_minor_item_search_query" />
                                        <span>
                                            <i class="flaticon2-search-1 text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="datatable datatable-borderless" id="major_minor_item">
                    
                </table>
            </div>
            <div class="col-md-12 col-form-label text-md-center">
                <button id="submitbtn" type="submit" class="btn btn-primary d-none"><?php echo e(__('Submit')); ?></button>
            </div>
        </form>
    </div>
</div>

    
    <div class="modal fade" id="detail_data" tabindex="-1" role="dialog" aria-labelledby="detailDataLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newDataInputManualLabel">Detail PrO</h5>
                </div>
                <div class="modal-body">
                    <?php echo csrf_field(); ?>
    
                    <table class="datatable datatable-borderless" id="detail_pro">
                                                
                    </table>
                    <!--end: Datatable-->
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
    // display a modal (small modal)
    $(document).on('click', '.btn_detail', function(event) {
        event.preventDefault();
        let href = $(this).data('pro');
        
        $.ajax({
            url: href,
            beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(res) {
                $('#detail_data').modal("show");
                var tableDetailPro = prepareTableDetailPro(res.data);
                createDataDetailPro(tableDetailPro);
            },
            complete: function() {
                $('#loader').hide();
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            },
            timeout: 8000
        })
    });

    function prepareTableDetailPro(array){
        // console.log(array);
        var newArray = [];
        

        $.each(array, function(index, innerArray){
            // console.log(array);
            newArray.push({
                "seq_no": "" + innerArray.seq_no,
                "created_at_formatted": "" + innerArray.created_at_formatted
            })
        })  
        // console.log(newArray);

        return newArray;
    }

    function createDataDetailPro(tableData)
    {
        if (tableData.wo_id != null) {
            
        }
        var datatable = $('#detail_pro').KTDatatable({
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
              field: 'seq_no',
              title: 'Seq No'
            }, {
              field: 'created_at_formatted',
              title: 'Created At Formatted'
            }]
        });

        return datatable;
 
    }
</script>
<script>

    $(function () {
        $('#upload_csv').change(function () {
            stepped = 0;
            rowCount = 0;
            errorCount = 0;
            firstError = undefined;

            $(this).parse({
                config: {
                    complete: completeFn
                },
                before: function (file, inputElem) {
                    start = now();
                    console.log("Parsing file...", file);
                },
                error: function (err, file) {
                    console.log("Error:", err, file);
                    firstError = firstError || err;
                    errorCount++;
                },
                complete: function () {
                    end = now();
                    printStats("Done with all files.");
                }
            });
        });

        function printStats(msg) {
            // if (msg)
            //     console.log(msg);
            // console.log("       Time:", (end-start || "(Unknown; your browser does not support the Performance API)"), "ms");
            // console.log("  Row count:", rowCount);
            // if (stepped)
            //     console.log("    Stepped:", stepped);
            // console.log("     Errors:", errorCount);
            // if (errorCount)
            //     console.log("First error:", firstError);
        }


        function now() {
            return typeof window.performance !== 'undefined'
                ? window.performance.now()
                : 0;
        }

        function prepareTableData(array) {
            var newArray = [];

            $.each(array, function (index, innerArray) {
                // console.log(innerArray[2]);
               if (innerArray[2] != null || innerArray[2] != undefined) {
                newArray.push({
                    "seq_no": "" + innerArray[2] + " <input type='hidden' name='seq_no[]' value='" + innerArray[2] + "'>",
                    "oper_id": "" + innerArray[3] + " <input type='hidden' name='oper_id[]' value='" + innerArray[3] + "'>",
                    "item_id": "" + innerArray[4] + " <input type='hidden' name='item_id[]' value='" + innerArray[4] + "'>",
                    "item_desc": "" + innerArray[5] + " <input type='hidden' name='item_desc[]' value='" + innerArray[5] + "'>",
                    "lot_no": "" + innerArray[6] + " <input type='hidden' name='lot_no[]' value='" + innerArray[6] + "'>",
                    "sublot_no": "" + innerArray[7] + " <input type='hidden' name='sublot_no[]' value='" + innerArray[7] + "'>",
                    "sap_sublot_no": "" + innerArray[8] + " <input type='hidden' name='sap_sublot_no[]' value='" + innerArray[8] + "'>",
                    "qty": "" + innerArray[9] + " <input type='hidden' name='qty[]' value='" + innerArray[9] + "'>",
                    "uom": "" + innerArray[10] + " <input type='hidden' name='uom[]' value='" + innerArray[10] + "'>",
                    "expired_at_formatted": "" + innerArray[11] + " <input type='hidden' name='expired_at_formatted[]' value='" + innerArray[11] + "'>",
                    "quality_status": "" + innerArray[12] + " <input type='hidden' name='quality_status[]' value='" + innerArray[12] + "'>",
                    "prepared_by": "" + innerArray[13] + " <input type='hidden' name='prepared_by[]' value='" + innerArray[13] + "'>",
                    "prepared_at_formatted": "" + innerArray[14] + " <input type='hidden' name='prepared_at_formatted[]' value='" + innerArray[14] + "'>",
                    "prepared_time_formatted": "" + innerArray[15] + " <input type='hidden' name='prepared_time_formatted[]' value='" + innerArray[15] + "'>"
                })
               }
            })

            return newArray;

        }

        function prepareFieldData(array) {

            var rawArray = array[0];

            var seq_no = 0;
            var seq_total = 0;
            for (var num = 0; num < array.length; num++) {
                if (array[num][2] != undefined) {
                    if (array[num][2] != seq_no) {
                        seq_no = array[num][2];
                        seq_total++;
                    }
                }
                
            }

            var newObject = {
                "wo_id": rawArray[0],
                "sku_name": rawArray[1],
                "seq_total": seq_total,
                "remark": rawArray[16]
            };

            return newObject;

        }

        function completeFn(results) {
            end = now();

            clearForm();

            if (results && results.errors) {
                if (results.errors) {
                    errorCount = results.errors.length;
                    firstError = results.errors[0];
                }
                if (results.data && results.data.length > 0)
                    rowCount = results.data.length;
            }

            printStats("Parse complete");

            console.log("    Results:", results.data);

            if (results.data[0][0] != "wo_id") {
                toastr.error('Invalid CSV.', 'Error')
            } else {
                results.data.shift(); //remove the first array coz it contains data label.

                var fieldData = prepareFieldData(results.data);
                var tableData = prepareTableData(results.data);

                inputFieldData(fieldData); //input field data based on given data.
                createDataTable(tableData); //create table based on given data.
            }


        }

        function inputFieldData(fieldData) {
            $('#pro').val(fieldData.wo_id);
            $('#sku_name').val(fieldData.sku_name);
            $('#seq_total').val(fieldData.seq_total);
            $('#remark').val(fieldData.remark);
            $('#submitbtn').removeClass('d-none');
        }

        function clearForm() {
            $('#table-wrapper').html('<div class="mb-7 d-none" id="major_minor_item_search_query_wrapper"><div class="row"><div class="col-lg-12 col-xl-12"><div class="row"><div class="col-md-4 my-2 my-md-0"><div class="input-icon"><input type="text" class="form-control" placeholder="Search Item ID" id="major_minor_item_search_query" /><span><i class="flaticon2-search-1 text-muted"></i></span></div></div></div></div></div></div><table class="datatable datatable-borderless" id="major_minor_item"></table>');
            $('#submitbtn').addClass('d-none')
            $('#pro').val('');
            $('#sku_name').val('');
            $('#remark').val('');
            $('#seq_total').val('');
        }

        function createDataTable(tableData) {
            if (tableData.wo_id != null) {

            }
            var datatable = $('#major_minor_item').KTDatatable({
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
                    field: 'seq_no',
                    title: 'Seq No'
                }, {
                    field: 'oper_id',
                    title: 'Oper ID'
                }, {
                    field: 'item_id',
                    title: 'Item ID'
                }, {
                    field: 'item_desc',
                    title: 'Item Desc'
                }, {
                    field: 'lot_no',
                    title: 'Lot No'
                }, {
                    field: 'sublot_no',
                    title: 'Sublot No'
                }, {
                    field: 'sap_sublot_no',
                    title: 'Sap Sublot'
                }, {
                    field: 'qty',
                    title: 'Qty'
                }, {
                    field: 'uom',
                    title: 'UoM'
                }, {
                    field: 'expired_at_formatted',
                    title: 'Expired At Formatted'
                }, {
                    field: 'quality_status',
                    title: 'Quality Status'
                }, {
                    field: 'prepared_by',
                    title: 'Prepared By'
                }, {
                    field: 'prepared_at_formatted',
                    title: 'Prepared At Formatted'
                }, {
                    field: 'prepared_time_formatted',
                    title: 'Prepared Time Formatted'
                }]
            });

            $('#major_minor_item_search_query').on('input', function () {
                datatable.search($(this).val().toLowerCase(), 'item_id');
            });

            $('#major_minor_item_search_query_wrapper').removeClass('d-none');

            return datatable;

        }



    })
</script>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/ppic/import_csv.blade.php ENDPATH**/ ?>