<body>
<div class="container-fluid">
<div class="col-xs-5">
	<a href="dashboard.php" class="btn btn-default btn-lg btn-block" role="button">Retour</a>
</div>
<div class="col-xs-5 col-xs-offset-1">
	<btn class="btn btn-danger btn-lg btn-block" role="button" id="suppresion">Suppresion</btn>
	<btn class="btn btn-primary btn-lg" role="button" id="validate">OK</btn>
</div>
<?php
foreach ($objects as $object) {
	$date = substr($object['created_at'], 0, 10);
	$daterefine = str_replace('-', '/', $date);
	echo '
		<div class="row object-display">
			<div class="col-xs-12">
				<div class="col-xs-10 col-xs-offset-10 delete-object">
					<div class="col-xs-2 delet" style="margin-top:30px;margin-left:-1%">
						<form method="POST" action="delete.php">
							<input type="hidden" name="deleting" value="'.$object['ID'].'">
							<button type="submit" class="btn btn-danger btn-block" style="padding-top:15px;position:absolute;margin-top:30%;">
								<span class="glyphicon glyphicon-trash" aria-hidden="true" style="font-size:200%"></span>
							</button>
						</form>
					</div>
				</div>
				<br>
				<div class="col-xs-5">
					<img src="image/'.$object['photoObject'].'" alt="objet" class="img-responsive">
				</div>
				<div class="col-xs-5 col-xs-offset-1">
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