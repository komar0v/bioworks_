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
                        <h2 class="content-header-title float-left mb-0">Hasil Evaluasi Tes Essay</h2>
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
                <div class="col-12">
                    <div class="card">
                        
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="table-responsive">
                                    <table id="tbl_hasilEval" class="table">
                                        <thead>
                                            <tr>
                                                <th>Murid</th>
                                                <th>Nilai</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($listNilaiMurid as $detailNilai){?>
                                            <tr>
                                                <td><?=$detailNilai['namalengkap_user']?></td>
                                                <td><?= $detailNilai['nilai_essay'] != null ? ''.$detailNilai['nilai_essay'].'' : '<div class="badge badge-warning">belum dinilai</div>'; ?></td>
                                                <td>
                                                    <?= '<button onclick="location.href=\''.base_url('Evaluasi_/DetailEvaluasiTes/essay').'/'.$detailNilai['id_evaluasi_tes'].'/'.$detailNilai['id_murid'].'\';" type="button" class="btn btn-relief-success mr-1 mb-1"> <i class="feather icon-info"></i> Detail</button>'?>
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