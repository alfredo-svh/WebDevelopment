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

				<?php
					$languages[] = 'Python';
					$languages[5] = 'Java';
				
				?>

				<pre>
					<?php print_r($languages); ?>
				</pre>

				<?php
					$java = array_pop($languages);
				?>

				<h1><?php echo $java; ?></h1>

				<pre>
					<?php print_r($languages); ?>
				</pre>

				<?php unset($languages[0]); //removes first element from array ?>
              
				<pre>
					<?php print_r($languages); ?>
				</pre>

				<?php $html = array_shift($languages); //removes first element, returns value ?>
				<h1><?php echo $html; ?></h1>

				<pre>
					<?php print_r($languages); ?>
				</pre>

				<?php //removes a group of elements, adds other elements, returns removed array ?>
				<?php $array = array_splice($languages, 1, 1, array('AngularJS', 'jQuery')); ?>

				<pre>
					<?php print_r($array); ?>
				</pre>
				<pre>
					<?php print_r($languages); ?>
				</pre>

			</div>
		</div>




	</body>
</html>