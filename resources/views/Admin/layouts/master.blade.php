<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title') | NhomNhom Shop</title>
    <base href="/admin/">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="DuogBachMobile Shop Bán Điện Thoại Uy Tín Số 1 Việt Nam">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link href="./main.css" rel="stylesheet">
    <link href="./my_style.css" rel="stylesheet">

    <!-- Chekeditor -->
    <script src="../ckeditor/ckeditor.js"></script>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <!-- <div class="logo-src"></div> -->
                <div class="app-sidebar__heading">
                    <a class="text-decoration-none" href="/quantri">NhomNhom Shop</a>
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
                <div class="app-header-right">

                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/user/{{ Auth::user()->avatar ?? '' }}" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');">
                                                    </div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="assets/images/user/{{ Auth::user()->avatar ?? '' }}" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">{{ Auth::user()->name ?? '' }}</div>
                                                                    <!-- <div class="widget-subheading opacity-8">A short
                                                                        profile description</div> -->
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <a href="/quantri/logout" class="btn-pill btn-shadow btn-shine btn btn-focus">Logout</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item">
                                                </li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-wide btn btn-primary btn-sm" id="myFacebook" onclick=""> Facebook
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading"> {{ Auth::user()->name ?? '' }} </div>
                                    <div class="widget-subheading">
                                        @if(Auth::user()->level == 0) Host
                                        @elseif(Auth::user()->level == 1) Admin
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Menu</li>

                            <li class="mm-active">
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-plugin"></i>Quản lý
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="/quantri/dashboard" class="{{ (request()->segment(2) == '') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon"></i>Thống kê
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/quantri/user" class="{{ (request()->segment(2) == 'user') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon"></i>Quản lý người dùng
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="/quantri/order" class="{{ (request()->segment(2) == 'order') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon"></i>Quản lý đơn hàng
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/quantri/product" class="{{ (request()->segment(2) == 'product') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon"></i>Quản lý sản phẩm
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/quantri/category" class="{{ (request()->segment(2) == 'category') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon"></i>Quản lý danh mục
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/quantri/brand" class="{{ (request()->segment(2) == 'brand') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon"></i>Quản lý thương hiệu
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/quantri/slider" class="{{ (request()->segment(2) == 'slider') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon"></i>Quản lý slider
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/quantri/logs" class="{{ (request()->segment(2) == 'logs') ? 'mm-active' : '' }}">
                                            <i class="metismenu-icon"></i>Danh sách action admin
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">

                <!-- Main -->
                @yield('body')
                <!-- End Main -->
            </div>
        </div>

    </div>
    <script src="assets/scripts/jquery-3.2.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="./assets/scripts/main.js"></script>
    <script type="text/javascript" src="./assets/scripts/my_script.js"></script>
</body>

</html>