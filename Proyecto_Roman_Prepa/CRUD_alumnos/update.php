<?php

include("conexion.php");
$con=conectar();

$No_de_control=$_POST['No_de_control'];
$Nombres=$_POST['Nombres'];
$Ap_Materno=$_POST['Ap_Materno'];
$Ap_Paterno=$_POST['Ap_Paterno'];
$Fecha_de_nacimiento=$_POST['Fecha_de_nacimiento'];
$Sexo=$_POST['Sexo'];
$Telefono=$_POST['Telefono'];
$CURP=$_POST['CURP'];
$Especialidad=$_POST['Especialidad'];
$Semestre=$_POST['Semestre'];
$Promedio=$_POST['Promedio'];
$Turno=$_POST['Turno'];


$sql="UPDATE alumnos SET  Nombres='$Nombres',Ap_Materno='$Ap_Materno',
Ap_Paterno='$Ap_Paterno',Fecha_de_nacimiento='$Fecha_de_nacimiento',
Sexo='$Sexo',Telefono='$Telefono',CURP='$CURP',Especialidad='$Especialidad',
Semestre='$Semestre',Promedio='$Promedio',Turno='$Turno'
 WHERE No_de_control='$No_de_control'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumnos.php");
    }
?>