<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumnos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNOS</title>
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
                                    
                                    <input type="int" class="form-control mb-3" name="No_de_control" placeholder="No. de contro" >
                                <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombre(s)" >
                                <input type="text" class="form-control mb-3" name="Ap_Materno" placeholder="Apellido materno" >
                                <input type="text" class="form-control mb-3" name="Ap_Paterno" placeholder="Apellido paterno" >
                                <input type="date" class="form-control mb-3" name="Fecha_de_nacimiento" placeholder="Fecha de nacimiento" >
                                <input type="text" class="form-control mb-3" name="Sexo" placeholder="Sexo" >
                                <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono" >
                                <input type="text" class="form-control mb-3" name="CURP" placeholder="CURP" >
                                <input type="text" class="form-control mb-3" name="Especialidad" placeholder="Especialidad" >
                                <input type="number" class="form-control mb-3" name="Semestre" placeholder="Semestre" >
                                <input type="text" class="form-control mb-3" name="Promedio" placeholder="Promedio" >
                                <input type="text" class="form-control mb-3" name="Turno" placeholder="Turno" >
                                    <input type="submit" class="btn btn-primary"><br><br>
                                    <a href="/Proyecto_Roman_Prepa/index.php">Inicio</a><br><br>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>No. de control</th>
                                        <th>Nombre(s)</th>
                                        <th>Apellido materno</th>
                                        <th>Apellido paterno</th>
                                        <th>Fecha de nacimiento</th>
                                        <th>Sexo</th>
                                        <th>Telefono</th>
                                        <th>CURP</th>
                                        <th>Especialidad</th>
                                        <th>Semestre</th>
                                        <th>Promedio</th>
                                        <th>Turno</th>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['No_de_control']?></th>
                                                <th><?php  echo $row['Nombres']?></th>
                                                <th><?php  echo $row['Ap_Materno']?></th>
                                                <th><?php  echo $row['Ap_Paterno']?></th>
                                                <th><?php  echo $row['Fecha_de_nacimiento']?></th>
                                                <th><?php  echo $row['Sexo']?></th>
                                                <th><?php  echo $row['Telefono']?></th>
                                                <th><?php  echo $row['CURP']?></th>
                                                <th><?php  echo $row['Especialidad']?></th> 
                                                <th><?php  echo $row['Semestre']?></th>
                                                <th><?php  echo $row['Promedio']?></th>
                                                <th><?php  echo $row['Turno']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['No_de_control'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['No_de_control'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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