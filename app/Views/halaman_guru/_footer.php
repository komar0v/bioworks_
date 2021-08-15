<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021 | All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="<?= base_url('app_assets') ?>/vendors/js/vendors.min.js"></script>
<script src="<?= base_url('app_assets') ?>/vendors/js/forms/select/select2.full.min.js"></script>
<script src="<?= base_url('app_assets') ?>/vendors/js/extensions/toastr.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?= base_url('app_assets') ?>/vendors/js/ui/prism.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?= base_url('app_assets') ?>/js/core/app-menu.js"></script>
<script src="<?= base_url('app_assets') ?>/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>
<script src="<?= base_url('app_assets') ?>/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="<?= base_url('app_assets') ?>/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="<?= base_url('app_assets') ?>/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="<?= base_url('app_assets') ?>/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<script src="<?= base_url('app_assets') ?>/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="<?= base_url('app_assets') ?>/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="<?= base_url('app_assets') ?>/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>
<script src="<?= base_url('app_assets') ?>/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script>
    let date = new Date();
    let getDateTimeNow = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate() + " " + date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
    var namaFile = '<?= session()->getFlashdata('exportFileName') ?>';
    $(document).ready(function() {
        $('#tbl_').DataTable();
        $('.tbl_').DataTable();
        $('#tbl_hasilEval').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'pdfHtml5',
                    className: 'btn-info',
                    text: '<i class="fa fa-file-pdf-o"></i> PDF',
                    title: 'Bioworks '+ namaFile,
                    messageTop: 'Dicetak tanggal '+getDateTimeNow,
                    exportOptions: {
                        columns: ':visible',
                    }
                },
                {
                    extend: 'print',
                    className: 'btn-info',
                    text: '<i class="feather icon-printer"></i> Print',
                    title: 'Bioworks '+ namaFile,
                    messageTop: 'Dicetak tanggal '+getDateTimeNow,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'excel',
                    className: 'btn-info',
                    text: '<i class="fa fa-file-excel-o"></i> Excel',
                    title: 'Bioworks '+ namaFile,
                    messageTop: 'Dicetak tanggal '+getDateTimeNow,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'colvis',
                    className: 'btn-info',
                    text: 'Buang kolom untuk diexport',
                },
            ]
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $('#konten_materi').summernote({
            height: "200",
            placeholder: "<h5>tulis sesuatu disini<br>untuk ukuran file gambar maximal 1MB</h5>",
            callbacks: {
                onImageUpload: function(image) {
                    uploadImage(image[0]);
                }
            },
            toolbar: [
                ['operation', ['undo', 'redo']],
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
            ],
        });

        function uploadImage(image) {
            var data = new FormData();
            data.append("image", image);
            $.ajax({
                url: "<?php echo site_url('Guru/api_imageUpload') ?>",
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "POST",
                success: function(url) {
                    $('#konten_materi').summernote("insertImage", url);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }

    });
</script>

<script>
    $(document).ready(function() {
        $('#pertanyaan_pg').summernote({
            height: "200",
            placeholder: "<h5>tulis sesuatu disini<br>untuk ukuran file gambar maximal 1MB</h5>",
            callbacks: {
                onImageUpload: function(image) {
                    uploadImagePertanyaanPG(image[0]);
                }
            },
            toolbar: [
                ['operation', ['undo', 'redo']],
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
            ],
        });

    });

    function uploadImagePertanyaanPG(image) {
        var data = new FormData();
        data.append("image", image);
        $.ajax({
            url: "<?php echo site_url('Guru/api_imageUpload') ?>",
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: "POST",
            success: function(url) {
                $('#pertanyaan_pg').summernote("insertImage", url);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }

    $(document).ready(function() {
        $('#opsiA').summernote({
            height: "200",
            placeholder: "<h5>tulis sesuatu disini<br>untuk ukuran file gambar maximal 1MB</h5>",
            callbacks: {
                onImageUpload: function(image) {
                    uploadImageOpsiA(image[0]);
                }
            },
            toolbar: [
                ['operation', ['undo', 'redo']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                ['insert', ['picture', 'video']],
            ],
        });
    });

    function uploadImageOpsiA(image) {
        var data = new FormData();
        data.append("image", image);
        $.ajax({
            url: "<?php echo site_url('Guru/api_imageUpload') ?>",
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: "POST",
            success: function(url) {
                $('#opsiA').summernote("insertImage", url);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }

    $(document).ready(function() {
        $('#opsiB').summernote({
            height: "200",
            placeholder: "<h5>tulis sesuatu disini<br>untuk ukuran file gambar maximal 1MB</h5>",
            callbacks: {
                onImageUpload: function(image) {
                    uploadImageopsiB(image[0]);
                }
            },
            toolbar: [
                ['operation', ['undo', 'redo']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                ['insert', ['picture', 'video']],
            ],
        });
    });

    function uploadImageopsiB(image) {
        var data = new FormData();
        data.append("image", image);
        $.ajax({
            url: "<?php echo site_url('Guru/api_imageUpload') ?>",
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: "POST",
            success: function(url) {
                $('#opsiB').summernote("insertImage", url);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }

    $(document).ready(function() {
        $('#opsiC').summernote({
            height: "200",
            placeholder: "<h5>tulis sesuatu disini<br>untuk ukuran file gambar maximal 1MB</h5>",
            callbacks: {
                onImageUpload: function(image) {
                    uploadImageopsiC(image[0]);
                }
            },
            toolbar: [
                ['operation', ['undo', 'redo']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                ['insert', ['picture', 'video']],
            ],
        });
    });

    function uploadImageopsiC(image) {
        var data = new FormData();
        data.append("image", image);
        $.ajax({
            url: "<?php echo site_url('Guru/api_imageUpload') ?>",
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: "POST",
            success: function(url) {
                $('#opsiC').summernote("insertImage", url);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }

    $(document).ready(function() {
        $('#opsiD').summernote({
            height: "200",
            placeholder: "<h5>tulis sesuatu disini<br>untuk ukuran file gambar maximal 1MB</h5>",
            callbacks: {
                onImageUpload: function(image) {
                    uploadImageopsiD(image[0]);
                }
            },
            toolbar: [
                ['operation', ['undo', 'redo']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                ['insert', ['picture', 'video']],
            ],
        });
    });

    function uploadImageopsiD(image) {
        var data = new FormData();
        data.append("image", image);
        $.ajax({
            url: "<?php echo site_url('Guru/api_imageUpload') ?>",
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: "POST",
            success: function(url) {
                $('#opsiD').summernote("insertImage", url);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }

    $(document).ready(function() {
        $('#opsiE').summernote({
            height: "200",
            placeholder: "<h5>tulis sesuatu disini<br>untuk ukuran file gambar maximal 1MB</h5>",
            callbacks: {
                onImageUpload: function(image) {
                    uploadImageopsiE(image[0]);
                }
            },
            toolbar: [
                ['operation', ['undo', 'redo']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                ['insert', ['picture', 'video']],
            ],
        });
    });

    function uploadImageopsiE(image) {
        var data = new FormData();
        data.append("image", image);
        $.ajax({
            url: "<?php echo site_url('Guru/api_imageUpload') ?>",
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: "POST",
            success: function(url) {
                $('#opsiE').summernote("insertImage", url);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>

<script>
    toastr.options = {
        "progressBar": true,
        "timeOut": "3000",
    }
    <?= session()->getFlashdata('notif') ?>
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('#batas_pengerjaan').datetimepicker({
            inline: true,
            minDate: 0
        });
    });
</script>

<script>
    $(function() {
        var hash = window.location.hash;
        hash && $('ul.nav a[href="' + hash + '"]').tab('show');

        $('.nav-tabs a').click(function(e) {
            $(this).tab('show');
            var scrollmem = $('body').scrollTop() || $('html').scrollTop();
            window.location.hash = this.hash;
            $('html,body').scrollTop(scrollmem);
        });
    });
</script>

<?php if (session()->getFlashdata('halaman_periksa_essay') == 'TRUE') { ?>

<script>
        function refreshpage() {
            location.reload();
        }

        $(function() {

            // Ajax form submission
            $('#frm_inputNilaiEssayMurid').on('submit', function(e) {

                e.preventDefault();

                var formData = new FormData(this);
                // OR var formData = $(this).serialize();

                //We can add more values to form data
                //formData.append("key", "value");

                $.ajax({
                    url: "<?= base_url('Evaluasi_/EvaluasiTes/api_update_nilaiessay_murid') ?>",
                    type: "POST",
                    cache: false,
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "JSON",
                    success: function(data) {
                        if (data.success == true) {
                            document.getElementById("btn_simpan").disabled = true;
                            toastr.success("Nilai berhasil disimpan.", "Berhasil!");
                            setTimeout(function(){document.getElementById("btn_simpan").disabled = false;},2500);
                            setTimeout(function(){ refreshpage() }, 3000);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        toastr.error("Nilai gagal disimpan.", "Gagal!");
                    }
                });
            });
        });
</script>
<?php } ?>


<!-- END: Page JS-->



</body>
<!-- END: Body-->

</html>