<body style="margin:0">
<div class="container-fluid">
	<!--<div class="col-xs-10 col-xs-offset-1" id="header">
  		<img class="logo" src="image/logo_small.png" class="center-block"/>
  	</div>
  	<div class="col-xs-1">
  	</div>
  	<div class="col-xs-12" id="header">
  		<img class="text-center logo" src="image/logo_small.png" />
  	</div>-->
	<nav class="navbar navbar-grey" role="navigation">
	      <ul class="nav navbar-nav">
	        <li class="pull-left"><a href="#">Blabla</a></li>
			<img class="text-center logo" src="image/logo_small.png" />
	        <li class="social pull-right"><a href="delete.php">Objets prêtés</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container">
	  	<div class="col-xs-12">
		  	<button type="button" class="btn btn-lg btn-block">What?</button>
		  	<video id="video" width="100%" autoplay></video>
		  	<br>
		  	<div class="text-center">
		  		<button type="button" id="what" class="btn btn-xl"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></button>
		  	</div>
			<canvas id="canvas" style="border: 5px solid black;"></canvas>
	  	</div>

		<canvas id="canvas" width="800" height="600" style="border: 5px solid black;"></canvas>
  	</div>
  	<div class="col-xs-12 text-center">
  		<form method="POST" action="try.php">
			<input type="hidden" name="what" value="" id="what-form">
			<input type="hidden" name="who" value="" id="who-form">
			<input type="submit" name="deconnexion" value="Envoyez">
		</form>
  	</div>
  	<div class="col-xs-12">
	  	<button type="button" class="btn btn-lg btn-block">Who?<br></button>
	  	<video id="video2" width="100%" autoplay></video>
	  	<br>
	  	<div class="text-center">
	  		<button type="button" id="who" class="btn btn-xl"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></button>
	  	</div>
		<canvas id="canvas2" width="800" height="600" style="border: 5px solid black;"></canvas>

    </div>
  	<div class="container">
	  	<div class="col-xs-12">
		  	<button type="button" class="btn btn-lg btn-block">Who?<br></button>
		  	<video id="video2" width="100%" autoplay></video>
		  	<br>
		  	<div class="text-center">
		  		<button type="button" id="who" class="btn btn-xl"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></button>
		  	</div>
			<canvas id="canvas2" style="border: 5px solid black;"></canvas>
	  	</div>

  	</div>
  	<button class="btn btn-default" type="submit"><a href="facebookconnect/logout.php">Me déconnecter</a></button>
</div>
</body>