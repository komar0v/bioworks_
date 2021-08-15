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

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <?php
            $sigm = 0;
            foreach ($list_materi as $detailMateri) {
                $sigm = $sigm + 1;

            ?>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="https://source.unsplash.com/400x200?geometry,pattern?sig=<?= $sigm ?>">
                        <div class="card-body">
                            <p class="card-text h5"><?= $detailMateri['judul_materi'] ?></p>
                            <p class="card-text h6">penulis : <?= $detailMateri['namalengkap_user'] ?></p>
                            <a href="<?= base_url('Murid/materi/'.$detailMateri['id_materi'])?>" class="float-right btn btn-primary waves-effect waves-light">Baca</a>
                        </div>
                    </div>
                </div>
            <?php
                $sigm = $sigm + 1;
            }
            ?>



        </div>
        <!-- end row -->

    </div>
    <!-- End Page-content -->

    <?php echo view('halaman_murid/_footerMurid') ?>