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

				<h2>While Loops</h2>

				<?php
					$premier = array('chelsea', 'manCity', 'manUtd', 'arsenal', 'liverpool', 'tottenham', 'westHam');

					$i = 0;

					while($i<= count($premier)){
						if(count($premier) > 0){
							echo $premier[$i] . '<br>';
							if($i+1 === count($premier)){
								echo 'end';
							}
						} else{
							echo 'no results';
						}
						$i++;
					}
				?>

			</div>
		</div>




	</body>
</html>