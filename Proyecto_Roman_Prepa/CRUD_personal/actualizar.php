<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM personal WHERE RFC='$id'";
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
                    
                                <input type="int" class="form-control mb-3" name="RFC" placeholder="RFC" value="<?php echo $row['RFC']  ?>">

                                <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombre(s)" value="<?php echo $row['Nombres'] ?>">
                                <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" value="<?php echo $row['Apellidos'] ?>">
                                <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono" value="<?php echo $row['Telefono'] ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_de_nacimiento" placeholder="Fecha de nacimiento" value="<?php echo $row['Fecha_de_nacimiento'] ?>">
                                <input type="text" class="form-control mb-3" name="Area" placeholder="Area" value="<?php echo $row['Area'] ?>">
                                <input type="text" class="form-control mb-3" name="Turno" placeholder="Turno" value="<?php echo $row['Turno'] ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>