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

				<h2>For Loops</h2>

				<?php
					$languages = array('CSS', 'HTML', 'JavaScript', 'jQuery', 'Python');

					for($i = 0;$i<count($languages); $i++){
						echo $languages[$i] . '<br>';
						
					}

					for($i = 0;$i<=100; $i++){
						if($i == 5){
							echo 'Five <br>';
							continue;
						}
						echo $i . '<br>';
						
					}
				?>

			</div>
		</div>




	</body>
</html>