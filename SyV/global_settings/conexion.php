<?php
    $bd_host = "localhost";
    $bd_usuario = "svillarreal";
    $bd_password = "gpeex2022!";
    $bd_base = "SaleVale";

    $conexion = mysqli_connect($bd_host,$bd_usuario,$bd_password) ;
    mysqli_select_db($conexion,$bd_base)or die (mysql_error());
    date_default_timezone_set('America/Monterrey');
    $fecha=date("Y-m-d"); 
    $hora=date ("H:i:s");





?>