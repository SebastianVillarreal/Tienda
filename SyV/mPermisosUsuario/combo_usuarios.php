<?php
    include '../global_seguridad/verificar_sesion.php';

    if(!isset($_POST['searchTerm'])){ 
        $cadena = "SELECT usuarios.id, CONCAT(nombre,' ', ap_paterno,' ',ap_materno) FROM usuarios INNER JOIN personas ON personas.id = usuarios.id_persona WHERE usuarios.activo = '1'";
    }else{ 
        $search = $_POST['searchTerm'];   
        $cadena = "SELECT usuarios.id, CONCAT(nombre,' ', ap_paterno,' ',ap_materno) FROM usuarios INNER JOIN personas ON personas.id = usuarios.id_persona WHERE usuarios.activo = '1' AND CONCAT(nombre,' ', ap_paterno,' ',ap_materno) like '%".$search."%'";
    } 

    $consulta = mysqli_query($conexion, $cadena);
    $data = array();
    while ($row = mysqli_fetch_array($consulta)) {
        $data[] = array("id"=>$row[0], "text"=>$row[1]);
    }

    echo json_encode($data);
?>