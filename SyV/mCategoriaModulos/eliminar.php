<?php
    include '../global_seguridad/verificar_sesion.php';

    $id = $_POST['id'];

    $cadena = mysqli_query($conexion,"UPDATE categorias_modulos SET activo = '0' WHERE id = '$id'");
    echo "1";
?>