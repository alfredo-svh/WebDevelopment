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

					$language ='PHP';
					
					switch($language){
						case 'PHP':
							echo 'Backend';
							break;

						case 'JavaScript':
							echo 'frontend & backend (NodeJS)';
							break;

						case 'HTML5':
							echo 'frontend';
							break;

						default:
							echo 'not valid';
							break;
					}
				
				?>
              
			</div>
		</div>




	</body>
</html>