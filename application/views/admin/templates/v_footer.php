
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
    </div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/sb-admin/') ?>vendor/jquery/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/sb-admin/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/sb-admin/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/sb-admin/') ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('assets/sb-admin/') ?>vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('assets/sb-admin/') ?>js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url('assets/sb-admin/') ?>js/demo/chart-pie-demo.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url('assets/js/myAlert.js') ?>" ></script>

<script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/') ?>aos.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script type="text/javascript">
    AOS.init({duration: 1500, easing: "ease"});

    $(document).ready(function() {
        $('.table').DataTable();
    } );

    CKEDITOR.replace('editor' ,{
        filebrowserImageBrowseUrl : '<?php echo base_url('assets/kcfinder');?>'
    });

    CKEDITOR.replaceAll('editor_edit' ,{
        filebrowserImageBrowseUrl : '<?php echo base_url('assets/kcfinder');?>'
    });

    CKEDITOR.config.removePlugins = 'elementspath';
</script>
</body>

</html>