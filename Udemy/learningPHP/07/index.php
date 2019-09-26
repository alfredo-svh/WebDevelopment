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
				
					if(1 > 0){
						echo '1 is greater';
					} else{
						echo '1 is smaller';
					}

					echo '<hr>';

					$age1 =11;
					$age2 = 11;

					if($age1 > $age2){
						echo 'age1 is greater';
					} else if($age1 == $age2){
						echo 'both ages are equal';
					}else{
						echo 'age1 is smaller';
					}

				
				?>
              
			</div>
		</div>




	</body>
</html>