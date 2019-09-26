<?php
	if(isset($_POST['submit'])){
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$gift = $_POST['gift'];
		$total = $_POST['order_total'];
		$date = date('Y-m-d H:i:s');
		// Orders
		$tickets = $_POST['tickets'];
		$shirts = $_POST['shirts_order'];
		$stickers = $_POST['stickers_order'];
		include_once 'includes/functions/functions.php';
		$order = products_json($tickets, $shirts, $stickers);
		$events = $_POST['register'];
		$register = events_json($events);
		try{
			require_once('includes/functions/db_connection.php');
			$stmt = $conn->prepare("INSERT INTO registered (registered_first, registered_last, register_email, register_date, passes_articles, registered_workshops, gift, total_paid) VALUES( ?, ?, ?, ?, ?, ?, ?, ?);");
			$stmt->bind_param("ssssssis", $firstName, $lastName, $email, $date, $order, $register, $gift, $total);
			$stmt->execute();
			$stmt->close();
			$conn->close();
			header('Location: validate_register.php?success=1');
		} catch (Exception $e){
			$error = $e->getMessage();
		}
	}
?>

<?php include_once 'includes/templates/header.php'; ?>

<section class="section container">
	<h2>Registration Summary</h2>

	<?php
		if(isset($_GET['success'])){
			if($_GET['success'] == 1){
				echo "Registration successful";
			}
		}
	?>

</section>

<?php include_once 'includes/templates/footer.php'; ?>