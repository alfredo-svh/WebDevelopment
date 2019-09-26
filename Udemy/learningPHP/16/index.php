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

				<h2>Foreach multy-dimensional arrays</h2>

				<ul>
					<?php foreach($person['data'] as $personn): ?>
						<li><?php echo $personn; ?></li>
					<?php endforeach; ?>

					<?php foreach($person as $leng): ?>
						<?php if(array_key_exists('front_end', $leng)): ?>
							<h2>Front End Languages</h2>
							<?php foreach($leng['front_end'] as $front): ?>
								<li><?php echo $front; ?></li>
							<?php endforeach; ?>
						<?php endif; ?>
						<?php if(array_key_exists('back_end', $leng)): ?>
							<h2>Back End Languages</h2>
							<?php foreach($leng['back_end'] as $back): ?>
								<li><?php echo $back; ?></li>
							<?php endforeach; ?>
						<?php endif; ?>
					<?php endforeach; ?>

				</ul>

			</div>
		</div>




	</body>
</html>