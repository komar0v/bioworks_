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
                    <h4 class="page-title mb-0 font-size-18">Detail Hasil Evaluasi Tes</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">Hasil Evaluasi Tes</li>
                            <li class="breadcrumb-item">Detail</li>
                            <li class="breadcrumb-item active"><?= $detailHasilEvalTes['judul_evaluasi'] ?></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Detail nilai <?= $detailHasilEvalTes['judul_evaluasi'] ?> oleh <?= $detailEvaluasi['namalengkap_user']?></h4>

                        <div class="row align-items-center">
                            
                            <div class="col-sm-6">
                                <div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="py-3">
                                                <p class="mb-1"><i class="mdi mdi-circle mr-1"></i>Soal PG</p>
                                                <h5 class="text-info"><?= $detailHasilEvalTes['nilai_pg'] ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="py-3">
                                                <p class="mb-1"><i class="mdi mdi-circle mr-1"></i>Soal Essay</p>
                                                <h5 class="text-info"><?= $detailHasilEvalTes['nilai_essay'] ?></h5>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <hr>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Page-content -->

    <?php echo view('halaman_murid/_footerMurid') ?>