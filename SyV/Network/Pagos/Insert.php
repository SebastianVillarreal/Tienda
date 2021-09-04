<?php

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
// session_name("sysAdMision");
// session_start();


// get database connection
include_once '../config/database.php';

// instantiate product object
include_once '../Classes/Pagos.php';
//include '../../global_seguridad/verificar_sesion.php';
session_name("sysApp");
session_start();

$database = new Database();
$db = $database->getConnection();

$pago = new Pagos($db);
 	date_default_timezone_set('America/Monterrey');
  	$fecha = date('Y-m-d');
  	$hora = date('H:i:s');
// get posted data
$id_usuario = $_SESSION['gepex_id'];
// $nombre = $_POST['nombre'];
// $direccion = $_POST['direccion'];


$data = json_decode(file_get_contents("php://input"));

// set product property values
$pago->proveedor = $data->proveedor;
$pago->usuario = 1;
$pago->total = $data->total;
$pago->sucursal = 1;


// create the product
if($pago->Create()){
	echo "1";
}

// if unable to create the product, tell the user
else{
	echo "0";
}
?>
