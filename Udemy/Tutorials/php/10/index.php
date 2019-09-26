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
					$languages = ['CSS', 'HTML', 'JavaScript', 'jQuery'];
				?>

				<pre>
					<?php print_r($languages); ?>
				</pre>
				<?php echo $languages[2]; ?>

				<?php
					$languages1 = array('CSS', 'jQuery', 'PHP', 'MySql', 20);
					echo $languages1[3];
				?>

				<pre>
					<?php var_dump($languages1); ?>
				</pre>
              
			</div>
		</div>

		


	</body>
</html>