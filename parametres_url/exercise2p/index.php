<?php
if(isset($_GET['age'] )) {
	echo 'Bonjour vous avez '.$_GET['age']."ans";
}else{
	echo'Il faut renseigner votre âge !';
}



?>
