<?php

include("conexion.php");
$con=conectar();

$Clave=$_POST['Clave'];
$Nombre=$_POST['Nombre'];
$Semestre=$_POST['Semestre'];
$DNI_Maestro=$_POST['DNI_Maestro'];
$Horas=$_POST['Horas'];


$sql="UPDATE materias SET  Nombre='$Nombre',Semestre='$Semestre',
DNI_Maestro='$DNI_Maestro',Horas='$Horas' WHERE Clave='$Clave'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: materias.php");
    }
?>