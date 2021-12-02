<?php

include("conexion.php");
$con=conectar();

$DNI=$_POST['DNI'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$Telefono=$_POST['Telefono'];
$Domicilio=$_POST['Domicilio'];
$Fecha_de_nacimiento=$_POST['Fecha_de_nacimiento'];
$Sexo=$_POST['Sexo'];
$Materia=$_POST['Materia'];
$Email=$_POST['Email'];
$Grupos=$_POST['Grupos'];
$Salon=$_POST['Salon'];
$Turno=$_POST['Turno'];


$sql="UPDATE profesor SET  Nombres='$Nombres',Apellidos='$Apellidos',
Telefono='$Telefono',Domicilio='$Domicilio',Fecha_de_nacimiento='$Fecha_de_nacimiento',
Sexo='$Sexo',Materia='$Materia',Email='$Email',Grupos='$Grupos',Salon='$Salon',Turno='$Turno' WHERE DNI='$DNI'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: profesor.php");
    }
?>