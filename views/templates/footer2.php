
  <script>
        feather.replace();
    </script>
  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2023 <a href="https://fb.me/aguszakariya">By zack</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= BASEURL; ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= BASEURL; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= BASEURL; ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= BASEURL; ?>/dist/js/adminlte.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= BASEURL; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= BASEURL; ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= BASEURL; ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= BASEURL; ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= BASEURL; ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= BASEURL; ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= BASEURL; ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?= BASEURL; ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= BASEURL; ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= BASEURL; ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= BASEURL; ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= BASEURL; ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- PAGE plugins -->
<!-- jQuery Mapael -->
<script src="<?= BASEURL; ?>/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?= BASEURL; ?>/plugins/raphael/raphael.min.js"></script>
<script src="<?= BASEURL; ?>/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?= BASEURL; ?>/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- Include SweetAlert2 library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?= BASEURL; ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- ChartJS -->
<script src="<?= BASEURL; ?>/plugins/chart.js/Chart.min.js"></script>
<!-- <script src="<?= BASEURL; ?>/dist/js/pages/dashboard2.js"></script> -->

<script>
  $(function () {
    $('#dataTable').DataTable();
    $("#dataTable1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#dataTable1_wrapper .col-md-6:eq(0)');
    $('#dataTable2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });


  });
</script>

</body>
</html>