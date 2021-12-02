<?php

include("conexion.php");
$con=conectar();

$Clave=$_GET['id'];

$sql="DELETE FROM materias  WHERE Clave='$Clave'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: materias.php");
    }
?>