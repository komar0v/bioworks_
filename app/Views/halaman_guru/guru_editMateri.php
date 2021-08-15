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
                        <h2 class="content-header-title float-left mb-0">Edit Materi</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    Kelola Materi
                                </li>
                                <li class="breadcrumb-item active">
                                    Edit Materi
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
                                    <?= form_open('Guru/update_materi')?>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input value="<?= $data_materi['id_materi'] ?>" type="text" id="idMateri" class="form-control" readonly name="idMateri">
                                                        <label for="idMateri">ID Materi</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input value="<?= $data_materi['judul_materi'] ?>" type="text" id="judulMateri" class="form-control" placeholder="Judul materi" name="judulMateri">
                                                        <label for="judulMateri">Judul Materi</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <textarea name="konten_materi" id="konten_materi" class="summernote" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                    <?= $data_materi['konten_materi'] ?>
                                                    </textarea>
                                                </div>


                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="card-footer">
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1"><i class="feather icon-save"></i> Simpan</button>
                                    <?= form_close();?>
                                        <div data-toggle="modal" data-target="#modalHapus" class="btn btn-outline-danger mr-1 mb-1"><i class="feather icon-trash-2"></i> Hapus Materi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- MODAL -->
            <div class="modal fade text-left" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel20" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xs" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h4 class="modal-title" id="myModalLabel20">Hapus Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open('Guru/delete_materi'); ?>
                            Materi <?= $data_materi['judul_materi'] ?> akan dihapus dari database. Lanjutkan?
                        </div>
                        <div class="modal-footer">

                            <input type="hidden" name="m_id" value="<?= $data_materi['id_materi'] ?>">
                            <button type="submit" class="btn btn-outline-danger">Ya, hapus</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->

<?php echo view('halaman_guru/_footer') ?>