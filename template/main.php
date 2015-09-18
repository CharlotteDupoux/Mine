<body>
	<!--<div class="col-xs-10 col-xs-offset-1" id="header">
  		<img class="logo" src="image/logo_small.png" class="center-block"/>
  	</div>
  	<div class="col-xs-1">
  	</div>
  	<div class="col-xs-12" id="header">
  		<img class="text-center logo" src="image/logo_small.png" />
  	</div>-->
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed #animenu" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<div class="text-center"><img class="logo-header" src="image/logo_small.png"></li></div>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse dropdownfix" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="delete.php">Objets prêtés </a></li>
        <li><a href="facebookconnect/logout.php">Se déconnecter</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
    <?php if (isset($_SESSION['FBID'])) { ?>
      <img src="https://graph.facebook.com/<?php echo $_SESSION['FBID'] ?>/picture" alt="<?php $_SESSION['FULLNAME'] ?>" style="position: absolute; top: 0; right: 5px">
    <?php };?>
  </div>
        <!-- /.container-fluid -->
<!--<div class="col-xs-10 col-xs-offset-1" id="header">
      <img class="logo" src="image/logo_small.png" class="center-block"/>
  </div>
  <div class="col-xs-1">
  </div>
  <div class="col-xs-12" id="header">
      <img class="text-center logo" src="image/logo_small.png" />
  </div>-->
<div>
    <div class="what-display"></div>
    <div class="what-info">
        <video id="video" width="100%" autoplay></video>
        <br>
        <div class="text-center" id="btn-photo-what">
            <button type="button" id="what" class="btn btn-xl"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></button>
            <input type="file" capture="camera" accept="image/*" id="cameraInput" name="cameraObject" class="onlyMobile">
        </div>
        <canvas id="canvas" width="400" height="300" style="border: 5px solid black;"></canvas>
    </div>
</div>
<div>
    <div class="who-display"></div>
    <div class="who-info">
        <video id="video2" width="100%" autoplay></video>
        <br>
        <div class="text-center" id="btn-photo-who">
            <button type="button" id="who" class="btn btn-xl"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></button>
            <input type="file" capture="camera" accept="image/*" id="cameraInput" name="cameraPerson" class="onlyMobile">
        </div>
        <canvas id="canvas2" width="400" height="300" style="border: 5px solid black;"></canvas>
    </div>
</div>
<div class="col-xs-12 text-center footer">
    <form method="POST" action="try.php">
        <input type="hidden" name="what" value="" id="what-form">
        <input type="hidden" name="who" value="" id="who-form">
        <input type="text" name="NameObject" value="" id="NameObject" placeholder="What ?">
        <input type="text" name="NamePerson" value="" id="NamePerson" placeholder="Who ?">
        <input class="bouton" type="submit" name="deconnexion" value="Envoyez">
    </form>
</div>

<div class="dashboard">
    <p class="who animated rubberBand">Who ?</p>
    <p class="what animated rubberBand">What ?</p>
</div>

</body>