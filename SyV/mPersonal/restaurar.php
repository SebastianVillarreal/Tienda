<?php
    include '../global_seguridad/verificar_sesion.php';

    $id = $_POST['id'];

    $pass = md5('123456789');
    $cadena = mysqli_query($conexion,"UPDATE usuarios SET pass = '$pass' WHERE id_persona = '$id'");
    echo "4";
?>