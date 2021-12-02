<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM materias WHERE Clave='$id'";
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
                    
                                <input type="int" class="form-control mb-3" name="Clave" placeholder="Clave de la materia" value="<?php echo $row['Clave']  ?>">
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre de la materia" value="<?php echo $row['Nombre'] ?>">
                                <input type="text" class="form-control mb-3" name="Semestre" placeholder="Apellidos" value="<?php echo $row['Semestre'] ?>">
                                <input type="text" class="form-control mb-3" name="DNI_Maestro" placeholder="DNI del maestro" value="<?php echo $row['DNI_Maestro'] ?>">
                                <input type="text" class="form-control mb-3" name="Horas" placeholder="Horas de la materia" value="<?php echo $row['Horas'] ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>