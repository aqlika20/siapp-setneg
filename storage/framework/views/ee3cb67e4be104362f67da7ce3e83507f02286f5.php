



<?php $__env->startSection('content'); ?>
<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label"><?php echo e($page_title); ?>

                <div class="text-muted pt-2 font-size-sm"><?php echo e($page_description); ?></div>
            </h3>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <div class="col-md-12">
                <div class="border border-primary p-3" style="border-radius:0.42rem;">
                    <label><b><?php echo e(__('Available PrO')); ?></b></label>
                    
                    <table class="datatable datatable-borderless" id="warehouse_available_pro">
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
                                    <div>
                                        <a title="Detail" class="btn btn-icon btn-light btn-sm mx-1 btn_detail" data-toggle="modal" data-target="#detail_data" data-pro="<?php echo e(route('warehouse.incoming-material.major-minor-item.detail',[$pro->pro])); ?>">
                                            <?php echo e(Metronic::getSVG("media/svg/icons/Files/File.svg", "svg-icon-md svg-icon-primary")); ?>

                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <form method="POST" action="<?php echo e(route('warehouse.incoming-material.major-minor-item.create')); ?>" id="form">
            <?php echo csrf_field(); ?>
            <div class="row">

                <div class="col-md-12">
                    <div class="form-group row">
                        <label for="pro" class="col-md-2 col-form-label text-md-left"><?php echo e(__('Search PrO')); ?></label>

                        <div class="col-md-4">
                            <div class="input-icon">
                                <input id="pro" type="text" class="form-control <?php $__errorArgs = ['pro'];
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

                    <div class="form-group row">
                        <label for="sku_name" class="col-md-2 col-form-label text-md-left"><?php echo e(__('SKU Name')); ?></label>

                        <div class="col-md-4">
                            <input id="sku_name" type="text" class="form-control <?php $__errorArgs = ['sku_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" readonly>
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
                </div>
            </div>
            <div id="table-wrapper">
                <div class="form-group row">
                    <div class="col-md-12">
                        <table class="datatable datatable-borderless mt-8" id="major_minor_item">
        
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-form-label text-md-center">
                <button id="submitbtn" type="submit" class="btn btn-primary d-none"><?php echo e(__('Submit')); ?></button>
            </div>
        </form>

        
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
</div>
</div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>
<style>
    .move-left {
    width: auto;
    box-shadow: none;
  }
</style>
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
                "created_at": "" + innerArray.created_at
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
              field: 'created_at',
              title: 'Created At'
            }]
        });

        return datatable;
 
    }
</script>

<script>
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
                    definePrO(event);
                }, doneTypingInterval);
                event.preventDefault();
            }
        });

        //user is "finished typing," do something
        function definePrO(event) {
            var pro = $.trim($(event.target).val());
            var sku_name_field = $('#sku_name');
            var remark_field = $('#remark');

            sku_name_field.val("");
            remark_field.val("");

            if (pro) {
                if (pro.length >= 3) {
                    sku_name_field.val("Loading...");
                    remark_field.val("Loading...");

                    $.ajax({
                        url: '/define-pro/warehouse/major-minor-item',
                        method: 'POST',
                        data: {
                            pro: pro
                        },
                        success: function(res) {
                            console.log("RESULT", res)
                            var tableData = prepareTableData(res.data);
                            inputFieldData(res.data[0])

                            createDataTable(tableData)
                            
                        },
                        error: function(err) {
                            clearForm();
                            sku_name_field.val(err.responseJSON.message);
                            remark_field.val(err.responseJSON.message);
                            
                        }

                    })
                } else {
                    sku_name_field.val("Minimum 3 character.");
                    remark_field.val("Minimum 3 character.");
                }
            }
        }

        function prepareTableData(array) {
            var newArray = [];

            var berita_acara_icon = '<span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:media/svg/icons/Communication/Write.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org 1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path><path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path></g></svg><!--end::Svg Icon--></span>'

            $.each(array, function(index, innerArray) {
                newArray.push({
                    "received_seq": "<input type='checkbox' name='received_seq[]' class='form-control received_seq' value='" + innerArray.seq_no + "' title='Submit berita acara'>",
                    "prob_description": '<input type="hidden" name="prob_id_proseq[]" value="'+innerArray.id_pro+'"><textarea rows="4" class="prob_description form-control <?php $__errorArgs = ["prob_description"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="prob_description[]" autocomplete="prob_description" autofocus></textarea>',
                    "seq_no": "" + innerArray.seq_no + " of " + innerArray.seq_total,
                    "action": '<div><a href="/warehouse/incoming-material/major-minor-item/edit/'+innerArray.id_pro+'" title="Hold" class="btn btn-icon btn-light btn-sm mx-1"><span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:media/svg/icons/Code/Warning-1-circle.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/><rect fill="#000000" x="11" y="7" width="2" height="8" rx="1"/><rect fill="#000000" x="11" y="16" width="2" height="2" rx="1"/></g></svg><!--end::Svg Icon--></span></a></div>'
                });
            })

    

            return newArray;

        }

        function inputFieldData(fieldData) {
            $('#sku_name').val(fieldData.sku_name);
            $('#remark').val(fieldData.remark);
        }

        $('#form').submit(function(event) {

            if ($('#sku_name').val().length < 1) {
                toastr.error('Please fill all fields.', 'Error')
                event.preventDefault();
            }
            if ($('#remark').val().length < 1) {
                toastr.error('Please fill all fields.', 'Error')
                event.preventDefault();
            }

            // if($('.received_seq:checkbox:checked').length < 1){
            //     toastr.error('Please at least tick 1 checkbox.', 'Error')
            //     event.preventDefault();
            // }

        });

        $(document).on('keyup', '.prob_description', function(){
            var tr_parent = $(this).parent().parent().parent();
            if($(this).val().trim().length > 0){
                tr_parent.find('.received_seq').prop('checked', false);
            }
        })

        $(document).on('click', '.received_seq', function(){
            var tr_parent = $(this).parent().parent().parent();
            if( $(this).is(':checked') ){
                tr_parent.find('.prob_description').val('');
            }
        })

        $(document).on('click', '.submit-problem', function() {

            var seq_no = $(this).data('seq_no');
            var pro = $(this).data('pro');
            var berita_acara_modal = $(this).parent().find('.beritaAcaraModal');

            berita_acara_modal.modal('show');

            berita_acara_modal.find('.prob_pro').val(pro);
            berita_acara_modal.find('.prob_seq_no').val(seq_no);
        })

        function clearForm() {
            $('#sku_name').val("");
            $('#remark').val("");
            $('#table-wrapper').html('<table class="datatable datatable-borderless" id="major_minor_item"></table>');
            $('#submitbtn').addClass('d-none')
        }

        function createDataTable(tableData) {
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
                    field: 'received_seq',
                    title: 'Received',
                    sortable: false,
                }, {
                    field: 'seq_no',
                    title: 'Seq No'
                }, {
                    field: 'action',
                    title: 'Action',
                    sortable: false,
                }]
            });

            $('#major_minor_item_search_query').on('input', function() {
                datatable.search($(this).val().toLowerCase(), 'seq_no');
            });

            $('#major_minor_item_search_query_wrapper').removeClass('d-none');
            $('#submitbtn').removeClass('d-none');
            return datatable;

        }
    })
</script>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/warehouse/incoming_material/major_minor_item.blade.php ENDPATH**/ ?>