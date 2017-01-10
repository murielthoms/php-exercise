<?php
if (isset($_get['nom']) AND isset($_get['prenom'])) {
	echo 'Bonjour'. $_get['prenom']." ".$_get['nom']."!";
	}else{
		echo 'Il faut renseigner un nom et un prenom!';
	}

?>