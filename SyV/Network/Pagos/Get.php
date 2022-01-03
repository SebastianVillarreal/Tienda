<?php

  // required headers
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  error_reporting(E_ALL);
  ini_set("display_errors","On");

  // get database connection
  include_once '../Config/database.php';

  // instantiate product object
   include_once '../Classes/Pagos.php';
  // session_name("sysApp");
  // session_start();
  $database = new Database();
  
   $db = $database->getConnection();



  $obra = new Pagos($db);
 	// date_default_timezone_set('America/Monterrey');
  // $fecha = date('Y-m-d');
  // $hora = date('H:i:s');
  // get posted data
  // $id_usuario = $_SESSION['gepex_id'];
  // $nombre = $_POST['nombre'];
  // $direccion = $_POST['direccion'];

  $data = json_decode(file_get_contents("php://input"));

  // set product property values
  //$obra->nombre = $data->nombre;
  //$obra->direccion = $data->direccion;
  //$obra->id_usuario = $id_usuario;

  $stmt = $obra->read();
  $num = $stmt->rowCount();

  $obras_arr=array();
  if($num > 0){
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      // extract row
      // this will make $row['name'] to
      // just $name only
      extract($row);
      $obra_item = array(
        "Id" => $Id,
        "Total" => $Total,
        "Nombre" => $Nombre,
        "Fecha" => $Fecha
      );
      array_push($obras_arr, $obra_item);
    }
    //echo json_encode($obras_arr);
  }
  echo json_encode($obras_arr);
 ?>
