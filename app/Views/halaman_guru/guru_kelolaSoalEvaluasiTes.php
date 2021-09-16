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
                        <h2 class="content-header-title float-left mb-0">Soal</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    <?= $detail_evaluasi['judul_evaluasi'] ?>
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
                            <a class="dropdown-item" href="<?= base_url('Evaluasi_/EvaluasiTes/soal_PG_baru').'/'.$detail_evaluasi['id_evaluasi_tes']?>">Tambah Soal PG</a>
                            <a class="dropdown-item" href="<?= base_url('Evaluasi_/EvaluasiTes/soal_Essay_baru').'/'.$detail_evaluasi['id_evaluasi_tes'] ?>">Tambah Soal ESSAY</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">

            <!-- Nav Filled Starts -->
            <section id="nav-filled">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card overflow-hidden">
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="soal_PG" data-toggle="tab" href="#soalPG" role="tab" aria-controls="soalPG" aria-selected="true">PILIHAN GANDA</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="soal_ESSAY" data-toggle="tab" href="#soalESSAY" role="tab" aria-controls="soalESSAY" aria-selected="false">ESSAY</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content pt-1">
                                        <div class="tab-pane active" id="soalPG" role="tabpanel" aria-labelledby="soal_PG">
                                            <div class="table-responsive">
                                                <table id="tbl_" class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Pertanyaan</th>
                                                            <th>OPSI</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php foreach($list_soalEvaluasiTesPG as $detailSoalEvaluasi){?>
                                                        <tr>
                                                            <td><?php
                                                            $string = explode(" ", strip_tags($detailSoalEvaluasi['pertanyaan_soal']));
                                                            $ambil3kata = implode(" ", array_splice($string, 0, 3));
                                                            echo ($ambil3kata);
                                                            ?>...</td>
                                                            <td><?= '<button onclick="location.href=\''.base_url('Evaluasi_/EvaluasiTes/e').'/'.$detailSoalEvaluasi['id_soal'].'\';" type="button" class="btn btn-relief-success mr-1 mb-1"> <i class="feather icon-edit-1"></i> Edit</button>'?></td>
                                                        </tr>
                                                    <?php }?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="soalESSAY" role="tabpanel" aria-labelledby="soal_ESSAY">
                                            <div class="table-responsive">
                                                <table id="tbl_" class="table tbl_">
                                                    <thead>
                                                        <tr>
                                                            <th>Pertanyaan</th>
                                                            <th>OPSI</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php foreach($list_soalEvaluasiTesEssay as $detailSoalEvaluasiEssay){?>
                                                        <tr>
                                                            <td><?php
                                                            $ambil3kata = word_limiter(strip_tags($detailSoalEvaluasiEssay['pertanyaan_soal']),3);
                                                            echo ($ambil3kata);
                                                            ?>...</td>
                                                            <td><?= '<button onclick="location.href=\''.base_url('Evaluasi_/EvaluasiTes/ee').'/'.$detailSoalEvaluasiEssay['id_soal'].'\';" type="button" class="btn btn-relief-success mr-1 mb-1"> <i class="feather icon-edit-1"></i> Edit</button>'?></td>
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
            </section>
            <!-- Nav Filled Ends -->

        </div>
    </div>
</div>
<!-- END: Content-->

<?php echo view('halaman_guru/_footer') ?>