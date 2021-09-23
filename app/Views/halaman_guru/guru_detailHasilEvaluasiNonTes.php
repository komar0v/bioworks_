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
                        <h2 class="content-header-title float-left mb-0">Detail Hasil Evaluasi Non Tes</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    Dashboard
                                </li>
                                <li class="breadcrumb-item active">
                                    Detail Hasil Evaluasi Non Tes
                                </li>
                                <li class="breadcrumb-item active">
                                    <?= $detailEvaluasiNonTes['judul_evaluasi'] ?>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Evaluasi Non Tes</h4>
                            <p class="small">
                                <?= $detailEvaluasiNonTes['jenis_evaluasi'] == 'tujuan' ? 'Penilaian Tujuan Pembelajaran' : ''; ?>
                                <?= $detailEvaluasiNonTes['jenis_evaluasi'] == 'peer' ? 'Peer-Assessment' : ''; ?>
                                <?= $detailEvaluasiNonTes['jenis_evaluasi'] == 'self' ? 'Self-Assessment' : ''; ?>
                                <?= $detailEvaluasiNonTes['jenis_evaluasi'] == 'umpan' ? 'Penilaian Umpan Balik' : ''; ?>
                            </p>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="table-responsive">
                                    <table id="tbl_hasilEval" class="table">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Nilai</th>
                                                <th>Kategori</th>
                                                <!-- <th>Tindakan</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($list_NilaiEvalNonTes as $detailEvaluasiNonTes) { ?>
                                                <tr>
                                                    <td><?= $detailEvaluasiNonTes['namalengkap_user'] ?></td>
                                                    <td>
                                                        <?= $detailEvaluasiNonTes['nilai_akhir'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $detailEvaluasiNonTes['nilai_akhir'] <= 0.99 ? 'Kurang (K)' : ''; ?>
                                                        <?= $detailEvaluasiNonTes['nilai_akhir'] >= 1 && $detailEvaluasiNonTes['nilai_akhir'] <= 1.99 ? 'Cukup (C)' : ''; ?>
                                                        <?= $detailEvaluasiNonTes['nilai_akhir'] >= 2 && $detailEvaluasiNonTes['nilai_akhir'] <= 2.99 ? 'Baik (B)' : ''; ?>
                                                        <?= $detailEvaluasiNonTes['nilai_akhir'] >= 3 && $detailEvaluasiNonTes['nilai_akhir'] <= 4 ? 'Sangat Baik (SB)' : ''; ?>
                                                    </td>
                                                    <!-- <td>
                                                        <?= 
                                                        //'<button onclick="location.href=\'' . base_url('Guru/detail_evaluasi_non_tes/') . '/' . $detailEvaluasiNonTes['id_evaluasi_non_tes'] . '\';" type="button" class="btn btn-relief-info mr-1 mb-1"> <i class="feather icon-eye"></i> Detail</button>'
                                                        '' ?>
                                                    </td> -->
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