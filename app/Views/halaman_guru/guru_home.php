<?php echo view('halaman_guru/_header') ?>

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Dashboard</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                   Halo, <?= session()->get('namalengkap_akunPengguna') ?>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="content-body">
            <!-- Description -->
            <section id="description" class="card">
                <div class="card-content">
                    <div class="card-body">
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
            </section>
            <!-- <div class="row">
                <div class="col">
                <image class="img-fluid" src="https://source.unsplash.com/1200x250/?panoramic"></image>
                </div>
            </div> -->
            <!--/ Description -->
            

        </div>
    </div>
</div>
<!-- END: Content-->

<?php echo view('halaman_guru/_footer') ?>