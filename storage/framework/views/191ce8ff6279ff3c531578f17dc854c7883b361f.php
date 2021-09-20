



<?php $__env->startSection('content'); ?>

<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label"><?php echo e($page_title); ?>

                <div class="text-muted pt-2 font-size-sm"><?php echo e($page_description); ?></div>
            </h3>
        </div>
        <div class="card-toolbar">
            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline mr-2">
                <button type="button" class="btn btn-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    </span>New Data</button>
                <!--begin::Dropdown Menu-->
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                    <!--begin::Navigation-->
                    <ul class="navi flex-column navi-hover py-2">
                        <li class="navi-item">
                            <a href="#" class="navi-link" data-toggle="modal" data-target="#newDataInputCSV">
                                <span class="navi-icon">
                                    <i class="la la-file-text-o"></i>
                                </span>
                                <span class="navi-text">Import CSV</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link" data-toggle="modal" data-target="#newDataInputManual">
                                <span class="navi-icon">
                                    <i class="la la-pencil-alt"></i>
                                </span>
                                <span class="navi-text">Input Manual</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Navigation-->
                </div>
                <!--end::Dropdown Menu-->
            </div>
            <!--end::Dropdown-->
        </div>
    </div>
    <div class="card-body">
        <div class="mb-7">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="row">
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="input-icon">
                                <input type="text" class="form-control" placeholder="Search Supplier ID" id="super_admin_setting_supplier_definition_search_query" />
                                <span>
                                    <i class="flaticon2-search-1 text-muted"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="d-flex align-items-center">
                                <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                <select class="form-control" id="super_admin_setting_supplier_definition_search_type">
                                    <option value="">All</option>
                                    <option value="2">Dextrin</option>
                                    <option value="3">Refined Sugar</option>
                                    <option value="4">Packaging</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="datatable datatable-borderless" id="super_admin_setting_supplier_definition">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Type</th>
                    <th>Supplier ID</th>
                    <th>Supplier Desc</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $num = 0
                ?>
                <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($num+=1); ?></td>
                    <td><?php echo e(Helper::defineOperTypeBy('id', $supplier->id_oper_type)->oper_name); ?></td>
                    <td><?php echo e($supplier->supplier_id); ?></td>
                    <td><?php echo e($supplier->supplier_desc); ?></td>
                    <td>
                        <form method="POST" action="<?php echo e(route('super-admin.setting.supplier-definition.delete',[$supplier->id])); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <a title="Detail" class="btn btn-icon btn-light btn-sm mx-1" href="<?php echo e(route('super-admin.setting.supplier-definition.detail',[$supplier->id])); ?>">
                                <?php echo e(Metronic::getSVG("media/svg/icons/Files/File.svg", "svg-icon-md svg-icon-primary")); ?>

                            </a>
                            <a href="<?php echo e(route('super-admin.setting.supplier-definition.view',[$supplier->id])); ?>" title="Edit" class="btn btn-icon btn-light btn-sm mx-1">
                                <?php echo e(Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-md svg-icon-primary")); ?>

                            </a>
                            <button type="submit" title="Delete" class="btn btn-icon btn-light btn-sm mx-1" onclick='return confirm("Are you sure?")'>
                                <?php echo e(Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary")); ?>

                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <!--end: Datatable-->
    </div>

    <!-- Modal -->
    
    <div class="modal fade" id="newDataInputCSV" tabindex="-1" role="dialog" aria-labelledby="newDataInputCSVLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="<?php echo e(route('super-admin.setting.supplier-definition.create.csv')); ?>" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newDataInputCSVLabel">New Data</h5>
                    </div>
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <a href="/template/import_csv_supplier_definition.csv" id="template_csv">Download Template CSV</a>
                                <p>Note : <br>
                                    - Fill with notepad or similar app (don't use excel or spreadsheet) <br>
                                    - Fill with double quotes ("") for long value (example: "Example Data") <br>
                                    <?php $__currentLoopData = $oper_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oper_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    - Fill <?php echo e($oper_type->id); ?> for field oper_type if type is <?php echo e($oper_type->oper_name); ?> <br>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="upload_csv" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Upload CSV')); ?></label>

                            <div class="col-md-6">
                                <input id="upload_csv" type="file" accept=".csv" class="form-control <?php $__errorArgs = ['upload_csv'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="upload_csv" required autocomplete="upload_csv" autofocus>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Create')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="newDataInputManual" tabindex="-1" role="dialog" aria-labelledby="newDataInputManualLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="<?php echo e(route('super-admin.setting.supplier-definition.create.manual')); ?>">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newDataInputManualLabel">New Data</h5>
                    </div>
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Type')); ?></label>

                            <div class="col-md-6">
                                <select class="form-control" id="type" name="type">
                                    <option value="">Choose</option>
                                    <?php $__currentLoopData = $oper_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oper_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($oper_type->id); ?>"><?php echo e($oper_type->oper_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="supplier_id" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Supplier ID')); ?></label>

                            <div class="col-md-6">
                                <input id="supplier_id" type="tel" pattern="[0-9]+" class="form-control <?php $__errorArgs = ['supplier_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="supplier_id" required autocomplete="supplier_id" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="supplier_desc" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Supplier Desc')); ?></label>

                            <div class="col-md-6">
                                <input id="supplier_desc" type="text" class="form-control <?php $__errorArgs = ['supplier_desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="supplier_desc" required autocomplete="supplier_desc" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Address')); ?></label>

                            <div class="col-md-6">
                                <textarea id="address" type="text" class="form-control" name="address" required autocomplete="address"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Contact')); ?></label>

                            <div class="col-md-6">
                                <input id="contact" type="tel" pattern="[0-9]+" class="form-control <?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="contact" required autocomplete="contact" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Description')); ?></label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="description" required autocomplete="description" autofocus></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Create')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('js/pages/crud/ktdatatable/base/html-table.js')); ?>" type="text/javascript"></script>
<script>
    $('#super_admin_setting_supplier_definition_search_type').select2();
    $('#type').select2();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/pages/super_admin/setting/supplier_definition.blade.php ENDPATH**/ ?>