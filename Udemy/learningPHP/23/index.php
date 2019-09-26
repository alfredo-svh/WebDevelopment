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
					$phoneBook = array();

					function saveUser($name, $phone){
						global $phoneBook;
						$phoneBook[] = array($name, $phone);
					}

					saveUser('Alfredo', '123460');
					saveUser('Miguel', '567812');
					saveUser('Alma', '987654');

					function showUser($id){
						global $phoneBook;
						$user = $phoneBook[$id];
						foreach($user as $u){
							echo $u . '<br>';
						}
					}
					showUser(0);
				?>

			</div>
		</div>




	</body>
</html>