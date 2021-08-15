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
                        <h2 class="content-header-title float-left mb-0">Kelola Materi</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    Dashboard
                                </li>
                                <li class="breadcrumb-item active">
                                    Kelola Materi
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-plus"></i></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?= base_url('Guru/tambah_materi')?>">Tambah Materi</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Guru</h4>

                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="table-responsive">
                                    <table id="tbl_" class="table">
                                        <thead>
                                            <tr>
                                                <th>Judul Mater</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($list_materi as $detailMateri){?>
                                            <tr>
                                                <td><?= $detailMateri['judul_materi']?></td>
                                                <td><?= '<button onclick="location.href=\''.base_url('Guru/edit_materi').'/'.$detailMateri['id_materi'].'\';" type="button" class="btn btn-relief-success mr-1 mb-1"> <i class="feather icon-eye"></i> Detail</button>'?></td>
                                            </tr>
                                        <?php }?>
                                            
                                        </tbody>
                                    </table>
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