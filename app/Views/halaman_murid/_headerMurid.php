<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Bio Works</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('home_assets') ?>/images/logo_icon.png">

    <!-- jquery.vectormap css -->
    <link href="<?= base_url('murid_assets') ?>/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?= base_url('murid_assets') ?>/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('murid_assets') ?>/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('murid_assets') ?>/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/css/plugins/extensions/toastr.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.2/sweetalert2.min.css"/>

    <style>
        .sticky {
            position: -webkit-sticky;
            position: -moz-sticky;
            position: -ms-sticky;
            position: -o-sticky;
            position: sticky;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</head>

<body data-layout="horizontal" data-topbar="dark">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner-chase">
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="#" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?= base_url('home_assets') ?>/images/logo_icon.png" alt="" height="20">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= base_url('home_assets') ?>/images/logo_icon.png" alt="" height="32">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <div class="topnav">
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url('Murid') ?>" id="topnav-dashboard">
                                                <i class="bx bx-home-alt"></i> Dashboard
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url('Murid/semua_materi') ?>" id="topnav-dashboard">
                                                <i class="mdi mdi-book-open-page-variant"></i> Materi
                                            </a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-lead-pencil"></i> Evaluasi <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                                <a href="<?= base_url('Murid/semua_evaluasi_tes') ?>" class="dropdown-item">Evaluasi Tes</a>
                                                <a href="<?= base_url('Murid/semua_evaluasi_non_tes') ?>" class="dropdown-item">Evaluasi Non Tes</a>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-file-check-outline"></i>Hasil Evaluasi <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                                <a href="<?= base_url('Murid/hasil_evaluasi_tes') ?>" class="dropdown-item">Evaluasi Tes</a>
                                                <a href="<?= base_url('Murid/hasil_evaluasi_non_tes') ?>" class="dropdown-item">Evaluasi Non Tes</a>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>

                    <div class="d-flex">


                        <div class="dropdown d-none d-lg-inline-block ml-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="https://www.nicepng.com/png/detail/128-1280406_view-user-icon-png-user-circle-icon-png.png">
                                <span class="d-none d-xl-inline-block ml-1"><?= session()->get('namalengkap_akunPengguna') ?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <!-- <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="<?= base_url('Credentials/keluar') ?>"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>