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
                    <h4 class="page-title mb-0 font-size-18">Hasil Evaluasi Non Tes</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row pb-2">
            <div class="col-12">
                <ul class="nav nav-pills nav-justified" id="card-flters">
                    <li class="nav-item waves-effect waves-light btn btn-outline-primary" data-filter="*">Semua</li>
                    <li class="nav-item waves-effect waves-light btn btn-outline-primary" data-filter=".filter-tujuan">Tujuan Pembelajaran</li>
                    <li class="nav-item waves-effect waves-light btn btn-outline-primary" data-filter=".filter-peer">Peer-Assessment</li>
                    <li class="nav-item waves-effect waves-light btn btn-outline-primary" data-filter=".filter-self">Self-Assessment</li>
                </ul>
            </div>
        </div>

        <div class="row evalnontes">
            <?php
            $sigm = 0;
            foreach ($list_evaluasiNonTes as $detailEvaluasiNonTes) {
                $sigm = $sigm + 1;

            ?>

                <div class="col-md-3 evalnontes-item filter-<?= $detailEvaluasiNonTes['jenis_evaluasi']?>">
                    <img class="card-img-top img-fluid" src="https://source.unsplash.com/400x200?geometry,pattern?sig=<?= $sigm ?>">
                    <div class="card card-body">
                        <p class="card-text h5"><?= $detailEvaluasiNonTes['judul_evaluasi'] ?></p>
                        <p class="card-text h6">Evaluasi dari : <?= $detailEvaluasiNonTes['namalengkap_user'] ?></p>

                        <div class="text-center">
                            <?= $detailEvaluasiNonTes['jenis_evaluasi'] == 'tujuan' ? '<div style="background-color: #202124;" class="text-white badge badge-pill">Penilaian Tujuan Pembelajaran</div>' : ''; ?>
                            <?= $detailEvaluasiNonTes['jenis_evaluasi'] == 'peer' ? '<div style="background-color: #312ECA;"  class="text-white badge badge-pill">Peer-Assessment</div>' : ''; ?>
                            <?= $detailEvaluasiNonTes['jenis_evaluasi'] == 'self' ? '<div style="background-color: #ED4878;" class="text-white badge badge-pill">Self-Assessment</div>' : ''; ?>
                        </div>
                        <h3 class="text-center"><?= $detailEvaluasiNonTes['nilai_akhir'] ?></h3>
                        <h4 class="badge badge-info">
                            <?= $detailEvaluasiNonTes['nilai_akhir'] <= 0.99 ? 'Kurang (K)' : ''; ?>
                            <?= $detailEvaluasiNonTes['nilai_akhir'] >= 1 && $detailEvaluasiNonTes['nilai_akhir'] <= 1.99 ? 'Cukup (C)' : ''; ?>
                            <?= $detailEvaluasiNonTes['nilai_akhir'] >= 2 && $detailEvaluasiNonTes['nilai_akhir'] <= 2.99 ? 'Baik (B)' : ''; ?>
                            <?= $detailEvaluasiNonTes['nilai_akhir'] >= 3 && $detailEvaluasiNonTes['nilai_akhir'] <= 4 ? 'Sangat Baik (SB)' : ''; ?>
                        </h4>
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