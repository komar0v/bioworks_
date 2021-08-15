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
                    <h4 class="page-title mb-0 font-size-18">Soal Pilihan Ganda</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">Evaluasi Tes</li>
                            <li class="breadcrumb-item">Pilihan Ganda</li>
                            <li class="breadcrumb-item active"><?= $detailEvalTesPG['judul_evaluasi'] ?></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-8">
            <?= form_open('Evaluasi_/EvaluasiTes/proses_jawaban_pg')?>
            <input type="hidden" name="idEval" value="<?= $detailEvalTesPG['id_evaluasi_tes'] ?>">
                <?php
                $sigm = 1;
                foreach ($listSoalPG_evalTes as $detailSoalEvalPG) {

                ?>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4"><?= $sigm ?></h4>
                                    <?= $detailSoalEvalPG['pertanyaan_soal'] ?>

                                    <div class="pt-2">
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="jawaban[<?= $detailSoalEvalPG['id_soal'] ?>]" id="opsiA<?= $sigm ?>" value="a">
                                            <label class="form-check-label" for="opsiA<?= $sigm ?>">
                                            A. <?= $detailSoalEvalPG['opsi_a'] ?>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="jawaban[<?= $detailSoalEvalPG['id_soal'] ?>]" id="opsiB<?= $sigm ?>" value="b">
                                            <label class="form-check-label" for="opsiB<?= $sigm ?>">
                                            B. <?= $detailSoalEvalPG['opsi_b'] ?>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="jawaban[<?= $detailSoalEvalPG['id_soal'] ?>]" id="opsiC<?= $sigm ?>" value="c">
                                            <label class="form-check-label" for="opsiC<?= $sigm ?>">
                                            C. <?= $detailSoalEvalPG['opsi_c'] ?>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="jawaban[<?= $detailSoalEvalPG['id_soal'] ?>]" id="opsiD<?= $sigm ?>" value="d">
                                            <label class="form-check-label" for="opsiD<?= $sigm ?>">
                                            D. <?= $detailSoalEvalPG['opsi_d'] ?>
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="jawaban[<?= $detailSoalEvalPG['id_soal'] ?>]" id="opsiE<?= $sigm ?>" value="e">
                                            <label class="form-check-label" for="opsiE<?= $sigm ?>">
                                            E. <?= $detailSoalEvalPG['opsi_e'] ?>
                                            </label>
                                        </div>
                                        
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
                        <?= form_close()?>
                    </div>
                </div>
            </div>

            
        </div>


    </div>
    <!-- End Page-content -->

    <?php echo view('halaman_murid/_footerMurid') ?>