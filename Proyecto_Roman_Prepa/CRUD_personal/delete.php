<?php

include("conexion.php");
$con=conectar();

$RFC=$_GET['id'];

$sql="DELETE FROM personal  WHERE RFC='$RFC'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: personal.php");
    }
?>