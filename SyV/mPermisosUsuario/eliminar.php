<?php
include '../global_seguridad/verificar_sesion.php';
$id = $_POST['id'];

$cadena_modifica = "DELETE FROM detalle_usuario WHERE id = '$id'";
$modifica_estado = mysqli_query($conexion, $cadena_modifica);

echo "1";
?>