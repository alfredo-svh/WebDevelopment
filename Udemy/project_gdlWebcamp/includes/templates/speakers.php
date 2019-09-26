<?php
	try{
		require_once('includes/functions/db_connection.php');
		$sql = "SELECT * FROM speakers";
		$result = $conn->query($sql);
	} catch(\Exception $e){
		echo $e->getMessage();
	}
?>

<section class="speakers container section">
	<h2>Our Guest speakers</h2>
	<ul class="speakersList clearfix">
		<?php
			while($speakers = $result->fetch_assoc()){ ?>
				<li>
					<div class="speaker">
						<a class="speaker-info" href="#speaker<?php echo $speakers['speaker_id']; ?>">
							<img src="img/<?php echo $speakers['image_url'];?>" alt="speaker1 image">
							<p><?php echo $speakers['speaker_first'] . " " . $speakers['speaker_last']; ?></p>
						</a>
					</div>
				</li>
				<div style="display:none;">
					<div class="speakerInfo" id="speaker<?php echo $speakers['speaker_id']; ?>">
						<h2><?php echo $speakers['speaker_first'] . " " . $speakers['speaker_last']; ?></h2>
						<img src="img/<?php echo $speakers['image_url'];?>" alt="speaker1 image">
						<p><?php echo $speakers['description'];?></p>
					</div>
				</div><?php
			}

		?>
	</ul>
</section>

<?php
	$conn->close();
?>