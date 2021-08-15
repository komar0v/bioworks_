<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>
                    document.write(new Date().getFullYear())
                </script> © Bio Works.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-right d-none d-sm-block">
                    Design & Develop by XXX
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

</div>
<!-- end container-fluid -->

<!-- JAVASCRIPT -->
<script>
    const assetFolder = '<?= base_url('murid_assets') ?>';
</script>
<script src="<?= base_url('murid_assets') ?>/libs/jquery/jquery.min.js"></script>
<script src="<?= base_url('murid_assets') ?>/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('murid_assets') ?>/libs/metismenu/metisMenu.min.js"></script>
<script src="<?= base_url('murid_assets') ?>/libs/simplebar/simplebar.min.js"></script>
<script src="<?= base_url('murid_assets') ?>/libs/node-waves/waves.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.2/sweetalert2.all.min.js"></script>
<script src="<?= base_url('app_assets') ?>/vendors/js/extensions/toastr.min.js"></script>
<script src="<?= base_url('murid_assets') ?>/js/app.js"></script>
<script>
    toastr.options = {
        "progressBar": false,
        "positionClass": "toast-top-center",
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "swing",
        "showMethod": "slideDown",
        "hideMethod": "slideUp"
    }
    <?= session()->getFlashdata('notif') ?>
</script>

<script>
    document.querySelector("#btn_petunjuk").addEventListener('click', function() {
        Swal.fire({
            html: '<p>Penilaian diisi oleh peserta didik sendiri untuk menilai sikap kejujuran, tanggung jawab, disiplin, toleransi dan komunikatif peserta didik. Berilah tanda pada kolom skor sesuai sikap yang ditampilkan oleh peserta didik, dengan kriteria berikut :</p>'+
            '<br>Skor 1	: Kurang'+
            '<br>Skor 2	: Cukup'+
            '<br>Skor 3	: Baik'+
            '<br>Skor 4	: Sangat Baik',
        });
    });
</script>

<script>
    $('.summernote').each(function(i, obj) {
        $(obj).summernote({
            height: "200",
            placeholder: "<h6>jawab disini</h6>",
            toolbar: [
                ['operation', ['undo', 'redo']],
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph', 'height']],
                ['table', ['table']],
            ],
        });
    });
</script>

<script>
    $(window).on('load', function() {
        var portfolioIsotope = $('.evalnontes').isotope({
            itemSelector: '.evalnontes-item',
            layoutMode: 'fitRows'
        });

        $('#card-flters li').on('click', function() {

            portfolioIsotope.isotope({
                filter: $(this).data('filter')
            });
        });

    });
</script>
</body>

</html>