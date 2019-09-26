<?php include_once 'includes/templates/header.php'; ?>
		
		<section class="section container">
			<h2>The best web design conference in Spanish</h2>
			<p>
			Ut cursus tellus quis diam laoreet auctor. Fusce luctus, eros a tristique consectetur, justo turpis rutrum dolor, vitae ultrices lorem nisl eu libero. Nulla fringilla, orci iaculis condimentum commodo, diam lorem porta justo, sit amet sagittis magna ipsum non quam.
			</p>
		</section> <!--.section-->
		
		<section class="schedule">
			<div class="videoContainer">
				<video autoplay loop poster="bg-talleres.jpg">
					<source src="video/video.mp4" type="video/mp4">
					<source src="video/video.webm" type="video/webm">
					<source src="video/video.ogv" type="video/ogv">
				</video>
			</div> <!--.videoContainer-->
			
			<div class="scheduleContent">
				<div class="container">
					<div class="eventSchedule">
						<h2>Event Schedule</h2>

						<?php
							try{
								require_once('includes/functions/db_connection.php');
								$sql = "SELECT * FROM event_category;";
								$result = $conn->query($sql);
							} catch(Exception $e){
								$error = $e->getMessage();
							}
						?>

						<nav class="scheduleMenu">
							<?php while($cat = $result->fetch_assoc()){
								$category = $cat['event_cat']; ?>
								<a href="#<?php echo strtolower($category); ?>s">
									<i class="fas <?php echo $cat['icon']; ?>" aria-hidden="true"></i><?php echo $category ?>s
								</a>
							<?php } ?>
						</nav>

						<?php
							try{
								require_once('includes/functions/db_connection.php');
								$sql = "SELECT event_id, event_name, event_date, event_time, event_cat, speaker_first, speaker_last FROM events INNER JOIN event_category ON events.event_cat_id = event_category.category_id INNER JOIN speakers ON events.spk_id = speakers.speaker_id AND events.event_cat_id = 1 ORDER BY event_id LIMIT 2;";
								$sql .= "SELECT event_id, event_name, event_date, event_time, event_cat, speaker_first, speaker_last FROM events INNER JOIN event_category ON events.event_cat_id = event_category.category_id INNER JOIN speakers ON events.spk_id = speakers.speaker_id AND events.event_cat_id = 2 ORDER BY event_id LIMIT 2;";
								$sql .= "SELECT event_id, event_name, event_date, event_time, event_cat, speaker_first, speaker_last FROM events INNER JOIN event_category ON events.event_cat_id = event_category.category_id INNER JOIN speakers ON events.spk_id = speakers.speaker_id AND events.event_cat_id = 3 ORDER BY event_id LIMIT 2;";
							} catch(Exception $e){
								$error = $e->getMessage();
							}
						
							$conn->multi_query($sql);

							do{
								$result = $conn->store_result();

								$i=0;
								while($event = $result->fetch_assoc()){
									if($i%2 == 0){ ?>
										<div id="<?php echo strtolower($event['event_cat']); ?>s" class="courseInfo hide clearfix"><?php
									} ?>

									<div class="eventDetail">
										<h3><?php echo html_entity_decode($event['event_name']); ?></h3>
										<p><i class="far fa-clock" aria-hidden="true"></i> <?php echo $event['event_time']; ?></p>
										<p><i class="far fa-calendar-alt" aria-hidden="true"></i> <?php echo $event['event_date']; ?></p>
										<p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $event['speaker_first'] . " " . $event['speaker_last']; ?></p>
									</div> <?php
									
									if($i%2 == 1){ ?>
										<a href="calendar.php" class="button float-right">See all</a>
										</div> <!--#workshops--><?php
									}
									$i++;
								}
								$result->free();
							} while($conn->more_results() && $conn->next_result());
						?>

					</div> <!--.eventSchedule-->
				</div> <!--.container-->
			</div> <!--.scheduleContent-->
		</section> <!--.schedule-->
		
		<?php include_once 'includes/templates/speakers.php'; ?>

		<div class="counter parallax">
			<div class="container">
				<ul class="eventSummary clearfix">
					<li><p class="number">0</p> Guest Speakers</li>
					<li><p class="number">0</p> Workshops</li>
					<li><p class="number">0</p> Days</li>
					<li><p class="number">0</p> Conferences</li>
				</ul>
			</div>
		</div>

		<section class="prices section">
			<h2>Prices</h2>
			<div class="container">
				<ul class="priceList clearfix">
					<li>
						<div class="priceTable">
							<h3>Day pass</h3>
							<p class="number">$30</p>
							<ul>
								<li>Free Snacks</li>
								<li>All conferences</li>
								<li>All workshops</li>
							</ul>
							<a href="#" class="button hollow">Buy</a>
						</div>
					</li>

					<li>
						<div class="priceTable">
							<h3>All days</h3>
							<p class="number">$50</p>
							<ul>
								<li>Free Snacks</li>
								<li>All conferences</li>
								<li>All workshops</li>
							</ul>
							<a href="#" class="button">Buy</a>
						</div>
					</li>

					<li>
						<div class="priceTable">
							<h3>2-Day pass</h3>
							<p class="number">$45</p>
							<ul>
								<li>Free Snacks</li>
								<li>All conferences</li>
								<li>All workshops</li>
							</ul>
							<a href="#" class="button hollow">Buy</a>
						</div>
					</li>
				</ul>
			</div>
		</section>

		<div id="map" class="map"></div>

		<section class="section">
			<h2>Testimonials</h2>
			<div class="testimonials container clearfix">
				<div class="testimonial">
					<blockquote>
						<p>Duis mattis velit eu suscipit aliquet. Nunc sodales dolor vel elit pretium pharetra. Morbi lacinia pharetra varius. Donec non blandit nunc, eget vestibulum erat.</p>
						<footer class="testimonialInfo clearfix">
							<img src="img/testimonial.jpg" alt="testimonial image">
							<cite>Oswaldo Aponte Escobedo<span> Designer at @prisma</span></cite>
						</footer>
					</blockquote>
				</div> <!--.testimonial-->

				<div class="testimonial">
					<blockquote>
						<p>Duis mattis velit eu suscipit aliquet. Nunc sodales dolor vel elit pretium pharetra. Morbi lacinia pharetra varius. Donec non blandit nunc, eget vestibulum erat.</p>
						<footer class="testimonialInfo clearfix">
							<img src="img/testimonial.jpg" alt="testimonial image">
							<cite>Oswaldo Aponte Escobedo<span> Designer at @prisma</span></cite>
						</footer>
					</blockquote>
				</div> <!--.testimonial-->

				<div class="testimonial">
					<blockquote>
						<p>Duis mattis velit eu suscipit aliquet. Nunc sodales dolor vel elit pretium pharetra. Morbi lacinia pharetra varius. Donec non blandit nunc, eget vestibulum erat.</p>
						<footer class="testimonialInfo clearfix">
							<img src="img/testimonial.jpg" alt="testimonial image">
							<cite>Oswaldo Aponte Escobedo<span> Designer at @prisma</span></cite>
						</footer>
					</blockquote>
				</div> <!--.testimonial-->
			</div>
		</section>

		<div class="newsletter parallax">
			<div class="content container">
				<p>Sign up for the newsletter:</p>
				<h3>gdlwebcamp</h3>
				<a href="#" class="button transparent">Sign up</a>
			</div> <!--.content-->
		</div> <!--.newsletter-->

		<section class="section">
			<h2>Time left:</h2>
			<div class="countdown container">
				<ul class="clearfix">
					<li><p id="days" class="number"></p> days</li>
					<li><p id="hours" class="number"></p> hours</li>
					<li><p id="minutes" class="number"></p> minutes</li>
					<li><p id="seconds" class="number"></p> seconds</li>
				</ul>
			</div>
		</section>

<?php include_once 'includes/templates/footer.php'; ?>