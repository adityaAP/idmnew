 <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="https://ptintandayamdandiri.co.id">PT. Intan Daya Mandiri</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<script src="<?=base_url('assets/admin/plugins/jquery/jquery.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url('assets/admin/plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- Select2 -->
<script src="<?=base_url('assets/admin/plugins/select2/js/select2.full.min.js')?>"></script>
<!-- daterangepicker -->
<script src="<?=base_url('assets/admin/plugins/moment/moment.min.js')?>"></script>
<script src="<?=base_url('assets/admin/plugins/daterangepicker/daterangepicker.js')?>"></script>
<!-- DataTables -->
<script src="<?=base_url('assets/admin/plugins/datatables/jquery.dataTables.js')?>"></script>
<script src="<?=base_url('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url('assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')?>"></script>
<!-- Bootstrap Switch -->
<script src="<?=base_url('assets/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js')?>"></script>

<!-- overlayScrollbars -->
<script src="<?=base_url('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')?>"></script>
<!-- bs-custom-file-input -->
<script src="<?=base_url('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/admin/dist/js/adminlte.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url('assets/admin/dist/js/pages/dashboard.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets/admin/dist/js/demo.js')?>"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>
<!-- ChartJS -->
<script src="<?=base_url('assets/admin/plugins/chart.js/Chart.min.js')?>"></script>
    <!-- InputMask -->
<script src="<?=base_url('assets/admin/plugins/inputmask/min/jquery.inputmask.bundle.min.js')?>"></script>

    <!-- jQuery Mapael -->
<script src="<?=base_url('assets/admin/plugins/jquery-mousewheel/jquery.mousewheel.js')?>"></script>
<script src="<?=base_url('assets/admin/plugins/raphael/raphael.min.js')?>"></script>
<script src="<?=base_url('assets/admin/plugins/jquery-mapael/jquery.mapael.min.js')?>"></script>
<script src="<?=base_url('assets/admin/plugins/jquery-mapael/maps/usa_states.min.js')?>"></script>
<!-- ChartJS -->
<script src="<?=base_url('assets/admin/plugins/chart.js/Chart.min.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?=base_url('assets/admin/dist/js/pages/dashboard2.js')?>"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
<script type="text/javascript">
  $('#datepicker').datepicker({
    format: 'dd-mm-yyyy',
      autoclose: true
    });
     $('.datepicker').datepicker({
    format: 'dd-mm-yyyy',
      autoclose: true
    }); 
</script>
<script>
  $(document).ready(function(){
        $('.pilihtanggal').datepicker({
          dateFormat: 'dd-mm-yy',
          changeYear: true,
          changeMonth: true,
          yearRange: '1970:+20'
        });
    });
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $("#example2").DataTable();
    $(".example3").DataTable();
  });
</script> 
<script type="text/javascript">
    //Initialize Select2 Elements
    $('.select2').select2()
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
      $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
</script>
    <script type="text/javascript">
      $(".inputmask").inputmask({ alias: "datetime", inputFormat: "dd-mm-yyyy"})
      $(".inputmask2").inputmask({ alias: "datetime", inputFormat: "HH:MM"});
    </script> 
</body>
</html>
