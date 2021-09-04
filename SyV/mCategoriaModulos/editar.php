<?php
    include '../global_seguridad/verificar_sesion.php';

    $id = $_POST['id'];

    $cadena = mysqli_query($conexion,"SELECT id, nombre, descripcion FROM categorias_modulos WHERE id = '$id'");
    $row = mysqli_fetch_array($cadena);
    $array = array($row[0],$row[1],$row[2]);
    echo json_encode($array);
?>