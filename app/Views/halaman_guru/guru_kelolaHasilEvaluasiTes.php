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
                        <h2 class="content-header-title float-left mb-0">Kelola Hasil Evaluasi Tes</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    Dashboard
                                </li>
                                <li class="breadcrumb-item active">
                                    Kelola Hasil Evaluasi Tes
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
                            <h4 class="card-title">Hasil Evaluasi</h4>
                            <p class="small">Jika Evaluasi tidak ada disini pastikan Evaluasi sudah ditutup pengerjaannya</p>

                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="table-responsive">
                                    <table id="tbl_" class="table">
                                        <thead>
                                            <tr>
                                                <th>Judul Evaluasi Tes</th>
                                                <th>Batas Pengerjaan</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($listEvaluasi as $detailEvaluasi){?>
                                            <tr>
                                                <td><?=$detailEvaluasi['judul_evaluasi']?></td>
                                                <td><?=$detailEvaluasi['batas_pengerjaan']?></td>
                                                <td>
                                                    <?= '<button onclick="location.href=\''.base_url('Guru/detail_hasil_evaluasi_tes').'/'.$detailEvaluasi['id_evaluasi_tes'].'\';" type="button" class="btn btn-relief-info mr-1 mb-1"> <i class="feather icon-eye"></i> Detail</button>'?>
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