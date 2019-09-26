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

				<h2>Phonebook</h2>

				<?php
					function user($name, $phone){
						echo $name . '<br>';
						echo $phone . '<br>';
						echo '<hr>';
					}

					user('Alfredo', '1234-1234');
					user('Miguel', '9876-9876');
					user('Alma', '4567-4567');
				?>

			</div>
		</div>




	</body>
</html>