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

                <btn class="btn" role="button" id="suppresion"><i class="fa fa-times fa-2x"></i></btn>
                <btn class="btn btn-primary btn-lg" role="button" id="validate">OK</btn>

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
			<div class="col-xs-12">
				<div class="col-xs-10 col-xs-offset-10 delete-object">
					<div class="col-xs-2 delet" style="margin-top:30px;">
						<form method="POST" action="delete.php">
							<input type="hidden" name="deleting" value="'.$object['ID'].'">
							<button type="submit" class="btn btn-danger btn-block" style="padding-top:15px;position:absolute;margin-top:30%;min-width:200%;">
								<span class="glyphicon glyphicon-trash" aria-hidden="true" style="font-size:200%"></span>
							</button>
						</form>
					</div>
				</div>
				<br>
				<div class="col-xs-5">
				<p class="what-ok">What?</p>
					<img class="photoobjet" src="image/'.$object['photoObject'].'" alt="objet" class="img-responsive">

				</div>
				<div class="col-xs-5 col-xs-offset-1">
				<p class="what-ok">Who?</p>
					<img class="photopersonne" src="image/'.$object['photoPerson'].'" alt="objet" class="img-responsive">
				</div>
				<br>
				<p class="cki">Mathieu Payta</p>
				<p class="ckoi">Manette PS3</p>

				<p class="col-xs-12 text-center"><small>Prêté le '.$daterefine.'</small></p>

                <div class="col-xs-11"></div>

                <div class="col-xs-1 ">
                    <a href="" alt="Modifier">
                    <i class="fa fa-pencil fa-2x" ></i>
                    </a>
                    <a href=""  alt="Alerter machin">
                    <i class="fa fa-bell-o fa-2x animated tada infinite" ></i>
                    </a>
                </div>


			</div>
			<div class="separation"></div>
		</div>


	';
    }
    ?>
</div>
</body>

