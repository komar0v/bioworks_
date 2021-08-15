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
                                        <?= form_open_multipart('Evaluasi_/EvaluasiTes/api_update_soalpg')?>
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="text-bold-600 font-medium-2">
                                                    Pertanyaan
                                                </div>
                                                <textarea required name="pertanyaan_pg" id="pertanyaan_pg" class="summernote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $detail_soal['pertanyaan_soal'] ?></textarea>
                                            </div>
                                            <hr>

                                            <div class="col-md-6 col-12">
                                                <div class="text-bold-600 font-medium-2">
                                                    pilihan A
                                                </div>
                                                <textarea required name="opsiA" id="opsiA" class="summernote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $detail_soal['opsi_a'] ?></textarea>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="text-bold-600 font-medium-2">
                                                    pilihan B
                                                </div>
                                                <textarea required name="opsiB" id="opsiB" class="summernote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $detail_soal['opsi_b'] ?></textarea>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="text-bold-600 font-medium-2">
                                                    pilihan C
                                                </div>
                                                <textarea required name="opsiC" id="opsiC" class="summernote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $detail_soal['opsi_c'] ?></textarea>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="text-bold-600 font-medium-2">
                                                    pilihan D
                                                </div>
                                                <textarea required name="opsiD" id="opsiD" class="summernote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $detail_soal['opsi_d'] ?></textarea>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="text-bold-600 font-medium-2">
                                                    pilihan E
                                                </div>
                                                <textarea required name="opsiE" id="opsiE" class="summernote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $detail_soal['opsi_e'] ?></textarea>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="text-bold-600 font-medium-2">
                                                    KUNCI JAWABAN
                                                </div>
                                                <select required class="form-control" name="kunciJawaban" id="kunciJawaban">
                                                    <option <?= $detail_soal['jawaban_benar']=="a" ? 'selected' : ''; ?> value="a">a</option>
                                                    <option <?= $detail_soal['jawaban_benar'] == "b" ? 'selected' : ''; ?> value="b">b</option>
                                                    <option <?= $detail_soal['jawaban_benar'] == "c" ? 'selected' : ''; ?> value="c">c</option>
                                                    <option <?= $detail_soal['jawaban_benar'] == "d" ? 'selected' : ''; ?> value="d">d</option>
                                                    <option <?= $detail_soal['jawaban_benar'] == "e" ? 'selected' : ''; ?>value="e">e</option>
                                                </select>
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
                                    <input value="<?= $detail_soal['id_evaluasi_tes'] ?>" type="hidden" name="eval_id">
                                    <input value="<?= $detail_soal['id_soal'] ?>" type="hidden" name="soal_id">
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