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
					echo '10+20 = ' . (10+20);
				?>

				<hr>

				<?php 
				
					$num1 =10;
					$num2 =20;
					$num3 =30;
					$num4 =40;

					//sum
					echo $num1 + $num2;

					echo '<hr>';

					//substraction
					echo $num3 - $num4;

					echo '<hr>';
					//mult
					echo $num1 * $num2;

					echo '<hr>';

					//div
					echo $num3 / $num4;
					echo '<hr>';

					//plusPlus
					$num1++;
					echo $num1;
					echo '<hr>';

					//minusMinus
					$num1--;
					echo $num1;
					echo '<hr>';

					//otherOperations
					$total = 0;
					$total +=10;
					$total +=20;

					echo $total;
					echo '<hr>';

					$total = 100;
					$total -=10;
					$total -=20;
					echo $total;

					//modulus
					echo '<hr>';
					echo 20%3;


				
				?>
              
			</div>
		</div>




	</body>
</html>