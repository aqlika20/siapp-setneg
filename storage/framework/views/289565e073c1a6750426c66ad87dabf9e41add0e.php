

<?php
    $kt_logo_image = 'logo-light.png';
?>

<?php if(config('layout.brand.self.theme') === 'light'): ?>
    <?php $kt_logo_image = 'logo-dark.png' ?>
<?php elseif(config('layout.brand.self.theme') === 'dark'): ?>
    <?php $kt_logo_image = 'logo-light.png' ?>
<?php endif; ?>

<div class="aside aside-left <?php echo e(Metronic::printClasses('aside', false)); ?> d-flex flex-column flex-row-auto" id="kt_aside">

    
    <div class="brand flex-column-auto <?php echo e(Metronic::printClasses('brand', false)); ?>" id="kt_brand">
        <div class="brand-logo">
            <a href="<?php echo e(url('/')); ?>">
                <img alt="<?php echo e(config('app.name')); ?>" src="<?php echo e(asset('media/logos/'.$kt_logo_image)); ?>"/>
            </a>
        </div>

        <?php if(config('layout.aside.self.minimize.toggle')): ?>
            <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                <?php echo e(Metronic::getSVG("media/svg/icons/Navigation/Angle-double-left.svg", "svg-icon-xl")); ?>

            </button>
        <?php endif; ?>

    </div>

    
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

        <?php if(config('layout.aside.self.display') === false): ?>
            <div class="header-logo">
                <a href="<?php echo e(url('/')); ?>">
                    <img alt="<?php echo e(config('app.name')); ?>" src="<?php echo e(asset('media/logos/'.$kt_logo_image)); ?>"/>
                </a>
            </div>
        <?php endif; ?>

        <div
            id="kt_aside_menu"
            class="aside-menu my-4 <?php echo e(Metronic::printClasses('aside_menu', false)); ?>"
            data-menu-vertical="1"
            <?php echo e(Metronic::printAttrs('aside_menu')); ?>>

            <ul class="menu-nav ">


                <?php if($currentUser->roles_id == 1): ?> 
                <li class="menu-item <?php echo e((strpos($page_title, 'Super Admin | Home') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true"><a href="<?php echo e(route('super-admin.home.index')); ?>" class="menu-link ">
                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                </svg><!--end::Svg Icon-->
                </span>
                <span class="menu-text">Home</span></a></li>
                <li class="menu-item <?php echo e((strpos($page_title, 'Super Admin | Report') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true"><a href="<?php echo e(route('super-admin.report.index')); ?>" class="menu-link ">
                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                </svg><!--end::Svg Icon-->
                </span>
                <span class="menu-text">Report</span></a></li>
                <li class="menu-item <?php echo e((strpos($page_title, 'Super Admin | User Management') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true"><a href="<?php echo e(route('super-admin.user-management.index')); ?>" class="menu-link ">
                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                </svg><!--end::Svg Icon-->
                </span>
                <span class="menu-text">User Management</span></a></li>
                <li class="menu-item  menu-item-submenu <?php echo e((strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true" data-menu-toggle="hover"><a href="#" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg><!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Setting</span><i class="menu-arrow"></i></a>
                    <div class="menu-submenu ">
                    <span class="menu-arrow"></span>
                    <ul class="menu-subnav">
                        <li class="menu-item  menu-item-parent" aria-haspopup="true">
                            <span class="menu-link"><span class="menu-text">Setting</span></span>
                        </li>
                        <li class="menu-item <?php echo e((strpos($page_title, 'Super Admin | Setting | Product Definition') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                            <a href="<?php echo e(route('super-admin.setting.product-definition.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Product Definition</span></a>
                        </li>
                        <li class="menu-item <?php echo e((strpos($page_title, 'Super Admin | Setting | Item Definition') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                            <a href="<?php echo e(route('super-admin.setting.item-definition.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Item Definition</span></a>
                        </li>
                        <li class="menu-item <?php echo e((strpos($page_title, 'Super Admin | Setting | Supplier Definition') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                            <a href="<?php echo e(route('super-admin.setting.supplier-definition.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Supplier Definition</span></a>
                        </li>
                        <li class="menu-item <?php echo e((strpos($page_title, 'Super Admin | Setting | Shift') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                            <a href="<?php echo e(route('super-admin.setting.shift.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Shift</span></a>
                        </li>
                        <li class="menu-item <?php echo e((strpos($page_title, 'Super Admin | Setting | Oper Type') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                            <a href="<?php echo e(route('super-admin.setting.oper-type.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Oper Type</span></a>
                        </li>
                        <li class="menu-item <?php echo e((strpos($page_title, 'Super Admin | Setting | Role') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                            <a href="<?php echo e(route('super-admin.setting.role.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Role</span></a>
                        </li>
                    </ul>
                </div>
                </li>
                <?php endif; ?>


                <?php if($currentUser->roles_id == 2): ?> 
                <li class="menu-item <?php echo e((strpos($page_title, 'PPIC | Import CSV') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true"><a href="<?php echo e(route('ppic.import-csv.index')); ?>" class="menu-link ">
                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                </svg><!--end::Svg Icon-->
                </span>
                <span class="menu-text">Import CSV</span></a></li>
                <li class="menu-item  menu-item-submenu <?php echo e((strpos(Route::currentRouteName(), 'production-planning') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true" data-menu-toggle="hover"><a href="#" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg><!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Production Planning</span><i class="menu-arrow"></i></a>
                    <div class="menu-submenu ">
                    <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Production Planning</span></span>
                            </li>
                            <li class="menu-item <?php echo e((strpos($page_title, 'PPIC | Production Planning | Icing Sugar') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                <a href="<?php echo e(route('ppic.production-planning.icing-sugar.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Icing Sugar</span></a>
                            </li>
                            
                        </ul>
                    </div>
                    </li>
                    <li class="menu-item  menu-item-submenu <?php echo e((strpos(Route::currentRouteName(), 'report') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true" data-menu-toggle="hover"><a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                                <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg><!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">Report</span><i class="menu-arrow"></i></a>
                        <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                            <ul class="menu-subnav">
                                <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                    <span class="menu-link"><span class="menu-text">Report</span></span>
                                </li>
                                <li class="menu-item <?php echo e((strpos($page_title, 'PPIC | Report | General') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                    <a href="<?php echo e(route('ppic.report.general.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">General</span></a>
                                </li>
                                <li class="menu-item <?php echo e((strpos($page_title, 'PPIC | Report | Production') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                    <a href="<?php echo e(route('ppic.report.production.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Production</span></a>
                                </li>
                                <li class="menu-item <?php echo e((strpos($page_title, 'PPIC | Report | Consumption') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                    <a href="<?php echo e(route('ppic.report.consumption.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Consumption</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                <?php endif; ?>


                <?php if($currentUser->roles_id == 3): ?> 
                <li class="menu-item  menu-item-submenu <?php echo e((strpos(Route::currentRouteName(), 'incoming-material') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true" data-menu-toggle="hover"><a href="#" class="menu-link menu-toggle">
                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                </svg><!--end::Svg Icon-->
                </span>
                <span class="menu-text">Incoming Material</span><i class="menu-arrow"></i></a>
                <div class="menu-submenu ">
                <span class="menu-arrow"></span>
                    <ul class="menu-subnav">
                        <li class="menu-item  menu-item-parent" aria-haspopup="true">
                            <span class="menu-link"><span class="menu-text">Incoming Material</span></span>
                        </li>
                        
                        <li class="menu-item <?php echo e((strpos($page_title, 'Warehouse | Incoming Material | Major-Minor Item') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                            <a href="<?php echo e(route('warehouse.incoming-material.major-minor-item.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Major-Minor Item</span></a>
                        </li>
                        <li class="menu-item <?php echo e((strpos($page_title, 'Warehouse | Incoming Material | Dextrin') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                            <a href="<?php echo e(route('warehouse.incoming-material.dextrin.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Dextrin</span></a>
                        </li>
                        <li class="menu-item <?php echo e((strpos($page_title, 'Warehouse | Incoming Material | Refined Sugar') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                            <a href="<?php echo e(route('warehouse.incoming-material.refined-sugar.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Refined Sugar</span></a>
                        </li>
                        <li class="menu-item <?php echo e((strpos($page_title, 'Warehouse | Incoming Material | Packaging') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                            <a href="<?php echo e(route('warehouse.incoming-material.packaging.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Packaging</span></a>
                        </li>
                        <li class="menu-item <?php echo e((strpos($page_title, 'Warehouse | Incoming Material | Icing Sugar') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                            <a href="<?php echo e(route('warehouse.incoming-material.icing-sugar.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Icing Sugar</span></a>
                        </li>
                    </ul>
                </div>
                </li>
                <li class="menu-item <?php echo e((strpos($page_title, 'Warehouse | Berita Acara') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true"><a href="<?php echo e(route('warehouse.berita-acara.index')); ?>" class="menu-link ">
                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                </svg><!--end::Svg Icon-->
                </span>
                <span class="menu-text">Berita Acara</span></a></li>

                <li class="menu-item  menu-item-submenu <?php echo e((strpos(Route::currentRouteName(), 'stock-list') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true" data-menu-toggle="hover"><a href="#" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg><!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Stock List</span><i class="menu-arrow"></i></a>
                    <div class="menu-submenu ">
                    <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Stock List</span></span>
                            </li>
                            <li class="menu-item <?php echo e((strpos($page_title, 'Warehouse | Stock List | Major-Minor Item') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                <a href="<?php echo e(route('warehouse.stock-list.major-minor-item.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Major-Minor Item</span></a>
                            </li>
                            <li class="menu-item <?php echo e((strpos($page_title, 'Warehouse | Stock List | Other') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                <a href="<?php echo e(route('warehouse.stock-list.other.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Other</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item  menu-item-submenu <?php echo e((strpos(Route::currentRouteName(), 'delivery-note') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true" data-menu-toggle="hover"><a href="#" class="menu-link menu-toggle">
                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                </svg><!--end::Svg Icon-->
                </span>
                <span class="menu-text">Delivery Note</span><i class="menu-arrow"></i></a>
                <div class="menu-submenu ">
                <span class="menu-arrow"></span>
                    <ul class="menu-subnav">
                        <li class="menu-item  menu-item-parent" aria-haspopup="true">
                            <span class="menu-link"><span class="menu-text">Delivery Note</span></span>
                        </li>
                        <li class="menu-item <?php echo e((strpos($page_title, 'Warehouse | Delivery Note | Production') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                            <a href="<?php echo e(route('warehouse.delivery-note.production.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Production</span></a>
                        </li>
                        <li class="menu-item <?php echo e((strpos($page_title, 'Warehouse | Delivery Note | Icing Process') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                            <a href="<?php echo e(route('warehouse.delivery-note.icing-process.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Icing Process</span></a>
                        </li>
                        <li class="menu-item <?php echo e((strpos($page_title, 'Warehouse | Delivery Note | Packaging') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                            <a href="<?php echo e(route('warehouse.delivery-note.packaging.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Packaging</span></a>
                        </li>
                        
                    </ul>
                </div>
                </li>
                <li class="menu-item  menu-item-submenu <?php echo e((strpos(Route::currentRouteName(), 'report') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true" data-menu-toggle="hover"><a href="#" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg><!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Report</span><i class="menu-arrow"></i></a>
                    <div class="menu-submenu ">
                    <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Report</span></span>
                            </li>
                            <li class="menu-item <?php echo e((strpos($page_title, 'Warehouse | Report | Major-Minor Item') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                <a href="<?php echo e(route('warehouse.report.major-minor-item.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Major-Minor Item</span></a>
                            </li>
                            <li class="menu-item <?php echo e((strpos($page_title, 'Warehouse | Report | Other') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                <a href="<?php echo e(route('warehouse.report.other.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Other</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php endif; ?>


                <?php if($currentUser->roles_id == 4): ?> 
                <li class="menu-item <?php echo e((strpos($page_title, 'Production - Icing | Incoming Material') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true"><a href="<?php echo e(route('production-icing.incoming-material.index')); ?>" class="menu-link ">
                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                </svg><!--end::Svg Icon-->
                </span>
                <span class="menu-text">Incoming Material</span></a></li>
                <li class="menu-item <?php echo e((strpos($page_title, 'Production - Icing | Icing Process') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true"><a href="<?php echo e(route('production-icing.icing-process.index')); ?>" class="menu-link ">
                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                </svg><!--end::Svg Icon-->
                </span>
                <span class="menu-text">Icing Process</span></a></li>
            

                <li class="menu-item <?php echo e((strpos($page_title, 'Production - Icing | Delivery Note') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true"><a href="<?php echo e(route('production-icing.delivery-note.index')); ?>" class="menu-link ">
                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                </svg><!--end::Svg Icon-->
                </span>
                <span class="menu-text">Delivery Note</span></a></li>

                
                
                <li class="menu-item <?php echo e((strpos($page_title, 'Production - Icing | Report') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true"><a href="<?php echo e(route('production-icing.report.index')); ?>" class="menu-link ">
                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                </svg><!--end::Svg Icon-->
                </span>
                <span class="menu-text">Report</span></a></li>
                <?php endif; ?>


                <?php if($currentUser->roles_id == 5): ?> 
                
                <li class="menu-item <?php echo e((strpos($page_title, 'Production - Batching #1 | Incoming Material') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true"><a href="<?php echo e(route('production-batching-1.incoming-material.index')); ?>" class="menu-link ">
                    <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg><!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Incoming Material</span></a>
                </li>

                <li class="menu-item <?php echo e((strpos($page_title, 'Production - Batching #1 | Berita Acara') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true"><a href="<?php echo e(route('production-batching-1.berita-acara.index')); ?>" class="menu-link ">
                    <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg><!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Berita Acara</span></a>
                </li>
                
                <li class="menu-item <?php echo e((strpos($page_title, 'Production - Batching #1 | Report') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true"><a href="<?php echo e(route('production-batching-1.report.index')); ?>" class="menu-link ">
                    <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg><!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Report</span></a></li>
                <?php endif; ?>


                <?php if($currentUser->roles_id == 7): ?> 
                <li class="menu-item <?php echo e((strpos($page_title, 'Filling | Incoming Material') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true"><a href="<?php echo e(route('filling.incoming-material.index')); ?>" class="menu-link ">
                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                </svg><!--end::Svg Icon-->
                </span>
                <span class="menu-text">Incoming Material</span></a></li>

                <li class="menu-item <?php echo e((strpos($page_title, 'Filling | Filling Process') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true"><a href="<?php echo e(route('filling.filling-process.index')); ?>" class="menu-link ">
                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                </svg><!--end::Svg Icon-->
                </span>
                <span class="menu-text">Filling Process</span></a></li>
                
                <li class="menu-item <?php echo e((strpos($page_title, 'Filling | Report') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true"><a href="<?php echo e(route('filling.report.index')); ?>" class="menu-link ">
                <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                    </g>
                </svg><!--end::Svg Icon-->
                </span>
                <span class="menu-text">Report</span></a></li>
                <?php endif; ?>
                
                



                
            </ul>
        </div>
    </div>

</div>
<?php /**PATH /var/www/pt_tigaraksa_satria/resources/views/layout/base/_aside.blade.php ENDPATH**/ ?>