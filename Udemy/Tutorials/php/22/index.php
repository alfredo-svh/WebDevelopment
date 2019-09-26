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
					function user($name = 'John Doe', $phone = '00000000'){
						return $contact = $name . ' ' . $phone;
					}

					$user = user('Alfredo', '1234-1234');
					echo $user;
					echo '<hr>';

					$user2 = user('Miguel');
					echo $user2;
				?>

			</div>
		</div>




	</body>
</html>