<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Sistema de Ordem de Serviço <?php echo date('Y') ?> | By João Paulo Santos</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<!-- Bootstrap core JavaScript-->
<script src=" <?php echo base_url('public/vendor/jquery/jquery.min.js'); ?> "></script>
<script src=" <?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?> "></script>

<!-- Core plugin JavaScript-->
<script src=" <?php echo base_url('public/vendor/jquery-easing/jquery.easing.min.js'); ?> "></script>

<!-- Custom scripts for all pages-->
<script src=" <?php echo base_url('public/js/sb-admin-2.min.js'); ?> "></script>



<?php
if (isset($scripts)) {
    foreach ($scripts as $script) {
        echo '<script src="' . base_url('public/' . $script) . '"></script>';
    }
}
?>

</body>

</html>