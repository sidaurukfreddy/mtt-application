<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 0.0.1 Beta Realese
    </div>
    <?php echo systems('admin_footer') ?>
</footer>

<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() ?>resources/backend/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() ?>resources/backend/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>resources/backend/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>resources/backend/plugins/fastclick/fastclick.js"></script>
<!-- Highcharts -->
<script src="<?php echo base_url() ?>resources/backend/dist/js/highcharts.js"></script>
<script src="<?php echo base_url() ?>resources/backend/dist/js/exporting.js"></script>
<script src="<?php echo base_url() ?>resources/backend/dist/js/visitor.js"></script>
<!-- Tinymce -->
<script src="<?php echo base_url() ?>resources/backend/plugins/tinymce/tinymce.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>resources/backend/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>resources/backend/dist/js/demo.js"></script>
<script>
    tinymce.init({ selector:'textarea#post' });

    window.base_url = <?php echo json_encode(base_url()); ?>;

    <?php if(isset($js_ready)) { echo $js_ready; } ?>

</script>
</body>
</html>