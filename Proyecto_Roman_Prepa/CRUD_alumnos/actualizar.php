<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM alumnos WHERE No_de_control='$id'";
    $query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="int" class="form-control mb-3" name="No_de_control" placeholder="No. de contro" value="<?php echo $row['No_de_control']  ?>">
                                <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombre(s)" value="<?php echo $row['Nombres'] ?>">
                                <input type="text" class="form-control mb-3" name="Ap_Materno" placeholder="Apellido materno" value="<?php echo $row['Ap_Materno'] ?>">
                                <input type="text" class="form-control mb-3" name="Ap_Paterno" placeholder="Apellido paterno" value="<?php echo $row['Ap_Paterno'] ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_de_nacimiento" placeholder="Fecha de nacimiento" value="<?php echo $row['Fecha_de_nacimiento'] ?>">
                                <input type="text" class="form-control mb-3" name="Sexo" placeholder="Sexo" value="<?php echo $row['Sexo']  ?>">
                                <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono" value="<?php echo $row['Telefono'] ?>">
                                <input type="text" class="form-control mb-3" name="CURP" placeholder="CURP" value="<?php echo $row['CURP'] ?>">
                                <input type="text" class="form-control mb-3" name="Especialidad" placeholder="Especialidad" value="<?php echo $row['Especialidad'] ?>">
                                <input type="number" class="form-control mb-3" name="Semestre" placeholder="Semestre" value="<?php echo $row['Semestre']  ?>">
                                <input type="text" class="form-control mb-3" name="Promedio" placeholder="Promedio" value="<?php echo $row['Promedio'] ?>">
                                <input type="text" class="form-control mb-3" name="Turno" placeholder="Turno" value="<?php echo $row['Turno'] ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>