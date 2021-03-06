<?php 
    include '../global_seguridad/verificar_sesion.php';
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
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <br>
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-info" <?php echo $solo_lectura;?>>
                    <form id="form_datos" method="POST">
                        <div class="card-header">
                            <h3 class="card-title">Personal | Registro Personal</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">*Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la Persona">
                                        <input type="text" class="form-control d-none" id="id_registro" value="0" name="id_registro">
                                        <input type="text" class="form-control d-none" id="ide_usuario" value="0" name="ide_usuario">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">*Apellido Paterno:</label>
                                        <input type="text" class="form-control" id="ap_paterno" name="ap_paterno" placeholder="Apellido Paterno">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">*Apellido Materno:</label>
                                        <input type="text" class="form-control" id="ap_materno" name="ap_materno" placeholder="Apellido Materno">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">*Domicilio:</label>
                                        <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Domicilio">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">*Perfil:</label>
                                        <select name="id_perfil" id="id_perfil" class="form-control select2" style="width: 100%;"></select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button class="btn btn-warning float-right">Guardar</button>
                        </div>
                    </form>
                </div>
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Personal | Lista</h3>
                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="lista_personal" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Domicilio</th>
                                            <th scope="col">Usuario</th>
                                            <th scope="col">Restaurar Pass</th>
                                            <th scope="col">Editar</th>                                  <th scope="col">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Domicilio</th>
                                            <th scope="col">Usuario</th>
                                            <th scope="col">Restaurar Pass</th>
                                            <th scope="col">Editar</th>                                  <th scope="col">Eliminar</th>
                                        </tr>
                                    </tbody>
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
    <script>
        $('#id_perfil').select2({
            placeholder: 'Seleccione una opcion',
            lenguage: 'es',
            theme: 'bootstrap4',
            //minimumResultsForSearch: Infinity
            ajax: { 
                url: "combo_perfiles.php",
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
        })
        function cargar_tabla(){
            $('#lista_personal').dataTable().fnDestroy();
            $('#lista_personal').DataTable( {
                'language': {"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"},
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "dom": 'Bfrtip',
                "buttons": [{
                    extend: 'excel',
                    text: 'Exportar a Excel',
                    className: 'btn btn-success',
                    title: 'Personal',
                    exportOptions: {
                    columns: ':visible'
                    }
                },
                {
                    extend: 'pdf',
                    text: 'Exportar a PDF',
                    className: 'btn btn-danger',
                    title: 'Personal',
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
                    "url": "tabla.php",
                    "dataSrc": ""
                },
                "columns": [
                    { "data": "#", "width":"3%"},
                    { "data": "Nombre" },
                    { "data": "Domicilio" },
                    { "data": "Usuario" },
                    { "data": "Pass" },
                    { "data": "Editar" },
                    { "data": "Eliminar", "width":"3%" }
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
            }else if (valor == 4){
                texto = "Contrase??a Restaurada Correctamente";
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
                            $('#id_perfil').select2("trigger","select",{
                                data:{id:'',text:''}
                            })
                            cargar_tabla();
                            alerta(1);
                        }else if(respuesta == 2){
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
                    ap_paterno: "required",
                    ap_materno: "required",
                    domicilio: "required",
                    id_perfil: "required"
                },
                messages: {
                    nombre: "Campo requerido",
                    ap_paterno: "Campo requerido",
                    ap_materno: "Campo requerido",
                    domicilio: "Campo requerido",
                    id_perfil: "Campo requerido"
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
                   $('#ap_paterno').val(array[2]);
                   $('#ap_materno').val(array[3]);
                   $('#domicilio').val(array[4]);
                   $('#id_perfil').select2("trigger","select",{
                        data:{id:array[5],text:array[6]}
                    })
                    $('#ide_usuario').val(array[7]);
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
                        alerta(5);
                    }
                }
                });
            }
            });
        }
        function restaurar(id){
            swal({
            title: "??Est?? Seguro de Restaurar Contrase??a?",
            icon: "warning",
            buttons: ["No", "Si"],
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                url: 'restaurar.php',
                data: {'id':id},
                type: "POST",
                success: function(respuesta) {
                    if(respuesta == 1){
                        cargar_tabla();
                        alerta(4);
                    }else{
                        alerta(5);
                    }
                }
                });
            }
            });
        }
    </script>
  </body>
</html>
