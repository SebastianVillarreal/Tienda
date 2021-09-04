<?php
    include '../global_seguridad/verificar_sesion.php';
    $id_usuario = $_POST['id_usuario'];
    $id_modulo = $_POST['id_modulo'];

    $cadena_modulos = "SELECT categoria FROM modulos WHERE id = '$id_modulo'";
    $consulta_modulo = mysqli_query($conexion, $cadena_modulos);
    $row_modulos = mysqli_fetch_array($consulta_modulo);
    $categoria = $row_modulos[0];

    $cadena_insertar = "INSERT INTO detalle_usuario (id_usuario, id_modulo, id_categoria, solo_sucursal, registros_propios, fecha, hora, activo, usuario) VALUES ('$id_usuario','$id_modulo','$categoria','0','0','$fecha','$hora','1','$id_usuario')";
    $insertar_permiso = mysqli_query($conexion, $cadena_insertar);

    echo "1";
?>