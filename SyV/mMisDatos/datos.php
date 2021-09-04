<?php
    include '../global_seguridad/verificar_sesion.php';

    $cadena = mysqli_query($conexion,"SELECT nombre, ap_paterno, ap_materno, correo, telefono, domicilio FROM usuarios INNER JOIN personas ON personas.id = usuarios.id_persona WHERE usuarios.id = '$id_usuario'");
    $row = mysqli_fetch_array($cadena);
    $array = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
    echo json_encode($array);
?>