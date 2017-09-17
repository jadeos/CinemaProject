<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit Movie database</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="index.css" rel="stylesheet">
</head>
<body>
<div id ="header">
    <a href="index.html"><img src = "popcorn.png" alt ="popcornbox"/></a> <h1>Magic Movies</h1>

</div>

<div class="container">

    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Magic Movies</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="home">Home</a></li>
                    <li><a href="film">Listings</a></li>
                    <li><a href="filmRecent">New Films</a></li>
                    <li><a href="evnets">Upcoming Events</a></li>
                    <li class ="active"><a href="accounts.php">Account</a></li>





                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>


    <div id="searchbar">
        <?php echo form_open('film/film_search');?>
        <label>Search:  <input type="text" id="search" name="search"/></label>
        <button type ="submit" id = "searchbutton" name ="searchbutton"><?php echo anchor("film/film_search/","Search"); ?></button>
        <?php echo form_close();?>
    </div>
    <div id ="users">
        <img src ="userimage.png" alt="userimage"id ="user1"/><br/>
        <div>

            <?php if(Current_User::user()): ?>
                <h2>Hello <em><?php echo Current_User::user()->username; ?></em>.</h2>
                <h2><?php echo anchor('logout','Logout'); ?></h2>
            <?php else: ?>
                <h2>Members: <?php echo anchor('login','Login'); ?>.</h2>
                <h2>New Users: <?php echo anchor('signup','Create an Account'); ?>.</h2>
            <?php endif; ?>

        </div>


    </div>
    <div id ="main">

        <h1>Update the movie database</h1>
        <?php echo form_open("adminfilm/update");?>

                <label>Movie Title  </label><nbsp> <input type ="text" name ="title"/><br/>
                <label>Description  </label><nbsp> <input type ="text" name ="description"/><br/>
                <label>Length      </label><nbsp>  <input type ="text" name ="length/"><br/>
                    <label> Age Group   </label><nbsp><input type ="text" name ="agegroup"/><br/>
                        <label>Release Date </label><nbsp> <input type ="text" name ="releasedate"/><br/>
                            <label>Features     </label><nbsp><input type ="text" name ="features"/><br/>
                                <label>Date         </label><nbsp> <input type ="text" name ="date"/><br/>
                                    <label>Time         </label><nbsp> <input type ="text" name ="time"/><br/>
                                        <button type ="submit" name ="submit"value="submit"><?php echo anchor("adminfilm",'Update');?></button><br/>





                                        <?php echo form_close();?>
                                        <br/>
    </div>

    <b> Return to <a href="home.php">Hompage</a> </b>
    <div id = "footer">
        Telephone: 066-7112345 <br>
        E-mail: Magicmovies@hotmail.com
    </div>


</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>

