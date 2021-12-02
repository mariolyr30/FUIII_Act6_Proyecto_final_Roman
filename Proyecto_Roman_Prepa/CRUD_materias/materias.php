<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM materias";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA MATERIAS</title>
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

                                    <input type="int" class="form-control mb-3" name="Clave" placeholder="Clave de la materia" >
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre de la materia" >
                                    <input type="text" class="form-control mb-3" name="Semestre" placeholder="Semestre" >
                                    <input type="text" class="form-control mb-3" name="DNI_Maestro" placeholder="DNI del maestro" >
                                    <input type="text" class="form-control mb-3" name="Horas" placeholder="Horas de la materia" >

                                    <input type="submit" class="btn btn-primary"><br><br>
                                    <a href="/Proyecto_Roman_Prepa/index.php">Inicio</a><br><br>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Clave</th>
                                        <th>Nombre</th>
                                        <th>Semestre</th>
                                        <th>DNI Maestro</th>
                                        <th>Horas</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Clave']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Semestre']?></th>
                                                <th><?php  echo $row['DNI_Maestro']?></th>
                                                <th><?php  echo $row['Horas']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['Clave'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Clave'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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