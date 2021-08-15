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
                        <h2 class="content-header-title float-left mb-0">Tambah Materi</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    Kelola Materi
                                </li>
                                <li class="breadcrumb-item active">
                                    Tambah Materi
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
                    <div class="col-12">
                        <div class="card">

                            <div class="card-content">
                                <div class="card-body">
                                <?= form_open_multipart('Guru/simpanNewMateri');?>
                                        <div class="form-body">
                                            <div class="row">
                                                
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input required type="text" id="judulMateri" class="form-control" placeholder="Judul materi" name="judulMateri">
                                                        <label for="judulMateri">Judul Materi</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <textarea name="konten_materi" id="konten_materi" class="summernote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                                </div>


                                            </div>
                                        </div>
                                </div>
                                <div class="card-footer">
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1"><i class="feather icon-save"></i> Simpan</button>
                                <?= form_close();?>
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