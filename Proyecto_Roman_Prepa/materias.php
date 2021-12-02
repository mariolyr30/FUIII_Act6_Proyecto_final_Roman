<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Formulario de Materias</h1>
			</div>

			<div class="articulo">
		
				<article class="form-register">
					
				<h4>Formulario de Registro</h4>
				<input class="controls" type="text" name="Clave" id="Clave" placeholder="Ingrese la Clave de la materia">
                <input class="controls" type="text" name="Nombre" id="Nombre" placeholder="Ingrese el Nombre de la materia">
                <input class="controls" type="number" name="Semestre" id="Semestre" placeholder="Ingrese el semestre">
                <input class="controls" type="text" name="DNI Maestro" id="DNI Maestro" placeholder="Ingrese su DNI">
                <input class="controls" type="number" name="Horas" id="Horas" placeholder="Ingrese las horas">
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