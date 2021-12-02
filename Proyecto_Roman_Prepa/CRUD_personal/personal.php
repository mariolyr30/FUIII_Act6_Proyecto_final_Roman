<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM personal";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA PERSONAL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="RFC" placeholder="RFC">
                                    <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombre(s)" >
                                    <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" >
                                    <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono" >
                                    <input type="date" class="form-control mb-3" name="Fecha_de_nacimiento" placeholder="Fecha de nacimiento" >
                                    <input type="text" class="form-control mb-3" name="Area" placeholder="Area" >
                                    <input type="text" class="form-control mb-3" name="Turno" placeholder="Turno" >

                                    <input type="submit" class="btn btn-primary"><br><br>
                                    <a href="/Proyecto_Roman_Prepa/index.php">Inicio</a><br><br>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>RFC</th>
                                        <th>Nombre(s)</th>
                                        <th>Apellidos</th>
                                        <th>Telefono</th>
                                        <th>Fecha de nacimiento</th>
                                        <th>Area</th>
                                        <th>Turno</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['RFC']?></th>
                                                <th><?php  echo $row['Nombres']?></th>
                                                <th><?php  echo $row['Apellidos']?></th>
                                                <th><?php  echo $row['Telefono']?></th> 
                                                <th><?php  echo $row['Fecha_de_nacimiento']?></th> 
                                                <th><?php  echo $row['Area']?></th> 
                                                <th><?php  echo $row['Turno']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['RFC'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['RFC'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>