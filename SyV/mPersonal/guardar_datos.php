<?php
    include '../global_seguridad/verificar_sesion.php';

    $nombre = $_POST['nombre'];
    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $domicilio = $_POST['domicilio'];
    $id_perfil = $_POST['id_perfil'];
    $ide_usuario = $_POST['ide_usuario'];
    $id_registro = $_POST['id_registro'];

    if($id_registro == 0){
        $cadena_verificar = mysqli_query($conexion,"SELECT id FROM personas WHERE nombre = '$nombre' AND ap_paterno = '$ap_paterno' AND activo = '1'");
        $existe = mysqli_num_rows($cadena_verificar);
        if($existe == 0){
            $cadena = "INSERT INTO personas (nombre, ap_paterno, ap_materno, domicilio, fecha, hora, activo, id_usuario) VALUES('$nombre','$ap_paterno','$ap_materno','$domicilio','$fecha','$hora','1','$id_usuario')";
            //echo $cadena;
            $consulta = mysqli_query($conexion, $cadena);

            $cadena2 = "SELECT MAX(id) FROM personas";
            //echo $cadena2;
            $consulta2 = mysqli_query($conexion, $cadena2);
            $row = mysqli_fetch_array($consulta2);

            $usuario = strtoupper($nombre[0]).strtoupper($ap_paterno);
            $pass = md5('123456789');

            $cadena3 = "INSERT INTO usuarios (id_persona, usuario, pass, id_perfil, activo, fecha, hora, id_usuario) VALUES ('$row[0]','$usuario','$pass','$id_perfil','1','$fecha','$hora','$id_usuario')";
            //echo $cadena3;
            $consulta3 = mysqli_query($conexion, $cadena3);

            $cadena3 = "SELECT MAX(id) FROM usuarios";
            $consulta3 = mysqli_query($conexion, $cadena3);
            $row2 = mysqli_fetch_array($consulta3);

            $cadena_modulos = "SELECT modulos.id, modulos.nombre, modulos.categoria 
            FROM modulos
            INNER JOIN detalle_perfil ON detalle_perfil.id_modulo = modulos.id AND detalle_perfil.id_perfil = '$id_perfil'";
            $consulta_modulos = mysqli_query($conexion, $cadena_modulos);
            while($row3 = mysqli_fetch_array($consulta_modulos)){
                $cadena_detalle = "INSERT INTO detalle_usuario (id_usuario, id_modulo, id_categoria, fecha, hora, activo, usuario) VALUES ('$row2[0]','$row3[0]','$row3[2]','$fecha','$hora','1','$id_usuario')";
                $consulta_detalle = mysqli_query($conexion, $cadena_detalle);
            }

            echo 1;
        }else{
            echo 2;
        }
    }else{
        $cadena_actualizaPersona = "UPDATE personas SET nombre='$nombre', ap_paterno='$ap_paterno', ap_materno='$ap_materno', fecha='$fecha', hora = '$hora', activo='1', id_usuario='$id_usuario' WHERE id = '$id_registro'";
        $actualiza_persona = mysqli_query($conexion, $cadena_actualizaPersona);

        $cadena_actualizaUsuario = "UPDATE usuarios SET id_perfil = '$id_perfil' WHERE id = '$ide_usuario'";
        $actualiza_usuario = mysqli_query($conexion, $cadena_actualizaUsuario);

        //echo $cadena_actualizaUsuario;
        $cadena_eliminaDetalle = "DELETE FROM detalle_usuario WHERE id_usuario = '$ide_usuario'";
        $elimina_detalle = mysqli_query($conexion, $cadena_eliminaDetalle);

        //Extraer información de los módulos 
        $cadena_modulos = "SELECT modulos.id, modulos.nombre, modulos.categoria FROM modulos INNER JOIN detalle_perfil WHERE modulos.id = detalle_perfil.id_modulo AND detalle_perfil.id_perfil = '$id_perfil' AND detalle_perfil.activo = '1'";
        // echo $cadena_modulos;

        $consulta_modulos = mysqli_query($conexion, $cadena_modulos);
        while ($row_modulos = mysqli_fetch_array($consulta_modulos)) {
            $cadena_detalle = "INSERT INTO detalle_usuario (id_usuario, id_modulo, id_categoria, fecha, hora, activo, usuario)VALUES('$ide_usuario','$row_modulos[0]','$row_modulos[2]','$fecha','$hora','1','$id_usuario')";
            // echo $cadena_detalle;

            $insertar_detalle = mysqli_query($conexion, $cadena_detalle);
        }
        echo 1;
    }
?>