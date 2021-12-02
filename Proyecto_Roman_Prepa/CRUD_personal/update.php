<?php

include("conexion.php");
$con=conectar();

$RFC=$_POST['RFC'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$Telefono=$_POST['Telefono'];
$Fecha_de_nacimiento=$_POST['Fecha_de_nacimiento'];
$Area=$_POST['Area'];
$Turno=$_POST['Turno'];


$sql="UPDATE personal SET  Nombres='$Nombres',Apellidos='$Apellidos',
Telefono='$Telefono',Fecha_de_nacimiento='$Fecha_de_nacimiento',
Area='$Area',Turno='$Turno' WHERE RFC='$RFC'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: personal.php");
    }
?>