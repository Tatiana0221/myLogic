<?php
    /*conexion con base de datos */
    $conexion = new MySQLi("localhost","root",'',"mylogic");
    /* si la conexion tiene algun error muestra el mensaje y saca el error*/ 
    if ($conexion ->connect_errno){
        echo ("fallo la conexion a mysql: (". $conexion ->mysqli_connect_errno()
        .")". $conexion->mysqli_connect_errno());
    }
    else
    /*si no tiene errores, no hace nada y sigue*/
?>

