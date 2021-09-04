<?php
    include '../global_seguridad/verificar_sesion.php';
    $id = $_POST['id'];

    $cadena_verifica = "SELECT solo_lectura FROM detalle_usuario WHERE id = '$id'";
    $consulta_verifica = mysqli_query($conexion, $cadena_verifica);
    $row_verifica = mysqli_fetch_array($consulta_verifica);

    if ($row_verifica[0]=='0') {
        $estado = '1';
    }elseif($row_verifica[0]=='1'){
        $estado = '0';
    }

    $cadena_modifica = "UPDATE detalle_usuario SET solo_lectura = '$estado' WHERE id = '$id'";
    $modifica_estado = mysqli_query($conexion, $cadena_modifica);

    echo "1";
?>