<?php
if(isset($_GET['dateDebut']) && isset($_GET['dateFin'])) {

	echo "date de début :"." ".$_GET['dateDebut']." "."et date de fin :".$_GET['dateFin'];
}else{
	echo'Il faut entrer une date !';
}

?>