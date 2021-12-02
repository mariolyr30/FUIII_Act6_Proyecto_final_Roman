<?php

include("conexion.php");
$con=conectar();

$No_de_control=$_GET['id'];

$sql="DELETE FROM alumnos  WHERE No_de_control='$No_de_control'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumnos.php");
    }
?>