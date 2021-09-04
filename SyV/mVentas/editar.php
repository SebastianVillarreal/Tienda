<?php
    include '../global_seguridad/verificar_sesion.php';

    $id = $_POST['id'];

    $cadena = mysqli_query($conexion,"SELECT id, nombre, descripcion, nombre_carpeta, panel_control, categoria, (SELECT nombre FROM categorias_modulos WHERE categorias_modulos.id = modulos.categoria), icono FROM modulos WHERE id = '$id'");
    $row = mysqli_fetch_array($cadena);
    $array = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7]);
    echo json_encode($array);
?>