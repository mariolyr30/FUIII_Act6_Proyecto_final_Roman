<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM profesor WHERE DNI='$id'";
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
                    
                                <input type="int" class="form-control mb-3" name="DNI" placeholder="DNI" value="<?php echo $row['DNI']  ?>">

                                <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombre(s)" value="<?php echo $row['Nombres'] ?>">
                                <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" value="<?php echo $row['Apellidos'] ?>">
                                <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono" value="<?php echo $row['Telefono'] ?>">
                                <input type="text" class="form-control mb-3" name="Domicilio" placeholder="Domicilio" value="<?php echo $row['Domicilio'] ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_de_nacimiento" placeholder="Fecha de nacimiento" value="<?php echo $row['Fecha_de_nacimiento'] ?>">
                                <input type="text" class="form-control mb-3" name="Materia" placeholder="Materia" value="<?php echo $row['Materia'] ?>">
                                <input type="email" class="form-control mb-3" name="Email" placeholder="Email" value="<?php echo $row['Email'] ?>">
                                <input type="number" class="form-control mb-3" name="Grupos" placeholder="Grupos" value="<?php echo $row['Grupos'] ?>">
                                <input type="number" class="form-control mb-3" name="Salon" placeholder="Salon" value="<?php echo $row['Salon'] ?>">
                                <input type="text" class="form-control mb-3" name="Turno" placeholder="Turno" value="<?php echo $row['Turno'] ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>