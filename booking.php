
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Listings</title>

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
    <a href="system/index.html"><img src = "popcorn.png" alt ="popcornbox"/></a> <h1>Magic Movies</h1>

</div>


        <div class="container" style="background:transparent !important">


            <div id="banner">
                <div style="background:transparent !important" class="jumbotron">
                    <h1>
                        <a href="index.html"><img src = "popcorn.png" alt ="popcornbox"/></a>
                        Magic Movies
                    </h1>

                </div>
            </div>









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
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Listings</a></li>
              <li><a href="#">New Films</a></li>
			   <li><a href="#">UpComing Events</a></li>
				<li><a href="#">Account</a></li>





            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>


      <div id="searchbar">
    <label>Search:  <input type="text" id="search" name=" search"/></label>
    <button type ="submit" id = "searchbutton" name ="searchbutton">Search</button>
</div>
<div id ="users">
    <img src ="userimage.png" alt="userimage"id ="user"/><br/>
    <label> Not a user</label><br/><a href ="register.html">Register Here</a>


</div>

<div id ="main">
<div class="mainevent">
<div class="listing">
<img src ="hobbit.jpg" alt="userimage"id ="user"/><br/>
</div>

<div class="listing2">
       <b>Your Order</b>
		<h5>Title  Pixels</h5>

		<h5>Date      Monday 20th    </h5>
		    <h5>  Time    16:00</h5>

		</div>
		<div class="next">
		<button type="button">next</button>
		</div>
		<div id="dropmenu">
<select>
  <option value="student">Student</option>
  <option value="adult">Adult</option>
  <option value="child">Child</option>

</select>
</div>

<div id="total">
<h3> TotalPrice: </h3>
</div>
    <div id="paypal">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="E2UYDZQFMYREY">
            <table>
                <tr><td><input type="hidden" name="on0" value="cinema prices">cinema prices</td></tr><tr><td><select name="os0">
                <option value="adult">adult €10.00 EUR</option>
                <option value="child">child €6.00 EUR</option>
                <option value="student">student €0.01 EUR</option>
            </select> </td></tr>
            </table>
            <input type="hidden" name="currency_code" value="EUR">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>

    </div>

</div>




</div>

</div>


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
