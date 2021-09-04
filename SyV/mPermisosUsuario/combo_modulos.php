<?php
    include '../global_seguridad/verificar_sesion.php';

    $limite = "";
    if (empty($_POST['id_usuario'])) {
        $limite = ' Limit 0';
    }else{
        $ide_usuario = $_POST['id_usuario'];
        $limite = "";
    }
    if(!isset($_POST['searchTerm'])){ 
        $cadena_modulos = "SELECT id, nombre FROM modulos WHERE id NOT IN (SELECT id_modulo FROM detalle_usuario WHERE id_usuario = '$ide_usuario') AND activo = '1'".$limite;
    }else{ 
        $search = $_POST['searchTerm'];   
        $cadena_modulos = "SELECT id, nombre FROM modulos WHERE id NOT IN (SELECT id_modulo FROM detalle_usuario WHERE id_usuario = '$de_usuario') AND activo = '1' AND nombre like '%".$search."%'".$limite;
    } 
    $consulta = mysqli_query($conexion, $cadena_modulos);
    $data = array();
    while ($row = mysqli_fetch_array($consulta)) {
        $data[] = array("id"=>$row[0], "text"=>$row[1]);
    }

    echo json_encode($data);
?>