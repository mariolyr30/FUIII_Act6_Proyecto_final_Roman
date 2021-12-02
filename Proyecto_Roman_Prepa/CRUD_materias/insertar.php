<?php
include("conexion.php");
$con=conectar();

$Clave=$_POST['Clave'];
$Nombre=$_POST['Nombre'];
$Semestre=$_POST['Semestre'];
$DNI_Maestro=$_POST['DNI_Maestro'];
$Horas=$_POST['Horas'];

$sql="INSERT INTO materias VALUES('$Clave','$Nombre','$Semestre',
'$DNI_Maestro','$Horas')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: materias.php");
    
}else {
}
?>