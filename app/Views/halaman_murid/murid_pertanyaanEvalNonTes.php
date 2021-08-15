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
                    <h4 class="page-title mb-0 font-size-18">Pertanyaan Evaluasi Non Tes</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">Evaluasi Non Tes</li>
                            <li class="breadcrumb-item active"><?= $detail_evaluasiNonTes['judul_evaluasi'] ?></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-8">
                <?= form_open('Evaluasi_/EvaluasiNonTes/proses_jawaban_evalnontes') ?>
                <input type="hidden" name="idEvalNonTes" value="<?= $detail_evaluasiNonTes['id_evaluasi_non_tes'] ?>">


                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Pertanyaan</th>
                                                <th class="text-center" colspan="4">Skala</th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sigm = 1;
                                            foreach ($listPertanyaan_evalNonTes as $detailPertanyaan) {

                                            ?>
                                                <tr>
                                                    <th scope="row"><?= $sigm ?></th>
                                                    <td><?= $detailPertanyaan['pertanyaan'] ?></td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input required class="form-check-input" type="radio" name="jawaban[<?= $detailPertanyaan['id_pertanyaan'] ?>]" value="1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input required class="form-check-input" type="radio" name="jawaban[<?= $detailPertanyaan['id_pertanyaan'] ?>]" value="2">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input required class="form-check-input" type="radio" name="jawaban[<?= $detailPertanyaan['id_pertanyaan'] ?>]" value="3">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input required class="form-check-input" type="radio" name="jawaban[<?= $detailPertanyaan['id_pertanyaan'] ?>]" value="4">
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                                $sigm = $sigm + 1;
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body sticky">
                        <dl class="row">
                            <dt class="col-sm-3">Judul:</dt>
                            <dd class="col-sm-9"><?= $detail_evaluasiNonTes['judul_evaluasi'] ?></dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Jenis:</dt>
                            <dd class="col-sm-9">
                                <?= $detail_evaluasiNonTes['jenis_evaluasi'] == 'tujuan' ? 'Penilaian Tujuan Pembelajaran' : ''; ?>
                                <?= $detail_evaluasiNonTes['jenis_evaluasi'] == 'peer' ? 'Peer-Assessment' : ''; ?>
                                <?= $detail_evaluasiNonTes['jenis_evaluasi'] == 'self' ? 'Self-Assessment' : ''; ?>
                            </dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-sm-3">Penulis:</dt>
                            <dd class="col-sm-9"><?= $detail_evaluasiNonTes['namalengkap_user'] ?></dd>
                        </dl>
                        <hr>
                        <button type="submit" class="btn btn-primary">KIRIM JAWABAN</button>
                        <?= form_close() ?>
                        <button type="button" id="btn_petunjuk" class="btn btn-info"><i class="bx bx-help-circle"></i> PETUNJUK</button>

                        
                    </div>
                </div>
            </div>


        </div>


    </div>
    <!-- End Page-content -->

    <?php echo view('halaman_murid/_footerMurid') ?>