<?php
    include '../global_seguridad/verificar_sesion.php';

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $id_registro = $_POST['id_registro'];

    if($id_registro == 0){
        $cadena_verificar = mysqli_query($conexion,"SELECT id FROM categorias_modulos WHERE nombre = '$nombre'");
        $existe = mysqli_num_rows($cadena_verificar);
        if($existe == 0){
            $cadena = "INSERT INTO categorias_modulos (nombre, descripcion, fecha, hora, activo, usuario) VALUES('$nombre','$descripcion','$fecha','$hora','1','$id_usuario')";
            $consulta = mysqli_query($conexion, $cadena);
            echo 1;
        }else{
            echo 2;
        }
    }else{
        $cadena = "UPDATE categorias_modulos SET nombre = '$nombre', descripcion = '$descripcion', fecha = '$fecha', hora = '$hora', usuario = '$id_usuario' WHERE id = '$id_registro'";
        $consulta = mysqli_query($conexion, $cadena);
        echo 1;
    }
?>