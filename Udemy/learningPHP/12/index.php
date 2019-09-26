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

					$person = array(
						'name' => 'Alfredo',
						'country' => 'Mexico',
						'profession' => 'student'
					);
				?>

				<pre>
					<?php print_r($person); ?>
				</pre>

				<?php echo $person['profession']; ?>

				<pre>
					<?php print_r(array_values($person)); ?>
				</pre>
				<pre>
					<?php print_r(array_keys($person)); ?>
				</pre>

			</div>
		</div>




	</body>
</html>