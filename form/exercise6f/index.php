<?php
if  !empty($_GET) || !empty($_POST) {
	echo 'Bonjour'."\n". $_GET['prenom']." \n".$_GET['nom']."\n".$_GET['genre'];
	}else{
		include __DIR__.'/../exercise5f/index.php';
	}

?>
