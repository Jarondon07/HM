<!DOCTYPE html>
<html>
<!--//aqui va cabecera-->
<?php
  include("cabecera.php");
?>
<!-- ADD THE CLASS sidedar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<!-- // aqui va encabezado-->
<?php
  include("encabezado.php");
?>
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
<!--  // aqui va menu-->
  <?php
  include("menu.php");
?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      DEPARTAMENTO DE REGISTROS Y ESTADISTICAS DE SALUD
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          
        
        <!-- /.box-header -->
        
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <div align="center" class="box-header with-border">
              <h6  class="box-title">Resumen Diario de Pacientes Atendidos en Consulta Externa</h6>
            </div>
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Servicio</label>
                      <select class="form-control">
                        <option>Seleccionar</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        
                      </select>
                    </div>
                  </div>
                
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Departamento</label>
                      <input type="email" class="form-control" disabled="exampleInputEmail" placeholder="">
                    </div>
                  </div>
                
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Fecha:</label>
                      <div class="input-group date">
                        <div class="input-group-addon" >
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker" readonly >
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Médico</label>
                      <select class="form-control" id="medico<?php //echo $i;?>" name="medico<?php //echo $i;?>">
                        <option>option 2</option>
                        <option>option 3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover table-bordered">
                    <tbody>
                      <tr>
                        <th rowspan="2" class="text-center">FUERZA</th>
                        <th rowspan="2" class="text-center">GRADO</th>
                        <th colspan="2" class="text-center">PRIMERA</th>
                        <th colspan="2" class="text-center">SUCESIVA</th>
                        <th colspan="3" class="text-center">TOTAL</th>
                      </tr>
                      <tr>
                        <th class="">FEM</th>
                        <th class="text-center">MAS</th>
                        <th class="text-center">FEM</th>
                        <th class="text-center">MAS</th>
                        <th class="text-center">FEM</th>
                        <th class="text-center">MAS</th>
                        <th class="text-center">TOTAL</th>
                      </tr>
                      <?php
                      for ($i=0; $i < 5; $i++) 
                      {
                      ?>
                      <tr>
                        <td>
                          <select class="form-control" id="fuerza<?php //echo $i;?>" name="fuerza<?php //echo $i;?>">
                          <option>option 2</option> 
                          <div id="campoFuerza<?php //echo $i;?>" class="text-center">Debes Seleccionar la FUERZA</div>     
                        </td>
                        <td>
                          <select class="form-control" id="grado<?php //echo $i;?>" name="grado<?php //echo $i;?>">
                          <option>option 2</option>
                          <div id="campoGrado<?php //echo $i;?>" class="text-center">Debes Seleccionar el GRADO</div>
                        </td>
                        <td>
                          <input type="text" name="primera_femenino<?php //echo $i;?>" id="primera_femenino<?php //echo $i;?>" onchange="Calcular()" maxlength="2" size="3" class="form-control solo-numero" placeholder="0">
                        </td>
                        <td>
                          <input type="text" name="primera_femenino<?php //echo $i;?>" id="primera_femenino<?php //echo $i;?>" onchange="Calcular()" maxlength="2" class="form-control solo-numero" placeholder="0">
                        </td>
                        <td>
                          <input type="text" name="primera_femenino<?php //echo $i;?>" id="primera_femenino<?php //echo $i;?>" onchange="Calcular()" maxlength="2" class="form-control solo-numero" placeholder="0">
                        </td>
                        <td>
                          <input type="text" name="primera_femenino<?php //echo $i;?>" id="primera_femenino<?php //echo $i;?>" onchange="Calcular()" maxlength="2" class="form-control solo-numero" placeholder="0">
                        </td>
                        <td>
                          <input type="text" name="primera_femenino<?php //echo $i;?>" id="primera_femenino<?php //echo $i;?>" onchange="Calcular()" maxlength="2" class="form-control solo-numero" placeholder="0">
                        </td>
                        <td>
                          <input type="text" name="primera_femenino<?php //echo $i;?>" id="primera_femenino<?php //echo $i;?>" onchange="Calcular()" maxlength="2" class="form-control solo-numero" placeholder="0">
                        </td>
                        <td>
                          <input type="text" name="primera_femenino<?php //echo $i;?>" id="primera_femenino<?php //echo $i;?>" onchange="Calcular()" maxlength="2" class="form-control solo-numero" placeholder="0">
                        </td>                 
                      </tr>
                      <?php
                      }
                      ?>
                      
                    </tbody>
                  </table>
                </div>
                               
              </div>
              <!-- /.box-body -->

              <div class="box-footer text-right">
                <button type="submit" id="registrar" name="registrar" class="btn btn-primary">Registrar</button>
              </div>
            </form>
          </div>
          
        </div>
              <!-- /input-group -->
      </div>
            <!-- /.box-body -->
             
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<!--//aqui va el pie-->
<?php
  include("pie.php");
?>
</body>
</html>
