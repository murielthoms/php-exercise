<?php
if (isset($_GET['nom']) AND isset($_GET['prenom'])) {
	echo 'Bonjour'. $_GET['prenom']." ".$_GET['nom']."!";
	}else{
		echo 'Il faut renseigner un nom et un prenom!';
	}

?>