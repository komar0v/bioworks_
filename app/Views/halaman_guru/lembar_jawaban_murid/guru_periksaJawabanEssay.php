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
                        <h2 class="content-header-title float-left mb-0">Detail Evaluasi Tes Essay</h2>
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
                    foreach ($listSoal_jwbn_murid as $detailJwbnEssayMurid) {

                    ?>
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <h4 class="card-title"><?= $sigm ?></h4>
                                            <?= $detailJwbnEssayMurid['pertanyaan_soal'] ?>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <?= $detailJwbnEssayMurid['jawaban_murid'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div id="accordionWrapa<?= $sigm ?>" role="tablist" aria-multiselectable="true">
                                            <div class="card collapse-icon accordion-icon-rotate">

                                                <div class="accordion-default collapse-bordered">
                                                    <div class="card collapse-header">
                                                        <div id="heading<?= $sigm ?>" class="card-header collapse-header" data-toggle="collapse" role="button" data-target="#accordion<?= $sigm ?>" aria-expanded="false" aria-controls="accordion1">
                                                            <span class="lead text-center collapse-title">
                                                                <p class="h6 ">KUNCI JAWABAN</p>
                                                            </span>
                                                        </div>
                                                        <div id="accordion<?= $sigm ?>" role="tabpanel" data-parent="#accordionWrapa<?= $sigm ?>" aria-labelledby="heading<?= $sigm ?>" class="collapse">
                                                            <div class="card-content">
                                                                <div class="card-body">

                                                                    <?= $detailJwbnEssayMurid['jawaban_benar'] ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

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
                                    <form class="form-horizontal" action="javascript:void(0)" id="frm_inputNilaiEssayMurid">
                                        <input class="form-control" type="number" name="nilaiEvalTesEssay" value="<?= $nilaiEvalMurid['nilai_essay'] ?>" id="nilaiEvalTesEssay">
                                        <input type="hidden" name="idMurid" id="idMurid" value="<?= $detailMurid['user_id']?>">
                                    </dd>
                                </dl>
                            </div>

                            <button type="button" class="btn btn-success" onclick="history.back();"> <i class="feather icon-arrow-left"></i> Kembali</button>
                            <button type="submit" class="btn btn-primary" id="btn_simpan"> <i class="feather icon-save"></i> Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- END: Content-->

<?php echo view('halaman_guru/_footer') ?>