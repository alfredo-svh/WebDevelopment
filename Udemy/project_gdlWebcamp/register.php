<?php include_once 'includes/templates/header.php'; ?>

<section class="section container">
	<h2>User Registration</h2>
	<form id="register" class="register" action="validate_register.php" method="POST">
		<div id="userData" class="register box clearfix">
			<div class="field">
				<label for="firstName">First Name:</label>
				<input type="text" id="firstName" name="firstName" placeholder="Your First Name">
			</div>
			<div class="field">
				<label for="lastName">Last Name:</label>
				<input type="text" id="lastName" name="lastName" placeholder="Your Last Name">
			</div>
			<div class="field">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" placeholder="Your Email">
			</div>
			<div id="error"></div>
		</div> <!--#userData-->

		<div id="packets" class="packets">
			<h3>Choose the number of tickets</h3>
			<ul class="priceList clearfix">
				<li>
					<div class="priceTable">
						<h3>Day pass (Friday)</h3>
						<p class="number">$30</p>
						<ul>
							<li>Free Snacks</li>
							<li>All conferences</li>
							<li>All workshops</li>
						</ul>
						<div class="order">
							<label for="dayPass">Tickets wanted:</label>
							<input type="number" min="0" id="dayPass" size="3" name="tickets[]" placeholder="0">
						</div>
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
						<div class="order">
							<label for="fullPass">Tickets wanted:</label>
							<input type="number" min="0" id="fullPass" size="3" name="tickets[]" placeholder="0">
						</div>
					</div>
				</li>

				<li>
					<div class="priceTable">
						<h3>2-Day pass (Friday and Saturday)</h3>
						<p class="number">$45</p>
						<ul>
							<li>Free Snacks</li>
							<li>All conferences</li>
							<li>All workshops</li>
						</ul>
						<div class="order">
							<label for="twoDayPass">Tickets wanted:</label>
							<input type="number" min="0" id="twoDayPass" size="3" name="tickets[]" placeholder="0">
						</div>
					</div>
				</li>
			</ul>
		</div> <!--#packets-->

		<div id="events" class="events clearfix">
			<h3>Choose your workshops</h3>
			<div class="box">
				<div id="friday" class="dayContent clearfix">
					<h4>Friday</h4>
					<div>
						<p>Workshops:</p>
						<label><input type="checkbox" name="register[]" id="workshop_01" value="workshop_01"><time>10:00</time> Responsive Web Design</label>
						<label><input type="checkbox" name="register[]" id="workshop_02" value="workshop_02"><time>12:00</time> Flexbox</label>
						<label><input type="checkbox" name="register[]" id="workshop_03" value="workshop_03"><time>14:00</time> HTML5 & CSS3</label>
						<label><input type="checkbox" name="register[]" id="workshop_04" value="workshop_04"><time>17:00</time> Drupal</label>
						<label><input type="checkbox" name="register[]" id="workshop_05" value="workshop_05"><time>19:00</time> WordPress</label>
					</div>
					<div>
						<p>Conferences:</p>
						<label><input type="checkbox" name="register[]" id="conf_01" value="conf_01"><time>10:00</time> How to be a Freelancer</label>
						<label><input type="checkbox" name="register[]" id="conf_02" value="conf_02"><time>17:00</time> Technologies of the Future</label>
						<label><input type="checkbox" name="register[]" id="conf_03" value="conf_03"><time>19:00</time> Web Security</label>
					</div>
					<div>
						<p>Seminars:</p>
						<label><input type="checkbox" name="register[]" id="sem_01" value="sem_01"><time>10:00</time> UI & UX Design for mobile</label>
					</div>
				</div> <!--#friday-->
					
				<div id="saturday" class="dayContent clearfix">
					<h4>Saturday</h4>
					<div>
						<p>Workshops:</p>
						<label><input type="checkbox" name="register[]" id="workshop_06" value="workshop_06"><time>10:00</time> AngularJS</label>
						<label><input type="checkbox" name="register[]" id="workshop_07" value="workshop_07"><time>12:00</time> PHP & MySQL</label>
						<label><input type="checkbox" name="register[]" id="workshop_08" value="workshop_08"><time>14:00</time> Advanced JavaScript</label>
						<label><input type="checkbox" name="register[]" id="workshop_09" value="workshop_09"><time>17:00</time> SEO in Google</label>
						<label><input type="checkbox" name="register[]" id="workshop_10" value="workshop_10"><time>19:00</time> From Photoshop to HTML5 & CSS3</label>
						<label><input type="checkbox" name="register[]" id="workshop_11" value="workshop_11"><time>21:00</time> Intermediate & Advanced PHP</label>
					</div>
					<div>
						<p>Conferences:</p>
						<label><input type="checkbox" name="register[]" id="conf_04" value="conf_04"><time>10:00</time> How to create an online store that sells millions in a few days</label>
						<label><input type="checkbox" name="register[]" id="conf_05" value="conf_05"><time>17:00</time> The best places to find a job</label>
						<label><input type="checkbox" name="register[]" id="conf_06" value="conf_06"><time>19:00</time> Steps to create a profitable business</label>
					</div>
					<div>
						<p>Seminars:</p>
						<label><input type="checkbox" name="register[]" id="sem_02" value="sem_02"><time>10:00</time> Learn to code in a morning</label>
						<label><input type="checkbox" name="register[]" id="sem_03" value="sem_03"><time>17:00</time> UI & UX Design for mobile</label>
					</div>
				</div> <!--#saturday-->
						
				<div id="sunday" class="dayContent clearfix">
					<h4>Sunday</h4>
					<div>
						<p>Workshops:</p>
						<label><input type="checkbox" name="register[]" id="workshop_12" value="workshop_12"><time>10:00</time> Laravel</label>
						<label><input type="checkbox" name="register[]" id="workshop_13" value="workshop_13"><time>12:00</time> Create your own API</label>
						<label><input type="checkbox" name="register[]" id="workshop_14" value="workshop_14"><time>14:00</time> JavaScript & jQuery</label>
						<label><input type="checkbox" name="register[]" id="workshop_15" value="workshop_15"><time>17:00</time> Creating Wordpress templates</label>
						<label><input type="checkbox" name="register[]" id="workshop_16" value="workshop_16"><time>19:00</time> Virtual Stores using Magento</label>
					</div>
					<div>
						<p>Conferences:</p>
						<label><input type="checkbox" name="register[]" id="conf_07" value="conf_07"><time>10:00</time> How to do Marketing online</label>
						<label><input type="checkbox" name="register[]" id="conf_08" value="conf_08"><time>17:00</time> With which language should I start?</label>
						<label><input type="checkbox" name="register[]" id="conf_09" value="conf_09"><time>19:00</time> Open Source Frameworks & Libraries</label>
					</div>
					<div>
						<p>Seminars:</p>
						<label><input type="checkbox" name="register[]" id="sem_04" value="sem_04"><time>14:00</time> Creating an Android App in a morning</label>
						<label><input type="checkbox" name="register[]" id="sem_05" value="sem_05"><time>17:00</time> Creating an iOS App in an evening</label>
					</div>
				</div> <!--#sunday-->
			</div><!--.box-->
		</div> <!--#events-->

		<div id="summary" class="summary clearfix">
			<h3>Payment and extras</h3>
			<div class="box clearfix">
				<div class="extras">
					<div class="order">
						<label for="eventShirt">Event shirt $10 <small>(promo 7% discount)</small></label>
						<input type="number" min="0" id="eventShirt" name="shirts_order" size="3" placeholder="0">
					</div>
					<div class="order">
						<label for="stickers">10 stickers $2 <small>(HTML5, CSS3, JavaScript, Chrome)</small></label>
						<input type="number" min="0" id="stickers" name="stickers_order" size="3" placeholder="0">
					</div>
					<div class="order">
						<label for="gift">Select a gift</label><br>
						<select id="gift" name="gift" required>
							<option value="">- Select a gift --</option>
							<option value="2">Stickers</option>
							<option value="1">Bracelet</option>
							<option value="3">Pens</option>
						</select>
					</div>

					<input type="button" id="calculate" class="button" value="Calculate">
				</div>

				<div class="total">
					<p>Summary:</p>
					<div id="productList">

					</div>
					<p>Total:</p>
					<div id="totalSum">

					</div>
					<input type="hidden" name="order_total" id="order_total">
					<input type="submit" id="registerBtn" name="submit" class="button" value="Pay">
				</div>
			</div> <!--.box-->
		</div> <!--#summary-->
	</form>
</section>

<?php include_once 'includes/templates/footer.php'; ?>