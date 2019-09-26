<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	try{
		require_once('functions/db_connection.php');
		$sql = "SELECT full_name, email FROM contact_info WHERE convenio_id = {$id};";
		$sql2 = "SELECT carreras.name FROM carreras_convenios, carreras WHERE carreras_convenios.convenio_id = {$id} and carreras.id = carreras_convenios.carrera_id;";
		$sql3 = "SELECT name FROM convenios where id = {$id};";
		$result = $conn->query($sql);
		$result2 = $conn->query($sql2);
		$result3 = $conn->query($sql3);
	} catch(Exception $e){
		$error = $e->getMessage();
	}
?>

<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Convenios</title>
		<link rel="stylesheet" href="css/styles.css" media="screen">
	</head>

	<body>
		<div class="container">
			<h1>Convenios</h1>

			<div class="content">
				<h2>Convenio <span><?php echo $result3->fetch_assoc()['name']; ?></span></h2><br>
				<ul class="contactList clearfix">
					<h4>Info de Contacto:</h4>
					<?php
						while($convenios = $result->fetch_assoc()){ ?>
							<li>
								<div class="info">
									<p><?php echo $convenios['full_name'] . " - " . $convenios['email']; ?></p>
								</div>
							</li>
							<?php
						}

					?>
				</ul>
				<ul class="carrerasList clearfix">
					<h4>Carreras que pueden aplicar:</h4>
					<?php
						while($carreras = $result2->fetch_assoc()){ ?>
							<li>
								<div class="carreras">
									<p><?php echo $carreras['name']; ?></p>
								</div>
							</li>
							<?php
						}

					?>
				</ul>
			</div>
		</div>

		<?php $conn->close(); ?>

	</body>
</html>