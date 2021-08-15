<?php echo view('halaman_admin/_header') ?>

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
                                    Hi, <?= session()->get('namalengkap_akunPengguna') ?>
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
                <div class="card-header">
                    <h4 class="card-title">Bio Works</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="card-text">
                            <p>Bio Works merupakan ALAT EVALUASI BERBASIS WEBSITE DENGAN PENDEKATAN ASSESMEN AS LEARNING </p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col">
                <image class="img-fluid" src="https://source.unsplash.com/1200x250/?panoramic"></image>
                </div>
            </div>
            <!--/ Description -->


        </div>
    </div>
</div>
<!-- END: Content-->

<?php echo view('halaman_admin/_footer') ?>