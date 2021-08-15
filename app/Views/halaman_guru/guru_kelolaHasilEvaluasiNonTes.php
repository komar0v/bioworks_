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
                        <h2 class="content-header-title float-left mb-0">Kelola Hasil Evaluasi Non Tes</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    Dashboard
                                </li>
                                <li class="breadcrumb-item active">
                                    Kelola Hasil Evaluasi Non Tes
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
                            <p class="small">Jika Evaluasi Non Tes tidak ada disini pastikan Evaluasi Non Tes sudah ditutup pengisiannya</p>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="table-responsive">
                                    <table id="tbl_" class="table">
                                        <thead>
                                            <tr>
                                                <th>Judul Evaluasi</th>
                                                <th>Status</th>
                                                <th>Jenis</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($listEvaluasiNonTes as $detailEvaluasi){?>
                                            <tr>
                                                <td><?=$detailEvaluasi['judul_evaluasi']?></td>
                                                <td>
                                                    <?= $detailEvaluasi['status_evaluasi'] == 'nonaktif' ? '<div class="badge badge-pill badge-info">belum aktif</div>' : ''; ?>
                                                    <?= $detailEvaluasi['status_evaluasi'] == 'aktif' ? '<div class="badge badge-pill badge-success">aktif</div>' : ''; ?>
                                                </td>
                                                <td>
                                                    <?= $detailEvaluasi['jenis_evaluasi'] == 'tujuan' ? '<div style="background-color: #202124;" class="badge badge-pill">Penilaian Tujuan Pembelajaran</div>' : ''; ?>
                                                    <?= $detailEvaluasi['jenis_evaluasi'] == 'peer' ? '<div style="background-color: #312ECA;"  class="badge badge-pill">Peer-Assessment</div>' : ''; ?>
                                                    <?= $detailEvaluasi['jenis_evaluasi'] == 'self' ? '<div style="background-color: #ED4878;" class="badge badge-pill">Self-Assessment</div>' : ''; ?>
                                                </td>
                                                <td>
                                                    <?= '<button onclick="location.href=\''.base_url('Guru/detail_evaluasi_non_tes/').'/'.$detailEvaluasi['id_evaluasi_non_tes'].'\';" type="button" class="btn btn-relief-info mr-1 mb-1"> <i class="feather icon-eye"></i> Detail</button>'?>
                                                </td>
                                            </tr>
                                        <?php }?>
                                            
                                            
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