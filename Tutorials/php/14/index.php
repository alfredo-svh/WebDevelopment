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
					$languages = array('CSS', 'HTML', 'JavaScript', 'jQuery');
					$exists = in_array('HTMjL', $languages);
				?>

				<pre>
					<?php var_dump($exists); ?>
				</pre>

				<?php
					$person = array(
						'name' => 'Alfredo',
						'country' => 'Mexico',
						'profession' => 'student'
					);

					$exists2 = in_array('Alfredo', array_values($person));
				?>

				<pre>
					<?php var_dump($exists2); ?>
				</pre>

			</div>
		</div>




	</body>
</html>