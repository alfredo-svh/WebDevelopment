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
		<title>Convenios</title>
		<link rel="stylesheet" href="css/styles.css" media="screen">
	</head>

	<body>
		<div class="container">
			<h1>Convenios</h1>

			<div class="content">
				<h2>Nuevo Convenio</h2>
				<form action="new_convenio.php" method="post">
					<input type="submit" value="Agregar Nuevo">
				</form>
			</div>

			<div class="content existing">
				<h2>Convenios Existentes</h2>
				<p>
					Numero de Convenios: <?php echo $result->num_rows; ?>
				</p>

				<table>
					<thead>
						<tr>
							<th>Logo</th>
							<th>Nombre</th>
							<th>Objetivo</th>
							<th>Fecha de registro</th>
							<th>Detalles</th>
						</tr>
					</thead>

					<tbody>
						<?php while($convenios = $result->fetch_assoc()){ ?>
							<tr>
								<td class="logo">
									<img src="img/<?php echo $convenios['logo_url'];?>">
								</td>
								<td class="name"><?php echo $convenios['name']; ?></td>
								<td class="objective"><?php echo $convenios['objective']; ?></td>
								<td><?php echo $convenios['register_date']; ?></td>
								<td class="detalles">
									<a href="detalles.php?id=<?php echo $convenios['id']; ?>" target="_blank">
										Detalles
									</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>

		</div>

		<?php $conn->close(); ?>
	
	</body>
</html>