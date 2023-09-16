<?php

include 'conexion.php';

$conexion = conexion();
$sql_query = null;

if(!isset($_POST['buscar'])){

    $_POST['buscar'] = "";

    $buscar = $_POST['buscar'];
}


    $buscar = $_POST['buscar'];

    $sql_busqueda = "SELECT * FROM juegos WHERE id LIKE '%".$buscar."%' OR nombre 
    LIKE '%".$buscar."%' OR costo LIKE '%".$buscar."%'";

    $sql_query = mysqli_query($conexion, $sql_busqueda);


?>