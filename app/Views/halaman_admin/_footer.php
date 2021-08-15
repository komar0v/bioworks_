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

<?php if (base_url(uri_string()) == base_url('Admin/tentang_app')) { ?>

    <!-- TENTANG PAGE-->
<?php } ?>

<?php if (base_url(uri_string()) == base_url('Admin/kelola_guru') || base_url(uri_string()) == base_url('Admin/kelola_murid')) { ?>
    <script>
        $(document).ready(function() {
            $('#tbl_').DataTable();
        });
    </script>
    <script src="<?= base_url('app_assets') ?>/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?= base_url('app_assets') ?>/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?= base_url('app_assets') ?>/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url('app_assets') ?>/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<?php } ?>

<script>
    toastr.options = {
        "progressBar": true,
        "timeOut": "3000",
    }
    <?= session()->getFlashdata('notif') ?>
</script>
<!-- END: Page JS-->



</body>
<!-- END: Body-->

</html>