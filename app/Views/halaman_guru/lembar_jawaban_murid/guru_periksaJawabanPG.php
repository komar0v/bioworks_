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
                        <h2 class="content-header-title float-left mb-0">Detail Evaluasi Tes Pilihan Ganda</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    <?= $detailEvaluasi['judul_evaluasi'] ?>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="content-body">

            <div class="row">
                <div class="col-8">

                    <?php
                    $sigm = 1;
                    foreach ($listSoal_jwbn_murid as $detailJwbnPGMurid) {

                    ?>
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <h4 class="card-title"><?= $sigm ?></h4>
                                            <?= $detailJwbnPGMurid['pertanyaan_soal'] ?>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <fieldset>
                                                            <div class="vs-radio-con vs-radio-primary">
                                                                <input <?= $detailJwbnPGMurid['jawaban_murid'] == 'a' ? 'checked' : ''; ?> disabled type="radio" name="opsi[<?= $detailJwbnPGMurid['id_soal'] ?>]" value="false">
                                                                <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                </span>
                                                                <p class="">A. <?= $detailJwbnPGMurid['opsi_a'] ?></p>
                                                            </div>

                                                            <div class="vs-radio-con vs-radio-primary">
                                                                <input <?= $detailJwbnPGMurid['jawaban_murid'] == 'b' ? 'checked' : ''; ?> disabled type="radio" name="opsi[<?= $detailJwbnPGMurid['id_soal'] ?>]" value="false">
                                                                <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                </span>
                                                                <p class="">B. <?= $detailJwbnPGMurid['opsi_b'] ?></p>
                                                            </div>

                                                            <div class="vs-radio-con vs-radio-primary">
                                                                <input <?= $detailJwbnPGMurid['jawaban_murid'] == 'c' ? 'checked' : ''; ?> disabled type="radio" name="opsi[<?= $detailJwbnPGMurid['id_soal'] ?>]" value="false">
                                                                <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                </span>
                                                                <p class="">C. <?= $detailJwbnPGMurid['opsi_c'] ?></p>
                                                            </div>

                                                            <div class="vs-radio-con vs-radio-primary">
                                                                <input <?= $detailJwbnPGMurid['jawaban_murid'] == 'd' ? 'checked' : ''; ?> disabled type="radio" name="opsi[<?= $detailJwbnPGMurid['id_soal'] ?>]" value="false">
                                                                <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                </span>
                                                                <p class="">D. <?= $detailJwbnPGMurid['opsi_d'] ?></p>
                                                            </div>

                                                            <div class="vs-radio-con vs-radio-primary">
                                                                <input <?= $detailJwbnPGMurid['jawaban_murid'] == 'e' ? 'checked' : ''; ?> disabled type="radio" name="opsi[<?= $detailJwbnPGMurid['id_soal'] ?>]" value="false">
                                                                <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                </span>
                                                                <p class="">E. <?= $detailJwbnPGMurid['opsi_e'] ?></p>
                                                            </div>
                                                            
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="h6 text-center">KUNCI JAWABAN = <?=$detailJwbnPGMurid['jawaban_benar']?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        $sigm = $sigm + 1;
                    }
                    ?>

                </div>

                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-text">
                                <dl class="row">
                                    <dt class="col-sm-3">Nama:</dt>
                                    <dd class="col-sm-9"><?= $detailMurid['namalengkap_user'] ?></dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-sm-3">NIS:</dt>
                                    <dd class="col-sm-9"><?= $detailMurid['nis_murid'] ?></dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-sm-3">
                                        <h4 class="card-title mb-2">Nilai</h4>
                                    </dt>
                                    <dd class="col-sm-9">
                                        <h4 class="primary"><?= $nilaiEvalMurid['nilai_pg'] ?></h4>
                                    </dd>
                                </dl>
                            </div>

                            <button type="submit" class="btn btn-success" onclick="history.back();"> <i class="feather icon-arrow-left"></i> Kembali</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- END: Content-->

<?php echo view('halaman_guru/_footer') ?>