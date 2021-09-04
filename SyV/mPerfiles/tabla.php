<?php
include '../global_seguridad/verificar_sesion.php';

$cadena = "SELECT id, nombre FROM perfiles WHERE activo = '1'";
$consulta = mysqli_query($conexion, $cadena);

$cuerpo ="";
while ($row = mysqli_fetch_array($consulta)) {
    $editar = "<center><button type='button' class='btn btn-warning' onclick='editar($row[0])'><i class='fas fa-pen-square fa-lg' aria-hidden='true'></i></button></center>";
    $eliminar = "<center><button class='btn btn-danger' onclick='eliminar($row[0])'><i class='fas fa-trash-alt fa-lg' aria-hidden='true'></i></button></center>";
	$renglon = "
		{
		\"#\": \"$row[0]\",
		\"Nombre\": \"$row[1]\",
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