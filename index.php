<!DOCTYPE html>
<html>
	<head>
	<title>Oakbrook Night Life</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
	<link rel="stylesheet" type="text/css" href="includes/style.css">
	<link rel="shortcut icon" href="images/favicon2.ico" >
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script src="_js/jquery-1.6.3.min.js"></script>
	<script src="_js/jquery.validate.min.js"></script>
<script src="bxslider/jquery.bxSlider.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(function(){
  $('#js-slider').bxSlider({
    auto: true,
    autoControls: true,
    mode: 'fade',
    prevText: null,
    nextText: null,
    stopText: null,
    speed: 3000,
  });
}); 
	</script>
<script type="text/javascript">
  $(function(){
  $('#ad_1').bxSlider({
    auto: true,
    autoControls: true,
    prevText: null,
    nextText: null,
    stopText: null,
    speed: 3000,
  });
}); 
	</script>	
<script type="text/javascript">
  $(function(){
  $('#ad_2').bxSlider({
    auto: true,
    autoControls: true,
    prevText: null,
    nextText: null,
    stopText: null,
    speed: 3000,
  });
}); 
	</script>
	<script>	
	$(document).ready(function() {
	$('#promotion').validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			zip: {
				required: true,
				rangelength: [5,5]
			},
		}, // end rules
		messages: {
			email: {
				required: "<br />Please enter your e-mail address.",
				email: "<br />This is not a valid e-mail address."
			},
			zip: {
				required: '<br />Please enter your zip code.',
				rangelength: '<br />Zip code must be 5 digits.'
			}
		}, // end messages
		}); // end validate
}); // end ready
</script>
</head>

<body>
	<div id="shell">
		<header>
	
		</header>
			<div id="main-content">
				<section id="left-column">
					<nav id="main">
						<ul>
							<li><a href="index2.php">Home</a></li>
							<li><a href="drink_specials.php">Drink Specials</a></li>
							<li><a href="dining_specials.php">Dining Specials</a></li>
							<li><a href="events.php">Events</a></li>
							<li><a href="live_music.php">Live Music</a></li>
							<li><a href="entertainment.php">Entertainment</a></li>
						</ul>
					</nav>
					<div id="ad_1">
							<div><img src="images/slider/capital_grille_ad.jpg" alt="capital grille"></div>
							<div><img src="images/slider/mccormick_schmicks_ad.png" alt="mccormick & schmicks"></div>
							<div><img src="images/slider/tilted_kilt_ad.jpg" alt="tilted kilt"></div>
							<div><img src="images/slider/luckystrike_ad.jpg" alt="lucky strike lanes"></div>
						</div> 
					<div class="cl"></div>
					
			
				</section>
			
				<section id="center">
					<div id="featured-content">
						<div id="js-slider">
							<div><img src="images/slider/clubhouse.png" alt="salon"></div>
							<div><img src="images/slider/gibsons.jpg" alt="restaurant"></div>
							<div><img src="images/slider/reel_club.jpeg" alt="restaurant"></div>
							<div><img src="images/slider/02.jpg" alt="restaurant"></div>
						</div> 
					</div>
					<div id="chamber">
						<a href="http://www.experienceoakbrook.com/free_Gift_Card/"><img src="images/chamber_coupon.jpg" alt="coupon" /></a>
					</div>
					<div id="newsletter">
						<h1>Subscribe to our newsletter!!!</h1>
							<form id="promotion" action="subscribe.php" method="post" name="promo">
								<fieldset>
									<p><label><span>email:</span> <input type="text" name="email" id="email" class="required error" size="12" maxlength="30" value="<?php if
										(isset($_POST['email'])) echo $_POST['email']; ?>" /></label></p>
									<p><label><span>zip code:</span> <input type="text" name="zip" id="zip" class="required error" size="5" maxlength="5" value="<?php if
										(isset($_POST['zip'])) echo $_POST['zip']; ?>" /></label></p>
								</fieldset>
									<p align="center"><input type="image" src="images/submit.png" width="100" height="33" name="submit" value="Submit" /></p>  
							</form>
					</div>
					<div id="photo_album">
						<h1>Fan submitted photos</h1>
							<p>Please email photo submissions to oakbrook nightlife @gmail.com</p>
					</div>
				</section>
			
				<section id="right-column">
						<h1>&nbsp;&nbsp;Follow Us on Facebook and Twitter</h1>
					<div id="social">
						<a href="http://www.facebook.com/oakbrooknightlife"><img src="images/facebook2.png" alt="facebook" /></a>
						<a href="https://twitter.com/@OB_Nightlife"><img src="images/twitter2.png" alt="twitter" /></a>
					</div>
					<h1>Upcoming Events</h1>
					<div id="upcoming_events">
						<img src="images/events/bar_louie_logo.jpeg" alt="" /><a href="http://www.ufc.com/event/UFC165">UFC 165</a>
							<p>Sat. Sept. 21st @ 8pm.</p>
						<div class="cl"></div>
						<div class="cl"></div>
						<img src="images/events/antico_posto_logo.jpeg" alt="" /><a href="#">Talbott Wine Dinner</a>
							<p>Thurs. October 3rd </p>
						<div class="cl"></div>
						<img src="images/events/clubhouse_logo.jpeg" alt="" /><a href="http://www.theclubhouse.com/firstfridaysept">First Friday</a>
							<p>Fri. October 4th starts @ 4pm</p>
						<img src="images/events/wildfire_logo.jpeg" alt="" /><a href="http://www.wildfirerestaurant.com/events/wine-events">Ferrari-Carano Wine Dinner</a>
							<p>Mon. October 14th @ 6:30pm</p>
						<div class="cl"></div>
					</div>
					<div id="advertise">
						<img src="images/advertise_here.png" alt="advertise here" />
					</div>
					<div id="ad_2">
							<div><img src="images/slider/wildfire_ad.jpeg" alt="wildfire"></div>
							<div><img src="images/slider/houlihans_ad.jpeg" alt="houlihans"></div>
							<div><img src="images/slider/trademark_ad.jpeg" alt="trademark tavern"></div>
							<div><img src="images/slider/dao_ad.jpg" alt="dao sushi"></div>
						</div>
					<div class="cl"></div>
					
					
				</section>
			</div>
	
	</div>
</body>
