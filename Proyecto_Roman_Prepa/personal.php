<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Formulario de Personal</h1>
			</div>

			<div class="articulo">
		
				<article class="form-register">
					
				<h4>Formulario de Registro</h4>
				<input class="controls" type="text" name="RFC" id="RFC" placeholder="Ingrese su RFC">
                <input class="controls" type="text" name="Nombres" id="Nombres" placeholder="Ingrese su Nombre(s)">
                <input class="controls" type="text" name="Apellidos" id="Apellidos" placeholder="Ingrese sus Apellidos">
                <input class="controls" type="text" name="Telefono" id="Telefono" placeholder="Ingrese su Telefono">
                <input class="controls" type="date" name="Fecha_de_nacimiento" id="Fecha_de_nacimiento" placeholder="Ingrese su Fecha de nacimiento">
                <input class="controls" type="text" name="Area" id="Area" placeholder="Ingrese el Area que le corresponde">
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