<?php
	if(isset($_POST['submit'])){
		if($error == UPLOAD_ERR_OK){
			$logo = $_FILES["logo"]["name"];
		}
		if(isset($_POST['name'])){
			$name = $_POST['name'];
		}
		if(isset($_POST['objective'])){
			$objective = $_POST['objective'];
		}
		if(isset($_POST['date'])){
			$date = $_POST['date'];
		}
		if(isset($_POST['carreras'])){
			$carreras = $_POST['carreras'];
		}
		if(isset($_POST['contact_name'])){
			$contact_name = $_POST['contact_name'];
		}
		if(isset($_POST['contact_email'])){
			$contact_email = $_POST['contact_email'];
		}

		try{
			require_once('functions/db_connection.php');
			$sql = "INSERT INTO convenios VALUES (null, '{$logo}', '{$name}', '{$objective}', '{$date}');";
			$result = $conn->query($sql);
		} catch(Exception $e){
			$error = $e->getMessage();
		}
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
				<?php
					if($result){
						try{
							$sql2 = "SELECT max(id) from convenios;";
							$result2 = $conn->query($sql2);
							$con_id = $result2->fetch_assoc()['max(id)'];


							for($i=0;$i<count($contact_name);$i++){
								$sql3 = "INSERT INTO contact_info VALUES ('{$contact_email[$i]}', '{$contact_name[$i]}', {$con_id});";
								$result3 = $conn->query($sql3);
							}

							for($i=0;$i<count($carreras);$i++){
								$sql4 = "SELECT id from carreras WHERE upper(name) = upper('{$carreras[$i]}');";
								$result4 = $conn->query($sql4);
								$car_id = $result4->fetch_assoc()['id'];
								$sql5 = "INSERT INTO carreras_convenios VALUES ({$car_id}, {$con_id});";
								$result5 = $conn->query($sql5);
							}
						}catch(Exception $e){
							$error = $e->getMessage();
						}
						if($result2 && $result3 && $result4 && $result5){
							echo "Convenio creado";
						}else {
							echo "Error " . $conn->error;
						}
					} else{
						echo "Error " . $conn->error;
					}
				?>
				<br>
				<a class="volver" href="index.php">Volver a Convenios</a>
			</div>

		</div>

		<?php
			$conn->close();
		?>
	
	</body>
</html>