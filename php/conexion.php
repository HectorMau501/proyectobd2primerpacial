<?php
function conexion(){
   
    $server = "localhost";
    $user = "root";
    $password = "";
    $bd = "videojuegos";

    $conexion = mysqli_connect($server, $user, $password, $bd)
    OR die("Error, no se pudo hacer la conexion con la base de datos.");


    return $conexion;
}
?>