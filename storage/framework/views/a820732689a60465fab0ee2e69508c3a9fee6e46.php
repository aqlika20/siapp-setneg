



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
                                                    <label><b><?php echo e(__('Available PrO')); ?></b></label>
                                                    <table class="datatable datatable-borderless" id="production_batching_1_material_checking_pro_id">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>PrO</th>
                                                                <th>SKU Name</th>
                                                                <th>Comment</th>
                                                                <th>Seq No</th>
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
                                                                <td><?php echo e($pro->seq_no); ?> of <?php echo e(Helper::getTotalSeqBy('pro', $pro->pro)); ?></td>
                                                            </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <form method="POST" action="<?php echo e(route('production-batching-1.incoming-material.create')); ?>" id="form">
                                            <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-md-2 col-form-label "><?php echo e(__('Search PrO')); ?></label>
                        
                                                        <div class="col-md-4">
                                                            <div class="input-icon">
                                                                <input type="tel" id="pro" pattern="[0-9]+" class="form-control pro <?php $__errorArgs = ['pro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="pro" autocomplete="pro" placeholder="Search Item ID" autofocus>
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
                                                        <label for="remark" class="col-md-2 col-form-label text-md-left"><?php echo e(__('Comment')); ?></label>
                                
                                                        <div class="col-md-4">
                                                            <input id="remark" type="text" class="form-control <?php $__errorArgs = ['remark'];
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
                                                        <label for="seq_no" class="col-md-2 col-form-label "><?php echo e(__('Seq No')); ?></label>
                                    
                                                        <div class="col-md-4">
                                                            <select id="seq_no" class="form-control seq_no <?php $__errorArgs = ['seq_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="seq_no" autocomplete="seq_no" autofocus required>
                                                                <option value="">Choose</option>
                                                                
                                                            </select> 
                                                        </div>
                                                    </div>

    
                                                </div>
                                            </div>
                                        </div>
                                        
                                            
                                        <div id="table-wrapper">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <table class="datatable datatable-borderless mt-8" id="production_batching_1_material_checking">
                                    
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-form-label text-md-center">
                                            <button id="submitbtn" type="submit" class="btn btn-primary d-none"><?php echo e(__('Submit')); ?></button>
                                        </div>
                                        </form>
                                    </div>
                                </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script>
    $('#seq_no').select2();
</script>

<script>
$(document).ready(function() {
    refresh();
    
});
function refresh(){
$('#seq_no').select2();


}
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
            
            $('#seq_no').html('<option value="">Choose</option>');
            clearForm();
            if ($(this).val()) {
                typingTimer = setTimeout(function() {
                    definePrO(event);
                }, doneTypingInterval);
                event.preventDefault();
            }
        });

        function definePrO(event){
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
                        url: '/define-pro/production-batching-1/incoming-material',
                        method: 'POST',
                        data: { 
                            pro: pro
                        },
                        success: function(res) {
                            // console.log("RESULT", res)
                            
                            // seqNo(res.data);

                            // console.log(res.data);
                            var html = '<option value="">Choose</option>';
                            var i;
                            for(i=0; i<res.data.length; i++){
                                // console.log(res.data[i].seq_no);
                                html += '<option value="'+res.data[i].seq_no+'">'+res.data[i].seq_no+' of '+res.data[i].seq_total+'</option>';
                            }
                            $('#seq_no').html(html);
                            inputFieldData(res.data[0])
                            refresh();
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

        //on keyup, start the countdown
        $(document).on('change', '#seq_no', function(event) {
            // clearTimeout(typingTimer);
            $('#table-wrapper').html('<table class="datatable datatable-borderless" id="production_batching_1_material_checking"></table>');
            $('#submitbtn').addClass('d-none')
            if ($(this).val()) {
                // typingTimer = setTimeout(function() {
                    definePrOItem(event);
                // }, doneTypingInterval);
                event.preventDefault();
            }
        });

        //user is "finished typing," do something
        function definePrOItem(event) {
            var pro = $('#pro').val();
            var seq_no = $.trim($(event.target).val());
            // console.log(pro);
            
            if (seq_no) {

                $.ajax({
                    url: '/define-pro/production-batching-1/incoming-material',
                    method: 'POST',
                    data: {
                        pro: pro,
                        seq_no: seq_no
                    },
                    success: function(res) {
                        console.log("RESULT", res)
                        var tableData = prepareTableData(res.data);
                        createDataTable(tableData)
                        
                    },
                    error: function(err) {
                        $('#table-wrapper').html('<table class="datatable datatable-borderless" id="production_batching_1_material_checking"></table>');
                        $('#submitbtn').addClass('d-none')
                    }

                })
                
                
            }
        }

        

        function prepareTableData(array) {
            var newArray = [];

            var berita_acara_icon = '<span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:media/svg/icons/Communication/Write.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org 1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path><path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path></g></svg><!--end::Svg Icon--></span>'

            $.each(array, function(index, innerArray) {
                
                var isExpiredAt = '';
                var rawExpiredAt = new Date(innerArray.expired_at).getTime();

                var dateNow = new Date().getTime();
                
                var distance = rawExpiredAt - dateNow;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));

                // document.getElementById("countdown").innerHTML = days + "Hari " + hours + "Jam " + minutes + "Menit " + seconds + "Detik ";
                
                console.log(innerArray.expired_at);
                // if (innerArray.item_id == <?php echo e(Helper::$icing_sugar); ?>) {
                //     isExpiredAt = '';
                //     innerArray.lot_no = '';
                //     innerArray.sublot_no = '';
                //     innerArray.expired_at = '';
                //     innerArray.quality_status = '';
                // }
                // else {
                    if (days == 7){
                    isExpiredAt = 'text-warning';
                    }
                    // If the count down is over, write some text 
                    else if (distance < 0) {
                        isExpiredAt = 'text-danger';
                        // document.getElementById("countdown").innerHTML = "EXPIRED";
                    }
                // }
                


                newArray.push({
                    "received": "<input type='checkbox' name='received[]' class='form-control received' value='" + innerArray.id_item + "' title='Submit berita acara'>",
                    "problem_desc" : '<input type="hidden" name="problem_desc_id_item[]" value="'+innerArray.id_item+'"><textarea rows="4" class="problem_desc form-control" name="problem_desc[]" autocomplete="problem_desc" autofocus></textarea>',
                    "seq_no": "<p class='"+isExpiredAt+"'>"+innerArray.seq_no+"</p>",
                    "oper_id": "<p class='"+isExpiredAt+"'>"+innerArray.oper_id+"</p>",
                    "item_id": "<p class='"+isExpiredAt+"'>"+innerArray.item_id+"</p>",
                    "item_desc": "<p class='"+isExpiredAt+"'>"+innerArray.item_desc+"</p>",
                    "pro": "<p class='"+isExpiredAt+"'>"+innerArray.pro+"</p>",
                    "lot_no": "<p class='"+isExpiredAt+"'>"+innerArray.lot_no+"</p>",
                    "sublot_no": "<p class='"+isExpiredAt+"'>"+innerArray.sublot_no+"</p>",
                    "qty": "<p class='"+isExpiredAt+"'>"+innerArray.qty+"</p>",
                    "uom": "<p class='"+isExpiredAt+"'>"+innerArray.uom+"</p>",
                    "expired_at": "<p class='"+isExpiredAt+"'>"+innerArray.expired_at+"</p>",
                    "quality_status": "<p class='"+isExpiredAt+"'>"+innerArray.quality_status+"</p>",

                    
                });
            })

    

            return newArray;

        }

        function inputFieldData(fieldData) {
            $('#sku_name').val(fieldData.sku_name);
            $('#remark').val(fieldData.remark);
            // $('#seq_no').val(fieldData.seq_no);
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
            
            // if ($('#seq_no').val().length < 1) {
            //     toastr.error('Please fill all fields.', 'Error')
            //     event.preventDefault();
            // }
            

            // if($('.received:checkbox:checked').length < 1){
            //     toastr.error('Please at least tick 1 checkbox.', 'Error')
            //     event.preventDefault();
            // }

        });

        function clearForm() {
            $('#sku_name').val("");
            $('#remark').val("");
            $('#table-wrapper').html('<table class="datatable datatable-borderless" id="production_batching_1_material_checking"></table>');
            $('#submitbtn').addClass('d-none')
        }

        function createDataTable(tableData) {
            if (tableData.sublot_no != null) {
            
            }
            var datatable = $('#production_batching_1_material_checking').KTDatatable({
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
                    field: 'received',
                    title: 'Received',
                    sortable: false,
                }, {
                    field: 'problem_desc',
                    title: 'Problem Desc',
                    sortable: false,
                    width: 200
                }, {
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
                    field: 'pro',
                    title: 'PrO'
                }, {
                    field: 'lot_no',
                    title: 'Lot Number'
                }, {
                    field: 'sublot_no',
                    title: 'Sublot Number'
                }, {
                    field: 'qty',
                    title: 'Qty'
                }, {
                    field: 'uom',
                    title: 'UoM'
                }, {
                    field: 'expired_at',
                    title: 'Expired At Formated'
                }, {
                    field: 'quality_status',
                    title: 'Quality Status'
                }]
            });

            // $('#major_minor_item_search_query').on('input', function() {
            //     datatable.search($(this).val().toLowerCase(), 'seq_no');
            // });

            // $('#major_minor_item_search_query_wrapper').removeClass('d-none');
            $('#submitbtn').removeClass('d-none');
            return datatable;

        }
    })
</script>


<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/production_batching_1/incoming_material.blade.php ENDPATH**/ ?>