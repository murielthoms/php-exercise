<?php
if (isset($_GET['langage']) && isset($_GET['serveur'])) {

	echo "langage :"." ".$_GET['langage'].","."serveur :"." ".$_GET['serveur'];
}else{
	echo 'erreur serveur ou langage';
}


?>
