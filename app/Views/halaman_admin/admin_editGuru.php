<?php echo view('halaman_admin/_header') ?>

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Edit Guru</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    Dashboard
                                </li>
                                <li class="breadcrumb-item active">
                                    Kelola Guru
                                </li>
                                <li class="breadcrumb-item active">
                                    Edit Guru
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <?php echo form_open('Admin/simpanEditedDataGuru', 'class="form form-horizontal"'); ?>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>User Name</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input value="<?= $detail_guru['user_name'] ?>" type="text" id="userName" class="form-control" placeholder="Username" name="userName">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>NIP Guru</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input value="<?= $detail_guru['nip_guru'] ?>" type="text" id="nipGuru" class="form-control" placeholder="NIP Guru" name="nipGuru">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Nama Lengkap</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input value="<?= $detail_guru['namalengkap_user'] ?>" type="text" id="namaLengkap" class="form-control" name="namaLengkap" placeholder="Nama Lengkap Guru">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 offset-md-4">
                                                <input type="hidden" name="userid" value="<?= $detail_guru['user_id'] ?>">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">Simpan Perubahan</button>
                                                <?php echo form_close(); ?>
                                                <div data-toggle="modal" data-target="#modalHapus" class="btn btn-outline-danger mr-1 mb-1">Hapus Data</div>

                                            </div>
                                        </div>
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
                            <?php echo form_open('Admin/hapusDataGuru'); ?>
                            Data guru <?= $detail_guru['namalengkap_user'] ?> akan dihapus dari database. Lanjutkan?
                        </div>
                        <div class="modal-footer">

                            <input type="hidden" name="u_id" value="<?= $detail_guru['user_id'] ?>">
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

<?php echo view('halaman_admin/_footer') ?>