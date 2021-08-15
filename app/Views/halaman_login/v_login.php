<!DOCTYPE html>
<html class="loading">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Login</title>
    <link rel="icon" type="image/png" href="<?= base_url('home_assets') ?>/images/logo_icon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/vendors/css/vendors.min.css">
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
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('app_assets') ?>/css/plugins/extensions/toastr.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img class="img-fluid" src="https://cdn.dribbble.com/users/4598241/screenshots/10759555/media/a3d3f6077e9ada965cafddbb49e32fc5.jpg" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Login</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Selamat datang kembali! Silahkan login untuk melanjutkan</p>
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <?= form_open('Credentials/login') ?>
                                                <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                    <input type="text" name="user-name" class="form-control" id="user-name" placeholder="Username" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                    <label for="user-name">Username</label>
                                                </fieldset>

                                                <fieldset class="form-label-group position-relative has-icon-left">
                                                    <input type="password" name="user-password" class="form-control" id="user-password" placeholder="Password" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-lock"></i>
                                                    </div>
                                                    <label for="user-password">Password</label>
                                                </fieldset>
                                                <button type="submit" class="btn btn-primary float-right btn-inline">Login</button>
                                                <?= form_close() ?>
                                            </div>
                                        </div>
                                        <div class="login-footer">
                                            <div class="divider">
                                                <div class="divider-text">Bio Works © 2021</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url('app_assets') ?>/vendors/js/vendors.min.js"></script>
    <script src="<?= base_url('app_assets') ?>/vendors/js/extensions/toastr.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url('app_assets') ?>/js/core/app-menu.js"></script>
    <script src="<?= base_url('app_assets') ?>/js/core/app.js"></script>
    <script src="<?= base_url('app_assets') ?>/js/scripts/components.js"></script>

    <script>
        toastr.options = {
            "progressBar": true,
            "timeOut": "3000",
        }
        <?= session()->getFlashdata('notif') ?>
    </script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>