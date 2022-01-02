<?php
    $bd_host = "104.254.247.128";
    $bd_usuario = "svillarreal";
    $bd_password = "gpeex2022!";
    $bd_base = "SaleVale";

    $conexion = mysqli_connect($bd_host,$bd_usuario,$bd_password) ;
    mysqli_select_db($conexion,$bd_base)or die (mysql_error());
    date_default_timezone_set('America/Monterrey');
    $fecha=date("Y-m-d"); 
    $hora=date ("H:i:s");




    $user = "svillarreal";
    $password = "gpeex2022!";
    $database = "SaleVale";
    $table = "proveedores";

    try {
      $db = new PDO("mysql:host=104.254.247.128;dbname=$database", $user, $password);
      echo "<h2>TODO</h2><ol>";
      foreach($db->query("SELECT Nombre FROM $table") as $row) {
        echo "<li>" . $row['Nombre'] . "</li>";
      }
      echo "</ol>";
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>