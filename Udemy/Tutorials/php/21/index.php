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
						return $contact = $name . ' ' . $phone;
					}

					$user = user('Alfredo', '1234-1234');

					echo $user;
				?>

			</div>
		</div>




	</body>
</html>