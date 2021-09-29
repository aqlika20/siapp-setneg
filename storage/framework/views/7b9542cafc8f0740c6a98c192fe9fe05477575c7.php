

<?php
    $kt_logo_image = 'logo-siapp-sidebar.svg';
?>

<div class="aside aside-left <?php echo e(Metronic::printClasses('aside', false)); ?> d-flex flex-column flex-row-auto" id="kt_aside">

    
    <div class="brand flex-column-auto <?php echo e(Metronic::printClasses('brand', false)); ?>" id="kt_brand">
        <div class="brand-logo">
            <a href="<?php echo e(url('/')); ?>">
                <img style="max-width: 200px;" alt="<?php echo e(config('app.name')); ?>" src="<?php echo e(asset('media/logos/'.$kt_logo_image)); ?>"/>
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
                    <img  alt="<?php echo e(config('app.name')); ?>" src="<?php echo e(asset('media/logos/'.$kt_logo_image)); ?>"/>
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
                <li class="menu-item <?php echo e((strpos($page_title, 'PIC | Dashboard') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                    <a href="<?php echo e(route('pic.home.index')); ?>" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu <?php echo e((strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Administrasi</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Administrasi</span></span>
                            </li>
                            <li class="menu-item <?php echo e((strpos($page_title, 'PIC | Administrasi | Jabatan Fungsional') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                <a href="<?php echo e(route('pic.administrasi.surat-usulan.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Jabatan Fungsional</span></a>
                            </li>
                            <li class="menu-item <?php echo e((strpos($page_title, 'PIC | Administrasi | Kenaikan Pangkat') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                <a href="<?php echo e(route('pic.administrasi.kenaikan-pangkat.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Kenaikan Pangkat</span></a>
                            </li>
                            <li class="menu-item <?php echo e((strpos($page_title, 'PIC | Administrasi | Pemberhentian') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                <a href="<?php echo e(route('pic.administrasi.pemberhentian.index')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Pemberhentian</span></a>
                            </li>
                            <li class="menu-item <?php echo e((strpos($page_title, 'PIC | Administrasi | Status Usulan') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Status Usulan</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item <?php echo e((strpos($page_title, 'PIC | User Management') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                    <a href="" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                                <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                                <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu <?php echo e((strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Pengaturan</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Pengaturan</span></span>
                            </li>
                            <li class="menu-item <?php echo e((strpos($page_title, 'PIC | Setting | Product Definition') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">User</span></a>
                            </li>
                            <li class="menu-item <?php echo e((strpos($page_title, 'PIC | Setting | Item Definition') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Alur Proses</span></a>
                            </li>
                            <li class="menu-item <?php echo e((strpos($page_title, 'PIC | Setting | Supplier Definition') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">FAQ</span></a>
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
                <li class="menu-item <?php echo e((strpos($page_title, 'JF Muda Madya | Dashboard') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                    <a href="<?php echo e(route('jf_ahli.home.index')); ?>" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item <?php echo e((strpos($page_title, 'JF Muda Madya | Inbox') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                    <a href="<?php echo e(route('jf_ahli.inbox.index')); ?>" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                                <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                                <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                    </a>
                </li>

                <li class="menu-item <?php echo e((strpos($page_title, 'JF Muda Madya | Atur Dokument') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                    <a href="<?php echo e(route('jf_ahli.atur-dokument.index')); ?>" class="menu-link ">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil012.svg-->
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" />
                            <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" />
                            </svg></span>
                        <span class="menu-text">Atur Dokumen</span>
                    </a>
                </li>

                <li class="menu-item <?php echo e((strpos($page_title, 'JF Muda Madya | Riwayat') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                    <a href="<?php echo e(route('jf_ahli.riwayat.index')); ?>" class="menu-link ">
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z" />
                            <path opacity="0.3" d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z" />
                            </svg></span>
                        <span class="menu-text">Riwayat</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu <?php echo e((strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Pengaturan</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Pengaturan</span></span>
                            </li>
                            <li class="menu-item <?php echo e((strpos($page_title, 'PIC | Setting | Product Definition') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">User</span></a>
                            </li>
                            <li class="menu-item <?php echo e((strpos($page_title, 'PIC | Setting | Item Definition') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Alur Proses</span></a>
                            </li>
                            <li class="menu-item <?php echo e((strpos($page_title, 'JF Muda Madya | Setting | FAQ') !== false) ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                                <a href="<?php echo e(route('jf_ahli.pengaturan.faq')); ?>" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">FAQ</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>

</div>
<?php /**PATH C:\Users\ardim\Desktop\siapp jadi\siapp\resources\views/layout/base/_aside.blade.php ENDPATH**/ ?>