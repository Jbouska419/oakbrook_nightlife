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
						<h2>Daily Drink Specials</h2>
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
									<img class="restaurant_logo" src="images/specials/antico_posto_logo.jpeg" alt="Antico Posto" />
									<h3>Antico Posto</h3>
										<p>20 bottles of wine under $20</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/bar_louie_logo.jpeg" alt="Bar Louie" />
									<h3>Bar Louie</h3>
										<p>$5 20oz. Angry Orchard Drafts</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/beer_house_logo.jpeg" alt="Beer House" />
									<h3>Beer House</h3>
										<p>$4.50 Tyranena Bitter Woman IPA</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/benihana_logo.jpeg" alt="Benihana" />
									<h3>Benihana</h3>
										<p>$6 Mai Tais</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/brio_logo.jpg" alt="Brio Tuscan Grille" />
									<h3>Brio Tuscan Grille</h3>
										<p>$5 Mixed Cocktails</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/champps_logo.jpeg" alt="Champps Americana" />
									<h3>Champps Americana</h3>
										<p>$2.50 Select Drafts</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/doc_wine_logo.jpeg" alt="D.O.C. Wine Bar" />
									<h3>D.O.C. Wine Bar</h3>
										<p>1/2 price glasses of wine</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/dao_sushi_logo.png" alt="Dao Sushi" />
									<h3>Dao Sushi</h3>
										<p>$5 Select Tinis</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/houlihans_logo.png" alt="Houlihans" />
									<h3>Houlihans</h3>
										<p>1/2 priced bottles of wine</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant"> 
									<img class="restaurant_logo" src="images/specials/lucky_strike_logo.png" alt="Lucky Strike Lane" />
									<h3>Lucky Strike Lanes</h3>
										<p>$2 Miller Lite Drafts &amp; $2 shot specials</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/maggianos_logo.jpeg" alt="Maggiano's" />
									<h3>Maggiano's</h3>
										<p>$5 select wine glasses &amp; $6 bartender's choice</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/mccormick_&_schmicks_logo.jpeg" alt="McCormick & Schmick's" />
									<h3>McCormick &amp; Schmick's</h3>
										<p>$6 select wine glasses, $7 select cocktails, &amp; $9 select martinis</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant_long">
									<img class="restaurant_logo" src="images/specials/millers_ale_house_logo.jpeg" alt="Miller's Ale House" />
									<h3>Miller's Ale House</h3>
										<p>$8.95 Miller Lite Buckets, $6 Miller Lite Pitchers, $2.95 Smirnoff &amp; Captain Morgan cocktails</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div> 
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/ra_sushi_logo.jpeg" alt="RA Sushi" />
									<h3>RA Sushi</h3>
										<p>$4 Cosmos &amp; Lemon Drop Martinis, $6 Hot Saki, Rising Sun &amp; Jade Lotus cocktails</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div> 
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/redstone_logo.jpeg" alt="Redstone American Grill" />
									<h3>Redstone American Grill</h3>
										<p>$4 16oz. Miller Lite Drafts &amp; $6 Svedka Vodka Martinis</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div> 
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/tgi_fridays_logo.jpeg" alt="TGI Friday's" />
									<h3>TGI Friday's</h3>
										<p>$5 Jack Daniels cocktails</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div> 
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/the_clubhouse_logo.png" alt="The Clubhouse" />
									<h3>The Clubhouse</h3>
										<p>$8 Absolut Martinis</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/trademark_logo.png" alt="Trademark Tavern" />
									<h3>Trademark Tavern</h3>
										<p>1/2 priced select wines</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
							</div> -->
							<div id="wednesday_specials">
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/bar_louie_logo.jpeg" alt="Bar Louie" />
									<h3>Bar Louie</h3>
										<p>$2 Bud Light, Miller Lite, and Coors Light bottles</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/beer_house_logo.jpeg" alt="Beer House" />
									<h3>Beer House</h3>
										<p>$4 Widmer Alchemy Ale</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/benihana_logo.jpeg" alt="Benihana" />
									<h3>Benihana</h3>
										<p>$6 glasses of wine</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/brio_logo.jpg" alt="Brio Tuscan Grille" />
									<h3>Brio Tuscan Grille</h3>
										<p>$5 Martinis &amp; $5 Mixed Cocktails</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/champps_logo.jpeg" alt="Champps Americana" />
									<h3>Champps Americana</h3>
										<p>$2.50 select drafts</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/dao_sushi_logo.png" alt="Dao Sushi" />
									<h3>Dao Sushi</h3>
										<p>$5 select Wine glasses &amp; $13 select Wine bottles</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant_long">
									<img class="restaurant_logo" src="images/specials/devon_logo.jpeg" alt="Devon Seafood Grill" />
									<h3>Devon Seafood Grill</h3>
										<p>$1 off draft beer &amp; well liquor</p>
										<p>$6 Martinis, Mixed drinks, glasses of wine and champagne</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/ditkas_logo.jpeg" alt="Ditka's" />
									<h3>Ditka's</h3>
										<p>$5 Martinis</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/french_quarter_logo.png" alt="French Quarter New Orleans Kitchen" />
									<h3>French Quarter New Orleans Kitchen</h3>
										<p>$5 glasses of house wine</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/harry_carays_logo.jpeg" alt="Harry Caray's Italian Steakhouse" />
									<h3>Harry Caray's Italian Steakhouse</h3>
										<p>$3 Goose Island drafts &amp; $5 Ketel One cocktails</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant_long">
									<img class="restaurant_logo" src="images/specials/houlihans_logo.png" alt="Houlihans" />
									<h3>Houlihans</h3>
										<p>½ price Miller Lite, Bud Light, Boston Lager, Sam Seasonal Drafts</p>
										<p> ½ price well liquor &amp; ½ price long islands</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/maggianos_logo.jpeg" alt="Maggiano's" />
									<h3>Maggiano's</h3>
										<p>$5 select wine glasses &amp; $6 bartender's choice</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/mccormick_&_schmicks_logo.jpeg" alt="McCormick & Schmick's" />
									<h3>McCormick &amp; Schmick's</h3>
										<p>$6 select wine glasses, $7 select cocktails, &amp; $9 select martinis</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant_long">
									<img class="restaurant_logo" src="images/specials/millers_ale_house_logo.jpeg" alt="Miller's Ale House" />
									<h3>Miller's Ale House</h3>
										<p>$8.95 Miller Lite Buckets, $6 Miller Lite Pitchers, $2.95 Smirnoff &amp; Captain Morgan cocktails</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/ra_sushi_logo.jpeg" alt="RA Sushi" />
									<h3>RA Sushi</h3>
										<p>$4 Cosmos &amp; Lemon Drop Martinis, $6 Hot Saki, Rising Sun &amp; Jade Lotus cocktails</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/tgi_fridays_logo.jpeg" alt="TGI Friday's" />
									<h3>TGI Friday's</h3>
										<p>1/2 priced wine &amp; $5 Martinis</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>   
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/the_clubhouse_logo.png" alt="The Clubhouse" />
									<h3>The Clubhouse</h3>
										<p>$7 Svedka Martinis &amp; Cocktails</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/tilted_kilt_logo.jpeg" alt="Tilted Kilt" />
									<h3>Tilted Kilt</h3>
										<p>$4.50 Drafts</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div> 
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/trademark_logo.png" alt="Trademark Tavern" />
									<h3>Trademark Tavern</h3>
										<p>$3 Drafts</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/volare_logo.jpg" alt="Volare" />
									<h3>Volare</h3>
										<p>$5 Raspberry Lemonade</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/weber_grill_logo.jpeg" alt="Weber Grill" />
									<h3>Weber Grill</h3>
										<p>$5 Sangria</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/wildfire_logo.jpg" alt="Wildfire" />
									<h3>Wildfire</h3>
										<p>$7 Martinis</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>   
							</div>
					<!--		<div id="thursday_specials">
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/antico_posto_logo.jpeg" alt="Antico Posto" />
									<h3>Antico Posto</h3>
										<p>$5 select Wine glasses</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/beer_house_logo.jpeg" alt="Beer House" />
									<h3>Beer House</h3>
										<p>$4.50 Select Lagunitas Beers</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/dao_sushi_logo.png" alt="Dao Sushi" />
									<h3>Dao Sushi</h3>
										<p>$4 Sangria &amp; $3 Saki Bombs</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant_long">
									<img class="restaurant_logo" src="images/specials/houlihans_logo.png" alt="Houlihans" />
									<h3>Houlihan's</h3>
										<p>½ price Miller Lite, Bud Light, Boston Lager, Sam Seasonal Drafts</p>
										<p> ½ price well liquor &amp; ½ price long islands</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/pinstripes_logo.jpeg" alt="Pinstripes" />
									<h3>Pinstripes</h3>
										<p>$4 Handcrafted House Cocktails</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/the_clubhouse_logo.png" alt="The Clubhouse" />
									<h3>The Clubhouse</h3>
										<p>$9 Belvedere Martinis &amp; Cocktails</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/trademark_logo.png" alt="Trademark Tavern" />
									<h3>Trademark Tavern</h3>
										<p>$5 Martinis</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
							</div>
							<div id="friday_specials">
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/beer_house_logo.jpeg" alt="Beer House" />
									<h3>Beer House</h3>
										<p>$4.50 Dogfish 60 Minute</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/houlihans_logo.png" alt="Houlihans" />
									<h3>Houlihan's</h3>
										<p>$2 Bud Light, Miller Lite, &amp; Sam Adams Boston Lager Pints</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/pinstripes_logo.jpeg" alt="Pinstripes" />
									<h3>Pinstripes</h3>
										<p>1/2 priced bottles of wine $50 or less</p>
		
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/the_clubhouse_logo.png" alt="The Clubhouse" />
									<h3>The Clubhouse</h3>
										<p>$6 Golden Margaritas &amp; $7 Tipsy Palmers</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
								<div id="restaurant">
									<img class="restaurant_logo" src="images/specials/trademark_logo.png" alt="Trademark Tavern" />
									<h3>Trademark Tavern</h3>
										<p>$4 Skyy Vodka Cocktails &amp; $4 Evan Williams Bourbon</p>
										<p id="dining_specials">View dining specials for this location</p>
								</div>
							</div> -->
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
