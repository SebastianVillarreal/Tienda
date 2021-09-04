<?php
include '../global_seguridad/verificar_sesion.php';

$cadena = "SELECT id, (SELECT nombre FROM perfiles WHERE perfiles.id = detalle_perfil.id_perfil),(SELECT nombre FROM modulos WHERE modulos.id = detalle_perfil.id_modulo) FROM detalle_perfil WHERE activo = '1'";
$consulta = mysqli_query($conexion, $cadena);

$cuerpo ="";
while ($row = mysqli_fetch_array($consulta)) {
    $eliminar = "<center><button class='btn btn-danger' onclick='eliminar($row[0])'><i class='fas fa-trash-alt fa-lg' aria-hidden='true'></i></button></center>";
	$renglon = "
		{
		\"#\": \"$row[0]\",
		\"Perfil\": \"$row[1]\",
        \"Modulo\": \"$row[2]\",
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