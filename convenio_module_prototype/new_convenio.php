<?php
	try{
		require_once('functions/db_connection.php');
		$sql = 'SELECT * FROM convenios';
		$result = $conn->query($sql);
	} catch(Exception $e){
		$error = $e->getMessage();
	}
?>

<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Nuevo Convenio</title>
		<link rel="stylesheet" href="css/styles.css" media="screen">
	</head>

	<body>

		<div class="container">
			<h1>Agregar Nuevo Convenio</h1>

			<div class="content" id="add_convenio_form">
				<form enctype="multipart/form-data" action="agregar.php" method="post">
					<div class="field">
						<label for="logo">Logo
							<input type="file" name="logo" id="logo" accept="image/*">
						</label>
					</div>
					<div class="field">
						<label for="name">Nombre del Convenio
							<input type="text" name="name" id="name" placeholder="Nombre del convenio">
						</label>
					</div>
					<div class="field">
						<label for="objective">Objetivo
							<textarea name="objective" id="objective" placeholder="Objetivo"></textarea>
						</label>
					</div>
					<div class="field">
						<label for="date">Fecha de registro
							<input type="date" name="date" id="date" placeholder="Fecha de registro">
						</label>
					</div>
					<div class="field">
						<label for="carreras" >Carreras que pueden aplicar
							<div class="carrera_fields_wrap">
								<input type="text" name="carreras[]" id="carreras" placeholder="Carrera">
								<button id="add_carrera_button">Añade más carreras</button>
							</div>
						</label>
					</div>
					<div class="field">
						<label for="contacto">Informacion del contacto
							<div class="contact_fields_wrap">
								<input type="text" name="contact_name[]" id="contact_name" placeholder="Nombre del contacto">
								<input type="text" name="contact_email[]" id="contact_email" placeholder="Email del contacto">
								<button id="add_contact_button">Añade más contactos</button>
							</div>
						</label>
					</div>
					<div id="error"></div>
					<input type="submit" name="submit" value="Agregar">
				</form>

				<br>
				<a class="volver" href="index.php">Regresar a Convenios</a>
			</div>

		</div>

		<?php $conn->close(); ?>

		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
		<script src="js/plugins.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>