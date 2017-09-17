<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Magic Movies</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="index.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>

	<script src="https://code.highcharts.com/highcharts-more.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>

	<script>
		window.onload = ('domready', function() {
			var chart1 = new Highcharts.Chart({

				chart: {
					renderTo: 'charts',
					type: 'pie',
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,


				},
				title: {
					text: 'Popular Movies'
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false
						},
						showInLegend: true
					}
				},
				series: [{
					name: 'Magic Mike',
					colorByPoint: true,
					data: [{
						name: 'Insergant',
						y: 56.33
					}, {
						name: 'MockingJay',
						y: 24.03,
						sliced: true,
						selected: true
					}, {
						name: 'Pixels',
						y: 10.38
					}, {
						name: 'Star wars',
						y: 4.77
					}, {
						name: 'Spectre',
						y: 0.91
					}, {
						name: 'other',
						y: 0.2
					}]
				}]
			});
		});
		// Load the fonts
		Highcharts.createElement('link', {
			href: '//fonts.googleapis.com/css?family=Signika:400,700',
			rel: 'stylesheet',
			type: 'text/css'
		}, null, document.getElementsByTagName('head')[0]);

		// Add the background image to the container
		Highcharts.wrap(Highcharts.Chart.prototype, 'getContainer', function (proceed) {
			proceed.call(this);
			this.container.style.background = 'url(http://www.highcharts.com/samples/graphics/sand.png)';
		});


		Highcharts.theme = {
			colors: ["#f45b5b", "#8085e9", "#8d4654", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
				"#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
			chart: {
				backgroundColor: null,
				style: {
					fontFamily: "Signika, serif"
				}
			},
			title: {
				style: {
					color: 'black',
					fontSize: '16px',
					fontWeight: 'bold'
				}
			},
			subtitle: {
				style: {
					color: 'black'
				}
			},
			tooltip: {
				borderWidth: 0
			},
			legend: {
				itemStyle: {
					fontWeight: 'bold',
					fontSize: '13px'
				}
			},
			xAxis: {
				labels: {
					style: {
						color: '#6e6e70'
					}
				}
			},
			yAxis: {
				labels: {
					style: {
						color: '#6e6e70'
					}
				}
			},
			plotOptions: {
				series: {
					shadow: true
				},
				candlestick: {
					lineColor: '#404048'
				},
				map: {
					shadow: false
				}
			},

			// Highstock specific
			navigator: {
				xAxis: {
					gridLineColor: '#D0D0D8'
				}
			},
			rangeSelector: {
				buttonTheme: {
					fill: 'white',
					stroke: '#C0C0C8',
					'stroke-width': 1,
					states: {
						select: {
							fill: '#D0D0D8'
						}
					}
				}
			},
			scrollbar: {
				trackBorderColor: '#C0C0C8'
			},

			// General
			background2: '#E0E0E8'

		};

		// Apply the theme
		Highcharts.setOptions(Highcharts.theme);

	</script>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->






</head>




<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
<script type="text/javascript">

	var cost=0; var Scost=25; var Ncost=0; Gcost = 0;
	function initMap() {
		var map = new google.maps.Map(document.getElementById('map_canvas'), {
			center: {lat: 51.8840, lng: 8.5358},
			zoom: 15
		});
		var infoWindow = new google.maps.InfoWindow({map: map});

		// Try HTML5 geolocation.
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
				var pos = {
					lat: position.coords.latitude,
					lng: position.coords.longitude
				};

				infoWindow.setPosition(pos);
				infoWindow.setContent('Location found.');
				map.setCenter(pos);
			}, function() {
				handleLocationError(true, infoWindow, map.getCenter());
			});
		} else {
			// Browser doesn't support Geolocation
			handleLocationError(false, infoWindow, map.getCenter());
		}
	}

	function handleLocationError(browserHasGeolocation, infoWindow, pos) {
		infoWindow.setPosition(pos);
		infoWindow.setContent(browserHasGeolocation ?
			'Error: The Geolocation service failed.' :
			'Error: Your browser doesn\'t support geolocation.');
	}

</script>

</head>

<body>
<div class="container" style="background:transparent !important">


	<div id="banner">
		<div style="background:transparent !important" class="jumbotron">
			<h1>
				<a href="index.html"><img src = "popcorn.png" alt ="popcornbox" style="border: 2px solid black;"/></a>
				Magic Movies
			</h1>
			<div id="searchbar">
				<?php echo form_open('film/film_search');?>
				<label>  <input type="text" id="search" name="search"/></label>
				<button type ="submit" id = "searchbutton" name ="searchbutton""><?php echo anchor("film/film_search/","Search"); ?></button>
				<?php echo form_close();?>
			</div>
		</div>
	</div>




	<!-- Static navbar -->
	<nav class="navbar navbar-default" style="background:transparent !important background-color: white; color: red; border-radius: 0;">
		<div class="container-fluid " style="padding-right: 50px;">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div id="navbar" style="background:transparent !important" class="navbar-collapse collapse">
				<ul class="nav navbar-nav" >
					<li class="active"><a href="home">Home</a></li>
					<li><a href="film">Listings</a></li>
					<li><a href="filmRecent">Upcoming Events</a></li>
					<li><a href="accounts">Account</a></li>
					<li><div id="twittershare" style="height: 30px; width: 70px;">
							<a href="https://twitter.com/share" class="twitter-share-button"{count}>Tweet</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						</div>
					<li><div id = "facebooklike" style="height: 30px; width: 70px;">
						<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fhttps://www.facebook.com/pages/Onmiplex-Cinema-Mahon-Point/511760785517894&amp;layout=button_count&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp" style="width:100%;height:80px;"
								scrolling="no" frameborder="0" allowTransparency="true"><a id="plugin-fb"
																						   href="http://www.addlikebutton.net" class="facebook-get-code">addlikebutton.net</a></iframe>

					</li>
					<li>
							<div id = "facebookshare">
							<a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
								<img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" height="45px;" width="45px;">
							</a>
							</div>
							</li>
					<li>
							<div id = "googleplusshare">
							<a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
								<img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" height="45px;" width="45px;">
							</a>
							</div>
					</li>
					<li>
						<div id = "linkedinshare">
							<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://simplesharebuttons.com" target="_blank">
								<img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" height="45px;" width="45px;">
							</a>
							</div>
					</li>


				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>
	<div id ="users">
		<img src ="userimage.png" alt="userimage"id ="user"/><br/>
		<div>

			<?php if(Current_User::user()): ?>
				<h2>Hello <em><?php echo Current_User::user()->username; ?></em></h2>
				<h2><?php echo anchor('logout','Logout'); ?></h2>

			<?php else: ?>
				<h2>Members: <?php echo anchor('login','Login'); ?></h2>
				<h2>New Users: <?php echo anchor('signup','Create an Account'); ?></h2>
			<?php endif; ?>

		</div>
	</div>




	<div id ="main">

		<div id = "rightcontainer">

			<b>Map</b>
			<div id ="map_canvas" style="width: 225px; height: 250px; margin-left:10px;margin-top:20px; border:2px solid black;">

			</div>
			<script type="application/javascript">

			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBw_905SZ49_I6yB0N0WTjXAohBvTkNmak&signed_in=true&callback=initMap"
					async defer>
			</script>
			<b>Opening Hours</b>
			<div class ="temp">Monday - Saturday 12.00-22.00<br/>Sunday 13.00-19.00<br/>
			</div>
			<b>Contact</b>
			<div class ="temp">Tel:<br/> 066-7112345<br/> E-mail:<br/>MagicMovies@hotmail.com
				<li><div id="twitter" style="height: 30px; width: 70px;">
						<a href="https://twitter.com/twitter" class="twitter-follow-button" data-show-count="false">Follow @twitter</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);
								js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}
							(document, 'script', 'twitter-wjs');</script>
					</div></li>
			</div>
		</div>
		<div id ="leftcontainer">
			<b>Most Popular</b>
			<div class ="temp">
				<div id="charts" style=" height:250px; width: 200%;margin-top: -60px;margin-left: -45px; border:2px;"></div>
			</div>




			<div class ="tempreview">
				<b>Reviews</b><br/>

				<?php if(isset($reviews)):foreach($reviews as $row):?>
				<?php echo $row ->description;?>


				<?php endforeach; ?>
				<?php endif; ?>


			</div>

		</div>








		<div id ="live">
			<div id="carouselcontainer">
				<br>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
						<li data-target="#myCarousel" data-slide-to="5"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="hobbit.jpg" alt="hobbit" width="400" height="300">
						</div>

						<div class="item">
							<img src="jamesbond.jpg" alt="jamesbond" width="400" height="300">
						</div>

						<div class="item">
							<img src="thegooddinosaur.png" alt="thegooddinosaur" width="400" height="300">
						</div>

						<div class="item">
							<img src="child44.jpg" alt="child44" width="400" height="300">
						</div>

						<div class="item">
							<img src="avengers.jpg" alt="avengers" width="400" height="300">
						</div>

						<div class="item">
							<img src="mallcop.jpg" alt="mallcop" width="400" height="300">
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div id = "info">
				<b>Find all the latest films on IMDB with the click of a button!</b>
			</div>
			<div id = "aboutus">
				<b>Welcome to our website!</b><br/>
				<img src="cover.jpg" alt="cover">
				<p>
					Magic Movies represents a chain of cinemas spread throughout the island of Ireland.
				    We provide one of the best cinema viewing experiences in Ireland.
					Committed to continued growth and development of its premium
					entertainment "big screen" experience, Magic Movies delivers the best choice of content,
					combined with the best technology in the best environment.
					We provide you with all the latest film releases as well as your old time favourites.
					Cinema tickets can be booked with the click of a buttton.
					Over the years Magic Movies has won numerous accolades for its service and innovations, including more recently
					International Exhibitor of the Year at CineEurope 2014 and Cinema Exhibitor of the Year Screen,
					Marketing & Distribution Awards 2013.
					<br/>Our prices are very reasonable and we hope you enjoy your experience with us.

				    <br/>If you have a particular query then contact us via eMail or home phone.
				</p>
			</div>

		</div>
		<div id = "imbd">
			<span class="imdbRatingPlugin" data-user="ur63724244" data-title="tt0094436" data-style="p1"><a href="http://www.imdb.com/title/tt0094436/?ref_=plg_rt_1"><img src="http://g-ecx.images-amazon.com/images/G/01/imdb/plugins/rating/images/imdb_46x22.png" alt=" Cinéma
(1988) on IMDb" width="80px;" height="40px;""/>
		</div>
	</div>
	<div id = "footer">
		Telephone: 066-7112345 <br>
		E-mail: Magicmovies@hotmail.com
	</div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
