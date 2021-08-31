<html class="loading">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Guru - Bio Works</title>
    <link rel="icon" type="image/png" href="<?= base_url('home_assets') ?>/images/logo_icon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/vendors/css/ui/prism.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/css/plugins/animate/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.2/sweetalert2.min.css"/>
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/css/core/menu/menu-types/vertical-menu.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/css/plugins/extensions/toastr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->

    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>


                    </div>
                    <ul class="nav navbar-nav float-right">

                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>


                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?= session()->get('namalengkap_akunPengguna') ?></span><span class="user-status"><?= session()->get('level_akunPengguna') ?></span></div><span><img class="round" src="https://www.nicepng.com/png/detail/128-1280406_view-user-icon-png-user-circle-icon-png.png" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <a class="dropdown-item" href="#"><i class="feather icon-user"></i> Edit Profile</a> -->
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= base_url('Credentials/keluar') ?>"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- END: Header-->


    <!-- BEGIN: SIDEBAR Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="<?= base_url() ?>">
                        <div class="brand-logo"><svg width="32" height="32" xmlns="http://www.w3.org/2000/svg">
                                <title>Bio Works</title>
                                <defs>
                                    <linearGradient x1="114.674%" y1="39.507%" x2="-52.998%" y2="39.507%" id="logo-a">
                                        <stop stop-color="#8D92FA" offset="0%" />
                                        <stop stop-color="#8D92FA" stop-opacity="0" offset="100%" />
                                    </linearGradient>
                                    <linearGradient x1="93.05%" y1="19.767%" x2="15.034%" y2="85.765%" id="logo-b">
                                        <stop stop-color="#FF3058" offset="0%" />
                                        <stop stop-color="#FF6381" offset="100%" />
                                    </linearGradient>
                                    <linearGradient x1="32.716%" y1="-20.176%" x2="32.716%" y2="148.747%" id="logo-c">
                                        <stop stop-color="#FF97AA" offset="0%" />
                                        <stop stop-color="#FF97AA" stop-opacity="0" offset="100%" />
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <path d="M31.12 7.482C28.327 19.146 19.147 28.326 7.483 31.121A12.04 12.04 0 0 1 .88 24.518C3.674 12.854 12.854 3.674 24.518.879a12.04 12.04 0 0 1 6.603 6.603z" fill="#312ECA" />
                                    <path d="M28.874 3.922l-24.91 24.99a12.026 12.026 0 0 1-3.085-4.394C3.674 12.854 12.854 3.674 24.518.879a12.025 12.025 0 0 1 4.356 3.043z" fill="url(#logo-a)" />
                                    <g opacity=".88">
                                        <path d="M31.12 24.518a12.04 12.04 0 0 1-6.602 6.603C12.854 28.326 3.674 19.146.879 7.482A12.04 12.04 0 0 1 7.482.88c11.664 2.795 20.844 11.975 23.639 23.639z" fill="url(#logo-b)" />
                                        <path d="M24.518 31.12C12.854 28.327 3.674 19.147.879 7.483A12.015 12.015 0 0 1 3.46 3.57L28.47 28.5a12.016 12.016 0 0 1-3.951 2.62z" fill="url(#logo-c)" />
                                    </g>
                                </g>
                            </svg></div>
                        <h2 class="brand-text mb-0">Bio Works</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?= base_url(uri_string()) == base_url('Guru') ? 'active' : ''; ?> nav-item"><a href="<?= base_url('Guru') ?>"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class="<?= base_url(uri_string()) == base_url('Guru/materi') ? 'active' : ''; ?> nav-item"><a href="<?= base_url('Guru/materi') ?>"><i class="feather icon-file-text"></i><span class="menu-title">Materi</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-package"></i><span class="menu-title">Evaluasi Tes</span></a>
                    <ul class="menu-content">
                        <li class="<?= base_url(uri_string()) == base_url('Guru/evaluasi_tes') ? 'active' : ''; ?>"><a href="<?= base_url('Guru/evaluasi_tes') ?>"><i></i><span class="menu-item">Kelola Evaluasi</span></a>
                        </li>
                        <li class="<?= base_url(uri_string()) == base_url('Guru/hasil_evaluasi_tes') ? 'active' : ''; ?>"><a href="<?= base_url('Guru/hasil_evaluasi_tes') ?>"><i></i><span class="menu-item">Hasil Evaluasi</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-life-buoy"></i><span class="menu-title">Evaluasi Non Tes</span></a>
                    <ul class="menu-content">
                        <li class="<?= base_url(uri_string()) == base_url('Guru/evaluasi_non_tes') ? 'active' : ''; ?>"><a href="<?= base_url('Guru/evaluasi_non_tes') ?>"><i></i><span class="menu-item">Kelola Evaluasi Non Tes</span></a>
                        </li>
                        <li class="<?= base_url(uri_string()) == base_url('Guru/hasil_evaluasi_non_tes') ? 'active' : ''; ?>"><a href="<?= base_url('Guru/hasil_evaluasi_non_tes') ?>"><i></i><span class="menu-item">Hasil Evaluasi Non Tes</span></a>
                        </li>
                    </ul>
                </li>
                <li class="<?= base_url(uri_string()) == base_url('Guru/tentang_app') ? 'active' : ''; ?> nav-item"><a href="<?= base_url('Guru/tentang_app') ?>"><i class="feather icon-info"></i><span class="menu-title">Tentang</span></a>
                </li>

            </ul>
        </div>
    </div>
    <!-- END: SIDEBAR Menu-->