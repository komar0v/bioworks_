<?php echo view('halaman_murid/_headerMurid') ?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Selamat datang, <?= session()->get('namalengkap_akunPengguna') ?></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <a class="weatherwidget-io" href="https://forecast7.com/en/n7d88110d43/special-region-of-yogyakarta/" data-label_1="Yogyakarta" data-font="Roboto" data-icons="Climacons Animated" data-mode="Current" data-theme="pure">Yogyakarta</a>
                    <script>
                        ! function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = 'https://weatherwidget.io/js/widget.min.js';
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, 'script', 'weatherwidget-io-js');
                    </script>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-body">
                    <h3 class="card-title mt-0">Tentang aplikasi</h3>
                    <p class="card-text">
                        <b>Bio Works</b> adalah ALAT EVALUASI BERBASIS WEBSITE DENGAN PENDEKATAN ASSESMEN AS LEARNING </p>
                    </p>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
            <image class="img-fluid" src="https://source.unsplash.com/1200x250/?quotes,motivational,text"></image>
            </div>
        </div>

    </div>
    <!-- End Page-content -->

    <?php echo view('halaman_murid/_footerMurid') ?>