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
                        <h2 class="content-header-title float-left mb-0">Tambah Evaluasi Non Tes</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    Kelola Evaluasi Non Tes
                                </li>
                                <li class="breadcrumb-item active">
                                    Tambah Evaluasi Non Tes
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <section>
                <div class="row match-height">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <?= form_open_multipart('Guru/simpanNewEvaluasiNonTes'); ?>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Judul Evaluasi Non Tes</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input required type="text" id="judulEvaluasiNonTes" class="form-control" placeholder="Judul Evaluasi" name="judulEvaluasiNonTes">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-bold-600 font-medium-2">
                                                Status
                                            </div>
                                            <p>Aktif: terbuka untuk diisi oleh siswa. Nonaktif: tertutup, belum bisa diisi oleh siswa.</p>
                                            <fieldset class="form-group">
                                                <select class="form-control" name="status_evaluasi" id="status_evaluasi">
                                                    <option value="nonaktif">Nonaktif</option>
                                                    <option value="aktif">Aktif</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Jenis Evaluasi Non Tes</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <fieldset class="form-group">
                                                            <select required class="form-control" name="jenis_evalNontes" id="jenis_evalNontes">
                                                                <option value="">-pilih-</option>
                                                                <option value="tujuan">Penilaian Tujuan Pembelajaran</option>
                                                                <option value="peer">Peer-Assessment</option>
                                                                <option value="self">Self-Assessment</option>
                                                            </select>
                                                        </fieldset>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1"><i class="feather icon-save"></i> Simpan</button>
                                        <?= form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->

<?php echo view('halaman_guru/_footer') ?>