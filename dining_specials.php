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
					<div id="specials">
						<h2>Dining Specials</h2>
						<h2 id="date"><?php echo date ("l, F jS") ?></h2>
							<nav id="alphabetical">
								<ul>
									<li><a href="index.php">A</a></li>
									<li><a href="index.php">B</a></li>
									<li><a href="index.php">C</a></li>
									<li><a href="index.php">D</a></li>
									<li><a href="index.php">E</a></li>
									<li><a href="index.php">F</a></li>
									<li><a href="index.php">G</a></li>
									<li><a href="index.php">H</a></li>
									<li><a href="index.php">I</a></li>
									<li><a href="index.php">J</a></li>
									<li><a href="index.php">K</a></li>
									<li><a href="index.php">L</a></li>
									<li><a href="index.php">M</a></li>
									<li><a href="index.php">N</a></li>
									<li><a href="index.php">O</a></li>
									<li><a href="index.php">P</a></li>
									<li><a href="index.php">Q</a></li>
									<li><a href="index.php">R</a></li>
									<li><a href="index.php">S</a></li>
									<li><a href="index.php">T</a></li>
									<li><a href="index.php">U</a></li>
									<li><a href="index.php">V</a></li>
									<li><a href="index.php">W</a></li>
									<li><a href="index.php">X</a></li>
									<li><a href="index.php">Y</a></li>
									<li><a href="index.php">Z</a></li>
								</ul>
							</nav>
							<div class="cl"></div>
			<!--				<div id="tuesday_specials">
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/maggianos_logo.jpeg" alt="Maggiano's" />
									<h3>Maggiano's</h3>
										<p>$4 flatbreads from 3pm - 6pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/mccormick_&_schmicks_logo.jpeg" alt="McCormick & Schmick's" />
									<h3>McCormick &amp; Schmick's</h3>
										<p>$2.99 - $5.99 appetizers from 4pm - 6:30pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/pf_changs_logo.jpeg" alt="P.F. Changs" />
									<h3>P.F. Changs</h3>
										<p>1/2 priced select appetizers from 3pm - 6pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div> 
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/ra_sushi_logo.jpeg" alt="RA Sushi" />
									<h3>RA Sushi</h3>
										<p>Happy Hour Sushi from 3pm - 7pm &amp; 10pm - 11pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/redstone_logo.jpeg" alt="Redstone American Grill" />
									<h3>Redstone American Grill</h3>
										<p>Discounted appetizers from 3pm - 6pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div> 
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/reel_club_logo.jpeg" alt="Reel Club" />
									<h3>Reel Club</h3>
										<p>1/2 priced sushi &amp; appetizers from 3pm - 6pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div> 
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/seasons_52_logo.jpeg" alt="Seasons 52" />
									<h3>Seasons 52</h3>
										<p>Flight &amp; Flatbread-choice of flatbread &amp; wine flight $15-$20 from 2pm - 6pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/stir_crazy_logo.jpeg" alt="Stir Crazy" />
									<h3>Stir Crazy</h3>
										<p>Kids eat FREE</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/tgi_fridays_logo.jpeg" alt="TGI Friday's" />
									<h3>TGI Friday's</h3>
										<p>$5 Jack Daniels appetizers &amp; $10 Jack Daniels entrees</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
							</div>  -->
							<div id="wednesday_specials">
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/bar_louie_logo.jpeg" alt="Bar Louie" />
									<h3>Bar Louie</h3>
										<p>1/2 price appetizers from 4pm - 7pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/benihana_logo.jpeg" alt="Benihana" />
									<h3>Benihana</h3>
										<p>1/2 price appetizers &amp; sushi from 5pm - 8pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/brio_logo.jpg" alt="Brio Tuscan Grille" />
									<h3>Brio Tuscan Grille</h3>
										<p>1/2 price appetizers from 3pm - 7pm &amp; 9pm - close</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/champps_logo.jpeg" alt="Champps Americana" />
									<h3>Champps Americana</h3>
										<p>$5 appetizers from 3pm - 6pm &amp; 10pm - close</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/cheesecake_factory_logo.jpeg" alt="Cheesecake Factory" />
									<h3>Cheesecake Factory</h3>
										<p>$5 appetizers and small plates from 4pm - 6pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/devon_logo.jpeg" alt="Devon Seafood Grill" />
									<h3>Devon Seafood Grill</h3>
										<p>$6 &amp; $7 specialty appetizers</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/french_quarter_logo.png" alt="French Quarter New Orleans Kitchen" />
									<h3>French Quarter New Orleans Kitchen</h3>
										<p>1/2 priced appetizers from 4pm - 7pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/kona_grill_logo.jpeg" alt="Kona Grill" />
									<h3>Kona Grill</h3>
										<p>Happy Hour sushi deals from 4pm - 7pm &amp; 10pm - close</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/maggianos_logo.jpeg" alt="Maggiano's" />
									<h3>Maggiano's</h3>
										<p>$4 flatbreads from 3pm - 6pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/mccormick_&_schmicks_logo.jpeg" alt="McCormick & Schmick's" />
									<h3>McCormick &amp; Schmick's</h3>
										<p>$2.99 - $5.99 appetizers from 4pm - 6:30pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/pf_changs_logo.jpeg" alt="P.F. Changs" />
									<h3>P.F. Changs</h3>
										<p>1/2 priced select appetizers from 3pm - 6pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/pinstripes_logo.jpeg" alt="Pinstripes" />
									<h3>Pinstripes</h3>
										<p>Discounted small plates, pizzas, and flatbreads 3pm - 6:30pm &amp; 9pm - close</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/ra_sushi_logo.jpeg" alt="RA Sushi" />
									<h3>RA Sushi</h3>
										<p>Happy Hour Sushi from 3pm - 7pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/redstone_logo.jpeg" alt="Redstone American Grill" />
									<h3>Redstone American Grill</h3>
										<p>Discounted appetizers from 3pm - 6pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/reel_club_logo.jpeg" alt="Reel Club" />
									<h3>Reel Club</h3>
										<p>1/2 priced sushi &amp; appetizers from 3pm - 6pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/seasons_52_logo.jpeg" alt="Seasons 52" />
									<h3>Seasons 52</h3>
										<p>Flight &amp; Flatbread-choice of flatbread &amp; wine flight $15-$20 from 2pm - 6pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/tgi_fridays_logo.jpeg" alt="TGI Friday's" />
									<h3>TGI Friday's</h3>
										<p>1/2 priced appetizers</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>  
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/the_clubhouse_logo.png" alt="The Clubhouse" />
									<h3>The Clubhouse</h3>
										<p>1/2 priced appetizers from 3pm - 6pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/tilted_kilt_logo.jpeg" alt="Tilted Kilt" />
									<h3>Tilted Kilt</h3>
										<p>$7 Create Your Own Pizza</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/trademark_logo.png" alt="Trademark Tavern" />
									<h3>Trademark Tavern</h3>
										<p>$2 Sliders, $2 Quesadillas, and $6 flatbreads 3pm - 6pm</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/wildfire_logo.jpg" alt="Wildfire" />
									<h3>Wildfire</h3>
										<p>½ priced apps 3pm - 5pm &amp; 9pm - close</p>
										<p id="dining_specials">View drink specials for this location</p>
								</div>
						</div>
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
						<img src="images/events/clubhouse_logo.jpeg" alt="" /><a href="http://www.theclubhouse.com/firstfridaysept">First Friday</a>
							<p>Fri. September 6th starts @ 4pm</p>
						<div class="cl"></div>
						<img src="images/events/antico_posto_logo.jpeg" alt="" /><a href="#">Talbott Wine Dinner</a>
							<p>Thurs. October 3rd </p>
						<div class="cl"></div>
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

