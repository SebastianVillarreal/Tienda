<?php
    include '../global_seguridad/verificar_sesion.php';

    $id = $_POST['id'];

    $cadena = mysqli_query($conexion,"UPDATE personas SET activo = '0' WHERE id = '$id'");
    $cadena = mysqli_query($conexion,"UPDATE usuarios SET activo = '0' WHERE id_persona = '$id'");
    echo "3";
?>