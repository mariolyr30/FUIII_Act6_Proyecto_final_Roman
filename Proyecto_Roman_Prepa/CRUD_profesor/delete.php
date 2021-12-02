<?php

include("conexion.php");
$con=conectar();

$DNI=$_GET['id'];

$sql="DELETE FROM profesor  WHERE DNI='$DNI'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: profesor.php");
    }
?>