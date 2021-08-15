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
                    <h4 class="page-title mb-0 font-size-18">Soal Essay</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">Evaluasi Tes</li>
                            <li class="breadcrumb-item">Essay</li>
                            <li class="breadcrumb-item active"><?= $detailEvalTesEssay['judul_evaluasi'] ?></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-8">
                <?= form_open_multipart('Evaluasi_/EvaluasiTes/proses_jawaban_essay') ?>
                <input type="hidden" name="idEval" value="<?= $detailEvalTesEssay['id_evaluasi_tes'] ?>">
                <?php
                $sigm = 1;
                foreach ($listSoalEssay_evalTes as $detailSoalEvalEssay) {

                ?>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4"><?= $sigm ?></h4>
                                    <?= $detailSoalEvalEssay['pertanyaan_soal'] ?>

                                    <div class="pt-2">
                                        <textarea required name="jawabanMurid[<?= $detailSoalEvalEssay['id_soal'] ?>]" id="jawabanMurid" class="summernote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $sigm = $sigm + 1;
                }
                ?>


            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body sticky">
                        <h4 class="card-title mb-4">WAKTU XXX</h4>
                        <hr>
                        <button type="submit" class="btn btn-primary">KIRIM JAWABAN</button>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>


        </div>


    </div>
    <!-- End Page-content -->

    <?php echo view('halaman_murid/_footerMurid') ?>