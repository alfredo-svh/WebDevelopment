<?php include_once 'includes/templates/header.php'; ?>

<section class="section container">
	<h2>Calendar of Events</h2>
	<?php
		try{
			require_once('includes/functions/db_connection.php');
			$sql = "SELECT event_id, event_name, event_date, event_time, event_cat, icon, speaker_first, speaker_last FROM events INNER JOIN event_category ON events.event_cat_id = event_category.category_id INNER JOIN speakers ON events.spk_id = speakers.speaker_id ORDER BY event_id";
			$result = $conn->query($sql);
		} catch(\Exception $e){
			echo $e->getMessage();
		}
	?>

	<div class="calendar">
		<?php
			$calendar = array();
			while($events = $result->fetch_assoc()){
				$date = $events['event_date'];
				$event = array(
					'title' => $events['event_name'],
					'date' => $events['event_date'],
					'time' => $events['event_time'],
					'category' => $events['event_cat'],
					'icon' => 'fa ' . $events['icon'],
					'speaker' => $events['speaker_first'] . " " . $events['speaker_last']
				);

				$calendar[$date][] = $event;

			}

			foreach($calendar as $day => $event_list){ ?>
				<h3>
					<i class="far fa-calendar-alt"></i>
					<?php echo date("F j, Y", strtotime($day)); ?>
				</h3>

				<?php foreach($event_list as $event){ ?>
					<div class='day'>
						<p class="title"><?php echo $event['title'] ?></p>
						<p class="time"><i class="far fa-clock" aria-hidden="true"></i><?php echo $event['date'] . " " . $event['time']; ?></p>
						<p><i class="<?php echo $event['icon'] ?>" aria-hidden="true"></i><?php echo $event['category']; ?></p>
						<p><i class="fa fa-user" aria-hidden="true"></i><?php echo $event['speaker']; ?></p>
					</div>
				<?php }

			}
		?>

		
	</div> <!-- .calendar-->

	<?php
		$conn->close();
	?>
	
</section>

<?php include_once 'includes/templates/footer.php'; ?>