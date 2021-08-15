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
                        <h2 class="content-header-title float-left mb-0">Tambah Guru</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    Dashboard
                                </li>
                                <li class="breadcrumb-item active">
                                    Kelola Guru
                                </li>
                                <li class="breadcrumb-item active">
                                    Tambah Guru
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <!-- Basic Horizontal form layout section start -->
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <?php echo form_open('Admin/simpanNewDataGuru', 'class="form form-horizontal"'); ?>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>User Name</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" id="userName" class="form-control" placeholder="Username" name="userName">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>NIP Guru</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" id="nipGuru" class="form-control" placeholder="NIP Guru" name="nipGuru">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>Nama Lengkap</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" id="namaLengkap" class="form-control" name="namaLengkap" placeholder="Nama Lengkap Guru">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-8 offset-md-4">
                                                <p>Default Password = guru321</p>
                                            </div>
                                            <div class="col-md-8 offset-md-4">
                                                <input type="hidden" name="userid">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">Simpan</button>
                                                <?php echo form_close() ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic Horizontal form layout section end -->


        </div>
    </div>
</div>
<!-- END: Content-->

<?php echo view('halaman_admin/_footer') ?>