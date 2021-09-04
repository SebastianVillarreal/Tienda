<?php 
  include '../global_seguridad/verificar_sesion.php';
  $cadena_consulta = "SELECT DISTINCT(detalle_usuario.id_categoria), categorias_modulos.nombre FROM detalle_usuario INNER JOIN categorias_modulos ON detalle_usuario.id_categoria = categorias_modulos.id AND detalle_usuario.id_usuario = '$id_usuario' order by detalle_usuario.id_categoria ASC";
  $consulta_categorias = mysqli_query($conexion, $cadena_consulta);
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include '../head.php';?>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <?php include 'menuV.php'?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Panel de Control | Lista de Módulos</h1>
              </div><!-- /.col -->
              <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Panel1</li>
                </ol>
              </div>/.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
        <?php
          $estado = "collapse";
          while ($row_categorias = mysqli_fetch_row($consulta_categorias)) {
        ?>
        <div class="">
          <div class="col-lg-12">
            <div class="card card-info">
              <div class="card-header" data-card-widget="collapse">
                <h3 class="card-title"><?php echo $row_categorias[1]?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
              <?php
                $cadena_modulos = "SELECT modulos.id, modulos.nombre, modulos.descripcion, modulos.nombre_carpeta, modulos.icono, modulos.tema FROM modulos INNER JOIN detalle_usuario ON modulos.id = detalle_usuario.id_modulo AND detalle_usuario.id_usuario = '$id_usuario' AND detalle_usuario.id_categoria = '$row_categorias[0]' AND modulos.activo = '1' AND modulos.panel_control = '1' ORDER BY modulos.id";

                $consulta_modulos = mysqli_query($conexion, $cadena_modulos);
                $numero = 1;
                while ($row_modulos = mysqli_fetch_row($consulta_modulos)) {
                  if($numero == 1){
                    $color = "primary";
                    $numero ++;
                  }else if($numero == 2){
                    $color = "secondary";
                    $numero ++;
                  }else if($numero == 3){
                    $color = "info";
                    $numero ++;
                  }else if($numero == 4){
                    $color = "success";
                    $numero ++;
                  }else if($numero == 5){
                    $color = "warning";
                    $numero ++;
                  }else if($numero == 6){
                    $color = "danger";
                    $numero = 1;
                  }
              ?>
                  <div class="col-md-3">
                    <a href="<?php echo "../".$row_modulos[3]?>">
                      <div class="small-box bg-<?php echo $color;?>">
                        <div class="inner">
                          <p><h4><?php echo $row_modulos[1]?></h4></p>
                        </div>
                        <div class="icon">
                          <i class="ion <?php echo $row_modulos[4]?>"></i>
                        </div>
                        <div class="small-box-footer">Ingresar al Módulo <i class="fas fa-arrow-circle-right"></i></div>
                      </div>
                    </a>
                  </div>
                  <?php
                    }
                  ?>
                </div>
              <!-- </div> -->
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <?php
          $estado = "collapse";
         }
        ?>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
        <?php include '../footer2.php';?>
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!--script-->
    <?php include '../footer.php'?>
  </body>
</html>
