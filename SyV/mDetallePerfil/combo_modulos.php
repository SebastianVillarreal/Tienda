<?php
    include '../global_seguridad/verificar_sesion.php';

    if(!isset($_POST['searchTerm'])){ 
        $cadena = "SELECT id, nombre FROM modulos WHERE activo = '1' ORDER BY id ASC";
    }else{ 
        $search = $_POST['searchTerm'];   
        $cadena = "SELECT id, nombre FROM modulos WHERE nombre like '%".$search."%' AND activo='1' ORDER BY id ASC";
    } 

    $consulta = mysqli_query($conexion, $cadena);
    $data = array();
    while ($row = mysqli_fetch_array($consulta)) {
        $data[] = array("id"=>$row[0], "text"=>$row[1]);
    }

    echo json_encode($data);
?>