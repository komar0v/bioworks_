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
                        <h2 class="content-header-title float-left mb-0">Tambah Evaluasi Tes</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    Kelola Evaluasi Tes
                                </li>
                                <li class="breadcrumb-item active">
                                    Tambah Evaluasi Tes
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
                                    <?= form_open_multipart('Guru/simpanNewEvaluasiTes'); ?>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Judul Evaluasi</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" id="judulEvaluasi" class="form-control" placeholder="Judul Evaluasi" name="judulEvaluasi">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-bold-600 font-medium-2">
                                                Status
                                            </div>
                                            <p>Aktif: terbuka untuk dikerjakan siswa. Nonaktif: tertutup, belum bisa dikerjakan siswa.</p>
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
                                                        <span>Batas Pengerjaan</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input name="batas_pengerjaan" type="text" class="form-control datetimepicker-input" id="batas_pengerjaan" placeholder="Batas Pengerjaan">
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