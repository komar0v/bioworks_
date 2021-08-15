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
                        <h2 class="content-header-title float-left mb-0">
                            Edit Pertanyaan
                            <?= $detail_pertanyaan['jenis_evaluasi'] == 'tujuan' ? 'Penilaian Tujuan Pembelajaran' : ''; ?>
                            <?= $detail_pertanyaan['jenis_evaluasi'] == 'peer' ? 'Peer-Assessment' : ''; ?>
                            <?= $detail_pertanyaan['jenis_evaluasi'] == 'self' ? 'Self-Assessment' : ''; ?>
                        </h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    <?= $detail_pertanyaan['judul_evaluasi'] ?>
                                </li>
                            </ol>
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
                                    <div class="form-body">
                                        <?= form_open_multipart('Evaluasi_/EvaluasiNonTes/api_update_pertanyaan') ?>
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="text-bold-600 font-medium-2">
                                                    Pertanyaan
                                                </div>
                                                <textarea required name="pertanyaan_evalnontes" id="pertanyaan_pg" class="summernote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                    <?=$detail_pertanyaan['pertanyaan']?>
                                                </textarea>
                                            </div>
                                            <hr>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card overflow-hidden">
                            <div class="card-content">
                                <div class="card-body text-center">
                                    <input value="<?= $detail_pertanyaan['id_pertanyaan'] ?>" type="hidden" name="pertanyaan_id">
                                    <input value="<?= $detail_pertanyaan['id_evaluasi_non_tes'] ?>" type="hidden" name="evalnt_id">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1"><i class="feather icon-save"></i> SIMPAN PERUBAHAN</button>
                                    <?= form_close() ?>
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