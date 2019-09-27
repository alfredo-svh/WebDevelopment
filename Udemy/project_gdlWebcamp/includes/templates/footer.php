<footer class="site-footer">
	<div class="container clearfix">
		<div class="footerInfo">
			<h3>About <span>gdlwebcamp</span></h3>
			<p>Suspendisse sed dictum eros, vel ornare nisi. In in ipsum purus. Integer scelerisque augue et varius lacinia. Nunc blandit bibendum est. Nunc auctor fermentum feugiat. Sed interdum placerat lacus, eget hendrerit libero volutpat ut. Donec nisl augue, convallis sed mi in, aliquam sollicitudin quam.</p>
		</div>

		<div class="latestTweets">
			<h3>Latest <span>tweets</span></h3>
			<ul>
				<li> Suspendisse sed dictum eros, vel ornare nisi. In in ipsum purus. Integer scelerisque augue et varius lacinia.</li>
				<li> Suspendisse sed dictum eros, vel ornare nisi. In in ipsum purus. Integer scelerisque augue et varius lacinia.</li>
				<li> Suspendisse sed dictum eros, vel ornare nisi. In in ipsum purus. Integer scelerisque augue et varius lacinia.</li>
			</ul>
		</div>

		<div class="menu">
			<h3>Social <span>media</span></h3>
			<nav class="socialMedia">
					<a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
					<a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
					<a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
					<a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
					<a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
				</nav>
		</div>
	</div>

	<p class="copyright">
		All rights Reserved GDLWEBCAMP 2018.
	</p>

	<!-- Begin MailChimp Signup Form -->
	<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
		/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
		We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
	</style>
	<div style="display:none;">
		<div id="mc_embed_signup">
			<form action="https://twitter.us18.list-manage.com/subscribe/post?u=cbd378f6c1657c227caa9a6bf&amp;id=1af542e2a6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
					<h2>Subscribe to the newsletter and don't miss a single thing from this event</h2>
					<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
					<div class="mc-field-group">
						<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
						</label>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cbd378f6c1657c227caa9a6bf_1af542e2a6" tabindex="-1" value=""></div>
					<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				</div>
			</form>
		</div>
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
		<!--End mc_embed_signup-->
	</div>

</footer>
	
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.lettering.js"></script>

<?php
	$file = basename($_SERVER['PHP_SELF']);
	$page = str_replace(".php", "", $file);
	if($page == 'speakers' || $page == 'index'){
		echo '<script src="js/jquery.colorbox-min.js"></script>';
		echo '<script src="js/jquery.waypoints.min.js"></script>';
	} elseif($page == 'conference'){
		echo '<script src="js/lightbox.js"></script>';
	}
?>

<script src="js/main.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
async defer></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
	window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
	ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us18.list-manage.com","uuid":"","lid":""}) })</script>
