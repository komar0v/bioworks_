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
                    <h4 class="page-title mb-0 font-size-18">Materi</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">Materi</li>
                            <li class="breadcrumb-item active"><?= $detailMateri['judul_materi'] ?></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="mt-0"><?= $detailMateri['judul_materi'] ?></h4>
                        <span><?= $detailMateri['namalengkap_user'] ?></span>
                    </div>
                    <div class="card-body">
                        <?= $detailMateri['konten_materi'] ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

    </div>
    <!-- End Page-content -->

    <?php echo view('halaman_murid/_footerMurid') ?>