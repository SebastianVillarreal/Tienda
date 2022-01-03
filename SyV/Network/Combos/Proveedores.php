<?php

// required headers
error_reporting(E_ALL);
  ini_set("display_errors","On");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// session_name("sysAdMision");
// session_start();


    // get database connection
    include_once '../Config/database.php';

    // instantiate product object
    include_once '../Classes/Proveedores.php';
    //include '../../global_seguridad/verificar_sesion.php';
    session_name("sysApp");
    session_start();

    $database = new Database();
    $db = $database->getConnection();

    $proveedor = new Proveedores($db);
 	  date_default_timezone_set('America/Monterrey');
  	$fecha = date('Y-m-d');
  	$hora = date('H:i:s');
    // get posted data
    $id_usuario = $_SESSION['gepex_id'];
    $search = $_POST['searchTerm'];
     $id_tipo = $_POST['tipo'];

    if($search == ""){
        $search = "N/A";
    }


    $data = json_decode(file_get_contents("php://input"));

    // set product property values


    $stmt = $proveedor->GetProveedores();
    $num = $stmt->rowCount();

    $obras_arr=array();
    if($num > 0){


      while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);

        $obra_item = array(
          "id" => $Id,
          "text" => $Nombre
        );

        array_push($obras_arr, $obra_item);

      }
      echo json_encode($obras_arr);
    }

 ?>
