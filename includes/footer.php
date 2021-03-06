<?php

$base_url = "http://localhost/live-pesa/";
$asset_url = $base_url."assets/";
$upload_url = $base_url."uploads";

?>



  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright <?php echo date("Y"); ?> LIVE-PESA</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo $asset_url; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo $asset_url; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo $asset_url; ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $asset_url; ?>dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo $asset_url; ?>dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo $asset_url; ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo $asset_url; ?>plugins/raphael/raphael.min.js"></script>
<script src="<?php echo $asset_url; ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo $asset_url; ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo $asset_url; ?>plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?php echo $asset_url; ?>dist/js/pages/dashboard2.js"></script>
</body>
</html>
