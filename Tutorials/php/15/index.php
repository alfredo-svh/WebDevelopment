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
					$languages = array('CSS', 'HTML', 'JavaScript', 'jQuery', 'Python');
				?>

				<h2>Languages I know</h2>
				<ul>
					<?php foreach($languages as $language): ?>
						<li><?php echo $language; ?></li>
					<?php endforeach; ?>
				</ul>

				<?php
					$person = array(
						'name' => 'Alfredo',
						'country' => 'Mexico',
						'profession' => 'student'
					);

				?>

				<h2>Personal Data</h2>
				<ul>
					<?php foreach($person as $key => $val): ?>
						<li><?php echo $key . ': ' . $val; ?></li>
					<?php endforeach; ?>
				</ul>

			</div>
		</div>




	</body>
</html>