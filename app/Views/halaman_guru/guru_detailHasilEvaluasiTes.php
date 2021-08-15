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
                        <h2 class="content-header-title float-left mb-0">Detail Hasil Evaluasi Tes</h2>
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <button onclick="location.href='<?= base_url('Guru/hasil_eval_pilgan/'.$detailEvaluasi['id_evaluasi_tes']) ?>'" type="button" class="btn mb-1 btn-outline-info btn-lg btn-block">Lihat Hasil Evaluasi Pilihan Ganda</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <!-- Block level buttons with icon -->
                                        <div class="form-group">
                                            <button onclick="location.href='<?= base_url('Guru/hasil_eval_essay/'.$detailEvaluasi['id_evaluasi_tes']) ?>'" type="button" class="btn mb-1 btn-outline-info btn-icon btn-lg btn-block">Lihat Hasil Evaluasi Essay</button>
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
<!-- END: Content-->

<?php echo view('halaman_guru/_footer') ?>