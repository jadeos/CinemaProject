<!DOCTYPE html>
<html lang="en">
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
                    <li><a href="home">Home</a></li>
                    <li class="active"><a href="film">Listings</a></li>
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
        <img src ="userimage.png" alt="userimage" id ="user"/><br/>
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


    <div id ="listingsmain">
    <?php
    if(isset($film)):foreach ($film as $row):?>
    <div class="listing">
        <img src ="jamesbond.jpg" alt="jamesbond" id ="user"/><br/>
        <div class="listing2">
            <h3><?php echo $row->title;  ?></h3>
            <b>Description</b><br/>
            <?php echo $row->Description;?>
            <br/> <b>Date  </b>          <b>Time</b><br/>
            <?php echo $row->date;?> <?php echo  $row->time;?>

            <b>Duration  </b>
            <?php echo $row->length." ";?>hours
        </div>
        <div class="Book">
            <button type="button"><a href="booking">Book</a></button>
        </div>


    </div> <?php endforeach; ?>
    <?php endif; ?>
    </div>






    <div id = "pricecontainer">
		Price List

</div>
</div>


    <div id = "listingsfooter">
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


















































