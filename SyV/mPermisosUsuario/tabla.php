<?php
include '../global_seguridad/verificar_sesion.php';

$ide_usuario = ($_POST['id_usuario']=="") ? $id_usuario : $_POST['id_usuario'];
$cadena_consulta = "SELECT detalle_usuario.id, detalle_usuario.id_modulo, modulos.nombre, detalle_usuario.solo_sucursal, detalle_usuario.registros_propios, detalle_usuario.solo_lectura 
					FROM detalle_usuario INNER JOIN modulos ON detalle_usuario.id_modulo = modulos.id
					WHERE id_usuario = '$ide_usuario'";
$consulta = mysqli_query($conexion, $cadena_consulta);

$cuerpo ="";
while ($row = mysqli_fetch_array($consulta)) {
	
	$registros_propios = ($row[4]=="0") ? "" : "checked";
	$solo_lectura = ($row[5]=="0") ? "" : "checked";

	$chk_registros_propios = "<center><input type='checkbox' name='registros_propios' id='registros_propios' $registros_propios onchange='registros_propios($row[0])'></center>";
	$chk_solo_lectura = "<center><input type='checkbox' name='solo_lectura' id='solo_lectura' $solo_lectura onchange='solo_lectura($row[0])'></center>";
	$eliminar = "<center><button class='btn btn-danger' onclick='eliminar($row[0])'><i class='fas fa-trash-alt fa-lg' aria-hidden='true'></i></button></center>";
	
	$renglon = "
		{
		\"#\": \"$row[0]\",
		\"Modulo\": \"$row[2]\",
		\"RegPropios\": \"$chk_registros_propios\",
		\"SoloLec\": \"$chk_solo_lectura\",
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