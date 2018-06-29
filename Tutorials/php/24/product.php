<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Learning PHP</title>
		<link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

		<link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
	</head>

	<body>

		<div class="container">
			<h1>Learning PHP</h1>

			<div class="content">

				<h2>Product Description</h2>

				<p>ID: <?php echo htmlspecialchars($_GET['id']); ?></p>
				<p>name: <?php echo htmlspecialchars($_GET['name']); ?></p>

			</div>
		</div>




	</body>
</html>