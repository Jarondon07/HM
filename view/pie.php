  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Elaborado por: Norma Marrero</b>
    </div>
    <strong><a href="http://minci.gob.ve/2017/11/reinauguran-areas-de-emergencia-y-oncologia-del-hospital-militar-dr-carlos-arvelo/" target="_blank">Hospital Militar "Dr. Carlos Arvelo"</a> 2018.</strong>
  </footer>

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<script src="../theme/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../theme/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../theme/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../theme/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../theme/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../theme/dist/js/demo.js"></script>
<!-- bootstrap datepicker -->
<script src="../theme/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Page script -->
<!-- InputMask -->
<script src="../theme/plugins/input-mask/jquery.inputmask.js"></script>
<script src="../theme/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../theme/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../theme/plugins/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" scr="../theme/plugins/datepicker/locales/bootstrap-datepicker.es.js" charset = "UTF-8"></script>
<!-- bootstrap color picker -->
<script src="../theme/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../theme/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script>
  $(function () {
   
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      language: 'es',
      format: 'yyyy-mm-dd',
      clearBtn: true,
      todayHighlight: true,
      endDate: '-0d'
    }).datepicker("setDate", new Date());

  });
</script>