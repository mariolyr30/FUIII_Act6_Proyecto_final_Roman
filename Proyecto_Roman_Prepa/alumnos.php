<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Formulario de Alumnos</h1>
			</div>

			<div class="articulo">
		
				<article class="form-register">
					
				<h4>Formulario de Registro</h4>
				<input class="controls" type="int" name="No. de control" id="No. de control" placeholder="Ingrese su numero de control">
                <input class="controls" type="text" name="Nombre(s)" id="Nombre(s)" placeholder="Ingrese su Nombre(s)">
                <input class="controls" type="text" name="Ap.Materno" id="Ap.Materno" placeholder="Ingrese su Apellido materno">
                <input class="controls" type="text" name="Ap.Paterno" id="Ap.Paterno" placeholder="Ingrese su Apellido paterno">
                <input class="controls" type="date" name="Fecha_de_nacimiento" id="Fecha_de_nacimiento" placeholder="Ingrese su Fecha de nacimiento">
                <input class="controls" type="text" name="Sexo" id="Sexo" placeholder="Ingrese su Sexo">
                <input class="controls" type="text" name="Telefono" id="Telefono" placeholder="Ingrese su Telefono">
                <input class="controls" type="text" name="CURP" id="CURP" placeholder="Ingrese su CURP">
                <input class="controls" type="text" name="Especialidad" id="Especialidad" placeholder="Ingrese su Especialidad">
                <input class="controls" type="number" name="Semestre" id="Semestre" placeholder="Ingrese su Semestre">
                <input class="controls" type="text" name="Promedio" id="Promedio" placeholder="Ingrese su Promedio">
                <input class="controls" type="text" name="Turno" id="Turno" placeholder="Ingrese su Turno">
                <input class="botons" type="submit" value="Registrar">
                
                <br>
				</article>
			</div>

			<?php include('sidebar.php'); ?>
		</div>
	</section>
	<?php include('footer.php'); ?>
</body>
</html>