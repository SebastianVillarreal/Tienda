<?php
    include '../global_seguridad/verificar_sesion.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include '../head.php';?>
    <script type="text/javascript" src="funciones.js"></script>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <?php include 'menuV.php'?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <br>
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-info">
                    <form id="form_datos" method="POST">
                        <div class="card-header">
                            <h3 class="card-title">Pagos | Registro</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="container">
                              <form class="" action="index.html" method="post">
                                <div class="row">
                                  <div class="col-lg-4">
                                    <label for="">Proveedor</label>
                                    <select class="form-control" id="cmbProveedor">
                                        <option disabled selected value="">Seleccione...</option>
                                        <option value="1">Sello Rojo</option>
                                    </select>
                                  </div>
                                  <div class="col-lg-4">
                                    <label for="">Monto</label>
                                    <input type="text" class="form-control" name="" id="txtMonto" value="">
                                  </div>
                                  <div class="col-lg-4">
                                      <label>Fecha</label>
                                      <input type="date" class="form-control" id="txtFecha" name="">
                                  </div>
                                </div>
                              </form>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button onclick="InsertGasto($('#txtMonto').val(), $('#cmbProveedor').val())" class="btn btn-warning float-right">Guardar</button>
                        </div>
                    </form>
                </div>
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Obras | Lista</h3>
                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="lista_modulos" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Fecha</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.card -->
            </div>
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
    <!--Tables's buttons-->
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            LoadComboConceptos();
        });
        function LoadComboConceptos(){
          $("#cmbProveedor").select2({

              ajax: {
                  url: "../Network/Combos/Proveedores.php",
                  type: "post",
                  dataType: 'json',
                  delay: 250,
                  data: function (params) {
                      return {
                          searchTerm: params.term // search term
                      };
                  },
                  processResults: function (response) {
                      return {
                          results: response
                      };
                  },
                  cache: true
              }
          });
        }
    </script>

    <script>
        function cargar_tabla(){
            $('#lista_modulos').dataTable().fnDestroy();
            $('#lista_modulos').DataTable( {
                'language': {"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"},
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "dom": 'Bfrtip',
                "buttons": [{
                    extend: 'excel',
                    text: 'Exportar a Excel',
                    className: 'btn btn-success',
                    title: 'Modulos',
                    exportOptions: {
                    columns: ':visible'
                    }
                },
                {
                    extend: 'pdf',
                    text: 'Exportar a PDF',
                    className: 'btn btn-danger',
                    title: 'Modulos',
                    exportOptions: {
                    columns: ':visible'
                    }
                },
                {
                    extend: 'copy',
                    text: 'Copiar registros',
                    className: 'btn btn-info',
                    copyTitle: 'Ajout?? au presse-papiers',
                    copyKeys: 'Appuyez sur <i>ctrl</i> ou <i>\u2318</i> + <i>C</i> pour copier les donn??es du tableau ?? votre presse-papiers. <br><br>Pour annuler, cliquez sur ce message ou appuyez sur Echap.',
                    copySuccess: {
                    _: '%d lignes copi??es',
                    1: '1 ligne copi??e'
                    }
                }
                ],
                "ajax": {
                    "type": "POST",
                    "url": "../Network/Pagos/Get.php",
                    "dataSrc": ""
                },
                "columns": [
                    { "data": "Id", "width":"3%"},
                    { "data": "Nombre" },
                    { "data": "Total" },
                    { "data": "Fecha" }
                ]
            });
        }
        cargar_tabla();
        function alerta(valor){
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 3000
            });
            //info, success, error, warning, question
            if(valor == 1){
                texto = "Datos Guardados Correctamente";
                tipo = "success";
            }else if(valor == 2){
                texto = "Datos Repetidos";
                tipo = "warning";
            }else if (valor == 3){
                texto = "Registro Eliminado Correctamente";
                tipo = "success";
            }else{
                texto = "Ha Ocurrido un Error";
                tipo = "error";
            }
            Toast.fire({
                type: tipo,
                title: texto
            })
        }
        $.validator.setDefaults( {
            submitHandler: function () {
                $.ajax({
                    type: "POST",
                    url: 'guardar_datos.php',
                    data: $("#form_datos").serialize(), // Adjuntar los campos del formulario enviado.
                    success: function(respuesta)
                    {
                        if (respuesta == 1) {
                            $('#form_datos')[0].reset();
                            $('#categoria').select2("trigger","select",{
                                data:{id:'',text:''}
                            })
                            cargar_tabla();
                            alerta(1);
                        }else if(respuesta == 2){
                            $('#nombre').focus();
                            alerta(2);
                        }else {
                            alerta(respuesta);
                        }
                    }
                });
                // Evitar ejecutar el submit del formulario.
                return false;
            }
        });
        $( document ).ready( function () {
            $( "#form_datos" ).validate( {
                rules: {
                    nombre: "required",
                    descripcion: "required",
                    n_carpeta: "required",
                    categoria: "required"
                },
                messages: {
                    nombre: "Campo requerido",
                    descripcion: "Campo requerido",
                    n_carpeta: "Campo requerido",
                    categoria: "Campo requerido"
                },
                errorElement: "em",
                errorPlacement: function ( error, element ) {
                // Add the `help-block` class to the error element
                error.addClass( "help-block" );

                if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.parent( "label" ) );
                } else {
                    error.insertAfter( element );
                }
                },
                highlight: function ( element, errorClass, validClass ) {
                $( element ).parents( ".col-md-3" ).addClass( "has-danger" ).removeClass( "has-success" );
                $( element ).parents( ".col-md-4" ).addClass( "has-danger" ).removeClass( "has-success" );
                $( element ).parents( ".col-md-6" ).addClass( "has-danger" ).removeClass( "has-success" );
                },
                unhighlight: function (element, errorClass, validClass) {
                $( element ).parents( ".col-md-3" ).addClass( "has-success" ).removeClass( "has-danger" );
                $( element ).parents( ".col-md-4" ).addClass( "has-success" ).removeClass( "has-danger" );
                $( element ).parents( ".col-md-6" ).addClass( "has-success" ).removeClass( "has-danger" );
                }
            });
        });
        function editar(id){
            $.ajax({
                type: "POST",
                url: 'editar.php',
                data: {'id':id}, // Adjuntar los campos del formulario enviado.
                success: function(respuesta)
                {
                   var array = eval(respuesta);
                   $('#id_registro').val(array[0]);
                   $('#nombre').val(array[1]);
                   $('#descripcion').val(array[2]);
                   $('#n_carpeta').val(array[3]);
                //    $('#mostrar').val(array[4]);
                   $('#categoria').select2("trigger","select",{
                       data:{id:array[5],text:array[6]}
                   })
                   $('#icono').val(array[7]);
                }
            });
        }
        function eliminar(id){
            swal({
            title: "??Est?? Seguro de Eliminar Registro?",
            icon: "warning",
            buttons: ["No", "Si"],
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                url: 'eliminar.php',
                data: {'id':id},
                type: "POST",
                success: function(respuesta) {
                    if(respuesta == 1){
                        cargar_tabla();
                        alerta(3);
                    }else{
                        alerta(3);
                    }
                }
                });
            }
            });
        }
    </script>
  </body>
</html>
