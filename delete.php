<?php 
require 'config/config.php';
require('model/functions.fn.php');

if (isset($_POST)) {
	if (isset($_POST['deleting'])) {
		deleteElement($db, $_POST['deleting']);
		echo '<div id="allowDelete"></div>';
		$objects = '';
		$objects = selectSharedObjects($db);
	}
}

$objects = selectSharedObjects($db);

require 'template/_header.php';
require 'template/sharedobjects.php';
require 'template/_footer.php';
?>