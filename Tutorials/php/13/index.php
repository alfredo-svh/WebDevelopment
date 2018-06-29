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
						'data' => array(
							'name' => 'Alfredo',
							'country' => 'Mexico',
							'profession' => 'student'
						),
						'languages' => array(
							'front_end' => array('css', 'html5', 'javascript', 'jquery'),
							'back_end' => array('php', 'mysql', 'python')
						)
					);
				?>

				<pre>
					<?php print_r($person['languages']['front_end'][2]); ?>
				</pre>

			</div>
		</div>




	</body>
</html>