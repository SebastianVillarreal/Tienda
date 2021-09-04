<?php
    include '../global_seguridad/verificar_sesion.php';

    $nombre = $_POST['nombre'];
    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    echo $telefono;

    $cadena = "UPDATE personas SET nombre = '$nombre', ap_paterno = '$ap_paterno', ap_materno = '$ap_materno', correo = '$correo', telefono = '$telefono' WHERE id = '$id_persona'";
    echo $cadena;
    $consulta = mysqli_query($conexion, $cadena);
    
    if (empty($_FILES['file-es'])) {
    }else{
        define('DIR_DESCARGAS',__DIR__.DIRECTORY_SEPARATOR.'user_images'.DIRECTORY_SEPARATOR);
        // Obtenemos el array de ficheros enviados
        $ficheros = $_FILES['file-es'];
        // Establecemos el indicador de proceso correcto (simplemente no indicando nada)
        $estado_proceso = NULL;
        // Paths para almacenar
        $paths= array();
        // Obtenemos los nombres de los ficheros
        $nombres_ficheros = $ficheros['name'];
        if(!file_exists(DIR_DESCARGAS)) @mkdir(DIR_DESCARGAS);
        // Sólo en el caso de que exista esta carpeta realizaremos el proceso
        if(file_exists(DIR_DESCARGAS)) {
            // Recorremos el array de nombres para realizar proceso de upload
            for($i=0; $i < count($nombres_ficheros); $i++){
                // Extraemos el nombre y la extensión del nombre completo del fichero
                $nombre_extension = explode('.', basename($nombres_ficheros[$i]));
                // Obtenemos la extensión
                $extension=array_pop($nombre_extension);
                // Obtenemos el nombre
                $nombre=array_pop($nombre_extension);
                // Creamos la ruta de destino
                $archivo_destino = DIR_DESCARGAS . DIRECTORY_SEPARATOR . utf8_decode($i) . '.' . $extension;
                // Mover el archivo de la carpeta temporal a la nueva ubicación
                if(move_uploaded_file($ficheros['tmp_name'][$i], $archivo_destino)) {
                    // Activamos el indicador de proceso correcto
                    $estado_proceso = true;
                    // Almacenamos el nombre del archivo de destino
                    $paths[] = $archivo_destino;
                } else {
                    // Activamos el indicador de proceso erroneo		
                    $estado_proceso = false;
                    // Rompemos el bucle para que no continue procesando ficheros
                    break;
                }
            }
            $respuestas ="";
            // Comprobamos si el estado del proceso a finalizado de forma correcta
            if ($estado_proceso === true) {
                //$respuestas = 'ok'; 
            }elseif ($estado_proceso === false) {
                //$respuestas = 'oks';
                // Eliminamos todos los archivos subidos
                foreach ($paths as $fichero) {
                    unlink($fichero);
                }
            // Si no se han llegado a procesar ficheros $estado_proceso seguirá siendo NULL
            }
        }
    }
    echo 1;
?>