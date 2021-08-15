<?php echo view('halaman_murid/_headerMurid') ?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Detail Evaluasi Tes</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">Evaluasi Tes</li>
                            <li class="breadcrumb-item active"><?= $detail_evaluasi['judul_evaluasi'] ?></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Banyak Soal</h4>

                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div id="donut-chart" class="apex-charts"></div>
                                <script>
                                    options = {
                                        series: [<?= $banyakSoalPG ?>, <?= $banyakSoalEssay ?>],
                                        chart: {
                                            height: 230,
                                            type: "donut"
                                        },
                                        labels: ["Soal PG", "Soal Essay"],
                                        plotOptions: {
                                            pie: {
                                                donut: {
                                                    size: "65%"
                                                }
                                            }
                                        },
                                        legend: {
                                            show: !1
                                        },
                                        colors: ["#312ECA", "#ED4776"]
                                    };
                                    (chart = new ApexCharts(document.querySelector("#donut-chart"), options)).render();
                                </script>
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="py-3">
                                                <p class="mb-1"><i style="color: #312ECA;" class="mdi mdi-circle mr-1"></i>Soal PG</p>
                                                <h5><?= $banyakSoalPG ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="py-3">
                                                <p class="mb-1"><i style="color: #ED4776;" class="mdi mdi-circle mr-1"></i>Soal Essay</p>
                                                <h5><?= $banyakSoalEssay ?></h5>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Detail Evaluasi Tes</h4>
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5>Judul : </h5>
                                        </td>
                                        <td class="text-right">
                                            <h5><?= $detail_evaluasi['judul_evaluasi'] ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Batas Pengerjaan : </h5>
                                        </td>
                                        <td class="text-right">
                                            <h5><i class="dripicons-clock"></i> <?= $detail_evaluasi['batas_pengerjaan'] ?></h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <button <?= $soalEvalTesPGPernahDikerjakankah == 'y' ? 'disabled' : ''; ?> data-toggle="modal" data-target="#modalMulaiPG" class="btn btn-info waves-effect waves-light">Mulai Pilihan Ganda</button>
                            <button <?= $soalEvalTesEssayPernahDikerjakankah == 'y' ? 'disabled' : ''; ?> data-toggle="modal" data-target="#modalMulaiEssay" class="btn btn-info waves-effect waves-light">Mulai Essay</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL MULAI PG -->
        <div class="modal fade bs-example-modal-center" id="modalMulaiPG" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0">Soal Pilihan Ganda</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-0">
                            Setelah klik tombol dibawah ini, maka evaluasi tes untuk pilihan ganda akan dimulai dan tidak bisa dibatalkan. Harap dikerjakan hingga selesai🙏
                        </p>
                    </div>
                    
                    <button onclick="window.location='<?= base_url('Evaluasi_/EvaluasiTes/pilgan/' . $detail_evaluasi['id_evaluasi_tes']) ?>'" class="btn btn-info waves-effect waves-light">Mulai kerjakan Pilihan Ganda</button>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- MODAL MULAI ESSAY -->
        <div class="modal fade bs-example-modal-center" id="modalMulaiEssay" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0">Soal Essay</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-0">
                            Setelah klik tombol dibawah ini, maka evaluasi tes untuk pilihan ganda akan dimulai dan tidak bisa dibatalkan. Harap dikerjakan hingga selesai🙏
                        </p>
                    </div>
                    
                    <button onclick="window.location='<?= base_url('Evaluasi_/EvaluasiTes/essay/' . $detail_evaluasi['id_evaluasi_tes']) ?>'" class="btn btn-info waves-effect waves-light">Mulai kerjakan Pilihan Ganda</button>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

    </div>
    <!-- End Page-content -->

    <?php echo view('halaman_murid/_footerMurid') ?>