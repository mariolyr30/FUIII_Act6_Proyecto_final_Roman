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

$sql="INSERT INTO personal VALUES('$RFC','$Nombres','$Apellidos',
'$Telefono','$Fecha_de_nacimiento','$Area','$Turno')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: personal.php");
    
}else {
}
?>