<?php
	
	include('config/config.php');
	
	// Requête SQL
	$sql = "INSERT INTO minetable
		SET 
			nameObject 	= :nameObject,
			namePerson 	= :namePerson,
			photoObject = :photoObject,
			photoPerson = :photoPerson
		";

	$req = $db->prepare($sql);

	$req->execute(array(
		':nameObject'	=>	$_POST['nameObject'],
		':namePerson'	=>	$_POST['namePerson'],
		':photoObject'	=>	$_POST['photoObject'],
		':photoPerson'	=>	$_POST['photoPerson']
	));

	header('Location: dashboard.php');
	
	
	
	
	
	
	
?>