



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
                        <div class="mb-7">
                            <div class="row">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="row">
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="input-icon">
                                                <input type="text" class="form-control" placeholder="Search Icing Sugar Batch No" id="production_icing_report_search_query" />
                                                <span>
                                                    <i class="flaticon2-search-1 text-muted"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <!--end: Datatable-->
                        </div>
                        <div class="mb-7">
                            <!--begin::Dropdown-->
                            <div class="dropdown dropdown-inline mr-2">
                                <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                                            <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>Export</button>
                                <!--begin::Dropdown Menu-->
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <!--begin::Navigation-->
                                    <ul class="navi flex-column navi-hover py-2">
                                        <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                                        <li class="navi-item">
                                            <a href="<?php echo e(route('production-icing.report.excel')); ?>" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="la la-file-excel-o"></i>
                                                </span>
                                                <span class="navi-text">Excel</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="<?php echo e(route('production-icing.report.pdf')); ?>" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="la la-file-pdf-o"></i>
                                                </span>
                                                <span class="navi-text">PDF</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                                <!--end::Dropdown Menu-->
                            </div>
                            <!--end::Dropdown-->
                        </div>
                        <table class="datatable datatable-borderless" id="production_icing_report">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Production At Formatted</th>
                                    <th>Production Time Formatted</th>
                                    <th>Icing Sugar Batch No</th>
                                    <th>Shift</th>
                                    <th>Refined Sugar Batch No</th>
                                    <th>Dextrin Batch No</th>
                                    <th>Multiwall Batch No</th>
                                    <th>Total</th>
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
                        </table>
                    </div>
                </div>
            </div>
        </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<script>

</script>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/production_icing/report.blade.php ENDPATH**/ ?>