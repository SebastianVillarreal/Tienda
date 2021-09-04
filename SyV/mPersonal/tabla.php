<?php
include '../global_seguridad/verificar_sesion.php';

$cadena = "SELECT personas.id, CONCAT(nombre,' ',ap_paterno,' ',ap_materno), domicilio, usuario 
			FROM personas 
			INNER JOIN usuarios ON usuarios.id_persona = personas.id
			WHERE personas.activo = '1'";
$consulta = mysqli_query($conexion, $cadena);

$cuerpo ="";
while ($row = mysqli_fetch_array($consulta)) {
	$eliminar = "<center><button class='btn btn-danger' onclick='eliminar($row[0])'><i class='fas fa-trash-alt fa-lg' aria-hidden='true'></i></button></center>";
	$editar = "<center><button class='btn btn-warning' onclick='editar($row[0])'><i class='fas fa-edit fa-lg' aria-hidden='true'></i></button></center>";
	$pass = "<center><button class='btn btn-primary' onclick='restaurar($row[0])'><i class='fas fa-sync-alt fa-lg' aria-hidden='true'></i></button></center>";
	$renglon = "
		{
		\"#\": \"$row[0]\",
		\"Nombre\": \"$row[1]\",
		\"Domicilio\": \"$row[2]\",
		\"Usuario\": \"$row[3]\",
		\"Pass\": \"$pass\",
		\"Editar\": \"$editar\",
		\"Eliminar\": \"$eliminar\"
		},";
	$cuerpo = $cuerpo.$renglon;
}
$cuerpo2 = trim($cuerpo, ',');

$tabla = "
["
.$cuerpo2.
"]
";
echo $tabla;
?>