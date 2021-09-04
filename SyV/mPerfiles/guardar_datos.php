<?php
    include '../global_seguridad/verificar_sesion.php';

    $nombre = $_POST['nombre'];
    $id_registro = $_POST['id_registro'];

    if($id_registro == 0){
        $cadena_verificar = mysqli_query($conexion,"SELECT id FROM perfiles WHERE nombre = '$nombre'");
        $existe = mysqli_num_rows($cadena_verificar);
        if($existe == 0){
            $cadena = "INSERT INTO perfiles (nombre, fecha, hora, activo, id_usuario) VALUES('$nombre','$fecha','$hora','1','$id_usuario')";
            $consulta = mysqli_query($conexion, $cadena);

            $cadena2 = mysqli_query($conexion,"SELECT MAX(id) FROM perfiles");
            $row = mysqli_fetch_array($cadena2);

            $cadena3 = mysqli_query($conexion,"SELECT id FROM modulos WHERE panel_control = '0'");
            while($row2 = mysqli_fetch_array($cadena3)){
                $cadena4 = mysqli_query($conexion,"INSERT INTO detalle_perfil (id_perfil, id_modulo, fecha, hora, activo, usuario) VALUES ('$row[0]','$row2[0]','$fecha','$hora','1','$id_usuario')");
            }
            echo 1;
        }else{
            echo 2;
        }
    }else{
        $cadena = "UPDATE perfiles SET nombre = '$nombre', fecha = '$fecha', hora = '$hora', id_usuario = '$id_usuario' WHERE id = '$id_registro'";
        $consulta = mysqli_query($conexion, $cadena);
        echo 1;
    }
?>