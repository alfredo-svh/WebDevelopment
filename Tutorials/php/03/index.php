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
				<?php
					$name = 'Alfredo';
					$last = 'Sepulveda';

					echo $name . ' ' . $last;

					$age = 22;
					echo '<hr>';

					echo $name . " age: " . $age;
				?>
              
			</div>
		</div>




	</body>
</html>