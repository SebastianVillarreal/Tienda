<?php
    include '../global_seguridad/verificar_sesion.php';

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $n_carpeta = $_POST['n_carpeta'];
    $categoria = $_POST['categoria'];
    $icono = $_POST['icono'];
    $panel = (isset($_POST['mostrar']))?1:0;
    $id_registro = $_POST['id_registro'];

    if($id_registro == 0){
        $cadena_verificar = mysqli_query($conexion,"SELECT id FROM modulos WHERE nombre = '$nombre' AND categoria = '$categoria'");
        $existe = mysqli_num_rows($cadena_verificar);
        if($existe == 0){
            $cadena = "INSERT INTO modulos (nombre, descripcion, nombre_carpeta, panel_control, categoria, icono, fecha, hora, activo, usuario) VALUES('$nombre','$descripcion','$n_carpeta','$panel','$categoria','$icono','$fecha','$hora','1','$id_usuario')";
            $consulta = mysqli_query($conexion, $cadena);
            echo "$cadena";

            $cadena2 = mysqli_query($conexion,"SELECT MAX(id) FROM modulos");
            $row2 = mysqli_fetch_array($cadena2);

            $cadena3 = mysqli_query($conexion,"INSERT INTO detalle_perfil (id_perfil, id_modulo, fecha, hora, activo, usuario)VALUES('1','$row2[0]','$fecha','$hora','1','$id_usuario')");

            $cadena4 = mysqli_query($conexion,"SELECT id FROM usuarios WHERE id_perfil = '1'");

            while ($row_usuario = mysqli_fetch_array($cadena4)) {
                $inserta_detalle = mysqli_query($conexion,"INSERT INTO detalle_usuario (id_usuario, id_modulo, id_categoria, fecha, hora, activo, usuario) VALUES ('$row_usuario[0]','$row2[0]','$categoria','$fecha','$hora','1','$id_usuario')");
            }
            echo 1;
        }else{
            echo 2;
        }
    }else{
        $cadena = "UPDATE modulos SET nombre = '$nombre', descripcion = '$descripcion', nombre_carpeta = '$n_carpeta', panel_control = '$panel', categoria = '$categoria', icono = '$icono', fecha = '$fecha', hora = '$hora', usuario = '$id_usuario' WHERE id = '$id_registro'";
        $consulta = mysqli_query($conexion, $cadena);
        echo 1;
    }
?>
