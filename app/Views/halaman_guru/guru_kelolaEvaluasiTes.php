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
                        <h2 class="content-header-title float-left mb-0">Kelola Evaluasi Tes</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    Dashboard
                                </li>
                                <li class="breadcrumb-item active">
                                    Kelola Evaluasi Tes
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
                            <a class="dropdown-item" href="<?= base_url('Guru/tambah_evaluasi_tes')?>">Tambah Evaluasi Tes</a>
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
                            <h4 class="card-title">Evaluasi</h4>

                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="table-responsive">
                                    <table id="tbl_" class="table">
                                        <thead>
                                            <tr>
                                                <th>Judul Evaluasi Tes</th>
                                                <th>Batas Pengerjaan</th>
                                                <th>Status</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($listEvaluasi as $detailEvaluasi){?>
                                            <tr>
                                                <td><?=$detailEvaluasi['judul_evaluasi']?></td>
                                                <td><?=$detailEvaluasi['batas_pengerjaan']?></td>
                                                <td>
                                                    <?= $detailEvaluasi['status_evaluasi'] == 'nonaktif' ? '<div class="badge badge-pill badge-info">belum aktif</div>' : ''; ?>
                                                    <?= $detailEvaluasi['status_evaluasi'] == 'aktif' ? '<div class="badge badge-pill badge-success">aktif</div>' : ''; ?>
                                                </td>
                                                <td>
                                                    <?= '<button onclick="location.href=\''.base_url('Guru/edit_evaluasi_tes').'/'.$detailEvaluasi['id_evaluasi_tes'].'\';" type="button" class="btn btn-relief-success mr-1 mb-1"> <i class="feather icon-edit-1"></i> Edit</button>'?>
                                                    |
                                                    <?= '<button onclick="location.href=\''.base_url('Evaluasi_/EvaluasiTes/i').'/'.$detailEvaluasi['id_evaluasi_tes'].'\';" type="button" class="btn btn-relief-info mr-1 mb-1"> <i class="feather icon-file-text"></i> Kelola Soal</button>'?>
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