<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}

	try{
		require_once('functions/bd_conexion.php');
		$sql = "DELETE FROM contactos WHERE id = {$id};";
		$resultado = $conn->query($sql);
	} catch(Exception $e){
		$error = $e->getMessage();
	}
?>

<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Agenda PHP</title>
		<link rel="stylesheet" href="css/estilos.css" media="screen">
	</head>

	<body>
		<div class="contenedor">
			<h1>Borrar Contacto</h1>

			<div class="contenido">
				<?php
					if($resultado){
						echo "Contacto eliminado";
					} else{
						echo "Error " . $conn->error;
					}
				?>
				<br>
				<a class="volver" href="index.php">Volver a inicio</a>
			</div>

		</div>

		<?php
			$conn->close();
		?>
	
	</body>
</html>