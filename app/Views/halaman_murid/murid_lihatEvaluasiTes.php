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
                    <h4 class="page-title mb-0 font-size-18">Evaluasi Tes</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <?php
            $sigm = 0;
            foreach ($list_evaluasiTes as $detailEvaluasiTes) {
                $sigm = $sigm + 1;

            ?>

                <div class="col-md-3">
                    <img class="card-img-top img-fluid" src="https://source.unsplash.com/400x200?geometry,pattern?sig=<?= $sigm ?>">
                    <div class="card card-body">
                        <p class="card-text h5"><?= $detailEvaluasiTes['judul_evaluasi'] ?></p>
                        <p class="card-text h6">Evaluasi dari : <?= $detailEvaluasiTes['namalengkap_user'] ?></p>

                        <div class="text-center">
                            <p class="badge badge-pill badge-<?= $detailEvaluasiTes['sisa_hari_pengerjaan'] >1 ? 'success' : 'danger'; ?>"><i class="dripicons-clock"></i> <?= $detailEvaluasiTes['sisa_hari_pengerjaan']?> hari lagi</p>
                        </div>
                        <a href="<?= base_url('Evaluasi_/EvaluasiTes/detail/' . $detailEvaluasiTes['id_evaluasi_tes']) ?>" class="btn btn-primary waves-effect waves-light">Mulai</a>

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