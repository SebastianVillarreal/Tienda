<?php
    include '../global_seguridad/verificar_sesion.php';

    $id = $_POST['id'];

    $cadena = mysqli_query($conexion,"SELECT personas.id, nombre, ap_paterno, ap_materno, domicilio, id_perfil, (SELECT nombre FROM perfiles WHERE perfiles.id = usuarios.id_perfil), usuarios.id
                                        FROM personas
                                        INNER JOIN usuarios ON usuarios.id_persona = personas.id
                                        WHERE personas.id = '$id'");
    $row = mysqli_fetch_array($cadena);
    $array = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7]);
    echo json_encode($array);
?>