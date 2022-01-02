<?php
session_name("sysApp");
session_start();

include '../global_settings/conexion.php';

$p_user = $_POST['usuario'];
$p_contra = md5($_POST['pass']);

$consulta_usuario = "SELECT usuarios.id, 
						CONCAT(personas.nombre,' ', personas.ap_paterno, ' ', personas.ap_materno),
						usuarios.id_perfil,
						usuarios.id_persona,
						DATE_FORMAT(usuarios.fecha, '%d/%m/%y'),
						personas.domicilio,
						personas.correo
					FROM usuarios 
					INNER JOIN personas ON usuarios.id_persona = personas.id
					WHERE usuarios.usuario='$p_user'
					AND usuarios.pass='$p_contra'
					AND usuarios.activo='1' 
					AND personas.activo='1'";
					echo "$consulta_usuario";

// $usuario = mysqli_query($conexion, $consulta_usuario);
// $row_usuario = mysqli_fetch_array($usuario);
// $num_usuario = mysqli_num_rows($usuario);

// if ($num_usuario==0) {
// 	echo "1";
// }elseif ($num_usuario>0) {
// 	$cadena_perfil = "SELECT nombre FROM perfiles WHERE id = '$row_usuario[3]'";
// 	$consulta_perfil = mysqli_query($conexion, $cadena_perfil);
// 	$row_perfil = mysqli_fetch_row($consulta_perfil);

// 	// $cadena_sede = "SELECT nombre FROM sucursales WHERE id = '$row_usuario[5]'";
// 	// $consulta_sede = mysqli_query($conexion, $cadena_sede);
// 	// $row_sede = mysqli_fetch_row($consulta_perfil);

// 	$_SESSION["sysApp_id_usuario"]    = $row_usuario[0];
// 	$_SESSION["sysApp_persona"]       = $row_usuario[1];
// 	$_SESSION["sysApp_autenticado"]   = "SI";
// 	$_SESSION["sysApp_ultimoAcceso"]  = date("Y-n-j H:i:s");
// 	$_SESSION["sysApp_perfil"]        = $row_usuario[2];
// 	$_SESSION["sysApp_id_persona"]    = $row_usuario[3];
// 	$_SESSION["sysApp_nombre_perfil"] = $row_perfil[0];
// 	$_SESSION["sysApp_fechaAlta"]     = $row_usuario[4];
// 	$_SESSION["sysApp_Domicilio"]     = $row_usuario[5];
// 	$_SESSION["sysApp_correo"]        = $row_usuario[6];

// 	echo "2";
// }
 ?>
