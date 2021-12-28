{{-- Aside --}}

@php
    $kt_logo_image = 'logo-siapp-sidebar.svg';
@endphp

<div class="aside aside-left {{ Metronic::printClasses('aside', false) }} d-flex flex-column flex-row-auto" id="kt_aside">

    {{-- Brand --}}
    <div class="brand flex-column-auto {{ Metronic::printClasses('brand', false) }}" id="kt_brand">
        <div class="brand-logo">
            <a href="{{ url('/') }}">
                <img style="max-width: 200px;" alt="{{ config('app.name') }}" src="{{ asset('media/logos/'.$kt_logo_image) }}"/>
            </a>
        </div>

        @if (config('layout.aside.self.minimize.toggle'))
            <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                {{ Metronic::getSVG("media/svg/icons/Navigation/Angle-double-left.svg", "svg-icon-xl") }}
            </button>
        @endif

    </div>

    {{-- Aside menu --}}
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

        @if (config('layout.aside.self.display') === false)
            <div class="header-logo">
                <a href="{{ url('/') }}">
                    <img  alt="{{ config('app.name') }}" src="{{ asset('media/logos/'.$kt_logo_image) }}"/>
                </a>
            </div>
        @endif

        <div
            id="kt_aside_menu"
            class="aside-menu my-4 {{ Metronic::printClasses('aside_menu', false) }}"
            data-menu-vertical="1"
            {{ Metronic::printAttrs('aside_menu') }}>

            <ul class="menu-nav ">

{{-- PIC --}}
            @if ($currentUser->roles_id == 14) 
                <li class="menu-item {{ (strpos($page_title, 'PIC | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('pic.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
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
                            <li class="menu-item {{ (strpos($page_title, 'PIC | Administrasi | Jabatan Fungsional') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('pic.administrasi.surat-usulan.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Jabatan Fungsional</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'PIC | Administrasi | Kenaikan Pangkat') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('pic.administrasi.kenaikan-pangkat.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Kenaikan Pangkat</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'PIC | Administrasi | Pemberhentian') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('pic.administrasi.pemberhentian.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Pemberhentian</span></a>
                            </li>
                            <!-- <li class="menu-item {{ (strpos($page_title, 'PIC | Administrasi | Status Usulan') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('pic.administrasi.status-usulan.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Status Usulan</span></a>
                            </li> -->
                        </ul>
                    </div>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'PIC | User Management') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('pic.inbox.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                                <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                                <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
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
                            <li class="menu-item {{ (strpos($page_title, 'PIC | Setting | Product Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">User</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'PIC | Setting | Item Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a  class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Alur Proses</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'PIC | Setting | Supplier Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('pic.faq.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">FAQ</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

{{-- Koor_Pokja_P4 --}}
            @if ($currentUser->roles_id == 5) 
                <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('koor-pokja.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Inbox</span></span>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | JFKU') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('koor-pokja.inbox.jfku.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">JFKU</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Modul Kontrol LNS') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('koor-pokja.inbox.lns.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Modul Kontrol LNS</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Pertek') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('koor-pokja.pertek.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Pertek</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | RKP') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('koor-pokja.list-rkp.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">RKP</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Atur Dokumen') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('koor-pokja.atur-dokumen.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                                <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                                <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Atur Dokumen</span>
                    </a>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Riwayat') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('koor-pokja.riwayat.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                                <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                                <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Riwayat</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
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
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Setting | Product Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">User</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Setting | Item Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Alur Proses</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Setting | Supplier Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('koor-pokja.faq.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">FAQ</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

{{-- Koor_Pokja_KP --}}
            @if ($currentUser->roles_id == 6) 
                <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('koor-pokja-kp.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Inbox</span></span>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Kenaikan Pangkat') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('koor-pokja-kp.inbox.kenaikan-pangkat.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Kenaikan Pangkat</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Pertek') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('koor-pokja-kp.pertek.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Pertek</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | RKP') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('koor-pokja-kp.rkp.home') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">RKP</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Atur Dokumen') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('koor-pokja-kp.atur-dokumen.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                                <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                                <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Atur Dokumen</span>
                    </a>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Riwayat') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('koor-pokja-kp.riwayat.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                                <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                                <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Riwayat</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
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
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Setting | Product Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">User</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Setting | Item Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Alur Proses</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Setting | Supplier Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('koor-pokja-kp.faq.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">FAQ</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

{{-- Koor_Pokja_Pensiun --}}
            @if ($currentUser->roles_id == 7) 
                <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('koor-pokja-pensiun.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Inbox</span></span>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Pemberhentian') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('koor-pokja-pensiun.inbox.pemberhentian.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Pemberhentian</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Pertek') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('koor-pokja-pensiun.pertek.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Pertek</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | RKP') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('koor-pokja-pensiun.rkp.home') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">RKP</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Atur Dokumen') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('koor-pokja-pensiun.atur-dokumen.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                                <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                                <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Atur Dokumen</span>
                    </a>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Riwayat') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('koor-pokja-pensiun.riwayat.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                                <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                                <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Riwayat</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
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
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Setting | Product Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">User</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Setting | Item Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Alur Proses</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Setting | Supplier Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('koor-pokja-pensiun.faq.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">FAQ</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif
 
{{-- JF Ahli Muda KP --}}
            @if ($currentUser->roles_id == 10)
                <li class="menu-item {{ (strpos($page_title, 'JF Muda Madya | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-kp.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Inbox</span></span>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Usulan') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-kp.inbox.usulan') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Usulan</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Revisi') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-kp.inbox.revisi') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Revisi</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'JF Muda Madya | Atur Dokument') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-kp.atur-dokument.index') }}" class="menu-link ">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil012.svg-->
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" />
                            <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" />
                            </svg></span>
                        <span class="menu-text">Atur Dokumen</span>
                    </a>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'JF Muda Madya | Riwayat') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-kp.riwayat.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z" />
                            <path opacity="0.3" d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z" />
                            </svg></span>
                        <span class="menu-text">Riwayat</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
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
                            <li class="menu-item {{ (strpos($page_title, 'PIC | Setting | Product Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">User</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'PIC | Setting | Item Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Alur Proses</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Muda Madya | Setting | FAQ') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-kp.pengaturan.faq') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">FAQ</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

{{-- JF Ahli Muda P4 --}}
            @if ($currentUser->roles_id == 9) 
                <li class="menu-item {{ (strpos($page_title, 'JF Muda Madya | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Inbox</span></span>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Modul Kontrol LNS') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli.inbox.lns.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Modul Kontrol LNS</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Usulan') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli.inbox.usulan') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Usulan</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Revisi') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli.inbox.revisi') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Revisi</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- <li class="menu-item {{ (strpos($page_title, 'JF Muda Madya | Inbox') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli.inbox.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                                <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                                <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                    </a>
                </li> --}}

                <li class="menu-item {{ (strpos($page_title, 'JF Muda Madya | Atur Dokument') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli.atur-dokument.index') }}" class="menu-link ">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil012.svg-->
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" />
                            <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" />
                            </svg></span>
                        <span class="menu-text">Atur Dokumen</span>
                    </a>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'JF Muda Madya | Riwayat') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli.riwayat.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z" />
                            <path opacity="0.3" d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z" />
                            </svg></span>
                        <span class="menu-text">Riwayat</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
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
                            <li class="menu-item {{ (strpos($page_title, 'PIC | Setting | Product Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">User</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'PIC | Setting | Item Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Alur Proses</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Muda Madya | Setting | FAQ') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli.pengaturan.faq') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">FAQ</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

{{-- JF Ahli Muda Pensiun --}}
            @if ($currentUser->roles_id == 11) 
                <li class="menu-item {{ (strpos($page_title, 'JF Pensiun | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-pensiun.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Inbox</span></span>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Pensiun | Inbox | Usulan') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-pensiun.inbox.usulan') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Usulan</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Pensiun | Inbox | Revisi') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-pensiun.inbox.revisi') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Revisi</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- <li class="menu-item {{ (strpos($page_title, 'JF Pensiun | Inbox') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-pensiun.inbox.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                                <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                                <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                    </a>
                </li> --}}

                <li class="menu-item {{ (strpos($page_title, 'JF Pensiun | Atur Dokument') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-pensiun.atur-dokument.index') }}" class="menu-link ">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil012.svg-->
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" />
                            <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" />
                            </svg></span>
                        <span class="menu-text">Atur Dokumen</span>
                    </a>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'JF Pensiun | Riwayat') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-pensiun.riwayat.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z" />
                            <path opacity="0.3" d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z" />
                            </svg></span>
                        <span class="menu-text">Riwayat</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
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
                            <li class="menu-item {{ (strpos($page_title, 'JF Pensiun | Setting | Product Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">User</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Pensiun | Setting | Item Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Alur Proses</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Pensiun | Setting | FAQ') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-pensiun.pengaturan.faq') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">FAQ</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

{{-- JF Ahli Pertama KP --}}
            @if ($currentUser->roles_id == 16)
                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama KP | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-pertama-kp.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Inbox</span></span>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Usulan') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-pertama-kp.inbox.usulan') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Usulan</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Revisi') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-pertama-kp.inbox.revisi') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Revisi</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama KP | Atur Dokument') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-pertama-kp.atur-dokument.index') }}" class="menu-link ">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil012.svg-->
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" />
                            <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" />
                            </svg></span>
                        <span class="menu-text">Atur Dokumen</span>
                    </a>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama KP | Riwayat') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-pertama-kp.riwayat.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z" />
                            <path opacity="0.3" d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z" />
                            </svg></span>
                        <span class="menu-text">Riwayat</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
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
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama KP | Setting | Product Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">User</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama KP | Setting | Item Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Alur Proses</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama KP | Setting | FAQ') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-pertama-kp.pengaturan.faq') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">FAQ</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

{{-- JF Ahli Pertama P4 --}}
            @if ($currentUser->roles_id == 15) 
                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama P4 | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-pertama-p4.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Inbox</span></span>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Modul Kontrol LNS') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-pertama-p4.inbox.lns.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Modul Kontrol LNS</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Usulan') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-pertama-p4.inbox.usulan') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Usulan</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Revisi') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-pertama-p4.inbox.revisi') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Revisi</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama P4 | Inbox') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-pertama-p4.inbox.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                                <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                                <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                    </a>
                </li> --}}

                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama P4 | Atur Dokument') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-pertama-p4.atur-dokument.index') }}" class="menu-link ">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil012.svg-->
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" />
                            <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" />
                            </svg></span>
                        <span class="menu-text">Atur Dokumen</span>
                    </a>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama P4 | Riwayat') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-pertama-p4.riwayat.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z" />
                            <path opacity="0.3" d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z" />
                            </svg></span>
                        <span class="menu-text">Riwayat</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
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
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama P4 | Setting | Product Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">User</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama P4 | Setting | Item Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Alur Proses</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama P4 | Setting | FAQ') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-pertama-p4.pengaturan.faq') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">FAQ</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

{{-- JF Ahli Pertama Pensiun --}}
            @if ($currentUser->roles_id == 17) 
                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama Pensiun | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-pertama-pensiun.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Inbox</span></span>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama Pensiun | Inbox | Usulan') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-pertama-pensiun.inbox.usulan') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Usulan</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama Pensiun | Inbox | Revisi') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-pertama-pensiun.inbox.revisi') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Revisi</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama Pensiun | Inbox') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-pertama-pensiun.inbox.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                                <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                                <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                    </a>
                </li> --}}

                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama Pensiun | Atur Dokument') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-pertama-pensiun.atur-dokument.index') }}" class="menu-link ">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil012.svg-->
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" />
                            <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" />
                            </svg></span>
                        <span class="menu-text">Atur Dokumen</span>
                    </a>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama Pensiun | Riwayat') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-pertama-pensiun.riwayat.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z" />
                            <path opacity="0.3" d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z" />
                            </svg></span>
                        <span class="menu-text">Riwayat</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
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
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama Pensiun | Setting | Product Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">User</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama Pensiun | Setting | Item Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Alur Proses</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama Pensiun | Setting | FAQ') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-pertama-pensiun.pengaturan.faq') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">FAQ</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif
            
{{-- JF Ahli Terampil KP --}}
            @if ($currentUser->roles_id == 19)
                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil KP | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-terampil-kp.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Inbox</span></span>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Usulan') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-terampil-kp.inbox.usulan') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Usulan</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Revisi') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-terampil-kp.inbox.revisi') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Revisi</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil KP | Atur Dokument') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-terampil-kp.atur-dokument.index') }}" class="menu-link ">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil012.svg-->
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" />
                            <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" />
                            </svg></span>
                        <span class="menu-text">Atur Dokumen</span>
                    </a>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil KP | Riwayat') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-terampil-kp.riwayat.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z" />
                            <path opacity="0.3" d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z" />
                            </svg></span>
                        <span class="menu-text">Riwayat</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
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
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil KP | Setting | Product Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">User</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil KP | Setting | Item Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Alur Proses</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil KP | Setting | FAQ') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-terampil-kp.pengaturan.faq') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">FAQ</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

{{-- JF Ahli Terampil P4 --}}
            @if ($currentUser->roles_id == 18) 
                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil P4 | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-terampil-p4.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Inbox</span></span>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Modul Kontrol LNS') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-terampil-p4.inbox.lns.index') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Modul Kontrol LNS</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Usulan') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-terampil-p4.inbox.usulan') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Usulan</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Revisi') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-terampil-p4.inbox.revisi') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Revisi</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- <li class="menu-item {{ (strpos($page_title, 'JF Ahli Pertama P4 | Inbox') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-terampil-p4.inbox.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                                <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                                <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                    </a>
                </li> --}}

                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil P4 | Atur Dokument') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-terampil-p4.atur-dokument.index') }}" class="menu-link ">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil012.svg-->
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" />
                            <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" />
                            </svg></span>
                        <span class="menu-text">Atur Dokumen</span>
                    </a>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil P4 | Riwayat') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-terampil-p4.riwayat.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z" />
                            <path opacity="0.3" d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z" />
                            </svg></span>
                        <span class="menu-text">Riwayat</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
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
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil P4 | Setting | Product Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">User</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil P4 | Setting | Item Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Alur Proses</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil P4 | Setting | FAQ') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-terampil-p4.pengaturan.faq') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">FAQ</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

{{-- JF Ahli Terampil Pensiun --}}
            @if ($currentUser->roles_id == 20) 
                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil Pensiun | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-terampil-pensiun.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Inbox</span></span>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil Pensiun | Inbox | Usulan') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-terampil-pensiun.inbox.usulan') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Usulan</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil Pensiun | Inbox | Revisi') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-terampil-pensiun.inbox.revisi') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Revisi</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil Pensiun | Inbox') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-terampil-pensiun.inbox.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                                <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
                                <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                    </a>
                </li> --}}

                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil Pensiun | Atur Dokument') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-terampil-pensiun.atur-dokument.index') }}" class="menu-link ">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil012.svg-->
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" />
                            <path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" />
                            </svg></span>
                        <span class="menu-text">Atur Dokumen</span>
                    </a>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil Pensiun | Riwayat') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('jf-ahli-terampil-pensiun.riwayat.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.5 20.7259C14.6 21.2259 14.2 21.826 13.7 21.926C13.2 22.026 12.6 22.0259 12.1 22.0259C9.5 22.0259 6.9 21.0259 5 19.1259C1.4 15.5259 1.09998 9.72592 4.29998 5.82592L5.70001 7.22595C3.30001 10.3259 3.59999 14.8259 6.39999 17.7259C8.19999 19.5259 10.8 20.426 13.4 19.926C13.9 19.826 14.4 20.2259 14.5 20.7259ZM18.4 16.8259L19.8 18.2259C22.9 14.3259 22.7 8.52593 19 4.92593C16.7 2.62593 13.5 1.62594 10.3 2.12594C9.79998 2.22594 9.4 2.72595 9.5 3.22595C9.6 3.72595 10.1 4.12594 10.6 4.02594C13.1 3.62594 15.7 4.42595 17.6 6.22595C20.5 9.22595 20.7 13.7259 18.4 16.8259Z" />
                            <path opacity="0.3" d="M2 3.62592H7C7.6 3.62592 8 4.02592 8 4.62592V9.62589L2 3.62592ZM16 14.4259V19.4259C16 20.0259 16.4 20.4259 17 20.4259H22L16 14.4259Z" />
                            </svg></span>
                        <span class="menu-text">Riwayat</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
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
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil Pensiun | Setting | Product Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">User</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil Pensiun | Setting | Item Definition') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Alur Proses</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'JF Ahli Terampil Pensiun | Setting | FAQ') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('jf-ahli-terampil-pensiun.pengaturan.faq') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">FAQ</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

{{-- Karo --}}
            @if ($currentUser->roles_id == 4) 
                <li class="menu-item {{ (strpos($page_title, 'Karo | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('karo.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="#" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Inbox</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Inbox</span></span>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Surat Usulan') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('karo.inbox.usulan') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Surat Usulan</span></a>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Rancangan Keppres') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('karo.inbox.revisi') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Rancangan Keppres</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

{{-- Deputi --}}
            @if ($currentUser->roles_id == 3) 
                <li class="menu-item {{ (strpos($page_title, 'Deputi | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('deputi.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{ route('deputi.inbox.revisi') }}" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Rancangan Keppres</span>
                        <!-- <i class="menu-arrow"></i> -->
                    </a>
                    <!-- <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Inbox</span></span>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Pertek BKN') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('deputi.inbox.revisi') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Rancangan Keppres</span></a>
                            </li>
                        </ul>
                    </div> -->
                </li>
            @endif

{{-- TU Kementerian --}}
            @if ($currentUser->roles_id == 13) 
                <li class="menu-item {{ (strpos($page_title, 'TU Kementerian | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('tu-menteri.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{ route('tu-menteri.inbox.revisi') }}" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Rancangan Keppres</span>
                        <!-- <i class="menu-arrow"></i> -->
                    </a>
                    <!-- <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Inbox</span></span>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Pertek BKN') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('deputi.inbox.revisi') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Rancangan Keppres</span></a>
                            </li>
                        </ul>
                    </div> -->
                </li>
            @endif
{{-- Dukmin --}}
            @if ($currentUser->roles_id == 12) 
                <li class="menu-item {{ (strpos($page_title, 'Dukmin | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('dukmin.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item  menu-item-submenu {{ (strpos(Route::currentRouteName(), 'setting') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{ route('dukmin.inbox.revisi') }}" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Rancangan Keppres</span>
                        <!-- <i class="menu-arrow"></i> -->
                    </a>
                    <!-- <div class="menu-submenu ">
                        <span class="menu-arrow"></span>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link"><span class="menu-text">Inbox</span></span>
                            </li>
                            <li class="menu-item {{ (strpos($page_title, 'KemenSetneg | Inbox | Pertek BKN') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                <a href="{{ route('deputi.inbox.revisi') }}" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Rancangan Keppres</span></a>
                            </li>
                        </ul>
                    </div> -->
                </li>
            @endif
{{-- Administrator --}}
            @if ($currentUser->roles_id == 1) 
                <li class="menu-item {{ (strpos($page_title, 'Administrator | Dashboard') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('administrator.home.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Design/Layers.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item {{ (strpos($page_title, 'Administrator | User Management') !== false) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{ route('administrator.user-management.index') }}" class="menu-link">
                        <span class="svg-icon menu-icon"><!--begin::Svg Icon | path:media/svg/icons/Layout/Layout-4-blocks.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </span>
                        <span class="menu-text">User Management</span>
                    </a>
                </li>
            @endif
            </ul>
        </div>
    </div>
</div>
