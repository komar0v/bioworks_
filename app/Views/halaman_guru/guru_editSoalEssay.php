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
                        <h2 class="content-header-title float-left mb-0">Edit Soal</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    <?= $detail_soal['judul_evaluasi'] ?>
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
                                        <?= form_open_multipart('Evaluasi_/EvaluasiTes/api_update_soalessay')?>
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="text-bold-600 font-medium-2">
                                                    Pertanyaan Essay
                                                </div>
                                                <textarea required name="pertanyaan_essay" id="pertanyaan_pg" class="summernote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                <?= $detail_soal['pertanyaan_soal'] ?>
                                                </textarea>
                                            </div>
                                            <hr>
                                            <div class="col-md-12 col-12">
                                                <div class="text-bold-600 font-medium-2">
                                                    Jawaban Essay
                                                </div>
                                                <textarea required name="jawaban_essay" id="opsiA" class="summernote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                    <?= $detail_soal['jawaban_benar'] ?>
                                                </textarea>
                                            </div>
                                            
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
                                    <input value="<?= $detail_soal['id_soal'] ?>" type="hidden" name="idSoal">
                                    <input value="<?= $detail_soal['id_evaluasi_tes'] ?>" type="hidden" name="eval_id">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1"><i class="feather icon-save"></i> SIMPAN</button>
                                    <?= form_close()?>
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