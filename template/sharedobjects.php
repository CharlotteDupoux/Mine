<body>
<div class="container-fluid">
<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
      	</button>
		<img class="logo-header center-block" src="image/logo_small.png">
		<div class="col-xs-12">
			<btn class="btn btn-danger btn-lg btn-block" role="button" id="suppresion">Suppresion</btn>
			<btn class="btn btn-primary btn-lg" role="button" id="validate">OK</btn>
		</div>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="dashboard.php">Retour</a></li>
        <li><a href="facebookconnect/logout.php">Se déconnecter</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
    <?php if (isset($_SESSION['FBID'])) { ?>
      <img src="https://graph.facebook.com/<?php echo $_SESSION['FBID'] ?>/picture" alt="<?php $_SESSION['FULLNAME'] ?>" style="position: absolute; top: 0; right: 5px">
    <?php };?>
</nav>
<?php
foreach ($objects as $object) {
	$date = substr($object['created_at'], 0, 10);
	$daterefine = str_replace('-', '/', $date);
	echo '
		<div class="row object-display">
			<div class="col-xs-12" style="margin-top:15px">
				<div class="col-xs-12 delete-object">
					<div class="col-xs-1 col-xs-offset-10 delet">
						<form method="POST" action="delete.php">
							<input type="hidden" name="deleting" value="'.$object['ID'].'">
							<button type="submit" class="btn btn-danger btn-block" style="position:absolute;min-width:200%;">
								<span class="glyphicon glyphicon-trash" aria-hidden="true" style="font-size:200%"></span>
							</button>
						</form>
					</div>
				</div>
				<div class="col-xs-5">
					<img src="image/'.$object['photoObject'].'" alt="objet" class="img-responsive">
				</div>
				<div class="col-xs-5">
					<img src="image/'.$object['photoPerson'].'" alt="objet" class="img-responsive">
				</div>
				<br>
				<p class="col-xs-12 text-center"><small>prêté le '.$daterefine.'</small></p>
			</div>
		</div>
	';
}
?>
</div>
</body>