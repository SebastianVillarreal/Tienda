<?php
    include '../global_seguridad/verificar_sesion.php';

    $perfil = $_POST['perfil'];
    $modulo = $_POST['modulo'];

    $cadena_verificar = mysqli_query($conexion,"SELECT id FROM detalle_perfil WHERE id_perfil = '$perfil' AND id_modulo = '$modulo' AND activo = '1'");
    $existe = mysqli_num_rows($cadena_verificar);
    if($existe == 0){
        $cadena = "INSERT INTO detalle_perfil (id_perfil, id_modulo, fecha, hora, activo, usuario) VALUES('$perfil','$modulo','$fecha','$hora','1','$id_usuario')";
        $consulta = mysqli_query($conexion, $cadena);
        echo 1;
    }else{
        echo 2;
    }
?>