<?php
if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['genre']) && !empty($_GET['nom'] && !empty($_GET['prenom']))) {
	echo 'Bonjour'."\n". $_GET['prenom']." \n".$_GET['nom']."\n";
	}else{
		include __DIR__.'/../exercise5f/index.php';
	}

?>
