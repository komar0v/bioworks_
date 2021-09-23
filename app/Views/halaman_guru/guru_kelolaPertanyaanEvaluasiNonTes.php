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
                        <h2 class="content-header-title float-left mb-0">Pertanyaan</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                <?= $detail_evaluasiNonTes['jenis_evaluasi'] == 'tujuan' ? 'Penilaian Tujuan Pembelajaran' : ''; ?>
                                <?= $detail_evaluasiNonTes['jenis_evaluasi'] == 'peer' ? 'Peer-Assessment' : ''; ?>
                                <?= $detail_evaluasiNonTes['jenis_evaluasi'] == 'self' ? 'Self-Assessment' : ''; ?>
                                <?= $detail_evaluasiNonTes['jenis_evaluasi'] == 'umpan' ? 'Penilaian Umpan Balik' : ''; ?>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-plus"></i></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?= base_url('Evaluasi_/EvaluasiNonTes/pertanyaan_baru/'.$detail_evaluasiNonTes['id_evaluasi_non_tes']) ?>">Tambah Pertanyaan</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="table-responsive">
                                    <table id="tbl_" class="table">
                                        <thead>
                                            <tr>
                                                <th>Pertanyaan</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($list_pertanyaanEvaluasiNonTes as $detailPertanyaanEvalNonTes) { ?>
                                                <tr>
                                                    <td><?= word_limiter(strip_tags($detailPertanyaanEvalNonTes['pertanyaan']),3) ?>
                                                    ...
                                                    </td>
                                                    <td>
                                                        <?= '<button onclick="location.href=\'' . base_url('Evaluasi_/EvaluasiNonTes/e') . '/' . $detailPertanyaanEvalNonTes['id_pertanyaan'] . '\';" type="button" class="btn btn-relief-success mr-1 mb-1"> <i class="feather icon-edit-1"></i> Edit</button>' ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- END: Content-->

<?php echo view('halaman_guru/_footer') ?>